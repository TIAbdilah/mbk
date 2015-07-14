
<?php $this->load->view('admin/master_peta/daerah/breadcrumbs')           ?>

<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page_1 ?>
                <span class="pull-right">
                    <a href="<?php echo site_url('master_peta/daerah/add') ?>"><?php echo $text['txt']->button['add_data'] ?></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-striped" id="example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Daerah</th>
                                <th>Nama Propinsi</th>
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
                                    <td><?php echo $data->kode_daerah ?></td>
                                    <td><?php echo $data->nm_daerah ?></td>
                                    <td class="dt-body-center">
                                        <a title="List Kabupaten" 
                                           href="<?php echo site_url('master_peta/daerah/index/' . $data->kode_daerah) ?>" 
                                           class="btn btn-xs btn-success">
                                            <i class="icon-list-ul"></i> 
                                        </a>
                                        <a title="<?php echo $text['txt']->button_title['edit_data'] ?>" 
                                           href="<?php echo site_url('master_peta/daerah/edit/' . $data->kode_daerah) ?>" 
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



