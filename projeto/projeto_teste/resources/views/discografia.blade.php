<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Discografia</title>
</head>
<body>

    <div class="container mt-5 tabela-fundo">

            <div class="row bg-white">
                <div class="col-sm-9">
                    <img src="img\logo.png">
                </div>
                <div class="col-sm-3 mt-3">
                    <h2>Discografia</h2>
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-sm-6">
                    <input type="search" class="form-control" id="pesquisar" placeholder="Digite uma palavra chave...">
                </div>
                <div class="col-sm-3">
                    <button" onclick="searchData()" class="btn btn-primary">Pesquisar</button>
                </div>
                <div class="col-sm-3">
                    <a href="{{ route('discos-create') }}" class="btn btn-success">Nova Faixa</a>
                    <a href="{{ route('albuns-create') }}" class="btn btn-success">Novo Album</a>
                </div>
            </div>

            @foreach($albuns as $album)

            <div class="row mt-3">
                <div class="col-sm-9">
                    <h5 class="mt-3">Álbum: {{$album->Nome}}, {{$album->Ano}}</h5>
                </div>
                <div class="col-sm-3">
                    <form action="{{ route('albuns-destroy', ['id'=>$album->id]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Deletar Álbum</button>
                    </form> 
                </div>
            </div>
            
            <table class="table mt-2">
                <thead>
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Faixa</th>
                        <th scope="col">Duração</th>
                        <th scope="col">...</th>
                    </tr>
                </thead>
                <tbody id="tabela">

                    @foreach($album->discografia as $disco)

                    <tr>
                        <th>{{ $disco->numero }}</th>
                        <th>{{ $disco->faixa }}</th>
                        <th>{{ $disco->duracao }}</th>
                        <th>
                            <form action="{{ route('discos-destroy', ['id'=>$disco->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Deletar Faixa</button>
                            </form>
                        </th>
                    </tr>
                    @endforeach

                </tbody>
            </table>

            @endforeach

    </div>

</body>

<script>

    const INPUT_BUSCA = document.getElementById('pesquisar');
    const TABELA = document.getElementById('tabela');

    INPUT_BUSCA.addEventListener('keyup', () => {
        let expressao = INPUT_BUSCA.value.toLowerCase();
        
        let linhas = TABELA.getElementsByTagName('tr');

        for (let posicao in linhas) {

            if (true == isNaN(posicao)){
                continue;
            }

            let conteudoDaLinha = linhas[posicao].innerHTML.toLowerCase();

            if (true == conteudoDaLinha.includes(expressao)) {
                linhas[posicao].style.display = '';
            }   else {
                linhas[posicao].style.display = 'none';
            }

        }

    });

</script>

</html>
