@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-danger text-light">Edit Pengunjung</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (count($errors) > 0)

                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    {{-- {{ __('You are logged in!') }} --}}

                    <form action="{{ route('pengunjung.update', $pengunjung->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                        </div>
                         <div class="form-group mt-3">
                            <label for="nama" class="mx-1">Nama :</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Item" name="nama" value="{{ $pengunjung->nama }}">
                        </div>
                         <div class="form-group  mt-2">
                            <label for="alamat" class="mx-1">Alamat :</label>
                        <input type="text" class="form-control " id="alamat" placeholder="Alamat" name="alamat" value="{{ $pengunjung->alamat }}">
                        </div>
                        
                        <div class="form-group mt-2">
                            <label for="ktp" class="mx-1">Nomor KTP :</label>

                            <input type="text" class="form-control" id="ktp" placeholder="No KTP" name="no_ktp" value="{{ $pengunjung->no_ktp }}">
                        </div>
                        <div class="form-group mt-2">
                            <label for="telp" class="mx-1">Nomor Telp :</label>
                            
                            <input type="text" class="form-control" id="telp" placeholder="No Telp" name="no_telp" value="{{ $pengunjung->no_telp }}">
                        </div>
                        <div class="form-group mt-3">
                            <input  type="submit" class="btn btn-sm btn-success" value="Submit">
                            <input type="reset" class="btn btn-sm btn-warning text-light">
                            <a href="/pengunjung" class="btn btn-sm btn-danger">Kembali</a>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
