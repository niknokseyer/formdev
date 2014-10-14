<div id="header_part">
  	<div id="header_pic">
	  	<img id="himage" src="../../images/headerpics/header.jpg" />
    </div>
  </div>
<table id="pagebody" width="100%" border="0">
        <tr style="vertical-align:top">
            <td width="100%">
                <span class="title_post">DASHBOARD</span>
                <span class="body_post">
					<div style="width:985px; height:600px;">
                    	<div style="position:absolute; background-color:#DDDDDD; width:245px; height:600px; border-right-style:solid; border-right-width:thin">
                        	<div id="updates_tab" class="panel_tab_selected" onclick="selectPanelTab('updates_tab')" style="vertical-align:middle">Updates and Notifications</div>
                            <div id="account_tab" class="panel_tab" onclick="selectPanelTab('account_tab')">Account Management</div>
                        </div>
                        <div style="position:absolute; left:250px; background-color:#EEEEEE; width:735px; height:600px; border-left-style:solid; border-left-width:thin;">
                        	<div id="loading1" align="center"></div>
                            <div id="loading2" align="center"></div>
                            <div id="tab_content" style="padding:10px; overflow:auto; width:715px; height:580px;">
                            	<?php include('updates_tab.php'); ?>
                            </div>
                        </div>
                    </div>
				</span>
			</td>
    	</tr>
	</table>