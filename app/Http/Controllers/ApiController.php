<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        return view('layouts.app');
    }
    public function consumeAPI_saveAPI()
    {
        $url = 'https://rickandmortyapi.com/api/character';
        $page = 1;
        try
        {
            do{

                $response = Http::get($url, ['page' => $page]);
                if($response->successful()){
                    $data = $response->json()['results'];
                    foreach($data as $characterData){
                        Character::firstOrCreate([
                            'name' => $characterData['name'],
                            'status' => $characterData['status'],
                        'species' => $characterData['species'],
                        'gender' => $characterData['gender'],
                        'origin' => $characterData['origin']['name'],
                        'image' => $characterData['image'],
                        ]);
                    }
                    $page++;
                }else{
                    return 'Error en la extracción de datos';
                }
            }while($page <= 42);
            return 'Datos guardados exitosamente en la tabla';
        }catch(\Exception $e)
        {
            return "Error: " . $e->getMessage();
        }
    }
    
}
