@extends('Layouts.main')
@section('container')


@if ($biodata)

<form method="POST" action="/BiodataPerusahaan" enctype="multipart/form-data" class="container-fluid" id="container-wrapper">
  <div>
   
    <h1 class="m-5 ">Biodata Perusahaan</h1>

        <div class="card-body">

    
    <div class="mb-5" name="">
      <label for="exampleFormControlInput1" class="form-label font-weight-bold">Pilihan Distributor</label>
      

      <div class="form-check">
        <input class="form-check-input" type="radio" name="daftar" value="Distributor_Eksekutif" id="flexRadioDefault1" disabled>
        <label class="form-check-label" for="flexRadioDefault1">
          Distributor Eksekutif
        </label>
        <div class="card mb-4">
  <div class="card-body font-weight-bold">
  Distributor Eksekutif untuk Pupuk SP-26 Petro, Phosgreen, NPS Petro Niphos, ZA Plus, ZK Petro, NPK Phonska Alam
</div>
</div>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="daftar" value="Distributor Utama" id="flexRadioDefault1" disabled>
        <label class="form-check-label" for="flexRadioDefault1">
          Distributor Utama
        </label>
        <div class="card mb-4">
  <div class="card-body font-weight-bold">
  Distributor Utama untuk Pupuk NPK Phonska Plus, NPK Petro Nitrat, NPK Petro Ningrat
</div>
</div>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="daftar" value="Reguler" id="flexRadioDefault1" disabled>
        <label class="form-check-label" for="flexRadioDefault1">
          Reguler
        </label>
        <div class="card mb-4">
  <div class="card-body font-weight-bold">
  Distributor Reguler Untuk Pupuk Urea Petro, ZA Petro, SP-36 Petro, ZK Petro, NPK Kebomas 
</div>
</div>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="daftar" value="Nitralite" id="flexRadioDefault1" disabled>
        <label class="form-check-label" for="flexRadioDefault1">
          NitraLite
        </label>
        <div class="card mb-4">
  <div class="card-body font-weight-bold">
  Distributor Untuk Pupuk Nitralite 
</div>
</div>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="daftar" value="Petroganik" id="flexRadioDefault1" disabled>
        <label class="form-check-label" for="flexRadioDefault1">
          Petroganik Premium
        </label>
        <div class="card mb-4">
  <div class="card-body font-weight-bold">
  Distributor Untuk Pupuk Petroganik Premium  
