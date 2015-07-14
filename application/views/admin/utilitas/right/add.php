
<?php $this->load->view('admin/utilitas/right/breadcrumbs') ?>

<div class="panel panel-default">
    <div class="panel-heading"><?php echo $title_page ?></div>
    <div class="panel-body">
        <form class="form-horizontal" action="<?php echo site_url('utilitas/right/process/add') ?>" method="POST">
            <div class="control-group">
                <label class="control-label" for="inpIdModul">Nama Modul</label>
                <div class="controls">
                    <select name="inpIdModul">                                                
                        <option value="">-Pilih Nama Modul-</option>
                        <?php
                        foreach ($SIList_modul as $row) {
                            echo "<option value=\"" . $row->id_modul . "\">" . $row->nama_modul . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inpNamaRight">Nama Right</label>
                <div class="controls">
                    <input class="input-xxlarge" type="text" id="inpNamaRight" name="inpNamaRight" placeholder="Nama Right">
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
