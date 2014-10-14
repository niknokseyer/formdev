<div class="content">
	<h1><?php echo $title ?></h1>
	<?php if(isset($pk_announcements_update) && $pk_announcements_update == true ||isset($pk_reflections_update) && $pk_announcements_update == true): ?>
		<?php echo anchor("$controller/add_form/admin",'Add'); ?>
	<?php endif; ?>
	<table>
		<thead>
			<?php foreach($fields as $field_name => $field_display): ?>
			<th <?php if ($sort_by == $field_name) echo "class=\"sort_$sort_order\"" ?>>
				<?php echo anchor("$controller/admin/$field_name/".
				(($sort_order == 'asc' && $sort_by == $field_name) ? 'desc' : 'asc'),
				$field_display); ?>
			</th>
			<?php endforeach; ?>
		</thead>
		
		<tbody>
			<?php foreach($articles as $a): ?>
			<tr>
				<?php foreach($fields as $field_name => $field_display): ?>
				<td>
					<?php echo $a->$field_name; ?>
					<?php if($field_name == 'title'): ?>
					<aside class="admin-actions">
						<ul>
							<li><?php echo anchor("$controller/article/$a->url_title",'View'); ?></li>
							<li><?php echo anchor("$controller/update_form/$a->id/admin",'Update'); ?></li>
							<li><?php echo anchor("$controller/delete_admin/$a->id",'Delete'); ?></li>
						</ul>
					</aside>
					<?php endif; ?>
				</td>
				<?php endforeach; ?>
			</tr>
			<?php endforeach; ?>			
		</tbody>
	</table>
	<?php if (strlen($pagination)): ?>
	<div>
		Pages: <?php echo $pagination; ?>
	</div>
	<?php endif; ?>
	
</div>