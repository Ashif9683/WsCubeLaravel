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
    <link rel="stylesheet" href="{{ asset('css/customer.css') }}">

</head>

<body>
    @include('layouts.navbar')

    <form action="{{$url}}" method="POST">
        @csrf
        <div class="container">
            @if (session('status'))
                <div class="alert alert-success mt-3">
                    {{ session('status') }}
                </div>
            @endif
            <h1 class="text-center heading">{{$title}}</h1>
            <div class="row">
                <div class="col-6 form-group">
                    <label class="label" class="label" for="">Name</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId"
                        value="{{ isset($customer) ? $customer->name : old('name') }}" />
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-6 form-group">
                    <label class="label" class="label" for="">Email</label>
                    <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId"
                        value="{{ isset($customer) ? $customer->email : old('name') }}" />
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            @if(!isset($customer))
                <div class="row">
                    <div class="col-6 form-group">
                        <label class="label" class="label" for="">Password</label>
                        <input type="password" name="password" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-6 form-group">
                        <label class="label" for="">Confirm Password</label>
                        <input type="password" name="confirmed_password" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                        <span class="text-danger">
                            @error('confirmed_password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-6 form-group">
                    <label class="label" for="">City</label>
                    <input type="text" name="city" id="" class="form-control" placeholder="" aria-describedby="helpId"
                        value="{{ isset($customer) ? $customer->city : old('city') }}" />
                    <span class="text-danger">
                        @error('city')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-6 form-group">
                    <label class="label" for="">State</label>
                    <input type="text" name="state" id="" class="form-control" placeholder="" aria-describedby="helpId"
                        value="{{ isset($customer) ? $customer->state : old('state') }}" />
                    <span class="text-danger">
                        @error('state')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label class="label" for="">Address</label>
                <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId"
                    value="{{ isset($customer) ? $customer->address : old('address') }}" />
                <span class="text-danger">
                    @error('address')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <label class="label" for="">Gender</label><br>
                    <input type="radio" name="gender" value="M" {{ (isset($customer) && $customer->gender == 'M') || old('gender') == 'M' ? 'checked' : '' }}> Male

                    <input type="radio" name="gender" value="F" {{ (isset($customer) && $customer->gender == 'F') || old('gender') == 'F' ? 'checked' : '' }}> Female

                    <input type="radio" name="gender" value="O" {{ (isset($customer) && $customer->gender == 'O') || old('gender') == 'O' ? 'checked' : '' }}> Other
                    <span class="text-danger">
                        @error('gender') {{ $message }} @enderror
                    </span>
                </div>
                <div class="col-6 form-group">
                    <label class="label" class="label" for="">Date of birth</label>
                    <input type="date" name="dob" id="" class="form-control" placeholder="" aria-describedby="helpId"
                        max="{{ \Carbon\Carbon::today()->toDateString() }}"
                        value="{{isset($customer) ? $customer->dob : old('dob') }}" />
                    <span class="text-danger">
                        @error('dob')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

</html>