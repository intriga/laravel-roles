<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users
        Permission::create([
            'name'        => 'Navegar usuarios',
            'slug'        => 'users.index',
            'description' => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'        => 'Ver detalle de usuario',
            'slug'        => 'users.show',
            'description' => 'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
            'name'        => 'Edicion usuarios',
            'slug'        => 'users.edit',
            'description' => 'Editar cualquier usuario del sistema',
        ]);
        Permission::create([
            'name'        => 'Borrar usuarios',
            'slug'        => 'users.destroy',
            'description' => 'Eliminar cualquier usuario del sistema',
        ]);
        
        //users
        Permission::create([
            'name'        => 'Navegar roles',
            'slug'        => 'roles.index',
            'description' => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name'        => 'Ver detalle de rol',
            'slug'        => 'roles.show',
            'description' => 'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
            'name'        => 'Creacion de roles',
            'slug'        => 'roles.create',
            'description' => 'Crear cualquier rol del sistema',
        ]);
        Permission::create([
            'name'        => 'Edicion roles',
            'slug'        => 'roles.edit',
            'description' => 'Editar cualquier rol del sistema',
        ]);
        Permission::create([
            'name'        => 'Borrar roles',
            'slug'        => 'roles.destroy',
            'description' => 'Eliminar cualquier rol del sistema',
        ]);
            
        //products
        Permission::create([
            'name'        => 'Navegar productos',
            'slug'        => 'products.index',
            'description' => 'Lista y navega todos los productos del sistema',
        ]);
        Permission::create([
            'name'        => 'Ver detalle de producto',
            'slug'        => 'products.show',
            'description' => 'Ver en detalle cada producto del sistema',
        ]);
        Permission::create([
            'name'        => 'Creacion de productos',
            'slug'        => 'products.create',
            'description' => 'Crear cualquier producto del sistema',
        ]);
        Permission::create([
            'name'        => 'Edicion productos',
            'slug'        => 'products.edit',
            'description' => 'Editar cualquier producto del sistema',
        ]);
        Permission::create([
            'name'        => 'Borrar productos',
            'slug'        => 'products.destroy',
            'description' => 'Eliminar cualquier producto del sistema',
        ]);

    }
}
