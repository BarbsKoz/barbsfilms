<?php
  include 'backend/db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="shortcut icon" href="Resources/film.ico" type="image/x-icon">
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
                Movie Log
              </h2>
                <table class="table table-bordered border-primary table-striped">
                    <thead class="table table-primary border border-primary">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Score</th>
                        <th scope="col">Director</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <?php
                      $query="select * from movies";
                      $sql=mysqli_query($con, $query);
                      while($show=mysqli_fetch_array($sql)){
                    ?>
                    <tbody>
                      <tr>
                        <td><?php echo $show['id']?></td>
                        <td><?php echo $show['name_movie']?></td>
                        <td><?php echo $show['genre']?></td>
                        <td><?php echo $show['duration']?></td>
                        <td><?php echo $show['score']?></td>
                        <td><?php echo $show['director']?></td>
                        <td>
                          <a id="edit" href= "edit.php?id=<?php echo $show['id']?>" type="button" class="actionButton btn btn-outline-success " data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                              <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                          </a>
                          <a id="delete" href= "delete.php?id=<?php echo $show['id']?>" type="button" class="actionButton btn btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                          </a>
                        </td>
                        <?php }?>
                      </tr>
                    </tbody>
                  </table>
                  <div class="container p-0">
                    <a id="new" href="add.html" type="button" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="left" title="Add">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                      </svg> 
                    </a>
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