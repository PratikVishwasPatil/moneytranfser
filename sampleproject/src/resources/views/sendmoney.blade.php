<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Send Money
        </button>
    </div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Send Money</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" action="{{ url('/') }}/sendmoneyto">
                        @csrf
                        <label class="text-inverse" for="validationCustom01">sender name:</label>
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Enter Name Here" required>
                        <label class="text-inverse" for="validationCustom01">email id of receiver:</label>
                        {{-- @error('email')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror --}}
                        <input type="text" name="email" class="form-control" id="email"
                            placeholder="Enter Email Here" required>
                        <label class="text-inverse" for="validationCustom01">Amount:</label>
                        <input type="text" name="amount" class="form-control" id="name"
                            placeholder="Enter Amount Here" required>
                        <br>
                        <button class="btn btn-primary" id="submit" type="submit">Submit</button>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        @error('email')
            <span class="text-danger error">{{ $message }}</span>
        @enderror
    </div>


</body>

</html>
