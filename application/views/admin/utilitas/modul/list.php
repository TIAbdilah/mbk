
<?php $this->load->view('admin/utilitas/modul/breadcrumbs') ?>

<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong><?php echo $title_page ?></strong>
        <span class="pull-right">
            <a href="<?php echo site_url('utilitas/modul/add') ?>"><?php echo $text['txt']->button['add_data'] ?></a>
        </span>
    </div>
    <div class="panel-body">
        <?php
        foreach ($list_data_tipe_modul as $data_tipe_modul) {
            ?>
            <div class="col-lg-3">
                <div class="panel-body">
                    <ul class="unstyled"><strong><?php echo $data_tipe_modul->list_item ?></strong>                    
                        <?php
                        foreach ($list_data as $data) {
                            if ($data_tipe_modul->list_item == $data->tipe_modul) {
                                ?>
                                <li>
                                    <?php echo $data->kode_modul . ' - ' . $data->nama_modul ?>
                                    <span class="pull-right">
                                        <a href="<?php echo site_url('utilitas/modul/edit/' . $data->id_modul) ?>"><i class="icon-pencil"></i></a>&nbsp;
                                        <a href="<?php echo site_url('utilitas/modul/delete/' . $data->id_modul) ?>"><i class="icon-remove"></i></a>
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



