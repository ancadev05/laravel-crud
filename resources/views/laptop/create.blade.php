@extends('template.default-template')

@section('title')
    <title>Tambah Laptop</title>
@endsection

@section('conten')

<h3 class="mb-3 border-bottom ">Tambah Laptop</h3>

<form action="{{url('laptop')}}" method="post">
@csrf

  <div class="mb-3 row">
    <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{Session::get('kode_barang')}}">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="merek" class="col-sm-2 col-form-label">Merek</label>
    <div class="col-sm-10">
      <select name="merek" id="merek" class="form-select">
        <option value="">-- Pilih Merek Laptop --</option>
        <option value="Asus">Asus</option>
        <option value="Lenovo">Lenovo</option>
        <option value="Acer">Acer</option>
        <option value="Axio">Axio</option>
        <option value="MacBook">MacBook</option>
      </select>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tipe" name="tipe" value="{{Session::get('tipe')}}">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{Session::get('jumlah')}}">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="ket" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ket" name="ket" value="{{Session::get('ket')}}">
    </div>
  </div>

<div class="d-flex justify-content-end">
  <button type="submit" class="btn btn-primary btn-sm me-2 ">Tambah</button>
  <a href="{{url('laptop')}}" class="btn btn-danger btn-sm">Batal</a>
</div>
  
</form>
@endsection