@extends('layouts.index')
@section('content')
    <section id="PortfolioFour" style="position: relative;top: 50px;">
        <div  class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-1" style="position: relative;top: -20px;">
                    <h2><b>Portfolio Four Column</b></h2>
                </div>
                <div class="col-md-4  col-sm-6 col-xs-6" >
                    <h6><a href="#">Home</a>  &raquo  About Us</h6>
                </div>
            </div>
        </div>
    </section>
    <section id="HexagonToggle">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-3  col-sm-12 col-xs-4 col-xs-offset-4" >
                    <button class="button1" onclick="myFunction()">All(8)</button>
                    <button class="button2" onclick="myFunction1()">Arts(1)</button>
                    <button class="button3" onclick="myFunction2()">Fun(4)</button>
                </div>
            </div>
        </div>
    </section>
    <script>
    function myFunction() {
    document.querySelector(".button1").style.backgroundColor = "#CF571B";
    document.querySelector(".button2").style.backgroundColor = "#DF9B00";
    document.querySelector(".button3").style.backgroundColor = "#DF9B00";
    }
    function myFunction1(){
    document.querySelector(".button2").style.backgroundColor = "#CF571B";
    document.querySelector(".button1").style.backgroundColor = "#DF9B00";
    document.querySelector(".button3").style.backgroundColor = "#DF9B00";
    }
    function myFunction2(){
    document.querySelector(".button3").style.backgroundColor = "#CF571B";
    document.querySelector(".button2").style.backgroundColor = "#DF9B00";
    document.querySelector(".button1").style.backgroundColor = "#DF9B00";
    }
    </script>
    
    <section id="portfolioHexa" class="col-md-12 col-sm-12 col-xs-12 ">
        <div class="container  margin">
            <div class="hexagon one marginLeft">
                <img src="assets/images/cartoon1.jpg" class="img img-responsive ">
                <i class="fa fa-link"></i>
            </div>
            <div class="hexagon two marginLeft">
                <img src="assets/images/cartoon2.jpg" class="img img-responsive">
                <i class="fa fa-link"></i>
            </div>
            <div class="hexagon three marginLeft">
                <img src="assets/images/cartoon3.jpg" class="img img-responsive">
                <i class="fa fa-link"></i>
            </div>
            <div class="hexagon four marginLeft">
                <img src="assets/images/cartoon4.jpg" class="img img-responsive">
                <i class="fa fa-link"></i>
            </div>
        </div>
        <!-- -======================================================= -->
        <div class="container  margin">
            <div class="hexagon five marginLeft">
                <img src="assets/images/cartoon5.jpg" class="img img-responsive">
                <i class="fa fa-link"></i>
            </div>
            <div class="hexagon six marginLeft">
                <img src="assets/images/cartoon6.jpg" class="img img-responsive">
                <i class="fa fa-link"></i>
            </div>
            <div class="hexagon seven marginLeft">
                <img src="assets/images/cartoon7.jpg" class="img img-responsive">
                <i class="fa fa-link"></i>
            </div>
            <div class="hexagon eight marginLeft">
                <img src="assets/images/cartoon8.jpg" class="img img-responsive">
                <i class="fa fa-link"></i>
            </div>
        </div>
    </section>
    <section id="Fun" class="col-md-12">
        <div class="container  margin">
            <div class="hexagon one marginLeft">
                <img src="assets/images/cartoon7.jpg" class="img img-responsive ">
                <i class="fa fa-link"></i>
            </div>
            <div class="hexagon two marginLeft">
                <img src="assets/images/cartoon5.jpg" class="img img-responsive">
                <i class="fa fa-link"></i>
            </div>
            <div class="hexagon three marginLeft">
                <img src="assets/images/cartoon3.jpg" class="img img-responsive">
                <i class="fa fa-link"></i>
            </div>
            <div class="hexagon eight marginLeft">
                <img src="assets/images/cartoon7.jpg" class="img img-responsive">
                <i class="fa fa-link"></i>
            </div>
        </div>
    </section>
    <section id="Arts1" class="col-md-12">
        <div class="container  margin">
            <div class="hexagon one marginLeft">
                <img src="assets/images/cartoon2.jpg" class="img img-responsive ">
                <i class="fa fa-link"></i>
            </div>
        </section>
        <script>
        $(document).ready(function(){
        $("#portfolioHexa").show();
        $("#Arts1").hide();
        $("#Fun").hide();
        $(".button1").click(function(){
        $("#portfolioHexa").show();
        $("#Arts1").hide();
        $("#Fun").hide();
        })
        $(".button2").click(function(){
        $("#portfolioHexa").hide();
        $("#Fun").hide();
        $("#Arts1").show();
        })
        $(".button3").click(function(){
        $("#portfolioHexa").hide();
        $("#Arts1").hide();
        $("#Fun").show();
        })
        });
        </script>
        <script type="text/javascript">
        $("#portfolioHexa .hexagon")
        .on('mouseover',function(event) {
        $(this).find('img').css('opacity', '.3')
        $(this).find('i').css('opacity', '1');
        });
        $("#portfolioHexa .hexagon")
        .on('mouseleave',function(event) {
        $(this).find('img').css('opacity', '1')
        $(this).find('i').css('opacity', '0');
        });
        </script>
        <script type="text/javascript">
        $("#Arts1 .hexagon")
        .on('mouseover',function(event) {
        $(this).find('img').css('opacity', '.3')
        $(this).find('i').css('opacity', '1');
        });
        $("#Arts1 .hexagon")
        .on('mouseleave',function(event) {
        $(this).find('img').css('opacity', '1')
        $(this).find('i').css('opacity', '0');
        });
        </script>
        <script type="text/javascript">
        $("#Fun .hexagon")
        .on('mouseover',function(event) {
        $(this).find('img').css('opacity', '.3')
        $(this).find('i').css('opacity', '1');
        });
        $("#Fun .hexagon")
        .on('mouseleave',function(event) {
        $(this).find('img').css('opacity', '1')
        $(this).find('i').css('opacity', '0');
        });
        </script>
        @stop