<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            [
                'user_id'=>'4',
                'title'=>'This is a title',
                'body'=>'With the advent of DevOps and “you build it, you own it”, the tech stack has evolved a lot for the modern startup. There are hundreds of dev tools launched in the last decade which have completely changed how developers manage their workloads. Recently, We evaluated this landscape very thoroughly at RunX and here is our opinionated guide.',
                'category'=>'Tech',
                'created_at' => '2021-05-13 20:18:14',
                'updated_at'=> '2021-05-13 20:18:14' ,         
            ],
            [
                'user_id'=>'4',
                'title'=>'This is a title',
                'body'=>'With the advent of DevOps and “you build it, you own it”, the tech stack has evolved a lot for the modern startup. There are hundreds of dev tools launched in the last decade which have completely changed how developers manage their workloads. Recently, We evaluated this landscape very thoroughly at RunX and here is our opinionated guide.',
                'category'=>'Tech',
                'created_at' => '2021-05-13 20:18:14',
                'updated_at'=> '2021-05-13 20:18:14' ,         
            ],
            [
                'user_id'=>'4',
                'title'=>'This is a title',
                'body'=>'With the advent of DevOps and “you build it, you own it”, the tech stack has evolved a lot for the modern startup. There are hundreds of dev tools launched in the last decade which have completely changed how developers manage their workloads. Recently, We evaluated this landscape very thoroughly at RunX and here is our opinionated guide.',
                'category'=>'Tech',
                'created_at' => '2021-05-13 20:18:14',
                'updated_at'=> '2021-05-13 20:18:14' ,         
            ],
            [
                'user_id'=>'4',
                'title'=>'This is a title',
                'body'=>'With the advent of DevOps and “you build it, you own it”, the tech stack has evolved a lot for the modern startup. There are hundreds of dev tools launched in the last decade which have completely changed how developers manage their workloads. Recently, We evaluated this landscape very thoroughly at RunX and here is our opinionated guide.',
                'category'=>'Tech',
                'created_at' => '2021-05-13 20:18:14',
                'updated_at'=> '2021-05-13 20:18:14' ,         
            ],
            [
                'user_id'=>'4',
                'title'=>'This is a title',
                'body'=>'With the advent of DevOps and “you build it, you own it”, the tech stack has evolved a lot for the modern startup. There are hundreds of dev tools launched in the last decade which have completely changed how developers manage their workloads. Recently, We evaluated this landscape very thoroughly at RunX and here is our opinionated guide.',
                'category'=>'Tech',
                'created_at' => '2021-05-13 20:18:14',
                'updated_at'=> '2021-05-13 20:18:14' ,         
            ],

            
           
        ]);
    }
}
