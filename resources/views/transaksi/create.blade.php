@extends('template.master')

@section('judul')
<h1>Create Transaksi</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Menambahkan Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/transaksi" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                  <label> Id Outlet </label>
                    <br>
                    <select class="form-select" arial-label="Default select example" name="outlet_id">
                      <option selected>Open this select menu</option>
                      @foreach ($outlet as $item)
                      <option value="{{ $item->id}}">{{ $item->id }}</option>
                      @endforeach
                    </select>
                  </div>
                 
                  <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <br>
                    <input type="date" name="tgl" class="form-select" id="tgl" placeholder="Tanggal">
                  </div>

                  <div class="form-group">
                    <label for="tanggal_bayar">tanggal_bayar</label>
                    <br>
                    <input type="date" name="tgl_bayar" class="form-select" id="tgl_bayar" placeholder="Tanggal Bayar">
                  </div>

                  <div class="form-group">
                    <label for="batas_waktu">Batas Waktu</label>
                    <br>
                    <input type="date" name="batas_waktu" class="form-select" id="batas_waktu" placeholder="Batas Waktu">
                  </div>

                  <div class="form-group">
                    <label for="biaya_tambahan">Biaya Tambahan</label>
                    <br>
                    <input type="number" name="biaya_tambahan" class="form-select" id="biaya_tambahan" placeholder="Biaya Tambahan">
                  </div>

                  <div class="form-group">
                    <label for="Diskon">Diskon</label>
                    <br>
                    <input type="number" name="diskon" class="form-select" id="diskon" placeholder="Diskon">
                  </div>

                  <div class="form-group">
                    <label for="pajak">Pajak</label>
                    <br>
                    <input type="number" name="pajak" class="form-select" id="pajak" placeholder="Masukan Pajak">
                  </div>

                  <div class="form-group">
                  <label> Status </label>
                    <br>
                    <select class="form-control" name="status">
                      <option selected>Open this select menu</option>
                      <option value="baru">Baru</option>
                      <option value="proses">Proses</option>
                      <option value="selesai">Selesai</option>
                      <option value="diambil">Diambil</option>
                    </select>
                  </div>

                  <div class="form-group">
                  <label> Status </label>
                    <br>
                    <select class="form-control" name="dibayar">
                      <option selected>Open this select menu</option>
                      <option value="dibayar">Dibayar</option>
                      <option value="belum_dibayar">Belum Dibayar</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>User Id</label>
                    <select class="form-control" aria-label="Default select example" name="user_id" >
                    <option selected>Open this select menu</option>
                    @foreach ($user as $item)
                    <option value="{{ $item->id}}">{{ $item->id }}</option>
                    @endforeach
                    </select>
                  </div>
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection