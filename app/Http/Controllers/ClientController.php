<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clients = [
            ['id' => 1, 'nome' => 'Carol', 'CPF' => 34449827108, 'RG'=> 2173823, 'sexo' => 'F', 'Data_nascimento' => '10/27/2001', 'celular' => 69956731032, 'email' => 'patofeio1@gmail.com' ]
        ];

        $dadosPessoais = array_column($clients, 'nome');

        return view('Dados_Clientes', compact('clients', 'dadosPessoais'));
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
