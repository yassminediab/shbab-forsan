<?php

use Illuminate\Database\Seeder;
use App\Footer;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $logo = resizeImage('logo.png', 100, 80);

        Footer::create([
            'title_en' => 'shabab-forsan',
            'title_ar' => 'شباب فرسان',
            'logo' => $logo,
            'address_ar' => 'العنوان',
            'address_en' => 'address here',
            'phone' => '000000000',
            'email' => 'email@gmail.com',
            'content_ar' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في',
            'content_en' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy',
            'main_links' => [
                 [
                     "name_en" => "link name in english",
                     "name_ar" => "link name in english ",
                     "url" => "link url "
                ]
            ],
            'we_do' => [
                 [
                   "name_en" => "link name in english",
                    "name_ar" => "link name in english ",
                    "url" => "link url "
                ]
            ],
        ]);
    }
}
