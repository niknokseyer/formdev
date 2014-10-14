<script>
$(document).ready(function () {
  $('#add-username').blur(function() {                           
    var username = $('#add-username').val();
    $.post('<?php echo base_url(); ?>account/username_taken',
      { 'username':username },
      function(result) {
        $('#username_error').html('');    
        if (result) {
          $('#username_error').html('username already taken');
        }
      }
    );
  });
 });	  
  </script>

<strong>Add Facilitator</strong>
	</br>
	<table width='100%'>
<?php echo form_open('facilitator/add');?>
<tr>
<td><strong>Basic Profile</strong></td>
</tr>
<tr>
<td><?php echo form_label('First Name:', 'firstname');?></td> <td><?php echo form_input('firstname',set_value('firstname')); ?></td>
</tr>
<tr>
<td><?php echo form_label('Last Name:', 'lastname');?></td> <td><?php echo form_input('lastname',set_value('lastname')); ?></td>
</tr>
<tr>
<td><strong>Account Details</strong></td>
</tr>
<tr>
<td><?php echo form_label('Username:', 'username');?></td> <td><?php echo form_input('username',set_value('username'),'id="add-username"'); ?>&nbsp;<span id="username_error"></span></td>
</tr>
<tr>
<td><?php echo form_label('E-mail:', 'email');?></td> <td><?php echo form_input('email',set_value('email')); ?></td>
</tr>
<tr>
<?php $password = random_string('alnum', 8);?>
<?php echo form_hidden('password', $password);?>
<td>Password: </td> <td><?php echo $password;?></td>
</tr>
<tr>
<td>
<?php echo form_label('Batch:','batch_list');?></td><td><?php echo form_dropdown('batch_list',$batch);?> <?php echo form_fieldset_close();?><td>
</tr>
<?php $term = array(
                  '1'  => '1st Term',
                  '2'    => '2nd Term',
                  '3'   => '3rd Term'
                );
?>
<tr>
<td>
<?php echo form_label('Term:','term_list');?></td><td><?php echo form_dropdown('term_list',$term);?> <?php echo form_fieldset_close();?><td>
</tr>
<tr>
<td>
<?php echo form_label('Role:','role_list');?></td><td><?php echo form_dropdown('role_list',$role,'11');?> <?php echo form_fieldset_close();?><td>
</tr>
<tr>
<tr>
<?php $options = array(
				'yes' => 'Active Facilitator',
				'no' => 'Alumni Facilitator',
);
?>
<td><?php echo form_label('Facilitator Status:', 'current_faci');?></td> <td><?php echo form_dropdown('current_faci', $options); ?></td>
</tr>
<tr>
<td colspan='2' width='100%' align='center'><input id="add_faci_submit" type="submit" value="Add" /></td>
</tr>
</table>
</form>
<span class='error'>
<?php echo validation_errors(); ?>	
</span>