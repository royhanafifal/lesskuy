<html>

<head>
    <title>LesSkuy Home</title>

    <link href="<?php echo base_url(); ?>css/home.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="wrapper">
        <div class="top-bar">
            <div class="logo">
                <img src="<?php echo base_url(); ?>images/logo lesskuy.png">
            </div>
            <div class="menu-bar">
                <ul>
                    <?php if( $this->session->masuk == true):  ?>
                        <li id="login">
                            <a href="" class="link"><?php echo $this->session->ses_nama?></a>
                        </li>
                        <li>
                        <a href="<?php echo site_url('login/logout');?>" class="link">LOG OUT</a>
                        </li>
                    <?php else:  ?>
                        <li id="login">
                            <a href="<?php echo site_url('welcome/login');?>" class="link">LOGIN</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('welcome/signup');?>" class="link">SIGN UP</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="content-text">
                <h1>CARI GURU LES, <br> GAK PERLU RIBET.
                </h1>
                <p>
                    Tempat cari guru les termudah dan termurah se-nusantara
                </p>
                <span>
                    <form action="<?php echo base_url('welcome/search')?>" action="GET">
                        <input name="cari" class="search" type="text" placeholder="Bingung pelajaran apa ?">
                    </form>
                </span>
            </div>
            <div class="content-banner">
            <img src="<?php echo base_url(); ?>images/banner.png">
            </div>
        </div>


    </div>

</body>

</html>