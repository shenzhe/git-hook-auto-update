<?php
function mylog($msg, $filename='pull'){
    error_log(date("Y-m-d H:i:s")."\t".$msg.PHP_EOL, 3, __DIR__.DIRECTORY_SEPARATOR.$filename.'.log');
}
$serv = new swoole_server('0.0.0.0', 8999, SWOOLE_BASE, SWOOLE_SOCK_UDP);
$serv->set([
    'daemonize'=>1,
]);
$serv->on('Packet', function($server, $_data, $client) {
    $data = json_decode(trim($_data), true);
    if(!empty($data[2])) {
        system('cd '.$data[2].' && git pull', $ret);
        mylog($data[2].':'.$ret);
        if('laya-hook' == $data[0]) { //重启
            file_get_contents('http://127.0.0.1:9501/reload');
        }
    } else {
        mylog($_data.':'.strlen($_data));
    }
});
$serv->start();