<?php $this->load->view('public/berita_agenda/berita/breadcrumb') ?>
<div class="container">
    <div class="row-fluid">
        <div class="col-lg-9 gray-bg">
            <h1>Berita</h1>

            <?php
            foreach ($list_data as $data) {
                ?>
                <article class="media">
                    <a class="pull-left thumb p-thumb">
                        <img src="<?php echo $data->foto?>" alt="">
                    </a>
                    <div class="media-body">
                        <a href="#" class=" p-head"><?php echo $data->judul?></a> 
                        <p><?php echo $format_date->format_date_ldfy($data->tanggal)?> (<?php echo $data->nama_kategori?>)</p>
                        <p><?php echo substr($data->isi, 0, 250).'...'?></p>
                        <p class="pull-right">more</p>
                    </div>
                </article>
                <?php
            }
            ?>

            <div class="text-center">
               <?php echo $page_link ?>
            </div>
        </div>
        <div class="col-lg-3">
            <?php $this->load->view('public/profil/sidebar') ?>
        </div>
    </div>
</div>