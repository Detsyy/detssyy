<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--TITLE OF WEBSITE-->
    <title>A2K Group | Transforming Services</title>
    <!--WEBSITE LOGO-->
    <link rel="x-icon" type="x-icon" href="/images/a2k.ico">
    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/66273fc2f0.js" crossorigin="anonymous"></script>
    <!--OWL CAROUSEL-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <!--CSS FILE-->
    <link rel="stylesheet" href="style.css">
    <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>

    <!--HEADER-->
    <header id="navbar" class="navbar navbar-expand-lg navbar-light"></header>

    <!--MAIN-->
    <main>
        <!--SECTION-->
        <section class="newsSection text-center pt-5">
            <h1>NEWS</h1>
        </section>
        <section class="container-fluid pb-5">
            <div class="container text-center ">
                <h2 class="text-white fw-bolder">OUR LATEST NEWS</h2>
                <div class="row justify-content-center flex-column-reverse flex-md-row row-gap-3">
                    <div class="col-12 col-md-8">
                        <div class="row row-gap-3">
                            <?php
                                require 'connection.php';

                                $category = null;
                                $category = $_GET['category'];

                                if(!$category){
                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Retrieve the data using a join query
                                    $result = mysqli_query($conn, "SELECT * FROM news  ORDER BY date_posted DESC");
                                    $title_slicer=0;
                                    while($row = mysqli_fetch_assoc($result)) {
                                    echo '
                                    <div class="col-12 col-md-5 col-lg-4">
                                    <img src="'.$row["news_image"].'" alt=" " class="ratio ratio 4x3" style="height: 150px; object-fit: cover; ">
                                            <div class="card border-0">
                                            <div class="card-body  text-start">
                                                    <h5 id="title'.$title_slicer.'" class="card-title text-start">'.$row['news_title'].'</h5>
                                                    <p class="card-text">'.$row['news_brief_content'].'</p>
                                                    <a href="newscontent.php?id='.$row['id'].'" target="_blank" class="btn btn-secondary btn-no-radius">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                    $title_slicer++;
                                    }
                                }
                                else{
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Retrieve the data using a join query
                                    $result = mysqli_query($conn, "SELECT * FROM news  WHERE news_category = '$category' ORDER BY date_posted DESC");
                                    $title_slicer=0;
                                    while($row = mysqli_fetch_assoc($result)) {
                                    echo '
                                    <div class="col-12 col-md-5 col-lg-4">
                                            <div class="card border-0";">
                                            <img src="'.$row["news_image"].'" alt=" " class="ratio ratio 4x3" style="height: 150px; object-fit: contain; ">
                                            <div class="card-body">
                                                    <h5 id="title'.$title_slicer.'"class="card-title">'.$row['news_title'].'</h5>
                                                    <p class="card-text">'.$row['news_brief_content'].'</p>
                                                    <a href="newscontent.php?id='.$row['id'].'" target="_blank" class="btn btn-secondary">See more</a>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                    $title_slicer++;
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 border-0">
                        <?php
                            require 'connection.php';

                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Retrieve the data using a join query
                            $result = mysqli_query($conn, "SELECT * FROM news  ORDER BY date_posted DESC");
                            // Display the data in a table
                            $row = mysqli_fetch_assoc($result);
                                echo '
                                <h2 class="fw-bold mb-5">Filter by Type</h2>
                                <a href="news.php?category=" " class="fw-medium d-block">View all</a>
                                <a href="news.php?category='.$row['news_category'].'" class="fw-medium">Events</a>
                                ';
                            
                        ?>
                    </div>

                </div>
                
            </div>
        </section>
    </main>




    <!--FOOTER-->
    <footer id="footer" class="w-100 py-4 flex-shrink-0 border-top"></footer>

    <script>
        $(function () {
            $("#navbar").load("navbar.php");
            $("#footer").load("footer.php");
        });
    </script>


    <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!--OWL CAROUSEL JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--BOOTSTRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!--JS-->
    <script src="script.js"></script>
</body>

</html>