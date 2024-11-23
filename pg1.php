<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="login.css">

    <link rel="stylesheet" href="resp.css">
    <!-- <link rel="stylesheet" href="pf1.css"> -->
    <title>Page 1</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg">
        <a class="navbar-brand" href="#">
          <img src="l.png" alt="Logo" class="logo">
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto listcom">
            <li class="nav-item">
              <a class="nav-link"  href="#children">Information</a>
            </li>
            <li class="nav-item">
              <a  class="nav-link " href="#child">Kids Recipe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php" >Contact Us</a>
            </li>
          
           </ul>
        </div>
      </nav>



<br><br>

 <h1 class="headin" id="children"> Enter <span>Information</span></h1>

      <form action="" method="post" class="ff">
   
    

        <label for="namec">Enter Your child name:</label>
        <input type="text" id="email" name="text" required class="email">
    
        <label for="childage">Child Age:</label>
        <input type="date" id="password" name="child age" required class="password">
    <label for="">Gender</label>
  <label for="">  <input type="radio" name="gender" value="male">male</label>
  <label for="">  <input type="radio" name="gender"   value="female">female</label>
    
        <input type="submit" value="Submit" class="submit" name="Login">
    </form>
    

<br> <br> <br>
<hr style="border: 1px dashed #5d3d3d; margin: 10px;">
    
  <div class="container" id="child">
   
  <h1 class="heading1">Kids Recipe Generator </h1>

  <div class="row3">
    <img class="img3" src="vg.png" alt="">
 
<h3><p  class="parage">The Kids Recipe Generator is an interactive tool that helps parents and caregivers create fun, healthy, and easy-to-make recipes tailored to children's tastes and dietary needs. Whether you're looking for breakfast ideas, snacks, or dinner options,
   the generator provides a variety of kid-friendly recipes that are both nutritious and appealing to young appetites</p> </h3></div>
    
    <input type="submit" value="Suggest a Recipe"     onclick="generateRecipe()" class="nbs" name="Suggest a Recipe">
   
    <div class="recipe" id="recipe"></div>
  </div>



  <footer style="text-align: center;  ">
    <?php include 'foooter.php'; ?>
</footer>



   <script src="pg1.js"></script>   
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>