
<?php $this->load->view('admin/utilitas/role/breadcrumbs') ?>

<div class="panel panel-default">
    <div class="panel-heading"><?php echo $title_page ?></div>
    <div class="panel-body">
        <form class="form-horizontal" action="<?php echo site_url('utilitas/role/process/edit/' . $data->id_role) ?>" method="POST">
            <div class="control-group">
                <label class="control-label" for="inpRoleName">Role Name</label>
                <div class="controls">
                    <input type="text" id="inpRoleName" name="inpRoleName" value="<?php echo $data->nama_role ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inpRight">Right</label>
                <div class="controls">
                    <?php
                    foreach ($list_data_modul as $data_modul) {
                        ?>
                        <span class="form-control-static col-lg-4">
                            <ul class="unstyled"><strong><?php echo $data_modul->nama_modul ?></strong>                    
                                <?php
                                foreach ($list_data as $data) {
                                    if ($data_modul->id_modul == $data->id_modul) {
                                        ?>
                                        <li>
                                            <input type="checkbox" name="inpRight[]" id="inpRight[]" value="<?php echo $data->kode_right ?>" <?php echo set_checkbox('inpRight[]', '01.01', $chbx[$data->kode_right] == true) ?>/>
                                            <?php echo $data->kode_right . ' - ' . $data->nama_right ?>                                            
                                        </li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </span>
                        <?php
                    }
                    ?>        
                    <span class="form-control-static col-lg-12">
                        <a class="select-all" id="select-all">Check All</a>   /   
                        <a class="unselect-all" id="unselect-all">Uncheck All</a>
                    </span>
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
