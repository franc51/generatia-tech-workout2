<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Szasz Francisc</title>

</head>
     <body>

        <!-- Navigation -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">FS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="movies.php">Movies</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-primary" type="submit">Search</button>
                </form>
              </div>
          </div>
        </nav>

          <!-- Continut -->

<div class="container">
  <h1>Movies</h1>

  <div class="row">

  <?php 
     $movie_id = 1;
     $movies = array(
              ['movie_name' => 'Jeepers Creepers',
               'movie_year' => '2001',
               'movie_description' => 'For the first time in 23 years...The Creeper is back',
               'movie_picture' => 'https://resizing.flixster.com/z32jVWR8Ia14OBG_XDI66gJcLbo=/206x305/v2/https://flxt.tmsimg.com/assets/p20787046_p_v8_aa.jpg" class="card-img-top'],

               ['movie_name' => 'The Inferanl Machine',
               'movie_year' => '2003',
               'movie_description' => 'Bruce searches for the person behind the cryptic messages',
               'movie_picture' => 'https://resizing.flixster.com/Rp_yXOuUE_7DGIb2bXoGj04cAE8=/206x305/v2/https://resizing.flixster.com/WVfGu7nKO71XFDMqoT0BcJA5Xmc=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzLzhiYzNlZDgxLThiYTMtNGE5Ny1hMGJiLTBkNjFkYjAzM2I3MC5qcGc='],

               ['movie_name' => 'Pearl',
               'movie_year' => '2005',
               'movie_description' => 'Pearl must tend to her ailing father under the bitter',
               'movie_picture' => 'https://resizing.flixster.com/JVPqheUytMnxMWOSBAKAG7qIubM=/206x305/v2/https://resizing.flixster.com/fy6wQKjgWAks3UbdN3i3i-jvKc4=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzLzQzZDgyZTExLTU1MjktNDE3Yi1iNzlkLTA3ZTA5NWU1ZGMwNy5wbmc='],
     );

     foreach($movies as $movie) {

?>

<div class="card" style="width: 18rem;" id="movie-<?php echo $movie_id; ?>">
<img src="<?php echo $movie['movie_picture']?>" alt="...">
  <div class="card-body" id="<?php $movie_id; ?>">
    <h5 class="card-title"><?php echo $movie['movie_name']?></h5>
    <p class="card-text"><?php echo $movie['movie_description']?></p>
    <a href="movie-1.php" class="btn btn-primary">Check it out</a>
  </div>
</div>

<?php
$movie_id++;
     } 
?>

   
  </div>
  
</div>

          <!-- Footer -->

<div class="footer fixed-bottom">
  <p>Copyright FS. All rights reserved.</p>
</div>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     </body>
</html>