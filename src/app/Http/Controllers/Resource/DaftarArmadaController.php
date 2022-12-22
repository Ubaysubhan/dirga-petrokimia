<?php

namespace App\Http\Controllers\Resource;

use App\Core\Domain\Models\BiodataPerusahaan;
use App\Http\Controllers\Controller;
use App\Core\Domain\Models\DaftarArmada;
use Illuminate\Http\Request;

class DaftarArmadaController extends Controller
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
        $daftararmada = DaftarArmada::where('id_user', $user->id)->get();

        return view('DaftarArmada.index', [
            'daftararmada' => $daftararmada,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        $request->validate([
         
            'plat' => 'required',
            'stnk' => 'required|mimes:jpeg,jpg,png,gif,pdf|required|max:100000',
            'foto' => 'required|mimes:jpeg,jpg,png,gif,pdf|required|max:100000',


        ]);

        $user = auth('sanctum')->user();
        $biodata = BiodataPerusahaan::where('id_user', $user->id)->first();

         
       if( $biodata === null){
        return redirect ('/BiodataPerusahaan')->with('failed', 'Anda Harus Mengisi Biodata Perusahaan Terlebih Dahulu');
       }
       else{
        $daftararmada =new DaftarArmada();
        $daftararmada->id_user= $user->id;
        $daftararmada->plat = $request->input('plat');
        
        // $daftararmada->stnk = 'storage/'.$request -> file('stnk')->storeAs('armada-image',$biodata->Nama_distributor .'.'.'_STNK'.'.jpg');
        
        $stnk= $request -> file('stnk');
       $nama = $daftararmada->plat .'_'.'File_STNK'.'.'.$stnk->getClientOriginalExtension();
    //    $biodata->Surat_Pengajuan = $surat.
    $stnk->move(\public_path("/uploads/file_Armada"),$nama);
    
    $daftararmada->stnk = $nama;
         
        $armada= $request -> file('foto');
       $nama_armada = $daftararmada->plat .'_'.'File_Armada'.'.'.$armada->getClientOriginalExtension();
    //    $biodata->Surat_Pengajuan = $surat.
    $armada->move(\public_path("/uploads/file_Armada"),$nama_armada);
    
    $daftararmada->foto_kendaraan = $nama_armada;
         
        
        // $daftararmada->foto_kendaraan = 'storage/'.$request -> file('foto')->storeAs('armada-image',$biodata->Nama_distributor .'_Foto_Kendaraan'.'.jpg');
        
        $daftararmada->save();
        return redirect('/DaftarArmada')->with('success', 'Data Telah Disimpan!');
       }
       
    }

    public function destroy($id){
     
        DaftarArmada::destroy($id);
        return redirect('/DaftarArmada')->with('success', 'Data Berhasil Dihapus');
    }
    
}
