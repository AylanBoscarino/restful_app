<?php

use Illuminate\Database\Seeder;

class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert([
        	'name' => str_random(10),
        	'class' => str_random(10),
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);
    }
}
