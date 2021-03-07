<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public static function urlFormat($real_url)
    {
        $url = '#';
        if($real_url != null){
            $length  = strlen($real_url);
            $repalced = str_replace("watch?v=","",$real_url);
            $url = 'https://www.youtube.com/embed/' .substr($repalced,  24  ,$length  );
        }

        return $url;
    }
}