</div>
</div>
      </div>


    <div class="mb-5" name="">
      <label for="exampleFormControlInput1" class="form-label font-weight-bold">Badan Usaha</label>
      

      <div class="form-check">
        <input class="form-check-input" type="radio" name="badanusaha" value="PT" id="flexRadioDefault1" disabled>
        <label class="form-check-label" for="flexRadioDefault1">
          PT
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="badanusaha" value="CV" id="flexRadioDefault1" disabled>
        <label class="form-check-label" for="flexRadioDefault1">
          CV
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="badanusaha" value="koperasi" id="flexRadioDefault1" disabled>
        <label class="form-check-label" for="flexRadioDefault1">
          Koperasi
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="" id="flexRadioDefault1" disabled><label class="form-check-label" for="flexRadioDefault1">
          lainnya
        </label>
      </div>
    </div>


    <div class="mb-5" name="distributor" class="font-weight-bold">
      <label for="exampleFormControlInput1" class="form-label">Nama Distributor</label>
      <input type="text" name="distributor" class="form-control" id="exampleFormControlInput1" placeholder="Distributor" disabled>
      
    </div>

    <div class="mb-5 " name="provinsi">
      <label for="exampleFormControlInput1" class="form-label font-weight-bold">Provinsi</label>
      <select class="form-select" name="provinsi" aria-label="Default select example" disabled>
        <option selected>Open this select menu</option>
        @foreach ($provinsi as $provinsi)
            <option value="{{ $provinsi->nama }}">{{ $provinsi->nama }}</option>
        @endforeach
        <option name="provinsi" value="1" disabled>One</option>
        <option name="provinsi" value="2" disabled>Two</option>
        <option name="provinsi" value="3" disabled>Three</option>
      </select>
    </div>


    <!-- <div class="mb-5" name="pupuk[]">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold" >Jenis Pupuk Yang Dipilih</label>
          <div class="form-check font-weight-bold">
            <input class="form-check-input" type="checkbox" name="pupuk[]" value="Sp-26" id="flexRadioDefault1" disabled >
            <label class="form-check-label" for="flexRadioDefault1">
              Sp-26
            </label>
          </div>
          <div class="form-check font-weight-bold">
            <input class="form-check-input" type="checkbox" name="pupuk[]" value="Petro Niphos" id="flexRadioDefault1" disabled >
            <label class="form-check-label" for="flexRadioDefault1">
              Petro Niphos
            </label>
          </div>
          <div class="form-check font-weight-bold">
            <input class="form-check-input" type="checkbox" name="pupuk[]" value="Phonska Alam" id="flexRadioDefault1" disabled>
            <label class="form-check-label" for="flexRadioDefault1">
              Phonska Alam
            </label>
          </div>
        </div> -->
  

    <div class="mb-5" name="pimpinan font-weight-bold">
      <label for="exampleFormControlInput1" class="form-label">Nama Pimpinan</label>
      <input type="text" name="pimpinan" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pimpinan" disabled>
    </div>

    <div class="mb-5" name="jabatan ">
      <label for="exampleFormControlInput1" class="form-label font-weight-bold">Jabatan</label>
      <input type="text" name="jabatan" class="form-control" id="exampleFormControlInput1" placeholder="Jabatan" disabled>
    </div>

    <div class="mb-5" name="alamat">
      <label for="exampleFormControlInput1" class="form-label font-weight-bold">Alamat Distributor</label>
      <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Alamat Distributor" disabled>
    </div>

    <div class="mb-5" name="nomor">
      <label for="exampleFormControlInput1" class="form-label font-weight-bold">Nomor Telepon</label>
      <input type="text" name="nomor" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Telepon" disabled>
    </div>

    <div class="mb-5" name="email">
      <label for="exampleFormControlInput1" class="form-label font-weight-bold">Email Perusahaan</label>
      <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" disabled>
    </div>

    <div class="mb-5" name="email">
      <label for="exampleFormControlInput1" class="form-label font-weight-bold">PIC Perusahaan</label>
      <input type="text" name="pic" class="form-control" id="exampleFormControlInput1" placeholder="PIC Perusahaan" disabled>
    </div>

    <div class="mb-5" name="email">
      <label for="exampleFormControlInput1" class="form-label font-weight-bold">Nomor Telepon PIC Perusahaan</label>
      <input type="text" name="nomor_pic" class="form-control" id="exampleFormControlInput1" placeholder="Nomor PIC Perusahaan" disabled>
    </div>


    <div class="mb-5">
      <label for="formFile" class="form-label font-weight-bold">Surat Pengajuan Distributor</label>
      <input class="form-control" type="file" id="formFile" name="suratpengajuan"  onchange=loadFile(event) disabled>
      <div class="mt-2 mb-5">
        <!-- <button type="button" class="btn btn-primary">view</button> -->
        <a id="download_output" class="btn btn-primary bg-warning" download> Download</a>
  
      </div>

      @csrf
    </div>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-block bg-success mb-5" data-toggle="modal" data-target="#exampleModal" disabled>
  Simpan
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Simpan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
      </div>
  </div>



  <div class=" justify-content-center table-responsive center  ">
    <table class="table table-striped table-sm">
      <thead>
        <tr>

        
        <th scope="col" class="text-center">Daftar</th>
          <th scope="col" class="text-center">Badan Usaha</th>
          <th scope="col" class="text-center">Distributor</th>
          <th scope="col" class="text-center">Provinsi</th>

        </tr>
      </thead>
      
      <tbody>
        <tr>
        <td class="text-center">{{$biodata->daftar}}</td>
          <td class="text-center">{{$biodata->Badan_Usaha}}</td>
          <td class="text-center">{{$biodata->Nama_distributor}}</td>
          <td class="text-center">{{$biodata->Provinsi}}</td>

        </tr>
      </tbody>

  
    </table>
    <table class="table table-striped table-sm">
      <thead>
        <tr>

          <th scope="col" class="text-center">Pupuk Yang Diambil</th>
          <th scope="col" class="text-center">Nama Pimpinan</th>
          <th scope="col" class="text-center">Jabatan</th>
          <th scope="col" class="text-center">Nomor Telepon</th>
         

        </tr>
      </thead>
      
      <tbody>
        <tr>

          <td class="text-center">{{$biodata->Pupuk_diambil}}</td>
          <td class="text-center">{{$biodata->Nama_pimpinan}}</td>
          <td class="text-center">{{$biodata->Jabatan}}</td>
          <td class="text-center">{{$biodata->Nomor_telepon}}</td>
          
          

        </tr>
      </tbody>

  
    </table>
    <table class="table table-striped table-sm">
      <thead>
        <tr>

          
        <th scope="col" class="text-center">Alamat</th> 
          <th scope="col" class="text-center">PIC Perusahaan</th>

        </tr>
      </thead>
      
      <tbody>
        <tr>

       
        <td class="text-center">{{$biodata->alamat}}</td>
          <td class="text-center">{{$biodata->pic_perusahaan}}</td>

        </tr>
      </tbody>

  
    </table>
    <table class="table table-striped table-sm">
      <thead>
        <tr>

          <th scope="col" class="text-center">Email Perusahaan</th>
          <th scope="col" class="text-center">Surat Pengajuan Yang Telah di upload</th>
          <th scope="col" class="text-center">Nomor PIC Perusahaan</th>

        </tr>
      </thead>
      
      <tbody>
        <tr>

          <td class="text-center">{{$biodata->Email_perusahaan}}</td>
          <td class="text-center">{{$biodata->Surat_Pengajuan}}</td>
          <td class="text-center">{{$biodata->nomor_pic}}</td>

        </tr>
      </tbody>

  
    </table>

    <script>
  var loadFile = function(event) {
    var surat = document.getElementById('suratpengajuan');
    var badan = document.getElementById('badanusaha').value;
      // var output = document.getElementById('output');
      // output.src = URL.createObjectURL(stnk.files[0]);
      // console.log(output.src)ex
      var download_output = document.getElementById('download_output');
      download_output.href= URL.createObjectURL(surat.files[0]);
      download_output.download = "Surat Pengajuan" + "_" + badan ;
      
    };

 
    </script>

    @else
    <form method="POST" action="/BiodataPerusahaan" enctype="multipart/form-data" class="container-fluid" id="container-wrapper">
      <div>

            @if ($errors->any())
           
               <div class="alert alert-danger" role="alert">
