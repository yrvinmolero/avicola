<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function validateDetails()
    {
        return view('details.details');
    }

}
