<?php echo validation_errors(); ?>

<?php echo form_open('project_ctrl/update/'.$alpp_emp['emp_file']) ?>
<html>
    <head>
        
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <h1 class="alert-danger">Update Record</h1>
        <div class="" style="width: 60%; float: right;"> 
             <div class="form-group row" >
                    <label for="example-text-input" class="col-xs-2 col-form-label">Ficha</label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" value="<?php echo $alpp_emp['emp_file'] ;?>" name="Ficha" id="Ficha">
                    </div>
             </div>
             <div class="form-group row">
                    <label for="example-search-input" class="col-xs-2 col-form-label">RUT</label>
                    <div class="col-xs-4">
                      <input class="form-control" type="search" value="<?php echo $alpp_emp['emp_cellnum'] ;?>" name="RUT" id="RUT">
                    </div>
             </div>
             <div class="form-group row">
                    <label for="example-email-input" class="col-xs-2 col-form-label">FECHA INGRESO</label>
                    <div class="col-xs-4">
                      <input class="form-control" type="email" value="<?php echo $alpp_emp['emp_first_contract'] ;?>" name="INGRESO" id="INGRESO">
                    </div>
             </div>
             <div class="form-group row">
                    <label for="example-url-input" class="col-xs-2 col-form-label">Email</label>
                    <div class="col-xs-4">
                      <input class="form-control" type="url" value="<?php echo $alpp_emp['emp_email'] ;?>" name="Email" id="Email">
                    </div>
             </div>
             <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-2 col-form-label">Status</label>
                    <div class="col-xs-4">
                      <input class="form-control" type="tel" value="<?php echo $alpp_emp['emp_status'] ;?>" name="Status" id="Status">
                    </div>
             </div>
             <div class="form-group row">
                    <label for="example-password-input" class="col-xs-2 col-form-label">Nombre</label>
                    <div class="col-xs-4">
                      <input class="form-control" type="input" value="<?php echo $alpp_emp['emp_name'] ;?>" name="Nombre" id="Nombre">
                    </div>
             </div>
             <div class="form-group row">
                    <label for="example-number-input" class="col-xs-2 col-form-label">Department</label>
                    <div class="col-xs-4">
                      <input class="form-control" type="input" value="<?php echo $alpp_emp['emp_department'] ;?>" name="Department" id="Department">
                    </div>
             </div>
             <div class="form-group row">
               <label for="example-datetime-local-input" class="col-xs-2 col-form-label">Password</label>
               <div class="col-xs-4">
                 <input class="form-control" type="password" value="<?php echo $alpp_emp['emp_password'] ;?>" name="Password" id="Password">
               </div>
             </div>
             <div class="form-group row">
               <label for="example-date-input" class="col-xs-2 col-form-label">User Type</label>
               <div class="col-xs-4">
                 <input class="form-control" type="input" value="<?php echo $alpp_emp['emp_type'] ;?>" name="Type" id="Type">
               </div>
             </div>
            <button type="submit" class="btn btn-primary">Submit</button>
         
    </div>


    </body>
</html>
