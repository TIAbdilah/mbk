<!--breadcrumbs start-->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <h1><?php echo $data->deskripsi?></h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="#"><?php echo $data->head?></a></li>
                    <li class="active"><?php echo $data->deskripsi?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->