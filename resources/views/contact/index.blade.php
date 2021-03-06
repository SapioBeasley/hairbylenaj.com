@extends('layouts.default')

@section('content')

@include('includes.pageHeader')
<!-- contact -->
<section id="contact" class="contact gray-bg">
    <div class="container">

        <div class="row border-bottom os-animation text-center" data-os-animation="fadeInUp">
            <div class="col-md-6 col-sm-6 title-text border-right">
                <h2 class="title">Contact</h2>
            </div>
            <div class="col-md-6 col-sm-6 simple-text">
                <p class="description text-left">How we can help you. We like to talk and on the strength of that you are invited for a coffee at the salon.</p>
            </div>
        </div>

        <div class="row contact-info os-animation" data-os-animation="fadeInUp">
            <div class="col-md-6 col-sm-6 left-part">
                <p>Out of respect for the client in the chair I do not respond to emails or text inquiries during business hours. Thank you</p>
                <div class="head"> <span class="contact-title">our address</span>
                    <p class="content contact-text address">Phase III Hair Studio @ Sola Salon<br>
                    2986 St.Rose Pkwy, Studio 30 <br>
                    Henderson , Nevada 89052</p>
                </div>
                <ul class="icon-list">
                    <li><i class="fa fa-phone"></i>702.326.3082</li>
                    <li class="divider"></li>
                    <li><i class="fa fa-envelope-o"></i><a href="mailto:no-reply@domain.com">info@hairbylenaj.com</a></li>
                    <li class="divider"></li>
                    <li><i class="fa fa-globe"></i><a href="javascript:;">www.hairbylenaj.com</a></li>
                    <li><a href="https://www.schedulicity.com/scheduling/HBLZFE" class="highlight-button margin-top" style="background-color: #c60c0f;color: #fff;float: left;font-size: 25px;padding: 15px 25px;">Schedule an Appointment!</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-6 right-part">
                <div class="form-group">
                    <form action="" method="post">
                        <input class="form-control" name="name" placeholder="Your Name" type="text">
                        <input class="form-control" name="email" placeholder="Your Email" type="text">
                        <textarea class="form-control" placeholder="Your Comment" name="comment"></textarea>
                        <button id="submit-button" class="small-button text-left">Send message</button>
                    </form>
                </div>
                <div id="success"></div>
            </div>
        </div>

    </div>
</section>
<!-- contact end -->
@endsection
