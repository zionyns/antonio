<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
 
class UserTableSeeder extends Seeder {
 

    public function run()
    {
        
        App\sucursal::create([
            'CodSucursal' => 'suc01',
            'NombreSucursal'  => 'sonesta',
            'Direccion'        =>  'cultura'
        ]);


        App\sucursal::create([
            'CodSucursal' => 'suc02',
            'NombreSucursal'  => 'jose antonio',
            'Direccion'        =>  'imperial'
        ]);


        App\sucursal::create([
            'CodSucursal' => 'suc03',
            'NombreSucursal'  => 'sonesta',
            'Direccion'        =>  'cultura'
        ]);


        App\user::create([
            'first_name' => 'Jhon',
            'last_name'  => 'Zea',
            'rol'        =>  'administrador',
            'username'   => 'admin1',
            'email'      => 'postmaster@domain.com',
            'password'   =>  Hash::make('secret'),
            'sucursal'   =>  'suc01'
        ]);

        App\user::create([
            'first_name' => 'yusmersi',
            'last_name'  => 'villafuerte',
            'rol'        =>  'vendedor',
            'username'   => 'vendedor1',
            'email'      => 'yu@domain.com',
            'password'   =>  Hash::make('secret'),
            'sucursal'   =>  'suc01'
        ]);


        App\user::create([
            'first_name' => 'Oscar',
            'last_name'  => 'Condori',
            'rol'        =>  'administrador',
            'username'   => 'admin2',
            'email'      => 'Oscar@domain.com',
            'password'   =>  Hash::make('secret'),
            'sucursal'   =>  'suc02'
        ]);
        App\user::create([
            'first_name' => 'carlitos',
            'last_name'  => 'gamarra',
            'rol'        =>  'vendedor',
            'username'   => 'vendedor2',
            'email'      => 'carlitos@domain.com',
            'password'   =>  Hash::make('secret2'),
            'sucursal'   =>  'suc02'
        ]);

        App\user::create([
            'first_name' => 'ernes',
            'last_name'  => 'chavez',
            'rol'        =>  'administrador',
            'username'   => 'admin3',
            'email'      => 'ernes@domain.com',
            'password'   =>  Hash::make('secret'),
            'sucursal'   =>  'suc03'
        ]);




        App\user::create([
            'first_name' => 'rodolfo',
            'last_name'  => 'perez',
            'rol'        =>  'vendedor',
            'username'   => 'vendedor3',
            'email'      => 'rodolfo@domain.com',
            'password'   =>  Hash::make('secret2'),
            'sucursal'   =>  'suc03'
        ]);

        App\venta::create([
            'CodVenta' => 'venta-01',
            'fecha'  => '2016-06-01 13:40:11',
            'vendedor'        =>  'vendedor1',
            'preciototal'   =>  50000,
            'descuento'  => 10,
        ]);

        App\venta::create([
            'CodVenta' => 'venta-02',
            'fecha'  => '2016-06-01 13:40:11',
            'vendedor'        =>  'vendedor2',
            'preciototal'   =>  800,
            'descuento'  => 20,
        ]);

         App\proveedor::create([
            'CodProveedor'=>'pro1',
            'nombre'=>'proveedor de anillos 1'
        ]);

        App\proveedor::create([
            'CodProveedor'=>'pro2',
            'nombre'=>'proveedor de aretes 1'
        ]);

        App\proveedor::create([
            'CodProveedor'=>'pro3',
            'nombre'=>'proveedor de collares 1'
        ]);

        App\proveedor::create([
            'CodProveedor'=>'pro4',
            'nombre'=>'proveedor de imagenes 1'
        ]);

        App\producto::create([
            'CodProducto' => 'ART-AC-1',
            'nombre'  => 'argolla 30',
            'tipo'=>'argolla',
            'peso'        =>  65,
            'stock' => 4,
            'precio' => 53,
            'sucursal'   =>  'suc01'
        ]);

        App\producto::create([
            'CodProducto' => 'ART-AC-1',
            'nombre'  => 'argolla 30',
            'tipo'=>'argolla',
            'peso'        =>  65,
            'stock' => 4,
            'precio' => 53,
            'sucursal'   =>  'suc02'
        ]);

        App\producto::create([
            'CodProducto' => 'ART-AC-1',
            'nombre'  => 'argolla 30',
            'tipo'=>'argolla',
            'peso'        =>  65,
            'stock' => 4,
            'precio' => 53,
            'sucursal'   =>  'suc03'
        ]);

        App\producto::create([
            'CodProducto' => 'ANI-AC-1',
            'nombre'  => 'marquesita Nro1',
            'tipo'=>'anillo',
            'peso'        =>  16,
            'stock' => 3,
            'precio' => 72,
            'sucursal'   =>  'suc01'
        ]);

        App\producto::create([
            'CodProducto' => 'ANI-AC-1',
            'nombre'  => 'marquesita Nro1',
            'tipo'=>'anillo',
            'peso'        =>  16,
            'stock' => 3,
            'precio' => 72,
            'sucursal'   =>  'suc02'
        ]);
        App\producto::create([
            'CodProducto' => 'ANI-AC-1',
            'nombre'  => 'marquesita Nro1',
            'tipo'=>'anillo',
            'peso'        =>  16,
            'stock' => 3,
            'precio' => 72,
            'sucursal'   =>  'suc03'
        ]);

        App\producto::create([
            'CodProducto' => 'ART-AC-3',
            'nombre'  => 'argolla 30',
            'tipo'=>'argolla',
            'peso'        =>  65,
            'stock' => 4,
            'precio' => 53,
            'sucursal'   =>  'suc01'
        ]);

        App\producto::create([
            'CodProducto' => 'ART-AC-3',
            'nombre'  => 'argolla 30',
            'tipo'=>'argolla',
            'peso'        =>  65,
            'stock' => 4,
            'precio' => 53,
            'sucursal'   =>  'suc02'
        ]);

        App\producto::create([
            'CodProducto' => 'ART-AC-3',
            'nombre'  => 'argolla 30',
            'tipo'=>'argolla',
            'peso'        =>  65,
            'stock' => 4,
            'precio' => 53,
            'sucursal'   =>  'suc03'
        ]);



        App\producto::create([
            'CodProducto' => 'ANI-AC-10',
            'nombre'  => 'marquesita',
            'tipo'=>'anillo',
            'peso'        =>  16,
            'stock' => 5,
            'precio' => 72,
            'sucursal'   =>  'suc01'
        ]);

        App\producto::create([
            'CodProducto' => 'ANI-AC-10',
            'nombre'  => 'marquesita',
            'tipo'=>'anillo',
            'peso'        =>  16,
            'stock' => 5,
            'precio' => 72,
            'sucursal'   =>  'suc02'
        ]);
        App\producto::create([
            'CodProducto' => 'ANI-AC-10',
            'nombre'  => 'marquesita',
            'tipo'=>'anillo',
            'peso'        =>  16,
            'stock' => 5,
            'precio' => 72,
            'sucursal'   =>  'suc03'
        ]);




        App\ingresoproducto::create([
            'CodIngreso' => 'Ing01',
            'sucursal'  => 'suc01',
            'usuario' =>  'admin1',
            'fecha' => ''
        ]);

        App\detalleingreso::create([
            'producto' => '1',
            'cantidad'  => 3,
            'peso'=>12,
            'precio'        =>  36,
            
            'ingreso' => 'Ing01'
        ]);


        App\detalleingreso::create([
            'producto' => '2',
            'cantidad'  => 5,
            'peso'=>60,
            'precio'        =>  70,
            
            'ingreso' => 'Ing01'
        ]);


        App\moneda::create([
            'CodMoneda'=>'soles',
            'nombre' => 'soles',
            'tipo'  => 'efectivo',
            
        ]);

        App\moneda::create([
            'CodMoneda'=>'euros',
            'nombre' => 'euros',
            'tipo'  => 'efectivo',
            
        ]);

        App\moneda::create([
            'CodMoneda'=>'dolares',
            'nombre' => 'dolares',
            'tipo'  => 'efectivo',
            
        ]);

        App\moneda::create([
            'CodMoneda'=>'visaplanium',
            'nombre' => 'visaplatinum',
            'tipo'  => 'targeta',
            
        ]);

        App\moneda::create([
            'CodMoneda'=>'visaexpress',
            'nombre' => 'visavisaexpress',
            'tipo'  => 'targeta',
            
        ]);

        App\pagoventa::create([
            'venta' => 'venta-01',
            'moneda'  => 'soles',
            'monto'=>1000,
        ]);


        App\pagoventa::create([
            'venta' => 'venta-01',
            'moneda'  => 'dolares',
            'monto'=>1000,
        ]);


        App\ventausuario::create([
            'venta' => 'venta-01',
            'usuario'  => 'vendedor1',
            'moneda'=>'dolares',
            'comision'=>10,
        ]);


        App\ventausuario::create([
            'venta' => 'venta-01',
            'usuario'  => 'vendedor1',
            'moneda'=>'soles',
            'comision'=>10,
        ]);


        App\ventausuario::create([
            'venta' => 'venta-01',
            'usuario'  => 'vendedor2',
            'moneda'=>'soles',
            'comision'=>10,
        ]);


        App\ventausuario::create([
            'venta' => 'venta-01',
            'usuario'  => 'vendedor2',
            'moneda'=>'dolares',
            'comision'=>10,
        ]);








    }
 
}