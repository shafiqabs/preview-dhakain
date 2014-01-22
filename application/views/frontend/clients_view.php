<!-- content -->
<div id="content">
<div class="cont-head">
    <div class="cont-text container">
        <h1><?php echo $title; ?></h1>
        <p>You are Here:<a href="/"><span></span> Home</a><a href="javascript:"><span></span> <?php echo $title; ?></a></p>
    </div>
</div>
<div id="inner-content" class="container">

<div class="blog row-fluid">
<aside id="sidebar" class="span4">
    <ul>
        <li class="widget" style="height:auto; clear: both; display: inline-block">
            <h1>Our services</h1>
            <div class="span12" style="background: #ffffff; padding: 15px">
                <form class="form-inline">

                    <div class="control-group">

                        <select name="destination"  class="select-single" id="destination">
                            <option value="">Your destination</option>
                            <option value="67">5 Star Models</option>
                            <option value="7">Accurate Armour</option>
                            <option value="100">Add On parts</option>
                            <option selected="selected" value="102">Adlers Nest</option>
                            <option value="44">AFV Club</option>
                            <option value="21">AK Interactive</option>
                            <option value="12">Vulcan Scale Models</option>
                            <option value="34">Wespe Models</option>
                            <option value="20">Yellow Cat</option>
                            <option value="90">Разное</option>
                        </select>

                    </div>
<div class="control-group" >
    <input class="input-medium calender" id="check_in_date" name="check_in_date" type="text" placeholder="Check-In Date" >

</div>
<div class="control-group" >
    <input class="input-medium calender" id="check_out_date" name="check_out_date" type="text" placeholder="Check out date">

