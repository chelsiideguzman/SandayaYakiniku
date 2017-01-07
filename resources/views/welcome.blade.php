<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> @include('_partials.head')
    <title>Sandaya Yakiniku</title>
</head>

<body>
    <div id="wrap">
        <section class="container-fluid">
            <section class="row">
                <article class="">

                    <!-- Carousel
================================================== -->
                    <div id="myCarousel" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/1.jpeg" class="">
                                <div class="container">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/2.jpeg" class="img-responsive">
                                <div class="container">
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/3.jpeg" class="img-responsive">
                                <div class="container">
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/4.jpg" class="img-responsive">
                                <div class="container">
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/5.jpg" class="img-responsive">
                                <div class="container">
                                </div>
                            </div>

                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <!-- /.carousel -->
                    @include('_partials.nav')
                </article>
            </section>
            <section class="row featuresimage1">
                <article class="col-md-4 col-sm-1"></article>
                <article class="col-md-8 col-sm-11 p4040">
                    <div class="boxwhite paddingdiv">
                        <div class="introsub">
                            <h2>Sandaya Yakiniku</h2>
                            <hr />
                            <br />
                            <p>
                                This restaurant was opened in Manila by a food hobbyist who is also a businessman himself. It has been established long in existence since the year 2000.<br /> It is located right in the heart of Makati City, along Pasay
                                road, just a short walking distance from the infamous Greenbelt Shopping Mall, and right behind the New World Hotel.<br /> The entrance to the restaurant could be a bit of a challenge though as it is on the second floor
                                of a wine shop which might lead you to ask on why is it there. As you come up the staircase leading to the place and enter the restaurant, you’ll find it surprisingly spacious similar to New York Soho Restaurants. You will
                                discover a quiet place of refuge with walls of antique bricks which a lot of guests find chic and stylish.<br /> President Noynoy Aquino himself is a regular customer since 2002.<br /> Our menu includes not only yakiniku,
                                but seafood grill, hot pot, various Japanese dishes, and lots of appetizers as well. Moreover, our price is very reasonable, and regardless of your age group, you can come along with your group of friends, your family,
                                as well as your tour buddies may enjoy our superbly delicious menu. So, what are you waiting for? Come visit us now!
                            </p>
                        </div>
                    </div>
                </article>
            </section>
            @include('menu')
            <section class="row featuresimage1">
                <article class="col-md-12 col-sm-12 p4040">
                    <div class="boxwhite">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <iframe width="650" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJSeHWWBDJlzMRt0AxWCQYxlI&key=AIzaSyAMCjHQLSzSPLaq7zmBBKkAzMK15dFRQcg" allowfullscreen></iframe>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="introsub p20">
                                    <h2>Contact Us</h2>
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="emailaddress" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="emailaddress" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="contactno" class="col-sm-2 control-label">Contact No.</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="contactno" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="message" class="col-sm-2 control-label">Message</label>
                                            <div class="col-sm-10">
                                                <textarea name="name" rows="6" class="form-control" id="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default btn-block">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
            <section class="row featuresc0">
                <article class="col-md-12 col-sm-12 p4040">
                    <div class="introsub p20">
                        <h2>News</h2>
                        <ul class="list-group">
                            <li class="list-group-item"><a>2015/11/03 : New Package Party, Maximum 30% Discount!</a></li>
                            <li class="list-group-item"><a>Happy New Year!!</a></li>
                            <li class="list-group-item"><a>Meal Coupon</a></li>
                            <li class="list-group-item"><a>Tajima Terrace</a></li>
                            <li class="list-group-item"><a>We never close , Open 365 days</a></li>
                        </ul>
                    </div>
                </article>
            </section>

            <section class="row featuresimage1">
                <article class="col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                            </div>
                            <div class="col-md-6 col-sm-12 boxwhite" style="height: 100vh;">
                                <div class="introsub p20">
                                    <h2>Reservation</h2>
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="landline" class="col-sm-2 control-label">Landline</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="landline" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="emailaddress" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="emailaddress" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="contactno" class="col-sm-2 control-label">Contact No.</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="contactno" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="address" class="col-sm-2 control-label">Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="address" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="guestsno" class="col-sm-2 control-label">No. of Guests</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="guestsno" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="message" class="col-sm-2 control-label">Message <br /><small>Specify date &amp; time</small></label>
                                            <div class="col-sm-10">
                                                <textarea name="name" rows="6" class="form-control" id="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default btn-block">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <section class="row featuresimage1">
                <article class="col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 boxwhite" style="height: 100vh;">
                                <div class="introsub p20">
                                    <h2>Feedback</h2>
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="landline" class="col-sm-2 control-label">Landline</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="landline" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="emailaddress" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="emailaddress" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="contactno" class="col-sm-2 control-label">Contact No.</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="contactno" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="message" class="col-sm-2 control-label">Message <br /><small>Specify date &amp; time</small></label>
                                            <div class="col-sm-10">
                                                <textarea name="name" rows="6" class="form-control" id="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default btn-block">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                            </div>
                        </div>
                    </div>
                </article>
            </section>

        </section>
    </div>
    <!--wrap-->
    @include('_partials.footer') @include('_partials.script')
</body>

</html>
