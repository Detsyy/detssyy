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
    <!--FONT AWESOME-->
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
    <main class="contactUspage">
        <section>
            <div class="container my-5">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="contactInformation">
                            <h2 class="fw-bold mb-3 mb-lg-5">Contact Us</h2>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <h6><span class="fa-solid fa-location-dot me-2" style="color: #000000;"></span>ADDRESS:
                                </h6>
                                <p class="text-muted">Jose Abad Santos Highway Brgy, Cabalantian Bacolor, Pampanga</p>
                            </div>
                            <div class="col-12 col-md-4">
                                <h6><span class="fa-solid fa-envelope me-2" style="color: #000000;"></span>EMAIL:</h6>
                                <p class="text-muted">enquiries@a2kgroup.org</p>
                            </div>
                            <div class="col-12 col-md-4">
                                <h6><span class="fa-solid fa-phone me-2" style="color: #000000;"></span>Hotline:</h6>
                                <p class="text-muted">045-4050-296</p>
                            </div>
                        </div>
                        <form action="https://formsubmit.co/72f25a64a607989d506c8a6f964cb3eb" method="POST">
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="First Name" id="firstName" aria-describedby="#" required>
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label" name>Last Name</label>
                                <input type="text" class="form-control" name="Last Name" id="Last Name" aria-describedby="#" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="#">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="textArea" name="Message" rows="5"></textarea>
                                <label class="form-label" for="textArea">Message</label>
                            </div>
                            <button type="submit" class="btn btn-lg btn-dark">Submit</button>
                        </form>
                    </div>
                    <!--MAP-->
                    <div class="col-12 col-lg-5 p-5 d-none d-lg-block">
                        <div id="googlemap"></div>
                    </div>
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
        jQuery(function ($) {
            // Google Maps setup
            var googlemap = new google.maps.Map(
                document.getElementById('googlemap'),
                {
                    center: new google.maps.LatLng(15.01270699798011, 120.65668881822862),
                    zoom: 8,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
            );
        });

    </script>

    <!--GOOGLE MAP API-->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
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