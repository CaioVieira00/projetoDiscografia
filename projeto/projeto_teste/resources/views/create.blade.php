<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Nova Faixa</title>
</head>
<body>
    <!-- <img src="img\background.png" class="img-fluid" alt="Responsive image"> -->

    <div class="container mt-5">
        <div class="row bg-light">
            <div class="col-sm-9">
                <img src="img\logo.png">
            </div>
            <div class="col-sm-3">
                <h4>Adicionar nova faixa</h4>
            </div>
        </div>
        <form action="{{ route('discos-store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label" for="album_id">Album:</label>
                    <select class="form-control" name="album_id" id="album_id">
                        @foreach($albuns as $album)
                            <option value="{{ $album->id }}">
                                {{ $album->Nome }}
                            </option>
                        @endforeach
                    </select>
            </div>
            <div class="form-group">
                <label for="numero">Numero:</label>
                <input type="text" class="form-control" name="numero" placeholder="Nome da faixa....">
            </div>
            <div class="form-group">
                <label for="faixa">Faixa:</label>
                <input type="text" class="form-control" name="faixa" placeholder="Nome da faixa....">
            </div>
            <div class="form-group">
                <label for="duracao">Duração:</label>
                <input type="text" class="form-control" name="duracao" placeholder="Duração da musica....">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit">
            </div>
        </form> 
    </div>


</body>
</html>