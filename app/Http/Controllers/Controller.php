<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Barryvdh\Dompdf\Facade\Pdf;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function download(){
        $data= [
            [
                'quantity'=>1,
                'description'=>'1 year subscription',
                'price'=>129.00
                ]
            ];
            $pdf = Pdf::loadview('welcome',['data'=>$data]);
            return $pdf->download();
    }
}


