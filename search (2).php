<html>
    <head>
        <title>imgshop</title>
    </head>
    <style>
        .home{
            background-color: #00acee;
            font-size: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border-radius: 20px;
            width: 101.5px;
            text-align: center;
            color: white;
            position: relative;
            padding:10px;
            display: inline-block;
            text-decoration: none;
            font-weight: bolder;
            cursor: default;
        }
        .home:hover{
            background-color: #0087bb; 
            border-radius: 20px;
            color: white;
        }
        img{
            height: 50px;
            width: 190px;
            position: relative;
            float:right;
            top: -1px;
            right:50px;
        }
        h2{
            color: gray;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            position: absolute;
            margin-left: 30px;
            margin-top: -11px;
            font-size: 30px;
        } 
        .gallery-container{
            display: flex;
            flex-flow: row wrap;
            justify-content: space-around;
            overflow: hidden;
        }
        .gallery-container a div{
            height: 300px;
            width: 300px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border: solid 2px gray;
            border-radius: 10px;
            margin-top: 25px;
            overflow: hidden;
        }
        .gallery-container a div:hover{
            transform: scale(1.1);
            transition: .3s;
            background-color: black;
            opacity: 0.6;
        }
        h3,p{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: gray;
        }
        a{
            text-decoration: none;
            font-weight: bolder;
        }
        .result{
            position: absolute;
            top:50%;
        }
    </style>
    <body>
        <nav class="navigation"><hr>
            <a href="imghome.html" class="home">Back</a>
            <img src="weblogo.png">
           <hr>
        </nav><br>
        <?php
        include("connection.php");
        $sbut = $_POST['sbut'];
        $img = $_POST['img'];
        echo '
        <main>
            <section class="gallery-links">
                <div class="wrapper">
                    <h2 class="h2">Results</h2>
                    <br>';
        ?>
                    <div class="gallery-container">

                        <?php
                        $img = $_POST['img'];
                        $sbut = $_POST['sbut'];
                        include("connection.php");
                        $sql = "SELECT * FROM homegallery WHERE categoryGAllery LIKE '%$img%' OR titleGallery LIKE '%$img%' 
                        OR descGallery LIKE '%$img%' ORDER BY idGallery DESC;";
                        $stmt= mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt,$sql)){
                            echo "SQL STATEMENT FAILED..!";
                        }
                        else {
                            mysqli_stmt_execute($stmt);
                            $result= mysqli_stmt_get_result($stmt);
                            $row = mysqli_num_rows($result);
                            if($row !=0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo
                                    '<a href="imglog.php">
                                    <div style="background-image:url(folder/'.$row["imgFullNameGallery"].');"></div>
                                    <h3>'.$row["titleGallery"].'</h3>
                                    <p>'.$row["descGallery"].'</p>
                                    </a>';
                                }
                            }
                            else{
                                echo '<p class=result>Sorry! No result founded as per your Request</p>';
                            }
                        }  
                        ?>
                    </div>
                </div>
            </section>
        </main>

    </body>
</html>