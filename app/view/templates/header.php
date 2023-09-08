<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
        <title>Halaman
            <?= $data['judul']; ?>
        </title>
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/css/bootstrap.min.css">
        <style>
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: 'Patua One', cursive;
            }

            body {
                overflow-x: hidden;
            }

            .main-width {
                width: 1400px;
                max-width: 100%;
                margin: 0 auto;
            }

            .hero {
                margin: 0 auto;
                width: 100%;
                background: radial-gradient(#838383, 20%, #3f3f3f);
                padding-bottom: 2px;
            }

            .hero header .logo h2 a {
                margin-left: 100px;
                display: block;
                font-size: 32px;
                font-weight: 600;
                text-decoration: none;
                color: white;
            }

            .hero header {

                border-bottom: 2px solid rgba(255, 255, 255, .2);
                width: 100%;
                z-index: 100;
                position: fixed;
                background-color: #3f3f3f;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 10px 0 5px;
            }

            nav ul li {

                list-style: none;
                display: inline-block;
            }

            nav ul li a {
                display: inline-block;
                text-decoration: none;
                color: white;
                margin-left: 15px;
                font-size: 11px;
                font-weight: 100;
                border-bottom: 2px solid transparent;
                transition: .7s;
            }

            nav ul li:not(:last-child) a:hover,
            nav ul li:not(:last-child) a:focus {
                color: white;
                border-bottom: 2px solid white;
                transform: scale(.9);
                transition: .2s;
            }

            nav ul li.active a {
                display: inline-block;
                border-bottom: 2px solid white;
            }

            nav ul li.active:hover a {
                transform: scale(.9);
                border-bottom: 2px solid transparent;
                color: white;
                transition: .2s;
            }

            nav ul li.btn a {

                background: transparent;
                color: white;
                border: 1px solid #fff;
                padding: 5px 20px;
                border-radius: 30px;
                line-height: 1.4;
                font-size: 12px;
                margin-left: 2 0px;
            }

            nav ul li.btn:hover a {
                transform: scale(1.09);
                border: 1px solid white;
                color: black;
                background: white;
                transition: .4s;
            }

            .content {

                padding-top: 190px;

            }

            .content .main-text {
                left: 15%;
                position: relative;
                z-index: 2;
                max-width: 100%;
                width: 895px;
                color: white;
                line-height: 1.8;
                font-size: 15px;
            }

            .content .main-text a {
                display: inline-block;
                text-decoration: none;
                color: black;
                background: white;
                border: 1px solid white;
                padding: 9px 25px;
                line-height: 1.4;
                border-radius: 30px;
            }

            .content .main-text a:hover {
                transform: scale(1.09);
                border: 1px solid #fff;
                background: transparent;
                color: white;
                transition: .4s;
            }



            .image {
                position: absolute;
                width: 100%;
                bottom: 0;
                right: 0;
                text-align: right;
                color: #3f3f3f;
            }


        </style>

    <body>

        <section class="hero">

            <div class="main-width">
                <header>

                    <div class="logo">
                        <h2><a href="http://">Nan'skuy</a></h2>
                    </div>

                    <nav>
                        <ul>
                            <li class="active"><a href="<?= BASE_URL; ?>/home">Home</a></li>
                            <li><a href="<?= BASE_URL; ?>/keahlian">Kompetensi Keahlian</a></li>
                            <li><a href="<?= BASE_URL; ?>/guru">Data Guru</a></li>
                            <li><a href="<?= BASE_URL; ?>/siswa">Data Siswa</a></li>
                            <li style="margin-right: 100px;" class="btn"><a href="<?= BASE_URL; ?>/user">About</a></li>
                        </ul>
                    </nav>

                </header>