<!DOCTYPE html>
<html lang="en">
<head>
 <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css"/>
 <style>
     .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
  background-color: #d43f3a;
}
 
 </style>
</head>
<body>

    <div class="container" style="width: 81%; float: right; margin-right: 1%;">
        <div style="height: 10%; widows: 70%; ">
            <h1 class="alert-danger"> Ver empleados</h1>
            <a href="<?php echo base_url()."index.php/project_ctrl/create/"?>"> <input class="btn btn-danger col-xs-12"  value="Click Here To Insert New Record"></a>
        </div>
        <?php
                if ($this->session->userdata('sess_ci_admin_msg_type') == 'success') {
                    ?>
                    <div >
                         <?php echo $this->session->userdata('sess_ci_admin_msg');?>
                    </div>
                    <?php 
                     $this->session->set_userdata(array(
                        'sess_ci_admin_msg' => "",
                        'sess_ci_admin_msg_type' => ''
                    ));
                } ?>

        
        <table class="table table-hover" style=" margin-top: 7%; font-size: 12px;" >
          <thead>
            <tr>
                          <th >Ficha</th>
                          <th >RUT</th>
                          <th >FECHA INGRESO</th>
                          <th >Email</th>
                          <th >Status</th>
                          <th >Nombre</th>
                          <th >Department</th>
                          <th >Password</th>
                          <th >User Type</th>
                          <th>Edit/Delete</th>
                    
            </tr>
          </thead> 
          <?php foreach ($alpp as $alpp_emp): ?>
                        <tr>
                                <td><?php echo $alpp_emp['emp_file'] ?></td>
                                <td><?php echo $alpp_emp['emp_cellnum'] ?></td>
                                <td><?php echo $alpp_emp['emp_first_contract'] ?></td>
                                <td><?php echo $alpp_emp['emp_email'] ?></td>
                                <td><?php echo $alpp_emp['emp_status'] ?></td>
                                <td><?php echo $alpp_emp['emp_name'] ?></td>
                                <td><?php echo $alpp_emp['emp_department'] ?></td>
                                <td><?php echo $alpp_emp['emp_password'] ?></td>
                                 <td><?php echo $alpp_emp['emp_type'] ?></td>
                                 <td><a href="<?php echo base_url()."index.php/project_ctrl/update/".$alpp_emp['emp_file']?>"><h4 class="glyphicon glyphicon-repeat">-</h4></a><a href="<?php echo base_url()."index.php/project_ctrl/delete/".$alpp_emp['emp_file']?>"><h4 class="glyphicon glyphicon-trash"></h4></a>
                        </tr>
				<?php endforeach ?>

  </table>
</div>

</body>
</html>

