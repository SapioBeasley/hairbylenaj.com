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
                        <article class="contentarea col-sm-6 padding-right">
                            <img src="{{ url('images/revita-brush.jpg') }}" width="100%"/>
                        </article>
                        <article class="contentarea col-sm-6 padding-left">

                            <h4>WHAT CAN YOUR BRUSH DO:</h4>

                            <p><strong>THE FACTS:</strong> Proper brushing and massaging are two of the most important elements in the maintenance and rejuvenation of your hair.</p>
                            <p><strong>Brushing your Hair Helps Prevent Hair Loss</strong></br>
                            <p> Imbalance is often to blame for hair loss, as overproduction and underproduction of sebum cause weakening and undernourishment of the scalp.</p>
                            <p><strong>Brushing Conditions and Strengthens Your Hair</strong></p>
                            <p>Stimulates the capillaries, increasing blood circulation and the transport of oxygen and nutrients to the hair stem, root and bulb</p>
                            <p>Stimulates hormone- and oil- producing glands, which keeps the pores of the hair and scalp open, allowing them to breathe and retain their natural oils</p>
                            <p>In addition, as your hair is coated with sebum you’ll find moisture is restored, and the hair is generally more sheen, smooth, and manageable.</p>
                            <p>BRUSH DAILY ~RELAX ~STIMULATE ~REPLENISH ...BECAUSE  IT JUST FEELS THAT  GOOD!!</p>

                            <strong>
                                NATURAL COPPER  MAGNETIC BRISTLES</br>
                                ELIMINATE HAIR ELECTROSTATIC</br>
                                REDUCE DANDRUFF</br>
                                PROMOTES BLOOD CIRCULATION</br>
                                VIBRATION STIMULATE HAIR GROWTH</br>
                            </strong>
                            </p>

                            <p>
                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="Z7DV5NJX9VPFW">
                                    <input type="hidden" name="amount" value="5.95">
                                    <input type="hidden" name="currency_code" value="USD">
                                    <input type="hidden" name="discount_amount" value="2.00">
                                    <table>
                                    <tr><td><input type="hidden" name="on0" value="Colors">Colors</td></tr><tr><td><select name="os0">
                                        <option value="Black">Black </option>
                                        <option value="Purple">Purple </option>
                                    </select> </td></tr>
                                    </table>
                                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                </form>
                            </p>
                        </article>

                        <hr>

                        <div class="col-md-12">
                            <div class="row border-bottom os-animation text-center" data-os-animation="fadeInUp">
                                <div class="col-md-6 col-sm-6 title-text border-right">
                                    <h2 class="title">Hair Selection</h2>
                                </div>
                                <div class="col-md-6 col-sm-6 simple-text">
                                    <p class="description text-left"><a href="http://www.hairbylenaj.mayvenn.com"><img style="margin-top: -70px;width: 90%;" src="{{ url('images/Mayven%20Logo%20Clear.png') }}" target="_blank" /></a></p>
                                </div>
                            </div>

                            <img src="{{ url('images/mayvenn-banner.jpg') }}" style="margin-bottom:40px;"/>


                            <div class="margin-top">
                            <div class="col-md-4 col-sm-4"><div class="dishes-main">
                                    <div class="dishes-main-img"></div>
                                    <div class="dishes-main-text">
                                        <h4>Premier <span>($64-$154)</span></h4>
                                        <p>Mayvenn Premier collection includes a full spectrum of bundles and closures trusted and installed by thousands of Mayvenn stylists.  Premier hair is ready for everyday and every style.</p>
                                        <strong>Weight:</strong> 3.5oz<br>
                                        <strong>Material:</strong> High quality human hair<br>
                                        <strong>Color:</strong> 1B, Blonde #27 and #613<br>
                                        <strong>Bleach &amp; dye:</strong> bleach-able to level 7 or 8 (#27)<br>
                                        <strong>Product line:</strong> 3-6 months with proper care<br>
                                        <strong>Grade:</strong> (6-A) High quality human hair<br>
                                        <strong>Texture:</strong> Straight, Body Wave, Loose Wave, Deep Wave and Curly<br>
                                        <strong>Length:</strong> 12-28in bundles (Blonde 14-26in bundles) 14, 18in silk and laced closures<br>
                                        <a class="small-button-red inner-link" href="https://hairbylenaj.mayvenn.com/">Shop Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4"><div class="dishes-main">
                                    <div class="dishes-main-img"></div>
                                    <div class="dishes-main-text">
                                        <h4>Deluxe <span>($89-$169)</span></h4>
                                        <p>Mayvenn Deluxe is an introduction to effortless luxury.  Consistently longer strands in a single bundle providing more natural flow and body.  Deluxe hair delivers a feeling of lasting elegance.</p>
                                        <strong>Weight:</strong> 3.5oz<br>
                                        <strong>Material:</strong> High quality Remy raw hair<br>
                                        <strong>Color:</strong> 1B<br>
                                        <strong>Bleach & dye:</strong> bleach-able to level 8 or 9 (#613)<br>
                                        <strong>Product Life:</strong> 6-12 months with proper care<br>
                                        <strong>Grade:</strong> (7-A) High quality Remy hair<br>
                                        <strong>Texture:</strong> Straight, Body Wave, Loose Wave, Deep Wave and Curly<br>
                                        <strong>Length:</strong>12-24in bundles<br>
                                        <a class="small-button-red inner-link" href="https://hairbylenaj.mayvenn.com/">Shop Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4"><div class="dishes-main">
                                    <div class="dishes-main-img"></div>
                                    <div class="dishes-main-text">
                                        <h4>Ultra <span>($139-$239)</span></h4>
                                        <p>Mayvenn Ultra appeals to the refined senses of women with no limits.  Ultra bundles are collected from a single donor to maintain the most luster and natural flow of any Mayvenn hair.</p>
                                        <strong>Weight:</strong> 3.5oz<br>
                                        <strong>Material:</strong> Virgin Remy raw hair single donor<br>
                                        <strong>Color:</strong> 1B<br>
                                        <strong>Bleach & dye:</strong> bleach-able to level 10 (Plat blonde)<br>
                                        <strong>Product life:</strong> 12-24 months with proper care<br>
                                        <strong>Grade:</strong> (8-A) Top quality virgin hair<br>
                                        <strong>Texture:</strong> Straight, Body Wave, Loose Wave, Deep Wave and Curly<br>
                                        <strong>Length:</strong> 12-24in bundles<br>
                                        <a class="small-button-red inner-link" href="https://hairbylenaj.mayvenn.com/">Shop Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    <div class="col-md-12">

                        <div class="row">

                            <a href="https://hairbylenaj.mayvenn.com/" style="font-size: 40px;margin: 0;padding: 16px 0 18px 0;text-align: center;"></a>

                            <div class="col-md-3"><img src="{{ url('images/lenaj-express-free.jpg') }}"></div>
                            <div class="col-md-6" style="text-align:center"><img src="{{ url('images/lenaj-middle.png') }}" style="width:90%"></div>
                            <div class="col-md-3"><img src="{{ url('images/lenaj-closure.jpg') }}"></div>

                            <div class="col-md-10 col-md-offset-1" style="text-align:center;margin-top:40px;">

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
                                </div></div>

                        </div>
                    </div>
                </div>
            </section>


<h1 class="align-center" style="font-size: 40px;  background-color: #28aa84;float: none !important;margin: 0;padding: 16px 0 18px 0;text-align: center;"><a style="color: #fff;" href="{{ url('images/lena_j_final.jpg') }}" download>Dont forget to download your gift certificate here!</a></h1>



<style type="text/css">

    .seasonal-dishes {
  background: url({{ url('images/seasonal-dishes-bg.jpg') }}) no-repeat center top fixed;
  -webkit-background-size: cover;
  background-size: cover;
}

</style>
@endsection
