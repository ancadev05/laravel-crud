@extends('template.default-template')

@section('conten')

<h3 class="mb-3 border-bottom border-2 border-success">Edit Data</h3>

<form action="{{url('laptop/'.$data->id)}}" method="post">
@csrf
@method('PUT')

  <div class="mb-3 row">
    <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{$data->kode_barang}}">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="merek" class="col-sm-2 col-form-label">Merek</label>
    <div class="col-sm-10">
      @php
          $merek = $data->merek;
      @endphp
      <select name="merek" id="merek" class="form-select">
        <option value="Asus" {{ $merek == "Asus" ? "selected" : ""}}>Asus</option>
        <option value="Lenovo" {{ $merek == "Lenovo" ? "selected" : ""}}>Lenovo</option>
        <option value="Acer" {{ $merek == "Acer" ? "selected" : ""}}>Acer</option>
        <option value="Axio" {{ $merek == "Axio" ? "selected" : ""}}>Axio</option>
        <option value="MacBook" {{ $merek == "MacBook" ? "selected" : ""}}>MacBook</option>
      </select>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tipe" name="tipe" value="{{$data->tipe}}">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{$data->jumlah}}">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="ket" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ket" name="ket" value="{{$data->ket}}">
    </div>
  </div>

<div class="d-flex justify-content-end">
  <button type="submit" class="btn btn-primary btn-sm me-2 "><i class="bi bi-floppy"></i> Simpan</button>
  <a href="{{url('laptop')}}" class="btn btn-danger btn-sm"><i class="bi bi-x-circle"></i> Batal</a>
</div>
  
</form>
@endsection