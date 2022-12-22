@extends('Layouts.main')
@section('container')


@if ($suratizinusaha)
<form method="POST"  action="/SuratIzinUsaha" enctype="multipart/form-data" name="suratizinusaha"> 
<div class="container-fluid" id="container-wrapper">

@csrf

<h1 class="m-5">Surat Izin Usaha</h1>

<div class="card">
<div class="card-body font-weight-bold rounded text-white bg-success">
Masa Berlaku Tidak Wajib diisi
  </div>
</div>

<div class="my-3">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Tanda Daftar Perusahaan / Nomor Induk Berusaha</label>
  <input type="text" class="form-control" name="nomortdp" id="exampleFormControlInput1" placeholder="TDP /NIP" disabled>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold ">Masa Berlaku</label>
  <input type="date" class="form-control" name="masaberlakutdp" id="exampleFormControlInput1" placeholder="Masa Berlaku" disabled>
</div>


<div class="mb-3">
  <label for="formFile" class="form-label font-weight-bold">Upload TDP/NIB</label>
  <input class="form-control" type="file" name="filetdp" id="formFile" disabled>
  <div class="mt-2 mb-5">
  <a id="download_situ" class="btn btn-primary bg-warning" download > Download</a>  
  </div>
</div>

<div class="card">
  <div class="card-body font-weight-bold rounded text-white bg-success">
Nomor dan Masa Berlaku Surat Ijin Usaha Perdagangan Tidak Wajib diisi
  </div>
</div>

<div class="my-3">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Nomor Surat Ijin Usaha Perdagangan</label>
  <input type="text" class="form-control" name="nomorsiup" id="exampleFormControlInput1" placeholder="Nomor SIUP" disabled>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Masa Berlaku</label>
  <input type="date" class="form-control" name="masaberlakusiup" id="exampleFormControlInput1" placeholder="ex:22/11/2022" disabled>
</div>

<div class="mb-3">
  <label for="formFile" class="form-label font-weight-bold">Upload SIUP</label>
  <input class="form-control" type="file" id="formFile" name="filesiup" disabled>
  <div class="mt-2 mb-5">
  <a id="download_situ" class="btn btn-primary bg-warning" download > Download</a>  
  </div>
</div>

<div class="card">
<div class="card-body font-weight-bold rounded text-white bg-success">
Nomor dan Masa Berlaku Surat Ijin Tempat Usaha Tidak Wajib diisi
  </div>
</div>


<div class="my-3">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Nomor Surat Ijin tempat Usaha</label>
  <input type="text" class="form-control" name="nomorsitu" id="exampleFormControlInput1" placeholder="Nomor SITU" disabled>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Masa Berlaku SITU</label>
  <input type="date" class="form-control" name="masaberlakusitu" id="exampleFormControlInput1" placeholder="ex:22/11/2022" disabled>
</div>


<div class="mb-3">
  <label for="formFile" class="form-label font-weight-bold">Upload Situ</label>
  <input class="form-control" type="file" id="formFile" name="filesitu" disabled>
  <div class="mt-2 mb-5">
  <a id="download_situ" class="btn btn-primary bg-warning" download > Download</a>  
  </div>
</div>
<button d-inline type="submit" class="btn btn-primary btn-block mb-5 bg-success" disabled >Submit</button>
</div>

<div class=" justify-content-center table-responsive center  m-5">
        <table class="table table-striped table-sm">
       
          <thead>
            <tr>
          
              <th scope="col">Nomor TDP/NIB</th>
              <th scope="col">Masa Berlaku TDB</th>
              <th scope="col">File TDB</th>
             
            
            </tr>
          </thead>
         
          <tbody>
            <tr>
              
              <td>{{$suratizinusaha->nomor_tdp}}</td>
              <td>{{$suratizinusaha->masa_berlaku_tdp}}</td>
              <td>{{$suratizinusaha->file_tdp}}</td>
      
              
            </tr>
            
          </tbody>
