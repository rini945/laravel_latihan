@extends('navbar')

@section('content')
    <h1>HALAMAN BLOG</h1>

    <article>
        <a href="/artikel1"><h3>Artikel 1</h3></a>
        <p>Disini membahas cara membuat dan mengisi tabel di laravel</p>
    </article>

    <article>
        <a href="/artikel2"><h3>Artikel 2</h3></a>
        <p>Disini membahas cara menampilkan data dari database agar bisa muncul</p>
    </article>

@endsection