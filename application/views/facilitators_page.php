<script>
    $(document).ready(function () {
	
	$('li.current').ready(function (){
		var i;
		for(i = 1; i < <?php echo count($batches); ?> + 1; i++)
		{
			$('div.alumni_'+i).toggle(false);
			if($('#batch-ctrls-'+i).attr('name') == 'alumni')
				$('#batch-ctrls-'+i).hide();
		}
	});
	
	$('span.faci').mouseover(function () {
		$(this).css('cursor', 'pointer');
		$(this).css('text-decoration', 'underline');
	});		
	
	$('span.faci').mouseleave(function () {
		$(this).css('text-decoration', 'none');
	});
	
	$('span.batch_select').mouseover(function () {
		$(this).css('cursor', 'pointer');
		$(this).css('text-decoration', 'underline');
	});
	
	$('span.batch_select').mouseleave(function () {
		$(this).css('text-decoration', 'none');
	});
	
	$('span.batch_slct_ctrl').mouseover(function () {
		$(this).css('cursor', 'pointer');
		$(this).css('text-decoration', 'underline');
	});
	
	$('span.batch_slct_ctrl').mouseleave(function () {
		$(this).css('text-decoration', 'none');
	});
	
	$('span.faci').click(function () {
		if($('span.faci').html() != "[+]")
		{
			var i;
			for(i = 1; i < <?php echo count($batches); ?> + 1; i++)
				if($('span.faci').html() != "Current Facilitators")
					$('div.alumni_'+i).hide();
				else
					$('div.alumni_'+i).show();
			if($('span.faci').html() != "All Facilitators")
					$('.mixed_batch').show('blind');
			if($('span.faci').html() == "All Facilitators")
			{
				$('span.faci').html("[+]");
				$('span.faci1').html("");
				$('span.faci').css("font-style","normal");
				$('span.faci').css("text-decoration","none");
				$('.alumni_batch').hide('blind');
				$('.mixed_batch').hide('blind');
				$('.batch-ctrls').hide();
				$('.batch_ctrl_cur').css('color','#009900');
				$('.batch_ctrl_all').css('color','#454646');
			}
			else
			{
				$('span.faci').html("All Facilitators");
				$('.alumni_batch').show('blind');
				$('.batch-ctrls').show();
				$('.batch_ctrl_cur').css('color','#454646');
				$('.batch_ctrl_all').css('color','#009900');
			}
		}
		else
		{
			var i;
			for(i = 1; i < <?php echo count($batches); ?> + 1; i++)
				$('div.alumni_'+i).hide();
			$('.alumni_batch').hide('blind');
			$('span.faci').html("Current Facilitators");
			$('span.faci1').html("Showing: ");
			$('span.faci').css("text-decoration","underline");
			$('.mixed_batch').show('blind');
			for(i = 1; i < <?php echo count($batches) + 1; ?>; i++)
			{
				if($('#batch-ctrls-'+i).attr('name') == 'alumni')
					$('#batch-ctrls-'+i).hide();
				else
					$('#batch-ctrls-'+i).show();
			}
			$('.batch_ctrl_cur').css('color','#009900');
			$('.batch_ctrl_all').css('color','#454646');
		}
	});		
	
	$('span.batch_select').click(function () {
		$('#batch_select_ctrls1').toggle('blind');
	});
	
	$('div.batch_list').mouseover(function () {
		$(this).css('cursor', 'pointer');
		$(this).css('background-color', '#efffeb');
	});
	
	$('div.batch_list').mouseleave(function () {
		$(this).css('cursor', 'pointer');
		$(this).css('background-color', '#ffffff');
	});
	
	$('div.batch_ctrl_cur').click(function () {
		var name = $(this).attr("name");
		$('div.alumni_'+name).hide();
		$('#batch_ctrl_cur_'+name).css('color','#009900');
		$('#batch_ctrl_all_'+name).css('color','#454646');
	});
	
	$('div.batch_ctrl_all').click(function () {
		var name = $(this).attr("name");
		$('div.alumni_'+name).show();
		$('#batch_ctrl_cur_'+name).css('color','#454646');
		$('#batch_ctrl_all_'+name).css('color','#009900');
	});
	
	$('span.batch_slct_ctrl').click(function () {
		var name = $(this).attr("name");
		$('#batch_select_ctrls1').hide('blind');
		$('span.batch_slct_ctrl').css('text-decoration','none');
		if($('#batch_select_ctrl').html() != name)
		{
			$('.batch_list_container').hide();
			if(name != 'All')
			{
				$('#show_ctrls').hide();
				$('#batch_list_container_'+name).show();
			}
			else
			{
				$('#show_ctrls').show();
				$('.batch_list_container').show();
			}
			$('#batch_select_ctrl').html(name);
		}
	});
	
	$('div.batch_list').click(function () {
		var name = $(this).attr("name");
		$('#faci_block_'+name).toggle("blind");
		$('#batch-ctrls-'+name).toggle();
	});
	
	$('input.text-input').click(function () {
	if($(this).val()=='Search Facilitator')
	{
	$(this).val('');
	$(this).css('color', '#000000');
	$('#search-button').removeAttr('disabled','');
	}
	else if($(this).val()!='' || $(this).val()!='Search Facilitator')
	{
	$("#filter1").show("blind");
	}
	});
	
	$('input.text-input').blur(function () {
	if($(this).val()=='')
	{
	$(this).val('Search Facilitator');
	$(this).css('color', '#7A7A7A');
	$('#search-button').attr('disabled','disabled');
	}
	//$("#filter1").hide("blind");
	});
	
	
	$("#filter").keyup(function(){
        var filter = " +"+$(this).val() , count = 0;
		var pat = new RegExp(filter, "i");
		var text = "";
		var batch = new Array(), names = new Array();
		var i = 0, k = 0;
		
		$(".faci_list li #faciblock a").each(function(){
			names[k] = ' '+$(this).text();
			k++;
		});
		k = 0;
        $(".faci_list li #faciblock").each(function(){
            if (!pat.test(names[k])) {
                //$(this).toggle(false);
            } else {
                //$(this).toggle(true);
                count++;
				var inner = $(this).html();
				var t = $(this).attr('class');
				if(t == "0")
					batch[i] = "1";
				else
					batch[i] = t;
				text += "<li id=\"livesearch_item\"><div id=\"livesearch_item_container\" onmouseover=\"hover(this)\" onmouseout=\"leave(this)\">"+inner+"</div></li>";
				i++;
            }
			k++;
        });
		
		var numberItems = count;
		var h = count*63;
		if(h > 252)
			$("#filter1").css("height","252");
		else
		{
			if(h==0)
			$("#filter1").css("height",19);
			else
				$("#filter1").css("height",h);
		}
		if($(this).val()!="")
		{	
			if(count == 0)
				$("#filter1").html("<div style=\"width:200; font-family:Segoe UI; text-align:center; font-size:14px; font-weight:normal;\"onmouseover=\"hover(this)\" onmouseout=\"leave(this)\">No Suggestions</div>");
			else
				$("#filter1").html(text);
			if($("#filter1").css("display")=="none")
				$("#filter1").show("blind");			
		}
		else
		{
			$("#filter1").html("");
			if($("#filter1").css("display")!="none")
				$("#filter1").hide("blind");
		}
		var j = 0;
		$("#filter1 li div a div").each(function(){
			$(this).append("<br /><font style=\"float:left; font-size:10px; font-weight:normal;\"><em>Batch "+batch[j]+"</em></font>");
			j++;
        });
		var link = $('#filter1 li div a').attr('href');
		if(link == null)
			$('#live-search').attr('action','');
		else
			$('#live-search').attr('action',link);
    });
 });
	function hover(x){
		x.style.backgroundColor="#efffeb";
	}
	
	function leave(x){
		x.style.backgroundColor="#ffffff";
	}
