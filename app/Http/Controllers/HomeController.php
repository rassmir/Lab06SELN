<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
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
        $categorias = Categoria::all();
        return view('home', array(
            'categorias' => $categorias
        ));
    }
    public function store(Request $request)
    {
        $categorias=new Categoria();
        $categorias->name=$request->input('name');
        $categorias->save();
        return redirect()->route('home')->with(array(
            'message'=>'Guardado Correctamente !!'
        ));
    }
    public function destroy($id)
    {
        $categorias=Categoria::find($id);
        $categorias->delete($id);
        return redirect()->route('home');
    }
}
