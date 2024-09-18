<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'user_id' => '1',
            'categoria_id' => '1', 
            'titulo' => 'Minha primeira postagem',
            'conteudo' => 'Conteudo da minha primeira postagem'
            
        ]);
        DB::table('postagens')->insert([
            'user_id' => '2',
            'categoria_id' => '2', 
            'titulo' => 'Minha segunda postagem',
            'conteudo' => 'Conteudo da minha segunda postagem'  
            
        ]);
        DB::table('postagens')->insert([
            'user_id' => '3',
            'categoria_id' => '3', 
            'titulo' => 'Minha terceira postagem',
            'conteudo' => 'Conteudo da minha terceira postagem'
            
        ]);
    }
}
