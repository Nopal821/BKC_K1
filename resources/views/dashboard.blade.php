<!-- resources/views/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Konseling
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Riwayat Konseling
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Profil
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button class="btn btn-sm btn-outline-secondary">Action</button>
                            <button class="btn btn-sm btn-outline-secondary">Action</button>
                        </div>
                    <div class="card-body">
                        <p>Selamat datang, {{ Auth::user()->name }}!</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Selamat datang, {{ Auth::user()->name }}!</div>

                            <div class="card-body">
                                <p>Anda login sebagai pengguna.</p>
                                <p>Ini adalah halaman dashboard untuk pengguna.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
    