
<?php $this->load->view('admin/utilitas/role/breadcrumbs') ?>

<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;
?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-heading">
                <strong><?php echo $title_page ?></strong>
                <span class="pull-right">
                    <a href="<?php echo site_url('utilitas/role/add') ?>"><?php echo $text['txt']->button['add_data'] ?></a>
                </span>
            </div>
            <div class="panel-body">
                <div class="adv-table">
                    <table id="example" class="table table-striped" style="table-layout: fixed;width: 100%">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="15%">Role Name</th>
                                <th width="65%">Right</th>
                                <th width="20%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($list_data as $data) {
                                ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data->nama_role ?></td>
                                    <td style="word-wrap: break-word"><?php echo $data->right ?></td>
                                    <td class="dt-body-center">                            
                                        <a title="<?php echo $text['txt']->button_title['view_data'] ?>" href="<?php echo site_url('utilitas/role/view/' . $data->id_role) ?>" class="btn btn-mini btn-success"><?php echo $text['txt']->button['view_data'] ?></a>
                                        <a title="<?php echo $text['txt']->button_title['edit_data'] ?>" href="<?php echo site_url('utilitas/role/edit/' . $data->id_role) ?>" class="btn btn-mini btn-warning"><?php echo $text['txt']->button['edit_data'] ?></a>
                                        <a title="<?php echo $text['txt']->button_title['delete_data'] ?>" href="#" 
                                           onclick="if (confirm('<?php echo $text['msg']->get_message_text('delete-confirm', array($data->nama_role)) ?>')) {
                                                       window.location = '<?php echo site_url('utilitas/role/delete/' . $data->id_role) ?>';
                                                   }" class="btn btn-mini btn-danger">
                                            <?php echo $text['txt']->button['delete_data'] ?>
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



