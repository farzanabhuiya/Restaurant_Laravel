<?php

namespace Database\Seeders;

use App\Models\Posttitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\PostInc;

class PosttitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posttitle=new Posttitle();
        $posttitle->title='Lunch Item';
        $posttitle->content= 'Special items are reported on the income statement and are separated out from categories of so investors can more accurately compare the company numbers periods.';
        $posttitle->save();

    }
}
