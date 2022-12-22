@extends('Layouts.main')
@section('container')

@if ($gudang)
<form method="POST" action="/Gudang" enctype="multipart/form-data" name="gudang" class="container-fluid" id="container-wrapper">
  <div>
      

    @csrf
    

    
    <h1 class="m-5">Gudang</h1>
    <div class="mb-3" name="provinsi">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold">Provinsi</label>
          <select class="form-select provinsi" name="provinsi" aria-label="Default select example" disabled>
            <option value="">Pilih Provinsi</option>
            @foreach ($provinsi as $value)
                <option value="{{ $value->id }}" {{(old('provinsi')) == $value->id  ? 'selected' : ''}}>{{ $value->name }}</option>
            @endforeach
          {{-- <option > @foreach ($provinces as $provinsi) </option>
        <option>{{$provinsi->name}}</option>
        @endforeach --}}
          </select>
          @error('provinsi')
  <div class="text-danger invalid-back">

    {{ $message }}

  </div>
  @enderror
        </div>

        <div class="mb-3" name="">
          <label for="exampleFormControlInput1" class="form-label  font-weight-bold">Kota / Kabupaten</label>
          <select class="form-select kabupaten" name="kabupaten" aria-label="Default select example" disabled>
            <option disabled selected>Pilih Kota/Kabupaten</option>
            {{-- <option name="provinsi" value="1">One</option>
            <option name="provinsi" value="2">Two</option>
            <option name="provinsi" value="3">Three</option> --}}
            @error('kabupaten')
  <div class="text-danger invalid-back">

    {{ $message }}

  </div>
  @enderror
          </select>
        </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label  font-weight-bold">Nomor Tanda Daftar Gudang</label>
      <input type="text" class="form-control" name="nomortandagudang" id="exampleFormControlInput1" placeholder="Nomor tanda daftar gudang" disabled>
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label  font-weight-bold">Nama Gudang</label>
      <input type="text" class="form-control" name="namagudang" id="exampleFormControlInput1" placeholder="Nama Gudang" disabled>
    </div>

    <div class="mb-3">
      <label for="formFile" class="form-label font-weight-bold">Upload File Nomor Tanda Daftar Gudang</label>
      <input class="form-control" type="file" id="formFile" name="file_tdg" disabled>
      <div class="mt-2 mb-5">
      <a id="download_depan" class="btn btn-primary bg-warning" download > Download</a>
      </div>
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label font-weight-bold">Kapasitas Gudang</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="kapasitasgudang" placeholder="kapasitas Gudang (Ton)" disabled>
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label font-weight-bold">Luas Gudang</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="luasgudang" placeholder="Luas Gudang (m2)" disabled>
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label font-weight-bold">Alamat Gudang</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat" placeholder="Alamat Gudang" disabled>
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label font-weight-bold">Kecamatan</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="kecamatan" placeholder="Kecamatan" disabled>
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label font-weight-bold">Kelurahan</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="kelurahan" placeholder="kelurahan" disabled>
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label font-weight-bold">Kode Pos</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="kode_pos" placeholder="kodepos" disabled>
    </div>


    <div class="mb-3">
      <label for="formFile" class="form-label font-weight-bold">Upload Foto Tampak Depan Gudang</label>
      <input class="form-control" type="file" id="formFile" name="fotodepan" disabled>
      <div class="mt-2 mb-5">
      <a id="download_depan" class="btn btn-primary bg-warning" download > Download</a>
      </div>
    </div>

    <div class="mb-3">
      <label for="formFile" class="form-label font-weight-bold">Upload Foto Tampak Samping Gudang</label>
      <input class="form-control" type="file" id="formFile" name="fotobelakang" disabled>
      <div class="mt-2 mb-5">
      <a id="download_depan" class="btn btn-primary bg-warning" download > Download</a>
      </div>
    </div>

    <button d-inline type="submit" class="btn btn-primary btn-block mb-5 bg-success" disabled>Submit</button>
  </div>

  <div class=" justify-content-center table-responsive w-full  ">
    <table class="table table-striped table-sm">
      <thead>
        <tr>

          <th scope="col" class="text-center">Provinsi</th>
          <th scope="col" class="text-center">Kabupaten</th>
          <th scope="col" class="text-center">nomor tanda gudang</th>

        </tr>
      </thead>
    
      <tbody>
        <tr>

          <td class="text-center">{{$gudang->provinsi}}</td>
          <td class="text-center">{{$gudang->kabupaten}}</td>
          <td class="text-center">{{$gudang->nomortandagudang}}</td>

        </tr>
      </tbody>

    </table>
    <table class="table table-striped table-sm">
      <thead>
        <tr>

          <th scope="col" class="text-center">Nama Gudang</th>
          <th scope="col" class="text-center">File Tanda Gudang</th>
          <th scope="col" class="text-center">Kapasitas Gudang</th>

        </tr>
      </thead>
    
      <tbody>
        <tr>

          <td class="text-center">{{$gudang->namagudang}}</td>
          <td class="text-center">{{$gudang->file_tdg}}</td>
          <td class="text-center">{{$gudang->kapasitasgudang}}</td>

        </tr>
      </tbody>

    </table>
    <table class="table table-striped table-sm">
      <thead>
        <tr>

          <th scope="col" class="text-center">Luas Gudang</th>
          <th scope="col" class="text-center">Alamat Gudang</th>
          <th scope="col" class="text-center">Kecamatan</th>

        </tr>
      </thead>
    
      <tbody>
        <tr>

          <td class="text-center">{{$gudang->luas_gudang}}</td>
          <td class="text-center">{{$gudang->alamat_gudang}}</td>
          <td class="text-center">{{$gudang->kecamatan}}</td>

        </tr>
      </tbody>

    </table>
    <table class="table table-striped table-sm">
      <thead>
        <tr>

          <th scope="col" class="text-center">Kode Pos</th>
          <th scope="col" class="text-center">Foto Depan Gudang</th>
          <th scope="col" class="text-center">Foto Belakang</th>
        </tr>
      </thead>
    
      <tbody>
        <tr>

          <td class="text-center">{{$gudang->kode_pos}}</td>
          <td class="text-center">{{$gudang->foto_depan_gudang}}</td>
          <td class="text-center">{{$gudang->foto_belakang_gudang}}</td>

        </tr>
       
      </tbody>


    </table>

    @else
    <form method="POST" action="/Gudang" enctype="multipart/form-data" name="gudang">
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


        <h1 class="m-5">Gudang</h1>

        <div class="mb-3" name="provinsi">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold">Provinsi</label>
          <select class="form-select provinsi @error('provinsi') is-invalid @enderror" name="provinsi" value="{{old('provinsi')}}" aria-label="Default select example" >
            <option value="">Pilih Provinsi</option>
            @foreach ($provinsi as $value)
                <option value="{{ $value->id }}" {{(old('provinsi')) == $value->id  ? '' : ''}} >{{ $value->name }}</option>
            @endforeach
          </select>
          @error('provinsi')
  <div class="text-danger invalid-back">

    Provinsi Wajib diisi

  </div>
  @enderror
        </div>

        <div class="mb-3" name="">
          <label for="exampleFormControlInput1" class="form-label  font-weight-bold">Kota / Kabupaten</label>
          <select class="form-select kabupaten @error('kabupaten') is-invalid @enderror" name="kabupaten" value="{{old('kabupaten')}}" aria-label="Default select example"  {{(old('kabupaten')) == $value->id  ? 'selected' : ''}} >>
            <option disabled selected>Pilih Kota/Kabupaten</option>
            @error('kabupaten')
  <div class="text-danger invalid-back">

    Kota/Kabupaten Wajib diisi

  </div>
  @enderror
          </select>
        </div>


        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label  font-weight-bold">Nomor Tanda Daftar Gudang</label>
          <input type="text" class="form-control @error('nomortandagudang') is-invalid @enderror" name="nomortandagudang" value="{{old('nomortandagudang')}}" id="exampleFormControlInput1" placeholder="Nomor tanda daftar gudang" >
          @error('nomortandagudang')
  <div class="text-danger invalid-back">

    Nomor Tanda Gudang Wajib diisi

  </div>
  @enderror
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label  font-weight-bold">Nama Gudang</label>
          <input type="text" class="form-control @error('namagudang') is-invalid @enderror" name="namagudang" value="{{old('namagudang')}}" id="exampleFormControlInput1" placeholder="Nama Gudang" >
          @error('namagudang')
  <div class="text-danger invalid-back">

    Nama Gudang Wajib diisi

  </div>
  @enderror
        </div>

        <div class="mb-3">
          <label for="formFile" class="form-label font-weight-bold">Upload File Nomor Tanda Daftar Gudang</label>
          <input class="form-control @error('nomorgudang') is-invalid @enderror" type="file" id="nomorgudang" value="{{old('nomorgudang')}}" name="file_tdg" onchange=loadgudang(event) >
          @error('file_tdg')
  <div class="text-danger invalid-back">

    File Nomor Tanda Gudang Wajib diisi dan Berbentuk .PDF

  </div>
  @enderror
          <div class="mt-2 mb-5">
          <a id="download_gudang" class="btn btn-primary bg-warning" download > Download</a>
          </div>
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold">Kapasitas Gudang</label>
          <input type="text" class="form-control @error('kapasitasgudang') is-invalid @enderror" id="exampleFormControlInput1" value="{{old('kapasitasgudang')}}" name="kapasitasgudang" placeholder="kapasitas Gudang (Ton)" >
          @error('kapasitasgudang')
  <div class="text-danger invalid-back">

    Kapasitas Gudang Wajib diisi

  </div>
  @enderror
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold">Luas Gudang </label>
          <input type="text" class="form-control @error('luasgudang') is-invalid @enderror" id="exampleFormControlInput1" value="{{old('luasgudang')}}" name="luasgudang" placeholder="Luas Gudang (m2)" >
          @error('luasgudang')
  <div class="text-danger invalid-back">

    Luas Gudang Wajib diisi

  </div>
  @enderror
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold">Alamat Gudang</label>
          <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleFormControlInput1" value="{{old('alamat')}}" name="alamat" placeholder="Alamat Gudang" >
          @error('alamat')
  <div class="text-danger invalid-back">

    Alamat Gudang Wajib diisi

  </div>
  @enderror
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold">Kecamatan</label>
          <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="exampleFormControlInput1" value="{{old('kecamatan')}}" name="kecamatan" placeholder="Kecamatan" >
          @error('kecamatan')
  <div class="text-danger invalid-back">

    Kecamatan Wajib diisi

  </div>
  @enderror
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold">Kelurahan</label>
          <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" id="exampleFormControlInput1" value="{{old('kelurahan')}}" name="kelurahan" placeholder="kelurahan" >
          @error('kelurahan')
  <div class="text-danger invalid-back">

    Kelurahan Wajib diisi

  </div>
  @enderror
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label font-weight-bold">Kode Pos</label>
          <input type="text" class="form-control @error('kode_pos') is-invalid @enderror" id="exampleFormControlInput1" value="{{old('kode_pos')}}" name="kode_pos" placeholder="kodepos" >
          @error('file_tdg')
  <div class="text-danger invalid-back">

    Kode Pos Wajib diisi

  </div>
  @enderror
        </div>


        <div class="mb-3">
          <label for="formFile" class="form-label font-weight-bold">Upload Foto Tampak Depan Gudang</label>
          <input class="form-control @error('fotodepan') is-invalid @enderror" type="file" id="fotodepan" name="fotodepan" value="{{old('fotodepan')}}" onchange=loaddepan(event) >
          <div class="mt-2 mb-5">
          <a id="download_depan" class="btn btn-primary bg-warning" download > Download</a>
          @error('fotodepan')
  <div class="text-danger invalid-back">

    Foto Depan Gudang Wajib diisi dan Berbentuk .JPG , .PNG

  </div>
  @enderror
          </div>
        </div>

        <div class="mb-3">
          <label for="formFile" class="form-label font-weight-bold">Upload Foto Tampak Samping Gudang</label>
          <input class="form-control @error('fotobelakang') is-invalid @enderror" type="file" id="fotobelakang" value="{{old('fotobelakang')}}" name="fotobelakang" onchange=loadbelakang(event) >
          @error('fotobelakang')
  <div class="text-danger invalid-back">

  Foto Belakang Gudang Wajib diisi dan Berbentuk .JPG , .PNG 

  </div>
  @enderror
          <div class="mt-2 mb-5">
          <a id="download_belakang" class="btn btn-primary bg-warning" download > Download</a>
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
  var loadgudang = function(event) {
    var tdp = document.getElementById('nomorgudang');
    // var badan = document.getElementById('distributor').value;
      // var output = document.getElementById('output');
      // output.src = URL.createObjectURL(stnk.files[0]);
      // console.log(output.src)ex
      var download_output = document.getElementById('download_gudang');
      download_output.href= URL.createObjectURL(tdp.files[0]);
      download_output.download = "File Nomor Tanda Gudang" ;
      
    };

    var loaddepan = function(event) {
    var depan = document.getElementById('fotodepan');
    // var badan = document.getElementById('distributor').value;
      // var output = document.getElementById('output');
      // output.src = URL.createObjectURL(stnk.files[0]);
      // console.log(output.src)ex
      var download_output = document.getElementById('download_depan');
      download_output.href= URL.createObjectURL(depan.files[0]);
      download_output.download = "Foto Depan Gudang" ;
      
    };

    var loadbelakang = function(event) {
    var belakang = document.getElementById('fotobelakang');
    // var badan = document.getElementById('distributor').value;
      // var output = document.getElementById('output');
      // output.src = URL.createObclasjectURL(stnk.files[0]);
      // console.log(output.src)ex
      var download_output = document.getElementById('download_belakang');
      download_output.href= URL.createObjectURL(belakang.files[0]);
      download_output.download = "Foto Samping Gudang" ;
      
    };


 
    </script>

    </form>
    @endsection
  
    @section('script')
        <script>
          $(document).ready(function(){
            function getKabupaten() {
                console.log("get kabupaten");
                // console.log("Berhasil Berubah");
                let provinsiDom = document.querySelector('.provinsi');
              var provinsi = $(provinsiDom).val();
              console.log(provinsi);
              console.log(provinsiDom);

              var div = $(provinsiDom).parent().parent().parent();
              var op = " "
              $.ajax({
                type:'get',
                url:'{!! URL::to('findKabupatenName') !!}',
                data:{'id':provinsi},
                success:function(data){
                  let old_kabupaten = {{old('kabupaten', 0)}};
                  op += '<option value="0" disabled>Pilih Kabupaten/Kota</option>';
                  
                  for (var i=0; i<data.length; i++)
                  {
                    if (data[i].id != old_kabupaten) {
                        op += '<option value="' + data[i].id + '">' + data[i].name + '</option>'
                    } else {
                        op += '<option selected value="' + data[i].id + '">' + data[i].name + '</option>'
                    }
                  }
                  div.find('.kabupaten').html(" ");
                  div.find('.kabupaten').append(op);
                  div.find('.kabupaten').value = old_kabupaten;
                  div.find('.kabupaten').change();
                }
            });
            }
            $(document).on('change', '.provinsi', getKabupaten);
             let old_provinsi = {{old('provinsi', 0)}};
             
             if (old_provinsi > 0) {
                 let combobox = document.querySelector('.provinsi');
                 combobox.value = old_provinsi;
                 combobox.dispatchEvent(new Event('change'));
                 getKabupaten();
             }
          });
        </script>
    @endsection
        