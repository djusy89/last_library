@extends('layouts.main')
@section('content')
    <nav class="navbar navbar-expand navbar-light bg-light">
        <a href="{{ \Illuminate\Support\Facades\URL::current() }}" class="navbar-brand">Books</a>
        <a href="#" class="navbar-brand">Genre</a>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <h3 class="display-4">Search Books</h3>
                <form action="/books" method="get">
                    @csrf
                    <div class="input-group">
                        <input type="search" name="search" class="form-control" placeholder="Search book">
                        <div class="input-group-append">
                            <button type="submit" name="subBtn" class="btn btn-info">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('book.create-book-modal')
    @include('book.search-result')
