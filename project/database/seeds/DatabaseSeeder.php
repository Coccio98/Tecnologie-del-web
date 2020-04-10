<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(Payment_MethodsTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(StocksTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(ShowcasesTableSeeder::class);
        $this->call(CouriersTableSeeder::class);
        $this->call(ShippingsTableSeeder::class);
        $this->call(BelongTableSeeder::class);
        $this->call(DisplayTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(ComposeTableSeeder::class);
        $this->call(TakeUpTableSeeder::class);
    }
}
