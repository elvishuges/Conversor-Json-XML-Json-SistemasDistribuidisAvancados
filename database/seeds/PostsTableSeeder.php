<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
        	//Post 1
        	'id' => 1,
            'titulo' => 'Titulo do Post 1 Sistemas Distribuidos Avançados',
            'Conteudo' => 'Conteúdo Post 1 Sistemas Distribuidos Avançados'
        ]);

        Post::create([
        	//Post 1
        	'id' => 2,
            'titulo' => 'Titulo do Post 2 Sistemas Distribuidos Avançados',
            'Conteudo' => 'Conteúdo Post 2 Sistemas Distribuidos Avançados'
        ]);

        Post::create([
        	//Post 1
        	'id' => 3,
            'titulo' => 'Titulo do Post 3 Sistemas Distribuidos Avançados',
            'Conteudo' => 'Conteúdo Post 3 Sistemas Distribuidos Avançados'
        ]);

        Post::create([
        	//Post 1
        	'id' => 4,
            'titulo' => 'Titulo do Post 4 Sistemas Distribuidos Avançados',
            'Conteudo' => 'Conteúdo Post 4 Sistemas Distribuidos Avançados'
        ]);

        Post::create([
        	//Post 1
        	'id' => 5,
            'titulo' => 'Titulo do Post 5 Sistemas Distribuidos Avançados',
            'Conteudo' => 'Conteúdo Post 5 Sistemas Distribuidos Avançados'
        ]);

        Post::create([
        	//Post 1
        	'id' => 6,
            'titulo' => 'Titulo do Post 6 Sistemas Distribuidos Avançados',
            'Conteudo' => 'Conteúdo Post 6 Sistemas Distribuidos Avançados'
        ]);

        Post::create([
        	//Post 1
        	'id' => 7,
            'titulo' => 'Titulo do Post 7 Sistemas Distribuidos Avançados',
            'Conteudo' => 'Conteúdo Post 7 Sistemas Distribuidos Avançados'
        ]);
    }
}
