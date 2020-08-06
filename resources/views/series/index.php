<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Language" content="pt-br">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
</head>
<title>Lista todas as séries</title>
<body>
    <div class="class container">
        <div class="class jumbotron">
            <h1>Lista de Séries</h1>
        </div>
        <a href="#" class="btn btn-dark mb-2">Adicionar</a>
        <ul class="list-group">
            <?php foreach ($series as $serie) : ?>
                <li class="list-group-item"><?= $serie; ?></li>
            <?php endforeach; ?> 
        </ul>
    </div>
</body>
</html>