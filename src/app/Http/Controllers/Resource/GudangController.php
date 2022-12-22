<?php

namespace App\Http\Controllers\Resource;

use App\Core\Domain\Models\BiodataPerusahaan;
use App\Core\Domain\Models\Gudang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Core\Domain\Models\Province;
use App\Core\Domain\Models\Regency;
use App\Core\Domain\Models\District;
use App\Core\Domain\Models\Village;
use App\Models\Province as ModelsProvince;
use Illuminate\Support\Facades\Http;

class GudangController extends Controller
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
        $gudang = Gudang::where('id_user', $user->id)->first();
        $provinsi = Province::all();
        // $nama_provinsi = Province::where('id', $gudang->Provinsi)->get();
        // $nama_kabupaten = Regency::where('id', $gudang->kabupaten)->get();

        return view('Gudang.index', [
            'gudang' => $gudang,
            'provinsi' => $provinsi,
            // 'nama_provinsi' => $nama_provinsi,
            // 'nama_kabupaten' => $nama_kabupaten
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {

        $request->validate([
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'nomortandagudang' => 'required',
            'namagudang' => 'required',
            'kapasitasgudang' => 'required',
            'luasgudang' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'kode_pos' => 'required',
            'file_tdg' => 'required|mimes:pdf|max:10000',
            'fotodepan' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'fotobelakang' => 'mimes:jpeg,jpg,png,gif|required|max:10000',


        ]);

        $user = auth('sanctum')->user();
        $biodata = BiodataPerusahaan::where('id_user', $user->id)->first();
        $provinsi = Province::select('name')->where('id', $request->input('provinsi'))->first();
        $kabupaten = Regency::select('name')->where('id', $request->input('kabupaten'))->first();

        if( $biodata === null){
            return redirect ('/BiodataPerusahaan')->with('failed', 'Anda Harus Mengisi Biodata Perusahaan Terlebih Dahulu');
           }
           else{
            $gudang =new Gudang();
            $gudang->id_user= $user->id;
            $gudang->provinsi = $provinsi->name;
            $gudang->kabupaten = $kabupaten->name;
            $gudang->nomortandagudang = $request->input('nomortandagudang');
            $gudang->namagudang = $request->input('namagudang');
              
               $tdg= $request -> file('file_tdg');
       $nama = $biodata->Nama_distributor .'_'.'File_TDG'.'.'.$tdg->getClientOriginalExtension();
    //    $biodata->Surat_Pengajuan = $surat.
    $tdg->move(\public_path("/uploads/file_Gudang"),$nama);
    
     $gudang->file_tdg = $nama;

    
            $gudang->kapasitasgudang = $request->input('kapasitasgudang');
            $gudang->luas_gudang = $request->input('luasgudang');
            $gudang->alamat_gudang = $request->input('alamat');
            $gudang->kecamatan = $request->input('kecamatan');
            $gudang->kelurahan = $request->input('kelurahan');
            $gudang->kode_pos = $request->input('kode_pos');
            // $gudang->foto_depan_gudang = 'storage/'.$request -> file('fotodepan')->storeAs('gudang-image',$biodata->Nama_distributor .'_depan_Gudang'.'.png');
            
            $depan= $request -> file('fotodepan');
         $nama_depan = $biodata->Nama_distributor .'_'.'Foto_gudang_Depan'.'.'.$depan->getClientOriginalExtension();
    //    $biodata->Surat_Pengajuan = $surat.
         $depan->move(\public_path("/uploads/file_Gudang"),$nama_depan);
          $gudang->foto_depan_gudang = $nama_depan;

         
         $belakang= $request -> file('fotobelakang');
       $nama_belakang = $biodata->Nama_distributor .'_'.'Foto_Gudang_Samping'.'.'.$belakang->getClientOriginalExtension();
    //    $biodata->Surat_Pengajuan = $surat.
    $belakang->move(\public_path("/uploads/file_Gudang"),$nama_belakang);
    
     $gudang->foto_belakang_gudang = $nama_belakang;

         
            // $gudang->foto_belakang_gudang = 'storage/'.$request -> file('fotobelakang')->storeAs('gudang_image',$biodata->Nama_distributor .'_belakang_gudang'.'.png');
            
     
            $gudang->save();
            return redirect('/Gudang')->with('success', 'Data Telah Disimpan!');
         }
           }
       
    
    public function show($id){
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();

        return redirect('/Gudang')->with('provinces',$provinces);
    }

    public function findKabupatenName(Request $request)
    {
        $data = Regency::select('name', 'id')->where('province_id', $request->id)->get();
        return response()->json($data);
    }
}
