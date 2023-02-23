<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Rents Book</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-dark navbar-expand-lg"  style="background-color: #5B8FB9;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/images/buku.png" alt="Logo" width="40" height="30" class="d-inline-block align-text-top">
                Rent Books
              </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Horror</a></li>
                  <li><a class="dropdown-item" href="#">Comedy</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-white active" href="/index-login">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--Akhir Navbar-->

      <!--Corousel-->
      <a class="text-center my-4"></a>
      <div id="carouselExampleInterval" class="carousel slide" style="max-height: 550px; max-width: 100%" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="2000">
            <img src="/images/iklan1.jpg" class="d-block w-100" alt="..." style="max-height: 550px">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="/images/iklan1.jpg" class="d-block w-100" alt="..." style="max-height: 550px">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="/images/iklan1.jpg" class="d-block w-100" alt="..." style="max-height: 550px">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!--Akhir Corousel-->

      <!-- Jumbotron-->
      <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4 mb-3">
                <h1>Salsa Saskia</h1>
                <a href="#" class="btn btn-outline-primary">Ayo Daftar!!</a>
            </div>
            <div class="col-8">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Molestias in est suscipit dignissimos dolor vero quod eveniet a tempore. 
                Sed expedita eius quis vero dolores, nulla est nihil necessitatibus dignissimos?
               </p>
            </div>
        </div>
      </div>
      <!--Akhir Jumbotan-->
      <!--Card Popular Books-->
      <section style="background-color: #5B8FB9;">
      <div class="container mt-5">
        <div class="row text-center text-white active">
            <h2 class="mt-3" >Popular Books</h2>
            <hr class="solid">
        </div>
        <div class="row mt-4">
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://marketplace.canva.com/EAFFEs6P168/1/0/1003w/canva-orange-green-watercolor-soft-cute-cartoon-love-romance-book-cover-5Zk2VM0-EAc.jpg" class="card-img-top" alt="..." style="max-height: 400px">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary
                      w-100">Read</a>
                    </div>
                  </div>

            </div>
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEWwvdWGykvbMpwn7FPwwI4lcLOYztXlQJThl1s2NwuiP419LDmWH2CSt7deD_GlXXraQ&usqp=CAU" class="card-img-top" alt="..." style="max-height: 400px">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary
                      w-100">Read</a>
                    </div>
                  </div>

            </div>
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8kgoNQCJkykiFP_LabOMsu9nBaxaryawaa-RivDV7n7px6OoKjFUKqj3XOuiN_YHlaHw&usqp=CAU" class="card-img-top" alt="..." style="max-height: 400px">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary
                      w-100">Read</a>
                    </div>
                  </div>

            </div>
        </div>
      </div>
    </section>
      <!--Akhir Card-->

      <!-- Contact -->
      <div class="container my-3">
        <div class="row text-center">
            <h2>Message</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="{{route('store')}}" method="POST">
                  @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" 
                      id="name" name ="name">
                    </div>
                    <div class="mb-3">
                      <label for="message" class="form-label">Message</label>
                      <textarea name ="message" class="form-control" 
                      id="message">
                      </textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Send</button>
                </form>
              
            </div>

        </div>
      </div>
        <!--  Akhir Contact -->

        <!--  Fotter -->
        <br>
        <footer class=" mt-5 bg-primary text-center" style="height: 40px;">
            <p>Created by <a href="#" style="text-decoration: none; color: black;"
             target="_blank">@Salsa Saskia Putri</a></p>
        </footer>
        <!--  Akhir Footer -->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</body>
</html>

