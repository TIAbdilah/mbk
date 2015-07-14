
<?php $this->load->view('admin/master/content/breadcrumbs') ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong><?php echo $title_page ?></strong>&nbsp;|&nbsp;
        <?php echo $data->head . ' - ' . $data->deskripsi ?>
        <span class="pull-right">
            <a href="<?php echo site_url('master/content/edit/'.$data->id_content) ?>"><i class="icon-pencil"></i> Edit</a>
        </span>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" action="#" method="POST">
            <div class="form-group">
                <div class="col-lg-12">
                    <?php echo $data->isi ?>
                </div>
            </div>
        </form>
    </div>
</div>
