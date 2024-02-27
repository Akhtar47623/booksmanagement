<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome (optional) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Summernote CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">

</head>

<body>
  <div class="container border mt-5 p-5">
    <div class="d-flex justify-content-between align-items-center">
      <h4 class="text-center">Book Management</h4>
      <a href="{{ route('create.book') }}" class="btn btn-success p-2">Add New</a>
    </div>
    <table id="example" class="display p-5 " style="width:100%">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Author</th>
          <th>Genre</th>
          <th>Published Year</th>
          <th colspan="3">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($books as $key => $book)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td> {{ $book->title }}</td>
            <td> {{ $book->author }}</td>
            <td>{{ $book->genre }}</td>
            <td>{{ $book->published_year }}</td>
            <td><a href="{{ route('show.book', $book->id) }}" class="text-info"><i class="fas fa-eye"></i></a></td>
            <td><a href="{{ route('edit.book', $book->id) }}" class="text-primary"><i class="fas fa-edit"></i></a></td>
            <td><a href="{{ route('delete.book', $book->id) }}" class="text-danger"><i class="fas fa-trash"></i></a>
            </td>

            </td>

          </tr>
        @endforeach
      </tbody>
  </div>
  </table>


</body>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
<script>
  new DataTable('#example');
</script>
<script>
  $(document).ready(function() {
    // Check if there is a success message from the server
    var successMessage = '{{ session('success') }}';
    if (successMessage) {
      // Display the success message using jQuery Toast
      $.toast({
        text: successMessage,
        position: 'top-right',
        icon: 'success',
        loader: false,
        loaderBg: '#fff',
        showHideTransition: 'slide',
        hideAfter: 5000 // duration in milliseconds
      });
    }
    var successMessage = '{{ session('error') }}';
    if (successMessage) {
      $.toast({
        text: '{{ session('error') }}',
        position: 'top-right',
        icon: 'error',
        loader: false,
        loaderBg: '#fff',
        showHideTransition: 'slide',
        hideAfter: 5000 // duration in milliseconds
      });
    }
  });
</script>


</html>
