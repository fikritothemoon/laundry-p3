@extends('template.master')


@section ('content')
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Info Konfirmasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/outlet/{{$outlet->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputid">Nama</label>
                    <input type="integer" name="nama" class="form-control" id="inputnama" placeholder="Enter nama" value="{{ $outlet->nama }}" require>
                    @error('id')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
                  </div>

                  <div class="form-group">
                    <label for="inputNamaKelas">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputAlamat" placeholder="Enter Alamat"  value="{{ $outlet->alamat }}" require>
                    @error('nama kelas')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
                  </div>

                  <div class="form-group">
                    <label for="inputjurusan">Telepon</label>
                    <input type="text" name="tlp" class="form-control" id="inputtelepon" placeholder="Enter Telepon"  value="{{ $outlet->tlp }}" require>
                    @error('jurusan')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
                  </div>
                </select>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Save</button>

                </div>
              </form>
            </div>
@endsection