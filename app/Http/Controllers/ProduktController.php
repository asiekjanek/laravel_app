<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduktController extends Controller
{
    public function index()
    {
        $produkty = [
            ['id' => 1, 'name' => 'Laptop', 'price' => 3000],
            ['id' => 2, 'name' => 'Telefon', 'price' => 2000],
            ['id' => 3, 'name' => 'Tablet', 'price' => 1500],
        ];

        return view('produkty.index', compact('produkty'));
    }

    public function show($id)
    {
        $produkty = [
            1 => ['name' => 'Laptop', 'price' => 3000],
            2 => ['name' => 'Telefon', 'price' => 2000],
            3 => ['name' => 'Tablet', 'price' => 1500],
        ];

        if (array_key_exists($id, $produkty)) {
            return view('produkty.show', [
                'produkt' => $produkty[$id]
            ]);
        }

        return "Produkt nie istnieje";
    }
}