<?php

namespace App\Http\Controllers\Resource;

use App\Core\Domain\Models\AktaPerusahaan;
use App\Core\Domain\Models\BiodataPerusahaan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;


class AktaController extends Controller
{

    public function __construct(){
        $this->middleware(['auth','verified']);
    }
    public function index()
    {
        
        $user = auth('sanctum')->user();
        $akta = AktaPerusahaan::where('id_user', $user->id)->first();

        return view('AktaPerusahaan.index', [
            'akta' => $akta,
        ]);
    }


    public function store(Request $request)
    { 
        
       $request->validate([
            'nomorakta' => 'required',
            'tanggalakta' => 'required|date',
            'image' => 'required|mimes:pdf|max:10000',


        ]);
       

        $user = auth('sanctum')->user();
        $biodata = BiodataPerusahaan::where('id_user', $user->id)->first();

       $akta =new AktaPerusahaan();
       $akta->id_user= $user->id;
       $akta->nomor_akta= $request->input('nomorakta');
       $akta->tanggal_akta = $request->input('tanggalakta');
       
       if( $biodata === null){
        return redirect ('/BiodataPerusahaan')->with('failed', 'Anda Harus Mengisi Biodata Perusahaan Terlebih Dahulu');
       }
       else{
    $surat = $request -> file('image');
       $nama = $biodata->Nama_distributor .'_'.'Surat_Akta'.'.'.$surat->getClientOriginalExtension();
    //    $biodata->Surat_Pengajuan = $surat.
    $surat->move(\public_path("/uploads/file_akta"),$nama);
     $akta->image = $nama;

    
       $akta->image = $nama;
       $akta->save();
        return redirect ('/AktaPerusahaan')->with('success', 'Data Telah Disimpan!');
       }
   
    }
  
}
