@extends('layouts.master')
@section('title', 'Data Barang')

@section('content')


    <div class="container">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4" style="text-align: center;">Data Barang</h3>

                @if(Auth::user()->role_id !=0)
                <div class="tambah_data">
                    <a href="{{ route('halaman.data_barang.create') }}"><button type="button"
                            class="btn btn-primary  m-2">Tambah
                            Barang</button></a>
                </div>
                    @else
                    
                    @endif
                    
                
                {{-- <div class="tambah_data">
                    <a href="{{ route('halaman.data_barang.create') }}"><button type="button"
                            class="btn btn-primary  m-2">Tambah
                            Barang</button></a>
                </div> --}}

                <div class="table-responsive">
                    <table class="thead-dark table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Satuan</th>
                                {{-- untuk midleware --}}
                                @if(Auth::user()->role_id !=0)
                                <th scope="col">Pilihan</th>
            @else
            
            @endif
                               

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barangs as $barang)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $barang->nama }}</td>
                                    <td>{{ $barang->jumlah }}</td>
                                    <td>{{ $barang->satuan }}</td>

                                    {{-- @if (auth()->users()->role_id == '1') --}}
                                    <td>
                                        @if(Auth::user()->role_id !=0)
                                        <a href="{{ route('halaman.data_barang.edit', $barang->id) }}"
                                            class="btn btn-primary"><i class="fas fa-edit"></i>
                                            Edit</a>
                    @else
                    
                    @endif
                                            
                                        

                                        <form action="barang/{{ $barang->id }}"
                                            onsubmit="return confirm('Yakin Anda Ingin Menghapus Data Ini?')"
                                            class="d-inline" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            @if(Auth::user()->role_id !=0)
                                            <button class="btn btn-danger" type="submit" name='submit'>Delete</button>
                    @else
                    
                    @endif
                                            
                                        </form>
                                </tr>
                                {{-- @else --}}
                                {{-- @endif --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
