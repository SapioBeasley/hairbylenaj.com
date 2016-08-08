@extends('layouts.default')

@section('content')
<?php //$this->partial('includes/opt-in') ?>
<!-- header-->
<header id="home" data-stellar-background-ratio="0.5" class="header animated no-background">
    <nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav" role="navigation">
        <div class="container main-navigation">
            <div class="col-md-3">
                <a class="logo-dark" href="#" style="float: left">
                    <img alt="logo-dark" src="images/logo-dark.svg" class="logo-dark" style="width: 100% !important; margin-top: -10px;"/>
                </a>
            </div>
            <div class="col-md-3">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="col-md-9 text-left float-right collapse-navation">
                <div class="navbar-collapse collapse navbar-inverse">
                    <ul class="nav navbar-nav navbar-right">
                        @include('includes.menuLinks')
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="home-slider full-screen">
        <div id="carousel3" class="carousel slide " data-ride="carousel3" data-interval='false'>
            <div class="carousel-inner">
                <div class="item active">
                    <div class="slider-gradient-overlay"></div>
                    <div style="background-image:url('images/slider-img5.jpg');" class="fill"></div>
                    <div class="slider-text">
                        <div class="col-md-6">
                        	<img alt="logo-white" src="images/logo-light.svg" style="width: 80% !important;" />

							<span>Las Vegas Elite hair care specialist , mentor and motivator</span>

							<a href="#bio" class="highlight-button inner-link">Read Her Bio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

<section id="bio" class="pink-bg model-box">
    <div class="white-bg"></div>
    <div class="container">
        <div class="row os-animation text-center" data-os-animation="fadeInUp">
            <div class="col-md-6 col-sm-6 simple-text float-right margin-top-100 text-left">
                <h3 class="big model-name">Lena J</h3>

                <p class="model-des">Lena J sexy sleek hair mission is to make a difference in the haircare industry by promoting both healthy and beautiful hair, who says you can’t have both? In Lena J’s world, that is the ultimate embodiment of beauty. </p>
                <p>Her success can be attributed to her commitment to the ever growing industry, continuous hair education, and building personal relationships by keeping her lovely clients first.

				<p>Your experiences with Lena J will be memorable and definitely unmatched. </p>

				<p>When you step into her chic salon, you can expect professionalism, personal connection, hair maintenance advice, life inspiration, and without a doubt, sexy, sleek hair. </p>

				<p>You will come in as a curious confused client and leave as a satisfied dear friend. Tears in your eyes laughter, love, delectable treats, and most importantly hair care all happens during your exclusive VIP spa time.</p>

				<p>Over the past growing eight years, she has built a strong reputation for promoting healthy hair and using hair extensions as her guaranteed already proven formula for hair restoration.</p>

				<p>In the gorgeous fall of 2014, Lena J established and revealed the LJ Mane (styles and hair unit) Collection. This brand new cutting-edge system is design to help you, discover the protective style that best suits your unique lifestyle and haircare needs.</p>

				<p>Predictability and quality hair will never be your worry once you have the Lena J experience. </p>

				<p>Welcome, with a big hug and kiss on the cheek, enjoy your latte or red blend wine while Lena J brings your dull hair back to it’s original vibrancy. </p>

            </div>
        </div>
    </div>
