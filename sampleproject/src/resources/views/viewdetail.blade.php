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
        <div class="row">
            <div class="col-md-4">
                @foreach ($registers as $reg)
                    <label class="text-inverse" for="validationCustom01">sender name:</label>
                    <input type="text" name="name" class="form-control" value="{{ $reg->name }}" id="name"
                        placeholder="Enter Name Here" required>
                    <label class="text-inverse" for="validationCustom01">email id of receiver:</label>
                    {{-- @error('email')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror --}}
                    <input type="text" name="email" class="form-control" value="{{ $reg->email }}" id="email"
                        placeholder="Enter Email Here" required>
                    <label class="text-inverse" for="validationCustom01">Amount:</label>
                    <input type="text" name="amount" class="form-control" value="{{ $reg->amount }}" id="name"
                        placeholder="Enter Amount Here" required>
                @endforeach
            </div>
        </div>


    </div>
</body>

</html>
