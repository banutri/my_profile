<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile | Banu Triyantoko</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="/assets/css/custom-style.css">

</head>

<body id="home">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo base_url() ?>">Banu Triyantoko</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- End navbar -->


  <!-- Jumbotron -->
  <section class="jumbotron text-center">

    <img src="/assets/img/pp.jpg" alt="" style="width: 150px; cursor: pointer;" class="rounded-circle border border-4"
      data-bs-toggle="modal" data-bs-target="#modalPhoto">
    <h1 class="display-4">Banu Triyantoko</h1>
    <p class="lead">Fresh Graduate</p>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,192L30,197.3C60,203,120,213,180,192C240,171,300,117,360,117.3C420,117,480,171,540,170.7C600,171,660,117,720,128C780,139,840,213,900,213.3C960,213,1020,139,1080,106.7C1140,75,1200,85,1260,101.3C1320,117,1380,139,1410,149.3L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- End Jumbotron -->

  <!-- Riwayat -->
  <section id="about">
    <div class="container-fluid">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>About Me </h2>
        </div>
      </div>
      <div class="row text-center justify-content-center mb-5">
        <div class="col-lg-6">
          <p>I was born in Kendal on April 27, 1998, Muslim. Graduated with Bachelor degree from Informatics Engineering
            at Dian Nuswantoro University Semarang. Has experience in the field of web-based application development,
            also has experience in solving problems in the field of computers and networks. Have a curiosity about
            something related to IT and do a small experiment on it. </p>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#a2d2ff" fill-opacity="1"
        d="M0,128L30,112C60,96,120,64,180,90.7C240,117,300,203,360,234.7C420,267,480,245,540,202.7C600,160,660,96,720,64C780,32,840,32,900,64C960,96,1020,160,1080,160C1140,160,1200,96,1260,69.3C1320,43,1380,53,1410,58.7L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- End Riwayat -->

  <!-- Projects -->
  <section id="projects">
    <div class="container-fluid">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Projects</h2>
        </div>
      </div>
      <div class="row justify-content-center">


        <div class="col-lg-4 col-md-6 col-sm-9 col-xs-12">
          <div class="card mb-3 shadow-sm">
            <div class="row g-0">
              <div class="col-lg-5">
                <div style=" height: 200px;">
                  <div style="background-image: url('/assets/img/projects/undraw_Resume_folder_re_e0bi.svg');"
                    class="projects-image rounded"></div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="card-body">
                  <h5 class="card-title"> <a href="https://siarsat.banutri.my.id" target="_blank" class="text-dark"
                      style="text-decoration: none;">SiArsat</a> </h5>
                  <p class="card-text">Web-Based documents archiving using Codeigniter Framework for SDN Plalangan 03
                    (Bachelor Thesis)</p>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-9 col-xs-12">
          <div class="card mb-3 shadow-sm">
            <div class="row g-0">
              <div class="col-lg-5">
                <div style=" height: 200px;">
                  <div style="background-image: url('/assets/img/projects/undraw_About_me_re_82bv.svg');"
                    class="projects-image rounded"></div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="card-body">
                  <h5 class="card-title"><a href="/" class="text-dark" style="text-decoration: none;">Online
                      Portfolio</a></h5>
                  <p class="card-text">Web-Based Online Portfolio</p>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-9 col-xs-12">
          <div class="card mb-3 shadow-sm">
            <div class="row g-0">
              <div class="col-lg-5">
                <div style=" height: 200px;">
                  <div style="background-image: url('/assets/img/projects/happydaddy.png');"
                    class="projects-image rounded"></div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="card-body">
                  <h5 class="card-title"><a href="https://happydaddy.banutri.my.id" target="_blank" class="text-dark"
                      style="text-decoration: none;">Happy Daddy</a></h5>
                  <p class="card-text">Web-Based clothes online store. (Under Construction)</p>

                </div>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,32L30,53.3C60,75,120,117,180,122.7C240,128,300,96,360,112C420,128,480,192,540,197.3C600,203,660,149,720,144C780,139,840,181,900,186.7C960,192,1020,160,1080,176C1140,192,1200,256,1260,261.3C1320,267,1380,213,1410,186.7L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- End Projects -->

  <!-- Contact -->
  <section id="contact">
    <div class="container-fluid">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Get In Touch</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12 ">
          <form action="" method="post" accept-charset="utf-8" id="messageForm">

            <div class="mb-3">
              <label for="name" class="form-label">Name </label>
              <input type="text" class="form-control" id="name" aria-describedby="name" name="name">

            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="email" aria-describedby="email"  name="email">
              <span class="text-danger text-error" style="font-size:13px; "></span>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
              <textarea class="form-control" id="message" rows="4"  name="message"></textarea>
              <span class="text-danger text-error" style="font-size:13px; "></span>
            </div>
            <button type="submit" class="btn btn-primary btn-submit">Submit</button>
          </form>
        </div>

      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#0d6efd" fill-opacity="1"
        d="M0,128L40,122.7C80,117,160,107,240,128C320,149,400,203,480,208C560,213,640,171,720,170.7C800,171,880,213,960,245.3C1040,277,1120,299,1200,288C1280,277,1360,235,1400,213.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- End Contact -->


  
  <!-- Toast Message -->
  <div class="fixed-bottom p-3 ms-3 " style="z-index: 9999">
  <div class="toast align-items-center shadow text-center bg-success text-light" role="alert" aria-live="assertive" aria-atomic="true" id="successToast" data-bs-animation="true">
  <div class="d-flex">
    <div class="toast-body p-3 w-100">
    Message sent successful
   </div>
  </div>
</div>
</div>



  <!-- Footer -->
  <footer class="text-center bg-primary text-light p-4">
    <p>Created by <a href="https://github.com/banutri" target="_blank" class="text-white">Banu Triyantoko</a> and his friend, Yes! <a href="https://getbootstrap.com/" target="_blank"
        class="text-white">Bootstrap!</a></p>
  </footer>
  <!-- End Footer -->

  <!-- Modal -->
  <div class="modal fade" id="modalPhoto" tabindex="-1" aria-labelledby="modalPhotoLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 justify-content-center">
              <img src="/assets/img/pp_large.jpg" alt="Profile Photo" class="rounded img-fluid">

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  

  <script>
    let base_url ='<?php echo base_url() ?>';
  </script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
  </script>

  <script src="/vendor/jquery/jquery-3.6.0.min.js"></script>

  <script src="/assets/js/script.js"></script>

</body>

</html>