<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <h2>User Registration Form</h2>
        <div class="text-right">
            <a href="{{ route('user.list') }}" class="btn btn-primary">User List</a>
        </div>
        <form method="POST" action="{{ route('user.store') }}">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter your name" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your phone"
                    name="phone">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your address"
                    name="address">
            </div>
            <button type="submit" class="btn btn-primary my-2">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
