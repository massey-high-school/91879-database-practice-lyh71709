<!DOCTYPE HTML>

<html lang="en">

<?php
  
    session_start();
    include("config.php");
    include("functions.php"); // include data sanitising
    
    // Connect to database...
    
    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if (mysqli_connect_errno())
        
    {
        echo "Connection failed:".mysqli_connect_error();
        exit;
    }
    
?>
    
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Book Review Database">
    <meta name="keywords" content="books, reading, fiction, non-fiction, genre, reviews">
    <meta name="author" content="Henry Ly">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Book Review Database</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/bookstyle.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
        
        <div class="box banner">
            
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Logo - Click here to go to the Home Page">
            <img class="img-circle" src="Images/website_logo.png" width="150" height="150" alt="generic logo" />
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>The Tiny Library</h1>
        </div>    <!-- / banner -->
        
    
    <!-- side bar for searching goes here -->
    <div class ="box side">
        <h3>Search | <a class="side" href="show_all.php">Show All</a></h3>
        <i>Type part of a title / author name if desired</i>
        
        <hr />
        
        
        <!-- Start of Title Search -->
        
        <form method="post" action="title_search.php" enctype="multiart/form-data">
            
            <input class="search" type="text" name="title" size = "40" value="" required placeholder="Title..." />
            
            <input class="submit" type="submit" name="find_title" value ="Search" />
        
        </form>
        
        <!-- End of Title Search -->
        <hr />
        
        
        <!-- Start of Author Search -->
        
        <form method="post" action="author_search.php" enctype="multiart/form-data">
            
            <input class="search" type="text" name="author" size = "40" value="" required placeholder="Author..." />
            
            <input class="submit" type="submit" name="find_author" value ="Search" />
        
        </form>
        
        <!-- End of Author Search -->
        <hr />
        
        
        <!-- Start of Genre Search -->
        
        <form method="post" action="genre_search.php" enctype="multiart/form-data">
            
            <select name="genre" required>
                <option value"" disabled selected>Genre...</option>
                <option value="Sci Fi">Science Fiction</option>
                <option value="Humour">Humour</option>
                <option value="Historical Fiction">Historical Fiction</option>
                <option value="Non Fiction">Non Fiction</option>
            </select>
            
            <input class="submit" type="submit" name="find_genre" value ="Search" />
        
        </form>
        
        <!-- End of Genre Search -->
        <hr />
        
        
        <!-- Start of ratings form -->
        
        <form method="post" action="rating_search.php" enctype="multipart/form-data">
        
            <select class="half_width" name="amount">
            <option value="exactly" selected>Exactly...</option>
            <option value="more" selected>At least...</option>
            <option value="less" selected>At most...</option>
            </select>
            
            <select class="half_width" name="stars">
                <option value=1>&#9733;</option>
                <option value=2>&#9733;&#9733;</option>
                <option value=3>&#9733;&#9733;&#9733;</option>
                <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
                <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                
            </select>
            
                <input class="submit" type="submit" name="find_rating" value ="Search" />
            
        </form>
        
        <!-- end of ratings form -->
        <hr />
        
        
        
    </div>