<?php
/**
 * Created by PhpStorm.
 * User: ubt
 * Date: 18-8-10
 * Time: 上午11:42
 */
use Illuminate\Support\Facades\DB;

//从队列头部读一个值，判断这个值是否存在，如果存在则切割出时间、uid保存到数据库中。（对于redis而言，如果从redis取出这个值，那么这个值就不在redis队列里了，如果出现问题失败了，那么我们需要有一个机制把失败的数据重新放入redis链表中）
$redis = new Redis();
$redis->connect('127.0.0.1',6379);
$redis_name = 'miaosha';

//死循环检测redis队列
while(1) {
    $user = $redis->lpop($redis_name);
    if (!$user || $user == 'null') {  //如果没有数据跳出循环
        //如果一直执行，速度是非常快的，那么服务器压力大，这里2秒一次
        sleep(2);
        //跳出循环
        continue;
    }
    //拿出微秒时间戳和uid
    $user_arr = explode('%', $user);
    $insert_data = array(
        'uid' => $user_arr[0],
        'time_stamp' => $user_arr[1]
    );
    $res = DB::table('redis_queue')->insert( $insert_data);
    //如果插入失败
    if (!$res) {
        //从哪个方向取出，从哪个方向插回
        $redis->lpush($redis_name, $user);
        sleep(2);
    }
}
$redis->close();
