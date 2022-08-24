<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="d-flex justify-content-between">
        <div class="d-flex">
            <img src="./img/unnamed.webp" alt="google" class="ms_width_google">
            <span class="ms_accessories ms_color pt-3">Privacy e Termini</span>
        </div>
        <div class="ms_padding_left ms_margin">
            <i class="ms_color ms_padding_left bi bi-google-play"></i>
            <button class="ms_p_btn btn btn-primary">Accedi</button>
        </div>
    </div>
    <div class="ms_font ms_color ms_border_bottom pb-2">
        <?php
        $links = [
            '<span class="ms_margin_left">Introduzione</span>',
            '<span class="ms_padding_left">Norme sulla privacy</span>',
            'Termini di servizio',
            '<span class="ms_padding_left">Tecnologie</span>',
            'Domande frequenti'
        ];

        foreach ($links as $link) {
            echo $link . ' ';
        }
        ?>
    </div>
</body>

</html>