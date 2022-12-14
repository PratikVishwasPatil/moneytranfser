@extends('dashboard')

@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <div class="container">
            <h3> your  wallet balance is:
                @foreach ($data as $cust)
                    {{-- <h1>hi
                        {{ $cust->customers_id }}
                    </h1> --}}
                    {{-- @if ($cust->customers_id = 'getUserStatusId()') --}}
                        {{ $cust->amount }}
                    {{-- @else --}}
                        {{-- Add Amount to wallet --}}
                    {{-- @endif --}}
                @endforeach
            </h3>
        </div>



    </body>

    </html>
@endsection
