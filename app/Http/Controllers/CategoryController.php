<?php

namespace App\Http\Controllers;

use App\Models\Category; // Pastikan untuk mengimpor model Category
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $categories = Category::all(); // Mengambil semua kategori dari database
        return view('categories.index', compact('categories')); // Mengembalikan view dengan data kategori
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('categories.create'); // Mengembalikan view untuk membuat kategori baru
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        // Validasi data input
        $request->validate(['name' => 'required']); 
        Category::create($request->all()); // Menyimpan kategori baru
        return redirect()->route('categories.index'); // Mengarahkan kembali ke daftar kategori
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Category $category) {
        return view('categories.show', compact('category')); // Mengembalikan view untuk menampilkan detail kategori
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category) {
        return view('categories.edit', compact('category')); // Mengembalikan view untuk mengedit kategori
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category) {
        // Validasi data input
        $request->validate(['name' => 'required']); 
        $category->update($request->all()); // Mengupdate kategori yang dipilih
        return redirect()->route('categories.index'); // Mengarahkan kembali ke daftar kategori
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category) {
        $category->delete(); // Menghapus kategori yang dipilih
        return redirect()->route('categories.index'); // Mengarahkan kembali ke daftar kategori
    }
}
