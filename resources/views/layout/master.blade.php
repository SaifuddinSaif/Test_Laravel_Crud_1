<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('title') ::blog app</title>
  </head>
  <body>

 <div class="container">
      @yield('content')
        <div class="row">
            <div class="col-md-6">
            <h1>Create Category</h1>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Category Description</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
</div>
  </body>
</html> 