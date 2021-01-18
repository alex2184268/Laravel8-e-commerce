<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
                'name' => 'Iphone XR',
                'price'=>  '23000',
                'description'=>'IphoneXR 256G',
                'category' => 'moblie',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0HBtZgwispUNYGDZU5BujHxNXKLw4xbZb8_jpoXBe98a0W4AmoCUnevaluywgUcDbRvKpcm4&usqp=CAc'
            ],
            [
                'name' => 'Iphone 12 ProMax',
                'price'=>  '41000',
                'description'=>'Iphone12 PorMax 256G',
                'category' => 'moblie',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0HBtZgwispUNYGDZU5BujHxNXKLw4xbZb8_jpoXBe98a0W4AmoCUnevaluywgUcDbRvKpcm4&usqp=CAc'
            ],
            [
                'name' => 'Samsung Galaxy Note20 ',
                'price'=>  '27600',
                'description'=>'5G (8G/256G)-星霧金',
                'category' => 'moblie',
                'gallery' => 'https://www.google.com/aclk?sa=l&ai=DChcSEwjKotb5waTuAhXOVWAKHZG7AxcYABAEGgJ0bQ&sig=AOD64_10kb597iiidb5kFpF0ujNhLeuDag&adurl&ctype=5&ved=2ahUKEwjH6Mn5waTuAhXCAN4KHcCTDv8Qvhd6BAgBED4'
            ], 
            [
                'name' => 'Iphone XS',
                'price'=>  '26000',
                'description'=>'XS 256G',
                'category' => 'moblie',
                'gallery' => 'https://www.google.com/aclk?sa=l&ai=DChcSEwjNwrvnwqTuAhUPV2AKHcepBY0YABAPGgJ0bQ&sig=AOD64_1egHuGwtYQr8JkYphVlu5Pfss1OA&adurl&ctype=5&ved=2ahUKEwiMgbLnwqTuAhWJDd4KHSkdBsIQvhd6BAgBEDw'
            ],
        ]);
    }
}
