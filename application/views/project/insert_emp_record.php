<?php echo validation_errors(); ?>
<?php echo form_open('project/insert_emp_record') ?>
<html>
    <head>
        
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <center class="alert-danger">
        <h1  style="margin: center;">Insert Record</h1>
        </center>
   <div>
    <div style=" height: 20%; width: 20%;  float: left; ">
        <img src="<?php echo  base_url('images/Actions.png'); ?>" alt=""/>
    </div>
        <div class="" style="width: 55%; float: right; margin-top: 2%;"> 
             <div class="form-group row" >
                    <label for="example-text-input" class="col-xs-2 col-form-label">Ficha</label>
                    <div class="col-xs-4">
                        <input class="form-control" type="input" placeholder="Enter File Number" name="Ficha" id="Ficha">
                    </div>
             </div>
             <div class="form-group row">
                    <label for="example-search-input" class="col-xs-2 col-form-label">RUT</label>
                    <div class="col-xs-4">
                      <input class="form-control" type="input" placeholder="Enter Phone Number" name="RUT" id="RUT">
                    </div>
             </div>
             <div class="form-group row">
                    <label for="example-email-input" class="col-xs-2 col-form-label">FECHA INGRESO</label>
                    <div class="col-xs-4">
                      <input class="form-control" type="input" placeholder="Enter Starting Date" name="INGRESO" id="INGRESO">
                    </div>
             </div>
             <div class="form-group row">
                    <label for="example-url-input" class="col-xs-2 col-form-label">Email</label>
                    <div class="col-xs-4">
                      <input class="form-control" type="input" placeholder="i.e fahid7@live.com" name="Email" id="Email">
                    </div>
             </div>
             <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-2 col-form-label">Status</label>
                    <div class="col-xs-4">
                      <input class="form-control" type="input" placeholder="i.e 1 or 0" name="Status" id="Status">
                    </div>
             </div>
             <div class="form-group row">
                    <label for="example-password-input" class="col-xs-2 col-form-label">Nombre</label>
                    <div class="col-xs-4">
                      <input class="form-control" type="input" placeholder="Enter Employee Name" name="Nombre" id="Nombre">
                    </div>
             </div>
             <div class="form-group row">
                    <label for="example-number-input" class="col-xs-2 col-form-label">Department</label>
                    <div class="col-xs-4">
                      <input class="form-control" type="input" placeholder="i.e Indubal" name="Department" id="Department">
                    </div>
             </div>
             <div class="form-group row">
               <label for="example-datetime-local-input" class="col-xs-2 col-form-label">Password</label>
               <div class="col-xs-4">
                 <input class="form-control" type=" password" placeholder="121212" name="Password" id="Password">
               </div>
             </div>
             <div class="form-group row">
               <label for="example-date-input" class="col-xs-2 col-form-label">User Type</label>
               <div class="col-xs-4">
                 <input class="form-control" type="input" placeholder="Enter User Type" name="User" id="User">
               </div>
             </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          
    </div>
   </div>


    </body>
</html>
