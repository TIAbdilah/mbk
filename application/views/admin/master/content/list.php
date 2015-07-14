
<?php $this->load->view('admin/master/content/breadcrumbs')           ?>

<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
                <span class="pull-right">
                    <a href="<?php echo site_url('master/berita/add') ?>"><?php echo $text['txt']->button['add_data'] ?></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-striped" id="example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Head</th>
                                <th>Deskripsi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($list_data as $data) {
                                ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data->head ?></td>
                                    <td><?php echo $data->deskripsi ?></td>
                                    <td class="dt-body-center">
                                        <a title="<?php echo $text['txt']->button_title['view_data'] ?>" 
                                           href="<?php echo site_url('master/content/view/' . $data->id_content) ?>" 
                                           class="btn btn-xs btn-success">
                                               <?php echo $text['txt']->button['view_data'] ?>
                                        </a>
                                        <a title="<?php echo $text['txt']->button_title['edit_data'] ?>" 
                                           href="<?php echo site_url('master/content/edit/' . $data->id_content) ?>" 
                                           class="btn btn-xs btn-warning">
                                               <?php echo $text['txt']->button['edit_data'] ?>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>                
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>



