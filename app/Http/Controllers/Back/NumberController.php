<?php

namespace App\Http\Controllers\Back;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\NumbersImport;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImportRequest;
use App\Http\Requests\NumberCreate;
use App\Http\Requests\NumberUpdate;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Number;

class NumberController extends Controller
{

    public function index(Request $request)
    {
        $count = count(Number::all());

        $numbers = Number::orderByDesc('id')->paginate(20);

        return view('back.number.list', compact('numbers', 'count'));
    }

    public function create()
    {
        return view('back.number.create');
    }

    public function store(NumberCreate $request)
    {
        Number::create(request()->post());
        return redirect()->route('numbers.index')->withSuccess('Uğurla əlavə edildi');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $number = Number::find($id) ?? abort(403, 'Nömrə Tapılmadı...');
        return view('back.number.edit', compact('number'));
    }

    public function update(NumberUpdate $request, $id)
    {
        Number::find($id)->update(request()->post()) ?? abort(403, 'Nömrə Tapılmadı...');
        return redirect()->route('numbers.index')->withSuccess('Uğurla yeniləndi...');
    }

    public function destroy($id)
    {
        Number::findOrFail($id)->delete();
        toastr()->success('Uğurla Silindi...');
        return redirect()->back();
    }


    public function import(Request $request)
    {
        // $fileName = time().'.'.$request->excel->extension();  
        // $request->excel->move(public_path('excel'), $fileName);
        // return redirect()->route('numbers.index')->withSuccess('Fayl uğurla yükləndi...');
        //Excel::import(new NumbersImport, $file);


        $file = $request->file('excel');


        $fileName = $request->file('excel')->getClientOriginalName();
        $file2 = Str::substr($fileName, -4);
        if ($file2 !== 'xlsx') {
            return redirect()->back()->withErrors('Fayl formatı xlsx olmalıdır...');
        } else {
            Excel::import(new NumbersImport, $file);

            // (new NumbersImport)->import($file);
            return redirect()->route('numbers.index')->withSuccess('Fayl uğurla yükləndi...');
        }
    }


    public function allDelete(ImportRequest $request)
    {
        $ids = $request->ids;
        Number::whereIn('id', $ids)->delete();
        $message = array('message' => 'Uğurla Silindi...');
        return response()->json($message);
    }

    // public function searchNumber(Request $request)
    // {
    //     $count   = count(Number::all());
    //     $prefix  = $request->get('prefix');
    //     $num1    = $request->get('num1');
    //     $num2    = $request->get('num2');
    //     $num3    = $request->get('num3');
    //     $num4    = $request->get('num4');
    //     $num5    = $request->get('num5');
    //     $num6    = $request->get('num6');
    //     $num7    = $request->get('num7');
    //     $numbers = Number::search($prefix, $num1 , $num2 , $num3 , $num4 , $num5 , $num6 , $num7 )->orderByDesc('id')->paginate(20);

    //     return view('back.number.list' , compact('numbers' , 'count'));
    // }

    public function searchNumber(Request $request)
    {
        $count   = count(Number::all());
        $numbers = Number::orderByDesc('id');

        if (!empty($request->get('price'))) {
            $numbers = $numbers->where('price', $request->get('price'));
        }

        if (!empty($request->get('prefix'))) {
            $numbers = $numbers->where('prefix', $request->get('prefix'));
        }

        if (!empty($request->get('num1'))) {
            $numbers = $numbers->where('num1', $request->get('num1'));
        }

        if (!empty($request->get('num2'))) {
            $numbers = $numbers->where('num2', $request->get('num2'));
        }

        if (!empty($request->get('num3'))) {
            $numbers = $numbers->where('num3', $request->get('num3'));
        }

        if (!empty($request->get('num4'))) {
            $numbers = $numbers->where('num4', $request->get('num4'));
        }

        if (!empty($request->get('num5'))) {
            $numbers = $numbers->where('num5', $request->get('num5'));
        }

        if (!empty($request->get('num6'))) {
            $numbers = $numbers->where('num6', $request->get('num6'));
        }
        if (!empty($request->get('num7'))) {
            $numbers = $numbers->where('num7', $request->get('num7'));
        }

        $numbers = $numbers->paginate(20);
        return view('back.number.list', compact('numbers', 'count'));
    }
}
