<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>CRUD Operation</title>
</head>
<body>
    <div class="container" mt-5>
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="POST">
                    @csrf
                <div class="mb-3">
                    <label for="name " class="form-level">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="city " class="form-level">City</label>
                    <input type="text" class="form-control" id="city" name="city">
                </div>
                <div class="mb-3">
                    <label for="marks " class="form-level">Marks</label>
                    <input type="number" class="form-control" id="marks" name="marks">
                </div>
                <button type="submit" class=" btn btn-primary">SUBMIT</button>
                </form>
                @if(session()->has('status'))
                <div class="alert- alert-success">
                    {{ session('status') }}
                </div>
                @endif

            </div>
            <div class="col-sm-6">
                <table class= "table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">City</th>
                            <th scope="col">Marks</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $s)
                        <tr>
                            <th>{{ $s->id }}</th>
                            <th>{{ $s->name }}</th>
                            <th>{{ $s->city }}</th>
                            <th>{{ $s->marks }}</th>
                            <td>
                                <a href="{{ url('/edit', $s->id) }}" class="btn btn-info btn-sm">EDIT</a>
                                <a href="{{ url ('/delete', $s->id) }}" class="btn btn-danger btn-sm">DELETE</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>
