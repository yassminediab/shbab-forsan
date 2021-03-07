<?php

use Illuminate\Database\Seeder;
use App\SocialMedia;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $socials = ['facebook-f', 'instagram', 'linkedin-in', 'google-plus-g'];

        foreach($socials as $social)
        {
            SocialMedia::create([
                'platform' => $social,
                'url' => '#',
            ]);
        }
    }
}
