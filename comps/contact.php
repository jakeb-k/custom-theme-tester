<div class="contact-container">
<form id="contact" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">    
<input type="hidden" name="action" value="contact_form">
    
<h1>Get a Free Quote Today!</h1>
    <div class="cInput">
        <label for="name">NAME:</label>
        <input type="text" name="name" id="name" />
    </div>
    <div class="cInput">
        <label for="email">EMAIL:</label>
        <input type="text" name="email" id="email" />
        
        <?php if (isset($_GET['error']) && $_GET['error'] == 'email') {
            echo '<div class="error-message">Error: Please enter a valid email address.</div>';
        } ?>
    </div> 
    <div class="cInput">
        <label for="note">JOB DESCRIPTION:</label>
        <textarea name="note" id="note"></textarea>
    </div>
    <div class="subBtn">
        <button type="submit">SEND!</button>
    </div>
    
</form>

</div>

