<?php 

function enqueue_custom_styles() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

function register_custom_menu() {
    register_nav_menu('navMenu', __('Nav Menu', 'your-theme-textdomain'));
}
add_action('init', 'register_custom_menu');


function enqueue_custom_scripts() {
    wp_enqueue_script('jquery'); // WordPress includes jQuery by default, so we just enqueue it.
    wp_enqueue_script('custom', get_template_directory_uri() . '/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// Configure WordPress to use Mailtrap's SMTP server for emails
function configure_mailtrap_smtp($phpmailer) {
    $phpmailer->isSMTP(); // Set mailer to use SMTP
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io'; // Specify main and backup SMTP servers
    $phpmailer->SMTPAuth = true; // Enable SMTP authentication
    $phpmailer->Username = 'eb412e9885ec22'; // SMTP username from Mailtrap
    $phpmailer->Password = '12f900ff6278df'; // SMTP password from Mailtrap
    $phpmailer->Port = 2525; // TCP port to connect to
}

// Hook into 'phpmailer_init' to apply the SMTP settings
add_action('phpmailer_init', 'configure_mailtrap_smtp');

// Handle the form submission for both authenticated and non-authenticated users
add_action('admin_post_nopriv_contact_form', 'handle_contact_form');
add_action('admin_post_contact_form', 'handle_contact_form');

// Process the form submission
function handle_contact_form() {
    // Start the session to store error messages if not already started
    if (!session_id()) {
        session_start();
    }
    error_log('Checking for error parameter: ' . var_export(isset($_GET['error']), true));
    // Validate the email address
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error_message'] = 'Please enter a valid email address.';
        wp_redirect(home_url('/?error=email'));
        exit;
    }
    
    // Sanitize form input
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $note = sanitize_textarea_field($_POST['note']);
    
    // Prepare the email content
    $to = 'jk_web_dev@outlook.com'; // Your email address
    $subject = 'New Message';
    $headers = array('Content-Type: text/html; charset=UTF-8', 'From: ' . $email);
    $body = "Name: $name\nEmail: $email\nNote: $note";

    // Attempt to send the email
    if (wp_mail($to, $subject, $body, $headers)) {
        $redirect_url = home_url('/?submission=success');
        wp_redirect($redirect_url);
        exit;
    } else {
        $redirect_url = home_url('/?submission=failure');
        wp_redirect($redirect_url);
        exit;
    }
}


?> 