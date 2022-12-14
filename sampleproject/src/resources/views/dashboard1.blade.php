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

    <div class="container">
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
    </div>
</body>

</html>
