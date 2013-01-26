<?php
if ($_GET['randomId'] != "fXYPDxFikM9FzPlSxZsUTeO7QYNhFg5WRduaHVK_BsAzH5ZlUhdZoPS74B3gfvJSEdQyiaqUu6pPyYRvCWpABVEvc_c4905rvi9pnd0oZ9cshxHFIQCOSgT2IKnPgCarJBl8rF03Qj1k0yDAmcFVhD7NfPkpB4vQ51kCB5p95alcSSOJQoo5jwqsoHNJYcO1jqQmPrK6NEGZmskM1l5dTG3Kh1Zv294D0K7MkeGAPk42j2MICPTCGdWiKs2kuN3l") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
