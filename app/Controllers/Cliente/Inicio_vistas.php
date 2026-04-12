<?php

namespace App\Controllers\Cliente;

use App\Controllers\BaseController;

class Inicio_vistas extends BaseController
{
    public function inicio()
    {
        $db = \Config\Database::connect();

        $builder = $db->table('streaming s');
        $builder->select('
            s.id_streaming,
            s.nombre_streaming,
            "" AS descripcion_streaming,
            s.caratula_streaming,
            s.fecha_estreno_streaming,
            s.clasificacion_streaming,
            s.temporadas_streaming,
            s.duracion_streaming,
            s.estatus_streaming,
            s.id_genero,
            g.nombre_genero
        ');
        $builder->join('generos g', 'g.id_genero = s.id_genero', 'left');
        $builder->where('s.estatus_streaming', 1);
        $builder->orderBy('s.id_streaming', 'DESC');

        $todos = $builder->get()->getResult();

        $hero = array_slice($todos, 0, 3);
        $trending = array_slice($todos, 0, 6);

        $series = array_values(array_filter($todos, function ($item) {
            return (int) $item->temporadas_streaming > 0;
        }));

        $peliculas = array_values(array_filter($todos, function ($item) {
            return (int) $item->temporadas_streaming == 0;
        }));

        $popular = array_slice($series, 0, 6);
        $recent = array_slice($todos, 0, 6);
        $live = array_slice($peliculas, 0, 6);
        $topViews = array_slice($todos, 0, 5);
        $sidebarRecent = array_slice($todos, 0, 4);

        return view('Cliente/inicio', [
            'hero'          => $hero,
            'trending'      => $trending,
            'popular'       => $popular,
            'recent'        => $recent,
            'live'          => $live,
            'topViews'      => $topViews,
            'sidebarRecent' => $sidebarRecent
        ]);
    }

    public function login()
    {
        return view('Cliente/login');
    }

    public function signup()
    {
        return view('Cliente/signup');
    }

    public function categorias()
    {
        return view('Cliente/categorias');
    }

    public function blog()
    {
        $db = \Config\Database::connect();

        $planes = $db->table('planes')
            ->where('estatus_plan', 1)
            ->get()
            ->getResult();

        $planActual = null;

        if (session()->get('isLoggedIn')) {
            $idUsuario = session()->get('id_usuario');

            $planActual = $db->table('usuarios_planes')
                ->select('usuarios_planes.id_plan, planes.nombre_plan')
                ->join('planes', 'planes.id_plan = usuarios_planes.id_plan')
                ->where('usuarios_planes.id_usuario', $idUsuario)
                ->get()
                ->getRow();
        }

        return view('Cliente/blog', [
            'planes'     => $planes,
            'planActual' => $planActual
        ]);
    }

    public function perfil()
    {
        return view('Cliente/perfil');
    }
}