<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(\App\User::class, 5)->create();

        DB::Table('users')->insert(array([
            'pseudo' => 'admin',
            'email' => 'admin@admin.fr',
            'password' => Hash::make('admin'),
        ],
            [
                'pseudo' => 'editor',
                'email' => 'editor@editor.fr',
                'password' => Hash::make('editor'),
            ],
            [
                'pseudo' => 'paul',
                'email' => 'paul@paul.fr',
                'password' => Hash::make('paul'),
            ],
            [
            'pseudo' => 'eric',
            'email' => 'eric@eric.fr',
            'password' => Hash::make('eric'),
            ],
            [
                'pseudo' => 'adrien',
                'email' => 'adrien@adrien.fr',
                'password' => Hash::make('adrien'),
            ]) );
    }
}
