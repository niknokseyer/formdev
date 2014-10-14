<?php include('../../db/db_facilitators.php'); ?>

<div class="ui-widget-content ui-corner-all submenu" style="padding:10px;">
    <span class="title_post" style="font-size:15px">Change Password</span><hr/>
    <div>
    *Maximum of 8 characters only.
    <form action="#" method="post" id="pass_form">
    	<table align="center">
        <tr>
            <td align="left"><span class="required">*</span><label for="txtOldPass">Old Password:</label></td>
            <td><input type="password" name="oldpass" id="txtOldPass" style="width:200px" /><br/></td>
        </tr>
        <tr>
            <td align="left"><span class="required">*</span><label for="txtNewPass">New Password:</label></td>
            <td><input type="password" name="newpass" id="txtNewPass" style="width:200px" /><br/></td>
        </tr>
        <tr>
            <td align="left"><span class="required">*</span><label for="txtConPass">Confirm Password:</label></td>
            <td><input type="password" name="newpass1" id="txtConPass" style="width:200px" /><br/><td>
        </tr>
        <tr><td></td><td></td></tr>
        <tr>
        	<td></td>
            <td>
            	<input id="btnSubmit" type="button" style="width:120px; height:25px; font-size:12px; padding:0px; border:none; background-image:url(../../images/buttonbg.png); color:#FFFFFF" value="SUBMIT" onclick="validatePassAndSubmit('pass_form', 'submissions/account_submit', '../../login.php?login_attempt=2', 'txtOldPass', 'txtNewPass', 'txtConPass')"/>
            </td>
        </tr>
        </table>
    </form>
    </div>
</div>
<br />
<div class="ui-widget-content ui-corner-all submenu" style="padding:10px;">
    <span class="title_post" style="font-size:15px">Personal Profile</span><hr/>
    <div style="margin-left:10px; margin-right:10px">
    <?php
		$db = 'db_facilitators';
		
		$searchFor = explode('.', $_COOKIE['monitoring']);
										
		$result = db_facilitators::getFacilitator($searchFor[0]);
		
		while ($row = mysql_fetch_assoc($result)) {
	?>
    	<table>
        <tr>
    		<td valign="top" style="text-align:left">Name:</td>
            <td valign="top"><?php echo $row['fullname']; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left">Nickname:</td>
            <td valign="top"><?php echo $row['nickname']; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left">Batch:</td>
            <td valign="top">
				<?php
				
				$batch = explode('.', $row['batch']);
				
				if($batch[1]==0)
					echo $batch[0];
				else if($batch[1]==1)
					echo $batch[0] . 'A';
				else if($batch[1]==2)
					echo $batch[0] . 'B';
				else if($batch[1]==3)
					echo $batch[0] . 'C';
					
				?>
            </td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left">Birthday:</td>
            <td valign="top"><?php echo $row['birthday']; ?></td>
        </tr>
		<tr>
            <td valign="top" style="text-align:left">Course:</td>
            <td valign="top"><?php echo $row['course']; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left">Hometown:</td>
            <td valign="top"><?php echo $row['hometown']; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left">High School:</td>
            <td valign="top"><?php echo $row['highschool']; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left">Hobbies & Interests:</td>
            <td valign="top"><?php echo $row['hobbies_interests']; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left">Motto:</td>
            <td valign="top"><?php echo $row['motto']; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left">Favorite Verse:</td>
            <td valign="top"><?php echo $row['favorite_verse']; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left">Random Stuff:</td>
            <td valign="top"><?php echo $row['random_stuff']; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left">Formdev is:</td>
            <td valign="top"><?php echo $row['formdev_is']; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left">Email:</td>
            <td valign="top"><?php echo $row['email']; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left">Contact:</td>
            <td valign="top"><?php echo $row['contact']; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left">Expected Term of Graduation:</td>
            <td valign="top"><?php echo $row['expected_term_graduation']; ?></td>
        </tr>
        </table>
	<?php 
	    }
		mysql_free_result($result);
    ?>
    </div>
</div>