</table>
</div>
            



<div class=" justify-content-center table-responsive center  m-5">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
          
              <th scope="col">Nomor SIUP</th>
              <th scope="col">Masa Berlaku SIUP</th>
              <th scope="col">File SIUP</th>
             
            
            </tr>
          </thead>
         
          <tbody>
            <tr>
              
              <td>{{$suratizinusaha->nomor_siup}}</td>
              <td>{{$suratizinusaha->masa_berlaku_siup}}</td>
              <td>{{$suratizinusaha->file_siup}}</td>
      
              
            </tr>
            
          </tbody>
</table>
</div>
          
            


<div class=" justify-content-center table-responsive center  m-5">
        <table class="table table-striped table-sm">
        
          <thead>
            <tr>
          
              <th scope="col">Nomor SITU</th>
              <th scope="col">Masa Berlaku SITU</th>
              <th scope="col">File SITU</th>
             
            
            </tr>
          </thead>
         
          <tbody>
            <tr>
              
              <td>{{$suratizinusaha->nomor_situ}}</td>
              <td>{{$suratizinusaha->masa_berlaku_situ}}</td>
              <td>{{$suratizinusaha->file_situ}}</td>
      
              
            </tr>
            
          </tbody>
</table>

</div>
          
             
</form>

@else

<form method="POST"  action="/SuratIzinUsaha" enctype="multipart/form-data" name="suratizinusaha"> 
<div class="container-fluid" id="container-wrapper">

@csrf


    @if ($errors->any())
           
               <div class="alert alert-danger" role="alert">
Data Masih Salah , Silahkan Isi Kembali Formulir Berikut dan Upload File Kembali
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

            </div>

            @endif


<h1 class="m-5">Surat Izin Usaha</h1>


<div class="card">
<div class="card-body font-weight-bold rounded text-white bg-success">
Masa Berlaku Tidak Wajib diisi
  </div>
</div>

<div class="my-3">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Nomor Induk Berusaha</label>
  <input type="text" class="form-control" value="{{old('nomortdp')}}" name="nomortdp" id="tdp" placeholder="NIB" >
  @error('nomortdp')
  <div class="text-danger invalid-back">

    {{ 'NIB Wajib diisi' }}

  </div>
  @enderror

<div class="my-3">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold ">Masa Berlaku</label>
  <input type="date" class="form-control" name="masaberlakutdp" value="{{old('masaberlakutdp')}}" id="exampleFormControlInput1" placeholder="Masa Berlaku" >
  @error('masaberlakutdp')
  <div class="text-danger invalid-back">

    {{ $message }}

  </div>
  @enderror
</div>


<div class="mb-3">
  <label for="formFile" class="form-label font-weight-bold">Upload TDP/NIB</label>
  <input class="form-control" type="file" name="filetdp" value="{{old('filetdp')}}" id="filetdp" onchange=loadtdp(event) >
  <div class="mt-2 mb-5">
  <a id="download_tdp" class="btn btn-primary bg-warning" download > Download</a>
  @error('filetdp')
  <div class="text-danger invalid-back">

    {{ 'File TDP Wajib Di Upload' }}

  </div>
  @enderror
  <!-- <button type="button" class="btn btn-primary">view</button> -->
  <!-- <button type="button" class="btn btn-danger">delete</button> -->
  </div>
</div>

<div class="card">
  <div class="card-body font-weight-bold rounded text-white bg-success">
Nomor dan Masa Berlaku Surat Ijin Usaha Perdagangan Tidak Wajib diisi
  </div>
</div>

<div class="my-3">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Nomor Surat Ijin Usaha Perdagangan</label>
  <input type="text" class="form-control" name="nomorsiup" value="{{old('nomorsiup')}}" id="exampleFormControlInput1" placeholder="Nomor SIUP" >
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Masa Berlaku</label>
  <input type="date" class="form-control" name="masaberlakusiup" value="{{old('masaberlakusiup')}}" id="exampleFormControlInput1" placeholder="ex:22/11/2022" >
  @error('masaberlakusiup')
  <div class="text-danger invalid-back">

    {{ $message }}

  </div>
  @enderror
