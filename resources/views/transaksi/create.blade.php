@extends('template.master')

@section('judul')
<h1>Create Transaksi</h1>
@endsection

@section('content')
<!-- MEMBER -->
<form action="/transaksi" method="POST">
@csrf
<div class="row">
  <div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Data Member</h3>
      </div>
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Pilih Data Member</label>
            <select class="form-control" name="member_id" id="member_id"> 
                      @forelse ($member as $member)
                      <option value="{{ $member->id}}">{{ $member->nama. '  |  ' . $member->alamat }}</option>
                      @empty
                      <option value="" disabled> Tidak Ada Member</option>
                      @endforelse
            </select>
          </div>
</div>
</div>

<!-- OUTLET -->
<div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Data Outlet</h3>
      </div>
       <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Pilih Data Outlet</label>
            <select class="form-control" name="outlet_id" id="outlet_id"> 
                      @forelse ($outlet as $outlet)
                      <option value="{{ $outlet->id}}">{{ $outlet->nama. '  |  ' . $outlet->alamat }}</option>
                      @empty
                      <option value="" disabled> Tidak Ada outlet</option>
                      @endforelse
            </select>
          </div>
        </div>
    </div>

<!-- PAKET -->
   </div>
      </div>
  <div class="col-md-6">
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Pilih Paket</h3>
  </div>
      <div class="card-body">
      <label for="exampleInputEmail1">Pilih Jenis Paket</label>
      <select class="form-control" name="paket_id" id="paket_id"> 
        @forelse ($paket as $paket)
        <option value="{{ $paket->id}}">{{ $paket->nama_paket }}</option>
        @empty
       <option value="" disabled> Tidak Ada Member</option>
        @endforelse
     </select>
    </div>

    <!-- <div class="card-body">
      <label for="qty"> Jumlah </label>
      <input type="number" class="form-control" name="qty" id="qty">
    </div>   -->
   
    <div class="card-body">
        <label for="total_bayar">Total Bayar</label>
        <input type="text" name="total_bayar" class="form-control" placeholder="Masukan Total Bayar">
   </div>

   <div class="card-body">
      <label>Status</label>
      <select class="form-control" name="status">
      <option disabled selected>-- Pilih Salah Satu --</option>
      <option value="">Baru</option>
      <option value="">Proses</option>
      <option value="">Selesai</option>
      <option value="">Diambil</option>
       </select>
   </div>
   <div class="card-body">
      <label>Bayar Transaksi</label>
      <select class="form-control" name="dibayar">
      <option disabled selected>-- Pilih Salah Satu --</option>
      <option value="">dibayar</option>
      <option value="">Belum dibayar</option>
       </select>
   </div>
      </div>
    </div>
  </div>


  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Save</button>
   <button type="reset" class="btn btn-primary"> Reset</button>
 </div>

</div>
@endsection