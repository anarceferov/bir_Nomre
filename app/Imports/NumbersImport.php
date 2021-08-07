<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;
use App\Models\Number;
use Illuminate\Http\Request;


class NumbersImport implements ToModel 
{
    public function model(array $row)
    {


        return new Number([
            'prefix'=> str::substr($row[0] , 0 , 2),
            'num1'  => str::substr($row[0] , -7 , 1),
            'num2'  => str::substr($row[0] , -6 , 1),
            'num3'  => str::substr($row[0] , -5 , 1),
            'num4'  => str::substr($row[0] , -4 , 1),
            'num5'  => str::substr($row[0] , -3 , 1),
            'num6'  => str::substr($row[0] , -2 , 1),
            'num7'  => str::substr($row[0] , -1),
            'price'   => $row[1] ?? 10,
            'contact' => $row[2] ?? null,
            'seller'  => $row[3] ?? null,
            'operator'=> $row[4] ?? null

        ]);
    }


}
