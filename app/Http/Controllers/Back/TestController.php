<?php

namespace App\Http\Controllers\Back;

use App\Http\Requests\TestCreate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{

    public function index()
    {

        return view('test');
    }

    public function allData()
    {
        $data = Test::orderByDesc('created_at')->get();
        return response()->json($data);
    }

    public function create()
    {
        //
    }

    public function store(TestCreate $request)
    {

        $data = new test;
        $data->name  = $request->name;
        $data->email = $request->email;

        if ($request->hasFile('image')) {

            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
        }


        $data->save();
        return response()->json($data);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
