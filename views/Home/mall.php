<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/PID_Assignment/css/bootstrap.min.css" rel="stylesheet">
    <link href="/PID_Assignment/css/jquery.toast.css" rel="stylesheet">
    <link href="/PID_Assignment/css/style.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/PID_Assignment/css/alert.css">     -->


    <title>mall</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="header" class="header col-md-12">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="header-link nav-link active" href="/PID_Assignment/home/mall">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="header-link nav-link" href="mall.php?admin=">賣家中心</a>
                    </li>

                    <li class="nav-item dropdown ml-md-auto">
                        <div class="row">
                            <!-- <form id="applyForAdmin" method="post" >
                            <input type="submit" class="btn btn-link" style="margin: 2%;" value="成為賣家" />                            
                            <input type="hidden" name="applyForAdmin" value="true" />                         
                            </form> -->
                            <a id="applyForAdmin" class="header-link nav-link " href="#"> 成為賣家</a>
                            <a class="header-link nav-link fa fa-question-circle d-flex align-items-center" href="#"> 幫助中心</a>
                            <?php
                            if (!isset($_SESSION["userName"]) || ($_SESSION["userName"] == "")) {
                                echo '<a class="header-link nav-link " href="/PID_Assignment/home/login" id="navbarMenuLink">登入 / 註冊</a>';
                            } else {
                                echo '<a class="header-link nav-link" href="mall.php?logout=">' . $_SESSION['userName'] . ' / 登出 </a>';
                            }
                            ?>

                        </div>

                    </li>
                </ul>
                <nav class="navbar navbar-expand-lg navbar-light ">

                    <button style="color:white;border-color:white;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="fa fa-bars"></span>
                    </button> <a class="" href="#"> <i class="fa fa-shopping-bag" aria-hidden="true"></i> 調皮購物</a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <form class="form-inline">
                            <input id="search" class="form-control mr-sm-8" type="text" />
                            <button style="background-color: #1491fd; border-style: solid; border-color: #fff;" class="btn  my-2 my-sm-0" type="submit">
                                Search
                            </button>
                            <a class="header-link" href="#">熱門</a>&nbsp;<a class="header-link" href="#">關鍵字</a>
                        </form>
                        <ul class="navbar-nav ml-md-auto">
                            <li class="nav-item active">

                                <h3><a class="fa fa-shopping-cart header-link " href="mall.php?shopCart="> 購物車 <span class="sr-only">(current)</span></a></h3>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div id="container" class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div id="Main-of-this-season" class="d-flex align-items-center justify-content-center" style="margin:.625rem;height:100px ;background-color:rgb(236 95 45);color: #fff;">
                    <h1>本季主打</h1>
                </div>
                <div id="div-carousel" class="content row">
                    <div class="carousel slide w-100 shadow-sm" data-interval="3000" data-ride="carousel" style="padding-bottom: 1%;margin:.625rem;" id="carousel-46838">
                        <ol id="carousel-indicators" class="carousel-indicators">

                        </ol>
                        <div id="carousel-inner" class="carousel-inner">
                            <!-- <div class="carousel-item active">
                        <img class="img-fluid d-block w-100" alt="Carousel Bootstrap First" src="\PID_Assignment\imgs\goods\train\1.jpg" />
                        <div class="carousel-caption">
                            <h4>
                                名稱
                            </h4>
                            <p>
                                描述
                            </p>
                        </div>
                    </div> -->
                        </div>
                        <h1><a style="color: red;" class="carousel-control-prev" href="#carousel-46838" role="button" data-slide="prev">
                                <span class="fa fa-arrow-circle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a style="color: red;" class="carousel-control-next" href="#carousel-46838" role="button" data-slide="next">
                                <span class="fa fa-arrow-circle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a></h1>

                    </div>
                </div>
                <div id="classic-train" class="d-flex align-items-center justify-content-center" style="margin:.625rem;height:100px ;background-color:rgb(255 128 76);color: #fff;">
                    <h1>經典火車</h1>
                </div>

                <div id=commodity-content>
                    <div id="commodity-group-0" class="card-group ">
                    </div>
                </div>
                <div class="row">
                    <hr width="100%" style="color:brown ;background-color:brown">
                </div>
                <div id="mall-footer" class="row">
                    <hr>
                    <address>
                        <strong>Twitter, Inc.</strong><br /> 795 Folsom Ave, Suite 600<br /> San Francisco, CA 94107<br /> <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="color:rgb(255, 187, 0);background-color:rgb(238, 78, 46);" role="document">
            <div class="modal-content" style="border:none;color:rgb(255, 187, 0);background-color:rgb(238, 78, 46);">
                <div class="">
                    <button type="button" class="pull-right close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="d-flex justify-content-center">
                    <h1 style="color:white"> <i class="fa fa-shopping-bag" aria-hidden="true"></i> 調皮購物</h1>

                </div>
                <div class="modal-header d-flex justify-content-center" style="border:none;">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">2020商城最低價日</h5>

                </div>
                <div class="modal-body d-flex justify-content-center font-weight-bold" style="border:none;">
                    全館原價起..
                </div>
                <div class="modal-footer d-flex justify-content-center" style="border:none;">
                    <button type="button" style="color:rgb(254, 99, 51);background-color:#fff;" class="btn font-weight-bold" data-dismiss="modal">逛逛去</button>

                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="/PID_Assignment/js/jquery.js"></script>
    <script src="/PID_Assignment/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/PID_Assignment/js/jquery.toast.js"></script>
    <style class="mall-search-style"></style>
    <script src="/PID_Assignment/js/alert.js"></script>
    <script type="module">
        import {initCommodity,clickCard} from '/PID_Assignment/models/module.js';        
        window.clickCard = clickCard
        initCommodity();      
    </script>
    <script>
        window.alert = function(name) {
            var iframe = document.createElement("IFRAME");
            iframe.style.display = "none";
            iframe.setAttribute("src", 'data:text/plain,');
            document.documentElement.appendChild(iframe);
            window.frames[0].window.alert(name);
            iframe.parentNode.removeChild(iframe);
        }
        var wConfirm = window.confirm;
        window.confirm = function(message) {
            try {
                var iframe = document.createElement("IFRAME");
                iframe.style.display = "none";
                iframe.setAttribute("src", 'data:text/plain,');
                document.documentElement.appendChild(iframe);
                var alertFrame = window.frames[0];
                var iwindow = alertFrame.window;
                if (iwindow == undefined) {
                    iwindow = alertFrame.contentWindow;
                }
                var result = iwindow.confirm(message);
                iframe.parentNode.removeChild(iframe);
                return result;
            } catch (exc) {
                return wConfirm(message);
            }
        }
        $(document).ready(function() {
            $("#exampleModalCenter").modal({
                show: true
            });
            k = $("#header").offset().top;
            window.onscroll = function() {
                s = $(document).scrollTop();
                var fh_header = $("#header").height();
                if (s > k) {
                    $("#header").css({
                        position: "fixed",
                        "z-index": 100
                    });
                } else {
                    $("#header").css({
                        position: "static",
                        "z-index": 1,
                        height: "107px" //fh_header
                    });
                }
            };
            $("#search").on('change paste keyup', function() {
                var value = $(this).val().toLowerCase();
                if (!value) {
                    $('.mall-search-style').html('');
                } else {
                    console.log(value);
                    $('.mall-search-style').html(
                        '#commodity-content .card-group > div:not([data-title*="' + value + '"]) {display: none;}'
                    );
                }
            });
            $("#applyForAdmin").on('click', function() {
                $.ajax({
                    url: '/PID_Assignment/core/upload.php',
                    type: 'POST',
                    dataType: "json",
                    data: {
                        action: "applyForAdmin"
                    },
                    success: function(data) {                        
                        if (data.msg != undefined) {
                            alert(data.msg);
                        } else if (data.refresh) {
                            top.location.href = "/PID_Assignment/home/login";
                            alert(data.refresh);
                        }
                    },
                    error: function(jqXHR) {
                        console.log(jqXHR);
                    }
                });                
                console.log("applyForAdmin");
            })
        })
    </script>
</body>
</html>