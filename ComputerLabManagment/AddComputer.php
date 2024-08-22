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
            <div class="col-md-6 bg-dark text-white p-3 mx-auto">
                <h3>Computer Information</h3>
                <?php 
                      include('connection.php');
                      $qry="select * from computers where delstatus=1 and ssd>128";
                      $ex = mysqli_query($con,$qry);
                      $active= mysqli_num_rows($ex);
                ?>
                <a href="ListofComputer.php" class="btn btn-warning">Computer List </a>
                <h1>Total Computers : <?=$active;?></h1>
                <form action="save.php" method="post">
                    <div class="form-group">
                        <label for="">Computer Name</label>
                        <input type="text" name="computer_name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">IP Address</label>
                        <input type="text" name="address" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">Processor</label>
                        <select name="processor" class="form-control">
                            <option value="">Select Processor</option>
                            <option value="dual_core">Dual Core </option>
                            <option value="core_2_duo">Core 2 Duo</option>
                            <option value="i3">I3</option>
                            <option value="i5">I5</option>
                            <option value="i7">I7</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">HDD ( In GB)</label>
                        <input type="number" class="form-control" name="hdd" />
                    </div>
                    <div class="form-group">
                        <label for="">SSD ( In GB)</label>
                        <input type="number" class="form-control" name="ssd" />
                    </div>
                    <div class="form-group">
                        <label for="">RAM ( In GB)</label>
                        <input type="number" class="form-control" name="ram" />
                    </div>
                    <div class="form-group">
                        <label for="">Is Keyboard + Mouse Available ?</label>
                        <input type="radio" name="keyboard" value="yes" /> Yes
                        <input type="radio" name="keyboard" value="no" /> No
                    </div>
                    <div class="form-group">
                        <label for="">Extra Attached Parts </label>
                        <textarea name="extra" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">College </label>
                        <select name="collegename" id="" class="form-control">
                            <option value="">Select College</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Pharmacy">Pharmacy</option>
                            <option value="MBA">MBA</option>
                            <option value="Physical">Physical</option>
                            <option value="Nursing">Nursing</option>
                            <option value="Hospital">Hospital</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Extact Location</label>
                        <textarea name="location" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Software Installed</label>
                        <input type="checkbox" name="software[]" value="msoffice" /> MS Office
                        <input type="checkbox" name="software[]" value="antivirus" /> Antivirus
                        <input type="checkbox" name="software[]" value="mediaplayer" /> Media Player
                        <input type="checkbox" name="software[]" value="winrar" /> Winrar
                    </div>
                    <div class="form-group">
                        <label for="">Is there any problem ?</label>
                        <textarea name="problem" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-danger" value="Save" />
                    </div>

                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>