</script>

<span class="title_post">Facilitators</span> 
	
	<div style="float:right;"> 
	<form id="live-search" action="" class="styled" method="post">
	<div id="live-search-container" style="border:1px solid #ccc;">
	<input type="text" class="text-input" id="filter" value="Search Facilitator" autocomplete="off" style ="color:#7A7A7A; width:200px; border:0; outline: none;"/> 
	<button id="search-button" style="border:0; border-left:1px solid #ccc; background-color:#fff; background-image: url(<?php echo base_url();?>images/search-icon.png); background-repeat:no-repeat; background-position:center center;" >&nbsp;&nbsp;</button>
	<div id="filter1" style="display:none;"></div>
	</div>
	</form>
	</div>
<div style="clear:both"></div>
<div id="batch_select_ctrls" style="float:left;">
	<span class="batch_select1">Batch: </span>
	<span id="batch_select_ctrl" class="batch_select">All</span>
</div>
<div id="show_ctrls" style="float:left;">
	<span>&nbsp;&nbsp;|</span>
	<span class="faci1">Showing: </span>
	<span class="faci">Current Facilitators</span>
</div>
<div style="clear:both"></div>
<div id="batch_select_ctrls1" style="display:none;">
	<div class="batch_select1" style="padding: 0px 5px; float:left; width:213px; white-space:nowrap; overflow-x:auto; overflow-y:hidden;">
		<span class="batch_slct_ctrl" name="All" style="color:#009900; cursor:pointer;">All</span>
		<span> | </span>
		<?php for($i = 1; $i < count($batches); $i++) 
			echo '<span class="batch_slct_ctrl" name="'.$i.'" style="color:#009900; cursor:pointer;">'.$i.'</span> | ';
		?>
		<?php echo '<span class="batch_slct_ctrl" name="'.$i.'" style="color:#009900; cursor:pointer;">'.$i.'</span>'; ?>
	</div>
