<div class="container" align="left">
    <!-- Button to Open the Modal -->
    <button type="button" id="modalEditButton" class="btn btn-success" data-toggle="modal" data-target="#myEditModal{{ $book->id }}">
        Edit Book
    </button>

    <!-- The Modal -->
    <div class="modal js_edit_book_modal" id="myEditModal{{ $book->id }}">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit book</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="/books/edit/{{ $book->id }}" method="post" class="js_edit_book_form">
                        @method('PATCH')
                        @include('book.form')
                        <input type="submit" class="btn btn-primary js_submit_edit_book" value="Submit">
                    </form>

                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>
