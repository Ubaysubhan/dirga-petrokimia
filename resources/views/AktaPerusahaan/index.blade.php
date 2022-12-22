@extends('Layouts.main')
@section('container')


@if ($akta)
<form method="POST"  action="/AktaPerusahaan" enctype="multipart/form-data" class="container-fluid" id="container-wrapper">
  @csrf
<div  class="m-4">



<h1 class="m-5">Akta Perusahaan</h1>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Nomor Akta</label>
  <input type="Text" class="form-control " name="nomorakta" id="exampleFormControlInput1" placeholder="Nomor Akta" disabled>

</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Tanggal Akta</label>
  <input type="date" class="form-control" name="tanggalakta" id="exampleFormControlInput1" placeholder="Tanggal/Bulan/Tahun" disabled>
</div>


<div class="mb-3">
  <label for="formFile" class="form-label font-weight-bold">Surat Akta</label>
  <input class="form-control" type="file" id="akta" name="image" disabled>
  <div class="mt-2 mb-5">
  <!-- <button type="button" class="btn btn-primary">view</button> -->
  <a id="download_output" class="btn btn-primary bg-warning" download> Download</a>
  </div>
</div>
<button type="button" class="btn btn-primary btn-block bg-success mb-5" data-toggle="modal" data-target="#exampleModal" disabled>
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
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
</form>




<div class=" justify-content-center table-responsive center mt-5 ">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
          
              <th scope="col" class="text-center">Nomor Akta</th>
              <th scope="col" class="text-center">Tanggal Akta</th>
              <th scope="col" class="text-center">File Terlampir</th>
            
            </tr>
          </thead>
          <tbody>
            <tr>
              
              <td class="text-center">{{$akta->nomor_akta}}</td>
              <td class="text-center">{{$akta->tanggal_akta}}</td>
              <td class="text-center">{{$akta->image}}</td>
              
            </tr>
          </tbody>
        </table>
        </div>
      </form>
     

@else
      <form method="POST"  action="/AktaPerusahaan" enctype="multipart/form-data" class="container-fluid" id="container-wrapper">
  @csrf

    @if ($errors->any())
           
               <div class="alert alert-danger" role="alert">
Data Masih Salah , Silahkan Isi Kembali Formulir Berikut dan Upload File Kembali
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

            </div>

            @endif



<h1 class="m-5">Akta Perusahaan</h1>



<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Nomor Akta</label>
  <input type="Text" class="form-control @error('nomorakta') is-invalid @enderror" value="{{old('nomorakta')}}" name="nomorakta" id="nomorakta" placeholder="Nomor Akta">
  @error('nomorakta')
  <div class="text-danger invalid-back">

    Nomor Akta Wajib diisi

  </div>
  @enderror
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Tanggal Akta</label>
  <input type="date" class="form-control @error('tanggalakta') is-invalid @enderror" value="{{old('tanggalakta')}}" name="tanggalakta" id="tanggalakta" placeholder="Tanggal/Bulan/Tahun" >
  @error('tanggalakta')
  <div class="text-danger invalid-back">

    Tanggal Akta Wajib diisi

  </div>
  @enderror
</div>


<div class="mb-3">
  <label for="formFile" class="form-label font-weight-bold">Surat Akta</label>
  <input class="form-control @error('image') is-invalid @enderror" type="file" id="akta" name="image" onchange=loadFile(event) >
  @error('image')
  <div class="text-danger invalid-back">

    File Akta Perusahaan Harus diisi dan Berupa PDF

  </div>
  @enderror
  <div class="mt-2 mb-5">
  <!-- <button type="button" class="btn btn-primary">view</button>
  <button type="button" class="btn btn-danger">delete</button> -->
  <a id="download_output" class="btn btn-primary bg-warning" download > Download</a>
  </div>

  {{-- Alert Create Product Success Start --}}
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ session('success') }}
        </div>
        @elseif (session()->has('failed'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ session('failed') }}
        </div>
         @endif
    {{-- Alert Create Product Success End --}}
 
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

</form>

<script>
  var loadFile = function(event) {
    var surat = document.getElementById('akta');
      // var output = document.getElementById('output');
      // output.src = URL.createObjectURL(stnk.files[0]);
      // console.log(output.src)ex
      var download_output = document.getElementById('download_output');
      download_output.href= URL.createObjectURL(surat.files[0]);
      download_output.download = "Surat Akta";
      
    };

 
    </script>
       

@endif
@endsection