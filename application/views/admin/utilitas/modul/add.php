
<?php $this->load->view('admin/utilitas/modul/breadcrumbs') ?>

<div class="panel panel-default">
    <div class="panel-heading"><?php echo $title_page ?></div>
    <div class="panel-body">
        <form class="form-horizontal" action="<?php echo site_url('utilitas/modul/process/add') ?>" method="POST">
            <div class="control-group">
                <label class="control-label" for="inpTipeModul">Tipe Modul</label>
                <div class="controls">
                    <select name="inpTipeModul">                                                
                        <option value="">-Pilih Tipe Modul-</option>
                        <?php
                        foreach ($SIList_tipeModul as $row) {
                            echo "<option value=\"" . $row->list_item . "\">" . $row->list_item . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inpNamaModul">Nama Modul</label>
                <div class="controls">
                    <input type="text" id="inpNamaModul" name="inpNamaModul" placeholder="Nama Modul">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn"><?php echo $text['txt']->button['save_add'] ?></button>
                </div>
            </div>
        </form>
    </div>
</div>