</div>

<div class="mb-3">
  <label for="formFile" class="form-label font-weight-bold">Upload SIUP</label>
  <input class="form-control" type="file" id="filesiup" value="{{old('filesiup')}}" onchange=loadsiup(event) name="filesiup">
  @error('filesiup')
  <div class="text-danger invalid-back">

    {{ 'File Surat Izin Usaha Perdagangan Wajib Di Upload' }}

  </div>
  @enderror
  <div class="mt-2 mb-5">
  <a id="download_siup" class="btn btn-primary bg-warning" download > Download</a>
  
  <!-- <button type="button" class="btn btn-primary">view</button> -->
  <!-- <button type="button" class="btn btn-danger">delete</button> -->
  </div>
</div>

<div class="card">
<div class="card-body font-weight-bold rounded text-white bg-success">
Nomor dan Masa Berlaku Surat Ijin Tempat Usaha Tidak Wajib diisi
  </div>
</div>

<div class="my-3">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Nomor Surat Ijin Tempat Usaha</label>
  <input type="text" class="form-control" name="nomorsitu" value="{{old('nomorsitu')}}" id="exampleFormControlInput1" placeholder="Nomor SITU" >
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Masa Berlaku SITU</label>
  <input type="date" class="form-control" name="masaberlakusitu" value="{{old('masaberlakusitu')}}" id="exampleFormControlInput1" placeholder="ex:22/11/2022" >
  @error('masaberlakusitu')
  <div class="text-danger invalid-back">

    {{ $message }}

  </div>
  @enderror
</div>


<div class="mb-3">
  <label for="formFile" class="form-label font-weight-bold">Upload Situ</label>
  <input class="form-control" type="file" id="filesitu" value="{{old('filesitu')}}" onchange=loadsitu(event) name="filesitu" >
  @error('filesitu')
  <div class="text-danger invalid-back">

    {{ 'File Surat Izin Tempat Usaha Wajib Di Upload' }}

  </div>
  @enderror
  <div class="mt-2 mb-5">
  <!-- <button type="button" class="btn btn-primary">view</button>
  <button type="button" class="btn btn-danger">delete</button> -->
  <a id="download_situ" class="btn btn-primary bg-warning" download > Download</a>  
</div>
</div>
      
<script>
  var loadtdp = function(event) {
    var tdp = document.getElementById('filetdp');
    // var badan = document.getElementById('distributor').value;
      // var output = document.getElementById('output');
      // output.src = URL.createObjectURL(stnk.files[0]);
      // console.log(output.src)ex
      var download_output = document.getElementById('download_tdp');
      download_output.href= URL.createObjectURL(tdp.files[0]);
      download_output.download = "File TDP" ;
      
    };

    var loadsiup = function(event) {
    var surat = document.getElementById('filesiup');
    // var badan = document.getElementById('distributor').value;
      // var output = document.getElementById('output');
      // output.src = URL.createObjectURL(stnk.files[0]);
      // console.log(output.src)ex
      var download_output = document.getElementById('download_siup');
      download_output.href= URL.createObjectURL(surat.files[0]);
      download_output.download = "File SIUP" ;
      
    };

    var loadsitu = function(event) {
    var surat = document.getElementById('filesitu');
    // var badan = document.getElementById('distributor').value;
      // var output = document.getElementById('output');
      // output.src = URL.createObjectURL(stnk.files[0]);
      // console.log(output.src)ex
      var download_output = document.getElementById('download_situ');
      download_output.href= URL.createObjectURL(surat.files[0]);
      download_output.download = "File SITU" ;
      
    };


 
    </script>
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
@endsection