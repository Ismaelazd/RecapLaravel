<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            
            'name' => 'Luffy',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ipsum voluptas inventore, earum, fuga eos iure, nostrum eum expedita reiciendis nesciunt nemo dolore vero doloribus. Consequuntur corporis dolor inventore eveniet!',
            'img' => 'luffy.jpg',
            'user_id' => 1
            
        ]);
        DB::table('articles')->insert([
            
            'name' => 'Barbe Blanche',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ipsum voluptas inventore, earum, fuga eos iure, nostrum eum expedita reiciendis nesciunt nemo dolore vero doloribus. Consequuntur corporis dolor inventore eveniet!',
            'img' => 'barbeblanche.jpg',
            'user_id' => 1
            
        ]);
        DB::table('articles')->insert([
            
            'name' => 'Goku',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ipsum voluptas inventore, earum, fuga eos iure, nostrum eum expedita reiciendis nesciunt nemo dolore vero doloribus. Consequuntur corporis dolor inventore eveniet!',
            'img' => 'goku.jpg',
            'user_id' => 1
            
        ]);
        DB::table('articles')->insert([
            
            'name' => 'Trunks',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ipsum voluptas inventore, earum, fuga eos iure, nostrum eum expedita reiciendis nesciunt nemo dolore vero doloribus. Consequuntur corporis dolor inventore eveniet!',
            'img' => 'trunks.jpg',
            'user_id' => 1
            
        ]);
    }
}
