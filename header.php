<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cyberpur Team Page</title>
    <!--option 1: Use Bootstrap cdn when working online-->
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    -->
    <!--Option 2 : Use downloaded version of Bootstrap css for offline use-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom stylesheet for this template -->
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
</head>

<body>

    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <p class="h5 my-0 me-md-auto fw-normal">Team Name</p>
        <nav class="my-2 my-md-0 me-md-3">
            <a class="p-2 text-dark" href="#">Members</a>
            <a class="p-2 text-dark" href="#">Projects</a>
            <a class="p-2 text-dark" href="#">Contact</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Join Us</a>
    </header>