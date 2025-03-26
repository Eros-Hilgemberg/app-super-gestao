<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = [0 => ['name' => 'Supplier 1', 'status' => 'N']];
        return view('app.supplier.index', compact('suppliers'));
    }
}
