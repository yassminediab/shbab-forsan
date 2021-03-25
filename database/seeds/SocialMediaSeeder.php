<?php

use Illuminate\Database\Seeder;
use App\SocialMedia;
use DB as DBS;
class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DBS::table('social_media')->delete();
        $socials = ['facebook-f', 'instagram', 'linkedin-in', 'twitter', 'youtube'];

        foreach($socials as $social)
        {
            SocialMedia::create([
                'platform' => $social,
                'url' => '#',
            ]);
        }
    }
}
