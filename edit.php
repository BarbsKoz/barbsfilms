<?php
    include 'backend/db.php';
    if(isset($_POST['btnsave'])){
        $id_code = $_GET['id'];
        $name_movie = $_POST['name'];
        $genre = $_POST['genre'];
        $duration = $_POST['duration'];
        $score = $_POST['score'];
        $director = $_POST['director'];
        $sql_edit = "update movies set name_movie = '$name_movie', genre = '$genre', duration = '$duration', score = '$score', director = '$director' where id= '$id_code'";
        $sql_query = mysqli_query($con, $sql_edit);
        if($sql_query){
            echo "<script>alert('The movie was edited succesfully')</script>";
            //echo "<script>prompt('Password:')</script>";
            echo "<script>window.location.replace('index.php')</script>";
        }else{
            echo "<script>alert('The movie wasn't edited')</script>";
            echo "<script>window.location.replace('index.php')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD</title>
        <link rel="stylesheet" href="styles.css">
        
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    </head>
    <body>
        
        <div class="container-fluid">
            <header class="container border-bottom border-5 border-primary"> 
                <h1 onclick="location.href='index.php'" class="text-center mt-2 fw-bold text-uppercase">
                    Barbs Films
                </h1>
            </header>

            <div id="tableContainer" class="container mt-5 p-5 pt-3 border border-5 border-warning">
                <h2 class="text-left fw-regular">
                    Edit Movie
                </h2>
                
                <div class="container">
                    <form class="row g-3 border bordered-dark p-2 mt-3" autocomplete="off" action="edit.php?id=<?php echo $_GET['id']?>" method="POST">
                        <div class="col-md-8">
                          <label for="validationServer01" class="form-label">Name</label>
                          <input type="text" class="form-control" id="validationServer01" required name="name">
                        </div>
                        <div class="col-md-4">
                          <label for="validationServer02" class="form-label">Genre</label>
                            <input type="text" class="form-control" id="validationServer05" aria-describedby="validationServer05Feedback" required name="genre">
                        </div>
                        <div class="col-md-8">
                          <label for="validationServer05" class="form-label">Director</label>
                          <input type="text" class="form-control" id="validationServer05" aria-describedby="validationServer05Feedback" required name="director">
                        </div>
                        <div class="col-md-2">
                            <label for="validationServer03" class="form-label">Duration</label>
                            <input type="text" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" required name="duration">
                          </div>
                        <div class="col-md-2">
                            <label for="validationCustom04" class="form-label">Score</label>
                            <select class="form-select" aria-label="Default select example" required name="score">
                                <option selected></option>
                                <option value="1">★</option>
                                <option value="2">★★</option>
                                <option value="3">★★★</option>
                                <option value="4">★★★★</option>
                                <option value="5">★★★★★</option>
                            </select>
                        </div>
                        <div class="col-12">
                          <button id= "send" class="btn btn-success" name = "btnsave" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Javascript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
        <script>
          var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
          var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
              return new bootstrap.Tooltip(tooltipTriggerEl)
          })
        </script>
      </body>
</html>