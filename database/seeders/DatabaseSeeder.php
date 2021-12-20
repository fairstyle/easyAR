<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Borrar Cache de permisos
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //Permisos
        Permission::create(['name' => 'editar_roles']);
        Permission::create(['name' => 'admin_panel']);

        //Crear roles y asignar
        //User
        Role::create(['name' => 'user']);

        //Admin
        Role::create(['name' => 'admin'])
            ->givePermissionTo('admin_panel');

        //Super-Admin
        Role::create(['name' => 'super-admin'])->givePermissionTo(Permission::all());

        //Llamar otros seeders
        $this->call([
            UserSeeder::class,
        ]);


    }
}
