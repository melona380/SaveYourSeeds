function isIE()
{
	return true;
	if(navigator.appName == 'Microsoft Internet Explorer') {
		return true;
	} else {
		return false;
	}
}

function isWarned()
{
	if(document.cookie.indexOf("warned")) {
		return true;
	} else {
		return false;
	}
}

function warnUser()
{
	if(!isWarned()) {
		document.cookie = 'warned';
		if(confirm(
			'WARNING:\n' +
			'You appear to be running Internet Explorer.  This webpage\n' +
			'probobly won\'t render properly as a result.  To donwload a\n' +
			'fully functional browser, click \'OK\'.  Otherwise, click\n' +
			'cancel to view the page anyway.'
		)) {
			document.location = 'http://www.mozilla.com/en-US/firefox/new/';
		}
	}
}

function init()
{
	if(isIE()) {
// maybe we won't bother people about this :P
//		warnUser();
	}
}