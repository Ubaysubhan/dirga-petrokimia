@extends('Layouts.main')
@section('container')

<form  enctype="multipart/form-data">
  @csrf
<div class="container-fluid" id="container-wrapper">



<h1>Akta Perusahaan</h1>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" name="tanggalakta" id="exampleFormControlInput1" placeholder="name@example.com" disabled>
</div>


<div class="mb-3">
  <label for="formFile" class="form-label">Default file input example</label>
  <input class="form-control" type="file" id="formFile" name="image" disabled>
</div>
<button d-inline type="submit" class="btn btn-primary btn-block bg-success">Submit</button>
</div>
</form>

@endsection