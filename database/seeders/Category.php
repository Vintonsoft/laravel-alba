<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        $categories = [
            [
                'title'         =>      'Elektronik',
                'seo_url'       =>      'elektronik',
            ],
            [
                'title'         =>      'Moda',
                'seo_url'       =>      'moda',
            ],
            [
                'title'         =>      'Ev & Bahçe',
                'seo_url'       =>      'ev-bahce',
            ],
            [
                'title'         =>      'Kozmetik',
                'seo_url'       =>      'kozmetik',
            ],
            [
                'title'         =>      'Anne & Bebek',
                'seo_url'       =>      'anne-bebek',
            ],
            [
                'title'         =>      'Süpermarket',
                'seo_url'       =>      'supermarket',
            ],
            [
                'title'         =>      'Spor',
                'seo_url'       =>      'spor',
            ],
            [
                'title'         =>      'Kitap & Müzik',
                'seo_url'       =>      'kitap-muzik',
            ],
        ];
        DB::table('categories')->insert($categories);
    }
}
