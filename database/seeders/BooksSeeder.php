<?php

namespace Database\Seeders;

use App\Models\Books;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Books::factory()
            ->count(10)
            ->create();

        User::factory(
            [
                'name' => 'softdesign',
                'email' => 'test@softdesign.com.br',
                'password' => Hash::make('softdesignpass'),
            ]
        )->create();
    }
}
