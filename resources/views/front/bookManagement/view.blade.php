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
    <h4 class="text-center">Book Mangement</h4>
    <div class="d-flex justify-content-between align-items-center">
      <h4 class="text-center">Records</h4>
      <a href="{{ url('/') }}" class="btn btn-success p-2">Back</a>
    </div>
    <table id="example" class="display p-5 " style="width:100%">
      <tbody>
        <tr>
          <th>#</th>
          <td>{{ $book->id }}</td>
        </tr>
        <tr>
          <th>Title:</th>
          <td>{{ $book->title }}</td>
        </tr>
        <tr>
          <th>Author:</th>
          <td>{{ $book->author }}</td>
        </tr>
        <tr>
          <th>Genre:</th>
          <td>{{ $book->genre }}</td>
        </tr>
        <tr>
          <th>Published Year:</th>
          <td>{{ $book->published_year }}</td>
        </tr>
      </tbody>
  </div>
  </table>


</body>

</html>
