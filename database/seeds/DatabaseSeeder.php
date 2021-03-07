<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(SocialMediaSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(VolunteerSeeder::class);
        $this->call(HomePageSeeder::class);
    }
}
