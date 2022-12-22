@extends('Layouts.main')
@section('container')


<h1 class="m-5">Data Distributor Reguler</h1>

<a href="/export-reguler" class="btn btn-success m-4" target="_blank" download>EXPORT EXCEL</a>
@csrf


<div class=" justify-content-center table-responsive m-4 " style="width:170vh">
    <table class="table table-bordered table-xl">
      <thead class="table-warning rounded">
        <tr>

          <th scope="col" class="text-center">Verifikasi</th>
          <th scope="col" class="text-center">Created_at</th>
          <th scope="col" class="text-center">Nama Distributor</th>
          <th scope="col" class="text-center">Provinsi </th>
          <th scope="col" class="text-center">Pupuk yang dipilih</th>
          <th scope="col" class="text-center">Nama Pimpinan</th>
          <th scope="col" class="text-center">jabatan </th>
          <th scope="col" class="text-center">Alamat Distributor</th>
          <th scope="col" class="text-center">Nomor Telepon</th>
          <th scope="col" class="text-center">Email Perusahaan </th>
          <th scope="col" class="text-center">PIC Perusahaan</th>
          <th scope="col" class="text-center">Nomor Telepon PIC Perusahaan</th>
          <th scope="col" class="text-center">Surat Pengajuan Calon Distributor Reguler </th>
          <th scope="col" class="text-center">nomor Akta </th>
          <th scope="col" class="text-center">Tanggal Akta</th>
          <th scope="col" class="text-center">File Akta Perusahaan</th>
          <th scope="col" class="text-center">Nomor NPWP </th>
          <th scope="col" class="text-center">Tanggal NPWP</th>
          <th scope="col" class="text-center">File NPWP</th>
          <th scope="col" class="text-center">Nomor SPPKP </th>
          <th scope="col" class="text-center">Tanggal SPPKP</th>
          <th scope="col" class="text-center">File SPPKP</th>
          <th scope="col" class="text-center">Nomor Tanda Daftar Perusahaan / Nomor Induk Berusaha </th>
          <th scope="col" class="text-center">Masa Berlaku</th>
          <th scope="col" class="text-center">File TDP/NIB</th>
          <th scope="col" class="text-center">Nomor Surat Ijin Usaha Perdagangan (SIUP) </th>
          <th scope="col" class="text-center">Masa Berlaku</th>
          <th scope="col" class="text-center">File SIUP</th>
          <th scope="col" class="text-center">Nomor Surat Ijin Tempat Usaha </th>
          <th scope="col" class="text-center">Masa Berlaku</th>
          <th scope="col" class="text-center">Upload SITU</th>
          <th scope="col" class="text-center">Provinsi </th>
          <th scope="col" class="text-center">Kota/Kabupaten</th>
          <th scope="col" class="text-center">Nomor Tanda Daftar Gudang</th>
          <th scope="col" class="text-center">Nama Gudang</th>
          <th scope="col" class="text-center">File Nomor Tanda Daftar Gudang</th>
          <th scope="col" class="text-center">Kapasitas Gudang (m2)</th>
          <th scope="col" class="text-center">Luas Gudang</th>
          <th scope="col" class="text-center">Alamat Gudang</th>
          <th scope="col" class="text-center">Kecamatan</th>
          <th scope="col" class="text-center">kelurahan</th>
          <th scope="col" class="text-center">kode pos </th>
          <th scope="col" class="text-center">Foto Depan Gudang</th>
          <th scope="col" class="text-center">Foto Samping Gudang</th>
          <th scope="col" class="text-center">Plat </th>
          <th scope="col" class="text-center">STNK</th>
          <th scope="col" class="text-center">Foto Armada</th>
             <th scope="col" class="text-center">Hapus Data</th>
   
        </tr>
      </thead>
