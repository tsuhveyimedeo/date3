<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Page Title</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationTooltip01" value="" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationTooltip02" value="" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltipUsername" class="form-label">Email</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
      <div class="invalid-tooltip">
        Please choose a unique and valid Email.
      </div>
    </div>
  </div>
  <div class="col-md-6 position-relative">
    <label for="validationTooltip03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationTooltip03" required>
    <div class="invalid-tooltip">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip04" class="form-label">Center</label>
    <select class="form-select" id="validationTooltip04" required>
      <option selected disabled value="">Choose...</option>
         
      <option value="Mokokchung">Mokokchung</option>
      <option value="Kohima">Kohima</option>
      <option value="Dimapur">Dimapur</option>
    
    </select>  
      <div class="invalid-tooltip">
      Please select a valid center.
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip04" class="form-label">Category</label>
    <select class="form-select" id="validationTooltip04" required>
      <option selected disabled value="">Choose...</option>
         
      <option value="ST">ST</option>
      <option value="SC">SC</option>
      <option value="OBC">OBC</option>
      <option value="Others">Others</option>
    
    </select>  
      <div class="invalid-tooltip">
      Please select a valid Category.
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip04" class="form-label">State</label>
    <select class="form-select" id="validationTooltip04" required>
      <option selected disabled value="">Choose...</option>
         
      <option value="Nagaland">Nagaland</option>
      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
      <option value="Assam">Assam</option>
      <option value="Meghalaya">Meghalaya</option>
      <option value="Sikkim ">Sikkim </option>
      <option value="Tripura">Tripura</option>
    </select>  
      <div class="invalid-tooltip">
      Please select a valid State.
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationTooltip05" required>
    <div class="invalid-tooltip">
      Please provide a valid zip.
    </div>
  </div>

<!--file inpiut form-->
<p></p>

<hr class="divider">

  <div class="col-md-3 position-relative">
  <label for="formFile" class="form-label">HSLC/Class 10</label>
  <input class="form-control" type="file" id="formFile">
</div>

<div class="col-md-3 position-relative">
  <label for="formFile" class="form-label">HSLC Admit Card</label>
  <input class="form-control" type="file" id="formFile" accept=".pdf" required>
</div>

<div class="col-md-3 position-relative">
  <label for="formFile" class="form-label">HSSLC/Class 12</label>
  <input class="form-control" type="file" id="formFile" accept=".pdf" required>
</div>

<div class="col-md-3 position-relative">
  <label for="formFile" class="form-label">Class 12 Admit Card</label>
  <input class="form-control" type="file" id="formFile" accept=".pdf" required>
</div>

<div class="col-md-3 position-relative">
  <label for="formFile" class="form-label">Adhaar Card</label>
  <input class="form-control" type="file" id="formFile" accept=".pdf" required>
</div>
<div class="col-md-3 position-relative">
  <label for="formFile" class="form-label">ST/SC/OBC/OTHERS</label>
  <input class="form-control" type="file" id="formFile" accept=".pdf" required>
</div>





<!--submit form-->

<button type="submit" class="btn btn-primary" onclick="validateFile()">Submit Form</button>

<script>
  function validateFile() {
    var fileInput = document.getElementById("formFile");
    var filePath = fileInput.value;
    var allowedExtensions = /(\.pdf)$/i; // Regular expression to match the .pdf extension

    if (!allowedExtensions.exec(filePath)) {
      alert("Invalid file type! Please upload a .pdf file.");
      fileInput.value = ""; // Clear the file input value
      return false;
    }
    return true;
  }
</script>

  
</form>
</body>
</html>