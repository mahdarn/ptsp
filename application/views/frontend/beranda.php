<!-- Carousel -->
<!-- <div class="lds-circle"><div></div></div> -->
<div class="slide-wrapper" id="menuAtas">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png" alt="Third slide">
            </div>
        </div>
    </div>
    <div class="red container-fluid">
        <div class="red-content" id="divButton">
            <div class="container-fluid containerMenuAtas" id="containerMenuAtas">
                <br>
                <center>
                    <a href="http://www.denpasarkota.go.id/home" id="logoMenuAtas" class="logo"><img
                            class="logoKajati" src="<?php echo base_url('/asset/assets_front') ?>/img/logoatas.png" style="width:430px" alt=""></a>
                </center>
                <br><br><br>
                <form id="w0" action="<?php echo base_url('frontend/beranda/pencarian');?>" method="post">
                    <div class="input-group intro-searchform">
                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                        <input type="text" class="form-control kolomSearch" name="keyword"
                            size="50" placeholder="Apa yang Anda Cari?" style="color:black;">
                        &nbsp;&nbsp;
                        <span class="input-group-btn">
                            <button class="btn btn-success buttonSearch" style="background:#097319;"
                                type="submit"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
                <br>
                <div class="card-columns">
                    <button class="btn btn-primary text-white buttonUtama" data-tooltip='Button 1'><i
                            id="iconButton" class="fa fa-edit"></i><br>REGISTRASI USER</button>
                    <button class="btn btn-danger text-white buttonUtama" data-tooltip='Button 2'><i
                            id="iconButton" class="fa fa-paper-plane"></i><br>SILAPTIPIKOR</button>
                    <button class="btn btn-warning text-white buttonUtama" data-tooltip='Button 3'><i
                            id="iconButton" class="fa fa-at"></i><br>APLIKASI LAIN 1</button>
                    <button class="btn btn-info text-white buttonUtama" data-tooltip='Button 4'><i
                            id="iconButton" class="fa fa-globe"></i><br>APLIKASI LAIN 2</button>
                    <a href="<?php echo base_url('frontend/galeri');?>" class="btn btn-success text-white buttonUtama"><i id="iconButton" class="fa fa-images"></i><br>GALERI</a>
                    <a href="<?php echo base_url('frontend/berita');?>" class="btn btn-secondary text-white buttonUtama"><i id="iconButton" class="fa fa-newspaper"></i><br>BERITA</a>
                    <a href="login.html" class="btn btn-success text-white buttonUtama"
                        data-tooltip='Button 7'><i id="iconButton" class="fa fa-power-off"></i><br>LOGIN</a>
                    <a href="<?php echo base_url('frontend/struktural');?>" class="btn btn-warning text-white buttonUtama"><i id="iconButton" class="fa fa-id-card"></i><br>STRUKTURAL</a>
                    <button class="btn btn-danger text-white buttonUtama" data-tooltip='Button 9'><i
                            id="iconButton" class="fa fa-info-circle"></i><br>INFORMASI PERKARA</button>
                </div>
                <br><br>
            </div>
        </div>
    </div>
</div>

