<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;
use App\MemberTypes;

class MemberController extends Controller
{
    
    public function index(){
        $members = Members::paginate(15);

        return response()->json($members);
    }

    Public function show(){

    }

    public function store(Request $request){
        $members = new Members([
            'type_id'       => $request->get('type_id'),
            'member_name'   => $request->get('member_name'),
            'gender'        => $request->get('gender'),
            'dob'           => $request->get('dob'),
            'biodata'       => $request->get('biodata')
        ]);

        $members->save();
    }

    public function edit(){
        $members = Members::find($id);

    }

    public function update(){

        $members = Members::find($id);

        $members->type_id       = $request->get('type_id');
        $members->member_name   = $request->get('member_name');
        $members->gender        = $request->get('gender');
        $members->dob           = $request->get('dob');
        $members->biodata       = $request->get('biodata');

        $member->save();

    }

    public function delete(){
        $members = Members::find($id);
        $members->delete();
    }
}
