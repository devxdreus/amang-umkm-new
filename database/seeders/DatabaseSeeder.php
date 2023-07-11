<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Merchant;
use App\Models\Package;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // generate role
        Role::create(
            [
                'name' => 'admin'
            ]
        );
        Role::create(
            [
                'name' => 'merchant'
            ]
        );
        Role::create(
            [
                'name' => 'user'
            ]
        );

        // generate admin credential
        User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => '$2y$10$ign0/uMltX24/PgW7Xufo.rpfI0tcaFDXKFf.W2qev12NxqAZH4Sa', //12345678
            'role_id' => 1
        ]);

        // generate user credential
        User::create([
            'name' => 'user',
            'email' => 'user@mail.com',
            'password' => '$2y$10$ign0/uMltX24/PgW7Xufo.rpfI0tcaFDXKFf.W2qev12NxqAZH4Sa', //12345678
        ]);

        // generate merchant
        Category::factory(10)->create();
        Merchant::factory(100)->create();
        Package::factory(300)->create();

        // generate normal user
        User::factory(10)->create();
    }
}
