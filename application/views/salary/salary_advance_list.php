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
                    <a href="<?php echo base_url();?>master_controller/salary_advance" class="pull-right btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Employe Name</th>
                                <th>Amount Given Salary Advance</th>
                                <th>Amount Paid Salary Advance</th>
                                <th>Date Given Salary Advance</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sl=1;
                                foreach ($salary_advance_list as $advance_list){
                            ?>
                            <tr>
                                <td><?php echo $sl;?></td>
                                <td><?php?></td>
                                <td><?php echo $advance_list->amount_given_salary_advance;?></td>
                                <td><?php echo $advance_list->amount_paid_salary_advance;?></td>
                                <td><?php echo $advance_list->date_given_salary_advance;?></td>
                                <td>
                                    <a href="<?php echo base_url();?>master_controller/edit_salary_advance/<?php echo $advance_list->id_salary_advance;?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url();?>master_controller/delete_salary_advance_by_advance_id/<?php echo $advance_list->id_salary_advance;?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

