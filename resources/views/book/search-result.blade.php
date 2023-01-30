<div class="container">
    @if ($errors->any())
        <script>
            $('#myEditModal').modal("show");
        </script>
    @endif
    <h2>BOOKS</h2><hr>
    <table class="table table-striped js_books_table">
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Date written</th>
                <th>Publisher</th>
                <th>Edit Book</th>
                <th>Delete Book</th>
            </tr>
        </thead>
        <tbody>
        @if(empty($message))
        @foreach($books as $book)
            <tr>
                <td><button type="button" class="btn btn-link" data-toggle="modal" data-target="#myShowModal{{ $book->id }}">{{ $book->title }}</button></td>
{{--                <td role="button" data-bs-target=".show-info" data-bs-toggle="modal{{$book->id}}" data-href="{{route('book.show', $book->id)}}">{{ $book->title }}</td>--}}
                <td>{{ $book->author }}</td>
                <td>{{ $book->genre->name }}</td>
                <td>{{ $book->date_written }}</td>
                <td>{{ $book->publisher }}</td>
                <td>@include('book.edit-book-modal', [$book])</td>
                <td>
                    <form action="/books/{{ $book->id }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    @include('book.show')
                </td>
            <tr>
        @endforeach
        @else
            <tr>
                <td colspan="7"><h2 style="color: red" align="center" >{{ $message }}</h2></td>
            </tr>
        @endif
        </tbody>
        <tfoot>
            <tr>
                <td>{{ $books->links() }}</td>
                <td></td>
            </tr>
        </tfoot>
    </table>
    <div>
    </div>
</div>
