<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\App; // อย่าไปใส่ มาจากไหนก็ไม่รุ้
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //คำสั่งเพิ่มข้อมูล กี่แถวว่าไป
        factory(App\Product::class,50)->create();
    }
}
