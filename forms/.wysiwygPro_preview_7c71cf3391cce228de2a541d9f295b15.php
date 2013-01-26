<?php
if ($_GET['randomId'] != "h8Qdgn1AYHVm4JHvlDT2w6orZ6BCl8SYQVlJuUg2T3BOwxeVCLvuNHjGdv5tl_QC") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
