<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>



<div class="container">
    <h1>Cupcakes World
        <small class="text-muted">Pick your cupcake</small>
    </h1>
    <div class="row">
        @foreach($cupcakes as $cupcake)
        <div class="col-md-4">
            <div class="card">
                <a href="detail_{{$postfix}}.php?id={{$cupcake['IdCupcake']}}">
                    <img src="img/{{$cupcake['Image']}}" class="card-img-top" alt="{{$cupcake['Image']}}">
                </a>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <h5 class="card-title">{{$cupcake['Name']}}</h5>
                        </div>
                        <div class="col-md-5 text-right">
                            <p class="card-text">Price ${{$cupcake['Price']}}</p>
                        </div>
                    </div>
                    <a href="detail_{{$postfix}}.php?id={{$cupcake['IdCupcake']}}" class="btn btn-primary">Eat Me</a>
                </div>
            </div>
            <br>
        </div>
        
        @endforeach()
          
    </div>
</div>
</body>
</html>