
<?php $this->load->view('admin/template/breadcrumbs') ?>

<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong><?php echo $title_page ?></strong>        
        <?php if ($text['rg']['U01a']) { ?>
            <span class="pull-right">
                <a href="<?php echo site_url('template/add') ?>"><?php echo $text['txt']->button['add_data'] ?></a>
            </span>
        <?php } ?>
    </div>
    <div class="panel-body">
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>L/P</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                for ($i = 0; $i < 20; $i++) {
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td>Taufik Ismail Abdilah, S.Kom<?php echo $no ?></td>
                        <td>L</td>
                        <td>Alamat</td>
                        <td>081234234566</td>
                        <td class="dt-body-center">
                            <?php if ($text['rg']['U01b']) { ?>
                                <a href="<?php echo site_url('template/process/view') ?>" class="btn btn-mini btn-success"><?php echo $text['txt']->button['view_data'] ?></a>
                            <?php } ?>
                            <?php if ($text['rg']['U01c']) { ?>
                                <a href="<?php echo site_url('template/process/edit') ?>" class="btn btn-mini btn-warning"><?php echo $text['txt']->button['edit_data'] ?></a>
                            <?php } ?>
                            <?php if ($text['rg']['U01d']) { ?>
                                <a href="#" 
                                   onclick="if (confirm('<?php echo $text['msg']->get_message_text('delete-confirm', array('id=1')) ?>')) {
                                                                   window.location = '<?php echo site_url('template/delete') ?>';
                                                               }" class="btn btn-mini btn-danger">
                                    <?php echo $text['txt']->button['delete_data'] ?>
                                </a>
                            <?php } ?>
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



