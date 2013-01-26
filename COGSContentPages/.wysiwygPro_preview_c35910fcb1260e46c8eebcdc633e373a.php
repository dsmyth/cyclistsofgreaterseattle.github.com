<?php
if ($_GET['randomId'] != "MRC7NBdC_ljzZ_AjSQWh2eXQv3y09TyPDd9DYwNiOj7REptvqFeib1iJqakheik7") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
