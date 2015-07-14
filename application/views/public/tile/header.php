<header class="header-frontend">
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img width="350" title="" src="<?php echo base_url().'assets/public/img/'?>en3.png" alt="">
                </a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            Profil <b class=" icon-angle-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('public/profil/about')?>">Tentang Kami</a></li>
                            <li><a href="<?php echo site_url('public/profil/tupoksi')?>">Tugas Pokok & Fungsi</a></li>
                            <li><a href="<?php echo site_url('public/profil/struktur_org')?>">Struktur Organisasi</a></li>
                            <li><a href="<?php echo site_url('public/profil/contact')?>">Hubungi Kami</a></li>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            Pengaturan <b class=" icon-angle-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('public/pengaturan/peraturan')?>">Peraturan</a></li>
                            <li><a href="<?php echo site_url('public/pengaturan/pedoman')?>">Pedoman</a></li>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            Output Kegiatan <b class=" icon-angle-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('public/output_keg/sppip_rpkpp')?>">SPPIP & RKPPP</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('public/output_keg/perkotaan')?>">Perkotaan (Kumuh)</a></li>
                            <li><a href="<?php echo site_url('public/output_keg/perkotaan')?>">Perkotaan (RSH)</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('public/output_keg/pedesaan')?>">Pedesaan (Data Potensial)</a></li>
                            <li><a href="<?php echo site_url('public/output_keg/pedesaan')?>">Pedesaan (Pulau Kecil & Perbatasan)</a></li>
                            <li><a href="<?php echo site_url('public/output_keg/pedesaan')?>">Pedesaan (Rawan Bencana)</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('public/output_keg/rusunawa')?>">RUSUNAWA</a></li>
                            <li><a href="<?php echo site_url('public/output_keg/pedoman')?>">PISEW</a></li>
                            <li><a href="<?php echo site_url('public/output_keg/ppip_ris_pnpm')?>">RPIP/RIS PNPM</a></li>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            Berita & Agenda <b class=" icon-angle-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('public/berita')?>">Berita</a></li>
                            <li><a href="<?php echo site_url('public/agenda')?>">Agenda Kegiatan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            Gallery <b class=" icon-angle-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('public/gallery/download')?>">Download</a></li>
                            <li><a href="<?php echo site_url('public/gallery/ebook')?>">Ebook</a></li>
                            <li><a href="<?php echo site_url('public/gallery/foto_kegiatan')?>">Foto Kegiatan</a></li>
                            <li><a href="<?php echo site_url('public/gallery/film_dokumenter')?>">Film Dokumenter</a></li>
                        </ul>
                    </li>                    
                    <li><a href="portfolio.html">Peta</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>