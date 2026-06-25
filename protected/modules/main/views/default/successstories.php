<style type="text/css">
    .flex {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }


    .flex {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .content {
        /* height: 100px;
      width: 45%;
      color: #fff;
      font-size: 24px;
      line-height: 100px;
      text-align: center;
      background-color: grey;
      margin: 5px;
      border: 1px solid lightgrey;*/
        display: none;
    }

    #loadMore {
        width: 200px;
        color: #333;
        display: block;
        text-align: center;
        margin: 20px auto;
        padding: 10px;
        border-radius: 8px;
        background: transparent;
        transition: .3s;
        font-weight: 700;
        border: 2px solid #000;
        margin-top: 0px !important;
        margin-bottom: 60px !important;
    }

    #loadMore:hover {
        color: #fff;
        background: #284c9a;
        text-decoration: none;
        border: 2px solid #fff;
        transform: scale(1);
        transition: 0.8s;
    }

    .noContent {
        color: #000 !important;
        background-color: transparent !important;
        pointer-events: none;
        background: none !important;
    }

    .right_event_area p span {
        font-size: 14px;
    }

    .success-text-bg1 {
        background: transparent;
    }

    .success-text-bg2 {
        background: transparent;
    }

    .our-team .team-prof h3 {
        margin: 5px 0px 0px 0px !important;
    }

    .our-team .team-prof span {
        margin-bottom: 0px !important;
    }

    section#success-scroll-pg h4 {
        margin-bottom: 0px;
    }

    .section_pd_heading {
        font-size: 26px !important;
    }

    .pd_b10 {
        padding-bottom: 10px !important;
    }

    .gray_clr {
        background: #f4f4f4;
    }

    section#product-info h1 {
        margin: 0 !important;
    }

    section#success-scroll-pg h3 {
        margin-top: 0;
        margin-bottom: 0;
    }

    .top_padding {
        padding-top: 30px !important;
        padding-bottom: 20px !important;
    }

    .top_padding1 {
        padding-top: 40px !important;
        padding-bottom: 20px !important;
    }

    .plc_stories .boxex_bg h4 {
        background: #2D4288;
        border-bottom: 0px !important;
        padding: 8px 5px;
        border-radius: 6px 6px 0px 0px !important;
    }

    .plc_stories .boxex_bg p {
        color: #333 !important;
        background: #fff;
    }

    p.tracking_number {
        background: #e6e4e4 !important;
        padding-top: 2px !important;
        border-radius: 0px 0px 6px 6px;
    }

    .plc_stories .boxex_bg {
        background: transparent;
        border-radius: 6px;
    }

    .plc_stories .boxex_bg p {
        padding: 8px 5px 4px 5px !important;
    }

    .main_marque {
        font-size: 14px !important;
        color: #5a5656;
        font-weight: 400 !important;
        text-transform: uppercase;
    }


    @media(max-width:767px) {
        section#product-info h1 {
            font-size: 34px;
            text-align: left;
            font-weight: 200;
            padding-left: 0 !important;
            font-size: 20px !important;
            padding-left: 10px !important;
            padding-right: 10px !important;
            text-align: center;
            line-height: 27px !important;
        }

        .section_pd_heading {
            font-size: 20px !important;
        }

        .top_padding {
            padding-left: 15px !important;
            padding-right: 15px !important;
        }

        .top_padding .col-lg-2.col-md-2.col-sm-4.col-xs-6.pd0.content {
            margin-bottom: 0 !important;
        }

        section#success-scroll-pg h4 {
            padding-bottom: 0;
            padding-top: 0;
        }

        .right_event_area {
            margin-top: 0px;
        }

        .js-marquee span.col-md-3 {
            text-align: right;
            float: right;
        }

    }


    .noContent {
        display: none !important;
    }

    .suuces_imagess {
        margin-bottom: 50px;
        margin-top: 11px;
    }
