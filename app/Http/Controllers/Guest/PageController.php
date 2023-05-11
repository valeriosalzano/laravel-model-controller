<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Exception;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function movies() {

        $movies = Movie::all();

        foreach ($movies as $movie){

            switch($movie['nationality']){
                case ('american'):
                    $movie['nationality'] = 'US';
                break;
                case ('american/british'):
                    $movie['nationality'] = 'US/GB';
                break;
                default:
                    throw new Exception("Found unknown 'nationality' in movies");
                break;
            }

            $movie['date'] = date_format(date_create_from_format('Y-m-d',$movie['date']), 'd/m/Y');
            
        }

        return view('movies', compact('movies'));
    }
}
