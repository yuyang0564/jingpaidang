<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Notify;
use App\Mail\NotifyC;
use App\models\NewsModel;
use Illuminate\Support\Facades\Mail;
use stdClass;

class HomeController extends Controller
{
    public function __construct()
    {
        view()->share("banner",NewsModel::headerData());        
    }

    /**
     * 首页
     */
    public function home() {
       
        return view("index");
    }

    /**
     * 关于
     */
    public function about() {
        return view("about");
    }

    /**
     * 我要入驻
     */
    public function contact() {
        $arr = ['京东','天猫','苏宁','淘宝','唯品会','环球捕手','贝贝','云集'];
        return view("contact",compact('arr'));
    }

    /**
     * 客户案例
     */
    public function customer() {
        return view("customer");
    }

    /**
     * 新闻列表
     */
    public function news() {
        // 从模型中拿本地的 json 数据
        $news = NewsModel::newData();
        // dd($news);
        return view("news",compact("news"));
    }

    /**
     * 新闻详情
     */
    public function newInfo($id) {
        $info = NewsModel::newInfoData($id);
        $info = $info ?: new stdClass();
        return view("new_info",compact('info'));
    }

    /**
     * 首页提交用户信息
     */
    public function postCompany(Request $request) {
        $data = $request->all();
        $this->sendMailtoQQ($data);
        return redirect()->route('home');
    }

    /**
     * 我要入驻提交信息
     */
    public function postUser(Request $request) {
        $data = $request->all();
        $this->sendMail($data);
        return redirect()->route('home');
    }

    /**
     *  入驻信息发送邮件
     */
    private function sendMail($data) {
        $email = new Notify($data);
        $to = env('MAIL_TO','366222104@qq.com');
        Mail::to($to)->send($email);
    }

    /**
     * 首页咨询发送邮件
     */
    private function sendMailtoQQ($data) {
        $email = new NotifyC($data);
        $to = env('MAIL_TO','366222104@qq.com');
        Mail::to($to)->send($email);
    }
}
