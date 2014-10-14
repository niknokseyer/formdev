<script>
    $(document).ready(function () {
	//Role Select on Change
	$('select.role_dropdown').change(function () {
		$('div.roles').load('/facilitator/perms/' + $('select.role_dropdown').val(),function(){
                       return false;
                   });
    });
	
		//Role Select on Load
	$('select.role_dropdown').ready(function () {
		$('div.roles').load('/facilitator/perms/' + $('select.role_dropdown').val(),function(){
                       return false;
                   });
    });
	
 });	
</script>

<strong>Manage Roles</strong>
	</br>
	<table width='100%'>
<tr>
<td>
<?php echo form_label('Role:','role_list');?></td><td><?php echo form_dropdown('role_list',$role,'11', 'class="role_dropdown"');?> <?php echo form_fieldset_close();?> <p class="test"></p><td>
</tr>
<tr>
<td>
Permissions:</td>
<td>
<div class="roles">
</div>
</td>
</tr>
</table>