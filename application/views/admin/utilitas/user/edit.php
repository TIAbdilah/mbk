
<?php $this->load->view('admin/utilitas/user/breadcrumbs') ?>

<div class="panel panel-default">
    <div class="panel-heading"><?php echo $title_page ?></div>
    <div class="panel-body">
        <form class="form-horizontal" action="<?php echo site_url('utilitas/user/process/edit/' . $data->id_user) ?>" method="POST">
            <div class="control-group">
                <label class="control-label" for="inpIdRole">Role</label>
                <div class="controls">
                    <select name="inpIdRole">                                                
                        <option value="">-Pilih Role-</option>
                        <?php
                        foreach ($SIList_role as $row) {
                            echo "<option value=\"" . $row->id_role . "\"" . set_select('inpIdRole', $row->id_role, $row->id_role == $data->id_role) . ">" . $row->nama_role . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inpUsername">Username</label>
                <div class="controls">
                    <input type="text" id="inpUsername" name="inpUsername" value="<?php echo $data->username ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inpEmail">Email</label>
                <div class="controls">
                    <input type="text" id="inpEmail" name="inpEmail" value="<?php echo $data->email ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inpPassword">Password</label>
                <div class="controls">
                    <input type="password" id="inpPassword" name="inpPassword" value="<?php echo $data->password ?>">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn"><?php echo $text['txt']->button['save_edit'] ?></button>
                </div>
            </div>
        </form>
    </div>
</div>
