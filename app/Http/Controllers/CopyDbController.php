<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Database\Query\Builder;

class CopyDbController extends Controller
{
    public function index()
    {
        $count = DB::connection('shabab_forsan_db')->table('vvbyyr05_posts')->count();
        $perPgae = 1000;
        $page = 2;
        while($perPgae*($page-1) < $count)
        {
            $skip = ($page-1)*$perPgae;
            $allData = DB::connection('shabab_forsan_db')->table('vvbyyr05_posts')->orderBy('post_date')->offset($skip)->limit($perPgae)->get();
            foreach($allData as $Data)
            {
                DB::connection('db_shabab_forsan_website')->table('blogs')->insert(
                    [
                        'id' => $Data->ID,  
                        'title_en' => $Data->post_title,
                        'title_ar' => $Data->post_title,
                        'content_ar' => $Data->post_content,
                        'content_en' => $Data->post_content,
                        'image' => $Data->post_mime_type,
                    ]
                );
            }
            $page++;
        }
        // DB::connection('shabab_forsan_db')->table('vvbyyr05_posts')->orderBy('post_date')->chunk(1000, function ($AllData){

        //     foreach ($AllData as $Data)
        //     {
        //         DB::connection('db_shabab_forsan_website')->table('blogs')->insert(
        //             [
        //                 'id' => $Data->ID,  
        //                 'title_en' => $Data->post_title,
        //                 'title_ar' => $Data->post_title,
        //                 'content_ar' => $Data->post_content,
        //                 'content_en' => $Data->post_content,
        //                 'image' => $Data->post_mime_type,
        //             ]
        //         );
        //     }
        // });
    }
}
