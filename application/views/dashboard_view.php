
<!-- default slider -->
<section class="slider" id="slider1" style="position: relative">
<div class="flexslider container">
        <ul class="slides span12">
            <li>
                <img alt="" src="/assets/upload/1.jpg" />
                <p class="flex-caption">Captions and cupcakes. Winning combination. Captions and cupcakes. Winning combination.</p>
            </li>
            <li>
                <img alt="" src="/assets/upload/2.jpg" />
                <p class="flex-caption">Nisi elit consequat ipsum, nec sagittis sem nibh id elit duis </p>
            </li>
            <li>
                <img alt="" src="/assets/upload/3.jpg" />
                <p class="flex-caption">Captions and cupcakes. Winning combination.</p>
            </li>
            <li>
                <img alt="" src="/assets/upload/4.jpg" />
                <p class="flex-caption">Nisi elit consequat ipsum, nec sagittis sem nibh id elit duis</p>
            </li>
        </ul>
        <div class="new-content">

        <div class="intro">
                <ul>
                    <li class="green selected"><span class="li-inner"><a href="javascript:">Hotels</a></span>
                        <ul>
                            <li>
                        	<span class="box box-left">
                           	<span class="title"></span>
                             <form class="form-inline">

                                 <div class="control-group">

                                     <select name="destination"  class="select-single" id="destination">
                                         <option value="">Your destination</option>
                                         <option value="67">5 Star Models</option>
                                         <option value="7">Accurate Armour</option>
                                         <option value="100">Add On parts</option>
                                         <option value="102">Adlers Nest</option>
                                         <option value="44">AFV Club</option>
                                         <option value="21">AK Interactive</option>
                                         <option value="12">Vulcan Scale Models</option>
                                         <option value="34">Wespe Models</option>
                                         <option value="20">Yellow Cat</option>
                                         <option value="90">Разное</option>
                                     </select>
                                     <input class="input-medium calender" id="check_in_date" name="check_in_date" type="text" placeholder="Check-In Date" >
                                     <input class="input-medium calender" id="check_out_date" name="check_out_date" type="text" placeholder="Check out date">


                                 </div>


                                 <div class="control-group">
                                     <select name="total_nights" class="select-single" id="total_nights">
                                         <option value="">Total Nights</option>
                                         <option selected="selected" value="67">5 Star Models</option>
                                         <option value="7">Accurate Armour</option>
                                     </select>

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
                                     <div class="controls" style="float: right; margin-right: 5px">
                                         <button type="submit" class="btn">Reset</button>&nbsp;<button type="button" data-loading-text="Loading..." class="btn btn-success">Search</button>
                                     </div>
                                 </div>

                             </form>
                            </span>
                                <div  class="greatDeals box box-right">
                                    <a class="" href="http://medienfreunde.com/deutsch/referenzen/kreation/good_guy__bad_guy.html"><img src="/assets/upload/1.jpg" alt="Good Guy bad Guy" />
                                        <span>Resource Off advertiment link</span>
                                    </a>

                                    <a class="" href="http://medienfreunde.com/deutsch/referenzen/kreation/whizzkids.html"><img src="/assets/upload/2.jpg" alt="Whizzkids" />
                                        <span>Resource Off advertiment link</span>
                                    </a>

                                    <a class="" href="http://medienfreunde.com/deutsch/referenzen/printdesign/koenigin_mutter.html"><img src="/assets/upload/3.jpg" alt="Königin Mutter" />
                                        <span>Resource Off advertiment link</span>
                                    </a>


                                </div>
                                <br class="clear">
                            </li>
                        </ul>
                    </li>
                    <li class="blue"><span class="li-inner"><a href="javascript:">Tour Package</a></span>
                        <ul>
                            <li>
                        	<span class="box box-left">
                           	<span class="title"></span>
                             <form class="form-inline">

                                 <div class="control-group">

                                     <select name="destination"  class="select-single" id="destination">
                                         <option value="">Your destination</option>
                                         <option value="67">5 Star Models</option>
                                         <option value="7">Accurate Armour</option>
                                         <option value="100">Add On parts</option>
                                         <option value="102">Adlers Nest</option>
                                         <option value="44">AFV Club</option>
                                         <option value="21">AK Interactive</option>
                                         <option value="12">Vulcan Scale Models</option>
                                         <option value="34">Wespe Models</option>
                                         <option value="20">Yellow Cat</option>
                                         <option value="90">Разное</option>
                                     </select>
                                     <input class="input-medium calender" id="check_in_date" name="check_in_date" type="text" placeholder="Check-In Date" >
                                     <input class="input-medium calender" id="check_out_date" name="check_out_date" type="text" placeholder="Check out date">


                                 </div>


                                 <div class="control-group">
                                     <select name="total_nights" class="select-single" id="total_nights">
                                         <option value="">Total Nights</option>
                                         <option selected="selected" value="67">5 Star Models</option>
                                         <option value="7">Accurate Armour</option>
                                     </select>

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
                                     <div class="controls" style="float: right; margin-right: 5px">
                                         <button type="submit" class="btn">Reset</button>&nbsp;<button type="submit" class="btn btn-success">Search</button>
                                     </div>
                                 </div>

                             </form>
                            </span>
                                <a class="box box-right" href="">
                                    <span class="title"><img alt="" src="/assets/upload/photo7.jpg" style="height: 94px; width: 225px" ></span>
                                </a>

                                <br class="clear">
                            </li>
                        </ul>
                    </li>
                    <li class="brown wider"><span class="li-inner"><a href="javascript:">Transports</a></span>
                        <ul>
                            <li>
                        	<span class="box box-left">
                           	<span class="title"></span>
                             <form class="form-inline">

                                 <div class="control-group">

                                     <select name="destination"  class="select-single" id="destination">
                                         <option value="">Your destination</option>
                                         <option value="67">5 Star Models</option>
                                         <option value="7">Accurate Armour</option>
                                         <option value="100">Add On parts</option>
                                         <option value="102">Adlers Nest</option>
                                         <option value="44">AFV Club</option>
                                         <option value="21">AK Interactive</option>
                                         <option value="12">Vulcan Scale Models</option>
                                         <option value="34">Wespe Models</option>
                                         <option value="20">Yellow Cat</option>
                                         <option value="90">Разное</option>
                                     </select>
                                     <input class="input-medium calender" id="check_in_date" name="check_in_date" type="text" placeholder="Check-In Date" >
                                     <input class="input-medium calender" id="check_out_date" name="check_out_date" type="text" placeholder="Check out date">


                                 </div>


                                 <div class="control-group">
                                     <select name="total_nights" class="select-single" id="total_nights">
                                         <option value="">Total Nights</option>
                                         <option selected="selected" value="67">5 Star Models</option>
                                         <option value="7">Accurate Armour</option>
                                     </select>

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
                                     <div class="controls" style="float: right; margin-right: 5px">
                                         <button type="submit" class="btn">Reset</button>&nbsp;<button type="submit" class="btn btn-success">Search</button>
                                     </div>
                                 </div>

                             </form>
                            </span>
                                <a class="box box-right" href="">
                                    <span class="title"><img alt="" src="/assets/upload/photo7.jpg" style="height: 94px; width: 225px" ></span>
                                </a>

                                <br class="clear">
                            </li>
                        </ul>
                    </li>
                    <li class="orange"><span class="li-inner"><a href="javascript:">Air Ticket</a></span>
                        <ul>
                            <li>
                        	<span class="box box-left">
                           	<span class="title"></span>
                             <form class="form-inline">

                                 <div class="control-group">

                                     <select name="destination"  class="select-single" id="destination">
                                         <option value="">Your destination</option>
                                         <option value="67">5 Star Models</option>
                                         <option value="7">Accurate Armour</option>
                                         <option value="100">Add On parts</option>
                                         <option value="102">Adlers Nest</option>
                                         <option value="44">AFV Club</option>
                                         <option value="21">AK Interactive</option>
                                         <option value="12">Vulcan Scale Models</option>
                                         <option value="34">Wespe Models</option>
                                         <option value="20">Yellow Cat</option>
                                         <option value="90">Разное</option>
                                     </select>
                                     <input class="input-medium calender" id="check_in_date" name="check_in_date" type="text" placeholder="Check-In Date" >
                                     <input class="input-medium calender" id="check_out_date" name="check_out_date" type="text" placeholder="Check out date">


                                 </div>


                                 <div class="control-group">
                                     <select name="total_nights" class="select-single" id="total_nights">
                                         <option value="">Total Nights</option>
                                         <option selected="selected" value="67">5 Star Models</option>
                                         <option value="7">Accurate Armour</option>
                                     </select>

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
                                     <div class="controls" style="float: right; margin-right: 5px">
                                         <button type="submit" class="btn">Reset</button>&nbsp;<button type="submit" class="btn btn-success">Search</button>
                                     </div>
                                 </div>

                             </form>
                            </span>
                                <a class="box box-right" href="">
                                    <span class="title"><img alt="" src="/assets/upload/photo7.jpg" style="height: 94px; width: 225px" ></span>
                                </a>

                                <br class="clear">
                            </li>
                        </ul>
                    </li>
                    <li class="light-green"><span class="li-inner"><a href="javascript:">Steamer Ticket</a></span>
                        <ul>
                            <li>
                        	<span class="box box-left">
                           	<span class="title"></span>
                             <form class="form-inline">

                                 <div class="control-group">

                                     <select name="destination"  class="select-single" id="destination">
                                         <option value="">Your destination</option>
                                         <option value="67">5 Star Models</option>
                                         <option value="7">Accurate Armour</option>
                                         <option value="100">Add On parts</option>
                                         <option value="102">Adlers Nest</option>
                                         <option value="44">AFV Club</option>
                                         <option value="21">AK Interactive</option>
                                         <option value="12">Vulcan Scale Models</option>
                                         <option value="34">Wespe Models</option>
                                         <option value="20">Yellow Cat</option>
                                         <option value="90">Разное</option>
                                     </select>
                                     <input class="input-medium calender" id="check_in_date" name="check_in_date" type="text" placeholder="Check-In Date" >
                                     <input class="input-medium calender" id="check_out_date" name="check_out_date" type="text" placeholder="Check out date">


                                 </div>


                                 <div class="control-group">
                                     <select name="total_nights" class="select-single" id="total_nights">
                                         <option value="">Total Nights</option>
                                         <option selected="selected" value="67">5 Star Models</option>
                                         <option value="7">Accurate Armour</option>
                                     </select>

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
                                     <div class="controls" style="float: right; margin-right: 5px">
                                         <button type="submit" class="btn">Reset</button>&nbsp;<button type="submit" class="btn btn-success">Search</button>
                                     </div>
                                 </div>

                             </form>
                            </span>
                                <div  class="greatDeals box box-right">
                                    <a class="" href="http://medienfreunde.com/deutsch/referenzen/kreation/good_guy__bad_guy.html"><img src="/assets/upload/1.jpg" alt="Good Guy bad Guy" />
                                        <span>Resource Off advertiment link</span>
                                    </a>

                                    <a class="" href="http://medienfreunde.com/deutsch/referenzen/kreation/whizzkids.html"><img src="/assets/upload/2.jpg" alt="Whizzkids" />
                                        <span>Resource Off advertiment link</span>
                                    </a>

                                    <a class="" href="http://medienfreunde.com/deutsch/referenzen/printdesign/koenigin_mutter.html"><img src="/assets/upload/3.jpg" alt="Königin Mutter" />
                                        <span>Resource Off advertiment link</span>
                                    </a>
                                </div>
                                <br class="clear">
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </div>

