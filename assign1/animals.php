<?php
    //connect to database
    try
    {
        //instantiate a database object
        $dbh = new PDO("mysql:host=localhost;
                       dbname=hliu_grcc", "hliu_grccuser", "hliu123");
        echo 'Connected to database! <br>';
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
    //queries for Insert Update Delete and Select(single)
    {
    
    /*//Define the query
    $sql= "INSERT INTO animals(animal_name, animal_type) VALUES(:name, :type)";
    
    //Prepare the statement
    $statement= $dbh->prepare($sql);
    
    //Bind the parameters
    $type = 'kangaroo';
    $name = 'Joey';
    $statement->bindParam(':type', $type, PDO::PARAM_STR);
    $statement->bindParam(':name', $name, PDO::PARAM_STR);
    
    //Execute
    $statement->execute();
    
    //Bind the parameters
    $type = 'snake';
    $name = 'Slitherin';
    $statement->bindParam(':type', $type, PDO::PARAM_STR);
    $statement->bindParam(':name', $name, PDO::PARAM_STR);
    
    //Execute
    $statement->execute();
    
    //Bind the parameters
    $type = 'spider';
    $name = 'Spidie';
    $statement->bindParam(':type', $type, PDO::PARAM_STR);
    $statement->bindParam(':name', $name, PDO::PARAM_STR);
    
    //Execute
    $statement->execute();
    
    //Bind the parameters
    $type = 'dog';
    $name = 'Doggie';
    $statement->bindParam(':type', $type, PDO::PARAM_STR);
    $statement->bindParam(':name', $name, PDO::PARAM_STR);
    
    //Execute
    $statement->execute();
    
    //Bind the parameters
    $type = 'fish';
    $name = 'Fishy';
    $statement->bindParam(':type', $type, PDO::PARAM_STR);
    $statement->bindParam(':name', $name, PDO::PARAM_STR);
    
    //Execute
    $statement->execute();
    
    //Define the query
    $sql= "UPDATE animals SET animal_name= :new WHERE animal_name= :old";
    
    //Prepare the statement
    $statement = $dbh->prepare($sql);
    
    //Bind the parameters
    $old = 'Joey';
    $new = 'Troy';
    $statement->bindParam(':old', $old, PDO::PARAM_STR);
    $statement->bindParam(':new', $new, PDO::PARAM_STR);
    
    //Execute
    $statement->execute();
    
    //Define the query
    $sql= "DELETE FROM animals WHERE animal_type= :type";
    
    //Prepare the statement
    $statement = $dbh->prepare($sql);
    
    //Bind the parameters
    $type = 'kangaroo';
    $statement->bindParam(':type', $type, PDO::PARAM_STR);
    
    //Execute
    $statement->execute();
    
    //Define the query
    $sql = "SELECT animal_name, animal_type FROM animals WHERE animal_id= :id";
    
    //Prepare the statement
    $statement = $dbh->prepare($sql);
    
    //Bind the parameters
    $id = 3;
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    
    //Execute the statement
    $statement->execute();
    
    //Process the result
    //The fetch() method returns a single row
    //PDO::FETCH_ASSOC returns results as an associative array
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    echo $row['animal_name']." - ".$row['animal_type'];*/
    }

    
    #query for Select(multiple)
    {
    /*//Define the query
    $sql = "SELECT animal_name, animal_type FROM animals";
    
    //Prepare the statement
    $statement = $dbh->prepare($sql);
    
    //Execute the statement
    $statement->execute();
    
    //Process the result
    //The fetchAll () method returns all of the rows in a result set.
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $row)
    {
        echo $row['animal_type']. ' - ' . $row['animal_name'] ."<br>";
    }*/
    }

    $valid = false;
    if(isset($_POST['add']))
    {
        if (!empty($_POST['animalName']))
        {
            $name = htmlspecialchars($_POST['animalName']);
            
        }
        else
        {
            $nameErr = "<span class=\"text-danger\">Please enter an animal name.</span>";
            $valid = false;
        }
        if (!empty($_POST['animalType']))
        {
            $type = htmlspecialchars($_POST['animalType']);
        }
        else
        {
            $typeErr = "<span class=\"text-danger\">Please enter an animal type.</span>";
            $valid = false;
        }
        $valid = true;
        
        if($valid = true)
        {
            //Define the query
            $sql= "INSERT INTO animals(animal_name, animal_type) VALUES(:name, :type)";
            
            //Prepare the statement
            $statement= $dbh->prepare($sql);
            
            //Bind the parameters
            $statement->bindParam(':type', $type, PDO::PARAM_STR);
            $statement->bindParam(':name', $name, PDO::PARAM_STR);
            
            //Execute
            $statement->execute();
            $name = "";
            $type = "";
        }
    }
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset=utf-8>
            <title>Animals</title>
            
            <!-- bootstrap -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        </head>
        
        <body>
            <div class="col-sm-6 col-md-6">
                <div class="jumbotron">
                    <div class="container">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <fieldset class="form-group">
                                <section>
                                    <label class="input">Animal Name: <?php echo $nameErr ?>
                                        <input type="text" class="form-control" name="animalName" value ="<?php echo $_POST['animalName']; ?>">
                                    </label>
                                </section>
                            </fieldset>
                            <fieldset class="form-group">
                                <section>
                                    <label class="input">Animal Type: <?php echo $typeErr ?>
                                        <input type="text" class="form-control" name="animalType" value ="<?php echo $_POST['animalType']; ?>">
                                    </label>
                                </section>
                            </fieldset>
                            <button type="submit" name="add" class="btn-u btn-u-md btn-lg btn-primary" name="btn_sub" >Add Animal</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-6">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Animal Name</th>
                            <th>Animal Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            ///Define the query
                            $sql = "SELECT animal_name, animal_type FROM animals";
                            
                            //Prepare the statement
                            $statement = $dbh->prepare($sql);
                            
                            //Execute the statement
                            $statement->execute();
                            
                            //Process the result
                            //The fetchAll () method returns all of the rows in a result set.
                            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                            foreach($result as $row)
                            {
                                $animalType = $row['animal_type'];
                                $animalName = $row['animal_name'];
                                echo "
                                    <tr>
                                        <td>$animalName</td>
                                        <td>$animalType</td>
                                    </tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </body>
    </html>