<?php
    class formMovies{
        public $name;
        public $genre;
        public $director;
        public $duration;
        public $score;

        public function __construct($namex, $genrex, $durationx, $scorex, $directorx){
            $this-> name = $namex;
            $this-> genre = $genrex;
            $this-> duration = $durationx;
            $this-> score = $scorex;
            $this-> director = $directorx;
        }

        public function query($namex, $genrex, $durationx, $scorex, $directorx){
            return "insert into movies(name_movie, genre, duration, score, director) values('$namex', '$genrex','$durationx', '$scorex', '$directorx')";
        }

        public function query_correct(){
            echo "<script>alert('The information was introduced succesful')</script>";
            echo "<script>window.location.replace('index.php')</script>";
        }

        public function query_error(){
            echo "<script>alert('The information was wrong')</script>";
            echo "<script>window.location.replace('add.html')</script>";
        }
    }

    function main(){
        logic_check();
    }

    function logic_check(){
        include 'backend/db.php';
        $myformMovies = new formMovies($_POST["name"], $_POST["genre"], $_POST["duration"], $_POST["score"], $_POST["director"]);
        $sql_query = mysqli_query($con, $myformMovies-> query($_POST["name"], $_POST["genre"], $_POST["duration"], $_POST["score"], $_POST["director"]));
        if($sql_query){
            $myformMovies-> query_correct();
        }else{
            $myformMovies-> query_error();
        }
    }

    main();
?>