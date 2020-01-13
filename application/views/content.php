<html>

<head>
    <title>Content</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/content.css">
</head>

<body>
    <header class="masthead clear">

        <div class="topnav col-12">
            <a class="home col-1" href="<?php echo site_url('welcome');?>">LesSkuy</a>
            <form action="<?php echo base_url('welcome/search')?>" action="GET">
                <input id="cari" class="search col-6 round" type="text" name="cari" placeholder="Cari Mata Pelajaran atau Tutor">
            </form>
            <?php if( $this->session->masuk == true):  ?>
                <a href="<?php echo site_url('login/logout');?>" class="right">Log Out</a>
                <a href="" class="right"><?php echo $this->session->ses_nama?></a>
            <?php else:  ?>
                <a href="<?php echo site_url('welcome/signup');?>" class="right">Sign Up</a>
                <a href="<?php echo site_url('welcome/login');?>" class="right">Login</a>
            <?php endif; ?>
        </div>

    </header>
    <!-- .masthead -->

    <main class="main-area">

        <div class="centered">

            <section class="cards">
                <?php
                    if(count($cari)>0){
                        $count = 0;
                        foreach ($cari as $row) :
                        $count++;
                ?>
                <!-- start card -->
                <article class="card">
                    <a href="<?php echo site_url('welcome/detail/'.$row->id_tentor);?>">
                        <figure class="thumbnail">
                            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row->foto_tentor ).'"/>'; ?>
                        </figure>
                        <div class="card-content">
                            <div class="title">
                                <ul>
                                    <li class="nama"><?php echo $row->nama_tentor;?></li>
                                    <li><?php echo $row->mapel_tentor;?></li>
                                    <li class="harga inline">Rp <?php echo number_format($row->harga_tentor);?></li>
                                    <li class="inline"> / minggu</li>
                                    <li>( <?php echo $row->jumlah_pertemuan_tentor;?> pertemuan )</li>
                                    <li class="nama"><?php echo $row->mapel_tentor;?></li>
                                </ul>
                            </div>
                            <!-- .card-content -->
                        </div>
                    </a>
                </article>l</a>
                <?php 
                    endforeach;
                    }else{
                        echo "Data tidak ditemukan";
                    }
                ?>

                
                <!-- .card -->


            </section>
            <a href="<?php echo site_url('welcome/content');?>">Lihat Semua Tentor </a>
            <!-- .cards -->

        </div>
        <!-- .centered -->

    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>