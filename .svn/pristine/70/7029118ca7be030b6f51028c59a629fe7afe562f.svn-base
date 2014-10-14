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
	
		$('div.faci_edit').ready(function () {
	
		$('#edit_profile_container').toggle(false);
		$('#edit_account_container').toggle(false);	
	
	});
	
		$('div.reset_password').mouseover(function () {
		$(this).css('cursor', 'pointer');
	});

		//User Select on Change
	$('div.reset_password').click(function () {
		$('div.reset_password').load('/account/resetpass/' + $('select.user_dropdown').val(),function(){
                       alert('Generated password sent to user');
					   return false;
                   });		   
    });
	
});	
</script>

<div id='edit_profile_container'>
<?php echo form_open_multipart('account/updateprofile/'.$userinfo->idprofile); ?>
<table width='100%'>
<input type="hidden" name="iduser" value="<?php echo $userinfo->iduser; ?>" />
<tr>
<td>
<?php echo form_label('Role:','role_list');?></td><td><?php echo form_dropdown('role_list',$role,$userrole);?> <?php echo form_fieldset_close();?><td>
</tr>
<tr>
<td>
<?php echo form_label('Batch:','batch');?></td><td><?php echo form_dropdown('batch',$batch,$userinfo->batch);?> <?php echo form_fieldset_close();?><td>
</tr>
<?php $term = array(
                  '1'  => '1st Term',
                  '2'    => '2nd Term',
                  '3'   => '3rd Term'
                );
?>
<tr>
<td>
<?php echo form_label('Term:','term');?></td><td><?php echo form_dropdown('term',$term,$userinfo->term);?> <?php echo form_fieldset_close();?><td>
</tr>
<tr>
<td><?php echo form_label('First Name:', 'firstname');?></td> <td><?php echo form_input('firstname', $userinfo->firstname); ?></td>
</tr>
<tr>
<td><?php echo form_label('Last Name:', 'lastname');?></td> <td><?php echo form_input('lastname', $userinfo->lastname); ?></td>
</tr>
<tr>
<td><?php echo form_label('Nickname:', 'nickname');?></td> <td><?php echo form_input('nickname', $userinfo->nickname); ?></td>
</tr>
<tr>
<td><?php echo form_label('Birthday:', 'birthday');?></td> <td><?php echo form_input('birthday', $userinfo->birthday, 'id="datepicker"'); ?></td>
</tr>
<tr>
<td><?php echo form_label('Course:', 'course');?></td> <td><?php echo form_input('course', $userinfo->course); ?></td>
</tr>
<tr>
<td><?php echo form_label('Hometown:', 'hometown');?></td> <td><?php echo form_input('hometown', $userinfo->hometown); ?></td>
</tr>
<tr>
<td><?php echo form_label('High School:', 'highschool');?></td> <td><?php echo form_input('highschool', $userinfo->highschool); ?></td>
</tr>
<tr>
<td><?php echo form_label('Hobbies / Interests:', 'hobbies_interests');?></td> <td><?php echo form_textarea('hobbies_interests', $userinfo->hobbies_interests); ?></td>
</tr>
<tr>
<td><?php echo form_label('Motto:', 'motto');?></td> <td><?php echo form_textarea('motto', $userinfo->motto); ?></td>
</tr>
<tr>
<td><?php echo form_label('Favorite Verse:', 'favorite_verse');?></td> <td><?php echo form_textarea('favorite_verse', $userinfo->favorite_verse); ?></td>
</tr>
<tr>
<td><?php echo form_label('Random Stuff:', 'random_stuff');?></td> <td><?php echo form_textarea('random_stuff', $userinfo->random_stuff); ?></td>
</tr>
<tr>
<td><?php echo form_label('FORMDEV for me is:', 'formdev_is');?></td> <td><?php echo form_textarea('formdev_is', $userinfo->formdev_is); ?></td>
</tr>
<tr>
<td><?php echo form_label('Contact Number:', 'contact');?></td> <td><?php echo form_input('contact', $userinfo->contact); ?></td>
</tr>
<tr>
<td><?php echo form_label('Expected Term of Graduation:', 'expected_term_graduation');?></td> <td><?php echo form_input('expected_term_graduation', $userinfo->expected_term_graduation); ?></td>
</tr>
<tr>
<?php $options = array(
				'yes' => 'Active Facilitator',
				'no' => 'Alumni Facilitator',
);
?>
<td><?php echo form_label('Facilitator Status:', 'current_faci');?></td> <td><?php echo form_dropdown('current_faci', $options, $userinfo->current_faci); ?></td>
</tr>
<tr>
<td colspan='2' width='100%' align='center'><input type="submit" value="Update" /></td>
</tr>
</table>
</form>
</div>
<div id='edit_account_container'>
<?php echo form_open('account/updateemail/'.$userinfo->iduser);?>
<table width='100%'>
<tr>
<td><strong>Account</strong>
</td>
</tr>
<tr>
<td>Username:</td><td><?php echo $userinfo->username;?></td>
</tr>
<tr>
<td><?php echo form_label('E-mail:', 'email');?></td> <td><?php echo form_input('email', $userinfo->email); ?></td>
</tr>
<tr>
<td></td> <td><div class='reset_password'>Reset Password</div></td>
</tr>
<tr>
<td colspan='2' width='100%' align='center'><input type="submit" value="Update" /></td>
</tr>
</table>
</form>
</div>