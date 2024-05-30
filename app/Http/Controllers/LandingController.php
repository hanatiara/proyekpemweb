<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $terpopuler = DB::table('category')->where('tags','terpopuler')->get();

        $data = [
            'terpopuler' => $terpopuler
        ];

        return view('landing.index', $data);
    }

    public function details()
    {
        //
        return view('landing.details');
    }

    public function kategori()
    {
        $terbaru = DB::table('category')->where('tags','terbaru')->get();

        $terpopuler = DB::table('category')->where('tags','terpopuler')->get();

        // dd($terbaru);

        $data = [
            'terbaru' => $terbaru,
            'terpopuler' => $terpopuler
        ];

        return view('landing.kategori', $data);
    }

    public function viewDetails($id) {
        $items = DB::table('category')->where('id_category', $id)->get()->first();
        $data = [
            'items' => $items,
        ];
        return view('landing.details', $data);

    }

    public function ourteams()
    {
        //
        return view('landing.ourteams');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
