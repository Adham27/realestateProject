<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Add Ad</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Realestate</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php url('Ad/main')?>">Ads</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php url('pages/home')?>">Pages</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
        <h1 class="mt-3 text-center">Add Ad</h1>
       
        <form class="row g-3" method="POST" action="<?php url('ad/store') ?>">
            <div class="col-md-6">
                <label for="single_ad_id" class="form-label">Ad Id</label>
                <input type="text" name="single_ad_id" required class="form-control" id="single_ad_id" placeholder="Ad ID">
            </div>
            <div class="col-md-6">
                <label for="client_name" class="form-label">Client Name</label>
                <input type="text" name="client_name" required class="form-control" id="client_name" placeholder="Client Name">
            </div>
            <div class="col-6">
                <label for="phone_num" class="form-label">Phone Number</label>
                <input type="text"  name="phone_num" required class="form-control" id="phone_num" placeholder="Phone number">
            </div>
            <div class="col-6">
                <label for="address"  class="form-label">Address </label>
                <input type="text"  name="address" required class="form-control" id="address" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-6">
                <label for="image"  class="form-label">Image</label>
                <input class="form-control"  name="image" required type="file" id="image">
            </div>
        
            <div class="col-6">
                <label for="descreption"  class="form-label">Descreption</label>
                <input type="text"  name="descreption" required class="form-control" id="descreption" placeholder="Descreption">
            </div>
            <div class="col-6">
                <label for="ad_name"  class="form-label">Ad Name</label>
                <input type="text"  name="ad_name" required class="form-control" id="ad_name"  placeholder="Ad Name">
            </div>
            <div class="col-6">
                <label for="created_at"  class="form-label">Date of Creation</label>
                <input type="date"  name="created_at" required class="form-control" id="created_at">
            </div>
           
                <div class="col-12 text-center">
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>