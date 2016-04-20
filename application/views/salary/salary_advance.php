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
                    <h4 class="panel-title">Salary Advance Table</h4>
                </div>
                <div class="panel-body">
                    <form action="<?php echo base_url();?>master_controller/save_advance" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Given Salary Advance</label>
                            <div class="col-md-9">
                                <input type="text" name="amount_given_salary_advance" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Paid Salary Advance</label>
                            <div class="col-md-9">
                                <input type="text" name="amount_paid_salary_advance" class="form-control" />
                            </div>
                        </div>
<!--                        <div class="form-group">
                            <label class="col-md-3 control-label">Month of Salary</label>
                            <div class="col-md-9">
                                <select name="month_salary_payment" class="form-control">
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                        </div>-->
                        <div class="form-group">
                            <label class="col-md-3 control-label">Date of Advance Given Salary</label>
                            <div class="col-md-9">
                                <input class="form-control datepicker" id=""  name="date_given_salary_advance" value="04/1/2014" type="text">
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

