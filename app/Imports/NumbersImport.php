<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\Number;




class NumbersImport implements ToModel 
{
    public function model(array $row)
    {

        // if(empty($row[1])) {
        //     return Arr::prepend($row[1], 10);
        // }

        // if(empty($row[1])) {
        //     return $row[1]->push(10);
        // }

        return new Number([
            'prefix'=> str::substr($row[0] , 0 , 2),
            'num1'  => str::substr($row[0] , -7 , 1),
            'num2'  => str::substr($row[0] , -6 , 1),
            'num3'  => str::substr($row[0] , -5 , 1),
            'num4'  => str::substr($row[0] , -4 , 1),
            'num5'  => str::substr($row[0] , -3 , 1),
            'num6'  => str::substr($row[0] , -2 , 1),
            'num7'  => str::substr($row[0] , -1),
            'price'   => $row[1],
            'contact' => $row[2],
            'seller'  => $row[3],
            'operator'=> $row[4]

        ]);
    }


}
