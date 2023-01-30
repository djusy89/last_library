@extends('layouts.main')
{{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".show-info">Large modal</button>--}}

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myShowModal{{ $book->id }}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div align="center">
                <h1>Book Details</h1>
                <div class="card" style="width: 30rem;">
                    <div class="card-header">
                        <h4 class="card-title">Title: {{ $book->title }}</h4>
                        <p class="card-text"><strong>About:</strong> <br>{{ $book->info }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Author: {{ $book->author }}</li>
                        <li class="list-group-item">Genre: {{ $book->genre->name }}</li>
                        <li class="list-group-item">Date written: {{ $book->date_written }}</li>
                        <li class="list-group-item">Publisher: {{ $book->publisher }}</li>
                    </ul>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
