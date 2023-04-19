<?php
  include '../include.php';
?>
<body class="" style="background-color:rgb(11, 68, 11);">
    <div class="contain">
         <nav class="navbar navbar-expand-sm navbar-light bg-light">
             <!-- <a class="navbar-brand" href="#">Navbar</a> -->
             <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                 aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="collapsibleNavId">
                 <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                     <li class="nav-item active ml-5">
                         <a class="nav-link" href="page1.php">HOME <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="sugent.php">SUGENT AT ARMS LOGIN</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#">LOGIN</a>
                     </li>
                     <div class="vertical-line" style=" border-left: 1px solid black;height: 30px;"></div>
                     <li class="nav-item">
                         <a class="nav-link" href="registry.php">REGISTER</a>
                     </li>
                 </ul>
                 <form class="form-inline my-2 my-lg-0">
                     <input class="form-control mr-sm-2" type="text" placeholder="Search">
                     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                 </form>
             </div>
         </nav>
     </div>
    
    <div class="container" style="">
    <div class="row justify-content-center">
      <div class="col-md-6" style="margin-top:5rem;">
        <form>
          <div class="form-group">
            <!-- <label for="name">Name</label> -->
            <input style="border-radius:40px;" type="text" class="form-control" id="name" placeholder="Name">
          </div>
          <div class="form-group">
            <!-- <label for="email">Email address</label> -->
            <input style="border-radius:40px;" type="email" class="form-control" id="email" placeholder="Email Address">
          </div>
          <div class="form-group">
            <!-- <label for="password">Password</label> -->
            <input style="border-radius:40px;" type="password" class="form-control" id="password" placeholder="Login Password">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-password">
            <label class="form-check-label text-light" for="save-password">Save password</label>
          </div>
          <button type="submit" class="btn" style="background-color: rgb(86, 231, 28);">LOGIN</button>
        </form>
      </div>
    </div>
  </div>

    <?php
    include '../footer.php';
    ?>
</body>