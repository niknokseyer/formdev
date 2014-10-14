<script>
	$(document).ready(function ()
	{

		//User Select on Change
		$('select.user_dropdown').change(function () {
			$('div.faci_edit').load('<?php echo base_url();?>facilitator/account/' + $('select.user_dropdown').val(),function(){
				return false;
			});
		});

		//User Select on Load
		$('select.user_dropdown').ready(function () {
			$('div.faci_edit').load('<?php echo base_url();?>facilitator/account/' + $('select.user_dropdown').val(),function(){
				return false;
			});
		});

		$('div.edit_account').click(function () {
			$('#edit_profile_container').toggle(false);
			$('#edit_account_container').toggle('slow');
		});

		$('div.edit_profile').click(function () {
			$('#edit_profile_container').toggle('slow');
			$('#edit_account_container').toggle(false);
		});

		$('div.edit_familytree').click(function () {
			window.location = "<?php echo base_url().'facilitator/edit_family_tree/manage/'; ?>"+$('select.user_dropdown').val();
		});
	});
</script>

<strong>Facilitator</strong>
</br>
<?php echo form_label('Faci: ','user_list');?></td><td><?php echo form_dropdown('user_list',$user_list,'', 'class="user_dropdown"');?> <?php echo form_fieldset_close();?><td>

<div class="container"> 
	<?php if(isset($pk_accounts) && $pk_accounts !=null):?>
	<div id="left" class="edit_account"><button class="readmore_button">Edit Account</button></div>
	<div id="left" class="edit_profile"><button class="readmore_button">Edit Profile</button></div>
	<div id="left" class="edit_familytree"><button class="readmore_button">Edit Family Tree</button></div>
	<?php endif; ?>	
	<div style="clear:both;"></div> 
</div>

<div class="faci_edit">
</div>