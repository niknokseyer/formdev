<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<script>
	$(document).ready(function () {
		$('div.verse-box').mouseover(function () {
			$(this).css('opacity', '0.8');
			$(this).css('cursor', 'pointer');
		});
		
		$('div.verse-box').mouseleave(function () {
			$(this).css('opacity', '1');
		});
		
		$('div.verse-box').click(function () {
			window.location = '<?php echo base_url();?>verses/viewVerse/'+$(this).attr('id');
		});
		
		$('div.add_verse').click(function () {
			window.location = "<?php echo base_url().'verses/addVerse'; ?>";
		});
	});
</script>
<style>
	#page_links a:link{
		color:#454646;
	}
	
	#page_links a:visited{
		color:#454646;
	}
	
	#page_links a:hover{
		color:#009900;
	}
</style>
<div class="title_post" style="float:left">Verses</div>
<?php if(isset($pk_verse_add) && $pk_verse_add == true):?>
	<div class="add_verse" style="float:right;"><button class="readmore_button">Add Verse of the Week</button></div>
<?php endif; ?>
<div style="clear:both;"></div><br />
<span class="body_post">
	<div style="font-family:Trebuchet MS;">
		<div id="<?php echo $verse->idverse; ?>" class="verse-box" style="float:left; width:310px; height:310px; background:url('<?php echo $verse->image; ?>'); background-size:200%; background-position-x:50%; background-position-y:20%; color: #fff;">
			<div style="width:300px; height:305px; padding: 5px 0px 0px 10px; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0), 0 0 40px rgba(0, 100, 0, 0.8) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0), 0 0 40px rgba(0, 100, 0, 0.8) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0), 0px 0px 0px 200px rgba(0, 100, 0, 0.8) inset; text-shadow: 2px 2px 2px #000;">
				<div style="text-align:left; width:290px; height:255px; font-size:16pt; line-height:21pt; overflow:hidden;">
					<?php  echo $verse->text; ?>
				</div>
				<div style="height:20px;">&nbsp;</div>
				<div style="text-align:right; width:290px; height:30px; font-size:16pt; line-height:21pt;">
					<?php echo "- ".$verse->book." ".$verse->chapter.":".$verse->verse; ?>
				</div>
			</div>
		</div>
		<?php $i = 0; $count = count($verses); foreach($verses as $v):?>
			<?php $r = 0; $g = 100; $b = 0;
				if($i % 6 == 0)
				{
					$r = 100; $g = 100; $b = 0;
				}
				else if($i % 6 == 1)
				{
					$r = 100; $g = 0; $b = 0;
				}
				else if($i % 6 == 2)
				{
					$r = 100; $g = 0; $b = 100;
				}
				else if($i % 6 == 3)
				{
					$r = 0; $g = 0; $b = 100;
				}
				else if($i % 6 == 4)
				{
					$r = 0; $g = 100; $b = 100;
				}
				else if($i % 6 == 5)
				{
					$r = 0; $g = 100; $b = 0;
				}
			?>
			
			<?php if(($i == 0 && $count > 2) || ($i == 1 && $count > 2) || ($i == 3 && $count > 5) || ($i == 4 && $count > 5) || ($i == 7 && $count > 8) || $i == 8):?>
				<div id="<?php echo $v->idverse; ?>" class="verse-box" style="float:left; width:155px; height:155px; background:url('<?php echo $v->image; ?>'); background-size:200%; background-position-x:80%; background-position-y:20%; color: #fff;">
					<div style="width:145px; height:150px; padding: 5px 0px 0px 10px; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0), 0px 0px 0px 200px rgba(<?php echo $r.','.$g.','.$b.',';?> 0.8) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0), 0px 0px 0px 200px rgba(<?php echo $r.','.$g.','.$b.',';?> 0.8) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0), 0px 0px 0px 200px rgba(<?php echo $r.','.$g.','.$b.',';?> 0.8) inset; text-shadow: 2px 2px 2px #000;">
						<div style="text-align:left; width:135px; height:120px; font-size:10pt; line-height:15pt; overflow:hidden;">
							<?php  echo $v->text; ?>
						</div>
						<div style="height:8px;">&nbsp;</div>
						<div style="text-align:right; width:135px; height:25px; font-size:10pt; line-height:15pt;">
							<?php echo "- ".$v->book." ".$v->chapter.":".$v->verse; ?>
						</div>
					</div>
				</div>
			<?php else:?>
				<div id="<?php echo $v->idverse; ?>" class="verse-box" style="float:left; width:310px; height:155px; background:url('<?php echo $v->image; ?>'); background-size:200%; background-position-x:50%; background-position-y:20%; color: #fff;">
					<div style="width:300px; height:150px; padding: 5px 0px 0px 10px; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0), 0px 0px 0px 200px rgba(<?php echo $r.','.$g.','.$b.',';?> 0.8) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0), 0px 0px 0px 200px rgba(<?php echo $r.','.$g.','.$b.',';?> 0.8) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0), 0px 0px 0px 200px rgba(<?php echo $r.','.$g.','.$b.',';?> 0.8) inset; text-shadow: 2px 2px 2px #000;">
						<div style="text-align:left; width:290px; height:120px; font-size:13pt; line-height:18pt; overflow:hidden;">
							<?php  echo $v->text; ?>
						</div>
						<div style="height:5px;">&nbsp;</div>
						<div style="text-align:right; width:290px; height:25px; font-size:13pt; line-height:18pt;">
							<?php echo "- ".$v->book." ".$v->chapter.":".$v->verse; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		<?php $i++; endforeach; ?>
	</div>
</span>
<div id="page_links" style="clear:both; color:#009900;">
	<br />
	<?php echo $this->pagination->create_links();?>
</div>

<?php	
//	echo "
//		<div id='fb-root'></div>
//      	<script src='http://connect.facebook.net/en_US/all.js'>
//      	</script>
//		<script>
//		
//		FB.init({ 
//            appId:'170919919630462', cookie:true, 
//            status:true, xfbml:true 
//         });
//		
//		function postToFb()
//     	{
//     		  
//     		  var form = document.getElementById('message');
//			  var book = document.getElementById('book').value;
//			  var verse = document.getElementById('verse').value;
//			  var chapter = document.getElementById('chapter').value;
//			  var app = document.getElementById('app').value;
//			  var ref = document.getElementById('ref').value;
//			 
//     		  text = form.value;
//     		  
//              FB.ui({
//            		method: 'feed',
//             	name: 'FORMDEV',
//             	link: 'http://www.ccsformdev.com',
//             	picture: 'http://ccsformdev.com/Logo.png',
//             	description: '<b>Weekly Application:</b> ' + app,  
//             	caption: '<b>\"'+text +'\"' + ' (' + book + ' ' + chapter + ':' + verse + ')</b> -- ' + ref,
//             	message: 'Verse of the week',
//     					 alert('posted in facebook');  	
//     				  }
//             	},
//             	function(response) {
//     				  if (response && response.post_id) {
//             		else {
//             		     alert('error occured');
//             		}
//             	}
//              );
//     	}	
//     	</script>
//	";
//	
//	$date = date('Y-m-d H:i:s');
//	echo $date;
?> 		
<!--	<input type ="button" value="FB" onclick="postToFb();" />-->