<?php

namespace App\Exports;

use App\Core\Domain\Models\BiodataPerusahaan;
use App\Core\Domain\Models\User;
use App\Models\Eksekutid;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExcelExport implements FromCollection ,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::with(['biodata','akta','suratizinusaha','armada','gudang','npwp'])->get()->where('biodata.daftar','Reguler');
        //  $biodata = BiodataPerusahaan::get()->where('biodata.daftar','Distributor eksekutif');
       
        
    }

    public function map($user):array{
        $test=$user->akta==null;
        $users = User::with(['biodata','akta','suratizinusaha','armada','gudang','npwp'])->get()->where('biodata.daftar','Distributor eksekutif');
        // return $users;
        // dd($users);
       
    
        if($test){
            $user->biodata->created_at;
            $user->biodata->Nama_distributor;
            $user->biodata->Provinsi;
            $user->biodata->Badan_Usaha;
            $user->biodata->Pupuk_diambil;
            $user->biodata->Nama_pimpinan;
            $user->biodata->Jabatan;
            $user->biodata->alamat;
            $user->biodata->Nomor_telepon;
            $user->biodata->Email_perusahaan;
            $user->biodata->pic_perusahaan;
            $user->biodata->nomor_pic;
            $user->biodata->Surat_Pengajuan;
            $user->akta->nomor_akta==null;
            $user->akta->tanggal_akta==null;
            $user->akta->image==null;
        }
        else if ($users) {
        return[
            
            $user->biodata->created_at,
            $user->biodata->Nama_distributor,
            $user->biodata->Provinsi,
            $user->biodata->Badan_Usaha,
            $user->biodata->Pupuk_diambil,
            $user->biodata->Nama_pimpinan,
            $user->biodata->Jabatan,
            $user->biodata->alamat,
            $user->biodata->Nomor_telepon,
            $user->biodata->Email_perusahaan,
            $user->biodata->pic_perusahaan,
            $user->biodata->nomor_pic,
            $user->biodata->Surat_Pengajuan,
            $user->akta->nomor_akta,
            $user->akta->tanggal_akta,
            // $user->akta->image,
            // $user->npwp->nomor_npwp,
            // $user->npwp->tanggal_npwp,
            // $user->npwp->file_npwp,
            // $user->npwp->nomor_skkpk,
            // $user->npwp->tanggal_skkpk,
          
           
           
        ];
    }
}
}
