<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
class BarangController extends Controller
{
    //
    public function index()
    {
        $furnitures = Barang::all();

        return view('tabel/tabel_barang', ['furnitures' => $furnitures]);
    }
    public function create()
    {
        return view('form/form_barang');
    }
  
    public function store(Request $request)
    {
        $this->validate($request, [
                'filenames' => 'required',
                'filenames.*' => 'image'
        ]);
  
        $files = [];
        if($request->hasfile('filenames'))
         {
            foreach($request->file('filenames') as $file)
            {
                $name = time().rand(1,50).'.'.$file->extension();
                $file->move(public_path('files'), $name);  
                $files[] = $name;  
            }
         }
  
         $file= new Barang();
         $file->filenames = $files;
         $file->nama_barang = $request->nama_barang;
         $file->sku = $request->sku;
         $file->warna = $request->warna;
         $file->category = $request->category;
         $file->flashsale = $request->flashsale;
         $file->harga = $request->harga;
         $file->harga_diskon = $request->harga_diskon;
         $file->save();
  
        return back()->with('success', 'Images are successfully uploaded');
    }
    public function update(Request $request,$id)
    {
        $this->validate($request, [
                'filenames' => 'required',
                'filenames.*' => 'image'
        ]);
  
        $files = [];
        if($request->hasfile('filenames'))
         {
            foreach($request->file('filenames') as $file)
            {
                $name = time().rand(1,50).'.'.$file->extension();
                $file->move(public_path('files'), $name);  
                $files[] = $name;  
            }
         }
       
         $file= Barang::where('id',$id)->first();
         $file->filenames = $files;
         $file->nama_barang = $request->nama_barang;
         $file->sku = $request->sku;
         $file->warna = $request->warna;
         $file->category = $request->category;
         $file->flashsale = $request->flashsale;
         $file->harga = $request->harga;
         $file->harga_diskon = $request->harga_diskon;
         $file->save();
  
         return redirect()->route('tabel_barang')->with('success','Data berhasi diupdate!');
    }
    public function edit($id)
    {
        $result = Barang::find($id);

        return view('edit/edit_barang',compact('result'));
    }
    public function destroy($id)
    {
        $data = Barang::where('id',$id)->first();
        $data->delete();
        return redirect()->route('tabel_barang')->with('success','Data berhasi dihapus!');
    }
}
