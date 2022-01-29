<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Dida Rizaldy',
        // 'email' => 'dida@google.com',
        // 'password' => bcrypt('password')
        // ]);

        // User::create([
        //     'name' => 'Rizal',
        //     'email' => 'rizal@google.com',
        //     'password' => bcrypt('password')
        // ]);

        User::factory(6)->create();

        Category::create([
            'name' => 'Smartphone',
            'slug' => 'smartphone'
        ]);

        Category::create([
            'name' => 'Laptop',
            'slug' => 'laptop'
        ]);

        Category::create([
            'name' => 'Kulkas',
            'slug' => 'kulkas'
        ]);

        Category::create([
            'name' => 'Kipas Angin',
            'slug' => 'kipas-angin'
        ]);

        Category::create([
            'name' => 'Pendingin Ruangan',
            'slug' => 'pendingin-ruangan'
        ]);

        Category::create([
            'name' => 'Mesin Cuci',
            'slug' => 'mesin-cuci'
        ]);

        Product::factory(80)->create();

        // Product::create([
        //     'title' => 'Hp terbaik',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'hp-terbaik',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa odio ducimus cupiditate labore aliquid, reiciendis doloremque et iure adipisci error eligendi enim necessitatibus minima odit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis placeat quo nam laboriosam ab perferendis iste veniam id ad est iusto provident, ipsa omnis dignissimos nisi nostrum rerum fugiat quibusdam quisquam laborum et. Exercitationem, quos accusamus consequuntur neque ducimus consequatur fugiat iusto culpa ipsa. Doloribus, cupiditate? Quam sunt modi perspiciatis a deleniti ratione quisquam omnis esse alias dolorem aspernatur, tempora voluptatum, quo quod pariatur hic. Voluptatibus doloribus veritatis ducimus necessitatibus et pariatur corporis consequatur quaerat amet voluptates placeat delectus, nisi ipsam, quia maiores asperiores quae non ullam tenetur eaque sequi natus neque. Libero dolore corrupti adipisci at quia in asperiores animi explicabo dolor eligendi modi sed id debitis facere eveniet, aliquid est enim dignissimos nam amet consequatur esse. Enim, expedita?'
        // ]);

        // Product::create([
        //     'title' => 'Hp mid-range terbaik',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'hp-mid-range-terbaik',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa odio ducimus cupiditate labore aliquid, reiciendis doloremque et iure adipisci error eligendi enim necessitatibus minima odit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis placeat quo nam laboriosam ab perferendis iste veniam id ad est iusto provident, ipsa omnis dignissimos nisi nostrum rerum fugiat quibusdam quisquam laborum et. Exercitationem, quos accusamus consequuntur neque ducimus consequatur fugiat iusto culpa ipsa. Doloribus, cupiditate? Quam sunt modi perspiciatis a deleniti ratione quisquam omnis esse alias dolorem aspernatur, tempora voluptatum, quo quod pariatur hic. Voluptatibus doloribus veritatis ducimus necessitatibus et pariatur corporis consequatur quaerat amet voluptates placeat delectus, nisi ipsam, quia maiores asperiores quae non ullam tenetur eaque sequi natus neque. Libero dolore corrupti adipisci at quia in asperiores animi explicabo dolor eligendi modi sed id debitis facere eveniet, aliquid est enim dignissimos nam amet consequatur esse. Enim, expedita?'
        // ]);

        // Product::create([
        //     'title' => 'Laptop Murah',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'laptop-murah',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa odio ducimus cupiditate labore aliquid, reiciendis doloremque et iure adipisci error eligendi enim necessitatibus minima odit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis placeat quo nam laboriosam ab perferendis iste veniam id ad est iusto provident, ipsa omnis dignissimos nisi nostrum rerum fugiat quibusdam quisquam laborum et. Exercitationem, quos accusamus consequuntur neque ducimus consequatur fugiat iusto culpa ipsa. Doloribus, cupiditate? Quam sunt modi perspiciatis a deleniti ratione quisquam omnis esse alias dolorem aspernatur, tempora voluptatum, quo quod pariatur hic. Voluptatibus doloribus veritatis ducimus necessitatibus et pariatur corporis consequatur quaerat amet voluptates placeat delectus, nisi ipsam, quia maiores asperiores quae non ullam tenetur eaque sequi natus neque. Libero dolore corrupti adipisci at quia in asperiores animi explicabo dolor eligendi modi sed id debitis facere eveniet, aliquid est enim dignissimos nam amet consequatur esse. Enim, expedita?'
        // ]);

        // Product::create([
        //     'title' => 'Laptop Kantor',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'laptop-kantor',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa odio ducimus cupiditate labore aliquid, reiciendis doloremque et iure adipisci error eligendi enim necessitatibus minima odit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis placeat quo nam laboriosam ab perferendis iste veniam id ad est iusto provident, ipsa omnis dignissimos nisi nostrum rerum fugiat quibusdam quisquam laborum et. Exercitationem, quos accusamus consequuntur neque ducimus consequatur fugiat iusto culpa ipsa. Doloribus, cupiditate? Quam sunt modi perspiciatis a deleniti ratione quisquam omnis esse alias dolorem aspernatur, tempora voluptatum, quo quod pariatur hic. Voluptatibus doloribus veritatis ducimus necessitatibus et pariatur corporis consequatur quaerat amet voluptates placeat delectus, nisi ipsam, quia maiores asperiores quae non ullam tenetur eaque sequi natus neque. Libero dolore corrupti adipisci at quia in asperiores animi explicabo dolor eligendi modi sed id debitis facere eveniet, aliquid est enim dignissimos nam amet consequatur esse. Enim, expedita?'
        // ]);
    }
}
