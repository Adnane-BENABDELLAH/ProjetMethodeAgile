<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
          'name' => 'MacBook Pro',
          'slug' => 'macbook-pro',
          'details' => '15 inch, 1TB SSD, 32GB RAM',
          'price' => 249999,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'
        ]);

        Product::create([
          'name' => 'laptop 2',
          'slug' => 'laptop-2',
          'details' => '15 inch, 1TB SSD, 32GB RAM',
          'price' => 149999,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'
        ]);

        Product::create([
          'name' => 'laptop 3',
          'slug' => 'laptop-3',
          'details' => '15 inch, 1TB SSD, 32GB RAM',
          'price' => 149999,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
        ]);

        Product::create([
          'name' => 'laptop 4',
          'slug' => 'laptop-4',
          'details' => '15 inch, 1TB SSD, 32GB RAM',
          'price' => 149999,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'
        ]);

        Product::create([
          'name' => 'laptop 5',
          'slug' => 'laptop-5',
          'details' => '15 inch, 1TB SSD, 32GB RAM',
          'price' => 149999,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'
        ]);

        Product::create([
          'name' => 'laptop 6',
          'slug' => 'laptop-6',
          'details' => '15 inch, 1TB SSD, 32GB RAM',
          'price' => 149999,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'
        ]);

        Product::create([
          'name' => 'laptop 7',
          'slug' => 'laptop-7',
          'details' => '15 inch, 1TB SSD, 32GB RAM',
          'price' => 149999,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'
        ]);

        Product::create([
          'name' => 'laptop 8',
          'slug' => 'laptop-8',
          'details' => '15 inch, 1TB SSD, 32GB RAM',
          'price' => 149999,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'
        ]);

        Product::create([
          'name' => 'laptop 9',
          'slug' => 'laptop-9',
          'details' => '15 inch, 1TB SSD, 32GB RAM',
          'price' => 149999,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'
        ]);
    }
}
