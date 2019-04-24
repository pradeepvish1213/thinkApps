<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>School Managment</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.7/dist/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('assets/style.css');?>">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-fill w-100">
        <a class="navbar-brand text-warning"></a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(''); ?>">School List</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/add-school'); ?>">Add School</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/course'); ?>">Course List</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/add-course'); ?>">Add Course</a>
            </li>
          </ul>
        </div>
        <form class="form-inline col-5">
          <input class="form-control w-100" autocomplete="off" type="search" id="search_collage" placeholder="Search Colleges" aria-label="Search Colleges">
        </form>
      </nav>