<main role="main" class="container">
    <div class="starter-template">
      <h1>La page d'ajout de l'employee </h1>
    </div>


  <div class="row">
    <table class="table table-sm">

   
   <form method='post' action='' style="margin-left:20%;width:50%;height:40%">
   
       <div class="form-group">
        <label for="title">EmployeeID</label>
        <input type="text" class="form-control" id="EmployeeID" placeholder="add EmployeeID" name="EmployeeID" 
        value="<?php if(isset($employee->EmployeeID)) echo $employee->EmployeeID ?>">
       </div> 

       <div class="form-group">
        <label for="description">NationalIDNumber</label>
        <input type="text" class="form-control" id="NationalIDNumber" placeholder="add National IDNumber" name="NationalIDNumber" value="<?php if(isset($employee->NationalIDNumber)) echo $employee->NationalIDNumber?>">
        </div>

        <div class="form-group">
        <label for="description">ContactID</label>
        <input type="text" class="form-control" id="ContactID" placeholder="add ContactID" name="ContactID" value="<?php if(isset($employee->ContactID)) echo $employee->ContactID ?>">
        </div> 

         

        <div class="form-group">
        <label for="description">Title</label>
        <input type="text" class="form-control" id="Title" placeholder="add Title" name="Title"
         value="<?php if(isset($employee->ETitle)) echo $employee->ETitle ?>">
         </div> 

         <div class="form-group">
        <label for="description">BirthDate</label>
        <input type="text" class="form-control" id="BirthDate" placeholder="add BirthDate" name="BirthDate" 
        value="<?php if(isset($employee->BirthDate)) echo $employee->BirthDate ?>">
        </div> 

        <div class="form-group">
        <label for="description">Gender</label>
        <input type="text" class="form-control" id="Gender" placeholder="add Gender" name="Gender" value="<?php if(isset($employee->Gender)) echo $employee->Gender ?>">
        </div> 

        <div class="form-group">
        <label for="description">HireDate</label>
        <input type="text" class="form-control" id="HireDate" placeholder="add HireDate" name="HireDate" value="<?php if(isset($employee->HireDate)) echo $employee->HireDate ?>">
        </div> 

        <div class="form-group">
    <button type="submit" class="btn btn-success">Valider</button>
    </div> 
</form>
    </table>
  </div>
</main><!-- /.container -->
