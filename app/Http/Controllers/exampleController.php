<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\example;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class exampleController extends Controller
{
    public function getAlldata(){
        $data = example::all();
        return view('example')->with('data', $data);
    }

    public function createData(Request $request){
        $validation = validator::make($request->all(),
            [
                'name' => 'required',
                'nim' => 'required',
                'address' => 'required'
            ]
        );
        if($validation->fails()){
            $errors = $validation->errors()->first();
            Alert::error('Error', $errors);
            return redirect()->back();
        }
        $data = new example();
        $data->name = $request->name;
        $data->nim = $request->nim;
        $data->address = $request->address;
        $data->save();
        Alert::success('success tambah data');
        return redirect()->back();
    }
}
