<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        //     // 'posttitle_id'=>1,
        //     // 'slug'=>str()->slug(fake()->name()),
        //     // // 'slug'=>str()->slug('dinner item'),
        //     // 'user_id'=>1,
        //     // 'category_id'=>1,
        //     // 'produtc_name'=>fake()->name(),
        //     // 'featured_img'=>"https://picsum.photos/200"
        ];
    }
}
