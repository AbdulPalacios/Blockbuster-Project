<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\StreamingModel;
use App\Models\GenerosModel; // Importamos el modelo de géneros

class StreamingController extends BaseController
{
    protected $streamingModel;
    protected $generosModel;

    public function __construct()
    {
        $this->streamingModel = new StreamingModel();
        $this->generosModel = new GenerosModel();
    }

    public function index()
    {
        $data['streaming'] = $this->streamingModel->findAll();
        return view('Admin/Streaming/index', $data);
    }

    public function create()
    {
        // Mandamos los géneros a la vista para llenar el <select>
        $data['generos'] = $this->generosModel->where('estatus_genero', 1)->findAll();
        return view('Admin/Streaming/form', $data);
    }

    public function store()
    {
        $datosAGuardar = [
            'nombre_streaming'            => $this->request->getPost('nombre_streaming'),
            'fecha_lanzamiento_streaming' => $this->request->getPost('fecha_lanzamiento_streaming'),
            'duracion_streaming'          => $this->request->getPost('duracion_streaming'),
            'temporadas_streaming'        => $this->request->getPost('temporadas_streaming'),
            'trailer_streaming'           => $this->request->getPost('trailer_streaming'),
            'clasificacion_streaming'     => $this->request->getPost('clasificacion_streaming'),
            'sipnosis_streaming'          => $this->request->getPost('sipnosis_streaming'),
            'fecha_estreno_streaming'     => $this->request->getPost('fecha_estreno_streaming'),
            'id_genero'                   => $this->request->getPost('id_genero'),
            'estatus_streaming'           => $this->request->getPost('estatus_streaming')
        ];

        // LÓGICA DE SUBIDA DE IMAGEN (Carátula)
        $imagen = $this->request->getFile('caratula_streaming');
        
        if ($imagen && $imagen->isValid() && !$imagen->hasMoved()) {
            $nuevoNombre = $imagen->getRandomName();
            $imagen->move(FCPATH . 'uploads/portadas', $nuevoNombre);
            $datosAGuardar['caratula_streaming'] = $nuevoNombre;
        }

        $this->streamingModel->insert($datosAGuardar);
        return redirect()->to('admin/streaming')->with('success', 'Contenido agregado al catálogo exitosamente.');
    }

    public function edit($id = null)
    {
        $data['streaming'] = $this->streamingModel->find($id);
        $data['generos']   = $this->generosModel->where('estatus_genero', 1)->findAll();

        if (!$data['streaming']) {
            return redirect()->to('admin/streaming')->with('error', 'El contenido no existe.');
        }

        return view('Admin/Streaming/form', $data);
    }

    public function update($id = null)
    {
        $datosAActualizar = [
            'nombre_streaming'            => $this->request->getPost('nombre_streaming'),
            'fecha_lanzamiento_streaming' => $this->request->getPost('fecha_lanzamiento_streaming'),
            'duracion_streaming'          => $this->request->getPost('duracion_streaming'),
            'temporadas_streaming'        => $this->request->getPost('temporadas_streaming'),
            'trailer_streaming'           => $this->request->getPost('trailer_streaming'),
            'clasificacion_streaming'     => $this->request->getPost('clasificacion_streaming'),
            'sipnosis_streaming'          => $this->request->getPost('sipnosis_streaming'),
            'fecha_estreno_streaming'     => $this->request->getPost('fecha_estreno_streaming'),
            'id_genero'                   => $this->request->getPost('id_genero'),
            'estatus_streaming'           => $this->request->getPost('estatus_streaming')
        ];

        $imagen = $this->request->getFile('caratula_streaming');
        
        if ($imagen && $imagen->isValid() && !$imagen->hasMoved()) {
            $nuevoNombre = $imagen->getRandomName();
            $imagen->move(FCPATH . 'uploads/portadas', $nuevoNombre);
            $datosAActualizar['caratula_streaming'] = $nuevoNombre;
        }

        $this->streamingModel->update($id, $datosAActualizar);
        return redirect()->to('admin/streaming')->with('success', 'Contenido actualizado correctamente.');
    }

    public function delete($id = null)
    {
        $this->streamingModel->delete($id);
        return redirect()->to('admin/streaming')->with('success', 'Contenido eliminado del catálogo.');
    }
}