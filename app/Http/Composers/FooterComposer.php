<?php

namespace App\Http\Composers;

use App\Footer;
use App\SocialMedia;
use Illuminate\View\View;

class FooterComposer
{
    public function compose(View $view)
    {
        $footer = Footer::first();
        $view->with([
            'footer'=> $footer,
            'socialMedias' => SocialMedia::all()
        ]);
    }
}
