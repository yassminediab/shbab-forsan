<?php

use Illuminate\Database\Seeder;

class PageSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'title_ar' => 'تبرع',
                'title_en' => 'donation',
                'page_name' => 'cases',
                'image' => resizeImage('about.jpg', 1920, 649),
            ],
            [
                'title_ar' => 'الاحداث',
                'title_en' => 'Events',
                'page_name' => 'events',
                'image' => resizeImage('about.jpg', 1920, 649),
            ],
            [
                'title_ar' => 'عننا',
                'title_en' => 'About us',
                'page_name' => 'aboutUs',
                'image' => resizeImage('about.jpg', 1920, 649),
            ],
            [
                'title_ar' => 'المتطوعين',
                'title_en' => 'Volunteers',
                'page_name' => 'volunteers',
                'image' => resizeImage('about.jpg', 1920, 649),
            ],
            [
                'title_ar' => 'المدوانات',
                'title_en' => 'Blogs',
                'page_name' => 'blogs',
                'image' => resizeImage('about.jpg', 1920, 649),
            ],
            [
                'title_ar' => 'اتصل بنا',
                'title_en' => 'Contact',
                'page_name' => 'contact',
                'image' => resizeImage('about.jpg', 1920, 649),
            ],
        ];
        foreach ($pages as $page) {
            \App\PageSetting::create($page);
        }
    }
}
