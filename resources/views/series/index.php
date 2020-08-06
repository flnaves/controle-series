<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Language" content="pt-br">
</head>
<title>Lista todas as séries</title>
<body>
    <ul>
        <?php foreach ($series as $serie) : ?>
            <li><?= $serie; ?></li>
        <?php endforeach; ?> 
    </ul>
    
</body>
</html>