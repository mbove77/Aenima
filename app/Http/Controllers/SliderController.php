<?php

namespace App\Http\Controllers;

use App\Slider;
use File;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['apicall']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'image_url' => 'required|image|mimes:jpeg,jpg|max:4096|dimensions:min_width=1200',
            'titulo_principal' => 'required|min:4|max:255',
            'subtitulo_principal' => 'required|min:4|max:255',
            'descripcion_principal' => 'required|min:4',
            'titulo_secundario' => 'required|min:4|max:255',
            'subtitulo_secundario' => 'required|min:4|max:255',
            'descripcion_secundario' => 'required|min:4',
        ]);

        $imageName = time().'.'.request()->image_url->getClientOriginalExtension();
        request()->image_url->move(public_path('images'), $imageName);

        Slider::create([
            'image_url' => $imageName,
            'titulo_principal'  => request('titulo_principal'),
            'subtitulo_principal'  => request('subtitulo_principal'),
            'descripcion_principal'  => request('descripcion_principal'),
            'titulo_secundario'  => request('titulo_secundario'),
            'subtitulo_secundario'  => request('subtitulo_secundario'),
            'descripcion_secundario'  => request('descripcion_secundario'),
        ]);

        return redirect("/sliders");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return view('admin.edit', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        request()->validate([
            'image_url' => 'nullable|image|mimes:jpeg,jpg|max:4096|dimensions:min_width=1200',
            'titulo_principal' => 'required|min:4|max:255',
            'subtitulo_principal' => 'required|min:4|max:255',
            'descripcion_principal' => 'required|min:4',
            'titulo_secundario' => 'required|min:4|max:255',
            'subtitulo_secundario' => 'required|min:4|max:255',
            'descripcion_secundario' => 'required|min:4',
        ]);

        if ($request->has('image_url')) {

            File::delete(public_path('images') ."\\" . $slider->image_url);

            $imageName = time().'.'.request()->image_url->getClientOriginalExtension();
            request()->image_url->move(public_path('images'), $imageName);
            $slider->image_url = $imageName;
        }

        $slider->titulo_principal = request('titulo_principal');
        $slider->subtitulo_principal = request('subtitulo_principal');
        $slider->descripcion_principal = request('descripcion_principal');
        $slider->titulo_secundario = request('titulo_secundario');
        $slider->subtitulo_secundario = request('subtitulo_secundario');
        $slider->descripcion_secundario = request('descripcion_secundario');
        $slider->save();

        return redirect("/sliders");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        File::delete(public_path('images') ."\\" . $slider->image_url);
        $slider->delete();
        return redirect("/sliders");
    }
}
