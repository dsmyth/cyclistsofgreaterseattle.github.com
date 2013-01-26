<?php
if ($_GET['randomId'] != "4tIVXNoHk_bH4ZpcqUQ1GDAGPF_tynAcxCbwzbfGM27c7zrRPqU19dKyKcVQt1qu") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
