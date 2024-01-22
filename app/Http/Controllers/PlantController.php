<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PlantController extends Controller
{
    private $plants;

    public function __construct()
    {
        $filePath = storage_path('app/json/plants.json');
        if ($filePath) {
            $jsonContent = file_get_contents($filePath);
            $data = json_decode($jsonContent, true);


            $this->plants = collect($data)->map(function ($datum) {
                return new Plant($datum['name'], $datum['discover_date']);
            });

        }
    }

    public function index()
    {
        $plants = $this->plants;
        return view('plants.index', compact('plants'));
    }


    public function show($name)
    {
        // Buscar el modelo cuyo campo 'name' sea igual a 'Alfo'
        $plant = $this->plants->first(function ($plant) use ($name) {
            return $plant->name === $name;
        });

        if (!$plant) {
            abort(404, 'No se ha encontrado la planta');
        }

        return view('plants.show', compact('plant'));
    }

    public function create()
    {
        return view('plants.create');
    }

    public  function store(Request $request)
    {
        $filePath = storage_path('app/json/plants.json');
        if ($filePath) {
            $jsonContent = file_get_contents($filePath);
            $data = json_decode($jsonContent, true);
            $data[] = ['name' => $request->name, 'discovery_date' =>$request->discovery_date ];
            File::put($filePath, json_encode($data));
            return redirect()->route('plants.index');
        }
    }

    public function edit($id)
    {
        // Buscar el modelo cuyo campo 'name' sea igual a 'Alfo'
        $plant = $this->plants->first(function ($plant) use ($id) {
            return $plant->name === $id;
        });

        return view('plants.edit', compact('plant'));
    }

    public function update(Request $request)
    {
        $name = $request->id;
        $new_name = $request->name;
        $discovery_date = $request->discovery_date;

        $filePath = storage_path('app/json/plants.json');

        if ($filePath) {
            $jsonContent = file_get_contents($filePath);
            $data = json_decode($jsonContent, true);
            $key = array_search($name, array_column($data, 'name'));

            if ($key !== false) {
                $data[$key]['name'] = $new_name;
                $data[$key]['discovery_date'] = $discovery_date;

                // Guardar la modificación en el archivo JSON
                File::put($filePath, json_encode($data));

                // Puedes imprimir o devolver la planta modificada
                return redirect()->route('plants.index');

            } else {
                dd("Planta con nombre $name no encontrada en el archivo JSON");
            }
        } else {
            dd("No se pudo acceder al archivo JSON");
        }
    }

    public function delete($id)
    {
        $name = $id;


        $filePath = storage_path('app/json/plants.json');

        if ($filePath) {
            $jsonContent = file_get_contents($filePath);
            $data = json_decode($jsonContent, true);
            $key = array_search($name, array_column($data, 'name'));

            if ($key !== false) {
                unset($data[$key]);
                $data = array_values($data);
                File::put($filePath, json_encode($data));

                // Puedes imprimir o devolver la planta modificada
                return redirect()->route('plants.index');

            } else {
                dd("Planta con nombre $name no encontrada en el archivo JSON");
            }
        } else {
            dd("No se pudo acceder al archivo JSON");
        }
    }

}
