<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    public static function newData() {
        $newsContent = file_get_contents(public_path("assets/news.json"));
        return json_decode($newsContent);
    }

    public static function headerData() {
        return  [
            ["name"  =>  "网站首页", "route" => "home"],
            ["name"  =>  "关于我们", "route" => "about"],
            ["name"  =>  "客户案例", "route" => "customer"],
            ["name"  =>  "新闻快报", "route" => "news"],
            ["name"  =>  "我要入驻", "route" => "ruzhu"],
        ];
    }

    public static function newInfoData($id) {
        $list = NewsModel::newData();
        foreach($list as $k => $v) {
            if($v->id == $id) {
                return $v;
            }
        }
    }
}
