<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(5);
        return view('admin.contact',compact('contacts'));
    }
    
    public function destroy(Contact $contact)
    {
        $contact->delete();
        session()->flash('message', 'Votre Contact est bien supprimée');
        return redirect()->back();
    }
}
