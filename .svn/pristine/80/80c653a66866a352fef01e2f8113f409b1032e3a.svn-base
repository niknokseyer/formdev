<script>
$(document).ready(function () {
	
	$(function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: "yy-mm-dd",
			yearRange: "c-50,c"
		});
	});
	
	$('span.title_post').ready(function () {
	$('table.my_profile').toggle(false);
	$('table.my_account').toggle(false);
	});
	
	$('div.edit_account').click(function () {
		$('table.my_profile').toggle(false);
		$('table.my_account').toggle('slow');
	});
	
	$('div.edit_profile').click(function () {
		$('table.my_profile').toggle('slow');
		$('table.my_account').toggle(false);
	});
	
	$('div.edit_familytree').click(function () {
		window.location = "<?php echo base_url().'facilitator/edit_family_tree/account/'.$info->iduser; ?>";
	});
	
 });
</script>



<span class="title_post">My Account</span>

</br>

<?php if(isset($info->facebook) && $info->facebook!=null): ?>
<div class="fb-facepile" data-size="small" data-max-rows="1" data-width="630" style="overflow:hidden; height:50px;"></div>
<br />
<?php else: ?>
<br />
<div class="fb-login-button" data-show-faces="true" data-width="630" data-max-rows="1" scope="email,user_birthday,user_hometown,user_status">Link to Facebook</div>
<?php endif; ?>

<div class="container"> 
	<?php if(isset($is_logged_in) && $is_logged_in == true):?>
	<div id="left" class="edit_account"><button class="readmore_button">Edit Account</button></div>
	<div id="left" class="edit_profile"><button class="readmore_button">Edit Profile</button></div>
	<div id="left" class="edit_familytree"><button class="readmore_button">Edit Family Tree</button></div>
	<?php endif; ?>	
	<div style="clear:both;"></div> 
</div>

<div class="notice"><?php echo $notice;?></div>

<span class="body_post">

<strong class="my_label"></strong>
<table width='100%' class='my_profile'>

<tr>
<td><strong>Profile</strong>
</td>
</tr>
<?php echo form_open_multipart('account/updateprofile/'.$info->idprofile); ?>
<input type="hidden" name="iduser" value="<?php echo $info->iduser; ?>" />
<input type="hidden" name="batch" value="<?php echo $info->batch; ?>" />
<input type="hidden" name="term" value="<?php echo $info->term; ?>" />
<td>Batch:</td><td>FORMDEV 
			<?php if($info->term==1) echo $info->batch.'a'; ?>
			<?php if($info->term==2) echo $info->batch.'b';?>
			<?php if($info->term==3) echo $info->batch.'c'?>
</tr> 
<tr>
<td><?php echo form_label('First Name:', 'firstname');?></td> <td><?php echo form_input('firstname', $info->firstname); ?></td>
</tr>
<tr>
<td><?php echo form_label('Last Name:', 'lastname');?></td> <td><?php echo form_input('lastname', $info->lastname); ?></td>
</tr>
<tr>
<td><?php echo form_label('Nickname:', 'nickname');?></td> <td><?php echo form_input('nickname', $info->nickname); ?></td>
</tr>
<tr>
<td><?php echo form_label('Birthday:', 'birthday');?></td> <td><?php echo form_input('birthday', $info->birthday, 'id="datepicker"'); ?></td>
</tr>
<tr>
<td><?php echo form_label('Course:', 'course');?></td> <td><?php echo form_input('course', $info->course); ?></td>
</tr>
<tr>
<td><?php echo form_label('Hometown:', 'hometown');?></td> <td><?php echo form_input('hometown', $info->hometown); ?></td>
</tr>
<tr>
<td><?php echo form_label('High School:', 'highschool');?></td> <td><?php echo form_input('highschool', $info->highschool); ?></td>
</tr>
<tr>
<td><?php echo form_label('Hobbies / Interests:', 'hobbies_interests');?></td> <td><?php echo form_textarea('hobbies_interests', $info->hobbies_interests); ?></td>
</tr>
<tr>
<td><?php echo form_label('Motto:', 'motto');?></td> <td><?php echo form_textarea('motto', $info->motto); ?></td>
</tr>
<tr>
<td><?php echo form_label('Favorite Verse:', 'favorite_verse');?></td> <td><?php echo form_textarea('favorite_verse', $info->favorite_verse); ?></td>
</tr>
<tr>
<td><?php echo form_label('Random Stuff:', 'random_stuff');?></td> <td><?php echo form_textarea('random_stuff', $info->random_stuff); ?></td>
</tr>
<tr>
<td><?php echo form_label('FORMDEV for me is:', 'formdev_is');?></td> <td><?php echo form_textarea('formdev_is', $info->formdev_is); ?></td>
</tr>
<tr>
<td><?php echo form_label('Contact Number:', 'contact');?></td> <td><?php echo form_input('contact', $info->contact); ?></td>
</tr>
<tr>
<td><?php echo form_label('Expected Term of Graduation:', 'expected_term_graduation');?></td> <td><?php echo form_input('expected_term_graduation', $info->expected_term_graduation); ?></td>
</tr>
<tr>
<?php $options = array(
				'yes' => 'Active Facilitator',
				'no' => 'Alumni Facilitator',
);
?>
<td><?php echo form_label('Facilitator Status:', 'current_faci');?></td> <td><?php echo form_dropdown('current_faci', $options, $info->current_faci); ?></td>
</tr>
<tr>
<td colspan='2' width='100%' align='center'><input type="submit" value="Update" /></td>
</tr>
</table>
</form>

<table width='100%' class='my_account'>
<tr>
<td><strong>Account</strong>
</td>
</tr>
<tr>
<td>Username:</td><td><?php echo $info->username;?></td>
</tr>
<?php echo form_open('account/updateaccount/'.$info->iduser, 'id="account_form"');?>
<tr>
<td><?php echo form_label('E-mail:', 'email');?></td> <td><?php echo form_input('email', $info->email);?></td>
</tr>
<tr>
<td><?php echo form_label('Current Password:', 'curpassword');?></td> <td><?php echo form_password('curpassword','','class="validate[required] text-input"'); ?></td>
</tr>
<tr>
<td><?php echo form_label('New Password:', 'newpassword');?></td> <td><?php echo form_password('newpassword'); ?></td>
</tr>
<tr>
<td><?php echo form_label('Confirm Password:', 'confirmpassword');?></td> <td><?php echo form_password('confirmpassword', '' ,'id="confirm_pass"'); ?> <div id="confirm_notice"></div> </td>
</tr>
<tr>
<td colspan='2' width='100%' align='center'><input type="submit" value="Update" /></td>
</tr>
</table>
</form>

</span>