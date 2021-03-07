<?php

use Illuminate\Database\Seeder;
use App\VolunteerSection;

class VolunteerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         VolunteerSection::create([
            'title_ar' => 'title ',
            'title_en' => 'title ',
            'content_ar' => 'ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم ',
            'content_en' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'image' => resizeImage('about.jpg', 1920, 649),
        ]);
    }
}
