<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;
use App\MemberTypes;
use App\Members;
use App\Users;

class MovieController extends Controller
{
    public function index(){
        $movies = Movies::paginate(15);

        return response()->json($movies);
    }

    public function show(){}

    public function store(Request $request){
        $movies = new Movies([
            'movie'         => $request->get('movie'),
            'release_date'  => $request->get('release_date'),
            'thumbnail'     => $request->get('thumbnail'),
            'trailer_url'   => $request->get('trailer_url'),
            'producer_id'   => $request->get('producer_id')
        ]);

        $movies->save();
    }

    public function edit(){
        $movies = Movies:: find($id);

    }

    public function update(Request $reqest){
        $movies = Movies:: find($id);

        $movies->movie = $request->get('movie');
        $movie->release_date = $request->get('release_date');


        $movies->save();
    }

    public function delete(){}
}
