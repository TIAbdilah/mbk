
<?php $this->load->view('admin/utilitas/listcode/breadcrumbs') ?>

<div class="panel panel-default">
    <div class="panel-heading"><?php echo $title_page ?></div>
    <div class="panel-body">
        <form class="form-horizontal" action="<?php echo site_url('utilitas/listcode/process/edit/'.$data->id_listcode) ?>" method="POST">
            <div class="control-group">
                <label class="control-label" for="inpListName">List Name</label>
                <div class="controls">
                    <select name="inpListName">                                                
                        <option value="">-</option>
                        <?php
                        foreach ($SIList_listcode as $row) {
                            echo "<option value=\"" . $row->list_item . "\"".  set_select('inpListName', $row->list_item, $row->list_item == $data->list_name).">" . $row->list_item . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inpEmail">List Item</label>
                <div class="controls">
                    <input type="text" id="inpListItem" name="inpListItem" value="<?php echo $data->list_item?>">
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
