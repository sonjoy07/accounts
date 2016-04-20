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
                if(isset($message)){
                    echo $message;
                }
                $this->session->unset_userdata('message');
            ?>
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                <div class="panel-heading">
                    <h4 class="panel-title">Salary Bonus Type Table</h4>
                </div>
                <div class="panel-body">
                    <form action="<?php echo base_url();?>master_controller/save_bonus_type" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Bonus Type</label>
                            <div class="col-md-9">
                                <input type="text" name="name_salary_bonus_type" class="form-control" placeholder="Bonus Type" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Bonus Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="description_salary_bonus_type"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-sm btn-success"> Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 -->
    </div>
</div>

<script type="text/javascript">
   
</script>

