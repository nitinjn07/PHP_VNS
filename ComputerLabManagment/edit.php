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
                <h3>Update Computer Information</h3>
                <?php 
                      include('connection.php');
                      $id = $_GET['id'];
                      $qry="select * from computers where id='$id'";
                      $ex = mysqli_query($con,$qry);
                      $data = mysqli_fetch_array($ex);
                       
                     $software = explode(",",$data['software']); // string to array 
                     
                     
                ?>

                <form action="update.php" method="post">
                    <div class="form-group">
                        <label for="">Computer Name</label>
                        <input type="text" value="<?=$data['computer_name']?>" name="computer_name"
                            class="form-control" />
                        <input type="hidden" name="id" value="<?=$data['id'];?>" />
                    </div>
                    <div class="form-group">
                        <label for="">IP Address</label>
                        <input type="text" value="<?=$data['address']?>" name="address" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">Processor</label>
                        <select name="processor" class="form-control">
                            <option value="">Select Processor</option>
                            <option value="dual_core" <?php 
if($data['processor'] == "dual_core") { echo "selected";} ?>>Dual Core </option>
                            <option value="core_2_duo" <?php 
if($data['processor'] == "core_2_duo") { echo "selected";} ?>>Core 2 Duo</option>
                            <option value="i3" <?php 
if($data['processor'] == "i3") { echo "selected";} ?>>I3</option>
                            <option value="i5" <?php 
if($data['processor'] == "i5") { echo "selected";} ?>>I5</option>
                            <option value="i7" <?php 
if($data['processor'] == "i7") { echo "selected";} ?>>I7</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">HDD ( In GB)</label>
                        <input type="number" value="<?=$data['hdd']?>" class="form-control" name="hdd" />
                    </div>
                    <div class="form-group">
                        <label for="">SSD ( In GB)</label>
                        <input type="number" value="<?=$data['ssd']?>" class="form-control" name="ssd" />
                    </div>
                    <div class="form-group">
                        <label for="">RAM ( In GB)</label>
                        <input type="number" value="<?=$data['ram']?>" class="form-control" name="ram" />
                    </div>
                    <div class="form-group">
                        <label for="">Is Keyboard + Mouse Available ?</label>
                        <input type="radio" name="keyboard" value="yes" <?php 
if($data['keyboard'] == "yes") { echo "checked";} ?> /> Yes
                        <input type="radio" name="keyboard" value="no" <?php 
if($data['keyboard'] == "no") { echo "checked";} ?> /> No
                    </div>
                    <div class="form-group">
                        <label for="">Extra Attached Parts </label>
                        <textarea name="extra" class="form-control"><?=$data['extra'];?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">College </label>
                        <select name="collegename" id="" class="form-control">
                            <option value="">Select College</option>
                            <option value="Engineering" <?php 
if($data['collegename'] == "Engineering") { echo "selected";} ?>>Engineering</option>
                            <option value="Pharmacy" <?php 
if($data['collegename'] == "Pharmacy") { echo "selected";} ?>>Pharmacy</option>
                            <option value="MBA" <?php 
if($data['collegename'] == "MBA") { echo "selected";} ?>>MBA</option>
                            <option value="Physical" <?php 
if($data['collegename'] == "Physical") { echo "selected";} ?>>Physical</option>
                            <option value="Nursing" <?php 
if($data['collegename'] == "Nursing") { echo "selected";} ?>>Nursing</option>
                            <option value="Hospital" <?php 
if($data['collegename'] == "Hospital") { echo "selected";} ?>>Hospital</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Extact Location</label>
                        <textarea name="location" class="form-control"><?=$data['location'];?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Software Installed</label>
                        <input type="checkbox" name="software[]" value="msoffice" <?php 
if(in_array("msoffice",$software)) { echo "checked  ";} ?> /> MS Office
                        <input type="checkbox" name="software[]" value="antivirus" <?php 
if(in_array("antivirus",$software)) { echo "checked  ";} ?> /> Antivirus
                        <input type="checkbox" name="software[]" value="mediaplayer" <?php 
if(in_array("mediaplayer",$software)) { echo "checked  ";} ?> /> Media Player
                        <input type="checkbox" name="software[]" value="winrar" <?php 
if(in_array("winrar",$software)) { echo "checked  ";} ?> /> Winrar
                    </div>
                    <div class="form-group">
                        <label for="">Is there any problem ?</label>
                        <textarea name="problem" class="form-control"><?=$data['problem'];?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-danger" value="Update" />
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