</div>
      @foreach($users as $value)

      <tbody class="text-center">
        <tr>

        <td class="">
       
        <!-- <button type="button" class="btn btn-primary">view</button> -->
        @if ($value->status_verifikasi == null)    
            <form action="/Admin/reguler/{{ $value->id }}" method="POST">
                @csrf
                @method('put')
                <button type="submit" name="status" class="btn btn-success mb-3" value="accept">Accept</button>
                <button type="submit" name="status" class="btn btn-danger" value="denied">Denied</button>
            </form>
        @elseif ($value->status_verifikasi == 1)
            <div class="badge bg-success text-wrap text-white" style="width: 6rem;">
                Diterima
            </div>
        @elseif ($value->status_verifikasi == 2)
            <div class="badge bg-danger text-wrap text-white" style="width: 6rem;">
                Ditolak
            </div>
        @endif
  
        </td>
       
        <td>
           @if ($value->biodata == null)
            -
        @else
        {{ $value->biodata->created_at }}
        @endif
        </td>

        <td>
           @if ($value->biodata == null)
            -
        @else
        {{ $value->biodata->Nama_distributor }}
        @endif
        </td>

        <td>
           @if ($value->biodata == null)
            -
        @else
        {{ $value->biodata->Provinsi }}
        @endif
        </td>

        <td>
           @if ($value->biodata == null)
            -
        @else
        {{ $value->biodata->Pupuk_diambil }}
        @endif
        </td>

        <td>
           @if ($value->biodata == null)
            -
        @else
        {{ $value->biodata->Nama_pimpinan }}
        @endif
        </td>

        <td>
           @if ($value->biodata == null)
            -
        @else
        {{ $value->biodata->Jabatan }}
        @endif
        </td>

        <td>
           @if ($value->biodata == null)
            -
        @else
        {{ $value->biodata->alamat }}
        @endif
        </td>

        <td>
           @if ($value->biodata == null)
            -
        @else
        {{ $value->biodata->Nomor_telepon }}
        @endif
        </td>

        <td>
           @if ($value->biodata == null)
            -
        @else
        {{ $value->biodata->Email_perusahaan }}
        @endif
        </td>

        <td>
           @if ($value->biodata == null)
            -
        @else
        {{ $value->biodata->pic_perusahaan }}
        @endif
        </td>

        <td>
           @if ($value->biodata == null)
            -
        @else
        {{ $value->biodata->nomor_pic }}
        @endif
        </td>

        <td>
           @if ($value->biodata == null)
            -
        @else
        {{ $value->biodata->Surat_Pengajuan }}
       <form action="/getDownloadBiodata_reguler" method="get"  >
            <input type="hidden" value="{{$value->biodata->Surat_Pengajuan}}" name="file_download">
               <button type="submit"  class="btn btn-primary bg-warning"> Download Data </button> 
</form>
        @endif
        </td>
  <script>
     var loadFile = function(event) {

      // var output = document.getElementById('output');
      // output.src = URL.createObjectURL(stnk.files[0]);
      // console.log(output.src)ex
      var download_output = document.getElementById('download_output');
      download_output.href= URL.createObjectURL();
      download_output.download = "Surat Akta";
      
    };
  </script>
        <td>
           @if ($value->akta == null)
            -
        @else
        {{ $value->akta->nomor_akta }}
        @endif
        </td>

        <td>
        @if ($value->akta == null)
            -
            @else
        {{ $value->akta->tanggal_akta }}
        @endif
        </td>

        <td>
        @if ($value->akta == null)
            -
            @else
        {{ $value->akta->image }}
        <span> </span>
       <form action="/getDownloadAkta_reguler" method="get"  >
            <input type="hidden" value="{{$value->akta->image}}" name="file_download">
               <button type="submit"  class="btn btn-primary bg-warning"> Download Data </button> 
        @endif
      </form>
        </td>

        <td>
        @if ($value->npwp == null)
            -
            @else
        {{ $value->npwp->nomor_npwp }}
        @endif
        </td>

        <td>
        @if ($value->npwp == null)
            -
            @else
        {{ $value->npwp->tanggal_npwp }}
        @endif
        </td>

        <td>
        @if ($value->npwp == null)
            -
            @else
        {{ $value->npwp->file_npwp }}
  <form action="/getDownloadNpwp_reguler" method="get"  >
            <input type="hidden" value="{{$value->npwp->file_npwp}}" name="file_download">
               <button type="submit"  class="btn btn-primary bg-warning"> Download Data </button> 
        @endif
        </td>
</form>
        <td>
        @if ($value->npwp == null)
            -
            @else
        {{ $value->npwp->nomor_sppkp }}
        @endif
        </td>

        <td>
        @if ($value->npwp == null)
            -
            @else
        {{ $value->npwp->tanggal_sppkp }}
        @endif
        </td>

        <td>
        @if ($value->npwp == null)
            -
            @else
        {{ $value->npwp->file_sppkp }} 
        
       <form action="/getDownloadNpwp_reguler" method="get"  >
            <input type="hidden" value="{{$value->npwp->file_sppkp}}" name="file_download">
               <button type="submit"  class="btn btn-primary bg-warning"> Download Data </button> 
        @endif
        </td>
