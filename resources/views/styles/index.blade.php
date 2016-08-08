@extends('layouts.default')

@section('content')

@include('includes.pageHeader')

<!-- Style packages -->
<section id="grid-gallery" class="grid-gallery no-padding-top no-padding-bottom">
    <div id="work" class="work grid-wrap">

        <ul class="grid portfolio isotope tour-list no-transition portfolio-hex portfolio-shadows row demo-3 os-animation" data-os-animation="fadeInUp">
            <li class="portfolio-item col-md-4 col-sm-4 fashion style grid cs-style-4">
                <figure class="portfolio-figure text-center"> <img src="{{ url('images/styles/1.jpg') }}" alt="" />
                    <figcaption>
                        <span>Nikki</span>
                        <div class="black-line"></div>
                        <p class="text-center tour-details">Nikki wasn’t on a budget, but the beautiful ad that showcased an awesome Groupon deal sold her. As it turns out, there was a reason why it was discounted...</p>

                    </figcaption>
                </figure>
            </li>
            <li class="portfolio-item col-md-4 col-sm-4 fashion style grid cs-style-4">
                <figure class="portfolio-figure text-center"> <img src="{{ url('images/styles/2.jpg') }}" alt="" />
                    <figcaption>
                        <span>Renee</span>
                        <div class="black-line"></div>
                        <p class="text-center tour-details">Renee is in the spotlight of every scene. She is living her life, carpe diem. Dating to her hearts desire, not yet looking for that ring, she has a full schedule.</p>

                    </figcaption>
                </figure>
            </li>
            <li class="portfolio-item col-md-4 col-sm-4 fashion style grid cs-style-4">
                <figure class="portfolio-figure text-center"> <img src="{{ url('images/styles/3.jpg') }}" alt="" />
                    <figcaption>
                        <span>India</span>
                        <div class="black-line"></div>
                        <p class="text-center tour-details">Big curls, big hair, and endless days of untangling. With lovely curls in the front, but a maze of curls belonging to three other strangers haunts her from the back. </p>

                    </figcaption>
                </figure>
            </li>
            <li class="portfolio-item col-md-4 col-sm-4 fashion style grid cs-style-4">
                <figure class="portfolio-figure text-center"> <img src="{{ url('images/styles/4.jpg') }}" alt="" />
                    <figcaption>
                        <span>Kim</span>
                        <div class="black-line"></div>
                        <p class="text-center tour-details">Kim is always picture perfect, think Jennifer Aniston. Her dream hair is obviously perfect shiny, silky hair falling in perfect layers.</p>

                    </figcaption>
                </figure>
            </li>
            <li class="portfolio-item col-md-4 col-sm-4 fashion style grid cs-style-4">
                <figure class="portfolio-figure text-center"> <img src="{{ url('images/styles/5.jpg') }}" alt="" />
                    <figcaption>
                        <span>Monroe</span>
                        <div class="black-line"></div>
                        <p class="text-center tour-details">At the young age of 23 Monroe discovered she has a rare scalp condition called Alpaca . Over a course of several agonizing months, 4 silver dollar size plugs were missing...</p>

                    </figcaption>
                </figure>
            </li>
            <li class="portfolio-item col-md-4 col-sm-4 fashion style grid cs-style-4">
                <figure class="portfolio-figure text-center"> <img src="{{ url('images/styles/6.jpg') }}" alt="" />
                    <figcaption>
                        <span>Kennedy</span>
                        <div class="black-line"></div>
                        <p class="text-center tour-details">As she reaches for her scorching hot curling iron for the fifth time this week, Kennedy realizes her hair is taking a beating, and it's costing her lovely locks length and luster.</p>

                    </figcaption>
                </figure>
            </li>
            <li class="portfolio-item col-md-4 col-sm-4 fashion style grid cs-style-4">
                <figure class="portfolio-figure text-center"> <img src="{{ url('images/styles/7.jpg') }}" alt="" />
                    <figcaption>
                        <span>Ivy</span>
                        <div class="black-line"></div>
                        <p class="text-center tour-details">Ivy is your yoga loving natural gal. She loves tea in the morning, afternoon, and night. As a past time she reads self help books underneath the shade of a big tree.</p>

                    </figcaption>
                </figure>
            </li>
            <li class="portfolio-item col-md-4 col-sm-4 fashion style grid cs-style-4">
                <figure class="portfolio-figure text-center"> <img src="{{ url('images/styles/8.jpg') }}" alt="" />
                    <figcaption>
                        <span>Chanel</span>
                        <div class="black-line"></div>
                        <p class="text-center tour-details">Who says classic has to be boring. Chanel holds one of the cities most respectable officiate positions in town and still she is fierce when entering a room of board members.</p>

                    </figcaption>
                </figure>
            </li>
            <li class="portfolio-item col-md-4 col-sm-4 fashion style grid cs-style-4">
                <figure class="portfolio-figure text-center"> <img src="{{ url('images/styles/9.jpg') }}" alt="" />
                    <figcaption>
                        <span>Rosin</span>
                        <div class="black-line"></div>
                        <p class="text-center tour-details">Rosin has sported the same hair do for the past three years, a little past shoulder length, straight gorgeous hair. From work to play in the same day...</p>

                    </figcaption>
                </figure>
            </li>
        </ul>
    </div>
    <!-- tour packages popup -->
    <div class="slideshow">
        <ul class="popup-slide">
            <li class="popup-slideshow content-scroll">
                <figure class="ipad-scroll">
                    <figcaption>
                        <div class="popup-slider">
                            <div id="carousel-example-generic-01" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">

                                        <img style=" margin-bottom: 40px;" src="{{ url('images/styles/1.jpg') }}" alt="work-02"/>

                                        <div class="popup-line"></div>

                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <strong><?php echo ucwords('Mayvenn Hair Type:') ?></strong> <?php echo ucwords('Straight') ?><br>
                                                <strong><?php echo ucwords('Length/Amount:') ?></strong><?php echo ucwords('1 bundle of 18in, 1 bundle of 16in, Custom Color Technique')  ?><br>
                                                <strong><?php echo ucwords('Install:') ?></strong> <?php echo ucwords('Malaysian Tracks') ?><br>
                                                <div class="popup-line"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-part">
                            <h4 class="title text-left">Nikki</h4>
                            <!-- <span class="text-left category">2 Days / 3 Nights - $580</span> -->
                            <div class="popup-line"></div>
                            <span class="work-details">Nikki wasn’t on a budget, but the beautiful ad that showcased an awesome Groupon deal sold her. As it turns out, there was a reason why it was discounted at such a cheap price, you get what you pay for. Unfortunately for her, when she stepped out of the chair, her hair did not remotely look like the model’s style in the glossy picture. </span>
							<p>Nikki’s choppy, unruly Groupon cut sent her racing full speed ahead to the LJ Mane Haircare System. </p>
							<p>This was definitely not the cut she had in mind when she asked for long, edgy layers. Sigh, growing out layers or a bad haircut has never been easy. Trying to achieve a seamless flow with style after the chainsaw hack job seems virtually impossible. </p>
							<p>To Nikki was jaw dropping surprise, all systems in the LJ Mane collection could give her this radiant, bouncy hairstyle.  </p>
							<p>The plumped up fullness and volume makes for luscious hair every day of the week. </p>
							<p>Now now, this isn't the style to be wall flower shy. It will require eight ounces of wefts installed or more to achieve this full look, but it’s perfect for blending unwanted layers or hiding bad sobbing discounted hair cuts.</p>

                            <div class="popup-line"></div>
                            <ul class="itinerary">
                                <li><span style="width:100%">"NATURALLY EXTENDED"</span> <p style="width:100%"> Longer is better! Adding length to your hair is an instantaneous transformation to being a glamazon or Goddess.</p></li>
                            </ul>
                            <a href="https://www.schedulicity.com/scheduling/HBLZFE" class="highlight-button margin-top">Schedule Now</a>
                            <a href="https://hairbylenaj.mayvenn.com/" class="highlight-button margin-top" style="background-color: #28aa84;color: #fff;float: left;font-size: 25px;padding: 15px 25px;">Shop Hair Now</a>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="popup-slideshow content-scroll">
                <figure class="ipad-scroll">
                    <figcaption>
                        <div class="popup-slider">
                            <div id="carousel-example-generic-01" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img style=" margin-bottom: 40px;" src="{{ url('images/styles/2.jpg') }}" alt="work-02"/>
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <strong><?php echo ucwords('Mayvenn Hair Type:') ?></strong> <?php echo ucwords('Ultra Body Wave, Brazillian Curly Lace Closure') ?><br>
                                                <strong><?php echo ucwords('Length/Amount:') ?></strong><?php echo ucwords('3 bundles of 18in') ?><br>
                                                <strong><?php echo ucwords('Install:') ?></strong> <?php echo ucwords('fulll closure install, Custom Unit') ?><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-part">
                            <h4 class="title text-left">Renee</h4>
                            <!-- <span class="text-left category">2 Days / 3 Nights - $580</span> -->
                            <div class="popup-line"></div>
                            <span class="work-details">Renee is in the spotlight of every scene. She is living her life, carpe diem. Dating to her hearts desire, not yet looking for that ring, she has a full schedule.</span>
							<p>Her busy life calls for quick transitional hair that takes her from the ball busting gym time to a light lunch date. </p>
							<p>Although Renee has a healthy hair, she isn't satisfied at all with her natural length. </p>
							<p>The traditional full head weave she often time got in the past was not supportive to the different ways Renee likes to style her hair. She craves versatility while wearing her protective sew-in style.</p>
							<p>She is now hooked on this four-way weaving technique that allows for high stylish ponytails, beautiful half-up formal styles, as well as trendy part-reveling goddess braids, which is her signature look.</p>
                            <div class="popup-line"></div>
                            <ul class="itinerary">
                                <li><span style="width:100%">"SLEEPING BEAUTY"</span> <p style="width:100%"> Let me put your damaged hair to sleep and awaken with beauty. Hand over the comb and brush now. Leave it up to me to get your hair healthy once and for all.</p></li>
                                <li><span style="width:100%">"THE MANE CONNECTION"</span> <p style="width:100%"> Your natural hair is washed and conditioned with love biweekly. Your scalp is pampered with rose water creams and braided down to assure a snug fit. </p></li>
                            </ul>
                            <a href="https://www.schedulicity.com/scheduling/HBLZFE" class="highlight-button margin-top">Schedule Now</a>
                            <a href="https://hairbylenaj.mayvenn.com/" class="highlight-button margin-top" style="background-color: #28aa84;color: #fff;float: left;font-size: 25px;padding: 15px 25px;">Shop Hair Now</a>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="popup-slideshow content-scroll">
                <figure class="ipad-scroll">
                    <figcaption>
                        <div class="popup-slider">
                            <div id="carousel-example-generic-01" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img style=" margin-bottom: 40px;" src="{{ url('images/styles/3.jpg') }}" alt="work-02"/>
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <strong><?php echo ucwords('Mayvenn Hair Type:') ?></strong> <?php echo ucwords('Deluxe Curly ') ?><br>
                                                <strong><?php echo ucwords('Length/Amount:') ?></strong><?php echo ucwords('12in, 14in, 16in bundle deal ') ?><br>
                                                <strong><?php echo ucwords('Install:') ?></strong> <?php echo ucwords('Classic Instalation, Custom Unit') ?><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-part">
                            <h4 class="title text-left">India</h4>
                            <!-- <span class="text-left category">2 Days / 3 Nights - $580</span> -->
                            <div class="popup-line"></div>
                            <span class="work-details">Big curls, big hair, and endless days of untangling. With lovely curls in the front, but a maze of curls belonging to three other strangers haunts her from the back. </span>
							<p>Going natural makes her stand out from the crowd with her afro, but the unpredictability of India’s natural beautiful hair is driving her to drink away her problems. </p>
							<p>India decided to transform and recreate her look with the LJ Mane Collection. </p>
							<p>Now, she can finally claim her long time dream of having big, chocolate-brown, bouncy, sexy ringlets as her own. Perfectly feathered layers and with the added gorgeous length to make any women feel like a Goddess, she just can't get enough of the countless juicy compliments. </p>
							<p>This sexy protective styles gives India the confidence of knowing her natural hair is well protected from all the manipulation of styling, while still looking amazing. She feels lusciously bold and exotic with her brown ringlets when she steps to the mic for spoken word poetry at Shakespeare Lounge.</p>

                            <div class="popup-line"></div>
                            <ul class="itinerary">
                                <li><span style="width:100%">"SLEEPING BEAUTY"</span> <p style="width:100%"> Let me put your damaged hair to sleep and awaken with beauty. Hand over the comb and brush now. Leave it up to me to get your hair healthy once and for all.</p></li>
                                <li><span style="width:100%">"THE MANE CONNECTION"</span> <p style="width:100%"> Your natural hair is washed and conditioned with love biweekly. Your scalp is pampered with rose water creams and braided down to assure a snug fit. </p></li>
                            </ul>
                            <a href="https://www.schedulicity.com/scheduling/HBLZFE" class="highlight-button margin-top">Schedule Now</a>
                            <a href="https://hairbylenaj.mayvenn.com/" class="highlight-button margin-top" style="background-color: #28aa84;color: #fff;float: left;font-size: 25px;padding: 15px 25px;">Shop Hair Now</a>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="popup-slideshow content-scroll">
                <figure class="ipad-scroll">
                    <figcaption>
                        <div class="popup-slider">
                            <div id="carousel-example-generic-01" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img style=" margin-bottom: 40px;" src="{{ url('images/styles/4.jpg') }}" alt="work-02"/>
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <strong><?php echo ucwords('Mayvenn Hair Type:') ?></strong> <?php echo ucwords('Deluxe Straight ') ?><br>
                                                <strong><?php echo ucwords('Length/Amount:') ?></strong><?php echo ucwords('4 bundles 16in x2, 18in x2 ') ?><br>
                                                <strong><?php echo ucwords('Install:') ?></strong><?php echo ucwords('classic install, Custom Unit') ?><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-part">
                            <h4 class="title text-left">Kim</h4>
                            <!-- <span class="text-left category">2 Days / 3 Nights - $580</span> -->
                            <div class="popup-line"></div>
                            <span class="work-details">Kim is always picture perfect, think Jennifer Aniston. Her dream hair is obviously perfect shiny, silky hair falling in perfect layers. Although, having her hair falling in perfect layers has always been her challenge. </span>
							<p>Getting bold, looking to change up her style and try something brand spanking new, Kim decides she is ready to give hair extensions a try. </p>
							<p>After tons of research online and offline, Lena J was the perfect solution to her problem. </p>
							<p>Together, Kim and Lena J hashed out the dynamics and concept of her new image. With Lena J’s insights and hair wisdom achieving a hairstyle that will make Kim feel beautiful, confident was easy. </p>
							<p>Being an in demand model with hundreds of photo shoots each month with hundreds of different hairstyles, not mentioning different hair styles for parties, she needed a style that was versatile with little to no maintenance, but easy to glam up.</p>
							<p>With merely four inches of natural hair leave-out, a classic weave was exactly what she needed for for her hectic lifestyle. </p>
							<p>This full sew-in gives a natural appeal, all while embracing and protecting her natural hair from daily styling damage. </p>
							<p><small style="font-size: 12px;">*Client should have a healthy hairline to support the style for best results.</small></p>

                            <div class="popup-line"></div>
                            <ul class="itinerary">
                                <li><span style="width:100%">"SLEEPING BEAUTY"</span> <p style="width:100%"> Let me put your damaged hair to sleep and awaken with beauty. Hand over the comb and brush now. Leave it up to me to get your hair healthy once and for all.</p></li>
                            </ul>
                            <a href="https://www.schedulicity.com/scheduling/HBLZFE" class="highlight-button margin-top">Schedule Now</a>
                            <a href="https://hairbylenaj.mayvenn.com/" class="highlight-button margin-top" style="background-color: #28aa84;color: #fff;float: left;font-size: 25px;padding: 15px 25px;">Shop Hair Now</a>

                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="popup-slideshow content-scroll">
                <figure class="ipad-scroll">
                    <figcaption>
                        <div class="popup-slider">
                            <div id="carousel-example-generic-01" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img style=" margin-bottom: 40px;" src="{{ url('images/styles/5.jpg') }}" alt="work-02"/>
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <strong><?php echo ucwords('Mayvenn Hair Type:') ?></strong> <?php echo ucwords('Premium Indian Straight Blonde ') ?><br>
                                                <strong><?php echo ucwords('Length/Amount:') ?></strong><?php echo ucwords('4 bundles 16in, 18in, 20in, 22in with straight closure in back ') ?><br>
                                                <strong><?php echo ucwords('Install:') ?></strong><?php echo ucwords('custom unit') ?><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-part">
                            <h4 class="title text-left">Monroe</h4>
                            <!-- <span class="text-left category">2 Days / 3 Nights - $580</span> -->
                            <div class="popup-line"></div>
                            <span class="work-details">At the young age of 23 Monroe discovered she has a rare scalp condition called Alpaca . Over a course of several agonizing months, 4 silver dollar size plugs were missing from her once full luscious Golden locks.  </span>
                            Monroe was not happy with the not so sexy cover up styles she had been forced to wear.

							<p>Her stylist, Lena J, had an amazing solution. </p>

							<p>By securing her natural hair away, all cozy and tucked close to her scalp, a gorgeous customized hair unit was created to fit perfectly snug to Monroe’s head shape. </p>

							<p>She now flaunts and enjoys her beautiful golden mane at her new job. She feels confident and sexy once again. Finding success in her career and personal love life as well.</p>

							<p>Customized units are a great way to nurture your natural hair carefully and allow coverage and protection to problem areas of your hair while they rest and repair. This style can be securely sewn down or snapped on with hair clips attachments.</p>

                            <div class="popup-line"></div>
                            <ul class="itinerary">
                                <li><span style="width:100%">"THE MANE CONNECTION"</span> <p style="width:100%"> Your natural hair is washed and conditioned with love biweekly. Your scalp is pampered with rose water creams and braided down to assure a snug fit. </p></li>
                            </ul>
                            <a href="https://www.schedulicity.com/scheduling/HBLZFE" class="highlight-button margin-top">Schedule Now</a>
                            <a href="https://hairbylenaj.mayvenn.com/" class="highlight-button margin-top" style="background-color: #28aa84;color: #fff;float: left;font-size: 25px;padding: 15px 25px;">Shop Hair Now</a>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="popup-slideshow content-scroll">
                <figure class="ipad-scroll">
                    <figcaption>
                        <div class="popup-slider">
                            <div id="carousel-example-generic-01" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img style=" margin-bottom: 40px;" src="{{ url('images/styles/6.jpg') }}" alt="work-02"/>
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <strong><?php echo ucwords('Mayvenn Hair Type:') ?></strong> <?php echo ucwords('Inian Straignt Blonde with Dark Roots ') ?><br>
                                                <strong><?php echo ucwords('Length/Amount:') ?></strong><?php echo ucwords('2 bund 22in and 24in ') ?><br>
                                                <strong><?php echo ucwords('Install:') ?></strong><?php echo ucwords('braid-in track install') ?><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-part">
                            <h4 class="title text-left">Kennedy</h4>
                            <!-- <span class="text-left category">2 Days / 3 Nights - $580</span> -->
                            <div class="popup-line"></div>
                            <span class="work-details">As she reaches for her scorching hot curling iron for the fifth time this week, Kennedy realizes her hair is taking a beating, and it's costing her lovely locks length and luster.</span>
                            <p>With her fitness competition in just three weeks, Kennedy’s day-to-day schedule is getting pretty hectic.
							<p>Being a sexy model bartender at night and sweating in gym sessions during the day has a drastic effect on Kennedy's hair.  </p>
							<p>Luxury stylist Lena J offers THE solution to Kennedy's hair damaging problems. </p>
							<p>With Lena J’s exclusive miracle systems and technique she adds three to five supportive tracks to Kennedy's natural hair. The fab tracks of amazing hair gives this hard working chick the support her hair needed. To give her perfect ponytails at the gym and sexy, sleek hair behind the bar at night. Her vibrant customized hair color perfectly fuses her natural hair with her new LJ Mane extensions. </p>
							<p>After just one easy stress free year of commitment to the LJ Mane Naturally Extended System, Kennedy was pumping iron excited to see that her natural hair had recovered to healthy shiny strands. She no longer worries her fast paced lifestyle will effecting her hair.</p>

                            <div class="popup-line"></div>
                            <ul class="itinerary">
                                <li><span style="width:100%">"NATURALLY EXTENDED"</span> <p style="width:100%"> Longer is better! Adding length to your hair is an instantaneous transformation to being a glamazon or Goddess.</p></li>
                            </ul>
                            <a href="https://www.schedulicity.com/scheduling/HBLZFE" class="highlight-button margin-top">Schedule Now</a>
                            <a href="https://hairbylenaj.mayvenn.com/" class="highlight-button margin-top" style="background-color: #28aa84;color: #fff;float: left;font-size: 25px;padding: 15px 25px;">Shop Hair Now</a>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="popup-slideshow content-scroll">
                <figure class="ipad-scroll">
                    <figcaption>
                        <div class="popup-slider">
                            <div id="carousel-example-generic-01" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img style=" margin-bottom: 40px;" src="{{ url('images/styles/7.jpg') }}" alt="work-02"/>
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <strong><?php echo ucwords('Mayvenn Hair Type:') ?></strong> <?php echo ucwords('Deluxde Deep Wave ') ?><br>
                                                <strong><?php echo ucwords('Length/Amount:') ?></strong><?php echo ucwords('4 bundles of 12in, 14in, 16in, 18in ') ?><br>
                                                <strong><?php echo ucwords('Install:') ?></strong> <?php echo ucwords('flipover meethod install or Custom Unit') ?><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-part">
                            <h4 class="title text-left">Ivy</h4>
                            <!-- <span class="text-left category">2 Days / 3 Nights - $580</span> -->
                            <div class="popup-line"></div>
                            <span class="work-details">Ivy is your yoga loving natural gal. She loves tea in the morning, afternoon, and night. As a past time she reads self help books underneath the shade of a big tree. Loves juicing and health cleanses. Even though she is au naturale, she still wants to feel bold and beautiful, like the Goddess of the Forest. She is what you would call a fashionable hippy in this century.</span>
                            <p>Ivy dreams of a natural, carefree, effortless, protective style. She doesn't even own hot tools. </p>
							<p>Based on her lifestyle she will flourish with natural, tussled curls, whether it’s a full sew-in weave or simply adding in a few tracks, this boho style is sure to turn heads.</p>
							<p>Ivy was yoga handstand thrilled to know all four protective systems offered by LJ Mane Collection can give her this flawless finish. </p>
							<p>This style will make anyone the queen of volumized hair. The Key to this style is perfect hair selection. with proper care and maintenance it can last up to 3 installs, thats almost 1 full year. (Wow!)  And the icing on the chocolate mouse cake is, Lena J can assure you that you will see and feel improvement in the condition of your hair within 6-12 months.</p>

                            <div class="popup-line"></div>
                            <ul class="itinerary">
                                <li><span style="width:100%">"SLEEPING BEAUTY"</span> <p style="width:100%"> Let me put your damaged hair to sleep and awaken with beauty. Hand over the comb and brush now. Leave it up to me to get your hair healthy once and for all.</p></li>
                                <li><span style="width:100%">"THE MANE CONNECTION"</span> <p style="width:100%"> Your natural hair is washed and conditioned with love biweekly. Your scalp is pampered with rose water creams and braided down to assure a snug fit. </p></li>
                            </ul>
                            <a href="https://www.schedulicity.com/scheduling/HBLZFE" class="highlight-button margin-top">Schedule Now</a>
                            <a href="https://hairbylenaj.mayvenn.com/" class="highlight-button margin-top" style="background-color: #28aa84;color: #fff;float: left;font-size: 25px;padding: 15px 25px;">Shop Hair Now</a>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="popup-slideshow content-scroll">
                <figure class="ipad-scroll">
                    <figcaption>
                        <div class="popup-slider">
                            <div id="carousel-example-generic-01" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img style=" margin-bottom: 40px;" src="{{ url('images/styles/8.jpg') }}" alt="work-02"/>
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <strong><?php echo ucwords('Mayvenn Hair Type:') ?></strong> <?php echo ucwords('Peruvian Straight ') ?><br>
                                                <strong><?php echo ucwords('Length/Amount:') ?></strong><?php echo ucwords('3 bundles of 26in with 18in premium braziallian straight silk closure') ?><br>
                                                <strong><?php echo ucwords('Install:') ?></strong> <?php echo ucwords('closure method or Custom Unit') ?><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-part">
                            <h4 class="title text-left">Chanel</h4>
                            <!-- <span class="text-left category">2 Days / 3 Nights - $580</span> -->
                            <div class="popup-line"></div>
                            <span class="work-details">Who says classic has to be boring. Chanel holds one of the cities most respectable officiate positions in town and still she is fierce when entering a room of board members.</span>
                            <p>Lena J found a rock star style for this powerful lady.</p>

							<p>Bold 20 inch mane and precision cut fringe, perfectly frames Chanel's butter smooth angelic face. Tailored single breast suit, 5 inch black point toe sling back pump and yes this classic sharp cut bang is screaming fashioniesta professional.</p>

							<p>This style can be created using any of the protective systems. By simply shortening the length it quickly becomes a cheek flirty creation that is still guaranteed to turn heads.</p>

							<p>You will surely feel powerful and in charge with this knock out classic shape.</p>

							<p><small style="font-size: 12px;">*This is a great style to have as a customize unit.</small>  </p>
							<p><small style="font-size: 12px;">Great no committed make over that ever woman should have ready for that special occasion.</small> </p>

                            <div class="popup-line"></div>
                            <ul class="itinerary">
                                <li><span style="width:100%">"SLEEPING BEAUTY"</span> <p style="width:100%"> Let me put your damaged hair to sleep and awaken with beauty. Hand over the comb and brush now. Leave it up to me to get your hair healthy once and for all.</p></li>
                                <li><span style="width:100%">"THE MANE CONNECTION"</span> <p style="width:100%"> Your natural hair is washed and conditioned with love biweekly. Your scalp is pampered with rose water creams and braided down to assure a snug fit. </p></li>
                            </ul>
                            <a href="https://www.schedulicity.com/scheduling/HBLZFE" class="highlight-button margin-top">Schedule Now</a>
                            <a href="https://hairbylenaj.mayvenn.com/" class="highlight-button margin-top" style="background-color: #28aa84;color: #fff;float: left;font-size: 25px;padding: 15px 25px;">Shop Hair Now</a>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="popup-slideshow content-scroll">
                <figure class="ipad-scroll">
                    <figcaption>
                        <div class="popup-slider">
                            <div id="carousel-example-generic-01" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img style=" margin-bottom: 40px;" src="{{ url('images/styles/9.jpg') }}" alt="work-02"/>
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <strong><?php echo ucwords('Mayvenn Hair Type:') ?></strong> <?php echo ucwords('Deluxe Body Wave ') ?><br>
                                                <strong><?php echo ucwords('Length/Amount:') ?></strong> <?php echo ucwords('2 bundles of 12in with closure ') ?><br>
                                                <strong><?php echo ucwords('Install:') ?></strong> <?php echo ucwords('Classic or Custom Unit') ?><br>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="right-part">
                            <h4 class="title text-left">Rosin</h4>
                            <!-- <span class="text-left category">2 Days / 3 Nights - $580</span> -->
                            <div class="popup-line"></div>
                            <span class="work-details">Rosin has sported the same hair do for the past three years, a little past shoulder length, straight gorgeous hair. From work to play in the same day, she needs a style that is bold, edgy, yet with no prep required. </span>
                            <p>Rosin was tired of her boring been done hair and is totally ready for a hair makeover. </p>

							<p>After scrolling through the LJ Mane Systems and having a one on one with Lena J, Rosin was able to select a look and system that was customized to fit her unique image and amazing lifestyle. </p>

							<p>After some lattes, cupcakes, girl chats, and sexy hair time, Rosin steps out of the salon wearing a new shinny black bombshell bob that she loves more then selfies.</p>

							<p>As she steps out into the busy crowd filled street, Rosin’s hair definitely turns heads and commands the attention of everyone when she struts into the office. </p>

							<p>Rosin has surly gotten her sass back. Her new elegant shape takes all the guessing out of day-to-day styling. By simply adding a few curls, she can quickly transform from sleek to sexy.  So when it’s time to hit the town and paint it red, her fabulously cut bob transforms into a sexy edgy Mohawk. </p>

							<p><small style="font-size: 12px;">*Whether you’re ready to cut away the old you (sigh) or simply try something new with no commitments (as in chopping off your hair), this style is perfect transitional hair.</small></p>

                            <div class="popup-line"></div>
                            <ul class="itinerary">

                                <li><span style="width:100%">"SLEEPING BEAUTY"</span> <p style="width:100%"> Let me put your damaged hair to sleep and awaken with beauty. Hand over the comb and brush now. Leave it up to me to get your hair healthy once and for all.</p></li>
                                <li><span style="width:100%">"THE MANE CONNECTION"</span> <p style="width:100%"> Your natural hair is washed and conditioned with love biweekly. Your scalp is pampered with rose water creams and braided down to assure a snug fit. </p></li>
                                <li><span style="width:100%">"NATURALLY EXTENDED"</span> <p style="width:100%"> Longer is better! Adding length to your hair is an instantaneous transformation to being a glamazon or Goddess.</p></li>
                            </ul>
                            <a href="https://www.schedulicity.com/scheduling/HBLZFE" class="highlight-button margin-top">Schedule Now</a>
                            <a href="https://hairbylenaj.mayvenn.com/" class="highlight-button margin-top" style="background-color: #28aa84;color: #fff;float: left;font-size: 25px;padding: 15px 25px;">Shop Hair Now</a>
                        </div>
                    </figcaption>
                </figure>
            </li>
        </ul>
        <nav class="popup-navigation"> <span class="icon nav-prev"></span> <span class="icon nav-next"></span> <span class="icon nav-close"></span> </nav>
    </div>
</section>
<!-- tour packages end -->
@endsection
