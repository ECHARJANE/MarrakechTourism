<?php

namespace App\Http\Controllers;

use App\Models\Commentair;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\CommentaireRequest;

class CommentaireController extends Controller
{
    public function index()
    {
        return view('commentaire');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentaireRequest $request)
    {
        //-Validation
        $formfileds = $request->validated();
        $formfileds['image'] = $request->file('image')->store('commentaires','public');
        //-Insertion
        Commentair::create($formfileds);

        session()->flash('message', 'Votre message est bien envoyé');
        return redirect()->route('services.index');
    }
}
