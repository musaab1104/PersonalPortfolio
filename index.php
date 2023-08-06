<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohammad Musaib Akhter's Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a8da75ca69.js" crossorigin="anonymous"></script>
</head>

<body>
    <!------------------------------------------------------------------------------------------Home------------------------------------------------------------------------------------------>
    <div id="header">
        <div class="container">
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#domain">Domain</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <img src="images/mit logo.png" class="logo">
            </nav>
            <div class="header-text">
                <p>Computer Science and Engineering</p>
                <h1>Hi, I'm <span>Mohammad Musaib Akhter</span><br> from MIT-ADT University</h1>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------------------------------About--------------------------------------------------------------------------------------->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="images/images102.png">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <br>
                    <p>I am currently a fourth-year student pursuing a degree in
                        Computer Science and Engineering from MIT-ADT University, Pune. As I near the completion of my
                        studies, I am actively exploring
                        job opportunities in the field of cloud computing. With a strong foundation in computer science
                        and a keen interest in cloud technologies, I am eager to contribute my skills and knowledge to a
                        reputed company in the industry. I believe my academic background, combined with my practical
                        experience and passion for cloud computing, make me a suitable candidate for a role in this
                        field. I am excited about the prospect of joining a dynamic and innovative company that values
                        cutting-edge technology and offers opportunities for professional growth and development.</p>

                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('certifications')">Certifications</p>
                        <p class="tab-links" onclick="opentab('projects')">Projects</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>Cloud Computing</span><br>AWS Certified Cloud Practitioner<br>AWS Academy Cloud
                                Foundation<br>AWS Academy Cloud Architecting</li>
                            <li><span>Web Development</span><br>HTML<br>CSS<br>JavaScript</li>
                            <li><span>Mobile Development</span><br>Kotlin</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="certifications">
                        <ul>
                            <li><span>Cloud Computing</span><br>AWS Certified Cloud Practitioner</li>

                        </ul>
                    </div>
                    <div class="tab-contents" id="projects">
                        <ul>
                            <li><span>MITGram</span><br>Event Managment website for MIT-ADT University.</li>
                            <li><span>Quartet Application</span><br>A Mobile Application for Event Managment for MIT-ADT
                                University.</li>
                            <li><span>FlatmateFinder</span><br>A chatbot integrated website for students to find
                                flatmates.</li>
                            <li><span>E-Commerce Website</span><br>A E-Commerce site for clothings</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>MIT-ADT University, Pune (2020-2024)</span><br>7.36 CGPA (Till 6th Semester)</li>
                            <li><span>Lila Mandal High School, Gaya (12th) (2020)</span><br>66% aggregate</li>
                            <li><span>Delhi Public School, Gaya (10th) (2017)</span><br>9.4 CGPA </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------------------------------Services--------------------------------------------------------------------------------------->
    <div id="domain">
        <div class="container">
            <h1 class="sub-title">My Domains</h1>
            <div class="domain-list">
                <div class="one">
                    <i class="fa-brands fa-aws"></i>
                    <h2><span>Cloud</span> Computing</h2>
                    <p>I have a keen interest in cloud computing, and I have successfully cleared the AWS Certified
                        Cloud Practitioner exam. This certification validates my comprehensive understanding of cloud
                        computing concepts and prepares me to excel in leveraging AWS services for businesses' digital
                        transformation.</p>
                    <a href="#">learn more</a>
                </div>
                <div class="two">
                    <i class="fa-solid fa-code"></i>
                    <h2>Web Development</h2>
                    <p>I have a strong passion for web development, and I am delighted to share that I have successfully
                        pursued my interest by gaining expertise in this field. With a solid understanding of web
                        development principles and practical experience, I am equipped to create engaging and dynamic
                        web applications that meet the ever-evolving needs of modern businesses.</p>
                    <a href="#">learn more</a>
                </div>
                <div class="three">
                    <i class="fa-brands fa-android"></i>
                    <h2><span>Android</span> Development</h2>
                    <p>I am excited about venturing into the world of Android development as a beginner. With my growing
                        interest in this field, I am eager to explore the intricacies of building innovative and
                        user-friendly Android applications. I look forward to acquiring the necessary skills and
                        knowledge to create impactful mobile experiences and contribute to the thriving Android
                        development community.</p>
                    <a href="#">learn more</a>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------------------------------Portfolio---------------------------------------------------------------------------------------->
    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">My Work</h1>
            <div class="work-list">
                <div class="work">
                    <img src="images/eventmanagment.jpg">
                    <div class="layer">
                        <h3>MITGram</h3>
                        <p>MITGram is an Event Managment website exclusively for MIT-ADT University where students can
                            get all the information related to the events happening in MIT-ADT</p>
                        <a href="http://52.66.54.135:8000"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/flatmate.jpg">
                    <div class="layer">
                        <h3>FlatmateFinder</h3>
                        <p>A website where students can find flatmates according to their comfort. They can list there
                            property and chat with the interested people who are looking for flats.</p>
                        <a href="https://musaab1104.github.io/FlatmateFinder/" target="_blank"><i
                                class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/ecommerce.jpg">
                    <div class="layer">
                        <h3>E-Commerce Site</h3>
                        <p>An e-commerce platform that specializes in fashion and lifestyle products. The site offers a
                            wide range of clothing, footwear, accessories, and beauty products for men adn women.</p>
                        <a href="https://musaab1104.github.io/E-COMMERCE-SITE/" target="_blank"><i
                                class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
            </div>
            <a href="#portfolio" class="btn"> See More</a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!--------------------------------------------------------------------------------------------Scripts---------------------------------------------------------------------------------------->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fa-solid fa-paper-plane"></i>musaabmallick163@gmail.com</p>
                    <p><i class="fa-solid fa-square-phone"></i>+91 7256013404</p>
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/in/mohammadmusaibakhter/" target="_blank"><i
                                class="fa-brands fa-linkedin" target="_blank"></i></a>
                        <a href="https://github.com/musaab1104" target="_blank"><i class="fa-brands fa-github"></i></a>
                        <a href="https://instagram.com/musaabmallick11?igshid=MjEwN2IyYWYwYw==" target="_blank"><i
                                class="fa-brands fa-instagram"></i></a>
                    </div>
                    <br>
                    <a href="images/Resume _Mohammad _Musaib_Akhter.pdf" download class="btn btn2"
                        target="_blank">Download Resume</a>
                </div>
                <div class="contact-rights">
                    <form action="info.php" method="post">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--------------------------------------------------------------------------------------------Scripts---------------------------------------------------------------------------------------->
    <script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname) {
            for (tablink of tablinks) {
                tablink.classList.remove("active-link");
            }
            for (tabcontent of tabcontents) {
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab")
        }
    </script>
</body>

</html>