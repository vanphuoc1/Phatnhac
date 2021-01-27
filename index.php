<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
<script src="/đường dẫn/jquery-3.2.1-min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<style type="text/css">
        .carousel-inner{
            border:1px solid black;
            border-radius: 10px;
        }
        .amnhac{
            color:#18A2F2;
            font-weight:bold;
            font-size:20px;
            cursor:pointer;
            padding-left:30px;
        }
        .amnhac:hover{
            color:blue;
        }
        .text{
            font-size:17px;
            padding-left:40px;
        }
        .text:hover{
            color:#FF00FF
        }
</style>
    <div class="container-fuild" style="overflow-x: hidden;">
        <div class="row">
            <div class="col-2" style="background-color:#F7DFEE;height:600px;">
                <div class="row">
                    <div class="col-12 mt-3">
                        <span class="amnhac">Âm Nhạc</span>
                    </div>
                    <div class="col-12 mt-4">
                        <span class="text">Cá Nhân</span>
                    </div>
                    <div class="col-12 mt-3">
                        <span class="text">Khám Phá</span>
                    </div>
                    <div class="col-12 mt-3">
                        <span class="text">Theo Dõi</span>
                    </div>
                    <div class="col-12 mt-3">
                        <span class="text">Nhạc Mới</span>
                    </div>
                    <div class="col-12 mt-3">
                        <span class="text">Thể Loại</span>
                    </div>
                    <div class="col-12 mt-3">
                        <span class="text">Top 100</span>
                    </div>
                    <div class="col-12 mt-3">
                        <span class="text">MV</span>
                    </div>
                </div>
            </div>
            <div class="col-10" style="background-color:#FAD9EE;height:600px;">
                    <div class="row mt-3">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <input class="form-control" type="text" placeholder="Nhập tên bài hát, nghệ sĩ hoặc MV...">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                        <div class="col-5" style="padding-right:50px;" >
                            <button class="btn btn-secondary" style="float:right;margin-left:10px;">Đăng kí</button>
                            <button class="btn btn-secondary" style="float:right;">Đăng nhập</button>
                        </div>
                        <div class="col-12 mt-4" style="padding-left:40px;padding-right:50px;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img class="d-block" src="img/hinh/hienho.jpg" alt="First slide" style="width:100%;height:200px;">
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block" src="img/hinh/thanhduy.jpg" alt="Second slide" style="width:100%;height:200px;">
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block w-100" src="img/hinh/sontung.jpg" alt="Third slide">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-5" style="padding-left:30px;">
                            <span style="font-weight: bold;font-size:18px;">Gợi Ý Cho Hôm Nay</span>
                        </div>
                        <div class="col-12 mt-3 " style="padding-left:30px;">
                            <div class="row">
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <img class="carousel-inner" src="img/hinh/hienho.jpg" alt="" style="width:88%;">
                                        </div>
                                        <div class="col-12" style="width:88%;">
                                            <span >12332 321 3213 21321 321 323 21321 312</span> 
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <img class="carousel-inner" src="img/hinh/hienho.jpg" alt="" style="width:88%;">
                                        </div>
                                        <div class="col-12" style="width:88%;">
                                               <span >12332 321 3213 21321 321 323 21321 312</span> 
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <img class="carousel-inner" src="img/hinh/hienho.jpg" alt="" style="width:88%;">
                                        </div>
                                        <div class="col-12" style="width:88%;">
                                            <span >12332 321 3213 21321 321 323 21321 312</span> 
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <img class="carousel-inner" src="img/hinh/hienho.jpg" alt="" style="width:88%;">
                                        </div>
                                        <div class="col-12" style="width:88%;">
                                            <span >12332 321 3213 21321 321 323 21321 312</span> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                           
                        </div>
                    </div>
            </div>
    </div>
</body>
</html>