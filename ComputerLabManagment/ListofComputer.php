<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 table-responsive">
                <a href="AddComputer.php" class="btn btn-primary">New Entry</a>
                <table class="table table-bordered bg-dark">
                    <tr>
                        <th>SNo.</th>
                        <th>Computer Name</th>
                        <th>IP</th>
                        <th>Processor</th>
                        <th>HDD </th>
                        <th>SDD </th>
                        <th>RAM</th>
                        <th>Keyboard+Mouse</th>
                        <th>Extra</th>
                        <th>CollegeName</th>
                        <th>Location</th>
                        <th>Software</th>
                        <th>Problem</th>
                        <th>Action</th>
                    </tr>
                    <?php
                      //connection 
                      include('connection.php');
                      //Query 
                      $qry="select * from computers where delstatus=1";
                      //Execute 
                      $ex = mysqli_query($con,$qry);
                      //Fetch - in Associative Array 
                      while($data = mysqli_fetch_array($ex))
                      {
                    ?>
                    <tr>
                        <td><?= $data['id']; ?></td>
                        <td><?= $data['computer_name']; ?></td>
                        <td><?= $data['address']; ?></td>
                        <td><?= $data['processor']; ?></td>
                        <td><?= $data['hdd']; ?></td>
                        <td><?= $data['ssd']; ?></td>
                        <td><?= $data['ram']; ?></td>
                        <td><?= $data['keyboard']; ?></td>
                        <td><?= $data['extra']; ?></td>
                        <td><?= $data['collegename']; ?></td>
                        <td><?= $data['location']; ?></td>
                        <td><?= $data['software']; ?></td>
                        <td><?= $data['problem']; ?></td>
                        <td>
                            <a href="delete.php?id=<?=$data['id'];?>"
                                onClick="return confirm('Are you sure to delete');" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    <?php
                      }
                    ?>

                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>