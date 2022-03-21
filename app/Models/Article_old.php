<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article 
{
    // use HasFactory;
    private static $articles = [
        [
            "title" => "Ukraine vs Russia",
            "slug" => "ukraine-vs-rusia",
            "author"=> "Russia Today",
            "body" => "Russia side - Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti assumenda nemo quasi, nisi labore rem deserunt excepturi atque, quibusdam repudiandae error nesciunt? Ad, blanditiis quidem magni recusandae asperiores unde est."
        ],

        [
            "title" => "Omicron di Indonesia",
            "slug" => "omicron-di-indonesia",
            "author"=> "Pemuda Pancasila Bogor",
            "body" => "Omicron - Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti assumenda nemo quasi, nisi labore rem deserunt excepturi atque, quibusdam repudiandae error nesciunt? Ad, blanditiis quidem magni recusandae asperiores unde est.. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti assumenda nemo quasi, nisi labore rem deserunt excepturi atque, quibusdam repudiandae error nesciunt? Ad, blanditiis quidem magni recusandae asperiores unde est."
        ],
    ]; 

    public static function all(){
        return collect(self::$articles);
        // return self::$articles;
    }

    public static function find($slug){
        $articles = static::all();
        // $new_post = [];
        // foreach($articles as $article){
        //     if($article["slug"] === $slug){
        //         $new_post = $article;
        //     }
        // }

        return $articles->firstWhere('slug', $slug);
    }
}
