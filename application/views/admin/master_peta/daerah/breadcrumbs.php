<div class="row">
    <div class="col-lg-12">
        <!--breadcrumbs start -->
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url()?>"><i class="icon-home"></i> Home</a></li>
            <li><a href="<?php echo site_url('master_peta/daerah')?>">Daerah</a></li>
            <?php 
            if(!empty($data_propinsi)){
                echo '<li><a href="'.site_url('master_peta/daerah/index/'.$data_propinsi->kode_daerah).'">'.$data_propinsi->nm_daerah.'</a></li>';
            }
            if(!empty($data_kabupaten)){
                echo '<li><a href="'.site_url('master_peta/daerah/index/'.$data_kabupaten->kode_daerah).'">'.$data_kabupaten->nm_daerah.'</a></li>';
            }
            if(!empty($data_kecamatan)){
                echo '<li><a href="'.site_url('master_peta/daerah/index/'.$data_kecamatan->kode_daerah).'">'.$data_kecamatan->nm_daerah.'</a></li>';
            }
            if($title_page != null){
                echo '<li class="active">'.$title_page.'</li>';
            }
            ?>
        </ul>
        <!--breadcrumbs end -->
    </div>
</div>