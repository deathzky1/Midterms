<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="/css/app.css" rel="stylesheet">
    <title>Mathematical Calculator!</title>
</head>

<body>
<div class="bg">            
    <div class="container-fluid">
        <div class="card-con">
        <div class="row align-items-center">
            <div class="col-md-4 m-auto">
                <form action="calculation" method="POST">
                    @csrf
                    <div class="card border-dark ">
                        <div class="card-body m-auto">
                            <h4 class="text-center">Fill up the text</h4>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <input type="number" name="firstnumber" class="form-control" placeholder="Enter first Number" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <input type="number" name="secondnumber" class="form-control" placeholder="Enter second number" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-9">
                                    <input type="number" name="thirdnumber" class="form-control" placeholder="Enter third number" required="">
                                </div>
                            </div>

                             <div class="form-group row">
                                <div class="col-md-9">
                                    <select name="formula" class="form-control">
                                        <o  ption>Select Formula</option>
                                        <option value="perimeter">Perimeter of rectangle</option>
                                        <option value="volume">Volume of Cuboid</option>
                                        <option value="area">Area of a square</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="btn-con">
                        <input type="submit" name="btn" class="btn btn-primary btn-lg font-weight-bold" value="Enter">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>

    <div class="container">
    <div class="answer">
        <div class="row">
            <div class="col-md-3 m-auto">
                @if(session('message'))
                <div class="alert alert-warning">
                    <h1 class="text-center"> {{session ('message')}}</h1>
                </div>
                @endif
            </div>
        </div>
    </div>
</div><!--Container Second-->
</div><!--Container First-->



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>