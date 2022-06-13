@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
    <h2 class="fw-bold">Contact US</h2>
</div>
<form>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputnama" placeholder="Nama">
    <label for="inputnama">Nama</label>
  </div>
  <div class="form-floating mb-3">
    <input type="email" class="form-control" id="inputemail" placeholder="Email">
    <label for="inputemail">Email</label>
  </div>
  <div class="form-floating mb-3">
    <textarea class="form-control" id="Tinggalkan pesan disini!" id="floatingTextarea2" style="height: 100px"></textarea>
    <label for="floatingTextarea2">Pesan</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection