@extends('Layouts.main')
@section('container')

@if ($daftararmada)
<form method="POST"  action="/DaftarArmada" enctype="multipart/form-data">
<div class="container-fluid" id="container-wrapper">
@csrf

    @if ($errors->any())
           
               <div class="alert alert-danger" role="alert">
Data Masih Salah , Silahkan Isi Kembali Formulir Berikut
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

            </div>

            @endif


<h1 class="m-5">Daftar Armada</h1>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Plat Nomor</label>
  <input type="text" class="form-control @error('plat') is-invalid @enderror" value="{{old('plat')}}" name="plat" id="plat" placeholder="ex: L 1234 HG " >
  @error('plat')
  <div class="text-danger invalid-back">

    Plat Kendaraan Wajib diisi

  </div>
  @enderror 
</div>

<div class="mb-3">
  <label for="formFile" class="form-label font-weight-bold"  >STNK ARMADA</label>
  <input class="form-control @error('stnk') is-invalid @enderror" type="file" name="stnk" id="stnk" onchange=loadFile(event)  >
  @error('stnk')
  <div class="text-danger invalid-back">

    STNK Wajib Di Upload

  </div>
  @enderror
  <div class="mt-2 mb-5">
  <!-- <button type="button"  class="btn btn-primary"  >view</button> -->
  <!-- <img src="#" id="output" width="200px" /> -->
  <a id="download_output" class="btn btn-primary bg-warning" download> Download</a>
  
  </div>
</div>



<div class="mb-3">
  <label for="formFile" class="form-label font-weight-bold" >Upload Foto Armada</label>
  <input class="form-control @error('foto') is-invalid @enderror" type="file" name="foto" id="foto" onchange=loadArmada(event) > 
  @error('foto')
  <div class="text-danger invalid-back">

    Foto Kendaraan Wajib Di Upload

  </div>
  @enderror
  <div class="mt-2 mb-5">
  <a id="armada_download" class="btn btn-primary bg-warning" download> Download</a>

  </div>
</div>


        <button type="button" class="btn btn-primary btn-block bg-success mb-5" data-toggle="modal" data-target="#exampleSave" >
 Simpan
</button>

<!-- Modal -->
<div class="modal fade" id="exampleSave" tabindex="-1" role="dialog" aria-labelledby="exampleSaveLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title btn-block" id="exampleSaveLabel">Simpan</h5>
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
</div>
</form>

<div class=" justify-content-center table-responsive center text-center w-75 m-5 ">
        <table class="table table-striped table-sm">
       
          <thead>
            <tr>
          
              <th scope="col">Plat</th>
              <th scope="col">STNK</th>
              <th scope="col">Foto</th>
              <th scope="col"> </th>
             
            
            </tr>
          </thead>
       
          <tbody>
                 @foreach ($daftararmada as $value)
            <tr>
              
              <td>{{$value->plat}}</td>
              <td>{{$value->stnk}}</td>
              <td>{{$value->foto_kendaraan}}</td>
              <td>
              <form action="/DaftarArmada/{{$value->id}}" method="POST" class="d-inline"  >
              <input type="hidden" name="_method" value="delete" />
                @csrf
                <button type="Submit" class="btn btn-primary btn-block bg-danger mb-5" onclick= "return confirm('Apakah Anda Yakin Ingin Menghapus Data Tersebut?');" >
 Delete
</button>
                </form>
              </td>
            </tr>
            @endforeach



          </tbody>
          

          
</table>
</div>
</div>

</div>
<script>
  var loadFile = function(event) {
    var stnk = document.getElementById('stnk');
    var plat = document.getElementById('plat').value;
      // var output = document.getElementById('output');
      // output.src = URL.createObjectURL(stnk.files[0]);
      // console.log(output.src)ex
      var download_output = document.getElementById('download_output');
      download_output.href= URL.createObjectURL(stnk.files[0]);
      download_output.download = "STNK" + "_" + plat ;
      
    };

    var loadArmada = function(event){
      var foto = document.getElementById('foto');
    var plat = document.getElementById('plat').value;
    var armada_download = document.getElementById('armada_download');
    armada_download.href= URL.createObjectURL(foto.files[0]);
    armada_download.download = "foto" + "_" + plat ;
    }

</script>

             

@else
<form method="POST"  action="/DaftarArmada" enctype="multipart/form-data">
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


<h1 class="m-5">Daftar Armada</h1>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label font-weight-bold">Plat Nomor</label>
  <input type="text" class="form-control" name="plat" id="exampleFormControlInput1" placeholder="ex: L 1234 HG">
  @error('plat')
  <div class="text-danger invalid-back">

    {{ 'Plat Kendaraan Wajib diisi' }}

  </div>
  @enderror 
</div>

<div class="mb-3">
  <label for="formFile" class="form-label font-weight-bold">STNK ARMADA</label>
  <input class="form-control" type="file" name="stnk" id="stnk" name="stnk" onchange=loadFile(event)>
  @error('stnk')
  <div class="text-danger invalid-back">

    {{ 'STNK Kendaraan Wajib Di upload dalam bentuk .jpg atau .pdf' }}

  </div>
  @enderror 
  <div class="mt-2 mb-5">
  <a id="download_output" class="btn btn-primary bg-warning" download> Download</a>
  </div>
</div>



<div class="mb-3">
  <label for="formFile" class="form-label font-weight-bold">Upload Foto Armada</label>
  <input class="form-control" type="file" name="foto" id="foto" name="foto" onchange=loadArmada(event)> 
  @error('foto')
  <div class="text-danger invalid-back">

    {{ 'Foto Kendaraan Wajib Di upload dalam bentuk .jpg dan .Png' }}

  </div>
  @enderror 
  <a id="armada_download" class="btn btn-primary bg-warning" download> Download</a>

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
          
<div class=" justify-content-center table-responsive center text-center w-75 m-5  ">
        <table class="table table-striped table-sm">
       
          <thead>
            <tr>
          
              <th scope="col">Plat</th>
              <th scope="col">STNK</th>
              <th scope="col">Foto</th>
             
            
            </tr>
          </thead>
          @foreach ($daftararmada as $daftararmada)
          <tbody>
            <tr>
              
              <td>{{$daftararmada->plat}}</td>
              <td>{{$daftararmada->stnk}}</td>
              <td>{{$daftararmada->foto_kendaraan}}</td>
              <td>
           
              </td>
            </tr>
          </tbody>
          

          @endforeach
</table>

</div>


</form>

<script>
  var loadFile = function(event) {
    var stnk = document.getElementById('stnk');
    var plat = document.getElementById('plat').value;
      // var output = document.getElementById('output');
      // output.src = URL.createObjectURL(stnk.files[0]);
      // console.log(output.src)ex
      var download_output = document.getElementById('download_output');
      download_output.href= URL.createObjectURL(stnk.files[0]);
      download_output.download = "STNK" + "_" + plat ;
      
    };

    var loadArmada = function(event){
      var foto = document.getElementById('foto');
    var plat = document.getElementById('plat').value;
    var armada_download = document.getElementById('armada_download');
    armada_download.href= URL.createObjectURL(foto.files[0]);
    armada_download.download = "foto" + "_" + plat ;
    }

</script>
  @endif

@endsection