</style>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<script language="javascript">
    $(document).ready(function () {
        $(".content").slice(0, 12).show();
        $("#loadMore").on("click", function (e) {
            e.preventDefault();
            $(".content:hidden").slice(0, 12).slideDown();
            if ($(".content:hidden").length == 0) {
                $("#loadMore").text("").addClass("noContent");
            }
        });

    })
</script>

<?php 
       if(!empty($content->photo2)){
        $imgPath = Yii::app()->request->getBaseUrl(true) . '/img/ebackground/'.$content->photo2;
       
    ?>
<picture>
    <?php if(!empty($content->photo_mob)){   ?>
    <source srcset="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo_mob?>"
        media="(max-width: 468px)">
    <?php } ?>
    <?php if(!empty($content->photo_tab)){   ?>
    <source srcset="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo_tab?>"
        media="(max-width: 967px)">
    <?php } ?>
    <?php if(!empty($content->photo2)){  ?>
    <source srcset="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo2?>">
    <img class="slide-image"
        src="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo2?>" alt="">
    <?php } ?>
</picture>

<?php }else{
    
        $imgPath = Yii::app()->request->getBaseUrl(true) . '/img/ebackground/default.jpg';?>
<section class="inner-banner" style="background-image: url(<?=$imgPath?>);">
    <div class="container">
    </div>
</section>
<?php    } ?>
<section class="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>"><i class="fa fa-home"></i></a></li>
            <li><a href="<?php echo Yii::app()->createUrl(" main/default/aboutus"); ?>">About us</a></li>
            <li class="active">
                <?php echo $content->heading ?>
            </li>
        </ol>
    </div>
</section>

<section id="product-info" class="our-recent-placement top_padding1 plc_stories">
    <div class="container">

        <h1 class="section_pd_heading">Octa Networks CCIE Success Stories - 2026</h1>
        <div class="col-md-12">
            <div class="row">
                <div class="flex no-flex-xs">
                                            <div class="col-md-3 col-xs-12 content3" style="margin-bottom: 25px; display: block;">
                            <div class="r-b-p-stories-img"> <img
                                    src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/shared image (5).jpg
"
                                    alt="Luis Fernando" title="Luis Fernando" class="img-responsive"> </div>
                            <div class="r-b-p-stories-info">
                                <!--<div class="col-sm-12 boxex_bg no-padding text-center success-text success-text-bg1">-->
                                <!--    <h4>Se Woong Kim </h4>-->
                                <!--    <p>CCIE #69375<br></p>-->
                                <!--    <p class="tracking_number">Data Center</p>-->
                                <!--</div>-->
                            </div>
                        </div>
                         <div class="col-md-3 col-xs-12 content3" style="margin-bottom: 25px; display: block;">
                        <div class="r-b-p-stories-img"> <img
                                src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/shared image (4).jpg"
                                alt="Luis Fernando" title="Luis Fernando" class="img-responsive"> </div>
                        <div class="r-b-p-stories-info">
                            <!--<div class="col-sm-12 boxex_bg no-padding text-center success-text success-text-bg1">-->
                            <!--    <h4>Yassir </h4>-->
                            <!--    <p>CCIE #69443<br></p>-->
                            <!--    <p class="tracking_number">Collaboration</p>-->
                            <!--</div>-->
                        </div>
                    </div>
                    
                   
                    
                    <div class="col-md-3 col-xs-12 content3" style="margin-bottom: 25px; display: block;">
                        <div class="r-b-p-stories-img"> <img
                                src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/shared image (3).jpg"
                                alt="Luis Fernando" title="Luis Fernando" class="img-responsive"> </div>
                        <div class="r-b-p-stories-info">
                            <!--<div class="col-sm-12 boxex_bg no-padding text-center success-text success-text-bg1">-->
                            <!--    <h4>Bulent </h4>-->
                            <!--    <p>CCIE #68367<br></p>-->
                            <!--    <p class="tracking_number">Enterprise</p>-->
                            <!--</div>-->
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-xs-12 content3" style="margin-bottom: 25px; display: block;">
                        <div class="r-b-p-stories-img"> <img
                                src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/shared image (2).jpg"
                                alt="Luis Fernando" title="Luis Fernando" class="img-responsive"> </div>
                        <div class="r-b-p-stories-info">
                            <!--<div class="col-sm-12 boxex_bg no-padding text-center success-text success-text-bg1">-->
                            <!--    <h4>Thohith</h4>-->
                            <!--    <p>CCIE #69328<br></p>-->
                            <!--    <p class="tracking_number">Data Center</p>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>



