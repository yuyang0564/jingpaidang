<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $arr = [
            [
                "淘宝代运营如何有效推广",
                "店铺流失金额大？淘宝代运营教你钻展抢流量",
                "天猫代运营：提前布局直通车备战冲击双十一"
            ],
            [
                "直通车必学！2层标签撬动全店精准流量",
                "淘宝代运营的四个优势",
                "选择天猫代运营的优势"
            ]
            ];
        return view("index",compact('arr'));
    }

    public function about() {
        return view("about");
    }

    public function contact() {
        $arr = ['其他','京东','天猫','苏宁','淘宝','唯品会','环球捕手','贝贝','云集'];
        return view("contact",compact('arr'));
    }

    public function customer() {
        return view("customer");
    }

    public function new() {
        return view("new");
    }
}
