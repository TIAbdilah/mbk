
<?php $this->load->view('admin/utilitas/listcode/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="<?php echo site_url('utilitas/listcode/process/add/') ?>" method="POST">
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">List Name</label>
                        <div class="col-lg-4">
                            <select name="inpListName" class="form-control" >                                                
                                <option value="">-</option>
                                <?php
                                foreach ($SIList_listcode as $row) {
                                    echo "<option value=\"" . $row->list_item . "\">" . $row->list_item . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">List Item</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpListItem" name="inpListItem" placeholder="List Item">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn"><?php echo $text['txt']->button['save_add'] ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>