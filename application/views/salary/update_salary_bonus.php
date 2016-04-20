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
            
            <?php
            foreach ($edit_bonus as $bonus){
                
            ?>
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                <div class="panel-heading">
                    <h4 class="panel-title">Salary Table</h4>
                </div>
                <div class="panel-body">
                    <form action="<?php echo base_url(); ?>master_controller/update_bonus" method="post" name="bonus" class="form-horizontal">
<!--                        <div class="form-group">
                            <label class="col-md-3 control-label">Employe Name</label>
                            <div class="col-md-9">-->
                                <input type="hidden" name="id_salary_bonus" value="<?php echo $bonus->id_salary_bonus;?>" />
<!--                                <input type="text" id="payment" name="" class="form-control" placeholder="Default input" />
                            </div>
                        </div>-->
                        <div class="form-group">
                            <label class="col-md-3 control-label">Salary payment</label>
                            <div class="col-md-9">
                               <input type="text" id="payment" name="id_salary_payment" class="form-control" value="<?php echo $bonus->id_salary_payment;?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Salary Bonus Type</label>
                            <div class="col-md-9">
                               <input type="text" id="bonus_type" name="id_salary_bonus_type" class="form-control" value="<?php echo $bonus->id_salary_bonus_type;?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Amount Salary Bonus</label>
                            <div class="col-md-9">
                                <input type="text" name="amount_salary_bonus" class="form-control" value="<?php echo $bonus->amount_salary_bonus;?>" />
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


 <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var availableTags =[<?php
                                    foreach ($salary_payment as $payment) {
                                        $data = $payment->id_salary_payment;
                                       echo  json_encode($data).',' ;
                                    }
                                    ?>];

        $("#payment").autocomplete({
        source: availableTags
                });
        var bonus =[<?php
                                    foreach ($salary_bonus as $bonus) {
                                        $data = $bonus->name_salary_bonus_type;
                                       echo  json_encode($data).',' ;
                                    }
                                    ?>];

        $("#bonus_type").autocomplete({
        source: bonus
                });
    });

</script>

