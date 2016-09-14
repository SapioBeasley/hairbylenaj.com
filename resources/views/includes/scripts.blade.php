<!-- smoth hover -->
<script src="{{ url('js/hover.min.js') }}"></script>
<!-- parallax background -->
<script src="{{ url('js/parallel.min.js') }}"></script>
<!-- jQuery UI -->
<script src="{{ url('js/jquery-ui.min.js') }}"></script>
<!-- modernizr -->
<script src="{{ url('js/modernizr.custom.js') }}"></script>
<!-- smooth page scrolling -->
<script src="{{ url('js/smooth-scroll.js') }}"></script>
<!-- custom javascript  -->
<script src="{{ url('js/custom.js') }}"></script>
<!-- counter  -->
<script src="{{ url('js/conter.js') }}"></script>
<!-- bootstrap  -->
<script src="{{ url('js/bootstrap-custom.js') }}"></script>
<!-- portfolio  -->
<script src="{{ url('js/portfolio.js') }}"></script>
<script src="{{ url('js/jquery.nav.js') }}"></script>
<!-- portfolio  -->
<script src="{{ url('js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ url('js/classie.js') }}"></script>
<!-- custom scrollbar  -->
<script src="{{ url('js/custom-scrollbar.min.js') }}"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

<script src="bower_components/lightslider/dist/js/lightslider.js"></script>

<script>
$('#lightSlider').lightSlider({
keyPress:false,
        item:4,
        loop:true,
        pager: false,
        slideMargin: 0,
        onSliderLoad: function() {
            $('#content-slider').removeClass('cS-hidden');
        }
});
</script>
