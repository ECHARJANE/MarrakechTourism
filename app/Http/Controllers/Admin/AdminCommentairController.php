<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Commentair;
use Illuminate\Http\Request;

class AdminCommentairController extends Controller
{
    public function index()
    {
        $commentaires = Commentair::paginate(10);
        return view('admin.commentaire', compact('commentaires'));
    } 

    public function destroy(Commentair $commentair)
    {
        $commentair->delete();
        session()->flash('message', 'Votre Commentair est bien supprimée');
        return redirect()->back();
    }
}

