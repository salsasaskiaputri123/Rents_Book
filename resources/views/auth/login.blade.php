<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>Login!!</title>
</head>

<body style="background-color: #86A3B8;">
    <div class="container">
        <div class="content p-4 my-5">
            <form action="{{route('login-auth')}}" method="POST">
                @csrf
               
                <div class="container" style="width: 500px; height:70px;">
                    <div class="container">
                        @if (Session('success'))
                        <div class="alert alert-success scslgn">
                            {{Session('success')}}
                        </div>
                         @endif
                        <div class="content p-4">
                            <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                                <h1 style="text-align: center">Halaman Login </h1>
                                <div class="mb-3" style="margin-top: 20px;">
                                    <label for="name"><i class="bi bi-people p-2"></i>Name</label>
                                    <input type="text" name="name" class="form-control mt-2" id="name"
                                        placeholder="name">
                                </div>
                                <div class="mb-3">
                                    <label for="password"><i class="bi bi-key"></i>Password</label>
                                    <input type="password" name="password" class="form-control mt-2" id="password"
                                        placeholder="Masukan Password Anda!">
                                </div>
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                                <small class="d-block text-center mt-3">Belum punya akun? <a href="/index-register">Register</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
            
    
</body>

</html>
