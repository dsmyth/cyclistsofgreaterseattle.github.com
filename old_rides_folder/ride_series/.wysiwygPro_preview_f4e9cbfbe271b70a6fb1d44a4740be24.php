<?php
if ($_GET['randomId'] != "RMa8XlI8o3SAlmirvT0v1j_CJC8zb2WFYHg4v4MJYo6azhEDgPN9g3azqC_RIVEH8lrhLiX5L39Z0dOhuFZP0MnD0O4UJxMkLefzkyWs9DwiYVXg_7LFwM1HtLoKVjfjZjwG9AQMwScswAx8axigGyvlwBZkusdSkdNKj_LWkm9gzcVdHReMIbHdQqknAk4CwiGliKUuQ97_YdOYAEWg0Fi8i_Hvh1R0f5XKTjEoRZpw1dka8P5K59CCkXd8wqFo") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
