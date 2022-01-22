<?php
    session_start();
    include 'connect.php';
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }
?>
<!doctype html>
<html lang="en">
    <title>Đề 1</title>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
  <body>
      <header>
          <img height="50px" width="auto" src="logo.png" alt="">
          <br>
          Quản lý bán hàng
      </header>
    <content>
        <div class="container">
            <ul class="nav">
            <li class="nav-item">
                    <a class="nav-link active" href="index.php">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="list.php">Danh sách đơn hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="cau1.png">Ảnh</a>
                </li>
                <?php if(isset($_SESSION['username'])){ ?>
                <li class="nav-item">
                    <a class="nav-link active" href="logout.php">Đăng xuất</a>
                </li>
                <?php } else{ ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="login.php">Đăng nhập</a>
                    </li>
                <?php } ?>
            </ul>    
            
        </div>
        
    </content>
    <footer>
        79019 - Nguyễn Đức Minh - N02 
        
    </footer>
    <?php if(isset($_SESSION['username'])){ ?>
            <span>Xin Chao <?php echo $_SESSION['username'] ?></span>  
    <?php } ?>
  </body>
</html>