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

    <div class="container">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <h1 class="heading">Customer Data </h1>
        <table class="table table-bordered blue-border">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Dob</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>
                            @if ($customer->gender == 'M')
                                Male
                            @elseif($customer->gender == 'F')
                                Female
                            @else
                                Other
                            @endif
                        </td>
                        <td>{{ $customer->dob }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->city }}</td>
                        <td>{{ $customer->state }}</td>

                        <td>
                            <a href="{{ route('customer.delete', ['id' => $customer->customer_id]) }}"><button
                                    class="btn btn-danger">Delete</button></a>
                            <a href="{{ route('customer.edit', ['id' => $customer->customer_id]) }}"><button
                                    class="btn btn-success">Edit</button></a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
        <a href="{{ route('customer.index') }}" class="btn btn-primary">Create Customer</a>

    </div>

</body>

</html>