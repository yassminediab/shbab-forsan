<?php

use Illuminate\Database\Seeder;
use App\Slider;
use App\AboutUsSection;
use App\AreaSection;
use App\CaseModel;
use App\CaseSection;
use App\Video;
use App\ProblemSection;
use App\Problem;
use App\Volunteer;
use App\TestimonialSection;
use App\Testimonial;
use App\Number;
use App\EventSection;
use App\BlogSection;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'title_ar' => 'title ',
            'title_en' => 'title ',
            'content_ar' => 'ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القاأو شكل توضع الام طريقة لوريم إيبسوم ',
            'content_en' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'image' => resizeImage('about.jpg', 1920, 649),
            'button_title_en' => 'button title en', 
            'button_title_ar' =>'button title ar', 
            'button_url' => '#',
        ]);

         Slider::create([
            'title_ar' => 'title ',
            'title_en' => 'title ',
            'content_ar' => 'ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القاأو شكل توضع الام طريقة لوريم إيبسوم ',
            'content_en' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'image' => resizeImage('about.jpg', 1920, 649),
            'button_title_en' => 'button title en', 
            'button_title_ar' =>'button title ar', 
            'button_url' => '#',
        ]);

        AboutUsSection::create([
             'title_ar' => 'title ',
            'title_en' => 'title ',
            'content_ar' => 'ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القاأو شكل توضع الام طريقة لوريم إيبسوم ',
            'content_en' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
        ]);

        AreaSection::create([
            'title_ar' => 'title ',
            'title_en' => 'title ',
            'content_ar' => 'ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القاأو شكل توضع الام طريقة لوريم إيبسوم ',
            'content_en' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'icon' => 'test'
        ]);

        CaseSection::create([
            'title_ar' => 'title ',
            'title_en' => 'title ',
        ]);

        CaseModel::create([
            'title_ar' => 'title ',
            'title_en' => 'title ',
            'content_ar' => 'ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القاأو شكل توضع الام طريقة لوريم إيبسوم ',
            'content_en' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'image' => resizeImage('about.jpg', 1920, 649),
            'target_share' => 1000,
            'current_share' => 50
        ]);

        Video::create([
            'title_ar' => 'title ',
            'title_en' => 'title ',
            'url' => '#',
        ]);

        ProblemSection::create([
            'title_ar' => 'title ',
            'title_en' => 'title ',
        ]);

        Problem::create([
            'title_ar' => 'title ',
            'title_en' => 'title ',
            'content_ar' => 'ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القاأو شكل توضع الام طريقة لوريم إيبسوم ',
            'content_en' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'icon' => 'test'
        ]);

        Volunteer::create([
            'name' => 'yassmin diab',
            'email' => 'admin@gmail.com',
            'phone' => '0000',
            'address' => 'test',
            'message' => 'test'
        ]);

        TestimonialSection::create([
            'title_ar' => 'title ',
            'title_en' => 'title ',
            'content_ar' => 'ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القاأو شكل توضع الام طريقة لوريم إيبسوم ',
            'content_en' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
        ]);

        Testimonial::create([
            'title_ar' => 'title ',
            'title_en' => 'title ',
            'content_ar' => 'ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القاأو شكل توضع الام طريقة لوريم إيبسوم ',
            'content_en' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
        ]);

        Number::create([
            'title_ar' => 'title ',
            'title_en' => 'title ',
            'icon' => 'test',
            'number' => 1000
        ]);

        EventSection::create([
            'title_ar' => 'title ',
            'title_en' => 'title ',
            'content_ar' => 'ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القاأو شكل توضع الام طريقة لوريم إيبسوم ',
            'content_en' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
        ]);

        BlogSection::create([
            'title_ar' => 'title ',
            'title_en' => 'title ',
        ]);
    }
}
