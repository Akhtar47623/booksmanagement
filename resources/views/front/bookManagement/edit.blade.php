<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome (optional) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <!-- Summernote CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">

</head>

<body>
  <div class="container p-2">
    <h4 class="text-center">Book Mangement</h4>
    <form method="POST" action="{{ route('update.book', $book->id) }}">
      @csrf
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" value="{{ $book->title }}" id="title" name="title">
        @error('title')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="author">Author:</label>
        <input type="text" class="form-control" value="{{ $book->author }}" id="author" name="author">
        @error('author')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="published_year">Published Year:</label>
        <input type="number" class="form-control" id="published_year" value="{{ $book->published_year }}"
          name="published_year">
        @error('published_year')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="genre">Genre:</label>
        <textarea class="form-control summernote" rows="5" id="genre" name="genre">{{ $book->genre }}</textarea>
        @error('genre')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-success">Update</button>
    </form>

  </div>


</body>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<script>
  $(document).ready(function() {
    $('.summernote').summernote({
      height: 200 // Specify the height of the editor
    });
  });
</script>

</html>