<div class="container col-sm-12" id="banner1">
    <div class="row">
        <div class="col">
            <br>
            <h3 class="text-center text-white" style="font-size:40px">TRI KRAMA ADHYAKSA</h3>
            <br>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card-columns">
            <div class="card text-white cardTriKrama"
                style="height:200px;background: rgba(42, 110, 72, 1);border:0px;">
                <div class="card-body">
                    <h5 class="card-title text-center">SATYA</h5>
                    <p class="card-text text-justify">Kesetiaan yang bersumber pada rasa jujur, baik
                        terhadap Tuhan Yang Maha Esa, terhadap diri pribadi dan keluarga maupun kepada
                        sesama manusia.<br><br></p>
                </div>
            </div>
            <div class="card text-dark cardTriKrama"
                style="height:200px;background: rgba(209, 209, 10, 1);border:0px;">
                <div class="card-body">
                    <h5 class="card-title text-center">ADHI</h5>
                    <p class="card-text text-justify">Kesempurnaan dalam bertugas dan berunsur utama
                        pemilikan rasa tanggung jawab, bertanggung jawab baik terhadap Tuhan Yang Maha Esa,
                        terhadap keluarga dan terhadap sesama manusia.</p>
                </div>
            </div>
            <div class="card text-white cardTriKrama"
                style="height:200px;background: rgba(4, 89, 42, 1);border:0px;">
                <div class="card-body">
                    <h5 class="card-title text-center">WICAKSANA</h5>
                    <p class="card-text text-justify">Bijaksana dalam tutur kata dan tingkah laku, khususnya
                        dalam penetapan kekuasaan dan kewenangannya.</p>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<div class="container col-sm-12" id="banner2">
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-center" style="margin-top:5px;">Jaksa Agung Republik Indonesia</h5>
                        <img class="card-img cardJaksa" src="<?php echo base_url('/asset/assets_front') ?>/img/jaksa.jpg" alt="Card image">
                        <h5 class="text-center" style="margin-top:20px;">DR. H. ST. Burhanuddin</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card" style="background: rgba(225, 227, 34, 1);border:0px;">
                    <div class="card-body">
                        <h3 style="color:green;text-align: center;"><?php echo $perintah[0]['nama_perintah'] ?></h3>
                        <font style="font-size:18px;text-align:justify;"><?php echo $perintah[0]['isi_perintah'] ?></font>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<div class="container-fluid" style="width:92%">
    <div class="row">
        <div class="col-sm-3"><br>
            <div class="card text-center shadow">
                <div class="card-header bg-success">
                    <h4 class="text-center text-white ">Pejabat Struktural</h4>
                    <hr
                        style="border: 2px solid yellow;float: center;width: 80%;margin-bottom:unset;margin-top:unset;">
                </div>
                <div class="card-body">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php $x=0;foreach($struktural as $str){?>
                            <div class="carousel-item <?php if($x==0){echo 'active';}?>">
                                <a href="www.facebook.com"><img class="d-block w-100"
                                        src="<?php echo $str['url_file']?>" alt="First slide"></a>
                                <br>
                                <h5 style="font-size:14px"><?php echo $str['jabatan_struktural']?></h5>
                                <p><?php echo $str['nama_struktural']?></p>
                                <a href="<?php echo base_url('frontend/struktural');?>">Lihat Struktural</a>
                            </div>
                            <?php $x++; } ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9"><br>
            <div class="card text-center shadow">
                <div class="card-header bg-success">
                    <h4 class="text-center text-white">Berita Kejaksaan Tinggi</h4>
                    <hr
                        style="border: 2px solid yellow;float: center;width: 30%;margin-bottom:unset;margin-top:unset;">
                </div>
                <div class="card-body">
                    <div class="beritaAwal1">
                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php $x=0; foreach($beritautama as $utama){?>
                                <div class="carousel-item <?php if($x==0){echo 'active';}?>">
                                    <img class="d-block w-100"
                                            src="<?php echo $utama['cover_berita']?>" alt="First slide">
                                    <br>
                                    <h5><?php echo $utama['judul_berita'];?></h5>
                                    <?php echo substr($utama['isi_berita'],0,50).' [. . .]';?>
                                    <a href="<?php echo base_url('frontend/berita/beritaDetail/').$utama['id_berita'];?>">See More ...</a>
                                    <br>
                                </div>
                                <?php $x++; } ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators3"
                                role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators3"
                                role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="beritaAwal2">
                        <div class="list-group">
                            <?php foreach($beritasmpng as $smpng){?>
                            <a href="<?php echo base_url('frontend/berita/beritaDetail/').$smpng['id_berita'];?>"
                                class="list-group-item list-group-item-action flex-column align-items-start zoomBerita">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="<?php echo $smpng['cover_berita']?>" class="img-fluid"
                                            style="text-align:center" alt="Responsive image">
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <h5 style="text-align: left;font-size:16px;"><?php echo $smpng['judul_berita'];?></h5>
                                        </div>
                                        <div class="row" style="text-align: left;">
                                            <h5 style="text-align: left;font-size:12px;"><i
                                                    class="fa fa-calendar-alt"></i> <?php echo tgl_indo($smpng['tgl_update']);?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php } ?>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

