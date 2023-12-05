<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- Section: Design Block -->
<section class=" text-center text-lg-start d-flex justify-content-center align-items-center">
    <style>
      .rounded-t-5 {
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
      }
  
      @media (min-width: 992px) {
        .rounded-tr-lg-0 {
          border-top-right-radius: 0;
        }
  
        .rounded-bl-lg-5 {
          border-bottom-left-radius: 0.5rem;
        }
      }
    </style>
    <div class="card m-3" style="max-width: 75vw">
      <div class="row g-0 d-flex align-items-center bg-secondary text-white">
        <div class="col-lg-4 d-none d-lg-flex">
          <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
            class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
        </div>
        <div class="col-lg-8">
          <div class="card-body py-5 px-md-5 ">
  
            <form action="/login" method="POST">
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" name="email" @error('email') is-invalid 
                @enderror />
                <label class="form-label" for="form2Example1">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                      {{ message }}
                    </div>
                @enderror
              </div>
  
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" />
                <label class="form-label" for="form2Example2">Password</label>
              </div>
  
              
  
              <!-- Submit button -->
              <div class="text-center">
                <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

              </div>
  
            </form>
  
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- Section: Design Block -->
</body>
</html>