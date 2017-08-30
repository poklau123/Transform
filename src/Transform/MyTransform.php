<?php
namespace Transform;

include_once __DIR__.'/../../vendor/autoload.php';

use houdunwang\str\Str;

class MyTransform
{
    //转换中文数组到拼音数组
    public function ChineseArrToPinyinArr($arr = array()){
        foreach($arr as $key => $item){
            $arr[$key] = Str::pinyin($item);
        }
        return $arr;
    }

    public function Helloworld(){
        echo 'Helloworld';
    }
}