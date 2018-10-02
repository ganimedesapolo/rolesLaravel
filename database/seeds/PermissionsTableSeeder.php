<?php

use Illuminate\Database\Seeder;
Use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
   

   //usuarios
     Permission::create([
        'name'=>'Navegar Usuarios',
        'slug'=>'users.index',
        'description'=>'Lista y navega todos los usuarios del sistema',
     ]);

     Permission::create([
        'name'=>'Ver detalle de Usuarios',
        'slug'=>'users.show',
        'description'=>'Ver en detalle cada usuario del sistema',
     ]);


       Permission::create([
        'name'=>'Creacion Usuarios',
        'slug'=>'users.create',
        'description'=>'Crear cualquier dato de un usuario del sistema',
     ]); 
  
      Permission::create([
        'name'=>'Edicion Usuarios',
        'slug'=>'users.edit',
        'description'=>'Editar cualquier dato de un usuario del sistema',
     ]);

        Permission::create([
        'name'=>'Eliminar Usuarios',
        'slug'=>'users.destroy',
        'description'=>'Eliminar cualquier data de un usuario del sistema',
     ]);





  //roles
    Permission::create([
        'name'=>'Navegar roles',
        'slug'=>'roles.index',
        'description'=>'Lista y navega todos los roles del sistema',
     ]);

     Permission::create([
        'name'=>'Ver detalle de roles',
        'slug'=>'roles.show',
        'description'=>'Ver en detalle cada rol del sistema',
     ]);


       Permission::create([
        'name'=>'Creacion roles',
        'slug'=>'roles.create',
        'description'=>'Crear cualquier dato de un rol del sistema',
     ]); 
  
      Permission::create([
        'name'=>'Edicion roles',
        'slug'=>'roles.edit',
        'description'=>'Editar cualquier dato de un rol del sistema',
     ]);

        Permission::create([
        'name'=>'Eliminar roles',
        'slug'=>'roles.destroy',
        'description'=>'Eliminar cualquier data de un rol del sistema',
     ]);
     



     ///productos

    Permission::create([
        'name'=>'Navegar productos',
        'slug'=>'products.index',
        'description'=>'Lista y navega todos los productos del sistema',
     ]);

     Permission::create([
        'name'=>'Ver detalle de productos',
        'slug'=>'products.show',
        'description'=>'Ver en detalle cada producto del sistema',
     ]);


       Permission::create([
        'name'=>'Creacion productos',
        'slug'=>'products.create',
        'description'=>'Crear cualquier dato de un producto del sistema',
     ]); 
  
      Permission::create([
        'name'=>'Edicion productos',
        'slug'=>'products.edit',
        'description'=>'Editar cualquier dato de un producto del sistema',
     ]);

        Permission::create([
        'name'=>'Eliminar productos',
        'slug'=>'products.destroy',
        'description'=>'Eliminar cualquier data de un producto del sistema',
     ]);



    }
}
