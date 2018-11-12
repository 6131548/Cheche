$redis = new Redis();
$res = $redis->connect('127.0.0.1','6379');

$key ='winner';
$value ="hello world";
$redis->publish($key,$value);
