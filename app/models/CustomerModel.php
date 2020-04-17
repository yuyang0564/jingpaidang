<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    public static function huoban() {
        $newsContent = file_get_contents(public_path("assets/hezuo.json"));
        return json_decode($newsContent);
    }

}
