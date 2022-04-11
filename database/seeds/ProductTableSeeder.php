<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://vangogh.teespring.com/v3/image/f8guRGzjgKxbO7AuRxGEHNLbYmE/480/560.jpg',
            'title' => 'Blacks for Trump',
            'description' => 'Black For Trump Tee.',
            'price' => 10.0
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://vangogh.teespring.com/v3/image/OOS-QuUDMaq9Dc2jlIXlKlumwdA/480/560.jpg',
            'title' => 'MAGA',
            'description' => 'Trump #MAGA Tee.',
            'price' => 10.0
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://vangogh.teespring.com/v3/image/NbNJsaWG_7EHoQfM_6uuqBd1KW0/480/560.jpg',
            'title' => 'LOVE',
            'description' => 'Love President Tee.',
            'price' => 10.0
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://vangogh.teespring.com/v3/image/wicHSOkp_iVrg8aLpC5d9isWORs/480/560.jpg',
            'title' => 'Trump The Hero',
            'description' => 'Trump The Hero Tee.',
            'price' => 10.0
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://vangogh.teespring.com/v3/image/j3gWrpLnJLvfqC8JkOAlVmbs1Ew/480/560.jpg',
            'title' => 'Pray For Trump',
            'description' => 'Pray for Trump Tee.',
            'price' => 10.0
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://vangogh.teespring.com/v3/image/UvtsAm5qqECEKNwixkxveDgz_9k/480/560.jpg',
            'title' => 'You are fake news',
            'description' => 'Fake news Tee.',
            'price' => 10.0
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://vangogh.teespring.com/v3/image/G31NMdHk6RHKgoBApHZE_9WNrAM/480/560.jpg',
            'title' => 'Let em eat Cake',
            'description' => 'Let em eat cake Tee.',
            'price' => 10.0
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://vangogh.teespring.com/v3/image/T2HBOPEzce9me890T6qatApKpuE/480/560.jpg',
            'title' => 'One Nation',
            'description' => 'One Nation Tee.',
            'price' => 10.0
        ]);
        $product->save();
    }
}
