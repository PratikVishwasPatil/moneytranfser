@extends('dashboard')

@section('content')
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    </head>

    <body>

        <div class="container">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th>send amount from</th>
                        <th>receivers email</th>
                        <th>date of transation</th>
                        <th>amount to send</th>
                        <th>transation id</th>
                    </tr>
                </thead>
                <tbody>   
                    @foreach ($data as $trans)
                        {{-- @if ($trans->transaction_id == 'getUserStatusId()') --}}
                            <tr>
                                <td>{{ $trans->name }}</td>
                                <td>{{ $trans->email }}</td>
                                <td>{{ $trans->created_at }}</td>
                                <td>{{ $trans->amount }}</td>
                                <td>{{ $trans->transaction_id }}</td>
                            </tr>
                        {{-- @else
                            Empty Transaction list
                        @endif --}}
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>

    <script>
        var table = $('#myTable').DataTable({

        });

        // var table = $('#myTable2').DataTable({

        // });
    </script>

    </html>
@endsection
