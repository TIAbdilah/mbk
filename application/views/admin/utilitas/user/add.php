
<?php $this->load->view('admin/utilitas/user/breadcrumbs')?>

<div class="panel panel-default">
    <div class="panel-heading"><?php echo $title_page?></div>
    <div class="panel-body">
        <form class="form-horizontal" action="<?php echo site_url('utilitas/user/process/add')?>" method="POST">
            <div class="control-group">
                <label class="control-label" for="inpIdRole">Role</label>
                <div class="controls">
                    <select name="inpIdRole">                                                
                        <option value="">-Pilih Role-</option>
                        <?php
                        foreach ($SIList_role as $row) {
                            echo "<option value=\"" . $row->id_role . "\">" . $row->nama_role . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inpUsername">Username</label>
                <div class="controls">
                    <input type="text" id="inpUsername" name="inpUsername" placeholder="Email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inpEmail">Email</label>
                <div class="controls">
                    <input type="text" id="inpEmail" name="inpEmail" placeholder="Email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inpPassword">Password</label>
                <div class="controls">
                    <input type="password" id="inpPassword" name="inpPassword" placeholder="Password">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn"><?php echo $text['txt']->button['save_add']?></button>
                </div>
            </div>
        </form>
    </div>
</div>
