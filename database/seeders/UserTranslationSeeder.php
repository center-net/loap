<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\SettingTranslation;
use App\Models\User;
use App\Models\UserTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'username'=>'admin',
                'email'=>'admin@admin.com',
                'password'=> bcrypt('123456'),
                'last_seen'         => null,
                'role_id'           => 1,
                'email_verified_at' => now(),
                'remember_token'    => Str::random(10),
            ],
            ]);

        UserTranslation::insert([
            [
                'user_id'=>'1',
                'locale'=>'en',
                'name'=>'mohamed yuosef elnamroty',
            ],
            [
                'user_id'=>'1',
                'locale'=>'ar',
                'name'=>'محمد يوسف النمروطي',
            ],
        ]);
        Setting::insert([
            [
                'email'=>'admin@admin.com',
            ],
        ]);
        SettingTranslation::insert([
            [
                'setting_id'=>'1',
                'locale'=>'en',
                'title'=>'loap',
            ],
            [
                'setting_id'=>'1',
                'locale'=>'ar',
                'title'=>'جامعة الشعوب العربية',
            ],
        ]);
    }
}
