<?php

namespace Database\Seeders;
use App\Models\Libros;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libros = new Libros();

        $libros->titulo="hola que tal";
        $libros->autor="Ricardo rojo";
        $libros->editorial="estrella roja";
        $libros->fecha_publicacion="2019-03-05";
        $libros->numero_pagina="288";
        
        $libros->save();

        $libros2= new Libros();
        
        $libros2->titulo="las rosas rojas";
        $libros2->autor="maldini carlos";
        $libros2->editorial="girasol";
        $libros2->fecha_publicacion="2008-01-21";
        $libros2->numero_pagina="416";

        $libros2->save();
    }
}