</form>
        
        <td>
        @if ($value->suratizinusaha == null)
            -
            @else
        {{ $value->suratizinusaha->nomor_tdp }}
      @endif
        </td>

        <td>
        @if ($value->suratizinusaha == null)
            -
            @else
        {{ $value->suratizinusaha->masa_berlaku_tdp }}
        @endif
        </td>

        <td>
        @if ($value->suratizinusaha == null)
            -
            @else
        {{ $value->suratizinusaha->file_tdp }}
       <form action="/getDownloadSuratIzinUsaha_reguler" method="get"  >
            <input type="hidden" value="{{$value->suratizinusaha->file_tdp}}" name="file_download">
               <button type="submit"  class="btn btn-primary bg-warning"> Download Data </button> 

        @endif
        </form>
        </td>

        <td>
        @if ($value->suratizinusaha == null)
            -
            @else
        {{ $value->suratizinusaha->nomor_siup }}
        @endif
        </td>

        <td>
        @if ($value->suratizinusaha == null)
            -
            @else
        {{ $value->suratizinusaha->masa_berlaku_siup }}
        @endif
        </td>

        <td>
        @if ($value->suratizinusaha == null)
            -
            @else
        {{ $value->suratizinusaha->file_siup }}
      <form action="/getDownloadSuratIzinUsaha_reguler" method="get"  >
            <input type="hidden" value="{{$value->suratizinusaha->file_siup}}" name="file_download">
               <button type="submit"  class="btn btn-primary bg-warning"> Download Data </button> 

        @endif
        </form>
        </td>
         
        <td>
        @if ($value->suratizinusaha == null)
            -
            @else
        {{ $value->suratizinusaha->nomor_situ }}
        @endif
        </td>

        <td>
        @if ($value->suratizinusaha == null)
            -
            @else
        {{ $value->suratizinusaha->masa_berlaku_situ }}
        @endif
        </td>

        <td>
        @if ($value->suratizinusaha == null)
            -
            @else
        {{ $value->suratizinusaha->file_situ }}
      <form action="/getDownloadSuratIzinUsaha_reguler" method="get"  >
            <input type="hidden" value="{{$value->suratizinusaha->file_situ}}" name="file_download">
               <button type="submit"  class="btn btn-primary bg-warning"> Download Data </button> 
        @endif
        </form>
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->provinsi }}
        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->kabupaten }}
        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->nomortandagudang }}
        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->namagudang }}
        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->file_tdg }}
       <form action="/getDownloadGudang_reguler" method="get"  >
            <input type="hidden" value="{{$value->gudang->file_tdg}}" name="file_download">
               <button type="submit"  class="btn btn-primary bg-warning"> Download Data </button> 
        @endif
        </form>
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->kapasitasgudang }}
        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->luas_gudang }}
        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->alamat_gudang }}
        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->kecamatan }}
        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->kelurahan }}
        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->kode_pos }}
        @endif
        </td>

     

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->foto_depan_gudang }}
    <form action="/getDownloadGudang_reguler" method="get"  >
            <input type="hidden" value="{{$value->gudang->foto_depan_gudang}}" name="file_download">
               <button type="submit"  class="btn btn-primary bg-warning"> Download Data </button> 
        @endif
        </form>
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->foto_belakang_gudang }}
    <form action="/getDownloadGudang_reguler" method="get"  >
            <input type="hidden" value="{{$value->gudang->foto_belakang_gudang}}" name="file_download">
               <button type="submit"  class="btn btn-primary bg-warning"> Download Data </button> 
        @endif
        </form>
        </td>

      
        <td>
            @if ($value->armada == null)
                -
                @else
                <ul class="list-group list-group-flush">
                    @foreach ($value->armada as $data)
                        <li class="list-group-item">{{ $data->plat }}</li>
                    @endforeach
                </ul>
                {{-- testing --}}
    
            @endif
        </td>
    
        <td>
    
            @if ($value->armada == null)
                -
                @else
                <ul class="list-group list-group-flush">
                    @foreach ($value->armada as $data)
                        <li class="list-group-item">{{ $data->stnk }}
                           
                            <form action="/getDownloadArmada_reguler" method="get"  >
            <input type="hidden" value="{{$data->stnk}}" name="file_download">
               <button type="submit"  class="btn btn-primary bg-warning"> Download Data </button> 
               </form>
                        </li>
                    @endforeach
                </ul>
    
            @endif
            
        </td>
    
        <td>
    
            @if ($value->armada == null)
                -
                @else
                @foreach ($value->armada as $data)
                    <li class="list-group-item">{{ $data->foto_kendaraan }}
                      <form action="/getDownloadArmada_reguler" method="get"  >
            <input type="hidden" value="{{$data->foto_kendaraan}}" name="file_download">
               <button type="submit"  class="btn btn-primary bg-warning"> Download Data </button> 
               </form>
                    </li>
                @endforeach
    
            @endif
            
        </td>
        
               <td>
              <form action="/Admin/reguler/{{$value->id}}" method="POST" class="d-inline"  >
                 <input type="hidden" name="_method" value="delete" />
                    @csrf
  
                        <button type="Submit" class="btn btn-primary btn-block bg-danger mb-5" onclick= "return confirm('Apakah Anda Yakin Ingin Menghapus Data Tersebut?');" >
                        Delete
                        </button>
                </form>
            
              </td>
        @endforeach

         
        </tr>
      </tbody>

    </table>
   


   

@endsection