<input type="hidden" value="{{$book->id}}" name="id">
<div class="form-group">
    <label for="tit">Title:</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ?? $book->title }}">
    <p style="color: red;"> @error('title') {{ $message }} @enderror </p>
</div>
<div class="form-group">
    <label for="aut">Author:</label>
    <input type="text" class="form-control" id="author" name="author" value="{{ old('author') ?? $book->author }}">
    @error('author') {{ $message }} @enderror
</div>
<div class="form-group">
    <label for="gen">Select genre:</label>
    <select class="form-control" id="genre_id" name="genre_id">
        <option value="">Select genre</option>
        @foreach($genres as $genre)
            @if($book->genre_id == null)
                <option value="{{ $genre->id }}" {{ old('genre_id') == $genre->id ? 'selected' : '' }}>{{ $genre->name }}</option>
            @elseif($book->genre_id !== null)
                <option value="{{ $genre->id }}" {{ $book->genre_id == $genre->id ? 'selected' : '' }}>{{ $genre->name }}</option>
            @endif
        @endforeach
    </select>
    @error('genre_id') {{ $message }} @enderror
</div>
<div class="form-group">
    <label for="dtw">Date written:</label>
    <input type="date" class="form-control" id="date_written" name="date_written" value="{{ old('date_written') ?? $book->date_written }}">
    @error('date_written') {{ $message }} @enderror
</div>
<div class="form-group">
    <label for="pub">Publisher:</label>
    <input type="text" class="form-control" id="publisher" name="publisher" value="{{ old('publisher') ?? $book->publisher}}">
    @error('publisher') {{ $message }} @enderror
</div>
<div class="form-group">
    <label for="binf">About the book:</label>
    <textarea name="info" class="form-control" rows="5" cols="10">{{ old('info') ?? $book->info }}</textarea>
    @error('info') {{ $message }} @enderror
</div>
@csrf
