<!DOCTYPE html>
<html class="csstransforms csstransforms3d csstransitions no-js skrollr skrollr-desktop" lang="en">
    <head>
        @include('heads.head')
    </head>

    <body>
        <!-- main page -->
        <div class="main">
            @yield('content')

            <div id="bogo" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body">
                            <p><img src="/images/bogo.jpg"/></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>

            @include('footers.footer')
        </div>
        <!-- main page end -->

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

    </body>

    @include('includes.scripts')

    <script type="text/javascript">
        $(window).load(function(){
            $('#bogo').modal('show');
        });
    </script>

</html>
