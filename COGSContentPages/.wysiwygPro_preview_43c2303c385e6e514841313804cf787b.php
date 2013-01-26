<?php
if ($_GET['randomId'] != "QA8J7MUZKorSwfxigdbzRv6Q4xQK6i36bXSSt7x2wt5FNcQjmVaNl60kWYVlLy3A") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