</section>

            <!-- about -->
            <section id="about" class="gray-bg">
                <div class="container">
                    <div class="row border-bottom os-animation text-center" data-os-animation="fadeInUp">
                        <div class="col-md-6 col-sm-6 title-text border-right">
                            <h2 class="title">Systems</h2>
                        </div>
                        <div class="col-md-6 col-sm-6 simple-text">
                            <p class="description text-left">Over the past growing eight years, she has built a strong reputation for promoting healthy hair and using hair extensions as her guaranteed already proven formula for hair restoration.<br>
                        	<a class="highlight-button-black inner-link" href="{{ url('systems') }}">View Lena J's Systems</a></p>
                        </div>
                    </div>
                    <div class="row os-animation border-bottom" data-os-animation="fadeInUp">
                        <div class="col-md-3 col-sm-3 service-box fashion-service-box border-right text-center">
                            <div class="service-icon"> <i class="fa fa-pencil-square-o"></i> </div>
                            <h6>"Healthy Hair Maintenance" - HHM</h6>
                            <p class="content" style="font-size:14px;">Consistence is the need to know secret to growing and retaining long, healthy hair. You need a daily routine to promote and support your healthy hair journey. </p>
                        </div>
                        <div class="col-md-3 col-sm-3 service-box fashion-service-box border-right text-center">
                            <div class="service-icon"> <i class="fa fa-diamond"></i> </div>
                            <h6>"Sleeping Beauty" - SB</h6>
                            <p class="content" style="font-size:14px;">Let me put your damaged hair to sleep and awaken with beauty. Hand over the comb and brush now. Leave it up to me to get your hair healthy once and for all.</p>
                        </div>
                        <div class="col-md-3 col-sm-3 service-box fashion-service-box border-right text-center">
                            <div class="service-icon"> <i class="fa fa-magic"></i> </div>
                            <h6>"The Mane Connection" - TMC</h6>
                            <p class="content" style="font-size:14px;">Your natural hair is washed and conditioned with love biweekly. Your scalp is pampered with rose water creams and braided down to assure a snug fit. </p>
                        </div>
                        <div class="col-md-3 col-sm-3 service-box fashion-service-box text-center">
                            <div class="service-icon"> <i class="fa fa-leaf"></i> </div>
                            <h6>"Naturally Extended" - NE</h6>
                            <p class="content" style="font-size:14px;">Longer is better! Adding length to your hair is an instantaneous transformation to being a glamazon or Goddess.  </p>
                        </div>
                    </div>
                    <div class="row border-bottom os-animation text-center" data-os-animation="fadeInUp">
                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                            <div class="col-md-3 col-sm-3 fashion-service-box border-right text-center" style="padding-top:15px;padding-bottom: 15px;">

		                            <img src="{{ url('images/official-distributer-mayven.jpg') }}"  height="225" width="92%"/>

                        	</div>

                        	<div class="col-md-6 col-sm-6 title-text border-right">
                            	<h2 class="title"><a href="http://www.hairbylenaj.mayvenn.com"><img src="{{ url('images/Mayven%20Logo%20Clear.png') }}" target="_blank" style="height: 96px;width: auto;"/></a></h2>
                        	</div>

	                        <div class="col-md-3 col-sm-3 fashion-service-box text-center" style="padding-top:15px;padding-bottom: 15px;">

		                            <img alt="" src="{{ url('images/30day-mayven.jpg') }}" height="225" width="92%"/>

	                        </div>
	                        </div>
                        </div>
                    </div>

                </div>

            </section>
            <!-- about end -->

            {{-- <section id="book" class="book">
                <div class="container">
                    <div class="row text-center os-animation animated fadeInUp" data-os-animation="fadeInUp">
                        <!-- <h1 class="title white-text">Book a Table</h1> -->
                        <div class="col-md-8 col-sm-8 book-a-table">
                            Home of the RevitaBrush<br>
                            <a href="products" class="highlight-button inner-link" id="hrefabout">Order Now!</a>
                        </div>
                    </div>
                </div>
            </section> --}}

            <h1 class="align-center" style="font-size: 40px;  background-color: #28aa84;float: none !important;margin: 0;padding: 16px 0 18px 0;text-align: center;"><a style="color: #fff;" href="https://www.schedulicity.com/scheduling/HBLZFE" target="_blank">Schedule your Appointment here</a></h1>






<style type="text/css">

#exitpopup h1 {
    margin-top:0px;
    padding-top:0px;
    font-size:55px;
}
#exitpopup h2 {
    margin-top:0px;
    padding-top:0px;
    font-size:35px;
    text-transform:uppercase;
    color: #ff5300;
    font-weight:bold;
    font-style:italic;
}
#exitpopup p {
    text-align:left;
}
.button-popup {
    background-color: #ff5300;
    padding:40px;
    color:#fff;
    border:0px;
    font-size:26px;
    font-weight:bold;
}
.input-popup {
    border: 5px solid white;
    -webkit-box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.1), 0 0 16px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.1), 0 0 16px rgba(0, 0, 0, 0.1);
    box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.1), 0 0 16px rgba(0, 0, 0, 0.1);
    padding: 15px;
    background: #FFE2C6;
    margin: 0 0 10px 0;
    font-weight: bold;
    font-size:16px;
}
#xmark {
    margin-top: 8px;
}

.book {
  background: url(images/revita-brush2.jpg) no-repeat center top fixed;
  -webkit-background-size: cover;
  background-size: cover;
}

.book-a-table {
  background: none repeat scroll 0 0 rgba(40, 170, 132, 0.5);
  padding: 50px;
  float: none;
  margin: 75px auto 0;
  font-size: 35px;
  line-height: 65px;
  font-weight: 100;
  color: #FFF;
  text-transform: uppercase;
}
</style>
@endsection
