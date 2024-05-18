<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurant = new Restaurant();
        $restaurant->title='Paradise Restaurant';
        $restaurant->slug=str()->slug('Paradise Restaurant');
        $restaurant->user_id=1;
        $restaurant->category_id=1;
        $restaurant->content= 'Special items are reported on the income statement and are separated out from categories of so investors can more accurately compare the company numbers periods.';
        //$restaurant->featured_img ='https://picsum.photos/200/300';
        $restaurant->save();
    }
}
