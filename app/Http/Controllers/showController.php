<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class showController extends Controller
{
    public function showDataInView()
    {
        $characters = Character::all();
        return view('components.board',compact('characters'));
    }
    public function showSpecieHuman()
    {
        $characters = Character::where('species','=','human')->get();
        return view('components.board',compact('characters'));
    }
    public function showSpecieAlien()
    {
        $characters = Character::where('species','=','alien')->get();
        return view('components.board',compact('characters'));
    }
    public function showSpecieHumanoid()
    {
        $characters = Character::where('species','=','humanoid')->get();
        return view('components.board',compact('characters'));
    }
    public function showSpeciePoopybutthole()
    {
        $characters = Character::where('species','=','poopybutthole')->get();
        return view('components.board',compact('characters'));
    }
    public function showSpecieMythilogical()
    {
        $characters = Character::where('species','=','mythilogical')->get();
        return view('components.board',compact('characters'));
    }
    public function showSpecieAnimal()
    {
        $characters = Character::where('species','=','animal')->get();
        return view('components.board',compact('characters'));
    }
    public function showSpecieRobot()
    {
        $characters = Character::where('species','=','robot')->get();
        return view('components.board',compact('characters'));
    }
    public function showSpecieCronenberg()
    {
        $characters = Character::where('species','=','cronenberg')->get();
        return view('components.board',compact('characters'));
    }
    public function showSearch(Request $request)
    {
        $searchTerm = $request->input('search_term');
        if($searchTerm){
            $characters = Character::where('name','LIKE','%' . $searchTerm . '%')->get();
        }else{
            $characters = null;
            //return view()
        }
        return view('components.board',compact('characters'));

    }
    public function showCharacterDetail($id)
    {
        $character = Character::find($id);
        return view('components.detail',compact('character'));
    }
}
