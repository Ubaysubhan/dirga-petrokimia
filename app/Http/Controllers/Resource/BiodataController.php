<?php

namespace App\Http\Controllers\Resource;

use App\Core\Domain\Models\BiodataPerusahaan;
use App\Core\Domain\Models\Province;
use App\Core\Domain\Models\User;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;


class BiodataController extends Controller
{
    
      public function __construct(){
        $this->middleware(['auth','verified']);
    }
    
    public function index()
    {
        $user = auth('sanctum')->user();
        $biodata = BiodataPerusahaan::where('id_user', $user->id)->first();
        $provinsi = Province::all();
        // return $provinsi->provinsi[0]->nama;

        return view('BiodataPerusahaan.index', [
            'biodata' => $biodata,
            'provinsi' => $provinsi
        ]);
    }


    public function store(request $request)
    {
       $test =  $request->validate([

            'badanusaha' => 'required',
            'pupuk' => 'required',
            'distributor' => 'required',
            'pimpinan' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'nomor' => 'required',
            'pic' => 'required',
            'nomor_pic' => 'required',
            'provinsi' => 'required',
            'email' => 'required|email:dns',
            'suratpengajuan' => 'required|mimes:pdf|max:10000',


        ]);

        $user = auth('sanctum')->user();
        $biodata = BiodataPerusahaan::where('id_user', $user->id)->first();

       $biodata =new BiodataPerusahaan();
       $biodata->Pupuk_diambil = implode(",", $request->input('pupuk'));
       $biodata->id_user= $user->id;
       $biodata->daftar = $request->input('daftar');
       if ($request->input('badanusaha') == 'lainnya') {
            $biodata->Badan_Usaha = $request->input('lainnya_teks');
       }
       else {
           $biodata->Badan_Usaha = $request->input('badanusaha');
       }
       $biodata->Nama_distributor = $request->input('distributor');
       $biodata->Provinsi = $request->input('provinsi');
       
       $biodata->Nama_pimpinan = $request->input('pimpinan');
       $biodata->Jabatan = $request->input('jabatan');
       $biodata->alamat = $request->input('alamat');
       $biodata->Nomor_telepon = $request->input('nomor');
       $biodata->Email_perusahaan = $request->input('email');
       $biodata->pic_perusahaan = $request->input('pic');
       $biodata->nomor_pic = $request->input('nomor_pic');
    //    $nama_file = $biodata->getClientOriginalname();

    $surat = $request -> file('suratpengajuan');
       $nama = $biodata->Nama_distributor .'_'.'Surat_Pengajuan'.'.'.$surat->getClientOriginalExtension();
    //    $biodata->Surat_Pengajuan = $surat.
    $surat->move(\public_path("/uploads/file_biodata"),$nama);
    
       $biodata->Surat_Pengajuan = $nama;

       $biodata->Pupuk_diambil = implode(",", $request->input('pupuk'));
      
    //    $biodata = $biodata->getClientOriginalName();
   $biodata->save(); 
     if($test){
            
         return redirect('/BiodataPerusahaan')->with('success', 'Data Telah Disimpan!');
     }
     else{
         return redirect('/BiodataPerusahaan')->with('failed', 'help!');
     }
       
    }

    public function findPupuk(Request $request)
    {
        $pupuk = [];
        if ($request->daftar == 'Distributor eksekutif')
        {
            $pupuk = ['SP-26 Petro', 'Phosgreen' , 'NPS Petro Niphos' , 'ZA Plus' , 'ZK Petro', ' NPK Phonska Alam'];
            return $pupuk;
        }
        if ($request->daftar == 'Distributor Utama') {
            $pupuk = ['NPK Phonska Plus', 'NPK Petro Nitrat' , 'NPK Petro Ningrat'];
            return $pupuk;
        }
        if ($request->daftar == 'Reguler')
        {
            $pupuk = ['Urea Petro', 'ZA Petro' , 'SP-36 Petro' , 'ZK Petro' , 'NPK Kebomas'];
            return $pupuk;
        }
        if ($request->daftar == 'NitraLite')
        {
            $pupuk = ['NitraLite'];
            return $pupuk;
        }
        
        if ($request->daftar == 'Petroganik')
        {
            $pupuk = ['Petroganik Premium'];
            return $pupuk;
        }
    }
   
}
