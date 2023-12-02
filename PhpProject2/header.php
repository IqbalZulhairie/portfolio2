<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
    <script>
        function bar()
    {
      var wrapper = document.querySelector('.wrapper');
    wrapper.classList.toggle('toggled');
    }
    </script>
    <style>
  body{
  background-color:#edf2f9;
  }
  
  #head {
    width:100%;
    position:absolute;
    transition: all 0.5s ease;
}

   #head h4 {
        margin: auto;
   }
  
  .wrapper {
    padding-left: 0;
  transition: all 0.5s ease;
  position: relative;
}
#sidebar {
  position: fixed;
  left: 250px;
  width: 0;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  overflow-x: hidden;
  background: #f8fbfe;
  transition: all 0.5s ease;
    
}
#sidebar a{
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}
#sidebar a:hover
{
  color:black;
  background-color: #C8DDE3;
}

.wrapper.toggled #sidebar {
  width:250px;
}

.wrapper.toggled #head {
  margin-left:250px;
  position:absolute;
  width:80%;
}

  </style>
    <title>My Portfolio</title>
</head>
<body>
    <div class="wrapper">
       
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="text-center p-4"><img src="http://localhost/PhpProject2/pic/icon.jpg" style="width:auto;height:140px;border-radius:50%;"></h3>
            </div>

            <a href="index.php"><i class="fa fa-user-circle" aria-hidden="true"></i> About Me</a>
            <a href="list_project.php"><i class="fa-solid fa-file"></i> Project List</a>
            <a href="contact.php"><i class="fa-solid fa-phone"></i> Contact Me</a>

        </nav>
    
        <div id="head">
          <nav class="shadow navbar navbar-expand navbar-light bg-white">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" style="padding-left:10px;">
              <li class="nav-item">
                <button class="nav-link active" type="button" onclick="bar()">
                  <i class="fa-solid fa-bars fs-4"></i>
                </button>
              </li>
            </ul>

            <ul class="mx-auto">
                <h4 class="text-center">My Portfolio</h4>
            </ul>
            </div>

          </nav>