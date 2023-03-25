<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="background-color:#343a40; color:#fff;">
<!-- Single Ad Table -->
        <?php
            if(isset($success)):
        ?>
            <h3 class="alert alert-success text-center"><?php echo $success; ?></h3>
        <?php endif; ?>
 <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
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
<!-- adjustment div -->
<div class="container mt-1">
              <br>
</div>
<table class="table">
  <thead class="table text-light text-center">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Client Name</th>
      <th scope="col">Phone Num</th>
      <th scope="col">address</th>
      <th scope="col">image</th>
      <th scope="col">descreption</th>
      <th scope="col">ad_name</th>
      <th scope="col">created_at</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody class="text-light">
    <?php $i1?>
    <?php foreach($ad as $row):?>
    <tr>
      <td><?php echo $row['single_ad_id']?></td>
      <td><?php echo $row['client_name'];?></td>
      <td><?php echo $row['phone_num'];?></td>
      <td><?php echo $row['address'];?></td>
      <td><?php echo $row['image'];?></td>
      <td><?php echo $row['descreption'];?></td>
      <td><?php echo $row['ad_name'];?></td>
      <td><?php echo $row['created_at'];?></td>
      <td>
        <a class="btn btn-primary" href="<?php url('ad/edit/'.$row['single_ad_id']); ?>">
        Edit
      </td>
      <td>
        <a class="btn btn-danger" href="<?php url('ad/delete/'.$row['single_ad_id']); ?>">
        Delete
      </td>
    </tr>
    <?php endforeach?>
  </tbody>
</table>
<div class="btn btn-primary"><a class="text-light text-decoration-none" href=" <?php url('ad/add/'); ?> " >Add</a></div>



</body>
</html>