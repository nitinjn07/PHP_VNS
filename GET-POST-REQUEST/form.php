<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
     <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto bg-danger p-1">
                   <div class="card bg-dark text-white">
                    <div class="card-header">
                     <h4 class="text-center">Student Registration</h4>
                    </div>
                    <div class="card-body">
                      <form action="data.php" method="post">
                         <div class="form-group">
                            <label for="">Student Name</label>
                            <input type="text" name="sname" class="form-control" />
                         </div>
                         <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="semail" class="form-control" />
                         </div>

                         <div class="form-group">
                            <label for="">Gender</label>
                            <div class="form-check">
                               <input type="radio" name="g" value="Male" class="check-input" /> Male
                               <input type="radio" name="g" value="Female"class="check-input" /> Female
                            </div>
                         </div>

                         <div class="form-group">
                         <label for="">Hobby</label>
                            <div class="form-check">
                               <input type="checkbox" name="hobby[]" value="Signing" class="check-input" /> Singing
                               <input type="checkbox" name="hobby[]" value="Dancing" class="check-input" /> Dancing
                            </div>
                         </div>

                         <div class="form-group">
                            <label for="">City</label>
                              <select name="city" class="form-control">
                                     <option>Select City</option>
                                     <option value="Bhopal">Bhopal</option>
                                     <option value="Indore">Indore</option>
                                     <option value="Jabalpur">Jabalpur</option>
                              </select>
                         </div>
                         <div class="form-group">
                            <input type="submit" class="btn btn-danger mt-2"/>
                         </div>


                      </form>

                    </div>
                    <div class="card-footer">

                    </div>
                   </div>                 
            </div>
          </div>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>