@extends('layout')

@section('content')
<h1>Selamat Datang, {{ Auth::user()->name }}</h1>
<img src="{{ Auth::user()->profile_photo }}" alt="Foto Profil">
<p>Kelas: {{ Auth::user()->kelas }}</p>
<p>Mata Kuliah: Pemrograman Berbasis Website</p>
@endsection
