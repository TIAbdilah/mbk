
<?php $this->load->view('admin/utilitas/right/breadcrumbs') ?>

<div class="panel panel-default">
    <div class="panel-heading"><?php echo $title_page ?></div>
    <div class="panel-body">
        <form class="form-horizontal" action="<?php echo site_url('utilitas/right/process/edit/'.$data->id_right) ?>" method="POST">
            <div class="control-group">
                <label class="control-label" for="inpIdModul">Nama Modul</label>
                <div class="controls">
                    <select name="inpIdModul" readonly="true">                                                
                        <option value="">-Pilih Nama Modul-</option>
                        <?php
                        foreach ($SIList_modul as $row) {
                            echo "<option value=\"" . $row->id_modul . "\"".  set_select('inpIdModul', $row->id_modul, $row->id_modul == $data->id_modul).">" . $row->nama_modul . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inpKodeRight">Kode Right</label>
                <div class="controls">
                    <input type="text" id="inpKodeRight" name="inpKodeRight" value="<?php echo $data->kode_right?>" readonly="true">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inpNamaRight">Nama Right</label>
                <div class="controls">
                    <input type="text" id="inpNamaRight" name="inpNamaRight" value="<?php echo $data->nama_right?>">
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