Data Masih Salah , Silahkan Isi Kembali Formulir Berikut dan Upload File Kembali
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

            </div>

            @endif

        <h1 class="m-5 ">Biodata Perusahaan</h1>

       
    
    <div class="mb-2" name="">
      <label for="exampleFormControlInput1" value="{{old('daftar')}}" class="form-label font-weight-bold">Pilihan Distributor</label>
    </div>

      <div class="form-check">
        <input class="form-check-input daftar" type="radio" name="daftar" value="Distributor eksekutif"  id="flexRadioDefault1"  {{(old('daftar') == 'Distributor eksekutif') ? 'checked' : ''}} >
        <label class="form-check-label" for="flexRadioDefault1">
          Distributor Eksekutif
        </label>
        <div class="card mb-4">
  <div class="card-body font-weight-bold">
  Distributor Eksekutif untuk Pupuk SP-26 Petro, Phosgreen, NPS Petro Niphos, ZA Plus, ZK Petro, NPK Phonska Alam
</div>
</div>
  
      </div>
     
      <div class="form-check">
        <input class="form-check-input daftar" type="radio" name="daftar" value="Distributor Utama" id="flexRadioDefault1"   {{(old('daftar') == 'Distributor Utama') ? 'checked' : ''}} >
        <label class="form-check-label" for="flexRadioDefault1">
          Distributor Utama
        </label>
        <div class="card mb-4">
  <div class="card-body font-weight-bold">
  Distributor Utama untuk Pupuk NPK Phonska Plus, NPK Petro Nitrat, NPK Petro Ningrat
 </div>
