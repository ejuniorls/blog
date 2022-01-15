@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}

                        <div class="list-group mt-3">
                            <a href="{{ route('blog.home') }}" class="list-group-item list-group-item-action">Blog - Home</a>
                            <a href="{{ route('blog.categories') }}" class="list-group-item list-group-item-action">Blog - Categories</a>
                            <a href="{{ route('blog.contact.form') }}" class="list-group-item list-group-item-action">Blog - Contato</a>
                            <a href="{{ route('blog.posts') }}" class="list-group-item list-group-item-action">Blog - Posts</a>
                            <a href="{{ route('blog.about') }}" class="list-group-item list-group-item-action">Blog - Sobre</a>
                            <a href="{{ route('blog.tags') }}" class="list-group-item list-group-item-action">Blog - Tags</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
