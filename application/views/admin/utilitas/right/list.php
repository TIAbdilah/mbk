
<?php $this->load->view('admin/utilitas/right/breadcrumbs') ?>

<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong><?php echo $title_page ?></strong>
        <span class="pull-right">
            <a href="<?php echo site_url('utilitas/right/add') ?>"><?php echo $text['txt']->button['add_data'] ?></a>
        </span>
    </div>
    <div class="panel-body">
        <?php
        foreach ($list_data_modul as $data_modul) {
            ?>
            <div class="col-lg-3">
                <div class="panel-body">
                    <ul class="unstyled"><strong><?php echo $data_modul->nama_modul ?></strong>
                        <?php
                        foreach ($list_data as $data) {
                            if ($data_modul->id_modul == $data->id_modul) {
                                ?>
                                <li>
                                    <?php echo $data->kode_right . ' - ' . $data->nama_right ?>
                                    <span class="pull-right">
                                        <a href="<?php echo site_url('utilitas/right/edit/' . $data->id_right) ?>"><i class="icon-pencil"></i></a>&nbsp;
                                        <a href="<?php echo site_url('utilitas/right/delete/' . $data->id_right) ?>"><i class="icon-remove"></i></a>
                                    </span>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <?php
        }
        ?>        
    </div>
</div>