</div>
<?php if(isset($pk_accounts) && $pk_accounts == true):?>
<div class="container"> 
 <div id="right"><?php echo anchor('facilitator/manage','Manage Facilitators', 'class="admin_menu"');  ?></div> 
</div>
<?php endif; ?>
<br />
<span class="body_post">
<?php $i=0; ?>
<?php  foreach($batches as $b): ?> 
	<div id="batch_list_container_<?php echo $b->batchnumber;?>" class="batch_list_container" name="<?php echo $b->batchnumber;?>">
		<div id="batch_name" class="batch_list" name="<?php echo $b->batchnumber;?>" style="height:38px;">
			<?php echo "$b->batch_label Batch "; if($b->batchnumber == 0) echo "1 "; else echo "$b->batchnumber ";?>
			<font style="font-weight:normal; font-size:14px">
				<?php echo "(S.Y. $b->startyear-$b->endyear)";?>
				<br />
			</font>
			<font style="font-weight:normal; font-size:11px">
				<?php echo "$num_facis[$i]"; if($cur_facis[$i] != 0 && $num_facis[$i] != $cur_facis[$i]) echo " ($cur_facis[$i])"; echo " facilitators"?>
			</font>
		</div>
		<?php if($num_facis[$i] != $cur_facis[$i]): ?>
			<div id="batch-ctrls-<?php echo $b->batchnumber;?>" class="batch-ctrls" name="<?php if($cur_facis[$i]>0) echo 'mixed'; else echo 'alumni';?>">
				<div style="float:left; font-size:8pt;">Showing:&nbsp;</div><div id="batch_ctrl_cur_<?php echo $b->batchnumber;?>" class="batch_ctrl_cur" name="<?php echo $b->batchnumber;?>" style="float:left; cursor:pointer; font-size:8pt; color: #009900">Current Facilitators</div><div style="float:left;">&nbsp;|&nbsp;</div><div id="batch_ctrl_all_<?php echo $b->batchnumber;?>" class="batch_ctrl_all" name="<?php echo $b->batchnumber;?>" style="float:left; cursor:pointer; font-size:8pt; color:#454646">All Facilitators</div>
			</div>
		<?php else: ?>
			<div id="batch-ctrls-<?php echo $b->batchnumber;?>" class="batch-ctrls" name="mixed">
				<div style="float:left; font-size:8pt;">Showing:&nbsp;</div><div style="float:left; font-size:8pt; color:#009900">All Facilitators</div>
			</div>
		<?php endif; ?>
		<?php if($cur_facis[$i]>0): ?>
		<div id="faci_block_<?php echo $b->batchnumber;?>" class="mixed_batch" style="display:block">
		<?php else: ?>
		<div id="faci_block_<?php echo $b->batchnumber;?>" class="alumni_batch" style="display:none">
		<?php endif; ?>
		<ul class="faci_list" id="faci_list_<?php echo $b->batchnumber;?>">
			<?php if(isset($batch_facis[$i])): ?>
				<?php $first=0; $second=0; $third=0; $prev=0;?>
				<?php foreach($batch_facis[$i] as $f): ?>
				<?php if($prev != $f->term): $prev = $f->term?>
				<?php if($f->term==1 && $first==0): ?>
				<div class='faci_term' name='<?php echo $b->batchnumber;?>_<?php echo $f->term;?>'>A (Term 1)</div>
				<?php 
				$first = 1; endif; ?>
				<?php if($f->term==2 && $second==0): ?>
					<?php if($first==0): ?>
					<div class='faci_term' name='<?php echo $b->batchnumber;?>_<?php echo $f->term;?>'>A (Term 2)</div>
					<?php $first = 1; else: ?>
					<div class='faci_term' name='<?php echo $b->batchnumber;?>_<?php echo $f->term;?>'>B (Term 2)</div>
				<?php $second=1; endif; endif; ?>
				<?php if($f->term==3 && $third==0): ?>
					<?php if($second==0): ?>
						<div class='faci_term' name='<?php echo $b->batchnumber;?>_<?php echo $f->term;?>'>B (Term 3)</div>
					<?php $second=1; else: ?>
					<div class='faci_term' name='<?php echo $b->batchnumber;?>_<?php echo $f->term;?>'>C (Term 3)</div>
				<?php $third=1; endif; endif; ?>
				<?php endif; ?>
				<?php $current = "alumni";?>
				<?php if($f->current_faci == "yes") $current="current";?>
					<?php echo '<div class="'.$current.'_'.$b->batchnumber.'"><li class="'.$current.'">'; ?>
					<?php if(!isset($f->facebook) || $f->facebook == null):?>
					<div id="faciblock" class="<?php echo $b->batchnumber?>">
	                    <?php echo anchor("/facilitator/$f->username",'<img id="thumb" src="'.base_url().'images/profile/no-image.png"><div id="faciname_list">'.$f->firstname.' '.$f->lastname.'</div></img>',array('id'=>'facilink','class'=>'faci_profile'))?>
					</div>		
				<?php else: ?>
				<div align="center" id="faciblock" class="<?php echo $b->batchnumber?>">
						<?php echo anchor("/facilitator/$f->username",'<img id="thumb" src="http://graph.facebook.com/'.$f->facebook.'/picture?type=large"><div id="faciname_list">'.$f->firstname.' '.$f->lastname.'</div></img>',array('id'=>'facilink','class'=>'faci_profile'))?>
				</div>
				<?php endif; ?>
					<?php echo "</li></div>"; ?>
				<?php endforeach; ?>
			<?php endif; ?>
			
		</ul></div><hr style="clear:both;"/>
	</div>
	<?php $i++; ?>
<?php endforeach; ?>

</span>