</div>
      </div>
 

      <div class="form-check">
        <input class="form-check-input daftar" type="radio" name="daftar" value="Reguler" id="flexRadioDefault1"  {{(old('daftar') == 'Reguler') ? 'checked' : ''}} >
        <label class="form-check-label" for="flexRadioDefault1">
          Reguler
        </label>
        <div class="card mb-4">
  <div class="card-body font-weight-bold">
  Distributor Reguler Untuk Pupuk Urea Petro, ZA Petro, SP-36 Petro, ZK Petro, NPK Kebomas </div>
</div>

      </div>
     

      <div class="form-check">
        <input class="form-check-input daftar" type="radio" name="daftar" value="NitraLite" id="flexRadioDefault1" {{(old('daftar') == 'Nitralite') ? 'checked' : ''}} >
        <label class="form-check-label" for="flexRadioDefault1">
          NitraLite
        </label>
        <div class="card mb-4">
  <div class="card-body font-weight-bold">
  Distributor Untuk Pupuk Nitralite  </div>
</div>
      </div>
      
      <div class="form-check">
        <input class="form-check-input daftar" type="radio" name="daftar" value="Petroganik" id="flexRadioDefault1"  {{(old('daftar') == 'Petroganik') ? 'checked' : ''}} >
        <label class="form-check-label" for="flexRadioDefault1">
          Petroganik Premium
        </label>
        <div class="card mb-4">
  <div class="card-body font-weight-bold">
 Distributor Untuk Pupuk Petroganik Premium  
</div>
</div>
      </div>
        
        </div>
        
    <div class="mb-5" name="">
      <label for="exampleFormControlInput1" class="form-label font-weight-bold">Badan Usaha</label>
        
      <div class="form-check">
        <input class="form-check-input" type="radio" name="badanusaha" value="PT" id="flexRadioDefault1" {{(old('badanusaha') == 'PT') ? 'checked' : ''}} >
        <label class="form-check-label" for="flexRadioDefault1">
          PT
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="badanusaha" value="CV" id="flexRadioDefault1" {{(old('badanusaha') == 'CV') ? 'checked' : ''}} >
        <label class="form-check-label" for="flexRadioDefault1">
          CV
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="badanusaha" value="koperasi" id="" {{(old('badanusaha') == 'Koperasi') ? 'checked' : ''}} >
        <label class="form-check-label" for="flexRadioDefault1">
          Koperasi
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="badanusaha" value="lainnya" id="flexRadioDefault1" {{(old('badanusaha') == 'lainnya') ? 'checked' : ''}}  >
        <label class="form-check-label" for="flexRadioDefault1">
          Lainnya
        </label>
        <input type="text" name="lainnya_teks" id="lainnya_teks" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Badan Usaha" value="{{ old('lainnya_teks') }}" >
       
        @error('badanusaha')
  <div class="text-danger invalid-back">

    {{ 'Pilih Salah Satu Badan Usaha' }}

  </div>
  @enderror
        
      </div>



        <div class="my-5" name="distributor" class="font-weight-bold">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold">Nama Distributor</label>
          <input type="text" name="distributor" id="distributor" class="form-control" value="{{old('distributor')}}" id="exampleFormControlInput1" placeholder="Distributor"  >
          @error('distributor')
  <div class="text-danger invalid-back">

    {{ 'Nama Distributor Wajib diisi' }}

  </div>
  @enderror
        </div>

        <div class="mb-5 " name="provinsi">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold">Provinsi</label>
          <select class="form-select" name="provinsi" aria-label="Default select example">
            <option disabled selected>Pilih Provinsi</option>
            @foreach ($provinsi as $value)
                <option value="{{ $value->name }}" {{(old('provinsi')) == $value->name  ? 'selected' : ''}} >{{ $value->name }}</option>
            @endforeach
            {{-- <option name="provinsi" value="1">One</option>
            <option name="provinsi" value="2">Two</option>
            <option name="provinsi" value="3">Three</option> --}}
          </select>
          @error('provinsi')
  <div class="text-danger invalid-back">

    {{ 'Provinsi Wajib Dipilih' }}

  </div>
  @enderror
        </div>


        <div class="mb-5" name="pupuk[]">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold" >Jenis Pupuk Yang Dipilih</label>
          <div class="pupuk">
            
          </div>
          {{-- <div class="form-check font-weight-bold">
            <input class="form-check-input" type="checkbox" name="pupuk[]" value="Sp-26"  id="flexRadioDefault1" >
            <label class="form-check-label" for="flexRadioDefault1">
              Sp-26
            </label>
          </div>
          <div class="form-check font-weight-bold">
            <input class="form-check-input" type="checkbox" name="pupuk[]" value="Petro Niphos" id="flexRadioDefault1" >
            <label class="form-check-label" for="flexRadioDefault1">
              Petro Niphos
            </label>
          </div>
          <div class="form-check font-weight-bold">
            <input class="form-check-input" type="checkbox" name="pupuk[]" value="Phonska Alam" id="flexRadioDefault1" >
            <label class="form-check-label" for="flexRadioDefault1">
              Phonska Alam
            </label>
          </div> --}}
        </div>
        @error('pupuk')
  <div class="text-danger invalid-back">

    {{ 'Pupuk Wajib Dipilih , Tekan kembali bagian "Pilihan Distributor" untuk memunculkan menu pupuk yang dipilih' }}

  </div>
  @enderror
    </div>

        <div class="mb-5" name="pimpinan font-weight-bold">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold">Nama Pimpinan</label>
          <input type="text" name="pimpinan" class="form-control" value="{{old('pimpinan')}}" id="exampleFormControlInput1" placeholder="Nama Pimpinan" >
          @error('pimpinan')
  <div class="text-danger invalid-back">

    {{ 'Nama Pimpinan Wajib diisi' }}

  </div>
  @enderror
        </div>

        <div class="mb-5" name="jabatan ">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold">Jabatan</label>
          <input type="text" name="jabatan" class="form-control" value="{{old('jabatan')}}" id="exampleFormControlInput1" placeholder="Jabatan"  >
          @error('jabatan')
  <div class="text-danger invalid-back">

    {{ 'Jabatan Wajib diisi' }}

  </div>
  @enderror
        </div>

        <div class="mb-5" name="alamat">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold">Alamat Distributor</label>
          <input type="text" name="alamat" class="form-control" value="{{old('alamat')}}" id="exampleFormControlInput1" placeholder="Alamat Distributor"  >
          @error('alamat')
  <div class="text-danger invalid-back">

    {{ 'Alamat Wajib diisi' }}

  </div>
  @enderror
        </div>

        <div class="mb-5" name="nomor">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold">Nomor Telepon</label>
          <input type="text" name="nomor" class="form-control" value="{{old('nomor')}}" id="exampleFormControlInput1" placeholder="Nomor Telepon"  >
          @error('nomor')
  <div class="text-danger invalid-back">

    {{ 'Nomor Wajib diisi' }}

  </div>
  @enderror
        </div>

        <div class="mb-5" name="email">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold">Email Perusahaan</label>
          <input type="email" name="email" class="form-control" value="{{old('email')}}" id="exampleFormControlInput1" placeholder="name@example.com"  >
          @error('email')
  <div class="text-danger invalid-back">

    {{ 'Email Wajib diisi' }}

  </div>
  @enderror
        </div>

        <div class="mb-5" name="pic">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold">PIC Perusahaan</label>
          <input type="text" name="pic" class="form-control" value="{{old('pic')}}" id="exampleFormControlInput1" placeholder="PIC Perusahaan"  >
          @error('pic')
  <div class="text-danger invalid-back">

    {{ 'Nama PIC Perusahaan Wajib diisi' }}

  </div>
  @enderror
        </div>


        <div class="mb-5" name="nomor_pic">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold">Nomor PIC Perusahaan</label>
          <input type="text" name="nomor_pic" class="form-control" value="{{old('nomor_pic')}}" id="exampleFormControlInput1" placeholder="Nomor PIC Perusahaan"  >
          @error('nomor_pic')
  <div class="text-danger invalid-back">

    {{ 'Nomor PIC Wajib diisi' }}

  </div>
  @enderror
        </div>





        <div class="mb-5">
          <label for="formFile" class="form-label font-weight-bold">Surat Pengajuan Distributor</label>
          <input class="form-control" type="file" id="suratpengajuan" value="{{old('suratpengajuan')}}" name="suratpengajuan" onchange=loadFile(event) >
          @error('suratpengajuan')
  <div class="text-danger invalid-back">

    {{ 'Surat Pengajuan Calon Distributor Harus diisi dan Berupa PDF' }}

  </div>
  @enderror
          <div class="mt-2 mb-5">
            <!-- <button type="button" class="btn btn-primary">view</button> -->
            <a id="download_output" class="btn btn-primary bg-warning" download> Download</a>

          </div>

          @csrf
        </div>

        <button type="button" class="btn btn-primary btn-block bg-success mb-5" data-toggle="modal" data-target="#exampleModal" >
 Simpan
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title btn-block" id="exampleModalLabel">Simpan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Sudah Yakin mengisi data tersebut dengan benar ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary bg-success">Simpan</button>
      </div>
    </div>
  </div>
</div>
      </div>

      @endif

      
    <script>
  var loadFile = function(event) {
    var surat = document.getElementById('suratpengajuan');
    var badan = document.getElementById('distributor').value;
      // var output = document.getElementById('output');
      // output.src = URL.createObjectURL(stnk.files[0]);
      // console.log(output.src)ex
      var download_output = document.getElementById('download_output');
      download_output.href= URL.createObjectURL(surat.files[0]);
      download_output.download = "Surat Pengajuan Calon Distributor" + "_" + badan ;
      
    };

    var newfung = function (event){
      var lain =  document.getElementById('value_yanglain').value;

    }
    
    var lainnya = function(event){
      const radio =document.querySelector('#lainnya');
      const text = document.querySelector('#lainnya_teks');

      radio.addEventListener('change', () => {
      if (radio.checked){
        text.style.visibility = "visible";
        text.value=""

      }
      else{
        text.style.visibility = "hidden";
      }
        });
      }

 
    </script>
    </form>

    @endsection
    @section('script')
        <script>
          $(function(){
            $('.daftar').on('click', check_select);
            $.proxy(check_select,$ ('.daftar'))();
          });

          // $(function(){
          //   $('input[name="badanusaha"]').on('click', lainnya_select);
          //   $.proxy(lainnya_select,$ ('input[name="badanusaha"]'))();
            
          // });

          function lainnya_select(){}
          $('input[name="badanusaha"]').click(function(e) {
            if(e.target.value === 'lainnya') {
              $('#lainnya_teks').show();
            } else {
              $('#lainnya_teks').hide();
            }
          })
          $('#lainnya_teks').hide();


         
          function check_select (){
           {

              var daftar = $(this).val();

              var div = $(this).parent().parent().parent();
              var pupuk = " "
              $.ajax({
                type:'get',
                url:'{!! URL::to('findPupuk') !!}',
                data:{'daftar':daftar},
                success:function(data){
                  for (var i=0; i<data.length; i++)
                  {            
                    pupuk += '<div class="form-check font-weight-bold"><input class="form-check-input" type="checkbox" name="pupuk[]" value="' + data[i] + '" id="flexRadioDefault1" ><label class="form-check-label" for="flexRadioDefault1">' + data[i] + '</label></div>'
                    div.find('.pupuk').html(" ");
                    div.find('.pupuk').append(pupuk);
                  }
                }
              })
            }
          };
        </script>
    @endsection