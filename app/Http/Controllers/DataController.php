<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;


class DataController extends Controller
{
    public function index()
    {
        $data = Data::count();
        return view('index', compact('data'));
    }

    public function dashboard(){
        $data = Data::all();
         return view('dashboard', compact('data'));
     }

     public function tambah()
     {
         return view('tambah');
     }

     public function tambah_action(Request $request)
     {
         $request->validate([
             'idProduk' => 'required',
             'judulProduk' => 'required',
             'deskripsi' => 'required',
             'harga' => 'required',
             'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
         ]);
   
         $input = $request->all();
   
         if ($gambar = $request->file('gambar')) {
             $destinationPath = 'foto/';
             $fotogambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
             $gambar->move($destinationPath, $fotogambar);
             $input['gambar'] = $fotogambar;
         }
     
         Data::create($input);
      
         return redirect('/dashboard');
     
     }

     public function edit($idProduk)
     {
         $data = Data::find($idProduk);
         return view('edit', compact('data'));
     }
 

     public function update(Request $request,$idProduk, Data $produk)
     {
         $produk = Data::find($idProduk);
         $request->validate([
            'idProduk' => 'required',
            'judulProduk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);
   
         $input = $request->all();
   
         if ($gambar = $request->file('gambar')) {
            $destinationPath = 'foto/';
            $fotogambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $fotogambar);
            $input['gambar'] = $fotogambar;
        }else{
             unset($input['gambar']);
         }
           
         $produk->update($input);
         
         return redirect('/dashboard')->with('success','Produk Berhasil Diupdate!');
     }
     
 
     public function delete($idProduk)
     {
         $data = Data::find($idProduk);
         $data->delete();
 
         return redirect('/dashboard');
     }
 }
