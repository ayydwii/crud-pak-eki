<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Menampilkan semua data";
    }

    public function create()
    {
        return "Form tambah data";
    }

    public function store(Request $request)
    {
        return "Menyimpan data baru";
    }

    public function show($id)
    {
        return "Menampilkan data dengan id: $id";
    }

    public function edit($id)
    {
        return "Form edit data dengan id: $id";
    }

    public function update(Request $request, $id)
    {
        return "Mengupdate data dengan id: $id";
    }

    public function destroy($id)
    {
        return "Menghapus data dengan id: $id";
    }
}
