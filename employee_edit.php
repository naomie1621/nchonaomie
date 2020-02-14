<main role="main" class="container">
    <div class="starter-template">
      <h1>La page des modifications </h1>
    </div>

<!--
  8 =>
    object(stdClass)[13]
      public 'EmployeeID' => string '9' (length=1)
      public 'ContactID' => string '1005' (length=4)
      public 'NationalIDNumber' => string '695256908' (length=9)
      public 'ETitle' => string 'Design Engineer' (length=15)
      public 'CTitle' => string 'Ms.' (length=3)
      public 'FirstName' => string 'Gail' (length=4)
      public 'MiddleName' => string 'A' (length=1)
      public 'LastName' => string 'Erickson' (length=8)
      public 'EmailAddress' => string 'gail0@adventure-works.com' (length=25)
      public 'HireDate' => string '1998-02-06 00:00:00' (length=19)
-->

  <div class="row">
    <table class="table table-sm">
   <!--  <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Contact </th>
        <th scope="col">National </th>
        <th scope="col">Titre</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Poste</th>
        <th scope="col">Date Embauche</th>
        <th scope="col">Mail</th>
        <th scope="col"><i class="fas fa-eye"></i></th>
        <th scope="col"><i class="fas fa-edit"></i></th>
        <th scope="col"><i class="fas fa-trash-alt"></i></th>

      </tr>
    </thead> -->
     <!-- <h1>Editer utilisateur</h1> -->


<!-- <form method='post' action='#'>
    <div class="form-group">
        <label for="title">Contact</label>
        <input type="text" class="form-control" id="ContactID" placeholder="Entrer le Contact" name="ContactID" value ="<?php if (isset($e->ContactID)) echo $e->ContactID; ?>
    </div> 
    <div class="form-group">
        <label for="description">National</label>
        <input type="text" class="form-control" id="Prénom" placeholder="Entrer le Prénom" name="Prénom" value ="<?php if (isset($task["Prénom"])) echo $task["Prénom"];?>">
    </div>

    <div class="form-group">
        <label for="description">Titre</label>
        <input type="text" class="form-control" id="Email" placeholder="Entrer l'Email" name="Email" value ="<?php if (isset($task["Email"])) echo $task["Email"];?>">
    </div>

    <div class="form-group">
        <label for="description">Nom</label>
        <input type="text" class="form-control" id="Téléphone" placeholder="Entrer le Téléphone" name="Téléphone" value ="<?php if (isset($task["Téléphone"])) echo $task["Téléphone"];?>">
    </div>
     <div class="form-group">
        <label for="description">Prénom</label>
        <input type="text" class="form-control" id="Téléphone" placeholder="Entrer le Téléphone" name="Téléphone" value ="<?php if (isset($task["Téléphone"])) echo $task["Téléphone"];?>">
    </div>
     <div class="form-group">
        <label for="description">Poste</label>
        <input type="text" class="form-control" id="Téléphone" placeholder="Entrer le Téléphone" name="Téléphone" value ="<?php if (isset($task["Téléphone"])) echo $task["Téléphone"];?>">
    </div>
     <div class="form-group">
        <label for="description">Date Embauche</label>
        <input type="text" class="form-control" id="Téléphone" placeholder="Entrer le Téléphone" name="Téléphone" value ="<?php if (isset($task["Téléphone"])) echo $task["Téléphone"];?>">
    </div>
    <div class="form-group">
        <label for="description">Mail</label>
        <input type="text" class="form-control" id="Téléphone" placeholder="Entrer le Téléphone" name="Téléphone" value ="<?php if (isset($task["Téléphone"])) echo $task["Téléphone"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form> -->
   
   <form method='post' action='' style="margin-left:20%;width:50%;height:40%">
   
       <div class="form-group">
        <label for="title">EmployeeID</label>
        <input type="text" class="form-control" id="EmployeeID" placeholder="add EmployeeID" name="EmployeeID" 
        value="<?php if(isset($employee->EmployeeID)) echo $employee->EmployeeID ?>">
       </div> 

        <div class="form-group">
        <label for="description">ContactID</label>
        <input type="text" class="form-control" id="ContactID" placeholder="add ContactID" name="ContactID" value="<?php if(isset($employee->ContactID)) echo $employee->ContactID ?>">
        </div> 

        <div class="form-group">
        <label for="description">NationalIDNumber</label>
        <input type="text" class="form-control" id="NationalIDNumber" placeholder="add National IDNumber" name="NationalIDNumber" value="<?php if(isset($employee->NationalIDNumber)) echo $employee->NationalIDNumber?>">
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
