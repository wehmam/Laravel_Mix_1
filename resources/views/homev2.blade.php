@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <div class="text-center">
                        <h1>Data Buku Perpustakaan</h1>
                        <p>Daftar Buku</p>
                        <router-link to="/" class="btn btn-primary mb-3">Home</router-link>
                        <router-link to="/create" class="btn btn-success mb-3">Create</router-link>

                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 