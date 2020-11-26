<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
public function estudiantes()
{
return view('estudiantes');
}

public function estudiante()
{
    $nombres = ['David Sebastian Espitia','Adriana Sambarano','Karen Tatiana Valencia','Kenny Eliut Bermude Epe','Jhon Fredy Pimentel Cantero','Yarlid Hoyos Samboni','Yenifer Katerin Chilito','Brayan Stiven Pantoja','Daniel Majin','Karol Cañas','Hanier Arley Maya'];
return view('Estudiante.estudiante', compact('nombres'));
}

}//End Class
