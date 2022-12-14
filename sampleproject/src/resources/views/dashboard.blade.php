<!DOCTYPE html>
<html>

<head>
    <title>Money Transfer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="{{ url('dashboard') }}">Money Transfer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sendmoney" class="btn btn-primary">send money</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/transactionlist" class="btn btn-primary">Transaction List</a>
                        </li>
                        <li class="nav-item">

                            <div class="container mt-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#myModal">
                                    Topup Wallet
                                </button>
                            </div>

                            <!-- The Modal -->
                            <div class="modal" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Top Up</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            {{-- Modal body.. --}}
                                            <form method="post" action="{{ url('/') }}/topup">
                                                @csrf
                                                <label class="text-inverse" for="validationCustom01">Amount:</label>
                                                <input type="text" name="amount" class="form-control" id="name"
                                                    placeholder="Enter Amount Here" required>

                                                {{-- <label class="text-inverse" for="validationCustom02">Company
                                                    Email:</label>
                                                <input type="text" class="form-control" name="company_email"
                                                    id="email" placeholder=" Enter Company Email" required> --}}
                                                <br>
                                                <button class="btn btn-primary" id="submit" type="submit">Top Up
                                                    Wallet</button>

                                            </form>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <a href="{{ url('/showwalletbalance') }}"> <button class="btn btn-success" id="submit">current
                                Wallet
                                balance</button> </a>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @auth

            <h3> welcome {{ Auth::user()->name }} </h3>

        @endauth

    </div>
    <br>

    @yield('content')

</body>

</html>
