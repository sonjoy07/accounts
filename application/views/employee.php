<div id="content" class="content">
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li><a href="javascript:;">Form Stuff</a></li>
        <li class="active">Form Elements</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Form Elements <small>header small text goes here...</small></h1>
    <!-- end page-header -->
    <!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-md-12">
            <?php
            $message = $this->session->userdata('message');
            if (isset($message)) {
                echo $message;
            }
            $this->session->unset_userdata('message');
            ?>
            <!-- begin panel -->
            
                <div class="panel panel-inverse" data-sortable-id="table-basic-2">
                <div class="panel-heading">
                    <h4 class="panel-title">Hover Table</h4>
                    <a href="<?php echo base_url();?>master_controller/salary_advance" class="pull-right btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                </div>
                <div class="panel-body">
                    <?php echo $output;?>
                </div>
            </div>
            <!-- end panel -->
            <!-- end panel -->
        </div>
        <!-- end col-6 -->
    </div>
</div>

<script type="text/javascript">

</script>

