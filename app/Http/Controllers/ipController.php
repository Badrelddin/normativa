<?php

namespace App\Http\Controllers;

use App\Models\ips;
use Illuminate\Http\Request;

class ipController extends Controller
{
    public function show(){
        $ips = ips::all();
        return $ips;
    }
}


