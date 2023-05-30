<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Aybergen',
            'email'=>'ayba@gmail.com',
            'password'=>Hash::make('123')
        ]);
        User::create([
            'name'=>'Bazarbay',
            'email'=>'bazarbay@gmail.com',
            'password'=>Hash::make('123')
        ]);
        User::create([
            'name'=>'Salawat',
            'email'=>'sala@gmail.com',
            'password'=>Hash::make('123')
        ]);
        User::create([
            'name'=>'Mansur',
            'email'=>'mansur@gmail.com',
            'password'=>Hash::make('123')
        ]);
        Post::create([
            'title'=>'News',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum ratione libero cum veritatis eligendi, vero recusandae corrupti. Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto!'
        ]);
        Post::create([
            'title'=>'Cars',
            'body'=>'Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum ratione libero cum veritatis eligendi, vero recusandae corrupti. Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto!'
        ]);
        Post::create([
            'title'=>'Laptop',
            'body'=>'HAs sdhfs sdf Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum ratione libero cum veritatis eligendi, vero recusandae corrupti. Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto!'
        ]);
        Post::create([
            'title'=>'News',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum ratione libero cum veritatis eligendi, vero recusandae corrupti. Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto!'
        ]);
        Post::create([
            'title'=>'Cars',
            'body'=>'Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum ratione libero cum veritatis eligendi, vero recusandae corrupti. Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto!'
        ]);
        Post::create([
            'title'=>'Laptop',
            'body'=>'HAs sdhfs sdf Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum ratione libero cum veritatis eligendi, vero recusandae corrupti. Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto!'
        ]);
        Post::create([
            'title'=>'News',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum ratione libero cum veritatis eligendi, vero recusandae corrupti. Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto!'
        ]);
        Post::create([
            'title'=>'Cars',
            'body'=>'Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum ratione libero cum veritatis eligendi, vero recusandae corrupti. Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto!'
        ]);
        Post::create([
            'title'=>'Laptop',
            'body'=>'HAs sdhfs sdf Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum ratione libero cum veritatis eligendi, vero recusandae corrupti. Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto!'
        ]);
        Post::create([
            'title'=>'News',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum ratione libero cum veritatis eligendi, vero recusandae corrupti. Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto!'
        ]);
        Post::create([
            'title'=>'Cars',
            'body'=>'Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum ratione libero cum veritatis eligendi, vero recusandae corrupti. Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto!'
        ]);
        Post::create([
            'title'=>'Laptop',
            'body'=>'HAs sdhfs sdf Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum ratione libero cum veritatis eligendi, vero recusandae corrupti. Id veritatis voluptatibus dicta eum obcaecati illum sapiente, vero saepe minus iusto!'
        ]);
    }
}
