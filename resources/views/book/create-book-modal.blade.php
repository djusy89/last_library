<div class="container" align="center">
    <h2>Insert new book</h2>
    <!-- Button to Open the Modal -->
    <button type="button" id="modalCreateButton" class="btn btn-primary" data-toggle="modal" data-target="#myCreateModal">
        New Book
    </button>
    <!-- The Modal -->
    <div class="modal js_new_book_modal" id="myCreateModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Enter the book</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="/book" method="post" class="js_new_book_form">
                        @include('book.form')
                        <input type="submit" class="btn btn-primary js_submit_new_book" value="Submit">
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