<section id="product-info" class="top_padding gray_clr">
    <div class="container">
        <?php if(!empty($content->photo2)){ ?>
        <h4 class="p-0 section_pd_heading pd_b10">Unbelievable CCIE Track Record</h4>

        <?php } ?>
        <div class="tab-content" id="">


            <div class="row">
                <div class="flex">
                    <?php $rcounter = 0; foreach(array_reverse($stories) as $storie){ $rcounter++;
                        if (($rcounter % 2)!=0 ){ $intColor = "success-text-bg1"; }else{ $intColor = "success-text-bg2"; }
                         ?>
                    <?php if($rcounter==19 || $rcounter==20 || $rcounter==21 || $rcounter==121 || $rcounter==185 || $rcounter==196 ){ ?>
                    <!--dont load these div-->
                    <?php }else{ ?>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 pd0 content sc-box<?php echo $rcounter; ?>"
                        style="margin-bottom:25px;">
                        <div class="our-team">
                            <img src="<?php echo Yii::app()->request->getBaseURL(true);?>/img/stories/<?=$storie->image?>"
                                class="img-responsive" />

                            <div class="team-prof success-text <?=$intColor?>">
                                <h3><?=$storie->name?></h3>
                                <span><?=$storie->cmp_name?></span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php } ?>
                </div>

                <a href="#" id="loadMore" style="clear:both;">Load More</a>

            </div>
        </div>

    </div>
</section>




<section class="succes_section ">
    <div class="container">

        <h2 class="p-0 section_pd_heading pd_b10">Let Our Successful CCIE Candidates Speak For Us </h2>

        <!--<div class="row">-->

            <div class="succes_main hvr-bounce-in">
                <div class="succes_image">
                    <a class="btn video-btn video-btn-custom" data-src="https://www.youtube.com/embed/pCrVUjSdAh8">
                        <img src="https://img.youtube.com/vi/pCrVUjSdAh8/0.jpg">
                        <img class="play_button"
                            src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/play-button1.png">
                    </a>
                </div>
                <div class="succes_content">
                    <p>Mr. Jayant Anand </p>
                    <span>CCIE Collaboration</span>
                    <span>#62526</span>


                </div>
            </div>

            <div class="succes_main hvr-bounce-in">
                <div class="succes_image">
                    <a class="btn video-btn video-btn-custom" data-src="https://www.youtube.com/embed/vsbOGXJiOKA">
                        <img src="https://img.youtube.com/vi/vsbOGXJiOKA/0.jpg">
                        <img class="play_button"
                            src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/play-button1.png">
                    </a>
                </div>
                <div class="succes_content">
                    <p>Mr. Mohit Singh </p>
                    <span>CCIE Collaboration</span>
                    <span>#62360</span>

                </div>
            </div>

            <div class="succes_main hvr-bounce-in">
                <div class="succes_image">
                    <a class="btn video-btn video-btn-custom" data-src="https://www.youtube.com/embed/bvKLemdLIzc">
                        <img src="https://img.youtube.com/vi/bvKLemdLIzc/0.jpg">
                        <img class="play_button"
                            src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/play-button1.png">
                    </a>
                </div>
                <div class="succes_content">
                    <p>Mr. Sidi Abdul </p>
                    <span>CCIE Data Center</span>
                    <span>#62691</span>


                    </a>
                </div>
            </div>

            <div class="succes_main hvr-bounce-in">
                <div class="succes_image">
                    <a class="btn video-btn video-btn-custom" data-src="https://www.youtube.com/embed/H3IIZ5LoooQ">
                        <img src="https://img.youtube.com/vi/H3IIZ5LoooQ/0.jpg">
                        <img class="play_button"
                            src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/play-button1.png">
                    </a>
                </div>
                <div class="succes_content">
                    <p>Mr. Sumit Sharma </p>
                    <span>CCIE Collaboration</span>
                    <span>#62560</span>

                </div>
            </div>




            <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close"> <span aria-hidden="true"><img
                                        src="<?php /*echo Yii::app()->request->getBaseUrl(true); */?>/img/lightbox-close.png"></span>
                            </button>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item video_succes" src="" id="video"
                                    allowscriptaccess="always" allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--<div class="modal fade bd-example-modal-lg" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close"> <span aria-hidden="true"><img src="<?php /*echo Yii::app()->request->getBaseUrl(true); */?>/img/lightbox-close.png"></span> </button>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vsbOGXJiOKA" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     <div class="modal fade bd-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close"> <span aria-hidden="true"><img src="<?php /*echo Yii::app()->request->getBaseUrl(true); */?>/img/lightbox-close.png"></span> </button>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bvKLemdLIzc" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal fade bd-example-modal-lg" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close"> <span aria-hidden="true"><img src="<?php /*echo Yii::app()->request->getBaseUrl(true); */?>/img/lightbox-close.png"></span> </button>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/H3IIZ5LoooQ" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->




        <!--</div>-->
    </div>
</section>


<section class="succes_section blue_gradian">
    <div class="container">
        <h4 class="p-0 section_pd_heading pd_b10" style="color:#fff;">Reasons why Octa Networks is Market Leader for
            CCIE Trainings</h4>
        <div class="row">
            <div class="col-md-3 col-xs-6 hvr-bounce-in text-center">
                <div class="ccie_results"> <i class="fa fa-graduation-cap"></i>
                    <h5>CCIE's</h5>
                    <p>as Mentors</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 hvr-bounce-in text-center">
                <div class="ccie_results"> <i class="fa fa-calendar"></i>
                    <h5>8+ YEARS</h5>
                    <p>of Delivering Quality Training</p>
                </div>
            </div>

            <div class="col-md-3 col-xs-6 hvr-bounce-in text-center">
                <div class="ccie_results"> <i class="fa fa-handshake"></i>
                    <h5>Biggest Pool</h5>
                    <p>of CCIE Certified Trainers</p>
                </div>
            </div>


            <div class="col-md-3 col-xs-6 hvr-bounce-in text-center">
                <div class="ccie_results"> <i class="fa fa-check-square"></i>
                    <h5>90% CCIE Success</h5>
                    <p>Ratio in First Attempt</p>
                </div>
            </div>

            <div class="col-md-3 col-xs-6 hvr-bounce-in text-center">
                <div class="ccie_results"> <i class="fa fa-server"></i>
                    <h5>PODS for ALL</h5>
                    <p>CCIE Tracks</p>
                </div>
            </div>

            <div class="col-md-3 col-xs-6 hvr-bounce-in text-center">
                <div class="ccie_results"> <i class="fa fa-clock"></i>
                    <h5>24x7 & 365 Days</h5>
                    <p>Lab Support</p>
                </div>
            </div>

            <div class="col-md-3 col-xs-6 hvr-bounce-in text-center">
                <div class="ccie_results"> <i class="fa fa-search"></i>
                    <h5>Placement </h5>
                    <p>Assistance Team</p>
                </div>
            </div>

            <div class="col-md-3 col-xs-6 hvr-bounce-in text-center">
                <div class="ccie_results"> <i class="fa fa-calendar-check"></i>
                    <h5>85% Success</h5>
                    <p>Ratio in Job Placement</p>
                </div>
            </div>


        </div>
    </div>
</section>



<section id="success-scroll-pg">
    <div class="container">
        <h3 class="p-0 section_pd_heading">Unbeatable Success Stories in All CCIE Tracks</h3>

        <div class="row">
            <?php foreach($scrollstories as $scc){ 		 
                    ?>
            <div class="col-md-4">
                <h4 class="text-center">
                    <?php echo $scc->cert->code; ?>
                </h4>
                <div class="textwidget">
                    <div class="right_event"
                        style="background: url(<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/scrollstories/<?php echo $scc->image?>); background-size: contain;background-repeat: no-repeat;background-position: center;">

                        <div class="right_event_area" style="background:#ffffffe0;">
                            <div class="marquee main_marque" style="height:318px; overflow:hidden;">
                                <?php echo $scc->stories?>
                            </div>
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>
            <?php  } ?>


        </div>
    </div>
</section>



<section class="succes_section ladder_Section">
    <div class="container">
        <h4 class="p-0 section_pd_heading">Octa Networks, Ladder to a Secure and Highly Paid Jobs in India and Around
            the World.</h4>
        <p class=" mrb_20"> CCIE is one of the most sought after and the most difficult to achieve IT certification in
            the industry. Octa Networks has the unique distinction of training students, who have achieved CCIE
            Certificates in all the CCIE tracks available. Our training services have assisted many CCIE aspirants pass
            their CCIE in first attempt. Almost 90% of our students have achieved their CCIE Certification in the first
            attempt itself. Our methodical approach and passionate training delivery have assisted us in becoming the
            only Cisco Training center in the world producing highest number of CCIEs (500+) in the year 2019 and 25+
            CCIEs in 2020 pandemic year. We are confident about maintaining our momentum in 2021 too. In 2021, If you
            <strong>THINK CCIE, Think Octa Networks.</strong> </p>
        <!--<div class="col-md-4">
                <div class="ladder_box">
                    <div class="col-md-3"> <i class="fa fa-graduation-cap"></i> </div>
                    <div class="col-md-9">
                        <p>CCIE's</p>
                        <span>as Mentors</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ladder_box">
                    <div class="col-md-3"> <i class="fa fa-calendar"></i> </div>
                    <div class="col-md-9">
                        <p>8+ YEARS</p>
                        </span>of Delivering Innovative Training</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ladder_box">
                    <div class="col-md-3"> <i class="fa fa-briefcase"></i> </div>
                    <div class="col-md-9">
                        <p>85% Students</p>
                        <span>Get Placed Without Appearing CCIE Lab</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ladder_box">
                    <div class="col-md-3"> <i class="fa fa-certificate"></i> </div>
                    <div class="col-md-9">
                        <p>90% CCIE</p>
                        <span>Students Passed in First Attempt</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ladder_box">
                    <div class="col-md-3"> <i class="fa fa-server"></i> </div>
                    <div class="col-md-9">
                        <p>State Of Art </p>
                        <span>Infrastructure</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ladder_box">
                    <div class="col-md-3"> <i class="fa fa-users"></i> </div>
                    <div class="col-md-9">
                        <p>100K+</p>
                        <span>Candidates Trained</span>
                    </div>
                </div>
            </div>-->
    </div>
</section>


<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.marquee/1.3.1/jquery.marquee.min.js"></script>


<script>
    $('.close').click(function () {
        $('#myModal').modal('hide');
        //alert(1);
        $('.video_succes').attr('src', '');
    });

    $('.video-btn-custom').click(function () {
        var src = $(this).attr('data-src');
        $('#myModal').modal('show');
        //alert(1);
        $('.video_succes').attr('src', src);
    });


</script>

<script>
    $('.marquee').marquee({
        //speed in milliseconds of the marquee
        duration: 18000,
        //gap in pixels between the tickers
        gap: 0,
        //time in milliseconds before the marquee will start animating
        delayBeforeStart: 0,
        //'left' or 'right'
        direction: 'up',
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: true
    });</script>