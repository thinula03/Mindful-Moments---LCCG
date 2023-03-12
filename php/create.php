<?php
    include 'logic.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="iinfinityAI Developers | Thinula Damsith">
    <meta name="description" content="Impact of social media on mental health - Project under the research and development category by Leo Club of Colombo Griffins">
    <meta name="keywords" content="Leo Club of Colombo Griffins, Research and Development, Mental Health, Support">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrap.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- font icons -->
    <link rel="stylesheet" href="../assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Meyawo main styles -->
    <link rel="stylesheet" href="../assets/css/meyawo.css">
    <title>Blog Posting</title>
</head>
<body>
<section class="section" id="contact">
        <div class="container text-center">
            <p class="section-subtitle">Write Your Own</p>
            <h6 class="section-title mb-5">Blog</h6>
            <!-- contact form -->
            <form method="GET" class="contact-form col-md-10 col-lg-8 m-auto">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input name="name" type="text" id="name" size="50" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <input name="email" type="email" id="email" class="form-control" placeholder="Enter Email" requried>
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea name="comment" id="comment" rows="6" class="form-control"
                            placeholder="Write Something"></textarea>
                    </div>
                    <div class="form-group col-sm-12">
                        <input type="file" name="image" id="image" required>
                    </div>
                    <div class="form-group col-sm-12 mt-3">
                        <input name="submit" type="submit" id="submit" value="Send now" class="btn btn-outline-primary rounded">
                        <a href="../index.php" class="btn btn-outline-primary rounded">Back to Home</a>
                    </div>
                </div>
            </form><!-- end of contact form -->
        </div><!-- end of container -->
    </section>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrap.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>