<span class="title_post">Manage Accounts</span>

<span class="body_post">
<table width='100%'>
<tr>
<td align='center'><?php echo anchor('facilitator/manage/add','Add Facilitator', 'class="admin_menu"');?></td>
<td align='center'><?php echo anchor('facilitator/manage/edit','Edit Facilitator', 'class="admin_menu"');?></td>
<td align='center'><?php echo anchor('facilitator/manage/batch','Manage Batch', 'class="admin_menu"');?></td>
<td align='center'><?php echo anchor('facilitator/manage/roles','Manage Roles', 'class="admin_menu"');?></td>
</tr>
</table>

	</br>	
    <?php if($function=='add'):?>
	<?php $this->load->view('facilitator_add', $infos); ?>
	<?php endif; ?>
	<?php if($function=='edit'):?>
	<?php $this->load->view('facilitator_edit', $infos); ?>
	<?php endif; ?>
	<?php if($function=='batch'):?>
	<?php $this->load->view('manage_batches', $infos); ?>
	<?php endif; ?>
	<?php if($function=='roles'):?>
	<?php $this->load->view('manage_roles', $infos); ?>
	<?php endif; ?>
	
</span>