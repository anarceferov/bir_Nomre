<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Number;
use Illuminate\Http\Request;


class Homes extends Component
{

    public function index(Request $request)
    {

        $numbers = Number::orderByDesc('id');

        if (!empty($request->GET('prefix'))) 
        {
            $numbers = $numbers->where('prefix', $request->GET('prefix'));
        }
        if (!empty($request->GET('num1'))) 
        {
            $numbers = $numbers->where('num1', $request->GET('num1'));
        }
        if (!empty($request->GET('num2'))) 
        {
            $numbers = $numbers->where('num2', $request->GET('num2'));
        }
        if (!empty($request->GET('num3'))) 
        {
            $numbers = $numbers->where('num3', $request->GET('num3'));
        }
        if (!empty($request->GET('num4'))) 
        {
            $numbers = $numbers->where('num4', $request->GET('num4'));
        }
        if (!empty($request->GET('num5'))) 
        {
            $numbers = $numbers->where('num5', $request->GET('num5'));
        }
        if (!empty($request->GET('num6'))) 
        {
            $numbers = $numbers->where('num6', $request->GET('num6'));
        }
        if (!empty($request->GET('num7'))) 
        {
           $numbers = $numbers->where('num7', $request->GET('num7'));
        }
        if ($request->GET('sade')) 
        {
           $numbers = $numbers->whereBetween('price', [0,25]);
        }
        if ($request->GET('gumus')) 
        {
           $numbers = $numbers->whereBetween('price', [25,100]);
        }
        if ($request->GET('qizil')) 
        {
           $numbers = $numbers->whereBetween('price', [100,500]);
        }
        if ($request->GET('platinium')) 
        {
           $numbers = $numbers->where('price', '>=' , 500);
        }

        
        $numbers = $numbers->paginate(5);
        $count = $numbers->count();

        return view('livewire.homes' , compact('numbers' , 'count'));
    }


    // public function sade(Request $request)
    // {
    //     if ($request->GET('sade')) 
    //     {
    //        $numbers = number::whereBetween('price', [0,25])->get();
    //        return response()->json($numbers);
    //     }

    // }
}
