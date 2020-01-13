<!DOCTYPE html>
<html>
<head>
  <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #000000;
        text-align: centre;
        padding: 8px;
    }
    .kotak{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 9px;
        border-color: black;
        border-style: solid;
        border-width: 1px;
        width: 400px;
        background: rgba(0, 0, 0, 0);
        padding: 40px;
        text-align: center;
        margin: auto;
        margin-top: 3%;
        margin-bottom: 10%;
        color: black;
        font-family: 'Verdana';
    }
    #lokasi-icon {
        align-items:;
        width: 30px;
        height: 30px;
    }
    #landmark {
        text-align: left;
        text-align: center;
        font-family: Calibri;
    }
    #list-matpel {
        font-family: Verdana;
        text-align: left;
        font-size: 15px;
    }
    .sosmed-icon{
        width: 10%;
        height: auto;
        margin: 10px;
    }

    #foto-profil{
        width: 150px;
        height: 150px;
    }

    .detil{
        text-align: left;
        margin: 0;
    }




    
.top-bar {
    width: 80%;
    /* height: 50px; */
    padding-top: 20px;
    margin: 0 auto;
    margin-bottom: 80px;
}

.logo {
    width: 20%;
    float: left;
}

.logo img {
    width: 115px;
    margin: 8px auto;
    cursor: pointer;
}

.search-box {
    width: 50%;
    float: left;
}

.input-search {
    width: 100%;
    margin: 11px auto;
    display: inline-flex;
    border: 1px solid blue;
    border-radius: 20px;
}

.input-search input {
    float: right;
    padding: 5px;
    padding-left: 20px;
    box-shadow: none;
    outline: none;
    border: 0;
    background: transparent;
}

.search-icon .fa {
    color: blue;
    padding-bottom: 0;
}

.menu-bar {
    width: 30%;
    float: right;
    text-align: right;
}

.menu-bar ul li {
    display: inline-block;
    list-style: none;
    text-decoration: none;
    color: #000;
    margin: 0 20px;
    padding-top: 5px;
    cursor: pointer;
}

.link {
    color: black;
    text-decoration: none;
    font-family: 'Roboto', sans-serif;

}

.link:hover {
    text-decoration: none;
    color: blue;
}

#login {
    padding-right: 30px;
    margin-right: 5px;
    border-right: 2px solid #918f8e;
}

  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?php echo base_url(); ?>css/detail.css" >

  <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>images/favicon.ico"/>
</head>
<body>
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
    <div class="kotak">
        <?php echo '<img style="width: 150px; height: 150px;" id="foto-profil" src="data:image/jpeg;base64,'.base64_encode( $foto_tentor ).'"/>'; ?>
        <h1><?php echo $nama_tentor;?></h1>
        <h5><?php echo $pengalaman_tentor;?></h5>
        <h5 class="detil" style="color:coral">Rp <?php echo number_format($harga_tentor);?></h5>
        <h6 class="detil"><?php echo $jumlah_pertemuan_tentor;?> pertemuan / minggu</h6>
        <div id="landmark">
        <p><img src="<?php echo base_url(); ?>images/landmark.png" alt="landmark" id="lokasi-icon"> <?php echo $alamat_kota_tentor;?></p>
    </div>
    <div id="list-matpel">
        <p>Mata Pelajaran :</p>
        <ul>
            <li><?php echo $mapel_tentor;?></li>
        </ul>
    </div>
    <table style="width:100%">
        <tr>
            <th>Hari</th>
            <th>Jadwal Mengajar</th>
        </tr>
        <tr>
            <td>Senin</td>
            <td>18.30 - 20.00</td>
        </tr>
        <tr>
            <td>Rabu</td>
            <td>19.00 - 21.00</td>
        </tr>
    </table>
    <a target = '_blank' href='https://api.whatsapp.com/send?phone=<?php echo $no_hp_tentor;?>&text=Assalamu%27alaikum%20Kak%20<?php echo $nama_tentor;?>'><img src="<?php echo base_url(); ?>images/whatsapp.png" class="sosmed-icon" alt="whatsapp"></a>
    </div>
</body>
</html>
