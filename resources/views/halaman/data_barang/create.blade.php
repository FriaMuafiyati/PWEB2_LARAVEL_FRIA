@extends('layouts.master')
@section('title', 'Tambah Barang')

@section('content')


    <div class="container">
        <div class="col-md-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4" style="text-align: center;">Tambah Barang</h3>


                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4"></h6>
                    <form class="row g-2" action="tambah" method="POST">
                        @csrf

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                        </div>

                        <div class="mb-3">
                            <label for="satuan" class="form-label">Satuan</label>
                            <input type="text" class="form-control" id="satuan" name="satuan" required>
                        </div>

                        <div class="kembali">
                            <a href="{{ route('halaman.data_barang.index') }}"><button type="button"
                                    class="btn btn-secondary ">Kembali</button></a>
                                    <button type="submit" name="submit" class="col-md-1 btn btn-primary" id="btn-tambah"><i
                                            class="fas fa-save">&nbsp;</i>Save</button>
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>



@endsection
