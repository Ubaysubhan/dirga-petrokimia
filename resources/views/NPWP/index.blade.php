@extends('Layouts.main')
@section('container')

@if ($npwp)
<form method="POST"  action="/NPWP" enctype="multipart/form-data" class="container-fluid" id="container-wrapper">
<div >
    @csrf

    <h1 class="m-5">NPWP dan SKKPK</h1>

<div class="mt-5 mb-5">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">NPWP (Nomor Pokok Wajib Pajak)</label>
  <input type="text" class="form-control" name="nomornpwp"  id="exampleFormControlInput1" placeholder="NPWP (Nomor Pokok Wajib Pajak)" disabled>
</div>

<div class="mb-5">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Tanggal NPWP</label>
  <input type="date" class="form-control"  name="tanggalnpwp" id="exampleFormControlInput1" placeholder="Tanggal  NPWP " disabled>
</div>


<div class="mb-5">
  <label for="formFile" class="form-label font-weight-bold">Upload NPWP </label>
  <input class="form-control" type="file" name="filenpwp" id="formFile" disabled>
  <div class="mt-2 mb-5">
  <!-- <button type="button" class="btn btn-primary">view</button>
  <button type="button" class="btn btn-danger">delete</button> -->
  <a id="download_npwp" class="btn btn-primary bg-warning" download > Download</a>  
</div>
</div>

<div class="mb-5">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">SPPKP (Surat Pengukuhan Pengusaha Kena Pajak)</label>
  <input type="text" class="form-control"  name="sppkp" id="exampleFormControlInput1" placeholder="SPPKP (Surat Pengukuhan Pengusaha Kena Pajak)" disabled>
</div>
 
<div class="mb-5">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Tanggal SPPKP</label>
  <input type="date" class="form-control" name="tanggalsppkp" id="exampleFormControlInput1" placeholder="Tanggal SPPKP (Surat Pengukuhan Pengusaha Kena Pajak)" disabled>
</div>


<div class="mb-5">
  <label for="formFile" class="form-label font-weight-bold">Upload SPPKP</label>
  <input class="form-control" type="file" name="filesppkp" id="formFile" disabled >
  <div class="mt-2 mb-5">
  <a id="download_npwp" class="btn btn-primary bg-warning" download > Download</a>
  <!-- <button type="button" class="btn btn-primary">view</button> -->
  <!-- <button type="button" class="btn btn-danger">delete</button> -->
  </div>
</div>
<button d-inline type="submit" class="btn btn-primary btn-block bg-success mb-5">Submit</button>
</div>


<div class=" justify-content-center table-responsive center mb-5">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
          
              <th scope="col">Nomor NPWP</th>
              <th scope="col">Tanggal NPWP</th>
              <th scope="col">File Terlampir</th>
              <th scope="col">Nomor SPPKP</th>
              <th scope="col">Tanggal SPPKP</th>
              <th scope="col">File Terlampir</th>
            
            </tr>
          </thead>
          
          <tbody>
            <tr>
              
              <td>{{$npwp->nomor_npwp}}</td>
              <td>{{$npwp->tanggal_npwp}}</td>
              <td>{{$npwp->file_npwp}}</td>
              <td>{{$npwp->nomor_sppkp}}</td>
              <td>{{$npwp->tanggal_sppkp}}</td>
              <td>{{$npwp->file_sppkp}}</td>
              
            </tr>
            <tr>
</div>
</form>
          @else
          <form method="POST"  action="/NPWP" enctype="multipart/form-data" class="container-fluid" id="container-wrapper">
    @csrf
    
        @if ($errors->any())
           
               <div class="alert alert-danger" role="alert">
Data Masih Salah , Silahkan Isi Kembali Formulir Berikut dan Upload File Kembali
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

            </div>

            @endif


    <h1 class="m-5">NPWP dan SPPKP</h1>

