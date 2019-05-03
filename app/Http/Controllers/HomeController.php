<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Note;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('newNote');
    }

    public function allNotes()
    {
        $notes = Note::orderBy('created_at','desc')->get();
        return view('allNotes', ['notes'=> $notes]);
    }

    public function addNewNote()
    {
        Note::Create([
            'title'     => request('title'),
            'content'   => request('content'),
            'userId'    => Auth::id()
        ]);

        return redirect('allNotes');
    }

    public function deleteNote ($id){
        $del = Note::find(request('id'));
        $del->delete();
        return redirect('allNotes');
    }
}
