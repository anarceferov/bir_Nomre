<?php

namespace App\Http\Controllers\Back;

use App\Http\Requests\TestCreate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{

    public function index(Request $request)
    {
        return view('test');
    }

    public function allData()
    {

        $data = Test::orderByDesc('created_at')->get();

        return response()->json($data);
    }


    public function store(TestCreate $request)
    {

        $data = new test;
        $data->name  = $request->name;
        $data->email = $request->email;

        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }


        $data->save();
        return response()->json($data);
    }

    public function editData($id)
    {

        $data = Test::find($id);
        return response()->json($data);
    }

    public function updateData(Request $request, $id)
    {
        $data = Test::find($id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return response()->json($data);
    }


    public function deleteData($id)
    {
        $data = Test::find($id)->delete();
        return response()->json($data);
    }

}
