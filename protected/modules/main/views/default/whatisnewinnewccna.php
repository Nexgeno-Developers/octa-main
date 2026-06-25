<?php 
   if(!empty($content->photo2)){
    $imgPath = Yii::app()->request->getBaseUrl(true) . '/img/ebackground/'.$content->photo2;
   
?>
               <picture>
               <?php if(!empty($content->photo_mob)){   ?>
                 <source srcset="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo_mob?>" media="(max-width: 468px)">
               <?php } ?>
                <?php if(!empty($content->photo_tab)){   ?>
                 <source srcset="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo_tab?>" media="(max-width: 967px)">
               <?php } ?>
               <?php if(!empty($content->photo2)){  ?>
                 <source srcset="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo2?>">
                 <img class="slide-image"  src="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo2?>" alt="" >
                 <?php } ?>
               </picture>

   <?php }else{

    $imgPath = Yii::app()->request->getBaseUrl(true) . '/img/ebackground/default.jpg';?>
<!--<section class="inner-banner" style="background-image: url(<?=$imgPath?>);">
   <div class="container">
   <h1><?php echo $content->heading ?></h1>
   </div>
</section>--->
<?php    } ?>

<section id="product-info">
    <div class="ptm_bg">
	<div class="container">
	<?php if(!empty($content->photo2)){ ?>
         <h1><?php echo $content->heading ?></h1>
         <?php } ?>
		<!--<div class="">
			<?php echo $content->content ?>  
		</div>-->
	</div>
	</div>
</section>

