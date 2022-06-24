<?php
$a = [
    't'=>time(),
    'f'=>md5(time())
];
var_dump($a);
file_put_contents('/tmp/'.$a['f'].'.json', json_encode($a));
var_dump($a);