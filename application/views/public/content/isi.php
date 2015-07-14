<?php $this->load->view('public/content/breadcrumb') ?>
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <section class="panel gray-bg">
                <div class="panel-body">
                    <?php echo $data->isi?>
                </div>
            </section>
        </div>
        <?php $this->load->view('public/content/sidebar') ?>
    </div>
</div>