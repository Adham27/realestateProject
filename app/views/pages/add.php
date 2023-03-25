<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Add Pages</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary " data-bs-theme="dark">
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
        <h1 class="mt-3 text-center">Add Pages</h1>
       
        <form class="row g-3" method="POST" action="<?php url('pages/store') ?>">
            <div class="col-md-6">
                <label for="Page_id" class="form-label">Page Id</label>
                <input type="text" name="Page_id" required class="form-control" id="Page_id" placeholder="Page ID">
            </div>
            <div class="col-md-6">
                <label for="page_name" class="form-label">Page Name</label>
                <input type="text" name="page_name" required class="form-control" id="page_name" placeholder="Page Name">
            </div>
            <div class="col-6">
                <label for="phone_num" class="form-label">View</label>
                <input type="text"  name="view" required class="form-control" id="view" placeholder="view">
            </div>
            <div class="col-6">
                <label for="emails"  class="form-label">emails </label>
                <input type="text"  name="emails" required class="form-control" id="address" placeholder="Num of emails">
            </div>
            <div class="col-6">
                <label for="b2click"  class="form-label">b2click</label>
                <input type="text"  name="b2click" required class="form-control" id="b2click" placeholder="b2click">
            </div>
            <div class="col-6">
                <label for="b3click"  class="form-label">b3click</label>
                <input type="text"  name="b3click" required class="form-control" id="b3click"  placeholder="b3click">
            </div>
            <div class="col-6">
                <label for="link" class="form-label">Link</label>
                <input type="text"  name="link" required class="form-control" id="link" placeholder="link">
            </div>
            <div class="col-12">
                <label for="creation_date"  class="form-label">Date of Creation</label>
                <input type="date"  name="creation_date" required class="form-control" id="creation_date">
            </div>
           
                <div class="col-12 text-center">
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>