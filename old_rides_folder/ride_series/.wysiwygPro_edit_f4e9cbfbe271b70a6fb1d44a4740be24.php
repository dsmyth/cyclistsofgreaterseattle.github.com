<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "RMa8XlI8o3SAlmirvT0v1j_CJC8zb2WFYHg4v4MJYo6azhEDgPN9g3azqC_RIVEH8lrhLiX5L39Z0dOhuFZP0MnD0O4UJxMkLefzkyWs9DwiYVXg_7LFwM1HtLoKVjfjZjwG9AQMwScswAx8axigGyvlwBZkusdSkdNKj_LWkm9gzcVdHReMIbHdQqknAk4CwiGliKUuQ97_YdOYAEWg0Fi8i_Hvh1R0f5XKTjEoRZpw1dka8P5K59CCkXd8wqFo") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing ramrod_training2006.html</title>
<meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
<style type="text/css">body {background-color:threedface; border: 0px 0px; padding: 0px 0px; margin: 0px 0px}</style>
</head>
<body>
<div align="center">

<div id="saveform" style="display:none;">
<form METHOD="POST" name=mform action="http://cyclistsofgreaterseattle.com:2082/frontend/x3/filemanager/savehtmlfile.html">
    <input type="hidden" name="charset" value="us-ascii">
    <input type="hidden" name="baseurl" value="http://cyclistsofgreaterseattle.net/rides/ride_series/">
    <input type="hidden" name="basedir" value="/home/cyclists/public_html/">
    <input type="hidden" name="udir" value="/home/cyclists/public_html/rides/ride_series">
    <input type="hidden" name="ufile" value="ramrod_training2006.html">
    <input type="hidden" name="dir" value="%2fhome%2fcyclists%2fpublic_html%2frides%2fride_series">
    <input type="hidden" name="file" value="ramrod_training2006.html">
    <input type="hidden" name="doubledecode" value="1">
<textarea name=page rows=1 cols=1></textarea></form>
</div>
<div id="abortform" style="display:none;">
<form METHOD="POST" name="abortform" action="http://cyclistsofgreaterseattle.com:2082/frontend/x3/filemanager/aborthtmlfile.html">
    <input type="hidden" name="charset" value="us-ascii">
    <input type="hidden" name="baseurl" value="http://cyclistsofgreaterseattle.net/rides/ride_series/">
    <input type="hidden" name="basedir" value="/home/cyclists/public_html/">
    <input type="hidden" name="dir" value="%2fhome%2fcyclists%2fpublic_html%2frides%2fride_series">
        <input type="hidden" name="file" value="ramrod_training2006.html">
    <input type="hidden" name="udir" value="/home/cyclists/public_html/rides/ride_series">
    <input type="hidden" name="ufile" value="ramrod_training2006.html">

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

$editor->baseURL = "http://cyclistsofgreaterseattle.net/rides/ride_series/";

$editor->loadValueFromFile('/home/cyclists/public_html/rides/ride_series/ramrod_training2006.html');

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
$editor->plugins['serverPreview']->URL = 'http://cyclistsofgreaterseattle.net/rides/ride_series/.wysiwygPro_preview_f4e9cbfbe271b70a6fb1d44a4740be24.php?randomId=RMa8XlI8o3SAlmirvT0v1j_CJC8zb2WFYHg4v4MJYo6azhEDgPN9g3azqC_RIVEH8lrhLiX5L39Z0dOhuFZP0MnD0O4UJxMkLefzkyWs9DwiYVXg_7LFwM1HtLoKVjfjZjwG9AQMwScswAx8axigGyvlwBZkusdSkdNKj_LWkm9gzcVdHReMIbHdQqknAk4CwiGliKUuQ97_YdOYAEWg0Fi8i_Hvh1R0f5XKTjEoRZpw1dka8P5K59CCkXd8wqFo';
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
