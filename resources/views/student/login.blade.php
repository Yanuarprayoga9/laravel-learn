<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js', 'resources/css/app.scss'])

    <title>Document</title>
</head>

<body>
    <div class="container w-50 my-5">
        <h1 class="text-center">Login page</h1>
        @if (Session::has('status'))
                    <p class="text-danger ml-3">
                        {{ Session::get('status') }}
                    </p>
                         
                @endif
        <form action="" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email"
                    placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                @if (Session::has('message'))
                    <p class="text-danger ml-3">
                        {{ Session::get('message') }}
                    </p>
                         
                @endif
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password"
                    placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <input type="submit" value="login" class="d-block my-3 mx-auto btn btn-success">
    </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
