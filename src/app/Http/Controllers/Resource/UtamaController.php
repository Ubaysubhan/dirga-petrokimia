<?php

namespace App\Http\Controllers\Resource;

use app\Core\Domain\Models\Admin;
use App\Core\Domain\Models\AktaPerusahaan;
use App\Core\Domain\Models\BiodataPerusahaan;
use App\Core\Domain\Models\User;
use App\Core\Domain\Models\DaftarArmada;
use App\Exports\UserExport;
use App\Exports\UtamaExportView;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

// use Illuminate\Support\Facades\Gate;

class UtamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $biodata=BiodataPerusahaan::where('daftar','Distributor eksekutif')->get();
        $users = User::with(['biodata','akta','suratizinusaha','armada','gudang','npwp'])->get()->where('biodata.daftar','Distributor Utama');
        // return $users;
        // foreach($users as $data) {
        //     if ($data->armada !== null) {
        //         # code...
        //         dd($data->armada);
        //     }
        //     dd('aksdj');
            
        // };
        // return $users[3]->armada[0]->plat;
        return view ('Admin.distributor-utama')->with('users',$users);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->status == 'accept') {
            $verif = ['status_verifikasi' => 1];
            User::where('id', $id)->update($verif);
        }
        else if ($request->status == 'denied') {
            $verif = ['status_verifikasi' => 2];
            User::where('id', $id)->update($verif);
        }
        return back()->with('success', 'User berhasil di verifikasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $users_lama =  User::find($id);
        $user_data = array(
            'name'=>$users_lama->name,
            'password'=>$users_lama->password,
            'email'=>$users_lama->email,
            );
        User::destroy($id);
        
        $users_baru = new User();
        $users_baru->nama = $user_data['name'] ;
        $users_baru->password = $user_data['password'] ;
        $users_baru->email = $user_data['email'] ;
        
        $users_baru->save();
        
        return redirect('/Admin/distributor-utama')->with('success', 'Data Berhasil Dihapus');
    }

    public function export_utama()
    {
        return Excel::download(new UtamaExportView, 'Distributor-Utama.xlsx');
    }
     public function getDownloadBiodata_utama(Request $request){

    $path = public_path('uploads/file_biodata/'.$request->file_download);
    return response()->download($path);
    }
    
     public function getDownloadAkta_utama(Request $request){

    $path = public_path('uploads/file_akta/'.$request->file_download);
    return response()->download($path);
    }
    
    public function getDownloadGudang_utama(Request $request){

    $path = public_path('uploads/file_Gudang/'.$request->file_download);
    return response()->download($path);
    }
    
    public function getDownloadNpwp_utama(Request $request){

    $path = public_path('uploads/file_npwp_sppkp/'.$request->file_download);
    return response()->download($path);
    }
    
    public function getDownloadSuratIzinUsaha_utama(Request $request){

    $path = public_path('uploads/file_Surat_Izin_Usaha/'.$request->file_download);
    return response()->download($path);
    }
    
    public function getDownloadArmada_utama(Request $request){

        $user = auth('sanctum')->user();

    // $daftararmada = DaftarArmada::where('id_user', $user->id)->get();
    // return $request->file_download;
    $path = public_path('uploads/file_Armada/'.$request->file_download);
    return response()->download($path);
    }

}
