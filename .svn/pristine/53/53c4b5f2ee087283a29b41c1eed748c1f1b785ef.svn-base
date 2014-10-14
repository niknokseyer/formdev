<?php echo form_open('facilitator/roles');?>
<table>
<tr>
<input type="hidden" name="idrole" value="<?php echo $idrole; ?>" />
<?php $ctr=0;?>
<?php foreach($permissions as $p):?>
<?php $checked = "";?>
<?php if(array_key_exists($p->perm_key,$roleperms)):?>
<?php if($roleperms[$p->perm_key]['value']==1) $checked = "checked='checked'"; ?>
<?php endif; ?>
<?php if($ctr%3==0) echo '<tr>';?>
<td>
<input type="checkbox" name="<?php echo underscore($p->perm_name);?>" value="<?php echo $p->idperm; ?>" <?php echo $checked; ?>"/><?php echo $p->perm_name;?><br />
<?php $ctr++;?>
</td>
<?php if($ctr%3==0) echo '</tr>';?>
<?php endforeach; ?>      
</tr>
<tr>
<td colspan='3' width='100%' align='center'><input type="submit" value="Update" /></td>
</tr>
</table>
<?php echo form_close(); ?>