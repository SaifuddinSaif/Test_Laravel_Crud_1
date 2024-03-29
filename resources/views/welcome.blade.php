<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Create Category</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h1>Create Category</h1>
            <form action="{{ route('categories.store')}}" method="post">
              @csrf
                <div class="form-group">
                    <lable for="name">caterory name</lable>
                    <input type="text" class="form-control" id="name" name="name" placeholder="category name">
                </div>
                <div class="form-group">
                    <lable for="name">caterory discription</lable>
                    <input type="text" class="form-control" id="description" name="description" placeholder="caterory discription">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success inline-block" value="submit">
                </div>
            </form>
            </div>
        </div>
    </div>
    

   
  </body>
</html>