<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{asset('')}}layout/js/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="header.css">
</head>
<body>
<div style="background-color:black">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="navbar-brand">
                    <p class="font-weight-bold" style="font-size: 35px; color:pink">|3AR MAP</p> 
                </div>
            </div>
            <div class="col-lg-5">
                    <div class="btn btn-group"><a class="text-white" style="font-size: 12px" href="index">HOME</a></div>
                    <div class="btn btn-group"><a class="text-white" style="font-size: 12px" href="listban">BOOKING</a></div>
                    <div class="btn btn-group"><a class="text-white" style="font-size: 12px" href="#">EVENTs</a></div>
                    <div class="btn btn-group"><a class="text-white" style="font-size: 12px" href="#">CONTACT</a></div>
                    <div class="btn btn-group">
                        @if(Auth::check())
                            <a class="text-white" style="font-size: 12px" href="logout">LOG OUT</a>
                        @else
                            <a class="btn btn-black btn-lg" target="_blank" title="on home" href="login"> 
                                <i class="fa fa-user fa-lg user" style="color: white; font-size:12px"></i>
                            </a>
                        @endif
                    </div>
            </div>
            <div class="col-lg-2">
                <div class="nav-item">
                    <div class="btn btn-group">
                        <a class="btn btn-white btn-md text-white dropdown" data-toggle="dropdown" target="_blank" title="on search">
                            Tìm kiếm <i class="fa fa-search fa-md search" style="color: white"></i>
                            <ul class="dropdown-menu" style="background-color: pink">
                                <li><input class="font-italic" style="background-color: black" type="text" name="" placeholder=" Search Bar...">
                                    <input style="height:22px" type="submit" value="SEARCH"></li>
                        </a>
                    </div>
                    <div class="btn btn-group">
                        <a class="btn btn-white btn-lg" target="_blank" title="on facebook" href="#">
                            <i class="fa fa-facebook fa-lg fb" style="font-size: 10px; color: white"></i>
                        </a>
                        <a class="btn btn-white btn-lg" target="_blank" title="on instagram" href="#"> 
                            <i class="fa fa-instagram fa-lg instagram" style="font-size: 10px; color: white"></i>
                        </a>
                        <a class="btn btn-white btn-lg" target="_blank" title="on youtube" href="#"> 
                            <i class="fa fa-youtube fa-lg youtube" style="font-size: 10px; color: white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<img src="http://thegioiclub.vn/Uploads/images/dichvu/thiet-ke-bar-club-vu-truong-chuyen-nghiep-1.jpg" alt="" width="100%" height="400px">
</body>
</html>