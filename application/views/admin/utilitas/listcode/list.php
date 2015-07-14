
<?php $this->load->view('admin/utilitas/listcode/breadcrumbs') ?>

<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong><?php echo $title_page ?></strong>
        <span class="pull-right">
            <a href="<?php echo site_url('utilitas/listcode/add') ?>"><?php echo $text['txt']->button['add_data'] ?></a>
        </span>
    </div>
    <div class="panel-body">
        <?php
        foreach ($list_data_head as $data_head) {
            ?>
            <div class="col-lg-3">
                <div class="panel-body">
                    <ul class="unstyled"><strong><?php echo $data_head->list_item ?></strong>
                        <span class="pull-right">
                            <a href="<?php echo site_url('utilitas/listcode/edit/' . $data_head->id_listcode) ?>"><i class="icon-pencil"></i></a>&nbsp;
                            <a href="<?php echo site_url('utilitas/listcode/delete/' . $data_head->id_listcode) ?>"><i class="icon-remove"></i></a>
                        </span>
                        <?php
                        foreach ($list_data as $data) {
                            if ($data_head->list_item == $data->list_name) {
                                ?>
                                <li>
                                    <?php echo $data->list_item ?>
                                    <span class="pull-right">
                                        <a href="<?php echo site_url('utilitas/listcode/edit/' . $data->id_listcode) ?>"><i class="icon-pencil"></i></a>&nbsp;
                                        <a href="<?php echo site_url('utilitas/listcode/delete/' . $data->id_listcode) ?>"><i class="icon-remove"></i></a>
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




