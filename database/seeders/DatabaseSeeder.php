<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Estado;
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
        // Usuarios
        User::create(['name' => 'Admin', 'email' => 'admin@admin.com', 'password' => bcrypt('admin')]);

        // Estados
        $estados = [
            ['nombre' => 'Pendiente'],
            ['nombre' => 'En proceso'],
            ['nombre' => 'Entregado'],
            ['nombre' => 'Cancelado'],
        ];
        foreach ($estados as $estado) {
            Estado::create($estado);
        }

    }
}
