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
        
        ////////////////////////////////////////    
        // ROLES//

        //CREA EL USUARIOS
        $admin = App\User::create([
            'name' => 'admin',
            'email'=> 'admin@admin.com',
            'state' => 'ACTIVO',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'),
            'remember_token' => str_random(10)            
        ]);
        //ASIGNACION DE ROLES


    }
}
