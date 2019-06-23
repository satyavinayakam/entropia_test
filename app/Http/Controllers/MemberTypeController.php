<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MemberTypes;

class MemberTypeController extends Controller
{
    public function index(){
        $member_type = MemberTypes::paginate(15);

        return response()->json($member_type);
    }

    public function store(Request $request){

        $member_type = new MemberTypes([

            'member_name' => $request->get('member_name'),
            'member_tag'  => $request->get('member_tag')
        ]);
            $member_type->save();
    }

    public function edit(){
        $member_type = MemberTypes::find($id);
    }

    public function update(Request $reqest){
        $member_type = MemberTypes::find($id);

        $member_type->member_name = $request->get('member_name');
        $member_type->member_tag  = $reqest->get('member_tag');

        $member_type->save();
    }

    public function show() {

    }

    public function delete(){

        $member_type = MemberTypes::find($id);
        $member_type->delete();
    }

}