<style>
    .whatnew_main {
           background: url(https://octanetworks.com/img/whatnew_img/whatnewbanner.jpg);
    padding: 30px 0px 220px 0px;
    background-size: cover;
    box-shadow: 1000px 1000px 1000px 1000px #0000007a inset;
}
.whatnew_main h1 {
     font-size: 34px;
    text-align: center;
    line-height: 50px;
    color: #fff;
    padding-bottom: 31px;
}
.whatnew_main strong {
    color: #41a1f6;
}
.left_circle img
{
          width: 75px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-top: 12px;
}

.what_img
{
    width: 500px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    padding-top: 50px;
    padding-bottom: 20px;
}
.tech_career {
    background: #f0f0f0;
    padding: 0px 0px 245px 0px;
    border-radius: 150px 150px 0px 0px;
    margin-top: -155px;
    width: 100%;
}
.tech_circle {
   background: #69bf4a;
    /* padding: 100px 0px; */
    border-radius: 200px;
    position: relative;
    display: block;
    margin-top: -43px;
    height: 100px;
}
.left_circle {
  width: 9%;
    background: #002b5c;
    float: left;
    height: 100px;
    border-radius: 200px;
}
.right_circle {
       width: 82%;
    /* background: #69bf4a; */
    float: left;

}
.right_circle h3 {
       color: #fff !important;
    font-size: 30px;
    text-align: center;
    line-height: 36px;
    padding: 0px 10px 0px 10px;
    margin-top: 12px;
}
.tech_box {
             background: #fff;
    padding: 15px 24px;
    margin-top: 30px;
    width: 33%;
    margin-left: 34%;
    margin-right: auto;
    display: block;
}
.tech_box p {
        padding: 0;
    font-size: 16px;
    text-align: center;
    line-height: 24px;
    color: #002b5c;
}
.tech_box h4 {
        padding: 0;
    font-size: 18px;
    text-align: center;
    line-height: 34px;
    color: #002b5c;
    margin:0px;
    font-weight:600 !important;
}
.global_img img {
     width: 30%;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.tech_box2 {
 background: #fff;
    padding: 15px 30px;
    margin-top: 0px;
    width: 33%;
    margin-left: 17%;
    float: left;
}
.tech_box2 p {
    padding: 0;
    font-size: 16px;
    text-align: center;
    line-height: 24px;
    color: #002b5c;
}
.tech_box2 h4 {
    padding: 0;
    font-size: 18px;
    text-align: center;
    line-height: 34px;
    color: #002b5c;
    margin:0px;
    font-weight:600 !important;
}
.tech_box3 {
      background: #fff;
    padding: 15px 70px;
    margin-top: 0px;
    width: 33%;
    margin-left: 3%;
    float: left;
}
.tech_box3 p {
       padding: 0;
    font-size: 16px;
    text-align: center;
    line-height: 24px;
    color: #002b5c;
}
.tech_box3 h4 {
       padding: 0;
    font-size: 18px;
    text-align: center;
    line-height: 34px;
    color: #002b5c;
    margin:0px;
    font-weight:600 !important;
}
.degital_area {
    background: #fff;
    padding: 0px 0px 240px 0px;
    border-radius: 150px 150px 0px 0px;
    margin-top: -155px;
    width: 100%;
}

.blue_bg
{
    background:#0090c2;
}
h3.pd_70
{
    padding-top:20px !important;
}
.degital_main {
    width: 100%;
    float: left;
}
.degital_main h3 {
 color: #002b5c !important;
    font-size: 30px;
    text-align: left;
    line-height: 38px;
    padding: 0;
    padding-top: 50px;
}
.degital_main img {
   width: 68px;
    margin-top: 50px;
    margin-left: 120px;
}
.digital_tp {
    float: left;
    margin-top: 0px;
}
.degital_main {
    width: 100%;
    float: left;
    padding: 10px 0px 0px 0px;
}
.pd_0
{
    padding-top: 32px !important;
}
.pd_25
{
    padding-top:25px !important; 
}
.hgt_260
{
    height:100px !important;
}
.newccn_hgt
{
       width: 9% !important;
    height: 100px !important;
}
.right_wid {
    width: 83% !important;
}
.right_wid h3 {
    padding: 0px 10px 0px 10px !important;
}
.bg_org
{
    background:#ff9e38 !important;
}
.infrastructure_left {
    width: 50%;
    float: left;
    margin-top:60px;
}
.infrastructure_left img {
   width: 150px;
    margin-right: auto;
    margin-left: auto;
    display: block;
}
.infrastructure_left p {
      color: #002b5c !important;
    font-size: 16px;
    text-align: center;
    line-height: 26px;
    padding: 0px 120px;
}
.infrastructure_left h4 {
   color: #002b5c !important;
    font-size: 58px;
    text-align: center;
    line-height: 44px;
    padding: 0px 116px;
    font-weight: 200 !important;
    padding: 20px 0px 10px 0px;
}
.infrastructure_right {
    width: 50%;
    float: left;
     margin-top:60px;
}
.infrastructure_right img {
    
    width: 150px;
    margin-right: auto;
    margin-left: auto;
    display: block;
}
.infrastructure_right p {
       color: #002b5c !important;
    font-size: 16px;
    text-align: center;
    line-height: 26px;
    padding: 0px 120px;
}
.infrastructure_right h4 {
    color: #002b5c;
    font-size: 58px;
    text-align: center;
    line-height: 44px;
    padding: 0px 116px;
    font-weight: 200 !important;
    padding: 20px 0px 10px 0px;
}
.txt_blue
{
    color: #1c8abd !important;
}
.ser_clr .icon_rsn h4 {
    color: #095265 !important;
    font-size: 18px;
    text-align: center;
    line-height: 26px;
    font-weight: 600;
    padding: 0;
    margin: 0;
    padding-top: 20px;
}
.get_img img {
    width: 650px;
    padding-top: 40px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.mng_left {
   width: 33%;
    float: left;
    margin-top: 70px;
}
.mng_left img {
   width: 150px;
    margin-right: auto;
    margin-left: auto;
    display: block;
    margin-top: 20px;
}
.mng_left p {
       color: #002b5c !important;
    font-size: 16px;
    text-align: center;
    line-height: 26px;
    padding: 0px 46px;
}
.mng_left h4 {
       color: #ff9e38;
    font-size: 58px;
    text-align: center;
    line-height: 44px;
    padding: 0px 116px;
    font-weight: 200 !important;
    padding: 20px 0px 10px 0px;
}
.mng_bet {
       width: 34%;
    float: left;
    margin-top: 70px;
}
.mng_bet img {
   width: 200px;
    margin-right: auto;
    margin-left: auto;
    display: block;
}

.mng_right {
    width: 33%;
    float: left;
    margin-top: 70px;
}
.mng_right img {
   width: 150px;
    margin-right: auto;
    margin-left: auto;
    display: block;
    margin-top: 20px;
}
.mng_right p {
     color: #002b5c !important;
    font-size: 16px;
    text-align: center;
    line-height: 26px;
    padding: 0px 65px;
}
.mng_right h4 {
       color: #ff9e38;
    font-size: 58px;
    text-align: center;
    line-height: 44px;
    padding: 0px 116px;
    font-weight: 200 !important;
    padding: 20px 0px 10px 0px;
}
.whatnew_course h4 {
    background: #69be4a;
    color: #fff;
    width: 290px;
    font-size: 30px;
    text-align: center;
    border-radius: 50px;
    padding: 8px 0px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-top: 50px;
}
.icon_rsn img {
    width: 90px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.rsn_mian {
    width: 100%;
    float: left;
    margin-top: 30px;
}
.icon_rsn h4 {
    color: #002b5c !important;
    font-size: 18px;
    text-align: center;
    line-height: 26px;
    font-weight: 600;
    padding: 0;
    margin: 0;
    padding-top: 20px;
}
.rsn_section
{
    margin-top:0px;
}
.cirlc_blue
{
    background:#1c8abd !important;
}
.drak_blue
{
    background: #002b5c !important;
}
.str_img {
       width: 75px !important;
    margin-left: auto !important;
    margin-right: auto;
    display: block;
    margin-top: 8px !important;
}
.mrg_35
{
    margin-top:18px !important;
}
.globalcircl_img {
    width: 70px !important;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-top: 14px !important;
}
.wifi_img {
    width: 65px !important;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-top: 15px !important;
}
.towstr_img {
    width: 160px !important;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-top: 35px !important;
}
.search_img {
          width: 65px !important;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-top: 14px !important;
}
.rsn_img {
      width: 65px !important;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-top: 18px !important;
}
.moon_img {
   width: 75px !important;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-top: 22px !important;
}
.hand_img {
      width: 65px !important;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-top: 20px !important;
}
.manplace_img {
   width: 60px !important;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-top: 10px !important;
}
.flagman_img {
        width: 60px !important;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-top: 5px !important;
}
.degital_area.choose_sec p {
   padding: 0;
    margin: 0;
    color: #002b5c !important;
    font-size: 16px;
    text-align: center;
}
.choose_sec img {
       width: 90px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.choose_sec {
    padding-bottom: 240px;
}
.stry_img img
{
    width:70%;
}
.whatnew_course h3 {
    color: #002b5c !important;
    font-size: 18px;
    text-align: left;
    /* margin: 0; */
    padding-top: 10px;
}
.whatnew_course ul li {
    font-size: 16px;
    line-height:28px !important;
}
.whatnew_course p {
    font-size: 16px !important;
    line-height:28px !important;
}
.newccna_enquire a.enquire {
   padding: 13px 40px;
    border-radius: 50px;
    color: #fff !important;
    background: #41a1f6;
    text-decoration: none;
    font-weight: bold;
    margin-right: 12px;
    cursor: pointer;
    font-size: 18px;
}
.what_testi
{
    padding:70px 0px 0px 0px;
}

.what_testi .apct-testimonial-content {
    font-size: 16px;
    font-weight: 300;
    background: #f0f0f0;
    padding: 30px 0px;
    border-radius: 40px;
    color: #58585b;
}

.what_testi .apct-testimonial-content:before {
    
    content: "\f10d";
    font-family: "FontAwesome";
    font-size: 18px;
    left: 60px;
    position: absolute;
    top: 35px;
    color: #58585b;
}
.what_testi .testimonial-item img {
   width: 130px !important;
    border-radius: 100px;
    margin-top: 35px;
}
.word_mnimg img {
    width: 500px;
    padding-top: 40px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.round_ciclimg {
    padding-top: 60px;
}

.roundtext {
    width: 30%;
    float: left;
    margin-left: 20%;
}
.roundimg {
    width: 50%;
    float: left;
}
.roundtext ul {
    padding: 0;
}
.roundtext ul li {
    list-style: none;
    line-height: 26px;
    font-size: 16px;
    padding-bottom: 25px;
    padding-top: 35px;
}
.roundimg img {
    width: 365px;
    padding-top: 10px;
}
.whatnew_main_footer {
      background: url(https://octanetworks.com/img/whatnew_img/bg_newccna.png);
    background-size: cover;
    height: 559px;
    background-position: bottom;
    padding: 100px 0px 100px 0px;
    text-align: center;
}
.whatnew_main_footer h4 {
    color: #ffff0094;
    font-size: 24px;
}
img.what_img_footer {
    width: 320px;
}
.certificate {
    background: #fff;
    padding: 0px 0px 50px 0px;
    border-radius: 150px 150px 0px 0px;
    margin-top: -155px;
    width: 100%;
}
.stry_img h4 {
    color: #002b5c !important;
    font-size: 16px;
    text-align: center;
    line-height: 24px;
    font-weight: 600;
    padding: 0;
    margin: 0;
    padding-top: 0px;
}
.cert_area img {
    width: 100% !important;
}
.cert_area {
    padding-bottom: 25px;
    float: left;
}
.cert_main {
    padding-top: 70px;
}
.certificate h4 {
    background: #69be4a;
    color: #fff;
    width: 754px;
    font-size: 19px;
    text-align: center;
    border-radius: 50px;
    padding: 8px 0px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-top: 11px;
    float: left;
}
.cirt_button a {
    background: #69be4a;
    color: #fff;
    font-size: 18px;
    text-align: center;
    border-radius: 50px;
    padding: 8px 20px;
    text-decoration: none !important;
    margin-left: 20%;
    margin-right: auto;
    display: block;
    float: left;
}
.what_testi .apct-testimonial-content:before {
   font-family: "FontAwesome";
    font-size: 18px;
    left: 60px;
    position: absolute;
    top: 35px;
    color: #58585b;
    content: '';
    display: block;
    position: absolute;
    right: 100%;
    top: 10%;
    width: 0;
    height: 0;
    border-top: 62px solid transparent;
    border-right: 150px solid #f0f0f0;
    border-bottom: 23px solid transparent;
    border-left: 0px solid transparent;
    left: -65px;
    transform: rotate(-17deg);
}
.icon_rsn {
    padding-top: 30px;
}

@media(max-width:767px)
{
    .what_img {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    display: block;
    padding-top: 50px;
    padding-bottom: 20px;
}
.tech_circle {
    background: #69bf4a;
    /* padding: 100px 0px; */
    border-radius: 200px;
    position: relative;
    display: block;
    margin-top: -43px;
    height: 100px;
}
.left_circle {
    width: 31%;
    background: #002b5c;
    float: left;
    height: 100px;
    border-radius: 200px;
}
.left_circle img {
    width: 75px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-top: 12px;
}
.right_circle {
    width: 69%;
    /* background: #69bf4a; */
    float: left;
}
.right_circle h3 {
   color: #fff !important;
    font-size: 16px;
    text-align: left;
    line-height: 21px;
    padding: 0px 10px 0px 10px;
    margin-top: 8px;
}
.tech_box {
    background: #fff;
    padding: 15px 24px;
    margin-top: 30px;
    width: 85%;
    margin-right: auto;
    display: block;
    margin-left: auto;
}
.global_img img {
    width: 70%;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.tech_box2 {
    background: #fff;
    padding: 15px 30px;
    margin-top: 0px;
    width: 85%;
    margin-left: auto;
    float: none;
    margin-right: auto;
    display: block;
}
.tech_box3 {
    background: #fff;
    padding: 15px 30px;
    margin-top: 0px;
    width: 85%;
    margin-left: auto;
    float: none;
    margin-right: auto;
    margin-top: 23px;
}
.degital_main img {
    width: 100px;
    margin-top: 0px;
    margin-left: auto;
    display: block;
    margin-right: auto;
}
.degital_main h3 {
    color: #002b5c !important;
    font-size: 22px;
    text-align: center;
    line-height: 28px;
    padding: 0;
    padding-top: 0px;
}
.degital_main {
    width: 100%;
    float: left;
    padding: 10px 0px 25px 0px;
}
.pd_0 {
    padding-top: 0px !important;
}
.get_img img {
    width: 100%;
    padding-top: 40px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.infrastructure_left {
    width: 100%;
    float: none;
    margin-top: 60px;
}
.infrastructure_left img {
    width: 150px;
    margin-right: auto;
    margin-left: auto;
    display: block;
}
.infrastructure_left h4 {
   color: #002b5c !important;
    font-size: 44px;
    text-align: center;
    line-height: 30px;
    padding: 10px 80px 0px 80px;
    font-weight: 200 !important;
}
.infrastructure_left p {
    color: #002b5c !important;
    font-size: 16px;
    text-align: center !important;
    line-height: 26px;
    padding: 0px 10px;
}
.infrastructure_right {
    width: 100%;
    float: none;
    margin-top: 60px;
}
.infrastructure_right img {
    width: 150px;
    margin-right: auto;
    margin-left: auto;
    display: block;
}
.infrastructure_right h4 {
    color: #002b5c;
    font-size: 44px;
    text-align: center;
    line-height: 30px;
    padding: 0px 116px;
    font-weight: 200 !important;
    padding: 13px 81px 0px 80px;
}
.infrastructure_right p {
    color: #002b5c !important;
    font-size: 16px;
    text-align: center !important;
    line-height: 26px;
    padding: 0px 10px;
}
.word_mnimg img {
    width: 100%;
    padding-top: 40px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.mng_left {
    width: 100%;
    float: none;
    margin-top: 70px;
}
.mng_left img {
    width: 150px;
    margin-right: auto;
    margin-left: auto;
    display: block;
    margin-top: 20px;
}
.mng_left h4 {
    color: #ff9e38;
    font-size: 44px;
    text-align: center;
    line-height: 30px;
    padding: 0px 116px;
    font-weight: 200 !important;
    padding: 20px 0px 0px 0px;
}
.mng_left p {
    color: #002b5c !important;
    font-size: 16px;
    text-align: center !important;
    line-height: 26px;
    padding: 0px 10px;
}
.mng_bet {
    width: 100%;
    float: none;
    margin-top: 50px;
}
.mng_right {
    width: 100%;
    float: none;
    margin-top: 60px;
}
.mng_right img {
    width: 150px;
    margin-right: auto;
    margin-left: auto;
    display: block;
    margin-top: 20px;
}
.mng_right h4 {
    color: #ff9e38;
    font-size: 44px;
    text-align: center;
    line-height: 30px;
    padding: 0px 116px;
    font-weight: 200 !important;
    padding: 20px 0px 0px 0px;
}
.mng_right p {
    color: #002b5c !important;
    font-size: 16px;
    text-align: center !important;
    line-height: 26px;
    padding: 0px 10px;
}
.whatnew_course h3 {
    color: #002b5c !important;
    font-size: 18px;
    text-align: left;
    /* margin: 0; */
    padding-top: 17px;
    line-height: 26px;
}
.icon_rsn h4 {
    color: #002b5c !important;
    font-size: 16px;
    text-align: center;
    line-height: 20px;
    font-weight: 600;
    padding: 0;
    margin: 0;
    padding-top: 15px;
    padding-bottom: 0px;
}
.icon_rsn p {
   text-align:center !important;
   font-size:14px !important;
}
.what_testi .testimonial-item img {
    width: 130px !important;
    border-radius: 100px;
    margin-top: 0px;
}
.what_testi .apct-testimonial-content {
    font-size: 16px;
    font-weight: 300;
    background: #f0f0f0;
    padding: 20px 17px;
    border-radius: 10px;
    color: #58585b;
    margin-top: 29px;
}
.what_testi .apct-testimonial-content:before {
    display:none;
}
.cert_area {
    padding-bottom: 0px;
    float: none;
}
.cert_area img {
    width: 100% !important;
    padding-bottom: 20px;
}
.cirt_button a {
    background: #69be4a;
    color: #fff;
    font-size: 16px;
    text-align: center;
    border-radius: 50px;
    padding: 8px 10px;
    text-decoration: none !important;
    margin-left: auto;
    margin-right: auto;
    display: block;
    float: left;
}
.roundimg img {
    width: 100%;
    padding-top: 10px;
}
.newccn_hgt {
    width: 30% !important;
    height: 100px !important;
}
.right_wid {
    width: 70% !important;
}
.right_wid h3 {
    color: #fff !important;
    font-size: 14px !important;
    text-align: left;
    line-height: 17px !important;
    padding: 0px 10px 0px 10px;
    margin-top: 8px;
}
.pd_25 {
    padding-top: 15px !important;
}
.tech_career {
    background: #f0f0f0;
    padding: 0px 0px 245px 0px;
    border-radius: 60px 60px 0px 0px;
    margin-top: -155px;
    width: 100%;
}
.degital_area {
    background: #fff;
    padding: 0px 0px 240px 0px;
    border-radius: 60px 60px 0px 0px;
    margin-top: -155px;
    width: 100%;
}
.certificate {
    background: #fff;
    padding: 0px 0px 50px 0px;
    border-radius: 60px 60px 0px 0px;
    margin-top: -155px;
    width: 100%;
}
.few_mn1 .icon_rsn {
    height: 200px;
}
.choose_sec .icon_rsn
{
    height: 200px;
}
.cert_main {
    padding-top: 25px;
}
.stry_img .icon_rsn
{
    height: 235px;
}

}


@media only screen and (min-width: 768px) and (max-width: 992px) 
{
    .left_circle {
    width: 14%;
    background: #002b5c;
    float: left;
    height: 100px;
    border-radius: 200px;
}
.tech_box {
    background: #fff;
    padding: 15px 24px;
    margin-top: 30px;
    width: 36%;
    margin-left: 34%;
    margin-right: auto;
    display: block;
}
.tech_box2 {
    background: #fff;
    padding: 15px 17px;
    margin-top: 0px;
    width: 36%;
    margin-left: 17%;
    float: left;
}
.tech_box3 {
    background: #fff;
    padding: 15px 15px;
    margin-top: 0px;
    width: 36%;
    margin-left: 3%;
    float: left;
}
.global_img img {
    width: 50%;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.degital_main img {
    width: 60%;
    margin-top: 50px;
    margin-left: 50px;
    float: left;
}
.degital_main h3 {
    color: #002b5c !important;
    font-size: 24px;
    text-align: left;
    line-height: 30px;
    padding: 0;
    padding-top: 40px;
    padding-left: 200px;
    /* float: left; */
}
.infrastructure_right p {
    color: #002b5c !important;
    font-size: 16px;
    text-align: center;
    line-height: 26px;
    padding: 0px 10px;
}
.infrastructure_left p {
    color: #002b5c !important;
    font-size: 16px;
    text-align: center;
    line-height: 26px;
    padding: 0px 10px;
}
.right_circle h3 {
    color: #fff !important;
    font-size: 22px;
    text-align: center;
    line-height: 31px;
    padding: 0px 10px 0px 10px;
    margin-top: 14px;
}
.pd_25 {
    padding-top: 9px !important;
}
.mng_left p {
    color: #002b5c !important;
    font-size: 16px;
    text-align: center;
    line-height: 26px;
    padding: 0px 10px;
}
.mng_right p {
    color: #002b5c !important;
    font-size: 16px;
    text-align: center;
    line-height: 26px;
    padding: 0px 10px;
}
.cirt_button a {
    margin-left: 2%;
}

.what_testi .apct-testimonial-content {
    font-size: 16px;
    font-weight: 300;
    background: #f0f0f0;
    padding: 30px 15px;
    border-radius: 40px;
    color: #58585b;
    margin: 20px 20px 0px 80px;
}
.what_testi .apct-testimonial-content:before {
    font-family: "FontAwesome";
    font-size: 18px;
    left: 60px;
    position: absolute;
    top: 35px;
    color: #58585b;
    content: '';
    display: block;
    position: absolute;
    right: 100%;
    top: 19%;
    width: 0;
    height: 0;
    border-top: 42px solid transparent;
    border-right: 119px solid #f0f0f0;
    border-bottom: 14px solid transparent;
    border-left: 0px solid transparent;
    left: 0px;
    transform: rotate(-17deg);
}
.roundtext ul li {
    list-style: none;
    line-height: 26px;
    font-size: 16px;
    padding-bottom: 20px;
    padding-top: 25px;
}
.right_circle h3 {
    color: #fff !important;
    font-size: 22px;
    text-align: center;
    line-height: 27px;
    padding: 0px 10px 0px 10px;
    margin-top: 14px;
}
.newccn_hgt {
    width: 14% !important;
    height: 100px !important;
}
}



</style>



<div class="whatnew_main">
    <div class="container">
            <h1>Kickstart your career with <strong>New CCNA</strong></h1>
            <div class="newccna_enquire text-center"><a class="enquire" data-toggle="modal" data-target="#enroll_popup">Enquire Now</a></div>
            <img class="what_img" src="https://octanetworks.com/img/whatnew_img/cnna_newimg.png">
     </div>
</div>

<div class="tech_career">
    <div class="container">
        <div class="tech_circle">
            <div class="left_circle"><img src="https://octanetworks.com/img/whatnew_img/1.png"></div>
            <div class="right_circle"><h3 class="pd_70">Technology careers are the future.</h3></div>
        </div>
        
            <div class="tech_box">
                <h4><strong>Multi-domain solutions</strong></h4>
                <p>cross enterprise, data center, service provider, and security</p>
            </div>
            
           <div class="global_img">
               <img class="" src="https://octanetworks.com/img/whatnew_img/naib_world.png">
           </div>
           
            <div class="tech_box2">
                <h4><strong>Intent-based networking</strong></h4>
                <p>connects users, devices, apps, security intent, and policy</p>
            </div>
           
           
            <div class="tech_box3">
                <h4><strong>APIs and programmability</strong></h4>
                <p>drive new automation, agility, and scale</p>
            </div>
       </div>
 </div>
 
 <div class="degital_area">
    <div class="container">
        <div class="tech_circle blue_bg">
            <div class="left_circle"><img class="str_img" src="https://octanetworks.com/img/whatnew_img/5.png"></div>
            <div class="right_circle"><h3>Ride the wave of Digital transformation & be a part of business and infrastructure growth</h3></div>
        </div>
        
        <div class="digital_tp">
            <div class="degital_main">
               <div class="col-md-3"><img src="https://octanetworks.com/img/whatnew_img/6.png"></div>
               <div class="col-md-9"> <h3>Business innovations stimulates new applications</h3></div>
            </div>
            
             <div class="degital_main">
               <div class="col-md-3"><img src="https://octanetworks.com/img/whatnew_img/7.png"></div>
               <div class="col-md-9"> <h3>New Applications uplift the role of network</h3></div>
            </div>
            
              <div class="degital_main">
               <div class="col-md-3"><img src="https://octanetworks.com/img/whatnew_img/8.png"></div>
               <div class="col-md-9"> <h3 class="pd_0">Network automation and programmability revolutionize your approach towards infrastructure</h3></div>
            </div>
            
           </div>
       </div>
 </div>

<div class="tech_career">
    <div class="container">
        <div class="tech_circle bg_org">
            <div class="left_circle cirlc_blue"><img class="mrg_35" src="https://octanetworks.com/img/whatnew_img/9.png"></div>
            <div class="right_circle"><h3>World awaits for your infrastructure software knowledge -</br> New <strong>CCNA</strong>  is the way to Go </h3></div>
        </div>
        
          <div class="infrastructure_left">
               <img class="" src="https://octanetworks.com/img/whatnew_img/10.png">
               <h4>80 %</h4>
                <p>of CEOs say their company faces disruptive change from digital technologies</p>
           </div>
           
           <div class="infrastructure_right">
               <img class="" src="https://octanetworks.com/img/whatnew_img/11.png">
               <h4 class="txt_blue">75 %</h4>
                <p>of CEOs say their company does not have the skills to adapt</p>
           </div>
           
       </div>
 </div>
 
 <div class="degital_area">
    <div class="container">
        <div class="tech_circle hgt_260">
            <div class="left_circle newccn_hgt"><img class="globalcircl_img" src="https://octanetworks.com/img/whatnew_img/12.png"></div>
            <div class="right_circle right_wid"><h3>That’s why NEW <strong>CCNA</strong> covers a broad range of fundamentals based on the latest technologies, software development skills, and job roles</h3></div>
        </div>
            <div class="word_mnimg">
                <img src="https://octanetworks.com/img/whatnew_img/icon_1.png">
            </div>    
    
       </div>
 </div>
 
 <div class="tech_career">
    <div class="container">
        <div class="tech_circle blue_bg">
            <div class="left_circle"><img class="wifi_img" src="https://octanetworks.com/img/whatnew_img/19.png"></div>
            <div class="right_circle"><h3 class="pd_25">Go get <strong>CCNA..</strong> Make it easy for the hiring managers to select you </h3></div>
        </div>
        
            <div class="mng_left">
               <img class="" src="https://octanetworks.com/img/whatnew_img/20.png">
               <h4>85 %</h4>
                <p>of technology executives and managers consider technical certifications a critical success factor</p>
           </div>
             <div class="mng_bet">
               <img class="" src="https://octanetworks.com/img/whatnew_img/21.png">
           </div>
           
           <div class="mng_right">
               <img class="" src="https://octanetworks.com/img/whatnew_img/22.png">
               <h4>99 %</h4>
                <p>of organization use certifications to make hiring decisions </p>
           </div>
           
       </div>
 </div>
 
  <div class="degital_area">
    <div class="container">
            <div class="get_img">
                <img src="https://octanetworks.com/img/whatnew_img/get_ccna.png">
             </div>
       </div>
 </div>
 
  <div class="tech_career">
    <div class="container">
        <div class="tech_circle drak_blue">
            <div class="left_circle bg_org"><img class="moon_img" src="https://octanetworks.com/img/whatnew_img/28.png"></div>
            <div class="right_circle"><h3 class="pd_25">Take your career to the next level with <strong>CCNA.</strong> </h3></div>
        </div>
        <div class="whatnew_course">
            <h4>Course Details</H4>
                                    <div class="mai_crs">
                        <h3><strong>Prerequisite:</strong></h3>
                        <p>Before taking the CCNA course, candidates should be familiar with</p>
                        <ul>
                        <li>Basic computer literacy</li>
                        <li>Basic PC operating system navigation skills</li>
                        <li>Basic Internet usage skills</li>
                        <li>Basic IP address knowledge</li>
                        <li>Good understanding of network fundamentals</li>
                        </ul>
                        <h3><strong>What you'll learn in this course</strong></h3>
                        <p>Upon completion of this course, candidates will have the skills and knowledge to:</p>
                        <div class="panel-group mai_crs inner_crs">
                            <ul>
                        <li>Network Fundamentals</li>
                        <li>Network Access</li>
                        <li>IP Connectivity</li>
                        <li>IP Services</li>
                        <li>Security Fundamentals</li>
                        <li>Automation and Programmability</li>
                        </ul>
                        </div>
                        <div class="cour_hed">
                        <h3><strong>Course Duration</strong></h3>
                        <ul>
                        <li>30 days of Instructor-led classroom training</li>
                        <li>30 days of Virtual instructor-led online training</li>
                        </ul>
                        </div>
                        <div class="cour_hed">
                        <h3><strong>How you'll benefit</strong></h3>
                        <ul>
                        <li>Learn the knowledge and skills to install, configure, and operate a small- to medium-sized network</li>
                        <li>Gain a foundation in the essentials of networking, security, and automation</li>
                        <li>Prepare for the&nbsp;200-301 CCNA&nbsp;exam certification&nbsp;</li>
                        </ul>
                        </div>
                        <div class="cour_hed">
                        <h3><strong>What to expect in the exam?</strong></h3>
                        <ul>
                        <li>The&nbsp;200-301 CCNA&nbsp;exam certifies your knowledge and skills related to network fundamentals, network access, IP connectivity, IP services, security fundamentals, and automation and programmability.</li>
                        <li>After you pass&nbsp;200-301 CCNA, you earn CCNA certification.</li>
                        </ul>
                        </div>
                        <div class="cour_hed">
                        <h3><strong>Who should enroll?</strong></h3>
                        <ul>
                        <li>Anyone having Diploma, BA, BCOM, BSC, BE or BCA Degree.</li>
                        <li>Students and professionals in the IT and Technologies sector who wish to enhance their knowledge and acquire an internationally recognized professional certification which can improve their job prospects.</li>
                        <li>Experienced network engineers, especially those who work for enterprise organizations</li>
                        </ul>
                        </div>
                        <div class="cour_hed">
                        <h3><strong>What Jobs are available after the course?</strong></h3>
                        <p>Candidates will have Employment Opportunities with following Job Title</p>
                        <ul>
                        <li>Level 1 Network Engineer</li>
                        <li>Level 1 Network Administrator</li>
                        <li>Level 1 Network Support</li>
                        <li>Level 1 Network Consultant</li>
                        <li>Level 1 Technical Consultant</li>
                        </ul>
                        </div>
                        <div class="cour_hed">
                        <h3><strong>What is CCNA Course Curriculum?</strong></h3>
                        <ul>
                        <li>Identify the components of a computer network and describe their basic characteristics</li>
                        <li>Understand the model of host-to-host communication</li>
                        <li>Describe the features and functions of the Cisco Internetwork Operating System (IOS®) software</li>
                        <li>Describe LANs and the role of switches within LANs</li>
                        <li>Describe Ethernet as the network access layer of TCP/IP and describe the operation of switches</li>
                        <li>Install a switch and perform the initial configuration</li>
                        <li>Describe the TCP/IP Internet layer, IPv4, its addressing scheme, and subnetting</li>
                        <li>Describe the TCP/IP Transport layer and Application layer</li>
                        <li>Explore functions of routing</li>
                        <li>Implement basic configuration on a Cisco router</li>
                        <li>Explain host-to-host communications across switches and routers</li>
                        <li>Identify and resolve common switched network issues and common problems associated with IPv4 addressing</li>
                        <li>Describe IPv6 main features and addresses, and configure and verify basic IPv6 connectivity</li>
                        <li>Describe the operation, benefits, and limitations of static routing</li>
                        <li>Describe, implement, and verify Virtual Local Area Networks (VLANs) and trunks</li>
                        <li>Describe the application and configuration of inter-VLAN routing</li>
                        <li>Explain the basics of dynamic routing protocols and describe components and terms of Open Shortest Path First (OSPF)</li>
                        <li>Explain how Spanning Tree Protocol (STP) and Rapid Spanning Tree Protocol (RSTP) work</li>
                        <li>Configure link aggregation using EtherChannel</li>
                        <li>Describe the purpose of Layer 3 redundancy protocols</li>
                        <li>Describe basic WAN and VPN concepts</li>
                        <li>Describe the operation of Access Control Lists (ACLs) and their applications in the network</li>
                        <li>Configure Internet access using Dynamic Host Configuration Protocol (DHCP) clients and explain and configure Network Address Translation (NAT) on Cisco routers</li>
                        <li>Describe basic Quality of Service (QoS) concepts</li>
                        <li>Describe the concepts of wireless networks, which types of wireless networks can be built, and how to use Wireless LAN Controllers (WLCs)</li>
                        <li>Describe network and device architectures and introduce virtualization</li>
                        <li>Introduce the concept of network programmability and Software-Defined Networking (SDN) and describe smart network management solutions such as Cisco DNA Center™, Software-Defined Access (SD-Access), and Software-Defined Wide Area Network (SD-WAN)</li>
                        <li>Configure basic IOS system monitoring tools</li>
                        <li>Describe the management of Cisco devices</li>
                        <li>Describe the current security threat landscape</li>
                        <li>Describe threat defense technologies</li>
                        <li>Implement a basic security configuration of the device management plane</li>
                        <li>Implement basic steps to harden network devices</li>
                        </ul>
                        </div>
                        <div class="cour_hed">
                        <h3><strong>Hands-on Labs?</strong></h3>
                        <ul>
                        <li>Get Started with Cisco Command-Line Interface (CLI)</li>
                        <li>Observe How a Switch Operates</li>
                        <li>Perform Basic Switch Configuration</li>
                        <li>Implement the Initial Switch Configuration</li>
                        <li>Inspect TCP/IP Applications</li>
                        <li>Configure an Interface on a Cisco Router</li>
                        <li>Configure and Verify Layer 2 Discovery Protocols</li>
                        <li>Implement an Initial Router Configuration</li>
                        <li>Configure Default Gateway</li>
                        <li>Explore Packet Forwarding</li>
                        <li>Troubleshoot Switch Media and Port Issues</li>
                        <li>Troubleshoot Port Duplex Issues</li>
                        <li>Configure Basic IPv6 Connectivity</li>
                        <li>Configure and Verify IPv4 Static Routes</li>
                        <li>Configure IPv6 Static Routes</li>
                        <li>Implement IPv4 Static Routing</li>
                        <li>Implement IPv6 Static Routing</li>
                        <li>Configure VLAN and Trunk</li>
                        <li>Troubleshoot VLANs and Trunk</li>
                        <li>Configure a Router on a Stick</li>
                        <li>Implement Multiple VLANs and Basic Routing Between the VLANs</li>
                        <li>Configure and Verify Single-Area OSPF</li>
                        <li>Configure and Verify EtherChannel</li>
                        <li>Improve Redundant Switched Topologies with EtherChannel</li>
                        <li>Configure and Verify IPv4 ACLs</li>
                        <li>Implement Numbered and Named IPv4 ACLs</li>
                        <li>Configure a Provider-Assigned IPv4 Address</li>
                        <li>Configure Static NAT</li>
                        <li>Configure Dynamic NAT and Port Address Translation (PAT)</li>
                        <li>Implement PAT</li>
                        <li>Log into the WLC</li>
                        <li>Monitor the WLC</li>
                        <li>Configure a Dynamic (VLAN) Interface</li>
                        <li>Configure a DHCP Scope</li>
                        <li>Configure a WLAN</li>
                        <li>Define a Remote Access Dial-In User Service (RADIUS) Server</li>
                        <li>Explore Management Options</li>
                        <li>Explore the Cisco DNA™ Center</li>
                        <li>Configure and Verify NTP</li>
                        <li>Configure System Message Logging</li>
                        <li>Create the Cisco IOS Image Backup</li>
                        <li>Upgrade Cisco IOS Image</li>
                        <li>Configure WLAN Using Wi-Fi Protected Access 2 (WPA2) Pre-Shared Key (PSK) Using the GUI</li>
                        <li>Secure Console and Remote Access</li>
                        <li>Enable and Limit Remote Access Connectivity</li>
                        <li>Secure Device Administrative Access</li>
                        <li>Configure and Verify Port Security</li>
                        <li>Implement Device Hardening</li>
                        </ul>
                        </div>
                        <div class="cour_hed">
                        <h3><strong>What Devices are used during Hands-on Labs?</strong></h3>
                        <p>Our NEW CCNA Training program provides the students with opportunity to have hands-on labs on Real Cisco Devices which boost their confident at handling these devices and tools efficiently in enterprise networks.</p>
                        <ul>
                        <li>Router: ISR 1841, 1905, 2811, 2911</li>
                        <li>Switches: 2950, 2960, 3750, 3560 Poe Switch</li>
                        <li>Tools: Cisco IOS , Putty, GNS and Cisco Packet Tracer</li>
                        </ul>
                        </div>
                        <div class="cour_hed">
                        <h3><strong>Do you provide Placement Assistance, post completion of the training?</strong></h3>
                        <p>We are 100% committed to offer placement assistance to our students. Industry approved Resume Templates are provided to candidates as guidance to assist them in writing their resumes. We also provide students with FAQ interview questionnaire to help them prepare for their job interviews.</p>
                        <ul>
                        </ul>
                        </div>
                        <div class="cour_hed">
                        <h3><strong>What is expected salary after the New CCNA 200-301 Training Course?</strong></h3>
                        <p>On an average a CCNA Certified Engineer with 0 years of experience gets salary in the range of INR 20K to 30K per month in India and differs for experienced CCNA Certified Engineers which is based number of years of experience and performance.</p>
                        <ul>
                        </ul>
                        </div>
                        <div class="cour_hed">
                        <h3><strong>After CCNA training course, what is the Next Step?</strong></h3>
                        <p>Learning never stops. We always recommend CCNP &amp; CCIE Enterprise infrastructure. There is huge demand for Cisco Certified Enterprise Infrastructure Engineers. These training and certification will establish your authority as an industry expert and provide you better career opportunities in the market.</p>
                        <ul>
                        </ul>
                        </div>
                        </div>
        </div>
       </div>
 </div>
 
 
  <div class="degital_area choose_sec ">
    <div class="container">
        <div class="tech_circle">
            <div class="left_circle"><img class="search_img" src="https://octanetworks.com/img/whatnew_img/29.png"></div>
            <div class="right_circle"><h3 class="pd_25">Choose the right training center for your career</h3></div>
        </div>
         <div class="rsn_section ser_clr">
           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <div class="icon_rsn">
                    <img src="https://octanetworks.com/img/whatnew_img/serc_icon1.png">
                       <h4>2x OCTA CCIE's</h4>
                       <p>as Mentors</p>
                </div>
           </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="icon_rsn"> 
                    <img src="https://octanetworks.com/img/whatnew_img/serc_icon2.png">
                    <h4>8+ YEARS</h4>
                    <p>of Delivering Innovative Training</p>
                </div>
           </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="icon_rsn">
                       <img src="https://octanetworks.com/img/whatnew_img/serc_icon3.png">
                       <h4>85% Students</h4>
                       <p>Get Placed Without Appearing CCIE Lab</p>
                    </div>
           </div>
         
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <div class="icon_rsn">
                 <img src="https://octanetworks.com/img/whatnew_img/serc_icon4.png">
                       <h4>100K+</h4>
                       <p>Candidates Trained</p>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <div class="icon_rsn">
                    <img src="https://octanetworks.com/img/whatnew_img/serc_icon5.png">
                       <h4>State Of Art</h4>
                       <p>Infrastructure</p>
                </div>
           </div>
           
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <div class="icon_rsn">
                    <img src="https://octanetworks.com/img/whatnew_img/serc_icon6.png">
                       <h4>90% CCIE</h4>
                       <p>Students Passed in First Attempt</p>
                    </div>
           </div>
           
            
          </div>
       </div>
 </div>
 
 
  <div class="tech_career few_mn1">
    <div class="container">
        <div class="tech_circle blue_bg">
            <div class="left_circle"><img class="rsn_img" src="https://octanetworks.com/img/whatnew_img/36.png"></div>
            <div class="right_circle"><h3 class="pd_25">Few reasons, why Octa Networks is ideal for you</h3></div>
        </div>
        <div class="rsn_section">
           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class="icon_rsn">
                    <img src="https://octanetworks.com/img/whatnew_img/new1.png">
                       <h4>Worlds Largest</br> Cisco Labs</h4>
                </div>
           </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                  <div class="icon_rsn"> 
                    <img src="https://octanetworks.com/img/whatnew_img/new2.png">
                    <h4>24x7 </br> Lab Facility</h4>
                </div>
           </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                  <div class="icon_rsn">
                       <img src="https://octanetworks.com/img/whatnew_img/new3.png">
                       <h4>Biggest Team of CCIE Certified Trainers</h4>
                    </div>
           </div>
           
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class="icon_rsn">
                     <img src="https://octanetworks.com/img/whatnew_img/new4.png">
                       <h4>Unlimited </br> Repetition</h4>
                    </div>
           </div>
           
           
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class="icon_rsn">
                 <img src="https://octanetworks.com/img/whatnew_img/new5.png">
                       <h4>Free Practical </br> Workbooks</h4>
            </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class="icon_rsn">
                    <img src="https://octanetworks.com/img/whatnew_img/new6.png">
                       <h4>Free Interview </br> Questionnaire</h4>
                </div>
           </div>
           
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class="icon_rsn">
                    <img src="https://octanetworks.com/img/whatnew_img/new7.png">
                       <h4>Dedicated </br> Placement Cell</h4>
                    </div>
           </div>
           
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class="icon_rsn">
                    <img src="https://octanetworks.com/img/whatnew_img/new8.png">
                       <h4>100% Practicals </br>on Real Devices</h4>
                    </div>
           </div>
          </div>
       </div>
 </div>
 
 
  <div class="degital_area">
    <div class="container">
        <div class="tech_circle bg_org">
            <div class="left_circle blue_bg"><img class="hand_img" src="https://octanetworks.com/img/whatnew_img/43.png"></div>
            <div class="right_circle"><h3 class="pd_25">What students says about <strong>Octa Networks.</strong> </h3></div>
        </div>
                <div class="what_testi">
                    <div class="col-lg-12 col-sm-12">
                    <div class="owl-carousel testimonials-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-3000px, 0px, 0px); transition: all 0.25s ease 0s; width: 5250px;"><div class="owl-item cloned" style="width: 750px;"><div class="testimonial-item">
                                            <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/47H5SS9G5CLq.jpg" class="testimonial-img" alt="Prince Prashar">
                        </div>
                                <div class="col-lg-8 col-md-12">
                                <div class="apct-testimonial-content"><p>The labs and training session were informative and engaging. Octa Networks really assisted me to fine tune my networking knowledge. Not only the training helps you with the exam perparation, but it also helps you to solve issues on production environment. Thanks to Munawar and 24x7 Octa networks support Team</p>
                                 <h3 class="apct-testimonial-title-name">Prince Prashar</h3>
                                </div>
                               
                                </div>
                                </div></div><div class="owl-item cloned" style="width: 750px;"><div class="testimonial-item">
                                <div class="col-lg-3 col-md-12">
                                <img src="https://octanetworks.com/img/testimonials/44UNgf4MyrQF.jpg" class="testimonial-img" alt="Ganesh Markandey Chippa">
                                </div>
                                <div class="col-lg-9 col-md-12">
                                <div class="apct-testimonial-content"><p>Thanks for guiding me towards the right path. You are a fantastic mentor (Qayyum Sir) that is worthy of emulation. You deserve a big thank you from me. Specially thanks to Arshad Sir, Joaquim Sir&nbsp; for providing this wonderful opportunity.</p>
                                 <h3 class="apct-testimonial-title-name">Ganesh Markandey Chippa</h3>
                                </div>
                               
                                </div>
                                </div></div><div class="owl-item" style="width: 750px;"><div class="testimonial-item">
                                <div class="col-lg-3 col-md-12">
                                <img src="https://octanetworks.com/img/testimonials/49A3BV4PASLM.jpg" class="testimonial-img" alt="Md. Ahmed">
                                </div>
                                <div class="col-lg-9 col-md-12">
                                <div class="apct-testimonial-content"><p>I done CCNA from different institute,I was not clear with some concepts but after Jagadish sir class I'm happy the way he is teaching will help many it's my personal experience. Thanks you sir. Keep rocking in the same way</p>
                               <h3 class="apct-testimonial-title-name">Md. Ahmed</h3>
                                </div>
                               
                                </div>
                                </div></div><div class="owl-item" style="width: 750px;"><div class="testimonial-item">
                                <div class="col-lg-3 col-md-12">
                                <img src="https://octanetworks.com/img/testimonials/47H5SS9G5CLq.jpg" class="testimonial-img" alt="Prince Prashar">
                                </div>
                                <div class="col-lg-9 col-md-12">
                                <div class="apct-testimonial-content"><p>The labs and training session were informative and engaging. Octa Networks really assisted me to fine tune my networking knowledge. Not only the training helps you with the exam perparation, but it also helps you to solve issues on production environment. Thanks to Munawar and 24x7 Octa networks support Team</p>
                               <h3 class="apct-testimonial-title-name">Prince Prashar</h3>
                                </div>
                                
                                </div>
                                </div></div><div class="owl-item active" style="width: 750px;"><div class="testimonial-item">
                                <div class="col-lg-3 col-md-12">
                                <img src="https://octanetworks.com/img/testimonials/44UNgf4MyrQF.jpg" class="testimonial-img" alt="Ganesh Markandey Chippa">
                                </div>
                                <div class="col-lg-9 col-md-12">
                                <div class="apct-testimonial-content"><p>Thanks for guiding me towards the right path. You are a fantastic mentor (Qayyum Sir) that is worthy of emulation. You deserve a big thank you from me. Specially thanks to Arshad Sir, Joaquim Sir&nbsp; for providing this wonderful opportunity.</p>
                               <h3 class="apct-testimonial-title-name">Ganesh Markandey Chippa</h3>
                               
                                </div>
                                
                                </div>
                                </div></div><div class="owl-item cloned" style="width: 750px;"><div class="testimonial-item">
                                <div class="col-lg-3 col-md-12">
                                <img src="https://octanetworks.com/img/testimonials/49A3BV4PASLM.jpg" class="testimonial-img" alt="Md. Ahmed">
                                </div>
                                <div class="col-lg-9 col-md-12">
                                <div class="apct-testimonial-content"><p>I done CCNA from different institute,I was not clear with some concepts but after Jagadish sir class I'm happy the way he is teaching will help many it's my personal experience. Thanks you sir. Keep rocking in the same way</p>
                               <h3 class="apct-testimonial-title-name">Md. Ahmed</h3>
                                </div>
                                
                                </div>
                                </div></div><div class="owl-item cloned" style="width: 750px;"><div class="testimonial-item">
                                <div class="col-lg-3 col-md-12">
                                <img src="https://octanetworks.com/img/testimonials/47H5SS9G5CLq.jpg" class="testimonial-img" alt="Prince Prashar">
                                </div>
                                <div class="col-lg-9 col-md-12">
                                <div class="apct-testimonial-content"><p>The labs and training session were informative and engaging. Octa Networks really assisted me to fine tune my networking knowledge. Not only the training helps you with the exam perparation, but it also helps you to solve issues on production environment. Thanks to Munawar and 24x7 Octa networks support Team</p>
                        <h3 class="apct-testimonial-title-name">Prince Prashar</h3>
                        </div>
                        
                        </div>
                        </div></div></div></div>
                        
                        </div>
                        </div>
                </div>
    
       </div>
 </div>
 
 
 
  <div class="tech_career stry_img">
    <div class="container">
        <div class="tech_circle drak_blue">
            <div class="left_circle bg_org"><img class="manplace_img" src="https://octanetworks.com/img/whatnew_img/44.png"></div>
            <div class="right_circle "><h3 class="pd_70">Placement Stories</h3></div>
        </div>
        <div class="rsn_section">
           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <div class="icon_rsn">
                    <img src="https://octanetworks.com/img/whatnew_img/rohit.png">
                       <h4>ROHIT KUMAR SHARMA</br> Oregon Systems </br> Bahrain</h4>
                </div>
           </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="icon_rsn"> 
                    <img src="https://octanetworks.com/img/whatnew_img/deniely.png">
                    <h4>DANIEL V KAPOOR </br> Weltech </br> New Zealand</h4>
                </div>
           </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="icon_rsn">
                       <img src="https://octanetworks.com/img/whatnew_img/ankur.png">
                       <h4>ANKUR MALIK </br> Cisco </br> India</h4>
                    </div>
           </div>
           
           
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <div class="icon_rsn">
                 <img src="https://octanetworks.com/img/whatnew_img/rajan.png">
                       <h4>RAJAN DUTTA </br> Salam Technology </br> Qatar</h4>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <div class="icon_rsn">
                    <img src="https://octanetworks.com/img/whatnew_img/disha.png">
                       <h4>DISHA DIKSHIT </br>Kingston University </br> United Kingdom</h4>
                </div>
           </div>
           
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <div class="icon_rsn">
                    <img src="https://octanetworks.com/img/whatnew_img/divya.png">
                       <h4>DIVYA SENGAR </br> Accenture </br> India</h4>
                    </div>
           </div>
           
           
          </div>
       </div>
 </div>
 
 
 <div class="certificate">
    <div class="container">
        <div class="tech_circle">
            <div class="left_circle"><img class="flagman_img" src="https://octanetworks.com/img/whatnew_img/45.png"></div>
            <div class="right_circle"><h3 class="pd_70"><strong>CCNA</strong> Success Stories</h3></div>
        </div>
            
            <div class="cert_main">
                <div class="cert_area">
                    <div class="col-md-6 col-sm-6 col-xs-6"><img src="https://octanetworks.com/img/whatnew_img/cirtificate_1.png"></div>
                    <div class="col-md-6 col-sm-6 col-xs-6"><img src="https://octanetworks.com/img/whatnew_img/cirtificate_2.png"></div>
                </div>
                
                 <div class="cert_area">
                    <div class="col-md-6 col-sm-6 col-xs-6"><img src="https://octanetworks.com/img/whatnew_img/cirtificate_3.png"></div>
                    <div class="col-md-6 col-sm-6 col-xs-6"><img src="https://octanetworks.com/img/whatnew_img/cirtificate_4.png"></div>
                </div>
            </div>
            
            <div class="cirt_button"><a href="https://www.octanetworks.com/training-exam/new-ccna-training/">Click here for more information about CCNA Certification and Training Program</a></div>
       </div>
 </div>
 
 <div class="enrl">
   <div class="modal fade" id="enroll_popup" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <div class="modal-body">
               <!--  <h4>Request Your Trial</h4> -->
               <div class="trail-form">
                  <div class="form">
                     <form action="<?php echo Yii::app()->createUrl("main/forms/courseinquiry"); ?>" method="post" role="form" class="contactForm">
                        <div class="form-group"> 
                           <input type="name" name="name" class="form-control" placeholder="Name" required="required">
                        </div>
                        <div class="form-group">
                           <input type="email" name="myemail" class="form-control" placeholder="Email" required="required" >
                        </div>
                        <div class="form-group">
                           <input type="tel" id="mobile-number1" name="phone" placeholder="+91">
                        </div>
                        <select class="dropdown form-control" id="batche" data-url="/main/exam/getphone/" name="batche" required="required">
                           <option value="NONE">Select Batch</option>
                           <option value="Weekdays (Mon-Fri)">Weekdays (Mon-Fri)</option>
                           <option value="Weekend (Sat-Sun)">Weekend (Sat-Sun)</option>
                        </select>
                        <div class="form-group mrg_t">
                           <input type="text" name="course" class="form-control" placeholder="Course" required="required" >
                        </div>
                        <div class="form-group">
                           <div class="g-recaptcha" data-sitekey="<?=Yii::app()->params['siteKey']?>"></div>
                           <input type="hidden" name="type" value="Inquire for <?php echo isset($examcode) ? $examcode : null; ?>" />
                        </div>
												<div class="form-group form-row">
																		<input type="checkbox" class="subscribe_approval" name="subscribe_approval" value="1" checked="checked">&nbsp;&nbsp;<span class="subscribe">Subscribe to our Newsletter.</span><br>  
																		</div>
                        <div class="form-group enroll_btn">
                           <button type="submit" title="Submit">Enquire Now</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

 
 