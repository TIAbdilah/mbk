
<?php $this->load->view('admin/master/berita/breadcrumbs') ?>

<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong><?php echo $title_page ?></strong>
        <span class="pull-right">
            <a href="<?php echo site_url('master/berita/add') ?>"><?php echo $text['txt']->button['add_data'] ?></a>
        </span>
    </div>
    <div class="panel-body">
        <table id="example" class="table table-striped" style="width: 100%">
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
                            <a title="<?php echo $text['txt']->button_title['view_data'] ?>" href="<?php echo site_url('master/berita/view/' . $data->id_berita) ?>" class="btn btn-mini btn-success"><?php echo $text['txt']->button['view_data'] ?></a>
                            <a title="<?php echo $text['txt']->button_title['edit_data'] ?>" href="<?php echo site_url('master/berita/edit/' . $data->id_berita) ?>" class="btn btn-mini btn-warning"><?php echo $text['txt']->button['edit_data'] ?></a>
                            <a title="<?php echo $text['txt']->button_title['delete_data'] ?>" href="#" 
                               onclick="if (confirm('<?php echo $text['msg']->get_message_text('delete-confirm', array($data->judul)) ?>')) {
                                           window.location = '<?php echo site_url('master/berita/delete/' . $data->id_berita) ?>';
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



