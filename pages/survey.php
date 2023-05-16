<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/surveystyle.css">
    <title>AI for Language Learning || Survey</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
    <div id="arriba">
        <header>
                <a href="../index.html">
                    <h1>AI for Language Learning</h1>
                </a>
            </header>

            <nav>
                <ul>
                    <a href="about.html"><li>About</li></a>
                    <a href="survey.php"><li>Survey</li></a>
                    <a href="contact.html"><li>Contact Us</li></a>
                </ul>
            </nav>
    </div>
    
    <div id="container">
        <div id="encuesta">
            <form class="lang" action="guardar.php" method="POST">
            <div id="intro">
                <h2>Survey</h2>
                <p>This quick ten question survey can help us with our research on our topic. No personal information is required. The anwers of this survey will be kept private and will only show the stadistic that we gather. Thank you for your time!</p>
                <span class="required_notification">*Mandatory question</span>
            </div>

            <!----------------------------------->

            <div id="question1" class="question">
                <label for="age">*Age:</label><br><br>
                <input type="text" name="age" placeholder="Age" value=""
                maxlength="3" required>
                <span class="form_hint"> Ex. "18"</span>
            </div>
            
            <!----------------------------------->

            <div id="question2" class="question">
                <label for="study" class="quest">*Currently studying...</label><br><br>
                <select name="studies">
                    <option value="Not studying">Not studying</option>
                    <option value="Middle School">Middle School</option>
                    <option value="Highschool">Highschool</option>
                    <option value="College/University">College/University</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <!----------------------------------->

            <div id="question3" class="question">
                <label for="work" class="quest">*Do you currently have a job?</label><br><br>
                <label for="yes" class="radio"><input type="radio" id="yes"  name="work" value="yes">Yes</label><br>
                <label for="no" class="radio"><input type="radio" id="no"  name="work" value="no">No</label><br>
            </div>

            <!---------------------------------->

            <div id="question4" class="question">
                <label for="nativel" class="quest">*What is your native language?</label><br><br>
                <input type="text" name="native" placeholder="Native Language" value="" maxlenght="20" required>
                <span class="form_hint">Ex. "English"</span>
            </div>

            <!--------------------------------------->

            <div id="question5" class="question">
                <label for="languages" class="quest">*What language are you currently learning?</label><br><br>
                <input type="text" name="language" placeholder="Language" value="" maxlenght="20" required>
                <span class="form_hint">Ex. "French, Spanish"</span>
            </div>

            <!--------------------------------------->

            <div id="question6" class="question">
                <label for="reason" class="quest">*Why are you currently studying that language?</label><br><br>

                <select name="reason">
                    <option value="work">Work Related</option>
                    <option value="school">School Related</option>
                    <option value="trip">Planned trip</option>
                    <option value="hobby">Hobby</option>
                    <option value="other">Other</option>
                </select>

            </div>
            
            <!--------------------------------------->

            <div id="question7" class="question">
                <label for="app" class="quest">*Have you used any app language learning app?</label><br><br>

                <label for="yas" class="radio"><input type="radio" id="yas"  name="app" value="yes" required>Yes</label><br>

                <label for="nu" class="radio"><input type="radio" id="nu"  name="app" value="no" required>No</label><br>

            </div>

            <!--------------------------------------->

            <div id="question8" class="question">
                <label for="which" class="quest">*If yes, which app have you used?</label><br><br>
                <select name="which">
                    <option value="none">None</option>
                    <option value="duolingo">Duolingo</option>
                    <option value="babbel">Babbel</option>
                    <option value="memrise">Memrise</option>
                    <option value="busuu">Busuu</option>
                    <option value="rosetta">Rosetta Stone</option>
                    <option value="bottom">Bottom Line</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!--------------------------------------->

            <div id="question9" class="question">
                <label for="method" class="quest">*Would you rather study by these apps and websites or with paid classes?</label><br><br>

                <label for="apps" class="radio"><input type="radio" id="apps"  name="method" value="apps" required>Apps and websites</label><br>

                <label for="classes" class="radio"><input type="radio" id="classes"  name="method" value="classes" required>Paid classes</label><br>

                <label for="both" class="radio"><input type="radio" id="both"  name="method" value="both" required>Both</label><br>

                <label for="unsure" class="radio"><input type="radio" id="unsure"  name="method" value="unsure" required>Unsure</label><br>

            </div>

            <!--------------------------------------->

            <div id="question10" class="question">
                <label for="ai" class="quest">*Do you think AI will have an important role in the future of language learning and in learning in general?</label><br><br>

                <label for="yee" class="radio"><input type="radio" id="yee"  name="ai" value="yes" required>Yes</label><br>

                <label for="noes" class="radio"><input type="radio" id="noes"  name="ai" value="no" required>No</label><br>

                <label for="idk" class="radio"><input type="radio" id="idk"  name="ai" value="Unsure" required>Unsure</label><br>

            </div>

            <button class="submit" type="submit"><b>Send answers<b></button>

            </form>
        </div>

    </div>
    
    <footer>
        <div class="listas" id="foot1">
           <ul>
            <a href="../index.html"><li>Home</li></a>
            <a href="about.html"><li>About</li></a>
            <a href="survey.php"><li>Survey</li></a>
            <a href="contact.html"><li>Contact us</li></a>
           </ul>   
        </div>

        <div class="listas" id="foot2">
            <div id="miniheader">
                <h4>References:</h4>
            </div>
            <ul>
                <a href="https://intellias.com/how-ai-helps-crack-a-new-language/" target="_blank"><li>Intellias.com</li></a>
                <a href="https://plat.ai/blog/ai-integration-in-language-learning/" target="_blank"><li>Plat.ai</li></a>
                <a href="https://theconversation.com/ai-is-changing-scientists-understanding-of-language-learning-and-raising-questions-about-an-innate-grammar-190594" target="_blank"><li>TheConversation.com</li></a>
            </ul>
        </div>

        <div class="listas" id="foot3">
            <div id="logo">
            <img src="../img/Zurberus logo black.png" alt="Logotipo" width="100%" id="logotipo">
            <br>
            <span id="thing">Brought to you by ZurberusVoid</span>
            </div>
            
            <div id="redes">
            <a href="https://www.instagram.com/zurberusvoid/" class="instagram" target="_blank"><img src="../img/insta.png" alt="Instagram" width="42%"></a>
            <a href="https://twitter.com/ZurberusVoid" class="twitter" target="_blank"><img src="../img/twt.png" alt="Twitter" width="200%"></a>
            </div>
            
        </div>

    </footer>
</body>
</html>