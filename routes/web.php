<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('copy', 'CopyDbController@index');
Auth::routes();
Route::post('newsletter', function(){
return 12;
});
Route::get('/', 'HomeController@index');
// Route::get('locale/{locale}', 'Partials\LanguagesController@index')->name('locale');
Route::get('modelblog/{id}', 'HomeController@getblogModel');
// front end

//cases
Route::resource('cases', 'CaseController');
//blog
Route::resource('blogs', 'BlogController');

//event
Route::resource('events', 'EventController');

//contact
Route::resource('contact', 'ContactController');

//volunteer
Route::resource('volunteer', 'VolunteerController');

Route::resource('volunteer-data', 'VolunteerDataController');

//about us
Route::resource('about-us', 'AboutUsController');
//ADMIN
// Language
Route::get('locale/{locale}', 'LanguagesController@index')->name('locale');
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    //setting
    Route::get('setting', 'Admin\SettingController@index')->name('blogs.index');
    Route::get('setting/edit/{id}', 'Admin\SettingController@edit');
    Route::get('setting/show/{id}', 'Admin\SettingController@show');
    Route::get('setting/delete/{id}', 'Admin\SettingController@delete');
    Route::get('setting/create', 'Admin\SettingController@create');
    Route::post('setting/store', 'Admin\SettingController@store');
    Route::post('setting/update', 'Admin\SettingController@update');

    //about us
    Route::get('about-us', 'Admin\AboutUsController@index')->name('about-us.index');
    Route::get('about-us/edit/{id}', 'Admin\AboutUsController@edit');
    Route::post('about-us/update', 'Admin\AboutUsController@update');

    //footer
    Route::get('footer', 'Admin\FooterController@index')->name('footer.index');
    Route::get('footer/edit/{id}', 'Admin\FooterController@edit');
    Route::get('footer/show/{id}', 'Admin\FooterController@show');
    Route::get('footer/delete/{id}', 'Admin\FooterController@delete');
    Route::get('footer/create', 'Admin\FooterController@create');
    Route::post('footer/store', 'Admin\FooterController@store');
    Route::post('footer/update', 'Admin\FooterController@update');

    //blogs
    Route::get('blogs', 'Admin\BlogController@index')->name('blogs.index');
    Route::get('blogs/edit/{id}', 'Admin\BlogController@edit');
    Route::get('blogs/show/{id}', 'Admin\BlogController@show');
    Route::get('blogs/delete/{id}', 'Admin\BlogController@delete');
    Route::get('blogs/create', 'Admin\BlogController@create');
    Route::post('blogs/store', 'Admin\BlogController@store');
    Route::post('blogs/update', 'Admin\BlogController@update');


    // events
    Route::get('events', 'Admin\EventController@index')->name('events.index');
    Route::get('events/edit/{id}', 'Admin\EventController@edit');
    Route::get('events/show/{id}', 'Admin\EventController@show');
    Route::get('events/delete/{id}', 'Admin\EventController@delete');
    Route::get('events/create', 'Admin\EventController@create');
    Route::post('events/store', 'Admin\EventController@store');
    Route::post('events/update', 'Admin\EventController@update');

    // cases
    Route::get('cases', 'Admin\CaseController@index')->name('cases.index');
    Route::get('cases/edit/{id}', 'Admin\CaseController@edit');
    Route::get('cases/show/{id}', 'Admin\CaseController@show');
    Route::get('cases/delete/{id}', 'Admin\CaseController@delete');
    Route::get('cases/create', 'Admin\CaseController@create');
    Route::post('cases/store', 'Admin\CaseController@store');
    Route::post('cases/update', 'Admin\CaseController@update');

    // categories
    Route::get('categories', 'Admin\CategoryController@index')->name('categories.index');
    Route::get('categories/edit/{id}', 'Admin\CategoryController@edit');
    Route::get('categories/show/{id}', 'Admin\CategoryController@show');
    Route::get('categories/delete/{id}', 'Admin\CategoryController@delete');
    Route::get('categories/create', 'Admin\CategoryController@create');
    Route::post('categories/store', 'Admin\CategoryController@store');
    Route::post('categories/update', 'Admin\CategoryController@update');

    //tags
    Route::get('tags', 'Admin\TagController@index')->name('tags.index');
    Route::get('tags/edit/{id}', 'Admin\TagController@edit');
    Route::get('tags/show/{id}', 'Admin\TagController@show');
    Route::get('tags/delete/{id}', 'Admin\TagController@delete');
    Route::get('tags/create', 'Admin\TagController@create');
    Route::post('tags/store', 'Admin\TagController@store');
    Route::post('tags/update', 'Admin\TagController@update');

    //contact
    Route::get('contact', 'Admin\ContactController@index')->name('contact.index');
    Route::get('contact/edit/{id}', 'Admin\ContactController@edit');
    Route::get('contact/show/{id}', 'Admin\ContactController@show');
    Route::get('contact/delete/{id}', 'Admin\ContactController@delete');
    Route::get('contact/create', 'Admin\ContactController@create');
    Route::post('contact/store', 'Admin\ContactController@store');
    Route::post('contact/update', 'Admin\ContactController@update');

    //volunteers
    Route::get('volunteers', 'Admin\VolunteerController@index')->name('volunteer.index');
    Route::get('volunteers/edit/{id}', 'Admin\VolunteerController@edit');
    Route::get('volunteers/show/{id}', 'Admin\VolunteerController@show');
    Route::get('volunteers/delete/{id}', 'Admin\VolunteerController@delete');
    Route::get('volunteers/create', 'Admin\VolunteerController@create');
    Route::post('volunteers/store', 'Admin\VolunteerController@store');
    Route::post('volunteers/update', 'Admin\VolunteerController@update');

    //volunteers data
    Route::get('volunteers-data', 'Admin\VolunteerDataController@index')->name('volunteer-admin-data.index');
    Route::get('volunteers-data/delete/{id}', 'Admin\VolunteerDataController@delete');

    //volunteers
    Route::get('slider', 'Admin\SliderController@index')->name('slider.index');
    Route::get('slider/edit/{id}', 'Admin\SliderController@edit');
    Route::get('slider/show/{id}', 'Admin\SliderController@show');
    Route::get('slider/delete/{id}', 'Admin\SliderController@delete');
    Route::get('slider/create', 'Admin\SliderController@create');
    Route::post('slider/store', 'Admin\SliderController@store');
    Route::post('slider/update', 'Admin\SliderController@update');

    //aboutSection
    Route::get('aboutSection', 'Admin\AboutUsSectionController@index')->name('aboutSection.index');
    Route::get('aboutSection/edit/{id}', 'Admin\AboutUsSectionController@edit');
    Route::get('aboutSection/show/{id}', 'Admin\AboutUsSectionController@show');
    Route::get('aboutSection/delete/{id}', 'Admin\AboutUsSectionController@delete');
    Route::get('aboutSection/create', 'Admin\AboutUsSectionController@create');
    Route::post('aboutSection/store', 'Admin\AboutUsSectionController@store');
    Route::post('aboutSection/update', 'Admin\AboutUsSectionController@update');

    //video
    Route::get('video', 'Admin\VideoController@index')->name('video.index');
    Route::get('video/edit/{id}', 'Admin\VideoController@edit');
    Route::get('video/show/{id}', 'Admin\VideoController@show');
    Route::get('video/delete/{id}', 'Admin\VideoController@delete');
    Route::get('video/create', 'Admin\VideoController@create');
    Route::post('video/store', 'Admin\VideoController@store');
    Route::post('video/update', 'Admin\VideoController@update');

    //number
    Route::get('number', 'Admin\NumberController@index')->name('number.index');
    Route::get('number/edit/{id}', 'Admin\NumberController@edit');
    Route::get('number/show/{id}', 'Admin\NumberController@show');
    Route::get('number/delete/{id}', 'Admin\NumberController@delete');
    Route::get('number/create', 'Admin\NumberController@create');
    Route::post('number/store', 'Admin\NumberController@store');
    Route::post('number/update', 'Admin\NumberController@update');

    //blog section
    Route::get('blog/section', 'Admin\BlogSectionController@index')->name('blog.section.index');
    Route::get('blog/section/edit/{id}', 'Admin\BlogSectionController@edit');
    Route::get('blog/section/show/{id}', 'Admin\BlogSectionController@show');
    Route::get('blog/section/delete/{id}', 'Admin\BlogSectionController@delete');
    Route::get('blog/section/create', 'Admin\BlogSectionController@create');
    Route::post('blog/section/store', 'Admin\BlogSectionController@store');
    Route::post('blog/section/update', 'Admin\BlogSectionController@update');

    //volunteer section
    Route::get('volunteer/section', 'Admin\VolunteerSectionController@index')->name('volunteer.section.index');
    Route::get('volunteer/section/edit/{id}', 'Admin\VolunteerSectionController@edit');
    Route::get('volunteer/section/show/{id}', 'Admin\VolunteerSectionController@show');
    Route::get('volunteer/section/delete/{id}', 'Admin\VolunteerSectionController@delete');
    Route::get('volunteer/section/create', 'Admin\VolunteerSectionController@create');
    Route::post('volunteer/section/store', 'Admin\VolunteerSectionController@store');
    Route::post('volunteer/section/update', 'Admin\VolunteerSectionController@update');

    //problem section section
    Route::get('problem/section', 'Admin\ProblemSectionController@index')->name('problem.section.index');
    Route::get('problem/section/edit/{id}', 'Admin\ProblemSectionController@edit');
    Route::get('problem/section/show/{id}', 'Admin\ProblemSectionController@show');
    Route::get('problem/section/delete/{id}', 'Admin\ProblemSectionController@delete');
    Route::get('problem/section/create', 'Admin\ProblemSectionController@create');
    Route::post('problem/section/store', 'Admin\ProblemSectionController@store');
    Route::post('problem/section/update', 'Admin\ProblemSectionController@update');

    //volunteer section
    Route::get('page/settings', 'Admin\PageSettingController@index')->name('pageSettings.index');
    Route::get('page/settings/edit/{id}', 'Admin\PageSettingController@edit');
    Route::get('page/settings/show/{id}', 'Admin\PageSettingController@show');
    Route::get('page/settings/delete/{id}', 'Admin\PageSettingController@delete');
    Route::get('page/settings/create', 'Admin\PageSettingController@create');
    Route::post('page/settings/store', 'Admin\PageSettingController@store');
    Route::post('page/settings/update', 'Admin\PageSettingController@update');

    //case section section
    Route::get('case/section', 'Admin\CaseSectionController@index')->name('case.section.index');
    Route::get('case/section/edit/{id}', 'Admin\CaseSectionController@edit');
    Route::get('case/section/show/{id}', 'Admin\CaseSectionController@show');
    Route::get('procaseblem/section/delete/{id}', 'Admin\CaseSectionController@delete');
    Route::get('case/section/create', 'Admin\CaseSectionController@create');
    Route::post('case/section/store', 'Admin\CaseSectionController@store');
    Route::post('case/section/update', 'Admin\CaseSectionController@update');

    //area section section
    Route::get('area/section', 'Admin\AreSectionController@index')->name('area.section.index');
    Route::get('area/section/edit/{id}', 'Admin\AreSectionController@edit');
    Route::get('area/section/show/{id}', 'Admin\AreSectionController@show');
    Route::get('area/section/delete/{id}', 'Admin\AreSectionController@delete');
    Route::get('area/section/create', 'Admin\AreSectionController@create');
    Route::post('area/section/store', 'Admin\AreSectionController@store');
    Route::post('area/section/update', 'Admin\AreSectionController@update');

    //problem section
    Route::get('problems', 'Admin\ProblemController@index')->name('problems.index');
    Route::get('problems/edit/{id}', 'Admin\ProblemController@edit');
    Route::get('problems/show/{id}', 'Admin\ProblemController@show');
    Route::get('problems/delete/{id}', 'Admin\ProblemController@delete');
    Route::get('problems/create', 'Admin\ProblemController@create');
    Route::post('problems/store', 'Admin\ProblemController@store');
    Route::post('problems/update', 'Admin\ProblemController@update');

    //testimonials
    Route::get('testimonials', 'Admin\TestimonialController@index')->name('testimonials.index');
    Route::get('testimonials/edit/{id}', 'Admin\TestimonialController@edit');
    Route::get('testimonials/show/{id}', 'Admin\TestimonialController@show');
    Route::get('testimonials/delete/{id}', 'Admin\TestimonialController@delete');
    Route::get('testimonials/create', 'Admin\TestimonialController@create');
    Route::post('testimonials/store', 'Admin\TestimonialController@store');
    Route::post('testimonials/update', 'Admin\TestimonialController@update');

    //testimonials section
    Route::get('testimonial/section', 'Admin\TestimonialSectionController@index')->name('testimonial.section.index');
    Route::get('testimonial/section/edit/{id}', 'Admin\TestimonialSectionController@edit');
    Route::get('testimonial/section/show/{id}', 'Admin\TestimonialSectionController@show');
    Route::get('testimonial/section/delete/{id}', 'Admin\TestimonialSectionController@delete');
    Route::get('testimonial/section/create', 'Admin\TestimonialSectionController@create');
    Route::post('testimonial/section/store', 'Admin\TestimonialSectionController@store');
    Route::post('testimonial/section/update', 'Admin\TestimonialSectionController@update');

    //event section
    Route::get('event/section', 'Admin\EventSectionController@index')->name('event.section.index');
    Route::get('event/section/edit/{id}', 'Admin\EventSectionController@edit');
    Route::get('event/section/show/{id}', 'Admin\EventSectionController@show');
    Route::get('event/section/delete/{id}', 'Admin\EventSectionController@delete');
    Route::get('event/section/create', 'Admin\EventSectionController@create');
    Route::post('event/section/store', 'Admin\EventSectionController@store');
    Route::post('event/section/update', 'Admin\EventSectionController@update');

    //blogs
    Route::get('social-media', 'Admin\SocialMediaController@index')->name('socialMedia.index');
    Route::get('social-media/edit/{id}', 'Admin\SocialMediaController@edit');
    Route::get('social-media/delete/{id}', 'Admin\SocialMediaController@delete');
    Route::post('social-media/update', 'Admin\SocialMediaController@update');

    Route::get('/', function () {
        return view('admin.index');
    });
});



Route::view('/new-page', 'frontend.new-page');