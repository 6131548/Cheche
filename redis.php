redis =new Redis();
//链接方式
//pconnect 长连接，脚本执行后不关闭
//connect: 脚本执行后关闭
//socket 链接
$res = $redis->pconnect('127.0.0.1',6379);

$redis->setOption(Red::OPT_READ_TIMEOUT,-1);//设置时间
//主题
key ="winner";
//订阅
$redis ->subscribe(array($key),'callback');
//回调函数
function callback($redis,$channel,$msg){
}
