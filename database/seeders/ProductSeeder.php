<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo',
                'price'=>'12000',
                'description'=>'a smartphone with 4GB RAM and 256GB storage',
                'category'=>'mobile',
                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/512yCSc9nQL._SX679_.jpg',
            ],
            [
                'name'=>'I-phone',
                'price'=>'56000',
                'description'=>'a smartphone with 4GB RAM and 256GB storage',
                'category'=>'mobile',
                'gallery'=>'https://images-eu.ssl-images-amazon.com/images/I/41FqG3cHV9L._SY445_SX342_QL70_FMwebp_.jpg',
            ],
            [
                'name'=>'Motorola',
                'price'=>'10000',
                'description'=>'a smartphone with 4GB RAM and 256GB storage',
                'category'=>'mobile',
                'gallery'=>'https://5.imimg.com/data5/ML/RQ/MY-50912093/motorola-moto-c-plus-500x500.jpg',
            ]
        ]);
    }
}
