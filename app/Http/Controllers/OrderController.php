<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $orders =
            [
                ['id' => 4, 'cod_ped' => 'xbx561x', 'Cliente' => 'Carol', 'Produto'=> 'camiseta do rock', 'quantidade' => 5, 'valor_ped' => 250.60, 'valor_desc' => 50.00]
            ];

            $dadosOrders = array_column($orders, 'cliente');

        return view('Dados_Pedidos', compact('orders', 'dadosOrders'));
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
