<?php
namespace App\Http\Controllers\Test;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
//use Illuminate\Support\Facades\Redis;

/**
 * Created by PhpStorm.
 * User: ubt
 * Date: 18-8-4
 * Time: 下午6:04
 * do order  use in mysql message queue
 */
class OrderController extends Controller{
    public function makeOrder(){
        $order_id = rand(10000,99999);
        $insert_data = array(
            'order_id'=>$order_id,
            'mobile'=>Input::get('mobile'),      //记得过滤
            'create_time'=>date('Y-m-d H:i:s',time()),
            'status'=>0,    //0，未处理状态
        );
        $re  = DB::table('order_queue')->insert($insert_data);
        if($re ){
            echo '下单成功';
        }else{
            echo '下单失败';
        }
    }


    public function mostRequest(){
        $redis = new Redis();
        $redis->connect('127.0.0.1',6379);
        $redis_name = 'miaosha';

        for ($i =0; $i < 100; $i++) {
            $uid = rand(1000000,99999999);
        }
        //检查redis链表长度（已存在数量)
        $num = 10;
        if ($redis->lLen($redis_name) < $num ) {
            //加入链表尾部
            $redis->rPush($redis_name, $uid.'%'.microtime());
        } else {  //如果达到10个
            //秒杀结束
        }
        $redis->close();
    }
}