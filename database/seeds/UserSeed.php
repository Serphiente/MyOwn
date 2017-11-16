<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Jonathan Isla', 'rut' => '16760351-3', 'email' => 'jisla@drogueriaconcepcion.cl', 'password' => '$2y$10$4627UUfoKgxVACSjl3Qi3ei8mNIwopuzxYUMATFw6RRU.FvIvYqPq', 'banco' => 'banco estado', 'tipocuentabanco' => 'cuenta rut', 'cuentabancaria' => '16760351', 'role_id' => 1, 'remember_token' => '',],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
