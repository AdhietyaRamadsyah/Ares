@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-danger">
                        <h5 class="font-weight-bold">
                            Perhatian !!!
                        </h5>
                        <h5>Harap masukan data transaksi dengan benar.</h5>
                    </div>
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">No Nota</label>
                                    <input type="text" name="no_nota" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jenis Transaksi</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--Pilih Jenis Transaksi--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Biaya</label>
                                    <input type="text" name="biaya" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Bayar</label>
                                    <input type="text" name="bayar" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Pelanggan</label>
                                    <input type="text" name="pelanggan" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-info">Simpan Transaksi</button>
                                <a href="{{route('tampilkan-data.transaksi')}}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection