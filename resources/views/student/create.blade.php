@extends('layouts.app')

@section('content')
    <div class="col-md-8 offset-md-2">
        <h3> Tambah Mahasiswa</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all as $error)
                        <li> {{ $error }}</li>
                    @endforeach
                </ul>
            </div> <br />
        @endif

        <form method="post" action="/student">
            @csrf
            <div class="form-group">
                <label for="code"> NRP </label>
                <input type="text" class="form-control" name="code">
            </div>

            <div class="form-group">
                <label for="name"> Nama </label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="gender"> Jenis Kelamin </label>
                <input type="radio" class="form-control-inline" name="gender" value="P"> Pria
                <input type="radio" class="form-control-inline" name="gender" value="W"> Wanita
            </div>
            <div class="form-group">
                <label for="birth_place"> Tempat Lahir </label>
                <input type="text" class="form-control" name="birth_place">
            </div>
            <div class="form-group">
                <label for="birth_date"> Tanggil Lahir </label>
                <input type="date" class="form-control" name="birth_date">
            </div>
            <div class="form-group">
                <label for="faculty"> Program Studi </label>
                <select name="faculty_id" class="form-control">
                    <option value="">== Pilih Fakultas ==</option>
                @foreach ($faculties as $id => $name)
                    <option value="{{ $id }}"> {{ $name }} </option>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary"> Simpan </button>
        </form>
    </div>
@endsection
