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
                    <a href="<?php echo base_url();?>master_controller/salary_bonus_type" class="pull-right btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name Salary Bonus Type</th>
                                <th>Description Salary Bonus Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sl=1;
                                foreach ($salary_bonus_type as $bonus_type){
                            ?>
                            <tr>
                                <td><?php echo $sl;?></td>
                                <td><?php echo $bonus_type->name_salary_bonus_type;?></td>
                                <td><?php echo $bonus_type->description_salary_bonus_type;?></td>
                                <td>
                                    <a href="<?php echo base_url();?>master_controller/edit_salary_bonus_type/<?php echo $bonus_type->id_salary_bonus_type;?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url();?>master_controller/delete_bonus_type_by_bonus_type_id/<?php echo $bonus_type->id_salary_bonus_type;?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

