<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('products.index', compact ('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome_produto' => 'required',
            'marca' => 'required',
            'categoria' => 'required',
            'valor_compra' => 'required|numeric',
            'valor_venda' => 'required|numeric',
            'qtd_estoque' => 'required|integer',
        ]);


        Product::create($request->all());

        return redirect()->route('products.index')->with('success','Produto criado com sucesso.'); 

    }

    public function show(Product $product)
    {
        return view('products.show', compact ('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nome_produto' => 'required',
            'marca' => 'required',
            'categoria' => 'required',
            'valor_compra' => 'required|numeric',
            'valor_venda' => 'required|numeric',
            'qtd_estoque' => 'required|numeric',
        ]);

        $product ->update($request->all());
        
        return redirect()->route('products.index')->with('success', 'Produto atualizado com sucesso.');

    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produto excluído com sucesso.');
    }
}
