<?php

namespace App\Http\Controllers\Resource;

use App\Core\Domain\Models\BiodataPerusahaan;
use App\Core\Domain\Models\Npwp;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class NPWPController extends Controller
{
    public function __construct(){
        $this->middleware(['auth','verified']);
    }
    public function index()
    {
        $user = auth('sanctum')->user();
        $npwp = NPWP::where('id_user', $user->id)->first();

        return view('NPWP.index', [
            'npwp' => $npwp,
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            
            'nomornpwp' => 'required',
            'tanggalnpwp' => 'required|date',
            'filenpwp' => 'required|mimes:pdf|max:10000',
            'nomorsppkp' => 'required',
            'tanggalsppkp' => 'required|date',
            'filesppkp' => 'required|mimes:pdf|max:10000',


        ]);

        $user = auth('sanctum')->user();
        $biodata = BiodataPerusahaan::where('id_user', $user->id)->first();

        if( $biodata === null){
            return redirect ('/BiodataPerusahaan')->with('failed', 'Anda Harus Mengisi Biodata Perusahaan Terlebih Dahulu');
           }

           else{
            $npwp =new npwp();
            $npwp->id_user= $user->id;
            $npwp->nomor_npwp= $request->input('nomornpwp');
            $npwp->tanggal_npwp = $request->input('tanggalnpwp');
            
            $test= $request -> file('filenpwp');
       $nama = $biodata->Nama_distributor .'_'.'File_NPWP'.'.'.$test->getClientOriginalExtension();
    //    $biodata->Surat_Pengajuan = $surat.
    $test->move(\public_path("/uploads/file_npwp_sppkp"),$nama);
     $npwp->file_npwp = $nama;

    
            // $npwp->file_npwp =  'storage/'.$request -> file('filenpwp')->storeAs('npwp_sppkp_image',$biodata->Nama_distributor.'_NPWP'.'.pdf');
            
            $npwp->nomor_sppkp= $request->input('nomorsppkp');
            $npwp->tanggal_sppkp = $request->input('tanggalsppkp');
            
            $sppkp= $request -> file('filesppkp');
       $nama_file = $biodata->Nama_distributor .'_'.'File_SPPKP'.'.'.$sppkp->getClientOriginalExtension();
    //    $biodata->Surat_Pengajuan = $surat.
    $sppkp->move(\public_path("/uploads/file_npwp_sppkp"),$nama_file);
     $npwp->file_sppkp = $nama_file;

            
            // $npwp->file_sppkp =  'storage/'.$request -> file('filesppkp')->storeAs('npwp_sppkp_image',$biodata->Nama_distributor .'_SPPKP'.'.pdf');
            
            
            $npwp->save();
            return redirect('/NPWP')->with('success', 'Data Telah Disimpan!');
           }

     
    }

   
}
