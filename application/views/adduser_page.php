<span class="title_post">Add Account</span>

<span class="body_post">

<fieldset>
<legend>Personal Information</legend>
<?php
   
echo form_open('account/create_user');

echo form_input('firstname', 'First Name');
echo form_input('lastname', 'Last Name');
echo form_input('email', 'Email Address');
?>
</fieldset>

<fieldset>
<legend>Login Info</legend>
<?php
echo form_input('username', 'Username');
echo form_password('password', 'Password');

$options = array(
                  '0'  => 'FORMDEV Head',
                  '1'    => 'Student Head',
                  '2'   => 'BS Leader',
                  '3' => 'Communications Committee Head',
                  '4'  => 'Instructional Materials Committee Head',
                  '5'    => 'Outreach Committee Head',
                  '6'   => 'Class Facilitator',
                  '7' => 'Communications Committee',
                  '8'  => 'Instructional Materials Committee',
                  '9'    => 'Outreach Committee',
				  '10' => 'Auxillary',
                  'a'  => 'Admin',
                  'd'   => 'Developer',
                  'm'    => 'Moderator'				  
                );

echo form_dropdown('role', $options, '7');

echo form_submit('submit', 'Create Acccount');
?>

<?php echo validation_errors('<p class="error">'); ?>
</fieldset>

<?php

if($message!="")
echo $message;
?>

</span>
