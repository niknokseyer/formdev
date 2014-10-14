<!HTDOCS html>
<html>
<head>
	<title>Facilitators - Admin Page</title>
	<link rel="stylesheet" href="<?php echo base_url();?>css/admin.css" />
</head>
<body>

<header><span>Admin Page</span></header>
<div class="wrapper">
	<aside class="sidebar">
		<ul>
			<li><?php echo anchor('facilitator/add','Add Facilitator');?></li>
			<li><?php echo anchor('facilitator/edit','Edit Facilitator');?></li>
			<li><?php echo anchor('facilitator/delete','Delete Facilitator');?></li>
		</ul>
	</aside>
	
	<div class="content">
		<h2>Edit Facilitator</h2>
		<?php 
		echo form_open('facilitator/edit'); 
		//start select faci fieldset
		echo form_fieldset('Select a Facilitator');
		echo form_label('Facilitator List','faci_list');
		foreach($facis as $f){
			$strfacis[] = "$f->lastname, $f->firstname";
		}
		echo form_dropdown('faci_list',$strfacis,'0','id=faci_list class=data');
		echo form_fieldset_close();
		//end select faci fieldset

		//start faci info fs
		echo form_fieldset('Faci Information');
		echo form_label('ID Number:','idnum');
		echo form_input(array('name'=>'idnum','id'=>'idnum','class'=>'data','value'=>$facis[]));
		echo form_label('First Name:','firstname');
		echo form_input(array('name'=>'firstname','id'=>'firstname','class'=>'data'));
		echo form_label('Last Name:','lastname');
		echo form_input(array('name'=>'lastname','id'=>'lastname','class'=>'data'));
		echo form_fieldset_close();
		//end faci_info fieldset

		// $batches['-1'] = "*Create a New Batch";
		// echo form_label('Batch List:','batch_list');
		// echo form_dropdown('batch_list',$batches,$batchId,'id=batch_list class=data');
		// //start batch_info fieldset
		// echo form_fieldset('Batch Information',array('id'=>'batch_info'));
		// echo form_label('Batch Label:','batch_label');
		// echo form_input(array('name'=>'batch_label','id'=>'batch_label','class'=>'data'));
		// echo form_label('Batch Number:','batchnumber');
		// echo form_input(array('name'=>'batchnumber','id'=>'batchnumber','class'=>'data'));
		// echo form_label('Year Label:','year_label');
		// echo form_input(array('name'=>'year_label','id'=>'year_label','class'=>'data'));
		// echo form_label('Start Year','startyear');
		// echo form_input(array('name'=>'startyear','id'=>'startyear','class'=>'data'));
		// echo form_label('End Year','endyear');
		// echo form_input(array('name'=>'endyear','id'=>'endyear','class'=>'data'));
		// echo form_fieldset_close();
		//end batch fieldset
		echo form_submit('edit_faci','Edit Facilitator');
		?>		
	</div>
</div>
<footer><span>Admin Page</span></footer>
</body>
</html>