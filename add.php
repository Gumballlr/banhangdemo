<?php
    session_start();
    include 'connect.php';
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }
    $sql1="select * from khachhang";
    $sql2="select * from hanghoa";
    $query1= mysqli_query($con,$sql1);
    $query2= mysqli_query($con,$sql2);
    if(isset($_POST['submit'])){
        $iddonhang=$_POST['iddonhang'];
        $khachhang=$_POST['khachhang'];
        $trangthai=$_POST['trangthai'];
        $khuyenmai=$_POST['khuyenmai'];
        $ngayban=$_POST['ngayban'];
        $ngaygiaohang=$_POST['ngaygiaohang'];
        $ghichu=$_POST['ghichu'];
        
        $iddonhang=$_POST['iddonhang'];
        $hanghoa=$_POST['hanghoa'];
        $soluong=$_POST['soluong'];
        $dongia=$_POST['dongia'];
        $giamtru=$_POST['giamtru'];
        
        $insert1=mysqli_query($con,"INSERT INTO donhang(id,khachhang_id,trangthai,khuyenmai,ngayban,ngaygiaohang,ghichu) value ('$iddonhang',$khachhang,$trangthai,$khuyenmai,'$ngayban','$ngaygiaohang','$ghichu')");
        $insert2=mysqli_query($con,"INSERT INTO chitietdonhang(donhang_id,hanghoa_id,soluong,dongia,giamtru) value('$iddonhang',$hanghoa,$soluong,$dongia,$giamtru)");
        if($insert1 && $insert2){
            header('location:list.php');
        }
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
    <link rel="stylesheet" href="style2.css">
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
            
            <div class="form-group">
                <form action="" method="post">
                    <label for="">ID đơn hàng</label>
                    <input type="text" name="iddonhang" id="" class="form-control" placeholder="Nhập " aria-describedby="helpId">
                    <label for="">Khách hàng</label>
                    <select name="khachhang" id="" class="form-control">
                        <?php foreach($query1 as $item1) {?>
                        <option value="<?php echo $item1['id']?>">
                            <?php echo $item1['hovaten']?>
                        </option>
                        <?php  }?>
                    </select>
                    <label for="">Hàng hóa</label>
                    <select name="hanghoa" id="" class="form-control">
                        <?php foreach($query2 as $item2) {?>
                        <option value="<?php echo $item2['id']?>">
                            <?php echo $item2['ten']?>
                        </option>
                        <?php  }?>
                    </select>
                    <label for="">Số lượng</label>
                    <input type="text" name="soluong" id="" class="form-control" placeholder="Nhập số lượng" aria-describedby="helpId">
                    <label for="">Trạng thái</label>
                    <input type="text" name="trangthai" id="" class="form-control" placeholder="Nhập " aria-describedby="helpId">
                    <label for="">Khuyến mãi</label>
                    <input type="text" name="khuyenmai" id="" class="form-control" placeholder="Nhập " aria-describedby="helpId">
                    <label for="">Ngày bán</label>
                    <input type="datetime-local" name="ngayban" id="" class="form-control" placeholder="Nhập " aria-describedby="helpId">
                    <label for="">Ngày giao</label>
                    <input type="datetime-local" name="ngaygiaohang" id="" class="form-control" placeholder="Nhập" aria-describedby="helpId">
                    <label for="">Ghi chú</label>
                    <input type="text" name="ghichu" id="" class="form-control" placeholder="Nhập" aria-describedby="helpId">
                    <label for="">Đơn giá</label>
                    <input type="text" name="dongia" id="" class="form-control" placeholder="Nhập" aria-describedby="helpId">
                    <label for="">Giảm trừ</label>
                    <input type="text" name="giamtru" id="" class="form-control" placeholder="Nhập " aria-describedby="helpId">
                    <input type="submit" name="submit" id="" class="form-control" placeholder="" aria-describedby="helpId" value="Lưu">
                </form>
              
            </div>

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