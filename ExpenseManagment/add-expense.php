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
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <div class="card-header">

                        <h3 class="text-center">Daily Expense Tracker </h3>
                    </div>
                    <div class="card-body">
                        <?php 
                          if(isset($_POST['save']))
                          {
                             $item = $_POST['itemname'];
                             $price = $_POST['price'];
                             $qty = $_POST['qty'];
                             $pdate = $_POST['pdate'];

                             include('connection.php');

                             $qry="insert into daily_exp(itemname,price,qty,pdate) 
                             values('$item','$price','$qty','$pdate')";

                             $ex = mysqli_query($con,$qry);
                            
                             if($ex>0)
                             {
                                echo "Record Successfully Saved!";
                             }

                          }
                        ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Item Name</label>
                                <input type="text" class="form-control" name="itemname" />
                            </div>
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="number" class="form-control" name="price" />
                            </div>
                            <div class="form-group">
                                <label for="">Qty</label>
                                <input type="number" class="form-control" name="qty" />
                            </div>
                            <div class="form-group">
                                <label for="">Purchase Date</label>
                                <input type="date" class="form-control" name="pdate" />
                            </div>
                            <div class="form-group">
                                <input type="submit" name='save' class="btn btn-danger mt-2" value="Save" />
                            </div>
                        </form>
                    </div>

                    <div class="card-body">
                        <a href="exp-report.php" class="btn btn-success">Expense Report</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h3>List of Expenses</h3>
                    </div>
                    <div class="card-body" style="overflow:scroll; height:400px;">
                        <table class="table">
                            <tr>
                                <th>SNo.</th>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                              include('connection.php');
                              $qry="select * from daily_exp where delstatus=1 ORDER BY id desc";
                              $rs = mysqli_query($con,$qry);
                              $i=1; $total =0;
                              while($data = mysqli_fetch_array($rs))
                              {
                                  $total = $total+($data['price'] * $data['qty']);
                                  
                             ?>
                            <tr>
                                <td>
                                    <?=$i;?>
                                </td>
                                <td><?=$data['itemname'];?></td>
                                <td><?=$data['price'];?></td>
                                <td><?=$data['qty'];?></td>
                                <td><?=$data['pdate'];?></td>
                                <td><a href="" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php 
                             $i++;
                              }
                            ?>

                        </table>
                    </div>
                    <div class="card-footer">
                        <h4>Total Expense: <?=$total;?> </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>