@extends('layouts.default')

@section('content')

@include('includes.pageHeader')

<!-- blog details -->
<section id="blog-details" class="blog-details white-bg blog-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 left">
                <div class="blog-listing">
                    <div class="col-md-12 blog-content">

                        <article class="contentarea">
                            <div class="row border-bottom os-animation text-center" data-os-animation="fadeInUp">
                                <div class="col-md-6 col-sm-6 title-text border-right">
                                    <h2 class="title">Hair Selection</h2>
                                </div>
                                <div class="col-md-6 col-sm-6 simple-text">
                                    <p class="description text-left"><a href="http://www.hairbylenaj.mayvenn.com"><img style="margin-top: -70px;width: 90%;" src="{{ url('images/Mayven%20Logo%20Clear.png') }}" target="_blank" /></a></p>
                                </div>
                            </div>
                        </article>

                        <article class="contentarea">
                            <div class="col-md-4 col-sm-4"><div class="dishes-main">
                                    <div class="dishes-main-img"></div>
                                    <div class="dishes-main-text">
                                        <img src="{{asset('images/brazilian-deep-wave.png')}}">
                                        <a class="small-button-red inner-link" href="https://hairbylenaj.mayvenn.com/categories/hair/deep-wave">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4"><div class="dishes-main">
                                    <div class="dishes-main-img"></div>
                                    <div class="dishes-main-text">
                                        <img src="{{asset('images/malaysian-body-wave.png')}}">
                                        <a class="small-button-red inner-link" href="https://hairbylenaj.mayvenn.com/categories/hair/body-wave">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4"><div class="dishes-main">
                                    <div class="dishes-main-img"></div>
                                    <div class="dishes-main-text">
                                        <img src="{{asset('images/peruvian-deep-wave.png')}}">
                                        <a class="small-button-red inner-link" href="https://hairbylenaj.mayvenn.com/categories/hair/deep-wave">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4"><div class="dishes-main">
                                    <div class="dishes-main-img"></div>
                                    <div class="dishes-main-text">
                                        <img src="{{asset('images/peruvian-loose-wave.jpg')}}">
                                        <a class="small-button-red inner-link" href="https://hairbylenaj.mayvenn.com/categories/hair/loose-wave">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4"><div class="dishes-main">
                                    <div class="dishes-main-img"></div>
                                    <div class="dishes-main-text">
                                        <img src="{{asset('images/peruvian-straight.png')}}">
                                        <a class="small-button-red inner-link" href="https://hairbylenaj.mayvenn.com/categories/hair/straight">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <div class="col-md-12">

                            <div class="row">

                                {{-- <a href="https://hairbylenaj.mayvenn.com/" style="font-size: 40px;margin: 0;padding: 16px 0 18px 0;text-align: center;"></a> --}}

                                <div class="col-md-4">
                                    {{-- <img src="{{ url('images/lenaj-express-free.jpg') }}"> --}}
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ url('images/lenaj-middle.png') }}" style="width:90%">
                                </div>
                                <div class="col-md-4">
                                    {{-- <img src="{{ url('images/lenaj-closure.jpg') }}"> --}}
                                </div>

                                <div class="col-md-8 col-md-offset-2" style="text-align:center">

                                    <p>30 Day No Questions asked Quality Guarantee. If the hair sheds or tangles excessively, we will exchange the order for your clients NO QUESTIONS ASKED.  So you and your clients will never have to worry about the quality of the hair we provide to you. No one else offers ANY guarantees that they can honor!</p>
                                    <p>Free shipping (All orders comes with FREE priority shipping, which is 3-5 business days guaranteed. Your clients can also pay only $20  for Express 1-2 day shipping.)</p>
                                    <p>Custom Bundle Package Deals. Put 3 or more bundles of any texture into your cart to get the Package Deal Discount!</p>
                                    <p>100% virgin hair! (better quality and cheaper than your local beauty supply store.)  The hair can be dyed, colored, flat ironed and treated as you would any human hair.</p>

                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- comment end... -->
</section>

<section id="seasonal-dishes" class="seasonal-dishes">
    <div class="container">
        <div class="row os-animation text-center animated fadeInUp" data-os-animation="fadeInUp">
            <div class="col-md-12 col-sm-12 title-text">
                <h2 class="title text-center white-text">Coming Soon</h2>
                <div class="green-line"></div>
            </div>
            <div class="margin-top">
                <div class="col-md-4 col-sm-4 col-md-offset-4">
                    <div class="dishes-main" style=" background-color: #fff;padding: 0px;margin-bottom: 25px;border: 1px solid #e2e2e2;box-shadow: 0px 0px 0px #e2e2e2;">
                        <div class="dishes-main-text">
                           <img src="{{ url('images/lena-j-book.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<h1 class="align-center" style="font-size: 40px;  background-color: #28aa84;float: none !important;margin: 0;padding: 16px 0 18px 0;text-align: center;"><a style="color: #fff;" href="{{ url('images/lena_j_final.jpg') }}" download>Dont forget to download your gift certificate here!</a></h1>

<style type="text/css">
.seasonal-dishes {
  background: url(<?php echo url('images/seasonal-dishes-bg.jpg') ?>) no-repeat center top fixed;
  -webkit-background-size: cover;
  background-size: cover;
}
</style>
@endsection

@section('popup')
@include('includes.popup')
@endsection