<div class="container col-sm-12" id="banner4">
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center text-black">Agenda</h3>
                <hr class="garisJudul">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <center>
                            <table class="table" style="width:60%;">
                                <tbody>
                                    <tr>
                                        <?php foreach($agenda1 as $agd1){?>
                                        <td>
                                            <div class="card" style="width: 15rem;">
                                                <div class="card-body">
                                                    <img class="card-img" src="<?php echo $agd1['cover_berita']?>"
                                                        alt="Card image">
                                                    <h5 class="text-justify" style="margin-top:20px;font-size:16px">
                                                        <?php echo $agd1['judul_berita']?></h5>
                                                    <a href="<?php echo base_url('frontend/agenda/agendaDetail/').$agd1['id_berita'];?>">Lihat Agenda</a>
                                                </div>
                                            </div>
                                        </td>
                                        <?php }?>
                                    </tr>
                                </tbody>
                                </table>
                            <center>
                        </div>
                        <?php if(!empty($agenda2)){?>
                        <div class="carousel-item">
                            <center>
                            <table class="table" style="width:60%;">
                                <tbody>
                                    <tr>
                                        <?php foreach($agenda2 as $agd2){?>
                                        <td>
                                            <div class="card" style="width: 15rem;">
                                                <div class="card-body">
                                                    <img class="card-img" src="<?php echo $agd2['cover_berita']?>"
                                                        alt="Card image">
                                                    <h5 class="text-justify" style="margin-top:20px;font-size:16px">
                                                        <?php echo $agd2['judul_berita']?></h5>
                                                    <a href="<?php echo base_url('frontend/agenda/agendaDetail/').$agd2['id_berita'];?>">Lihat Agenda</a>
                                                </div>
                                            </div>
                                        </td>
                                        <?php }?>
                                    </tr>
                                </tbody>
                                </table>
                            <center>
                        </div>
                        <?php } ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" style="background-color:green;" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" style="background-color:green;" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<br>

<div class="container col-sm-12" id="zonaintegritas">
    <center>
        <a href="<?php echo base_url('frontend/zonaint')?>">
            <img src="<?php echo base_url('/asset/assets_front') ?>/img/zonaintegritas3.png" style="width:80%;">
        </a>
    </center>
</div>

<div class="container-fluid" style="width:82%">
    <div class="row">
        <div class="col-sm-5"><br>
            <div class="card text-center shadow">
                <div class="card-header bg-success">
                    <h4 class="text-center text-white ">Video</h4>
                    <hr
                        style="border: 2px solid yellow;float: center;width: 20%;margin-bottom:unset;margin-top:unset;">
                </div>
                <div class="card-body">
                    <iframe style="width:100%;height:345px"
                        src="https://www.youtube.com/embed/videoseries?list=PLBPVBwFbSAKdz-tgvo1VTqrMyCe5SBCb5"
                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="col-sm-7"><br>
            <div class="card text-center shadow">
                <div class="card-header bg-success">
                    <h4 class="text-center text-white">Foto</h4>
                    <hr
                        style="border: 2px solid yellow;float: center;width: 20%;margin-bottom:unset;margin-top:unset;">
                </div>
                <div class="card-body">
                    <div class="card-columns">
                        <?php foreach($beritazi as $zi){?>
                        <div class="card cardJaksa">
                            <a href="<?php echo base_url('frontend/berita/beritaDetail/').$zi['id_berita'];?>"><img class="card-img" src="<?php echo $zi['cover_berita']?>" alt="Card image cap"></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>