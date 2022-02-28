<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class FormController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {
        // message error untuk validasi
        $messagesError = [
            'required' => ':attribute wajib untuk diisi. Silahkan diisi',
            'min' => ':attribute harus diisi minimal :min karakter. Silahkan diisi kembali.',
            'max' => ':attribute harus diisi maksimal :max karakter. Silahkan diisi kembali',
        ];

        // validasi data pada form
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'nrp' => 'required|min:5|max:15',
            'departemen' => 'required',
            'kota' => 'required', 
            'ipk' => 'required|numeric|between:2.50,99.99',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ],$messagesError);

        // mengganti nama file gambar sesuai dengan NRP
        $imageName = $request->nrp . '.'.$request->gambar->extension();  
        // echo "</br> request->gambar = " . $imageName;
        // echo "</br> request->gambar = " . $request->gambar;

        // memindahkan file gambar ke storage/app/images
        // membuat php artisan storage:link untuk menghubungkan ke public
        $request->gambar->move(storage_path('app/images'), $imageName);

        // echo "</br> request->gambar = " . $request->gambar;

        // passing nama gambar yang baru ke variabel $request->gambar
        $request->gambar = $imageName;

        // dd($request);

        // flash message apabila data berhasil diinputkan
        session()->flash('success', 'Data Berhasil Diinputkan!');
        
        // echo "</br> request->gambar = " . $request->gambar;


        return view('proses',['data' => $request]);
    }
}