<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form action="{{ url('/register') }}" method="POST">
        @csrf
        <div class="container">
            <h1 class="text-center">Registraition</h1>
    
            <x-form-input type="text" name="name" label="Please enter your name"></x-form-input>
            <x-form-input type="email" name="email" label="Please enter your "></x-form-input>
            <x-form-input type="password" name="password" label="Password"></x-form-input>
            <x-form-input type="password" name="confirmed_password" label="Confirmed_password"></x-form-input>
  
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

</html>