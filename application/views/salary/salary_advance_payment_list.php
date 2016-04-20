<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li><a href="javascript:;">Tables</a></li>
        <li class="active">Basic Tables</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Basic Tables <small>header small text goes here...</small></h1>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="table-basic-2">
                <div class="panel-heading">
                    <h4 class="panel-title">Hover Table</h4>
                    <a href="<?php echo base_url();?>master_controller/salary_advance_payment" class="pull-right btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Id Salary Payment</th>
                                <th>Paid Amount Salary Advance Payment</th>
                                <th>Payment Date Salary Advance Payment</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sl=1;
                                foreach ($salary_advance_payment_list as $advance_list){
                            ?>
                            <tr>
                                <td><?php echo $sl;?></td>
                                <td><?php echo $advance_list->id_salary_payment;?></td>
                                <td><?php echo $advance_list->paid_amount_salary_advance_payment;?></td>
                                <td><?php echo $advance_list->payment_date_salary_advance_payment;?></td>
                                <td>
                                    <a href="<?php echo base_url();?>master_controller/edit_salary_advance_payment/<?php echo $advance_list->id_salary_advance_payment;?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url();?>master_controller/delete_salary_advance_payment_by_advance_id/<?php echo $advance_list->id_salary_advance_payment;?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                            $sl++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
</div>

