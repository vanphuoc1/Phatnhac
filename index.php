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
body{
    background-color:#FAD9EE;
}

        .carousel-inner{
            border:1px solid black;
            border-radius: 10px;
        }
        .amnhac{
            text-decoration: none;
            color:#DC143C;
            font-weight:bold;
            font-size:20px;
            cursor:pointer;
            padding-left:35px;
        }
        .amnhac:hover{
            color:blue;
        }
        .text{
            color:black;
            text-decoration: none;
            font-size:17px;
            padding-left:40px;
        }
        .text:hover{
            color:#FF00FF;
        }
</style>
    <div class="container-fuild" style="overflow-x: hidden;">
        <div class="row">
            <div class="col-2" style="">
                <div class="row">
                    <div class="col-12 mt-3">
                        <a class="amnhac" href="">Music Home</a>
                    </div>
                    <div class="col-12 mt-4">
                        <a class="text" href="">Cá Nhân</a>
                    </div>
                    <div class="col-12 mt-3">
                        <a class="text" href="">Khám Phá</a>
                    </div>
                    <div class="col-12 mt-3">
                        <a class="text" href="">Theo Dõi</a>
                    </div>
                    <div class="col-12 mt-3">
                        <a class="text" href="">Nhạc Mới</a>
                    </div>
                    <div class="col-12 mt-3">
                        <a class="text" href="">Thể Loại</a>
                    </div>
                    <div class="col-12 mt-3">
                        <a class="text" href="">Top 100</a>
                    </div>
                    <div class="col-12 mt-3">
                        <a class="text" href="">MV</a>
                    </div>
                </div>
            </div>
            <div class="col-10">
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
                        <div class="col-12 mt-4" style="padding-left:30px;padding-right:50px;">
                            <!--  -->
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/hinh/hienho2.jpg" class="d-block" alt="" style="height:200px;width:33%;float:right;">
                                        <img src="img/hinh/hienho1.jpg" class="d-block" alt="" style="height:200px;width:34%;float:right;">
                                        <img src="img/hinh/hienho.jpg" class="d-block" alt="" style="height:200px;width:33%;float:right;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/hinh/thanhduy2.jpg" class="d-block" alt="" style="height:200px;width:33%;float:right;">
                                        <img src="img/hinh/thanhduy.jpg" class="d-block" alt="" style="height:200px;width:34%;float:right;">
                                        <img src="img/hinh/thanhduy1.jpg" class="d-block" alt="" style="height:200px;width:33%;float:right;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/hinh/mytam1.jpg" class="d-block" alt="" style="height:200px;width:33%;float:right;">
                                        <img src="img/hinh/mytam2.jpg" class="d-block" alt="" style="height:200px;width:34%;float:right;">
                                        <img src="img/hinh/mytam.jpg" class="d-block" alt="" style="height:200px;width:33%;float:right;">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                            <!--  -->
                        </div>
                                <!-- Start Nhac Yeu Thich Nhat -->
                        <div class="col-12 mt-5" style="padding-left:30px;">
                            <span style="font-weight: bold;font-size:18px;">Nhạc Yêu Thích Nhất</span>
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
                            </div>
                        </div>
                            <!-- Start End -->
                            <!-- Start Goi Y Cho Hom Nay -->
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
                            </div>
                        </div>
                                <!-- End Goi Y Cho Hom Nay -->
                                <!-- Start Album noi bat -->
                        <div class="col-12 mt-5" style="padding-left:30px;">
                            <span style="font-weight: bold;font-size:18px;">Album Nổi Bật</span>
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
                            </div>
                        </div>
                                <!-- End  Album noi bat -->
                                <!-- Start Nhac Tre -->
                                <div class="col-12 mt-5" style="padding-left:30px;">
                            <span style="font-weight: bold;font-size:18px;">Nhạc Trẻ</span>
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
                            </div>
                        </div>
                                <!-- End  Nhac Tre -->
                                <!-- Start -->
                    </div>
            </div>
    </div>
</body>
</html>