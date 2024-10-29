<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return Inertia::render('Frontend/Product/Index',[
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Frontend/Product/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'email' => 'required|string',
            'cpf' => 'required|string',
            'perfil' => 'required|string',
            'data_cadastro' => 'required|string',
            'endereco' => 'required|string',
        ]);
        Product::create([
            'nome' => $request->nome,
            'email' =>$request->email,
            'cpf' =>$request->cpf,
            'perfil' =>$request->perfil,
            'data_cadastro' =>$request->data_cadastro,
            'endereco' =>$request->endereco,
        ]);

        return redirect()->to('/products')->with('message', 'Usuário cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return Inertia::render('Frontend/Product/Show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return Inertia::render('Frontend/Product/Edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        
        $request->validate([
            'nome' => 'required|string',
            'email' => 'required|string',
            'cpf' => 'required|string',
            'perfil' => 'required|string',
            'data_cadastro' => 'required|string',
            'endereco' => 'required|string',
        ]);
        $product->update([
            'nome' => $request->nome,
            'email' =>$request->email,
            'cpf' =>$request->cpf,
            'perfil' =>$request->perfil,
            'data_cadastro' =>$request->data_cadastro,
            'endereco' =>$request->endereco,
        ]);
        return redirect()->to('/products')->with('message', 'Usuário atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product ->delete();
        return redirect()->to('/products')->with('message', 'Usuário apagado com sucesso');
    }
}
