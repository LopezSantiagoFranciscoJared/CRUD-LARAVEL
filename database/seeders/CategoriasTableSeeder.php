<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria; 

class CategoriasTableSeeder extends Seeder
{
    public function run(): void
    {
        //
        $categoria1 = new Categoria;
        $categoria1->nombre = "Deportes";
        $categoria1->descripcion = "Categoria basada en deportes como, futbol, baloncesto, tenis...";
        $categoria1->activo = true;
        $categoria1->save();

        $categoria2 = new Categoria;
        $categoria2->nombre = "Accion";
        $categoria2->descripcion = "Categoria basada en juegos repletos de accion.";
        $categoria2->activo = true;
        $categoria2->save();

        $categoria3 = new Categoria;
        $categoria3->nombre = "Aventuras";
        $categoria3->descripcion = "Categoria basada en juegos trepidantes y llenos de misterio";
        $categoria3->activo = true;
        $categoria3->save();

        $categoria4 = new Categoria;
        $categoria4->nombre = "RPG";
        $categoria4->descripcion = "Categoria basada en juegos de rol";
        $categoria4->activo = true;
        $categoria4->save();
    }
}
