<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Novo Album</title>
</head>
<body>
    <!-- <img src="img\background.png" class="img-fluid" alt="Responsive image"> -->

    <div class="container mt-5">
        <div class="row bg-light">
            <div class="col-sm-9">
                <img src="img\logo.png">
            </div>
            <div class="col-sm-3 mt-3">
                <h4>Adicionar novo album</h4>
            </div>
        </div>
        <form action="{{ route('albuns-store') }}" method="POST">
            @csrf
            <div class="form-group mt-4">
                <div class="form-group">
                    <label for="nome">Nome do Album:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome do album....">
                </div>
                <div class="form-group">
                    <label for="ano">Ano:</label>
                    <input type="text" class="form-control" name="ano" placeholder="Ano do album....">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="submit">
                </div>
            </div>
    </div>


</body>
</html>