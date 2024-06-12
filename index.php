<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>PHP Test</title>
</head>
<body>
    <div class="container text-center">
        <div class="row align-items-start">
            <h1>PHP Ajax Form</h1>
          <div class="col">
          <form id="formid"method="post">
  <div class="mb-3">
    <label for="nameid" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="nameid" name="name" aria-describedby="nameHelp">
  </div>
  <div class="mb-3">
    <label for="quantityid" class="form-label">Quantity</label>
    <input type="text" class="form-control" id="quantityid" name="quantity" aria-describedby="quantityHelp">
  </div>
  <div class="mb-3">
    <label for="priceid" class="form-label">Price</label>
    <input type="text" class="form-control" id="priceid" name="price" aria-describedby="priceHelp">
  </div>
  <div class="mb-3">
    <label for="dateid" class="form-label">Date</label>
    <input type="hidden" class="form-control" id="dateid" name="date" aria-describedby="dateHelp" value="<?=date("Y/m/d H:i:s");?>">
  </div>
  

  <button type="submit" id="btnAdd" class="btn btn-primary">Submit</button>
  <div id="msg"></div>
</form>
          </div>
          <div class="col">
          <table>
  <tr>
    <th>ID</th>
    <th>Product Name</th>
    <th>Quantity</th>
    <th>Price per item</th>
    <th>Date Submitted</th>
    <th>Total Value</th>
    
  </tr>
  <tbody id="tbody">
</tbody>
  
</table>
          </div>
          
        </div>        
      </div>
   
</body>
<script src="js/ajaxscript.js"></script>

<script src="js/bootstrap.js"></script>
<script src="js/popper.js"></script>
</html>