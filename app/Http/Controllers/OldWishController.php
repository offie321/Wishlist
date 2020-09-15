<?php

namespace App\Http\Controllers;

use App\Wish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OldWishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $wishes = DB::table('wishes')->get();

        return view('wish', ['wishes' => $wishes]);
    }

    public function beheer()
    {
        $wishes = DB::table('wishes')->get();

        return view('beheer', ['wishes' => $wishes]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
//
//        $request->validate([
//            'naam' => 'required',
//            'plaatje' => 'required',
//            'omschrijving' => 'required',
//            'prijs' => 'required',
//            'weblink' => 'required'
//        ]);


        Wish::create([

//            'user_id' => Auth::user()->id,
            'naam' => $request->naam,
            'plaatje' => $request->plaatje,
            'omschrijving' => $request->omschrijving,
            'prijs' => $request->prijs,
            'weblink' => $request->weblink
        ]);


        return redirect()->route('beheer')
            ->with('success', 'Wish Added Successfully!');
    }

//TODO Update and edit are not working.
    public function edit()
    {
//        return view('edit', compact('wish'));
        $wishes = DB::table('wishes')->get();

        return view('edit', ['wishes' => $wishes]);
    }

    public function destroy(Wish $wish)
    {

        $wish->delete();

        return redirect()->route('beheer')
            ->with('success', 'Person Deleted Successfully!');
    }

//    I don't really know if this is gonna work.
//TODO make this work(Update function).
    public function update(Request $request)
    {
        //
//        $request->validate([
//            'naam' => 'required',
//            'plaatje' => 'required',
//            'omschrijving' => 'required',
//            'prijs' => 'required',
//            'weblink' => 'required'
//        ]);


        Wish::edit([

//            'user_id' => Auth::user()->id,
            'naam' => $request->naam,
            'plaatje' => $request->plaatje,
            'omschrijving' => $request->omschrijving,
            'prijs' => $request->prijs,
            'weblink' => $request->weblink
        ]);


        return redirect()->route('beheer')
            ->with('success', 'Wish Added Successfully!');
    }


}
