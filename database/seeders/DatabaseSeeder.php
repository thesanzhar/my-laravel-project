<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::truncate();
        Post::truncate();
        Category::truncate();

//        $user = User::factory()->create();

        $post = Post::factory(10)->create();
//
//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);

//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title'=>'My Family Post',
//            'slug' => 'my-first-post',
//            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut varius magna purus, eget interdum leo iaculis ac. Proin metus neque, porta at aliquam dapibus, venenatis id augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vivamus finibus rhoncus quam quis.</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title'=>'My Work Post',
//            'slug' => 'my-work-post',
//            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut varius magna purus, eget interdum leo iaculis ac. Proin metus neque, porta at aliquam dapibus, venenatis id augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vivamus finibus rhoncus quam quis.</p>'
//        ]);
    }
}
