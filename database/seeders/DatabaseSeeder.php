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
        Post::factory()->create();
        /*User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);
        Post::create([
            'title' => 'My First Post',
            'slug' => 'my-first-post',
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur....',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi culpa deserunt dolores ducimus eius nobis officiis omnis perferendis, quas quia, quis quos repudiandae soluta ullam vel vitae voluptatem. Ad alias aliquam atque consectetur cupiditate dolorem doloremque dolorum eaque earum eveniet excepturi facere id illo ipsam ipsum iusto laboriosam laborum libero maxime molestiae obcaecati odio odit officia omnis praesentium quas quasi qui quos recusandae, suscipit temporibus ut voluptas voluptatem? Adipisci debitis delectus ducimus eum iusto labore non sed tempora ut voluptatibus!',
            'published_at' => '2022-03-10'
        ]);
        Post::create([
            'title' => 'My Family Post',
            'slug' => 'my-second-post',
            'user_id' => $user->id,
            'category_id' => $family->id,
            'excerpt' => 'Lorem ipsum dolor sit amet....',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi culpa deserunt dolores ducimus eius nobis officiis omnis perferendis, quas quia, quis quos repudiandae soluta ullam vel vitae voluptatem. Ad alias aliquam atque consectetur cupiditate dolorem doloremque dolorum eaque earum eveniet excepturi facere id illo ipsam ipsum iusto laboriosam laborum libero maxime molestiae obcaecati odio odit officia omnis praesentium quas quasi qui quos recusandae, suscipit temporibus ut voluptas voluptatem?',
            'published_at' => '2022-03-10'
        ]);
        Post::create([
            'title' => 'My Work Post',
            'slug' => 'my-third-post',
            'user_id' => $user->id,
            'category_id' => $work->id,
            'excerpt' => 'Lorem ipsum....',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi culpa deserunt dolores ducimus eius nobis officiis omnis perferendis, quas quia, quis quos repudiandae soluta ullam vel vitae voluptatem. Ad alias aliquam atque consectetur cupiditate dolorem doloremque dolorum eaque earum eveniet excepturi facere id illo ipsam ipsum iusto laboriosam laborum libero ',
            'published_at' => '2022-03-10'
        ]);*/
    }
}
