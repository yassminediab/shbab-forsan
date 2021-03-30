<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\AboutUsSection;
use App\AreaSection;
use App\CaseSection;
use App\CaseModel;
use App\Video;
use App\ProblemSection;
use App\VolunteerSection;
use App\Volunteer;
use App\BlogSection;
use App\Blog;
use App\EventSection;
use App\Event;
use App\Number;
use App\TestimonialSection;
use App\Testimonial;
use App\Problem;
use App\Footer;
use App\SocialMedia;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index', [
            'sliders' => Slider::all(),
            'about' => AboutUsSection::first(),
            'areas' => AreaSection::limit(3)->get(),
            'caseSection' => CaseSection::first(),
            'cases' => CaseModel::limit(3)->latest()->get(),
            'video' => Video::first(),
            'problemSection' => ProblemSection::first(),
            'problems' => Problem::limit(4)->get(),
            'volunteerSection' => VolunteerSection::first(),
            'volunteers' => Volunteer::limit(4)->get(),
            'blogs' => Blog::limit(3)->get(),
            'blogSection' => BlogSection::first(),
            'events' => Event::limit(4)->get(),
            'eventSection' => EventSection::first(),
            'numbers' => Number::limit(3)->get(),
            'testimonialSection' => TestimonialSection::first(),
            'testimonials' => Testimonial::all(),
        ]);
    }
}
