<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoDosController extends Controller
{
    /**
     * Listar todos los productos .
     */
    public function index()
    {
        $productos = Producto::all();

        return view('producto.gestionar',
        compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('producto.registro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = Producto::create([
            'nombre' => $request->nombre,
            'marca' => $request->marca,
            'precio' => $request->precio,
            'descripcion' => $request->descripcion
        ]);

        if(!$producto){
            session()->flash('error','Error al registrar el producto :(');
            return redirect()->route('producto.create');
        }
        session()->flash('success','Producto registrado con exito :)');
        return $this->index();
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
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.editar',
        compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::where('id', $id)->update([
            'nombre' => $request->nombre,
            'marca' => $request->marca,
            'precio' => $request->precio,
            'descripcion' => $request->descripcion
        ]);

        if(!$producto){
            session()->flash('error', 'Producto no actualizado :(');
            return redirect()->route('producto.index');
        }
        session()->flash('success', 'Producto actualizado con exito :)');
        return redirect()->route('producto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::where('id', $id)->delete();

        if(!$producto) {
            session()->flash('error', 'Error al eliminar el producto :(');
            return redirect()->route('producto.index');
        }

        session()->flash('success','Producto eliminado con éxito :)');
        return redirect()->route('producto.index');
    }
}
