<?php

namespace App\Http\Controllers\Resource;

use App\Core\Domain\Models\BiodataPerusahaan;
use App\Http\Controllers\Controller;
use App\Core\Domain\Models\SuratIzinUsaha;
use Illuminate\Http\Request;

class SuratIzinUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware(['auth','verified']);
    }
    public function index()
    {
        $user = auth('sanctum')->user();
        $suratizinusaha = SuratIzinUsaha::where('id_user', $user->id)->first();

        return view('SuratIzinUsaha.index', [
            'suratizinusaha' => $suratizinusaha
        ]);
    }
    
    public function store(Request $request)
    {

        $request->validate([
            'nomortdp' => 'required',
           
            'filetdp' => 'required|mimes:pdf|max:10000',
            'filesiup' => 'required|mimes:pdf|max:10000',
            'filesitu' => 'required|mimes:pdf|max:10000',
        ]);

        $user = auth('sanctum')->user();
        $biodata = BiodataPerusahaan::where('id_user', $user->id)->first();


        if( $biodata === null){
            return redirect ('/BiodataPerusahaan')->with('failed', 'Anda Harus Mengisi Biodata Perusahaan Terlebih Dahulu');
           }
           else{
            $suratizinusaha =new SuratIzinUsaha();
            $suratizinusaha->id_user= $user->id;
            $suratizinusaha->nomor_tdp= $request->input('nomortdp');
            $suratizinusaha->masa_berlaku_tdp = $request->input('masaberlakutdp');
            
            // $suratizinusaha->file_tdp =  'storage/'.$request -> file('filetdp')->storeAs('suratizin-image',$biodata->Nama_distributor .'_tdp'.'.pdf');
            //  $biodata->Surat_Pengajuan = $nama;
             
              $tdp= $request -> file('filetdp');
       $nama_tdp = $biodata->Nama_distributor .'_'.'File_TDG'.'.'.$tdp->getClientOriginalExtension();
    //    $biodata->Surat_Pengajuan = $surat.
    $tdp->move(\public_path("/uploads/file_Surat_Izin_Usaha"),$nama_tdp);
    
             $suratizinusaha->file_tdp = $nama_tdp;

            $suratizinusaha->nomor_siup= $request->input('nomorsiup');
            $suratizinusaha->masa_berlaku_siup = $request->input('masaberlakusiup');
           
     
           
            //  $suratizinusaha->file_siup = 'storage/'.$request -> file('filesiup')->storeAs('suratizin-image',$biodata->Nama_distributor .'_siup'.'.pdf');
             
             $siup= $request -> file('filesiup');
       $nama = $biodata->Nama_distributor .'_'.'File_SIUP'.'.'.$siup->getClientOriginalExtension();
    //    $biodata->Surat_Pengajuan = $surat.
    $siup->move(\public_path("/uploads/file_Surat_Izin_Usaha"),$nama);
    
    $suratizinusaha->file_siup = $nama;
         
         
             // $suratizinusaha->file_siup = 'storage/'.$request -> file ('file_siup');
             // $suratizinusaha->move(public_path().'/storage/',$biodata->id.'.png');
            $suratizinusaha->nomor_situ= $request->input('nomorsitu');
            $suratizinusaha->masa_berlaku_situ = $request->input('masaberlakusitu');
     
         $situ= $request -> file('filesitu');
       $nama_situ = $biodata->Nama_distributor .'_'.'File_SITU'.'.'.$situ->getClientOriginalExtension();
    //    $biodata->Surat_Pengajuan = $surat.
    $situ->move(\public_path("/uploads/file_Surat_Izin_Usaha"),$nama_situ);
    
    $suratizinusaha->file_situ = $nama_situ;
         
         
         
            //  $suratizinusaha->file_situ = 'storage/'.$request -> file('filesitu')->storeAs('suratizin-image',$biodata->Nama_distributor .'_situ'.'.pdf');
               
             $suratizinusaha->save();
            return redirect('/SuratIzinUsaha')->with('success', 'Data Telah Disimpan!');
         }
           }
      
}
