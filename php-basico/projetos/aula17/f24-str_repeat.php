<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>f24-str_repeat</title>
</head>
<body>
<div>
    <?php
        $str_rep_1 = str_repeat(">", 3);
        $str_rep_2 = str_repeat("ha", 3);
        $str_rep_3 = str_repeat("<", 3);
        print($str_rep_1);
        print($str_rep_2);
        print($str_rep_3);
        // >>>hahaha<<<
    ?>
</div>
</body>
</html>
