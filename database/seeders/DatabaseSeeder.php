<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $product_categories = [
            ['name'=> 'prva kategorija', 'description'=>'ovo je prvi kratki opis kategorije'],
            ['name'=> 'druga kategorija', 'description'=>'ovo je drugi kratki opis kategorije'],
            ['name'=> 'treca kategorija', 'description'=>'ovo je treci kratki opis kategorije']
        ];

        DB::table('product_categories')->insert($product_categories);
    
        $product_discounts = [
            ['name'=> 'prvi popust', 'description'=>'ovo je prvi kratki opis popusta', 'percentage'=> 5, 'active'=> true],
            ['name'=> 'drugi popust', 'description'=>'ovo je drugi kratki opis popusta','percentage'=> 15, 'active'=> false],
            ['name'=> 'treci popust', 'description'=>'ovo je treci kratki opis popusta','percentage'=> 25, 'active'=> true]
        ];

        DB::table('product_discounts')->insert($product_discounts);
    
        $users = [
            ['first_name'=> 'Pero', 'last_name'=>'Perić', 'username'=>'PeroJeNajjači', 'card_number'=>4862186021, 'email'=>'pperic100@vvg.hr', 'password'=>'pero123'],
            ['first_name'=> 'Ante', 'last_name'=>'Antić', 'username'=>'AnteCarSvijeta', 'card_number'=>3645978632, 'email'=>'aantic99@vvg.hr', 'password'=>'ante123']
        ];

        DB::table('users')->insert($users);

        $user_adress = [
            ['street_name'=> 'Širinečka', 'city_name'=>'Zagreb', 'country_name'=>'Hrvatska', 'house_number'=>17, 'postal_code'=>10000, 'telephone'=>123456789, 'user_id'=>1],
            ['street_name'=> 'Petrovečka', 'city_name'=>'Osijek', 'country_name'=>'Hrvatska', 'house_number'=>25, 'postal_code'=>10000, 'telephone'=>987456321, 'user_id'=>2]
        ];

        DB::table('user_adress')->insert($user_adress);

        $products = [
            ['name'=> 'Prvi proizvod', 'description'=>'Ovo je opis prvog proizvoda sa detaljima', 'price'=>56.10, 'category_id'=>1, 'discount_id'=>1],
            ['name'=> 'Drugi proizvod', 'description'=>'Ovo je opis drugog proizvoda sa detaljima', 'price'=>196, 'category_id'=>3, 'discount_id'=>2]
        ];

        DB::table('products')->insert($products);
    
    
    
    
    
    }
}
