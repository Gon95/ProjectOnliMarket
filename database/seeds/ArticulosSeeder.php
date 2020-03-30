<?php

use Illuminate\Database\Seeder;
use App\Articulos;

class ArticulosSeeder extends Seeder
{
    public function run()
    {
       for ($i=0; $i<10; $i++){
			articulos::create([
		    	'Nombre' 	    =>	'Articulo' . $i,
		    	'Imagen'        =>	'imagen' . $i . '.jpg',
                'Precio'	    =>	'1'.$i,
                'Unidad'	    =>	'1111122222' . $i,
		    	'Stock' 	    =>	true,
		    	'Descripcion'	=>	'14445884' . $i,
		    ]);
		} 
    }
}
