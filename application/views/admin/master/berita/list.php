
<?php $this->load->view('admin/master/berita/breadcrumbs') ?>

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
                                <th width="5%">No</th>
                                <th width="40%">Judul</th>
                                <th width="20%">Tanggal</th>
                                <th width="10%">Pengirim</th>
                                <th width="10%">Kategori</th>
                                <th width="15%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($list_data as $data) {
                                ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data->judul ?></td>
                                    <td><?php echo $data->tanggal ?></td>
                                    <td><?php echo $data->pengirim ?></td>
                                    <td><?php echo $data->nama_kategori ?></td>
                                    <td class="dt-body-center">
                                        <a title="<?php echo $text['txt']->button_title['view_data'] ?>" href="<?php echo site_url('master/berita/view/' . $data->id_berita) ?>" class="btn btn-xs btn-success"><?php echo $text['txt']->button['view_data'] ?></a>
                                        <a title="<?php echo $text['txt']->button_title['edit_data'] ?>" href="<?php echo site_url('master/berita/edit/' . $data->id_berita) ?>" class="btn btn-xs btn-warning"><?php echo $text['txt']->button['edit_data'] ?></a>
                                        <a title="<?php echo $text['txt']->button_title['delete_data'] ?>" href="#" 
                                           onclick="if (confirm('<?php echo $text['msg']->get_message_text('delete-confirm', array($data->judul)) ?>')) {
                                                       window.location = '<?php echo site_url('master/berita/delete/' . $data->id_berita) ?>';
                                                   }" class="btn btn-xs btn-danger">
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



