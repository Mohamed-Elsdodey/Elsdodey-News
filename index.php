<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">    
    <title>Elsdodey News</title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark  bg-dark"style=" position: sticky;
  top: 0;z-index:20000000000000;" >
        <a class="navbar-brand" href="#">elsdodey news</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link" href="#" >Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="startinng(event.target.innerText);return false">general</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#" onclick="startinng(event.target.innerText);return false">business</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="startinng(event.target.innerText);return false">sports</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="startinng(event.target.innerText);return false">Entertainment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="startinng(event.target.innerText);return false">science</a>
</li>
          </ul>
        </div>
        <div class="input-group mb-3 my-2 my-lg-0" style="width:25%;" >
  <div class="input-group-prepend" >
    <label class="input-group-text bg-dark text-white" for="inputGroupSelect01">country</label>
  </div>
  <select class="custom-select" name="countrry" onChange="myFunction()"id="countries">
    <option selected value="eg">Egypt</option>
    <option value="us">USA</option>
    <option value="fr">France</option>
    <option value="ma">Morocco</option>
    <option value="pt">Portugal</option>
    <option value="cn">Portugal</option>
  </select>
</div>  
      </nav>
      <div class="container my-3 ">
<h3>Top News <span class="badge badge-secondary">By Elsdodey News</span></h3>
<hr>

<div class="container my-5 h-50" style=" height: 50vh;">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner" id="demmo">
    
  <div class="carousel-item active">
      <img src="https://d3pp6wtm1nk365.cloudfront.net/569/9d6ec/22c0/44f6/839b/f12bc8811c33/normal/89626.jpg" height="500px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

</div>

<hr>

<div class="row my-2" id="rowresult"></div>
      </div>
      <footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #3b5998;"
        href="https://www.facebook.com/me/"
        target="_blank"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #55acee;"
        href="https://twitter.com/MohamedELSdodey?fbclid=IwAR0QcdGp6x5MKGDAo0-VML8pvZFs6AtFcV2JZnPzKx8jKf9IVjrRs3zzals"
        target="_blank"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        target="_blank"

        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac;"
        href="https://www.instagram.com/mohamedelsdodey/?fbclid=IwAR0twsyZ0lAeHogkLt2_DFeytwBoTAxWACI4MeCPCSv9_PS0v-DvJH8EY_g"
        target="_blank"

        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 " style="background-color:  #343a40;"  >
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">ElsdodeyNews.com</a>
  </div>
  <!-- Copyright -->
</footer>






<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script> 
 
    <script src="js/index.js"></script>
  </body>
</html>