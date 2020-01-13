<html>

<head>
    <title>LesSkuy Content</title>

    <link href="<?php echo base_url(); ?>content.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>content2.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


</head>

<body>
    <div class="wrapper">
        <div class="top-bar">
            <div class="logo">
                <a href="<?php echo site_url('welcome');?>"> <img src="<?php echo base_url(); ?>images/logo lesskuy.png"></a>
            </div>
            <div class="search-box">
                <div class="input-search">
                    <form action="<?php echo base_url('welcome/search')?>" action="GET">    
                        <input class="input" type="text" name="cari" placeholder="Bingung pelajaran apa ?">
                    </form>
                </div>
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
            <div class="content-left">
                <div class="filter">
                    <div class="">
                        <form method="" action="">
                            <div class="filter-content">
                                <h6 class=" title-filter ">Lokasi</h6>
                                <div class="filter-pilihan">
                                    <a class="link" href="<?php echo base_url('welcome/search?cari=malang')?>">Malang<br></a>
                                    <a class="link" href="<?php echo base_url('welcome/search?cari=surabaya')?>">Surabaya<br></a>
                                    <a class="link" href="<?php echo base_url('welcome/search?cari=surakarta')?>">Surakarta<br></a>
                                    <a class="link" href="<?php echo base_url('welcome/search?cari=semarang')?>">Semarang<br></a>
                                    <a class="link" href="<?php echo base_url('welcome/search?cari=jakarta')?>">Jakarta<br></a>
                                    <a class="link" href="<?php echo base_url('welcome/search?cari=bandung')?>">Bandung</a>
                                </div>

                            </div>
                            <div class="filter-content">
                                <h6 class=" title-filter ">Jenjang</h6>
                                <div class="filter-pilihan">
                                    <a class="link" href="<?php echo base_url('welcome/search?cari=sd')?>">SD</a><br>
                                    <a class="link" href="<?php echo base_url('welcome/search?cari=smp')?>"> SMP<br></a>
                                    <a class="link" href="<?php echo base_url('welcome/search?cari=sma')?>"> SMA</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="content-right ">
                <p>Menampilkan hasil pencarian " <strong> <?php echo $_GET['cari'] ?></strong> "</p>
                
                <div class="result-wrapper">
                    <?php
                        if(count($cari)>0){
                            $count = 0;
                            foreach ($cari as $tentor) :
                            $count++;
                    ?>
                    <!-- start card -->
                    <a style="color: black" class="link link-detail" href="<?php echo site_url('welcome/detail/'.$tentor->id_tentor);?>">
                        <div class="result-content">
                            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $tentor->foto_tentor ).'"/>'; ?>
                            <div class="result-info">
                                <p> <strong><?php echo $tentor->nama_tentor;?></strong> </p>
                                <p> <?php echo $tentor->mapel_tentor;?> </p>
                                <p> <strong style="color: coral;">Rp <?php echo number_format($tentor->harga_tentor);?></strong> / minggu</p>
                                <p> <?php echo $tentor->jumlah_pertemuan_tentor;?> pertemuan</p>
                                <div class="kota-jenjang">
                                    <p class="kota"><?php echo $tentor->alamat_kota_tentor;?></p>
                                    <p class="SMA"><?php echo $tentor->tingkat_tentor;?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php 
                    endforeach;
                    }else{
                        echo "Data tidak ditemukan";
                    }
                    ?>
                    <!-- .card -->

                </div>
                <!-- <a href="<?php echo site_url('welcome/content');?>">Lihat Semua Tentor </a> -->
            </div>
        </div>
    </div>
    
</body>

</html>