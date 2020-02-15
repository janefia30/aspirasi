@extends('layouts.main')


<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                <div class="card-header">Laporkan Keluhan Anda</div>

                <form method="POST" action="/success">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-10 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                <input type="text" class="form-control @error('namalengkap') is-invalid @enderror" id="namalengkap" name="namalengkap" placeholder="Masukan Nama Lengkap.....">

                @error('namalengkap')
                <div class="text-danger">{{$message}}</div>
                @enderror

                </div>
                </div>
                <label>Keluhan</label>
                <select name="keluh" id="keluh" class="form-control">
                    <option hidden>Keluhan</option>
                    <option value="Kebersihan">Kebersihan</option>
                    <option value="Fasilitas">Fasilitas</option>
                    <option value="Administrasi">Administrasi</option>
               </select>
               <label>Kelas</label>
               <select name="kelas" id="kelas" class="form-control">
                   <option hidden>Kelas</option>
                   <option value="X">X</option>
                   <option value="XI">XI</option>
                   <option value="XII">XII</option>
               </select>
               <label>Jenis Kelamin</label>
               <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                   <option hidden>Jenis Kelamin</option>
                   <option value="Laki-Laki">Laki-Laki</option>
                   <option value="Perempuan">Perempuan</option>
                   <option value="Tidakdisebutkan">Tidak DiSebutkan</option>
                </select>
                <label>Nomor Handphone</label>
                <small>note: wajib diisi</small>
                <input type="text" class="form-control" name="nomorhp" id="nomorhp" placeholder="Masukan Nomor Handphone...">
                @error('nomorhp')
                <div class="text-denger">{{$message}}</div>
                @enderror
                <label>Komentar</label>
                <textarea name="kategori" id="kategori" cols="10" rows="3" class="form-control"></textarea>
                @error('kategori')
                <div class="text-denger">{{$message}}</div>
                @enderror
                <button type="submit" class="btn btn-outline-primary float-right mt-3">Kirim Laporan</button>
            </form>
          </div>
        </div>
     </div>
</div>