<div class="mt-5 mb-5">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">NPWP (Nomor Pokok Wajib Pajak)</label>
  <input type="text" class="form-control @error('nomornpwp') is-invalid @enderror" name="nomornpwp" value="{{old('nomornpwp')}}" id="exampleFormControlInput1" placeholder="NPWP (Nomor Pokok Wajib Pajak)" >
  @error('nomornpwp')
  <div class="text-danger invalid-back">

    Nomor NPWP Wajib diisi

  </div>
  @enderror

</div>

<div class="mb-5">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Tanggal NPWP</label>
  <input type="date" class="form-control @error('tanggalnpwp') is-invalid @enderror" value="{{old('tanggalnpwp')}}" name="tanggalnpwp" id="exampleFormControlInput1" placeholder="Tanggal NPWP" >
  @error('tanggalnpwp')
  <div class="text-danger invalid-back">

    Tanggal NPWP Wajib diisi

  </div>
  @enderror
</div>


<div class="mb-5">
  <label for="formFile" class="form-label font-weight-bold">Upload NPWP</label>
  <input class="form-control @error('filenpwp') is-invalid @enderror" type="file" value="{{old('filenpwp')}}" name="filenpwp" id="npwp" onchange=loadnpwp(event) >
  @error('filenpwp')
  <div class="text-danger invalid-back">

    File NPWP Harus diisi dan Berupa PDF

  </div>
  @enderror
  <div class="mt-2 mb-5">
  <!-- <button type="button" class="btn btn-primary">view</button> -->
  <!-- <button type="button" class="btn btn-danger">delete</button> -->
  <a id="download_npwp" class="btn btn-primary bg-warning" download > Download</a>
  </div>
</div>

<div class="mb-5">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">SPPKP (Surat Pengukuhan Pengusaha Kena Pajak)</label>
  <input type="text" class="form-control @error('nomorsppkp') is-invalid @enderror"  value="{{old('nomorsppkp')}}" name="nomorsppkp" id="exampleFormControlInput1" placeholder="SPPKP (Surat Pengukuhan Pengusaha Kena Pajak)" >
  @error('nomorsppkp')
  <div class="text-danger invalid-back">

    Nomor SPPKP Wajib diisi

  </div>
  @enderror
</div>
 
<div class="mb-5">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Tanggal SPPKP</label>
  <input type="date" class="form-control @error('tanggalsppkp') is-invalid @enderror" name="tanggalsppkp" value="{{old('tanggalsppkp')}}" id="exampleFormControlInput1" placeholder="Tanggal SPPKP" >
  @error('tanggalsppkp')
  <div class="text-danger invalid-back">

    Tanggal SPPKP Wajib diisi

  </div>
  @enderror
</div>


<div class="mb-5">
  <label for="formFile" class="form-label font-weight-bold">Upload SPPKP</label>
  <input class="form-control @error('filesppkp') is-invalid @enderror" type="file" value="{{old('filesppkp')}}" name="filesppkp" id="sppkp" onchange=loadskppk(event)  >
  <div class="mt-2 mb-5">
  <!-- <button type="button" class="btn btn-primary">view</button> -->
  <!-- <button type="button" class="btn btn-danger">delete</button> -->
  <a id="download_sppkp" class="btn btn-primary bg-warning" download > Download</a>
  @error('filesppkp')
  <div class="text-danger invalid-back">

    File SPPKP Harus diisi dan Berupa PDF

  </div>
  @enderror
  </div>
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
  var loadnpwp = function(event) {
    var npwp = document.getElementById('npwp');
      // var output = document.getElementById('output');
      // output.src = URL.createObjectURL(stnk.files[0]);
      // console.log(output.src)ex
      var download_output = document.getElementById('download_npwp');
      download_output.href= URL.createObjectURL(npwp.files[0]);
      download_output.download = "File NPWP";
      
    };

    var loadskppk = function(event) {
    var sppkp = document.getElementById('sppkp');
      // var output = document.getElementById('output');
      // output.src = URL.createObjectURL(stnk.files[0]);
      // console.log(output.src)ex
      var download_output = document.getElementById('download_sppkp');
      download_output.href= URL.createObjectURL(sppkp.files[0]);
      download_output.download = "File SPPKP";
      
    };
 
    </script>
</form>
@endsection