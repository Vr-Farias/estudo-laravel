<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index () {
        // $fornecedores = ['Fornecedor 1'];
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 
            'status' => 'N', 
            'CNPJ' => '00.000.000/000-00'],
            1 => ['nome' => 'Fornecedor 2', 
            'status' => 'S']
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
