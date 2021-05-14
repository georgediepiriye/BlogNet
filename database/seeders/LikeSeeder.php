<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('likes')->insert([
            [
                'user_id'=>'1',
                'post_id'=>'50',
                'created_at' => '2021-05-13 20:18:14',
                'updated_at'=> '2021-05-13 20:18:14' ,   
                       
            ],
            [
                'user_id'=>'2',
                'post_id'=>'50',
                'created_at' => '2021-05-13 20:18:14',
                'updated_at'=> '2021-05-13 20:18:14' ,   
                       
            ],
            
            [
                'user_id'=>'2',
                'post_id'=>'50',
                'created_at' => '2021-05-13 20:18:14',
                'updated_at'=> '2021-05-13 20:18:14' ,   
                       
            ],
            
            
            
           
        ]);
    }
}
