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
