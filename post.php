<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multipage Ration Card website</title>
    <!-- CUSTOM STYLESHEET-->
    <link rel="stylesheet" href="style.css">
    <!-- ICONSCOUT CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- FONTAWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google font(montse) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;600;700;800;900&family=Poppins:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.html" class="nav__logo">e-ration</a>
            <ul class="nav__items">
              <li><a href="blog.html">HOME</a></li>
              <li><a href="about.html">ABOUT</a></li>
              <li><a href="service.html">SERVICE</a></li>
              <li><a href="contact.html">CONTACT</a></li>
              <!-- <li><a href="signin.html">SIGN-IN</a></li> -->
              <li class="nav__profile">
                  <div class="avatar">
                      <img src="./images/avatar1.jpg" >
                  </div>
                  <ul>
                      <li><a href="dashboard.html">Dashboard</a></li>
                      <li><a href="logout.html">log out</a></li>
                  </ul>
              </li>
            </ul>       
            <button id="open__nav__button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="menu"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg></button>
            <button id="close__nav__button"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </nav>
<!--------------------------------END OF NAVBAR  ------------------------------------------------>

    <section class="singlepost">
        <div class="container singlepost__container">
            <h2>Lorem ipsum doloer sit amet consectetur adipisicing elit. impedict, dicta.</h2>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avatar3.jpg">
                </div>
                <div class="post__author-info">
                    <h5>By:jhon MIlls</h5>
                    <small>june 13,2022 -10:34</small>
                </div>
             </div>
             <div class="singlepost__thumbnail">
                <img src="./images/blog33.jpg">
             </div>
             <p>
                document on the World Wide Web "with its own address". 
                Web pages are delivered by a web server to the user and displayed in a web browser to act as a "retrieval unit" for the information stored within it. 
                A website consists of many web pages linked together under a common domain name
             </p>
             <p>  document on the World Wide Web "with its own address". 
                Web pages are delivered by a web server to the user and displayed in a web browser to act as a "retrieval unit" for the information stored within it. 
                A website consists of many web pages linked together under a common domain name
             </p>
             <p>
                document on the World Wide Web "with its own address". 
                Web pages are delivered by a web server to the user and displayed in a web browser to act as a "retrieval unit" for the information stored within it. 
                A website consists of many web pages linked together under a common domain name
                document on the World Wide Web "with its own address". 
                Web pages are delivered by a web server to the user and displayed in a web browser to act as a "retrieval unit" for the information stored within it. 
                A website consists of many web pages linked together under a common domain name
             
             </p>
        </div>
    </section>
<!--------------------------------END OF SINGLE POST  ------------------------------------------------>


  <footer>
    <div class="footer__socials">
        <a href="https://youtube.com" target="_blanck"><i class="fa-brands fa-youtube"></i></a>
        <a href="https://facebook.com" target="_blanck"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://linkdein.com" target="_blanck"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="https://x.com" target="_blanck"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="https://instagram.com" target="_blanck"><i class="fa-brands fa-instagram"></i></a>
    </div>
   <script src="./main.js"></script>
</body>
</html>