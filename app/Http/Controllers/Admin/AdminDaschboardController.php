<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminDaschboardController extends Controller
{
    public function index()
    {
        $counterContact = Contact::all();
        return view('admin.dashboard',compact('counterContact'));
    }
}
