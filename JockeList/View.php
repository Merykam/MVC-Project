<div class="input-group">

  <div class="form-outline">
    <input placeholder="Search" type="search" id="form1" class="form-control" />
   
  </div>
  <button type="button" class="btn bs">
  <i class="bi bi-search"></i>
  </button>
</div>





<table class="table mt-5">
  <thead>
    <tr>
 
      <th scope="col">id</th>
      <th scope="col">Jock</th>
      <th scope="col">Action</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>1</td>
      <td>yep</td>
      <td>
      <div class="d-flex fs-3">
        
        <a href="?id=<?php echo $valu["id"] ?>" class="btn btn-warning me-3"><i class="bi bi-trash3-fill users-icon"></i></a>
        <button name="update" type="submit" class="btn btn-danger text-dark"><i class="bi bi-pencil-square users-icon"></i></button>
        
                                
    </div>

      </td>
    </tr>
  
  </tbody>
</table>