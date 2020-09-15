<?php

namespace App\Http\Controllers;

use App\Wish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WishController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function beheer(){
        //
//        $wishes = DB::table('wishes')->get();

        $wish = Wish::all();

        return view('../beheer', ['wishes' => $wish]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $wishes = DB::table('wishes')->get();

        $wish = Wish::all();

        return view('../wish', ['wishes' => $wish]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('wish.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//
//        $request->validate([
//            'naam'=>'required',
//            'plaatje'=>'required',
//            'omschijving'=>'required'
//        ]);
//
//        $contact = new Contact([
//            'naam' => $request->get('naam'),
//            'plaatje' => $request->get('plaatje'),
//            'omschrijving' => $request->get('omschrijving'),
//            'prijs' => $request->get('prijs'),
//            'weblink' => $request->get('weblink')
//        ]);
//        $contact->save();
//        return redirect('/contacts')->with('success', 'Contact saved!');

        //

        Wish::create([

//            'user_id' => Auth::user()->id,
            'naam' => $request->naam,
            'plaatje' => $request->plaatje,
            'omschrijving' => $request->omschrijving,
            'prijs' => $request->prijs,
            'weblink' => $request->weblink
        ]);


        return redirect()->route('wish.create')
            ->with('success', 'Wish Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('wish.show', );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $wish = Wish::find($id);
        return view('wish.edit', compact('wish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'naam' => 'required',
            'plaatje' => 'required',
            'omschrijving' => 'required'
        ]);

        $wish = Wish::find($id);
        $wish->naam = $request->get('naam');
        $wish->plaatje = $request->get('plaatje');
        $wish->omschrijving = $request->get('omschrijving');
        $wish->prijs = $request->get('prijs');
        $wish->weblink = $request->get('weblink');

        $wish->save();

        return redirect('/wish')->with('success', 'Contact updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $wish = Wish::find($id);
        $wish->delete();

        return redirect('/wish')->with('success', 'Contact deleted!');
    }
}
