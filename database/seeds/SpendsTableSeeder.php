<?php

use Illuminate\Database\Seeder;

class SpendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spends = factory(\App\Spend::class, 10)->create()->each(function ($spend){


            $ids = App\User::pluck('id')->all();

            $randomKeys = array_rand($ids, rand(1, count($ids)));
            $selectIds = [];

            if(is_array($randomKeys)){
                for($i=0; $i<count($randomKeys); $i++) {
                    array_push($selectIds, $ids[$randomKeys[$i]]);
                }
            }else{
                $selectIds[] = $ids[$randomKeys];
            }


            $price = $spend->price / count($selectIds);
            $spend->users()->attach($selectIds, ['price' => $price]);

        });

    }
}
