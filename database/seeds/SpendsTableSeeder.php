<?php

use Illuminate\Database\Seeder;

class SpendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('spends')->insert(array([
            'title' => 'admin',
            'description' => 'admin@admin.fr',
            'status' => Hash::make('admin'),
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
