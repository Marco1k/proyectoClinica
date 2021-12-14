<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {


// Los tipos diferentes de usuarios
        $role1 = Role::create(['name'=>'admin']);
        $role2 = Role::create(['name'=>'usuario']);

        Permission::create(['name'=>'admin.home',
            'description' => 'Ver el dashboard'])->syncRoles([$role1, $role2]);

// Los permisos que tendrán cada uno

        Permission::create(['name' => 'admin.users.index',
        'description' => 'Ver listado de usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit',
        'description' => 'Asignar un rol'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.categories.index',
        'description' => 'Ver listado de categorías'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categories.create',
        'description' => 'Crear categorías'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit',
        'description' => 'Editar categorías'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy',
        'description' => 'Eliminar categorías'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.tipos.index',
        'description' => 'Ver listado de tipos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tipos.create',
        'description' => 'Crear tipos'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tipos.edit',
        'description' => 'Editar tipos'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tipos.destroy',
        'description' => 'Eliminar tipos'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.citas.index',
        'description' => 'Ver listado de citas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.citas.create',
        'description' => 'Crear citas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.citas.edit',
        'description' => 'Editar posts'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.citas.destroy',
        'description' => 'Eliminar citas'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.parametros.index',
            'description' => 'Ver listado de parametros'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.parametros.create',
            'description' => 'Crear parametros'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.parametros.edit',
            'description' => 'Editar parametros'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.parametros.destroy',
            'description' => 'Eliminar parametros'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.citasadmin.index',
            'description' => 'Ver listado de solicitudes de citas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.citasadmin.edit',
            'description' => 'Editar solicitudes de citas'])->syncRoles([$role1]);

    }
}
