// JavaScript Document

function revealSubmenu(e)
{
	document.getElementById(e).style.display = 'block';
}

function hideSubmenu(e)
{
	document.getElementById(e).style.display = 'none';
}

var selection = 0;

function replaceElement(e)
{
	element = document.getElementById(e);
	selection = document.getElementById(e).selectedIndex;
	e2 = element[selection].value;
	
	for(i=0; i<element.length; i++)
	{
		e1 = element[i].value;
		document.getElementById(e1).style.display = 'none';
	}
	
	document.getElementById(e2).style.display = '';
}

function removeElement(e, par)
{
	parentElement = document.getElementById(par);
	element = document.getElementById(e);
	selection = document.getElementById(e).selectedIndex;
	e2 = element[selection].value;
	
	
	for(i=0; i<element.length; i++)
	{
		e1 = element[i].value;
		if(e2 != e1)
		{
			child = document.getElementById(e1);
			parentElement.removeChild(child);
		}
	}
}

function cleanAndSubmit(e, par, form, val1, act, dest)
{
	if(val1 != null)
	{
		if(document.getElementById(val1).value == '')
			alert("Please place a value in all the required fields.");
		else
		{
			if(e != null)
			{
				removeElement(e, par);
			}
			submitForm(act, form, dest);
		}
	}
}

function cleanAndSubmit1(e, par, form, val1, act, dest)
{
		if(e != null)
		{
			if(document.getElementsByName(e)[0].checked)
				child = document.getElementById(document.getElementsByName(e)[1].value);
			else child = document.getElementById(document.getElementsByName(e)[0].value);
			document.getElementById(par).removeChild(child);
		}
		submitForm(act, form, dest);
}

function copyCheckedEmailsToClipboard(e)
{
	if (navigator.appName == "Microsoft Internet Explorer") {
		emails = "";
		element = document.getElementsByName(e);
		
		for(i=0; i<element.length; i++)
		{
			if(element[i].checked)
				emails = emails + element[i].value + '; ';
		}
		
		window.clipboardData.setData('text',emails);
	}
	else alert('Only works in Internet Explorer.');
}

function copyEmailsToClipboard(e)
{
	if (navigator.appName == "Microsoft Internet Explorer") {
		emails = "";
		element = document.getElementsByName(e);
		
		for(i=0; i<element.length; i++)
		{
			emails = emails + element[i].value + '; ';
		}
		
		window.clipboardData.setData('text',emails);
	}
	else alert('Only works in Internet Explorer.');
}

function validateSubmitForm(e)
{
	var valid = true;
	for(i=0; i<requiredFields.length; i++)
	{
		if(document.getElementById(requiredFields[i]).value=='')
		{
			valid = false;
		}
	}
	if(valid)
		document.getElementById(e).submit();
	else
		document.getElementById('formerrormessage').style.display = "block";
}

function selectPanelTab(e, e1)
{
		if(e1==null)
		{
			document.getElementsByClassName('panel_tab_selected')[0].setAttribute("class", "panel_tab");
			document.getElementById(e).setAttribute("class", "panel_tab_selected");
		}
		document.getElementById('loading1').style.display = 'block';
		document.getElementById('loading2').style.display = 'block';
		var response;
		new Ajax.Request(e, 
		{   
			parameters: { committee: e1 },
			onSuccess: function(transport){
				response = transport.responseText;
				$('tab_content').innerHTML = response + "";
				$('loading1').style.display = 'none';
				$('loading2').style.display = 'none';
			},
			onFailure: function(){ alert('Something went wrong...'); $('loading1').style.display = 'none'; $('loading2').style.display = 'none';}
		});
		return response;
}

function hide_reveal_details(e)
{
	if($(e).style.display == 'none')
		$(e).style.display = 'block';
	else $(e).style.display = 'none';
}

function hide_reveal_menu(e, e1)
{
	var option = 'none';
	var menu_array = document.getElementsByClassName(e);
	if(menu_array[0].style.display == 'none')
		option = 'block';
	for(i=0; i<menu_array.length; i++)
	{
		menu_array[i].style.display = option;
	}
	hide_reveal_details(e1);
}

function submitForm(e, e1, e2)
{	
	$('btnSubmit').disabled = true;
	$('loading').style.display = 'block';
	$('loading').style.top = window.pageYOffset + 'px';
	$('loading_image').style.top = '100px';
	new Ajax.Request(e, 
	{   method:'post',
		parameters: $(e1).serialize(true),
		onSuccess: function(transport){
			
			if(e1=='pass_form')
				var response = transport.responseText;
			else
				var response = "Success! \nYour update request has been completed!";

			alert(response);
			
			$('btnSubmit').disabled = false;
			$('loading').style.display = 'none';
			if(response=='Error! Password does not match!')
			{
				window.location.reload();
			}
			else
			{
				window.location = e2;
			}
		},
		onFailure: function(){ 
		alert('Something went wrong...'); 
		$('btnSubmit').disabled = false; 
		$('loading').style.display = 'none'; }
	});
}

function validatePassAndSubmit(form, act, dest, val1, val2, val3)
{
	if(document.getElementById(val1).value == '' || document.getElementById(val2).value == '' || document.getElementById(val3).value == '')
		alert("Please place a value in all the required fields.");
	else if(document.getElementById(val2).value != document.getElementById(val3).value)
		alert("New passwords does not match. Please enter your new password again.");
	else
	{
		submitForm(act, form, dest);
	}
}

function deleteRecord(e, e1)
{	
	if(confirm("Really delete this entry?"))
	{
		$('loading').style.display = 'block';
		$('loading').style.top = window.pageYOffset + 'px';
		$('loading_image').style.top = '100px';
		new Ajax.Request('functions/'+e+'.php', 
		{   method:'post',
			parameters: $(e1).serialize(true),
			onSuccess: function(transport){
				var response = "Success! \nYour delete request has been completed!";
				alert(response);
				$('loading').style.display = 'none';
				window.location.reload();
			},
			onFailure: function(){ alert('Something went wrong...'); $('loading').style.display = 'none'; }
		});
	}
}