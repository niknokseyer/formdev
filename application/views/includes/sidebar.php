              </div> <!-- end pagebody_left -->
			  <?php if($controller != 'facipage' && $controller != 'course_evaluation' ):?>
              <div id="pagebody_right">
                <div id="login_part"> <!-- height=140px -->
                  <?php if(!isset($user['is_logged_in']) || $user['is_logged_in'] != true):?>
                  <div id="login_pic">
                    <img src="<?php echo base_url(); ?>images/loginlogo.png" alt="login pic" />
				  </div><!-- login_pic -->				  		  
                  <div id="login_form">
                    <span id="login_title">USER ACCOUNT</span>
					<span id="input_login">
                    <?php echo form_open('account/validate_credentials');?>
						<?php echo form_hidden('controller', $controller); ?>
                        <?php echo form_input('username', 'username', 'id="username_input"');?>
                        <?php echo form_password('password', 'password', 'id="password_input"');?>
                        <a id="register_button" href="<?php echo base_url();?>account/forgotpass"><img src="<?php echo base_url();?>images/registerlogo.png" /> Account</a>
                        <?php echo form_submit('submit', 'LOGIN');?>
                    <?php echo form_close(); ?>
					</span>
					<span id="fb_login">
					</br>
					<span id="fb_name"></span> 
					<button class="formdev_fb"></button>
					</br>
					</br>
					<button class="login_manually"><img src="<?php echo base_url();?>images/registerlogo.png" /> Login with FORMDEV</button> 
					</span>
                  </div><!-- login_form -->
                  <?php else: ?>
                  <div id="logged_pic">
					<?php if(!isset($profile->facebook) || $profile->facebook == null):?>
                    <?php echo anchor(site_url('account/edit'),'<img src="'.base_url().'images/profile/default.png" height="77"></img>')?>
					<?php else: ?>
					<?php echo anchor(site_url('account/edit'),'<img src="http://graph.facebook.com/'.$profile->facebook.'/picture?type=large" height="77" width="77"></img>')?>
					<?php endif; ?>
                  </div>
                  <div id="userinfo">
                    <span id="userinfo_title">You are logged in as:</span>
					</br>
                    <div id="username"><?php $baseurl = base_url(); echo anchor($baseurl.'facilitator/'.$profile->username, humanize($profile->firstname).' '.humanize($profile->lastname),'style="color:#009900;"');?></div>
					<span id="user_type"><?php echo $profile->type; ?></span>
                    <span class="body_post"></br>
					<?php if(!isset($controller) || $controller != 'dashboard'): ?>
					<?php $baseurl = base_url(); echo anchor($baseurl.'account/edit','Edit Account / Profile');?>
					<?php else: ?>
					<?php $baseurl = base_url(); echo anchor($baseurl.'account/edit','Edit Account / Profile');?>
					<?php endif; ?>
					</span>
					<br />
                    <button class="readmore_button" onclick="window.location='<?php echo base_url();?>account/logout'">SIGN OUT</button>
                  </div> <!-- userinfo -->
                  <?php endif; ?>
                </div><!-- login_part -->
				<div id="announcement_part">
					<?php if($controller != 'course' && $controller != 'formdevclass'):?>
						<div class='title_post' style="font-size:12pt; width:305px; border-bottom: 1px solid #efefef; padding-top: 5px; padding-bottom: 5px;">
							<a style="color:#009900;" href="<?php echo base_url(); ?>formdevclass/">FORMDEV Classes</a>
						</div>
					<?php endif; ?>
					<?php if($controller != 'bible_study'):?>
						<div class='title_post' style="font-size:12pt; width:305px; border-bottom: 1px solid #efefef; padding-top: 5px; padding-bottom: 5px;">
							<a style="color:#009900;" href="<?php echo base_url(); ?>bible_study/">FORMDEV Bible Study</a>
						</div>
					<?php endif; ?>
					<?php if($controller != 'committees' && $controller != 'faci_outreach'):?>
						<div class='title_post' style="font-size:12pt; width:305px; border-bottom: 1px solid #efefef; padding-top: 5px; padding-bottom: 5px;">
							<a style="color:#009900;" href="<?php echo base_url(); ?>committees/">FORMDEV Committees</a>
						</div>
					<?php endif; ?>
				</div>
				<div>&nbsp;</div>
				<?php if($controller != 'course' && $controller != 'formdevclass' && $controller != 'bible_study' && $controller != 'committees' && $controller != 'faci_outreach'):?>
	                <div id="announcement_part" style="padding-top:10px;">
	                  <span class="title_post" style="padding-left:10px;"><?php echo anchor('announcements','Announcements', 'class="sidebar_announcement"');?></span>
	                  <hr /> <!-- horizontal bar -->
	                  <?php
	                  if(isset($topannouncements) && $topannouncements!=null): 
	                    foreach($topannouncements as $row):
	                      echo "<p align='justify' class='announcement_post'>";echo "<span class='announcement_item'>";
	                      echo anchor("announcements/article/$row->url_title",$row->title, 'class="item_title"');
						  echo '</br>';
						  echo "</span>";
						  echo "<span class='announcement_summary'>";
						  echo strip_tags($row->summary);
						  echo "</span>";
	                      echo anchor("announcements/article/$row->url_title",'read more', 'class="readmore_post"');
	                      echo "</p>";
	                    endforeach;
	                  else:
						echo "<p align='justify' class='announcement_post'>";
	                    echo "<span class='announcement_summary'>There are no recent announcements</span>";
						echo "</p>";
	                  endif;
	                  ?>
	                </div> <!-- announcement part -->
				<?php else: ?>
					<div id="announcement_part" style="padding-top:10px;">
						<div class="title_post" style="font-size: 15pt">
							<?php 
								if($controller == 'course' || $controller == 'formdevclass') echo 'FORMDEV Classes';
								else if($controller == 'bible_study') echo 'Bible Study Groups';
								else if($controller == 'committees' || $controller == 'faci_outreach') echo 'FORMDEV Committees';
							?>
						</div>
						<div class="title_post" style="font-size: 12pt">(S.Y.
							<?php 
								$year = $yearterm[0]->{'start_year'};
								$term = $yearterm[0]->{'term'};
								echo  $year.'-'.($year+1).' Term '.$term.')';
							?>
						</div>
						<hr /> <!-- horizontal bar -->
						<?php
							if($controller == 'course' || $controller == 'formdevclass')
								$temp_grps = $sections;
							else if($controller == 'bible_study')
								$temp_grps = $groups;
							else if($controller == 'committees' || $controller == 'faci_outreach')
								$temp_grps = $committees;
						?>
						<?php foreach($temp_grps as $t):?>
							<div style="width:305px; border-bottom: 1px solid #efefef; padding-top: 5px; padding-bottom: 5px;">
								<div id="section" class="title_post" style="font-size: 11pt;">
									<?php
										if($controller == 'course' || $controller == 'formdevclass')
											echo '<a style="color:#009900;" href="'.base_url().'formdevclass/'.$t->section.'">FORMDEV '.$t->section.'</a>';
										else if($controller == 'bible_study')
										{
											$temp_str = str_replace(' ','_',$t->name);
											echo '<a style="color:#009900;" href="'.base_url().'bible_study/'.$temp_str.'">FORMDEV '.$t->name.'</a>';
										}
										else if($controller == 'committees' || $controller == 'faci_outreach')
										{
											$temp_str = str_replace(' ','_',$t->name);
											echo '<a style="color:#009900;" href="'.base_url().'committees/'.$temp_str.'">'.$t->name.'</a>';
										}
									?>
									
								</div>
								<?php if($controller != 'committees' && $controller != 'faci_outreach'): ?>
									<div id="sched" class="body_post" style="color:#7a7a7a;">
										<?php
											if($controller == 'course' || $controller == 'formdevclass')
												echo $t->schedule;
											else if($controller == 'bible_study')
												echo $t->book;
										?>
									</div>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
						<?php 
							if($controller == 'course' || $controller == 'formdevclass')
							{
								if($term == 1)
								{
									echo '<br />';
									echo '<p class="body_post" style="text-align:center;">There are no FORMDEV classes during the first term.</p>';
									echo '<br />';
								}
							}
						?>
	                </div> <!-- formdev class part -->
				<?php endif; ?>
				
              </div><!-- pagebody_right -->     
			<?php endif; ?>