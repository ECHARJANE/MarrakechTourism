<?php

namespace App\Http\Controllers;

use App\Models\Commentair;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $commentaires = Commentair::all();
        return view('services',compact('commentaires'));
    }


}
