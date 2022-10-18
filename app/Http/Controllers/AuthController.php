<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me (){
        return[
            'nis' => 3103120171,
            'Name' => 'Novita Syahwa Tri Hapsari',
            'Phone' => '081229555381',
            'class' => 'XII RPL 5'
        ];
    }
}
