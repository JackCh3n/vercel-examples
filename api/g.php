<?php
if (isset($_GET['f'])) {
    var_dump(file_get_contents('/tmp/'.$_GET['f'].'.json'));
    var_dump(file_get_contents('./tmp/'.$_GET['f'].'.json'));
}else{
    var_dump(scandir('/tmp'));
}