</div>

                    <div class="control-group">
                        <select name="total_nights" class="select-single" id="total_nights">
                            <option value="">Total Nights</option>
                            <option selected="selected" value="67">5 Star Models</option>
                            <option value="7">Accurate Armour</option>
                        </select>
                    </div>
                        <div class="control-group" >
                            <select name="destination"  class="select-single" id="destination">
                                <option value="">-Select-</option>
                                <option value="1">Single</option>
                                <option value="2">Double</option>
                                <option value="3">Double + 1 Child</option>
                                <option value="4">Twin</option>
                                <option value="5">Twin + 1 Child</option>
                                <option value="6">Triple</option><option value="8">Quad</option>
                                <option value="9">Double + 2 Children</option>
                                <option value="10">Twin + 2 Children</option>
                            </select>
                        </div>
                        <div class="control-group" >
                            <select name="total_nights" class="select-single" id="total_nights">
                                <option value="">Rooms</option>
                                <?php for($i=1;  10 >= $i ; $i++){ ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>

                        </div>


                    <div class="control-group checks">
                        <span id="rating">Ratings</span>
                        <label><input type="checkbox">1</label>
                        <label><input type="checkbox">2</label>
                        <label><input type="checkbox">3</label>
                        <label><input type="checkbox">4</label>
                        <label><input type="checkbox">5</label>

                    </div>
                    <div class="control-group" >
                        <div class="controls" style="float: right; margin-right: 5px">
                            <button type="submit" class="btn">Reset</button>&nbsp;<button type="button" data-loading-text="Loading..." class="btn btn-success">Search</button>
                        </div>
                    </div>


                </form>
            </div>
            <div class="clear"></div>
        </li>

        <li class="widget tabs-widget">
            <ul class="tab-links clearfix">
                <li class="active" ><a href="#popular-tab">Popular</a></li>
                <li><a href="#recent-tab">Recent</a></li>
                <li><a href="#comments-tab">Comments</a></li>
            </ul>
            <ul class="tab-content">
                <li>
                    <div>
                        <a href="##"><img alt="" src="/assets/upload/img1.jpg"></a>
                        <h3><a href="##">Modern kitchen design ideas with white contemporary</a></h3>
                        <span><img src="/assets/images/clock.png">31 May 9:10 AM</span>
                    </div>
                    <div>
                        <a href="##"><img alt="" src="/assets/upload/img1.jpg"></a>
                        <h3><a href="##">Modern kitchen design ideas with white contemporary</a></h3>
                        <span><img src="/assets/images/clock.png">31 May 9:10 AM</span>
                    </div>
                    <div>
                        <a href="##"><img alt="" src="/assets/upload/img1.jpg"></a>
                        <h3><a href="##">Modern kitchen design ideas with white contemporary</a></h3>
                        <span><img src="/assets/images/clock.png">31 May 9:10 AM</span>
                    </div>
                    <div>
                        <a href="##"><img alt="" src="/assets/upload/img1.jpg"></a>
                        <h3><a href="##">Modern kitchen design ideas with white contemporary</a></h3>
                        <span><img src="/assets/images/clock.png">31 May 9:10 AM</span>
                    </div>
                </li>
                <li>
                    <div>
                        <a href="##"><img alt="" src="/assets/upload/img1.jpg"></a>
                        <h3><a href="##">Modern kitchen design ideas with white contemporary</a></h3>
                        <span><img src="/assets/images/clock.png">31 May 9:10 AM</span>
                    </div>
                    <div>
                        <a href="##"><img alt="" src="/assets/upload/img1.jpg"></a>
                        <h3><a href="##">Modern kitchen design ideas with white contemporary</a></h3>
                        <span><img src="/assets/images/clock.png">31 May 9:10 AM</span>
                    </div>
                    <div>
                        <a href="##"><img alt="" src="/assets/upload/img1.jpg"></a>
                        <h3><a href="##">Modern kitchen design ideas with white contemporary</a></h3>
                        <span><img src="/assets/images/clock.png">31 May 9:10 AM</span>
                    </div>
                    <div>
                        <a href="##"><img alt="" src="/assets/upload/img1.jpg"></a>
                        <h3><a href="##">Modern kitchen design ideas with white contemporary</a></h3>
                        <span><img src="/assets/images/clock.png">31 May 9:10 AM</span>
                    </div>
                </li>
                <li>
                    <div>
                        <a href="##"><img alt="" src="/assets/images/avatar.jpg"></a>
                        <h3><a href="##">Besim says:</a></h3>
                        <p>lorem ipsum dolor sit amet. Doloros una verdicta</p>
                    </div>
                    <div>
                        <a href="##"><img alt="" src="/assets/images/avatar.jpg"></a>
                        <h3><a href="##">Besim says:</a></h3>
                        <p>lorem ipsum dolor sit amet. Doloros una verdicta</p>
                    </div>
                    <div>
                        <a href="##"><img alt="" src="/assets/images/avatar.jpg"></a>
                        <h3><a href="##">Besim says:</a></h3>
                        <p>lorem ipsum dolor sit amet. Doloros una verdicta</p>
                    </div>
                    <div>
                        <a href="##"><img alt="" src="/assets/images/avatar.jpg"></a>
                        <h3><a href="##">Besim says:</a></h3>
                        <p>lorem ipsum dolor sit amet. Doloros una verdicta</p>
                    </div>
                </li>
            </ul>
        </li>

        <li class="widget serv-widget">
            <h1>Our services</h1>
            <div class="serv-item">
                <h3 class="active"><img src="/assets/images/serv-icon1.png">Powerful Admin</h3>
                <p>Formerly known as the Admin Bar, the Toolbar has links to various administration functions, and is displayed at the top of each Administra</p>
                <h3><img src="/assets/images/serv-icon2.png">Optimized Code</h3>
                <p>Formerly known as the Admin Bar, the Toolbar has links to various administration functions, and is displayed at the top of each Administra</p>
                <h3><img src="/assets/images/serv-icon3.png">Flexible Layout</h3>
                <p>Formerly known as the Admin Bar, the Toolbar has links to various administration functions, and is displayed at the top of each Administra</p>
                <h3><img src="/assets/images/serv-icon4.png">Clean Design</h3>
                <p>Formerly known as the Admin Bar, the Toolbar has links to various administration functions, and is displayed at the top of each Administra</p>
            </div>
        </li>

        <li class="widget text-widget">
            <h1>Text Widget</h1>
            <p>Formerly known as the Admin Bar, the Toolbar has links to various administration functions, and is displayed at the top of</p>
        </li>

        <li class="widget tag-cloud-widget">
            <h1>Tags</h1>
            <a href="##">wordpress</a>
            <a href="##">business</a>
            <a href="##">themeforest</a>
            <a href="##">web design</a>
            <a href="##">photoshop</a>
            <a href="##">css</a>
            <a href="##">tutorials</a>
            <a href="##">jQuery</a>
            <a href="##">themes</a>
            <a href="##">php</a>
            <a href="##">technology</a>
        </li>

        <li class="widget subscribe-widget">
            <h1>Get our Newsletter</h1>
            <form class="clearfix">
                <input type="text" placeholder="Enter your email address">
                <input type="submit" value="Submit">
            </form>
        </li>

        <li class="widget flicker-widget">
            <h1>Flickr Widget</h1>
            <a href="##"><img alt="" src="/assets/images/footer-photo.jpg"></a>
            <a href="##"><img alt="" src="/assets/images/footer-photo.jpg"></a>
            <a href="##"><img alt="" src="/assets/images/footer-photo.jpg"></a>
            <a href="##"><img alt="" src="/assets/images/footer-photo.jpg"></a>
            <a href="##"><img alt="" src="/assets/images/footer-photo.jpg"></a>
            <a href="##"><img alt="" src="/assets/images/footer-photo.jpg"></a>
            <a href="##"><img alt="" src="/assets/images/footer-photo.jpg"></a>
            <a href="##"><img alt="" src="/assets/images/footer-photo.jpg"></a>
            <a href="##"><img alt="" src="/assets/images/footer-photo.jpg"></a>
        </li>
    </ul>

</aside>
<div class="span8">
    <div class="blog-post span12">

        <ul class="clients">
         <li class="client post-title">
             <h1><a href="singlepost.html">Rupashi Bangla</a></h1>
             <span class="span2 client-logo" ><img src="/assets/images/client-logo1.png" ></span>
             <span class="span9">
                 <ul class="arrow-list">
                     <li>

                         <span class="text-light" style="color:#479300; font-weight: bold">350 Rooms, 3 Star , Price BDT: 500 - 24000 </span>
                     </li>
                     <li>
                         <span class="text-dark">Location:</span>
                         <span class="text-light"> HTML5 Template</span>
                         <span class="text-light">&nbsp;|&nbsp;<a href="http://reservationin.com">Google Map</a> </span>
                         <span class="text-light">&nbsp;|&nbsp;<a href="http://reservationin.com">Direction</a> </span>

                     </li>

                     <li>
                         <span class="text-dark">Address:</span>
                         <span class="text-light"> 21 August, 2012</span>
                     </li>

                     <li>
                         <span class="text-dark">Contact:</span>
                         <span class="text-light">Md Shafiqul islam</span>
                         <span class="text-light">, Managing Director</span>
                     </li>

                     <li>
                         <span class="text-dark">Web:</span>
                         <span class="text-light"><a href="http://reservationin.com">http://reservationin.com</a> </span>
                         <span class="text-light">&nbsp;|&nbsp;<a href="http://reservationin.com">info@reservationin.com</a> </span>
                     </li>
                     <li>
                         <span class="text-dark"> Direct Call:</span>
                         <span class="text-light"> 01828-148147 </span>
                         <span class="text-light" style="float: right" >
				 </span>
                         <div class="clear"></div>
                         <a style="float: right; margin-left: 10px" id="read-more" href="singlepost.html">Travel Guide<span></span></a>
                         <a style="float: right; margin-left: 10px" id="read-more" href="singlepost.html">Read More <span></span></a>
                         <a style="float: right" id="read-more" href="singlepost.html">Booking Now<span></span></a>
                     </li>
                 </ul>

             </span>
             <div class="clear"></div>
         </li>
         <li class="client post-title">
             <h1><a href="singlepost.html">Tuts+ Premium Security Breach & The Marketplaces</a></h1>
             <span class="span2 client-logo" ><img src="/assets/images/client-logo1.png" ></span>
             <span class="span9">
                 <ul class="arrow-list">
                     <li>

                         <span class="text-light"> HTML5 Template</span>
                     </li>
                     <li>
                         <span class="text-dark">Location:</span>
                         <span class="text-light"> HTML5 Template</span>
                     </li>

                     <li>
                         <span class="text-dark">Address:</span>
                         <span class="text-light"> 21 August, 2012</span>
                     </li>

                     <li>
                         <span class="text-dark">Contact:</span>
                         <span class="text-light">Md Shafiqul islam</span>
                         <span class="text-light">, Managing Director</span>
                     </li>

                     <li>
                         <span class="text-dark">Web:</span>
                         <span class="text-light"><a href="http://reservationin.com">http://reservationin.com</a> </span>
                         <span class="text-light">&nbsp;|&nbsp;<a href="http://reservationin.com">info@reservationin.com</a> </span>
                     </li>
                     <li>
                         <span class="text-dark"> Direct Call:</span>
                         <span class="text-light"> 01828-148147 </span>
                         <span class="text-light" style="float: right" >
				 </span>
                         <div class="clear"></div>
                         <a style="float: right" id="read-more" href="singlepost.html">Read More <span></span></a>
                     </li>
                 </ul>

             </span>
             <div class="clear"></div>
         </li>
         <li class="client post-title">
             <h1><a href="singlepost.html">Tuts+ Premium Security Breach & The Marketplaces</a></h1>
             <span class="span2 client-logo" ><img src="/assets/images/client-logo1.png" ></span>
             <span class="span9">
                 <ul class="arrow-list">
                     <li>
                         <span class="text-dark">Location:</span>
                         <span class="text-light"> HTML5 Template</span>
                     </li>

                     <li>
                         <span class="text-dark">Address:</span>
                         <span class="text-light"> 21 August, 2012</span>
                     </li>

                     <li>
                         <span class="text-dark">Contact:</span>
                         <span class="text-light">Md Shafiqul islam</span>
                         <span class="text-light">, Managing Director</span>
                     </li>

                     <li>
                         <span class="text-dark">Web:</span>
                         <span class="text-light"><a href="http://reservationin.com">http://reservationin.com</a> </span>
                         <span class="text-light">&nbsp;|&nbsp;<a href="http://reservationin.com">info@reservationin.com</a> </span>
                     </li>
                     <li>
                         <span class="text-dark"> Direct Call:</span>
                         <span class="text-light"> 01828-148147 </span>
                         <span class="text-light" style="float: right" >
				 </span>
                         <div class="clear"></div>
                         <a style="float: right" id="read-more" href="singlepost.html">Read More <span></span></a>
                     </li>
                 </ul>

             </span>
             <div class="clear"></div>
         </li>
         <li class="client post-title">
             <h1><a href="singlepost.html">Tuts+ Premium Security Breach & The Marketplaces</a></h1>
             <span class="span2 client-logo" ><img src="/assets/images/client-logo1.png" ></span>
             <span class="span9">
                 <ul class="arrow-list">
                     <li>
                         <span class="text-dark">Location:</span>
                         <span class="text-light"> HTML5 Template</span>
                     </li>

                     <li>
                         <span class="text-dark">Address:</span>
                         <span class="text-light"> 21 August, 2012</span>
                     </li>

                     <li>
                         <span class="text-dark">Contact:</span>
                         <span class="text-light">Md Shafiqul islam</span>
                         <span class="text-light">, Managing Director</span>
                     </li>

                     <li>
                         <span class="text-dark">Web:</span>
                         <span class="text-light"><a href="http://reservationin.com">http://reservationin.com</a> </span>
                         <span class="text-light">&nbsp;|&nbsp;<a href="http://reservationin.com">info@reservationin.com</a> </span>
                     </li>
                     <li>
                         <span class="text-dark"> Direct Call:</span>
                         <span class="text-light"> 01828-148147 </span>
                         <span class="text-light" style="float: right" >
				 </span>
                         <div class="clear"></div>
                         <a style="float: right" id="read-more" href="singlepost.html">Read More <span></span></a>
                     </li>
                 </ul>

             </span>
             <div class="clear"></div>
         </li>
         <li class="client post-title">
             <h1><a href="singlepost.html">Tuts+ Premium Security Breach & The Marketplaces</a></h1>
             <span class="span2 client-logo" ><img src="/assets/images/client-logo1.png" ></span>
             <span class="span9">
                 <ul class="arrow-list">
                     <li>
                         <span class="text-dark">Location:</span>
                         <span class="text-light"> HTML5 Template</span>
                     </li>

                     <li>
                         <span class="text-dark">Address:</span>
                         <span class="text-light"> 21 August, 2012</span>
                     </li>

                     <li>
                         <span class="text-dark">Contact:</span>
                         <span class="text-light">Md Shafiqul islam</span>
                         <span class="text-light">, Managing Director</span>
                     </li>

                     <li>
                         <span class="text-dark">Web:</span>
                         <span class="text-light"><a href="http://reservationin.com">http://reservationin.com</a> </span>
                         <span class="text-light">&nbsp;|&nbsp;<a href="http://reservationin.com">info@reservationin.com</a> </span>
                     </li>
                     <li>
                         <span class="text-dark"> Direct Call:</span>
                         <span class="text-light"> 01828-148147 </span>
                         <span class="text-light" style="float: right" >
				 </span>
                         <div class="clear"></div>
                         <a style="float: right" id="read-more" href="singlepost.html">Read More <span></span></a>
                     </li>
                 </ul>

             </span>
             <div class="clear"></div>
         </li>


        </ul>




    </div>

    <div class="pagination span12">
        <a id="prev" href="#">prev</a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a id="next" href="#">next</a>
    </div>
</div>
</div>

<div id="recentpost">
    <ul id="js-news" class="js-hidden">
        <li class="news-item"><a href="#">Nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris</a></li>
        <li class="news-item"><a href="#">This is the 2nd latest news item.</a></li>
        <li class="news-item"><a href="#">This is the 3rd latest news item.</a></li>
        <li class="news-item"><a href="#">This is the 4th latest news item.</a></li>
    </ul>
</div>

</div>
</div>
<!-- End content -->