</section>

<!-- default slider-->

<!-- content -->

<div id="content">

    <div id="inner-content" class="container">
    <div id="shortcodes" class="row-fluid">

        <div class="span12">
            <ul class="tab-list clearfix">
                <li class="active"><a href="javascript:">Hotels</a></li>
                <li><a href="javascript:">Tourism</a></li>
                <li><a href="javascript:">Air & Helicopter's</a></li>
                <li><a href="javascript:">Transports</a></li>
                <li><a href="javascript:">Steamers</a></li>
            </ul>
            <ul class="tab-cont custom-tab">
                <li>
                    <div id="recentx" class="clearfix recent">
                        <div class="left">

                            <h4>Feature Hotels</h4>
                                <span class="tab-feature-content">Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde voluptatem. Sed unde omnis iste natus error sit voluptatem.</span>

                        </div>
                        <div class="bxslider">
                            <div class="left">
                                <img alt="" src="/assets/upload/photo7.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo7.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo8.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo8.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo9.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo9.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo7.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo7.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo8.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo8.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo9.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo9.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="recentx" class="clearfix recent">
                        <div class="left">

                            <h4>Feature Tourism</h4>
                                <span class="tab-feature-content">Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde voluptatem. Sed unde omnis iste natus error sit voluptatem.</span>

                        </div>
                        <div class="bxslider">
                            <div class="left">
                                <img alt="" src="/assets/upload/photo7.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo7.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo8.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo8.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo9.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo9.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo7.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo7.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo8.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo8.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo9.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo9.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="recentx" class="clearfix recent">
                        <div class="left">

                            <h4>Feature Air & Helicopter's</h4>
                                <span class="tab-feature-content">Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde voluptatem. Sed unde omnis iste natus error sit voluptatem.</span>

                        </div>
                        <div class="bxslider">
                            <div class="left">
                                <img alt="" src="/assets/upload/photo7.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo7.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo8.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo8.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo9.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo9.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo7.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo7.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo8.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo8.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo9.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo9.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="recentx" class="clearfix recent">
                        <div class="left">

                            <h4>Feature Transports</h4>
                                <span class="tab-feature-content">Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde voluptatem. Sed unde omnis iste natus error sit voluptatem.</span>

                        </div>
                        <div class="bxslider">
                            <div class="left">
                                <img alt="" src="/assets/upload/photo7.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo7.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo8.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo8.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo9.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo9.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo7.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo7.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo8.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo8.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo9.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo9.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="recentx" class="clearfix recent">
                        <div class="left">

                            <h4>Feature Steamers</h4>
                                <span class="tab-feature-content">Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde voluptatem. Sed unde omnis iste natus error sit voluptatem.</span>

                        </div>
                        <div class="bxslider">
                            <div class="left">
                                <img alt="" src="/assets/upload/photo7.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo7.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo8.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo8.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo9.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo9.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo7.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo7.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo8.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo8.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                            <div class="left">
                                <img alt="" src="/assets/upload/photo9.jpg">
                                <a href="singlework.html" id="up"></a>
                                <a href="/assets/upload/photo9.jpg" id="down" rel="gallery"></a>
                                <p>Next Responsive Magazine </p>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
            <h1>Our Services</h1>
            <div class="row-fluid articles" id="articles">

                <div class="span3">
                    <h2><img alt="" src="/assets/images/article-icon1.png"><span>Powerful Admin</span></h2>
                    <p>Formerly known as the Admin Bar, the Toolbar has links to various administration functions, and is</p>
                    <a href="#">Read More <span></span></a>
                </div>

                <div class="span3">
                    <h2><img alt="" src="/assets/images/article-icon2.png"><span>Optimized Code</span></h2>
                    <p>Formerly known as the Admin Bar, the Toolbar has links to various administration functions, and is</p>
                    <a href="#">Read More <span></span></a>
                </div>

                <div class="span3">
                    <h2><img alt="" src="/assets/images/article-icon3.png"><span>Flexible Layout</span></h2>
                    <p>The large area in the middle of the screen is the work area. It is here the specific information relating to a </p>
                    <a href="#">Read More <span></span></a>
                </div>

                <div class="span3">
                    <h2><img alt="" src="/assets/images/article-icon4.png"><span>Clean Design</span></h2>
                    <p>Finally in the footer at the bottom of each Administration Screen in light shading, are links to WordPress</p>
                    <a href="#">Read More <span></span></a>
                </div>
            </div>
        <div class="main2 clearfix row-fluid ">

            <div class="list-icons span4">
                <h1>Top Deals</h1>
                <p><img src="/assets/images/icon-list1.png" alt=""> Lorem ipsum dolor sit amet, </p>
                <p><img src="/assets/images/icon-list2.png" alt=""> Consectetur Adipiscing elit </p>
                <p><img src="/assets/images/icon-list3.png" alt=""> sollicitudin Neque sit amet </p>
                <p><img src="/assets/images/icon-list4.png" alt=""> Fermentum morbi mollis ante </p>
            </div>

            <div class="list-icons span3">
                <h1>Quick links</h1>
                <p><img src="/assets/images/icon-list1.png" alt=""> Lorem ipsum dolor sit amet, </p>
                <p><img src="/assets/images/icon-list2.png" alt=""> Consectetur Adipiscing elit </p>
                <p><img src="/assets/images/icon-list3.png" alt=""> sollicitudin Neque sit amet </p>
                <p><img src="/assets/images/icon-list4.png" alt=""> Fermentum morbi mollis ante </p>
            </div>

            <!-- TESTIMONIALS -->
            <div class="span5 testimonials-v1">
                <div id="myCarousel" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item">
                            <span class="testimonials-slide">Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met consectetur adipisicing sit amet do eiusmod dolore.</span>
                            <div class="carousel-info">
                                <img class="pull-left" src="/assets/img/people/img1-small.jpg" alt="" />
                                <div class="pull-left">
                                    <span class="testimonials-name">Lina Mars</span>
                                    <span class="testimonials-post">Commercial Director</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <span class="testimonials-slide">Raw denim you Mustache cliche tempor, williamsburg carles vegan helvetica probably haven't heard of them jean shorts austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</span>
                            <div class="carousel-info">
                                <img class="pull-left" src="/assets/img/people/img5-small.jpg" alt="" />
                                <div class="pull-left">
                                    <span class="testimonials-name">Kate Ford</span>
                                    <span class="testimonials-post">Commercial Director</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <span class="testimonials-slide">Reprehenderit butcher stache cliche tempor, williamsburg carles vegan helvetica.retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</span>
                            <div class="carousel-info">
                                <img class="pull-left" src="/assets/img/people/img2-small.jpg" alt="" />
                                <div class="pull-left">
                                    <span class="testimonials-name">Jake Witson</span>
                                    <span class="testimonials-post">Commercial Director</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel nav -->
                    <a class="left-btn" href="#myCarousel" data-slide="prev"></a>
                    <a class="right-btn" href="#myCarousel" data-slide="next"></a>
                </div>
            </div>
            <!-- END TESTIMONIALS -->


        </div>
<style>
    .images a{
        border: none;
        height:100px;
        width: 100px;
        margin-top: 15px;

    }
    .images a:hover{

    }

</style>
        <div id="our_clients" class="clearfix">

            <div style="padding-top:0px; margin-right: 20px" class="span3 tab-feature-content">
                <h1>Our Clients</h1>
                Raw denim you Mustache cliche tempor, williamsburg carles vegan helvetica probably haven</div>
            <div class="bxslider1 images clearfix">
                <a href="#"><img alt="" src="/assets/images/client-logo1.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo2.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo3.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo4.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo1.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo2.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo3.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo4.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo1.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo2.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo3.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo4.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo1.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo2.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo3.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo4.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo1.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo2.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo3.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo4.png"></a>
                <a href="#"><img alt="" src="/assets/images/client-logo5.png"></a>
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
</div>
<!-- End content -->
