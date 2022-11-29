<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use phpDocumentor\Reflection\Types\Self_;

class Setting extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    public $translatedAttributes = ['title', 'content', 'address'];
    protected $fillable = ['id', 'logo', 'favicon', 'facebook', 'instagram', 'phone', 'email', 'created_at', 'updated_at', 'deleted_at'];
    public $timestamps = false;

    public static function checkSettings()
    {
        $settings = Self::all();
        if (count($settings) < 1) {
            $data = [
                'id' => 1,
            ];
            foreach (LaravelLocalization::getSupportedLocales() as $key => $value) {
                $data[$key]['title'] = $value;
            }
            Self::create($data);
        }

        return Self::first();
    }
}
