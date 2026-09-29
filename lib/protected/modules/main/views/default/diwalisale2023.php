<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>MCQ Quiz</title>
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
	<!-- Stylesheet -->
	<style>
		.header-space {
			padding-bottom: 0px;
		}

		.css-1yzzujv.eqd5v0k1 {
			display: none;
		}

		div#freez_bar {
			display: none;
		}

		section#footer-top {
			display: none;
		}

		footer#footer {
			display: none;
		}

	

		@keyframes gradient {
			0% {
				background-position: 0% 50%;
			}

			50% {
				background-position: 100% 50%;
			}

			100% {
				background-position: 0% 50%;
			}
		}

		.start-screen,
		.score-container {
			position: relative;

			width: 100%;
			height: 100vh;
			max-height: 100%;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}

		button {
			border: none;
			outline: none;
			cursor: pointer;
		}

		#start-button,
		#restart {
			font-size: 1.3em;
			padding: 0.5em 1.8em;
			border-radius: 0.2em;
		}

		#restart {
			margin-top: 0.9em;
		}

		#display-container {
			background-color: #ffffff;
			padding: 1.1em 1.8em 5em;
			width: 100%;
			max-width: 37.5em;
			/*margin: 60px auto;*/
			position: absolute;
			transform: translate(-50%, -50%);
			top: 50%;
			left: 50%;
			border-radius: 0.6em;
		}

		.header {
			margin-bottom: 1.8em;
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding-bottom: 0.6em;
			border-bottom: 0.1em solid #c0bfd2;
		}

		.timer-div {
			background-color: #e1f5fe;
			width: 7.5em;
			border-radius: 1.8em;
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 0.7em 1.8em;
		}

		.question {
			margin-bottom: 1.25em;
			font-weight: 600;
		}

		.option-div {
			font-size: 0.9em;
			width: 100%;
			padding: 1em;
			margin: 0.3em 0;
			text-align: left;
			outline: none;
			background: transparent;
			border: 1px solid #c0bfd2;
			border-radius: 0.3em;
		}

		.option-div:disabled {
			color: #000000;
			cursor: not-allowed;
		}

		#next-button {
			font-size: 1em;
			margin-top: 1.5em;
			background-color: #0a69ed;
			color: #ffffff;
			padding: 0.7em 1.8em;
			border-radius: 0.3em;
			float: right;
		}

		.hide {
			display: none;
		}

		.incorrect {
			background-color: #ffdde0;
			color: #d32f2f;
			border-color: #d32f2f;
		}

		.correct {
			background-color: #e7f6d5;
			color: #689f38;
			border-color: #689f38;
		}

		#user-score {
			font-size: 1.5em;
			color: #000;
		}

		/*@media (min-width:1100px) and (max-width:1800px) {*/
		/*    #display-container {margin: 50px auto 44px; }*/
		/*      }*/
		/*@media (min-width:992px) and (max-width:1100px) {*/
		/*    #display-container {margin: 160px auto 42px; }*/
		/*      }*/

		/*@media (min-width:768px) and (max-width:991px) {*/
		/*    #display-container {margin: 110px auto 50px; }*/

		/*@media (max-width:767px){*/
		/*    #display-container {padding: 1.1em 1.8em 5em !important; margin: 90px auto 45px;}*/
		/*}*/
	</style>
</head>

<body>
	<style>
	input[type=email], input[type=tel], input[type=date], select {
    font-size: 1rem !important;}
	.text-visible{
	    flex-direction: column;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    color: white;
    text-transform: capitalize;
	}
	.ccnatraining_section {
    /* background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/Untitled-230-(1).png'); */
	background: #4484be;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    padding-top: 20px;
    padding-bottom: 40px;
}
		.visible {
  display: block; /* or 'inline', 'flex', or any other appropriate display property */
}

		.st38 {
			font-family: 'Great Vibes', cursive !important;
		}

		.swing {
			animation: swing ease-in-out 1s infinite alternate;
			transform-origin: center -20px;
			float: left;
			box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
		}

		@keyframes swing {
			0% {
				transform: rotate(3deg);
			}

			100% {
				transform: rotate(-3deg);
			}
		}




		#Objects .st44 path {
			stroke: #37233c;
			stroke-width: 14px;
			fill: #0bfd36;
		}

		#Objects .design .line {
			stroke: #ffffff;
			stroke-width: 1px;
		}
	</style>
 <style>

        #contact_frm2 {
            padding: 20px;
            overflow: hidden;
            padding-top: 20px;
            margin-top: 20px;
            border-radius: 0;
            background-image: linear-gradient(135deg, #19519e, #1dd5e6) !important;
            margin-bottom: 20px;
        }

        #contact_frm2 label {
            float: left !important;
            color: #fff !important;
        }

        div#contact_frm2 button.enquire-now-jobg {
            background: #0b304d;
            border-radius: 0;
            padding: 4px 16px !important;
            border-radius: 2px;
        }

        form.contactForm {
            padding: 15px !important;
        }

        .text-uppercase {
            text-transform: inherit;
        }

        .header_title {
            background: #007bff;
            padding: 10px;
            font-size: 24px;
        }

        .form-group.form-row button {
            background: #0b304d;
            border: 0;
            width: 100%;
            padding: 7px 10px 5px 10px;
            border-radius: 5px;
            margin-top: 0px;
            color: #fff;
        }

        .job-guarantee-page h2 {
            padding-bottom: 0px !important;
        }

        .content_crsbtn:hover {
            background: #007bff;
        }

        .ccnp_rnt h4 {
            font-size: 18px;
            font-weight: 400;
        }

        .ccnp_rnt ul li {
            font-size: 16px;
            line-height: 26px;
        }

        .ccnp_rnt p {
            font-size: 18px;
            font-weight: 400 !important;
        }

        .job-guarantee-page p {
            font-size: 16px;
            font-weight: 400 !important;
        }

        .form_header {
            background: #3f9cb5;
            padding: 13px 25px;
            font-size: 21px;
            color: #fff;
            text-align: center;
            text-transform: uppercase;
            border-radius: 3px 3px 0 0;
            width: 100%;
        }

        .banner_form {
            width: 860px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
		.top_section {
    background: #b4cee5;
}
		.landing_logo {
    width: 200px;
    /* margin-bottom: 10px; */
    /* background: #fff; */
    padding: 20px 20px;
    border-radius: 10px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
        /* .landing_logo {
            width: 200px;
            margin-bottom: 10px;
            background: #fff;
            padding: 19px 30px;
            border-radius: 10px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        } */

        .career_bg input[type=email],
        input[type=tel],
        input[type=date],
        select {
            color: #333 !important;
        }

        section.copyright {
            background: #fff;
            color: #fff;
            padding: 20px 0;
            font-size: 10px !important;
            text-align: center;
        }

        .pre_reqisite_sec {
            padding: 40px 0px;
        }

        .form-row .intl-tel-input input {
            padding-left: 40px !important;
        }

        .trail-form .form-group {
            color: #333;
            text-align: left;
			display: block;
        }

        .form iframe {
            padding-left: 0;
            transform: scale(0.80);
            -webkit-transform: scale(1.02);
            transform-origin: 0 0;
            -webkit-transform-origin: 0 0;
        }

        .pointer_none {
            pointer-events: none;
        }

        .backtoback_ccie img {
            width: 100%;
        }

        .pddd_0 {
            padding: 0px;
        }

        .testim_section P {
            color: #333;
            text-align: center;
            font-size: 16px;
            line-height: 27px;
            padding-top: 25px;
        }

        .testim_section_boxex img.testimonial-img {
            border-radius: 1000px;
            border: 0px solid #2aacd1;
            box-shadow: 0px 0px 3px 3px #2aacd1;
            padding-top: 1px !important;
        }

        .testi_buttons button.owl-dot {
            overflow: scroll !important;
        }

        .testim_section_boxex {
            padding-top: 130px;
            padding-left: 40px;
            padding-right: 40px;
        }

        .main_crm_high {
            padding-top: 30px !important;
        }

        .headings_titles {
            font-size: 26px;
            padding-bottom: 20px;
            font-weight: 600 !important;
        }

        .blue_backcolor {
            background: #f2fbfd !important;
        }

        li.course-features-item:last-child {
            border-bottom: 0px !important;
        }

        .text_left {
            text-align: left;
        }

        .group_section {
            padding: 25px 0px 50px 0px;
        }

        .heading_title h3 {
            font-size: 30px;
            color: #333;
            font-weight: 500 !important;
            margin-bottom: 0px;
        }

        .group_box {
            background: #fff;
            padding: 26px 10px 36px 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-top: 25px;
        }

        .group_box a {
            text-decoration: none;
        }

        section.group_section img {
            width: 80px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 20px;
        }

        .group_box span {
            padding: 6px 18px 3px 18px;
            color: #fff;
            border-radius: 3px;
            background: #2c3462;
            font-size: 13px;
            display: inline-block;
        }

        .content_crsbtn {
            background: #2c3462;
            color: #fff !important;
            border-radius: 100px;
            margin-top: 13px;
            box-shadow: 0px 0px 7px -3px #000;
            padding: 7px 18px 4px 18px;
            cursor: pointer;
            text-decoration: none !important;
            font-size: 16px;
            margin: 0px;
            display: inline-block;
            width: 295px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            display: block;
            margin-top: 25px;
        }

        section.priviliges-enjoyed.job-guarantee-page.blue_backcolor.clearfix .text_left {
            text-align: left !important;
            padding-bottom: 5px !important;
            color: #333 !important;
            font-size: 26px;
        }

        .arriw_blink i {
            border: 1px solid #fff;
            color: #fff;
            border-radius: 88px;
            height: 30px;
            width: 30px;
            line-height: 30px;
            margin-top: 30px;
        }

        .testi_rgt_bg {
            background-image: url(https://image.freepik.com/free-vector/stylish-hexagonal-line-pattern-background_1017-19742.jpg);
            box-shadow: 1000px 1000px 1000px 1000px #ffffffd9 inset;
            background-size: contain;
            height: 686px;
            background-repeat: repeat;
        }

        .apct-testimonial-title-name {
            font-size: 20px;
            color: #333 !important;
        }

        .testimonial-item {
            padding-top: 10px;
        }

        .succes_course_box img {
            width: 170px !important;
            height: 170px !important;
            border-radius: 100px;
            object-fit: cover;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        .col-md-2.succes_course_box {
            width: 20% !important;
        }

        .succes_course_box_cnt {
            text-align: center;
        }

        .succes_course_box h4 {
            margin-top: 20px;
            font-size: 20px;
            margin-bottom: 7px;
        }

        section#success_stories {
            padding: 43px 0px;
            background: #fff !important;
        }

        section#success_stories h3 {
            text-align: center;
            padding: 0;
            font-size: 30px;
            padding-bottom: 15px;
        }

        .succes_course_box_cnt p {
            text-align: center;
            padding: 0;
            background: transparent !important;
            font-size: 15px;
            line-height: 20px;
        }

        .testimonial-item img {
            border-radius: 100px;
        }

        .ccnp_rnt ul {
            margin-left: 20px;
            padding: 0;
        }

        .testim_section11 {
            padding-top: 25px;
        }

        h2.headings_titles.pddd_20 {
            font-size: 30px;
            color: #58585b;
            padding-bottom: 20px !important;
        }

        @media(max-width:767px) {
            .header-space {
                padding-bottom: 0px;
            }

            .banner_form {
                width: 100%;
            }

            .heading_title h3 {
                font-size: 24px;
            }

            .key_high {
                background-color: transparent;
                padding-top: 0px;
            }

            .headings_titles {
                font-size: 22px;
                padding-bottom: 10px;
                line-height: 32px;
            }

            section#success_stories h3 {
                text-align: center;
                padding: 0;
                font-size: 20px;
                padding-bottom: 15px;
                line-height: 33px;
                padding-top: 0;
                margin-top: 0;
            }

            .col-md-2.succes_course_box {
                width: 50% !important;
                float: left;
                margin-bottom: 20px;
            }

            .succes_course_box img {
                width: 100% !important;
                height: auto !important;
            }

            .succes_course_box h4 {
                margin-top: 19px;
                font-size: 18px;
                margin-bottom: 6px;
            }

            .succes_course_box_cnt p {
                text-align: center !important;
                font-size: 14px;
                line-height: 19px;
            }

            h2.headings_titles.pddd_20 {
                font-size: 26px;
                color: #58585b;
                padding-bottom: 15px !important;
            }

            section.copyright p {
                text-align: center !important;
                font-size: 24px !important;
                padding: 3px 0px 0px 0px;
                line-height: 33px;
            }

            .testim_section P {
                color: #333;
                text-align: center !important;
                font-size: 15px;
                line-height: 25px;
                padding-top: 25px;
            }

            section#keyhighlights img.key_icn {
                width: 6% !important;
                object-fit: contain;
            }

            img.key_icn {
                margin: 4px 10px 1px 0px !important;
                position: relative;
                top: -3px;
            }
        }

        .job-guaranteed-courses {
            background: transparent !important;
            clear: both;
            color: aliceblue;
            padding: 0px 0;
            margin: 0px 0 0 0;
            color: #fff;
            max-width: 100%;
        }

        .enrollbttn {
            background: #2e3092;
            color: #fff !important;
            padding: 20px 60px;
            font-size: 34px;
            font-weight: 700;
            border-radius: 25px;
            padding-bottom: 13px;
            display: inline-block;
            margin-top: 7px;
            text-decoration: none !important;
        }

        ul.socail_icons_right {
            margin-top: 11px;
            margin-left: 0;
            padding-left: 0;
        }

        .socail_icons li a i {
            font-size: 30px;
            color: #6c6c6c;
            border: 2px solid;
            height: 60px;
            width: 60px;
            text-align: center;
            line-height: 55px;
            border-radius: 60px;
            font-weight: 500;
            margin-top: 10px;
        }

        .socail_icons li {
            float: left;
            margin-right: 15px;
        }

        ul.socail_icons_right li a {
            color: #6c6c6c;
            font-size: 19px;
            font-weight: 700;
            text-decoration: none;
        }

        ul.socail_icons_right li {
            padding-bottom: 6px;
        }

        ul.socail_icons_right li i {
            background: #6c6c6c;
            color: #fff;
            height: 30px;
            width: 30px;
            line-height: 30px;
            border-radius: 50px;
            text-align: center;
            margin-right: 10px;
            font-size: 15px;
        }

        .ccie_results i {
            text-align: center;
            color: #0d274df7 !important;
            font-size: 40px;
            background: #fff;
            height: 100px;
            width: 100px;
            line-height: 100px;
            border-radius: 100px;
        }

        .ccie_results {
            height: 205px;
        }

        .ccie_results p {
            padding-top: 13px;
            font-weight: 600 !important;
        }

        .test_section {
            background: #f3f3f3;
        }

        .offerhed {
            font-family: 'Poppins', sans-serif;
            font-weight: 800 !important;
            font-size: 36px;
        }

        section.about_awards h3 {
            line-height: 30px;
            text-align: center !important;
        }

        .tilloffer {
            color: #ca1f25;
            font-weight: 700 !important;
            font-size: 22px;
            padding: 40px 0px 10px;
        }

        .font-hed {
            font-family: 'Poppins', sans-serif !important;
            font-size: 20px !important;
            font-weight: 600 !important;
        }

        .pdd20 {
            padding-bottom: 20px;
        }

        .socail_icons li a i:hover {
            background: #6c6c6c;
            color: #fff;
            border: 2px solid #6c6c6c;
        }

        .pdd30 {
            padding-bottom: 30px;
            padding-top: 30px;
        }

        .content {
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
            margin-bottom: 0px !important;
            clear: both;
        }

        .trail-form .form {
            background: #ffffffab;
            display: block;
            padding: 20px;
            border-radius: 23px;
        }

        .trail-form h4 {
            font-size: 22px;
            font-weight: 600 !important;
            text-align: center;
            color: #000;
            font-family: 'Poppins', sans-serif;
        }

        .trail-form .form input.form-control {
            padding: 22px;
            border-radius: 16px;
            border: 0px;
            margin-bottom: 18px;
        }

        .trail-form .form .form-group.form-row button {
            background: #2e3092;
            border: 0;
            width: 100%;
            padding: 10px 10px 8px 10px;
            margin-top: 16px;
            color: #fff;
            border-radius: 16px;
            font-size: 20px;
            font-weight: 600;
        }

        .trail-form .form input#mobile-number3 {
            padding: 22px;
            border-radius: 16px;
            border: 0px;
            margin-bottom: 9px;
            background: #fff !important;
        }

        .video_section {
            padding: 50px 0px !important;
        }

        .advantage_sec {
            background-image: url(./images/advantage_banner.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            padding: 50px 0px;
        }

        .cciepassout {
            background-image: url(./images/advantage_banner.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            padding: 50px 0px;
        }

        .ccie_results img {
            width: 120px;
        }

        .passout_box img {
            width: 150px;
            border-radius: 5px;
            border: 1px solid #ffffff8c;
            background: #293e73;
            padding: 1px;
        }

        .passout_box h5 {
            color: #fff;
            font-size: 20px;
            padding-top: 15px;
            padding-bottom: 0;
            margin-bottom: 0;
        }

        .passout_box p {
            color: #fff;
            text-align: center;
        }

        .passout_box {
            padding-bottom: 20px;
            padding-top: 15px;
        }

        .intl-tel-input .flag-dropdown .selected-flag {
            margin: 1px;
            padding: 14px 16px 6px 6px;
        }

        .claim_banner {
            width: 100%;
            height: 600px;
            object-fit: cover;
        }

        .training_content p {
            font-size: 24px;
            color: #fff;
            font-weight: 700 !important;
            font-style: italic;
            line-height: 40px;
            text-shadow: -6px 0px 20px #000;
        }

        .training_content {
            padding-top: 100px;
        }

        .training_content h4 {
            color: #fff;
            font-size: 70px;
            font-weight: 700 !important;
            font-style: italic;
            letter-spacing: 4px;
            line-height: 76px;
            padding-top: 5px;
            font-family: 'Poppins', sans-serif !important;
        }

        .recieve_box {
            margin-bottom: 20px;
            display: inline-block;
        }

        .recieve_box img {
            width: 80px;
            float: left;
        }

        .recieve_box h5 {
            font-size: 24px;
            padding-top: 20px;
            padding-left: 21px;
            float: left;
            font-family: 'Poppins', sans-serif !important;
        }

        .mrg_16 {
            margin-left: 16%;
        }

        .ccnacourse_dt table.table {
            background: #ffffffab;
            border-radius: 10px;
            border: 0px !important;
        }

        .ccnacourse_dt table.table th {
            border: 0px !important;
            padding: 19px 20px !important;
            color: #000;
            font-weight: 600;
            font-size: 18px;
            font-family: 'Poppins', sans-serif !important;
            border-bottom: 1px solid #ffffff59 !important;
            border-right: 1px solid #ffffff59 !important;
        }

        .ccnacourse_dt table.table td {
            padding: 19px 20px !important;
            color: #000;
            font-weight: 500;
            font-size: 16px;
            font-family: 'Poppins', sans-serif !important;
            border-top: 0px solid #ffffff59 !important;
            border-right: 1px solid #ffffff59 !important;
        }

        .why_choose_sec th {
            padding: 19px 20px !important;
            font-family: 'Poppins', sans-serif !important;
            font-size: 18px;
            border: 1px solid #dddddd70;
            background: #fff;
        }

        .why_choose_sec td {
            padding: 10px 20px !important;
            font-family: 'Poppins', sans-serif !important;
            font-weight: 500;
            font-size: 14px;
            border: 1px solid #dddddd70;
            background: #fff;
        }

        .why_choose_sec table.table {
            border-radius: 20px !important;
            box-shadow: 2px 4px 7px 2px #dddddd94;
            width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .why_choose_sec th.bg_green {
            background: #56bc76;
            color: #fff;
        }

        .why_choose_sec th.blue_green {
            background: #4797d2;
            color: #fff;
            border-radius: 0px 20px 0px 0px;
            border: 0px;
        }

        .why_choose_sec th.bg_white {
            border-radius: 20px 0px 0px 0px;
            border: 0px;
            background: #fff;
        }

        .table>tbody>tr>td,
        .table>tbody>tr>th,
        .table>tfoot>tr>td,
        .table>tfoot>tr>th,
        .table>thead>tr>td,
        .table>thead>tr>th {
            border-top: 1px solid #dddddd70;
        }

        .why_choose_sec {
            padding-top: 15px;
            padding-bottom: 40px;
        }

        .ccnacourse_dt h4 {
            color: #fff;
            font-size: 28px;
            font-family: 'Poppins', sans-serif !important;
        }

        .ccnacourse_dt ul li {
            font-family: 'Poppins', sans-serif !important;
            color: #fff;
            line-height: 26px;
            padding-bottom: 6px;
            font-size: 16px;
        }

        .ccnacourse_dt ul {
            padding-top: 20px;
        }

        .paddtpbtm20 {
            padding-top: 46px !important;
        }

        .pre_reqisite_sec p {
            font-family: 'Poppins', sans-serif !important;
            font-weight: 500 !important;
            padding-top: 0;
        }

        .pre_reqisite_sec ul li {
            font-family: 'Poppins', sans-serif !important;
            font-weight: 500 !important;
            font-size: 16px;
            padding-bottom: 7px;
        }

        .pre_reqisite_sec ul {
            padding-top: 4px;
        }

        .pre_reqisite_sec h4 {
            font-size: 26px;
            font-weight: 600 !important;
            font-family: 'Poppins', sans-serif !important;
        }

        .rights_icons {
            width: 40px;
        }

        .coursebgg_section {
            padding-left: 15px;
            padding-right: 15px;
        }

        .enrollbttn {
            background: #2e3092;
            color: #fff !important;
            padding: 16px 60px 15px 60px;
            font-size: 26px;
            font-weight: 700;
            border-radius: 25px;
            padding-bottom: 13px;
            display: inline-block;
            margin-top: 25px;
            text-decoration: none !important;
            margin-bottom: 22px;
        }

        .table-responsive {
            min-height: .01%;
            overflow-x: clip;
        }

        .group_images_1 h4 {
            color: #f00;
            font-size: 26px;
            font-weight: 700 !important;
            font-family: 'Poppins', sans-serif !important;
            padding-top: 20px;
        }

        .group_images_1 img {
            width: 100px;
            padding: 10px;
        }

        .blink_me {
            animation: blinker 1.5s linear infinite;
        }

        .ccnacourse_dt p {
            font-family: 'Poppins', sans-serif !important;
            font-weight: 500 !important;
            font-size: 16px;
            padding-bottom: 7px;
            color: #fff;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }

        @media(max-width:767px) {
            .landing_logo {
                width: 167px !important;
                margin-bottom: 0px !important;
                padding: 10px 30px !important;
            }

            .group_images_1 img {
                width: 80px !important;
            }

            .group_images_1 h4 {
                color: #555;
                font-size: 20px;
                font-weight: 700 !important;
                font-family: 'Poppins', sans-serif !important;
                padding-top: 20px;
                line-height: 31px;
            }

            .table-responsive {
                min-height: .01%;
                overflow-x: auto;
            }

            .test_boxex p {
                color: #333;
                font-size: 18px !important;
                font-weight: 400 !important;
                text-align: center !important;
                line-height: 26px;
            }

            .claim_banner {
                width: 100%;
                height: auto;
                object-fit: cover;
            }

            .test_section {
                padding: 25px 0px;
            }

            .trail-form .form {
                padding: 15px 0px;
            }

            .ccnatraining_section {
                padding: 20px 0px 20px 0px;
            }

            .trail-form {
                height: auto;
                padding: 20px 0px;
            }

            .mrg_16 {
                margin-left: 0;
            }

            .recieve_box img {
                width: 60px;
                float: left;
            }

            .recieve_box {
                margin-bottom: 5px;
                display: inline-block;
            }

            .recieve_box h5 {
                font-size: 18px;
                padding-top: 11px;
                padding-left: 15px;
            }

            .socail_icons ul {
                padding: 0;
            }

            .font-hed {
                font-size: 20px;
                margin-top: 0px;
                line-height: initial;
            }

            .passout_box h5 {
                font-size: 18px;
                padding-top: 10px;
                padding-bottom: 0;
                margin-bottom: 0;
            }

            .passout_box p {
                color: #fff;
                text-align: center !important;
                font-size: 14px;
                padding: 0px;
                line-height: 21px;
            }

            .passout_box img {
                width: 100%;
            }

            section.copyright {
                padding: 20px 15px;
                text-align: center;
            }

            .socail_icons li a i:hover {
                border: 2px solid #6c6c6c;
            }

            .socail_icons li a i {
                font-size: 23px;
                border: 3px solid;
                height: 50px;
                width: 50px;
                line-height: 44px;
            }

            ul.socail_icons_right li {
                padding-bottom: 6px;
                display: inline-block;
            }

            ul.socail_icons_right {
                clear: both;
            }

            .socail_icons li {
                float: left;
                margin-right: 15px;
                display: contents;
            }

            .ccie_results {
                box-shadow: none;
                background: transparent;
                color: #58585b;
                padding: 6px 0px;
                border-radius: 10px;
                height: auto !important;
            }

            .ccie_results img {
                width: 90px;
            }

            .training_content p {
                font-size: 22px;
                line-height: 38px;
            }

            .training_content {
                padding-top: 0px;
            }

            .training_content h4 {
                font-size: 45px;
                line-height: 50px;
                padding-top: 0px;
                margin-top: 0;
                margin-bottom: 0;
            }

            .paddtpbtm20 {
                padding-top: 21px !important;
            }

            .pre_reqisite_sec {
                padding: 20px 0px;
            }

            .coursebgg_section {
                padding-bottom: 20px;
            }

            .ccnacourse_dt h4 {
                color: #fff;
                font-size: 24px;
                font-family: 'Poppins', sans-serif !important;
                line-height: 32px;
            }
        }

        p.paraheight {
            margin: 20px 0px;
        }
    </style>
    <div class="top_section"> <a href="https://octanetworks.com"><img class="landing_logo" src="https://octanetworks.com/img/logo.png"></a> </div>
	


	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		viewBox="0 0 750 500" style="enable-background:new 0 0 750 500;" xml:space="preserve">
		<style type="text/css">
			<!-- .st0 {
				fill: #3E1944;
			} -->
			.st0 {
				fill: #4484be;
			}
			.st1 {
				opacity: 0.6;
				fill: #FFFFFF;
			}

			.st2 {
				opacity: 0.5;
				fill: #FFFFFF;
			}

			.st3 {
				opacity: 0.4;
				fill: #FFFFFF;
			}

			.st4 {
				opacity: 0.3;
				fill: #FFFFFF;
			}

			.st5 {
				opacity: 0.2;
				fill: #FFFFFF;
			}

			.st6 {
				opacity: 0.1;
				fill: #FFFFFF;
			}

			.st7 {
				fill: #E2B117;
			}

			.st8 {
				fill: #FACF2B;
			}

			.st9 {
				opacity: 0.6;
				fill: url(#SVGID_1_);
			}

			.st10 {
				opacity: 0.6;
				fill: url(#SVGID_2_);
			}

			.st11 {
				opacity: 0.6;
				fill: url(#SVGID_3_);
			}

			.st12 {
				opacity: 0.6;
				fill: url(#SVGID_4_);
			}

			.st13 {
				opacity: 0.6;
				fill: url(#SVGID_5_);
			}

			.st14 {
				fill: #B136DF;
			}

			.st15 {
				fill: #8823B7;
			}

			.st16 {
				fill: #CC8BF7;
			}

			.st17 {
				opacity: 0.4;
				fill: #550E7A;
			}

			.st18 {
				fill: #BB5BEF;
			}

			.st19 {
				fill: #FFE088;
			}

			.st20 {
				fill: #AFAFAF;
			}

			.st21 {
				fill: #FCEE21;
			}

			.st22 {
				fill: #F15A24;
			}

			.st23 {
				opacity: 0.2;
				fill: #FACF2B;
			}

			.st24 {
				opacity: 0.3;
				fill: #FACF2B;
			}

			.st25 {
				opacity: 0.4;
				fill: #FACF2B;
			}

			.st26 {
				opacity: 0.5;
				fill: #FACF2B;
			}

			.st27 {
				fill: #05BBC8;
			}

			.st28 {
				fill: #02A4A8;
			}

			.st29 {
				fill: #4DF4F4;
			}

			.st30 {
				opacity: 0.4;
				fill: #015B5B;
			}

			.st31 {
				fill: #1DD7DB;
			}

			.st32 {
				fill: #BF333E;
			}

			.st33 {
				fill: #9E1E2E;
			}

			.st34 {
				fill: #E8546C;
			}

			.st35 {
				opacity: 0.2;
				fill: #630817;
			}

			.st36 {
				fill: #F97D94;
			}

			.st37 {
				font-family: 'GreatVibes-Regular';
			}

			.st38 {
				font-size: 187.5136px;
			}

			.st39 {
				font-family: 'Montserrat-Medium';
			}

			.st40 {
				font-size: 17.099px;
			}

			.st41 {
				letter-spacing: 3;
			}

			.st42 {
				font-family: 'Montserrat-Regular';
			}

			<!-- .st43 {
				font-size: 20.8561px;
			} -->
			.st43 {
				font-size: 15.8561px;
			}
			.st44 {
				opacity: 0.4;
			}

			.st45 {
				fill: #FFFFFF;
			}
		</style>
		<g id="Background">
			<g>
				<rect class="st0" width="750" height="500" />
				<g>
					<g>
						<rect class="st1" width="750" height="45.2" />
						<rect y="45.2" class="st2" width="750" height="45.2" />
						<rect y="90.4" class="st3" width="750" height="45.2" />
					</g>
					<g>
						<rect y="135.6" class="st4" width="750" height="45.2" />
						<rect y="180.8" class="st5" width="750" height="45.2" />
						<rect y="226" class="st6" width="750" height="45.2" />
					</g>
				</g>
			</g>
		</g>
		<g id="Objects">
			<g>
				<g>
					<g>
						<g>
							<g>
								<path class="st7" d="M91.1,168.5h1.1c0.8,6.9,0.7,11.9,3,12.3c0,0,0.1,0,0.2,0c0,0,0.1,0,0.1,0.1c0,0,0,0.1,0.1,0.1v7.5
							c0,0,0,0.1-0.1,0.1c0,0,0,0-0.1,0h0c-0.1,0-0.1,0-0.2,0c0,0,0,0,0,0c-2.9,0.6-3.3,8.9-3.3,19.1c0,0.1,0,0.2,0,0.3
							c0,0-0.1,0.1-0.2,0.1c-0.1,0-0.1,0-0.2-0.1c0-0.1,0-0.2,0-0.3c-0.1-10.2-0.4-18.5-3.3-19.1c-0.1,0-0.1,0-0.2,0
							c0,0,0,0-0.1-0.1c0,0,0,0,0-0.1V181c0,0,0-0.1,0-0.1c0,0,0.1-0.1,0.1-0.1c0.1,0,0.1,0,0.2,0C90.4,180.4,90.3,175.4,91.1,168.5
							z" />

								<rect x="74.2" y="152.5"
									transform="matrix(6.123234e-17 -1 1 6.123234e-17 -61.4102 244.8536)" class="st7"
									width="35" height="1.2" />
								<g>
									<path class="st7" d="M93,167.3v0.5c0,0.4-0.3,0.7-0.7,0.7h-1.2c-0.4,0-0.7-0.3-0.7-0.7v-0.5c0-0.4,0.3-0.7,0.7-0.7h1.2
								C92.7,166.6,93,166.9,93,167.3z" />
									<path class="st7" d="M93,165v0.5c0,0.4-0.3,0.7-0.7,0.7h-1.2c-0.4,0-0.7-0.3-0.7-0.7V165c0-0.4,0.3-0.7,0.7-0.7h1.2
								C92.7,164.3,93,164.6,93,165z" />
								</g>
							</g>
							<g>
								<path class="st7"
									d="M91.1,102.8h1.1c0.8-6.9,0.7-11.9,3-12.3c0,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0-0.1,0.1-0.1v-7.5
							c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0h0c-0.1,0-0.1,0-0.2,0c0,0,0,0,0,0C92.3,82,92,46.9,91.9,36.7c0-0.1,0-0.2,0-0.3
							c0,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0.1c0,0.1,0,0.2,0,0.3c-0.1,10.2-0.4,45.3-3.3,45.9c-0.1,0-0.1,0-0.2,0
							c0,0,0,0-0.1,0.1c0,0,0,0,0,0.1v7.5c0,0,0,0.1,0,0.1c0,0,0.1,0.1,0.1,0.1c0.1,0,0.1,0,0.2,0C90.4,90.8,90.3,95.8,91.1,102.8z" />

								<rect x="74.2" y="117.5"
									transform="matrix(-1.836970e-16 1 -1 -1.836970e-16 209.8352 26.3918)" class="st7"
									width="35" height="1.2" />
								<g>
									<path class="st7" d="M93,104v-0.5c0-0.4-0.3-0.7-0.7-0.7h-1.2c-0.4,0-0.7,0.3-0.7,0.7v0.5c0,0.4,0.3,0.7,0.7,0.7h1.2
								C92.7,104.7,93,104.4,93,104z" />
									<path class="st7" d="M93,106.2v-0.5c0-0.4-0.3-0.7-0.7-0.7h-1.2c-0.4,0-0.7,0.3-0.7,0.7v0.5c0,0.4,0.3,0.7,0.7,0.7h1.2
								C92.7,106.9,93,106.6,93,106.2z" />
								</g>
							</g>
							<g>
								<g>
									<path class="st8" d="M89.9,131.4c0,1,0.8,1.8,1.8,1.8c1,0,1.8-0.8,1.8-1.8s-0.8-1.8-1.8-1.8
								C90.7,129.5,89.9,130.4,89.9,131.4z" />
									<path class="st8" d="M89.9,141.9c0,1,0.8,1.8,1.8,1.8c1,0,1.8-0.8,1.8-1.8c0-1-0.8-1.8-1.8-1.8
								C90.7,140.1,89.9,140.9,89.9,141.9z" />
								</g>
								<path class="st8" d="M89.2,136.7c0,1.4,1.1,2.5,2.5,2.5c1.4,0,2.5-1.1,2.5-2.5c0-1.4-1.1-2.5-2.5-2.5
							C90.3,134.2,89.2,135.3,89.2,136.7z" />
							</g>
						</g>
						<rect x="91.2" y="192.5" class="st7" width="1" height="46.8" />
						<rect x="91.2" y="0" class="st7" width="1" height="59.7" />
					</g>
					<g>
						<g>
							<path class="st8"
								d="M89.9,28.7c0,1,0.8,1.8,1.8,1.8c1,0,1.8-0.8,1.8-1.8c0-1-0.8-1.8-1.8-1.8C90.7,26.9,89.9,27.7,89.9,28.7z" />
							<path class="st8"
								d="M89.9,39.2c0,1,0.8,1.8,1.8,1.8c1,0,1.8-0.8,1.8-1.8s-0.8-1.8-1.8-1.8C90.7,37.4,89.9,38.2,89.9,39.2z" />
						</g>
						<path class="st8"
							d="M89.2,34c0,1.4,1.1,2.5,2.5,2.5c1.4,0,2.5-1.1,2.5-2.5s-1.1-2.5-2.5-2.5C90.3,31.5,89.2,32.7,89.2,34z" />
					</g>
					<g>
						<g>
							<path class="st8" d="M89.9,211.4c0,1,0.8,1.8,1.8,1.8c1,0,1.8-0.8,1.8-1.8c0-1-0.8-1.8-1.8-1.8
						C90.7,209.6,89.9,210.4,89.9,211.4z" />
							<path class="st8"
								d="M89.9,222c0,1,0.8,1.8,1.8,1.8c1,0,1.8-0.8,1.8-1.8c0-1-0.8-1.8-1.8-1.8C90.7,220.1,89.9,221,89.9,222z" />
						</g>
						<path class="st8" d="M89.2,216.8c0,1.4,1.1,2.5,2.5,2.5c1.4,0,2.5-1.1,2.5-2.5c0-1.4-1.1-2.5-2.5-2.5
					C90.3,214.3,89.2,215.4,89.2,216.8z" />
					</g>
				</g>
				<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="92.3039" y1="314.8599" x2="92.3039"
					y2="463.4828">
					<stop offset="0" style="stop-color:#000000" />
					<stop offset="0.6544" style="stop-color:#000000;stop-opacity:0" />
				</linearGradient>
				<polygon class="st9" points="166.6,464.4 18,464.4 34.8,314.9 148.8,315.4 		" />
				<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="208.6253" y1="181.9521" x2="208.6253"
					y2="330.575">
					<stop offset="0" style="stop-color:#000000" />
					<stop offset="0.6544" style="stop-color:#000000;stop-opacity:0" />
				</linearGradient>
				<polygon class="st10" points="282.9,331.5 134.3,331.5 151.1,182 265.1,182.5 		" />

				<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="-356.5107" y1="314.8599" x2="-356.5107"
					y2="463.4828" gradientTransform="matrix(-1 0 0 1 300.9293 0)">
					<stop offset="0" style="stop-color:#000000" />
					<stop offset="0.6544" style="stop-color:#000000;stop-opacity:0" />
				</linearGradient>
				<polygon class="st11" points="583.1,464.4 731.8,464.4 715,314.9 600.9,315.4 		" />

				<linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="-240.1894" y1="181.9521" x2="-240.1894"
					y2="330.575" gradientTransform="matrix(-1 0 0 1 300.9293 0)">
					<stop offset="0" style="stop-color:#000000" />
					<stop offset="0.6544" style="stop-color:#000000;stop-opacity:0" />
				</linearGradient>
				<polygon class="st12" points="466.8,331.5 615.4,331.5 598.7,182 484.6,182.5 		" />
				<linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="375.4166" y1="124.3162" x2="375.4166"
					y2="272.9391">
					<stop offset="0" style="stop-color:#000000" />
					<stop offset="0.6544" style="stop-color:#000000;stop-opacity:0" />
				</linearGradient>
				<polygon class="st13" points="449.7,273.9 301.1,273.9 317.9,124.3 431.9,124.9 		" />
				<g>
					<g>
						<g>
							<polygon class="st7" points="95.1,256.1 91.9,250.5 93.9,246.9 91.8,243.2 89.6,246.9 91.7,250.5 88.4,256.1 91.7,261.8 
						89.6,265.3 91.8,269 93.9,265.3 91.9,261.8 					" />
							<g>
								<polygon class="st7" points="96,374.4 91.9,367.2 94.5,362.7 91.8,358 89,362.7 91.7,367.2 87.5,374.4 91.7,381.5 89,386 
							91.8,390.8 94.5,386 91.9,381.5 						" />
								<polygon class="st7" points="85.9,368 87.3,362.5 90.8,361.6 91.8,358 88.2,358.9 87.3,362.4 81.8,363.9 80.3,369.3 
							76.9,370.3 75.9,373.9 79.5,372.9 80.4,369.4 						" />
								<polygon class="st7" points="97.6,368 96.2,362.5 92.7,361.6 91.7,358 95.3,358.9 96.2,362.4 101.7,363.9 103.2,369.3 
							106.7,370.3 107.6,373.9 104,372.9 103.1,369.4 						" />
							</g>
						</g>
						<g>
							<g>
								<g class="design">
									<path class="st14" d="M148.8,315.4c0,0.3,0,0.6,0,0.9v0c0,0.9-0.1,1.8-0.2,2.6c0,0,0,0,0,0c-0.3,2.6-0.8,5-1.7,7.4
								c-0.1,0.2-0.1,0.3-0.2,0.5c0,0.1-0.1,0.1-0.1,0.2c-0.1,0.2-0.1,0.3-0.2,0.5c-1.4,3.5-3.4,6.9-5.8,10c-2.4,3-5.3,5.8-8.5,8.2
								c0,0,0,0,0,0c-2.2,1.6-4.5,3.1-7,4.5c-0.3,0.2-0.6,0.3-0.9,0.5c-0.2,0.1-0.5,0.2-0.7,0.4c-0.2,0.1-0.4,0.2-0.7,0.3
								c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.4,0.2-0.7,0.3c-8.5,3.8-18.5,6-29.1,6c-10.6,0-20.5-2.2-29-6c-0.2-0.1-0.4-0.2-0.7-0.3
								c-0.5-0.2-0.9-0.4-1.4-0.7c-0.2-0.1-0.5-0.2-0.7-0.3c-11-5.5-19.3-13.9-23.1-23.7c-0.1-0.2-0.1-0.3-0.2-0.5
								c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.1-0.3-0.2-0.5c-1.2-3.5-1.9-7.2-1.9-11c0-0.4,0.1-0.9,0.4-1.3c0.1-0.3,0.3-0.5,0.5-0.8
								c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c5.3-4.7,28.3-8.2,55.8-8.2c10.4,0,20.1,0.5,28.5,1.4
								c14.1,1.5,24.4,4,27.5,7c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.8C148.7,314.5,148.8,315,148.8,315.4z" />
									<g>
										<g>
											<path class="st15" d="M75.6,334.2c-0.2-0.1-2.8-1.1-6.7-2.3c-1-0.3-2.1-0.6-3.3-1c-1.2-0.3-2.4-0.7-3.7-1
										c-1.3-0.3-2.6-0.6-4-0.9c-1.4-0.3-2.7-0.6-4.1-0.8c-1.4-0.2-2.8-0.4-4.2-0.6c-1.4-0.1-2.7-0.3-4.1-0.3c-0.3,0-0.7,0-1,0
										c-0.3,0-0.6,0-1,0c-0.3,0-0.6,0-0.9,0c-0.3,0-0.6,0-0.9,0c-0.6,0-1.2,0-1.8,0.1c-0.6,0-1.1,0-1.6,0.1
										c-0.5,0.1-1,0.1-1.4,0.1c-0.1-0.2-0.1-0.3-0.2-0.5c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0,0c0.5-0.1,1-0.2,1.5-0.3
										c0.5-0.1,1.1-0.2,1.7-0.3c0.6-0.1,1.2-0.1,1.8-0.2c0.3,0,0.6-0.1,0.9-0.1c0.3,0,0.6,0,1,0c0.6,0,1.3,0,2,0
										c0.7,0,1.4,0,2.1,0.1c0.7,0,1.4,0.1,2.1,0.1c1.4,0.1,2.8,0.3,4.3,0.5c1.4,0.3,2.8,0.5,4.2,0.9c1.4,0.3,2.7,0.7,4,1.1
										c1.3,0.4,2.5,0.8,3.7,1.2c1.2,0.4,2.2,0.8,3.2,1.3c2,0.8,3.6,1.6,4.7,2.2C74.9,333.8,75.5,334.2,75.6,334.2z" />
											<path class="st15" d="M146.7,326.8c-0.5-0.1-1-0.2-1.5-0.3c-0.5-0.1-1.1-0.2-1.7-0.3c-0.6-0.1-1.2-0.1-1.8-0.2
										c-0.3,0-0.6-0.1-0.9-0.1c-0.3,0-0.6,0-1,0c-0.7,0-1.3,0-2,0c-0.7,0-1.4,0-2.1,0.1c-0.7,0-1.4,0.1-2.1,0.1
										c-1.4,0.1-2.8,0.3-4.3,0.5c-1.4,0.3-2.8,0.5-4.2,0.9c-1.4,0.3-2.7,0.7-4,1.1c-1.3,0.4-2.5,0.8-3.7,1.2
										c-1.2,0.4-2.2,0.8-3.2,1.3c-2,0.8-3.6,1.6-4.7,2.2c-0.6,0.3-1,0.6-1.3,0.7c-0.2-0.6-0.6-1.1-0.9-1.6
										c0.2-1.2,0.3-2.2,0.2-3.1c0-1.2-0.2-2.4-0.6-3.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.2-0.4-0.3-0.5
										c-0.3-0.5-0.6-1-0.9-1.3c-0.7-0.8-1.5-1.5-2.4-2c-0.8-0.5-1.7-0.9-2.7-1.2c-0.2-0.1-0.5-0.1-0.7-0.2l-0.1,0
										c-0.2-0.1-0.4-0.1-0.6-0.2c-0.3-0.1-0.6-0.1-1-0.2l-0.4-0.1c-0.9-0.2-1.8-0.3-2.7-0.7c-0.4-0.2-0.8-0.4-1.2-0.7
										c-0.3-0.2-0.6-0.5-1-1l-0.2-0.2l-0.7,0l-0.2,0.2c-0.3,0.4-0.6,0.7-1,1c-0.4,0.3-0.8,0.5-1.2,0.7c-0.8,0.3-1.6,0.5-2.7,0.7
										c-0.1,0-0.3,0.1-0.4,0.1c-0.3,0.1-0.6,0.1-1,0.2c-0.5,0.1-1,0.2-1.4,0.4c-1,0.3-1.9,0.7-2.7,1.2c-0.9,0.5-1.7,1.2-2.4,2
										c-0.4,0.5-0.7,0.9-1,1.3c-0.3,0.5-0.5,1-0.7,1.5c-0.4,1-0.6,2.2-0.6,3.4c0,0.9,0.1,1.9,0.2,3.1c-0.6,0.8-1.1,1.8-1.3,2.9
										c-0.2,0.7-0.2,1.4-0.2,2c0,0.7,0.1,1.3,0.3,2c0.3,1,0.7,2,1.4,3c0,0,0,0,0,0c-0.2,0.2-0.4,0.5-0.7,0.8
										c-0.2,0.2-0.3,0.4-0.5,0.6c-0.2,0.2-0.4,0.4-0.7,0.6c-0.2,0.2-0.5,0.4-0.8,0.7c-0.3,0.2-0.6,0.5-0.9,0.7
										c-0.3,0.2-0.7,0.5-1,0.7c-0.4,0.2-0.7,0.5-1.1,0.7c-0.2,0.1-0.4,0.3-0.6,0.4c-0.2,0.1-0.4,0.2-0.6,0.3
										c-0.4,0.2-0.8,0.5-1.3,0.7c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.5,0.2-0.7,0.3c-0.2,0.1-0.5,0.2-0.7,0.3
										c-0.5,0.2-1,0.4-1.5,0.6c-0.5,0.2-1,0.3-1.5,0.5c-0.5,0.2-1,0.3-1.5,0.5c-0.2,0-0.3,0.1-0.5,0.1c0.5,0.2,0.9,0.4,1.4,0.7
										c0.2,0.1,0.4,0.2,0.7,0.3c0.1,0,0.3-0.1,0.4-0.1c0.5-0.2,1-0.3,1.6-0.5c0.5-0.2,1-0.4,1.5-0.6c0.2-0.1,0.5-0.2,0.7-0.3
										c0.2-0.1,0.5-0.3,0.7-0.4c0.5-0.2,0.9-0.5,1.4-0.7c0.4-0.3,0.9-0.5,1.3-0.8c0.2-0.1,0.4-0.3,0.6-0.4
										c0.2-0.1,0.4-0.3,0.6-0.4c0.4-0.3,0.7-0.6,1.1-0.8c0.3-0.3,0.6-0.6,1-0.9c0.3-0.3,0.6-0.6,0.8-0.8c0.3-0.3,0.5-0.5,0.7-0.8
										c0.2-0.3,0.4-0.5,0.6-0.7c0.2-0.2,0.3-0.5,0.4-0.7c0.3-0.4,0.4-0.7,0.5-1c0.1,0.1,0.2,0.2,0.2,0.4c0.7,0.9,1.5,1.8,2.4,2.6
										c0.8,0.6,1.7,1.3,2.7,2c0.3,0.2,0.7,0.5,1.1,0.7c0.6,0.4,1.1,0.8,1.7,1.2c0.8,0.6,1.7,1.3,2.6,2c0.9,0.8,1.6,1.6,2.3,2.5
										c0.6,0.9,1.2,1.9,1.6,3l0.6,1.2l0.6-1.2c0.4-1.1,1-2.1,1.7-3c0.6-0.8,1.4-1.6,2.3-2.5c0.9-0.8,1.8-1.4,2.6-2
										c0.5-0.4,1-0.7,1.6-1.1c0.4-0.3,0.8-0.5,1.2-0.8c1.1-0.7,1.9-1.4,2.7-2c1-0.8,1.8-1.7,2.5-2.6c0,0,0.1-0.1,0.1-0.1
										c0.1,0.2,0.2,0.5,0.4,0.7c0.1,0.2,0.3,0.4,0.4,0.7c0.2,0.2,0.4,0.5,0.6,0.7c0.2,0.3,0.5,0.5,0.7,0.8
										c0.3,0.3,0.5,0.6,0.8,0.8c0.3,0.3,0.6,0.6,1,0.9c0.3,0.3,0.7,0.6,1.1,0.8c0.2,0.1,0.4,0.3,0.6,0.4c0.2,0.1,0.4,0.3,0.6,0.4
										c0.4,0.3,0.8,0.5,1.3,0.8c0.5,0.2,0.9,0.5,1.4,0.7c0.2,0.1,0.5,0.2,0.7,0.4c0.2,0.1,0.5,0.2,0.7,0.3c0.5,0.2,1,0.4,1.5,0.6
										c0.5,0.2,1,0.4,1.6,0.5c0.1,0,0.2,0.1,0.3,0.1c0.2-0.1,0.4-0.2,0.7-0.3c0.5-0.2,0.9-0.4,1.4-0.6c-0.1,0-0.2-0.1-0.4-0.1
										c-0.5-0.2-1-0.3-1.5-0.5c-0.5-0.2-1-0.3-1.5-0.5c-0.5-0.2-1-0.4-1.5-0.6c-0.2-0.1-0.5-0.2-0.7-0.3
										c-0.2-0.1-0.5-0.2-0.7-0.3c-0.5-0.2-0.9-0.4-1.4-0.6c-0.4-0.2-0.9-0.5-1.3-0.7c-0.2-0.1-0.4-0.2-0.6-0.3
										c-0.2-0.1-0.4-0.2-0.6-0.4c-0.4-0.2-0.8-0.5-1.1-0.7c-0.3-0.3-0.7-0.5-1-0.7c-0.3-0.2-0.6-0.5-0.9-0.7
										c-0.3-0.2-0.6-0.4-0.8-0.7c-0.2-0.2-0.5-0.4-0.7-0.6c-0.2-0.2-0.4-0.4-0.5-0.6c-0.2-0.3-0.4-0.5-0.6-0.7
										c0.7-1,1.2-2.1,1.5-3.2c0.2-0.7,0.3-1.3,0.3-2c0-0.2,0-0.6,0-1c0-0.3-0.1-0.6-0.2-1c-0.1-0.4-0.2-0.8-0.4-1.2
										c0.9-0.3,3.2-1.2,6.3-2.2c1-0.3,2.1-0.6,3.3-1c1.2-0.3,2.4-0.7,3.7-1c1.3-0.3,2.6-0.6,4-0.9c1.4-0.3,2.7-0.6,4.1-0.8
										c1.4-0.2,2.8-0.4,4.2-0.6c1.4-0.1,2.7-0.3,4.1-0.3c0.3,0,0.7,0,1,0c0.3,0,0.6,0,1,0c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,0.9,0
										c0.6,0,1.2,0,1.8,0.1c0.6,0,1.1,0,1.6,0.1c0.5,0.1,1,0.1,1.4,0.1c0.1-0.2,0.1-0.3,0.2-0.5
										C146.7,327,146.7,326.9,146.7,326.8C146.8,326.8,146.7,326.8,146.7,326.8z M107.7,339c-0.3,1-0.8,2.1-1.5,3.1
										c-0.6,0.9-1.4,1.7-2.3,2.4c-0.7,0.6-1.6,1.2-2.7,2c-0.4,0.2-0.7,0.5-1.1,0.7c-0.6,0.4-1.1,0.8-1.7,1.1
										c-0.9,0.6-1.8,1.3-2.7,2.1c-1,0.9-1.7,1.7-2.4,2.6c-0.1,0.1-0.2,0.3-0.3,0.5c0,0.1-0.1,0.1-0.1,0.2
										c-0.1,0.2-0.3,0.4-0.4,0.7c-0.1,0.3-0.3,0.5-0.4,0.8c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0.1-0.3c0-0.1,0-0.3,0-0.4v-0.1
										c0-0.5,0-1,0.1-1.5c0-0.6,0-1.3,0.1-1.9v0c0.4,0,0.7,0,0.9,0c0.4,0,0.8-0.1,1.1-0.2c0.7-0.1,1.1-0.3,1.1-0.3l0.3-0.1
										l-0.3-0.1c0,0-0.5-0.2-1.1-0.3c-0.3-0.1-0.7-0.1-1.1-0.1c-0.3,0-0.6,0-0.9-0.1v-0.1c0.5,0,1-0.1,1.4-0.2
										c0.5-0.1,0.8-0.3,0.8-0.3l0.2-0.1l-0.2-0.1c0,0-0.3-0.2-0.8-0.3c-0.3-0.1-0.8-0.2-1.3-0.2c0.3,0,0.6-0.1,0.8-0.2
										c0.3-0.1,0.6-0.3,0.6-0.3l0.1-0.1l-0.1-0.1c0,0-0.2-0.2-0.6-0.3c-0.2-0.1-0.5-0.2-0.8-0.2l0-2.6c0-1,0-2.1,0-3.2
										c0-0.5,0-1,0-1.5c0.1,0.3,0.2,0.6,0.3,1c0.2,0.6,0.4,1.3,0.7,2c0.4,0.8,0.8,1.5,1.3,2c0.6,0.6,1.3,1,2.1,1.2
										c0.9,0.2,1.8,0.1,2.5-0.4c0.8-0.5,1.2-1.5,1.3-2.6c0.1-1-0.3-1.9-1-2.6c-0.6-0.6-1.2-0.9-1.9-0.9c-0.1,0-0.2,0-0.3,0
										c-0.4,0.1-0.8,0.3-1,0.5c-0.3,0.3-0.5,0.7-0.6,1c-0.1,0.4-0.1,0.8-0.1,1.1c0,0.1,0,0.2,0.1,0.2c0,0.1,0,0.1,0.1,0.2l0,0.1
										c0.1,0.2,0.2,0.3,0.3,0.4c0.2,0.2,0.5,0.3,0.7,0.3c0.2,0,0.4,0,0.6-0.2c0.4-0.2,0.5-0.5,0.6-0.7c0.1-0.2,0.1-0.3,0.1-0.3
										l0.1-1l-0.4,1c0,0,0,0.1-0.1,0.2c0,0.1-0.2,0.3-0.5,0.4c-0.3,0.1-0.6,0-0.8-0.2c-0.2-0.3-0.3-0.8-0.1-1.3
										c0.2-0.5,0.6-0.9,1-0.9c0,0,0.1,0,0.1,0c0.4,0,0.9,0.3,1.4,0.7c0.2,0.2,0.4,0.5,0.5,0.8c0,0.1,0,0.1,0,0.1l0,0.1
										c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0,0.3,0,0.5c0,0.3-0.1,0.7-0.2,1c0,0.1-0.1,0.1-0.1,0.2l-0.1,0.2l-0.2,0.2
										c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0-0.1,0.1c-0.4,0.3-1.1,0.4-1.7,0.3c-0.6-0.1-1.2-0.4-1.7-0.9c-0.4-0.4-0.8-1-1.2-1.6
										c-0.3-0.6-0.6-1.3-0.8-1.8c-0.4-1.1-0.7-2.1-0.9-2.7c0-0.3,0-0.6,0-0.9c0-0.3,0-0.6,0-0.8l0.1-0.1c0.4-0.4,0.8-0.9,1.3-1.6
										c0.3-0.4,0.5-0.9,0.7-1.3c0.2-0.6,0.4-1.1,0.4-1.7c0.1-0.6,0-1.3-0.1-1.9c-0.1-0.6-0.3-1.1-0.5-1.6l-0.1-0.2
										c-0.2-0.5-0.4-1-0.5-1.6c-0.1-0.3-0.1-0.5-0.1-0.7c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.2v-0.1c0-0.1,0-0.1,0-0.2
										c0-0.5,0.1-0.9,0.3-1.3c0.2-0.4,0.4-0.7,0.6-1c0.2-0.3,0.5-0.5,0.8-0.7c0.2-0.1,0.5-0.3,0.7-0.3c0.1,0,0.2-0.1,0.3-0.1
										c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.2,0l1-0.2l-1.1-0.1c0,0-0.1,0-0.2,0c-0.1,0-0.3,0-0.5,0c-0.3,0-0.6,0.1-0.8,0.2
										c-0.3,0.1-0.7,0.3-1,0.6c-0.4,0.3-0.7,0.7-0.9,1.2c-0.3,0.5-0.5,1.1-0.5,1.7c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3
										c0,0.1,0,0.1,0,0.2c0,0.4,0.1,0.7,0.1,1c0.1,0.6,0.4,1.2,0.5,1.7l0.1,0.2c0.2,0.5,0.4,1,0.5,1.4c0.1,0.5,0.2,1,0.1,1.5
										c0,0.5-0.1,0.9-0.3,1.4c-0.1,0.4-0.3,0.8-0.5,1.2c-0.3,0.6-0.6,1.1-0.8,1.4v-0.3c0-0.2,0-0.5,0-0.7c0-0.7,0-1.5,0-2.2
										c0-0.4,0-0.8,0-1.2c0-2.2-0.1-4.2-0.1-6c0-1.2-0.1-2.2-0.1-3c0-0.4,0-0.9,0-1.2c0-1-0.1-1.6-0.1-1.6h-0.2
										c0,0,0,0.6-0.1,1.6c0,0.4,0,0.8,0,1.3c0,0.8-0.1,1.8-0.1,3c-0.1,1.9-0.1,4-0.1,6c0,0.4,0,0.8,0,1.2c0,0.7,0,1.4,0,2.2
										c0,0.3,0,0.7,0,1c-0.2-0.4-0.5-0.9-0.8-1.4c-0.2-0.4-0.4-0.8-0.5-1.2c-0.2-0.5-0.3-1-0.3-1.4c0-0.5,0-1,0.1-1.5
										c0.1-0.5,0.3-0.9,0.5-1.4l0.1-0.2c0.2-0.5,0.4-1.1,0.5-1.7c0.1-0.3,0.1-0.6,0.1-1c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3
										c0-0.2,0-0.3,0-0.5c-0.1-0.6-0.2-1.2-0.5-1.7c-0.2-0.4-0.5-0.8-0.9-1.2c-0.3-0.3-0.7-0.5-1-0.6c-0.3-0.1-0.5-0.2-0.8-0.2
										c-0.2,0-0.4,0-0.5,0c-0.1,0-0.2,0-0.2,0l-1.1,0.1l1,0.2c0,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0.1,0.3,0.1
										c0.2,0.1,0.4,0.2,0.7,0.3c0.2,0.2,0.5,0.4,0.7,0.7c0.3,0.3,0.5,0.7,0.6,1c0.2,0.4,0.3,0.9,0.3,1.3c0,0.1,0,0.1,0,0.2v0.1
										c0,0.1,0,0.2,0,0.2c0,0.1,0,0.1,0,0.2c0,0.2-0.1,0.5-0.1,0.7c-0.1,0.5-0.3,1.1-0.5,1.6l-0.1,0.2c-0.2,0.5-0.4,1-0.5,1.6
										c-0.1,0.6-0.2,1.3-0.1,1.9c0.1,0.7,0.3,1.3,0.4,1.7c0.2,0.4,0.4,0.9,0.7,1.3c0.5,0.7,0.9,1.2,1.3,1.6c0,0,0.1,0.1,0.1,0.1
										c0,0.6,0,1.2,0,1.8c-0.3,0.9-0.6,1.8-0.9,2.7c-0.2,0.6-0.5,1.2-0.8,1.8c-0.3,0.7-0.7,1.2-1.2,1.6c-0.4,0.4-1,0.7-1.7,0.9
										c-0.6,0.1-1.3,0-1.7-0.3c0,0,0,0-0.1-0.1c0,0-0.1,0-0.1-0.1l-0.2-0.3l0-0.1c0-0.1-0.1-0.1-0.1-0.2l0,0
										c-0.1-0.3-0.2-0.6-0.2-1c0-0.2,0-0.4,0-0.5c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
										c0.1-0.3,0.3-0.6,0.5-0.8c0.5-0.5,1-0.7,1.4-0.7c0.5,0,0.8,0.4,1,0.9c0.2,0.5,0.1,1-0.1,1.3c-0.2,0.2-0.4,0.3-0.5,0.3
										c-0.1,0-0.2,0-0.3-0.1c-0.3-0.1-0.5-0.4-0.5-0.4c-0.1-0.1-0.1-0.2-0.1-0.2l-0.4-1l0.1,1.1c0,0,0,0.1,0.1,0.3
										c0.1,0.2,0.3,0.5,0.6,0.7c0.2,0.1,0.4,0.2,0.6,0.2c0.3,0,0.5-0.1,0.7-0.4c0.1-0.1,0.2-0.2,0.3-0.4c0-0.1,0.1-0.2,0.1-0.2
										l0,0c0-0.1,0-0.2,0.1-0.2c0.1-0.3,0-0.7-0.1-1.1c-0.1-0.3-0.2-0.7-0.6-1c-0.3-0.3-0.6-0.5-1-0.5c-0.7-0.1-1.5,0.2-2.1,0.8
										c-0.7,0.7-1.1,1.7-1,2.6c0,1.1,0.5,2.1,1.3,2.6c0.7,0.5,1.5,0.6,2.5,0.4c0.8-0.2,1.5-0.6,2.1-1.2c0.5-0.5,0.9-1.2,1.3-2
										c0.3-0.7,0.5-1.4,0.7-2c0.1-0.3,0.2-0.6,0.3-1v0.2c0,0.4,0,0.9,0,1.3c0,0.6,0,1.2,0,1.8l0,1.6c0,0.8,0,1.6,0,2.4
										c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.6,0.3-0.6,0.3l-0.1,0.1l0.1,0.1c0,0,0.2,0.2,0.6,0.3c0.2,0.1,0.5,0.2,0.8,0.2
										c-0.5,0-1,0.1-1.3,0.2c-0.5,0.1-0.8,0.3-0.8,0.3l-0.2,0.1l0.2,0.1c0,0,0.3,0.2,0.8,0.3c0.4,0.1,0.9,0.2,1.4,0.2v0.1
										c-0.3,0-0.6,0-0.9,0.1c-0.4,0-0.8,0.1-1.1,0.1c-0.7,0.1-1.1,0.3-1.1,0.3l-0.3,0.1l0.3,0.1c0,0,0.5,0.2,1.1,0.3
										c0.3,0.1,0.7,0.1,1.1,0.1c0.3,0,0.6,0,0.9,0.1v0c0,1,0.1,2.1,0.1,3.2l0,0.6c0,0.1,0,0.2,0,0.3c0,0.1,0,0.3,0,0.4
										c-0.4-0.8-0.8-1.6-1.3-2.2c-0.7-0.9-1.5-1.8-2.4-2.6c-0.9-0.8-1.8-1.5-2.7-2.1c-0.5-0.4-1-0.7-1.6-1.1
										c-0.4-0.3-0.8-0.5-1.2-0.8c-1.1-0.7-1.9-1.3-2.6-2c-0.9-0.7-1.7-1.5-2.3-2.4c-0.7-1-1.2-2-1.5-3.1
										c-0.2-0.6-0.2-1.1-0.3-1.7c0-0.6,0-1.2,0.2-1.7c0.3-1.2,0.8-2.2,1.5-3c0.7-0.8,1.6-1.3,2.6-1.5c1-0.2,2.1-0.1,2.9,0.3
										c0.4,0.2,0.8,0.5,1.3,0.9c0.3,0.4,0.6,0.8,0.9,1.4c0.4,1.1,0.4,2.3,0,3.4c-0.4,1.1-1.2,1.9-2.2,2.2c-0.3,0.1-0.7,0.2-1,0.2
										c-0.5,0-1.2-0.1-1.8-0.7c-0.4-0.4-0.6-0.9-0.6-1.5c0-0.6,0.2-1.2,0.5-1.6l-0.2-0.2c-0.4,0.5-0.6,1.1-0.6,1.8
										c0,0.7,0.3,1.3,0.7,1.8c0.5,0.6,1.3,0.9,2.1,0.9c0.4,0,0.7-0.1,1-0.2c0.6-0.2,1.1-0.5,1.5-0.9c0.2-0.2,0.5-0.6,0.7-0.9
										l0.1-0.1c0.3-0.3,0.5-0.8,0.8-1.3c0.2-0.5,0.5-1.1,0.8-1.8c0.3-0.7,0.6-1.5,0.8-2.2c0.2-0.9,0.5-1.7,0.6-2.6
										c0.2-1.2,0.2-2.1,0-3c-0.1-0.5-0.2-1.1-0.4-1.5c-0.2-0.5-0.5-1-0.9-1.3c-0.7-0.8-1.8-1.1-2.7-0.9c-0.5,0.1-1,0.4-1.3,0.7
										c-0.4,0.3-0.7,0.8-0.9,1.2c-0.2,0.5-0.3,1-0.3,1.6c0,0.5,0.1,1,0.4,1.5c0.5,1,1.3,1.4,2.1,1.2c0.6-0.2,1.1-0.8,1.4-1.6
										c0.1-0.3,0.1-0.7,0-1c-0.1-0.2-0.1-0.3-0.2-0.4c-0.1-0.1-0.1-0.2-0.2-0.2l0,0c-0.3-0.2-0.6-0.3-0.9-0.2
										c-0.2,0-0.3,0.1-0.3,0.1l-0.8,0.6l0.9-0.4c0,0,0.1,0,0.2,0c0,0,0,0,0.1,0c0.1,0,0.4,0,0.6,0.3l0,0c0.1,0.1,0.1,0.1,0.1,0.2
										c0.1,0.1,0.1,0.2,0.1,0.3c0,0.2,0,0.4-0.1,0.7c-0.2,0.4-0.6,0.9-1,1c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0
										c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0l-0.1,0c0,0-0.1,0-0.1-0.1c-0.2-0.2-0.4-0.4-0.6-0.7
										c-0.1-0.3-0.2-0.7-0.2-1c0-0.4,0.1-0.7,0.3-1c0.2-0.3,0.4-0.6,0.6-0.8c0.3-0.2,0.6-0.4,0.9-0.5c0.6-0.1,1.3,0.1,1.8,0.6
										c0.5,0.5,0.9,1.3,1,2.2c0.1,0.8,0.1,1.7,0,2.7c-0.1,0.9-0.3,1.8-0.5,2.5c-0.2,0.9-0.4,1.6-0.6,2.2
										c-0.1,0.3-0.2,0.6-0.3,0.9v-0.1c0-0.4,0-0.7-0.1-1c0-0.1,0-0.2-0.1-0.3c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1,0-0.1
										c0-0.1-0.1-0.2-0.1-0.3c-0.4-1.2-1.3-2.2-2.4-2.7c-1-0.5-2.1-0.6-3.3-0.5c-1.1,0.2-2.2,0.7-3.1,1.6
										c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1-1-0.1-1.9,0-2.7c0.1-1.1,0.3-2.2,0.7-3.1c0.2-0.5,0.5-1,0.7-1.4c0.3-0.5,0.6-0.9,0.9-1.2
										c0.4-0.4,0.7-0.7,1.1-1c0.4-0.3,0.8-0.6,1.2-0.8c0.7-0.4,1.6-0.7,2.6-1c0.5-0.1,0.9-0.2,1.3-0.3c0.3-0.1,0.6-0.1,0.9-0.1
										c0.2,0,0.3-0.1,0.5-0.1c0.9-0.1,1.9-0.3,2.8-0.7c0.5-0.2,0.9-0.5,1.4-0.8c0.3-0.2,0.6-0.5,0.9-0.9c0.3,0.4,0.6,0.6,0.9,0.9
										c0.4,0.3,0.9,0.6,1.4,0.8c1,0.4,1.9,0.6,2.9,0.7l0.2,0c0.4,0.1,0.8,0.1,1.1,0.2c0.2,0,0.5,0.1,0.7,0.1
										c0.2,0.1,0.4,0.1,0.7,0.2c1,0.3,1.9,0.6,2.6,1c0.4,0.2,0.8,0.4,1.2,0.8c0.3,0.3,0.7,0.6,1.1,1c0.3,0.3,0.6,0.7,0.9,1.2
										c0.1,0.2,0.2,0.3,0.3,0.5l0.1,0.2c0.1,0.2,0.2,0.5,0.3,0.7c0.4,0.9,0.7,2,0.7,3.1c0.1,0.8,0,1.6,0,2.7
										c-0.1-0.1-0.1-0.1-0.2-0.2l0,0c-0.2-0.2-0.4-0.4-0.7-0.6l-0.3-0.2l-0.4-0.2c-0.2-0.1-0.4-0.2-0.5-0.2
										c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2-0.1-0.3-0.1c-0.2,0-0.3-0.1-0.5-0.1c-0.3,0-0.6-0.1-0.9-0.1c-0.8,0-1.6,0.2-2.3,0.5
										c-0.5,0.2-1,0.6-1.4,1.1l-0.1,0.1c-0.2,0.2-0.4,0.4-0.5,0.7c-0.2,0.2-0.3,0.5-0.4,0.7l-0.1,0.2c-0.2,0.6-0.3,1.3-0.3,2
										c-0.1-0.3-0.2-0.6-0.3-0.9c-0.2-0.6-0.4-1.4-0.6-2.2c-0.2-0.7-0.4-1.6-0.5-2.5c-0.1-0.9-0.1-1.8,0-2.7
										c0.1-0.9,0.5-1.6,1-2.2c0.5-0.5,1.2-0.8,1.8-0.6c0.3,0.1,0.6,0.2,0.9,0.5c0.3,0.2,0.5,0.5,0.6,0.8c0.2,0.3,0.3,0.7,0.3,1
										c0,0.3-0.1,0.7-0.2,1c-0.1,0.3-0.3,0.6-0.5,0.7c0,0,0,0-0.1,0l-0.1,0l0,0c-0.1,0-0.1,0.1-0.2,0.1c0,0,0,0-0.1,0
										c0,0,0,0,0,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-0.5-0.1-0.9-0.6-1.1-1c-0.1-0.2-0.1-0.4-0.1-0.7c0-0.1,0.1-0.2,0.1-0.2
										c0-0.1,0.1-0.1,0.1-0.2l0,0c0.2-0.2,0.5-0.3,0.6-0.3c0,0,0,0,0.1,0c0.1,0,0.2,0,0.2,0l0.9,0.4l-0.8-0.6
										c-0.1,0-0.1-0.1-0.3-0.1c-0.3-0.1-0.7,0-0.9,0.2l0,0c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.1,0.2-0.2,0.4
										c-0.1,0.3-0.1,0.7,0,1c0.2,0.8,0.7,1.3,1.4,1.6c0.8,0.3,1.6-0.2,2.1-1.2c0.2-0.4,0.4-1,0.4-1.5c0-0.5-0.1-1-0.3-1.6
										c-0.2-0.5-0.5-0.9-0.9-1.2c-0.4-0.4-0.9-0.6-1.3-0.7c-0.2,0-0.4-0.1-0.6-0.1c-0.8,0-1.6,0.4-2.1,1
										c-0.3,0.4-0.7,0.8-0.9,1.3c-0.2,0.5-0.4,1-0.4,1.5c-0.1,0.9-0.1,1.8,0.1,3c0.1,0.9,0.4,1.8,0.6,2.6
										c0.2,0.8,0.5,1.5,0.8,2.2c0.3,0.7,0.6,1.3,0.8,1.8c0.3,0.5,0.5,1,0.8,1.3c0,0,0,0,0,0.1c0.2,0.4,0.5,0.7,0.7,0.9
										c0.4,0.4,0.9,0.7,1.5,0.9c0.3,0.1,0.7,0.2,1,0.2c0.8,0,1.6-0.3,2.1-0.9c0.4-0.5,0.7-1.1,0.7-1.8c0-0.7-0.2-1.3-0.6-1.8
										l-0.2,0.2c0.4,0.4,0.5,1,0.5,1.6s-0.3,1.2-0.6,1.5c-0.6,0.6-1.3,0.7-1.8,0.7c-0.3,0-0.7-0.1-1-0.2
										c-0.5-0.2-0.9-0.4-1.3-0.8c-0.4-0.4-0.7-0.9-0.9-1.4c-0.4-1.1-0.4-2.4,0-3.4c0-0.1,0.1-0.1,0.1-0.2
										c0.1-0.2,0.2-0.4,0.3-0.5c0.1-0.2,0.3-0.4,0.4-0.6l0.1-0.1c0.4-0.4,0.8-0.7,1.3-0.9c0.9-0.4,1.9-0.5,2.9-0.3
										c0.2,0,0.3,0.1,0.5,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.1,0.1,0.2,0.1c0.2,0.1,0.3,0.1,0.4,0.2l0.3,0.2l0.3,0.2
										c0.2,0.1,0.4,0.3,0.6,0.5c0.7,0.8,1.2,1.8,1.5,3c0.1,0.3,0.1,0.6,0.1,0.9c0,0.3,0,0.6,0,0.9
										C107.9,337.9,107.8,338.5,107.7,339z" />
											<path class="st15" d="M75.2,342.2c0.3-0.4,0.3-1-0.1-1.3c-0.4-0.2-0.9-0.1-1.2,0.2c-0.3,0.4-0.3,0.9,0.1,1.2
										C74.3,342.7,74.9,342.7,75.2,342.2z" />
											<path class="st15" d="M71.1,344c-0.4,0.3-0.5,0.8-0.2,1.2c0.3,0.4,0.8,0.4,1.3,0.1c0.4-0.3,0.5-0.9,0.2-1.2
										C72,343.7,71.4,343.7,71.1,344z" />
											<path class="st15" d="M68.5,347.7c0.5-0.2,0.6-0.8,0.4-1.2c-0.2-0.4-0.8-0.5-1.2-0.3c-0.4,0.2-0.6,0.8-0.4,1.2
										S68,347.9,68.5,347.7z" />
											<path class="st15" d="M64.6,349.5c0.5-0.2,0.7-0.7,0.5-1.1c-0.2-0.4-0.7-0.6-1.1-0.4c-0.5,0.2-0.7,0.7-0.6,1.1
										C63.5,349.4,64.1,349.7,64.6,349.5z" />
											<path class="st15" d="M60.5,350.8c0.5-0.1,0.8-0.6,0.7-1.1c-0.1-0.4-0.6-0.7-1.1-0.6c-0.5,0.1-0.8,0.6-0.7,1.1
										C59.5,350.7,60,350.9,60.5,350.8z" />
											<path class="st15" d="M73.9,336.1c0.2-0.4-0.1-1-0.8-1.3c-0.6-0.3-1.3-0.1-1.4,0.3c-0.2,0.4,0.2,1,0.8,1.2
										C73.1,336.6,73.7,336.5,73.9,336.1z" />
											<path class="st15" d="M68.8,334c0.2-0.4-0.2-1-0.9-1.2c-0.6-0.2-1.3,0-1.4,0.4c-0.1,0.4,0.2,1,0.9,1.2
										C68,334.6,68.6,334.4,68.8,334z" />
											<path class="st15" d="M62.6,331.1c-0.6-0.2-1.3,0-1.4,0.5c-0.1,0.5,0.3,1,0.9,1.1c0.6,0.2,1.3,0,1.4-0.5
										C63.6,331.8,63.2,331.3,62.6,331.1z" />
											<path class="st15" d="M57.2,329.7c-0.7-0.1-1.3,0.1-1.4,0.6c-0.1,0.5,0.4,0.9,1,1.1c0.6,0.1,1.2-0.1,1.4-0.6
										C58.3,330.4,57.8,329.9,57.2,329.7z" />
											<path class="st15" d="M51.6,328.7c-0.7-0.1-1.3,0.2-1.3,0.7c-0.1,0.5,0.4,0.9,1.1,1c0.7,0.1,1.2-0.2,1.3-0.7
										C52.8,329.3,52.3,328.8,51.6,328.7z" />
											<path class="st15" d="M46,328.2c-0.7,0-1.2,0.3-1.3,0.8c0,0.5,0.5,0.9,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C47.2,328.6,46.7,328.2,46,328.2z" />
											<path class="st15" d="M40.4,328.1c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C41.6,328.5,41.1,328.1,40.4,328.1z" />
											<path class="st15" d="M109.4,341c-0.4,0.2-0.5,0.8-0.1,1.3c0.3,0.4,0.9,0.5,1.3,0.2c0.4-0.3,0.4-0.8,0.1-1.2
										C110.3,340.8,109.8,340.7,109.4,341z" />
											<path class="st15" d="M112.4,345.3c0.4,0.3,1,0.3,1.3-0.1c0.3-0.4,0.2-0.9-0.2-1.2c-0.4-0.3-0.9-0.3-1.2,0.1
										C112,344.4,112,345,112.4,345.3z" />
											<path class="st15" d="M116.9,346.2c-0.4-0.2-1-0.1-1.2,0.3c-0.2,0.4-0.1,0.9,0.4,1.2c0.5,0.2,1,0.1,1.2-0.3
										C117.5,347,117.3,346.4,116.9,346.2z" />
											<path class="st15" d="M120.6,347.9c-0.5-0.2-1,0-1.1,0.4c-0.2,0.4,0.1,1,0.5,1.1c0.5,0.2,1,0,1.2-0.5
										C121.3,348.6,121,348.1,120.6,347.9z" />
											<path class="st15" d="M125.2,350.2c0,0,0,0.1,0,0.1c-0.3,0.2-0.6,0.3-0.9,0.5c0,0-0.1,0-0.1,0c-0.5-0.1-0.8-0.6-0.7-1.1
										c0.1-0.5,0.6-0.7,1.1-0.6C125,349.3,125.3,349.8,125.2,350.2z" />
											<path class="st15" d="M112.1,336.4c0.6-0.3,1-0.8,0.8-1.2c-0.2-0.4-0.8-0.6-1.4-0.3c-0.6,0.3-1,0.8-0.8,1.3
										C110.8,336.5,111.5,336.6,112.1,336.4z" />
											<path class="st15" d="M118,333.2c-0.1-0.4-0.8-0.6-1.4-0.4c-0.6,0.2-1,0.8-0.9,1.2c0.2,0.4,0.8,0.6,1.4,0.4
										C117.8,334.2,118.2,333.6,118,333.2z" />
											<path class="st15" d="M122.4,332.7c0.6-0.2,1.1-0.7,0.9-1.1c-0.1-0.4-0.7-0.7-1.4-0.5c-0.6,0.2-1.1,0.7-0.9,1.2
										C121.2,332.7,121.8,332.9,122.4,332.7z" />
											<path class="st15" d="M127.4,329.7c-0.7,0.1-1.1,0.6-1,1.1c0.1,0.5,0.7,0.7,1.4,0.6c0.6-0.1,1.1-0.6,1-1.1
										C128.7,329.8,128,329.6,127.4,329.7z" />
											<path class="st15" d="M132.9,328.7c-0.7,0.1-1.1,0.6-1.1,1c0.1,0.5,0.7,0.7,1.3,0.7c0.7-0.1,1.1-0.5,1.1-1
										C134.2,328.9,133.6,328.6,132.9,328.7z" />
											<path class="st15" d="M138.5,328.2c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C139.7,328.5,139.2,328.1,138.5,328.2z" />
											<path class="st15" d="M144.1,328.1c-0.7,0-1.2,0.3-1.2,0.8c0,0.5,0.5,0.8,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C145.3,328.6,144.8,328.2,144.1,328.1z" />
										</g>
										<g>
											<path class="st16 line" d="M61.9,329.4c1.3,0.3,2.5,0.7,3.7,1c1.2,0.3,2.3,0.7,3.3,1c3.9,1.3,6.6,2.3,6.7,2.3
										c-0.1-0.1-0.7-0.4-1.7-0.9c-1.1-0.6-2.7-1.4-4.7-2.2c-1-0.4-2.1-0.8-3.2-1.3c-1.2-0.4-2.4-0.8-3.7-1.2
										c-1.3-0.4-2.6-0.8-4-1.1c-1.4-0.3-2.8-0.6-4.2-0.9c-1.4-0.2-2.9-0.4-4.3-0.5c-0.7-0.1-1.4-0.1-2.1-0.1
										c-0.7,0-1.4-0.1-2.1-0.1c-0.7,0-1.3,0-2,0c-0.3,0-0.6,0-1,0c-0.3,0-0.6,0.1-0.9,0.1c-0.6,0-1.2,0.1-1.8,0.2
										c-0.6,0.1-1.1,0.1-1.7,0.3c-0.5,0.1-1,0.2-1.5,0.3c-0.1,0-0.1,0-0.2,0c0.1,0.2,0.2,0.5,0.2,0.7c0,0,0,0,0.1,0
										c0.5,0,1-0.1,1.5-0.2c0.5-0.1,1.1-0.1,1.6-0.1c0.6,0,1.2-0.1,1.8-0.1c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,1,0
										c0.3,0,0.6,0,1,0c1.3,0,2.7,0.2,4.1,0.3c1.4,0.1,2.8,0.3,4.2,0.6c1.4,0.2,2.8,0.5,4.1,0.8
										C59.3,328.8,60.6,329.1,61.9,329.4z" />
											<path class="st16 line" d="M146.7,326.3c-0.5-0.1-1-0.2-1.5-0.3c-0.5-0.1-1.1-0.2-1.7-0.3c-0.6-0.1-1.2-0.1-1.8-0.2
										c-0.3,0-0.6-0.1-0.9-0.1c-0.3,0-0.6,0-1,0c-0.7,0-1.3,0-2,0c-0.7,0-1.4,0-2.1,0.1c-0.7,0-1.4,0.1-2.1,0.1
										c-1.4,0.1-2.8,0.3-4.3,0.5c-1.4,0.3-2.8,0.5-4.2,0.9c-1.4,0.3-2.7,0.7-4,1.1c-1.3,0.4-2.5,0.8-3.7,1.2
										c-1.2,0.4-2.2,0.8-3.2,1.3c-2,0.8-3.6,1.6-4.7,2.2c-0.6,0.3-1,0.6-1.3,0.7c-0.2-0.6-0.5-1.1-0.9-1.6
										c0.2-1.2,0.3-2.2,0.2-3.1c0-1.2-0.2-2.4-0.6-3.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.2-0.4-0.3-0.5
										c-0.3-0.5-0.6-1-0.9-1.3c-0.7-0.8-1.5-1.5-2.4-2c-0.8-0.5-1.7-0.9-2.7-1.2c-0.2-0.1-0.5-0.1-0.7-0.2l-0.1,0
										c-0.2-0.1-0.4-0.1-0.7-0.2c-0.3-0.1-0.6-0.1-1-0.2l-0.4-0.1c-0.9-0.2-1.8-0.3-2.7-0.7c-0.4-0.2-0.8-0.4-1.2-0.7
										c-0.3-0.2-0.6-0.5-1-1l-0.2-0.2l-0.7,0l-0.2,0.2c-0.3,0.4-0.6,0.7-1,1c-0.4,0.3-0.8,0.5-1.2,0.7c-0.8,0.3-1.6,0.5-2.7,0.7
										c-0.1,0-0.3,0.1-0.4,0.1c-0.3,0.1-0.6,0.1-1,0.2c-0.5,0.1-1,0.2-1.4,0.4c-1,0.3-1.9,0.7-2.7,1.2c-0.9,0.5-1.7,1.2-2.4,2
										c-0.4,0.5-0.7,0.9-1,1.3c-0.3,0.5-0.5,1-0.7,1.5c-0.4,1-0.6,2.2-0.6,3.4c0,0.9,0.1,1.9,0.2,3.1c-0.6,0.8-1.1,1.8-1.3,2.9
										c-0.2,0.7-0.2,1.4-0.2,2c0,0.7,0.1,1.3,0.3,2c0.3,1,0.7,2,1.4,3c0,0,0,0,0,0c-0.2,0.2-0.4,0.5-0.7,0.8
										c-0.2,0.2-0.3,0.4-0.5,0.6c-0.2,0.2-0.4,0.4-0.7,0.6c-0.2,0.2-0.5,0.4-0.8,0.7c-0.3,0.2-0.6,0.5-0.9,0.7
										c-0.3,0.2-0.7,0.5-1,0.7c-0.4,0.2-0.7,0.5-1.1,0.7c-0.2,0.1-0.4,0.3-0.6,0.4c-0.2,0.1-0.4,0.2-0.6,0.3
										c-0.4,0.2-0.8,0.5-1.3,0.7c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.5,0.2-0.7,0.3c-0.2,0.1-0.5,0.2-0.7,0.3
										c-0.5,0.2-1,0.4-1.5,0.6c-0.5,0.2-1,0.3-1.5,0.5c-0.5,0.2-1,0.3-1.5,0.5c-0.4,0.1-0.8,0.2-1.2,0.3c0.7,0.3,1.4,0.7,2.1,1
										c0.4-0.1,0.7-0.2,1.1-0.3c0.5-0.2,1-0.3,1.6-0.5c0.5-0.2,1-0.4,1.5-0.6c0.2-0.1,0.5-0.2,0.7-0.3c0.2-0.1,0.5-0.3,0.7-0.4
										c0.5-0.2,0.9-0.5,1.4-0.7c0.4-0.3,0.9-0.5,1.3-0.8c0.2-0.1,0.4-0.3,0.6-0.4c0.2-0.1,0.4-0.3,0.6-0.4
										c0.4-0.3,0.7-0.6,1.1-0.8c0.3-0.3,0.6-0.6,1-0.9c0.3-0.3,0.6-0.6,0.8-0.8c0.3-0.3,0.5-0.5,0.7-0.8c0.2-0.3,0.4-0.5,0.6-0.7
										c0.2-0.2,0.3-0.5,0.4-0.7c0.3-0.4,0.4-0.7,0.5-1c0.1,0.1,0.2,0.2,0.2,0.4c0.7,0.9,1.5,1.8,2.5,2.6c0.8,0.6,1.7,1.3,2.7,2
										c0.4,0.2,0.7,0.5,1.1,0.7c0.6,0.4,1.1,0.8,1.7,1.2c0.8,0.6,1.7,1.3,2.6,2c0.9,0.8,1.6,1.6,2.3,2.5c0.7,0.9,1.2,1.9,1.6,3
										l0.6,1.2l0.6-1.2c0.4-1.1,1-2.1,1.7-3c0.6-0.8,1.4-1.6,2.3-2.5c0.9-0.8,1.8-1.4,2.6-2c0.5-0.4,1-0.7,1.6-1.1
										c0.4-0.3,0.8-0.5,1.2-0.8c1.1-0.7,1.9-1.4,2.7-2c1-0.8,1.8-1.7,2.5-2.6c0,0,0.1-0.1,0.1-0.1c0.1,0.2,0.2,0.4,0.4,0.7
										c0.1,0.2,0.3,0.4,0.4,0.7c0.2,0.2,0.4,0.5,0.6,0.7c0.2,0.3,0.5,0.5,0.7,0.8c0.3,0.3,0.5,0.6,0.8,0.8c0.3,0.3,0.6,0.6,1,0.9
										c0.3,0.3,0.7,0.6,1.1,0.8c0.2,0.1,0.4,0.3,0.6,0.4c0.2,0.1,0.4,0.3,0.6,0.4c0.4,0.3,0.8,0.5,1.3,0.8
										c0.5,0.2,0.9,0.5,1.4,0.7c0.2,0.1,0.5,0.2,0.7,0.4c0.2,0.1,0.5,0.2,0.7,0.3c0.5,0.2,1,0.4,1.5,0.6c0.5,0.2,1,0.4,1.6,0.5
										c0.3,0.1,0.7,0.2,1,0.3c0.7-0.3,1.4-0.6,2-1c-0.3-0.1-0.7-0.2-1-0.3c-0.5-0.2-1-0.3-1.5-0.5c-0.5-0.2-1-0.3-1.5-0.5
										c-0.5-0.2-1-0.4-1.5-0.6c-0.2-0.1-0.5-0.2-0.7-0.3c-0.2-0.1-0.5-0.2-0.7-0.3c-0.5-0.2-0.9-0.4-1.4-0.6
										c-0.4-0.2-0.9-0.5-1.3-0.7c-0.2-0.1-0.4-0.2-0.6-0.3c-0.2-0.1-0.4-0.2-0.6-0.4c-0.4-0.2-0.8-0.5-1.1-0.7
										c-0.3-0.3-0.7-0.5-1-0.7c-0.3-0.2-0.6-0.5-0.9-0.7c-0.3-0.2-0.6-0.4-0.8-0.7c-0.2-0.2-0.5-0.4-0.7-0.6
										c-0.2-0.2-0.4-0.4-0.5-0.6c-0.2-0.3-0.4-0.5-0.6-0.7c0.7-1,1.2-2.1,1.5-3.2c0.2-0.7,0.3-1.3,0.3-2c0-0.2,0-0.6,0-1
										c0-0.3-0.1-0.6-0.2-1c-0.1-0.4-0.2-0.8-0.4-1.2c0.9-0.3,3.2-1.2,6.3-2.2c1-0.3,2.1-0.6,3.3-1c1.2-0.3,2.4-0.7,3.7-1
										c1.3-0.3,2.6-0.6,4-0.9c1.4-0.3,2.7-0.6,4.1-0.8c1.4-0.2,2.8-0.4,4.2-0.6c1.4-0.1,2.7-0.3,4.1-0.3c0.3,0,0.7,0,1,0
										c0.3,0,0.6,0,1,0c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,0.9,0c0.6,0,1.2,0,1.8,0.1c0.6,0,1.1,0,1.6,0.1c0.5,0.1,1,0.1,1.5,0.2
										c0,0,0.1,0,0.1,0c0.1-0.2,0.2-0.5,0.2-0.7C146.9,326.4,146.8,326.3,146.7,326.3z M107.7,338.5c-0.3,1-0.8,2.1-1.5,3.1
										c-0.6,0.9-1.4,1.7-2.3,2.4c-0.7,0.6-1.6,1.2-2.7,2c-0.4,0.2-0.7,0.5-1.1,0.7c-0.6,0.4-1.1,0.8-1.7,1.1
										c-0.9,0.6-1.8,1.3-2.7,2.1c-1,0.9-1.7,1.7-2.4,2.6c-0.1,0.1-0.2,0.3-0.3,0.5c0,0.1-0.1,0.1-0.1,0.2
										c-0.1,0.2-0.3,0.4-0.4,0.7c-0.1,0.3-0.3,0.5-0.4,0.8c0,0,0,0,0,0c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0.1-0.3c0-0.1,0-0.3,0-0.4
										c0,0,0-0.1,0-0.1c0-0.5,0-1,0.1-1.5c0-0.6,0-1.3,0.1-1.9c0,0,0,0,0,0c0.4,0,0.7,0,0.9,0c0.4,0,0.8-0.1,1.1-0.2
										c0.7-0.1,1.1-0.3,1.1-0.3l0.3-0.1l-0.3-0.1c0,0-0.5-0.2-1.1-0.3c-0.3-0.1-0.7-0.1-1.1-0.1c-0.3,0-0.6,0-0.9-0.1
										c0,0,0,0,0,0c0,0,0,0,0,0c0.5,0,1-0.1,1.4-0.2c0.5-0.1,0.8-0.3,0.8-0.3l0.2-0.1l-0.2-0.1c0,0-0.3-0.2-0.8-0.3
										c-0.4-0.1-0.8-0.2-1.3-0.2c0.3,0,0.6-0.1,0.8-0.2c0.3-0.1,0.6-0.3,0.6-0.3l0.1-0.1l-0.1-0.1c0,0-0.2-0.2-0.6-0.3
										c-0.2-0.1-0.5-0.2-0.8-0.2l0-2.6c0-1,0-2.1,0-3.2c0-0.5,0-1,0-1.5c0.1,0.3,0.2,0.6,0.3,1c0.2,0.6,0.4,1.3,0.7,2
										c0.4,0.8,0.8,1.5,1.3,2c0.6,0.6,1.3,1,2.1,1.2c0.9,0.2,1.8,0.1,2.5-0.4c0.8-0.5,1.3-1.5,1.3-2.6c0.1-1-0.3-1.9-1-2.6
										c-0.6-0.6-1.2-0.9-1.9-0.9c-0.1,0-0.2,0-0.3,0c-0.4,0.1-0.8,0.2-1,0.5c-0.3,0.3-0.5,0.7-0.6,1c-0.1,0.4-0.1,0.8-0.1,1.1
										c0,0.1,0,0.2,0.1,0.2c0,0.1,0,0.1,0.1,0.2l0,0.1c0.1,0.2,0.2,0.3,0.3,0.4c0.2,0.2,0.5,0.3,0.7,0.4c0.2,0,0.4,0,0.6-0.2
										c0.4-0.2,0.5-0.5,0.6-0.7c0.1-0.2,0.1-0.3,0.1-0.3l0.1-1l-0.4,1c0,0,0,0.1-0.1,0.2c0,0.1-0.2,0.3-0.5,0.4
										c-0.3,0.1-0.6,0-0.8-0.2c-0.2-0.3-0.3-0.8-0.1-1.3c0.2-0.5,0.6-0.9,1-0.9c0,0,0.1,0,0.1,0c0.4,0,0.9,0.3,1.4,0.7
										c0.2,0.2,0.4,0.5,0.5,0.8c0,0.1,0,0.1,0,0.1l0,0.1c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0,0.3,0,0.5c0,0.3-0.1,0.7-0.2,1
										c0,0.1-0.1,0.1-0.1,0.2l-0.1,0.2l-0.2,0.2c0,0-0.1,0-0.1,0.1c0,0-0.1,0-0.1,0.1c-0.4,0.3-1.1,0.4-1.7,0.3
										c-0.6-0.1-1.2-0.4-1.7-0.9c-0.4-0.4-0.8-1-1.2-1.6c-0.3-0.6-0.6-1.3-0.8-1.8c-0.4-1.1-0.7-2.1-0.9-2.7c0-0.3,0-0.6,0-0.9
										c0-0.3,0-0.6,0-0.8l0.1-0.1c0.4-0.4,0.8-0.9,1.3-1.6c0.3-0.4,0.5-0.9,0.7-1.3c0.2-0.6,0.4-1.1,0.4-1.7
										c0.1-0.6,0-1.3-0.1-1.9c-0.1-0.6-0.3-1.1-0.5-1.6l-0.1-0.2c-0.2-0.5-0.4-1-0.5-1.6c-0.1-0.3-0.1-0.5-0.1-0.7
										c0,0,0-0.1,0-0.2c0-0.1,0-0.2,0-0.2c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.2c0-0.5,0.1-0.9,0.3-1.3c0.2-0.4,0.4-0.7,0.6-1
										c0.2-0.3,0.5-0.5,0.7-0.7c0.2-0.1,0.5-0.3,0.7-0.3c0.1,0,0.2-0.1,0.3-0.1c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.2,0l1-0.2
										l-1.1-0.1c0,0-0.1,0-0.2,0c-0.1,0-0.3,0-0.5,0c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.7,0.3-1,0.6c-0.4,0.3-0.7,0.7-0.9,1.2
										c-0.3,0.5-0.5,1.1-0.5,1.7c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3c0,0.1,0,0.1,0,0.2c0,0.4,0.1,0.7,0.1,1
										c0.1,0.6,0.4,1.2,0.6,1.7l0.1,0.2c0.2,0.5,0.4,1,0.5,1.4c0.1,0.5,0.2,1,0.1,1.5c0,0.5-0.1,0.9-0.3,1.4
										c-0.1,0.4-0.3,0.8-0.5,1.2c-0.3,0.6-0.6,1.1-0.8,1.5c0-0.1,0-0.2,0-0.3c0-0.2,0-0.5,0-0.7c0-0.7,0-1.5,0-2.2
										c0-0.4,0-0.8,0-1.2c0-2.2-0.1-4.2-0.1-6c0-1.2-0.1-2.2-0.1-3c0-0.4,0-0.8,0-1.2c0-1-0.1-1.6-0.1-1.6l-0.2,0
										c0,0,0,0.6-0.1,1.6c0,0.4,0,0.8,0,1.3c0,0.8-0.1,1.8-0.1,3c-0.1,1.9-0.1,4-0.1,6c0,0.4,0,0.8,0,1.2c0,0.7,0,1.4,0,2.2
										c0,0.3,0,0.7,0,1c-0.2-0.4-0.5-0.9-0.8-1.5c-0.2-0.4-0.4-0.8-0.5-1.2c-0.2-0.5-0.3-1-0.3-1.4c0-0.5,0-1,0.1-1.5
										c0.1-0.5,0.3-0.9,0.5-1.4l0.1-0.2c0.2-0.5,0.4-1.1,0.6-1.7c0.1-0.3,0.1-0.6,0.1-1c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3
										c0-0.2,0-0.3,0-0.5c-0.1-0.6-0.2-1.2-0.5-1.7c-0.2-0.4-0.5-0.8-0.9-1.2c-0.3-0.3-0.7-0.5-1-0.6c-0.3-0.1-0.5-0.2-0.8-0.2
										c-0.2,0-0.4,0-0.5,0c-0.1,0-0.2,0-0.2,0l-1.1,0.1l1,0.2c0,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0.1,0.3,0.1
										c0.2,0.1,0.4,0.2,0.7,0.3c0.2,0.2,0.5,0.4,0.7,0.7c0.3,0.3,0.5,0.7,0.6,1c0.2,0.4,0.3,0.9,0.3,1.3c0,0.1,0,0.1,0,0.2
										c0,0,0,0.1,0,0.1c0,0.1,0,0.2,0,0.2c0,0.1,0,0.1,0,0.2c0,0.2-0.1,0.5-0.1,0.7c-0.1,0.5-0.3,1.1-0.5,1.6l-0.1,0.2
										c-0.2,0.5-0.4,1-0.5,1.6c-0.1,0.6-0.2,1.3-0.1,1.9c0.1,0.7,0.3,1.3,0.4,1.7c0.2,0.4,0.4,0.9,0.7,1.3
										c0.5,0.7,0.9,1.2,1.3,1.6c0,0,0.1,0.1,0.1,0.1c0,0.6,0,1.2,0,1.8c-0.3,0.9-0.6,1.8-0.9,2.7c-0.2,0.6-0.5,1.2-0.8,1.8
										c-0.3,0.7-0.7,1.2-1.2,1.6c-0.4,0.4-1,0.7-1.7,0.9c-0.6,0.1-1.3,0-1.7-0.3c0,0,0,0-0.1-0.1c0,0-0.1,0-0.1-0.1l-0.2-0.3
										l0-0.1c0-0.1-0.1-0.1-0.1-0.2l0,0c-0.1-0.3-0.2-0.6-0.2-1c0-0.2,0-0.4,0-0.5c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
										c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0.1-0.3,0.3-0.6,0.5-0.8c0.5-0.5,1-0.7,1.4-0.7c0.4,0,0.8,0.4,1,0.9
										c0.2,0.5,0.1,1-0.1,1.3c-0.2,0.2-0.4,0.3-0.5,0.3c-0.1,0-0.2,0-0.3-0.1c-0.3-0.1-0.5-0.4-0.5-0.4c-0.1-0.1-0.1-0.2-0.1-0.2
										l-0.4-1l0.1,1.1c0,0,0,0.1,0.1,0.3c0.1,0.2,0.3,0.5,0.6,0.7c0.2,0.1,0.4,0.2,0.6,0.2c0.3,0,0.5-0.1,0.7-0.4
										c0.1-0.1,0.2-0.2,0.3-0.4c0-0.1,0.1-0.2,0.1-0.2l0,0c0-0.1,0-0.2,0.1-0.2c0.1-0.3,0-0.7-0.1-1.1c-0.1-0.3-0.2-0.7-0.6-1
										c-0.3-0.3-0.6-0.5-1-0.5c-0.7-0.1-1.5,0.2-2.1,0.8c-0.7,0.7-1.1,1.7-1,2.6c0,1.1,0.5,2.1,1.3,2.6c0.7,0.5,1.5,0.6,2.5,0.4
										c0.8-0.2,1.5-0.6,2.1-1.2c0.5-0.5,0.9-1.2,1.3-2c0.3-0.7,0.5-1.4,0.7-2c0.1-0.3,0.2-0.6,0.3-1c0,0.1,0,0.1,0,0.2
										c0,0.4,0,0.9,0,1.3c0,0.6,0,1.2,0,1.8l0,1.6c0,0.8,0,1.6,0,2.4c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.6,0.3-0.6,0.3l-0.1,0.1
										l0.1,0.1c0,0,0.2,0.2,0.6,0.3c0.2,0.1,0.5,0.2,0.8,0.2c-0.5,0-1,0.1-1.3,0.2c-0.5,0.1-0.8,0.3-0.8,0.3l-0.2,0.1l0.2,0.1
										c0,0,0.3,0.2,0.8,0.3c0.4,0.1,0.9,0.2,1.4,0.2c0,0,0,0.1,0,0.1c-0.3,0-0.6,0-0.9,0.1c-0.4,0-0.8,0.1-1.1,0.1
										c-0.7,0.1-1.1,0.3-1.1,0.3l-0.3,0.1l0.3,0.1c0,0,0.5,0.2,1.1,0.3c0.3,0.1,0.7,0.1,1.1,0.1c0.3,0,0.6,0,0.9,0.1c0,0,0,0,0,0
										c0,1,0.1,2.1,0.1,3.2l0,0.6c0,0.1,0,0.2,0,0.3c0,0.1,0,0.3,0,0.4c-0.4-0.8-0.8-1.6-1.3-2.2c-0.7-0.9-1.5-1.8-2.4-2.6
										c-0.9-0.8-1.8-1.5-2.7-2.1c-0.5-0.4-1-0.7-1.6-1.1c-0.4-0.3-0.8-0.5-1.2-0.8c-1.1-0.7-1.9-1.3-2.6-2
										c-0.9-0.7-1.7-1.5-2.3-2.4c-0.7-1-1.2-2-1.5-3.1c-0.2-0.6-0.2-1.1-0.3-1.7c0-0.6,0-1.2,0.2-1.7c0.3-1.1,0.8-2.2,1.5-3
										c0.7-0.8,1.6-1.3,2.6-1.5c1-0.2,2.1-0.1,2.9,0.3c0.4,0.2,0.8,0.5,1.3,0.9c0.3,0.4,0.6,0.8,0.9,1.4c0.4,1.1,0.4,2.3,0,3.4
										c-0.4,1.1-1.2,1.9-2.2,2.2c-0.3,0.1-0.7,0.2-1,0.2c-0.5,0-1.2-0.1-1.8-0.7c-0.4-0.4-0.6-0.9-0.6-1.5c0-0.6,0.2-1.2,0.5-1.6
										L80,335c-0.4,0.5-0.6,1.1-0.6,1.8c0,0.7,0.3,1.3,0.7,1.8c0.5,0.6,1.3,0.9,2.1,0.9c0.4,0,0.7-0.1,1-0.2
										c0.6-0.2,1.1-0.5,1.5-0.9c0.3-0.2,0.5-0.6,0.7-0.9l0.1-0.1c0.3-0.3,0.5-0.8,0.8-1.3c0.2-0.5,0.5-1.1,0.8-1.8
										c0.3-0.7,0.6-1.5,0.8-2.2c0.2-0.9,0.5-1.7,0.6-2.6c0.2-1.2,0.2-2.1,0-3c-0.1-0.6-0.2-1.1-0.4-1.5c-0.2-0.5-0.5-1-0.9-1.3
										c-0.7-0.8-1.8-1.1-2.7-0.9c-0.5,0.1-1,0.4-1.3,0.7c-0.4,0.3-0.7,0.7-0.9,1.2c-0.2,0.5-0.3,1-0.3,1.6c0,0.5,0.1,1,0.4,1.5
										c0.5,1,1.3,1.4,2.1,1.2c0.6-0.2,1.1-0.8,1.4-1.6c0.1-0.3,0.1-0.7,0-1c-0.1-0.2-0.1-0.3-0.2-0.4c-0.1-0.1-0.1-0.2-0.2-0.2
										l0,0c-0.3-0.2-0.6-0.3-0.9-0.2c-0.2,0-0.3,0.1-0.3,0.1l-0.8,0.6l0.9-0.4c0,0,0.1,0,0.2,0c0,0,0,0,0.1,0
										c0.1,0,0.4,0,0.6,0.3l0,0c0,0.1,0.1,0.1,0.1,0.2c0.1,0.1,0.1,0.2,0.1,0.3c0,0.2,0,0.4-0.1,0.7c-0.2,0.4-0.6,0.9-1,1
										c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0l0,0c0,0-0.1,0-0.1-0.1
										c-0.2-0.2-0.4-0.4-0.6-0.7c-0.1-0.3-0.2-0.7-0.2-1c0-0.4,0.1-0.7,0.3-1c0.2-0.3,0.4-0.6,0.6-0.8c0.3-0.2,0.6-0.4,0.9-0.5
										c0.6-0.1,1.3,0.1,1.8,0.6c0.5,0.5,0.9,1.3,1,2.2c0.1,0.8,0.1,1.7,0,2.6c-0.1,0.9-0.3,1.8-0.5,2.5c-0.2,0.9-0.4,1.6-0.6,2.2
										c-0.1,0.3-0.2,0.6-0.3,0.9c0,0,0,0,0-0.1c0-0.4,0-0.7-0.1-1c0-0.1,0-0.2-0.1-0.3c0,0,0-0.1,0-0.2c0-0.1,0-0.1,0-0.1
										c0-0.1,0-0.2-0.1-0.3c-0.4-1.2-1.3-2.2-2.4-2.7c-1-0.5-2.1-0.6-3.3-0.5c-1.1,0.2-2.2,0.7-3,1.6c-0.1,0.1-0.1,0.1-0.2,0.2
										c-0.1-1-0.1-1.9,0-2.7c0.1-1.1,0.3-2.2,0.7-3.1c0.2-0.5,0.5-1,0.7-1.4c0.3-0.5,0.6-0.9,0.9-1.2c0.4-0.4,0.7-0.7,1.1-1
										c0.4-0.3,0.8-0.6,1.2-0.8c0.7-0.4,1.6-0.7,2.6-1c0.5-0.1,0.9-0.2,1.3-0.3c0.3-0.1,0.6-0.1,0.9-0.1c0.2,0,0.3-0.1,0.5-0.1
										c0.9-0.1,1.9-0.3,2.9-0.7c0.5-0.2,0.9-0.5,1.4-0.8c0.3-0.2,0.6-0.5,0.9-0.9c0.3,0.4,0.6,0.7,0.9,0.9
										c0.4,0.3,0.9,0.6,1.4,0.8c1,0.4,1.9,0.6,2.9,0.7l0.2,0c0.4,0.1,0.8,0.1,1.1,0.2c0.2,0,0.5,0.1,0.7,0.1
										c0.2,0.1,0.4,0.1,0.7,0.2c1,0.3,1.9,0.6,2.6,1c0.4,0.2,0.8,0.4,1.2,0.8c0.3,0.3,0.7,0.6,1.1,1c0.3,0.3,0.6,0.7,0.9,1.2
										c0.1,0.2,0.2,0.3,0.3,0.5l0.1,0.2c0.1,0.2,0.2,0.5,0.3,0.7c0.4,0.9,0.7,2,0.7,3.1c0.1,0.8,0,1.6,0,2.7
										c-0.1-0.1-0.1-0.1-0.2-0.2l0,0c-0.2-0.2-0.4-0.4-0.7-0.6l-0.3-0.2l-0.4-0.2c-0.2-0.1-0.4-0.2-0.5-0.2
										c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2-0.1-0.3-0.1c-0.2,0-0.4-0.1-0.5-0.1c-0.3,0-0.6-0.1-0.9-0.1c-0.8,0-1.6,0.2-2.3,0.5
										c-0.5,0.2-1,0.6-1.4,1.1l-0.1,0.1c-0.2,0.2-0.4,0.4-0.5,0.7c-0.1,0.2-0.3,0.5-0.4,0.7l-0.1,0.2c-0.2,0.6-0.3,1.3-0.3,2
										c-0.1-0.3-0.2-0.6-0.3-0.9c-0.2-0.6-0.4-1.4-0.6-2.2c-0.2-0.7-0.4-1.6-0.5-2.5c-0.1-0.9-0.1-1.8,0-2.6
										c0.1-0.9,0.5-1.6,1-2.2c0.5-0.5,1.2-0.8,1.8-0.6c0.3,0.1,0.6,0.2,0.9,0.5c0.3,0.2,0.5,0.5,0.6,0.8c0.2,0.3,0.3,0.7,0.3,1
										c0,0.3-0.1,0.7-0.2,1c-0.1,0.3-0.3,0.6-0.5,0.7c0,0,0,0-0.1,0l-0.1,0l0,0c-0.1,0-0.1,0.1-0.2,0.1c0,0,0,0-0.1,0
										c0,0,0,0,0,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-0.5-0.1-0.9-0.6-1.1-1c-0.1-0.2-0.1-0.4-0.1-0.7c0-0.1,0-0.2,0.1-0.3
										c0-0.1,0.1-0.1,0.1-0.2l0,0c0.2-0.2,0.4-0.3,0.6-0.3c0,0,0,0,0,0c0.1,0,0.2,0,0.2,0l0.9,0.4l-0.8-0.6
										c-0.1,0-0.1-0.1-0.3-0.1c-0.3-0.1-0.7,0-0.9,0.2l0,0c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.1,0.2-0.2,0.4
										c-0.1,0.3-0.1,0.7,0,1c0.2,0.8,0.7,1.3,1.4,1.6c0.8,0.3,1.6-0.2,2.1-1.2c0.2-0.4,0.4-1,0.4-1.5c0-0.5-0.1-1-0.3-1.6
										c-0.2-0.5-0.5-0.9-0.9-1.2c-0.4-0.4-0.9-0.6-1.3-0.7c-0.2,0-0.4-0.1-0.6-0.1c-0.8,0-1.6,0.4-2.1,1
										c-0.4,0.4-0.7,0.8-0.9,1.3c-0.2,0.5-0.4,1-0.4,1.5c-0.1,0.9-0.1,1.8,0.1,3c0.1,0.9,0.4,1.8,0.6,2.6
										c0.2,0.8,0.5,1.5,0.8,2.2c0.3,0.7,0.6,1.3,0.8,1.8c0.3,0.5,0.5,1,0.8,1.3c0,0,0,0,0,0.1c0.2,0.4,0.4,0.7,0.7,0.9
										c0.4,0.4,0.9,0.7,1.5,0.9c0.3,0.1,0.7,0.2,1,0.2c0.8,0,1.6-0.3,2.1-0.9c0.4-0.5,0.7-1.1,0.7-1.8c0-0.7-0.2-1.3-0.6-1.8
										l-0.2,0.2c0.4,0.4,0.5,1,0.5,1.6c0,0.6-0.3,1.2-0.6,1.5c-0.6,0.6-1.3,0.7-1.8,0.7c-0.3,0-0.7-0.1-1-0.2
										c-0.5-0.2-0.9-0.4-1.3-0.8c-0.4-0.4-0.7-0.9-0.9-1.4c-0.4-1.1-0.4-2.4,0-3.4c0-0.1,0.1-0.1,0.1-0.2
										c0.1-0.2,0.2-0.4,0.3-0.5c0.1-0.2,0.3-0.4,0.4-0.6l0.1-0.1c0.4-0.4,0.8-0.7,1.2-0.9c0.9-0.4,1.9-0.5,2.9-0.3
										c0.2,0,0.3,0.1,0.5,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.1,0.1,0.2,0.1c0.2,0.1,0.3,0.1,0.4,0.2l0.3,0.2l0.3,0.2
										c0.2,0.1,0.4,0.4,0.6,0.5c0.7,0.8,1.2,1.8,1.5,3c0.1,0.3,0.1,0.6,0.1,0.9c0,0.3,0,0.6,0,0.9
										C107.9,337.4,107.8,338,107.7,338.5z" />
											<path class="st16" d="M75.2,341.7c0.3-0.4,0.3-1-0.1-1.3c-0.4-0.2-0.9-0.1-1.2,0.2c-0.3,0.4-0.3,0.9,0.1,1.2
										C74.3,342.2,74.9,342.2,75.2,341.7z" />
											<path class="st16" d="M71.1,343.5c-0.4,0.3-0.5,0.8-0.2,1.2c0.3,0.4,0.8,0.4,1.3,0.1c0.4-0.3,0.5-0.9,0.2-1.2
										C72,343.2,71.4,343.2,71.1,343.5z" />
											<path class="st16" d="M68.5,347.2c0.5-0.2,0.6-0.8,0.4-1.2c-0.2-0.4-0.8-0.5-1.2-0.3c-0.4,0.2-0.6,0.8-0.4,1.2
										S68,347.4,68.5,347.2z" />
											<path class="st16" d="M64.6,349c0.5-0.2,0.7-0.7,0.5-1.1c-0.2-0.4-0.7-0.6-1.1-0.4c-0.5,0.2-0.7,0.7-0.6,1.1
										C63.5,348.9,64.1,349.2,64.6,349z" />
											<path class="st16" d="M60.5,350.3c0.5-0.1,0.8-0.6,0.7-1.1c-0.1-0.4-0.6-0.7-1.1-0.6c-0.5,0.1-0.8,0.6-0.7,1.1
										C59.5,350.2,60,350.4,60.5,350.3z" />
											<path class="st16" d="M73.9,335.6c0.2-0.4-0.1-1-0.8-1.3c-0.6-0.3-1.3-0.1-1.4,0.3c-0.2,0.4,0.2,1,0.8,1.2
										C73.1,336.1,73.7,336,73.9,335.6z" />
											<path class="st16" d="M68.8,333.5c0.2-0.4-0.2-1-0.9-1.2c-0.6-0.2-1.3,0-1.4,0.4c-0.1,0.4,0.2,1,0.9,1.2
										C68,334.1,68.6,333.9,68.8,333.5z" />
											<path class="st16" d="M62.6,330.6c-0.6-0.2-1.3,0-1.4,0.5c-0.1,0.5,0.3,1,0.9,1.1c0.6,0.2,1.3,0,1.4-0.5
										C63.6,331.3,63.2,330.8,62.6,330.6z" />
											<path class="st16" d="M57.2,329.2c-0.7-0.1-1.3,0.1-1.4,0.6c-0.1,0.5,0.4,0.9,1,1.1c0.6,0.1,1.2-0.1,1.4-0.6
										C58.3,329.9,57.8,329.4,57.2,329.2z" />
											<path class="st16" d="M51.6,328.2c-0.7-0.1-1.3,0.2-1.3,0.7c-0.1,0.5,0.4,0.9,1.1,1c0.7,0.1,1.2-0.2,1.3-0.7
										C52.8,328.8,52.3,328.3,51.6,328.2z" />
											<path class="st16" d="M46,327.7c-0.7,0-1.2,0.3-1.3,0.8c0,0.5,0.5,0.9,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C47.2,328.1,46.7,327.7,46,327.7z" />
											<path class="st16" d="M40.4,327.6c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C41.6,328,41.1,327.6,40.4,327.6z" />
											<path class="st16" d="M109.4,340.5c-0.4,0.2-0.5,0.8-0.1,1.3c0.3,0.4,0.9,0.5,1.3,0.2c0.4-0.3,0.4-0.8,0.1-1.2
										C110.3,340.3,109.8,340.2,109.4,340.5z" />
											<path class="st16" d="M112.4,344.8c0.4,0.3,1,0.3,1.3-0.1c0.3-0.4,0.2-0.9-0.2-1.2c-0.4-0.3-0.9-0.3-1.2,0.1
										C112,343.9,112,344.5,112.4,344.8z" />
											<path class="st16" d="M116.9,345.7c-0.4-0.2-1-0.1-1.2,0.3c-0.2,0.4-0.1,0.9,0.4,1.2c0.5,0.2,1,0.1,1.2-0.3
										C117.5,346.4,117.3,345.9,116.9,345.7z" />
											<path class="st16" d="M120.6,347.4c-0.5-0.2-1,0-1.1,0.4c-0.2,0.4,0.1,1,0.5,1.1c0.5,0.2,1,0,1.2-0.5
										C121.3,348.1,121,347.6,120.6,347.4z" />
											<path class="st16" d="M124.5,348.6c-0.5-0.1-1,0.1-1.1,0.6c-0.1,0.4,0.2,0.9,0.7,1.1c0.5,0.1,1-0.1,1.1-0.6
										C125.3,349.2,125,348.8,124.5,348.6z" />
											<path class="st16" d="M112.1,335.9c0.6-0.3,1-0.8,0.8-1.2c-0.2-0.4-0.8-0.6-1.4-0.3c-0.6,0.3-1,0.8-0.8,1.3
										C110.8,336,111.5,336.1,112.1,335.9z" />
											<path class="st16" d="M118,332.7c-0.1-0.4-0.8-0.6-1.4-0.4c-0.6,0.2-1,0.8-0.9,1.2c0.2,0.4,0.8,0.6,1.4,0.4
										C117.8,333.7,118.2,333.1,118,332.7z" />
											<path class="st16" d="M122.4,332.2c0.6-0.2,1.1-0.7,0.9-1.1c-0.1-0.4-0.7-0.7-1.4-0.5c-0.6,0.2-1.1,0.7-0.9,1.2
										C121.2,332.2,121.8,332.4,122.4,332.2z" />
											<path class="st16" d="M127.4,329.2c-0.7,0.1-1.1,0.6-1,1.1c0.1,0.5,0.7,0.7,1.4,0.6c0.6-0.1,1.1-0.6,1-1.1
										C128.7,329.3,128,329.1,127.4,329.2z" />
											<path class="st16" d="M132.9,328.2c-0.7,0.1-1.1,0.6-1.1,1c0.1,0.5,0.7,0.7,1.3,0.7c0.7-0.1,1.1-0.5,1.1-1
										C134.2,328.4,133.6,328.1,132.9,328.2z" />
											<path class="st16" d="M138.5,327.7c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C139.7,328,139.2,327.6,138.5,327.7z" />
											<path class="st16" d="M144.1,327.6c-0.7,0-1.2,0.3-1.2,0.8c0,0.5,0.5,0.8,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C145.3,328.1,144.8,327.7,144.1,327.6z" />
										</g>
									</g>
									<path class="st17 line" d="M138.8,339.7c-3.7,4.1-8.4,7.7-13.7,10.6c-0.3,0.2-0.6,0.3-0.9,0.5c-0.2,0.1-0.5,0.2-0.7,0.4
								c-0.2,0.1-0.4,0.2-0.7,0.3c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.4,0.2-0.7,0.3c-8.5,3.8-18.5,6-29.1,6c-10.6,0-20.5-2.2-29-6
								c-0.2-0.1-0.4-0.2-0.7-0.3c-0.5-0.2-0.9-0.4-1.4-0.7c-0.2-0.1-0.5-0.2-0.7-0.3c-11-5.5-19.3-13.9-23.1-23.7
								c-0.1-0.2-0.1-0.3-0.2-0.5c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.1-0.3-0.2-0.5c-1.2-3.5-1.9-7.2-1.9-11c0-0.4,0.1-0.9,0.4-1.3
								c0.1-0.3,0.3-0.5,0.5-0.8c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c0.5-0.4,1.1-0.8,1.9-1.3
								c-0.1,0.2-0.1,0.4-0.1,0.6c0,3.8,0.6,7.5,1.9,11c0.1,0.2,0.1,0.3,0.2,0.5c0,0.1,0,0.1,0.1,0.2c0.1,0.2,0.1,0.3,0.2,0.5
								c3.8,9.8,12.1,18.1,23.1,23.7c0.2,0.1,0.5,0.2,0.7,0.3c0.5,0.2,0.9,0.4,1.4,0.7c0.2,0.1,0.4,0.2,0.7,0.3c8.5,3.8,18.4,6,29,6
								c10.6,0,20.6-2.2,29.1-6c0.2-0.1,0.4-0.2,0.7-0.3c0.5-0.2,0.9-0.4,1.4-0.6c0.2-0.1,0.5-0.2,0.7-0.3c0.2-0.1,0.5-0.2,0.7-0.4
								c0.3-0.2,0.6-0.3,0.9-0.5C132.2,345.1,135.7,342.6,138.8,339.7z" />
									<path class="st16" d="M148.7,315.4c0,2.3-3.5,4.6-5.1,5.2c-8.2,3.3-16.7,2.6-25.3,1.7c-8.2-0.8-17.3-2.7-23.8-8.4
								c-0.3-0.3-1.6-2-2-2h-1.1c-5.6,6.6-14.8,8.9-22.9,10c-3.2,0.4-6.5,0.7-9.8,0.8c-5.9,0.1-11.7,0.2-17.3-1.6
								c-2-0.6-6.6-2.8-6.6-5.7c0-0.3,0.1-0.6,0.2-0.9c0.1-0.3,0.3-0.5,0.5-0.7c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2
								c5.3-4.7,28.3-8.2,55.8-8.2c27.9,0,51.1,3.6,56,8.4c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.7
								C148.6,314.7,148.7,315,148.7,315.4z" />
									<path class="st16" d="M148.7,314.9c0,2.4-3.5,4.7-5.1,5.4c-8.2,3.4-16.7,2.6-25.3,1.8c-8.2-0.8-17.3-2.8-23.8-8.6
								c-0.3-0.3-1.6-2-2-2h-1.1c-5.6,6.7-14.8,9.1-22.9,10.3c-3.2,0.5-6.5,0.7-9.8,0.8c-5.9,0.1-11.7,0.2-17.3-1.7
								c-2-0.7-6.6-2.9-6.6-5.9c0-0.3,0.1-0.6,0.2-1c0.1-0.3,0.3-0.5,0.5-0.8c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2
								c5.3-4.8,28.3-8.5,55.8-8.5c27.9,0,51.1,3.7,56,8.7c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.3,0.4,0.5,0.5,0.8
								C148.6,314.2,148.7,314.5,148.7,314.9z" />
									<path class="st18 line" d="M148.7,315.1c0,2.3-3.5,4.6-5.1,5.2c-5,2-10.1,2.5-15.2,2.4c-3.3-0.1-6.7-0.4-10.1-0.7
								c-8.2-0.8-17.3-2.7-23.8-8.4c-0.3-0.3-1.6-2-2-2h-1.1c-5.6,6.6-14.8,8.9-22.9,10c-3.2,0.4-6.5,0.7-9.8,0.8
								c-5.9,0.1-11.7,0.2-17.3-1.6c-2-0.6-6.6-2.8-6.6-5.7c0-0.3,0.1-0.6,0.2-0.9c0.1-0.3,0.3-0.5,0.5-0.8c0.1-0.1,0.1-0.2,0.2-0.2
								c0.1-0.1,0.1-0.1,0.2-0.2c5.3-4.7,28.3-8.2,55.8-8.2c10.4,0,20.1,0.5,28.5,1.4c14.1,1.5,24.4,4,27.5,7
								c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.8C148.6,314.4,148.7,314.7,148.7,315.1z" />
									<path class="st5"
										d="M148.7,315.1c0,2.3-3.5,4.6-5.1,5.2c-5,2-10.1,2.5-15.2,2.4c-2-6.2-4.8-11.8-8.1-16.6
								c14.1,1.5,24.4,4,27.5,7c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.8C148.6,314.4,148.7,314.7,148.7,315.1z" />
									<path class="st8" d="M142.6,315.9c0,1.3-3.7,2.5-6.8,3.6c-29.6,3.8-42.9-8.6-42.9-8.6h-2c-10.3,11.8-44.9,8-45.5,7.9
								c0,0,0,0,0,0c-2.1-0.9-4.9-1.9-4.9-3c0-4.6,23.7-8.4,50.9-8.4C118.6,307.6,142.6,311.3,142.6,315.9z" />
									<path class="st19" d="M118.6,308.9c1.5,1,3.1,1.6,4.7,2.4c1.4,0.7,5.2,2.8,5.1,4.7c0,0.1,0,0.1,0,0.2
								c-0.4,1.9-5.3,2.9-6.8,3.4c-1.3,0.2-2.5,0.3-3.8,0.4c5.2,0.5,11.1,0.5,18-0.4c3.1-1.1,6.8-2.3,6.8-3.6
								C142.6,313,132.8,310.4,118.6,308.9z" />
									<path class="st15 line" d="M142.6,315.9c0,0.7-1.2,1.5-2.8,2.1c-6.7-3.1-24.7-5.4-45-5.7c-0.8-0.6-1.4-1-1.7-1.2
								c-0.1-0.1-0.3-0.2-0.5-0.2h-1.5c-0.2,0-0.4,0.1-0.5,0.2c-0.4,0.4-0.8,0.8-1.2,1.2c-20.8,0.1-39.3,2.5-46.2,5.6
								c-1.5-0.7-2.8-1.4-2.8-2.1c0-4.6,23.7-8.4,50.9-8.4C118.6,307.6,142.6,311.3,142.6,315.9z" />
									<rect x="91.2" y="300.6" class="st20" width="1.5" height="10.4" />
									<path class="st21"
										d="M100.4,301c-0.5,1-1.1,2-1.9,2.9c-0.7,0.8-1.5,1.6-2.5,2.2c-1.4,0.8-2.7,1-4.2,1.1c-0.2,0-0.4,0-0.6,0
								c-2.5-0.6-4.5-2.1-5.8-4c-1.3-1.9-1.8-4.1-1.8-6.2c0-1.3,0.2-2.5,0.6-3.8c1-3,3.4-5.4,5.3-8c1.8-2.5,3.1-5.4,2.3-8.2
								c0,0,0,0,0,0c-0.1-0.2-0.1-0.4-0.2-0.6c0.1,0.2,0.6,0.5,0.8,0.7c2,1.8,3.8,3.9,5.3,6.2C101,288.6,103.2,295.2,100.4,301z" />
									<path class="st22" d="M90.7,304.6c-0.8-0.3-1.5-0.6-2.2-1.2c-0.7-0.6-1.3-1.4-1.7-2.2c-0.8-1.5-1-3.1-0.9-4.7
								c0.1-0.9,0.3-1.8,0.7-2.7c1-2.1,2.9-3.7,4.5-5.4c1.6-1.8,2.9-4,2.2-6.2c0.1,0.2,0.4,0.4,0.5,0.6c1.3,1.5,2.5,3.2,3.4,4.9
								c2,4.1,3.1,9.1,0.6,13.1c-0.4,0.7-1,1.4-1.6,2c-0.5,0.5-1.1,0.9-1.8,1.3c-0.3,0.2-0.7,0.3-1,0.4c-0.2,0-0.7,0-0.8,0.1
								c0.5-0.4,1-0.9,1.3-1.5c-0.6,0.4-1.2,0.7-1.8,0.9c0.1-0.5,0.1-1,0.2-1.5c-0.3,0.5-0.6,1-0.9,1.5c-0.4-0.3-0.7-0.7-1.1-1
								c0.2,0.7,0.5,1.3,1,1.9C91,304.7,90.9,304.7,90.7,304.6z" />
									<path class="st18"
										d="M35,314.1c0.1-0.3,0.3-0.5,0.5-0.8C35.3,313.6,35.1,313.9,35,314.1z" />
									<path class="st18"
										d="M35.7,313.2c-0.1,0.1-0.1,0.1-0.2,0.2C35.6,313.3,35.7,313.2,35.7,313.2z" />
									<path class="st18"
										d="M148.5,314.1c-0.1-0.3-0.3-0.5-0.5-0.8C148.2,313.6,148.3,313.9,148.5,314.1z" />
									<path class="st5"
										d="M147.9,313.4c0.2,0.2,0.4,0.5,0.5,0.8C148.3,313.9,148.1,313.6,147.9,313.4z" />
									<path class="st6" d="M148.8,316.3L148.8,316.3c0,0.9-0.1,1.8-0.2,2.7c0,0,0,0,0,0c-0.3,2.6-0.8,5-1.7,7.4
								c-0.1,0.2-0.1,0.3-0.2,0.5c0,0.1-0.1,0.1-0.1,0.2c-0.1,0.2-0.1,0.3-0.2,0.5c-1.4,3.5-3.4,6.9-5.8,10c-2.4,3-5.3,5.8-8.5,8.2
								c0,0,0,0,0,0c-0.1-3.4-0.4-6.9-0.9-10.4c-0.7-4-1.6-7.9-2.8-11.6c5.2,0.1,10.2-0.4,15.2-2.4c1.6-0.7,5.1-2.9,5.1-5.2
								c0-0.3-0.1-0.6-0.2-0.9C148.6,315.5,148.8,315.9,148.8,316.3z" />
								</g>
								<path class="st3" d="M100.4,301c-0.5,1-1.1,2-1.9,2.9c-0.7,0.8-1.5,1.6-2.5,2.2c-1.4,0.8-2.7,1-4.2,1.1
							c-0.1-2-1.4-4.2-1.2-6.3c0.1-1.2,0.7-2.3,1.3-3.3c0.8-1.6,1.6-3.2,2.4-4.8c0.5-1,0.9-2,1.1-3.1c0.5-2.8-0.5-5.6-1.5-8.3
							c-0.6-1.5-1.2-3-2-4.4c0,0,0,0,0,0c-0.1-0.2-0.1-0.4-0.2-0.6c0.1,0.2,0.6,0.5,0.8,0.7c2,1.8,3.8,3.9,5.3,6.2
							C101,288.6,103.2,295.2,100.4,301z" />
							</g>
							<g>
								<g>
									<g>
										<g>
											<path class="st7" d="M36.7,315.3c-2-6-3-12.2-3-18.6c0-32,26.1-58.1,58.1-58.1c32,0,58.1,26.1,58.1,58.1
										c0,6.2-1,12.2-2.8,18l-1.4-0.5c1.8-5.6,2.8-11.5,2.8-17.5c0-31.2-25.4-56.6-56.6-56.6c-31.2,0-56.6,25.4-56.6,56.6
										c0,6.2,1,12.3,3,18.1L36.7,315.3z" />
										</g>
									</g>
								</g>
								<path class="st8"
									d="M40.1,315.6h-4.7c0-1.3,1.1-2.4,2.4-2.4C39.1,313.2,40.1,314.3,40.1,315.6z" />
								<path class="st8"
									d="M148.2,315.6h-4.7c0-1.3,1.1-2.4,2.4-2.4C147.1,313.2,148.2,314.3,148.2,315.6z" />
							</g>
							<g>
								<path class="st8" d="M96.1,239.3c0,2.4-2,4.4-4.4,4.4c-2.4,0-4.4-2-4.4-4.4c0-2.4,2-4.4,4.4-4.4
							C94.2,234.9,96.1,236.9,96.1,239.3z" />
								<g>
									<g>
										<path class="st8" d="M85.9,240.1c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3c0-1.8,1.5-3.3,3.3-3.3
									C84.5,236.8,85.9,238.3,85.9,240.1z" />
										<circle class="st8" cx="76" cy="241.6" r="2.3" />
										<circle class="st8" cx="71" cy="243.2" r="1.8" />
									</g>
									<g>
										<path class="st8" d="M97.5,240.1c0,1.8,1.5,3.3,3.3,3.3c1.8,0,3.3-1.5,3.3-3.3c0-1.8-1.5-3.3-3.3-3.3
									C99,236.8,97.5,238.3,97.5,240.1z" />
										<circle class="st8" cx="107.4" cy="241.6" r="2.3" />
										<path class="st8" d="M110.7,243.2c0,1,0.8,1.8,1.8,1.8c1,0,1.8-0.8,1.8-1.8s-0.8-1.8-1.8-1.8
									C111.5,241.4,110.7,242.2,110.7,243.2z" />
									</g>
								</g>
							</g>
							<g>
								<path class="st8" d="M36.1,282c2.4,0.4,4,2.8,3.5,5.2c-0.4,2.4-2.8,4-5.2,3.5c-2.4-0.4-4-2.8-3.5-5.2
							C31.4,283.1,33.7,281.5,36.1,282z" />
								<g>
									<g>
										<path class="st8" d="M35,292.1c1.8,0.3,3,2.1,2.6,3.8c-0.3,1.8-2.1,3-3.8,2.6c-1.8-0.3-3-2.1-2.6-3.8
									C31.5,293,33.2,291.8,35,292.1z" />
										<path class="st8" d="M35.1,299.9c1.2,0.2,2.1,1.4,1.8,2.7c-0.2,1.2-1.4,2.1-2.7,1.8c-1.2-0.2-2.1-1.4-1.8-2.7
									C32.7,300.5,33.9,299.7,35.1,299.9z" />
										<path class="st8" d="M35.6,305.7c1,0.2,1.6,1.1,1.4,2c-0.2,1-1.1,1.6-2,1.4c-1-0.2-1.6-1.1-1.4-2
									C33.7,306.1,34.7,305.5,35.6,305.7z" />
									</g>
									<g>
										<path class="st8" d="M37.1,280.8c1.8,0.3,3.5-0.8,3.8-2.6c0.3-1.8-0.8-3.5-2.6-3.8c-1.8-0.3-3.5,0.8-3.8,2.6
									C34.2,278.7,35.3,280.4,37.1,280.8z" />
										<path class="st8" d="M40,273.5c1.2,0.2,2.4-0.6,2.7-1.8c0.2-1.2-0.6-2.4-1.8-2.7c-1.2-0.2-2.4,0.6-2.7,1.8
									C37.9,272.1,38.8,273.3,40,273.5z" />
										<path class="st8" d="M42.5,268.4c1,0.2,1.9-0.5,2-1.4c0.2-1-0.5-1.9-1.4-2c-1-0.2-1.9,0.5-2,1.4
									C40.9,267.3,41.6,268.2,42.5,268.4z" />
									</g>
								</g>
							</g>
							<g>
								<path class="st8" d="M147.5,282c-2.4,0.4-4,2.8-3.5,5.2c0.4,2.4,2.8,4,5.2,3.5c2.4-0.4,4-2.8,3.5-5.2
							C152.2,283.1,149.9,281.5,147.5,282z" />
								<g>
									<g>
										<path class="st8" d="M148.5,292.1c-1.8,0.3-3,2.1-2.6,3.8c0.3,1.8,2.1,3,3.8,2.6c1.8-0.3,3-2.1,2.6-3.8
									C152.1,293,150.3,291.8,148.5,292.1z" />
										<path class="st8" d="M148.5,299.9c-1.2,0.2-2.1,1.4-1.8,2.7c0.2,1.2,1.4,2.1,2.7,1.8c1.2-0.2,2.1-1.4,1.8-2.7
									C150.9,300.5,149.7,299.7,148.5,299.9z" />
										<path class="st8" d="M148,305.7c-1,0.2-1.6,1.1-1.4,2c0.2,1,1.1,1.6,2,1.4c1-0.2,1.6-1.1,1.4-2
									C149.8,306.1,148.9,305.5,148,305.7z" />
									</g>
									<g>
										<path class="st8" d="M146.4,280.8c-1.8,0.3-3.5-0.8-3.8-2.6c-0.3-1.8,0.8-3.5,2.6-3.8s3.5,0.8,3.8,2.6
									C149.4,278.7,148.2,280.4,146.4,280.8z" />
										<path class="st8" d="M143.6,273.5c-1.2,0.2-2.4-0.6-2.7-1.8c-0.2-1.2,0.6-2.4,1.8-2.7c1.2-0.2,2.4,0.6,2.7,1.8
									C145.6,272.1,144.8,273.3,143.6,273.5z" />
										<path class="st8" d="M141,268.4c-1,0.2-1.9-0.5-2-1.4c-0.2-1,0.5-1.9,1.4-2c1-0.2,1.9,0.5,2,1.4
									C142.6,267.3,142,268.2,141,268.4z" />
									</g>
								</g>
							</g>
						</g>
					</g>
					<g>
						<path class="st23" d="M91.8,255.8c-21.8,0-39.6,17.8-39.6,39.6c0,21.8,17.8,39.6,39.6,39.6c21.8,0,39.6-17.8,39.6-39.6
					C131.4,273.5,113.6,255.8,91.8,255.8z M91.8,324.1c-15.8,0-28.7-12.9-28.7-28.7c0-15.8,12.9-28.7,28.7-28.7s28.7,12.9,28.7,28.7
					C120.5,311.2,107.6,324.1,91.8,324.1z" />
						<path class="st24" d="M91.8,266.7c-15.8,0-28.7,12.9-28.7,28.7c0,15.8,12.9,28.7,28.7,28.7s28.7-12.9,28.7-28.7
					C120.5,279.5,107.6,266.7,91.8,266.7z M91.8,313.2c-9.8,0-17.8-8-17.8-17.8c0-9.8,8-17.8,17.8-17.8s17.8,8,17.8,17.8
					C109.6,305.2,101.6,313.2,91.8,313.2z" />
						<path class="st25" d="M91.8,277.5c-9.8,0-17.8,8-17.8,17.8c0,9.8,8,17.8,17.8,17.8s17.8-8,17.8-17.8
					C109.6,285.5,101.6,277.5,91.8,277.5z M91.8,302.3c-3.8,0-6.9-3.1-6.9-6.9c0-3.8,3.1-6.9,6.9-6.9c3.8,0,6.9,3.1,6.9,6.9
					C98.7,299.2,95.6,302.3,91.8,302.3z" />
						<circle class="st26" cx="91.8" cy="295.4" r="6.9" />
					</g>
				</g>
				<path class="st23" d="M209.1,121.1c-21.8,0-39.6,17.8-39.6,39.6c0,21.8,17.8,39.6,39.6,39.6c21.8,0,39.6-17.8,39.6-39.6
			C248.7,138.9,231,121.1,209.1,121.1z M209.1,189.4c-15.8,0-28.7-12.9-28.7-28.7s12.9-28.7,28.7-28.7s28.7,12.9,28.7,28.7
			S225,189.4,209.1,189.4z" />
				<g>
					<g>
						<g>
							<g>
								<path class="st7"
									d="M207.7,34.1h1.1c0.8,6.9,0.7,11.9,3,12.3c0,0,0.1,0,0.2,0c0,0,0.1,0,0.1,0.1c0,0,0,0.1,0.1,0.1v7.5
							c0,0,0,0.1-0.1,0.1c0,0,0,0-0.1,0h0c-0.1,0-0.1,0-0.2,0c0,0,0,0,0,0c-2.9,0.6-3.3,8.9-3.3,19.1c0,0.1,0,0.2,0,0.3
							c0,0-0.1,0.1-0.2,0.1c-0.1,0-0.1,0-0.2-0.1c0-0.1,0-0.2,0-0.3c-0.1-10.2-0.4-18.5-3.3-19.1c-0.1,0-0.1,0-0.2,0
							c0,0,0,0-0.1-0.1c0,0,0,0,0-0.1v-7.5c0,0,0-0.1,0-0.1c0,0,0.1-0.1,0.1-0.1c0.1,0,0.1,0,0.2,0C206.9,46,206.9,41,207.7,34.1z" />

								<rect x="190.7" y="18.2"
									transform="matrix(6.123234e-17 -1 1 6.123234e-17 189.468 226.986)" class="st7"
									width="35" height="1.2" />
								<g>
									<path class="st7" d="M209.5,32.9v0.5c0,0.4-0.3,0.7-0.7,0.7h-1.2c-0.4,0-0.7-0.3-0.7-0.7v-0.5c0-0.4,0.3-0.7,0.7-0.7h1.2
								C209.2,32.2,209.5,32.5,209.5,32.9z" />
									<path class="st7" d="M209.5,30.6v0.5c0,0.4-0.3,0.7-0.7,0.7h-1.2c-0.4,0-0.7-0.3-0.7-0.7v-0.5c0-0.4,0.3-0.7,0.7-0.7h1.2
								C209.2,30,209.5,30.3,209.5,30.6z" />
								</g>
							</g>
							<g>
								<rect x="207.6" y="0" class="st7" width="1.2" height="1.2" />
							</g>
							<g>
								<g>
									<path class="st8"
										d="M206.4,7.5c0,1,0.8,1.8,1.8,1.8c1,0,1.8-0.8,1.8-1.8s-0.8-1.8-1.8-1.8C207.2,5.7,206.4,6.5,206.4,7.5z" />
								</g>
								<path class="st8" d="M210.7,2.3c0,1.2-0.8,2.2-1.9,2.4c-0.2,0-0.4,0.1-0.6,0.1c-0.2,0-0.4,0-0.6-0.1c-1.1-0.3-1.9-1.3-1.9-2.4
							c0-1,0.6-1.9,1.6-2.3h1.9C210.1,0.4,210.7,1.3,210.7,2.3z" />
							</g>
						</g>
						<rect x="207.7" y="58.2" class="st7" width="1" height="46.8" />
					</g>
					<g>
						<g>
							<path class="st8" d="M206.4,77.1c0,1,0.8,1.8,1.8,1.8c1,0,1.8-0.8,1.8-1.8c0-1-0.8-1.8-1.8-1.8
						C207.2,75.2,206.4,76.1,206.4,77.1z" />
							<path class="st8" d="M206.4,87.6c0,1,0.8,1.8,1.8,1.8c1,0,1.8-0.8,1.8-1.8c0-1-0.8-1.8-1.8-1.8
						C207.2,85.8,206.4,86.6,206.4,87.6z" />
						</g>
						<path class="st8" d="M205.7,82.4c0,1.4,1.1,2.5,2.5,2.5c1.4,0,2.5-1.1,2.5-2.5c0-1.4-1.1-2.5-2.5-2.5
					C206.8,79.9,205.7,81,205.7,82.4z" />
					</g>
				</g>
				<g>
					<g>
						<g>
							<path class="st7" d="M541.2,2.2h1.1c0.8,6.9,0.7,11.9,3,12.3c0,0,0.1,0,0.2,0c0,0,0.1,0,0.1,0.1c0,0,0,0.1,0.1,0.1v7.5
						c0,0,0,0.1-0.1,0.1c0,0,0,0-0.1,0h0c-0.1,0-0.1,0-0.2,0c0,0,0,0,0,0c-2.9,0.6-3.3,35.7-3.3,45.9c0,0.1,0,0.2,0,0.3
						c0,0-0.1,0.1-0.2,0.1c-0.1,0-0.1,0-0.2-0.1c0-0.1,0-0.2,0-0.3c-0.1-10.2-0.4-45.3-3.3-45.9c-0.1,0-0.1,0-0.2,0c0,0,0,0-0.1-0.1
						c0,0,0,0,0-0.1v-7.5c0,0,0-0.1,0-0.1c0,0,0.1-0.1,0.1-0.1c0.1,0,0.1,0,0.2,0C540.5,14.1,540.4,9.1,541.2,2.2z" />
							<rect x="541.2" y="0" class="st7" width="1.2" height="4.4" />
							<g>
								<path class="st7" d="M543.1,1v0.5c0,0.4-0.3,0.7-0.7,0.7h-1.2c-0.4,0-0.7-0.3-0.7-0.7V1c0-0.4,0.3-0.7,0.7-0.7h1.2
							C542.8,0.3,543.1,0.6,543.1,1z" />
							</g>
						</g>
					</g>
					<rect x="541.3" y="45.3" class="st7" width="1" height="59.7" />
				</g>
				<g>
					<g>
						<circle class="st8" cx="541.6" cy="76.3" r="1.8" />
						<path class="st8" d="M539.7,65.8c0-1,0.8-1.8,1.8-1.8c1,0,1.8,0.8,1.8,1.8c0,1-0.8,1.8-1.8,1.8
					C540.6,67.6,539.7,66.8,539.7,65.8z" />
					</g>
					<path class="st8"
						d="M539.1,70.9c0-1.4,1.1-2.5,2.5-2.5s2.5,1.1,2.5,2.5s-1.1,2.5-2.5,2.5S539.1,72.3,539.1,70.9z" />
				</g>
				<g>
					<g>
						<g>
							<path class="st7" d="M657.6,70.9h1.1c0.8-6.9,0.7-11.9,3-12.3c0,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0-0.1,0.1-0.1v-7.5
						c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0h0c-0.1,0-0.1,0-0.2,0c0,0,0,0,0,0c-2.9-0.6-3.3-8.9-3.3-19.1c0-0.1,0-0.2,0-0.3
						c0,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0.1c0,0.1,0,0.2,0,0.3c-0.1,10.2-0.4,18.5-3.3,19.1c-0.1,0-0.1,0-0.2,0c0,0,0,0-0.1,0.1
						c0,0,0,0,0,0.1v7.5c0,0,0,0.1,0,0.1c0,0,0.1,0.1,0.1,0.1c0.1,0,0.1,0,0.2,0C656.9,59,656.8,64,657.6,70.9z" />

							<rect x="640.7" y="85.6"
								transform="matrix(-1.836970e-16 1 -1 -1.836970e-16 744.4424 -571.9874)" class="st7"
								width="35" height="1.2" />
							<g>
								<path class="st7" d="M659.5,72.1v-0.5c0-0.4-0.3-0.7-0.7-0.7h-1.2c-0.4,0-0.7,0.3-0.7,0.7v0.5c0,0.4,0.3,0.7,0.7,0.7h1.2
							C659.2,72.8,659.5,72.5,659.5,72.1z" />
								<path class="st7" d="M659.5,74.3v-0.5c0-0.4-0.3-0.7-0.7-0.7h-1.2c-0.4,0-0.7,0.3-0.7,0.7v0.5c0,0.4,0.3,0.7,0.7,0.7h1.2
							C659.2,75,659.5,74.7,659.5,74.3z" />
							</g>
						</g>
						<g>
							<path class="st7"
								d="M657.6,136.6h1.1c0.8,6.9,0.7,11.9,3,12.3c0,0,0.1,0,0.2,0c0,0,0.1,0,0.1,0.1c0,0,0,0.1,0.1,0.1v7.5
						c0,0,0,0.1-0.1,0.1c0,0,0,0-0.1,0h0c-0.1,0-0.1,0-0.2,0c0,0,0,0,0,0c-2.9,0.6-3.3,35.7-3.3,45.9c0,0.1,0,0.2,0,0.3
						c0,0-0.1,0.1-0.2,0.1c-0.1,0-0.1,0-0.2-0.1c0-0.1,0-0.2,0-0.3c-0.1-10.2-0.4-45.3-3.3-45.9c-0.1,0-0.1,0-0.2,0c0,0,0,0-0.1-0.1
						c0,0,0,0,0-0.1v-7.5c0,0,0-0.1,0-0.1c0,0,0.1-0.1,0.1-0.1c0.1,0,0.1,0,0.2,0C656.9,148.5,656.8,143.5,657.6,136.6z" />

							<rect x="640.7" y="120.6"
								transform="matrix(6.123234e-17 -1 1 6.123234e-17 536.969 779.4608)" class="st7"
								width="35" height="1.2" />
							<g>
								<path class="st7" d="M659.5,135.4v0.5c0,0.4-0.3,0.7-0.7,0.7h-1.2c-0.4,0-0.7-0.3-0.7-0.7v-0.5c0-0.4,0.3-0.7,0.7-0.7h1.2
							C659.2,134.7,659.5,135,659.5,135.4z" />
								<path class="st7" d="M659.5,133.1v0.5c0,0.4-0.3,0.7-0.7,0.7h-1.2c-0.4,0-0.7-0.3-0.7-0.7v-0.5c0-0.4,0.3-0.7,0.7-0.7h1.2
							C659.2,132.4,659.5,132.8,659.5,133.1z" />
							</g>
						</g>
						<g>
							<g>
								<path class="st8" d="M656.4,108c0-1,0.8-1.8,1.8-1.8c1,0,1.8,0.8,1.8,1.8c0,1-0.8,1.8-1.8,1.8
							C657.2,109.8,656.4,109,656.4,108z" />
								<path class="st8" d="M656.4,97.4c0-1,0.8-1.8,1.8-1.8c1,0,1.8,0.8,1.8,1.8c0,1-0.8,1.8-1.8,1.8
							C657.2,99.3,656.4,98.5,656.4,97.4z" />
							</g>
							<path class="st8" d="M655.7,102.6c0-1.4,1.1-2.5,2.5-2.5c1.4,0,2.5,1.1,2.5,2.5s-1.1,2.5-2.5,2.5
						C656.8,105.1,655.7,104,655.7,102.6z" />
						</g>
					</g>
					<rect x="657.7" y="0" class="st7" width="1" height="46.8" />
					<rect x="657.7" y="179.7" class="st7" width="1" height="59.7" />
				</g>
				<g>
					<g>
						<path class="st8" d="M656.2,210.7c0-1,0.8-1.8,1.8-1.8c1,0,1.8,0.8,1.8,1.8c0,1-0.8,1.8-1.8,1.8
					C657.1,212.5,656.2,211.7,656.2,210.7z" />
						<path class="st8" d="M656.2,200.1c0-1,0.8-1.8,1.8-1.8c1,0,1.8,0.8,1.8,1.8c0,1-0.8,1.8-1.8,1.8
					C657.1,202,656.2,201.1,656.2,200.1z" />
					</g>
					<path class="st8" d="M655.6,205.3c0-1.4,1.1-2.5,2.5-2.5c1.4,0,2.5,1.1,2.5,2.5c0,1.4-1.1,2.5-2.5,2.5
				C656.7,207.8,655.6,206.7,655.6,205.3z" />
				</g>
				<g>
					<g>
						<path class="st8"
							d="M656.2,27.9c0-1,0.8-1.8,1.8-1.8c1,0,1.8,0.8,1.8,1.8s-0.8,1.8-1.8,1.8C657.1,29.8,656.2,28.9,656.2,27.9z" />
						<path class="st8"
							d="M656.2,17.4c0-1,0.8-1.8,1.8-1.8c1,0,1.8,0.8,1.8,1.8s-0.8,1.8-1.8,1.8C657.1,19.2,656.2,18.4,656.2,17.4z" />
					</g>
					<path class="st8" d="M655.6,22.6c0-1.4,1.1-2.5,2.5-2.5c1.4,0,2.5,1.1,2.5,2.5c0,1.4-1.1,2.5-2.5,2.5
				C656.7,25.1,655.6,24,655.6,22.6z" />
				</g>
				<g>
					<g>
						<g>
							<g>
								<path class="st7" d="M376.6,0c-0.5,1.5-0.7,3.6-0.9,6c-0.2,3-0.3,6.5-0.3,10.4c0,0.1,0,0.2,0,0.4c0,0-0.1,0.1-0.2,0.1
							c-0.1,0-0.1,0-0.2-0.1v-0.3c0-3.8-0.1-7.3-0.3-10.2c-0.2-2.5-0.5-4.6-0.9-6.1H376.6z" />
							</g>
						</g>
						<rect x="374.7" y="1.2" class="st7" width="1" height="46.8" />
					</g>
					<g>
						<g>
							<path class="st8" d="M373.3,20.1c0,1,0.8,1.8,1.8,1.8c1,0,1.8-0.8,1.8-1.8s-0.8-1.8-1.8-1.8C374.1,18.2,373.3,19.1,373.3,20.1z
						" />
							<path class="st8" d="M373.3,30.6c0,1,0.8,1.8,1.8,1.8c1,0,1.8-0.8,1.8-1.8c0-1-0.8-1.8-1.8-1.8
						C374.1,28.8,373.3,29.6,373.3,30.6z" />
						</g>
						<path class="st8" d="M372.7,25.4c0,1.4,1.1,2.5,2.5,2.5c1.4,0,2.5-1.1,2.5-2.5c0-1.4-1.1-2.5-2.5-2.5
					C373.8,22.9,372.7,24,372.7,25.4z" />
					</g>
				</g>
				<g>
					<g>
						<g>
							<polygon class="st7" points="211.6,122.5 208.3,116.9 210.4,113.3 208.3,109.6 206.1,113.3 208.2,116.9 204.9,122.5 
						208.2,128.1 206.1,131.7 208.3,135.4 210.4,131.7 208.3,128.1 					" />
							<g>
								<polygon class="st7" points="212.5,240.8 208.3,233.6 211,229.1 208.3,224.4 205.5,229.1 208.2,233.6 204,240.8 208.2,247.9 
							205.5,252.4 208.3,257.1 211,252.4 208.4,247.9 						" />
								<polygon class="st7" points="202.4,234.4 203.8,228.9 207.3,228 208.3,224.4 204.7,225.3 203.7,228.8 198.2,230.3 
							196.8,235.7 193.3,236.6 192.4,240.2 196,239.3 196.9,235.8 						" />
								<polygon class="st7" points="214.1,234.4 212.6,228.9 209.1,228 208.2,224.4 211.8,225.3 212.7,228.8 218.2,230.3 
							219.6,235.7 223.1,236.6 224.1,240.2 220.5,239.3 219.6,235.8 						" />
							</g>
						</g>
						<g>
							<g>
								<g class="design">
									<path class="st27 line"
										d="M265.3,181.8c0,0.3,0,0.6,0,0.9v0c0,0.9-0.1,1.8-0.2,2.6c0,0,0,0,0,0c-0.3,2.6-0.8,5-1.7,7.4
								c-0.1,0.2-0.1,0.3-0.2,0.5c0,0.1-0.1,0.1-0.1,0.2c-0.1,0.2-0.1,0.3-0.2,0.5c-1.4,3.5-3.4,6.9-5.8,10c-2.4,3-5.3,5.8-8.5,8.2
								c0,0,0,0,0,0c-2.2,1.6-4.5,3.1-7,4.5c-0.3,0.2-0.6,0.3-0.9,0.5c-0.2,0.1-0.5,0.2-0.7,0.4c-0.2,0.1-0.4,0.2-0.7,0.3
								c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.4,0.2-0.7,0.3c-8.5,3.8-18.5,6-29.1,6c-10.6,0-20.5-2.2-29-6c-0.2-0.1-0.4-0.2-0.7-0.3
								c-0.5-0.2-0.9-0.4-1.4-0.7c-0.2-0.1-0.5-0.2-0.7-0.3c-11-5.5-19.3-13.9-23.1-23.7c-0.1-0.2-0.1-0.3-0.2-0.5
								c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.1-0.3-0.2-0.5c-1.2-3.5-1.9-7.2-1.9-11c0-0.4,0.1-0.9,0.4-1.3c0.1-0.3,0.3-0.5,0.5-0.8
								c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c5.3-4.7,28.3-8.2,55.8-8.2c10.4,0,20.1,0.5,28.5,1.4
								c14.1,1.5,24.4,4,27.5,7c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.8C265.1,180.9,265.3,181.4,265.3,181.8z" />
									<g>
										<g>
											<path class="st28" d="M192,200.6c-0.2-0.1-2.8-1.1-6.7-2.3c-1-0.3-2.1-0.6-3.3-1c-1.2-0.3-2.4-0.7-3.7-1
										c-1.3-0.3-2.6-0.6-4-0.9c-1.4-0.3-2.7-0.6-4.1-0.8c-1.4-0.2-2.8-0.4-4.2-0.6c-1.4-0.1-2.7-0.3-4.1-0.3c-0.3,0-0.7,0-1,0
										c-0.3,0-0.6,0-1,0c-0.3,0-0.6,0-0.9,0c-0.3,0-0.6,0-0.9,0c-0.6,0-1.2,0-1.8,0.1c-0.6,0-1.1,0-1.6,0.1
										c-0.5,0.1-1,0.1-1.4,0.1c-0.1-0.2-0.1-0.3-0.2-0.5c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0,0c0.5-0.1,1-0.2,1.5-0.3
										c0.5-0.1,1.1-0.2,1.7-0.3c0.6-0.1,1.2-0.1,1.8-0.2c0.3,0,0.6-0.1,0.9-0.1c0.3,0,0.6,0,1,0c0.6,0,1.3,0,2,0
										c0.7,0,1.4,0,2.1,0.1c0.7,0,1.4,0.1,2.1,0.1c1.4,0.1,2.8,0.3,4.3,0.5c1.4,0.3,2.8,0.5,4.2,0.9c1.4,0.3,2.7,0.7,4,1.1
										c1.3,0.4,2.5,0.8,3.7,1.2c1.2,0.4,2.2,0.8,3.2,1.3c2,0.8,3.6,1.6,4.7,2.2C191.3,200.2,191.9,200.6,192,200.6z" />
											<path class="st28" d="M263.2,193.2c-0.5-0.1-1-0.2-1.5-0.3c-0.5-0.1-1.1-0.2-1.7-0.3c-0.6-0.1-1.2-0.1-1.8-0.2
										c-0.3,0-0.6-0.1-0.9-0.1c-0.3,0-0.6,0-1,0c-0.7,0-1.3,0-2,0c-0.7,0-1.4,0-2.1,0.1c-0.7,0-1.4,0.1-2.1,0.1
										c-1.4,0.1-2.8,0.3-4.3,0.5c-1.4,0.3-2.8,0.5-4.2,0.9c-1.4,0.3-2.7,0.7-4,1.1c-1.3,0.4-2.5,0.8-3.7,1.2
										c-1.2,0.4-2.2,0.8-3.2,1.3c-2,0.8-3.6,1.6-4.7,2.2c-0.6,0.3-1,0.6-1.3,0.7c-0.2-0.6-0.6-1.1-0.9-1.6
										c0.2-1.2,0.3-2.2,0.2-3.1c0-1.2-0.2-2.4-0.6-3.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.2-0.4-0.3-0.5
										c-0.3-0.5-0.6-1-0.9-1.3c-0.7-0.8-1.5-1.5-2.4-2c-0.8-0.5-1.7-0.9-2.7-1.2c-0.2-0.1-0.5-0.1-0.7-0.2l-0.1,0
										c-0.2-0.1-0.4-0.1-0.6-0.2c-0.3-0.1-0.6-0.1-1-0.2l-0.4-0.1c-0.9-0.2-1.8-0.3-2.7-0.7c-0.4-0.2-0.8-0.4-1.2-0.7
										c-0.3-0.2-0.6-0.5-1-1l-0.2-0.2l-0.7,0l-0.2,0.2c-0.3,0.4-0.6,0.7-1,1c-0.4,0.3-0.8,0.5-1.2,0.7c-0.8,0.3-1.6,0.5-2.7,0.7
										c-0.1,0-0.3,0.1-0.4,0.1c-0.3,0.1-0.6,0.1-1,0.2c-0.5,0.1-1,0.2-1.4,0.4c-1,0.3-1.9,0.7-2.7,1.2c-0.9,0.5-1.7,1.2-2.4,2
										c-0.4,0.5-0.7,0.9-1,1.3c-0.3,0.5-0.5,1-0.7,1.5c-0.4,1-0.6,2.2-0.6,3.4c0,0.9,0.1,1.9,0.2,3.1c-0.6,0.8-1.1,1.8-1.3,2.9
										c-0.2,0.7-0.2,1.4-0.2,2c0,0.7,0.1,1.3,0.3,2c0.3,1,0.7,2,1.4,3c0,0,0,0,0,0c-0.2,0.2-0.4,0.5-0.7,0.8
										c-0.2,0.2-0.3,0.4-0.5,0.6c-0.2,0.2-0.4,0.4-0.7,0.6c-0.2,0.2-0.5,0.4-0.8,0.7c-0.3,0.2-0.6,0.5-0.9,0.7
										c-0.3,0.2-0.7,0.5-1,0.7c-0.4,0.2-0.7,0.5-1.1,0.7c-0.2,0.1-0.4,0.3-0.6,0.4c-0.2,0.1-0.4,0.2-0.6,0.3
										c-0.4,0.2-0.8,0.5-1.3,0.7c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.5,0.2-0.7,0.3c-0.2,0.1-0.5,0.2-0.7,0.3
										c-0.5,0.2-1,0.4-1.5,0.6c-0.5,0.2-1,0.3-1.5,0.5c-0.5,0.2-1,0.3-1.5,0.5c-0.2,0-0.3,0.1-0.5,0.1c0.5,0.2,0.9,0.4,1.4,0.7
										c0.2,0.1,0.4,0.2,0.7,0.3c0.1,0,0.3-0.1,0.4-0.1c0.5-0.2,1-0.3,1.6-0.5c0.5-0.2,1-0.4,1.5-0.6c0.2-0.1,0.5-0.2,0.7-0.3
										c0.2-0.1,0.5-0.3,0.7-0.4c0.5-0.2,0.9-0.5,1.4-0.7c0.4-0.3,0.9-0.5,1.3-0.8c0.2-0.1,0.4-0.3,0.6-0.4
										c0.2-0.1,0.4-0.3,0.6-0.4c0.4-0.3,0.7-0.6,1.1-0.8c0.3-0.3,0.6-0.6,1-0.9c0.3-0.3,0.6-0.6,0.8-0.8c0.3-0.3,0.5-0.5,0.7-0.8
										c0.2-0.3,0.4-0.5,0.6-0.7c0.2-0.2,0.3-0.5,0.4-0.7c0.3-0.4,0.4-0.7,0.5-1c0.1,0.1,0.2,0.2,0.2,0.4c0.7,0.9,1.5,1.8,2.4,2.6
										c0.8,0.6,1.7,1.3,2.7,2c0.3,0.2,0.7,0.5,1.1,0.7c0.6,0.4,1.1,0.8,1.7,1.2c0.8,0.6,1.7,1.3,2.6,2c0.9,0.8,1.6,1.6,2.3,2.5
										c0.6,0.9,1.2,1.9,1.6,3l0.6,1.2l0.6-1.2c0.4-1.1,1-2.1,1.7-3c0.6-0.8,1.4-1.6,2.3-2.5c0.9-0.8,1.8-1.4,2.6-2
										c0.5-0.4,1-0.7,1.6-1.1c0.4-0.3,0.8-0.5,1.2-0.8c1.1-0.7,1.9-1.4,2.7-2c1-0.8,1.8-1.7,2.5-2.6c0,0,0.1-0.1,0.1-0.1
										c0.1,0.2,0.2,0.5,0.4,0.7c0.1,0.2,0.3,0.4,0.4,0.7c0.2,0.2,0.4,0.5,0.6,0.7c0.2,0.3,0.5,0.5,0.7,0.8
										c0.3,0.3,0.5,0.6,0.8,0.8c0.3,0.3,0.6,0.6,1,0.9c0.3,0.3,0.7,0.6,1.1,0.8c0.2,0.1,0.4,0.3,0.6,0.4c0.2,0.1,0.4,0.3,0.6,0.4
										c0.4,0.3,0.8,0.5,1.3,0.8c0.5,0.2,0.9,0.5,1.4,0.7c0.2,0.1,0.5,0.2,0.7,0.4c0.2,0.1,0.5,0.2,0.7,0.3c0.5,0.2,1,0.4,1.5,0.6
										c0.5,0.2,1,0.4,1.6,0.5c0.1,0,0.2,0.1,0.3,0.1c0.2-0.1,0.4-0.2,0.7-0.3c0.5-0.2,0.9-0.4,1.4-0.6c-0.1,0-0.2-0.1-0.4-0.1
										c-0.5-0.2-1-0.3-1.5-0.5s-1-0.3-1.5-0.5c-0.5-0.2-1-0.4-1.5-0.6c-0.2-0.1-0.5-0.2-0.7-0.3c-0.2-0.1-0.5-0.2-0.7-0.3
										c-0.5-0.2-0.9-0.4-1.4-0.6c-0.4-0.2-0.9-0.5-1.3-0.7c-0.2-0.1-0.4-0.2-0.6-0.3c-0.2-0.1-0.4-0.2-0.6-0.4
										c-0.4-0.2-0.8-0.5-1.1-0.7c-0.3-0.3-0.7-0.5-1-0.7c-0.3-0.2-0.6-0.5-0.9-0.7c-0.3-0.2-0.6-0.4-0.8-0.7
										c-0.2-0.2-0.5-0.4-0.7-0.6c-0.2-0.2-0.4-0.4-0.5-0.6c-0.2-0.3-0.4-0.5-0.6-0.7c0.7-1,1.2-2.1,1.5-3.2
										c0.2-0.7,0.3-1.3,0.3-2c0-0.2,0-0.6,0-1c0-0.3-0.1-0.6-0.2-1c-0.1-0.4-0.2-0.8-0.4-1.2c0.9-0.3,3.2-1.2,6.3-2.2
										c1-0.3,2.1-0.6,3.3-1c1.2-0.3,2.4-0.7,3.7-1c1.3-0.3,2.6-0.6,4-0.9c1.4-0.3,2.7-0.6,4.1-0.8c1.4-0.2,2.8-0.4,4.2-0.6
										c1.4-0.1,2.7-0.3,4.1-0.3c0.3,0,0.7,0,1,0c0.3,0,0.6,0,1,0c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,0.9,0c0.6,0,1.2,0,1.8,0.1
										c0.6,0,1.1,0,1.6,0.1c0.5,0.1,1,0.1,1.4,0.1c0.1-0.2,0.1-0.3,0.2-0.5C263.2,193.4,263.2,193.3,263.2,193.2
										C263.2,193.2,263.2,193.2,263.2,193.2z M224.1,205.4c-0.3,1-0.8,2.1-1.5,3.1c-0.6,0.9-1.4,1.7-2.3,2.4
										c-0.7,0.6-1.6,1.2-2.7,2c-0.4,0.2-0.7,0.5-1.1,0.7c-0.6,0.4-1.1,0.8-1.7,1.1c-0.9,0.6-1.8,1.3-2.7,2.1
										c-1,0.9-1.7,1.7-2.4,2.6c-0.1,0.1-0.2,0.3-0.3,0.5c0,0.1-0.1,0.1-0.1,0.2c-0.1,0.2-0.3,0.4-0.4,0.7
										c-0.1,0.3-0.3,0.5-0.4,0.8c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0.1-0.3c0-0.1,0-0.3,0-0.4v-0.1c0-0.5,0-1,0.1-1.5
										c0-0.6,0-1.3,0.1-1.9v0c0.4,0,0.7,0,0.9,0c0.4,0,0.8-0.1,1.1-0.2c0.7-0.1,1.1-0.3,1.1-0.3l0.3-0.1l-0.3-0.1
										c0,0-0.5-0.2-1.1-0.3c-0.3-0.1-0.7-0.1-1.1-0.1c-0.3,0-0.6,0-0.9-0.1v-0.1c0.5,0,1-0.1,1.4-0.2c0.5-0.1,0.8-0.3,0.8-0.3
										l0.2-0.1l-0.2-0.1c0,0-0.3-0.2-0.8-0.3c-0.3-0.1-0.8-0.2-1.3-0.2c0.3,0,0.6-0.1,0.8-0.2c0.3-0.1,0.6-0.3,0.6-0.3l0.1-0.1
										l-0.1-0.1c0,0-0.2-0.2-0.6-0.3c-0.2-0.1-0.5-0.2-0.8-0.2l0-2.6c0-1,0-2.1,0-3.2c0-0.5,0-1,0-1.5c0.1,0.3,0.2,0.6,0.3,1
										c0.2,0.6,0.4,1.3,0.7,2c0.4,0.8,0.8,1.5,1.3,2c0.6,0.6,1.3,1,2.1,1.2c0.9,0.2,1.8,0.1,2.5-0.4c0.8-0.5,1.2-1.5,1.3-2.6
										c0.1-1-0.3-1.9-1-2.6c-0.6-0.6-1.2-0.9-1.9-0.9c-0.1,0-0.2,0-0.3,0c-0.4,0.1-0.8,0.3-1,0.5c-0.3,0.3-0.5,0.7-0.6,1
										c-0.1,0.4-0.1,0.8-0.1,1.1c0,0.1,0,0.2,0.1,0.2c0,0.1,0,0.1,0.1,0.2l0,0.1c0.1,0.2,0.2,0.3,0.3,0.4
										c0.2,0.2,0.5,0.3,0.7,0.3c0.2,0,0.4,0,0.6-0.2c0.4-0.2,0.5-0.5,0.6-0.7c0.1-0.2,0.1-0.3,0.1-0.3l0.1-1l-0.4,1
										c0,0,0,0.1-0.1,0.2c0,0.1-0.2,0.3-0.5,0.4c-0.3,0.1-0.6,0-0.8-0.2c-0.2-0.3-0.3-0.8-0.1-1.3c0.2-0.5,0.6-0.9,1-0.9
										c0,0,0.1,0,0.1,0c0.4,0,0.9,0.3,1.4,0.7c0.2,0.2,0.4,0.5,0.5,0.8c0,0.1,0,0.1,0,0.1l0,0.1c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1
										c0,0.1,0,0.3,0,0.5c0,0.3-0.1,0.7-0.2,1c0,0.1-0.1,0.1-0.1,0.2l-0.1,0.2l-0.2,0.2c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0-0.1,0.1
										c-0.4,0.3-1.1,0.4-1.7,0.3c-0.6-0.1-1.2-0.4-1.7-0.9c-0.4-0.4-0.8-1-1.2-1.6c-0.3-0.6-0.6-1.3-0.8-1.8
										c-0.4-1.1-0.7-2.1-0.9-2.7c0-0.3,0-0.6,0-0.9c0-0.3,0-0.6,0-0.8l0.1-0.1c0.4-0.4,0.8-0.9,1.3-1.6c0.3-0.4,0.5-0.9,0.7-1.3
										c0.2-0.6,0.4-1.1,0.4-1.7c0.1-0.6,0-1.3-0.1-1.9c-0.1-0.6-0.3-1.1-0.5-1.6l-0.1-0.2c-0.2-0.5-0.4-1-0.5-1.6
										c-0.1-0.3-0.1-0.5-0.1-0.7c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.2v-0.1c0-0.1,0-0.1,0-0.2c0-0.5,0.1-0.9,0.3-1.3
										c0.2-0.4,0.4-0.7,0.6-1c0.2-0.3,0.5-0.5,0.8-0.7c0.2-0.1,0.5-0.3,0.7-0.3c0.1,0,0.2-0.1,0.3-0.1c0.1,0,0.1,0,0.2,0
										c0.1,0,0.2,0,0.2,0l1-0.2l-1.1-0.1c0,0-0.1,0-0.2,0c-0.1,0-0.3,0-0.5,0c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.7,0.3-1,0.6
										c-0.4,0.3-0.7,0.7-0.9,1.2c-0.3,0.5-0.5,1.1-0.5,1.7c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3c0,0.1,0,0.1,0,0.2
										c0,0.4,0.1,0.7,0.1,1c0.1,0.6,0.4,1.2,0.5,1.7l0.1,0.2c0.2,0.5,0.4,1,0.5,1.4c0.1,0.5,0.2,1,0.1,1.5c0,0.5-0.1,0.9-0.3,1.4
										c-0.1,0.4-0.3,0.8-0.5,1.2c-0.3,0.6-0.6,1.1-0.8,1.4v-0.3c0-0.2,0-0.5,0-0.7c0-0.7,0-1.5,0-2.2c0-0.4,0-0.8,0-1.2
										c0-2.2-0.1-4.2-0.1-6c0-1.2-0.1-2.2-0.1-3c0-0.4,0-0.9,0-1.2c0-1-0.1-1.6-0.1-1.6h-0.2c0,0,0,0.6-0.1,1.6
										c0,0.4,0,0.8,0,1.3c0,0.8-0.1,1.8-0.1,3c-0.1,1.9-0.1,4-0.1,6c0,0.4,0,0.8,0,1.2c0,0.7,0,1.4,0,2.2c0,0.3,0,0.7,0,1
										c-0.2-0.4-0.5-0.9-0.8-1.4c-0.2-0.4-0.4-0.8-0.5-1.2c-0.2-0.5-0.3-1-0.3-1.4c0-0.5,0-1,0.1-1.5c0.1-0.5,0.3-0.9,0.5-1.4
										l0.1-0.2c0.2-0.5,0.4-1.1,0.5-1.7c0.1-0.3,0.1-0.6,0.1-1c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.3,0-0.5
										c-0.1-0.6-0.2-1.2-0.5-1.7c-0.2-0.4-0.5-0.8-0.9-1.2c-0.3-0.3-0.7-0.5-1-0.6c-0.3-0.1-0.5-0.2-0.8-0.2c-0.2,0-0.4,0-0.5,0
										c-0.1,0-0.2,0-0.2,0l-1.1,0.1l1,0.2c0,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0.1,0.3,0.1c0.2,0.1,0.4,0.2,0.7,0.3
										c0.2,0.2,0.5,0.4,0.7,0.7c0.3,0.3,0.5,0.7,0.6,1c0.2,0.4,0.3,0.9,0.3,1.3c0,0.1,0,0.1,0,0.2v0.1c0,0.1,0,0.2,0,0.2
										c0,0.1,0,0.1,0,0.2c0,0.2-0.1,0.5-0.1,0.7c-0.1,0.5-0.3,1.1-0.5,1.6l-0.1,0.2c-0.2,0.5-0.4,1-0.5,1.6
										c-0.1,0.6-0.2,1.3-0.1,1.9c0.1,0.7,0.3,1.3,0.4,1.7c0.2,0.4,0.4,0.9,0.7,1.3c0.5,0.7,0.9,1.2,1.3,1.6c0,0,0.1,0.1,0.1,0.1
										c0,0.6,0,1.2,0,1.8c-0.3,0.9-0.6,1.8-0.9,2.7c-0.2,0.6-0.5,1.2-0.8,1.8c-0.3,0.7-0.7,1.2-1.2,1.6c-0.4,0.4-1,0.7-1.7,0.9
										c-0.6,0.1-1.3,0-1.7-0.3c0,0,0,0-0.1-0.1c0,0-0.1,0-0.1-0.1l-0.2-0.3l0-0.1c0-0.1-0.1-0.1-0.1-0.2l0,0
										c-0.1-0.3-0.2-0.6-0.2-1c0-0.2,0-0.4,0-0.5c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
										c0.1-0.3,0.3-0.6,0.5-0.8c0.5-0.5,1-0.7,1.4-0.7c0.5,0,0.8,0.4,1,0.9c0.2,0.5,0.1,1-0.1,1.3c-0.2,0.2-0.4,0.3-0.5,0.3
										c-0.1,0-0.2,0-0.3-0.1c-0.3-0.1-0.5-0.4-0.5-0.4c-0.1-0.1-0.1-0.2-0.1-0.2l-0.4-1l0.1,1.1c0,0,0,0.1,0.1,0.3
										c0.1,0.2,0.3,0.5,0.6,0.7c0.2,0.1,0.4,0.2,0.6,0.2c0.3,0,0.5-0.1,0.7-0.4c0.1-0.1,0.2-0.2,0.3-0.4c0-0.1,0.1-0.2,0.1-0.2
										l0,0c0-0.1,0-0.2,0.1-0.2c0.1-0.3,0-0.7-0.1-1.1c-0.1-0.3-0.2-0.7-0.6-1c-0.3-0.3-0.6-0.5-1-0.5c-0.7-0.1-1.5,0.2-2.1,0.8
										c-0.7,0.7-1.1,1.7-1,2.6c0,1.1,0.5,2.1,1.3,2.6c0.7,0.5,1.5,0.6,2.5,0.4c0.8-0.2,1.5-0.6,2.1-1.2c0.5-0.5,0.9-1.2,1.3-2
										c0.3-0.7,0.5-1.4,0.7-2c0.1-0.3,0.2-0.6,0.3-1v0.2c0,0.4,0,0.9,0,1.3c0,0.6,0,1.2,0,1.8l0,1.6c0,0.8,0,1.6,0,2.4
										c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.6,0.3-0.6,0.3l-0.1,0.1l0.1,0.1c0,0,0.2,0.2,0.6,0.3c0.2,0.1,0.5,0.2,0.8,0.2
										c-0.5,0-1,0.1-1.3,0.2c-0.5,0.1-0.8,0.3-0.8,0.3l-0.2,0.1l0.2,0.1c0,0,0.3,0.2,0.8,0.3c0.4,0.1,0.9,0.2,1.4,0.2v0.1
										c-0.3,0-0.6,0-0.9,0.1c-0.4,0-0.8,0.1-1.1,0.1c-0.7,0.1-1.1,0.3-1.1,0.3l-0.3,0.1l0.3,0.1c0,0,0.5,0.2,1.1,0.3
										c0.3,0.1,0.7,0.1,1.1,0.1c0.3,0,0.6,0,0.9,0.1v0c0,1,0.1,2.1,0.1,3.2l0,0.6c0,0.1,0,0.2,0,0.3c0,0.1,0,0.3,0,0.4
										c-0.4-0.8-0.8-1.6-1.3-2.2c-0.7-0.9-1.5-1.8-2.4-2.6c-0.9-0.8-1.8-1.5-2.7-2.1c-0.5-0.4-1-0.7-1.6-1.1
										c-0.4-0.3-0.8-0.5-1.2-0.8c-1.1-0.7-1.9-1.3-2.6-2c-0.9-0.7-1.7-1.5-2.3-2.4c-0.7-1-1.2-2-1.5-3.1
										c-0.2-0.6-0.2-1.1-0.3-1.7c0-0.6,0-1.2,0.2-1.7c0.3-1.2,0.8-2.2,1.5-3c0.7-0.8,1.6-1.3,2.6-1.5c1-0.2,2.1-0.1,2.9,0.3
										c0.4,0.2,0.8,0.5,1.3,0.9c0.3,0.4,0.6,0.8,0.9,1.4c0.4,1.1,0.4,2.3,0,3.4c-0.4,1.1-1.2,1.9-2.2,2.2c-0.3,0.1-0.7,0.2-1,0.2
										c-0.5,0-1.2-0.1-1.8-0.7c-0.4-0.4-0.6-0.9-0.6-1.5c0-0.6,0.2-1.2,0.5-1.6l-0.2-0.2c-0.4,0.5-0.6,1.1-0.6,1.8
										c0,0.7,0.3,1.3,0.7,1.8c0.5,0.6,1.3,0.9,2.1,0.9c0.4,0,0.7-0.1,1-0.2c0.6-0.2,1.1-0.5,1.5-0.9c0.2-0.2,0.5-0.6,0.7-0.9
										l0.1-0.1c0.3-0.3,0.5-0.8,0.8-1.3c0.2-0.5,0.5-1.1,0.8-1.8c0.3-0.7,0.6-1.5,0.8-2.2c0.2-0.9,0.5-1.7,0.6-2.6
										c0.2-1.2,0.2-2.1,0-3c-0.1-0.5-0.2-1.1-0.4-1.5c-0.2-0.5-0.5-1-0.9-1.3c-0.7-0.8-1.8-1.1-2.7-0.9c-0.5,0.1-1,0.4-1.3,0.7
										c-0.4,0.3-0.7,0.8-0.9,1.2c-0.2,0.5-0.3,1-0.3,1.6c0,0.5,0.1,1,0.4,1.5c0.5,1,1.3,1.4,2.1,1.2c0.6-0.2,1.1-0.8,1.4-1.6
										c0.1-0.3,0.1-0.7,0-1c-0.1-0.2-0.1-0.3-0.2-0.4c-0.1-0.1-0.1-0.2-0.2-0.2l0,0c-0.3-0.2-0.6-0.3-0.9-0.2
										c-0.2,0-0.3,0.1-0.3,0.1l-0.8,0.6l0.9-0.4c0,0,0.1,0,0.2,0c0,0,0,0,0.1,0c0.1,0,0.4,0,0.6,0.3l0,0c0.1,0.1,0.1,0.1,0.1,0.2
										c0.1,0.1,0.1,0.2,0.1,0.3c0,0.2,0,0.4-0.1,0.7c-0.2,0.4-0.6,0.9-1,1c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0
										c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0l-0.1,0c0,0-0.1,0-0.1-0.1c-0.2-0.2-0.4-0.4-0.6-0.7
										c-0.1-0.3-0.2-0.7-0.2-1c0-0.4,0.1-0.7,0.3-1c0.2-0.3,0.4-0.6,0.6-0.8c0.3-0.2,0.6-0.4,0.9-0.5c0.6-0.1,1.3,0.1,1.8,0.6
										c0.5,0.5,0.9,1.3,1,2.2c0.1,0.8,0.1,1.7,0,2.7c-0.1,0.9-0.3,1.8-0.5,2.5c-0.2,0.9-0.4,1.6-0.6,2.2
										c-0.1,0.3-0.2,0.6-0.3,0.9v-0.1c0-0.4,0-0.7-0.1-1c0-0.1,0-0.2-0.1-0.3c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1,0-0.1
										c0-0.1-0.1-0.2-0.1-0.3c-0.4-1.2-1.3-2.2-2.4-2.7c-1-0.5-2.1-0.6-3.3-0.5c-1.1,0.2-2.2,0.7-3.1,1.6
										c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1-1-0.1-1.9,0-2.7c0.1-1.1,0.3-2.2,0.7-3.1c0.2-0.5,0.5-1,0.7-1.4c0.3-0.5,0.6-0.9,0.9-1.2
										c0.4-0.4,0.7-0.7,1.1-1c0.4-0.3,0.8-0.6,1.2-0.8c0.7-0.4,1.6-0.7,2.6-1c0.5-0.1,0.9-0.2,1.3-0.3c0.3-0.1,0.6-0.1,0.9-0.1
										c0.2,0,0.3-0.1,0.5-0.1c0.9-0.1,1.9-0.3,2.8-0.7c0.5-0.2,0.9-0.5,1.4-0.8c0.3-0.2,0.6-0.5,0.9-0.9c0.3,0.4,0.6,0.6,0.9,0.9
										c0.4,0.3,0.9,0.6,1.4,0.8c1,0.4,1.9,0.6,2.9,0.7l0.2,0c0.4,0.1,0.8,0.1,1.1,0.2c0.2,0,0.5,0.1,0.7,0.1
										c0.2,0.1,0.4,0.1,0.7,0.2c1,0.3,1.9,0.6,2.6,1c0.4,0.2,0.8,0.4,1.2,0.8c0.3,0.3,0.7,0.6,1.1,1c0.3,0.3,0.6,0.7,0.9,1.2
										c0.1,0.2,0.2,0.3,0.3,0.5l0.1,0.2c0.1,0.2,0.2,0.5,0.3,0.7c0.4,0.9,0.7,2,0.7,3.1c0.1,0.8,0,1.6,0,2.7
										c-0.1-0.1-0.1-0.1-0.2-0.2l0,0c-0.2-0.2-0.4-0.4-0.7-0.6l-0.3-0.2l-0.4-0.2c-0.2-0.1-0.4-0.2-0.5-0.2
										c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2-0.1-0.3-0.1c-0.2,0-0.3-0.1-0.5-0.1c-0.3,0-0.6-0.1-0.9-0.1c-0.8,0-1.6,0.2-2.3,0.5
										c-0.5,0.2-1,0.6-1.4,1.1l-0.1,0.1c-0.2,0.2-0.4,0.4-0.5,0.7c-0.2,0.2-0.3,0.5-0.4,0.7l-0.1,0.2c-0.2,0.6-0.3,1.3-0.3,2
										c-0.1-0.3-0.2-0.6-0.3-0.9c-0.2-0.6-0.4-1.4-0.6-2.2c-0.2-0.7-0.4-1.6-0.5-2.5c-0.1-0.9-0.1-1.8,0-2.7
										c0.1-0.9,0.5-1.6,1-2.2c0.5-0.5,1.2-0.8,1.8-0.6c0.3,0.1,0.6,0.2,0.9,0.5c0.3,0.2,0.5,0.5,0.6,0.8c0.2,0.3,0.3,0.7,0.3,1
										c0,0.3-0.1,0.7-0.2,1c-0.1,0.3-0.3,0.6-0.5,0.7c0,0,0,0-0.1,0l-0.1,0l0,0c-0.1,0-0.1,0.1-0.2,0.1c0,0,0,0-0.1,0
										c0,0,0,0,0,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-0.5-0.1-0.9-0.6-1.1-1c-0.1-0.2-0.1-0.4-0.1-0.7c0-0.1,0.1-0.2,0.1-0.2
										c0-0.1,0.1-0.1,0.1-0.2l0,0c0.2-0.2,0.5-0.3,0.6-0.3c0,0,0,0,0.1,0c0.1,0,0.2,0,0.2,0l0.9,0.4l-0.8-0.6
										c-0.1,0-0.1-0.1-0.3-0.1c-0.3-0.1-0.7,0-0.9,0.2l0,0c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.1,0.2-0.2,0.4
										c-0.1,0.3-0.1,0.7,0,1c0.2,0.8,0.7,1.3,1.4,1.6c0.8,0.3,1.6-0.2,2.1-1.2c0.2-0.4,0.4-1,0.4-1.5c0-0.5-0.1-1-0.3-1.6
										c-0.2-0.5-0.5-0.9-0.9-1.2c-0.4-0.4-0.9-0.6-1.3-0.7c-0.2,0-0.4-0.1-0.6-0.1c-0.8,0-1.6,0.4-2.1,1
										c-0.3,0.4-0.7,0.8-0.9,1.3c-0.2,0.5-0.4,1-0.4,1.5c-0.1,0.9-0.1,1.8,0.1,3c0.1,0.9,0.4,1.8,0.6,2.6
										c0.2,0.8,0.5,1.5,0.8,2.2c0.3,0.7,0.6,1.3,0.8,1.8c0.3,0.5,0.5,1,0.8,1.3c0,0,0,0,0,0.1c0.2,0.4,0.5,0.7,0.7,0.9
										c0.4,0.4,0.9,0.7,1.5,0.9c0.3,0.1,0.7,0.2,1,0.2c0.8,0,1.6-0.3,2.1-0.9c0.4-0.5,0.7-1.1,0.7-1.8c0-0.7-0.2-1.3-0.6-1.8
										l-0.2,0.2c0.4,0.4,0.5,1,0.5,1.6s-0.3,1.2-0.6,1.5c-0.6,0.6-1.3,0.7-1.8,0.7c-0.3,0-0.7-0.1-1-0.2
										c-0.5-0.2-0.9-0.4-1.3-0.8c-0.4-0.4-0.7-0.9-0.9-1.4c-0.4-1.1-0.4-2.4,0-3.4c0-0.1,0.1-0.1,0.1-0.2
										c0.1-0.2,0.2-0.4,0.3-0.5c0.1-0.2,0.3-0.4,0.4-0.6l0.1-0.1c0.4-0.4,0.8-0.7,1.3-0.9c0.9-0.4,1.9-0.5,2.9-0.3
										c0.2,0,0.3,0.1,0.5,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.1,0.1,0.2,0.1c0.2,0.1,0.3,0.1,0.4,0.2l0.3,0.2l0.3,0.2
										c0.2,0.1,0.4,0.3,0.6,0.5c0.7,0.8,1.2,1.8,1.5,3c0.1,0.3,0.1,0.6,0.1,0.9c0,0.3,0,0.6,0,0.9
										C224.4,204.3,224.3,204.9,224.1,205.4z" />
											<path class="st28" d="M191.7,208.6c0.3-0.4,0.3-1-0.1-1.3c-0.4-0.2-0.9-0.1-1.2,0.2c-0.3,0.4-0.3,0.9,0.1,1.2
										C190.8,209.1,191.4,209,191.7,208.6z" />
											<path class="st28" d="M187.5,210.4c-0.4,0.3-0.5,0.8-0.2,1.2c0.3,0.4,0.8,0.4,1.3,0.1c0.4-0.3,0.5-0.9,0.2-1.2
										C188.4,210.1,187.9,210.1,187.5,210.4z" />
											<path class="st28" d="M184.9,214.1c0.5-0.2,0.6-0.8,0.4-1.2c-0.2-0.4-0.8-0.5-1.2-0.3c-0.4,0.2-0.6,0.8-0.4,1.2
										C183.9,214.2,184.5,214.3,184.9,214.1z" />
											<path class="st28" d="M181,215.9c0.5-0.2,0.7-0.7,0.5-1.1c-0.2-0.4-0.7-0.6-1.1-0.4c-0.5,0.2-0.7,0.7-0.6,1.1
										C180,215.8,180.5,216.1,181,215.9z" />
											<path class="st28" d="M176.9,217.2c0.5-0.1,0.8-0.6,0.7-1.1c-0.1-0.4-0.6-0.7-1.1-0.6c-0.5,0.1-0.8,0.6-0.7,1.1
										C175.9,217.1,176.4,217.3,176.9,217.2z" />
											<path class="st28" d="M190.3,202.5c0.2-0.4-0.1-1-0.8-1.3c-0.6-0.3-1.3-0.1-1.4,0.3c-0.2,0.4,0.2,1,0.8,1.2
										C189.5,203,190.1,202.9,190.3,202.5z" />
											<path class="st28" d="M185.2,200.4c0.2-0.4-0.2-1-0.9-1.2c-0.6-0.2-1.3,0-1.4,0.4c-0.1,0.4,0.2,1,0.9,1.2
										C184.4,201,185,200.8,185.2,200.4z" />
											<path class="st28" d="M179,197.5c-0.6-0.2-1.3,0-1.4,0.5c-0.1,0.5,0.3,1,0.9,1.1c0.6,0.2,1.3,0,1.4-0.5
										C180.1,198.2,179.7,197.7,179,197.5z" />
											<path class="st28" d="M173.6,196.1c-0.7-0.1-1.3,0.1-1.4,0.6c-0.1,0.5,0.4,0.9,1,1.1c0.6,0.1,1.2-0.1,1.4-0.6
										C174.7,196.7,174.3,196.2,173.6,196.1z" />
											<path class="st28" d="M168.1,195.1c-0.7-0.1-1.3,0.2-1.3,0.7c-0.1,0.5,0.4,0.9,1.1,1c0.7,0.1,1.2-0.2,1.3-0.7
										C169.2,195.7,168.7,195.2,168.1,195.1z" />
											<path class="st28" d="M162.5,194.6c-0.7,0-1.2,0.3-1.3,0.8c0,0.5,0.5,0.9,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C163.7,195,163.2,194.6,162.5,194.6z" />
											<path class="st28" d="M156.8,194.5c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C158.1,194.9,157.5,194.5,156.8,194.5z" />
											<path class="st28" d="M225.9,207.3c-0.4,0.2-0.5,0.8-0.1,1.3c0.3,0.4,0.9,0.5,1.3,0.2c0.4-0.3,0.4-0.8,0.1-1.2
										C226.8,207.2,226.3,207.1,225.9,207.3z" />
											<path class="st28" d="M228.9,211.7c0.4,0.3,1,0.3,1.3-0.1c0.3-0.4,0.2-0.9-0.2-1.2c-0.4-0.3-0.9-0.3-1.2,0.1
										C228.4,210.8,228.5,211.4,228.9,211.7z" />
											<path class="st28" d="M233.3,212.6c-0.4-0.2-1-0.1-1.2,0.3c-0.2,0.4-0.1,0.9,0.4,1.2c0.5,0.2,1,0.1,1.2-0.3
										C233.9,213.3,233.8,212.8,233.3,212.6z" />
											<path class="st28" d="M237,214.3c-0.5-0.2-1,0-1.1,0.4c-0.2,0.4,0.1,1,0.5,1.1c0.5,0.2,1,0,1.2-0.5
										C237.7,215,237.5,214.5,237,214.3z" />
											<path class="st28" d="M241.6,216.6c0,0,0,0.1,0,0.1c-0.3,0.2-0.6,0.3-0.9,0.5c0,0-0.1,0-0.1,0c-0.5-0.1-0.8-0.6-0.7-1.1
										c0.1-0.5,0.6-0.7,1.1-0.6C241.4,215.7,241.7,216.1,241.6,216.6z" />
											<path class="st28" d="M228.5,202.8c0.6-0.3,1-0.8,0.8-1.2c-0.2-0.4-0.8-0.6-1.4-0.3c-0.6,0.3-1,0.8-0.8,1.3
										C227.3,202.9,227.9,203,228.5,202.8z" />
											<path class="st28" d="M234.5,199.6c-0.1-0.4-0.8-0.6-1.4-0.4c-0.6,0.2-1,0.8-0.9,1.2c0.2,0.4,0.8,0.6,1.4,0.4
										C234.3,200.6,234.6,200,234.5,199.6z" />
											<path class="st28" d="M238.9,199.1c0.6-0.2,1.1-0.7,0.9-1.1c-0.1-0.4-0.7-0.7-1.4-0.5c-0.6,0.2-1.1,0.7-0.9,1.2
										C237.6,199.1,238.2,199.3,238.9,199.1z" />
											<path class="st28" d="M243.8,196.1c-0.7,0.1-1.1,0.6-1,1.1c0.1,0.5,0.7,0.7,1.4,0.6c0.6-0.1,1.1-0.6,1-1.1
										C245.1,196.2,244.5,196,243.8,196.1z" />
											<path class="st28" d="M249.3,195.1c-0.7,0.1-1.1,0.6-1.1,1c0.1,0.5,0.7,0.7,1.3,0.7c0.7-0.1,1.1-0.5,1.1-1
										C250.6,195.3,250,195,249.3,195.1z" />
											<path class="st28" d="M254.9,194.6c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C256.2,194.9,255.6,194.5,254.9,194.6z" />
											<path class="st28" d="M260.6,194.5c-0.7,0-1.2,0.3-1.2,0.8c0,0.5,0.5,0.8,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C261.8,195,261.3,194.6,260.6,194.5z" />
										</g>
										<g>
											<path class="st29 line" d="M178.3,195.8c1.3,0.3,2.5,0.7,3.7,1c1.2,0.3,2.3,0.7,3.3,1c3.9,1.3,6.6,2.3,6.7,2.3
										c-0.1-0.1-0.7-0.4-1.7-0.9c-1.1-0.6-2.7-1.4-4.7-2.2c-1-0.4-2.1-0.8-3.2-1.3c-1.2-0.4-2.4-0.8-3.7-1.2
										c-1.3-0.4-2.6-0.8-4-1.1c-1.4-0.3-2.8-0.6-4.2-0.9c-1.4-0.2-2.9-0.4-4.3-0.5c-0.7-0.1-1.4-0.1-2.1-0.1
										c-0.7,0-1.4-0.1-2.1-0.1c-0.7,0-1.3,0-2,0c-0.3,0-0.6,0-1,0c-0.3,0-0.6,0.1-0.9,0.1c-0.6,0-1.2,0.1-1.8,0.2
										c-0.6,0.1-1.1,0.1-1.7,0.3c-0.5,0.1-1,0.2-1.5,0.3c-0.1,0-0.1,0-0.2,0c0.1,0.2,0.2,0.5,0.2,0.7c0,0,0,0,0.1,0
										c0.5,0,1-0.1,1.5-0.2c0.5-0.1,1.1-0.1,1.6-0.1c0.6,0,1.2-0.1,1.8-0.1c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,1,0
										c0.3,0,0.6,0,1,0c1.3,0,2.7,0.2,4.1,0.3c1.4,0.1,2.8,0.3,4.2,0.6c1.4,0.2,2.8,0.5,4.1,0.8
										C175.7,195.2,177,195.5,178.3,195.8z" />
											<path class="st29 line" d="M263.2,192.7c-0.5-0.1-1-0.2-1.5-0.3c-0.5-0.1-1.1-0.2-1.7-0.3c-0.6-0.1-1.2-0.1-1.8-0.2
										c-0.3,0-0.6-0.1-0.9-0.1c-0.3,0-0.6,0-1,0c-0.7,0-1.3,0-2,0c-0.7,0-1.4,0-2.1,0.1c-0.7,0-1.4,0.1-2.1,0.1
										c-1.4,0.1-2.8,0.3-4.3,0.5c-1.4,0.3-2.8,0.5-4.2,0.9c-1.4,0.3-2.7,0.7-4,1.1c-1.3,0.4-2.5,0.8-3.7,1.2
										c-1.2,0.4-2.2,0.8-3.2,1.3c-2,0.8-3.6,1.6-4.7,2.2c-0.6,0.3-1,0.6-1.3,0.7c-0.2-0.6-0.5-1.1-0.9-1.6
										c0.2-1.2,0.3-2.2,0.2-3.1c0-1.2-0.2-2.4-0.6-3.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.2-0.4-0.3-0.5
										c-0.3-0.5-0.6-1-0.9-1.3c-0.7-0.8-1.5-1.5-2.4-2c-0.8-0.5-1.7-0.9-2.7-1.2c-0.2-0.1-0.5-0.1-0.7-0.2l-0.1,0
										c-0.2-0.1-0.4-0.1-0.7-0.2c-0.3-0.1-0.6-0.1-1-0.2l-0.4-0.1c-0.9-0.2-1.8-0.3-2.7-0.7c-0.4-0.2-0.8-0.4-1.2-0.7
										c-0.3-0.2-0.6-0.5-1-1l-0.2-0.2l-0.7,0l-0.2,0.2c-0.3,0.4-0.6,0.7-1,1c-0.4,0.3-0.8,0.5-1.2,0.7c-0.8,0.3-1.6,0.5-2.7,0.7
										c-0.1,0-0.3,0.1-0.4,0.1c-0.3,0.1-0.6,0.1-1,0.2c-0.5,0.1-1,0.2-1.4,0.4c-1,0.3-1.9,0.7-2.7,1.2c-0.9,0.5-1.7,1.2-2.4,2
										c-0.4,0.5-0.7,0.9-1,1.3c-0.3,0.5-0.5,1-0.7,1.5c-0.4,1-0.6,2.2-0.6,3.4c0,0.9,0.1,1.9,0.2,3.1c-0.6,0.8-1.1,1.8-1.3,2.9
										c-0.2,0.7-0.2,1.4-0.2,2c0,0.7,0.1,1.3,0.3,2c0.3,1,0.7,2,1.4,3c0,0,0,0,0,0c-0.2,0.2-0.4,0.5-0.7,0.8
										c-0.2,0.2-0.3,0.4-0.5,0.6c-0.2,0.2-0.4,0.4-0.7,0.6c-0.2,0.2-0.5,0.4-0.8,0.7c-0.3,0.2-0.6,0.5-0.9,0.7
										c-0.3,0.2-0.7,0.5-1,0.7c-0.4,0.2-0.7,0.5-1.1,0.7c-0.2,0.1-0.4,0.3-0.6,0.4c-0.2,0.1-0.4,0.2-0.6,0.3
										c-0.4,0.2-0.8,0.5-1.3,0.7c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.5,0.2-0.7,0.3c-0.2,0.1-0.5,0.2-0.7,0.3
										c-0.5,0.2-1,0.4-1.5,0.6c-0.5,0.2-1,0.3-1.5,0.5c-0.5,0.2-1,0.3-1.5,0.5c-0.4,0.1-0.8,0.2-1.2,0.3c0.7,0.3,1.4,0.7,2.1,1
										c0.4-0.1,0.7-0.2,1.1-0.3c0.5-0.2,1-0.3,1.6-0.5c0.5-0.2,1-0.4,1.5-0.6c0.2-0.1,0.5-0.2,0.7-0.3c0.2-0.1,0.5-0.3,0.7-0.4
										c0.5-0.2,0.9-0.5,1.4-0.7c0.4-0.3,0.9-0.5,1.3-0.8c0.2-0.1,0.4-0.3,0.6-0.4c0.2-0.1,0.4-0.3,0.6-0.4
										c0.4-0.3,0.7-0.6,1.1-0.8c0.3-0.3,0.6-0.6,1-0.9c0.3-0.3,0.6-0.6,0.8-0.8s0.5-0.5,0.7-0.8c0.2-0.3,0.4-0.5,0.6-0.7
										c0.2-0.2,0.3-0.5,0.4-0.7c0.3-0.4,0.4-0.7,0.5-1c0.1,0.1,0.2,0.2,0.2,0.4c0.7,0.9,1.5,1.8,2.4,2.6c0.8,0.6,1.7,1.3,2.7,2
										c0.4,0.2,0.7,0.5,1.1,0.7c0.6,0.4,1.1,0.8,1.7,1.2c0.8,0.6,1.7,1.3,2.6,2c0.9,0.8,1.6,1.6,2.3,2.5c0.7,0.9,1.2,1.9,1.6,3
										l0.6,1.2l0.6-1.2c0.4-1.1,1-2.1,1.7-3c0.6-0.8,1.4-1.6,2.3-2.5c0.9-0.8,1.8-1.4,2.6-2c0.5-0.4,1-0.7,1.6-1.1
										c0.4-0.3,0.8-0.5,1.2-0.8c1.1-0.7,1.9-1.4,2.7-2c1-0.8,1.8-1.7,2.5-2.6c0,0,0.1-0.1,0.1-0.1c0.1,0.2,0.2,0.4,0.4,0.7
										c0.1,0.2,0.3,0.4,0.4,0.7c0.2,0.2,0.4,0.5,0.6,0.7c0.2,0.3,0.5,0.5,0.7,0.8c0.3,0.3,0.5,0.6,0.8,0.8c0.3,0.3,0.6,0.6,1,0.9
										c0.3,0.3,0.7,0.6,1.1,0.8c0.2,0.1,0.4,0.3,0.6,0.4c0.2,0.1,0.4,0.3,0.6,0.4c0.4,0.3,0.8,0.5,1.3,0.8
										c0.5,0.2,0.9,0.5,1.4,0.7c0.2,0.1,0.5,0.2,0.7,0.4c0.2,0.1,0.5,0.2,0.7,0.3c0.5,0.2,1,0.4,1.5,0.6c0.5,0.2,1,0.4,1.6,0.5
										c0.3,0.1,0.7,0.2,1,0.3c0.7-0.3,1.4-0.6,2-1c-0.3-0.1-0.7-0.2-1-0.3c-0.5-0.2-1-0.3-1.5-0.5c-0.5-0.2-1-0.3-1.5-0.5
										c-0.5-0.2-1-0.4-1.5-0.6c-0.2-0.1-0.5-0.2-0.7-0.3c-0.2-0.1-0.5-0.2-0.7-0.3c-0.5-0.2-0.9-0.4-1.4-0.6
										c-0.4-0.2-0.9-0.5-1.3-0.7c-0.2-0.1-0.4-0.2-0.6-0.3c-0.2-0.1-0.4-0.2-0.6-0.4c-0.4-0.2-0.8-0.5-1.1-0.7
										c-0.3-0.3-0.7-0.5-1-0.7c-0.3-0.2-0.6-0.5-0.9-0.7c-0.3-0.2-0.6-0.4-0.8-0.7c-0.2-0.2-0.5-0.4-0.7-0.6
										c-0.2-0.2-0.4-0.4-0.5-0.6c-0.2-0.3-0.4-0.5-0.6-0.7c0.7-1,1.2-2.1,1.5-3.2c0.2-0.7,0.3-1.3,0.3-2c0-0.2,0-0.6,0-1
										c0-0.3-0.1-0.6-0.2-1c-0.1-0.4-0.2-0.8-0.4-1.2c0.9-0.3,3.2-1.2,6.3-2.2c1-0.3,2.1-0.6,3.3-1c1.2-0.3,2.4-0.7,3.7-1
										c1.3-0.3,2.6-0.6,4-0.9c1.4-0.3,2.7-0.6,4.1-0.8c1.4-0.2,2.8-0.4,4.2-0.6c1.4-0.1,2.7-0.3,4.1-0.3c0.3,0,0.7,0,1,0
										c0.3,0,0.6,0,1,0c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,0.9,0c0.6,0,1.2,0,1.8,0.1c0.6,0,1.1,0,1.6,0.1c0.5,0.1,1,0.1,1.5,0.2
										c0,0,0.1,0,0.1,0c0.1-0.2,0.2-0.5,0.2-0.7C263.3,192.7,263.2,192.7,263.2,192.7z M224.1,204.9c-0.3,1-0.8,2.1-1.5,3.1
										c-0.6,0.9-1.4,1.7-2.3,2.4c-0.7,0.6-1.6,1.2-2.7,2c-0.4,0.2-0.7,0.5-1.1,0.7c-0.6,0.4-1.1,0.8-1.7,1.1
										c-0.9,0.6-1.8,1.3-2.7,2.1c-1,0.9-1.7,1.7-2.4,2.6c-0.1,0.1-0.2,0.3-0.3,0.5c0,0.1-0.1,0.1-0.1,0.2
										c-0.1,0.2-0.3,0.4-0.4,0.7c-0.1,0.3-0.3,0.5-0.4,0.8c0,0,0,0,0,0c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0.1-0.3c0-0.1,0-0.3,0-0.4
										c0,0,0-0.1,0-0.1c0-0.5,0-1,0.1-1.5c0-0.6,0-1.3,0.1-1.9c0,0,0,0,0,0c0.4,0,0.7,0,0.9,0c0.4,0,0.8-0.1,1.1-0.2
										c0.7-0.1,1.1-0.3,1.1-0.3l0.3-0.1l-0.3-0.1c0,0-0.5-0.2-1.1-0.3c-0.3-0.1-0.7-0.1-1.1-0.1c-0.3,0-0.6,0-0.9-0.1
										c0,0,0,0,0,0c0,0,0,0,0,0c0.5,0,1-0.1,1.4-0.2c0.5-0.1,0.8-0.3,0.8-0.3l0.2-0.1l-0.2-0.1c0,0-0.3-0.2-0.8-0.3
										c-0.4-0.1-0.8-0.2-1.3-0.2c0.3,0,0.6-0.1,0.8-0.2c0.3-0.1,0.6-0.3,0.6-0.3l0.1-0.1l-0.1-0.1c0,0-0.2-0.2-0.6-0.3
										c-0.2-0.1-0.5-0.2-0.8-0.2l0-2.6c0-1,0-2.1,0-3.2c0-0.5,0-1,0-1.5c0.1,0.3,0.2,0.6,0.3,1c0.2,0.6,0.4,1.3,0.7,2
										c0.4,0.8,0.8,1.5,1.3,2c0.6,0.6,1.3,1,2.1,1.2c0.9,0.2,1.8,0.1,2.5-0.4c0.8-0.5,1.3-1.5,1.3-2.6c0.1-1-0.3-1.9-1-2.6
										c-0.6-0.6-1.2-0.9-1.9-0.9c-0.1,0-0.2,0-0.3,0c-0.4,0.1-0.8,0.2-1,0.5c-0.3,0.3-0.5,0.7-0.6,1c-0.1,0.4-0.1,0.8-0.1,1.1
										c0,0.1,0,0.2,0.1,0.2c0,0.1,0,0.1,0.1,0.2l0,0.1c0.1,0.2,0.2,0.3,0.3,0.4c0.2,0.2,0.5,0.3,0.7,0.4c0.2,0,0.4,0,0.6-0.2
										c0.4-0.2,0.5-0.5,0.6-0.7c0.1-0.2,0.1-0.3,0.1-0.3l0.1-1l-0.4,1c0,0,0,0.1-0.1,0.2c0,0.1-0.2,0.3-0.5,0.4
										c-0.3,0.1-0.6,0-0.8-0.2c-0.2-0.3-0.3-0.8-0.1-1.3c0.2-0.5,0.6-0.9,1-0.9c0,0,0.1,0,0.1,0c0.4,0,0.9,0.3,1.4,0.7
										c0.2,0.2,0.4,0.5,0.5,0.8c0,0.1,0,0.1,0,0.1l0,0.1c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0,0.3,0,0.5c0,0.3-0.1,0.7-0.2,1
										c0,0.1-0.1,0.1-0.1,0.2l-0.1,0.2l-0.2,0.2c0,0-0.1,0-0.1,0.1c0,0-0.1,0-0.1,0.1c-0.4,0.3-1.1,0.4-1.7,0.3
										c-0.6-0.1-1.2-0.4-1.7-0.9c-0.4-0.4-0.8-1-1.2-1.6c-0.3-0.6-0.6-1.3-0.8-1.8c-0.4-1.1-0.7-2.1-0.9-2.7c0-0.3,0-0.6,0-0.9
										c0-0.3,0-0.6,0-0.8l0.1-0.1c0.4-0.4,0.8-0.9,1.3-1.6c0.3-0.4,0.5-0.9,0.7-1.3c0.2-0.6,0.4-1.1,0.4-1.7
										c0.1-0.6,0-1.3-0.1-1.9c-0.1-0.6-0.3-1.1-0.5-1.6l-0.1-0.2c-0.2-0.5-0.4-1-0.5-1.6c-0.1-0.3-0.1-0.5-0.1-0.7
										c0,0,0-0.1,0-0.2c0-0.1,0-0.2,0-0.2c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.2c0-0.5,0.1-0.9,0.3-1.3c0.2-0.4,0.4-0.7,0.6-1
										c0.2-0.3,0.5-0.5,0.7-0.7c0.2-0.1,0.5-0.3,0.7-0.3c0.1,0,0.2-0.1,0.3-0.1c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.2,0l1-0.2
										l-1.1-0.1c0,0-0.1,0-0.2,0c-0.1,0-0.3,0-0.5,0c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.7,0.3-1,0.6c-0.4,0.3-0.7,0.7-0.9,1.2
										c-0.3,0.5-0.5,1.1-0.5,1.7c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3c0,0.1,0,0.1,0,0.2c0,0.4,0.1,0.7,0.1,1
										c0.1,0.6,0.4,1.2,0.6,1.7l0.1,0.2c0.2,0.5,0.4,1,0.5,1.4c0.1,0.5,0.2,1,0.1,1.5c0,0.5-0.1,0.9-0.3,1.4
										c-0.1,0.4-0.3,0.8-0.5,1.2c-0.3,0.6-0.6,1.1-0.8,1.5c0-0.1,0-0.2,0-0.3c0-0.2,0-0.5,0-0.7c0-0.7,0-1.5,0-2.2
										c0-0.4,0-0.8,0-1.2c0-2.2-0.1-4.2-0.1-6c0-1.2-0.1-2.2-0.1-3c0-0.4,0-0.8,0-1.2c0-1-0.1-1.6-0.1-1.6l-0.2,0
										c0,0,0,0.6-0.1,1.6c0,0.4,0,0.8,0,1.3c0,0.8-0.1,1.8-0.1,3c-0.1,1.9-0.1,4-0.1,6c0,0.4,0,0.8,0,1.2c0,0.7,0,1.4,0,2.2
										c0,0.3,0,0.7,0,1c-0.2-0.4-0.5-0.9-0.8-1.5c-0.2-0.4-0.4-0.8-0.5-1.2c-0.2-0.5-0.3-1-0.3-1.4c0-0.5,0-1,0.1-1.5
										c0.1-0.5,0.3-0.9,0.5-1.4l0.1-0.2c0.2-0.5,0.4-1.1,0.6-1.7c0.1-0.3,0.1-0.6,0.1-1c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3
										c0-0.2,0-0.3,0-0.5c-0.1-0.6-0.2-1.2-0.5-1.7c-0.2-0.4-0.5-0.8-0.9-1.2c-0.3-0.3-0.7-0.5-1-0.6c-0.3-0.1-0.5-0.2-0.8-0.2
										c-0.2,0-0.4,0-0.5,0c-0.1,0-0.2,0-0.2,0l-1.1,0.1l1,0.2c0,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0.1,0.3,0.1
										c0.2,0.1,0.4,0.2,0.7,0.3c0.2,0.2,0.5,0.4,0.7,0.7c0.3,0.3,0.5,0.7,0.6,1c0.2,0.4,0.3,0.9,0.3,1.3c0,0.1,0,0.1,0,0.2
										c0,0,0,0.1,0,0.1c0,0.1,0,0.2,0,0.2c0,0.1,0,0.1,0,0.2c0,0.2-0.1,0.5-0.1,0.7c-0.1,0.5-0.3,1.1-0.5,1.6l-0.1,0.2
										c-0.2,0.5-0.4,1-0.5,1.6c-0.1,0.6-0.2,1.3-0.1,1.9c0.1,0.7,0.3,1.3,0.4,1.7c0.2,0.4,0.4,0.9,0.7,1.3
										c0.5,0.7,0.9,1.2,1.3,1.6c0,0,0.1,0.1,0.1,0.1c0,0.6,0,1.2,0,1.8c-0.3,0.9-0.6,1.8-0.9,2.7c-0.2,0.6-0.5,1.2-0.8,1.8
										c-0.3,0.7-0.7,1.2-1.2,1.6c-0.4,0.4-1,0.7-1.7,0.9c-0.6,0.1-1.3,0-1.7-0.3c0,0,0,0-0.1-0.1c0,0-0.1,0-0.1-0.1l-0.2-0.3
										l0-0.1c0-0.1-0.1-0.1-0.1-0.2l0,0c-0.1-0.3-0.2-0.6-0.2-1c0-0.2,0-0.4,0-0.5c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
										c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0.1-0.3,0.3-0.6,0.5-0.8c0.5-0.5,1-0.7,1.4-0.7c0.4,0,0.8,0.4,1,0.9
										c0.2,0.5,0.1,1-0.1,1.3c-0.2,0.2-0.4,0.3-0.5,0.3c-0.1,0-0.2,0-0.3-0.1c-0.3-0.1-0.5-0.4-0.5-0.4c-0.1-0.1-0.1-0.2-0.1-0.2
										l-0.4-1l0.1,1.1c0,0,0,0.1,0.1,0.3c0.1,0.2,0.3,0.5,0.6,0.7c0.2,0.1,0.4,0.2,0.6,0.2c0.3,0,0.5-0.1,0.7-0.4
										c0.1-0.1,0.2-0.2,0.3-0.4c0-0.1,0.1-0.2,0.1-0.2l0,0c0-0.1,0-0.2,0.1-0.2c0.1-0.3,0-0.7-0.1-1.1c-0.1-0.3-0.2-0.7-0.6-1
										c-0.3-0.3-0.6-0.5-1-0.5c-0.7-0.1-1.5,0.2-2.1,0.8c-0.7,0.7-1.1,1.7-1,2.6c0,1.1,0.5,2.1,1.3,2.6c0.7,0.5,1.5,0.6,2.5,0.4
										c0.8-0.2,1.5-0.6,2.1-1.2c0.5-0.5,0.9-1.2,1.3-2c0.3-0.7,0.5-1.4,0.7-2c0.1-0.3,0.2-0.6,0.3-1c0,0.1,0,0.1,0,0.2
										c0,0.4,0,0.9,0,1.3c0,0.6,0,1.2,0,1.8l0,1.6c0,0.8,0,1.6,0,2.4c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.6,0.3-0.6,0.3l-0.1,0.1
										l0.1,0.1c0,0,0.2,0.2,0.6,0.3c0.2,0.1,0.5,0.2,0.8,0.2c-0.5,0-1,0.1-1.3,0.2c-0.5,0.1-0.8,0.3-0.8,0.3l-0.2,0.1l0.2,0.1
										c0,0,0.3,0.2,0.8,0.3c0.4,0.1,0.9,0.2,1.4,0.2c0,0,0,0.1,0,0.1c-0.3,0-0.6,0-0.9,0.1c-0.4,0-0.8,0.1-1.1,0.1
										c-0.7,0.1-1.1,0.3-1.1,0.3l-0.3,0.1l0.3,0.1c0,0,0.5,0.2,1.1,0.3c0.3,0.1,0.7,0.1,1.1,0.1c0.3,0,0.6,0,0.9,0.1c0,0,0,0,0,0
										c0,1,0.1,2.1,0.1,3.2l0,0.6c0,0.1,0,0.2,0,0.3c0,0.1,0,0.3,0,0.4c-0.4-0.8-0.8-1.6-1.3-2.2c-0.7-0.9-1.5-1.8-2.4-2.6
										c-0.9-0.8-1.8-1.5-2.7-2.1c-0.5-0.4-1-0.7-1.6-1.1c-0.4-0.3-0.8-0.5-1.2-0.8c-1.1-0.7-1.9-1.3-2.6-2
										c-0.9-0.7-1.7-1.5-2.3-2.4c-0.7-1-1.2-2-1.5-3.1c-0.2-0.6-0.2-1.1-0.3-1.7c0-0.6,0-1.2,0.2-1.7c0.3-1.1,0.8-2.2,1.5-3
										c0.7-0.8,1.6-1.3,2.6-1.5c1-0.2,2.1-0.1,2.9,0.3c0.4,0.2,0.8,0.5,1.3,0.9c0.3,0.4,0.6,0.8,0.9,1.4c0.4,1.1,0.4,2.3,0,3.4
										c-0.4,1.1-1.2,1.9-2.2,2.2c-0.3,0.1-0.7,0.2-1,0.2c-0.5,0-1.2-0.1-1.8-0.7c-0.4-0.4-0.6-0.9-0.6-1.5c0-0.6,0.2-1.2,0.5-1.6
										l-0.2-0.2c-0.4,0.5-0.6,1.1-0.6,1.8c0,0.7,0.3,1.3,0.7,1.8c0.5,0.6,1.3,0.9,2.1,0.9c0.4,0,0.7-0.1,1-0.2
										c0.6-0.2,1.1-0.5,1.5-0.9c0.3-0.2,0.5-0.6,0.7-0.9l0.1-0.1c0.3-0.3,0.5-0.8,0.8-1.3c0.2-0.5,0.5-1.1,0.8-1.8
										c0.3-0.7,0.6-1.5,0.8-2.2c0.2-0.9,0.5-1.7,0.6-2.6c0.2-1.2,0.2-2.1,0-3c-0.1-0.6-0.2-1.1-0.4-1.5c-0.2-0.5-0.5-1-0.9-1.3
										c-0.7-0.8-1.8-1.1-2.7-0.9c-0.5,0.1-1,0.4-1.3,0.7c-0.4,0.3-0.7,0.7-0.9,1.2c-0.2,0.5-0.3,1-0.3,1.6c0,0.5,0.1,1,0.4,1.5
										c0.5,1,1.3,1.4,2.1,1.2c0.6-0.2,1.1-0.8,1.4-1.6c0.1-0.3,0.1-0.7,0-1c-0.1-0.2-0.1-0.3-0.2-0.4c-0.1-0.1-0.1-0.2-0.2-0.2
										l0,0c-0.3-0.2-0.6-0.3-0.9-0.2c-0.2,0-0.3,0.1-0.3,0.1l-0.8,0.6l0.9-0.4c0,0,0.1,0,0.2,0c0,0,0,0,0.1,0
										c0.1,0,0.4,0,0.6,0.3l0,0c0,0.1,0.1,0.1,0.1,0.2c0.1,0.1,0.1,0.2,0.1,0.3c0,0.2,0,0.4-0.1,0.7c-0.2,0.4-0.6,0.9-1,1
										c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0l0,0c0,0-0.1,0-0.1-0.1
										c-0.2-0.2-0.4-0.4-0.6-0.7c-0.1-0.3-0.2-0.7-0.2-1c0-0.4,0.1-0.7,0.3-1c0.2-0.3,0.4-0.6,0.6-0.8c0.3-0.2,0.6-0.4,0.9-0.5
										c0.6-0.1,1.3,0.1,1.8,0.6c0.5,0.5,0.9,1.3,1,2.2c0.1,0.8,0.1,1.7,0,2.6c-0.1,0.9-0.3,1.8-0.5,2.5c-0.2,0.9-0.4,1.6-0.6,2.2
										c-0.1,0.3-0.2,0.6-0.3,0.9c0,0,0,0,0-0.1c0-0.4,0-0.7-0.1-1c0-0.1,0-0.2-0.1-0.3c0,0,0-0.1,0-0.2c0-0.1,0-0.1,0-0.1
										c0-0.1,0-0.2-0.1-0.3c-0.4-1.2-1.3-2.2-2.4-2.7c-1-0.5-2.1-0.6-3.3-0.5c-1.1,0.2-2.2,0.7-3,1.6c-0.1,0.1-0.1,0.1-0.2,0.2
										c-0.1-1-0.1-1.9,0-2.7c0.1-1.1,0.3-2.2,0.7-3.1c0.2-0.5,0.5-1,0.7-1.4c0.3-0.5,0.6-0.9,0.9-1.2c0.4-0.4,0.7-0.7,1.1-1
										c0.4-0.3,0.8-0.6,1.2-0.8c0.7-0.4,1.6-0.7,2.6-1c0.5-0.1,0.9-0.2,1.3-0.3c0.3-0.1,0.6-0.1,0.9-0.1c0.2,0,0.3-0.1,0.5-0.1
										c0.9-0.1,1.9-0.3,2.9-0.7c0.5-0.2,0.9-0.5,1.4-0.8c0.3-0.2,0.6-0.5,0.9-0.9c0.3,0.4,0.6,0.7,0.9,0.9
										c0.4,0.3,0.9,0.6,1.4,0.8c1,0.4,1.9,0.6,2.9,0.7l0.2,0c0.4,0.1,0.8,0.1,1.1,0.2c0.2,0,0.5,0.1,0.7,0.1
										c0.2,0.1,0.4,0.1,0.7,0.2c1,0.3,1.9,0.6,2.6,1c0.4,0.2,0.8,0.4,1.2,0.8c0.3,0.3,0.7,0.6,1.1,1c0.3,0.3,0.6,0.7,0.9,1.2
										c0.1,0.2,0.2,0.3,0.3,0.5l0.1,0.2c0.1,0.2,0.2,0.5,0.3,0.7c0.4,0.9,0.7,2,0.7,3.1c0.1,0.8,0,1.6,0,2.7
										c-0.1-0.1-0.1-0.1-0.2-0.2l0,0c-0.2-0.2-0.4-0.4-0.7-0.6l-0.3-0.2l-0.4-0.2c-0.2-0.1-0.4-0.2-0.5-0.2
										c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2-0.1-0.3-0.1c-0.2,0-0.4-0.1-0.5-0.1c-0.3-0.1-0.6-0.1-0.9-0.1c-0.8,0-1.6,0.2-2.3,0.5
										c-0.5,0.2-1,0.6-1.4,1.1l-0.1,0.1c-0.2,0.2-0.4,0.4-0.5,0.7c-0.1,0.2-0.3,0.5-0.4,0.7l-0.1,0.2c-0.2,0.6-0.3,1.3-0.3,2
										c-0.1-0.3-0.2-0.6-0.3-0.9c-0.2-0.6-0.4-1.4-0.6-2.2c-0.2-0.7-0.4-1.6-0.5-2.5c-0.1-0.9-0.1-1.8,0-2.6
										c0.1-0.9,0.5-1.6,1-2.2c0.5-0.5,1.2-0.8,1.8-0.6c0.3,0.1,0.6,0.2,0.9,0.5c0.3,0.2,0.5,0.5,0.6,0.8c0.2,0.3,0.3,0.7,0.3,1
										c0,0.3-0.1,0.7-0.2,1c-0.1,0.3-0.3,0.6-0.5,0.7c0,0,0,0-0.1,0l-0.1,0l0,0c-0.1,0-0.1,0.1-0.2,0.1c0,0,0,0-0.1,0
										c0,0,0,0,0,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-0.5-0.1-0.9-0.6-1.1-1c-0.1-0.2-0.1-0.4-0.1-0.7c0-0.1,0.1-0.2,0.1-0.3
										c0-0.1,0.1-0.1,0.1-0.2l0,0c0.2-0.2,0.4-0.3,0.6-0.3c0,0,0,0,0,0c0.1,0,0.2,0,0.2,0l0.9,0.4l-0.8-0.6
										c-0.1,0-0.1-0.1-0.3-0.1c-0.3-0.1-0.7,0-0.9,0.2l0,0c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.1,0.2-0.2,0.4
										c-0.1,0.3-0.1,0.7,0,1c0.2,0.8,0.7,1.3,1.4,1.6c0.8,0.3,1.6-0.2,2.1-1.2c0.2-0.4,0.4-1,0.4-1.5c0-0.5-0.1-1-0.3-1.6
										c-0.2-0.5-0.5-0.9-0.9-1.2c-0.4-0.4-0.9-0.6-1.3-0.7c-0.2,0-0.4-0.1-0.6-0.1c-0.8,0-1.6,0.4-2.1,1
										c-0.4,0.4-0.7,0.8-0.9,1.3c-0.2,0.5-0.4,1-0.4,1.5c-0.1,0.9-0.1,1.8,0.1,3c0.1,0.9,0.4,1.8,0.6,2.6
										c0.2,0.8,0.5,1.5,0.8,2.2c0.3,0.7,0.6,1.3,0.8,1.8c0.3,0.5,0.5,1,0.8,1.3c0,0,0,0,0,0.1c0.2,0.4,0.4,0.7,0.7,0.9
										c0.4,0.4,0.9,0.7,1.5,0.9c0.3,0.1,0.7,0.2,1,0.2c0.8,0,1.6-0.3,2.1-0.9c0.4-0.5,0.7-1.1,0.7-1.8c0-0.7-0.2-1.3-0.6-1.8
										l-0.2,0.2c0.4,0.4,0.5,1,0.5,1.6c0,0.6-0.3,1.2-0.6,1.5c-0.6,0.6-1.3,0.7-1.8,0.7c-0.3,0-0.7-0.1-1-0.2
										c-0.5-0.2-0.9-0.4-1.3-0.8c-0.4-0.4-0.7-0.9-0.9-1.4c-0.4-1.1-0.4-2.4,0-3.4c0-0.1,0.1-0.1,0.1-0.2
										c0.1-0.2,0.2-0.4,0.3-0.5c0.1-0.2,0.3-0.4,0.4-0.6l0.1-0.1c0.4-0.4,0.8-0.7,1.2-0.9c0.9-0.4,1.9-0.5,2.9-0.3
										c0.2,0,0.3,0.1,0.5,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.1,0.1,0.2,0.1c0.2,0.1,0.3,0.1,0.4,0.2l0.3,0.2l0.3,0.2
										c0.2,0.1,0.4,0.4,0.6,0.5c0.7,0.8,1.2,1.8,1.5,3c0.1,0.3,0.1,0.6,0.1,0.9c0,0.3,0,0.6,0,0.9
										C224.4,203.8,224.3,204.4,224.1,204.9z" />
											<path class="st29" d="M191.7,208.1c0.3-0.4,0.3-1-0.1-1.3c-0.4-0.2-0.9-0.1-1.2,0.2c-0.3,0.4-0.3,0.9,0.1,1.2
										C190.8,208.6,191.4,208.5,191.7,208.1z" />
											<path class="st29" d="M187.5,209.9c-0.4,0.3-0.5,0.8-0.2,1.2c0.3,0.4,0.8,0.4,1.3,0.1c0.4-0.3,0.5-0.9,0.2-1.2
										C188.4,209.6,187.9,209.6,187.5,209.9z" />
											<path class="st29" d="M184.9,213.6c0.5-0.2,0.6-0.8,0.4-1.2c-0.2-0.4-0.8-0.5-1.2-0.3c-0.4,0.2-0.6,0.8-0.4,1.2
										S184.5,213.8,184.9,213.6z" />
											<path class="st29" d="M181,215.4c0.5-0.2,0.7-0.7,0.5-1.1c-0.2-0.4-0.7-0.6-1.1-0.4c-0.5,0.2-0.7,0.7-0.6,1.1
										C180,215.3,180.5,215.5,181,215.4z" />
											<path class="st29" d="M176.9,216.7c0.5-0.1,0.8-0.6,0.7-1.1c-0.1-0.4-0.6-0.7-1.1-0.6c-0.5,0.1-0.8,0.6-0.7,1.1
										C175.9,216.5,176.4,216.8,176.9,216.7z" />
											<path class="st29" d="M190.3,202c0.2-0.4-0.1-1-0.8-1.3c-0.6-0.3-1.3-0.1-1.4,0.3c-0.2,0.4,0.2,1,0.8,1.2
										C189.5,202.5,190.1,202.4,190.3,202z" />
											<path class="st29" d="M185.2,199.9c0.2-0.4-0.2-1-0.9-1.2c-0.6-0.2-1.3,0-1.4,0.4c-0.1,0.4,0.2,1,0.9,1.2
										C184.4,200.5,185,200.3,185.2,199.9z" />
											<path class="st29" d="M179,197c-0.6-0.2-1.3,0-1.4,0.5c-0.1,0.5,0.3,1,0.9,1.1c0.6,0.2,1.3,0,1.4-0.5
										C180.1,197.7,179.7,197.2,179,197z" />
											<path class="st29" d="M173.6,195.6c-0.7-0.1-1.3,0.1-1.4,0.6c-0.1,0.5,0.4,0.9,1,1.1c0.6,0.1,1.2-0.1,1.4-0.6
										C174.7,196.2,174.3,195.7,173.6,195.6z" />
											<path class="st29" d="M168.1,194.6c-0.7-0.1-1.3,0.2-1.3,0.7c-0.1,0.5,0.4,0.9,1.1,1c0.7,0.1,1.2-0.2,1.3-0.7
										C169.2,195.2,168.7,194.7,168.1,194.6z" />
											<path class="st29" d="M162.5,194c-0.7,0-1.2,0.3-1.3,0.8c0,0.5,0.5,0.9,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C163.7,194.5,163.2,194.1,162.5,194z" />
											<path class="st29" d="M156.8,194c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C158.1,194.4,157.5,194,156.8,194z" />
											<path class="st29" d="M225.9,206.8c-0.4,0.2-0.5,0.8-0.1,1.3c0.3,0.4,0.9,0.5,1.3,0.2c0.4-0.3,0.4-0.8,0.1-1.2
										C226.8,206.7,226.3,206.6,225.9,206.8z" />
											<path class="st29" d="M228.9,211.2c0.4,0.3,1,0.3,1.3-0.1c0.3-0.4,0.2-0.9-0.2-1.2c-0.4-0.3-0.9-0.3-1.2,0.1
										C228.4,210.3,228.5,210.9,228.9,211.2z" />
											<path class="st29" d="M233.3,212.1c-0.4-0.2-1-0.1-1.2,0.3c-0.2,0.4-0.1,0.9,0.4,1.2c0.5,0.2,1,0.1,1.2-0.3
										C233.9,212.8,233.8,212.3,233.3,212.1z" />
											<path class="st29" d="M237,213.8c-0.5-0.2-1,0-1.1,0.4c-0.2,0.4,0.1,1,0.5,1.1c0.5,0.2,1,0,1.2-0.5
										C237.7,214.5,237.5,214,237,213.8z" />
											<path class="st29" d="M240.9,215c-0.5-0.1-1,0.1-1.1,0.6c-0.1,0.4,0.2,0.9,0.7,1.1c0.5,0.1,1-0.1,1.1-0.6
										C241.7,215.6,241.4,215.2,240.9,215z" />
											<path class="st29" d="M228.5,202.3c0.6-0.3,1-0.8,0.8-1.2c-0.2-0.4-0.8-0.6-1.4-0.3c-0.6,0.3-1,0.8-0.8,1.3
										C227.3,202.4,227.9,202.5,228.5,202.3z" />
											<path class="st29" d="M234.5,199.1c-0.1-0.4-0.8-0.6-1.4-0.4c-0.6,0.2-1,0.8-0.9,1.2c0.2,0.4,0.8,0.6,1.4,0.4
										C234.3,200.1,234.6,199.5,234.5,199.1z" />
											<path class="st29" d="M238.9,198.6c0.6-0.2,1.1-0.7,0.9-1.1c-0.1-0.4-0.7-0.7-1.4-0.5c-0.6,0.2-1.1,0.7-0.9,1.2
										C237.6,198.6,238.2,198.8,238.9,198.6z" />
											<path class="st29" d="M243.8,195.6c-0.7,0.1-1.1,0.6-1,1.1c0.1,0.5,0.7,0.7,1.4,0.6c0.6-0.1,1.1-0.6,1-1.1
										C245.1,195.7,244.5,195.5,243.8,195.6z" />
											<path class="st29" d="M249.3,194.6c-0.7,0.1-1.1,0.6-1.1,1c0.1,0.5,0.7,0.7,1.3,0.7c0.7-0.1,1.1-0.5,1.1-1
										C250.6,194.8,250,194.5,249.3,194.6z" />
											<path class="st29" d="M254.9,194c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C256.2,194.4,255.6,194,254.9,194z" />
											<path class="st29" d="M260.6,194c-0.7,0-1.2,0.3-1.2,0.8c0,0.5,0.5,0.8,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C261.8,194.5,261.3,194.1,260.6,194z" />
										</g>
									</g>
									<path class="st30 line" d="M255.3,206.1c-3.7,4.1-8.4,7.7-13.7,10.6c-0.3,0.2-0.6,0.3-0.9,0.5c-0.2,0.1-0.5,0.2-0.7,0.4
								c-0.2,0.1-0.4,0.2-0.7,0.3c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.4,0.2-0.7,0.3c-8.5,3.8-18.5,6-29.1,6c-10.6,0-20.5-2.2-29-6
								c-0.2-0.1-0.4-0.2-0.7-0.3c-0.5-0.2-0.9-0.4-1.4-0.7c-0.2-0.1-0.5-0.2-0.7-0.3c-11-5.5-19.3-13.9-23.1-23.7
								c-0.1-0.2-0.1-0.3-0.2-0.5c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.1-0.3-0.2-0.5c-1.2-3.5-1.9-7.2-1.9-11c0-0.4,0.1-0.9,0.4-1.3
								c0.1-0.3,0.3-0.5,0.5-0.8c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c0.5-0.4,1.1-0.8,1.9-1.3
								c-0.1,0.2-0.1,0.4-0.1,0.6c0,3.8,0.6,7.5,1.9,11c0.1,0.2,0.1,0.3,0.2,0.5c0,0.1,0,0.1,0.1,0.2c0.1,0.2,0.1,0.3,0.2,0.5
								c3.8,9.8,12.1,18.1,23.1,23.7c0.2,0.1,0.5,0.2,0.7,0.3c0.5,0.2,0.9,0.4,1.4,0.7c0.2,0.1,0.4,0.2,0.7,0.3c8.5,3.8,18.4,6,29,6
								c10.6,0,20.6-2.2,29.1-6c0.2-0.1,0.4-0.2,0.7-0.3c0.5-0.2,0.9-0.4,1.4-0.6c0.2-0.1,0.5-0.2,0.7-0.3c0.2-0.1,0.5-0.2,0.7-0.4
								c0.3-0.2,0.6-0.3,0.9-0.5C248.6,211.5,252.2,208.9,255.3,206.1z" />
									<path class="st29" d="M265.1,181.7c0,2.3-3.5,4.6-5.1,5.2c-8.2,3.3-16.7,2.6-25.3,1.7c-8.2-0.8-17.3-2.7-23.8-8.4
								c-0.3-0.3-1.6-2-2-2h-1.1c-5.6,6.6-14.8,8.9-22.9,10c-3.2,0.4-6.5,0.7-9.8,0.8c-5.9,0.1-11.7,0.2-17.3-1.6
								c-2-0.6-6.6-2.8-6.6-5.7c0-0.3,0.1-0.6,0.2-0.9c0.1-0.3,0.3-0.5,0.5-0.7c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2
								c5.3-4.7,28.3-8.2,55.8-8.2c27.9,0,51.1,3.6,56,8.4c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.7
								C265.1,181.1,265.1,181.4,265.1,181.7z" />
									<path class="st29" d="M265.1,181.2c0,2.4-3.5,4.7-5.1,5.4c-8.2,3.4-16.7,2.6-25.3,1.8c-8.2-0.8-17.3-2.8-23.8-8.6
								c-0.3-0.3-1.6-2-2-2h-1.1c-5.6,6.7-14.8,9.1-22.9,10.3c-3.2,0.5-6.5,0.7-9.8,0.8c-5.9,0.1-11.7,0.2-17.3-1.7
								c-2-0.7-6.6-2.9-6.6-5.9c0-0.3,0.1-0.6,0.2-1c0.1-0.3,0.3-0.5,0.5-0.8c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2
								c5.3-4.8,28.3-8.5,55.8-8.5c27.9,0,51.1,3.7,56,8.7c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.3,0.4,0.5,0.5,0.8
								C265.1,180.6,265.1,180.9,265.1,181.2z" />
									<path class="st31 line" d="M265.1,181.4c0,2.3-3.5,4.6-5.1,5.2c-5,2-10.1,2.5-15.2,2.4c-3.3-0.1-6.7-0.4-10.1-0.7
								c-8.2-0.8-17.3-2.7-23.8-8.4c-0.3-0.3-1.6-2-2-2h-1.1c-5.6,6.6-14.8,8.9-22.9,10c-3.2,0.4-6.5,0.7-9.8,0.8
								c-5.9,0.1-11.7,0.2-17.3-1.6c-2-0.6-6.6-2.8-6.6-5.7c0-0.3,0.1-0.6,0.2-0.9c0.1-0.3,0.3-0.5,0.5-0.8c0.1-0.1,0.1-0.2,0.2-0.2
								c0.1-0.1,0.1-0.1,0.2-0.2c5.3-4.7,28.3-8.2,55.8-8.2c10.4,0,20.1,0.5,28.5,1.4c14.1,1.5,24.4,4,27.5,7
								c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.8C265.1,180.8,265.1,181.1,265.1,181.4z" />
									<path class="st4"
										d="M265.1,181.4c0,2.3-3.5,4.6-5.1,5.2c-5,2-10.1,2.5-15.2,2.4c-2-6.2-4.8-11.8-8.1-16.6
								c14.1,1.5,24.4,4,27.5,7c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.8C265.1,180.8,265.1,181.1,265.1,181.4z" />
									<path class="st8" d="M259.1,182.3c0,1.3-3.7,2.5-6.8,3.6c-29.6,3.8-42.9-8.6-42.9-8.6h-2c-10.3,11.8-44.9,8-45.5,7.9
								c0,0,0,0,0,0c-2.1-0.9-4.9-1.9-4.9-3c0-4.6,23.7-8.4,50.9-8.4C235.1,174,259.1,177.7,259.1,182.3z" />
									<path class="st19"
										d="M235,175.3c1.5,1,3.1,1.6,4.7,2.4c1.4,0.7,5.2,2.8,5.1,4.7c0,0.1,0,0.1,0,0.2c-0.4,1.9-5.3,2.9-6.8,3.4
								c-1.3,0.2-2.5,0.3-3.8,0.4c5.2,0.5,11.1,0.5,18-0.4c3.1-1.1,6.8-2.3,6.8-3.6C259.1,179.4,249.2,176.8,235,175.3z" />
									<path class="st28 line" d="M259.1,182.3c0,0.7-1.2,1.5-2.8,2.1c-6.7-3.1-24.7-5.4-45-5.7c-0.8-0.6-1.4-1-1.7-1.2
								c-0.1-0.1-0.3-0.2-0.5-0.2h-1.5c-0.2,0-0.4,0.1-0.5,0.2c-0.4,0.4-0.8,0.8-1.2,1.2c-20.8,0.1-39.3,2.5-46.2,5.6
								c-1.5-0.7-2.8-1.4-2.8-2.1c0-4.6,23.7-8.4,50.9-8.4C235.1,174,259.1,177.7,259.1,182.3z" />
									<rect x="207.6" y="167" class="st20" width="1.5" height="10.4" />
									<path class="st21" d="M216.9,167.4c-0.5,1-1.1,2-1.9,2.9c-0.7,0.8-1.5,1.6-2.5,2.2c-1.4,0.8-2.7,1-4.2,1.1
								c-0.2,0-0.4,0-0.6,0c-2.5-0.6-4.5-2.1-5.8-4c-1.3-1.9-1.8-4.1-1.8-6.2c0-1.3,0.2-2.5,0.6-3.8c1-3,3.4-5.4,5.3-8
								c1.8-2.5,3.1-5.4,2.3-8.2c0,0,0,0,0,0c-0.1-0.2-0.1-0.4-0.2-0.6c0.1,0.2,0.6,0.5,0.8,0.7c2,1.8,3.8,3.9,5.3,6.2
								C217.5,155,219.7,161.6,216.9,167.4z" />
									<path class="st22" d="M207.2,171c-0.8-0.3-1.5-0.6-2.2-1.2c-0.7-0.6-1.3-1.4-1.7-2.2c-0.8-1.5-1-3.1-0.9-4.7
								c0.1-0.9,0.3-1.8,0.7-2.7c1-2.1,2.9-3.7,4.5-5.4c1.6-1.8,2.9-4,2.2-6.2c0.1,0.2,0.4,0.4,0.5,0.6c1.3,1.5,2.5,3.2,3.4,4.9
								c2,4.1,3.1,9.1,0.6,13.1c-0.4,0.7-1,1.4-1.6,2c-0.5,0.5-1.1,0.9-1.8,1.3c-0.3,0.2-0.7,0.3-1,0.4c-0.2,0-0.7,0-0.8,0.1
								c0.5-0.4,1-0.9,1.3-1.5c-0.6,0.4-1.2,0.7-1.8,0.9c0.1-0.5,0.1-1,0.2-1.5c-0.3,0.5-0.6,1-0.9,1.5c-0.4-0.3-0.7-0.7-1.1-1
								c0.2,0.7,0.5,1.3,1,1.9C207.4,171.1,207.3,171.1,207.2,171z" />
									<path class="st18"
										d="M151.4,180.5c0.1-0.3,0.3-0.5,0.5-0.8C151.7,180,151.6,180.3,151.4,180.5z" />
									<path class="st18"
										d="M152.2,179.5c-0.1,0.1-0.1,0.1-0.2,0.2C152,179.7,152.1,179.6,152.2,179.5z" />
									<path class="st18"
										d="M264.9,180.5c-0.1-0.3-0.3-0.5-0.5-0.8C264.6,180,264.8,180.3,264.9,180.5z" />
									<path class="st5"
										d="M264.4,179.8c0.2,0.2,0.4,0.5,0.5,0.8C264.8,180.3,264.6,180,264.4,179.8z" />
									<path class="st4" d="M265.2,182.7L265.2,182.7c0,0.9-0.1,1.8-0.2,2.7c0,0,0,0,0,0c-0.3,2.6-0.8,5-1.7,7.4
								c-0.1,0.2-0.1,0.3-0.2,0.5c0,0.1-0.1,0.1-0.1,0.2c-0.1,0.2-0.1,0.3-0.2,0.5c-1.4,3.5-3.4,6.9-5.8,10c-2.4,3-5.3,5.8-8.5,8.2
								c0,0,0,0,0,0c-0.1-3.4-0.4-6.9-0.9-10.4c-0.7-4-1.6-7.9-2.8-11.6c5.2,0.1,10.2-0.4,15.2-2.4c1.6-0.7,5.1-2.9,5.1-5.2
								c0-0.3-0.1-0.6-0.2-0.9C265.1,181.9,265.2,182.3,265.2,182.7z" />
								</g>
								<path class="st3" d="M216.9,167.4c-0.5,1-1.1,2-1.9,2.9c-0.7,0.8-1.5,1.6-2.5,2.2c-1.4,0.8-2.7,1-4.2,1.1
							c-0.1-2-1.4-4.2-1.2-6.3c0.1-1.2,0.7-2.3,1.3-3.3c0.8-1.6,1.6-3.2,2.4-4.8c0.5-1,0.9-2,1.1-3.1c0.5-2.8-0.5-5.6-1.5-8.3
							c-0.6-1.5-1.2-3-2-4.4c0,0,0,0,0,0c-0.1-0.2-0.1-0.4-0.2-0.6c0.1,0.2,0.6,0.5,0.8,0.7c2,1.8,3.8,3.9,5.3,6.2
							C217.5,155,219.7,161.6,216.9,167.4z" />
							</g>
							<g>
								<g>
									<g>
										<g>
											<path class="st7" d="M153.1,181.7c-2-6-3-12.2-3-18.6c0-32,26.1-58.1,58.1-58.1c32,0,58.1,26.1,58.1,58.1
										c0,6.2-1,12.2-2.8,18l-1.4-0.5c1.8-5.6,2.8-11.5,2.8-17.5c0-31.2-25.4-56.6-56.6-56.6c-31.2,0-56.6,25.4-56.6,56.6
										c0,6.2,1,12.3,3,18.1L153.1,181.7z" />
										</g>
									</g>
								</g>
								<path class="st8"
									d="M156.6,182h-4.7c0-1.3,1.1-2.4,2.4-2.4C155.5,179.6,156.6,180.6,156.6,182z" />
								<path class="st8"
									d="M264.6,182h-4.7c0-1.3,1.1-2.4,2.4-2.4C263.6,179.6,264.6,180.6,264.6,182z" />
							</g>
							<g>
								<path class="st8"
									d="M212.6,105.7c0,2.4-2,4.4-4.4,4.4s-4.4-2-4.4-4.4s2-4.4,4.4-4.4S212.6,103.3,212.6,105.7z" />
								<g>
									<g>
										<path class="st8" d="M202.4,106.5c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3c0-1.8,1.5-3.3,3.3-3.3
									C200.9,103.2,202.4,104.7,202.4,106.5z" />
										<path class="st8" d="M194.7,108c0,1.3-1,2.3-2.3,2.3c-1.3,0-2.3-1-2.3-2.3s1-2.3,2.3-2.3C193.7,105.7,194.7,106.7,194.7,108
									z" />
										<circle class="st8" cx="187.4" cy="109.6" r="1.8" />
									</g>
									<g>
										<path class="st8" d="M213.9,106.5c0,1.8,1.5,3.3,3.3,3.3c1.8,0,3.3-1.5,3.3-3.3c0-1.8-1.5-3.3-3.3-3.3
									C215.4,103.2,213.9,104.7,213.9,106.5z" />
										<path class="st8"
											d="M221.6,108c0,1.3,1,2.3,2.3,2.3s2.3-1,2.3-2.3s-1-2.3-2.3-2.3S221.6,106.7,221.6,108z" />
										<circle class="st8" cx="228.9" cy="109.6" r="1.8" />
									</g>
								</g>
							</g>
							<g>
								<path class="st8" d="M152.6,148.3c2.4,0.4,4,2.8,3.5,5.2c-0.4,2.4-2.8,4-5.2,3.5c-2.4-0.4-4-2.8-3.5-5.2
							C147.8,149.5,150.2,147.9,152.6,148.3z" />
								<g>
									<g>
										<path class="st8" d="M151.5,158.5c1.8,0.3,3,2.1,2.6,3.8c-0.3,1.8-2.1,3-3.8,2.6c-1.8-0.3-3-2.1-2.6-3.8
									C148,159.4,149.7,158.2,151.5,158.5z" />
										<path class="st8" d="M151.5,166.3c1.2,0.2,2.1,1.4,1.8,2.7c-0.2,1.2-1.4,2.1-2.7,1.8c-1.2-0.2-2.1-1.4-1.8-2.7
									C149.1,166.9,150.3,166.1,151.5,166.3z" />
										<path class="st8" d="M152.1,172c1,0.2,1.6,1.1,1.4,2c-0.2,1-1.1,1.6-2,1.4c-1-0.2-1.6-1.1-1.4-2
									C150.2,172.5,151.1,171.9,152.1,172z" />
									</g>
									<g>
										<path class="st8" d="M153.6,147.2c1.8,0.3,3.5-0.8,3.8-2.6c0.3-1.8-0.8-3.5-2.6-3.8c-1.8-0.3-3.5,0.8-3.8,2.6
									C150.6,145.1,151.8,146.8,153.6,147.2z" />
										<path class="st8" d="M156.4,139.9c1.2,0.2,2.4-0.6,2.7-1.8c0.2-1.2-0.6-2.4-1.8-2.7c-1.2-0.2-2.4,0.6-2.7,1.8
									C154.4,138.5,155.2,139.7,156.4,139.9z" />
										<path class="st8" d="M159,134.7c1,0.2,1.9-0.5,2-1.4c0.2-1-0.5-1.9-1.4-2c-1-0.2-1.9,0.5-2,1.4
									C157.4,133.7,158,134.6,159,134.7z" />
									</g>
								</g>
							</g>
							<g>
								<path class="st8" d="M263.9,148.3c-2.4,0.4-4,2.8-3.5,5.2c0.4,2.4,2.8,4,5.2,3.5c2.4-0.4,4-2.8,3.5-5.2
							C268.6,149.5,266.3,147.9,263.9,148.3z" />
								<g>
									<g>
										<path class="st8" d="M265,158.5c-1.8,0.3-3,2.1-2.6,3.8c0.3,1.8,2.1,3,3.8,2.6c1.8-0.3,3-2.1,2.6-3.8
									C268.5,159.4,266.8,158.2,265,158.5z" />
										<path class="st8" d="M264.9,166.3c-1.2,0.2-2.1,1.4-1.8,2.7c0.2,1.2,1.4,2.1,2.7,1.8c1.2-0.2,2.1-1.4,1.8-2.7
									C267.3,166.9,266.2,166.1,264.9,166.3z" />
										<path class="st8"
											d="M264.4,172c-1,0.2-1.6,1.1-1.4,2c0.2,1,1.1,1.6,2,1.4c1-0.2,1.6-1.1,1.4-2S265.4,171.9,264.4,172z" />
									</g>
									<g>
										<path class="st8" d="M262.9,147.2c-1.8,0.3-3.5-0.8-3.8-2.6c-0.3-1.8,0.8-3.5,2.6-3.8c1.8-0.3,3.5,0.8,3.8,2.6
									C265.9,145.1,264.7,146.8,262.9,147.2z" />
										<path class="st8" d="M260,139.9c-1.2,0.2-2.4-0.6-2.7-1.8c-0.2-1.2,0.6-2.4,1.8-2.7c1.2-0.2,2.4,0.6,2.7,1.8
									C262.1,138.5,261.3,139.7,260,139.9z" />
										<path class="st8" d="M257.5,134.7c-1,0.2-1.9-0.5-2-1.4c-0.2-1,0.5-1.9,1.4-2c1-0.2,1.9,0.5,2,1.4
									C259.1,133.7,258.4,134.6,257.5,134.7z" />
									</g>
								</g>
							</g>
						</g>
					</g>
					<path class="st24" d="M209.1,132c-15.8,0-28.7,12.9-28.7,28.7s12.9,28.7,28.7,28.7s28.7-12.9,28.7-28.7S225,132,209.1,132z
				 M209.1,178.6c-9.8,0-17.8-8-17.8-17.8s8-17.8,17.8-17.8c9.8,0,17.8,8,17.8,17.8S219,178.6,209.1,178.6z" />
				</g>
				<path class="st25" d="M209.1,142.9c-9.8,0-17.8,8-17.8,17.8s8,17.8,17.8,17.8c9.8,0,17.8-8,17.8-17.8S219,142.9,209.1,142.9z
			 M209.1,167.7c-3.8,0-6.9-3.1-6.9-6.9s3.1-6.9,6.9-6.9c3.8,0,6.9,3.1,6.9,6.9S213,167.7,209.1,167.7z" />
				<path class="st26"
					d="M209.1,153.8c-3.8,0-6.9,3.1-6.9,6.9s3.1,6.9,6.9,6.9c3.8,0,6.9-3.1,6.9-6.9S213,153.8,209.1,153.8z" />
				<g>
					<g>
						<g>
							<polygon class="st7" points="378.4,65.5 375.1,59.9 377.2,56.3 375,52.6 372.9,56.3 375,59.9 371.7,65.5 375,71.1 372.9,74.7 
						375,78.4 377.2,74.7 375.1,71.1 					" />
							<g>
								<polygon class="st7" points="379.3,183.8 375.1,176.6 377.8,172.1 375,167.4 372.3,172.1 374.9,176.6 370.8,183.8 
							374.9,190.9 372.3,195.4 375,200.1 377.8,195.4 375.1,190.9 						" />
								<polygon class="st7" points="369.1,177.4 370.6,171.9 374.1,171 375,167.4 371.4,168.3 370.5,171.8 365,173.3 363.6,178.7 
							360.1,179.6 359.2,183.3 362.8,182.3 363.7,178.8 						" />
								<polygon class="st7" points="380.9,177.4 379.4,171.9 375.9,171 375,167.4 378.6,168.3 379.5,171.8 385,173.3 386.4,178.7 
							389.9,179.6 390.8,183.3 387.2,182.3 386.3,178.8 						" />
							</g>
						</g>
						<g>
							<g class="design">
								<g>
									<path class="st32 line" d="M432,124.8c0,0.3,0,0.6,0,0.9v0c0,0.9-0.1,1.8-0.2,2.6c0,0,0,0,0,0c-0.3,2.6-0.8,5-1.7,7.4
								c-0.1,0.2-0.1,0.3-0.2,0.5c0,0.1-0.1,0.1-0.1,0.2c-0.1,0.2-0.1,0.3-0.2,0.5c-1.4,3.5-3.4,6.9-5.8,10c-2.4,3-5.3,5.8-8.5,8.2
								c0,0,0,0,0,0c-2.2,1.6-4.5,3.1-7,4.5c-0.3,0.2-0.6,0.3-0.9,0.5c-0.2,0.1-0.5,0.2-0.7,0.4c-0.2,0.1-0.4,0.2-0.7,0.3
								c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.4,0.2-0.7,0.3c-8.5,3.8-18.5,6-29.1,6c-10.6,0-20.5-2.2-29-6c-0.2-0.1-0.4-0.2-0.7-0.3
								c-0.5-0.2-0.9-0.4-1.4-0.7c-0.2-0.1-0.5-0.2-0.7-0.3c-11-5.5-19.3-13.9-23.1-23.7c-0.1-0.2-0.1-0.3-0.2-0.5
								c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.1-0.3-0.2-0.5c-1.2-3.5-1.9-7.2-1.9-11c0-0.4,0.1-0.9,0.4-1.3c0.1-0.3,0.3-0.5,0.5-0.8
								c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c5.3-4.7,28.3-8.2,55.8-8.2c10.4,0,20.1,0.5,28.5,1.4
								c14.1,1.5,24.4,4,27.5,7c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.8C431.9,123.9,432,124.4,432,124.8z" />
									<g>
										<g>
											<path class="st33"
												d="M358.8,143.6c-0.2-0.1-2.8-1.1-6.7-2.3c-1-0.3-2.1-0.6-3.3-1c-1.2-0.3-2.4-0.7-3.7-1
										c-1.3-0.3-2.6-0.6-4-0.9c-1.4-0.3-2.7-0.6-4.1-0.8c-1.4-0.2-2.8-0.4-4.2-0.6c-1.4-0.1-2.7-0.3-4.1-0.3c-0.3,0-0.7,0-1,0
										c-0.3,0-0.6,0-1,0c-0.3,0-0.6,0-0.9,0c-0.3,0-0.6,0-0.9,0c-0.6,0-1.2,0-1.8,0.1c-0.6,0-1.1,0-1.6,0.1
										c-0.5,0.1-1,0.1-1.4,0.1c-0.1-0.2-0.1-0.3-0.2-0.5c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0,0c0.5-0.1,1-0.2,1.5-0.3
										c0.5-0.1,1.1-0.2,1.7-0.3c0.6-0.1,1.2-0.1,1.8-0.2c0.3,0,0.6-0.1,0.9-0.1c0.3,0,0.6,0,1,0c0.6,0,1.3,0,2,0
										c0.7,0,1.4,0,2.1,0.1c0.7,0,1.4,0.1,2.1,0.1c1.4,0.1,2.8,0.3,4.3,0.5c1.4,0.3,2.8,0.5,4.2,0.9c1.4,0.3,2.7,0.7,4,1.1
										c1.3,0.4,2.5,0.8,3.7,1.2c1.2,0.4,2.2,0.8,3.2,1.3c2,0.8,3.6,1.6,4.7,2.2C358.1,143.2,358.7,143.6,358.8,143.6z" />
											<path class="st33" d="M429.9,136.2c-0.5-0.1-1-0.2-1.5-0.3c-0.5-0.1-1.1-0.2-1.7-0.3c-0.6-0.1-1.2-0.1-1.8-0.2
										c-0.3,0-0.6-0.1-0.9-0.1c-0.3,0-0.6,0-1,0c-0.7,0-1.3,0-2,0c-0.7,0-1.4,0-2.1,0.1c-0.7,0-1.4,0.1-2.1,0.1
										c-1.4,0.1-2.8,0.3-4.3,0.5c-1.4,0.3-2.8,0.5-4.2,0.9c-1.4,0.3-2.7,0.7-4,1.1c-1.3,0.4-2.5,0.8-3.7,1.2
										c-1.2,0.4-2.3,0.8-3.2,1.3c-2,0.8-3.6,1.6-4.7,2.2c-0.6,0.3-1,0.6-1.3,0.7c-0.2-0.6-0.6-1.1-0.9-1.6
										c0.2-1.2,0.3-2.2,0.2-3.1c0-1.2-0.2-2.4-0.6-3.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.2-0.4-0.3-0.5
										c-0.3-0.5-0.6-1-0.9-1.3c-0.7-0.8-1.5-1.5-2.4-2c-0.8-0.5-1.7-0.9-2.7-1.2c-0.2-0.1-0.5-0.1-0.7-0.2l-0.1,0
										c-0.2-0.1-0.4-0.1-0.6-0.2c-0.3-0.1-0.6-0.1-1-0.2l-0.4-0.1c-0.9-0.2-1.8-0.3-2.7-0.7c-0.4-0.2-0.8-0.4-1.2-0.7
										c-0.3-0.2-0.6-0.5-1-1l-0.2-0.2l-0.7,0l-0.2,0.2c-0.3,0.4-0.6,0.7-1,1c-0.4,0.3-0.8,0.5-1.2,0.7c-0.8,0.3-1.6,0.5-2.7,0.7
										c-0.1,0-0.3,0.1-0.4,0.1c-0.3,0.1-0.6,0.1-1,0.2c-0.5,0.1-1,0.2-1.4,0.4c-1,0.3-1.9,0.7-2.7,1.2c-0.9,0.5-1.7,1.2-2.4,2
										c-0.4,0.5-0.7,0.9-1,1.3c-0.3,0.5-0.5,1-0.7,1.5c-0.4,1-0.6,2.2-0.6,3.4c0,0.9,0.1,1.9,0.2,3.1c-0.6,0.8-1.1,1.8-1.3,2.9
										c-0.2,0.7-0.2,1.4-0.2,2c0,0.7,0.1,1.3,0.3,2c0.3,1,0.7,2,1.4,3c0,0,0,0,0,0c-0.2,0.2-0.4,0.5-0.7,0.8
										c-0.2,0.2-0.3,0.4-0.5,0.6c-0.2,0.2-0.4,0.4-0.7,0.6c-0.2,0.2-0.5,0.4-0.8,0.7c-0.3,0.2-0.6,0.5-0.9,0.7
										c-0.3,0.2-0.7,0.5-1,0.7c-0.4,0.2-0.7,0.5-1.1,0.7c-0.2,0.1-0.4,0.3-0.6,0.4c-0.2,0.1-0.4,0.2-0.6,0.3
										c-0.4,0.2-0.8,0.5-1.3,0.7c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.5,0.2-0.7,0.3c-0.2,0.1-0.5,0.2-0.7,0.3
										c-0.5,0.2-1,0.4-1.5,0.6c-0.5,0.2-1,0.3-1.5,0.5c-0.5,0.2-1,0.3-1.5,0.5c-0.2,0-0.3,0.1-0.5,0.1c0.5,0.2,0.9,0.4,1.4,0.7
										c0.2,0.1,0.4,0.2,0.7,0.3c0.1,0,0.3-0.1,0.4-0.1c0.5-0.2,1-0.3,1.6-0.5c0.5-0.2,1-0.4,1.5-0.6c0.2-0.1,0.5-0.2,0.7-0.3
										c0.2-0.1,0.5-0.3,0.7-0.4c0.5-0.2,0.9-0.5,1.4-0.7c0.4-0.3,0.9-0.5,1.3-0.8c0.2-0.1,0.4-0.3,0.6-0.4
										c0.2-0.1,0.4-0.3,0.6-0.4c0.4-0.3,0.7-0.6,1.1-0.8c0.3-0.3,0.6-0.6,1-0.9c0.3-0.3,0.6-0.6,0.8-0.8c0.3-0.3,0.5-0.5,0.7-0.8
										c0.2-0.3,0.4-0.5,0.6-0.7c0.2-0.2,0.3-0.5,0.4-0.7c0.3-0.4,0.4-0.7,0.5-1c0.1,0.1,0.2,0.2,0.2,0.4c0.7,0.9,1.5,1.8,2.4,2.6
										c0.8,0.6,1.7,1.3,2.7,2c0.3,0.2,0.7,0.5,1.1,0.7c0.6,0.4,1.1,0.8,1.7,1.2c0.8,0.6,1.7,1.3,2.6,2c0.9,0.8,1.6,1.6,2.3,2.5
										c0.6,0.9,1.2,1.9,1.6,3l0.6,1.2l0.6-1.2c0.4-1.1,1-2.1,1.7-3c0.6-0.8,1.4-1.6,2.3-2.5c0.9-0.8,1.8-1.4,2.6-2
										c0.5-0.4,1-0.7,1.6-1.1c0.4-0.3,0.8-0.5,1.2-0.8c1.1-0.7,1.9-1.4,2.7-2c1-0.8,1.8-1.7,2.5-2.6c0,0,0.1-0.1,0.1-0.1
										c0.1,0.2,0.2,0.5,0.4,0.7c0.1,0.2,0.3,0.4,0.4,0.7c0.2,0.2,0.4,0.5,0.6,0.7c0.2,0.3,0.5,0.5,0.7,0.8
										c0.3,0.3,0.5,0.6,0.8,0.8c0.3,0.3,0.6,0.6,1,0.9c0.3,0.3,0.7,0.6,1.1,0.8c0.2,0.1,0.4,0.3,0.6,0.4c0.2,0.1,0.4,0.3,0.6,0.4
										c0.4,0.3,0.8,0.5,1.3,0.8c0.5,0.2,0.9,0.5,1.4,0.7c0.2,0.1,0.5,0.2,0.7,0.4c0.2,0.1,0.5,0.2,0.7,0.3c0.5,0.2,1,0.4,1.5,0.6
										c0.5,0.2,1,0.4,1.6,0.5c0.1,0,0.2,0.1,0.3,0.1c0.2-0.1,0.4-0.2,0.7-0.3c0.5-0.2,0.9-0.4,1.4-0.6c-0.1,0-0.2-0.1-0.4-0.1
										c-0.5-0.2-1-0.3-1.5-0.5c-0.5-0.2-1-0.3-1.5-0.5c-0.5-0.2-1-0.4-1.5-0.6c-0.2-0.1-0.5-0.2-0.7-0.3
										c-0.2-0.1-0.5-0.2-0.7-0.3c-0.5-0.2-0.9-0.4-1.4-0.6c-0.4-0.2-0.9-0.5-1.3-0.7c-0.2-0.1-0.4-0.2-0.6-0.3
										c-0.2-0.1-0.4-0.2-0.6-0.4c-0.4-0.2-0.8-0.5-1.1-0.7c-0.3-0.3-0.7-0.5-1-0.7c-0.3-0.2-0.6-0.5-0.9-0.7
										c-0.3-0.2-0.6-0.4-0.8-0.7c-0.2-0.2-0.5-0.4-0.7-0.6c-0.2-0.2-0.4-0.4-0.5-0.6c-0.2-0.3-0.4-0.5-0.6-0.7
										c0.7-1,1.2-2.1,1.5-3.2c0.2-0.7,0.3-1.3,0.3-2c0-0.2,0-0.6,0-1c0-0.3-0.1-0.6-0.2-1c-0.1-0.4-0.2-0.8-0.4-1.2
										c0.9-0.3,3.2-1.2,6.3-2.2c1-0.3,2.1-0.6,3.3-1c1.2-0.3,2.4-0.7,3.7-1c1.3-0.3,2.6-0.6,4-0.9c1.4-0.3,2.7-0.6,4.1-0.8
										c1.4-0.2,2.8-0.4,4.2-0.6c1.4-0.1,2.7-0.3,4.1-0.3c0.3,0,0.7,0,1,0c0.3,0,0.6,0,1,0c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,0.9,0
										c0.6,0,1.2,0,1.8,0.1c0.6,0,1.1,0,1.6,0.1c0.5,0.1,1,0.1,1.4,0.1c0.1-0.2,0.1-0.3,0.2-0.5
										C429.9,136.4,430,136.3,429.9,136.2C430,136.2,429.9,136.2,429.9,136.2z M390.9,148.4c-0.3,1-0.8,2.1-1.5,3.1
										c-0.6,0.9-1.4,1.7-2.3,2.4c-0.7,0.6-1.6,1.2-2.7,2c-0.4,0.2-0.7,0.5-1.1,0.7c-0.6,0.4-1.1,0.8-1.7,1.1
										c-0.9,0.6-1.8,1.3-2.7,2.1c-1,0.9-1.7,1.7-2.4,2.6c-0.1,0.1-0.2,0.3-0.3,0.5c0,0.1-0.1,0.1-0.1,0.2
										c-0.1,0.2-0.3,0.4-0.4,0.7c-0.1,0.3-0.3,0.5-0.4,0.8c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0.1-0.3c0-0.1,0-0.3,0-0.4v-0.1
										c0-0.5,0-1,0.1-1.5c0-0.6,0-1.3,0.1-1.9v0c0.4,0,0.7,0,0.9,0c0.4,0,0.8-0.1,1.1-0.2c0.7-0.1,1.1-0.3,1.1-0.3l0.3-0.1
										l-0.3-0.1c0,0-0.5-0.2-1.1-0.3c-0.3-0.1-0.7-0.1-1.1-0.1c-0.3,0-0.6,0-0.9-0.1v-0.1c0.5,0,1-0.1,1.4-0.2
										c0.5-0.1,0.8-0.3,0.8-0.3l0.2-0.1l-0.2-0.1c0,0-0.3-0.2-0.8-0.3c-0.3-0.1-0.8-0.2-1.3-0.2c0.3,0,0.6-0.1,0.8-0.2
										c0.3-0.1,0.6-0.3,0.6-0.3l0.1-0.1l-0.1-0.1c0,0-0.2-0.2-0.6-0.3c-0.2-0.1-0.5-0.2-0.8-0.2l0-2.6c0-1,0-2.1,0-3.2
										c0-0.5,0-1,0-1.5c0.1,0.3,0.2,0.6,0.3,1c0.2,0.6,0.4,1.3,0.7,2c0.4,0.8,0.8,1.5,1.3,2c0.6,0.6,1.3,1,2.1,1.2
										c0.9,0.2,1.8,0.1,2.5-0.4c0.8-0.5,1.2-1.5,1.3-2.6c0.1-1-0.3-1.9-1-2.6c-0.6-0.6-1.2-0.9-1.9-0.9c-0.1,0-0.2,0-0.3,0
										c-0.4,0.1-0.8,0.3-1,0.5c-0.3,0.3-0.5,0.7-0.6,1c-0.1,0.4-0.1,0.8-0.1,1.1c0,0.1,0,0.2,0.1,0.2c0,0.1,0,0.1,0.1,0.2l0,0.1
										c0.1,0.2,0.2,0.3,0.3,0.4c0.2,0.2,0.5,0.3,0.7,0.3c0.2,0,0.4,0,0.6-0.2c0.4-0.2,0.5-0.5,0.6-0.7c0.1-0.2,0.1-0.3,0.1-0.3
										l0.1-1l-0.4,1c0,0,0,0.1-0.1,0.2c0,0.1-0.2,0.3-0.5,0.4c-0.3,0.1-0.6,0-0.8-0.2c-0.2-0.3-0.3-0.8-0.1-1.3
										c0.2-0.5,0.6-0.9,1-0.9c0,0,0.1,0,0.1,0c0.4,0,0.9,0.3,1.4,0.7c0.2,0.2,0.4,0.5,0.5,0.8c0,0.1,0,0.1,0,0.1l0,0.1
										c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0,0.3,0,0.5c0,0.3-0.1,0.7-0.2,1c0,0.1-0.1,0.1-0.1,0.2l-0.1,0.2l-0.2,0.2
										c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0-0.1,0.1c-0.4,0.3-1.1,0.4-1.7,0.3c-0.6-0.1-1.2-0.4-1.7-0.9c-0.4-0.4-0.8-1-1.2-1.6
										c-0.3-0.6-0.6-1.3-0.8-1.8c-0.4-1.1-0.7-2.1-0.9-2.7c0-0.3,0-0.6,0-0.9c0-0.3,0-0.6,0-0.8l0.1-0.1c0.4-0.4,0.8-0.9,1.3-1.6
										c0.3-0.4,0.5-0.9,0.7-1.3c0.2-0.6,0.4-1.1,0.4-1.7c0.1-0.6,0-1.3-0.1-1.9c-0.1-0.6-0.3-1.1-0.5-1.6l-0.1-0.2
										c-0.2-0.5-0.4-1-0.5-1.6c-0.1-0.3-0.1-0.5-0.1-0.7c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.2v-0.1c0-0.1,0-0.1,0-0.2
										c0-0.5,0.1-0.9,0.3-1.3c0.2-0.4,0.4-0.7,0.6-1c0.2-0.3,0.5-0.5,0.8-0.7c0.2-0.1,0.5-0.3,0.7-0.3c0.1,0,0.2-0.1,0.3-0.1
										c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.2,0l1-0.2l-1.1-0.1c0,0-0.1,0-0.2,0c-0.1,0-0.3,0-0.5,0c-0.3,0-0.6,0.1-0.8,0.2
										c-0.3,0.1-0.7,0.3-1,0.6c-0.4,0.3-0.7,0.7-0.9,1.2c-0.3,0.5-0.5,1.1-0.5,1.7c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3
										c0,0.1,0,0.1,0,0.2c0,0.4,0.1,0.7,0.1,1c0.1,0.6,0.4,1.2,0.5,1.7l0.1,0.2c0.2,0.5,0.4,1,0.5,1.4c0.1,0.5,0.2,1,0.1,1.5
										c0,0.5-0.1,0.9-0.3,1.4c-0.1,0.4-0.3,0.8-0.5,1.2c-0.3,0.6-0.6,1.1-0.8,1.4v-0.3c0-0.2,0-0.5,0-0.7c0-0.7,0-1.5,0-2.2
										c0-0.4,0-0.8,0-1.2c0-2.2-0.1-4.2-0.1-6c0-1.2-0.1-2.2-0.1-3c0-0.4,0-0.9,0-1.2c0-1-0.1-1.6-0.1-1.6h-0.2
										c0,0,0,0.6-0.1,1.6c0,0.4,0,0.8,0,1.3c0,0.8-0.1,1.8-0.1,3c-0.1,1.9-0.1,4-0.1,6c0,0.4,0,0.8,0,1.2c0,0.7,0,1.4,0,2.2
										c0,0.3,0,0.7,0,1c-0.2-0.4-0.5-0.9-0.8-1.4c-0.2-0.4-0.4-0.8-0.5-1.2c-0.2-0.5-0.3-1-0.3-1.4c0-0.5,0-1,0.1-1.5
										c0.1-0.5,0.3-0.9,0.5-1.4l0.1-0.2c0.2-0.5,0.4-1.1,0.5-1.7c0.1-0.3,0.1-0.6,0.1-1c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3
										c0-0.2,0-0.3,0-0.5c-0.1-0.6-0.2-1.2-0.5-1.7c-0.2-0.4-0.5-0.8-0.9-1.2c-0.3-0.3-0.7-0.5-1-0.6c-0.3-0.1-0.5-0.2-0.8-0.2
										c-0.2,0-0.4,0-0.5,0c-0.1,0-0.2,0-0.2,0l-1.1,0.1l1,0.2c0,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0.1,0.3,0.1
										c0.2,0.1,0.4,0.2,0.7,0.3c0.2,0.2,0.5,0.4,0.7,0.7c0.3,0.3,0.5,0.7,0.6,1c0.2,0.4,0.3,0.9,0.3,1.3c0,0.1,0,0.1,0,0.2v0.1
										c0,0.1,0,0.2,0,0.2c0,0.1,0,0.1,0,0.2c0,0.2-0.1,0.5-0.1,0.7c-0.1,0.5-0.3,1.1-0.5,1.6l-0.1,0.2c-0.2,0.5-0.4,1-0.5,1.6
										c-0.1,0.6-0.2,1.3-0.1,1.9c0.1,0.7,0.3,1.3,0.4,1.7c0.2,0.4,0.4,0.9,0.7,1.3c0.5,0.7,0.9,1.2,1.3,1.6c0,0,0.1,0.1,0.1,0.1
										c0,0.6,0,1.2,0,1.8c-0.3,0.9-0.6,1.8-0.9,2.7c-0.2,0.6-0.5,1.2-0.8,1.8c-0.3,0.7-0.7,1.2-1.2,1.6c-0.4,0.4-1,0.7-1.7,0.9
										c-0.6,0.1-1.3,0-1.7-0.3c0,0,0,0-0.1-0.1c0,0-0.1,0-0.1-0.1l-0.2-0.3l0-0.1c0-0.1-0.1-0.1-0.1-0.2l0,0
										c-0.1-0.3-0.2-0.6-0.2-1c0-0.2,0-0.4,0-0.5c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
										c0.1-0.3,0.3-0.6,0.5-0.8c0.5-0.5,1-0.7,1.4-0.7c0.5,0,0.8,0.4,1,0.9c0.2,0.5,0.1,1-0.1,1.3c-0.2,0.2-0.4,0.3-0.5,0.3
										c-0.1,0-0.2,0-0.3-0.1c-0.3-0.1-0.5-0.4-0.5-0.4c-0.1-0.1-0.1-0.2-0.1-0.2l-0.4-1l0.1,1.1c0,0,0,0.1,0.1,0.3
										c0.1,0.2,0.3,0.5,0.6,0.7c0.2,0.1,0.4,0.2,0.6,0.2c0.3,0,0.5-0.1,0.7-0.4c0.1-0.1,0.2-0.2,0.3-0.4c0-0.1,0.1-0.2,0.1-0.2
										l0,0c0-0.1,0-0.2,0.1-0.2c0.1-0.3,0-0.7-0.1-1.1c-0.1-0.3-0.2-0.7-0.6-1c-0.3-0.3-0.6-0.5-1-0.5c-0.7-0.1-1.5,0.2-2.1,0.8
										c-0.7,0.7-1.1,1.7-1,2.6c0,1.1,0.5,2.1,1.3,2.6c0.7,0.5,1.5,0.6,2.5,0.4c0.8-0.2,1.5-0.6,2.1-1.2c0.5-0.5,0.9-1.2,1.3-2
										c0.3-0.7,0.5-1.4,0.7-2c0.1-0.3,0.2-0.6,0.3-1v0.2c0,0.4,0,0.9,0,1.3c0,0.6,0,1.2,0,1.8l0,1.6c0,0.8,0,1.6,0,2.4
										c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.6,0.3-0.6,0.3l-0.1,0.1l0.1,0.1c0,0,0.2,0.2,0.6,0.3c0.2,0.1,0.5,0.2,0.8,0.2
										c-0.5,0-1,0.1-1.3,0.2c-0.5,0.1-0.8,0.3-0.8,0.3l-0.2,0.1l0.2,0.1c0,0,0.3,0.2,0.8,0.3c0.4,0.1,0.9,0.2,1.4,0.2v0.1
										c-0.3,0-0.6,0-0.9,0.1c-0.4,0-0.8,0.1-1.1,0.1c-0.7,0.1-1.1,0.3-1.1,0.3l-0.3,0.1l0.3,0.1c0,0,0.5,0.2,1.1,0.3
										c0.3,0.1,0.7,0.1,1.1,0.1c0.3,0,0.6,0,0.9,0.1v0c0,1,0.1,2.1,0.1,3.2l0,0.6c0,0.1,0,0.2,0,0.3c0,0.1,0,0.3,0,0.4
										c-0.4-0.8-0.8-1.6-1.3-2.2c-0.7-0.9-1.5-1.8-2.4-2.6c-0.9-0.8-1.8-1.5-2.7-2.1c-0.5-0.4-1-0.7-1.6-1.1
										c-0.4-0.3-0.8-0.5-1.2-0.8c-1.1-0.7-1.9-1.3-2.6-2c-0.9-0.7-1.7-1.5-2.3-2.4c-0.7-1-1.2-2-1.5-3.1
										c-0.2-0.6-0.2-1.1-0.3-1.7c0-0.6,0-1.2,0.2-1.7c0.3-1.2,0.8-2.2,1.5-3c0.7-0.8,1.6-1.3,2.6-1.5c1-0.2,2.1-0.1,2.9,0.3
										c0.4,0.2,0.8,0.5,1.3,0.9c0.3,0.4,0.6,0.8,0.9,1.4c0.4,1.1,0.4,2.3,0,3.4c-0.4,1.1-1.2,1.9-2.2,2.2c-0.3,0.1-0.7,0.2-1,0.2
										c-0.5,0-1.2-0.1-1.8-0.7c-0.4-0.4-0.6-0.9-0.6-1.5c0-0.6,0.2-1.2,0.5-1.6l-0.2-0.2c-0.4,0.5-0.6,1.1-0.6,1.8
										c0,0.7,0.3,1.3,0.7,1.8c0.5,0.6,1.3,0.9,2.1,0.9c0.4,0,0.7-0.1,1-0.2c0.6-0.2,1.1-0.5,1.5-0.9c0.2-0.2,0.5-0.6,0.7-0.9
										l0.1-0.1c0.3-0.3,0.5-0.8,0.8-1.3c0.2-0.5,0.5-1.1,0.8-1.8c0.3-0.7,0.6-1.5,0.8-2.2c0.2-0.9,0.5-1.7,0.6-2.6
										c0.2-1.2,0.2-2.1,0-3c-0.1-0.5-0.2-1.1-0.4-1.5c-0.2-0.5-0.5-1-0.9-1.3c-0.7-0.8-1.8-1.1-2.7-0.9c-0.5,0.1-1,0.4-1.3,0.7
										c-0.4,0.3-0.7,0.8-0.9,1.2c-0.2,0.5-0.3,1-0.3,1.6c0,0.5,0.1,1,0.4,1.5c0.5,1,1.3,1.4,2.1,1.2c0.6-0.2,1.1-0.8,1.4-1.6
										c0.1-0.3,0.1-0.7,0-1c-0.1-0.2-0.1-0.3-0.2-0.4c-0.1-0.1-0.1-0.2-0.2-0.2l0,0c-0.3-0.2-0.6-0.3-0.9-0.2
										c-0.2,0-0.3,0.1-0.3,0.1l-0.8,0.6l0.9-0.4c0,0,0.1,0,0.2,0c0,0,0,0,0.1,0c0.1,0,0.4,0,0.6,0.3l0,0c0.1,0.1,0.1,0.1,0.1,0.2
										c0.1,0.1,0.1,0.2,0.1,0.3c0,0.2,0,0.4-0.1,0.7c-0.2,0.4-0.6,0.9-1,1c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0
										c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0l-0.1,0c0,0-0.1,0-0.1-0.1c-0.2-0.2-0.4-0.4-0.6-0.7
										c-0.1-0.3-0.2-0.7-0.2-1c0-0.4,0.1-0.7,0.3-1c0.2-0.3,0.4-0.6,0.6-0.8c0.3-0.2,0.6-0.4,0.9-0.5c0.6-0.1,1.3,0.1,1.8,0.6
										c0.5,0.5,0.9,1.3,1,2.2c0.1,0.8,0.1,1.7,0,2.7c-0.1,0.9-0.3,1.8-0.5,2.5c-0.2,0.9-0.4,1.6-0.6,2.2
										c-0.1,0.3-0.2,0.6-0.3,0.9v-0.1c0-0.4,0-0.7-0.1-1c0-0.1,0-0.2-0.1-0.3c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1,0-0.1
										c0-0.1-0.1-0.2-0.1-0.3c-0.4-1.2-1.3-2.2-2.4-2.7c-1-0.5-2.1-0.6-3.3-0.5c-1.1,0.2-2.2,0.7-3.1,1.6
										c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1-1-0.1-1.9,0-2.7c0.1-1.1,0.3-2.2,0.7-3.1c0.2-0.5,0.5-1,0.7-1.4c0.3-0.5,0.6-0.9,0.9-1.2
										c0.4-0.4,0.7-0.7,1.1-1c0.4-0.3,0.8-0.6,1.2-0.8c0.7-0.4,1.6-0.7,2.6-1c0.5-0.1,0.9-0.2,1.3-0.3c0.3-0.1,0.6-0.1,0.9-0.1
										c0.2,0,0.3-0.1,0.5-0.1c0.9-0.1,1.9-0.3,2.8-0.7c0.5-0.2,0.9-0.5,1.4-0.8c0.3-0.2,0.6-0.5,0.9-0.9c0.3,0.4,0.6,0.6,0.9,0.9
										c0.4,0.3,0.9,0.6,1.4,0.8c1,0.4,1.9,0.6,2.9,0.7l0.2,0c0.4,0.1,0.8,0.1,1.1,0.2c0.2,0,0.5,0.1,0.7,0.1
										c0.2,0.1,0.4,0.1,0.7,0.2c1,0.3,1.9,0.6,2.6,1c0.4,0.2,0.8,0.4,1.2,0.8c0.3,0.3,0.7,0.6,1.1,1c0.3,0.3,0.6,0.7,0.9,1.2
										c0.1,0.2,0.2,0.3,0.3,0.5l0.1,0.2c0.1,0.2,0.2,0.5,0.3,0.7c0.4,0.9,0.7,2,0.7,3.1c0.1,0.8,0,1.6,0,2.7
										c-0.1-0.1-0.1-0.1-0.2-0.2l0,0c-0.2-0.2-0.4-0.4-0.7-0.6l-0.3-0.2l-0.4-0.2c-0.2-0.1-0.4-0.2-0.5-0.2
										c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2-0.1-0.3-0.1c-0.2,0-0.3-0.1-0.5-0.1c-0.3,0-0.6-0.1-0.9-0.1c-0.8,0-1.6,0.2-2.3,0.5
										c-0.5,0.2-1,0.6-1.4,1.1l-0.1,0.1c-0.2,0.2-0.4,0.4-0.5,0.7c-0.2,0.2-0.3,0.5-0.4,0.7l-0.1,0.2c-0.2,0.6-0.3,1.3-0.3,2
										c-0.1-0.3-0.2-0.6-0.3-0.9c-0.2-0.6-0.4-1.4-0.6-2.2c-0.2-0.7-0.4-1.6-0.5-2.5c-0.1-0.9-0.1-1.8,0-2.7
										c0.1-0.9,0.5-1.6,1-2.2c0.5-0.5,1.2-0.8,1.8-0.6c0.3,0.1,0.6,0.2,0.9,0.5c0.3,0.2,0.5,0.5,0.6,0.8c0.2,0.3,0.3,0.7,0.3,1
										c0,0.3-0.1,0.7-0.2,1c-0.1,0.3-0.3,0.6-0.5,0.7c0,0,0,0-0.1,0l-0.1,0l0,0c-0.1,0-0.1,0.1-0.2,0.1c0,0,0,0-0.1,0
										c0,0,0,0,0,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-0.5-0.1-0.9-0.6-1.1-1c-0.1-0.2-0.1-0.4-0.1-0.7c0-0.1,0.1-0.2,0.1-0.2
										c0-0.1,0.1-0.1,0.1-0.2l0,0c0.2-0.2,0.5-0.3,0.6-0.3c0,0,0,0,0.1,0c0.1,0,0.2,0,0.2,0l0.9,0.4l-0.8-0.6
										c-0.1,0-0.1-0.1-0.3-0.1c-0.3-0.1-0.7,0-0.9,0.2l0,0c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.1,0.2-0.2,0.4
										c-0.1,0.3-0.1,0.7,0,1c0.2,0.8,0.7,1.3,1.4,1.6c0.8,0.3,1.6-0.2,2.1-1.2c0.2-0.4,0.4-1,0.4-1.5c0-0.5-0.1-1-0.3-1.6
										c-0.2-0.5-0.5-0.9-0.9-1.2c-0.4-0.4-0.9-0.6-1.3-0.7c-0.2,0-0.4-0.1-0.6-0.1c-0.8,0-1.6,0.4-2.1,1
										c-0.3,0.4-0.7,0.8-0.9,1.3c-0.2,0.5-0.4,1-0.4,1.5c-0.1,0.9-0.1,1.8,0.1,3c0.1,0.9,0.4,1.8,0.6,2.6
										c0.2,0.8,0.5,1.5,0.8,2.2c0.3,0.7,0.6,1.3,0.8,1.8c0.3,0.5,0.5,1,0.8,1.3c0,0,0,0,0,0.1c0.2,0.4,0.5,0.7,0.7,0.9
										c0.4,0.4,0.9,0.7,1.5,0.9c0.3,0.1,0.7,0.2,1,0.2c0.8,0,1.6-0.3,2.1-0.9c0.4-0.5,0.7-1.1,0.7-1.8c0-0.7-0.2-1.3-0.6-1.8
										l-0.2,0.2c0.4,0.4,0.5,1,0.5,1.6c0,0.6-0.3,1.2-0.6,1.5c-0.6,0.6-1.3,0.7-1.8,0.7c-0.3,0-0.7-0.1-1-0.2
										c-0.5-0.2-0.9-0.4-1.3-0.8c-0.4-0.4-0.7-0.9-0.9-1.4c-0.4-1.1-0.4-2.4,0-3.4c0-0.1,0.1-0.1,0.1-0.2
										c0.1-0.2,0.2-0.4,0.3-0.5c0.1-0.2,0.3-0.4,0.4-0.6l0.1-0.1c0.4-0.4,0.8-0.7,1.3-0.9c0.9-0.4,1.9-0.5,2.9-0.3
										c0.2,0,0.3,0.1,0.5,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.1,0.1,0.2,0.1c0.2,0.1,0.3,0.1,0.4,0.2l0.3,0.2l0.3,0.2
										c0.2,0.1,0.4,0.3,0.6,0.5c0.7,0.8,1.2,1.8,1.5,3c0.1,0.3,0.1,0.6,0.1,0.9c0,0.3,0,0.6,0,0.9
										C391.1,147.3,391.1,147.9,390.9,148.4z" />
											<path class="st33" d="M358.5,151.6c0.3-0.4,0.3-1-0.1-1.3c-0.4-0.2-0.9-0.1-1.2,0.2c-0.3,0.4-0.3,0.9,0.1,1.2
										C357.5,152.1,358.1,152.1,358.5,151.6z" />
											<path class="st33" d="M354.3,153.4c-0.4,0.3-0.5,0.8-0.2,1.2c0.3,0.4,0.8,0.4,1.3,0.1c0.4-0.3,0.5-0.9,0.2-1.2
										C355.2,153.1,354.7,153.1,354.3,153.4z" />
											<path class="st33" d="M351.7,157.1c0.5-0.2,0.6-0.8,0.4-1.2c-0.2-0.4-0.8-0.5-1.2-0.3c-0.4,0.2-0.6,0.8-0.4,1.2
										C350.7,157.2,351.2,157.3,351.7,157.1z" />
											<path class="st33" d="M347.8,158.9c0.5-0.2,0.7-0.7,0.5-1.1c-0.2-0.4-0.7-0.6-1.1-0.4c-0.5,0.2-0.7,0.7-0.6,1.1
										C346.8,158.8,347.3,159.1,347.8,158.9z" />
											<path class="st33" d="M343.7,160.2c0.5-0.1,0.8-0.6,0.7-1.1c-0.1-0.4-0.6-0.7-1.1-0.6c-0.5,0.1-0.8,0.6-0.7,1.1
										C342.7,160.1,343.2,160.3,343.7,160.2z" />
											<path class="st33" d="M357.1,145.5c0.2-0.4-0.1-1-0.8-1.3c-0.6-0.3-1.3-0.1-1.4,0.3c-0.2,0.4,0.2,1,0.8,1.2
										C356.3,146,356.9,145.9,357.1,145.5z" />
											<path class="st33" d="M352,143.4c0.2-0.4-0.2-1-0.9-1.2c-0.6-0.2-1.3,0-1.4,0.4c-0.1,0.4,0.2,1,0.9,1.2
										C351.2,144,351.8,143.8,352,143.4z" />
											<path class="st33" d="M345.8,140.5c-0.6-0.2-1.3,0-1.4,0.5c-0.1,0.5,0.3,1,0.9,1.1c0.6,0.2,1.3,0,1.4-0.5
										C346.9,141.2,346.4,140.7,345.8,140.5z" />
											<path class="st33" d="M340.4,139.1c-0.7-0.1-1.3,0.1-1.4,0.6c-0.1,0.5,0.4,0.9,1,1.1c0.6,0.1,1.2-0.1,1.4-0.6
										C341.5,139.8,341,139.3,340.4,139.1z" />
											<path class="st33" d="M334.8,138.1c-0.7-0.1-1.3,0.2-1.3,0.7c-0.1,0.5,0.4,0.9,1.1,1c0.7,0.1,1.2-0.2,1.3-0.7
										C336,138.7,335.5,138.2,334.8,138.1z" />
											<path class="st33" d="M329.3,137.6c-0.7,0-1.2,0.3-1.3,0.8c0,0.5,0.5,0.9,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C330.4,138,329.9,137.6,329.3,137.6z" />
											<path class="st33" d="M323.6,137.5c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C324.9,137.9,324.3,137.5,323.6,137.5z" />
											<path class="st33" d="M392.7,150.4c-0.4,0.2-0.5,0.8-0.1,1.3c0.3,0.4,0.9,0.5,1.3,0.2c0.4-0.3,0.4-0.8,0.1-1.2
										C393.6,150.2,393.1,150.1,392.7,150.4z" />
											<path class="st33" d="M395.6,154.7c0.4,0.3,1,0.3,1.3-0.1c0.3-0.4,0.2-0.9-0.2-1.2c-0.4-0.3-0.9-0.3-1.2,0.1
										C395.2,153.8,395.2,154.4,395.6,154.7z" />
											<path class="st33" d="M400.1,155.6c-0.4-0.2-1-0.1-1.2,0.3c-0.2,0.4-0.1,0.9,0.4,1.2c0.5,0.2,1,0.1,1.2-0.3
										C400.7,156.3,400.5,155.8,400.1,155.6z" />
											<path class="st33" d="M403.8,157.3c-0.5-0.2-1,0-1.1,0.4c-0.2,0.4,0.1,1,0.5,1.1c0.5,0.2,1,0,1.2-0.5
										C404.5,158,404.3,157.5,403.8,157.3z" />
											<path class="st33" d="M408.4,159.6c0,0,0,0.1,0,0.1c-0.3,0.2-0.6,0.3-0.9,0.5c0,0-0.1,0-0.1,0c-0.5-0.1-0.8-0.6-0.7-1.1
										c0.1-0.5,0.6-0.7,1.1-0.6C408.2,158.7,408.5,159.2,408.4,159.6z" />
											<path class="st33" d="M395.3,145.8c0.6-0.3,1-0.8,0.8-1.2c-0.2-0.4-0.8-0.6-1.4-0.3c-0.6,0.3-1,0.8-0.8,1.3
										C394.1,145.9,394.7,146,395.3,145.8z" />
											<path class="st33" d="M401.3,142.6c-0.1-0.4-0.8-0.6-1.4-0.4c-0.6,0.2-1,0.8-0.9,1.2c0.2,0.4,0.8,0.6,1.4,0.4
										C401,143.6,401.4,143,401.3,142.6z" />
											<path class="st33" d="M405.6,142.1c0.6-0.2,1.1-0.7,0.9-1.1c-0.1-0.4-0.7-0.7-1.4-0.5c-0.6,0.2-1.1,0.7-0.9,1.2
										C404.4,142.1,405,142.3,405.6,142.1z" />
											<path class="st33" d="M410.6,139.1c-0.7,0.1-1.1,0.6-1,1.1c0.1,0.5,0.7,0.7,1.4,0.6c0.6-0.1,1.1-0.6,1-1.1
										C411.9,139.2,411.3,139,410.6,139.1z" />
											<path class="st33" d="M416.1,138.1c-0.7,0.1-1.1,0.6-1.1,1c0.1,0.5,0.7,0.7,1.3,0.7c0.7-0.1,1.1-0.5,1.1-1
										C417.4,138.3,416.8,138,416.1,138.1z" />
											<path class="st33" d="M421.7,137.6c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C423,137.9,422.4,137.5,421.7,137.6z" />
											<path class="st33" d="M427.3,137.5c-0.7,0-1.2,0.3-1.2,0.8c0,0.5,0.5,0.8,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C428.5,138,428,137.6,427.3,137.5z" />
										</g>
										<g>
											<path class="st34 line" d="M345.1,138.8c1.3,0.3,2.5,0.7,3.7,1c1.2,0.3,2.3,0.7,3.3,1c3.9,1.3,6.6,2.3,6.7,2.3
										c-0.1-0.1-0.7-0.4-1.7-0.9c-1.1-0.6-2.7-1.4-4.7-2.2c-1-0.4-2.1-0.8-3.2-1.3c-1.2-0.4-2.4-0.8-3.7-1.2
										c-1.3-0.4-2.6-0.8-4-1.1c-1.4-0.3-2.8-0.6-4.2-0.9c-1.4-0.2-2.9-0.4-4.3-0.5c-0.7-0.1-1.4-0.1-2.1-0.1
										c-0.7,0-1.4-0.1-2.1-0.1c-0.7,0-1.3,0-2,0c-0.3,0-0.6,0-1,0c-0.3,0-0.6,0.1-0.9,0.1c-0.6,0-1.2,0.1-1.8,0.2
										c-0.6,0.1-1.1,0.1-1.7,0.3c-0.5,0.1-1,0.2-1.5,0.3c-0.1,0-0.1,0-0.2,0c0.1,0.2,0.2,0.5,0.2,0.7c0,0,0,0,0.1,0
										c0.5,0,1-0.1,1.5-0.2c0.5-0.1,1.1-0.1,1.6-0.1c0.6,0,1.2-0.1,1.8-0.1c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,1,0
										c0.3,0,0.6,0,1,0c1.3,0,2.7,0.2,4.1,0.3c1.4,0.1,2.8,0.3,4.2,0.6c1.4,0.2,2.8,0.5,4.1,0.8
										C342.5,138.2,343.8,138.5,345.1,138.8z" />
											<path class="st34 line" d="M429.9,135.7c-0.5-0.1-1-0.2-1.5-0.3c-0.5-0.1-1.1-0.2-1.7-0.3c-0.6-0.1-1.2-0.1-1.8-0.2
										c-0.3,0-0.6-0.1-0.9-0.1c-0.3,0-0.6,0-1,0c-0.7,0-1.3,0-2,0c-0.7,0-1.4,0-2.1,0.1c-0.7,0-1.4,0.1-2.1,0.1
										c-1.4,0.1-2.8,0.3-4.3,0.5c-1.4,0.3-2.8,0.5-4.2,0.9c-1.4,0.3-2.7,0.7-4,1.1c-1.3,0.4-2.5,0.8-3.7,1.2
										c-1.2,0.4-2.3,0.8-3.2,1.3c-2,0.8-3.6,1.6-4.7,2.2c-0.6,0.3-1,0.6-1.3,0.7c-0.2-0.6-0.5-1.1-0.9-1.6
										c0.2-1.2,0.3-2.2,0.2-3.1c0-1.2-0.2-2.4-0.6-3.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.2-0.4-0.3-0.5
										c-0.3-0.5-0.6-1-0.9-1.3c-0.7-0.8-1.5-1.5-2.4-2c-0.8-0.5-1.7-0.9-2.7-1.2c-0.2-0.1-0.5-0.1-0.7-0.2l-0.1,0
										c-0.2-0.1-0.4-0.1-0.7-0.2c-0.3-0.1-0.6-0.1-1-0.2l-0.4-0.1c-0.9-0.2-1.8-0.3-2.7-0.7c-0.4-0.2-0.8-0.4-1.2-0.7
										c-0.3-0.2-0.6-0.5-1-1l-0.2-0.2l-0.7,0l-0.2,0.2c-0.3,0.4-0.6,0.7-1,1c-0.4,0.3-0.8,0.5-1.2,0.7c-0.8,0.3-1.6,0.5-2.7,0.7
										c-0.1,0-0.3,0.1-0.4,0.1c-0.3,0.1-0.6,0.1-1,0.2c-0.5,0.1-1,0.2-1.4,0.4c-1,0.3-1.9,0.7-2.7,1.2c-0.9,0.5-1.7,1.2-2.4,2
										c-0.4,0.5-0.7,0.9-1,1.3c-0.3,0.5-0.5,1-0.7,1.5c-0.4,1-0.6,2.2-0.6,3.4c0,0.9,0.1,1.9,0.2,3.1c-0.6,0.8-1.1,1.8-1.3,2.9
										c-0.2,0.7-0.2,1.4-0.2,2c0,0.7,0.1,1.3,0.3,2c0.3,1,0.7,2,1.4,3c0,0,0,0,0,0c-0.2,0.2-0.4,0.5-0.7,0.8
										c-0.2,0.2-0.3,0.4-0.5,0.6c-0.2,0.2-0.4,0.4-0.7,0.6c-0.2,0.2-0.5,0.4-0.8,0.7c-0.3,0.2-0.6,0.5-0.9,0.7
										c-0.3,0.2-0.7,0.5-1,0.7c-0.4,0.2-0.7,0.5-1.1,0.7c-0.2,0.1-0.4,0.3-0.6,0.4c-0.2,0.1-0.4,0.2-0.6,0.3
										c-0.4,0.2-0.8,0.5-1.3,0.7c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.5,0.2-0.7,0.3c-0.2,0.1-0.5,0.2-0.7,0.3
										c-0.5,0.2-1,0.4-1.5,0.6c-0.5,0.2-1,0.3-1.5,0.5c-0.5,0.2-1,0.3-1.5,0.5c-0.4,0.1-0.8,0.2-1.2,0.3c0.7,0.3,1.4,0.7,2.1,1
										c0.4-0.1,0.7-0.2,1.1-0.3c0.5-0.2,1-0.3,1.6-0.5c0.5-0.2,1-0.4,1.5-0.6c0.2-0.1,0.5-0.2,0.7-0.3c0.2-0.1,0.5-0.3,0.7-0.4
										c0.5-0.2,0.9-0.5,1.4-0.7c0.4-0.3,0.9-0.5,1.3-0.8c0.2-0.1,0.4-0.3,0.6-0.4c0.2-0.1,0.4-0.3,0.6-0.4
										c0.4-0.3,0.7-0.6,1.1-0.8c0.3-0.3,0.6-0.6,1-0.9c0.3-0.3,0.6-0.6,0.8-0.8c0.3-0.3,0.5-0.5,0.7-0.8c0.2-0.3,0.4-0.5,0.6-0.7
										c0.2-0.2,0.3-0.5,0.4-0.7c0.3-0.4,0.4-0.7,0.5-1c0.1,0.1,0.2,0.2,0.2,0.4c0.7,0.9,1.5,1.8,2.5,2.6c0.8,0.6,1.7,1.3,2.7,2
										c0.4,0.2,0.7,0.5,1.1,0.7c0.6,0.4,1.1,0.8,1.7,1.2c0.8,0.6,1.7,1.3,2.6,2c0.9,0.8,1.6,1.6,2.3,2.5c0.7,0.9,1.2,1.9,1.6,3
										l0.6,1.2l0.6-1.2c0.4-1.1,1-2.1,1.7-3c0.6-0.8,1.4-1.6,2.3-2.5c0.9-0.8,1.8-1.4,2.6-2c0.5-0.4,1-0.7,1.6-1.1
										c0.4-0.3,0.8-0.5,1.2-0.8c1.1-0.7,1.9-1.4,2.7-2c1-0.8,1.8-1.7,2.5-2.6c0,0,0.1-0.1,0.1-0.1c0.1,0.2,0.2,0.4,0.4,0.7
										c0.1,0.2,0.3,0.4,0.4,0.7c0.2,0.2,0.4,0.5,0.6,0.7c0.2,0.3,0.5,0.5,0.7,0.8c0.3,0.3,0.5,0.6,0.8,0.8c0.3,0.3,0.6,0.6,1,0.9
										c0.3,0.3,0.7,0.6,1.1,0.8c0.2,0.1,0.4,0.3,0.6,0.4c0.2,0.1,0.4,0.3,0.6,0.4c0.4,0.3,0.8,0.5,1.3,0.8
										c0.5,0.2,0.9,0.5,1.4,0.7c0.2,0.1,0.5,0.2,0.7,0.4c0.2,0.1,0.5,0.2,0.7,0.3c0.5,0.2,1,0.4,1.5,0.6c0.5,0.2,1,0.4,1.6,0.5
										c0.3,0.1,0.7,0.2,1,0.3c0.7-0.3,1.4-0.6,2-1c-0.3-0.1-0.7-0.2-1-0.3c-0.5-0.2-1-0.3-1.5-0.5c-0.5-0.2-1-0.3-1.5-0.5
										c-0.5-0.2-1-0.4-1.5-0.6c-0.2-0.1-0.5-0.2-0.7-0.3c-0.2-0.1-0.5-0.2-0.7-0.3c-0.5-0.2-0.9-0.4-1.4-0.6
										c-0.4-0.2-0.9-0.5-1.3-0.7c-0.2-0.1-0.4-0.2-0.6-0.3c-0.2-0.1-0.4-0.2-0.6-0.4c-0.4-0.2-0.8-0.5-1.1-0.7
										c-0.3-0.3-0.7-0.5-1-0.7c-0.3-0.2-0.6-0.5-0.9-0.7c-0.3-0.2-0.6-0.4-0.8-0.7c-0.2-0.2-0.5-0.4-0.7-0.6
										c-0.2-0.2-0.4-0.4-0.5-0.6c-0.2-0.3-0.4-0.5-0.6-0.7c0.7-1,1.2-2.1,1.5-3.2c0.2-0.7,0.3-1.3,0.3-2c0-0.2,0-0.6,0-1
										c0-0.3-0.1-0.6-0.2-1c-0.1-0.4-0.2-0.8-0.4-1.2c0.9-0.3,3.2-1.2,6.3-2.2c1-0.3,2.1-0.6,3.3-1c1.2-0.3,2.4-0.7,3.7-1
										c1.3-0.3,2.6-0.6,4-0.9c1.4-0.3,2.7-0.6,4.1-0.8c1.4-0.2,2.8-0.4,4.2-0.6c1.4-0.1,2.7-0.3,4.1-0.3c0.3,0,0.7,0,1,0
										c0.3,0,0.6,0,1,0c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,0.9,0c0.6,0,1.2,0,1.8,0.1c0.6,0,1.1,0,1.6,0.1c0.5,0.1,1,0.1,1.5,0.2
										c0,0,0.1,0,0.1,0c0.1-0.2,0.2-0.5,0.2-0.7C430.1,135.8,430,135.7,429.9,135.7z M390.9,147.9c-0.3,1-0.8,2.1-1.5,3.1
										c-0.6,0.9-1.4,1.7-2.3,2.4c-0.7,0.6-1.6,1.2-2.7,2c-0.4,0.2-0.7,0.5-1.1,0.7c-0.6,0.4-1.1,0.8-1.7,1.1
										c-0.9,0.6-1.8,1.3-2.7,2.1c-1,0.9-1.7,1.7-2.4,2.6c-0.1,0.1-0.2,0.3-0.3,0.5c0,0.1-0.1,0.1-0.1,0.2
										c-0.1,0.2-0.3,0.4-0.4,0.7c-0.1,0.3-0.3,0.5-0.4,0.8c0,0,0,0,0,0c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0.1-0.3c0-0.1,0-0.3,0-0.4
										c0,0,0-0.1,0-0.1c0-0.5,0-1,0.1-1.5c0-0.6,0-1.3,0.1-1.9c0,0,0,0,0,0c0.4,0,0.7,0,0.9,0c0.4,0,0.8-0.1,1.1-0.2
										c0.7-0.1,1.1-0.3,1.1-0.3l0.3-0.1l-0.3-0.1c0,0-0.5-0.2-1.1-0.3c-0.3-0.1-0.7-0.1-1.1-0.1c-0.3,0-0.6,0-0.9-0.1
										c0,0,0,0,0,0c0,0,0,0,0,0c0.5,0,1-0.1,1.4-0.2c0.5-0.1,0.8-0.3,0.8-0.3l0.2-0.1l-0.2-0.1c0,0-0.3-0.2-0.8-0.3
										c-0.4-0.1-0.8-0.2-1.3-0.2c0.3,0,0.6-0.1,0.8-0.2c0.3-0.1,0.6-0.3,0.6-0.3l0.1-0.1l-0.1-0.1c0,0-0.2-0.2-0.6-0.3
										c-0.2-0.1-0.5-0.2-0.8-0.2l0-2.6c0-1,0-2.1,0-3.2c0-0.5,0-1,0-1.5c0.1,0.3,0.2,0.6,0.3,1c0.2,0.6,0.4,1.3,0.7,2
										c0.4,0.8,0.8,1.5,1.3,2c0.6,0.6,1.3,1,2.1,1.2c0.9,0.2,1.8,0.1,2.5-0.4c0.8-0.5,1.3-1.5,1.3-2.6c0.1-1-0.3-1.9-1-2.6
										c-0.6-0.6-1.2-0.9-1.9-0.9c-0.1,0-0.2,0-0.3,0c-0.4,0.1-0.8,0.2-1,0.5c-0.3,0.3-0.5,0.7-0.6,1c-0.1,0.4-0.1,0.8-0.1,1.1
										c0,0.1,0,0.2,0.1,0.2c0,0.1,0,0.1,0.1,0.2l0,0.1c0.1,0.2,0.2,0.3,0.3,0.4c0.2,0.2,0.5,0.3,0.7,0.4c0.2,0,0.4,0,0.6-0.2
										c0.4-0.2,0.5-0.5,0.6-0.7c0.1-0.2,0.1-0.3,0.1-0.3l0.1-1l-0.4,1c0,0,0,0.1-0.1,0.2c0,0.1-0.2,0.3-0.5,0.4
										c-0.3,0.1-0.6,0-0.8-0.2c-0.2-0.3-0.3-0.8-0.1-1.3c0.2-0.5,0.6-0.9,1-0.9c0,0,0.1,0,0.1,0c0.4,0,0.9,0.3,1.4,0.7
										c0.2,0.2,0.4,0.5,0.5,0.8c0,0.1,0,0.1,0,0.1l0,0.1c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0,0.3,0,0.5c0,0.3-0.1,0.7-0.2,1
										c0,0.1-0.1,0.1-0.1,0.2l-0.1,0.2l-0.2,0.2c0,0-0.1,0-0.1,0.1c0,0-0.1,0-0.1,0.1c-0.4,0.3-1.1,0.4-1.7,0.3
										c-0.6-0.1-1.2-0.4-1.7-0.9c-0.4-0.4-0.8-1-1.2-1.6c-0.3-0.6-0.6-1.3-0.8-1.8c-0.4-1.1-0.7-2.1-0.9-2.7c0-0.3,0-0.6,0-0.9
										c0-0.3,0-0.6,0-0.8l0.1-0.1c0.4-0.4,0.8-0.9,1.3-1.6c0.3-0.4,0.5-0.9,0.7-1.3c0.2-0.6,0.4-1.1,0.4-1.7
										c0.1-0.6,0-1.3-0.1-1.9c-0.1-0.6-0.3-1.1-0.5-1.6l-0.1-0.2c-0.2-0.5-0.4-1-0.5-1.6c-0.1-0.3-0.1-0.5-0.1-0.7
										c0,0,0-0.1,0-0.2c0-0.1,0-0.2,0-0.2c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.2c0-0.5,0.1-0.9,0.3-1.3c0.2-0.4,0.4-0.7,0.6-1
										c0.2-0.3,0.5-0.5,0.7-0.7c0.2-0.1,0.5-0.3,0.7-0.3c0.1,0,0.2-0.1,0.3-0.1c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.2,0l1-0.2
										l-1.1-0.1c0,0-0.1,0-0.2,0c-0.1,0-0.3,0-0.5,0c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.7,0.3-1,0.6c-0.4,0.3-0.7,0.7-0.9,1.2
										c-0.3,0.5-0.5,1.1-0.5,1.7c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3c0,0.1,0,0.1,0,0.2c0,0.4,0.1,0.7,0.1,1
										c0.1,0.6,0.4,1.2,0.5,1.7l0.1,0.2c0.2,0.5,0.4,1,0.5,1.4c0.1,0.5,0.2,1,0.1,1.5c0,0.5-0.1,0.9-0.3,1.4
										c-0.1,0.4-0.3,0.8-0.5,1.2c-0.3,0.6-0.6,1.1-0.8,1.5c0-0.1,0-0.2,0-0.3c0-0.2,0-0.5,0-0.7c0-0.7,0-1.5,0-2.2
										c0-0.4,0-0.8,0-1.2c0-2.2-0.1-4.2-0.1-6c0-1.2-0.1-2.2-0.1-3c0-0.4,0-0.8,0-1.2c0-1-0.1-1.6-0.1-1.6l-0.2,0
										c0,0,0,0.6-0.1,1.6c0,0.4,0,0.8,0,1.3c0,0.8-0.1,1.8-0.1,3c-0.1,1.9-0.1,4-0.1,6c0,0.4,0,0.8,0,1.2c0,0.7,0,1.4,0,2.2
										c0,0.3,0,0.7,0,1c-0.2-0.4-0.5-0.9-0.8-1.5c-0.2-0.4-0.4-0.8-0.5-1.2c-0.2-0.5-0.3-1-0.3-1.4c0-0.5,0-1,0.1-1.5
										c0.1-0.5,0.3-0.9,0.5-1.4l0.1-0.2c0.2-0.5,0.4-1.1,0.6-1.7c0.1-0.3,0.1-0.6,0.1-1c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3
										c0-0.2,0-0.3,0-0.5c-0.1-0.6-0.2-1.2-0.5-1.7c-0.2-0.4-0.5-0.8-0.9-1.2c-0.3-0.3-0.7-0.5-1-0.6c-0.3-0.1-0.5-0.2-0.8-0.2
										c-0.2,0-0.4,0-0.5,0c-0.1,0-0.2,0-0.2,0l-1.1,0.1l1,0.2c0,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0.1,0.3,0.1
										c0.2,0.1,0.4,0.2,0.7,0.3c0.2,0.2,0.5,0.4,0.7,0.7c0.3,0.3,0.5,0.7,0.6,1c0.2,0.4,0.3,0.9,0.3,1.3c0,0.1,0,0.1,0,0.2
										c0,0,0,0.1,0,0.1c0,0.1,0,0.2,0,0.2c0,0.1,0,0.1,0,0.2c0,0.2-0.1,0.5-0.1,0.7c-0.1,0.5-0.3,1.1-0.5,1.6l-0.1,0.2
										c-0.2,0.5-0.4,1-0.5,1.6c-0.1,0.6-0.2,1.3-0.1,1.9c0.1,0.7,0.3,1.3,0.4,1.7c0.2,0.4,0.4,0.9,0.7,1.3
										c0.5,0.7,0.9,1.2,1.3,1.6c0,0,0.1,0.1,0.1,0.1c0,0.6,0,1.2,0,1.8c-0.3,0.9-0.6,1.8-0.9,2.7c-0.2,0.6-0.5,1.2-0.8,1.8
										c-0.3,0.7-0.7,1.2-1.2,1.6c-0.4,0.4-1,0.7-1.7,0.9c-0.6,0.1-1.3,0-1.7-0.3c0,0,0,0-0.1-0.1c0,0-0.1,0-0.1-0.1l-0.2-0.3
										l0-0.1c0-0.1-0.1-0.1-0.1-0.2l0,0c-0.1-0.3-0.2-0.6-0.2-1c0-0.2,0-0.4,0-0.5c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
										c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0.1-0.3,0.3-0.6,0.5-0.8c0.5-0.5,1-0.7,1.4-0.7c0.4,0,0.8,0.4,1,0.9
										c0.2,0.5,0.1,1-0.1,1.3c-0.2,0.2-0.4,0.3-0.5,0.3c-0.1,0-0.2,0-0.3-0.1c-0.3-0.1-0.5-0.4-0.5-0.4c-0.1-0.1-0.1-0.2-0.1-0.2
										l-0.4-1l0.1,1.1c0,0,0,0.1,0.1,0.3c0.1,0.2,0.3,0.5,0.6,0.7c0.2,0.1,0.4,0.2,0.6,0.2c0.3,0,0.5-0.1,0.7-0.4
										c0.1-0.1,0.2-0.2,0.3-0.4c0-0.1,0.1-0.2,0.1-0.2l0,0c0-0.1,0-0.2,0.1-0.2c0.1-0.3,0-0.7-0.1-1.1c-0.1-0.3-0.2-0.7-0.6-1
										c-0.3-0.3-0.6-0.5-1-0.5c-0.7-0.1-1.5,0.2-2.1,0.8c-0.7,0.7-1.1,1.7-1,2.6c0,1.1,0.5,2.1,1.3,2.6c0.7,0.5,1.5,0.6,2.5,0.4
										c0.8-0.2,1.5-0.6,2.1-1.2c0.5-0.5,0.9-1.2,1.3-2c0.3-0.7,0.5-1.4,0.7-2c0.1-0.3,0.2-0.6,0.3-1c0,0.1,0,0.1,0,0.2
										c0,0.4,0,0.9,0,1.3c0,0.6,0,1.2,0,1.8l0,1.6c0,0.8,0,1.6,0,2.4c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.6,0.3-0.6,0.3l-0.1,0.1
										l0.1,0.1c0,0,0.2,0.2,0.6,0.3c0.2,0.1,0.5,0.2,0.8,0.2c-0.5,0-1,0.1-1.3,0.2c-0.5,0.1-0.8,0.3-0.8,0.3l-0.2,0.1l0.2,0.1
										c0,0,0.3,0.2,0.8,0.3c0.4,0.1,0.9,0.2,1.4,0.2c0,0,0,0.1,0,0.1c-0.3,0-0.6,0-0.9,0.1c-0.4,0-0.8,0.1-1.1,0.1
										c-0.7,0.1-1.1,0.3-1.1,0.3l-0.3,0.1l0.3,0.1c0,0,0.5,0.2,1.1,0.3c0.3,0.1,0.7,0.1,1.1,0.1c0.3,0,0.6,0,0.9,0.1c0,0,0,0,0,0
										c0,1,0.1,2.1,0.1,3.2l0,0.6c0,0.1,0,0.2,0,0.3c0,0.1,0,0.3,0,0.4c-0.4-0.8-0.8-1.6-1.3-2.2c-0.7-0.9-1.5-1.8-2.4-2.6
										c-0.9-0.8-1.8-1.5-2.7-2.1c-0.5-0.4-1-0.7-1.6-1.1c-0.4-0.3-0.8-0.5-1.2-0.8c-1.1-0.7-1.9-1.3-2.6-2
										c-0.9-0.7-1.7-1.5-2.3-2.4c-0.7-1-1.2-2-1.5-3.1c-0.2-0.6-0.2-1.1-0.3-1.7c0-0.6,0-1.2,0.2-1.7c0.3-1.1,0.8-2.2,1.5-3
										c0.7-0.8,1.6-1.3,2.6-1.5c1-0.2,2.1-0.1,2.9,0.3c0.4,0.2,0.8,0.5,1.3,0.9c0.3,0.4,0.6,0.8,0.9,1.4c0.4,1.1,0.4,2.3,0,3.4
										c-0.4,1.1-1.2,1.9-2.2,2.2c-0.3,0.1-0.7,0.2-1,0.2c-0.5,0-1.2-0.1-1.8-0.7c-0.4-0.4-0.6-0.9-0.6-1.5c0-0.6,0.2-1.2,0.5-1.6
										l-0.2-0.2c-0.4,0.5-0.6,1.1-0.6,1.8c0,0.7,0.3,1.3,0.7,1.8c0.5,0.6,1.3,0.9,2.1,0.9c0.4,0,0.7-0.1,1-0.2
										c0.6-0.2,1.1-0.5,1.5-0.9c0.3-0.2,0.5-0.6,0.7-0.9l0.1-0.1c0.3-0.3,0.5-0.8,0.8-1.3c0.2-0.5,0.5-1.1,0.8-1.8
										c0.3-0.7,0.6-1.5,0.8-2.2c0.2-0.9,0.5-1.7,0.6-2.6c0.2-1.2,0.2-2.1,0-3c-0.1-0.6-0.2-1.1-0.4-1.5c-0.2-0.5-0.5-1-0.9-1.3
										c-0.7-0.8-1.8-1.1-2.7-0.9c-0.5,0.1-1,0.4-1.3,0.7c-0.4,0.3-0.7,0.7-0.9,1.2c-0.2,0.5-0.3,1-0.3,1.6c0,0.5,0.1,1,0.4,1.5
										c0.5,1,1.3,1.4,2.1,1.2c0.6-0.2,1.1-0.8,1.4-1.6c0.1-0.3,0.1-0.7,0-1c-0.1-0.2-0.1-0.3-0.2-0.4c-0.1-0.1-0.1-0.2-0.2-0.2
										l0,0c-0.3-0.2-0.6-0.3-0.9-0.2c-0.2,0-0.3,0.1-0.3,0.1l-0.8,0.6l0.9-0.4c0,0,0.1,0,0.2,0c0,0,0,0,0.1,0
										c0.1,0,0.4,0,0.6,0.3l0,0c0,0.1,0.1,0.1,0.1,0.2c0.1,0.1,0.1,0.2,0.1,0.3c0,0.2,0,0.4-0.1,0.7c-0.2,0.4-0.6,0.9-1,1
										c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0l0,0c0,0-0.1,0-0.1-0.1
										c-0.2-0.2-0.4-0.4-0.6-0.7c-0.1-0.3-0.2-0.7-0.2-1c0-0.4,0.1-0.7,0.3-1c0.2-0.3,0.4-0.6,0.6-0.8c0.3-0.2,0.6-0.4,0.9-0.5
										c0.6-0.1,1.3,0.1,1.8,0.6c0.5,0.5,0.9,1.3,1,2.2c0.1,0.8,0.1,1.7,0,2.6c-0.1,0.9-0.3,1.8-0.5,2.5c-0.2,0.9-0.4,1.6-0.6,2.2
										c-0.1,0.3-0.2,0.6-0.3,0.9c0,0,0,0,0-0.1c0-0.4,0-0.7-0.1-1c0-0.1,0-0.2-0.1-0.3c0,0,0-0.1,0-0.2c0-0.1,0-0.1,0-0.1
										c0-0.1,0-0.2-0.1-0.3c-0.4-1.2-1.3-2.2-2.4-2.7c-1-0.5-2.1-0.6-3.3-0.5c-1.1,0.2-2.2,0.7-3,1.6c-0.1,0.1-0.1,0.1-0.2,0.2
										c-0.1-1-0.1-1.9,0-2.7c0.1-1.1,0.3-2.2,0.7-3.1c0.2-0.5,0.5-1,0.7-1.4c0.3-0.5,0.6-0.9,0.9-1.2c0.4-0.4,0.7-0.7,1.1-1
										c0.4-0.3,0.8-0.6,1.2-0.8c0.7-0.4,1.6-0.7,2.6-1c0.5-0.1,0.9-0.2,1.3-0.3c0.3-0.1,0.6-0.1,0.9-0.1c0.2,0,0.3-0.1,0.5-0.1
										c0.9-0.1,1.9-0.3,2.9-0.7c0.5-0.2,0.9-0.5,1.4-0.8c0.3-0.2,0.6-0.5,0.9-0.9c0.3,0.4,0.6,0.7,0.9,0.9
										c0.4,0.3,0.9,0.6,1.4,0.8c1,0.4,1.9,0.6,2.9,0.7l0.2,0c0.4,0.1,0.8,0.1,1.1,0.2c0.2,0,0.5,0.1,0.7,0.1
										c0.2,0.1,0.4,0.1,0.7,0.2c1,0.3,1.9,0.6,2.6,1c0.4,0.2,0.8,0.4,1.2,0.8c0.3,0.3,0.7,0.6,1.1,1c0.3,0.3,0.6,0.7,0.9,1.2
										c0.1,0.2,0.2,0.3,0.3,0.5l0.1,0.2c0.1,0.2,0.2,0.5,0.3,0.7c0.4,0.9,0.7,2,0.7,3.1c0.1,0.8,0,1.6,0,2.7
										c-0.1-0.1-0.1-0.1-0.2-0.2l0,0c-0.2-0.2-0.4-0.4-0.7-0.6l-0.3-0.2l-0.4-0.2c-0.2-0.1-0.4-0.2-0.5-0.2
										c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2-0.1-0.3-0.1c-0.2,0-0.4-0.1-0.5-0.1c-0.3-0.1-0.6-0.1-0.9-0.1c-0.8,0-1.6,0.2-2.3,0.5
										c-0.5,0.2-1,0.6-1.4,1.1l-0.1,0.1c-0.2,0.2-0.4,0.4-0.5,0.7c-0.1,0.2-0.3,0.5-0.4,0.7l-0.1,0.2c-0.2,0.6-0.3,1.3-0.3,2
										c-0.1-0.3-0.2-0.6-0.3-0.9c-0.2-0.6-0.4-1.4-0.6-2.2c-0.2-0.7-0.4-1.6-0.5-2.5c-0.1-0.9-0.1-1.8,0-2.6
										c0.1-0.9,0.5-1.6,1-2.2c0.5-0.5,1.2-0.8,1.8-0.6c0.3,0.1,0.6,0.2,0.9,0.5c0.3,0.2,0.5,0.5,0.6,0.8c0.2,0.3,0.3,0.7,0.3,1
										c0,0.3-0.1,0.7-0.2,1c-0.1,0.3-0.3,0.6-0.5,0.7c0,0,0,0-0.1,0l-0.1,0l0,0c-0.1,0-0.1,0.1-0.2,0.1c0,0,0,0-0.1,0
										c0,0,0,0,0,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-0.5-0.1-0.9-0.6-1.1-1c-0.1-0.2-0.1-0.4-0.1-0.7c0-0.1,0-0.2,0.1-0.3
										c0-0.1,0.1-0.1,0.1-0.2l0,0c0.2-0.2,0.4-0.3,0.6-0.3c0,0,0,0,0,0c0.1,0,0.2,0,0.2,0l0.9,0.4l-0.8-0.6
										c-0.1,0-0.1-0.1-0.3-0.1c-0.3-0.1-0.7,0-0.9,0.2l0,0c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.1,0.2-0.2,0.4
										c-0.1,0.3-0.1,0.7,0,1c0.2,0.8,0.7,1.3,1.4,1.6c0.8,0.3,1.6-0.2,2.1-1.2c0.2-0.4,0.4-1,0.4-1.5c0-0.5-0.1-1-0.3-1.6
										c-0.2-0.5-0.5-0.9-0.9-1.2c-0.4-0.4-0.9-0.6-1.3-0.7c-0.2,0-0.4-0.1-0.6-0.1c-0.8,0-1.6,0.4-2.1,1
										c-0.4,0.4-0.7,0.8-0.9,1.3c-0.2,0.5-0.4,1-0.4,1.5c-0.1,0.9-0.1,1.8,0.1,3c0.1,0.9,0.4,1.8,0.6,2.6
										c0.2,0.8,0.5,1.5,0.8,2.2c0.3,0.7,0.6,1.3,0.8,1.8c0.3,0.5,0.5,1,0.8,1.3c0,0,0,0,0,0.1c0.2,0.4,0.4,0.7,0.7,0.9
										c0.4,0.4,0.9,0.7,1.5,0.9c0.3,0.1,0.7,0.2,1,0.2c0.8,0,1.6-0.3,2.1-0.9c0.4-0.5,0.7-1.1,0.7-1.8c0-0.7-0.2-1.3-0.6-1.8
										l-0.2,0.2c0.4,0.4,0.5,1,0.5,1.6c0,0.6-0.3,1.2-0.6,1.5c-0.6,0.6-1.3,0.7-1.8,0.7c-0.3,0-0.7-0.1-1-0.2
										c-0.5-0.2-0.9-0.4-1.3-0.8c-0.4-0.4-0.7-0.9-0.9-1.4c-0.4-1.1-0.4-2.4,0-3.4c0-0.1,0.1-0.1,0.1-0.2
										c0.1-0.2,0.2-0.4,0.3-0.5c0.1-0.2,0.3-0.4,0.4-0.6l0.1-0.1c0.4-0.4,0.8-0.7,1.2-0.9c0.9-0.4,1.9-0.5,2.9-0.3
										c0.2,0,0.3,0.1,0.5,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.1,0.1,0.2,0.1c0.2,0.1,0.3,0.1,0.4,0.2l0.3,0.2l0.3,0.2
										c0.2,0.1,0.4,0.4,0.6,0.5c0.7,0.8,1.2,1.8,1.5,3c0.1,0.3,0.1,0.6,0.1,0.9c0,0.3,0,0.6,0,0.9
										C391.1,146.8,391.1,147.4,390.9,147.9z" />
											<path class="st34" d="M358.5,151.1c0.3-0.4,0.3-1-0.1-1.3c-0.4-0.2-0.9-0.1-1.2,0.2c-0.3,0.4-0.3,0.9,0.1,1.2
										C357.5,151.6,358.1,151.6,358.5,151.1z" />
											<path class="st34" d="M354.3,152.9c-0.4,0.3-0.5,0.8-0.2,1.2c0.3,0.4,0.8,0.4,1.3,0.1c0.4-0.3,0.5-0.9,0.2-1.2
										C355.2,152.6,354.7,152.6,354.3,152.9z" />
											<path class="st34" d="M351.7,156.6c0.5-0.2,0.6-0.8,0.4-1.2c-0.2-0.4-0.8-0.5-1.2-0.3c-0.4,0.2-0.6,0.8-0.4,1.2
										C350.7,156.7,351.2,156.8,351.7,156.6z" />
											<path class="st34" d="M347.8,158.4c0.5-0.2,0.7-0.7,0.5-1.1c-0.2-0.4-0.7-0.6-1.1-0.4c-0.5,0.2-0.7,0.7-0.6,1.1
										C346.8,158.3,347.3,158.6,347.8,158.4z" />
											<path class="st34" d="M343.7,159.7c0.5-0.1,0.8-0.6,0.7-1.1c-0.1-0.4-0.6-0.7-1.1-0.6c-0.5,0.1-0.8,0.6-0.7,1.1
										C342.7,159.6,343.2,159.8,343.7,159.7z" />
											<path class="st34" d="M357.1,145c0.2-0.4-0.1-1-0.8-1.3c-0.6-0.3-1.3-0.1-1.4,0.3c-0.2,0.4,0.2,1,0.8,1.2
										C356.3,145.5,356.9,145.4,357.1,145z" />
											<path class="st34" d="M352,142.9c0.2-0.4-0.2-1-0.9-1.2c-0.6-0.2-1.3,0-1.4,0.4c-0.1,0.4,0.2,1,0.9,1.2
										C351.2,143.5,351.8,143.3,352,142.9z" />
											<path class="st34" d="M345.8,140c-0.6-0.2-1.3,0-1.4,0.5c-0.1,0.5,0.3,1,0.9,1.1c0.6,0.2,1.3,0,1.4-0.5
										C346.9,140.7,346.4,140.2,345.8,140z" />
											<path class="st34" d="M340.4,138.6c-0.7-0.1-1.3,0.1-1.4,0.6c-0.1,0.5,0.4,0.9,1,1.1c0.6,0.1,1.2-0.1,1.4-0.6
										C341.5,139.3,341,138.7,340.4,138.6z" />
											<path class="st34" d="M334.8,137.6c-0.7-0.1-1.3,0.2-1.3,0.7c-0.1,0.5,0.4,0.9,1.1,1c0.7,0.1,1.2-0.2,1.3-0.7
										C336,138.2,335.5,137.7,334.8,137.6z" />
											<path class="st34" d="M329.3,137.1c-0.7,0-1.2,0.3-1.3,0.8c0,0.5,0.5,0.9,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C330.4,137.5,329.9,137.1,329.3,137.1z" />
											<path class="st34" d="M323.6,137c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C324.9,137.4,324.3,137,323.6,137z" />
											<path class="st34" d="M392.7,149.8c-0.4,0.2-0.5,0.8-0.1,1.3c0.3,0.4,0.9,0.5,1.3,0.2c0.4-0.3,0.4-0.8,0.1-1.2
										C393.6,149.7,393.1,149.6,392.7,149.8z" />
											<path class="st34" d="M395.6,154.2c0.4,0.3,1,0.3,1.3-0.1c0.3-0.4,0.2-0.9-0.2-1.2c-0.4-0.3-0.9-0.3-1.2,0.1
										C395.2,153.3,395.2,153.9,395.6,154.2z" />
											<path class="st34" d="M400.1,155.1c-0.4-0.2-1-0.1-1.2,0.3c-0.2,0.4-0.1,0.9,0.4,1.2c0.5,0.2,1,0.1,1.2-0.3
										C400.7,155.8,400.5,155.3,400.1,155.1z" />
											<path class="st34" d="M403.8,156.8c-0.5-0.2-1,0-1.1,0.4c-0.2,0.4,0.1,1,0.5,1.1c0.5,0.2,1,0,1.2-0.5
										C404.5,157.5,404.3,157,403.8,156.8z" />
											<path class="st34" d="M407.7,158c-0.5-0.1-1,0.1-1.1,0.6c-0.1,0.4,0.2,0.9,0.7,1.1c0.5,0.1,1-0.1,1.1-0.6
										C408.5,158.6,408.2,158.2,407.7,158z" />
											<path class="st34" d="M395.3,145.3c0.6-0.3,1-0.8,0.8-1.2c-0.2-0.4-0.8-0.6-1.4-0.3c-0.6,0.3-1,0.8-0.8,1.3
										C394.1,145.4,394.7,145.5,395.3,145.3z" />
											<path class="st34" d="M401.3,142.1c-0.1-0.4-0.8-0.6-1.4-0.4c-0.6,0.2-1,0.8-0.9,1.2c0.2,0.4,0.8,0.6,1.4,0.4
										C401,143.1,401.4,142.5,401.3,142.1z" />
											<path class="st34" d="M405.6,141.6c0.6-0.2,1.1-0.7,0.9-1.1c-0.1-0.4-0.7-0.7-1.4-0.5c-0.6,0.2-1.1,0.7-0.9,1.2
										C404.4,141.6,405,141.8,405.6,141.6z" />
											<path class="st34" d="M410.6,138.6c-0.7,0.1-1.1,0.6-1,1.1c0.1,0.5,0.7,0.7,1.4,0.6c0.6-0.1,1.1-0.6,1-1.1
										C411.9,138.7,411.3,138.5,410.6,138.6z" />
											<path class="st34" d="M416.1,137.6c-0.7,0.1-1.1,0.6-1.1,1c0.1,0.5,0.7,0.7,1.3,0.7c0.7-0.1,1.1-0.5,1.1-1
										C417.4,137.8,416.8,137.5,416.1,137.6z" />
											<path class="st34" d="M421.7,137.1c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C423,137.4,422.4,137,421.7,137.1z" />
											<path class="st34" d="M427.3,137c-0.7,0-1.2,0.3-1.2,0.8c0,0.5,0.5,0.8,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C428.5,137.5,428,137.1,427.3,137z" />
										</g>
									</g>
									<path class="st35 line" d="M422,149.1c-3.7,4.1-8.4,7.7-13.7,10.6c-0.3,0.2-0.6,0.3-0.9,0.5c-0.2,0.1-0.5,0.2-0.7,0.4
								c-0.2,0.1-0.4,0.2-0.7,0.3c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.4,0.2-0.7,0.3c-8.5,3.8-18.5,6-29.1,6c-10.6,0-20.5-2.2-29-6
								c-0.2-0.1-0.4-0.2-0.7-0.3c-0.5-0.2-0.9-0.4-1.4-0.7c-0.2-0.1-0.5-0.2-0.7-0.3c-11-5.5-19.3-13.9-23.1-23.7
								c-0.1-0.2-0.1-0.3-0.2-0.5c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.1-0.3-0.2-0.5c-1.2-3.5-1.9-7.2-1.9-11c0-0.4,0.1-0.9,0.4-1.3
								c0.1-0.3,0.3-0.5,0.5-0.8c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c0.5-0.4,1.1-0.8,1.9-1.3
								c-0.1,0.2-0.1,0.4-0.1,0.6c0,3.8,0.6,7.5,1.9,11c0.1,0.2,0.1,0.3,0.2,0.5c0,0.1,0,0.1,0.1,0.2c0.1,0.2,0.1,0.3,0.2,0.5
								c3.8,9.8,12.1,18.1,23.1,23.7c0.2,0.1,0.5,0.2,0.7,0.3c0.5,0.2,0.9,0.4,1.4,0.7c0.2,0.1,0.4,0.2,0.7,0.3c8.5,3.8,18.4,6,29,6
								c10.6,0,20.6-2.2,29.1-6c0.2-0.1,0.4-0.2,0.7-0.3c0.5-0.2,0.9-0.4,1.4-0.6c0.2-0.1,0.5-0.2,0.7-0.3c0.2-0.1,0.5-0.2,0.7-0.4
								c0.3-0.2,0.6-0.3,0.9-0.5C415.4,154.5,419,152,422,149.1z" />
									<path class="st36" d="M431.9,124.8c0,2.3-3.5,4.6-5.1,5.2c-8.2,3.3-16.7,2.6-25.3,1.7c-8.2-0.8-17.3-2.7-23.8-8.4
								c-0.3-0.3-1.6-2-2-2h-1.1c-5.6,6.6-14.8,8.9-22.9,10c-3.2,0.4-6.5,0.7-9.8,0.8c-5.9,0.1-11.7,0.2-17.3-1.6
								c-2-0.6-6.6-2.8-6.6-5.7c0-0.3,0.1-0.6,0.2-0.9c0.1-0.3,0.3-0.5,0.5-0.8c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2
								c5.3-4.7,28.3-8.2,55.8-8.2c27.9,0,51.1,3.6,56,8.4c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.8
								C431.8,124.1,431.9,124.4,431.9,124.8z" />
									<path class="st36" d="M431.9,124.3c0,2.4-3.5,4.7-5.1,5.4c-8.2,3.4-16.7,2.6-25.3,1.8c-8.2-0.8-17.3-2.8-23.8-8.6
								c-0.3-0.3-1.6-2-2-2h-1.1c-5.6,6.7-14.8,9.1-22.9,10.3c-3.2,0.5-6.5,0.7-9.8,0.8c-5.9,0.1-11.7,0.2-17.3-1.7
								c-2-0.7-6.6-2.9-6.6-5.9c0-0.3,0.1-0.6,0.2-1c0.1-0.3,0.3-0.5,0.5-0.8c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2
								c5.3-4.8,28.3-8.5,55.8-8.5c27.9,0,51.1,3.7,56,8.7c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.3,0.4,0.5,0.5,0.8
								C431.8,123.6,431.9,123.9,431.9,124.3z" />
									<path class="st34 line" d="M431.9,124.5c0,2.3-3.5,4.6-5.1,5.2c-5,2-10.1,2.5-15.2,2.4c-3.3-0.1-6.7-0.4-10.1-0.7
								c-8.2-0.8-17.3-2.7-23.8-8.4c-0.3-0.3-1.6-2-2-2h-1.1c-5.6,6.6-14.8,8.9-22.9,10c-3.2,0.4-6.5,0.7-9.8,0.8
								c-5.9,0.1-11.7,0.2-17.3-1.6c-2-0.6-6.6-2.8-6.6-5.7c0-0.3,0.1-0.6,0.2-0.9c0.1-0.3,0.3-0.5,0.5-0.8c0.1-0.1,0.1-0.2,0.2-0.2
								c0.1-0.1,0.1-0.1,0.2-0.2c5.3-4.7,28.3-8.2,55.8-8.2c10.4,0,20.1,0.5,28.5,1.4c14.1,1.5,24.4,4,27.5,7
								c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.8C431.8,123.8,431.9,124.1,431.9,124.5z" />
									<path class="st4"
										d="M431.9,124.5c0,2.3-3.5,4.6-5.1,5.2c-5,2-10.1,2.5-15.2,2.4c-2-6.2-4.8-11.8-8.1-16.6
								c14.1,1.5,24.4,4,27.5,7c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.8C431.8,123.8,431.9,124.1,431.9,124.5z" />
									<path class="st8" d="M425.8,125.3c0,1.3-3.7,2.5-6.8,3.6c-29.6,3.8-42.9-8.6-42.9-8.6h-2c-10.3,11.8-44.9,8-45.5,7.9
								c0,0,0,0,0,0c-2.1-0.9-4.9-1.9-4.9-3c0-4.6,23.7-8.4,50.9-8.4C401.8,117,425.8,120.7,425.8,125.3z" />
									<path class="st19" d="M401.8,118.3c1.5,1,3.1,1.6,4.7,2.4c1.4,0.7,5.2,2.8,5.1,4.7c0,0.1,0,0.1,0,0.2
								c-0.4,1.9-5.3,2.9-6.8,3.4c-1.3,0.2-2.5,0.3-3.8,0.4c5.2,0.5,11.1,0.5,18-0.4c3.1-1.1,6.8-2.3,6.8-3.6
								C425.8,122.4,416,119.8,401.8,118.3z" />
									<path class="st33 line" d="M425.8,125.3c0,0.7-1.2,1.5-2.8,2.1c-6.7-3.1-24.7-5.4-45-5.7c-0.8-0.6-1.4-1-1.7-1.2
								c-0.1-0.1-0.3-0.2-0.5-0.2h-1.5c-0.2,0-0.4,0.1-0.5,0.2c-0.4,0.4-0.8,0.8-1.2,1.2c-20.8,0.1-39.3,2.5-46.2,5.6
								c-1.5-0.7-2.8-1.4-2.8-2.1c0-4.6,23.7-8.4,50.9-8.4C401.9,117,425.8,120.7,425.8,125.3z" />
									<rect x="374.4" y="110" class="st20" width="1.5" height="10.4" />
									<path class="st21" d="M383.6,110.4c-0.5,1-1.1,2-1.9,2.9c-0.7,0.8-1.5,1.6-2.5,2.2c-1.4,0.8-2.7,1-4.2,1.1
								c-0.2,0-0.4,0-0.6,0c-2.5-0.6-4.5-2.1-5.8-4c-1.3-1.9-1.8-4.1-1.8-6.2c0-1.3,0.2-2.5,0.6-3.8c1-3,3.4-5.4,5.3-8
								c1.8-2.5,3.1-5.4,2.3-8.2c0,0,0,0,0,0c-0.1-0.2-0.1-0.4-0.2-0.6c0.1,0.2,0.6,0.5,0.8,0.7c2,1.8,3.8,3.9,5.3,6.2
								C384.2,98,386.4,104.6,383.6,110.4z" />
									<path class="st22" d="M373.9,114c-0.8-0.3-1.5-0.6-2.2-1.2c-0.7-0.6-1.3-1.4-1.7-2.2c-0.8-1.5-1-3.1-0.9-4.7
								c0.1-0.9,0.3-1.8,0.7-2.7c1-2.1,2.9-3.7,4.5-5.4c1.6-1.8,2.9-4,2.2-6.2c0.1,0.2,0.4,0.4,0.5,0.6c1.3,1.5,2.5,3.2,3.4,4.9
								c2,4.1,3.1,9.1,0.6,13.1c-0.4,0.7-1,1.4-1.6,2c-0.5,0.5-1.1,0.9-1.8,1.3c-0.3,0.2-0.7,0.3-1,0.4c-0.2,0-0.7,0-0.8,0.1
								c0.5-0.4,1-0.9,1.3-1.5c-0.6,0.4-1.2,0.7-1.8,0.9c0.1-0.5,0.1-1,0.2-1.5c-0.3,0.5-0.6,1-0.9,1.5c-0.4-0.3-0.7-0.7-1.1-1
								c0.2,0.7,0.5,1.3,1,1.9C374.2,114.1,374.1,114.1,373.9,114z" />
									<path class="st18"
										d="M318.2,123.5c0.1-0.3,0.3-0.5,0.5-0.8C318.5,123,318.3,123.3,318.2,123.5z" />
									<path class="st18"
										d="M318.9,122.5c-0.1,0.1-0.1,0.1-0.2,0.2C318.8,122.7,318.9,122.6,318.9,122.5z" />
									<path class="st18"
										d="M431.7,123.5c-0.1-0.3-0.3-0.5-0.5-0.8C431.4,123,431.5,123.3,431.7,123.5z" />
									<path class="st5"
										d="M431.1,122.8c0.2,0.2,0.4,0.5,0.5,0.8C431.5,123.3,431.4,123,431.1,122.8z" />
									<path class="st5" d="M432,125.7L432,125.7c0,0.9-0.1,1.8-0.2,2.7c0,0,0,0,0,0c-0.3,2.6-0.8,5-1.7,7.4
								c-0.1,0.2-0.1,0.3-0.2,0.5c0,0.1-0.1,0.1-0.1,0.2c-0.1,0.2-0.1,0.3-0.2,0.5c-1.4,3.5-3.4,6.9-5.8,10c-2.4,3-5.3,5.8-8.5,8.2
								c0,0,0,0,0,0c-0.1-3.4-0.4-6.9-0.9-10.4c-0.7-4-1.6-7.9-2.8-11.6c5.2,0.1,10.2-0.4,15.2-2.4c1.6-0.7,5.1-2.9,5.1-5.2
								c0-0.3-0.1-0.6-0.2-0.9C431.9,124.9,432,125.3,432,125.7z" />
								</g>
								<path class="st3" d="M383.6,110.4c-0.5,1-1.1,2-1.9,2.9c-0.7,0.8-1.5,1.6-2.5,2.2c-1.4,0.8-2.7,1-4.2,1.1
							c-0.1-2-1.4-4.2-1.2-6.3c0.1-1.2,0.7-2.3,1.3-3.3c0.8-1.6,1.6-3.2,2.4-4.8c0.5-1,0.9-2,1.1-3.1c0.5-2.8-0.5-5.6-1.5-8.3
							c-0.6-1.5-1.2-3-2-4.4c0,0,0,0,0,0c-0.1-0.2-0.1-0.4-0.2-0.6c0.1,0.2,0.6,0.5,0.8,0.7c2,1.8,3.8,3.9,5.3,6.2
							C384.2,98,386.4,104.6,383.6,110.4z" />
							</g>
							<g>
								<g>
									<g>
										<g>
											<path class="st7" d="M319.9,124.7c-2-6-3-12.2-3-18.6c0-32,26.1-58.1,58.1-58.1c32,0,58.1,26.1,58.1,58.1
										c0,6.2-1,12.2-2.8,18l-1.4-0.5c1.8-5.6,2.8-11.5,2.8-17.5c0-31.2-25.4-56.6-56.6-56.6c-31.2,0-56.6,25.4-56.6,56.6
										c0,6.2,1,12.3,3,18.1L319.9,124.7z" />
										</g>
									</g>
								</g>
								<path class="st8"
									d="M323.3,125h-4.7c0-1.3,1.1-2.4,2.4-2.4C322.3,122.6,323.3,123.7,323.3,125z" />
								<path class="st8"
									d="M431.4,125h-4.7c0-1.3,1.1-2.4,2.4-2.4C430.3,122.6,431.4,123.7,431.4,125z" />
							</g>
							<g>
								<path class="st8"
									d="M379.4,48.7c0,2.4-2,4.4-4.4,4.4c-2.4,0-4.4-2-4.4-4.4s2-4.4,4.4-4.4C377.4,44.3,379.4,46.3,379.4,48.7z" />
								<g>
									<g>
										<path class="st8" d="M369.2,49.5c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3c0-1.8,1.5-3.3,3.3-3.3
									C367.7,46.2,369.2,47.7,369.2,49.5z" />
										<path class="st8"
											d="M361.5,51c0,1.3-1,2.3-2.3,2.3s-2.3-1-2.3-2.3c0-1.3,1-2.3,2.3-2.3S361.5,49.8,361.5,51z" />
										<circle class="st8" cx="354.2" cy="52.6" r="1.8" />
									</g>
									<g>
										<path class="st8" d="M380.7,49.5c0,1.8,1.5,3.3,3.3,3.3c1.8,0,3.3-1.5,3.3-3.3c0-1.8-1.5-3.3-3.3-3.3
									C382.2,46.2,380.7,47.7,380.7,49.5z" />
										<path class="st8"
											d="M388.4,51c0,1.3,1,2.3,2.3,2.3s2.3-1,2.3-2.3c0-1.3-1-2.3-2.3-2.3S388.4,49.8,388.4,51z" />
										<circle class="st8" cx="395.7" cy="52.6" r="1.8" />
									</g>
								</g>
							</g>
							<g>
								<path class="st8" d="M319.3,91.4c2.4,0.4,4,2.8,3.5,5.2c-0.4,2.4-2.8,4-5.2,3.5c-2.4-0.4-4-2.8-3.5-5.2
							C314.6,92.5,316.9,90.9,319.3,91.4z" />
								<g>
									<g>
										<path class="st8" d="M318.2,101.5c1.8,0.3,3,2.1,2.6,3.8c-0.3,1.8-2.1,3-3.8,2.6c-1.8-0.3-3-2.1-2.6-3.8
									C314.7,102.4,316.4,101.2,318.2,101.5z" />
										<path class="st8" d="M318.3,109.3c1.2,0.2,2.1,1.4,1.8,2.7c-0.2,1.2-1.4,2.1-2.7,1.8c-1.2-0.2-2.1-1.4-1.8-2.7
									C315.9,109.9,317.1,109.1,318.3,109.3z" />
										<path class="st8"
											d="M318.8,115c1,0.2,1.6,1.1,1.4,2c-0.2,1-1.1,1.6-2,1.4c-1-0.2-1.6-1.1-1.4-2S317.9,114.9,318.8,115z" />
									</g>
									<g>
										<path class="st8" d="M320.3,90.2c1.8,0.3,3.5-0.8,3.8-2.6c0.3-1.8-0.8-3.5-2.6-3.8c-1.8-0.3-3.5,0.8-3.8,2.6
									C317.4,88.1,318.6,89.8,320.3,90.2z" />
										<path class="st8" d="M323.2,82.9c1.2,0.2,2.4-0.6,2.7-1.8c0.2-1.2-0.6-2.4-1.8-2.7c-1.2-0.2-2.4,0.6-2.7,1.8
									S322,82.7,323.2,82.9z" />
										<path class="st8" d="M325.7,77.8c1,0.2,1.9-0.5,2-1.4c0.2-1-0.5-1.9-1.4-2c-1-0.2-1.9,0.5-2,1.4
									C324.2,76.7,324.8,77.6,325.7,77.8z" />
									</g>
								</g>
							</g>
							<g>
								<path class="st8" d="M430.7,91.4c-2.4,0.4-4,2.8-3.5,5.2c0.4,2.4,2.8,4,5.2,3.5c2.4-0.4,4-2.8,3.5-5.2
							C435.4,92.5,433.1,90.9,430.7,91.4z" />
								<g>
									<g>
										<path class="st8" d="M431.8,101.5c-1.8,0.3-3,2.1-2.6,3.8c0.3,1.8,2.1,3,3.8,2.6c1.8-0.3,3-2.1,2.6-3.8
									C435.3,102.4,433.6,101.2,431.8,101.5z" />
										<path class="st8" d="M431.7,109.3c-1.2,0.2-2.1,1.4-1.8,2.7c0.2,1.2,1.4,2.1,2.7,1.8c1.2-0.2,2.1-1.4,1.8-2.7
									C434.1,109.9,432.9,109.1,431.7,109.3z" />
										<path class="st8"
											d="M431.2,115c-1,0.2-1.6,1.1-1.4,2c0.2,1,1.1,1.6,2,1.4c1-0.2,1.6-1.1,1.4-2S432.1,114.9,431.2,115z" />
									</g>
									<g>
										<path class="st8" d="M429.7,90.2c-1.8,0.3-3.5-0.8-3.8-2.6c-0.3-1.8,0.8-3.5,2.6-3.8s3.5,0.8,3.8,2.6
									C432.6,88.1,431.4,89.8,429.7,90.2z" />
										<path class="st8" d="M426.8,82.9c-1.2,0.2-2.4-0.6-2.7-1.8c-0.2-1.2,0.6-2.4,1.8-2.7c1.2-0.2,2.4,0.6,2.7,1.8
									C428.8,81.5,428,82.7,426.8,82.9z" />
										<path class="st8" d="M424.3,77.8c-1,0.2-1.9-0.5-2-1.4c-0.2-1,0.5-1.9,1.4-2s1.9,0.5,2,1.4
									C425.8,76.7,425.2,77.6,424.3,77.8z" />
									</g>
								</g>
							</g>
						</g>
					</g>
					<g>
						<path class="st23" d="M375.8,59.5c-21.8,0-39.6,17.8-39.6,39.6c0,21.8,17.8,39.6,39.6,39.6c21.8,0,39.6-17.8,39.6-39.6
					C415.4,77.3,397.7,59.5,375.8,59.5z M375.8,127.8c-15.8,0-28.7-12.9-28.7-28.7s12.9-28.7,28.7-28.7c15.8,0,28.7,12.9,28.7,28.7
					S391.7,127.8,375.8,127.8z" />
						<path class="st24"
							d="M375.8,70.4c-15.8,0-28.7,12.9-28.7,28.7s12.9,28.7,28.7,28.7c15.8,0,28.7-12.9,28.7-28.7
					S391.7,70.4,375.8,70.4z M375.8,117c-9.8,0-17.8-8-17.8-17.8s8-17.8,17.8-17.8s17.8,8,17.8,17.8S385.7,117,375.8,117z" />
						<path class="st25"
							d="M375.8,81.3c-9.8,0-17.8,8-17.8,17.8s8,17.8,17.8,17.8s17.8-8,17.8-17.8S385.7,81.3,375.8,81.3z
					 M375.8,106.1c-3.8,0-6.9-3.1-6.9-6.9c0-3.8,3.1-6.9,6.9-6.9c3.8,0,6.9,3.1,6.9,6.9C382.8,103,379.7,106.1,375.8,106.1z" />
						<circle class="st26" cx="375.8" cy="99.1" r="6.9" />
					</g>
				</g>
				<g>
					<g>
						<g>
							<polygon class="st7" points="661.6,256.1 658.3,250.5 660.4,246.9 658.2,243.2 656.1,246.9 658.1,250.5 654.9,256.1 
						658.1,261.8 656.1,265.3 658.2,269 660.4,265.3 658.3,261.8 					" />
							<g>
								<polygon class="st7" points="662.5,374.4 658.3,367.2 661,362.7 658.2,358 655.5,362.7 658.1,367.2 654,374.4 658.1,381.5 
							655.5,386 658.2,390.8 661,386 658.3,381.5 						" />
								<polygon class="st7" points="652.3,368 653.8,362.5 657.3,361.6 658.2,358 654.6,358.9 653.7,362.4 648.2,363.9 646.8,369.3 
							643.3,370.3 642.3,373.9 645.9,372.9 646.9,369.4 						" />
								<polygon class="st7" points="664,368 662.6,362.5 659.1,361.6 658.2,358 661.8,358.9 662.7,362.4 668.2,363.9 669.6,369.3 
							673.1,370.3 674,373.9 670.4,372.9 669.5,369.4 						" />
							</g>
						</g>
						<g>
							<g>
								<g class="design">
									<path class="st14" d="M715.2,315.4c0,0.3,0,0.6,0,0.9v0c0,0.9-0.1,1.8-0.2,2.6c0,0,0,0,0,0c-0.3,2.6-0.8,5-1.7,7.4
								c-0.1,0.2-0.1,0.3-0.2,0.5c0,0.1-0.1,0.1-0.1,0.2c-0.1,0.2-0.1,0.3-0.2,0.5c-1.4,3.5-3.4,6.9-5.8,10c-2.4,3-5.3,5.8-8.5,8.2
								c0,0,0,0,0,0c-2.2,1.6-4.5,3.1-7,4.5c-0.3,0.2-0.6,0.3-0.9,0.5c-0.2,0.1-0.5,0.2-0.7,0.4c-0.2,0.1-0.4,0.2-0.7,0.3
								c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.4,0.2-0.7,0.3c-8.5,3.8-18.5,6-29.1,6c-10.6,0-20.5-2.2-29-6c-0.2-0.1-0.4-0.2-0.7-0.3
								c-0.5-0.2-0.9-0.4-1.4-0.7c-0.2-0.1-0.5-0.2-0.7-0.3c-11-5.5-19.3-13.9-23.1-23.7c-0.1-0.2-0.1-0.3-0.2-0.5
								c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.1-0.3-0.2-0.5c-1.2-3.5-1.9-7.2-1.9-11c0-0.4,0.1-0.9,0.4-1.3c0.1-0.3,0.3-0.5,0.5-0.8
								c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c5.3-4.7,28.3-8.2,55.8-8.2c10.4,0,20.1,0.5,28.5,1.4
								c14.1,1.5,24.4,4,27.5,7c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.8C715.1,314.5,715.2,315,715.2,315.4z" />
									<g>
										<g>
											<path class="st15" d="M642,334.2c-0.2-0.1-2.8-1.1-6.7-2.3c-1-0.3-2.1-0.6-3.3-1c-1.2-0.3-2.4-0.7-3.7-1
										c-1.3-0.3-2.6-0.6-4-0.9c-1.4-0.3-2.7-0.6-4.1-0.8c-1.4-0.2-2.8-0.4-4.2-0.6c-1.4-0.1-2.7-0.3-4.1-0.3c-0.3,0-0.7,0-1,0
										c-0.3,0-0.6,0-1,0c-0.3,0-0.6,0-0.9,0c-0.3,0-0.6,0-0.9,0c-0.6,0-1.2,0-1.8,0.1c-0.6,0-1.1,0-1.6,0.1
										c-0.5,0.1-1,0.1-1.4,0.1c-0.1-0.2-0.1-0.3-0.2-0.5c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0,0c0.5-0.1,1-0.2,1.5-0.3
										c0.5-0.1,1.1-0.2,1.7-0.3c0.6-0.1,1.2-0.1,1.8-0.2c0.3,0,0.6-0.1,0.9-0.1c0.3,0,0.6,0,1,0c0.6,0,1.3,0,2,0
										c0.7,0,1.4,0,2.1,0.1c0.7,0,1.4,0.1,2.1,0.1c1.4,0.1,2.8,0.3,4.3,0.5c1.4,0.3,2.8,0.5,4.2,0.9c1.4,0.3,2.7,0.7,4,1.1
										c1.3,0.4,2.5,0.8,3.7,1.2c1.2,0.4,2.2,0.8,3.2,1.3c2,0.8,3.6,1.6,4.7,2.2C641.3,333.8,641.9,334.2,642,334.2z" />
											<path class="st15" d="M713.1,326.8c-0.5-0.1-1-0.2-1.5-0.3c-0.5-0.1-1.1-0.2-1.7-0.3c-0.6-0.1-1.2-0.1-1.8-0.2
										c-0.3,0-0.6-0.1-0.9-0.1c-0.3,0-0.6,0-1,0c-0.7,0-1.3,0-2,0c-0.7,0-1.4,0-2.1,0.1c-0.7,0-1.4,0.1-2.1,0.1
										c-1.4,0.1-2.8,0.3-4.3,0.5c-1.4,0.3-2.8,0.5-4.2,0.9c-1.4,0.3-2.7,0.7-4,1.1c-1.3,0.4-2.5,0.8-3.7,1.2
										c-1.2,0.4-2.3,0.8-3.2,1.3c-2,0.8-3.6,1.6-4.7,2.2c-0.6,0.3-1,0.6-1.3,0.7c-0.2-0.6-0.6-1.1-0.9-1.6
										c0.2-1.2,0.3-2.2,0.2-3.1c0-1.2-0.2-2.4-0.6-3.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.2-0.4-0.3-0.5
										c-0.3-0.5-0.6-1-0.9-1.3c-0.7-0.8-1.5-1.5-2.4-2c-0.8-0.5-1.7-0.9-2.7-1.2c-0.2-0.1-0.5-0.1-0.7-0.2l-0.1,0
										c-0.2-0.1-0.4-0.1-0.6-0.2c-0.3-0.1-0.6-0.1-1-0.2l-0.4-0.1c-0.9-0.2-1.8-0.3-2.7-0.7c-0.4-0.2-0.8-0.4-1.2-0.7
										c-0.3-0.2-0.6-0.5-1-1l-0.2-0.2l-0.7,0l-0.2,0.2c-0.3,0.4-0.6,0.7-1,1c-0.4,0.3-0.8,0.5-1.2,0.7c-0.8,0.3-1.6,0.5-2.7,0.7
										c-0.1,0-0.3,0.1-0.4,0.1c-0.3,0.1-0.6,0.1-1,0.2c-0.5,0.1-1,0.2-1.4,0.4c-1,0.3-1.9,0.7-2.7,1.2c-0.9,0.5-1.7,1.2-2.4,2
										c-0.4,0.5-0.7,0.9-1,1.3c-0.3,0.5-0.5,1-0.7,1.5c-0.4,1-0.6,2.2-0.6,3.4c0,0.9,0.1,1.9,0.2,3.1c-0.6,0.8-1.1,1.8-1.3,2.9
										c-0.2,0.7-0.2,1.4-0.2,2c0,0.7,0.1,1.3,0.3,2c0.3,1,0.7,2,1.4,3c0,0,0,0,0,0c-0.2,0.2-0.4,0.5-0.7,0.8
										c-0.2,0.2-0.3,0.4-0.5,0.6c-0.2,0.2-0.4,0.4-0.7,0.6c-0.2,0.2-0.5,0.4-0.8,0.7c-0.3,0.2-0.6,0.5-0.9,0.7
										c-0.3,0.2-0.7,0.5-1,0.7c-0.4,0.2-0.7,0.5-1.1,0.7c-0.2,0.1-0.4,0.3-0.6,0.4c-0.2,0.1-0.4,0.2-0.6,0.3
										c-0.4,0.2-0.8,0.5-1.3,0.7c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.5,0.2-0.7,0.3c-0.2,0.1-0.5,0.2-0.7,0.3
										c-0.5,0.2-1,0.4-1.5,0.6c-0.5,0.2-1,0.3-1.5,0.5s-1,0.3-1.5,0.5c-0.2,0-0.3,0.1-0.5,0.1c0.5,0.2,0.9,0.4,1.4,0.7
										c0.2,0.1,0.4,0.2,0.7,0.3c0.1,0,0.3-0.1,0.4-0.1c0.5-0.2,1-0.3,1.6-0.5c0.5-0.2,1-0.4,1.5-0.6c0.2-0.1,0.5-0.2,0.7-0.3
										c0.2-0.1,0.5-0.3,0.7-0.4c0.5-0.2,0.9-0.5,1.4-0.7c0.4-0.3,0.9-0.5,1.3-0.8c0.2-0.1,0.4-0.3,0.6-0.4
										c0.2-0.1,0.4-0.3,0.6-0.4c0.4-0.3,0.7-0.6,1.1-0.8c0.3-0.3,0.6-0.6,1-0.9c0.3-0.3,0.6-0.6,0.8-0.8c0.3-0.3,0.5-0.5,0.7-0.8
										c0.2-0.3,0.4-0.5,0.6-0.7c0.2-0.2,0.3-0.5,0.4-0.7c0.3-0.4,0.4-0.7,0.5-1c0.1,0.1,0.2,0.2,0.2,0.4c0.7,0.9,1.5,1.8,2.4,2.6
										c0.8,0.6,1.7,1.3,2.7,2c0.3,0.2,0.7,0.5,1.1,0.7c0.6,0.4,1.1,0.8,1.7,1.2c0.8,0.6,1.7,1.3,2.6,2c0.9,0.8,1.6,1.6,2.3,2.5
										c0.6,0.9,1.2,1.9,1.6,3l0.6,1.2l0.6-1.2c0.4-1.1,1-2.1,1.7-3c0.6-0.8,1.4-1.6,2.3-2.5c0.9-0.8,1.8-1.4,2.6-2
										c0.5-0.4,1-0.7,1.6-1.1c0.4-0.3,0.8-0.5,1.2-0.8c1.1-0.7,1.9-1.4,2.7-2c1-0.8,1.8-1.7,2.5-2.6c0,0,0.1-0.1,0.1-0.1
										c0.1,0.2,0.2,0.5,0.4,0.7c0.1,0.2,0.3,0.4,0.4,0.7c0.2,0.2,0.4,0.5,0.6,0.7c0.2,0.3,0.5,0.5,0.7,0.8
										c0.3,0.3,0.5,0.6,0.8,0.8c0.3,0.3,0.6,0.6,1,0.9c0.3,0.3,0.7,0.6,1.1,0.8c0.2,0.1,0.4,0.3,0.6,0.4c0.2,0.1,0.4,0.3,0.6,0.4
										c0.4,0.3,0.8,0.5,1.3,0.8c0.5,0.2,0.9,0.5,1.4,0.7c0.2,0.1,0.5,0.2,0.7,0.4c0.2,0.1,0.5,0.2,0.7,0.3c0.5,0.2,1,0.4,1.5,0.6
										c0.5,0.2,1,0.4,1.6,0.5c0.1,0,0.2,0.1,0.3,0.1c0.2-0.1,0.4-0.2,0.7-0.3c0.5-0.2,0.9-0.4,1.4-0.6c-0.1,0-0.2-0.1-0.4-0.1
										c-0.5-0.2-1-0.3-1.5-0.5s-1-0.3-1.5-0.5c-0.5-0.2-1-0.4-1.5-0.6c-0.2-0.1-0.5-0.2-0.7-0.3c-0.2-0.1-0.5-0.2-0.7-0.3
										c-0.5-0.2-0.9-0.4-1.4-0.6c-0.4-0.2-0.9-0.5-1.3-0.7c-0.2-0.1-0.4-0.2-0.6-0.3c-0.2-0.1-0.4-0.2-0.6-0.4
										c-0.4-0.2-0.8-0.5-1.1-0.7c-0.3-0.3-0.7-0.5-1-0.7c-0.3-0.2-0.6-0.5-0.9-0.7c-0.3-0.2-0.6-0.4-0.8-0.7
										c-0.2-0.2-0.5-0.4-0.7-0.6c-0.2-0.2-0.4-0.4-0.5-0.6c-0.2-0.3-0.4-0.5-0.6-0.7c0.7-1,1.2-2.1,1.5-3.2
										c0.2-0.7,0.3-1.3,0.3-2c0-0.2,0-0.6,0-1c0-0.3-0.1-0.6-0.2-1c-0.1-0.4-0.2-0.8-0.4-1.2c0.9-0.3,3.2-1.2,6.3-2.2
										c1-0.3,2.1-0.6,3.3-1c1.2-0.3,2.4-0.7,3.7-1c1.3-0.3,2.6-0.6,4-0.9c1.4-0.3,2.7-0.6,4.1-0.8c1.4-0.2,2.8-0.4,4.2-0.6
										c1.4-0.1,2.7-0.3,4.1-0.3c0.3,0,0.7,0,1,0c0.3,0,0.6,0,1,0c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,0.9,0c0.6,0,1.2,0,1.8,0.1
										c0.6,0,1.1,0,1.6,0.1c0.5,0.1,1,0.1,1.4,0.1c0.1-0.2,0.1-0.3,0.2-0.5C713.2,327,713.2,326.9,713.1,326.8
										C713.2,326.8,713.2,326.8,713.1,326.8z M674.1,339c-0.3,1-0.8,2.1-1.5,3.1c-0.6,0.9-1.4,1.7-2.3,2.4
										c-0.7,0.6-1.6,1.2-2.7,2c-0.4,0.2-0.7,0.5-1.1,0.7c-0.6,0.4-1.1,0.8-1.7,1.1c-0.9,0.6-1.8,1.3-2.7,2.1
										c-1,0.9-1.7,1.7-2.4,2.6c-0.1,0.1-0.2,0.3-0.3,0.5c0,0.1-0.1,0.1-0.1,0.2c-0.1,0.2-0.3,0.4-0.4,0.7
										c-0.1,0.3-0.3,0.5-0.4,0.8c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0.1-0.3c0-0.1,0-0.3,0-0.4v-0.1c0-0.5,0-1,0.1-1.5
										c0-0.6,0-1.3,0.1-1.9v0c0.4,0,0.7,0,0.9,0c0.4,0,0.8-0.1,1.1-0.2c0.7-0.1,1.1-0.3,1.1-0.3l0.3-0.1L662,350
										c0,0-0.5-0.2-1.1-0.3c-0.3-0.1-0.7-0.1-1.1-0.1c-0.3,0-0.6,0-0.9-0.1v-0.1c0.5,0,1-0.1,1.4-0.2c0.5-0.1,0.8-0.3,0.8-0.3
										l0.2-0.1l-0.2-0.1c0,0-0.3-0.2-0.8-0.3c-0.3-0.1-0.8-0.2-1.3-0.2c0.3,0,0.6-0.1,0.8-0.2c0.3-0.1,0.6-0.3,0.6-0.3l0.1-0.1
										l-0.1-0.1c0,0-0.2-0.2-0.6-0.3c-0.2-0.1-0.5-0.2-0.8-0.2l0-2.6c0-1,0-2.1,0-3.2c0-0.5,0-1,0-1.5c0.1,0.3,0.2,0.6,0.3,1
										c0.2,0.6,0.4,1.3,0.7,2c0.4,0.8,0.8,1.5,1.3,2c0.6,0.6,1.3,1,2.1,1.2c0.9,0.2,1.8,0.1,2.5-0.4c0.8-0.5,1.2-1.5,1.3-2.6
										c0.1-1-0.3-1.9-1-2.6c-0.6-0.6-1.2-0.9-1.9-0.9c-0.1,0-0.2,0-0.3,0c-0.4,0.1-0.8,0.3-1,0.5c-0.3,0.3-0.5,0.7-0.6,1
										c-0.1,0.4-0.1,0.8-0.1,1.1c0,0.1,0,0.2,0.1,0.2c0,0.1,0,0.1,0.1,0.2l0,0.1c0.1,0.2,0.2,0.3,0.3,0.4
										c0.2,0.2,0.5,0.3,0.7,0.3c0.2,0,0.4,0,0.6-0.2c0.4-0.2,0.5-0.5,0.6-0.7c0.1-0.2,0.1-0.3,0.1-0.3l0.1-1l-0.4,1
										c0,0,0,0.1-0.1,0.2c0,0.1-0.2,0.3-0.5,0.4c-0.3,0.1-0.6,0-0.8-0.2c-0.2-0.3-0.3-0.8-0.1-1.3c0.2-0.5,0.6-0.9,1-0.9
										c0,0,0.1,0,0.1,0c0.4,0,0.9,0.3,1.4,0.7c0.2,0.2,0.4,0.5,0.5,0.8c0,0.1,0,0.1,0,0.1l0,0.1c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1
										c0,0.1,0,0.3,0,0.5c0,0.3-0.1,0.7-0.2,1c0,0.1-0.1,0.1-0.1,0.2l-0.1,0.2l-0.2,0.2c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0-0.1,0.1
										c-0.4,0.3-1.1,0.4-1.7,0.3c-0.6-0.1-1.2-0.4-1.7-0.9c-0.4-0.4-0.8-1-1.2-1.6c-0.3-0.6-0.6-1.3-0.8-1.8
										c-0.4-1.1-0.7-2.1-0.9-2.7c0-0.3,0-0.6,0-0.9c0-0.3,0-0.6,0-0.8l0.1-0.1c0.4-0.4,0.8-0.9,1.3-1.6c0.3-0.4,0.5-0.9,0.7-1.3
										c0.2-0.6,0.4-1.1,0.4-1.7c0.1-0.6,0-1.3-0.1-1.9c-0.1-0.6-0.3-1.1-0.5-1.6l-0.1-0.2c-0.2-0.5-0.4-1-0.5-1.6
										c-0.1-0.3-0.1-0.5-0.1-0.7c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.2v-0.1c0-0.1,0-0.1,0-0.2c0-0.5,0.1-0.9,0.3-1.3
										c0.2-0.4,0.4-0.7,0.6-1c0.2-0.3,0.5-0.5,0.8-0.7c0.2-0.1,0.5-0.3,0.7-0.3c0.1,0,0.2-0.1,0.3-0.1c0.1,0,0.1,0,0.2,0
										c0.1,0,0.2,0,0.2,0l1-0.2l-1.1-0.1c0,0-0.1,0-0.2,0c-0.1,0-0.3,0-0.5,0c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.7,0.3-1,0.6
										c-0.4,0.3-0.7,0.7-0.9,1.2c-0.3,0.5-0.5,1.1-0.5,1.7c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3c0,0.1,0,0.1,0,0.2
										c0,0.4,0.1,0.7,0.1,1c0.1,0.6,0.4,1.2,0.5,1.7l0.1,0.2c0.2,0.5,0.4,1,0.5,1.4c0.1,0.5,0.2,1,0.1,1.5c0,0.5-0.1,0.9-0.3,1.4
										c-0.1,0.4-0.3,0.8-0.5,1.2c-0.3,0.6-0.6,1.1-0.8,1.4v-0.3c0-0.2,0-0.5,0-0.7c0-0.7,0-1.5,0-2.2c0-0.4,0-0.8,0-1.2
										c0-2.2-0.1-4.2-0.1-6c0-1.2-0.1-2.2-0.1-3c0-0.4,0-0.9,0-1.2c0-1-0.1-1.6-0.1-1.6h-0.2c0,0,0,0.6-0.1,1.6
										c0,0.4,0,0.8,0,1.3c0,0.8-0.1,1.8-0.1,3c-0.1,1.9-0.1,4-0.1,6c0,0.4,0,0.8,0,1.2c0,0.7,0,1.4,0,2.2c0,0.3,0,0.7,0,1
										c-0.2-0.4-0.5-0.9-0.8-1.4c-0.2-0.4-0.4-0.8-0.5-1.2c-0.2-0.5-0.3-1-0.3-1.4c0-0.5,0-1,0.1-1.5c0.1-0.5,0.3-0.9,0.5-1.4
										l0.1-0.2c0.2-0.5,0.4-1.1,0.5-1.7c0.1-0.3,0.1-0.6,0.1-1c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.3,0-0.5
										c-0.1-0.6-0.2-1.2-0.5-1.7c-0.2-0.4-0.5-0.8-0.9-1.2c-0.3-0.3-0.7-0.5-1-0.6c-0.3-0.1-0.5-0.2-0.8-0.2c-0.2,0-0.4,0-0.5,0
										c-0.1,0-0.2,0-0.2,0l-1.1,0.1l1,0.2c0,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0.1,0.3,0.1c0.2,0.1,0.4,0.2,0.7,0.3
										c0.2,0.2,0.5,0.4,0.7,0.7c0.3,0.3,0.5,0.7,0.6,1c0.2,0.4,0.3,0.9,0.3,1.3c0,0.1,0,0.1,0,0.2v0.1c0,0.1,0,0.2,0,0.2
										c0,0.1,0,0.1,0,0.2c0,0.2-0.1,0.5-0.1,0.7c-0.1,0.5-0.3,1.1-0.5,1.6l-0.1,0.2c-0.2,0.5-0.4,1-0.5,1.6
										c-0.1,0.6-0.2,1.3-0.1,1.9c0.1,0.7,0.3,1.3,0.4,1.7c0.2,0.4,0.4,0.9,0.7,1.3c0.5,0.7,0.9,1.2,1.3,1.6c0,0,0.1,0.1,0.1,0.1
										c0,0.6,0,1.2,0,1.8c-0.3,0.9-0.6,1.8-0.9,2.7c-0.2,0.6-0.5,1.2-0.8,1.8c-0.3,0.7-0.7,1.2-1.2,1.6c-0.4,0.4-1,0.7-1.7,0.9
										c-0.6,0.1-1.3,0-1.7-0.3c0,0,0,0-0.1-0.1c0,0-0.1,0-0.1-0.1l-0.2-0.3l0-0.1c0-0.1-0.1-0.1-0.1-0.2l0,0
										c-0.1-0.3-0.2-0.6-0.2-1c0-0.2,0-0.4,0-0.5c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
										c0.1-0.3,0.3-0.6,0.5-0.8c0.5-0.5,1-0.7,1.4-0.7c0.5,0,0.8,0.4,1,0.9c0.2,0.5,0.1,1-0.1,1.3c-0.2,0.2-0.4,0.3-0.5,0.3
										c-0.1,0-0.2,0-0.3-0.1c-0.3-0.1-0.5-0.4-0.5-0.4c-0.1-0.1-0.1-0.2-0.1-0.2l-0.4-1l0.1,1.1c0,0,0,0.1,0.1,0.3
										c0.1,0.2,0.3,0.5,0.6,0.7c0.2,0.1,0.4,0.2,0.6,0.2c0.3,0,0.5-0.1,0.7-0.4c0.1-0.1,0.2-0.2,0.3-0.4c0-0.1,0.1-0.2,0.1-0.2
										l0,0c0-0.1,0-0.2,0.1-0.2c0.1-0.3,0-0.7-0.1-1.1c-0.1-0.3-0.2-0.7-0.6-1c-0.3-0.3-0.6-0.5-1-0.5c-0.7-0.1-1.5,0.2-2.1,0.8
										c-0.7,0.7-1.1,1.7-1,2.6c0,1.1,0.5,2.1,1.3,2.6c0.7,0.5,1.5,0.6,2.5,0.4c0.8-0.2,1.5-0.6,2.1-1.2c0.5-0.5,0.9-1.2,1.3-2
										c0.3-0.7,0.5-1.4,0.7-2c0.1-0.3,0.2-0.6,0.3-1v0.2c0,0.4,0,0.9,0,1.3c0,0.6,0,1.2,0,1.8l0,1.6c0,0.8,0,1.6,0,2.4
										c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.6,0.3-0.6,0.3l-0.1,0.1l0.1,0.1c0,0,0.2,0.2,0.6,0.3c0.2,0.1,0.5,0.2,0.8,0.2
										c-0.5,0-1,0.1-1.3,0.2c-0.5,0.1-0.8,0.3-0.8,0.3l-0.2,0.1l0.2,0.1c0,0,0.3,0.2,0.8,0.3c0.4,0.1,0.9,0.2,1.4,0.2v0.1
										c-0.3,0-0.6,0-0.9,0.1c-0.4,0-0.8,0.1-1.1,0.1c-0.7,0.1-1.1,0.3-1.1,0.3l-0.3,0.1l0.3,0.1c0,0,0.5,0.2,1.1,0.3
										c0.3,0.1,0.7,0.1,1.1,0.1c0.3,0,0.6,0,0.9,0.1v0c0,1,0.1,2.1,0.1,3.2l0,0.6c0,0.1,0,0.2,0,0.3c0,0.1,0,0.3,0,0.4
										c-0.4-0.8-0.8-1.6-1.3-2.2c-0.7-0.9-1.5-1.8-2.4-2.6c-0.9-0.8-1.8-1.5-2.7-2.1c-0.5-0.4-1-0.7-1.6-1.1
										c-0.4-0.3-0.8-0.5-1.2-0.8c-1.1-0.7-1.9-1.3-2.6-2c-0.9-0.7-1.7-1.5-2.3-2.4c-0.7-1-1.2-2-1.5-3.1
										c-0.2-0.6-0.2-1.1-0.3-1.7c0-0.6,0-1.2,0.2-1.7c0.3-1.2,0.8-2.2,1.5-3c0.7-0.8,1.6-1.3,2.6-1.5c1-0.2,2.1-0.1,2.9,0.3
										c0.4,0.2,0.8,0.5,1.3,0.9c0.3,0.4,0.6,0.8,0.9,1.4c0.4,1.1,0.4,2.3,0,3.4c-0.4,1.1-1.2,1.9-2.2,2.2c-0.3,0.1-0.7,0.2-1,0.2
										c-0.5,0-1.2-0.1-1.8-0.7c-0.4-0.4-0.6-0.9-0.6-1.5c0-0.6,0.2-1.2,0.5-1.6l-0.2-0.2c-0.4,0.5-0.6,1.1-0.6,1.8
										c0,0.7,0.3,1.3,0.7,1.8c0.5,0.6,1.3,0.9,2.1,0.9c0.4,0,0.7-0.1,1-0.2c0.6-0.2,1.1-0.5,1.5-0.9c0.2-0.2,0.5-0.6,0.7-0.9
										l0.1-0.1c0.3-0.3,0.5-0.8,0.8-1.3c0.2-0.5,0.5-1.1,0.8-1.8c0.3-0.7,0.6-1.5,0.8-2.2c0.2-0.9,0.5-1.7,0.6-2.6
										c0.2-1.2,0.2-2.1,0-3c-0.1-0.5-0.2-1.1-0.4-1.5c-0.2-0.5-0.5-1-0.9-1.3c-0.7-0.8-1.8-1.1-2.7-0.9c-0.5,0.1-1,0.4-1.3,0.7
										c-0.4,0.3-0.7,0.8-0.9,1.2c-0.2,0.5-0.3,1-0.3,1.6c0,0.5,0.1,1,0.4,1.5c0.5,1,1.3,1.4,2.1,1.2c0.6-0.2,1.1-0.8,1.4-1.6
										c0.1-0.3,0.1-0.7,0-1c-0.1-0.2-0.1-0.3-0.2-0.4c-0.1-0.1-0.1-0.2-0.2-0.2l0,0c-0.3-0.2-0.6-0.3-0.9-0.2
										c-0.2,0-0.3,0.1-0.3,0.1l-0.8,0.6l0.9-0.4c0,0,0.1,0,0.2,0c0,0,0,0,0.1,0c0.1,0,0.4,0,0.6,0.3l0,0c0.1,0.1,0.1,0.1,0.1,0.2
										c0.1,0.1,0.1,0.2,0.1,0.3c0,0.2,0,0.4-0.1,0.7c-0.2,0.4-0.6,0.9-1,1c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0
										c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0l-0.1,0c0,0-0.1,0-0.1-0.1c-0.2-0.2-0.4-0.4-0.6-0.7
										c-0.1-0.3-0.2-0.7-0.2-1c0-0.4,0.1-0.7,0.3-1c0.2-0.3,0.4-0.6,0.6-0.8c0.3-0.2,0.6-0.4,0.9-0.5c0.6-0.1,1.3,0.1,1.8,0.6
										c0.5,0.5,0.9,1.3,1,2.2c0.1,0.8,0.1,1.7,0,2.7c-0.1,0.9-0.3,1.8-0.5,2.5c-0.2,0.9-0.4,1.6-0.6,2.2
										c-0.1,0.3-0.2,0.6-0.3,0.9v-0.1c0-0.4,0-0.7-0.1-1c0-0.1,0-0.2-0.1-0.3c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1,0-0.1
										c0-0.1-0.1-0.2-0.1-0.3c-0.4-1.2-1.3-2.2-2.4-2.7c-1-0.5-2.1-0.6-3.3-0.5c-1.1,0.2-2.2,0.7-3.1,1.6
										c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1-1-0.1-1.9,0-2.7c0.1-1.1,0.3-2.2,0.7-3.1c0.2-0.5,0.5-1,0.7-1.4c0.3-0.5,0.6-0.9,0.9-1.2
										c0.4-0.4,0.7-0.7,1.1-1c0.4-0.3,0.8-0.6,1.2-0.8c0.7-0.4,1.6-0.7,2.6-1c0.5-0.1,0.9-0.2,1.3-0.3c0.3-0.1,0.6-0.1,0.9-0.1
										c0.2,0,0.3-0.1,0.5-0.1c0.9-0.1,1.9-0.3,2.8-0.7c0.5-0.2,0.9-0.5,1.4-0.8c0.3-0.2,0.6-0.5,0.9-0.9c0.3,0.4,0.6,0.6,0.9,0.9
										c0.4,0.3,0.9,0.6,1.4,0.8c1,0.4,1.9,0.6,2.9,0.7l0.2,0c0.4,0.1,0.8,0.1,1.1,0.2c0.2,0,0.5,0.1,0.7,0.1
										c0.2,0.1,0.4,0.1,0.7,0.2c1,0.3,1.9,0.6,2.6,1c0.4,0.2,0.8,0.4,1.2,0.8c0.3,0.3,0.7,0.6,1.1,1c0.3,0.3,0.6,0.7,0.9,1.2
										c0.1,0.2,0.2,0.3,0.3,0.5l0.1,0.2c0.1,0.2,0.2,0.5,0.3,0.7c0.4,0.9,0.7,2,0.7,3.1c0.1,0.8,0,1.6,0,2.7
										c-0.1-0.1-0.1-0.1-0.2-0.2l0,0c-0.2-0.2-0.4-0.4-0.7-0.6l-0.3-0.2l-0.4-0.2c-0.2-0.1-0.4-0.2-0.5-0.2
										c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2-0.1-0.3-0.1c-0.2,0-0.3-0.1-0.5-0.1c-0.3,0-0.6-0.1-0.9-0.1c-0.8,0-1.6,0.2-2.3,0.5
										c-0.5,0.2-1,0.6-1.4,1.1l-0.1,0.1c-0.2,0.2-0.4,0.4-0.5,0.7c-0.2,0.2-0.3,0.5-0.4,0.7l-0.1,0.2c-0.2,0.6-0.3,1.3-0.3,2
										c-0.1-0.3-0.2-0.6-0.3-0.9c-0.2-0.6-0.4-1.4-0.6-2.2c-0.2-0.7-0.4-1.6-0.5-2.5c-0.1-0.9-0.1-1.8,0-2.7
										c0.1-0.9,0.5-1.6,1-2.2c0.5-0.5,1.2-0.8,1.8-0.6c0.3,0.1,0.6,0.2,0.9,0.5c0.3,0.2,0.5,0.5,0.6,0.8c0.2,0.3,0.3,0.7,0.3,1
										c0,0.3-0.1,0.7-0.2,1c-0.1,0.3-0.3,0.6-0.5,0.7c0,0,0,0-0.1,0l-0.1,0l0,0c-0.1,0-0.1,0.1-0.2,0.1c0,0,0,0-0.1,0
										c0,0,0,0,0,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-0.5-0.1-0.9-0.6-1.1-1c-0.1-0.2-0.1-0.4-0.1-0.7c0-0.1,0.1-0.2,0.1-0.2
										c0-0.1,0.1-0.1,0.1-0.2l0,0c0.2-0.2,0.5-0.3,0.6-0.3c0,0,0,0,0.1,0c0.1,0,0.2,0,0.2,0l0.9,0.4l-0.8-0.6
										c-0.1,0-0.1-0.1-0.3-0.1c-0.3-0.1-0.7,0-0.9,0.2l0,0c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.1,0.2-0.2,0.4
										c-0.1,0.3-0.1,0.7,0,1c0.2,0.8,0.7,1.3,1.4,1.6c0.8,0.3,1.6-0.2,2.1-1.2c0.2-0.4,0.4-1,0.4-1.5c0-0.5-0.1-1-0.3-1.6
										c-0.2-0.5-0.5-0.9-0.9-1.2c-0.4-0.4-0.9-0.6-1.3-0.7c-0.2,0-0.4-0.1-0.6-0.1c-0.8,0-1.6,0.4-2.1,1
										c-0.3,0.4-0.7,0.8-0.9,1.3c-0.2,0.5-0.4,1-0.4,1.5c-0.1,0.9-0.1,1.8,0.1,3c0.1,0.9,0.4,1.8,0.6,2.6
										c0.2,0.8,0.5,1.5,0.8,2.2c0.3,0.7,0.6,1.3,0.8,1.8c0.3,0.5,0.5,1,0.8,1.3c0,0,0,0,0,0.1c0.2,0.4,0.5,0.7,0.7,0.9
										c0.4,0.4,0.9,0.7,1.5,0.9c0.3,0.1,0.7,0.2,1,0.2c0.8,0,1.6-0.3,2.1-0.9c0.4-0.5,0.7-1.1,0.7-1.8c0-0.7-0.2-1.3-0.6-1.8
										l-0.2,0.2c0.4,0.4,0.5,1,0.5,1.6c0,0.6-0.3,1.2-0.6,1.5c-0.6,0.6-1.3,0.7-1.8,0.7c-0.3,0-0.7-0.1-1-0.2
										c-0.5-0.2-0.9-0.4-1.3-0.8c-0.4-0.4-0.7-0.9-0.9-1.4c-0.4-1.1-0.4-2.4,0-3.4c0-0.1,0.1-0.1,0.1-0.2
										c0.1-0.2,0.2-0.4,0.3-0.5c0.1-0.2,0.3-0.4,0.4-0.6l0.1-0.1c0.4-0.4,0.8-0.7,1.3-0.9c0.9-0.4,1.9-0.5,2.9-0.3
										c0.2,0,0.3,0.1,0.5,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.1,0.1,0.2,0.1c0.2,0.1,0.3,0.1,0.4,0.2l0.3,0.2l0.3,0.2
										c0.2,0.1,0.4,0.3,0.6,0.5c0.7,0.8,1.2,1.8,1.5,3c0.1,0.3,0.1,0.6,0.1,0.9c0,0.3,0,0.6,0,0.9
										C674.4,337.9,674.3,338.5,674.1,339z" />
											<path class="st15" d="M641.7,342.2c0.3-0.4,0.3-1-0.1-1.3c-0.4-0.2-0.9-0.1-1.2,0.2c-0.3,0.4-0.3,0.9,0.1,1.2
										C640.8,342.7,641.3,342.7,641.7,342.2z" />
											<path class="st15" d="M637.5,344c-0.4,0.3-0.5,0.8-0.2,1.2s0.8,0.4,1.3,0.1c0.4-0.3,0.5-0.9,0.2-1.2
										C638.4,343.7,637.9,343.7,637.5,344z" />
											<path class="st15" d="M634.9,347.7c0.5-0.2,0.6-0.8,0.4-1.2c-0.2-0.4-0.8-0.5-1.2-0.3c-0.4,0.2-0.6,0.8-0.4,1.2
										C633.9,347.8,634.4,347.9,634.9,347.7z" />
											<path class="st15" d="M631,349.5c0.5-0.2,0.7-0.7,0.5-1.1c-0.2-0.4-0.7-0.6-1.1-0.4c-0.5,0.2-0.7,0.7-0.6,1.1
										C630,349.4,630.5,349.7,631,349.5z" />
											<path class="st15" d="M626.9,350.8c0.5-0.1,0.8-0.6,0.7-1.1c-0.1-0.4-0.6-0.7-1.1-0.6c-0.5,0.1-0.8,0.6-0.7,1.1
										C625.9,350.7,626.4,350.9,626.9,350.8z" />
											<path class="st15" d="M640.3,336.1c0.2-0.4-0.1-1-0.8-1.3c-0.6-0.3-1.3-0.1-1.4,0.3c-0.2,0.4,0.2,1,0.8,1.2
										C639.5,336.6,640.1,336.5,640.3,336.1z" />
											<path class="st15" d="M635.2,334c0.2-0.4-0.2-1-0.9-1.2c-0.6-0.2-1.3,0-1.4,0.4c-0.1,0.4,0.2,1,0.9,1.2
										C634.4,334.6,635,334.4,635.2,334z" />
											<path class="st15" d="M629,331.1c-0.6-0.2-1.3,0-1.4,0.5c-0.1,0.5,0.3,1,0.9,1.1c0.6,0.2,1.3,0,1.4-0.5
										C630.1,331.8,629.7,331.3,629,331.1z" />
											<path class="st15" d="M623.6,329.7c-0.7-0.1-1.3,0.1-1.4,0.6c-0.1,0.5,0.4,0.9,1,1.1c0.6,0.1,1.2-0.1,1.4-0.6
										C624.7,330.4,624.2,329.9,623.6,329.7z" />
											<path class="st15" d="M618.1,328.7c-0.7-0.1-1.3,0.2-1.3,0.7c-0.1,0.5,0.4,0.9,1.1,1c0.7,0.1,1.2-0.2,1.3-0.7
										C619.2,329.3,618.7,328.8,618.1,328.7z" />
											<path class="st15" d="M612.5,328.2c-0.7,0-1.2,0.3-1.3,0.8c0,0.5,0.5,0.9,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C613.7,328.6,613.1,328.2,612.5,328.2z" />
											<path class="st15" d="M606.8,328.1c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C608.1,328.5,607.5,328.1,606.8,328.1z" />
											<path class="st15" d="M675.9,341c-0.4,0.2-0.5,0.8-0.1,1.3c0.3,0.4,0.9,0.5,1.3,0.2c0.4-0.3,0.4-0.8,0.1-1.2
										C676.8,340.8,676.3,340.7,675.9,341z" />
											<path class="st15" d="M678.9,345.3c0.4,0.3,1,0.3,1.3-0.1s0.2-0.9-0.2-1.2c-0.4-0.3-0.9-0.3-1.2,0.1
										C678.4,344.4,678.4,345,678.9,345.3z" />
											<path class="st15" d="M683.3,346.2c-0.4-0.2-1-0.1-1.2,0.3c-0.2,0.4-0.1,0.9,0.4,1.2c0.5,0.2,1,0.1,1.2-0.3
										C683.9,347,683.7,346.4,683.3,346.2z" />
											<path class="st15" d="M687,347.9c-0.5-0.2-1,0-1.1,0.4c-0.2,0.4,0.1,1,0.5,1.1c0.5,0.2,1,0,1.2-0.5
										C687.7,348.6,687.5,348.1,687,347.9z" />
											<path class="st15" d="M691.6,350.2c0,0,0,0.1,0,0.1c-0.3,0.2-0.6,0.3-0.9,0.5c0,0-0.1,0-0.1,0c-0.5-0.1-0.8-0.6-0.7-1.1
										c0.1-0.5,0.6-0.7,1.1-0.6C691.4,349.3,691.7,349.8,691.6,350.2z" />
											<path class="st15" d="M678.5,336.4c0.6-0.3,1-0.8,0.8-1.2c-0.2-0.4-0.8-0.6-1.4-0.3c-0.6,0.3-1,0.8-0.8,1.3
										C677.3,336.5,677.9,336.6,678.5,336.4z" />
											<path class="st15" d="M684.5,333.2c-0.1-0.4-0.8-0.6-1.4-0.4c-0.6,0.2-1,0.8-0.9,1.2c0.2,0.4,0.8,0.6,1.4,0.4
										C684.2,334.2,684.6,333.6,684.5,333.2z" />
											<path class="st15" d="M688.9,332.7c0.6-0.2,1.1-0.7,0.9-1.1c-0.1-0.4-0.7-0.7-1.4-0.5c-0.6,0.2-1.1,0.7-0.9,1.2
										C687.6,332.7,688.2,332.9,688.9,332.7z" />
											<path class="st15" d="M693.8,329.7c-0.7,0.1-1.1,0.6-1,1.1c0.1,0.5,0.7,0.7,1.4,0.6c0.6-0.1,1.1-0.6,1-1.1
										C695.1,329.8,694.5,329.6,693.8,329.7z" />
											<path class="st15" d="M699.3,328.7c-0.7,0.1-1.1,0.6-1.1,1c0.1,0.5,0.7,0.7,1.3,0.7c0.7-0.1,1.1-0.5,1.1-1
										C700.6,328.9,700,328.6,699.3,328.7z" />
											<path class="st15" d="M704.9,328.2c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C706.2,328.5,705.6,328.1,704.9,328.2z" />
											<path class="st15" d="M710.6,328.1c-0.7,0-1.2,0.3-1.2,0.8c0,0.5,0.5,0.8,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C711.8,328.6,711.2,328.2,710.6,328.1z" />
										</g>
										<g>
											<path class="st16 line" d="M628.3,329.4c1.3,0.3,2.5,0.7,3.7,1c1.2,0.3,2.3,0.7,3.3,1c3.9,1.3,6.6,2.3,6.7,2.3
										c-0.1-0.1-0.7-0.4-1.7-0.9c-1.1-0.6-2.7-1.4-4.7-2.2c-1-0.4-2.1-0.8-3.2-1.3c-1.2-0.4-2.4-0.8-3.7-1.2
										c-1.3-0.4-2.6-0.8-4-1.1c-1.4-0.3-2.8-0.6-4.2-0.9c-1.4-0.2-2.9-0.4-4.3-0.5c-0.7-0.1-1.4-0.1-2.1-0.1
										c-0.7,0-1.4-0.1-2.1-0.1c-0.7,0-1.3,0-2,0c-0.3,0-0.6,0-1,0c-0.3,0-0.6,0.1-0.9,0.1c-0.6,0-1.2,0.1-1.8,0.2
										c-0.6,0.1-1.1,0.1-1.7,0.3c-0.5,0.1-1,0.2-1.5,0.3c-0.1,0-0.1,0-0.2,0c0.1,0.2,0.2,0.5,0.2,0.7c0,0,0,0,0.1,0
										c0.5,0,1-0.1,1.5-0.2c0.5-0.1,1.1-0.1,1.6-0.1c0.6,0,1.2-0.1,1.8-0.1c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,1,0
										c0.3,0,0.6,0,1,0c1.3,0,2.7,0.2,4.1,0.3c1.4,0.1,2.8,0.3,4.2,0.6c1.4,0.2,2.8,0.5,4.1,0.8
										C625.7,328.8,627,329.1,628.3,329.4z" />
											<path class="st16 line" d="M713.1,326.3c-0.5-0.1-1-0.2-1.5-0.3c-0.5-0.1-1.1-0.2-1.7-0.3c-0.6-0.1-1.2-0.1-1.8-0.2
										c-0.3,0-0.6-0.1-0.9-0.1c-0.3,0-0.6,0-1,0c-0.7,0-1.3,0-2,0c-0.7,0-1.4,0-2.1,0.1c-0.7,0-1.4,0.1-2.1,0.1
										c-1.4,0.1-2.8,0.3-4.3,0.5c-1.4,0.3-2.8,0.5-4.2,0.9c-1.4,0.3-2.7,0.7-4,1.1c-1.3,0.4-2.5,0.8-3.7,1.2
										c-1.2,0.4-2.3,0.8-3.2,1.3c-2,0.8-3.6,1.6-4.7,2.2c-0.6,0.3-1,0.6-1.3,0.7c-0.2-0.6-0.5-1.1-0.9-1.6
										c0.2-1.2,0.3-2.2,0.2-3.1c0-1.2-0.2-2.4-0.6-3.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.2-0.4-0.3-0.5
										c-0.3-0.5-0.6-1-0.9-1.3c-0.7-0.8-1.5-1.5-2.4-2c-0.8-0.5-1.7-0.9-2.7-1.2c-0.2-0.1-0.5-0.1-0.7-0.2l-0.1,0
										c-0.2-0.1-0.4-0.1-0.7-0.2c-0.3-0.1-0.6-0.1-1-0.2l-0.4-0.1c-0.9-0.2-1.8-0.3-2.7-0.7c-0.4-0.2-0.8-0.4-1.2-0.7
										c-0.3-0.2-0.6-0.5-1-1l-0.2-0.2l-0.7,0l-0.2,0.2c-0.3,0.4-0.6,0.7-1,1c-0.4,0.3-0.8,0.5-1.2,0.7c-0.8,0.3-1.6,0.5-2.7,0.7
										c-0.1,0-0.3,0.1-0.4,0.1c-0.3,0.1-0.6,0.1-1,0.2c-0.5,0.1-1,0.2-1.4,0.4c-1,0.3-1.9,0.7-2.7,1.2c-0.9,0.5-1.7,1.2-2.4,2
										c-0.4,0.5-0.7,0.9-1,1.3c-0.3,0.5-0.5,1-0.7,1.5c-0.4,1-0.6,2.2-0.6,3.4c0,0.9,0.1,1.9,0.2,3.1c-0.6,0.8-1.1,1.8-1.3,2.9
										c-0.2,0.7-0.2,1.4-0.2,2c0,0.7,0.1,1.3,0.3,2c0.3,1,0.7,2,1.4,3c0,0,0,0,0,0c-0.2,0.2-0.4,0.5-0.7,0.8
										c-0.2,0.2-0.3,0.4-0.5,0.6c-0.2,0.2-0.4,0.4-0.7,0.6c-0.2,0.2-0.5,0.4-0.8,0.7c-0.3,0.2-0.6,0.5-0.9,0.7
										c-0.3,0.2-0.7,0.5-1,0.7c-0.4,0.2-0.7,0.5-1.1,0.7c-0.2,0.1-0.4,0.3-0.6,0.4c-0.2,0.1-0.4,0.2-0.6,0.3
										c-0.4,0.2-0.8,0.5-1.3,0.7c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.5,0.2-0.7,0.3c-0.2,0.1-0.5,0.2-0.7,0.3
										c-0.5,0.2-1,0.4-1.5,0.6c-0.5,0.2-1,0.3-1.5,0.5c-0.5,0.2-1,0.3-1.5,0.5c-0.4,0.1-0.8,0.2-1.2,0.3c0.7,0.3,1.4,0.7,2.1,1
										c0.4-0.1,0.7-0.2,1.1-0.3c0.5-0.2,1-0.3,1.6-0.5c0.5-0.2,1-0.4,1.5-0.6c0.2-0.1,0.5-0.2,0.7-0.3c0.2-0.1,0.5-0.3,0.7-0.4
										c0.5-0.2,0.9-0.5,1.4-0.7c0.4-0.3,0.9-0.5,1.3-0.8c0.2-0.1,0.4-0.3,0.6-0.4c0.2-0.1,0.4-0.3,0.6-0.4
										c0.4-0.3,0.7-0.6,1.1-0.8c0.3-0.3,0.6-0.6,1-0.9c0.3-0.3,0.6-0.6,0.8-0.8c0.3-0.3,0.5-0.5,0.7-0.8c0.2-0.3,0.4-0.5,0.6-0.7
										c0.2-0.2,0.3-0.5,0.4-0.7c0.3-0.4,0.4-0.7,0.5-1c0.1,0.1,0.2,0.2,0.2,0.4c0.7,0.9,1.5,1.8,2.5,2.6c0.8,0.6,1.7,1.3,2.7,2
										c0.4,0.2,0.7,0.5,1.1,0.7c0.6,0.4,1.1,0.8,1.7,1.2c0.8,0.6,1.7,1.3,2.6,2c0.9,0.8,1.6,1.6,2.3,2.5c0.7,0.9,1.2,1.9,1.6,3
										l0.6,1.2l0.6-1.2c0.4-1.1,1-2.1,1.7-3c0.6-0.8,1.4-1.6,2.3-2.5c0.9-0.8,1.8-1.4,2.6-2c0.5-0.4,1-0.7,1.6-1.1
										c0.4-0.3,0.8-0.5,1.2-0.8c1.1-0.7,1.9-1.4,2.7-2c1-0.8,1.8-1.7,2.5-2.6c0,0,0.1-0.1,0.1-0.1c0.1,0.2,0.2,0.4,0.4,0.7
										c0.1,0.2,0.3,0.4,0.4,0.7c0.2,0.2,0.4,0.5,0.6,0.7c0.2,0.3,0.5,0.5,0.7,0.8c0.3,0.3,0.5,0.6,0.8,0.8c0.3,0.3,0.6,0.6,1,0.9
										c0.3,0.3,0.7,0.6,1.1,0.8c0.2,0.1,0.4,0.3,0.6,0.4c0.2,0.1,0.4,0.3,0.6,0.4c0.4,0.3,0.8,0.5,1.3,0.8
										c0.5,0.2,0.9,0.5,1.4,0.7c0.2,0.1,0.5,0.2,0.7,0.4c0.2,0.1,0.5,0.2,0.7,0.3c0.5,0.2,1,0.4,1.5,0.6c0.5,0.2,1,0.4,1.6,0.5
										c0.3,0.1,0.7,0.2,1,0.3c0.7-0.3,1.4-0.6,2-1c-0.3-0.1-0.7-0.2-1-0.3c-0.5-0.2-1-0.3-1.5-0.5c-0.5-0.2-1-0.3-1.5-0.5
										c-0.5-0.2-1-0.4-1.5-0.6c-0.2-0.1-0.5-0.2-0.7-0.3c-0.2-0.1-0.5-0.2-0.7-0.3c-0.5-0.2-0.9-0.4-1.4-0.6
										c-0.4-0.2-0.9-0.5-1.3-0.7c-0.2-0.1-0.4-0.2-0.6-0.3c-0.2-0.1-0.4-0.2-0.6-0.4c-0.4-0.2-0.8-0.5-1.1-0.7
										c-0.3-0.3-0.7-0.5-1-0.7c-0.3-0.2-0.6-0.5-0.9-0.7c-0.3-0.2-0.6-0.4-0.8-0.7c-0.2-0.2-0.5-0.4-0.7-0.6
										c-0.2-0.2-0.4-0.4-0.5-0.6c-0.2-0.3-0.4-0.5-0.6-0.7c0.7-1,1.2-2.1,1.5-3.2c0.2-0.7,0.3-1.3,0.3-2c0-0.2,0-0.6,0-1
										c0-0.3-0.1-0.6-0.2-1c-0.1-0.4-0.2-0.8-0.4-1.2c0.9-0.3,3.2-1.2,6.3-2.2c1-0.3,2.1-0.6,3.3-1c1.2-0.3,2.4-0.7,3.7-1
										c1.3-0.3,2.6-0.6,4-0.9c1.4-0.3,2.7-0.6,4.1-0.8c1.4-0.2,2.8-0.4,4.2-0.6c1.4-0.1,2.7-0.3,4.1-0.3c0.3,0,0.7,0,1,0
										c0.3,0,0.6,0,1,0c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,0.9,0c0.6,0,1.2,0,1.8,0.1c0.6,0,1.1,0,1.6,0.1c0.5,0.1,1,0.1,1.5,0.2
										c0,0,0.1,0,0.1,0c0.1-0.2,0.2-0.5,0.2-0.7C713.3,326.4,713.2,326.3,713.1,326.3z M674.1,338.5c-0.3,1-0.8,2.1-1.5,3.1
										c-0.6,0.9-1.4,1.7-2.3,2.4c-0.7,0.6-1.6,1.2-2.7,2c-0.4,0.2-0.7,0.5-1.1,0.7c-0.6,0.4-1.1,0.8-1.7,1.1
										c-0.9,0.6-1.8,1.3-2.7,2.1c-1,0.9-1.7,1.7-2.4,2.6c-0.1,0.1-0.2,0.3-0.3,0.5c0,0.1-0.1,0.1-0.1,0.2
										c-0.1,0.2-0.3,0.4-0.4,0.7c-0.1,0.3-0.3,0.5-0.4,0.8c0,0,0,0,0,0c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0.1-0.3c0-0.1,0-0.3,0-0.4
										c0,0,0-0.1,0-0.1c0-0.5,0-1,0.1-1.5c0-0.6,0-1.3,0.1-1.9c0,0,0,0,0,0c0.4,0,0.7,0,0.9,0c0.4,0,0.8-0.1,1.1-0.2
										c0.7-0.1,1.1-0.3,1.1-0.3l0.3-0.1l-0.3-0.1c0,0-0.5-0.2-1.1-0.3c-0.3-0.1-0.7-0.1-1.1-0.1c-0.3,0-0.6,0-0.9-0.1
										c0,0,0,0,0,0c0,0,0,0,0,0c0.5,0,1-0.1,1.4-0.2c0.5-0.1,0.8-0.3,0.8-0.3l0.2-0.1l-0.2-0.1c0,0-0.3-0.2-0.8-0.3
										c-0.4-0.1-0.8-0.2-1.3-0.2c0.3,0,0.6-0.1,0.8-0.2c0.3-0.1,0.6-0.3,0.6-0.3l0.1-0.1l-0.1-0.1c0,0-0.2-0.2-0.6-0.3
										c-0.2-0.1-0.5-0.2-0.8-0.2l0-2.6c0-1,0-2.1,0-3.2c0-0.5,0-1,0-1.5c0.1,0.3,0.2,0.6,0.3,1c0.2,0.6,0.4,1.3,0.7,2
										c0.4,0.8,0.8,1.5,1.3,2c0.6,0.6,1.3,1,2.1,1.2c0.9,0.2,1.8,0.1,2.5-0.4c0.8-0.5,1.3-1.5,1.3-2.6c0.1-1-0.3-1.9-1-2.6
										c-0.6-0.6-1.2-0.9-1.9-0.9c-0.1,0-0.2,0-0.3,0c-0.4,0.1-0.8,0.2-1,0.5c-0.3,0.3-0.5,0.7-0.6,1c-0.1,0.4-0.1,0.8-0.1,1.1
										c0,0.1,0,0.2,0.1,0.2c0,0.1,0,0.1,0.1,0.2l0,0.1c0.1,0.2,0.2,0.3,0.3,0.4c0.2,0.2,0.5,0.3,0.7,0.4c0.2,0,0.4,0,0.6-0.2
										c0.4-0.2,0.5-0.5,0.6-0.7c0.1-0.2,0.1-0.3,0.1-0.3l0.1-1l-0.4,1c0,0,0,0.1-0.1,0.2c0,0.1-0.2,0.3-0.5,0.4
										c-0.3,0.1-0.6,0-0.8-0.2c-0.2-0.3-0.3-0.8-0.1-1.3c0.2-0.5,0.6-0.9,1-0.9c0,0,0.1,0,0.1,0c0.4,0,0.9,0.3,1.4,0.7
										c0.2,0.2,0.4,0.5,0.5,0.8c0,0.1,0,0.1,0,0.1l0,0.1c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0,0.3,0,0.5c0,0.3-0.1,0.7-0.2,1
										c0,0.1-0.1,0.1-0.1,0.2l-0.1,0.2l-0.2,0.2c0,0-0.1,0-0.1,0.1c0,0-0.1,0-0.1,0.1c-0.4,0.3-1.1,0.4-1.7,0.3
										c-0.6-0.1-1.2-0.4-1.7-0.9c-0.4-0.4-0.8-1-1.2-1.6c-0.3-0.6-0.6-1.3-0.8-1.8c-0.4-1.1-0.7-2.1-0.9-2.7c0-0.3,0-0.6,0-0.9
										c0-0.3,0-0.6,0-0.8l0.1-0.1c0.4-0.4,0.8-0.9,1.3-1.6c0.3-0.4,0.5-0.9,0.7-1.3c0.2-0.6,0.4-1.1,0.4-1.7
										c0.1-0.6,0-1.3-0.1-1.9c-0.1-0.6-0.3-1.1-0.5-1.6l-0.1-0.2c-0.2-0.5-0.4-1-0.5-1.6c-0.1-0.3-0.1-0.5-0.1-0.7
										c0,0,0-0.1,0-0.2c0-0.1,0-0.2,0-0.2c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.2c0-0.5,0.1-0.9,0.3-1.3c0.2-0.4,0.4-0.7,0.6-1
										c0.2-0.3,0.5-0.5,0.7-0.7c0.2-0.1,0.5-0.3,0.7-0.3c0.1,0,0.2-0.1,0.3-0.1c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.2,0l1-0.2
										l-1.1-0.1c0,0-0.1,0-0.2,0c-0.1,0-0.3,0-0.5,0c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.7,0.3-1,0.6c-0.4,0.3-0.7,0.7-0.9,1.2
										c-0.3,0.5-0.5,1.1-0.5,1.7c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3c0,0.1,0,0.1,0,0.2c0,0.4,0.1,0.7,0.1,1
										c0.1,0.6,0.4,1.2,0.5,1.7l0.1,0.2c0.2,0.5,0.4,1,0.5,1.4c0.1,0.5,0.2,1,0.1,1.5c0,0.5-0.1,0.9-0.3,1.4
										c-0.1,0.4-0.3,0.8-0.5,1.2c-0.3,0.6-0.6,1.1-0.8,1.5c0-0.1,0-0.2,0-0.3c0-0.2,0-0.5,0-0.7c0-0.7,0-1.5,0-2.2
										c0-0.4,0-0.8,0-1.2c0-2.2-0.1-4.2-0.1-6c0-1.2-0.1-2.2-0.1-3c0-0.4,0-0.8,0-1.2c0-1-0.1-1.6-0.1-1.6l-0.2,0
										c0,0,0,0.6-0.1,1.6c0,0.4,0,0.8,0,1.3c0,0.8-0.1,1.8-0.1,3c-0.1,1.9-0.1,4-0.1,6c0,0.4,0,0.8,0,1.2c0,0.7,0,1.4,0,2.2
										c0,0.3,0,0.7,0,1c-0.2-0.4-0.5-0.9-0.8-1.5c-0.2-0.4-0.4-0.8-0.5-1.2c-0.2-0.5-0.3-1-0.3-1.4c0-0.5,0-1,0.1-1.5
										c0.1-0.5,0.3-0.9,0.5-1.4l0.1-0.2c0.2-0.5,0.4-1.1,0.6-1.7c0.1-0.3,0.1-0.6,0.1-1c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3
										c0-0.2,0-0.3,0-0.5c-0.1-0.6-0.2-1.2-0.5-1.7c-0.2-0.4-0.5-0.8-0.9-1.2c-0.3-0.3-0.7-0.5-1-0.6c-0.3-0.1-0.5-0.2-0.8-0.2
										c-0.2,0-0.4,0-0.5,0c-0.1,0-0.2,0-0.2,0l-1.1,0.1l1,0.2c0,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0.1,0.3,0.1
										c0.2,0.1,0.4,0.2,0.7,0.3c0.2,0.2,0.5,0.4,0.7,0.7c0.3,0.3,0.5,0.7,0.6,1c0.2,0.4,0.3,0.9,0.3,1.3c0,0.1,0,0.1,0,0.2
										c0,0,0,0.1,0,0.1c0,0.1,0,0.2,0,0.2c0,0.1,0,0.1,0,0.2c0,0.2-0.1,0.5-0.1,0.7c-0.1,0.5-0.3,1.1-0.5,1.6l-0.1,0.2
										c-0.2,0.5-0.4,1-0.5,1.6c-0.1,0.6-0.2,1.3-0.1,1.9c0.1,0.7,0.3,1.3,0.4,1.7c0.2,0.4,0.4,0.9,0.7,1.3
										c0.5,0.7,0.9,1.2,1.3,1.6c0,0,0.1,0.1,0.1,0.1c0,0.6,0,1.2,0,1.8c-0.3,0.9-0.6,1.8-0.9,2.7c-0.2,0.6-0.5,1.2-0.8,1.8
										c-0.3,0.7-0.7,1.2-1.2,1.6c-0.4,0.4-1,0.7-1.7,0.9c-0.6,0.1-1.3,0-1.7-0.3c0,0,0,0-0.1-0.1c0,0-0.1,0-0.1-0.1l-0.2-0.3
										l0-0.1c0-0.1-0.1-0.1-0.1-0.2l0,0c-0.1-0.3-0.2-0.6-0.2-1c0-0.2,0-0.4,0-0.5c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
										c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0.1-0.3,0.3-0.6,0.5-0.8c0.5-0.5,1-0.7,1.4-0.7c0.4,0,0.8,0.4,1,0.9
										c0.2,0.5,0.1,1-0.1,1.3c-0.2,0.2-0.4,0.3-0.5,0.3c-0.1,0-0.2,0-0.3-0.1c-0.3-0.1-0.5-0.4-0.5-0.4c-0.1-0.1-0.1-0.2-0.1-0.2
										l-0.4-1l0.1,1.1c0,0,0,0.1,0.1,0.3c0.1,0.2,0.3,0.5,0.6,0.7c0.2,0.1,0.4,0.2,0.6,0.2c0.3,0,0.5-0.1,0.7-0.4
										c0.1-0.1,0.2-0.2,0.3-0.4c0-0.1,0.1-0.2,0.1-0.2l0,0c0-0.1,0-0.2,0.1-0.2c0.1-0.3,0-0.7-0.1-1.1c-0.1-0.3-0.2-0.7-0.6-1
										c-0.3-0.3-0.6-0.5-1-0.5c-0.7-0.1-1.5,0.2-2.1,0.8c-0.7,0.7-1.1,1.7-1,2.6c0,1.1,0.5,2.1,1.3,2.6c0.7,0.5,1.5,0.6,2.5,0.4
										c0.8-0.2,1.5-0.6,2.1-1.2c0.5-0.5,0.9-1.2,1.3-2c0.3-0.7,0.5-1.4,0.7-2c0.1-0.3,0.2-0.6,0.3-1c0,0.1,0,0.1,0,0.2
										c0,0.4,0,0.9,0,1.3c0,0.6,0,1.2,0,1.8l0,1.6c0,0.8,0,1.6,0,2.4c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.6,0.3-0.6,0.3l-0.1,0.1
										l0.1,0.1c0,0,0.2,0.2,0.6,0.3c0.2,0.1,0.5,0.2,0.8,0.2c-0.5,0-1,0.1-1.3,0.2c-0.5,0.1-0.8,0.3-0.8,0.3l-0.2,0.1l0.2,0.1
										c0,0,0.3,0.2,0.8,0.3c0.4,0.1,0.9,0.2,1.4,0.2c0,0,0,0.1,0,0.1c-0.3,0-0.6,0-0.9,0.1c-0.4,0-0.8,0.1-1.1,0.1
										c-0.7,0.1-1.1,0.3-1.1,0.3l-0.3,0.1l0.3,0.1c0,0,0.5,0.2,1.1,0.3c0.3,0.1,0.7,0.1,1.1,0.1c0.3,0,0.6,0,0.9,0.1c0,0,0,0,0,0
										c0,1,0.1,2.1,0.1,3.2l0,0.6c0,0.1,0,0.2,0,0.3c0,0.1,0,0.3,0,0.4c-0.4-0.8-0.8-1.6-1.3-2.2c-0.7-0.9-1.5-1.8-2.4-2.6
										c-0.9-0.8-1.8-1.5-2.7-2.1c-0.5-0.4-1-0.7-1.6-1.1c-0.4-0.3-0.8-0.5-1.2-0.8c-1.1-0.7-1.9-1.3-2.6-2
										c-0.9-0.7-1.7-1.5-2.3-2.4c-0.7-1-1.2-2-1.5-3.1c-0.2-0.6-0.2-1.1-0.3-1.7c0-0.6,0-1.2,0.2-1.7c0.3-1.1,0.8-2.2,1.5-3
										c0.7-0.8,1.6-1.3,2.6-1.5c1-0.2,2.1-0.1,2.9,0.3c0.4,0.2,0.8,0.5,1.3,0.9c0.3,0.4,0.6,0.8,0.9,1.4c0.4,1.1,0.4,2.3,0,3.4
										c-0.4,1.1-1.2,1.9-2.2,2.2c-0.3,0.1-0.7,0.2-1,0.2c-0.5,0-1.2-0.1-1.8-0.7c-0.4-0.4-0.6-0.9-0.6-1.5c0-0.6,0.2-1.2,0.5-1.6
										l-0.2-0.2c-0.4,0.5-0.6,1.1-0.6,1.8c0,0.7,0.3,1.3,0.7,1.8c0.5,0.6,1.3,0.9,2.1,0.9c0.4,0,0.7-0.1,1-0.2
										c0.6-0.2,1.1-0.5,1.5-0.9c0.3-0.2,0.5-0.6,0.7-0.9l0.1-0.1c0.3-0.3,0.5-0.8,0.8-1.3c0.2-0.5,0.5-1.1,0.8-1.8
										c0.3-0.7,0.6-1.5,0.8-2.2c0.2-0.9,0.5-1.7,0.6-2.6c0.2-1.2,0.2-2.1,0-3c-0.1-0.6-0.2-1.1-0.4-1.5c-0.2-0.5-0.5-1-0.9-1.3
										c-0.7-0.8-1.8-1.1-2.7-0.9c-0.5,0.1-1,0.4-1.3,0.7c-0.4,0.3-0.7,0.7-0.9,1.2c-0.2,0.5-0.3,1-0.3,1.6c0,0.5,0.1,1,0.4,1.5
										c0.5,1,1.3,1.4,2.1,1.2c0.6-0.2,1.1-0.8,1.4-1.6c0.1-0.3,0.1-0.7,0-1c-0.1-0.2-0.1-0.3-0.2-0.4c-0.1-0.1-0.1-0.2-0.2-0.2
										l0,0c-0.3-0.2-0.6-0.3-0.9-0.2c-0.2,0-0.3,0.1-0.3,0.1l-0.8,0.6l0.9-0.4c0,0,0.1,0,0.2,0c0,0,0,0,0.1,0
										c0.1,0,0.4,0,0.6,0.3l0,0c0,0.1,0.1,0.1,0.1,0.2c0.1,0.1,0.1,0.2,0.1,0.3c0,0.2,0,0.4-0.1,0.7c-0.2,0.4-0.6,0.9-1,1
										c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0l0,0c0,0-0.1,0-0.1-0.1
										c-0.2-0.2-0.4-0.4-0.6-0.7c-0.1-0.3-0.2-0.7-0.2-1c0-0.4,0.1-0.7,0.3-1c0.2-0.3,0.4-0.6,0.6-0.8c0.3-0.2,0.6-0.4,0.9-0.5
										c0.6-0.1,1.3,0.1,1.8,0.6c0.5,0.5,0.9,1.3,1,2.2c0.1,0.8,0.1,1.7,0,2.6c-0.1,0.9-0.3,1.8-0.5,2.5c-0.2,0.9-0.4,1.6-0.6,2.2
										c-0.1,0.3-0.2,0.6-0.3,0.9c0,0,0,0,0-0.1c0-0.4,0-0.7-0.1-1c0-0.1,0-0.2-0.1-0.3c0,0,0-0.1,0-0.2c0-0.1,0-0.1,0-0.1
										c0-0.1,0-0.2-0.1-0.3c-0.4-1.2-1.3-2.2-2.4-2.7c-1-0.5-2.1-0.6-3.3-0.5c-1.1,0.2-2.2,0.7-3,1.6c-0.1,0.1-0.1,0.1-0.2,0.2
										c-0.1-1-0.1-1.9,0-2.7c0.1-1.1,0.3-2.2,0.7-3.1c0.2-0.5,0.5-1,0.7-1.4c0.3-0.5,0.6-0.9,0.9-1.2c0.4-0.4,0.7-0.7,1.1-1
										c0.4-0.3,0.8-0.6,1.2-0.8c0.7-0.4,1.6-0.7,2.6-1c0.5-0.1,0.9-0.2,1.3-0.3c0.3-0.1,0.6-0.1,0.9-0.1c0.2,0,0.3-0.1,0.5-0.1
										c0.9-0.1,1.9-0.3,2.9-0.7c0.5-0.2,0.9-0.5,1.4-0.8c0.3-0.2,0.6-0.5,0.9-0.9c0.3,0.4,0.6,0.7,0.9,0.9
										c0.4,0.3,0.9,0.6,1.4,0.8c1,0.4,1.9,0.6,2.9,0.7l0.2,0c0.4,0.1,0.8,0.1,1.1,0.2c0.2,0,0.5,0.1,0.7,0.1
										c0.2,0.1,0.4,0.1,0.7,0.2c1,0.3,1.9,0.6,2.6,1c0.4,0.2,0.8,0.4,1.2,0.8c0.3,0.3,0.7,0.6,1.1,1c0.3,0.3,0.6,0.7,0.9,1.2
										c0.1,0.2,0.2,0.3,0.3,0.5l0.1,0.2c0.1,0.2,0.2,0.5,0.3,0.7c0.4,0.9,0.7,2,0.7,3.1c0.1,0.8,0,1.6,0,2.7
										c-0.1-0.1-0.1-0.1-0.2-0.2l0,0c-0.2-0.2-0.4-0.4-0.7-0.6l-0.3-0.2l-0.4-0.2c-0.2-0.1-0.4-0.2-0.5-0.2
										c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2-0.1-0.3-0.1c-0.2,0-0.4-0.1-0.5-0.1c-0.3,0-0.6-0.1-0.9-0.1c-0.8,0-1.6,0.2-2.3,0.5
										c-0.5,0.2-1,0.6-1.4,1.1l-0.1,0.1c-0.2,0.2-0.4,0.4-0.5,0.7c-0.1,0.2-0.3,0.5-0.4,0.7l-0.1,0.2c-0.2,0.6-0.3,1.3-0.3,2
										c-0.1-0.3-0.2-0.6-0.3-0.9c-0.2-0.6-0.4-1.4-0.6-2.2c-0.2-0.7-0.4-1.6-0.5-2.5c-0.1-0.9-0.1-1.8,0-2.6
										c0.1-0.9,0.5-1.6,1-2.2c0.5-0.5,1.2-0.8,1.8-0.6c0.3,0.1,0.6,0.2,0.9,0.5c0.3,0.2,0.5,0.5,0.6,0.8c0.2,0.3,0.3,0.7,0.3,1
										c0,0.3-0.1,0.7-0.2,1c-0.1,0.3-0.3,0.6-0.5,0.7c0,0,0,0-0.1,0l-0.1,0l0,0c-0.1,0-0.1,0.1-0.2,0.1c0,0,0,0-0.1,0
										c0,0,0,0,0,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-0.5-0.1-0.9-0.6-1.1-1c-0.1-0.2-0.1-0.4-0.1-0.7c0-0.1,0.1-0.2,0.1-0.3
										c0-0.1,0.1-0.1,0.1-0.2l0,0c0.2-0.2,0.4-0.3,0.6-0.3c0,0,0,0,0,0c0.1,0,0.2,0,0.2,0l0.9,0.4l-0.8-0.6
										c-0.1,0-0.1-0.1-0.3-0.1c-0.3-0.1-0.7,0-0.9,0.2l0,0c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.1,0.2-0.2,0.4
										c-0.1,0.3-0.1,0.7,0,1c0.2,0.8,0.7,1.3,1.4,1.6c0.8,0.3,1.6-0.2,2.1-1.2c0.2-0.4,0.4-1,0.4-1.5c0-0.5-0.1-1-0.3-1.6
										c-0.2-0.5-0.5-0.9-0.9-1.2c-0.4-0.4-0.9-0.6-1.3-0.7c-0.2,0-0.4-0.1-0.6-0.1c-0.8,0-1.6,0.4-2.1,1
										c-0.4,0.4-0.7,0.8-0.9,1.3c-0.2,0.5-0.4,1-0.4,1.5c-0.1,0.9-0.1,1.8,0.1,3c0.1,0.9,0.4,1.8,0.6,2.6
										c0.2,0.8,0.5,1.5,0.8,2.2c0.3,0.7,0.6,1.3,0.8,1.8c0.3,0.5,0.5,1,0.8,1.3c0,0,0,0,0,0.1c0.2,0.4,0.4,0.7,0.7,0.9
										c0.4,0.4,0.9,0.7,1.5,0.9c0.3,0.1,0.7,0.2,1,0.2c0.8,0,1.6-0.3,2.1-0.9c0.4-0.5,0.7-1.1,0.7-1.8c0-0.7-0.2-1.3-0.6-1.8
										l-0.2,0.2c0.4,0.4,0.5,1,0.5,1.6c0,0.6-0.3,1.2-0.6,1.5c-0.6,0.6-1.3,0.7-1.8,0.7c-0.3,0-0.7-0.1-1-0.2
										c-0.5-0.2-0.9-0.4-1.3-0.8c-0.4-0.4-0.7-0.9-0.9-1.4c-0.4-1.1-0.4-2.4,0-3.4c0-0.1,0.1-0.1,0.1-0.2
										c0.1-0.2,0.2-0.4,0.3-0.5c0.1-0.2,0.3-0.4,0.4-0.6l0.1-0.1c0.4-0.4,0.8-0.7,1.2-0.9c0.9-0.4,1.9-0.5,2.9-0.3
										c0.2,0,0.3,0.1,0.5,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.1,0.1,0.2,0.1c0.2,0.1,0.3,0.1,0.4,0.2l0.3,0.2l0.3,0.2
										c0.2,0.1,0.4,0.4,0.6,0.5c0.7,0.8,1.2,1.8,1.5,3c0.1,0.3,0.1,0.6,0.1,0.9c0,0.3,0,0.6,0,0.9
										C674.4,337.4,674.3,338,674.1,338.5z" />
											<path class="st16" d="M641.7,341.7c0.3-0.4,0.3-1-0.1-1.3c-0.4-0.2-0.9-0.1-1.2,0.2c-0.3,0.4-0.3,0.9,0.1,1.2
										C640.8,342.2,641.3,342.2,641.7,341.7z" />
											<path class="st16" d="M637.5,343.5c-0.4,0.3-0.5,0.8-0.2,1.2s0.8,0.4,1.3,0.1c0.4-0.3,0.5-0.9,0.2-1.2
										C638.4,343.2,637.9,343.2,637.5,343.5z" />
											<path class="st16" d="M634.9,347.2c0.5-0.2,0.6-0.8,0.4-1.2c-0.2-0.4-0.8-0.5-1.2-0.3c-0.4,0.2-0.6,0.8-0.4,1.2
										C633.9,347.3,634.4,347.4,634.9,347.2z" />
											<path class="st16" d="M631,349c0.5-0.2,0.7-0.7,0.5-1.1c-0.2-0.4-0.7-0.6-1.1-0.4c-0.5,0.2-0.7,0.7-0.6,1.1
										C630,348.9,630.5,349.2,631,349z" />
											<path class="st16" d="M626.9,350.3c0.5-0.1,0.8-0.6,0.7-1.1c-0.1-0.4-0.6-0.7-1.1-0.6c-0.5,0.1-0.8,0.6-0.7,1.1
										C625.9,350.2,626.4,350.4,626.9,350.3z" />
											<path class="st16" d="M640.3,335.6c0.2-0.4-0.1-1-0.8-1.3c-0.6-0.3-1.3-0.1-1.4,0.3c-0.2,0.4,0.2,1,0.8,1.2
										C639.5,336.1,640.1,336,640.3,335.6z" />
											<path class="st16" d="M635.2,333.5c0.2-0.4-0.2-1-0.9-1.2c-0.6-0.2-1.3,0-1.4,0.4c-0.1,0.4,0.2,1,0.9,1.2
										C634.4,334.1,635,333.9,635.2,333.5z" />
											<path class="st16" d="M629,330.6c-0.6-0.2-1.3,0-1.4,0.5c-0.1,0.5,0.3,1,0.9,1.1c0.6,0.2,1.3,0,1.4-0.5
										C630.1,331.3,629.7,330.8,629,330.6z" />
											<path class="st16" d="M623.6,329.2c-0.7-0.1-1.3,0.1-1.4,0.6c-0.1,0.5,0.4,0.9,1,1.1c0.6,0.1,1.2-0.1,1.4-0.6
										C624.7,329.9,624.2,329.4,623.6,329.2z" />
											<path class="st16" d="M618.1,328.2c-0.7-0.1-1.3,0.2-1.3,0.7c-0.1,0.5,0.4,0.9,1.1,1c0.7,0.1,1.2-0.2,1.3-0.7
										C619.2,328.8,618.7,328.3,618.1,328.2z" />
											<path class="st16" d="M612.5,327.7c-0.7,0-1.2,0.3-1.3,0.8c0,0.5,0.5,0.9,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C613.7,328.1,613.1,327.7,612.5,327.7z" />
											<path class="st16" d="M606.8,327.6c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C608.1,328,607.5,327.6,606.8,327.6z" />
											<path class="st16" d="M675.9,340.5c-0.4,0.2-0.5,0.8-0.1,1.3c0.3,0.4,0.9,0.5,1.3,0.2c0.4-0.3,0.4-0.8,0.1-1.2
										C676.8,340.3,676.3,340.2,675.9,340.5z" />
											<path class="st16" d="M678.9,344.8c0.4,0.3,1,0.3,1.3-0.1s0.2-0.9-0.2-1.2c-0.4-0.3-0.9-0.3-1.2,0.1
										C678.4,343.9,678.4,344.5,678.9,344.8z" />
											<path class="st16" d="M683.3,345.7c-0.4-0.2-1-0.1-1.2,0.3c-0.2,0.4-0.1,0.9,0.4,1.2c0.5,0.2,1,0.1,1.2-0.3
										C683.9,346.4,683.7,345.9,683.3,345.7z" />
											<path class="st16" d="M687,347.4c-0.5-0.2-1,0-1.1,0.4c-0.2,0.4,0.1,1,0.5,1.1c0.5,0.2,1,0,1.2-0.5
										C687.7,348.1,687.5,347.6,687,347.4z" />
											<path class="st16" d="M690.9,348.6c-0.5-0.1-1,0.1-1.1,0.6c-0.1,0.4,0.2,0.9,0.7,1.1c0.5,0.1,1-0.1,1.1-0.6
										C691.7,349.2,691.4,348.8,690.9,348.6z" />
											<path class="st16" d="M678.5,335.9c0.6-0.3,1-0.8,0.8-1.2c-0.2-0.4-0.8-0.6-1.4-0.3c-0.6,0.3-1,0.8-0.8,1.3
										C677.3,336,677.9,336.1,678.5,335.9z" />
											<path class="st16" d="M684.5,332.7c-0.1-0.4-0.8-0.6-1.4-0.4c-0.6,0.2-1,0.8-0.9,1.2c0.2,0.4,0.8,0.6,1.4,0.4
										C684.2,333.7,684.6,333.1,684.5,332.7z" />
											<path class="st16" d="M688.9,332.2c0.6-0.2,1.1-0.7,0.9-1.1c-0.1-0.4-0.7-0.7-1.4-0.5c-0.6,0.2-1.1,0.7-0.9,1.2
										C687.6,332.2,688.2,332.4,688.9,332.2z" />
											<path class="st16" d="M693.8,329.2c-0.7,0.1-1.1,0.6-1,1.1c0.1,0.5,0.7,0.7,1.4,0.6c0.6-0.1,1.1-0.6,1-1.1
										C695.1,329.3,694.5,329.1,693.8,329.2z" />
											<path class="st16" d="M699.3,328.2c-0.7,0.1-1.1,0.6-1.1,1c0.1,0.5,0.7,0.7,1.3,0.7c0.7-0.1,1.1-0.5,1.1-1
										C700.6,328.4,700,328.1,699.3,328.2z" />
											<path class="st16" d="M704.9,327.7c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C706.2,328,705.6,327.6,704.9,327.7z" />
											<path class="st16" d="M710.6,327.6c-0.7,0-1.2,0.3-1.2,0.8c0,0.5,0.5,0.8,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C711.8,328.1,711.2,327.7,710.6,327.6z" />
										</g>
									</g>
									<path class="st17 line" d="M705.3,339.7c-3.7,4.1-8.4,7.7-13.7,10.6c-0.3,0.2-0.6,0.3-0.9,0.5c-0.2,0.1-0.5,0.2-0.7,0.4
								c-0.2,0.1-0.4,0.2-0.7,0.3c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.4,0.2-0.7,0.3c-8.5,3.8-18.5,6-29.1,6c-10.6,0-20.5-2.2-29-6
								c-0.2-0.1-0.4-0.2-0.7-0.3c-0.5-0.2-0.9-0.4-1.4-0.7c-0.2-0.1-0.5-0.2-0.7-0.3c-11-5.5-19.3-13.9-23.1-23.7
								c-0.1-0.2-0.1-0.3-0.2-0.5c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.1-0.3-0.2-0.5c-1.2-3.5-1.9-7.2-1.9-11c0-0.4,0.1-0.9,0.4-1.3
								c0.1-0.3,0.3-0.5,0.5-0.8c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c0.5-0.4,1.1-0.8,1.9-1.3
								c-0.1,0.2-0.1,0.4-0.1,0.6c0,3.8,0.6,7.5,1.9,11c0.1,0.2,0.1,0.3,0.2,0.5c0,0.1,0,0.1,0.1,0.2c0.1,0.2,0.1,0.3,0.2,0.5
								c3.8,9.8,12.1,18.1,23.1,23.7c0.2,0.1,0.5,0.2,0.7,0.3c0.5,0.2,0.9,0.4,1.4,0.7c0.2,0.1,0.4,0.2,0.7,0.3c8.5,3.8,18.4,6,29,6
								c10.6,0,20.6-2.2,29.1-6c0.2-0.1,0.4-0.2,0.7-0.3c0.5-0.2,0.9-0.4,1.4-0.6c0.2-0.1,0.5-0.2,0.7-0.3c0.2-0.1,0.5-0.2,0.7-0.4
								c0.3-0.2,0.6-0.3,0.9-0.5C698.6,345.1,702.2,342.6,705.3,339.7z" />
									<path class="st16" d="M715.1,315.4c0,2.3-3.5,4.6-5.1,5.2c-8.2,3.3-16.7,2.6-25.3,1.7c-8.2-0.8-17.3-2.7-23.8-8.4
								c-0.3-0.3-1.6-2-2-2h-1.1c-5.6,6.6-14.8,8.9-22.9,10c-3.2,0.4-6.5,0.7-9.8,0.8c-5.9,0.1-11.7,0.2-17.3-1.6
								c-2-0.6-6.6-2.8-6.6-5.7c0-0.3,0.1-0.6,0.2-0.9c0.1-0.3,0.3-0.5,0.5-0.7c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2
								c5.3-4.7,28.3-8.2,55.8-8.2c27.9,0,51.1,3.6,56,8.4c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.7
								C715,314.7,715.1,315,715.1,315.4z" />
									<path class="st16" d="M715.1,314.9c0,2.4-3.5,4.7-5.1,5.4c-8.2,3.4-16.7,2.6-25.3,1.8c-8.2-0.8-17.3-2.8-23.8-8.6
								c-0.3-0.3-1.6-2-2-2h-1.1c-5.6,6.7-14.8,9.1-22.9,10.3c-3.2,0.5-6.5,0.7-9.8,0.8c-5.9,0.1-11.7,0.2-17.3-1.7
								c-2-0.7-6.6-2.9-6.6-5.9c0-0.3,0.1-0.6,0.2-1c0.1-0.3,0.3-0.5,0.5-0.8c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2
								c5.3-4.8,28.3-8.5,55.8-8.5c27.9,0,51.1,3.7,56,8.7c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.3,0.4,0.5,0.5,0.8
								C715,314.2,715.1,314.5,715.1,314.9z" />
									<path class="st18 line" d="M715.1,315.1c0,2.3-3.5,4.6-5.1,5.2c-5,2-10.1,2.5-15.2,2.4c-3.3-0.1-6.7-0.4-10.1-0.7
								c-8.2-0.8-17.3-2.7-23.8-8.4c-0.3-0.3-1.6-2-2-2h-1.1c-5.6,6.6-14.8,8.9-22.9,10c-3.2,0.4-6.5,0.7-9.8,0.8
								c-5.9,0.1-11.7,0.2-17.3-1.6c-2-0.6-6.6-2.8-6.6-5.7c0-0.3,0.1-0.6,0.2-0.9c0.1-0.3,0.3-0.5,0.5-0.8c0.1-0.1,0.1-0.2,0.2-0.2
								c0.1-0.1,0.1-0.1,0.2-0.2c5.3-4.7,28.3-8.2,55.8-8.2c10.4,0,20.1,0.5,28.5,1.4c14.1,1.5,24.4,4,27.5,7
								c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.8C715,314.4,715.1,314.7,715.1,315.1z" />
									<path class="st5" d="M715.1,315.1c0,2.3-3.5,4.6-5.1,5.2c-5,2-10.1,2.5-15.2,2.4c-2-6.2-4.8-11.8-8.1-16.6
								c14.1,1.5,24.4,4,27.5,7c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.8C715,314.4,715.1,314.7,715.1,315.1z" />
									<path class="st8" d="M709,315.9c0,1.3-3.7,2.5-6.8,3.6c-29.6,3.8-42.9-8.6-42.9-8.6h-2c-10.3,11.8-44.9,8-45.5,7.9
								c0,0,0,0,0,0c-2.1-0.9-4.9-1.9-4.9-3c0-4.6,23.7-8.4,50.9-8.4C685.1,307.6,709,311.3,709,315.9z" />
									<path class="st19" d="M685,308.9c1.5,1,3.1,1.6,4.7,2.4c1.4,0.7,5.2,2.8,5.1,4.7c0,0.1,0,0.1,0,0.2c-0.4,1.9-5.3,2.9-6.8,3.4
								c-1.3,0.2-2.5,0.3-3.8,0.4c5.2,0.5,11.1,0.5,18-0.4c3.1-1.1,6.8-2.3,6.8-3.6C709,313,699.2,310.4,685,308.9z" />
									<path class="st15 line" d="M709,315.9c0,0.7-1.2,1.5-2.8,2.1c-6.7-3.1-24.7-5.4-45-5.7c-0.8-0.6-1.4-1-1.7-1.2
								c-0.1-0.1-0.3-0.2-0.5-0.2h-1.5c-0.2,0-0.4,0.1-0.5,0.2c-0.4,0.4-0.8,0.8-1.2,1.2c-20.8,0.1-39.3,2.5-46.2,5.6
								c-1.5-0.7-2.8-1.4-2.8-2.1c0-4.6,23.7-8.4,50.9-8.4C685.1,307.6,709,311.3,709,315.9z" />
									<rect x="657.6" y="300.6" class="st20" width="1.5" height="10.4" />
									<path class="st21"
										d="M666.8,301c-0.5,1-1.1,2-1.9,2.9c-0.7,0.8-1.5,1.6-2.5,2.2c-1.4,0.8-2.7,1-4.2,1.1c-0.2,0-0.4,0-0.6,0
								c-2.5-0.6-4.5-2.1-5.8-4c-1.3-1.9-1.8-4.1-1.8-6.2c0-1.3,0.2-2.5,0.6-3.8c1-3,3.4-5.4,5.3-8c1.8-2.5,3.1-5.4,2.3-8.2
								c0,0,0,0,0,0c-0.1-0.2-0.1-0.4-0.2-0.6c0.1,0.2,0.6,0.5,0.8,0.7c2,1.8,3.8,3.9,5.3,6.2C667.5,288.6,669.6,295.2,666.8,301z" />
									<path class="st22" d="M657.2,304.6c-0.8-0.3-1.5-0.6-2.2-1.2c-0.7-0.6-1.3-1.4-1.7-2.2c-0.8-1.5-1-3.1-0.9-4.7
								c0.1-0.9,0.3-1.8,0.7-2.7c1-2.1,2.9-3.7,4.5-5.4c1.6-1.8,2.9-4,2.2-6.2c0.1,0.2,0.4,0.4,0.5,0.6c1.3,1.5,2.5,3.2,3.4,4.9
								c2,4.1,3.1,9.1,0.6,13.1c-0.4,0.7-1,1.4-1.6,2c-0.5,0.5-1.1,0.9-1.8,1.3c-0.3,0.2-0.7,0.3-1,0.4c-0.2,0-0.7,0-0.8,0.1
								c0.5-0.4,1-0.9,1.3-1.5c-0.6,0.4-1.2,0.7-1.8,0.9c0.1-0.5,0.1-1,0.2-1.5c-0.3,0.5-0.6,1-0.9,1.5c-0.4-0.3-0.7-0.7-1.1-1
								c0.2,0.7,0.5,1.3,1,1.9C657.4,304.7,657.3,304.7,657.2,304.6z" />
									<path class="st18"
										d="M601.4,314.1c0.1-0.3,0.3-0.5,0.5-0.8C601.7,313.6,601.6,313.9,601.4,314.1z" />
									<path class="st18"
										d="M602.2,313.2c-0.1,0.1-0.1,0.1-0.2,0.2C602,313.3,602.1,313.2,602.2,313.2z" />
									<path class="st18"
										d="M714.9,314.1c-0.1-0.3-0.3-0.5-0.5-0.8C714.6,313.6,714.8,313.9,714.9,314.1z" />
									<path class="st5"
										d="M714.4,313.4c0.2,0.2,0.4,0.5,0.5,0.8C714.8,313.9,714.6,313.6,714.4,313.4z" />
									<path class="st6" d="M715.2,316.3L715.2,316.3c0,0.9-0.1,1.8-0.2,2.7c0,0,0,0,0,0c-0.3,2.6-0.8,5-1.7,7.4
								c-0.1,0.2-0.1,0.3-0.2,0.5c0,0.1-0.1,0.1-0.1,0.2c-0.1,0.2-0.1,0.3-0.2,0.5c-1.4,3.5-3.4,6.9-5.8,10c-2.4,3-5.3,5.8-8.5,8.2
								c0,0,0,0,0,0c-0.1-3.4-0.4-6.9-0.9-10.4c-0.7-4-1.6-7.9-2.8-11.6c5.2,0.1,10.2-0.4,15.2-2.4c1.6-0.7,5.1-2.9,5.1-5.2
								c0-0.3-0.1-0.6-0.2-0.9C715.1,315.5,715.2,315.9,715.2,316.3z" />
								</g>
								<path class="st3" d="M666.8,301c-0.5,1-1.1,2-1.9,2.9c-0.7,0.8-1.5,1.6-2.5,2.2c-1.4,0.8-2.7,1-4.2,1.1
							c-0.1-2-1.4-4.2-1.2-6.3c0.1-1.2,0.7-2.3,1.3-3.3c0.8-1.6,1.6-3.2,2.4-4.8c0.5-1,0.9-2,1.1-3.1c0.5-2.8-0.5-5.6-1.5-8.3
							c-0.6-1.5-1.2-3-2-4.4c0,0,0,0,0,0c-0.1-0.2-0.1-0.4-0.2-0.6c0.1,0.2,0.6,0.5,0.8,0.7c2,1.8,3.8,3.9,5.3,6.2
							C667.5,288.6,669.6,295.2,666.8,301z" />
							</g>
							<g>
								<g>
									<g>
										<g>
											<path class="st7" d="M603.1,315.3c-2-6-3-12.2-3-18.6c0-32,26.1-58.1,58.1-58.1c32,0,58.1,26.1,58.1,58.1
										c0,6.2-1,12.2-2.8,18l-1.4-0.5c1.8-5.6,2.8-11.5,2.8-17.5c0-31.2-25.4-56.6-56.6-56.6c-31.2,0-56.6,25.4-56.6,56.6
										c0,6.2,1,12.3,3,18.1L603.1,315.3z" />
										</g>
									</g>
								</g>
								<path class="st8"
									d="M606.5,315.6h-4.7c0-1.3,1.1-2.4,2.4-2.4C605.5,313.2,606.5,314.3,606.5,315.6z" />
								<path class="st8"
									d="M714.6,315.6h-4.7c0-1.3,1.1-2.4,2.4-2.4C713.6,313.2,714.6,314.3,714.6,315.6z" />
							</g>
							<g>
								<circle class="st8" cx="658.2" cy="239.3" r="4.4" />
								<g>
									<g>
										<path class="st8"
											d="M652.4,240.1c0,1.8-1.5,3.3-3.3,3.3s-3.3-1.5-3.3-3.3c0-1.8,1.5-3.3,3.3-3.3S652.4,238.3,652.4,240.1z" />
										<path class="st8" d="M644.7,241.6c0,1.3-1,2.3-2.3,2.3c-1.3,0-2.3-1-2.3-2.3s1-2.3,2.3-2.3
									C643.7,239.3,644.7,240.4,644.7,241.6z" />
										<circle class="st8" cx="637.4" cy="243.2" r="1.8" />
									</g>
									<g>
										<path class="st8" d="M663.9,240.1c0,1.8,1.5,3.3,3.3,3.3c1.8,0,3.3-1.5,3.3-3.3c0-1.8-1.5-3.3-3.3-3.3
									C665.4,236.8,663.9,238.3,663.9,240.1z" />
										<path class="st8" d="M671.6,241.6c0,1.3,1,2.3,2.3,2.3c1.3,0,2.3-1,2.3-2.3s-1-2.3-2.3-2.3
									C672.6,239.3,671.6,240.4,671.6,241.6z" />
										<circle class="st8" cx="678.9" cy="243.2" r="1.8" />
									</g>
								</g>
							</g>
							<g>
								<path class="st8" d="M602.5,282c2.4,0.4,4,2.8,3.5,5.2c-0.4,2.4-2.8,4-5.2,3.5c-2.4-0.4-4-2.8-3.5-5.2
							C597.8,283.1,600.1,281.5,602.5,282z" />
								<g>
									<g>
										<path class="st8" d="M601.5,292.1c1.8,0.3,3,2.1,2.6,3.8c-0.3,1.8-2.1,3-3.8,2.6c-1.8-0.3-3-2.1-2.6-3.8
									S599.7,291.8,601.5,292.1z" />
										<path class="st8" d="M601.5,299.9c1.2,0.2,2.1,1.4,1.8,2.7c-0.2,1.2-1.4,2.1-2.7,1.8c-1.2-0.2-2.1-1.4-1.8-2.7
									C599.1,300.5,600.3,299.7,601.5,299.9z" />
										<path class="st8" d="M602,305.7c1,0.2,1.6,1.1,1.4,2c-0.2,1-1.1,1.6-2,1.4c-1-0.2-1.6-1.1-1.4-2
									C600.2,306.1,601.1,305.5,602,305.7z" />
									</g>
									<g>
										<path class="st8" d="M603.6,280.8c1.8,0.3,3.5-0.8,3.8-2.6c0.3-1.8-0.8-3.5-2.6-3.8c-1.8-0.3-3.5,0.8-3.8,2.6
									C600.6,278.7,601.8,280.4,603.6,280.8z" />
										<path class="st8" d="M606.4,273.5c1.2,0.2,2.4-0.6,2.7-1.8c0.2-1.2-0.6-2.4-1.8-2.7c-1.2-0.2-2.4,0.6-2.7,1.8
									C604.4,272.1,605.2,273.3,606.4,273.5z" />
										<path class="st8" d="M609,268.4c1,0.2,1.9-0.5,2-1.4c0.2-1-0.5-1.9-1.4-2c-1-0.2-1.9,0.5-2,1.4
									C607.4,267.3,608,268.2,609,268.4z" />
									</g>
								</g>
							</g>
							<g>
								<path class="st8" d="M713.9,282c-2.4,0.4-4,2.8-3.5,5.2c0.4,2.4,2.8,4,5.2,3.5c2.4-0.4,4-2.8,3.5-5.2
							C718.6,283.1,716.3,281.5,713.9,282z" />
								<g>
									<g>
										<path class="st8" d="M715,292.1c-1.8,0.3-3,2.1-2.6,3.8c0.3,1.8,2.1,3,3.8,2.6c1.8-0.3,3-2.1,2.6-3.8S716.8,291.8,715,292.1
									z" />
										<path class="st8" d="M714.9,299.9c-1.2,0.2-2.1,1.4-1.8,2.7c0.2,1.2,1.4,2.1,2.7,1.8c1.2-0.2,2.1-1.4,1.8-2.7
									C717.3,300.5,716.1,299.7,714.9,299.9z" />
										<path class="st8" d="M714.4,305.7c-1,0.2-1.6,1.1-1.4,2c0.2,1,1.1,1.6,2,1.4c1-0.2,1.6-1.1,1.4-2
									C716.3,306.1,715.3,305.5,714.4,305.7z" />
									</g>
									<g>
										<path class="st8" d="M712.9,280.8c-1.8,0.3-3.5-0.8-3.8-2.6c-0.3-1.8,0.8-3.5,2.6-3.8c1.8-0.3,3.5,0.8,3.8,2.6
									C715.8,278.7,714.7,280.4,712.9,280.8z" />
										<path class="st8" d="M710,273.5c-1.2,0.2-2.4-0.6-2.7-1.8c-0.2-1.2,0.6-2.4,1.8-2.7c1.2-0.2,2.4,0.6,2.7,1.8
									C712.1,272.1,711.2,273.3,710,273.5z" />
										<path class="st8" d="M707.5,268.4c-1,0.2-1.9-0.5-2-1.4c-0.2-1,0.5-1.9,1.4-2c1-0.2,1.9,0.5,2,1.4
									C709.1,267.3,708.4,268.2,707.5,268.4z" />
									</g>
								</g>
							</g>
						</g>
					</g>
					<g>
						<path class="st23" d="M659.1,255.8c-21.8,0-39.6,17.8-39.6,39.6c0,21.8,17.8,39.6,39.6,39.6c21.8,0,39.6-17.8,39.6-39.6
					C698.7,273.5,680.9,255.8,659.1,255.8z M659.1,324.1c-15.8,0-28.7-12.9-28.7-28.7c0-15.8,12.9-28.7,28.7-28.7
					s28.7,12.9,28.7,28.7C687.8,311.2,674.9,324.1,659.1,324.1z" />
						<path class="st24" d="M659.1,266.7c-15.8,0-28.7,12.9-28.7,28.7c0,15.8,12.9,28.7,28.7,28.7s28.7-12.9,28.7-28.7
					C687.8,279.5,674.9,266.7,659.1,266.7z M659.1,313.2c-9.8,0-17.8-8-17.8-17.8c0-9.8,8-17.8,17.8-17.8c9.8,0,17.8,8,17.8,17.8
					C676.9,305.2,668.9,313.2,659.1,313.2z" />
						<path class="st25" d="M659.1,277.5c-9.8,0-17.8,8-17.8,17.8c0,9.8,8,17.8,17.8,17.8c9.8,0,17.8-8,17.8-17.8
					C676.9,285.5,668.9,277.5,659.1,277.5z M659.1,302.3c-3.8,0-6.9-3.1-6.9-6.9c0-3.8,3.1-6.9,6.9-6.9c3.8,0,6.9,3.1,6.9,6.9
					C666.1,299.2,662.9,302.3,659.1,302.3z" />
						<path class="st26" d="M659.1,288.4c-3.8,0-6.9,3.1-6.9,6.9c0,3.8,3.1,6.9,6.9,6.9c3.8,0,6.9-3.1,6.9-6.9
					C666.1,291.5,662.9,288.4,659.1,288.4z" />
					</g>
				</g>
				<g>
					<g>
						<g>
							<polygon class="st7" points="545.2,122.5 541.9,116.9 544,113.3 541.8,109.6 539.6,113.3 541.7,116.9 538.4,122.5 541.7,128.1 
						539.6,131.7 541.8,135.4 544,131.7 541.9,128.1 					" />
							<g>
								<polygon class="st7" points="546.1,240.8 541.9,233.6 544.5,229.1 541.8,224.4 539.1,229.1 541.7,233.6 537.6,240.8 
							541.7,247.9 539.1,252.4 541.8,257.1 544.5,252.4 541.9,247.9 						" />
								<polygon class="st7" points="535.9,234.4 537.4,228.9 540.9,228 541.8,224.4 538.2,225.3 537.3,228.8 531.8,230.3 
							530.4,235.7 526.9,236.6 525.9,240.2 529.5,239.3 530.4,235.8 						" />
								<polygon class="st7" points="547.6,234.4 546.2,228.9 542.7,228 541.7,224.4 545.3,225.3 546.3,228.8 551.8,230.3 
							553.2,235.7 556.7,236.6 557.6,240.2 554,239.3 553.1,235.8 						" />
							</g>
						</g>
						<g>
							<g class="design">
								<g>
									<path class="st27 line"
										d="M598.8,181.8c0,0.3,0,0.6,0,0.9v0c0,0.9-0.1,1.8-0.2,2.6c0,0,0,0,0,0c-0.3,2.6-0.8,5-1.7,7.4
								c-0.1,0.2-0.1,0.3-0.2,0.5c0,0.1-0.1,0.1-0.1,0.2c-0.1,0.2-0.1,0.3-0.2,0.5c-1.4,3.5-3.4,6.9-5.8,10c-2.4,3-5.3,5.8-8.5,8.2
								c0,0,0,0,0,0c-2.2,1.6-4.5,3.1-7,4.5c-0.3,0.2-0.6,0.3-0.9,0.5c-0.2,0.1-0.5,0.2-0.7,0.4c-0.2,0.1-0.4,0.2-0.7,0.3
								c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.4,0.2-0.7,0.3c-8.5,3.8-18.5,6-29.1,6c-10.6,0-20.5-2.2-29-6c-0.2-0.1-0.4-0.2-0.7-0.3
								c-0.5-0.2-0.9-0.4-1.4-0.7c-0.2-0.1-0.5-0.2-0.7-0.3c-11-5.5-19.3-13.9-23.1-23.7c-0.1-0.2-0.1-0.3-0.2-0.5
								c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.1-0.3-0.2-0.5c-1.2-3.5-1.9-7.2-1.9-11c0-0.4,0.1-0.9,0.4-1.3c0.1-0.3,0.3-0.5,0.5-0.8
								c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c5.3-4.7,28.3-8.2,55.8-8.2c10.4,0,20.1,0.5,28.5,1.4
								c14.1,1.5,24.4,4,27.5,7c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.8C598.7,180.9,598.8,181.4,598.8,181.8z" />
									<g>
										<g>
											<path class="st28"
												d="M525.6,200.6c-0.2-0.1-2.8-1.1-6.7-2.3c-1-0.3-2.1-0.6-3.3-1c-1.2-0.3-2.4-0.7-3.7-1
										c-1.3-0.3-2.6-0.6-4-0.9c-1.4-0.3-2.7-0.6-4.1-0.8c-1.4-0.2-2.8-0.4-4.2-0.6c-1.4-0.1-2.7-0.3-4.1-0.3c-0.3,0-0.7,0-1,0
										c-0.3,0-0.6,0-1,0c-0.3,0-0.6,0-0.9,0c-0.3,0-0.6,0-0.9,0c-0.6,0-1.2,0-1.8,0.1c-0.6,0-1.1,0-1.6,0.1
										c-0.5,0.1-1,0.1-1.4,0.1c-0.1-0.2-0.1-0.3-0.2-0.5c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0,0c0.5-0.1,1-0.2,1.5-0.3
										c0.5-0.1,1.1-0.2,1.7-0.3c0.6-0.1,1.2-0.1,1.8-0.2c0.3,0,0.6-0.1,0.9-0.1c0.3,0,0.6,0,1,0c0.6,0,1.3,0,2,0
										c0.7,0,1.4,0,2.1,0.1c0.7,0,1.4,0.1,2.1,0.1c1.4,0.1,2.8,0.3,4.3,0.5c1.4,0.3,2.8,0.5,4.2,0.9c1.4,0.3,2.7,0.7,4,1.1
										c1.3,0.4,2.5,0.8,3.7,1.2c1.2,0.4,2.2,0.8,3.2,1.3c2,0.8,3.6,1.6,4.7,2.2C524.9,200.2,525.5,200.6,525.6,200.6z" />
											<path class="st28" d="M596.7,193.2c-0.5-0.1-1-0.2-1.5-0.3c-0.5-0.1-1.1-0.2-1.7-0.3c-0.6-0.1-1.2-0.1-1.8-0.2
										c-0.3,0-0.6-0.1-0.9-0.1c-0.3,0-0.6,0-1,0c-0.7,0-1.3,0-2,0c-0.7,0-1.4,0-2.1,0.1c-0.7,0-1.4,0.1-2.1,0.1
										c-1.4,0.1-2.8,0.3-4.3,0.5c-1.4,0.3-2.8,0.5-4.2,0.9c-1.4,0.3-2.7,0.7-4,1.1c-1.3,0.4-2.5,0.8-3.7,1.2
										c-1.2,0.4-2.2,0.8-3.2,1.3c-2,0.8-3.6,1.6-4.7,2.2c-0.6,0.3-1,0.6-1.3,0.7c-0.2-0.6-0.6-1.1-0.9-1.6
										c0.2-1.2,0.3-2.2,0.2-3.1c0-1.2-0.2-2.4-0.6-3.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.2-0.4-0.3-0.5
										c-0.3-0.5-0.6-1-0.9-1.3c-0.7-0.8-1.5-1.5-2.4-2c-0.8-0.5-1.7-0.9-2.7-1.2c-0.2-0.1-0.5-0.1-0.7-0.2l-0.1,0
										c-0.2-0.1-0.4-0.1-0.6-0.2c-0.3-0.1-0.6-0.1-1-0.2l-0.4-0.1c-0.9-0.2-1.8-0.3-2.7-0.7c-0.4-0.2-0.8-0.4-1.2-0.7
										c-0.3-0.2-0.6-0.5-1-1l-0.2-0.2l-0.7,0l-0.2,0.2c-0.3,0.4-0.6,0.7-1,1c-0.4,0.3-0.8,0.5-1.2,0.7c-0.8,0.3-1.6,0.5-2.7,0.7
										c-0.1,0-0.3,0.1-0.4,0.1c-0.3,0.1-0.6,0.1-1,0.2c-0.5,0.1-1,0.2-1.4,0.4c-1,0.3-1.9,0.7-2.7,1.2c-0.9,0.5-1.7,1.2-2.4,2
										c-0.4,0.5-0.7,0.9-1,1.3c-0.3,0.5-0.5,1-0.7,1.5c-0.4,1-0.6,2.2-0.6,3.4c0,0.9,0.1,1.9,0.2,3.1c-0.6,0.8-1.1,1.8-1.3,2.9
										c-0.2,0.7-0.2,1.4-0.2,2c0,0.7,0.1,1.3,0.3,2c0.3,1,0.7,2,1.4,3c0,0,0,0,0,0c-0.2,0.2-0.4,0.5-0.7,0.8
										c-0.2,0.2-0.3,0.4-0.5,0.6c-0.2,0.2-0.4,0.4-0.7,0.6c-0.2,0.2-0.5,0.4-0.8,0.7c-0.3,0.2-0.6,0.5-0.9,0.7
										c-0.3,0.2-0.7,0.5-1,0.7c-0.4,0.2-0.7,0.5-1.1,0.7c-0.2,0.1-0.4,0.3-0.6,0.4c-0.2,0.1-0.4,0.2-0.6,0.3
										c-0.4,0.2-0.8,0.5-1.3,0.7c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.5,0.2-0.7,0.3c-0.2,0.1-0.5,0.2-0.7,0.3
										c-0.5,0.2-1,0.4-1.5,0.6c-0.5,0.2-1,0.3-1.5,0.5s-1,0.3-1.5,0.5c-0.2,0-0.3,0.1-0.5,0.1c0.5,0.2,0.9,0.4,1.4,0.7
										c0.2,0.1,0.4,0.2,0.7,0.3c0.1,0,0.3-0.1,0.4-0.1c0.5-0.2,1-0.3,1.6-0.5c0.5-0.2,1-0.4,1.5-0.6c0.2-0.1,0.5-0.2,0.7-0.3
										c0.2-0.1,0.5-0.3,0.7-0.4c0.5-0.2,0.9-0.5,1.4-0.7c0.4-0.3,0.9-0.5,1.3-0.8c0.2-0.1,0.4-0.3,0.6-0.4
										c0.2-0.1,0.4-0.3,0.6-0.4c0.4-0.3,0.7-0.6,1.1-0.8c0.3-0.3,0.6-0.6,1-0.9c0.3-0.3,0.6-0.6,0.8-0.8c0.3-0.3,0.5-0.5,0.7-0.8
										c0.2-0.3,0.4-0.5,0.6-0.7c0.2-0.2,0.3-0.5,0.4-0.7c0.3-0.4,0.4-0.7,0.5-1c0.1,0.1,0.2,0.2,0.2,0.4c0.7,0.9,1.5,1.8,2.4,2.6
										c0.8,0.6,1.7,1.3,2.7,2c0.3,0.2,0.7,0.5,1.1,0.7c0.6,0.4,1.1,0.8,1.7,1.2c0.8,0.6,1.7,1.3,2.6,2c0.9,0.8,1.6,1.6,2.3,2.5
										c0.6,0.9,1.2,1.9,1.6,3l0.6,1.2l0.6-1.2c0.4-1.1,1-2.1,1.7-3c0.6-0.8,1.4-1.6,2.3-2.5c0.9-0.8,1.8-1.4,2.6-2
										c0.5-0.4,1-0.7,1.6-1.1c0.4-0.3,0.8-0.5,1.2-0.8c1.1-0.7,1.9-1.4,2.7-2c1-0.8,1.8-1.7,2.5-2.6c0,0,0.1-0.1,0.1-0.1
										c0.1,0.2,0.2,0.5,0.4,0.7c0.1,0.2,0.3,0.4,0.4,0.7c0.2,0.2,0.4,0.5,0.6,0.7c0.2,0.3,0.5,0.5,0.7,0.8
										c0.3,0.3,0.5,0.6,0.8,0.8c0.3,0.3,0.6,0.6,1,0.9c0.3,0.3,0.7,0.6,1.1,0.8c0.2,0.1,0.4,0.3,0.6,0.4c0.2,0.1,0.4,0.3,0.6,0.4
										c0.4,0.3,0.8,0.5,1.3,0.8c0.5,0.2,0.9,0.5,1.4,0.7c0.2,0.1,0.5,0.2,0.7,0.4c0.2,0.1,0.5,0.2,0.7,0.3c0.5,0.2,1,0.4,1.5,0.6
										c0.5,0.2,1,0.4,1.6,0.5c0.1,0,0.2,0.1,0.3,0.1c0.2-0.1,0.4-0.2,0.7-0.3c0.5-0.2,0.9-0.4,1.4-0.6c-0.1,0-0.2-0.1-0.4-0.1
										c-0.5-0.2-1-0.3-1.5-0.5s-1-0.3-1.5-0.5c-0.5-0.2-1-0.4-1.5-0.6c-0.2-0.1-0.5-0.2-0.7-0.3c-0.2-0.1-0.5-0.2-0.7-0.3
										c-0.5-0.2-0.9-0.4-1.4-0.6c-0.4-0.2-0.9-0.5-1.3-0.7c-0.2-0.1-0.4-0.2-0.6-0.3c-0.2-0.1-0.4-0.2-0.6-0.4
										c-0.4-0.2-0.8-0.5-1.1-0.7c-0.3-0.3-0.7-0.5-1-0.7c-0.3-0.2-0.6-0.5-0.9-0.7c-0.3-0.2-0.6-0.4-0.8-0.7
										c-0.2-0.2-0.5-0.4-0.7-0.6c-0.2-0.2-0.4-0.4-0.5-0.6c-0.2-0.3-0.4-0.5-0.6-0.7c0.7-1,1.2-2.1,1.5-3.2
										c0.2-0.7,0.3-1.3,0.3-2c0-0.2,0-0.6,0-1c0-0.3-0.1-0.6-0.2-1c-0.1-0.4-0.2-0.8-0.4-1.2c0.9-0.3,3.2-1.2,6.3-2.2
										c1-0.3,2.1-0.6,3.3-1c1.2-0.3,2.4-0.7,3.7-1c1.3-0.3,2.6-0.6,4-0.9c1.4-0.3,2.7-0.6,4.1-0.8c1.4-0.2,2.8-0.4,4.2-0.6
										c1.4-0.1,2.7-0.3,4.1-0.3c0.3,0,0.7,0,1,0c0.3,0,0.6,0,1,0c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,0.9,0c0.6,0,1.2,0,1.8,0.1
										c0.6,0,1.1,0,1.6,0.1c0.5,0.1,1,0.1,1.4,0.1c0.1-0.2,0.1-0.3,0.2-0.5C596.7,193.4,596.7,193.3,596.7,193.2
										C596.7,193.2,596.7,193.2,596.7,193.2z M557.7,205.4c-0.3,1-0.8,2.1-1.5,3.1c-0.6,0.9-1.4,1.7-2.3,2.4
										c-0.7,0.6-1.6,1.2-2.7,2c-0.4,0.2-0.7,0.5-1.1,0.7c-0.6,0.4-1.1,0.8-1.7,1.1c-0.9,0.6-1.8,1.3-2.7,2.1
										c-1,0.9-1.7,1.7-2.4,2.6c-0.1,0.1-0.2,0.3-0.3,0.5c0,0.1-0.1,0.1-0.1,0.2c-0.1,0.2-0.3,0.4-0.4,0.7
										c-0.1,0.3-0.3,0.5-0.4,0.8c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0.1-0.3c0-0.1,0-0.3,0-0.4v-0.1c0-0.5,0-1,0.1-1.5
										c0-0.6,0-1.3,0.1-1.9v0c0.4,0,0.7,0,0.9,0c0.4,0,0.8-0.1,1.1-0.2c0.7-0.1,1.1-0.3,1.1-0.3l0.3-0.1l-0.3-0.1
										c0,0-0.5-0.2-1.1-0.3c-0.3-0.1-0.7-0.1-1.1-0.1c-0.3,0-0.6,0-0.9-0.1v-0.1c0.5,0,1-0.1,1.4-0.2c0.5-0.1,0.8-0.3,0.8-0.3
										l0.2-0.1l-0.2-0.1c0,0-0.3-0.2-0.8-0.3c-0.3-0.1-0.8-0.2-1.3-0.2c0.3,0,0.6-0.1,0.8-0.2c0.3-0.1,0.6-0.3,0.6-0.3l0.1-0.1
										l-0.1-0.1c0,0-0.2-0.2-0.6-0.3c-0.2-0.1-0.5-0.2-0.8-0.2l0-2.6c0-1,0-2.1,0-3.2c0-0.5,0-1,0-1.5c0.1,0.3,0.2,0.6,0.3,1
										c0.2,0.6,0.4,1.3,0.7,2c0.4,0.8,0.8,1.5,1.3,2c0.6,0.6,1.3,1,2.1,1.2c0.9,0.2,1.8,0.1,2.5-0.4c0.8-0.5,1.2-1.5,1.3-2.6
										c0.1-1-0.3-1.9-1-2.6c-0.6-0.6-1.2-0.9-1.9-0.9c-0.1,0-0.2,0-0.3,0c-0.4,0.1-0.8,0.3-1,0.5c-0.3,0.3-0.5,0.7-0.6,1
										c-0.1,0.4-0.1,0.8-0.1,1.1c0,0.1,0,0.2,0.1,0.2c0,0.1,0,0.1,0.1,0.2l0,0.1c0.1,0.2,0.2,0.3,0.3,0.4
										c0.2,0.2,0.5,0.3,0.7,0.3c0.2,0,0.4,0,0.6-0.2c0.4-0.2,0.5-0.5,0.6-0.7c0.1-0.2,0.1-0.3,0.1-0.3l0.1-1l-0.4,1
										c0,0,0,0.1-0.1,0.2c0,0.1-0.2,0.3-0.5,0.4c-0.3,0.1-0.6,0-0.8-0.2c-0.2-0.3-0.3-0.8-0.1-1.3c0.2-0.5,0.6-0.9,1-0.9
										c0,0,0.1,0,0.1,0c0.4,0,0.9,0.3,1.4,0.7c0.2,0.2,0.4,0.5,0.5,0.8c0,0.1,0,0.1,0,0.1l0,0.1c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1
										c0,0.1,0,0.3,0,0.5c0,0.3-0.1,0.7-0.2,1c0,0.1-0.1,0.1-0.1,0.2l-0.1,0.2l-0.2,0.2c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0-0.1,0.1
										c-0.4,0.3-1.1,0.4-1.7,0.3c-0.6-0.1-1.2-0.4-1.7-0.9c-0.4-0.4-0.8-1-1.2-1.6c-0.3-0.6-0.6-1.3-0.8-1.8
										c-0.4-1.1-0.7-2.1-0.9-2.7c0-0.3,0-0.6,0-0.9c0-0.3,0-0.6,0-0.8l0.1-0.1c0.4-0.4,0.8-0.9,1.3-1.6c0.3-0.4,0.5-0.9,0.7-1.3
										c0.2-0.6,0.4-1.1,0.4-1.7c0.1-0.6,0-1.3-0.1-1.9c-0.1-0.6-0.3-1.1-0.5-1.6l-0.1-0.2c-0.2-0.5-0.4-1-0.5-1.6
										c-0.1-0.3-0.1-0.5-0.1-0.7c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.2v-0.1c0-0.1,0-0.1,0-0.2c0-0.5,0.1-0.9,0.3-1.3
										c0.2-0.4,0.4-0.7,0.6-1c0.2-0.3,0.5-0.5,0.8-0.7c0.2-0.1,0.5-0.3,0.7-0.3c0.1,0,0.2-0.1,0.3-0.1c0.1,0,0.1,0,0.2,0
										c0.1,0,0.2,0,0.2,0l1-0.2l-1.1-0.1c0,0-0.1,0-0.2,0c-0.1,0-0.3,0-0.5,0c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.7,0.3-1,0.6
										c-0.4,0.3-0.7,0.7-0.9,1.2c-0.3,0.5-0.5,1.1-0.5,1.7c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3c0,0.1,0,0.1,0,0.2
										c0,0.4,0.1,0.7,0.1,1c0.1,0.6,0.4,1.2,0.5,1.7l0.1,0.2c0.2,0.5,0.4,1,0.5,1.4c0.1,0.5,0.2,1,0.1,1.5c0,0.5-0.1,0.9-0.3,1.4
										c-0.1,0.4-0.3,0.8-0.5,1.2c-0.3,0.6-0.6,1.1-0.8,1.4v-0.3c0-0.2,0-0.5,0-0.7c0-0.7,0-1.5,0-2.2c0-0.4,0-0.8,0-1.2
										c0-2.2-0.1-4.2-0.1-6c0-1.2-0.1-2.2-0.1-3c0-0.4,0-0.9,0-1.2c0-1-0.1-1.6-0.1-1.6h-0.2c0,0,0,0.6-0.1,1.6
										c0,0.4,0,0.8,0,1.3c0,0.8-0.1,1.8-0.1,3c-0.1,1.9-0.1,4-0.1,6c0,0.4,0,0.8,0,1.2c0,0.7,0,1.4,0,2.2c0,0.3,0,0.7,0,1
										c-0.2-0.4-0.5-0.9-0.8-1.4c-0.2-0.4-0.4-0.8-0.5-1.2c-0.2-0.5-0.3-1-0.3-1.4c0-0.5,0-1,0.1-1.5c0.1-0.5,0.3-0.9,0.5-1.4
										l0.1-0.2c0.2-0.5,0.4-1.1,0.5-1.7c0.1-0.3,0.1-0.6,0.1-1c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.3,0-0.5
										c-0.1-0.6-0.2-1.2-0.5-1.7c-0.2-0.4-0.5-0.8-0.9-1.2c-0.3-0.3-0.7-0.5-1-0.6c-0.3-0.1-0.5-0.2-0.8-0.2c-0.2,0-0.4,0-0.5,0
										c-0.1,0-0.2,0-0.2,0l-1.1,0.1l1,0.2c0,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0.1,0.3,0.1c0.2,0.1,0.4,0.2,0.7,0.3
										c0.2,0.2,0.5,0.4,0.7,0.7c0.3,0.3,0.5,0.7,0.6,1c0.2,0.4,0.3,0.9,0.3,1.3c0,0.1,0,0.1,0,0.2v0.1c0,0.1,0,0.2,0,0.2
										c0,0.1,0,0.1,0,0.2c0,0.2-0.1,0.5-0.1,0.7c-0.1,0.5-0.3,1.1-0.5,1.6l-0.1,0.2c-0.2,0.5-0.4,1-0.5,1.6
										c-0.1,0.6-0.2,1.3-0.1,1.9c0.1,0.7,0.3,1.3,0.4,1.7c0.2,0.4,0.4,0.9,0.7,1.3c0.5,0.7,0.9,1.2,1.3,1.6c0,0,0.1,0.1,0.1,0.1
										c0,0.6,0,1.2,0,1.8c-0.3,0.9-0.6,1.8-0.9,2.7c-0.2,0.6-0.5,1.2-0.8,1.8c-0.3,0.7-0.7,1.2-1.2,1.6c-0.4,0.4-1,0.7-1.7,0.9
										c-0.6,0.1-1.3,0-1.7-0.3c0,0,0,0-0.1-0.1c0,0-0.1,0-0.1-0.1l-0.2-0.3l0-0.1c0-0.1-0.1-0.1-0.1-0.2l0,0
										c-0.1-0.3-0.2-0.6-0.2-1c0-0.2,0-0.4,0-0.5c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
										c0.1-0.3,0.3-0.6,0.5-0.8c0.5-0.5,1-0.7,1.4-0.7c0.5,0,0.8,0.4,1,0.9c0.2,0.5,0.1,1-0.1,1.3c-0.2,0.2-0.4,0.3-0.5,0.3
										c-0.1,0-0.2,0-0.3-0.1c-0.3-0.1-0.5-0.4-0.5-0.4c-0.1-0.1-0.1-0.2-0.1-0.2l-0.4-1l0.1,1.1c0,0,0,0.1,0.1,0.3
										c0.1,0.2,0.3,0.5,0.6,0.7c0.2,0.1,0.4,0.2,0.6,0.2c0.3,0,0.5-0.1,0.7-0.4c0.1-0.1,0.2-0.2,0.3-0.4c0-0.1,0.1-0.2,0.1-0.2
										l0,0c0-0.1,0-0.2,0.1-0.2c0.1-0.3,0-0.7-0.1-1.1c-0.1-0.3-0.2-0.7-0.6-1c-0.3-0.3-0.6-0.5-1-0.5c-0.7-0.1-1.5,0.2-2.1,0.8
										c-0.7,0.7-1.1,1.7-1,2.6c0,1.1,0.5,2.1,1.3,2.6c0.7,0.5,1.5,0.6,2.5,0.4c0.8-0.2,1.5-0.6,2.1-1.2c0.5-0.5,0.9-1.2,1.3-2
										c0.3-0.7,0.5-1.4,0.7-2c0.1-0.3,0.2-0.6,0.3-1v0.2c0,0.4,0,0.9,0,1.3c0,0.6,0,1.2,0,1.8l0,1.6c0,0.8,0,1.6,0,2.4
										c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.6,0.3-0.6,0.3l-0.1,0.1l0.1,0.1c0,0,0.2,0.2,0.6,0.3c0.2,0.1,0.5,0.2,0.8,0.2
										c-0.5,0-1,0.1-1.3,0.2c-0.5,0.1-0.8,0.3-0.8,0.3l-0.2,0.1l0.2,0.1c0,0,0.3,0.2,0.8,0.3c0.4,0.1,0.9,0.2,1.4,0.2v0.1
										c-0.3,0-0.6,0-0.9,0.1c-0.4,0-0.8,0.1-1.1,0.1c-0.7,0.1-1.1,0.3-1.1,0.3l-0.3,0.1l0.3,0.1c0,0,0.5,0.2,1.1,0.3
										c0.3,0.1,0.7,0.1,1.1,0.1c0.3,0,0.6,0,0.9,0.1v0c0,1,0.1,2.1,0.1,3.2l0,0.6c0,0.1,0,0.2,0,0.3c0,0.1,0,0.3,0,0.4
										c-0.4-0.8-0.8-1.6-1.3-2.2c-0.7-0.9-1.5-1.8-2.4-2.6c-0.9-0.8-1.8-1.5-2.7-2.1c-0.5-0.4-1-0.7-1.6-1.1
										c-0.4-0.3-0.8-0.5-1.2-0.8c-1.1-0.7-1.9-1.3-2.6-2c-0.9-0.7-1.7-1.5-2.3-2.4c-0.7-1-1.2-2-1.5-3.1
										c-0.2-0.6-0.2-1.1-0.3-1.7c0-0.6,0-1.2,0.2-1.7c0.3-1.2,0.8-2.2,1.5-3c0.7-0.8,1.6-1.3,2.6-1.5c1-0.2,2.1-0.1,2.9,0.3
										c0.4,0.2,0.8,0.5,1.3,0.9c0.3,0.4,0.6,0.8,0.9,1.4c0.4,1.1,0.4,2.3,0,3.4c-0.4,1.1-1.2,1.9-2.2,2.2c-0.3,0.1-0.7,0.2-1,0.2
										c-0.5,0-1.2-0.1-1.8-0.7c-0.4-0.4-0.6-0.9-0.6-1.5c0-0.6,0.2-1.2,0.5-1.6l-0.2-0.2c-0.4,0.5-0.6,1.1-0.6,1.8
										c0,0.7,0.3,1.3,0.7,1.8c0.5,0.6,1.3,0.9,2.1,0.9c0.4,0,0.7-0.1,1-0.2c0.6-0.2,1.1-0.5,1.5-0.9c0.2-0.2,0.5-0.6,0.7-0.9
										l0.1-0.1c0.3-0.3,0.5-0.8,0.8-1.3c0.2-0.5,0.5-1.1,0.8-1.8c0.3-0.7,0.6-1.5,0.8-2.2c0.2-0.9,0.5-1.7,0.6-2.6
										c0.2-1.2,0.2-2.1,0-3c-0.1-0.5-0.2-1.1-0.4-1.5c-0.2-0.5-0.5-1-0.9-1.3c-0.7-0.8-1.8-1.1-2.7-0.9c-0.5,0.1-1,0.4-1.3,0.7
										c-0.4,0.3-0.7,0.8-0.9,1.2c-0.2,0.5-0.3,1-0.3,1.6c0,0.5,0.1,1,0.4,1.5c0.5,1,1.3,1.4,2.1,1.2c0.6-0.2,1.1-0.8,1.4-1.6
										c0.1-0.3,0.1-0.7,0-1c-0.1-0.2-0.1-0.3-0.2-0.4c-0.1-0.1-0.1-0.2-0.2-0.2l0,0c-0.3-0.2-0.6-0.3-0.9-0.2
										c-0.2,0-0.3,0.1-0.3,0.1l-0.8,0.6l0.9-0.4c0,0,0.1,0,0.2,0c0,0,0,0,0.1,0c0.1,0,0.4,0,0.6,0.3l0,0c0.1,0.1,0.1,0.1,0.1,0.2
										c0.1,0.1,0.1,0.2,0.1,0.3c0,0.2,0,0.4-0.1,0.7c-0.2,0.4-0.6,0.9-1,1c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0
										c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0l-0.1,0c0,0-0.1,0-0.1-0.1c-0.2-0.2-0.4-0.4-0.6-0.7
										c-0.1-0.3-0.2-0.7-0.2-1c0-0.4,0.1-0.7,0.3-1c0.2-0.3,0.4-0.6,0.6-0.8c0.3-0.2,0.6-0.4,0.9-0.5c0.6-0.1,1.3,0.1,1.8,0.6
										c0.5,0.5,0.9,1.3,1,2.2c0.1,0.8,0.1,1.7,0,2.7c-0.1,0.9-0.3,1.8-0.5,2.5c-0.2,0.9-0.4,1.6-0.6,2.2
										c-0.1,0.3-0.2,0.6-0.3,0.9v-0.1c0-0.4,0-0.7-0.1-1c0-0.1,0-0.2-0.1-0.3c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1,0-0.1
										c0-0.1-0.1-0.2-0.1-0.3c-0.4-1.2-1.3-2.2-2.4-2.7c-1-0.5-2.1-0.6-3.3-0.5c-1.1,0.2-2.2,0.7-3.1,1.6
										c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1-1-0.1-1.9,0-2.7c0.1-1.1,0.3-2.2,0.7-3.1c0.2-0.5,0.5-1,0.7-1.4c0.3-0.5,0.6-0.9,0.9-1.2
										c0.4-0.4,0.7-0.7,1.1-1c0.4-0.3,0.8-0.6,1.2-0.8c0.7-0.4,1.6-0.7,2.6-1c0.5-0.1,0.9-0.2,1.3-0.3c0.3-0.1,0.6-0.1,0.9-0.1
										c0.2,0,0.3-0.1,0.5-0.1c0.9-0.1,1.9-0.3,2.8-0.7c0.5-0.2,0.9-0.5,1.4-0.8c0.3-0.2,0.6-0.5,0.9-0.9c0.3,0.4,0.6,0.6,0.9,0.9
										c0.4,0.3,0.9,0.6,1.4,0.8c1,0.4,1.9,0.6,2.9,0.7l0.2,0c0.4,0.1,0.8,0.1,1.1,0.2c0.2,0,0.5,0.1,0.7,0.1
										c0.2,0.1,0.4,0.1,0.7,0.2c1,0.3,1.9,0.6,2.6,1c0.4,0.2,0.8,0.4,1.2,0.8c0.3,0.3,0.7,0.6,1.1,1c0.3,0.3,0.6,0.7,0.9,1.2
										c0.1,0.2,0.2,0.3,0.3,0.5l0.1,0.2c0.1,0.2,0.2,0.5,0.3,0.7c0.4,0.9,0.7,2,0.7,3.1c0.1,0.8,0,1.6,0,2.7
										c-0.1-0.1-0.1-0.1-0.2-0.2l0,0c-0.2-0.2-0.4-0.4-0.7-0.6l-0.3-0.2l-0.4-0.2c-0.2-0.1-0.4-0.2-0.5-0.2
										c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2-0.1-0.3-0.1c-0.2,0-0.3-0.1-0.5-0.1c-0.3,0-0.6-0.1-0.9-0.1c-0.8,0-1.6,0.2-2.3,0.5
										c-0.5,0.2-1,0.6-1.4,1.1l-0.1,0.1c-0.2,0.2-0.4,0.4-0.5,0.7c-0.2,0.2-0.3,0.5-0.4,0.7l-0.1,0.2c-0.2,0.6-0.3,1.3-0.3,2
										c-0.1-0.3-0.2-0.6-0.3-0.9c-0.2-0.6-0.4-1.4-0.6-2.2c-0.2-0.7-0.4-1.6-0.5-2.5c-0.1-0.9-0.1-1.8,0-2.7
										c0.1-0.9,0.5-1.6,1-2.2c0.5-0.5,1.2-0.8,1.8-0.6c0.3,0.1,0.6,0.2,0.9,0.5c0.3,0.2,0.5,0.5,0.6,0.8c0.2,0.3,0.3,0.7,0.3,1
										c0,0.3-0.1,0.7-0.2,1c-0.1,0.3-0.3,0.6-0.5,0.7c0,0,0,0-0.1,0l-0.1,0l0,0c-0.1,0-0.1,0.1-0.2,0.1c0,0,0,0-0.1,0
										c0,0,0,0,0,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-0.5-0.1-0.9-0.6-1.1-1c-0.1-0.2-0.1-0.4-0.1-0.7c0-0.1,0.1-0.2,0.1-0.2
										c0-0.1,0.1-0.1,0.1-0.2l0,0c0.2-0.2,0.5-0.3,0.6-0.3c0,0,0,0,0.1,0c0.1,0,0.2,0,0.2,0l0.9,0.4l-0.8-0.6
										c-0.1,0-0.1-0.1-0.3-0.1c-0.3-0.1-0.7,0-0.9,0.2l0,0c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.1,0.2-0.2,0.4
										c-0.1,0.3-0.1,0.7,0,1c0.2,0.8,0.7,1.3,1.4,1.6c0.8,0.3,1.6-0.2,2.1-1.2c0.2-0.4,0.4-1,0.4-1.5c0-0.5-0.1-1-0.3-1.6
										c-0.2-0.5-0.5-0.9-0.9-1.2c-0.4-0.4-0.9-0.6-1.3-0.7c-0.2,0-0.4-0.1-0.6-0.1c-0.8,0-1.6,0.4-2.1,1
										c-0.3,0.4-0.7,0.8-0.9,1.3c-0.2,0.5-0.4,1-0.4,1.5c-0.1,0.9-0.1,1.8,0.1,3c0.1,0.9,0.4,1.8,0.6,2.6
										c0.2,0.8,0.5,1.5,0.8,2.2c0.3,0.7,0.6,1.3,0.8,1.8c0.3,0.5,0.5,1,0.8,1.3c0,0,0,0,0,0.1c0.2,0.4,0.5,0.7,0.7,0.9
										c0.4,0.4,0.9,0.7,1.5,0.9c0.3,0.1,0.7,0.2,1,0.2c0.8,0,1.6-0.3,2.1-0.9c0.4-0.5,0.7-1.1,0.7-1.8c0-0.7-0.2-1.3-0.6-1.8
										l-0.2,0.2c0.4,0.4,0.5,1,0.5,1.6c0,0.6-0.3,1.2-0.6,1.5c-0.6,0.6-1.3,0.7-1.8,0.7c-0.3,0-0.7-0.1-1-0.2
										c-0.5-0.2-0.9-0.4-1.3-0.8c-0.4-0.4-0.7-0.9-0.9-1.4c-0.4-1.1-0.4-2.4,0-3.4c0-0.1,0.1-0.1,0.1-0.2
										c0.1-0.2,0.2-0.4,0.3-0.5c0.1-0.2,0.3-0.4,0.4-0.6l0.1-0.1c0.4-0.4,0.8-0.7,1.3-0.9c0.9-0.4,1.9-0.5,2.9-0.3
										c0.2,0,0.3,0.1,0.5,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.1,0.1,0.2,0.1c0.2,0.1,0.3,0.1,0.4,0.2l0.3,0.2l0.3,0.2
										c0.2,0.1,0.4,0.3,0.6,0.5c0.7,0.8,1.2,1.8,1.5,3c0.1,0.3,0.1,0.6,0.1,0.9c0,0.3,0,0.6,0,0.9
										C557.9,204.3,557.8,204.9,557.7,205.4z" />
											<path class="st28" d="M525.2,208.6c0.3-0.4,0.3-1-0.1-1.3c-0.4-0.2-0.9-0.1-1.2,0.2c-0.3,0.4-0.3,0.9,0.1,1.2
										C524.3,209.1,524.9,209,525.2,208.6z" />
											<path class="st28" d="M521,210.4c-0.4,0.3-0.5,0.8-0.2,1.2c0.3,0.4,0.8,0.4,1.3,0.1c0.4-0.3,0.5-0.9,0.2-1.2
										C522,210.1,521.4,210.1,521,210.4z" />
											<path class="st28" d="M518.5,214.1c0.5-0.2,0.6-0.8,0.4-1.2c-0.2-0.4-0.8-0.5-1.2-0.3c-0.4,0.2-0.6,0.8-0.4,1.2
										C517.5,214.2,518,214.3,518.5,214.1z" />
											<path class="st28" d="M514.5,215.9c0.5-0.2,0.7-0.7,0.5-1.1c-0.2-0.4-0.7-0.6-1.1-0.4c-0.5,0.2-0.7,0.7-0.6,1.1
										C513.5,215.8,514.1,216.1,514.5,215.9z" />
											<path class="st28" d="M510.5,217.2c0.5-0.1,0.8-0.6,0.7-1.1c-0.1-0.4-0.6-0.7-1.1-0.6c-0.5,0.1-0.8,0.6-0.7,1.1
										C509.5,217.1,510,217.3,510.5,217.2z" />
											<path class="st28" d="M523.9,202.5c0.2-0.4-0.1-1-0.8-1.3c-0.6-0.3-1.3-0.1-1.4,0.3c-0.2,0.4,0.2,1,0.8,1.2
										C523.1,203,523.7,202.9,523.9,202.5z" />
											<path class="st28" d="M518.8,200.4c0.2-0.4-0.2-1-0.9-1.2c-0.6-0.2-1.3,0-1.4,0.4c-0.1,0.4,0.2,1,0.9,1.2
										C518,201,518.6,200.8,518.8,200.4z" />
											<path class="st28" d="M512.6,197.5c-0.6-0.2-1.3,0-1.4,0.5c-0.1,0.5,0.3,1,0.9,1.1c0.6,0.2,1.3,0,1.4-0.5
										C513.6,198.2,513.2,197.7,512.6,197.5z" />
											<path class="st28" d="M507.1,196.1c-0.7-0.1-1.3,0.1-1.4,0.6c-0.1,0.5,0.4,0.9,1,1.1c0.6,0.1,1.2-0.1,1.4-0.6
										C508.2,196.7,507.8,196.2,507.1,196.1z" />
											<path class="st28" d="M501.6,195.1c-0.7-0.1-1.3,0.2-1.3,0.7c-0.1,0.5,0.4,0.9,1.1,1c0.7,0.1,1.2-0.2,1.3-0.7
										C502.8,195.7,502.3,195.2,501.6,195.1z" />
											<path class="st28" d="M496,194.6c-0.7,0-1.2,0.3-1.3,0.8c0,0.5,0.5,0.9,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C497.2,195,496.7,194.6,496,194.6z" />
											<path class="st28" d="M490.4,194.5c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C491.6,194.9,491.1,194.5,490.4,194.5z" />
											<path class="st28" d="M559.4,207.3c-0.4,0.2-0.5,0.8-0.1,1.3c0.3,0.4,0.9,0.5,1.3,0.2c0.4-0.3,0.4-0.8,0.1-1.2
										C560.3,207.2,559.8,207.1,559.4,207.3z" />
											<path class="st28" d="M562.4,211.7c0.4,0.3,1,0.3,1.3-0.1c0.3-0.4,0.2-0.9-0.2-1.2c-0.4-0.3-0.9-0.3-1.2,0.1
										C561.9,210.8,562,211.4,562.4,211.7z" />
											<path class="st28" d="M566.9,212.6c-0.4-0.2-1-0.1-1.2,0.3c-0.2,0.4-0.1,0.9,0.4,1.2c0.5,0.2,1,0.1,1.2-0.3
										C567.5,213.3,567.3,212.8,566.9,212.6z" />
											<path class="st28" d="M570.6,214.3c-0.5-0.2-1,0-1.1,0.4c-0.2,0.4,0.1,1,0.5,1.1c0.5,0.2,1,0,1.2-0.5
										C571.3,215,571,214.5,570.6,214.3z" />
											<path class="st28" d="M575.2,216.6c0,0,0,0.1,0,0.1c-0.3,0.2-0.6,0.3-0.9,0.5c0,0-0.1,0-0.1,0c-0.5-0.1-0.8-0.6-0.7-1.1
										c0.1-0.5,0.6-0.7,1.1-0.6C575,215.7,575.3,216.1,575.2,216.6z" />
											<path class="st28" d="M562.1,202.8c0.6-0.3,1-0.8,0.8-1.2c-0.2-0.4-0.8-0.6-1.4-0.3c-0.6,0.3-1,0.8-0.8,1.3
										C560.8,202.9,561.5,203,562.1,202.8z" />
											<path class="st28" d="M568,199.6c-0.1-0.4-0.8-0.6-1.4-0.4c-0.6,0.2-1,0.8-0.9,1.2c0.2,0.4,0.8,0.6,1.4,0.4
										C567.8,200.6,568.2,200,568,199.6z" />
											<path class="st28" d="M572.4,199.1c0.6-0.2,1.1-0.7,0.9-1.1c-0.1-0.4-0.7-0.7-1.4-0.5c-0.6,0.2-1.1,0.7-0.9,1.2
										C571.2,199.1,571.8,199.3,572.4,199.1z" />
											<path class="st28" d="M577.4,196.1c-0.7,0.1-1.1,0.6-1,1.1c0.1,0.5,0.7,0.7,1.4,0.6c0.6-0.1,1.1-0.6,1-1.1
										C578.6,196.2,578,196,577.4,196.1z" />
											<path class="st28" d="M582.9,195.1c-0.7,0.1-1.1,0.6-1.1,1c0.1,0.5,0.7,0.7,1.3,0.7c0.7-0.1,1.1-0.5,1.1-1
										C584.2,195.3,583.6,195,582.9,195.1z" />
											<path class="st28" d="M588.5,194.6c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C589.7,194.9,589.2,194.5,588.5,194.6z" />
											<path class="st28" d="M594.1,194.5c-0.7,0-1.2,0.3-1.2,0.8c0,0.5,0.5,0.8,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C595.3,195,594.8,194.6,594.1,194.5z" />
										</g>
										<g>
											<path class="st29 line" d="M511.9,195.8c1.3,0.3,2.5,0.7,3.7,1c1.2,0.3,2.3,0.7,3.3,1c3.9,1.3,6.6,2.3,6.7,2.3
										c-0.1-0.1-0.7-0.4-1.7-0.9c-1.1-0.6-2.7-1.4-4.7-2.2c-1-0.4-2.1-0.8-3.2-1.3c-1.2-0.4-2.4-0.8-3.7-1.2
										c-1.3-0.4-2.6-0.8-4-1.1c-1.4-0.3-2.8-0.6-4.2-0.9c-1.4-0.2-2.9-0.4-4.3-0.5c-0.7-0.1-1.4-0.1-2.1-0.1
										c-0.7,0-1.4-0.1-2.1-0.1c-0.7,0-1.3,0-2,0c-0.3,0-0.6,0-1,0c-0.3,0-0.6,0.1-0.9,0.1c-0.6,0-1.2,0.1-1.8,0.2
										c-0.6,0.1-1.1,0.1-1.7,0.3c-0.5,0.1-1,0.2-1.5,0.3c-0.1,0-0.1,0-0.2,0c0.1,0.2,0.2,0.5,0.2,0.7c0,0,0,0,0.1,0
										c0.5,0,1-0.1,1.5-0.2c0.5-0.1,1.1-0.1,1.6-0.1c0.6,0,1.2-0.1,1.8-0.1c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,1,0
										c0.3,0,0.6,0,1,0c1.3,0,2.7,0.2,4.1,0.3c1.4,0.1,2.8,0.3,4.2,0.6c1.4,0.2,2.8,0.5,4.1,0.8
										C509.3,195.2,510.6,195.5,511.9,195.8z" />
											<path class="st29 line" d="M596.7,192.7c-0.5-0.1-1-0.2-1.5-0.3c-0.5-0.1-1.1-0.2-1.7-0.3c-0.6-0.1-1.2-0.1-1.8-0.2
										c-0.3,0-0.6-0.1-0.9-0.1c-0.3,0-0.6,0-1,0c-0.7,0-1.3,0-2,0c-0.7,0-1.4,0-2.1,0.1c-0.7,0-1.4,0.1-2.1,0.1
										c-1.4,0.1-2.8,0.3-4.3,0.5c-1.4,0.3-2.8,0.5-4.2,0.9c-1.4,0.3-2.7,0.7-4,1.1c-1.3,0.4-2.5,0.8-3.7,1.2
										c-1.2,0.4-2.2,0.8-3.2,1.3c-2,0.8-3.6,1.6-4.7,2.2c-0.6,0.3-1,0.6-1.3,0.7c-0.2-0.6-0.5-1.1-0.9-1.6
										c0.2-1.2,0.3-2.2,0.2-3.1c0-1.2-0.2-2.4-0.6-3.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.2-0.4-0.3-0.5
										c-0.3-0.5-0.6-1-0.9-1.3c-0.7-0.8-1.5-1.5-2.4-2c-0.8-0.5-1.7-0.9-2.7-1.2c-0.2-0.1-0.5-0.1-0.7-0.2l-0.1,0
										c-0.2-0.1-0.4-0.1-0.7-0.2c-0.3-0.1-0.6-0.1-1-0.2l-0.4-0.1c-0.9-0.2-1.8-0.3-2.7-0.7c-0.4-0.2-0.8-0.4-1.2-0.7
										c-0.3-0.2-0.6-0.5-1-1l-0.2-0.2l-0.7,0l-0.2,0.2c-0.3,0.4-0.6,0.7-1,1c-0.4,0.3-0.8,0.5-1.2,0.7c-0.8,0.3-1.6,0.5-2.7,0.7
										c-0.1,0-0.3,0.1-0.4,0.1c-0.3,0.1-0.6,0.1-1,0.2c-0.5,0.1-1,0.2-1.4,0.4c-1,0.3-1.9,0.7-2.7,1.2c-0.9,0.5-1.7,1.2-2.4,2
										c-0.4,0.5-0.7,0.9-1,1.3c-0.3,0.5-0.5,1-0.7,1.5c-0.4,1-0.6,2.2-0.6,3.4c0,0.9,0.1,1.9,0.2,3.1c-0.6,0.8-1.1,1.8-1.3,2.9
										c-0.2,0.7-0.2,1.4-0.2,2c0,0.7,0.1,1.3,0.3,2c0.3,1,0.7,2,1.4,3c0,0,0,0,0,0c-0.2,0.2-0.4,0.5-0.7,0.8
										c-0.2,0.2-0.3,0.4-0.5,0.6c-0.2,0.2-0.4,0.4-0.7,0.6c-0.2,0.2-0.5,0.4-0.8,0.7c-0.3,0.2-0.6,0.5-0.9,0.7
										c-0.3,0.2-0.7,0.5-1,0.7c-0.4,0.2-0.7,0.5-1.1,0.7c-0.2,0.1-0.4,0.3-0.6,0.4c-0.2,0.1-0.4,0.2-0.6,0.3
										c-0.4,0.2-0.8,0.5-1.3,0.7c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.5,0.2-0.7,0.3c-0.2,0.1-0.5,0.2-0.7,0.3
										c-0.5,0.2-1,0.4-1.5,0.6c-0.5,0.2-1,0.3-1.5,0.5c-0.5,0.2-1,0.3-1.5,0.5c-0.4,0.1-0.8,0.2-1.2,0.3c0.7,0.3,1.4,0.7,2.1,1
										c0.4-0.1,0.7-0.2,1.1-0.3c0.5-0.2,1-0.3,1.6-0.5c0.5-0.2,1-0.4,1.5-0.6c0.2-0.1,0.5-0.2,0.7-0.3c0.2-0.1,0.5-0.3,0.7-0.4
										c0.5-0.2,0.9-0.5,1.4-0.7c0.4-0.3,0.9-0.5,1.3-0.8c0.2-0.1,0.4-0.3,0.6-0.4c0.2-0.1,0.4-0.3,0.6-0.4
										c0.4-0.3,0.7-0.6,1.1-0.8c0.3-0.3,0.6-0.6,1-0.9c0.3-0.3,0.6-0.6,0.8-0.8c0.3-0.3,0.5-0.5,0.7-0.8c0.2-0.3,0.4-0.5,0.6-0.7
										c0.2-0.2,0.3-0.5,0.4-0.7c0.3-0.4,0.4-0.7,0.5-1c0.1,0.1,0.2,0.2,0.2,0.4c0.7,0.9,1.5,1.8,2.4,2.6c0.8,0.6,1.7,1.3,2.7,2
										c0.4,0.2,0.7,0.5,1.1,0.7c0.6,0.4,1.1,0.8,1.7,1.2c0.8,0.6,1.7,1.3,2.6,2c0.9,0.8,1.6,1.6,2.3,2.5c0.7,0.9,1.2,1.9,1.6,3
										l0.6,1.2l0.6-1.2c0.4-1.1,1-2.1,1.7-3c0.6-0.8,1.4-1.6,2.3-2.5c0.9-0.8,1.8-1.4,2.6-2c0.5-0.4,1-0.7,1.6-1.1
										c0.4-0.3,0.8-0.5,1.2-0.8c1.1-0.7,1.9-1.4,2.7-2c1-0.8,1.8-1.7,2.5-2.6c0,0,0.1-0.1,0.1-0.1c0.1,0.2,0.2,0.4,0.4,0.7
										c0.1,0.2,0.3,0.4,0.4,0.7c0.2,0.2,0.4,0.5,0.6,0.7c0.2,0.3,0.5,0.5,0.7,0.8c0.3,0.3,0.5,0.6,0.8,0.8c0.3,0.3,0.6,0.6,1,0.9
										c0.3,0.3,0.7,0.6,1.1,0.8c0.2,0.1,0.4,0.3,0.6,0.4c0.2,0.1,0.4,0.3,0.6,0.4c0.4,0.3,0.8,0.5,1.3,0.8
										c0.5,0.2,0.9,0.5,1.4,0.7c0.2,0.1,0.5,0.2,0.7,0.4c0.2,0.1,0.5,0.2,0.7,0.3c0.5,0.2,1,0.4,1.5,0.6c0.5,0.2,1,0.4,1.6,0.5
										c0.3,0.1,0.7,0.2,1,0.3c0.7-0.3,1.4-0.6,2-1c-0.3-0.1-0.7-0.2-1-0.3c-0.5-0.2-1-0.3-1.5-0.5c-0.5-0.2-1-0.3-1.5-0.5
										c-0.5-0.2-1-0.4-1.5-0.6c-0.2-0.1-0.5-0.2-0.7-0.3c-0.2-0.1-0.5-0.2-0.7-0.3c-0.5-0.2-0.9-0.4-1.4-0.6
										c-0.4-0.2-0.9-0.5-1.3-0.7c-0.2-0.1-0.4-0.2-0.6-0.3c-0.2-0.1-0.4-0.2-0.6-0.4c-0.4-0.2-0.8-0.5-1.1-0.7
										c-0.3-0.3-0.7-0.5-1-0.7c-0.3-0.2-0.6-0.5-0.9-0.7c-0.3-0.2-0.6-0.4-0.8-0.7c-0.2-0.2-0.5-0.4-0.7-0.6
										c-0.2-0.2-0.4-0.4-0.5-0.6c-0.2-0.3-0.4-0.5-0.6-0.7c0.7-1,1.2-2.1,1.5-3.2c0.2-0.7,0.3-1.3,0.3-2c0-0.2,0-0.6,0-1
										c0-0.3-0.1-0.6-0.2-1c-0.1-0.4-0.2-0.8-0.4-1.2c0.9-0.3,3.2-1.2,6.3-2.2c1-0.3,2.1-0.6,3.3-1c1.2-0.3,2.4-0.7,3.7-1
										c1.3-0.3,2.6-0.6,4-0.9c1.4-0.3,2.7-0.6,4.1-0.8c1.4-0.2,2.8-0.4,4.2-0.6c1.4-0.1,2.7-0.3,4.1-0.3c0.3,0,0.7,0,1,0
										c0.3,0,0.6,0,1,0c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,0.9,0c0.6,0,1.2,0,1.8,0.1c0.6,0,1.1,0,1.6,0.1c0.5,0.1,1,0.1,1.5,0.2
										c0,0,0.1,0,0.1,0c0.1-0.2,0.2-0.5,0.2-0.7C596.8,192.7,596.8,192.7,596.7,192.7z M557.7,204.9c-0.3,1-0.8,2.1-1.5,3.1
										c-0.6,0.9-1.4,1.7-2.3,2.4c-0.7,0.6-1.6,1.2-2.7,2c-0.4,0.2-0.7,0.5-1.1,0.7c-0.6,0.4-1.1,0.8-1.7,1.1
										c-0.9,0.6-1.8,1.3-2.7,2.1c-1,0.9-1.7,1.7-2.4,2.6c-0.1,0.1-0.2,0.3-0.3,0.5c0,0.1-0.1,0.1-0.1,0.2
										c-0.1,0.2-0.3,0.4-0.4,0.7c-0.1,0.3-0.3,0.5-0.4,0.8c0,0,0,0,0,0c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0.1-0.3c0-0.1,0-0.3,0-0.4
										c0,0,0-0.1,0-0.1c0-0.5,0-1,0.1-1.5c0-0.6,0-1.3,0.1-1.9c0,0,0,0,0,0c0.4,0,0.7,0,0.9,0c0.4,0,0.8-0.1,1.1-0.2
										c0.7-0.1,1.1-0.3,1.1-0.3l0.3-0.1l-0.3-0.1c0,0-0.5-0.2-1.1-0.3c-0.3-0.1-0.7-0.1-1.1-0.1c-0.3,0-0.6,0-0.9-0.1
										c0,0,0,0,0,0c0,0,0,0,0,0c0.5,0,1-0.1,1.4-0.2c0.5-0.1,0.8-0.3,0.8-0.3l0.2-0.1l-0.2-0.1c0,0-0.3-0.2-0.8-0.3
										c-0.4-0.1-0.8-0.2-1.3-0.2c0.3,0,0.6-0.1,0.8-0.2c0.3-0.1,0.6-0.3,0.6-0.3l0.1-0.1l-0.1-0.1c0,0-0.2-0.2-0.6-0.3
										c-0.2-0.1-0.5-0.2-0.8-0.2l0-2.6c0-1,0-2.1,0-3.2c0-0.5,0-1,0-1.5c0.1,0.3,0.2,0.6,0.3,1c0.2,0.6,0.4,1.3,0.7,2
										c0.4,0.8,0.8,1.5,1.3,2c0.6,0.6,1.3,1,2.1,1.2c0.9,0.2,1.8,0.1,2.5-0.4c0.8-0.5,1.3-1.5,1.3-2.6c0.1-1-0.3-1.9-1-2.6
										c-0.6-0.6-1.2-0.9-1.9-0.9c-0.1,0-0.2,0-0.3,0c-0.4,0.1-0.8,0.2-1,0.5c-0.3,0.3-0.5,0.7-0.6,1c-0.1,0.4-0.1,0.8-0.1,1.1
										c0,0.1,0,0.2,0.1,0.2c0,0.1,0,0.1,0.1,0.2l0,0.1c0.1,0.2,0.2,0.3,0.3,0.4c0.2,0.2,0.5,0.3,0.7,0.4c0.2,0,0.4,0,0.6-0.2
										c0.4-0.2,0.5-0.5,0.6-0.7c0.1-0.2,0.1-0.3,0.1-0.3l0.1-1l-0.4,1c0,0,0,0.1-0.1,0.2c0,0.1-0.2,0.3-0.5,0.4
										c-0.3,0.1-0.6,0-0.8-0.2c-0.2-0.3-0.3-0.8-0.1-1.3c0.2-0.5,0.6-0.9,1-0.9c0,0,0.1,0,0.1,0c0.4,0,0.9,0.3,1.4,0.7
										c0.2,0.2,0.4,0.5,0.5,0.8c0,0.1,0,0.1,0,0.1l0,0.1c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0,0.3,0,0.5c0,0.3-0.1,0.7-0.2,1
										c0,0.1-0.1,0.1-0.1,0.2l-0.1,0.2l-0.2,0.2c0,0-0.1,0-0.1,0.1c0,0-0.1,0-0.1,0.1c-0.4,0.3-1.1,0.4-1.7,0.3
										c-0.6-0.1-1.2-0.4-1.7-0.9c-0.4-0.4-0.8-1-1.2-1.6c-0.3-0.6-0.6-1.3-0.8-1.8c-0.4-1.1-0.7-2.1-0.9-2.7c0-0.3,0-0.6,0-0.9
										c0-0.3,0-0.6,0-0.8l0.1-0.1c0.4-0.4,0.8-0.9,1.3-1.6c0.3-0.4,0.5-0.9,0.7-1.3c0.2-0.6,0.4-1.1,0.4-1.7
										c0.1-0.6,0-1.3-0.1-1.9c-0.1-0.6-0.3-1.1-0.5-1.6l-0.1-0.2c-0.2-0.5-0.4-1-0.5-1.6c-0.1-0.3-0.1-0.5-0.1-0.7
										c0,0,0-0.1,0-0.2c0-0.1,0-0.2,0-0.2c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.2c0-0.5,0.1-0.9,0.3-1.3c0.2-0.4,0.4-0.7,0.6-1
										c0.2-0.3,0.5-0.5,0.7-0.7c0.2-0.1,0.5-0.3,0.7-0.3c0.1,0,0.2-0.1,0.3-0.1c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.2,0l1-0.2
										l-1.1-0.1c0,0-0.1,0-0.2,0c-0.1,0-0.3,0-0.5,0c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.7,0.3-1,0.6c-0.4,0.3-0.7,0.7-0.9,1.2
										c-0.3,0.5-0.5,1.1-0.5,1.7c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3c0,0.1,0,0.1,0,0.2c0,0.4,0.1,0.7,0.1,1
										c0.1,0.6,0.4,1.2,0.6,1.7l0.1,0.2c0.2,0.5,0.4,1,0.5,1.4c0.1,0.5,0.2,1,0.1,1.5c0,0.5-0.1,0.9-0.3,1.4
										c-0.1,0.4-0.3,0.8-0.5,1.2c-0.3,0.6-0.6,1.1-0.8,1.5c0-0.1,0-0.2,0-0.3c0-0.2,0-0.5,0-0.7c0-0.7,0-1.5,0-2.2
										c0-0.4,0-0.8,0-1.2c0-2.2-0.1-4.2-0.1-6c0-1.2-0.1-2.2-0.1-3c0-0.4,0-0.8,0-1.2c0-1-0.1-1.6-0.1-1.6l-0.2,0
										c0,0,0,0.6-0.1,1.6c0,0.4,0,0.8,0,1.3c0,0.8-0.1,1.8-0.1,3c-0.1,1.9-0.1,4-0.1,6c0,0.4,0,0.8,0,1.2c0,0.7,0,1.4,0,2.2
										c0,0.3,0,0.7,0,1c-0.2-0.4-0.5-0.9-0.8-1.5c-0.2-0.4-0.4-0.8-0.5-1.2c-0.2-0.5-0.3-1-0.3-1.4c0-0.5,0-1,0.1-1.5
										c0.1-0.5,0.3-0.9,0.5-1.4l0.1-0.2c0.2-0.5,0.4-1.1,0.6-1.7c0.1-0.3,0.1-0.6,0.1-1c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3
										c0-0.2,0-0.3,0-0.5c-0.1-0.6-0.2-1.2-0.5-1.7c-0.2-0.4-0.5-0.8-0.9-1.2c-0.3-0.3-0.7-0.5-1-0.6c-0.3-0.1-0.5-0.2-0.8-0.2
										c-0.2,0-0.4,0-0.5,0c-0.1,0-0.2,0-0.2,0l-1.1,0.1l1,0.2c0,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0.1,0.3,0.1
										c0.2,0.1,0.4,0.2,0.7,0.3c0.2,0.2,0.5,0.4,0.7,0.7c0.3,0.3,0.5,0.7,0.6,1c0.2,0.4,0.3,0.9,0.3,1.3c0,0.1,0,0.1,0,0.2
										c0,0,0,0.1,0,0.1c0,0.1,0,0.2,0,0.2c0,0.1,0,0.1,0,0.2c0,0.2-0.1,0.5-0.1,0.7c-0.1,0.5-0.3,1.1-0.5,1.6l-0.1,0.2
										c-0.2,0.5-0.4,1-0.5,1.6c-0.1,0.6-0.2,1.3-0.1,1.9c0.1,0.7,0.3,1.3,0.4,1.7c0.2,0.4,0.4,0.9,0.7,1.3
										c0.5,0.7,0.9,1.2,1.3,1.6c0,0,0.1,0.1,0.1,0.1c0,0.6,0,1.2,0,1.8c-0.3,0.9-0.6,1.8-0.9,2.7c-0.2,0.6-0.5,1.2-0.8,1.8
										c-0.3,0.7-0.7,1.2-1.2,1.6c-0.4,0.4-1,0.7-1.7,0.9c-0.6,0.1-1.3,0-1.7-0.3c0,0,0,0-0.1-0.1c0,0-0.1,0-0.1-0.1l-0.2-0.3
										l0-0.1c0-0.1-0.1-0.1-0.1-0.2l0,0c-0.1-0.3-0.2-0.6-0.2-1c0-0.2,0-0.4,0-0.5c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
										c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0.1-0.3,0.3-0.6,0.5-0.8c0.5-0.5,1-0.7,1.4-0.7c0.4,0,0.8,0.4,1,0.9
										c0.2,0.5,0.1,1-0.1,1.3c-0.2,0.2-0.4,0.3-0.5,0.3c-0.1,0-0.2,0-0.3-0.1c-0.3-0.1-0.5-0.4-0.5-0.4c-0.1-0.1-0.1-0.2-0.1-0.2
										l-0.4-1l0.1,1.1c0,0,0,0.1,0.1,0.3c0.1,0.2,0.3,0.5,0.6,0.7c0.2,0.1,0.4,0.2,0.6,0.2c0.3,0,0.5-0.1,0.7-0.4
										c0.1-0.1,0.2-0.2,0.3-0.4c0-0.1,0.1-0.2,0.1-0.2l0,0c0-0.1,0-0.2,0.1-0.2c0.1-0.3,0-0.7-0.1-1.1c-0.1-0.3-0.2-0.7-0.6-1
										c-0.3-0.3-0.6-0.5-1-0.5c-0.7-0.1-1.5,0.2-2.1,0.8c-0.7,0.7-1.1,1.7-1,2.6c0,1.1,0.5,2.1,1.3,2.6c0.7,0.5,1.5,0.6,2.5,0.4
										c0.8-0.2,1.5-0.6,2.1-1.2c0.5-0.5,0.9-1.2,1.3-2c0.3-0.7,0.5-1.4,0.7-2c0.1-0.3,0.2-0.6,0.3-1c0,0.1,0,0.1,0,0.2
										c0,0.4,0,0.9,0,1.3c0,0.6,0,1.2,0,1.8l0,1.6c0,0.8,0,1.6,0,2.4c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.6,0.3-0.6,0.3l-0.1,0.1
										l0.1,0.1c0,0,0.2,0.2,0.6,0.3c0.2,0.1,0.5,0.2,0.8,0.2c-0.5,0-1,0.1-1.3,0.2c-0.5,0.1-0.8,0.3-0.8,0.3l-0.2,0.1l0.2,0.1
										c0,0,0.3,0.2,0.8,0.3c0.4,0.1,0.9,0.2,1.4,0.2c0,0,0,0.1,0,0.1c-0.3,0-0.6,0-0.9,0.1c-0.4,0-0.8,0.1-1.1,0.1
										c-0.7,0.1-1.1,0.3-1.1,0.3l-0.3,0.1l0.3,0.1c0,0,0.5,0.2,1.1,0.3c0.3,0.1,0.7,0.1,1.1,0.1c0.3,0,0.6,0,0.9,0.1c0,0,0,0,0,0
										c0,1,0.1,2.1,0.1,3.2l0,0.6c0,0.1,0,0.2,0,0.3c0,0.1,0,0.3,0,0.4c-0.4-0.8-0.8-1.6-1.3-2.2c-0.7-0.9-1.5-1.8-2.4-2.6
										c-0.9-0.8-1.8-1.5-2.7-2.1c-0.5-0.4-1-0.7-1.6-1.1c-0.4-0.3-0.8-0.5-1.2-0.8c-1.1-0.7-1.9-1.3-2.6-2
										c-0.9-0.7-1.7-1.5-2.3-2.4c-0.7-1-1.2-2-1.5-3.1c-0.2-0.6-0.2-1.1-0.3-1.7c0-0.6,0-1.2,0.2-1.7c0.3-1.1,0.8-2.2,1.5-3
										c0.7-0.8,1.6-1.3,2.6-1.5c1-0.2,2.1-0.1,2.9,0.3c0.4,0.2,0.8,0.5,1.3,0.9c0.3,0.4,0.6,0.8,0.9,1.4c0.4,1.1,0.4,2.3,0,3.4
										c-0.4,1.1-1.2,1.9-2.2,2.2c-0.3,0.1-0.7,0.2-1,0.2c-0.5,0-1.2-0.1-1.8-0.7c-0.4-0.4-0.6-0.9-0.6-1.5c0-0.6,0.2-1.2,0.5-1.6
										l-0.2-0.2c-0.4,0.5-0.6,1.1-0.6,1.8c0,0.7,0.3,1.3,0.7,1.8c0.5,0.6,1.3,0.9,2.1,0.9c0.4,0,0.7-0.1,1-0.2
										c0.6-0.2,1.1-0.5,1.5-0.9c0.3-0.2,0.5-0.6,0.7-0.9l0.1-0.1c0.3-0.3,0.5-0.8,0.8-1.3c0.2-0.5,0.5-1.1,0.8-1.8
										c0.3-0.7,0.6-1.5,0.8-2.2c0.2-0.9,0.5-1.7,0.6-2.6c0.2-1.2,0.2-2.1,0-3c-0.1-0.6-0.2-1.1-0.4-1.5c-0.2-0.5-0.5-1-0.9-1.3
										c-0.7-0.8-1.8-1.1-2.7-0.9c-0.5,0.1-1,0.4-1.3,0.7c-0.4,0.3-0.7,0.7-0.9,1.2c-0.2,0.5-0.3,1-0.3,1.6c0,0.5,0.1,1,0.4,1.5
										c0.5,1,1.3,1.4,2.1,1.2c0.6-0.2,1.1-0.8,1.4-1.6c0.1-0.3,0.1-0.7,0-1c-0.1-0.2-0.1-0.3-0.2-0.4c-0.1-0.1-0.1-0.2-0.2-0.2
										l0,0c-0.3-0.2-0.6-0.3-0.9-0.2c-0.2,0-0.3,0.1-0.3,0.1l-0.8,0.6l0.9-0.4c0,0,0.1,0,0.2,0c0,0,0,0,0.1,0
										c0.1,0,0.4,0,0.6,0.3l0,0c0,0.1,0.1,0.1,0.1,0.2c0.1,0.1,0.1,0.2,0.1,0.3c0,0.2,0,0.4-0.1,0.7c-0.2,0.4-0.6,0.9-1,1
										c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0l0,0c0,0-0.1,0-0.1-0.1
										c-0.2-0.2-0.4-0.4-0.6-0.7c-0.1-0.3-0.2-0.7-0.2-1c0-0.4,0.1-0.7,0.3-1c0.2-0.3,0.4-0.6,0.6-0.8c0.3-0.2,0.6-0.4,0.9-0.5
										c0.6-0.1,1.3,0.1,1.8,0.6c0.5,0.5,0.9,1.3,1,2.2c0.1,0.8,0.1,1.7,0,2.6c-0.1,0.9-0.3,1.8-0.5,2.5c-0.2,0.9-0.4,1.6-0.6,2.2
										c-0.1,0.3-0.2,0.6-0.3,0.9c0,0,0,0,0-0.1c0-0.4,0-0.7-0.1-1c0-0.1,0-0.2-0.1-0.3c0,0,0-0.1,0-0.2c0-0.1,0-0.1,0-0.1
										c0-0.1,0-0.2-0.1-0.3c-0.4-1.2-1.3-2.2-2.4-2.7c-1-0.5-2.1-0.6-3.3-0.5c-1.1,0.2-2.2,0.7-3,1.6c-0.1,0.1-0.1,0.1-0.2,0.2
										c-0.1-1-0.1-1.9,0-2.7c0.1-1.1,0.3-2.2,0.7-3.1c0.2-0.5,0.5-1,0.7-1.4c0.3-0.5,0.6-0.9,0.9-1.2c0.4-0.4,0.7-0.7,1.1-1
										c0.4-0.3,0.8-0.6,1.2-0.8c0.7-0.4,1.6-0.7,2.6-1c0.5-0.1,0.9-0.2,1.3-0.3c0.3-0.1,0.6-0.1,0.9-0.1c0.2,0,0.3-0.1,0.5-0.1
										c0.9-0.1,1.9-0.3,2.9-0.7c0.5-0.2,0.9-0.5,1.4-0.8c0.3-0.2,0.6-0.5,0.9-0.9c0.3,0.4,0.6,0.7,0.9,0.9
										c0.4,0.3,0.9,0.6,1.4,0.8c1,0.4,1.9,0.6,2.9,0.7l0.2,0c0.4,0.1,0.8,0.1,1.1,0.2c0.2,0,0.5,0.1,0.7,0.1
										c0.2,0.1,0.4,0.1,0.7,0.2c1,0.3,1.9,0.6,2.6,1c0.4,0.2,0.8,0.4,1.2,0.8c0.3,0.3,0.7,0.6,1.1,1c0.3,0.3,0.6,0.7,0.9,1.2
										c0.1,0.2,0.2,0.3,0.3,0.5l0.1,0.2c0.1,0.2,0.2,0.5,0.3,0.7c0.4,0.9,0.7,2,0.7,3.1c0.1,0.8,0,1.6,0,2.7
										c-0.1-0.1-0.1-0.1-0.2-0.2l0,0c-0.2-0.2-0.4-0.4-0.7-0.6l-0.3-0.2l-0.4-0.2c-0.2-0.1-0.4-0.2-0.5-0.2
										c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2-0.1-0.3-0.1c-0.2,0-0.4-0.1-0.5-0.1c-0.3-0.1-0.6-0.1-0.9-0.1c-0.8,0-1.6,0.2-2.3,0.5
										c-0.5,0.2-1,0.6-1.4,1.1l-0.1,0.1c-0.2,0.2-0.4,0.4-0.5,0.7c-0.1,0.2-0.3,0.5-0.4,0.7l-0.1,0.2c-0.2,0.6-0.3,1.3-0.3,2
										c-0.1-0.3-0.2-0.6-0.3-0.9c-0.2-0.6-0.4-1.4-0.6-2.2c-0.2-0.7-0.4-1.6-0.5-2.5c-0.1-0.9-0.1-1.8,0-2.6
										c0.1-0.9,0.5-1.6,1-2.2c0.5-0.5,1.2-0.8,1.8-0.6c0.3,0.1,0.6,0.2,0.9,0.5c0.3,0.2,0.5,0.5,0.6,0.8c0.2,0.3,0.3,0.7,0.3,1
										c0,0.3-0.1,0.7-0.2,1c-0.1,0.3-0.3,0.6-0.5,0.7c0,0,0,0-0.1,0l-0.1,0l0,0c-0.1,0-0.1,0.1-0.2,0.1c0,0,0,0-0.1,0
										c0,0,0,0,0,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-0.5-0.1-0.9-0.6-1.1-1c-0.1-0.2-0.1-0.4-0.1-0.7c0-0.1,0.1-0.2,0.1-0.3
										c0-0.1,0.1-0.1,0.1-0.2l0,0c0.2-0.2,0.4-0.3,0.6-0.3c0,0,0,0,0,0c0.1,0,0.2,0,0.2,0l0.9,0.4l-0.8-0.6
										c-0.1,0-0.1-0.1-0.3-0.1c-0.3-0.1-0.7,0-0.9,0.2l0,0c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.1,0.2-0.2,0.4
										c-0.1,0.3-0.1,0.7,0,1c0.2,0.8,0.7,1.3,1.4,1.6c0.8,0.3,1.6-0.2,2.1-1.2c0.2-0.4,0.4-1,0.4-1.5c0-0.5-0.1-1-0.3-1.6
										c-0.2-0.5-0.5-0.9-0.9-1.2c-0.4-0.4-0.9-0.6-1.3-0.7c-0.2,0-0.4-0.1-0.6-0.1c-0.8,0-1.6,0.4-2.1,1
										c-0.4,0.4-0.7,0.8-0.9,1.3c-0.2,0.5-0.4,1-0.4,1.5c-0.1,0.9-0.1,1.8,0.1,3c0.1,0.9,0.4,1.8,0.6,2.6
										c0.2,0.8,0.5,1.5,0.8,2.2c0.3,0.7,0.6,1.3,0.8,1.8c0.3,0.5,0.5,1,0.8,1.3c0,0,0,0,0,0.1c0.2,0.4,0.4,0.7,0.7,0.9
										c0.4,0.4,0.9,0.7,1.5,0.9c0.3,0.1,0.7,0.2,1,0.2c0.8,0,1.6-0.3,2.1-0.9c0.4-0.5,0.7-1.1,0.7-1.8c0-0.7-0.2-1.3-0.6-1.8
										l-0.2,0.2c0.4,0.4,0.5,1,0.5,1.6c0,0.6-0.3,1.2-0.6,1.5c-0.6,0.6-1.3,0.7-1.8,0.7c-0.3,0-0.7-0.1-1-0.2
										c-0.5-0.2-0.9-0.4-1.3-0.8c-0.4-0.4-0.7-0.9-0.9-1.4c-0.4-1.1-0.4-2.4,0-3.4c0-0.1,0.1-0.1,0.1-0.2
										c0.1-0.2,0.2-0.4,0.3-0.5c0.1-0.2,0.3-0.4,0.4-0.6l0.1-0.1c0.4-0.4,0.8-0.7,1.2-0.9c0.9-0.4,1.9-0.5,2.9-0.3
										c0.2,0,0.3,0.1,0.5,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.1,0.1,0.2,0.1c0.2,0.1,0.3,0.1,0.4,0.2l0.3,0.2l0.3,0.2
										c0.2,0.1,0.4,0.4,0.6,0.5c0.7,0.8,1.2,1.8,1.5,3c0.1,0.3,0.1,0.6,0.1,0.9c0,0.3,0,0.6,0,0.9
										C557.9,203.8,557.8,204.4,557.7,204.9z" />
											<path class="st29" d="M525.2,208.1c0.3-0.4,0.3-1-0.1-1.3c-0.4-0.2-0.9-0.1-1.2,0.2c-0.3,0.4-0.3,0.9,0.1,1.2
										C524.3,208.6,524.9,208.5,525.2,208.1z" />
											<path class="st29" d="M521,209.9c-0.4,0.3-0.5,0.8-0.2,1.2c0.3,0.4,0.8,0.4,1.3,0.1c0.4-0.3,0.5-0.9,0.2-1.2
										C522,209.6,521.4,209.6,521,209.9z" />
											<path class="st29" d="M518.5,213.6c0.5-0.2,0.6-0.8,0.4-1.2c-0.2-0.4-0.8-0.5-1.2-0.3c-0.4,0.2-0.6,0.8-0.4,1.2
										C517.5,213.7,518,213.8,518.5,213.6z" />
											<path class="st29" d="M514.5,215.4c0.5-0.2,0.7-0.7,0.5-1.1c-0.2-0.4-0.7-0.6-1.1-0.4c-0.5,0.2-0.7,0.7-0.6,1.1
										C513.5,215.3,514.1,215.5,514.5,215.4z" />
											<path class="st29" d="M510.5,216.7c0.5-0.1,0.8-0.6,0.7-1.1c-0.1-0.4-0.6-0.7-1.1-0.6c-0.5,0.1-0.8,0.6-0.7,1.1
										C509.5,216.5,510,216.8,510.5,216.7z" />
											<path class="st29" d="M523.9,202c0.2-0.4-0.1-1-0.8-1.3c-0.6-0.3-1.3-0.1-1.4,0.3c-0.2,0.4,0.2,1,0.8,1.2
										C523.1,202.5,523.7,202.4,523.9,202z" />
											<path class="st29" d="M518.8,199.9c0.2-0.4-0.2-1-0.9-1.2c-0.6-0.2-1.3,0-1.4,0.4c-0.1,0.4,0.2,1,0.9,1.2
										C518,200.5,518.6,200.3,518.8,199.9z" />
											<path class="st29" d="M512.6,197c-0.6-0.2-1.3,0-1.4,0.5c-0.1,0.5,0.3,1,0.9,1.1c0.6,0.2,1.3,0,1.4-0.5
										C513.6,197.7,513.2,197.2,512.6,197z" />
											<path class="st29" d="M507.1,195.6c-0.7-0.1-1.3,0.1-1.4,0.6c-0.1,0.5,0.4,0.9,1,1.1c0.6,0.1,1.2-0.1,1.4-0.6
										C508.2,196.2,507.8,195.7,507.1,195.6z" />
											<path class="st29" d="M501.6,194.6c-0.7-0.1-1.3,0.2-1.3,0.7c-0.1,0.5,0.4,0.9,1.1,1c0.7,0.1,1.2-0.2,1.3-0.7
										C502.8,195.2,502.3,194.7,501.6,194.6z" />
											<path class="st29" d="M496,194c-0.7,0-1.2,0.3-1.3,0.8c0,0.5,0.5,0.9,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C497.2,194.5,496.7,194.1,496,194z" />
											<path class="st29" d="M490.4,194c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C491.6,194.4,491.1,194,490.4,194z" />
											<path class="st29" d="M559.4,206.8c-0.4,0.2-0.5,0.8-0.1,1.3c0.3,0.4,0.9,0.5,1.3,0.2c0.4-0.3,0.4-0.8,0.1-1.2
										C560.3,206.7,559.8,206.6,559.4,206.8z" />
											<path class="st29" d="M562.4,211.2c0.4,0.3,1,0.3,1.3-0.1c0.3-0.4,0.2-0.9-0.2-1.2c-0.4-0.3-0.9-0.3-1.2,0.1
										C561.9,210.3,562,210.9,562.4,211.2z" />
											<path class="st29" d="M566.9,212.1c-0.4-0.2-1-0.1-1.2,0.3c-0.2,0.4-0.1,0.9,0.4,1.2c0.5,0.2,1,0.1,1.2-0.3
										C567.5,212.8,567.3,212.3,566.9,212.1z" />
											<path class="st29" d="M570.6,213.8c-0.5-0.2-1,0-1.1,0.4c-0.2,0.4,0.1,1,0.5,1.1c0.5,0.2,1,0,1.2-0.5
										C571.3,214.5,571,214,570.6,213.8z" />
											<path class="st29" d="M574.5,215c-0.5-0.1-1,0.1-1.1,0.6c-0.1,0.4,0.2,0.9,0.7,1.1c0.5,0.1,1-0.1,1.1-0.6
										C575.3,215.6,575,215.2,574.5,215z" />
											<path class="st29" d="M562.1,202.3c0.6-0.3,1-0.8,0.8-1.2c-0.2-0.4-0.8-0.6-1.4-0.3c-0.6,0.3-1,0.8-0.8,1.3
										C560.8,202.4,561.5,202.5,562.1,202.3z" />
											<path class="st29" d="M568,199.1c-0.1-0.4-0.8-0.6-1.4-0.4c-0.6,0.2-1,0.8-0.9,1.2c0.2,0.4,0.8,0.6,1.4,0.4
										C567.8,200.1,568.2,199.5,568,199.1z" />
											<path class="st29" d="M572.4,198.6c0.6-0.2,1.1-0.7,0.9-1.1c-0.1-0.4-0.7-0.7-1.4-0.5c-0.6,0.2-1.1,0.7-0.9,1.2
										C571.2,198.6,571.8,198.8,572.4,198.6z" />
											<path class="st29" d="M577.4,195.6c-0.7,0.1-1.1,0.6-1,1.1c0.1,0.5,0.7,0.7,1.4,0.6c0.6-0.1,1.1-0.6,1-1.1
										C578.6,195.7,578,195.5,577.4,195.6z" />
											<path class="st29" d="M582.9,194.6c-0.7,0.1-1.1,0.6-1.1,1c0.1,0.5,0.7,0.7,1.3,0.7c0.7-0.1,1.1-0.5,1.1-1
										C584.2,194.8,583.6,194.5,582.9,194.6z" />
											<path class="st29" d="M588.5,194c-0.7,0-1.2,0.5-1.2,0.9c0,0.5,0.6,0.8,1.2,0.8c0.7,0,1.2-0.4,1.2-0.9
										C589.7,194.4,589.2,194,588.5,194z" />
											<path class="st29" d="M594.1,194c-0.7,0-1.2,0.3-1.2,0.8c0,0.5,0.5,0.8,1.2,0.9c0.7,0,1.2-0.3,1.2-0.8
										C595.3,194.5,594.8,194.1,594.1,194z" />
										</g>
									</g>
									<path class="st30 line" d="M588.8,206.1c-3.7,4.1-8.4,7.7-13.7,10.6c-0.3,0.2-0.6,0.3-0.9,0.5c-0.2,0.1-0.5,0.2-0.7,0.4
								c-0.2,0.1-0.4,0.2-0.7,0.3c-0.5,0.2-0.9,0.4-1.4,0.6c-0.2,0.1-0.4,0.2-0.7,0.3c-8.5,3.8-18.5,6-29.1,6c-10.6,0-20.5-2.2-29-6
								c-0.2-0.1-0.4-0.2-0.7-0.3c-0.5-0.2-0.9-0.4-1.4-0.7c-0.2-0.1-0.5-0.2-0.7-0.3c-11-5.5-19.3-13.9-23.1-23.7
								c-0.1-0.2-0.1-0.3-0.2-0.5c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.1-0.3-0.2-0.5c-1.2-3.5-1.9-7.2-1.9-11c0-0.4,0.1-0.9,0.4-1.3
								c0.1-0.3,0.3-0.5,0.5-0.8c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c0.5-0.4,1.1-0.8,1.9-1.3
								c-0.1,0.2-0.1,0.4-0.1,0.6c0,3.8,0.6,7.5,1.9,11c0.1,0.2,0.1,0.3,0.2,0.5c0,0.1,0,0.1,0.1,0.2c0.1,0.2,0.1,0.3,0.2,0.5
								c3.8,9.8,12.1,18.1,23.1,23.7c0.2,0.1,0.5,0.2,0.7,0.3c0.5,0.2,0.9,0.4,1.4,0.7c0.2,0.1,0.4,0.2,0.7,0.3c8.5,3.8,18.4,6,29,6
								c10.6,0,20.6-2.2,29.1-6c0.2-0.1,0.4-0.2,0.7-0.3c0.5-0.2,0.9-0.4,1.4-0.6c0.2-0.1,0.5-0.2,0.7-0.3c0.2-0.1,0.5-0.2,0.7-0.4
								c0.3-0.2,0.6-0.3,0.9-0.5C582.1,211.5,585.7,208.9,588.8,206.1z" />
									<path class="st29" d="M598.7,181.7c0,2.3-3.5,4.6-5.1,5.2c-8.2,3.3-16.7,2.6-25.3,1.7c-8.2-0.8-17.3-2.7-23.8-8.4
								c-0.3-0.3-1.6-2-2-2h-1.1c-5.6,6.6-14.8,8.9-22.9,10c-3.2,0.4-6.5,0.7-9.8,0.8c-5.9,0.1-11.7,0.2-17.3-1.6
								c-2-0.6-6.6-2.8-6.6-5.7c0-0.3,0.1-0.6,0.2-0.9c0.1-0.3,0.3-0.5,0.5-0.7c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2
								c5.3-4.7,28.3-8.2,55.8-8.2c27.9,0,51.1,3.6,56,8.4c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.7
								C598.6,181.1,598.7,181.4,598.7,181.7z" />
									<path class="st29" d="M598.7,181.2c0,2.4-3.5,4.7-5.1,5.4c-8.2,3.4-16.7,2.6-25.3,1.8c-8.2-0.8-17.3-2.8-23.8-8.6
								c-0.3-0.3-1.6-2-2-2h-1.1c-5.6,6.7-14.8,9.1-22.9,10.3c-3.2,0.5-6.5,0.7-9.8,0.8c-5.9,0.1-11.7,0.2-17.3-1.7
								c-2-0.7-6.6-2.9-6.6-5.9c0-0.3,0.1-0.6,0.2-1c0.1-0.3,0.3-0.5,0.5-0.8c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2
								c5.3-4.8,28.3-8.5,55.8-8.5c27.9,0,51.1,3.7,56,8.7c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.3,0.4,0.5,0.5,0.8
								C598.6,180.6,598.7,180.9,598.7,181.2z" />
									<path class="st31 line" d="M598.7,181.4c0,2.3-3.5,4.6-5.1,5.2c-5,2-10.1,2.5-15.2,2.4c-3.3-0.1-6.7-0.4-10.1-0.7
								c-8.2-0.8-17.3-2.7-23.8-8.4c-0.3-0.3-1.6-2-2-2h-1.1c-5.6,6.6-14.8,8.9-22.9,10c-3.2,0.4-6.5,0.7-9.8,0.8
								c-5.9,0.1-11.7,0.2-17.3-1.6c-2-0.6-6.6-2.8-6.6-5.7c0-0.3,0.1-0.6,0.2-0.9c0.1-0.3,0.3-0.5,0.5-0.8c0.1-0.1,0.1-0.2,0.2-0.2
								c0.1-0.1,0.1-0.1,0.2-0.2c5.3-4.7,28.3-8.2,55.8-8.2c10.4,0,20.1,0.5,28.5,1.4c14.1,1.5,24.4,4,27.5,7
								c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.8C598.6,180.8,598.7,181.1,598.7,181.4z" />
									<path class="st4"
										d="M598.7,181.4c0,2.3-3.5,4.6-5.1,5.2c-5,2-10.1,2.5-15.2,2.4c-2-6.2-4.8-11.8-8.1-16.6
								c14.1,1.5,24.4,4,27.5,7c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.5,0.5,0.8C598.6,180.8,598.7,181.1,598.7,181.4z" />
									<path class="st8" d="M592.6,182.3c0,1.3-3.7,2.5-6.8,3.6c-29.6,3.8-42.9-8.6-42.9-8.6h-2c-10.3,11.8-44.9,8-45.5,7.9
								c0,0,0,0,0,0c-2.1-0.9-4.9-1.9-4.9-3c0-4.6,23.7-8.4,50.9-8.4C568.6,174,592.6,177.7,592.6,182.3z" />
									<path class="st19 line" d="M568.6,175.3c1.5,1,3.1,1.6,4.7,2.4c1.4,0.7,5.2,2.8,5.1,4.7c0,0.1,0,0.1,0,0.2
								c-0.4,1.9-5.3,2.9-6.8,3.4c-1.3,0.2-2.5,0.3-3.8,0.4c5.2,0.5,11.1,0.5,18-0.4c3.1-1.1,6.8-2.3,6.8-3.6
								C592.6,179.4,582.8,176.8,568.6,175.3z" />
									<path class="st28 line" d="M592.6,182.3c0,0.7-1.2,1.5-2.8,2.1c-6.7-3.1-24.7-5.4-45-5.7c-0.8-0.6-1.4-1-1.7-1.2
								c-0.1-0.1-0.3-0.2-0.5-0.2h-1.5c-0.2,0-0.4,0.1-0.5,0.2c-0.4,0.4-0.8,0.8-1.2,1.2c-20.8,0.1-39.3,2.5-46.2,5.6
								c-1.5-0.7-2.8-1.4-2.8-2.1c0-4.6,23.7-8.4,50.9-8.4C568.6,174,592.6,177.7,592.6,182.3z" />
									<rect x="541.2" y="167" class="st20" width="1.5" height="10.4" />
									<path class="st21" d="M550.4,167.4c-0.5,1-1.1,2-1.9,2.9c-0.7,0.8-1.5,1.6-2.5,2.2c-1.4,0.8-2.7,1-4.2,1.1
								c-0.2,0-0.4,0-0.6,0c-2.5-0.6-4.5-2.1-5.8-4c-1.3-1.9-1.8-4.1-1.8-6.2c0-1.3,0.2-2.5,0.6-3.8c1-3,3.4-5.4,5.3-8
								c1.8-2.5,3.1-5.4,2.3-8.2c0,0,0,0,0,0c-0.1-0.2-0.1-0.4-0.2-0.6c0.1,0.2,0.6,0.5,0.8,0.7c2,1.8,3.8,3.9,5.3,6.2
								C551,155,553.2,161.6,550.4,167.4z" />
									<path class="st22" d="M540.7,171c-0.8-0.3-1.5-0.6-2.2-1.2c-0.7-0.6-1.3-1.4-1.7-2.2c-0.8-1.5-1-3.1-0.9-4.7
								c0.1-0.9,0.3-1.8,0.7-2.7c1-2.1,2.9-3.7,4.5-5.4c1.6-1.8,2.9-4,2.2-6.2c0.1,0.2,0.4,0.4,0.5,0.6c1.3,1.5,2.5,3.2,3.4,4.9
								c2,4.1,3.1,9.1,0.6,13.1c-0.4,0.7-1,1.4-1.6,2c-0.5,0.5-1.1,0.9-1.8,1.3c-0.3,0.2-0.7,0.3-1,0.4c-0.2,0-0.7,0-0.8,0.1
								c0.5-0.4,1-0.9,1.3-1.5c-0.6,0.4-1.2,0.7-1.8,0.9c0.1-0.5,0.1-1,0.2-1.5c-0.3,0.5-0.6,1-0.9,1.5c-0.4-0.3-0.7-0.7-1.1-1
								c0.2,0.7,0.5,1.3,1,1.9C541,171.1,540.8,171.1,540.7,171z" />
									<path class="st18"
										d="M485,180.5c0.1-0.3,0.3-0.5,0.5-0.8C485.3,180,485.1,180.3,485,180.5z" />
									<path class="st18"
										d="M485.7,179.5c-0.1,0.1-0.1,0.1-0.2,0.2C485.6,179.7,485.6,179.6,485.7,179.5z" />
									<path class="st18"
										d="M598.4,180.5c-0.1-0.3-0.3-0.5-0.5-0.8C598.1,180,598.3,180.3,598.4,180.5z" />
									<path class="st5"
										d="M597.9,179.8c0.2,0.2,0.4,0.5,0.5,0.8C598.3,180.3,598.1,180,597.9,179.8z" />
									<path class="st4" d="M598.8,182.7L598.8,182.7c0,0.9-0.1,1.8-0.2,2.7c0,0,0,0,0,0c-0.3,2.6-0.8,5-1.7,7.4
								c-0.1,0.2-0.1,0.3-0.2,0.5c0,0.1-0.1,0.1-0.1,0.2c-0.1,0.2-0.1,0.3-0.2,0.5c-1.4,3.5-3.4,6.9-5.8,10c-2.4,3-5.3,5.8-8.5,8.2
								c0,0,0,0,0,0c-0.1-3.4-0.4-6.9-0.9-10.4c-0.7-4-1.6-7.9-2.8-11.6c5.2,0.1,10.2-0.4,15.2-2.4c1.6-0.7,5.1-2.9,5.1-5.2
								c0-0.3-0.1-0.6-0.2-0.9C598.6,181.9,598.8,182.3,598.8,182.7z" />
								</g>
								<path class="st3" d="M550.4,167.4c-0.5,1-1.1,2-1.9,2.9c-0.7,0.8-1.5,1.6-2.5,2.2c-1.4,0.8-2.7,1-4.2,1.1
							c-0.1-2-1.4-4.2-1.2-6.3c0.1-1.2,0.7-2.3,1.3-3.3c0.8-1.6,1.6-3.2,2.4-4.8c0.5-1,0.9-2,1.1-3.1c0.5-2.8-0.5-5.6-1.5-8.3
							c-0.6-1.5-1.2-3-2-4.4c0,0,0,0,0,0c-0.1-0.2-0.1-0.4-0.2-0.6c0.1,0.2,0.6,0.5,0.8,0.7c2,1.8,3.8,3.9,5.3,6.2
							C551,155,553.2,161.6,550.4,167.4z" />
							</g>
							<g>
								<g>
									<g>
										<g>
											<path class="st7" d="M486.6,181.7c-2-6-3-12.2-3-18.6c0-32,26.1-58.1,58.1-58.1c32,0,58.1,26.1,58.1,58.1
										c0,6.2-1,12.2-2.8,18l-1.4-0.5c1.8-5.6,2.8-11.5,2.8-17.5c0-31.2-25.4-56.6-56.6-56.6c-31.2,0-56.6,25.4-56.6,56.6
										c0,6.2,1,12.3,3,18.1L486.6,181.7z" />
										</g>
									</g>
								</g>
								<path class="st8"
									d="M490.1,182h-4.7c0-1.3,1.1-2.4,2.4-2.4C489,179.6,490.1,180.6,490.1,182z" />
								<path class="st8"
									d="M598.2,182h-4.7c0-1.3,1.1-2.4,2.4-2.4C597.1,179.6,598.2,180.6,598.2,182z" />
							</g>
							<g>
								<path class="st8"
									d="M546.1,105.7c0,2.4-2,4.4-4.4,4.4s-4.4-2-4.4-4.4s2-4.4,4.4-4.4S546.1,103.3,546.1,105.7z" />
								<g>
									<g>
										<path class="st8" d="M535.9,106.5c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3c0-1.8,1.5-3.3,3.3-3.3
									C534.5,103.2,535.9,104.7,535.9,106.5z" />
										<path class="st8"
											d="M528.3,108c0,1.3-1,2.3-2.3,2.3s-2.3-1-2.3-2.3s1-2.3,2.3-2.3S528.3,106.7,528.3,108z" />
										<circle class="st8" cx="521" cy="109.6" r="1.8" />
									</g>
									<g>
										<path class="st8" d="M547.5,106.5c0,1.8,1.5,3.3,3.3,3.3c1.8,0,3.3-1.5,3.3-3.3c0-1.8-1.5-3.3-3.3-3.3
									C549,103.2,547.5,104.7,547.5,106.5z" />
										<circle class="st8" cx="557.4" cy="108" r="2.3" />
										<circle class="st8" cx="562.4" cy="109.6" r="1.8" />
									</g>
								</g>
							</g>
							<g>
								<path class="st8" d="M486.1,148.3c2.4,0.4,4,2.8,3.5,5.2c-0.4,2.4-2.8,4-5.2,3.5c-2.4-0.4-4-2.8-3.5-5.2
							C481.4,149.5,483.7,147.9,486.1,148.3z" />
								<g>
									<g>
										<path class="st8" d="M485,158.5c1.8,0.3,3,2.1,2.6,3.8c-0.3,1.8-2.1,3-3.8,2.6c-1.8-0.3-3-2.1-2.6-3.8
									S483.2,158.2,485,158.5z" />
										<path class="st8" d="M485.1,166.3c1.2,0.2,2.1,1.4,1.8,2.7c-0.2,1.2-1.4,2.1-2.7,1.8c-1.2-0.2-2.1-1.4-1.8-2.7
									C482.7,166.9,483.8,166.1,485.1,166.3z" />
										<path class="st8" d="M485.6,172c1,0.2,1.6,1.1,1.4,2c-0.2,1-1.1,1.6-2,1.4c-1-0.2-1.6-1.1-1.4-2
									C483.7,172.5,484.6,171.9,485.6,172z" />
									</g>
									<g>
										<path class="st8" d="M487.1,147.2c1.8,0.3,3.5-0.8,3.8-2.6c0.3-1.8-0.8-3.5-2.6-3.8c-1.8-0.3-3.5,0.8-3.8,2.6
									C484.1,145.1,485.3,146.8,487.1,147.2z" />
										<path class="st8" d="M490,139.9c1.2,0.2,2.4-0.6,2.7-1.8c0.2-1.2-0.6-2.4-1.8-2.7c-1.2-0.2-2.4,0.6-2.7,1.8
									C487.9,138.5,488.7,139.7,490,139.9z" />
										<path class="st8" d="M492.5,134.7c1,0.2,1.9-0.5,2-1.4s-0.5-1.9-1.4-2c-1-0.2-1.9,0.5-2,1.4
									C490.9,133.7,491.6,134.6,492.5,134.7z" />
									</g>
								</g>
							</g>
							<g>
								<path class="st8" d="M597.4,148.3c-2.4,0.4-4,2.8-3.5,5.2c0.4,2.4,2.8,4,5.2,3.5c2.4-0.4,4-2.8,3.5-5.2
							C602.2,149.5,599.8,147.9,597.4,148.3z" />
								<g>
									<g>
										<path class="st8" d="M598.5,158.5c-1.8,0.3-3,2.1-2.6,3.8c0.3,1.8,2.1,3,3.8,2.6c1.8-0.3,3-2.1,2.6-3.8
									C602,159.4,600.3,158.2,598.5,158.5z" />
										<path class="st8" d="M598.5,166.3c-1.2,0.2-2.1,1.4-1.8,2.7s1.4,2.1,2.7,1.8c1.2-0.2,2.1-1.4,1.8-2.7
									C600.9,166.9,599.7,166.1,598.5,166.3z" />
										<path class="st8" d="M597.9,172c-1,0.2-1.6,1.1-1.4,2c0.2,1,1.1,1.6,2,1.4c1-0.2,1.6-1.1,1.4-2
									C599.8,172.5,598.9,171.9,597.9,172z" />
									</g>
									<g>
										<path class="st8" d="M596.4,147.2c-1.8,0.3-3.5-0.8-3.8-2.6c-0.3-1.8,0.8-3.5,2.6-3.8c1.8-0.3,3.5,0.8,3.8,2.6
									C599.4,145.1,598.2,146.8,596.4,147.2z" />
										<path class="st8" d="M593.6,139.9c-1.2,0.2-2.4-0.6-2.7-1.8c-0.2-1.2,0.6-2.4,1.8-2.7c1.2-0.2,2.4,0.6,2.7,1.8
									C595.6,138.5,594.8,139.7,593.6,139.9z" />
										<path class="st8" d="M591,134.7c-1,0.2-1.9-0.5-2-1.4c-0.2-1,0.5-1.9,1.4-2c1-0.2,1.9,0.5,2,1.4
									C592.6,133.7,592,134.6,591,134.7z" />
									</g>
								</g>
							</g>
						</g>
					</g>
					<g>
						<path class="st23" d="M542.6,121.1c-21.8,0-39.6,17.8-39.6,39.6c0,21.8,17.8,39.6,39.6,39.6c21.8,0,39.6-17.8,39.6-39.6
					C582.2,138.9,564.4,121.1,542.6,121.1z M542.6,189.4c-15.8,0-28.7-12.9-28.7-28.7s12.9-28.7,28.7-28.7
					c15.8,0,28.7,12.9,28.7,28.7S558.4,189.4,542.6,189.4z" />
						<path class="st24" d="M542.6,132c-15.8,0-28.7,12.9-28.7,28.7s12.9,28.7,28.7,28.7c15.8,0,28.7-12.9,28.7-28.7
					S558.4,132,542.6,132z M542.6,178.6c-9.8,0-17.8-8-17.8-17.8s8-17.8,17.8-17.8c9.8,0,17.8,8,17.8,17.8S552.4,178.6,542.6,178.6z
					" />
						<path class="st25" d="M542.6,142.9c-9.8,0-17.8,8-17.8,17.8s8,17.8,17.8,17.8c9.8,0,17.8-8,17.8-17.8S552.4,142.9,542.6,142.9z
					 M542.6,167.7c-3.8,0-6.9-3.1-6.9-6.9s3.1-6.9,6.9-6.9c3.8,0,6.9,3.1,6.9,6.9S546.4,167.7,542.6,167.7z" />
						<path class="st26"
							d="M542.6,153.8c-3.8,0-6.9,3.1-6.9,6.9s3.1,6.9,6.9,6.9c3.8,0,6.9-3.1,6.9-6.9S546.4,153.8,542.6,153.8z" />
					</g>
				</g>
			</g>
			<g>
				<text transform="matrix(1 0 0 1 202.9057 423.9472)" class="st7 st37 st38">diwali</text>
				<text transform="matrix(1 0 0 1 333.2421 351.1288)" class="st7 st39 st40 st41">HAPPY</text>
				<path class="st7" d="M248.6,445.6v0.8c-5.1,0.6-8.8,2-9.1,3.7c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0-0.1,0h-5.5
			c0,0-0.1,0-0.1,0c0,0,0,0,0,0v0c0-0.1,0-0.1,0-0.2c0,0,0,0,0,0c-0.5-2.2-6.6-3.9-14.1-3.9c-0.1,0-0.2,0-0.3,0c0,0-0.1-0.1-0.1-0.1
			c0,0,0-0.1,0.1-0.1c0.1,0,0.2,0,0.2,0c7.5,0,13.7-1.8,14.1-4c0-0.1,0-0.1,0-0.2c0,0,0,0,0-0.1c0,0,0,0,0.1,0h5.6c0,0,0,0,0.1,0
			c0,0,0,0,0.1,0.1c0,0,0,0.1,0,0.1C239.8,443.6,243.5,445,248.6,445.6z" />
				<rect x="247" y="445.6" class="st7" width="25.9" height="0.9" />
				<path class="st7" d="M249.3,447L249.3,447c-0.4,0-0.7-0.3-0.7-0.7v-0.5c0-0.4,0.3-0.7,0.7-0.7h0c0.4,0,0.7,0.3,0.7,0.7v0.5
			C250,446.7,249.7,447,249.3,447z" />
				<path class="st7" d="M251,447L251,447c-0.4,0-0.7-0.3-0.7-0.7v-0.5c0-0.4,0.3-0.7,0.7-0.7h0c0.4,0,0.7,0.3,0.7,0.7v0.5
			C251.6,446.7,251.3,447,251,447z" />
				<path class="st7" d="M514.2,445.6v0.8c5.1,0.6,8.8,2,9.1,3.7c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0,0.1,0h5.5c0,0,0.1,0,0.1,0
			c0,0,0,0,0,0v0c0-0.1,0-0.1,0-0.2c0,0,0,0,0,0c0.5-2.2,6.6-3.9,14.1-3.9c0.1,0,0.2,0,0.3,0c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1-0.1-0.1
			c-0.1,0-0.2,0-0.2,0c-7.5,0-13.7-1.8-14.1-4c0-0.1,0-0.1,0-0.2c0,0,0,0,0-0.1c0,0,0,0-0.1,0h-5.6c0,0,0,0-0.1,0c0,0,0,0-0.1,0.1
			c0,0,0,0.1,0,0.1C523,443.6,519.3,445,514.2,445.6z" />

				<rect x="489.9" y="445.6" transform="matrix(-1 -1.224647e-16 1.224647e-16 -1 1005.6922 892.0863)"
					class="st7" width="25.9" height="0.9" />
				<path class="st7" d="M513.5,447L513.5,447c0.4,0,0.7-0.3,0.7-0.7v-0.5c0-0.4-0.3-0.7-0.7-0.7h0c-0.4,0-0.7,0.3-0.7,0.7v0.5
			C512.8,446.7,513.1,447,513.5,447z" />
				<path class="st7" d="M511.8,447L511.8,447c0.4,0,0.7-0.3,0.7-0.7v-0.5c0-0.4-0.3-0.7-0.7-0.7h0c-0.4,0-0.7,0.3-0.7,0.7v0.5
			C511.1,446.7,511.4,447,511.8,447z" />
				<text transform="matrix(1 0 0 1 279.2885 451.9071)" class="st7 st42 st43">Get An Exclusive Diwali Bonus!</text>
				<g class="st44">
					<path class="st45" d="M311.3,345.6c-0.7,4.3-4.7,7.7-9,7.7c-4.3,0-7.1-3.4-6.6-7.7c0.7-4.3,4.9-7.7,9-7.7
				C309,337.9,312,341.3,311.3,345.6z" />
					<path class="st45" d="M538.6,345.6c-0.8,4.3-4.7,7.7-9,7.7c-4.3,0-7.1-3.4-6.6-7.7c0.7-4.3,4.9-7.7,9-7.7
				C536.3,337.9,539.3,341.3,538.6,345.6z" />
					<path class="st45" d="M302.1,367.5l-11,25.6c-3.5-0.7-7-1.4-10.5-2c0.6-1.2,1.1-2.3,1.6-3.2c0.1-0.2,0.2-0.4,0.3-0.5l7.2-18.4
				c1.5-3.6-1.1-6.9-1.9-7.9l10.3-0.2C304.2,360.9,304.2,363,302.1,367.5z" />
					<path class="st45" d="M306.4,307.3c-4.9,4.6-30.7,51.4-44.4,80.4c-4-0.7-8-1.3-12-1.9c4-6.9,8.2-14.4,12.3-22.1
				c-7.7-7.5-22.9,5.1-33.6,19.9c-4.4-0.2-8.8-0.4-13.1-0.3c2.3-4.3,5.1-8.3,7.9-11.8c10.5-12.2,26.8-18.7,40.3-10.9
				c9-17.1,17.3-34.3,21.7-44.4c3.6-8.4,6.8-10.3,12.7-9.8C300.8,306.8,303.6,307.7,306.4,307.3z" />
					<path class="st45" d="M311.3,345.6c-0.7,4.3-4.7,7.7-9,7.7c-4.3,0-7.1-3.4-6.6-7.7c0.7-4.3,4.9-7.7,9-7.7
				C309,337.9,312,341.3,311.3,345.6z" />
					<path class="st45" d="M334.3,375.2c0,0-7.9,16-11.5,23.5c-4.2-0.6-8.4-1.3-12.5-2c1.6-2.9,3.1-5.9,4.5-8.8c0.3-0.7,0.6-1.1,1-1.5
				l1.3-2.5c3.7-7.3,7.7-14.8,10.5-20.6c1.5-3,3.7-3.9,7.3-3.9h11.4C342,362.6,339.4,364.9,334.3,375.2z" />
					<path class="st45" d="M378.8,359.4c-1.5,1.5-5.3,3-7.5,6.9c-3.9,6.6-5.4,9.4-10.3,19.7c-1,2-4,8.5-6.3,15.4
				c-3.2-0.1-6.5-0.2-9.7-0.5c-0.2,0-0.4,0-0.7,0c-1.1-0.1-2.1-0.1-3.2-0.2c8.3-13.8,16.1-31.1,19.1-37.3c1.3-3,3.7-3.9,7.1-3.9
				H378.8z" />
					<path class="st45" d="M398.1,360.8c-0.2,0.2-0.4,0.6-0.4,0.9c-2,6.7-6.8,24.3-14.5,39.1c-1.5,0.1-3.1,0.2-4.6,0.3
				c2.2-4.1,4.2-8.5,6-13.2c-2.6-5.8-3-13.7-1.5-18.8C388,352.5,401.5,352.7,398.1,360.8z" />
					<path class="st45" d="M439.4,363.8c-8.4,4.7-18.2,15.8-24.9,26.8c-0.7,1.2-2.1,3.8-3.6,6.9c-3.9,0.7-7.7,1.2-11.6,1.7
				c2-8.3,6.6-17.9,14.7-27.6c11.2-13.3,32.8-20.2,43.5-8.6c2.6,2.8,1.1,6-2.1,5.4C453.2,361.5,446.3,360,439.4,363.8z" />
					<path class="st45" d="M461.3,373.1c-1.9,2-5.7,7.8-9.2,14.6c-5.2,1.3-10.3,2.8-15.5,4.1c1.4-2.5,2.8-5,4.1-7.5
				c4.1-7.9,6.8-12.4,12.7-12C455.9,372.6,458.7,373.7,461.3,373.1z" />
					<path class="st45" d="M498.6,321.2c-5.8,9.7-11.9,21.9-17.1,34.4c-0.6,1.4-1.1,2.7-1.7,4.1c-0.6,1.4-1.1,2.8-1.7,4.2
				c-0.2,0.6-0.5,1.2-0.7,1.8c-0.3,0.8-0.6,1.6-0.9,2.4c-0.2,0.6-0.5,1.3-0.7,1.9c-0.3,0.7-0.5,1.5-0.8,2.2
				c-0.2,0.5-0.4,1.1-0.6,1.6c-0.3,1-0.7,1.9-1,2.9c-0.6,1.8-1.2,3.7-1.8,5.5c-0.2,0.7-0.4,1.3-0.6,1.9c3-0.4,5.9-0.6,8.9-0.7
				c1.6,0,3.2,0,4.9,0c0.4-0.4,0.8-0.8,1.2-1.3c0.5-0.6,1.1-1.1,1.6-1.7c0.4-0.4,0.8-0.9,1.3-1.4c0.5-0.6,1-1.1,1.5-1.7
				c0.4-0.5,0.9-1,1.3-1.5c0.9-1.1,1.8-2.2,2.7-3.3c0.4-0.5,0.7-0.9,1.1-1.4c1.2-1.6,2.4-3.2,3.6-4.8c0.8-1.1,1.5-2.1,2.2-3.2
				c0.4-0.5,0.7-1.1,1.1-1.6c0.7-1.1,1.4-2.2,2.1-3.3c1.2-1.9,2.3-3.7,3.4-5.6c0.2-0.3,0.4-0.7,0.6-1c0.9-1.7,1.9-3.3,2.7-5
				c0.3-0.6,0.6-1.1,0.9-1.7c0.3-0.5,0.6-1.1,0.9-1.7c0.6-1.1,1.2-2.3,1.7-3.4c0.2-0.5,0.5-1,0.7-1.6c0.3-0.5,0.5-1.1,0.8-1.7
				c0.2-0.4,0.4-0.9,0.6-1.3c0.2-0.5,0.5-1,0.7-1.5c0.3-0.7,0.6-1.4,0.9-2.1C532.2,301.5,511.9,298.9,498.6,321.2z M515.9,328.7
				c-7.3,17.4-20.8,39.6-34.1,53.1c5.8-15,20.4-48.6,29.6-61.5C521.5,305.8,519.6,320.1,515.9,328.7z" />
					<path class="st45" d="M529.4,367.5l-9.5,22.2c-3.3-0.9-6.6-1.8-10-2.6L517,369c1.5-3.6-1.1-6.9-1.9-7.9l10.3-0.2
				C531.4,360.9,531.4,363,529.4,367.5z" />
					<path class="st45" d="M538.6,345.6c-0.8,4.3-4.7,7.7-9,7.7c-4.3,0-7.1-3.4-6.6-7.7c0.7-4.3,4.9-7.7,9-7.7
				C536.3,337.9,539.3,341.3,538.6,345.6z" />
					<path class="st45" d="M544.5,389.6c-0.8,1.8-1.8,3.9-2.9,6.2c-1-0.3-2.1-0.6-3.1-0.9c1.2-2.4,2.5-4.7,3.6-7.1
				C543.6,384.6,546.2,385.9,544.5,389.6z" />
				</g>
			</g>
		</g>

	</svg>
	<section class="ccnatraining_section">
	    
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-8">
					<!-- <img src="/images/happy_diwali_vector_design.jpg" alt="bg-diwali-img" > -->
					<div class="main-wrapper-bomb d-flex justify-content-center" style="">
			  <div class="card300 text-visible2" style="display: none;">
        <div class="main300">
          <div class="co-img300">
            <img
              src="https://octanetworks.com/img/logo.png"
              alt=""
            />
          </div>
          <div class="vertical300"></div>
          <div class="content25">
            <h2>Claim Your</h2>
         
		<span id="coupon-code2"> </span><span> OFF</span>
		 <p>Valid till 30 Nov 2023</p>
	  </div>
            <!--<h1>10% <span>Coupon</span></h1>-->
           
          </div>
      
        <div class="copy-button300" style="display:none;">
          <input id="copyvalue" type="text" readonly value="" />
          <button onclick="copyIt()" class="copybtn">COPY</button>
        </div>
      </div>
						<input type="checkbox" id="ignitor">
						<label for="ignitor" class="ignitor"></label>
	
						<div class="wrapper wrapper150">
							<div class="item">
								<div class="spreader" id="fireworksContainer">
	
	
								</div>
							</div>
							<div class="item item4"></div>
							<div class="item item5 main">
								<div class="fc-main">
									<div class="fc-tui"></div>
									<div class="fc-tui-long">
										<div class="spark"></div>
									</div>
								</div>
							</div>
							<div class="item"></div>
							<div class="item"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="trail-form" id="trail-form">
						<div class="form">
							<h4 class="textgreen font-size-22">Claim Coupon Now</h4>
							<form action="<?php echo Yii::app()->createUrl("main/forms/diwalisale2023"); ?>"
								method="post" role="form" class="contactForm">
								<div class="form-group form-row">
									<input type="name" name="name" class="form-control" placeholder="Name"
										required="required">
								</div>
								<div class="form-group form-row">
									<input type="email" name="myemail" class="form-control" placeholder="Email"
										required="required">
								</div>
								<div class="form-group form-row">
									<input type="tel" id="mobile-number3" class="form-control" name="phone"
										placeholder="+91" required="required">
								</div>
								<div class="form-group form-row">
									<input readonly type="text" name="couponcode" class="form-control" placeholder="Your Coupon Code">
							
									<input type="hidden" name="coupondescription" id="coupon-description">
								
								</div>
								<div class=" ">
									<div class="g-recaptcha" data-sitekey="
														<?=Yii::app()->params['siteKey']?>">
									</div>
									<input type="hidden" name="type" value="Request your Trial class" />
								</div>
								<div class="form-group form-row">
									<button type="submit" title="Submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
     
   



		</div>
		
		 <script>
		 
const $couponCodes = [
  { description: "10%", code: "CODE1" },
  { description: "20%", code: "CODE2" },
  { description: "30%", code: "CODE3" },
];

document.addEventListener('DOMContentLoaded', function() {

  const checkbox = document.getElementById('ignitor');
  checkbox.addEventListener('change', function() {
    if (checkbox.checked) {
         
      const animationDuration = 4000; // 6s + 8s
      const wrapper = document.querySelector('.main-wrapper-bomb .wrapper150');

      

      // After the animation duration (in milliseconds), hide the wrapper
      setTimeout(() => {
          // Apply the animation
      wrapper.style.cssText = " top: -100%; position: absolute; display: none; ";
      }, 4000);
      checkbox.style.display = 'none';


      setTimeout(function() {
        const randomNumber = Math.random();
        let randomCoupon;

        if (randomNumber < 0.8) {
          // 30% off coupon with 10% probability
          randomCoupon = $couponCodes[0];
        } else if (randomNumber < 0.2) {
          // 20% off coupon with 40% probability
          randomCoupon = $couponCodes[2];
        } else {
          // 10% off coupon with 50% probability
          randomCoupon = $couponCodes[1];
          
        }

        // Set the coupon code description in the hidden input field
                document.getElementById('coupon-description').value = randomCoupon.description;
        // Display the additional coupon information
        const couponCode2 = document.getElementById('coupon-code2');
        couponCode2.textContent = `${randomCoupon.description}`;
        document.getElementById('copyvalue').value = randomCoupon.code;
        document.querySelector('.text-visible2').style.cssText = "display: block; ";
        document.querySelector('input[name="couponcode"]').value = randomCoupon.code;
        document.querySelector('input[name="coupondescription"]').value = randomCoupon.description;
      }, animationDuration);
    }
  });
});

let copybtn = document.querySelector(".copybtn");


function copyIt(){
  let copyInput = document.querySelector('#copyvalue');

  copyInput.select();

  document.execCommand("copy");

  copybtn.textContent = "COPIED";
}


</script>
		<script>

			// JavaScript to generate the HTML dynamically
			const numItems = 600; // Number of fireworks items

			const container = document.getElementById('fireworksContainer');

			for (let i = 1; i <= numItems; i++) {
				const span = document.createElement('span');
				span.className = `item item_${i}`;
				container.appendChild(span);
			}

		</script>
		<style>
		.icon-bar {display: none !important;}
.whatsapp_icon{display: none !important;}
iframe#chat-widget-minimized {
    display: none !important;
}

.fadeOutAnimation {
  animation: fadeOut 2s forwards; /* Adjust the duration to match your animation */
}
		/* Add your animation class */
@keyframes fadeOut {
  from { opacity: 1; }
  to { opacity: 0; }
}

		.text-visible2{
		    animation: fadeIn 3s ease-in both;}
		    @keyframes fadeIn {
	from {
		opacity: 0;
		position:absolute;
		transition: ease-in 3s;
    transform: scale3d(0.2, 0.2, 0.2);
	}
	to {
		opacity: 1;
		position:relative;
		transition: ease-in 3s;
    transform: scale3d(1, 1, 1);
	}

}
.card300 {
    width: 400px;
    height: 152px;
    border-radius: 5px;
    box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2);
    background-color: #fff;
    padding: 16px 10px;
    /*position: relative;*/
}

.main300,
.copy-button300 {
  display: flex;
  justify-content: space-between;
  padding: 0 20px;
  align-items: center;
}
.co-img300 {
    /*margin-left: 15px;*/
}
.card300::after {
  position: absolute;
  content: "";
  height: 40px;
  right: -20px;
  border-radius: 40px;
  z-index: 1;
  top: 70px;
  background-color: #4484be;
  width: 40px;
}

.card300::before {
  position: absolute;
  content: "";
  height: 40px;
  left: -20px;
  border-radius: 40px;
  z-index: 1;
  top: 70px;
  background-color: #4484be;
  width: 40px;
}

.co-img300 img {
  width: 100%;
  height: 70px;
}
.vertical300 {
  border-left: 4px dotted black;
  height: 120px;
  position: relative;
  left: 0%;
}

.content25 span#coupon-code2 {
  font-size: 28px;
  font-weight: 500;
  margin: 10px 0 0 0px;
  color: #565656;
}

.content25 span {
  font-size: 18px;
}
.content25 h2 {
  font-size: 18px;
  margin: 10px 0 0 0px;
  color: #565656;
  text-transform: uppercase;
}

.content25 p {
  font-size: 16px;
  color: #696969;
  padding: 5px 0;
  /*margin-left: -20px;*/
}

.copy-button300 {
  margin: 4px 0 0px 0;
  height: 40px;
  border-radius: 4px;
  padding: 0 5px;
  border: 1px solid #e1e1e1;
}

.copy-button300 input {
  width: 100%;
  height: 100%;
  border: none;
  outline: none;
  font-size: 15px;
}

.copy-button300 button {
  padding: 5px 20px;
  background-color: #dc143c;
  color: #fff;
  border: 1px solid transparent;
}


			:root {
				--width: 70px;
				--tui-dia: 50px;
				--tui-w: 4px;
				--tui-rpos: -0.7em;
				--tui-long-h: 14em;
				--ig-time: 2s;
			}

			*,
			*::after,
			*::before {
				box-sizing: border-box;
			}

			.wrapper {
				height: 600px;
				width: 600px;
				display: grid;
				grid-template-columns: 1fr 4fr 1fr;
				grid-template-rows: 1fr 4fr 1fr;
				grid-gap: 1px;
			
			}

			@keyframes tat {
				0% {
					grid-template-columns: 1fr 4fr 1fr;
					grid-template-rows: 1fr 4fr 1fr;
				}

				30% {
					grid-template-columns: 1fr 1fr 1fr;
					grid-template-rows: 1fr 1fr 1fr;
				}

				70%,
				100% {
					grid-template-columns: 0fr 4fr 0fr;
					grid-template-rows: 0fr 2fr 0fr;
				}
			}

			.item {
				border-radius: 10px;
			}

			.item1 {
				grid-column-start: 1;
				grid-column-end: 4;
			}

			.item7 {
				grid-column-start: 1;
				grid-column-end: 4;
			}

			.item5 {
				grid-column-start: 2;
				grid-column-end: 2;
				grid-row-start: 2;
			}

			.main {
				display: flex;
				justify-content: center;
				align-items: center;
			}

			label {
				position: absolute;
				height: 100%;
				width: 100%;
				z-index: 10;
			}

			label::after {
				content: "Tap anywhere to lit the cracker!";
				font: 100 20px "Arial";
				position: relative;
				color: #fff;
				text-align: center;
				display: inline-block;
				width: 100%;
			}

			#ignitor {
				position: absolute;
				top: 50px;
				left: 99999%;
				display: none;
			}

			input[type=checkbox]:checked~.wrapper {
				animation: tat 4s cubic-bezier(1, 0.1, 0.1, 1) both;
			}

			input[type=checkbox]:checked~.wrapper .fc-main {
				animation: resize 3s cubic-bezier(0.79, 0.14, 0.15, 0.86) both;
			}

			input[type=checkbox]:checked~.wrapper .fc-main .fc-tui {
				animation: curved-tui var(--ig-time) forwards;
			}

			input[type=checkbox]:checked~.wrapper .fc-main .fc-tui-long {
				animation: tui-on-fire var(--ig-time) linear forwards;
			}

			input[type=checkbox]:checked~.wrapper .fc-main .spark {
				animation: spark-fire 1s forwards;
			}

			input[type=checkbox]:checked~.wrapper .spreader {
				animation: fade-out calc(var(--ig-time) + 2s) 9s both;
			}

			input[type=checkbox]:checked~.wrapper .spreader::after {}

			input[type=checkbox]:checked~.wrapper .spreader>* {
				animation-fill-mode: both;
				display: inline-block;
				position: fixed;
				transform-origin: center;
				transform: translate(-50%, -50%);
			}

			input[type=checkbox]:checked~.wrapper .spreader .item {
				animation-timing-function: cubic-bezier(0.2, 0.5, 0.2, 1);
				background: gold;
				height: 4px;
				width: 4px;
				animation-delay: calc(var(--ig-time) + 1s);
				box-shadow: 0 0 5px orange;
				animation-duration: 2s;
			}

			input[type=checkbox]:checked~.wrapper .spreader .item_s {
				animation-timing-function: cubic-bezier(0.1, 0.3, 0.8, 1);
				animation-delay: calc(var(--ig-time) + 2s);
				background: orangered;
				box-shadow: 0 0 10px yellow;
				height: 2px;
				width: 2px;
				animation-duration: 2s;
			}

			input[type=checkbox]:checked~.wrapper .spreader .item_b {
				animation-timing-function: cubic-bezier(0.6, 1, 0.2, 1);
				animation-delay: calc(var(--ig-time) + 4s);
				animation-duration: 6s;
				background: pink;
				box-shadow: 0 0 10px yellow;
				height: 2px;
				width: 2px;
			}

			input[type=checkbox]:checked~.wrapper .item_1 {
				animation-name: blow_1;
			}

			@keyframes blow_1 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 39vw;
					top: 63vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_2 {
				animation-name: blow_2;
			}

			@keyframes blow_2 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 64vw;
					top: 6vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_3 {
				animation-name: blow_3;
			}

			@keyframes blow_3 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 71vw;
					top: 43vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_4 {
				animation-name: blow_4;
			}

			@keyframes blow_4 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 27vw;
					top: 79vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_5 {
				animation-name: blow_5;
			}

			@keyframes blow_5 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 64vw;
					top: 78vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_6 {
				animation-name: blow_6;
			}

			@keyframes blow_6 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 44vw;
					top: 86vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_7 {
				animation-name: blow_7;
			}

			@keyframes blow_7 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 80vw;
					top: 64vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_8 {
				animation-name: blow_8;
			}

			@keyframes blow_8 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 100vw;
					top: 44vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_9 {
				animation-name: blow_9;
			}

			@keyframes blow_9 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 56vw;
					top: 47vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_10 {
				animation-name: blow_10;
			}

			@keyframes blow_10 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 15vw;
					top: 74vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_11 {
				animation-name: blow_11;
			}

			@keyframes blow_11 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 15vw;
					top: 42vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_12 {
				animation-name: blow_12;
			}

			@keyframes blow_12 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 37vw;
					top: 47vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_13 {
				animation-name: blow_13;
			}

			@keyframes blow_13 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 97vw;
					top: 74vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_14 {
				animation-name: blow_14;
			}

			@keyframes blow_14 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 90vw;
					top: 81vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_15 {
				animation-name: blow_15;
			}

			@keyframes blow_15 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 64vw;
					top: 1vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_16 {
				animation-name: blow_16;
			}

			@keyframes blow_16 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 46vw;
					top: 16vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_17 {
				animation-name: blow_17;
			}

			@keyframes blow_17 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 97vw;
					top: 21vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_18 {
				animation-name: blow_18;
			}

			@keyframes blow_18 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 5vw;
					top: 59vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_19 {
				animation-name: blow_19;
			}

			@keyframes blow_19 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 16vw;
					top: 25vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_20 {
				animation-name: blow_20;
			}

			@keyframes blow_20 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 73vw;
					top: 16vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_21 {
				animation-name: blow_21;
			}

			@keyframes blow_21 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 23vw;
					top: 31vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_22 {
				animation-name: blow_22;
			}

			@keyframes blow_22 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 81vw;
					top: 18vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_23 {
				animation-name: blow_23;
			}

			@keyframes blow_23 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 46vw;
					top: 34vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_24 {
				animation-name: blow_24;
			}

			@keyframes blow_24 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 75vw;
					top: 21vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_25 {
				animation-name: blow_25;
			}

			@keyframes blow_25 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 79vw;
					top: 49vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_26 {
				animation-name: blow_26;
			}

			@keyframes blow_26 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 15vw;
					top: 72vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_27 {
				animation-name: blow_27;
			}

			@keyframes blow_27 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 86vw;
					top: 48vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_28 {
				animation-name: blow_28;
			}

			@keyframes blow_28 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 80vw;
					top: 69vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_29 {
				animation-name: blow_29;
			}

			@keyframes blow_29 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 64vw;
					top: 31vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_30 {
				animation-name: blow_30;
			}

			@keyframes blow_30 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 27vw;
					top: 63vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_31 {
				animation-name: blow_31;
			}

			@keyframes blow_31 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 96vw;
					top: 3vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_32 {
				animation-name: blow_32;
			}

			@keyframes blow_32 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 34vw;
					top: 38vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_33 {
				animation-name: blow_33;
			}

			@keyframes blow_33 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 83vw;
					top: 71vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_34 {
				animation-name: blow_34;
			}

			@keyframes blow_34 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 15vw;
					top: 16vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_35 {
				animation-name: blow_35;
			}

			@keyframes blow_35 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 56vw;
					top: 45vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_36 {
				animation-name: blow_36;
			}

			@keyframes blow_36 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 51vw;
					top: 90vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_37 {
				animation-name: blow_37;
			}

			@keyframes blow_37 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 86vw;
					top: 48vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_38 {
				animation-name: blow_38;
			}

			@keyframes blow_38 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 42vw;
					top: 46vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_39 {
				animation-name: blow_39;
			}

			@keyframes blow_39 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 38vw;
					top: 47vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_40 {
				animation-name: blow_40;
			}

			@keyframes blow_40 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 59vw;
					top: 52vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_41 {
				animation-name: blow_41;
			}

			@keyframes blow_41 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 60vw;
					top: 33vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_42 {
				animation-name: blow_42;
			}

			@keyframes blow_42 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 50vw;
					top: 1vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_43 {
				animation-name: blow_43;
			}

			@keyframes blow_43 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 57vw;
					top: 86vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_44 {
				animation-name: blow_44;
			}

			@keyframes blow_44 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 50vw;
					top: 4vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_45 {
				animation-name: blow_45;
			}

			@keyframes blow_45 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 16vw;
					top: 64vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_46 {
				animation-name: blow_46;
			}

			@keyframes blow_46 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 89vw;
					top: 86vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_47 {
				animation-name: blow_47;
			}

			@keyframes blow_47 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 10vw;
					top: 39vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_48 {
				animation-name: blow_48;
			}

			@keyframes blow_48 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 90vw;
					top: 80vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_49 {
				animation-name: blow_49;
			}

			@keyframes blow_49 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 45vw;
					top: 58vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_50 {
				animation-name: blow_50;
			}

			@keyframes blow_50 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 17vw;
					top: 40vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_51 {
				animation-name: blow_51;
			}

			@keyframes blow_51 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 76vw;
					top: 74vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_52 {
				animation-name: blow_52;
			}

			@keyframes blow_52 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 74vw;
					top: 17vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_53 {
				animation-name: blow_53;
			}

			@keyframes blow_53 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 49vw;
					top: 56vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_54 {
				animation-name: blow_54;
			}

			@keyframes blow_54 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 90vw;
					top: 41vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_55 {
				animation-name: blow_55;
			}

			@keyframes blow_55 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 83vw;
					top: 55vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_56 {
				animation-name: blow_56;
			}

			@keyframes blow_56 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 57vw;
					top: 51vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_57 {
				animation-name: blow_57;
			}

			@keyframes blow_57 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 15vw;
					top: 30vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_58 {
				animation-name: blow_58;
			}

			@keyframes blow_58 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 15vw;
					top: 34vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_59 {
				animation-name: blow_59;
			}

			@keyframes blow_59 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 48vw;
					top: 42vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_60 {
				animation-name: blow_60;
			}

			@keyframes blow_60 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 27vw;
					top: 66vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_61 {
				animation-name: blow_61;
			}

			@keyframes blow_61 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 87vw;
					top: 62vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_62 {
				animation-name: blow_62;
			}

			@keyframes blow_62 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 55vw;
					top: 65vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_63 {
				animation-name: blow_63;
			}

			@keyframes blow_63 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 88vw;
					top: 26vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_64 {
				animation-name: blow_64;
			}

			@keyframes blow_64 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 97vw;
					top: 30vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_65 {
				animation-name: blow_65;
			}

			@keyframes blow_65 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 27vw;
					top: 18vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_66 {
				animation-name: blow_66;
			}

			@keyframes blow_66 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 4vw;
					top: 53vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_67 {
				animation-name: blow_67;
			}

			@keyframes blow_67 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 53vw;
					top: 65vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_68 {
				animation-name: blow_68;
			}

			@keyframes blow_68 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 54vw;
					top: 60vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_69 {
				animation-name: blow_69;
			}

			@keyframes blow_69 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 20vw;
					top: 19vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_70 {
				animation-name: blow_70;
			}

			@keyframes blow_70 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 73vw;
					top: 50vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_71 {
				animation-name: blow_71;
			}

			@keyframes blow_71 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 24vw;
					top: 62vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_72 {
				animation-name: blow_72;
			}

			@keyframes blow_72 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 70vw;
					top: 24vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_73 {
				animation-name: blow_73;
			}

			@keyframes blow_73 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 15vw;
					top: 76vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_74 {
				animation-name: blow_74;
			}

			@keyframes blow_74 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 5vw;
					top: 79vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_75 {
				animation-name: blow_75;
			}

			@keyframes blow_75 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 96vw;
					top: 26vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_76 {
				animation-name: blow_76;
			}

			@keyframes blow_76 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 50vw;
					top: 63vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_77 {
				animation-name: blow_77;
			}

			@keyframes blow_77 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 43vw;
					top: 53vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_78 {
				animation-name: blow_78;
			}

			@keyframes blow_78 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 100vw;
					top: 13vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_79 {
				animation-name: blow_79;
			}

			@keyframes blow_79 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 16vw;
					top: 3vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_80 {
				animation-name: blow_80;
			}

			@keyframes blow_80 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 39vw;
					top: 37vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_81 {
				animation-name: blow_81;
			}

			@keyframes blow_81 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 14vw;
					top: 40vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_82 {
				animation-name: blow_82;
			}

			@keyframes blow_82 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 72vw;
					top: 17vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_83 {
				animation-name: blow_83;
			}

			@keyframes blow_83 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 27vw;
					top: 85vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_84 {
				animation-name: blow_84;
			}

			@keyframes blow_84 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 85vw;
					top: 61vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_85 {
				animation-name: blow_85;
			}

			@keyframes blow_85 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 97vw;
					top: 13vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_86 {
				animation-name: blow_86;
			}

			@keyframes blow_86 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 64vw;
					top: 10vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_87 {
				animation-name: blow_87;
			}

			@keyframes blow_87 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 10vw;
					top: 40vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_88 {
				animation-name: blow_88;
			}

			@keyframes blow_88 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 26vw;
					top: 84vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_89 {
				animation-name: blow_89;
			}

			@keyframes blow_89 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 14vw;
					top: 9vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_90 {
				animation-name: blow_90;
			}

			@keyframes blow_90 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 85vw;
					top: 6vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_91 {
				animation-name: blow_91;
			}

			@keyframes blow_91 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 35vw;
					top: 7vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_92 {
				animation-name: blow_92;
			}

			@keyframes blow_92 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 20vw;
					top: 69vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_93 {
				animation-name: blow_93;
			}

			@keyframes blow_93 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 63vw;
					top: 27vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_94 {
				animation-name: blow_94;
			}

			@keyframes blow_94 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 40vw;
					top: 40vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_95 {
				animation-name: blow_95;
			}

			@keyframes blow_95 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 82vw;
					top: 73vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_96 {
				animation-name: blow_96;
			}

			@keyframes blow_96 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 40vw;
					top: 69vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_97 {
				animation-name: blow_97;
			}

			@keyframes blow_97 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 10vw;
					top: 84vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_98 {
				animation-name: blow_98;
			}

			@keyframes blow_98 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 76vw;
					top: 8vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_99 {
				animation-name: blow_99;
			}

			@keyframes blow_99 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 11vw;
					top: 73vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_100 {
				animation-name: blow_100;
			}

			@keyframes blow_100 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 83vw;
					top: 63vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_101 {
				animation-name: blow_101;
			}

			@keyframes blow_101 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 40vw;
					top: 10vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_102 {
				animation-name: blow_102;
			}

			@keyframes blow_102 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 35vw;
					top: 1vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_103 {
				animation-name: blow_103;
			}

			@keyframes blow_103 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 87vw;
					top: 37vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_104 {
				animation-name: blow_104;
			}

			@keyframes blow_104 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 86vw;
					top: 82vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_105 {
				animation-name: blow_105;
			}

			@keyframes blow_105 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 98vw;
					top: 80vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_106 {
				animation-name: blow_106;
			}

			@keyframes blow_106 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 18vw;
					top: 55vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_107 {
				animation-name: blow_107;
			}

			@keyframes blow_107 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 56vw;
					top: 65vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_108 {
				animation-name: blow_108;
			}

			@keyframes blow_108 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 95vw;
					top: 17vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_109 {
				animation-name: blow_109;
			}

			@keyframes blow_109 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 2vw;
					top: 68vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_110 {
				animation-name: blow_110;
			}

			@keyframes blow_110 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 39vw;
					top: 49vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_111 {
				animation-name: blow_111;
			}

			@keyframes blow_111 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 53vw;
					top: 46vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_112 {
				animation-name: blow_112;
			}

			@keyframes blow_112 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 28vw;
					top: 34vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_113 {
				animation-name: blow_113;
			}

			@keyframes blow_113 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 80vw;
					top: 5vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_114 {
				animation-name: blow_114;
			}

			@keyframes blow_114 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 46vw;
					top: 59vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_115 {
				animation-name: blow_115;
			}

			@keyframes blow_115 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 76vw;
					top: 76vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_116 {
				animation-name: blow_116;
			}

			@keyframes blow_116 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 28vw;
					top: 64vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_117 {
				animation-name: blow_117;
			}

			@keyframes blow_117 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 32vw;
					top: 69vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_118 {
				animation-name: blow_118;
			}

			@keyframes blow_118 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 60vw;
					top: 61vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_119 {
				animation-name: blow_119;
			}

			@keyframes blow_119 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 23vw;
					top: 79vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_120 {
				animation-name: blow_120;
			}

			@keyframes blow_120 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 65vw;
					top: 8vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_121 {
				animation-name: blow_121;
			}

			@keyframes blow_121 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 17vw;
					top: 8vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_122 {
				animation-name: blow_122;
			}

			@keyframes blow_122 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 37vw;
					top: 81vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_123 {
				animation-name: blow_123;
			}

			@keyframes blow_123 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 95vw;
					top: 44vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_124 {
				animation-name: blow_124;
			}

			@keyframes blow_124 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 7vw;
					top: 32vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_125 {
				animation-name: blow_125;
			}

			@keyframes blow_125 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 43vw;
					top: 69vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_126 {
				animation-name: blow_126;
			}

			@keyframes blow_126 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 9vw;
					top: 55vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_127 {
				animation-name: blow_127;
			}

			@keyframes blow_127 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 60vw;
					top: 27vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_128 {
				animation-name: blow_128;
			}

			@keyframes blow_128 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 98vw;
					top: 14vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_129 {
				animation-name: blow_129;
			}

			@keyframes blow_129 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 66vw;
					top: 47vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_130 {
				animation-name: blow_130;
			}

			@keyframes blow_130 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 67vw;
					top: 65vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_131 {
				animation-name: blow_131;
			}

			@keyframes blow_131 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 51vw;
					top: 24vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_132 {
				animation-name: blow_132;
			}

			@keyframes blow_132 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 92vw;
					top: 4vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_133 {
				animation-name: blow_133;
			}

			@keyframes blow_133 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 7vw;
					top: 69vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_134 {
				animation-name: blow_134;
			}

			@keyframes blow_134 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 12vw;
					top: 27vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_135 {
				animation-name: blow_135;
			}

			@keyframes blow_135 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 2vw;
					top: 32vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_136 {
				animation-name: blow_136;
			}

			@keyframes blow_136 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 75vw;
					top: 38vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_137 {
				animation-name: blow_137;
			}

			@keyframes blow_137 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 24vw;
					top: 43vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_138 {
				animation-name: blow_138;
			}

			@keyframes blow_138 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 94vw;
					top: 49vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_139 {
				animation-name: blow_139;
			}

			@keyframes blow_139 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 48vw;
					top: 25vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_140 {
				animation-name: blow_140;
			}

			@keyframes blow_140 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 49vw;
					top: 66vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_141 {
				animation-name: blow_141;
			}

			@keyframes blow_141 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 43vw;
					top: 41vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_142 {
				animation-name: blow_142;
			}

			@keyframes blow_142 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 76vw;
					top: 23vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_143 {
				animation-name: blow_143;
			}

			@keyframes blow_143 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 31vw;
					top: 61vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_144 {
				animation-name: blow_144;
			}

			@keyframes blow_144 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 76vw;
					top: 17vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_145 {
				animation-name: blow_145;
			}

			@keyframes blow_145 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 19vw;
					top: 8vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_146 {
				animation-name: blow_146;
			}

			@keyframes blow_146 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 30vw;
					top: 66vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_147 {
				animation-name: blow_147;
			}

			@keyframes blow_147 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 1vw;
					top: 25vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_148 {
				animation-name: blow_148;
			}

			@keyframes blow_148 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 59vw;
					top: 19vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_149 {
				animation-name: blow_149;
			}

			@keyframes blow_149 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 88vw;
					top: 9vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_150 {
				animation-name: blow_150;
			}

			@keyframes blow_150 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 95vw;
					top: 46vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_151 {
				animation-name: blow_151;
			}

			@keyframes blow_151 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 97vw;
					top: 13vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_152 {
				animation-name: blow_152;
			}

			@keyframes blow_152 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 19vw;
					top: 78vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_153 {
				animation-name: blow_153;
			}

			@keyframes blow_153 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 6vw;
					top: 63vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_154 {
				animation-name: blow_154;
			}

			@keyframes blow_154 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 96vw;
					top: 16vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_155 {
				animation-name: blow_155;
			}

			@keyframes blow_155 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 88vw;
					top: 82vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_156 {
				animation-name: blow_156;
			}

			@keyframes blow_156 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 13vw;
					top: 52vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_157 {
				animation-name: blow_157;
			}

			@keyframes blow_157 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 7vw;
					top: 30vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_158 {
				animation-name: blow_158;
			}

			@keyframes blow_158 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 42vw;
					top: 83vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_159 {
				animation-name: blow_159;
			}

			@keyframes blow_159 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 33vw;
					top: 15vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_160 {
				animation-name: blow_160;
			}

			@keyframes blow_160 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 78vw;
					top: 53vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_161 {
				animation-name: blow_161;
			}

			@keyframes blow_161 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 39vw;
					top: 4vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_162 {
				animation-name: blow_162;
			}

			@keyframes blow_162 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 38vw;
					top: 36vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_163 {
				animation-name: blow_163;
			}

			@keyframes blow_163 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 39vw;
					top: 81vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_164 {
				animation-name: blow_164;
			}

			@keyframes blow_164 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 80vw;
					top: 76vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_165 {
				animation-name: blow_165;
			}

			@keyframes blow_165 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 64vw;
					top: 76vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_166 {
				animation-name: blow_166;
			}

			@keyframes blow_166 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 79vw;
					top: 84vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_167 {
				animation-name: blow_167;
			}

			@keyframes blow_167 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 53vw;
					top: 7vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_168 {
				animation-name: blow_168;
			}

			@keyframes blow_168 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 16vw;
					top: 80vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_169 {
				animation-name: blow_169;
			}

			@keyframes blow_169 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 72vw;
					top: 10vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_170 {
				animation-name: blow_170;
			}

			@keyframes blow_170 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 61vw;
					top: 16vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_171 {
				animation-name: blow_171;
			}

			@keyframes blow_171 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 79vw;
					top: 2vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_172 {
				animation-name: blow_172;
			}

			@keyframes blow_172 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 38vw;
					top: 75vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_173 {
				animation-name: blow_173;
			}

			@keyframes blow_173 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 36vw;
					top: 74vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_174 {
				animation-name: blow_174;
			}

			@keyframes blow_174 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 76vw;
					top: 71vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_175 {
				animation-name: blow_175;
			}

			@keyframes blow_175 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 72vw;
					top: 77vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_176 {
				animation-name: blow_176;
			}

			@keyframes blow_176 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 68vw;
					top: 74vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_177 {
				animation-name: blow_177;
			}

			@keyframes blow_177 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 55vw;
					top: 14vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_178 {
				animation-name: blow_178;
			}

			@keyframes blow_178 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 43vw;
					top: 46vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_179 {
				animation-name: blow_179;
			}

			@keyframes blow_179 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 7vw;
					top: 40vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_180 {
				animation-name: blow_180;
			}

			@keyframes blow_180 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 67vw;
					top: 82vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_181 {
				animation-name: blow_181;
			}

			@keyframes blow_181 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 95vw;
					top: 69vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_182 {
				animation-name: blow_182;
			}

			@keyframes blow_182 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 56vw;
					top: 47vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_183 {
				animation-name: blow_183;
			}

			@keyframes blow_183 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 49vw;
					top: 57vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_184 {
				animation-name: blow_184;
			}

			@keyframes blow_184 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 5vw;
					top: 60vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_185 {
				animation-name: blow_185;
			}

			@keyframes blow_185 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 19vw;
					top: 74vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_186 {
				animation-name: blow_186;
			}

			@keyframes blow_186 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 29vw;
					top: 62vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_187 {
				animation-name: blow_187;
			}

			@keyframes blow_187 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 16vw;
					top: 19vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_188 {
				animation-name: blow_188;
			}

			@keyframes blow_188 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 31vw;
					top: 2vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_189 {
				animation-name: blow_189;
			}

			@keyframes blow_189 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 17vw;
					top: 31vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_190 {
				animation-name: blow_190;
			}

			@keyframes blow_190 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 33vw;
					top: 59vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_191 {
				animation-name: blow_191;
			}

			@keyframes blow_191 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 23vw;
					top: 41vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_192 {
				animation-name: blow_192;
			}

			@keyframes blow_192 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 83vw;
					top: 58vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_193 {
				animation-name: blow_193;
			}

			@keyframes blow_193 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 88vw;
					top: 51vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_194 {
				animation-name: blow_194;
			}

			@keyframes blow_194 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 50vw;
					top: 4vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_195 {
				animation-name: blow_195;
			}

			@keyframes blow_195 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 29vw;
					top: 29vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_196 {
				animation-name: blow_196;
			}

			@keyframes blow_196 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 8vw;
					top: 8vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_197 {
				animation-name: blow_197;
			}

			@keyframes blow_197 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 47vw;
					top: 88vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_198 {
				animation-name: blow_198;
			}

			@keyframes blow_198 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 46vw;
					top: 43vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_199 {
				animation-name: blow_199;
			}

			@keyframes blow_199 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 80vw;
					top: 64vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_200 {
				animation-name: blow_200;
			}

			@keyframes blow_200 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10% {
					opacity: 1;
				}

				100% {
					left: 98vw;
					top: 22vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_201 {
				animation-name: blow_201;
			}

			@keyframes blow_201 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 90vw;
					top: 3vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_202 {
				animation-name: blow_202;
			}

			@keyframes blow_202 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 26vw;
					top: 31vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_203 {
				animation-name: blow_203;
			}

			@keyframes blow_203 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 73vw;
					top: 2vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_204 {
				animation-name: blow_204;
			}

			@keyframes blow_204 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 99vw;
					top: 76vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_205 {
				animation-name: blow_205;
			}

			@keyframes blow_205 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 70vw;
					top: 2vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_206 {
				animation-name: blow_206;
			}

			@keyframes blow_206 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 40vw;
					top: 21vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_207 {
				animation-name: blow_207;
			}

			@keyframes blow_207 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 6vw;
					top: 66vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_208 {
				animation-name: blow_208;
			}

			@keyframes blow_208 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 60vw;
					top: 12vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_209 {
				animation-name: blow_209;
			}

			@keyframes blow_209 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 95vw;
					top: 73vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_210 {
				animation-name: blow_210;
			}

			@keyframes blow_210 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 81vw;
					top: 85vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_211 {
				animation-name: blow_211;
			}

			@keyframes blow_211 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 8vw;
					top: 8vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_212 {
				animation-name: blow_212;
			}

			@keyframes blow_212 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 86vw;
					top: 42vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_213 {
				animation-name: blow_213;
			}

			@keyframes blow_213 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 57vw;
					top: 59vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_214 {
				animation-name: blow_214;
			}

			@keyframes blow_214 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 62vw;
					top: 57vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_215 {
				animation-name: blow_215;
			}

			@keyframes blow_215 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 39vw;
					top: 55vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_216 {
				animation-name: blow_216;
			}

			@keyframes blow_216 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 86vw;
					top: 14vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_217 {
				animation-name: blow_217;
			}

			@keyframes blow_217 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 33vw;
					top: 45vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_218 {
				animation-name: blow_218;
			}

			@keyframes blow_218 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 32vw;
					top: 48vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_219 {
				animation-name: blow_219;
			}

			@keyframes blow_219 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 50vw;
					top: 20vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_220 {
				animation-name: blow_220;
			}

			@keyframes blow_220 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 57vw;
					top: 25vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_221 {
				animation-name: blow_221;
			}

			@keyframes blow_221 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 51vw;
					top: 84vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_222 {
				animation-name: blow_222;
			}

			@keyframes blow_222 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 12vw;
					top: 78vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_223 {
				animation-name: blow_223;
			}

			@keyframes blow_223 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 53vw;
					top: 33vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_224 {
				animation-name: blow_224;
			}

			@keyframes blow_224 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 97vw;
					top: 14vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_225 {
				animation-name: blow_225;
			}

			@keyframes blow_225 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 73vw;
					top: 33vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_226 {
				animation-name: blow_226;
			}

			@keyframes blow_226 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 9vw;
					top: 74vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_227 {
				animation-name: blow_227;
			}

			@keyframes blow_227 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 31vw;
					top: 86vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_228 {
				animation-name: blow_228;
			}

			@keyframes blow_228 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 40vw;
					top: 64vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_229 {
				animation-name: blow_229;
			}

			@keyframes blow_229 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 77vw;
					top: 33vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_230 {
				animation-name: blow_230;
			}

			@keyframes blow_230 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 60vw;
					top: 89vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_231 {
				animation-name: blow_231;
			}

			@keyframes blow_231 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 32vw;
					top: 38vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_232 {
				animation-name: blow_232;
			}

			@keyframes blow_232 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 78vw;
					top: 59vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_233 {
				animation-name: blow_233;
			}

			@keyframes blow_233 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 25vw;
					top: 86vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_234 {
				animation-name: blow_234;
			}

			@keyframes blow_234 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 54vw;
					top: 54vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_235 {
				animation-name: blow_235;
			}

			@keyframes blow_235 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 69vw;
					top: 40vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_236 {
				animation-name: blow_236;
			}

			@keyframes blow_236 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 30vw;
					top: 81vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_237 {
				animation-name: blow_237;
			}

			@keyframes blow_237 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 23vw;
					top: 61vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_238 {
				animation-name: blow_238;
			}

			@keyframes blow_238 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 10vw;
					top: 8vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_239 {
				animation-name: blow_239;
			}

			@keyframes blow_239 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 46vw;
					top: 61vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_240 {
				animation-name: blow_240;
			}

			@keyframes blow_240 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 2vw;
					top: 47vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_241 {
				animation-name: blow_241;
			}

			@keyframes blow_241 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 59vw;
					top: 2vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_242 {
				animation-name: blow_242;
			}

			@keyframes blow_242 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 10vw;
					top: 29vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_243 {
				animation-name: blow_243;
			}

			@keyframes blow_243 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 47vw;
					top: 29vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_244 {
				animation-name: blow_244;
			}

			@keyframes blow_244 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 87vw;
					top: 44vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_245 {
				animation-name: blow_245;
			}

			@keyframes blow_245 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 12vw;
					top: 14vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_246 {
				animation-name: blow_246;
			}

			@keyframes blow_246 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 73vw;
					top: 10vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_247 {
				animation-name: blow_247;
			}

			@keyframes blow_247 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 59vw;
					top: 6vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_248 {
				animation-name: blow_248;
			}

			@keyframes blow_248 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 51vw;
					top: 6vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_249 {
				animation-name: blow_249;
			}

			@keyframes blow_249 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 97vw;
					top: 86vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_250 {
				animation-name: blow_250;
			}

			@keyframes blow_250 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 43vw;
					top: 32vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_251 {
				animation-name: blow_251;
			}

			@keyframes blow_251 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 42vw;
					top: 82vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_252 {
				animation-name: blow_252;
			}

			@keyframes blow_252 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 80vw;
					top: 9vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_253 {
				animation-name: blow_253;
			}

			@keyframes blow_253 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 51vw;
					top: 41vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_254 {
				animation-name: blow_254;
			}

			@keyframes blow_254 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 16vw;
					top: 6vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_255 {
				animation-name: blow_255;
			}

			@keyframes blow_255 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 49vw;
					top: 59vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_256 {
				animation-name: blow_256;
			}

			@keyframes blow_256 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 47vw;
					top: 42vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_257 {
				animation-name: blow_257;
			}

			@keyframes blow_257 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 70vw;
					top: 31vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_258 {
				animation-name: blow_258;
			}

			@keyframes blow_258 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 68vw;
					top: 53vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_259 {
				animation-name: blow_259;
			}

			@keyframes blow_259 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 7vw;
					top: 80vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_260 {
				animation-name: blow_260;
			}

			@keyframes blow_260 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 59vw;
					top: 58vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_261 {
				animation-name: blow_261;
			}

			@keyframes blow_261 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 99vw;
					top: 58vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_262 {
				animation-name: blow_262;
			}

			@keyframes blow_262 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 64vw;
					top: 88vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_263 {
				animation-name: blow_263;
			}

			@keyframes blow_263 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 100vw;
					top: 79vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_264 {
				animation-name: blow_264;
			}

			@keyframes blow_264 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 70vw;
					top: 37vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_265 {
				animation-name: blow_265;
			}

			@keyframes blow_265 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 80vw;
					top: 64vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_266 {
				animation-name: blow_266;
			}

			@keyframes blow_266 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 72vw;
					top: 52vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_267 {
				animation-name: blow_267;
			}

			@keyframes blow_267 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 83vw;
					top: 24vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_268 {
				animation-name: blow_268;
			}

			@keyframes blow_268 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 97vw;
					top: 77vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_269 {
				animation-name: blow_269;
			}

			@keyframes blow_269 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 2vw;
					top: 53vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_270 {
				animation-name: blow_270;
			}

			@keyframes blow_270 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 21vw;
					top: 75vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_271 {
				animation-name: blow_271;
			}

			@keyframes blow_271 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 74vw;
					top: 36vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_272 {
				animation-name: blow_272;
			}

			@keyframes blow_272 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 60vw;
					top: 3vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_273 {
				animation-name: blow_273;
			}

			@keyframes blow_273 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 82vw;
					top: 67vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_274 {
				animation-name: blow_274;
			}

			@keyframes blow_274 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 24vw;
					top: 68vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_275 {
				animation-name: blow_275;
			}

			@keyframes blow_275 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 100vw;
					top: 77vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_276 {
				animation-name: blow_276;
			}

			@keyframes blow_276 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 24vw;
					top: 43vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_277 {
				animation-name: blow_277;
			}

			@keyframes blow_277 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 38vw;
					top: 38vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_278 {
				animation-name: blow_278;
			}

			@keyframes blow_278 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 6vw;
					top: 3vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_279 {
				animation-name: blow_279;
			}

			@keyframes blow_279 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 43vw;
					top: 5vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_280 {
				animation-name: blow_280;
			}

			@keyframes blow_280 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 10vw;
					top: 90vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_281 {
				animation-name: blow_281;
			}

			@keyframes blow_281 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 50vw;
					top: 61vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_282 {
				animation-name: blow_282;
			}

			@keyframes blow_282 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 34vw;
					top: 48vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_283 {
				animation-name: blow_283;
			}

			@keyframes blow_283 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 91vw;
					top: 48vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_284 {
				animation-name: blow_284;
			}

			@keyframes blow_284 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 4vw;
					top: 12vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_285 {
				animation-name: blow_285;
			}

			@keyframes blow_285 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 64vw;
					top: 25vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_286 {
				animation-name: blow_286;
			}

			@keyframes blow_286 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 48vw;
					top: 27vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_287 {
				animation-name: blow_287;
			}

			@keyframes blow_287 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 9vw;
					top: 3vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_288 {
				animation-name: blow_288;
			}

			@keyframes blow_288 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 37vw;
					top: 52vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_289 {
				animation-name: blow_289;
			}

			@keyframes blow_289 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 82vw;
					top: 38vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_290 {
				animation-name: blow_290;
			}

			@keyframes blow_290 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 13vw;
					top: 14vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_291 {
				animation-name: blow_291;
			}

			@keyframes blow_291 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 69vw;
					top: 19vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_292 {
				animation-name: blow_292;
			}

			@keyframes blow_292 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 78vw;
					top: 41vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_293 {
				animation-name: blow_293;
			}

			@keyframes blow_293 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 49vw;
					top: 82vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_294 {
				animation-name: blow_294;
			}

			@keyframes blow_294 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 21vw;
					top: 65vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_295 {
				animation-name: blow_295;
			}

			@keyframes blow_295 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 75vw;
					top: 59vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_296 {
				animation-name: blow_296;
			}

			@keyframes blow_296 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 47vw;
					top: 46vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_297 {
				animation-name: blow_297;
			}

			@keyframes blow_297 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 67vw;
					top: 84vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_298 {
				animation-name: blow_298;
			}

			@keyframes blow_298 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 30vw;
					top: 38vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_299 {
				animation-name: blow_299;
			}

			@keyframes blow_299 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 45vw;
					top: 43vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_300 {
				animation-name: blow_300;
			}

			@keyframes blow_300 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				100% {
					left: 3vw;
					top: 62vh;
					opacity: 1;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_301 {
				animation-name: blow_301;
			}

			@keyframes blow_301 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 5vw;
					top: 34vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_302 {
				animation-name: blow_302;
			}

			@keyframes blow_302 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 12vw;
					top: 89vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_303 {
				animation-name: blow_303;
			}

			@keyframes blow_303 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 80vw;
					top: 11vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_304 {
				animation-name: blow_304;
			}

			@keyframes blow_304 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 9vw;
					top: 28vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_305 {
				animation-name: blow_305;
			}

			@keyframes blow_305 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 43vw;
					top: 69vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_306 {
				animation-name: blow_306;
			}

			@keyframes blow_306 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 79vw;
					top: 82vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_307 {
				animation-name: blow_307;
			}

			@keyframes blow_307 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 21vw;
					top: 57vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_308 {
				animation-name: blow_308;
			}

			@keyframes blow_308 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 60vw;
					top: 34vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_309 {
				animation-name: blow_309;
			}

			@keyframes blow_309 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 72vw;
					top: 75vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_310 {
				animation-name: blow_310;
			}

			@keyframes blow_310 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 44vw;
					top: 32vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_311 {
				animation-name: blow_311;
			}

			@keyframes blow_311 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 15vw;
					top: 34vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_312 {
				animation-name: blow_312;
			}

			@keyframes blow_312 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 27vw;
					top: 44vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_313 {
				animation-name: blow_313;
			}

			@keyframes blow_313 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 87vw;
					top: 98vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_314 {
				animation-name: blow_314;
			}

			@keyframes blow_314 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 11vw;
					top: 87vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_315 {
				animation-name: blow_315;
			}

			@keyframes blow_315 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 96vw;
					top: 84vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_316 {
				animation-name: blow_316;
			}

			@keyframes blow_316 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 96vw;
					top: 18vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_317 {
				animation-name: blow_317;
			}

			@keyframes blow_317 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 84vw;
					top: 84vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_318 {
				animation-name: blow_318;
			}

			@keyframes blow_318 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 53vw;
					top: 43vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_319 {
				animation-name: blow_319;
			}

			@keyframes blow_319 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 20vw;
					top: 92vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_320 {
				animation-name: blow_320;
			}

			@keyframes blow_320 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 9vw;
					top: 77vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_321 {
				animation-name: blow_321;
			}

			@keyframes blow_321 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 30vw;
					top: 69vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_322 {
				animation-name: blow_322;
			}

			@keyframes blow_322 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 14vw;
					top: 40vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_323 {
				animation-name: blow_323;
			}

			@keyframes blow_323 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 57vw;
					top: 40vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_324 {
				animation-name: blow_324;
			}

			@keyframes blow_324 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 73vw;
					top: 67vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_325 {
				animation-name: blow_325;
			}

			@keyframes blow_325 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 71vw;
					top: 59vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_326 {
				animation-name: blow_326;
			}

			@keyframes blow_326 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 45vw;
					top: 26vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_327 {
				animation-name: blow_327;
			}

			@keyframes blow_327 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 34vw;
					top: 51vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_328 {
				animation-name: blow_328;
			}

			@keyframes blow_328 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 73vw;
					top: 96vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_329 {
				animation-name: blow_329;
			}

			@keyframes blow_329 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 78vw;
					top: 18vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_330 {
				animation-name: blow_330;
			}

			@keyframes blow_330 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 65vw;
					top: 62vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_331 {
				animation-name: blow_331;
			}

			@keyframes blow_331 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 1vw;
					top: 6vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_332 {
				animation-name: blow_332;
			}

			@keyframes blow_332 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 88vw;
					top: 57vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_333 {
				animation-name: blow_333;
			}

			@keyframes blow_333 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 80vw;
					top: 33vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_334 {
				animation-name: blow_334;
			}

			@keyframes blow_334 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 37vw;
					top: 42vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_335 {
				animation-name: blow_335;
			}

			@keyframes blow_335 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 35vw;
					top: 68vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_336 {
				animation-name: blow_336;
			}

			@keyframes blow_336 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 3vw;
					top: 86vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_337 {
				animation-name: blow_337;
			}

			@keyframes blow_337 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 42vw;
					top: 49vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_338 {
				animation-name: blow_338;
			}

			@keyframes blow_338 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 46vw;
					top: 34vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_339 {
				animation-name: blow_339;
			}

			@keyframes blow_339 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 1vw;
					top: 82vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_340 {
				animation-name: blow_340;
			}

			@keyframes blow_340 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 87vw;
					top: 6vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_341 {
				animation-name: blow_341;
			}

			@keyframes blow_341 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 54vw;
					top: 76vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_342 {
				animation-name: blow_342;
			}

			@keyframes blow_342 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 29vw;
					top: 36vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_343 {
				animation-name: blow_343;
			}

			@keyframes blow_343 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 65vw;
					top: 9vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_344 {
				animation-name: blow_344;
			}

			@keyframes blow_344 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 29vw;
					top: 27vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_345 {
				animation-name: blow_345;
			}

			@keyframes blow_345 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 78vw;
					top: 33vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_346 {
				animation-name: blow_346;
			}

			@keyframes blow_346 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 92vw;
					top: 27vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_347 {
				animation-name: blow_347;
			}

			@keyframes blow_347 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 30vw;
					top: 9vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_348 {
				animation-name: blow_348;
			}

			@keyframes blow_348 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 14vw;
					top: 84vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_349 {
				animation-name: blow_349;
			}

			@keyframes blow_349 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 61vw;
					top: 64vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_350 {
				animation-name: blow_350;
			}

			@keyframes blow_350 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 24vw;
					top: 98vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_351 {
				animation-name: blow_351;
			}

			@keyframes blow_351 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 66vw;
					top: 74vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_352 {
				animation-name: blow_352;
			}

			@keyframes blow_352 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 29vw;
					top: 6vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_353 {
				animation-name: blow_353;
			}

			@keyframes blow_353 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 8vw;
					top: 31vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_354 {
				animation-name: blow_354;
			}

			@keyframes blow_354 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 85vw;
					top: 21vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_355 {
				animation-name: blow_355;
			}

			@keyframes blow_355 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 97vw;
					top: 2vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_356 {
				animation-name: blow_356;
			}

			@keyframes blow_356 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 9vw;
					top: 3vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_357 {
				animation-name: blow_357;
			}

			@keyframes blow_357 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 31vw;
					top: 98vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_358 {
				animation-name: blow_358;
			}

			@keyframes blow_358 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 33vw;
					top: 54vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_359 {
				animation-name: blow_359;
			}

			@keyframes blow_359 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 68vw;
					top: 10vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_360 {
				animation-name: blow_360;
			}

			@keyframes blow_360 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 34vw;
					top: 58vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_361 {
				animation-name: blow_361;
			}

			@keyframes blow_361 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 23vw;
					top: 85vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_362 {
				animation-name: blow_362;
			}

			@keyframes blow_362 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 32vw;
					top: 7vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_363 {
				animation-name: blow_363;
			}

			@keyframes blow_363 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 35vw;
					top: 64vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_364 {
				animation-name: blow_364;
			}

			@keyframes blow_364 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 70vw;
					top: 76vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_365 {
				animation-name: blow_365;
			}

			@keyframes blow_365 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 12vw;
					top: 67vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_366 {
				animation-name: blow_366;
			}

			@keyframes blow_366 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 6vw;
					top: 73vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_367 {
				animation-name: blow_367;
			}

			@keyframes blow_367 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 72vw;
					top: 32vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_368 {
				animation-name: blow_368;
			}

			@keyframes blow_368 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 82vw;
					top: 66vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_369 {
				animation-name: blow_369;
			}

			@keyframes blow_369 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 96vw;
					top: 29vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_370 {
				animation-name: blow_370;
			}

			@keyframes blow_370 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 44vw;
					top: 54vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_371 {
				animation-name: blow_371;
			}

			@keyframes blow_371 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 24vw;
					top: 99vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_372 {
				animation-name: blow_372;
			}

			@keyframes blow_372 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 53vw;
					top: 83vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_373 {
				animation-name: blow_373;
			}

			@keyframes blow_373 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 96vw;
					top: 66vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_374 {
				animation-name: blow_374;
			}

			@keyframes blow_374 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 81vw;
					top: 60vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_375 {
				animation-name: blow_375;
			}

			@keyframes blow_375 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 27vw;
					top: 49vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_376 {
				animation-name: blow_376;
			}

			@keyframes blow_376 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 95vw;
					top: 13vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_377 {
				animation-name: blow_377;
			}

			@keyframes blow_377 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 88vw;
					top: 22vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_378 {
				animation-name: blow_378;
			}

			@keyframes blow_378 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 94vw;
					top: 42vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_379 {
				animation-name: blow_379;
			}

			@keyframes blow_379 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 42vw;
					top: 4vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_380 {
				animation-name: blow_380;
			}

			@keyframes blow_380 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 12vw;
					top: 86vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_381 {
				animation-name: blow_381;
			}

			@keyframes blow_381 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 83vw;
					top: 9vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_382 {
				animation-name: blow_382;
			}

			@keyframes blow_382 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 22vw;
					top: 33vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_383 {
				animation-name: blow_383;
			}

			@keyframes blow_383 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 99vw;
					top: 36vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_384 {
				animation-name: blow_384;
			}

			@keyframes blow_384 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 6vw;
					top: 2vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_385 {
				animation-name: blow_385;
			}

			@keyframes blow_385 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 53vw;
					top: 67vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_386 {
				animation-name: blow_386;
			}

			@keyframes blow_386 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 83vw;
					top: 29vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_387 {
				animation-name: blow_387;
			}

			@keyframes blow_387 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 45vw;
					top: 73vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_388 {
				animation-name: blow_388;
			}

			@keyframes blow_388 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 81vw;
					top: 35vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_389 {
				animation-name: blow_389;
			}

			@keyframes blow_389 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 77vw;
					top: 17vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_390 {
				animation-name: blow_390;
			}

			@keyframes blow_390 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 91vw;
					top: 18vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_391 {
				animation-name: blow_391;
			}

			@keyframes blow_391 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 34vw;
					top: 59vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_392 {
				animation-name: blow_392;
			}

			@keyframes blow_392 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 54vw;
					top: 40vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_393 {
				animation-name: blow_393;
			}

			@keyframes blow_393 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 97vw;
					top: 63vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_394 {
				animation-name: blow_394;
			}

			@keyframes blow_394 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 35vw;
					top: 89vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_395 {
				animation-name: blow_395;
			}

			@keyframes blow_395 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 68vw;
					top: 26vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_396 {
				animation-name: blow_396;
			}

			@keyframes blow_396 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 1vw;
					top: 47vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_397 {
				animation-name: blow_397;
			}

			@keyframes blow_397 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 76vw;
					top: 69vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_398 {
				animation-name: blow_398;
			}

			@keyframes blow_398 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 20vw;
					top: 60vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_399 {
				animation-name: blow_399;
			}

			@keyframes blow_399 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 5vw;
					top: 77vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_400 {
				animation-name: blow_400;
			}

			@keyframes blow_400 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 91vw;
					top: 25vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_401 {
				animation-name: blow_401;
			}

			@keyframes blow_401 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 93vw;
					top: 6vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_402 {
				animation-name: blow_402;
			}

			@keyframes blow_402 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 2vw;
					top: 66vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_403 {
				animation-name: blow_403;
			}

			@keyframes blow_403 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 36vw;
					top: 27vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_404 {
				animation-name: blow_404;
			}

			@keyframes blow_404 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 64vw;
					top: 13vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_405 {
				animation-name: blow_405;
			}

			@keyframes blow_405 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 94vw;
					top: 31vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_406 {
				animation-name: blow_406;
			}

			@keyframes blow_406 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 96vw;
					top: 14vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_407 {
				animation-name: blow_407;
			}

			@keyframes blow_407 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 59vw;
					top: 7vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_408 {
				animation-name: blow_408;
			}

			@keyframes blow_408 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 25vw;
					top: 19vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_409 {
				animation-name: blow_409;
			}

			@keyframes blow_409 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 15vw;
					top: 55vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_410 {
				animation-name: blow_410;
			}

			@keyframes blow_410 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 58vw;
					top: 74vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_411 {
				animation-name: blow_411;
			}

			@keyframes blow_411 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 10vw;
					top: 57vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_412 {
				animation-name: blow_412;
			}

			@keyframes blow_412 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 96vw;
					top: 83vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_413 {
				animation-name: blow_413;
			}

			@keyframes blow_413 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 67vw;
					top: 92vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_414 {
				animation-name: blow_414;
			}

			@keyframes blow_414 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 87vw;
					top: 68vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_415 {
				animation-name: blow_415;
			}

			@keyframes blow_415 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 71vw;
					top: 42vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_416 {
				animation-name: blow_416;
			}

			@keyframes blow_416 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 86vw;
					top: 5vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_417 {
				animation-name: blow_417;
			}

			@keyframes blow_417 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 91vw;
					top: 57vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_418 {
				animation-name: blow_418;
			}

			@keyframes blow_418 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 98vw;
					top: 17vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_419 {
				animation-name: blow_419;
			}

			@keyframes blow_419 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 26vw;
					top: 68vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_420 {
				animation-name: blow_420;
			}

			@keyframes blow_420 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 8vw;
					top: 10vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_421 {
				animation-name: blow_421;
			}

			@keyframes blow_421 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 56vw;
					top: 48vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_422 {
				animation-name: blow_422;
			}

			@keyframes blow_422 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 95vw;
					top: 30vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_423 {
				animation-name: blow_423;
			}

			@keyframes blow_423 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 38vw;
					top: 4vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_424 {
				animation-name: blow_424;
			}

			@keyframes blow_424 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 85vw;
					top: 65vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_425 {
				animation-name: blow_425;
			}

			@keyframes blow_425 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 48vw;
					top: 13vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_426 {
				animation-name: blow_426;
			}

			@keyframes blow_426 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 77vw;
					top: 26vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_427 {
				animation-name: blow_427;
			}

			@keyframes blow_427 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 15vw;
					top: 94vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_428 {
				animation-name: blow_428;
			}

			@keyframes blow_428 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 70vw;
					top: 36vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_429 {
				animation-name: blow_429;
			}

			@keyframes blow_429 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 98vw;
					top: 64vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_430 {
				animation-name: blow_430;
			}

			@keyframes blow_430 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 81vw;
					top: 33vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_431 {
				animation-name: blow_431;
			}

			@keyframes blow_431 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 40vw;
					top: 19vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_432 {
				animation-name: blow_432;
			}

			@keyframes blow_432 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 73vw;
					top: 90vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_433 {
				animation-name: blow_433;
			}

			@keyframes blow_433 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 57vw;
					top: 49vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_434 {
				animation-name: blow_434;
			}

			@keyframes blow_434 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 44vw;
					top: 3vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_435 {
				animation-name: blow_435;
			}

			@keyframes blow_435 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 79vw;
					top: 87vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_436 {
				animation-name: blow_436;
			}

			@keyframes blow_436 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 2vw;
					top: 47vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_437 {
				animation-name: blow_437;
			}

			@keyframes blow_437 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 35vw;
					top: 60vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_438 {
				animation-name: blow_438;
			}

			@keyframes blow_438 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 61vw;
					top: 93vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_439 {
				animation-name: blow_439;
			}

			@keyframes blow_439 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 11vw;
					top: 75vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_440 {
				animation-name: blow_440;
			}

			@keyframes blow_440 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 28vw;
					top: 41vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_441 {
				animation-name: blow_441;
			}

			@keyframes blow_441 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 97vw;
					top: 44vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_442 {
				animation-name: blow_442;
			}

			@keyframes blow_442 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 55vw;
					top: 99vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_443 {
				animation-name: blow_443;
			}

			@keyframes blow_443 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 66vw;
					top: 36vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_444 {
				animation-name: blow_444;
			}

			@keyframes blow_444 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 82vw;
					top: 49vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_445 {
				animation-name: blow_445;
			}

			@keyframes blow_445 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 41vw;
					top: 45vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_446 {
				animation-name: blow_446;
			}

			@keyframes blow_446 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 76vw;
					top: 32vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_447 {
				animation-name: blow_447;
			}

			@keyframes blow_447 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 26vw;
					top: 60vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_448 {
				animation-name: blow_448;
			}

			@keyframes blow_448 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 56vw;
					top: 79vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_449 {
				animation-name: blow_449;
			}

			@keyframes blow_449 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 21vw;
					top: 55vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_450 {
				animation-name: blow_450;
			}

			@keyframes blow_450 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 28vw;
					top: 62vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_451 {
				animation-name: blow_451;
			}

			@keyframes blow_451 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 35vw;
					top: 43vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_452 {
				animation-name: blow_452;
			}

			@keyframes blow_452 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 47vw;
					top: 3vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_453 {
				animation-name: blow_453;
			}

			@keyframes blow_453 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 7vw;
					top: 25vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_454 {
				animation-name: blow_454;
			}

			@keyframes blow_454 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 45vw;
					top: 39vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_455 {
				animation-name: blow_455;
			}

			@keyframes blow_455 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 30vw;
					top: 94vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_456 {
				animation-name: blow_456;
			}

			@keyframes blow_456 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 62vw;
					top: 95vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_457 {
				animation-name: blow_457;
			}

			@keyframes blow_457 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 54vw;
					top: 20vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_458 {
				animation-name: blow_458;
			}

			@keyframes blow_458 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 98vw;
					top: 33vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_459 {
				animation-name: blow_459;
			}

			@keyframes blow_459 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 5vw;
					top: 42vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_460 {
				animation-name: blow_460;
			}

			@keyframes blow_460 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 80vw;
					top: 27vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_461 {
				animation-name: blow_461;
			}

			@keyframes blow_461 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 56vw;
					top: 28vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_462 {
				animation-name: blow_462;
			}

			@keyframes blow_462 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 56vw;
					top: 23vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_463 {
				animation-name: blow_463;
			}

			@keyframes blow_463 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 42vw;
					top: 10vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_464 {
				animation-name: blow_464;
			}

			@keyframes blow_464 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 27vw;
					top: 80vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_465 {
				animation-name: blow_465;
			}

			@keyframes blow_465 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 72vw;
					top: 93vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_466 {
				animation-name: blow_466;
			}

			@keyframes blow_466 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 72vw;
					top: 28vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_467 {
				animation-name: blow_467;
			}

			@keyframes blow_467 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 26vw;
					top: 42vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_468 {
				animation-name: blow_468;
			}

			@keyframes blow_468 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 55vw;
					top: 40vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_469 {
				animation-name: blow_469;
			}

			@keyframes blow_469 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 71vw;
					top: 43vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_470 {
				animation-name: blow_470;
			}

			@keyframes blow_470 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 92vw;
					top: 22vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_471 {
				animation-name: blow_471;
			}

			@keyframes blow_471 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 95vw;
					top: 54vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_472 {
				animation-name: blow_472;
			}

			@keyframes blow_472 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 47vw;
					top: 15vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_473 {
				animation-name: blow_473;
			}

			@keyframes blow_473 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 15vw;
					top: 21vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_474 {
				animation-name: blow_474;
			}

			@keyframes blow_474 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 22vw;
					top: 10vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_475 {
				animation-name: blow_475;
			}

			@keyframes blow_475 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 11vw;
					top: 79vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_476 {
				animation-name: blow_476;
			}

			@keyframes blow_476 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 92vw;
					top: 36vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_477 {
				animation-name: blow_477;
			}

			@keyframes blow_477 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 55vw;
					top: 58vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_478 {
				animation-name: blow_478;
			}

			@keyframes blow_478 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 61vw;
					top: 15vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_479 {
				animation-name: blow_479;
			}

			@keyframes blow_479 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 43vw;
					top: 58vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_480 {
				animation-name: blow_480;
			}

			@keyframes blow_480 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 3vw;
					top: 91vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_481 {
				animation-name: blow_481;
			}

			@keyframes blow_481 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 46vw;
					top: 31vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_482 {
				animation-name: blow_482;
			}

			@keyframes blow_482 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 18vw;
					top: 69vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_483 {
				animation-name: blow_483;
			}

			@keyframes blow_483 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 2vw;
					top: 94vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_484 {
				animation-name: blow_484;
			}

			@keyframes blow_484 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 1vw;
					top: 60vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_485 {
				animation-name: blow_485;
			}

			@keyframes blow_485 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 15vw;
					top: 80vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_486 {
				animation-name: blow_486;
			}

			@keyframes blow_486 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 22vw;
					top: 95vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_487 {
				animation-name: blow_487;
			}

			@keyframes blow_487 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 58vw;
					top: 2vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_488 {
				animation-name: blow_488;
			}

			@keyframes blow_488 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 97vw;
					top: 84vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_489 {
				animation-name: blow_489;
			}

			@keyframes blow_489 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 82vw;
					top: 95vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_490 {
				animation-name: blow_490;
			}

			@keyframes blow_490 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 49vw;
					top: 70vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_491 {
				animation-name: blow_491;
			}

			@keyframes blow_491 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 24vw;
					top: 50vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_492 {
				animation-name: blow_492;
			}

			@keyframes blow_492 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 86vw;
					top: 46vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_493 {
				animation-name: blow_493;
			}

			@keyframes blow_493 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 7vw;
					top: 26vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_494 {
				animation-name: blow_494;
			}

			@keyframes blow_494 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 16vw;
					top: 93vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_495 {
				animation-name: blow_495;
			}

			@keyframes blow_495 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 66vw;
					top: 52vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_496 {
				animation-name: blow_496;
			}

			@keyframes blow_496 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 28vw;
					top: 34vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_497 {
				animation-name: blow_497;
			}

			@keyframes blow_497 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 13vw;
					top: 66vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_498 {
				animation-name: blow_498;
			}

			@keyframes blow_498 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 76vw;
					top: 54vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_499 {
				animation-name: blow_499;
			}

			@keyframes blow_499 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 10vw;
					top: 41vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_500 {
				animation-name: blow_500;
			}

			@keyframes blow_500 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 74vw;
					top: 94vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_501 {
				animation-name: blow_501;
			}

			@keyframes blow_501 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 29vw;
					top: 81vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_502 {
				animation-name: blow_502;
			}

			@keyframes blow_502 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 60vw;
					top: 31vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_503 {
				animation-name: blow_503;
			}

			@keyframes blow_503 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 77vw;
					top: 40vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_504 {
				animation-name: blow_504;
			}

			@keyframes blow_504 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 27vw;
					top: 41vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_505 {
				animation-name: blow_505;
			}

			@keyframes blow_505 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 1vw;
					top: 61vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_506 {
				animation-name: blow_506;
			}

			@keyframes blow_506 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 37vw;
					top: 9vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_507 {
				animation-name: blow_507;
			}

			@keyframes blow_507 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 93vw;
					top: 36vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_508 {
				animation-name: blow_508;
			}

			@keyframes blow_508 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 1vw;
					top: 98vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_509 {
				animation-name: blow_509;
			}

			@keyframes blow_509 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 67vw;
					top: 11vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_510 {
				animation-name: blow_510;
			}

			@keyframes blow_510 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 67vw;
					top: 43vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_511 {
				animation-name: blow_511;
			}

			@keyframes blow_511 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 1vw;
					top: 24vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_512 {
				animation-name: blow_512;
			}

			@keyframes blow_512 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 5vw;
					top: 39vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_513 {
				animation-name: blow_513;
			}

			@keyframes blow_513 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 97vw;
					top: 90vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_514 {
				animation-name: blow_514;
			}

			@keyframes blow_514 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 17vw;
					top: 45vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_515 {
				animation-name: blow_515;
			}

			@keyframes blow_515 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 5vw;
					top: 29vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_516 {
				animation-name: blow_516;
			}

			@keyframes blow_516 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 74vw;
					top: 63vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_517 {
				animation-name: blow_517;
			}

			@keyframes blow_517 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 90vw;
					top: 86vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_518 {
				animation-name: blow_518;
			}

			@keyframes blow_518 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 69vw;
					top: 15vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_519 {
				animation-name: blow_519;
			}

			@keyframes blow_519 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 57vw;
					top: 10vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_520 {
				animation-name: blow_520;
			}

			@keyframes blow_520 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 63vw;
					top: 27vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_521 {
				animation-name: blow_521;
			}

			@keyframes blow_521 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 13vw;
					top: 24vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_522 {
				animation-name: blow_522;
			}

			@keyframes blow_522 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 61vw;
					top: 80vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_523 {
				animation-name: blow_523;
			}

			@keyframes blow_523 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 97vw;
					top: 25vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_524 {
				animation-name: blow_524;
			}

			@keyframes blow_524 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 3vw;
					top: 92vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_525 {
				animation-name: blow_525;
			}

			@keyframes blow_525 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 59vw;
					top: 47vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_526 {
				animation-name: blow_526;
			}

			@keyframes blow_526 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 48vw;
					top: 15vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_527 {
				animation-name: blow_527;
			}

			@keyframes blow_527 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 13vw;
					top: 85vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_528 {
				animation-name: blow_528;
			}

			@keyframes blow_528 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 39vw;
					top: 31vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_529 {
				animation-name: blow_529;
			}

			@keyframes blow_529 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 2vw;
					top: 43vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_530 {
				animation-name: blow_530;
			}

			@keyframes blow_530 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 41vw;
					top: 1vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_531 {
				animation-name: blow_531;
			}

			@keyframes blow_531 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 54vw;
					top: 1vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_532 {
				animation-name: blow_532;
			}

			@keyframes blow_532 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 22vw;
					top: 97vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_533 {
				animation-name: blow_533;
			}

			@keyframes blow_533 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 92vw;
					top: 3vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_534 {
				animation-name: blow_534;
			}

			@keyframes blow_534 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 81vw;
					top: 93vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_535 {
				animation-name: blow_535;
			}

			@keyframes blow_535 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 39vw;
					top: 17vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_536 {
				animation-name: blow_536;
			}

			@keyframes blow_536 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 53vw;
					top: 39vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_537 {
				animation-name: blow_537;
			}

			@keyframes blow_537 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 55vw;
					top: 24vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_538 {
				animation-name: blow_538;
			}

			@keyframes blow_538 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 75vw;
					top: 32vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_539 {
				animation-name: blow_539;
			}

			@keyframes blow_539 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 57vw;
					top: 71vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_540 {
				animation-name: blow_540;
			}

			@keyframes blow_540 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 25vw;
					top: 11vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_541 {
				animation-name: blow_541;
			}

			@keyframes blow_541 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 37vw;
					top: 9vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_542 {
				animation-name: blow_542;
			}

			@keyframes blow_542 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 28vw;
					top: 92vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_543 {
				animation-name: blow_543;
			}

			@keyframes blow_543 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 7vw;
					top: 25vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_544 {
				animation-name: blow_544;
			}

			@keyframes blow_544 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 26vw;
					top: 91vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_545 {
				animation-name: blow_545;
			}

			@keyframes blow_545 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 71vw;
					top: 4vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_546 {
				animation-name: blow_546;
			}

			@keyframes blow_546 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 66vw;
					top: 47vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_547 {
				animation-name: blow_547;
			}

			@keyframes blow_547 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 76vw;
					top: 22vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_548 {
				animation-name: blow_548;
			}

			@keyframes blow_548 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 60vw;
					top: 29vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_549 {
				animation-name: blow_549;
			}

			@keyframes blow_549 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 31vw;
					top: 75vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_550 {
				animation-name: blow_550;
			}

			@keyframes blow_550 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 5vw;
					top: 57vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_551 {
				animation-name: blow_551;
			}

			@keyframes blow_551 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 59vw;
					top: 43vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_552 {
				animation-name: blow_552;
			}

			@keyframes blow_552 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 69vw;
					top: 84vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_553 {
				animation-name: blow_553;
			}

			@keyframes blow_553 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 77vw;
					top: 45vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_554 {
				animation-name: blow_554;
			}

			@keyframes blow_554 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 24vw;
					top: 55vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_555 {
				animation-name: blow_555;
			}

			@keyframes blow_555 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 82vw;
					top: 95vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_556 {
				animation-name: blow_556;
			}

			@keyframes blow_556 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 73vw;
					top: 35vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_557 {
				animation-name: blow_557;
			}

			@keyframes blow_557 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 25vw;
					top: 87vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_558 {
				animation-name: blow_558;
			}

			@keyframes blow_558 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 71vw;
					top: 9vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_559 {
				animation-name: blow_559;
			}

			@keyframes blow_559 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 11vw;
					top: 29vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_560 {
				animation-name: blow_560;
			}

			@keyframes blow_560 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 39vw;
					top: 29vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_561 {
				animation-name: blow_561;
			}

			@keyframes blow_561 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 74vw;
					top: 92vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_562 {
				animation-name: blow_562;
			}

			@keyframes blow_562 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 48vw;
					top: 83vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_563 {
				animation-name: blow_563;
			}

			@keyframes blow_563 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 55vw;
					top: 72vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_564 {
				animation-name: blow_564;
			}

			@keyframes blow_564 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 64vw;
					top: 2vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_565 {
				animation-name: blow_565;
			}

			@keyframes blow_565 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 78vw;
					top: 1vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_566 {
				animation-name: blow_566;
			}

			@keyframes blow_566 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 52vw;
					top: 25vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_567 {
				animation-name: blow_567;
			}

			@keyframes blow_567 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 89vw;
					top: 34vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_568 {
				animation-name: blow_568;
			}

			@keyframes blow_568 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 57vw;
					top: 48vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_569 {
				animation-name: blow_569;
			}

			@keyframes blow_569 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 52vw;
					top: 82vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_570 {
				animation-name: blow_570;
			}

			@keyframes blow_570 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 100vw;
					top: 56vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_571 {
				animation-name: blow_571;
			}

			@keyframes blow_571 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 28vw;
					top: 54vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_572 {
				animation-name: blow_572;
			}

			@keyframes blow_572 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 99vw;
					top: 32vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_573 {
				animation-name: blow_573;
			}

			@keyframes blow_573 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 85vw;
					top: 27vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_574 {
				animation-name: blow_574;
			}

			@keyframes blow_574 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 45vw;
					top: 46vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_575 {
				animation-name: blow_575;
			}

			@keyframes blow_575 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 41vw;
					top: 43vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_576 {
				animation-name: blow_576;
			}

			@keyframes blow_576 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 62vw;
					top: 95vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_577 {
				animation-name: blow_577;
			}

			@keyframes blow_577 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 49vw;
					top: 82vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_578 {
				animation-name: blow_578;
			}

			@keyframes blow_578 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 13vw;
					top: 93vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_579 {
				animation-name: blow_579;
			}

			@keyframes blow_579 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 87vw;
					top: 51vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_580 {
				animation-name: blow_580;
			}

			@keyframes blow_580 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 62vw;
					top: 69vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_581 {
				animation-name: blow_581;
			}

			@keyframes blow_581 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 39vw;
					top: 59vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_582 {
				animation-name: blow_582;
			}

			@keyframes blow_582 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 67vw;
					top: 40vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_583 {
				animation-name: blow_583;
			}

			@keyframes blow_583 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 43vw;
					top: 33vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_584 {
				animation-name: blow_584;
			}

			@keyframes blow_584 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 11vw;
					top: 47vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_585 {
				animation-name: blow_585;
			}

			@keyframes blow_585 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 54vw;
					top: 87vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_586 {
				animation-name: blow_586;
			}

			@keyframes blow_586 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 95vw;
					top: 37vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_587 {
				animation-name: blow_587;
			}

			@keyframes blow_587 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 46vw;
					top: 69vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_588 {
				animation-name: blow_588;
			}

			@keyframes blow_588 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 58vw;
					top: 74vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_589 {
				animation-name: blow_589;
			}

			@keyframes blow_589 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 69vw;
					top: 97vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_590 {
				animation-name: blow_590;
			}

			@keyframes blow_590 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 78vw;
					top: 80vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_591 {
				animation-name: blow_591;
			}

			@keyframes blow_591 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 19vw;
					top: 87vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_592 {
				animation-name: blow_592;
			}

			@keyframes blow_592 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 3vw;
					top: 6vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_593 {
				animation-name: blow_593;
			}

			@keyframes blow_593 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 14vw;
					top: 93vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_594 {
				animation-name: blow_594;
			}

			@keyframes blow_594 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 63vw;
					top: 97vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_595 {
				animation-name: blow_595;
			}

			@keyframes blow_595 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 36vw;
					top: 29vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_596 {
				animation-name: blow_596;
			}

			@keyframes blow_596 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 64vw;
					top: 51vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_597 {
				animation-name: blow_597;
			}

			@keyframes blow_597 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 91vw;
					top: 81vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_598 {
				animation-name: blow_598;
			}

			@keyframes blow_598 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 18vw;
					top: 22vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_599 {
				animation-name: blow_599;
			}

			@keyframes blow_599 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 96vw;
					top: 8vh;
					opacity: 0;
				}
			}

			input[type=checkbox]:checked~.wrapper .item_600 {
				animation-name: blow_600;
			}

			@keyframes blow_600 {
				0% {
					left: 50%;
					top: 30%;
					opacity: 0;
				}

				10%,
				80% {
					opacity: 1;
				}

				100% {
					left: 64vw;
					top: 6vh;
					opacity: 0;
				}
			}

			@keyframes fade-out {

				0%,
				60% {
					opacity: 1;
				}

				100% {
					opacity: 0;
				}
			}

			input[type=checkbox]:checked,
			input[type=checkbox]:checked~label {
				position: absolute;
				left: -9999999;
				display: none;
			}

			@keyframes spark-fire {
				0% {
					opacity: 0;
				}

				20%,
				100% {
					opacity: 1;
				}
			}

			@keyframes curved-tui {

				0%,
				98% {
					opacity: 1;
				}

				100% {
					opacity: 0;
				}
			}

			@keyframes tui-on-fire {
				0% {
					height: var(--tui-long-h);
				}

				96% {
					height: 0;
					opacity: 1;
				}

				100% {
					height: 0;
					opacity: 0;
				}
			}

			@keyframes resize {
				0% {
					opacity: 1;
				}

				20% {
					opacity: 0.40;
				}

				30% {
					opacity: 0.60;
				}

				40% {
					opacity: 0.20;
				}

				50% {
					opacity: 0.60;
				}

				55% {
					opacity: 0.10;
				}

				65% {
					opacity: 0.8;
				}

				75% {
					opacity: 0.7;
					transform: scale(1);
				}

				70%,
				90% {
					opacity: 0.6;
					transform: scale(1) translateY(-5%);
				}

				90%,
				100% {
					opacity: 0;
					transform: scale(1) translateY(0%);
				}
			}

			.fc-main {
				width: calc(var(--width));
				height: calc(var(--width)*4);
				position: relative;
				transform-origin: bottom;
			}

			.fc-main::after {
				content: "";
				position: absolute;
				background: repeating-linear-gradient(155deg, #8e0a0a, #b01515 20%);
				height: calc(var(--width)*4);
				width: calc(var(--width));
				border-radius: 4px;
			}

			.fc-tui {
				border-radius: 50%;
				background: rgba(255, 255, 255, 0.5);
				height: calc(var(--tui-dia)/2);
				width: calc(var(--tui-dia)/2);
				position: absolute;
				top: -0.5em;
				right: var(--tui-rpos);
				z-index: 0;
				background: linear-gradient(45deg, #4484be  54%, transparent 50%), radial-gradient(transparent 48%, #444 49%, #222 50%, #ddd 70%, #111 100%);
				transform: rotate(-45deg);
			}

			.fc-tui-long {
				background: linear-gradient(to right, #444 1%, #222 10%, #ddd 80%, #111 100%);
				height: var(--tui-long-h);
				position: absolute;
				right: var(--tui-rpos);
				top: 0.2em;
				transform-origin: top;
				transform: rotateX(0deg);
				width: var(--tui-w);
			}

			.spark {
				background: linear-gradient(orangered 30%, yellow, transparent);
				border-radius: 50px;
				height: 3px;
				left: 50%;
				opacity: 0;
				position: absolute;
				top: 99%;
				transform: translateX(-50%);
				width: 5px;
			}

			.spark::after {
				content: "";
				position: absolute;
				border-radius: 50px 50px 0 0;
				height: 8px;
				width: 8px;
				left: 50%;
				transform: translateX(-50%);
				background: radial-gradient(yellow, orangered 0.5px, rgba(255, 255, 255, 0) 0.5px);
				background-size: 1.5px 2px;
				top: 10%;
				animation: spark 0.5s linear infinite forwards;
			}

			@keyframes spark {
				from {
					background-position-y: 0;
				}

				to {
					background-position-y: 20px;
				}
			}

			.spreader::after {
				content: "";
				position: absolute;
				height: 3px;
				width: 3px;
				background: yellow;
				box-shadow: 0 0 5px orange;
				border-radius: 50px;
				transform: translate(-50%, -50%);
				z-index: 898;
				opacity: 0;
			}

			@keyframes take_off {
				0% {
					top: 80%;
					left: 50%;
					opacity: 0;
				}

				30%,
				80% {
					opacity: 1;
				}

				90% {
					opacity: 0;
				}

				100% {
					left: 50%;
					top: 32%;
					opacity: 0;
				}
			}
		</style>



	</section>
	<script>
		var Objects = anime({
			targets: '#Objects .st44 path',
			strokeDashoffset: [anime.setDashoffset, 0],
			easing: 'easeInOutSine',
			duration: 3000,
			delay: function (el, i) { return i * 250 },
			direction: 'alternate',
			loop: true
		});

		var design = anime({
			targets: '#Objects .design .line',
			strokeDashoffset: [anime.setDashoffset, 0],
			easing: 'easeInOutSine',
			duration: 5000,
			delay: function (el, i) { return i * 250 },
			direction: 'alternate',
			loop: true
		});
	</script>
</body>

</html>