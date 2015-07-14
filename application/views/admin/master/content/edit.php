
<?php $this->load->view('admin/master/content/breadcrumbs') ?>

<div class="panel panel-default">

    <div class="panel-heading">
        <strong><?php echo $title_page ?></strong>&nbsp;|&nbsp;
        <?php echo $data->head . ' - ' . $data->deskripsi ?>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" action="<?php echo site_url('master/content/process/edit/' . $data->id_content) ?>" method="POST">
            <div class="form-group">
                <div class="col-lg-12">
                    <textarea class="form-control ckeditor" name="inpIsi" rows="10"><?php echo $data->isi ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class=" col-lg-12">
                    <button type="submit" class="btn"><?php echo $text['txt']->button['save_edit'] ?></button>
                </div>
            </div>
        </form>
    </div>

</div>
