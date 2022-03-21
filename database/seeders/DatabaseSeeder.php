<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Agus Budi',
        //     'email' => 'agus.budi@its.ac.id',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Fitrah Arie',
        //     'email' => 'fitrah@mhs.its.ac.id',
        //     'password' => bcrypt('123')
        // ]);

        Category::create([
            'name' => 'New Releases',
            'slug' => 'new-releases'
        ]);

        Category::create([
            'name' => 'Recommendations',
            'slug' => 'recommendations'
        ]);

        Category::create([
            'name' => 'Reviews',
            'slug' => 'reviews'
        ]);

        // Article::create([
        //     'category_id' => 1,
        //     'title' => 'January 2022 Releases',
        //     'slug' => 'january-2022-releases',
        //     'author' => 'Dyandra Paramitha',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, porro voluptatibus repudiandae animi ex rem, temporibus incidunt eaque cupiditate voluptas tenetur tempora sunt architecto consequuntur iure esse sed nemo. Itaque.',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, porro voluptatibus repudiandae animi ex rem'
        // ]);

        // Article::create([
        //     'category_id' => 2,
        //     'title' => 'Comfort Reads Recommendations',
        //     'slug' => 'comfort-reads-recommendations',
        //     'author' => 'Dyandra Paramitha',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, porro voluptatibus repudiandae animi ex rem, temporibus incidunt eaque cupiditate voluptas tenetur tempora sunt architecto consequuntur iure esse sed nemo. Itaque.',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, porro voluptatibus repudiandae animi ex rem'
        // ]);
        

        // Article::create([
        //     'category_id' => 1,
        //     'title' => 'February 2022 Releases',
        //     'slug' => 'february-2022-releases',
        //     'author' => 'Dyandra Paramitha',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, porro voluptatibus repudiandae animi ex rem, temporibus incidunt eaque cupiditate voluptas tenetur tempora sunt architecto consequuntur iure esse sed nemo. Itaque.',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, porro voluptatibus repudiandae animi ex rem'
        // ]);

        // Article::create([
        //     'category_id' => 1,
        //     'title' => 'March 2022 Releases',
        //     'slug' => 'march-2022-releases',
        //     'author' => 'Dyandra Paramitha',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, porro voluptatibus repudiandae animi ex rem, temporibus incidunt eaque cupiditate voluptas tenetur tempora sunt architecto consequuntur iure esse sed nemo. Itaque.',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, porro voluptatibus repudiandae animi ex rem'
        // ]);

        // Article::create([
        //     'category_id' => 3,
        //     'title' => 'Pachinko Review',
        //     'slug' => 'pachinko-review',
        //     'author' => 'Dyandra Paramitha',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, porro voluptatibus repudiandae animi ex rem, temporibus incidunt eaque cupiditate voluptas tenetur tempora sunt architecto consequuntur iure esse sed nemo. Itaque.',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, porro voluptatibus repudiandae animi ex rem'
        // ]);

        // Article::create([
        //     'category_id' => 2,
        //     'title' => 'Diverse Fantasy Recommendations',
        //     'slug' => 'diverse-fantasy-recommendations',
        //     'author' => 'Dyandra Paramitha',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, porro voluptatibus repudiandae animi ex rem, temporibus incidunt eaque cupiditate voluptas tenetur tempora sunt architecto consequuntur iure esse sed nemo. Itaque.',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, porro voluptatibus repudiandae animi ex rem'
        // ]);

        // Article::create([
        //     'category_id' => 1,
        //     'title' => 'April 2022 Releases',
        //     'slug' => 'april-2022-releases',
        //     'author' => 'Dyandra Paramitha',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, porro voluptatibus repudiandae animi ex rem, temporibus incidunt eaque cupiditate voluptas tenetur tempora sunt architecto consequuntur iure esse sed nemo. Itaque.',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, porro voluptatibus repudiandae animi ex rem'
        // ]);


        // Article::create([
        //     'category_id' => 2,
        //     'title' => 'YA Contemporary Recommendations',
        //     'slug' => 'ya-contemporary-recommendations',
        //     'author' => 'Dyandra Paramitha',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, porro voluptatibus repudiandae animi ex rem, temporibus incidunt eaque cupiditate voluptas tenetur tempora sunt architecto consequuntur iure esse sed nemo. Itaque.',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, porro voluptatibus repudiandae animi ex rem'
        // ]);

        // Article::create([
        //     'category_id' => 3,
        //     'title' => 'Jade City Review',
        //     'slug' => 'jade-city-review',
        //     'author' => 'Dyandra Paramitha',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, porro voluptatibus repudiandae animi ex rem, temporibus incidunt eaque cupiditate voluptas tenetur tempora sunt architecto consequuntur iure esse sed nemo. Itaque.',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, porro voluptatibus repudiandae animi ex rem'
        // ]);


        \App\Models\User::factory(5)->create();
        \App\Models\Article::factory(20)->create();
    }
}
