
<?php $this->load->view('admin/utilitas/listcode/breadcrumbs')?>

<div class="panel panel-default">
    <div class="panel-heading"><?php echo $title_page?></div>
    <div class="panel-body">
        <form class="form-horizontal" action="#" method="POST">
            <div class="control-group">
                <label class="control-label" for="inpUsername">Username</label>
                <div class="controls">
                    <p class="form-control-static"><?php echo $data->listcodename?></p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inpEmail">Email</label>
                <div class="controls">
                    <p class="form-control-static"><?php echo $data->email?></p>
                </div>
            </div>
        </form>
    </div>
</div>
