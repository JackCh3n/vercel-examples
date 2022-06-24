<?php
if (isset($_GET['f'])) {
    exit(file_get_contents('/tmp/'.$_GET['f'].'.json'));
}else{
    var_dump(scandir('/tmp'));
}