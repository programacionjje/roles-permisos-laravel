<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // usuario con el rol editor
        $editor = User::create([
          'name' => 'editor',
          'email' => 'editor@gmail.com',
          'password' => '123456'
        ]);

        $editor->assignRole('editor');

        // usuario con el rol moderador
        $moderador = User::create([
          'name' => 'moderador',
          'email' => 'moderador@gmail.com',
          'password' => '123456'
        ]);

        $moderador->assignRole('moderador');

        // usuario con el rol super-admin
        $admin = User::create([
          'name' => 'admin',
          'email' => 'admin@gmail.com',
          'password' => '123456'
        ]);

        $admin->assignRole('super-admin');
    }
}
