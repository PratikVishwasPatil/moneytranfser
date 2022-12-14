<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/adminp') }}">Admin Panel</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ url('registercustomer') }}">Registered Customers</a></li>
                    <li><a href="{{ url('customerdetails') }}">customer details</a></li>
                    <li><a href="{{ url('transactionlist1') }}">Transactions list</a></li>
                    <li><a href="{{ url('dashboard1') }}">Dashboard</a></li>

                    <li>
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <div class="container">
        @auth
            {{-- <span class="mr-2 d-none d-lg-inline text-gray-600 small"> --}}
            <h3> welcome {{ Auth::user()->name }} </h3>
            {{-- </span> --}}
        @endauth

    </div>

    {{-- <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Total transactions made</th>
                    <th>total amount of transaction Created</th>
                    <th>Total users registered</th>
                </tr>
            </thead>
            <tbody>
                @if (empty($data))
                    no data
                @else
                    @foreach ($data as $i)
                        <tr>
                            <td>{{ $i->transfers_count }}</td>
                            <td>{{ $i->customers_count }}</td>
                            <td>{{ $i->users_count }}</td>
                        </tr>
                    @endforeach
                @endif


            </tbody>
        </table>
    </div> --}}
</body>

</html>
