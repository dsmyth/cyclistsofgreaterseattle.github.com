<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "ValO4zAVGYx_hJoCFRRK6d79w1XQnf1I6_Yl7vODaG8ZWO0CEbxfVNIrj0uRwPFJi8jJYDZ9HWwDclgp7r47BlTSBpTBzXwAfTqACvmBoNEbD7vv5uMTKQESIxUrYVeRS9kUpWah1IukI1ya5OBV16uRFsl9Y8R199tcfnHSi6BGzSRbZC_jyU9drNWJnrfQ91zRcHWQn851o7yyhCEvGtW38QN2OanviourMSWWn8zMBHopux1TwLqMJolr9kZe") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing guidelines.html</title>
<meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
<style type="text/css">body {background-color:threedface; border: 0px 0px; padding: 0px 0px; margin: 0px 0px}</style>
</head>
<body>
<div align="center">

<div id="saveform" style="display:none;">
<form METHOD="POST" name=mform action="http://cyclistsofgreaterseattle.com:2082/frontend/x3/filemanager/savehtmlfile.html">
    <input type="hidden" name="charset" value="us-ascii">
    <input type="hidden" name="baseurl" value="http://cyclistsofgreaterseattle.net/COGSContentPages/Forms/">
    <input type="hidden" name="basedir" value="/home/cyclists/public_html/">
    <input type="hidden" name="udir" value="/home/cyclists/public_html/COGSContentPages/Forms">
    <input type="hidden" name="ufile" value="guidelines.html">
    <input type="hidden" name="dir" value="%2fhome%2fcyclists%2fpublic_html%2fCOGSContentPages%2fForms">
    <input type="hidden" name="file" value="guidelines.html">
    <input type="hidden" name="doubledecode" value="1">
<textarea name=page rows=1 cols=1></textarea></form>
</div>
<div id="abortform" style="display:none;">
<form METHOD="POST" name="abortform" action="http://cyclistsofgreaterseattle.com:2082/frontend/x3/filemanager/aborthtmlfile.html">
    <input type="hidden" name="charset" value="us-ascii">
    <input type="hidden" name="baseurl" value="http://cyclistsofgreaterseattle.net/COGSContentPages/Forms/">
    <input type="hidden" name="basedir" value="/home/cyclists/public_html/">
    <input type="hidden" name="dir" value="%2fhome%2fcyclists%2fpublic_html%2fCOGSContentPages%2fForms">
        <input type="hidden" name="file" value="guidelines.html">
    <input type="hidden" name="udir" value="/home/cyclists/public_html/COGSContentPages/Forms">
    <input type="hidden" name="ufile" value="guidelines.html">

        </form>
</div>
<script language="javascript">
<!--//

function setHtmlFilters(editor) {
// Design view filter
editor.addHTMLFilter('design', function (editor, html) {
        return html.replace(/\<meta\s+http\-equiv\="Content\-Type"[^\>]+\>/gi, '<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />');
});

// Source view filter
editor.addHTMLFilter('source', function (editor, html) {
        return html.replace(/\<meta\s+http\-equiv\="Content\-Type"[^\>]+\>/gi, '<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />');
});
}

// this function updates the code in the textarea and then closes this window
function do_save() {
    document.mform.page.value = WPro.editors[0].getValue();
	document.mform.submit();
}
function do_abort() {
	document.abortform.submit();
}
//-->
</script>
<?php
// make sure these includes point correctly:
include_once ('/usr/local/cpanel/base/3rdparty/wysiwygPro/wysiwygPro.class.php');

// create a new instance of the wysiwygPro class:
$editor = new wysiwygPro();

$editor->registerButton('save', 'Save',
        'do_save();', '##buttonURL##save.gif', 22, 22,
        'savehandler'); 
$editor->addRegisteredButton('save', 'before:print' );
$editor->addJSButtonStateHandler ('savehandler', 'function (EDITOR,srcElement,cid,inTable,inA,range){ 
        return "wproReady"; 
        }'); 


$editor->registerButton('cancel', 'Cancel',
        'do_abort();', '##buttonURL##close.gif', 22, 22,
        'cancelhandler'); 
$editor->addRegisteredButton('cancel', 'before:print' );
$editor->addJSButtonStateHandler ('cancelhandler', 'function (EDITOR,srcElement,cid,inTable,inA,range){ 
        return "wproReady"; 
        }'); 
$editor->theme = 'blue'; 
$editor->addJSEditorEvent('load', 'function(editor){editor.fullWindow();setHtmlFilters(editor);}');

$editor->baseURL = "http://cyclistsofgreaterseattle.net/COGSContentPages/Forms/";

$editor->loadValueFromFile('/home/cyclists/public_html/COGSContentPages/Forms/guidelines.html');

$editor->registerSeparator('savecan');

// add a spacer:
$editor->addRegisteredButton('savecan', 'after:cancel');

//$editor->set_charset('iso-8859-1');
$editor->mediaDir = '/home/cyclists/public_html/';
$editor->mediaURL = 'http://cyclistsofgreaterseattle.net/';
$editor->imageDir = '/home/cyclists/public_html/';
$editor->imageURL = 'http://cyclistsofgreaterseattle.net/';
$editor->documentDir = '/home/cyclists/public_html/';
$editor->documentURL = 'http://cyclistsofgreaterseattle.net/';
$editor->emoticonDir = '/home/cyclists/public_html/.smileys/';
$editor->emoticonURL = 'http://cyclistsofgreaterseattle.net/.smileys/';
$editor->loadPlugin('serverPreview'); 
$editor->plugins['serverPreview']->URL = 'http://cyclistsofgreaterseattle.net/COGSContentPages/Forms/.wysiwygPro_preview_7c71cf3391cce228de2a541d9f295b15.php?randomId=ValO4zAVGYx_hJoCFRRK6d79w1XQnf1I6_Yl7vODaG8ZWO0CEbxfVNIrj0uRwPFJi8jJYDZ9HWwDclgp7r47BlTSBpTBzXwAfTqACvmBoNEbD7vv5uMTKQESIxUrYVeRS9kUpWah1IukI1ya5OBV16uRFsl9Y8R199tcfnHSi6BGzSRbZC_jyU9drNWJnrfQ91zRcHWQn851o7yyhCEvGtW38QN2OanviourMSWWn8zMBHopux1TwLqMJolr9kZe';
// print the editor to the browser:
$editor->htmlCharset = 'us-ascii';
$editor->urlFormat = 'relative';
$editor->display('100%','450');

?>
</div>
<script>

</script>

</body>
</html>
<?php ob_end_flush() ?>
