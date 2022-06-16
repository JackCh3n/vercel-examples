<?php
// 参考
// https://github.com/tonystark93/crx-download/blob/master/background.js
if (isset($_GET)) {
// require __DIR__ . '/Curl/ArrayUtil.php';
require __DIR__ . '/Curl/CaseInsensitiveArray.php';
require __DIR__ . '/Curl/Curl.php';
// require __DIR__ . '/Curl/Decoder.php';
// require __DIR__ . '/Curl/Encoder.php';
// require __DIR__ . '/Curl/MultiCurl.php';
// require __DIR__ . '/Curl/StringUtil.php';
require __DIR__ . '/Curl/Url.php';
// require __DIR__ . '/vendor/autoload.php';
use Curl\Curl;
var_dump(scandir('/tmp');
$curl->download($_GET['u'], $_GET['d']);
if ($curl->error) {
    echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage;
}else{
    echo 'Response:' . "\n";
    var_dump($curl->response);
}
var_dump(scandir('/tmp'));
// $post = array();
// function getDefault($x,$y='')
// {
//     if(isset($x)){
//         return $x;
//     }
//     return $y;
// }
// $post['id'] = getDefault(addslashes(@$_GET['i']),'');
// $post['version'] = getDefault(addslashes(@$_GET['v']),'');
// $post['nacl_arch'] = getDefault(addslashes(@$_GET['n']),'');
// // 非空
// if (empty($post['id']) || empty($post['version']) || empty($post['nacl_arch']) || strlen($post['id']) != 32) {
//     exit('{ "code":"403", "msg":"forbidden" }');
// }
// $curl = new Curl();
// $curl->setOpt(CURLOPT_HTTPHEADER,['user-agent' , 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36 Edg/102.0.1245.39']);
// //规避SSL验证
// $curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);
// //跳过HOST验证
// $curl->setOpt(CURLOPT_SSL_VERIFYHOST, false);
// $url = 'https://clients2.google.com/service/update2/crx?response=redirect&prodversion='+$post['version']+'&acceptformat=crx2,crx3&x=id%3D'+$post['id']+'%26uc&nacl_arch='+$post['nacl_arch'];

// $file_name = '/tmp/'+$post['id']+'.crx';

// $curl->download($url, $file_name);

// if ($curl->error) {
//     echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage;
//     exit('{ "code":"404", "msg":"not found" }');
// } else {


 
//     //以只读和二进制模式打开文件   
//     $file = fopen ( $file_name, "rb" ); 

//     //告诉浏览器这是一个文件流格式的文件    
//     Header( "Content-type: application/octet-stream" ); 
//     //请求范围的度量单位  
//     Header( "Accept-Ranges: bytes" );  
//     //Content-Length是指定包含于请求或响应中数据的字节长度    
//     Header( "Accept-Length: " . filesize ( $file_name ) );  
//     //用来告诉浏览器，文件是可以当做附件被下载，下载后的文件名称为$file_name该变量的值。
//     Header( "Content-Disposition: attachment; filename=" . $post['id']+'.crx' );    

//     //读取文件内容并直接输出到浏览器    
//     echo fread( $file, filesize ( $file_name ) );    
//     fclose($file);
//     exit ();

// }

// }else{
//     exit('{ "code":"404", "msg":"not found" }');
// }