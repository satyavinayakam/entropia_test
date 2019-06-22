<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CasteCrews;

class CasteCrewController extends Controller
{
    public function index(){
        $caste = CasteCrews::all();

        return response()->json($caste);
    }

    public function show(){}

    public function store(){
        $caste = new CasteCrews([
            'movie_id'      => $request->get('movie_id'),
            'member_id'      => $request->get('member_id')
            
        ]);

        $caste->save();
    }

    public function edit(){
        $caste = CasteCrews::find($id);
    }

    public function update(){
        $caste = CasteCrews::find($id);

        $caste->movie_id  = $request->get('movie_id');
        $caste->member_id = $request->get('member_id');

        $caste->save();
    }

    public function delete(){
        $caste = CasteCrews::find($id);
        $caste->delete();
    }
}
