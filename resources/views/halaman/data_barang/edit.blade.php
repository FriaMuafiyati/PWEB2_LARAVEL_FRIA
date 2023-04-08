@extends('layouts.master')
@section('title', 'Edit Barang')

@section('content')


    <div class="container">
        <div class="col-md-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4" style="text-align: center;">Ubah Barang</h3>


                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4"></h6>
                    <form class="row g-2" action="/data_barang/{{ $barangs->id }}" method="post">
                        @method('PUT')
                        @csrf

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ $barangs->nama }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jumlah" class="form-label">jumlah</label>
                                <input type="text" class="form-control" id="jumlah" name="jumlah"
                                    value="{{ $barangs->jumlah }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="satuan" class="form-label">Satuan</label>
                                <input type="text" class="form-control" id="satuan" name="satuan"
                                    value="{{ $barangs->satuan }}">
                            </div>
                        </div>

                        <div><button type="submit" name="submit" class="col-md-1 btn btn-primary" id="btn-tambah"><i
                            class="fas fa-save">&nbsp;</i>Save</button>
                    </div>
                    </form>
                </div>


            </div>
        </div>
    </div>



@endsection
