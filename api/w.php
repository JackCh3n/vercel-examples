<?php
$a = [
    't'=>time(),
    'f'=>md5(time())
];

file_put_contents('/tmp/'.$a['f'].'.json', json_encode($a));
file_put_contents('./tmp/'.$a['f'].'.json', json_encode($a));
exit(json_encode($a));