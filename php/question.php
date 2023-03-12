<?php
    $score = 0;
    $numQuestions = 20;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        for($i = 1; $i <= $numQuestions; $i++){
            $answer = $_POST['q' . $i];

            switch ($answer){
                case '1':
                    $score += 1;
                    break;
                case '2':
                    $score += 2;
                    break;
                case '3':
                    $score += 3;
                    break;
                case '4':
                    $score += 4;
                    break;
                case '5':
                    $score += 5;
                    break;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="iinfinityAI Developers | Thinula Damsith">
    <meta name="description" content="Impact of social media on mental health - Project under the research and development category by Leo Club of Colombo Griffins">
    <meta name="keywords" content="Leo Club of Colombo Griffins, Research and Development, Mental Health, Support">
    
    <title>Mindful Moments | Leo Club of Colombo Griffins</title>
    
    <link rel="stylesheet" href="../assets/vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="../assets/css/meyawo.css">
    <link rel="shortcut icon" href="../assets/imgs/favicon.ico" type="image/x-icon">
</head>
<body>
    <section class="section" id="contact">
        <div class="container text-center">
            <p class="section-subtitle"></p>
            <h6 class="section-title mb-5">Answer All</h6>
            <!-- contact form -->
            <form method="POST" class="contact-form col-md-10 col-lg-8 m-auto">
                    <fieldset>
                        <legend>Instructions</legend>
                        <p>Please read each question carefully and select the answer that best represents your experience with social media. There are no right or wrong answers, so please be honest with yourself.</p>
                    </fieldset>
            
                    <fieldset>
                        <legend>Questions</legend>
            
                        <ol style="list-style-type: none;">
                            <li>
                                <label>How often do you check your social media accounts?</label>
                                <br>
                                <input type="radio" id="q1a1" name="q1" value="1">
                                <label for="q1a1">Never</label>
                                <br>
                                <input type="radio" id="q1a2" name="q1" value="2">
                                <label for="q1a2">Rarely</label>
                                <br>
                                <input type="radio" id="q1a3" name="q1" value="3">
                                <label for="q1a3">Sometimes</label>
                                <br>
                                <input type="radio" id="q1a4" name="q1" value="4">
                                <label for="q1a4">Often</label>
                                <br>
                                <input type="radio" id="q1a5" name="q1" value="5">
                                <label for="q1a5">Always</label><br><br>
                            </li>
                            
                            <!-- Repeat the above block for each question (2-15) -->
                            <li>
                                <label>How many hours per day do you spend on social media</label>
                                <br>
                                <input type="radio" id="q2a1" name="q2" value="1">
                                <label for="q2a1">Less than 1 hour</label>
                                <br>
                                <input type="radio" id="q2a2" name="q2" value="2">
                                <label for="q2a2">1 - 2 hours</label>
                                <br>
                                <input type="radio" id="q2a3" name="q2" value="3">
                                <label for="q2a3">2 - 3 hours</label>
                                <br>
                                <input type="radio" id="q2a4" name="q2" value="4">
                                <label for="q2a4">3 - 4 hours</label>
                            <br>
                                <input type="radio" id="q2a5" name="q2" value="5">
                                <label for="q2a5">More than 4 hours</label><br><br>
                            </li>

                            <li>
                                <label>Do you find yourself constantly checking your social media accounts throughout the day? </label>
                                <br>
                                <input type="radio" id="q3a1" name="q3" value="1">
                                <label for="q3a1">Never</label>
                                <br>
                                <input type="radio" id="q3a2" name="q3" value="2">
                                <label for="q3a2">Rarely</label>
                                <br>
                                <input type="radio" id="q3a3" name="q3" value="3">
                                <label for="q3a3">Sometimes</label>
                                <br>
                                <input type="radio" id="q3a4" name="q3" value="4">
                                <label for="q3a4">Often</label>
                                <br>
                                <input type="radio" id="q3a5" name="q3" value="5">
                                <label for="q3a5">Always</label><br><br>
                            </li>

                            <li>
                                <label>Have you ever tried to reduce the amount of time you spend on social media but found it difficult to do so? </label>
                                <br>
                                <input type="radio" id="q4a1" name="q4" value="1">
                                <label for="q4a1">Yes</label>
                                <br>
                                <input type="radio" id="q4a2" name="q4" value="2">
                                <label for="q4a2">No</label><br><br>
                            </li>

                            <li>
                                <label>Do you prioritize checking your social media accounts over the other activities or responsibilities? </label>
                                <br>
                                <input type="radio" id="q5a1" name="q5" value="1">
                                <label for="q5a1">Never</label>
                                <br>
                                <input type="radio" id="q5a2" name="q5" value="2">
                                <label for="q5a2">Rarely</label>
                                <br>
                                <input type="radio" id="q5a3" name="q5" value="3">
                                <label for="q5a3">Sometimes</label>
                                <br>
                                <input type="radio" id="q5a4" name="q5" value="4">
                                <label for="q5a4">Often</label>
                                <br>
                                <input type="radio" id="q5a5" name="q5" value="5">
                                <label for="q5a5">Always</label><br><br>
                            </li>

                            <li>
                                <label>Do you feel a sense of relief or satisfaction after checking your social media accounts? </label>
                                <br>
                                <input type="radio" id="q6a1" name="q6" value="1">
                                <label for="q6a1">Never</label>
                                <br>
                                <input type="radio" id="q6a2" name="q6" value="2">
                                <label for="q6a2">Rarely</label>
                                <br>
                                <input type="radio" id="q6a3" name="q6" value="3">
                                <label for="q6a3">Sometimes</label>
                                <br>
                                <input type="radio" id="q6a4" name="q6" value="4">
                                <label for="q6a4">Often</label>
                                <br>
                                <input type="radio" id="q6a5" name="q6" value="5">
                                <label for="q6a5">Always</label><br><br>
                            </li>

                            <li>
                                <label>Do you feel compelled to respond to notifications or messages on social media immediately? </label>
                                <br>
                                <input type="radio" id="q7a1" name="q7" value="1">
                                <label for="q7a1">Never</label>
                                <br>
                                <input type="radio" id="q7a2" name="q7" value="2">
                                <label for="q7a2">Rarely</label>
                                <br>
                                <input type="radio" id="q7a3" name="q7" value="3">
                                <label for="q7a3">Sometimes</label>
                                <br>
                                <input type="radio" id="q7a4" name="q7" value="4">
                                <label for="q7a4">Often</label>
                                <br>
                                <input type="radio" id="q7a5" name="q7" value="5">
                                <label for="q7a5">Always</label><br><br>
                            </li>

                            <li>
                                <label>Have you ever missed out on important events or activities because of social media use? </label>
                                <br>
                                <input type="radio" id="q8a1" name="q8" value="1">
                                <label for="q8a1">Yes</label>
                                <br>
                                <input type="radio" id="q8a2" name="q8" value="2">
                                <label for="q8a2">No</label><br><br>
                            </li>

                            <li>
                                <label>Do you feel like social media use has negatively impacted your personal relationships or social life? </label>
                                <br>
                                <input type="radio" id="q9a1" name="q9" value="1">
                                <label for="q9a1">Yes</label>
                                <br>
                                <input type="radio" id="q9a2" name="q9" value="2">
                                <label for="q9a2">No</label><br><br>
                            </li>

                            <li>
                                <label>Have you ever experienced widrawal symptoms (Such as irritability, restlessness, or mood swings) when unable to access social media for a certain amount of time? </label>
                                <br>
                                <input type="radio" id="q10a1" name="q10" value="1">
                                <label for="q10a1">Yes</label>
                                <br>
                                <input type="radio" id="q10a2" name="q10" value="2">
                                <label for="q10a2">No</label><br><br>
                            </li>

                            <li>
                                <label>Do you feel like you are missing out on something if you don't check your social media accounts frequently? </label>
                                <br>
                                <input type="radio" id="q11a1" name="q11" value="1">
                                <label for="q11a1">Never</label>
                                <br>
                                <input type="radio" id="q11a2" name="q11" value="2">
                                <label for="q11a2">Rarely</label>
                                <br>
                                <input type="radio" id="q11a3" name="q11" value="3">
                                <label for="q11a3">Sometimes</label>
                                <br>
                                <input type="radio" id="q11a4" name="q11" value="4">
                                <label for="q11a4">Often</label>
                                <br>
                                <input type="radio" id="q11a5" name="q11" value="5">
                                <label for="q11a5">Always</label><br><br>
                            </li>

                            <li>
                                <label>Have you ever used social media to escape from problems or negative emotions? </label>
                                <br>
                                <input type="radio" id="q12a1" name="q12" value="1">
                                <label for="q12a1">Yes</label>
                                <br>
                                <input type="radio" id="q12a2" name="q12" value="2">
                                <label for="q12a2">No</label><br><br>
                            </li>

                            <li>
                                <label>Have you ever stayed up later than you intended to because of social media use? </label>
                                <br>
                                <input type="radio" id="q13a1" name="q13" value="1">
                                <label for="q13a1">Yes</label>
                                <br>
                                <input type="radio" id="q13a2" name="q13" value="2">
                                <label for="q13a2">No</label><br><br>
                            </li>

                            <li>
                                <label>Do you feel like you haave control over your social media use? </label>
                                <br>
                                <input type="radio" id="q14a1" name="q14" value="1">
                                <label for="q14a1">Yes, I feel in control</label>
                                <br>
                                <input type="radio" id="q14a2" name="q14" value="2">
                                <label for="q14a2">Somewhat, but it's difficult to control at times</label>
                                <br>
                                <input type="radio" id="q14a3" name="q14" value="3">
                                <label for="q14a3">No, I feel addicted and unable to control my use</label><br><br>
                            </li>

                            <li>
                                <label>Do you experience negative consequences from your social media use (ex: decreased productivity, relationship problems, sleep disturbance)</label>
                                <br>
                                <input type="radio" id="q15a1" name="q15" value="1">
                                <label for="q15a1">Yes</label>
                                <br>
                                <input type="radio" id="q15a2" name="q15" value="2">
                                <label for="q15a2">No</label><br><br>
                            </li>

                            <li>
                                <label>Have you ever tried to hide your social media use from others? </label>
                                <br>
                                <input type="radio" id="q16a1" name="q16" value="1">
                                <label for="q16a1">Yes</label>
                                <br>
                                <input type="radio" id="q16a2" name="q16" value="2">
                                <label for="q16a2">No</label><br><br>
                            </li>

                            <li>
                                <label>Have you ever felt guilty or ashamed about your social media use? </label>
                                <br>
                                <input type="radio" id="q17a1" name="q17" value="1">
                                <label for="q17a1">Yes</label>
                                <br>
                                <input type="radio" id="q17a2" name="q17" value="2">
                                <label for="q17a2">No</label><br><br>
                            </li>

                            <li>
                                <label>Do you feel like you need social media to feel connected with others? </label>
                                <br>
                                <input type="radio" id="q18a1" name="q18" value="1">
                                <label for="q18a1">Yes</label>
                                <br>
                                <input type="radio" id="q18a2" name="q18" value="2">
                                <label for="q18a2">No</label><br><br>
                            </li>

                            <li>
                                <label>Do you find yourself mindlessly scrolling through social media feeds without specific purpose? </label>
                                <br>
                                <input type="radio" id="q19a1" name="q19" value="1">
                                <label for="q19a1">Never</label>
                                <br>
                                <input type="radio" id="q19a2" name="q19" value="2">
                                <label for="q19a2">Rarely</label>
                                <br>
                                <input type="radio" id="q19a3" name="q19" value="3">
                                <label for="q19a3">Sometimes</label>
                                <br>
                                <input type="radio" id="q19a4" name="q19" value="4">
                                <label for="q19a4">Often</label>
                                <br>
                                <input type="radio" id="q19a5" name="q19" value="5">
                                <label for="q19a5">Always</label><br><br>
                            </li>
                            <li>
                                <label>Do you feel like social media use has impacted your mental health negatively (eg: increased anxiety, depression, self-esteem issues)? </label>
                                <br>
                                <input type="radio" id="q20a1" name="q20" value="1">
                                <label for="q20a1">Yes</label>
                                <br>
                                <input type="radio" id="q20a2" name="q20" value="2">
                                <label for="q20a2">No</label><br><br>
                            </li>
                        </ol>
                    </fieldset>
            
                    <input type="submit" value="Submit" class="btn btn-outline-primary rounded" name="submit" id="submit" style="width: 90%;">

            </form><br><br>
            <?php  echo '<p class="btn btn-outline-primary">Your total sore is: ' . $score . '</p>'; ?><!-- end of contact form -->
        </div><!-- end of container -->
    </section>
    <section class="section" id="pricing">
        <div class="container text-center">
            <p class="section-subtitle"></p>
            <h6 class="section-title mb-6">Instructions</h6>
            <!-- row -->
            <div class="pricing-wrapper">
                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <img class="pricing-card-icon" src="../assets/imgs/basic.webp"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="pricing-card-body">
                        <h6 class="pricing-card-title">Low level of addiction</h6>
                        <b><p class="pricing-card-price">Score 10 - 20</p></b>
                        <div class="pricing-card-list">
                            <p>If your score falls within this range, it suggests that you have a healthy relationship with social media and are using it in a moderate and balanced way. However, it is still important to be mindful of your social media use and to ensure that it does not interfere with other important aspects of your life</p>
                    </div>
                </div>
                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <img class="pricing-card-icon" src="../assets/imgs/intermediate.webp"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="pricing-card-body">
                        <h6 class="pricing-card-title">Moderate level of addiction</h6>
                        <b><p class="pricing-card-price">Score 21 - 30</p></b>
                        <div class="pricing-card-list">
                            <p>If your score falls within this range, it suggests that you are moderately addicted to social media. You may find yourself spending more time than you would like on social media and may experience some negative consequences as a result. It may be helpful to set some limits on your social media use and to engage in other activities that you enjoy.</p>
                    </div>
                </div>
                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <img class="pricing-card-icon" src="../assets/imgs/advanced.webp"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="pricing-card-body">
                        <h6 class="pricing-card-title">High level of addiction</h6>
                        <b><p class="pricing-card-price">Score 31 - 50</p></b>
                        <div class="pricing-card-list">
                            <p>If your score falls within this range, it suggests that you have a high level of addiction to social media. You may find yourself spending a significant amount of time on social media and may experience significant negative consequences as a result. It is important to seek professional help if you feel that your social media use is interfering with your daily life, relationships, or mental health. You may also benefit from support groups or other resources that can help you manage your addiction.</p>
                            <p style="font-weight: bold;">If you're in this level of addiction, you should contact a professional to help you with your addiction.</p>
                    </div>
                </div>

            </div><!-- end of pricing wrapper -->
        </div> <!-- end of container -->
    </section>
    <a href="../index.php" class="btn btn-outline-primary rounded" style="width: 30%; margin-left: 5%; margin-top: 5%;">Go back</a><br><br>
</body>
</html>