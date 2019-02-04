{{-- extends layout homepage --}}
@extends('layouts.homepage')

@section('title')
@section('content')
    <div class="navbar navbar-light bg-light search fixed-top py-1 d-md-none border-bottom">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand">
                Apolbox
            </a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-link px-0 text-secondary" data-toggle="modal" data-target="#exampleModal">
                <i class="zmdi zmdi-search zmdi-hc-fw" style="font-size: 18pt;"></i>
            </button>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-xs-12 d-none d-md-inline">
                <ul class="navbar-nav position-fixed">
                    <li class="nav-item">
                        <a href="{{ url('profile/') . '/' . Auth::user()->firstname }}" class="nav-link">
                            <img width="32" height="30" class="rounded-circle" src="{{ asset('img/male.png') }}" alt="...">
                            {{ Auth::user()->firstname }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="zmdi zmdi-edit"></i>
                            Edit profil
                        </a>
                    </li>
                </ul>
            </div>
            {{-- Membuat area postingan --}}
            <div class="col-md-6 col-xs-12">
                <div class="collapse">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="card bg-white border rounded">
                    <div class="card-header p-0 border-0">
                    <ul class="nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <a href="#" class="nav-link active border-left-0 px-0 py-2 text-secondary">
                            <i class="zmdi zmdi-eyedropper zmdi-hc-fw"></i>
                            Status
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-0 py-2 text-secondary">
                            <i class="zmdi zmdi-code zmdi-hc-fw"></i>
                            Tutorial
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-0 py-2 text-secondary">
                            <i class="zmdi zmdi-store zmdi-hc-fw"></i>
                            Bisnis
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-0 py-2 text-secondary">
                            <i class="zmdi zmdi-case zmdi-hc-fw"></i>
                            Loker
                        </a>
                    </li>
                </ul>
                </div>
                <div class="card-body tab-content p-2">
                    <div class="">
                    <div class="tab-pane fade show active">
                        <form class="" action="{{ route('posting') }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="username" value="{{ Auth::user()->firstname }}">
                                <textarea name="postarea" class="form-control form-control-sm rounded-0 areapost" placeholder="Buat status anda..."></textarea>
                                <button type="submit" class="btn btn-sm btn-post btn-primary mt-2 px-3 py-1 pull-right rounded-0">
                                    Kirim
                                </button>
                        </form>
                    </div>
                    </div>
                </div>
                <div class="card-footer btn-group p-0">
                    <button type="button" class="btn btn-link text-secondary">
                        <i class="zmdi zmdi-image zmdi-hc-fw"></i>
                    </button>
                    <button type="button" class="btn btn-link text-secondary">
                        <i class="zmdi zmdi-pin-account zmdi-hc-fw"></i>
                    </button>
                    <button type="button" class="btn btn-link text-secondary">
                        <i class="zmdi zmdi-pin zmdi-hc-fw"></i>
                    </button>
                    <button type="button" class="btn btn-link text-secondary">
                        <i class="zmdi zmdi-lock zmdi-hc-fw"></i>
                    </button>
                </div>
                </div>
                <div class="">
                <a href="#" class="nav-link text-dark my-1 px-0 py-1">
                    <i class="zmdi zmdi-sort-amount-asc"></i>
                    <span class="sort-title">Terbaru</span>
                </a>
                @isset($area)
                    @foreach($area as $viewStatus)
                        <div class="card border my-2 px-1 py-1 bg-white">
                            <div class="card-body p-0">
                                <table>
                                    <tr>
                                        <td style="vertical-align: top;">
                                            <img width="32" class="img-responsive d-flex align-self-start mr-md-3" src="{{ url('img/male.png') }}" alt="">
                                        </td>
                                        <td class="col col-xs-6">
                                            <div>
                                                <a href="#" class="text-link">
                                                    {{ $viewStatus->username }}<br>
                                                </a>
                                                <span style="font-size: 11px;">{{ $viewStatus->created_at }}</span>
                                            </div>
                                            <p class="mt-2">
                                                {{ $viewStatus->isi }}
                                            </p>
                                        </td>
                                        <td class="dropdown" style="vertical-align: top;">
                                            <a href="#" class="text-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="zmdi zmdi-chevron-down zmdi-hc-fw zmdi-hc-lg" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right p-0">
                                                <a href="#" class="dropdown-item px-2 py-1">
                                                    Sunting kiriman
                                                </a>
                                                <a href="#" class="dropdown-item px-2 py-1">
                                                    Hapus kiriman
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="card-footer py-md-1 px-1 py-2 bg-white">
                                <ul class="nav nav-pills nav-justified p-0">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link p-0 text-secondary">
                                            <i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i>
                                            <span class="zmdi-title zmdi-like">Suka</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link p-0 text-secondary">
                                            <i class="zmdi zmdi-comment-outline zmdi-hc-fw"></i>
                                            <span class="zmdi-title">Komentar</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link p-0 text-secondary">
                                            <i class="zmdi zmdi-share zmdi-hc-fw"></i>
                                            <span class="zmdi-title">Bagikan</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog m-0 p-0 rounded-0" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-body p-0">
                    <form>
                        <div class="input-group">
                            <input type="search" class="form-control border-0" name="q" placeholder="Cari di Apolbox">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-light">
                                    <i class="zmdi zmdi-search zmdi-hc-fw zmdi-hc-lg"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="border-top px-2 py-2">
                        <i class="zmdi zmdi-search zmdi-hc-fw"></i>
                        Hasil pencarian
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- sidenav --}}
    <aside id="sidenav" class="px-2 bg-light collapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link text-secondary">
                    <img width="24" class="img-responsive rounded-circle" src="{{ asset('img/male.png') }}" alt="...">
                    {{ Auth::user()->firstname }}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="nav-link text-secondary">
                    <i class="zmdi zmdi-info zmdi-hc-fw zmdi-hc-lg"></i>
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
             </li>
        </ul>
    </aside>
    {{-- end sidenav--}}
@endsection
