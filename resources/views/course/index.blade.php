<!-- {{-- MENAMPILKAN TAMPILAN YANG ADA DI FOLDER LAYOUTS --}} -->
@extends('layouts.app')

<!-- {{-- UNTUK MENAMPILKAN DATA SETELAH TAMPILAN HEADING--}} -->
@section('content')

<!-- {{-- UNTUK MENAMPILKAN FORM UNTUK PENJUALAN --}} -->
<table class="table mt-3">
  <thead>
    <tr>
      <th> No </th>
      <th> Nama Matakuliah </th>
    </tr>
  </thead>

  <tbody>
    @foreach ($courses as $course)
    <tr>
      <td>{{ $loop->iteration}}</td>
      <td>{{ $course->course_name}}</td>
    </tr>
        
    @endforeach
  </tbody>
</table>
@endsection
