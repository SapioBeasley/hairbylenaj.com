<!-- header -->
<header id="home" data-stellar-background-ratio="0.5" class="header animated">

  <nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav" role="navigation">
    <div class="container main-navigation">
      <div class="col-md-3 float-left">
        <a class="logo-dark" href="{{ url('/') }}">
          <img width="100%" alt="logo-dark" src="{{ url('images/logo-dark.svg') }}" class="logo-dark" />
        </a>
      </div>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="col-md-9  float-right collapse-navation">
        <div class="navbar-collapse collapse navbar-inverse">
          <ul class="nav navbar-nav navbar-right">
            @include('includes/menuLinks')
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- header text -->
  <div class="blog-details-header">
    <div class="gradient-overlay-blue">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <div class="intro-section os-animation" data-os-animation="fadeIn">
            	<h3 class="blog-details-title">
                <img alt="logo-white" src="{{ url('images/logo-all-white.svg') }}" style="width: 70% !important;" />
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>
<!-- header end -->
