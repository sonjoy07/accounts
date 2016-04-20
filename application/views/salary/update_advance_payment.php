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
                    <h4 class="panel-title">Salary Table</h4>
                </div>
                <?php
                     foreach ($salary_advance_payment as $advance_payment){
                ?>
                
                <div class="panel-body">
                    <form action="<?php echo base_url();?>master_controller/save_salary_advance_payment" method="post" class="form-horizontal">
<!--                        <div class="form-group">
                            <label class="col-md-3 control-label">Employe Name</label>
                            <div class="col-md-9">
                                <input type="text" name="" class="form-control" placeholder="Default input" />
                            </div>
                        </div>-->
                        <div class="form-group">
                            <label class="col-md-3 control-label">Id Salary Advance</label>
                            <div class="col-md-9">
                                <input type="hidden" name="id_salary_advance" value="<?php echo $advance_payment->id_salary_advance_payment;?>" />
                                <input type="text" name="id_salary_advance" class="form-control" value="<?php echo $advance_payment->id_salary_advance;?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Paid Amount Salary Advance Payment</label>
                            <div class="col-md-9">
                                <input type="text" name="paid_amount_salary_advance_payment" class="form-control" value="<?php echo $advance_payment->paid_amount_salary_advance_payment;?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Payment Date Salary Advance Payment</label>
                            <div class="col-md-9">
                                <input class="form-control datepicker" name="payemnt_date_salary_advance_payment" value="<?php echo $advance_payment->paid_amount_salary_advance_payment;?>" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-sm btn-success"> Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end panel -->
            <?php
                     }
            ?>
        </div>
        <!-- end col-6 -->
    </div>
</div>

<script type="text/javascript">
   
</script>

