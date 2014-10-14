<span class="title_post"></span>

<span class="body_post">

<fieldset>
<legend>Personal Information</legend>
<?php
   
echo form_open('account/create_user');

echo form_input('firstname', set_value('firstname', 'First Name'));
echo form_input('lastname', set_value('lastname', 'Last Name'));
echo form_input('email', set_value('email', 'Email Address'));
?>
</fieldset>

<fieldset>
<legend>Login Info</legend>
<?php
echo form_input('username', set_value('username', 'Username'));
echo form_input('password', set_value('password', 'Password'));
echo form_input('password2', 'Password Confirm');

echo form_submit('submit', 'Create Acccount');
?>

<?php echo validation_errors('<p class="error">'); ?>
</fieldset>

<?php

if($message!="")
echo $message;
?>

</span>
