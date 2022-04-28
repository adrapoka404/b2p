<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $su             = Role::create(['name' => 'su']);
        $admin          = Role::create(['name' => 'admin']);
        $analista       = Role::create(['name' => 'analista']);
        $desarrollador  = Role::create(['name' => 'desarrollador']);
        $inversionsita  = Role::create(['name' => 'inversionista']);
        $usuario        = Role::create(['name' => 'usuario']);

        Permission::create(['name' => 'dashboard',
                            'description' => 'Vista de proyectos'])->syncRoles([$su, $admin, $analista, $desarrollador, $inversionsita,$usuario]);
       
        //Permisos para los roles de los usuarios
        Permission::create(['name' => 'dashboard.usuarios.index',
                            'description' => 'Lista de usuarios'])->syncRoles([$su, $admin, $analista]);
        Permission::create(['name' => 'dashboard.usuarios.edit',
                            'description' => 'Editar usuarios'])->syncRoles([$su]);

        //Permisos para el catalogo de ingresos
        Permission::create(['name' => 'dashboard.ingresos.index',
                            'description' => 'Lista de ingresos'])->syncRoles([$su, $admin, $analista]);
        Permission::create(['name' => 'dashboard.ingresos.create',
                            'description' => 'Creación de ingresos'])->syncRoles([$su, $admin]);
        Permission::create(['name' => 'dashboard.ingresos.edit',
                            'description' => 'Editar ingresos'])->syncRoles([$su, $admin]);

        //Permisos para el catalogo de actividades economicas
        Permission::create(['name' => 'dashboard.actividades.index',
                            'description' => 'Listado de actividades'])->syncRoles([$su, $admin, $analista]);
        Permission::create(['name' => 'dashboard.actividades.create',
                            'description' => 'Creación de actividades'])->syncRoles([$su, $admin]);
        Permission::create(['name' => 'dashboard.actividades.edit',
                            'description' => 'Editar actividades'])->syncRoles([$su, $admin]);
    }
}
