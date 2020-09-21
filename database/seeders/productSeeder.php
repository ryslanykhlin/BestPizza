<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 30; $i++)
        {
            DB::table('products')->insert([
                "title" => "product".$i,
                'category' =>   $this->randCategory(rand(1,4)),
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolores ducimus eum id laborum minus odit pariatur quos vel voluptates.",
                "price" => (double)rand(50,1000)
            ]);
        }
    }

    protected function randCategory($randinteger)
    {
        switch ($randinteger)
        {
            case 1:
                return "Сырная";
            case 2:
                return "Грибная";
            case 3:
                return "Рыбная";
            case 4:
                return "Мясная";
        }
    }
}
