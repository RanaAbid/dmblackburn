<?php
include("../../includes/header.php");
$page_title = "Thank You";
?>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
<style>
    .wrapper-1 {
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .wrapper-2 {
        padding: 30px;
        text-align: center;
        background: #153638;
    }

    h1 {
        font-family: 'Kaushan Script', cursive;
        font-size: 4em;
        letter-spacing: 3px;
        color: #fff;
        margin: 0;
        margin-bottom: 20px;
    }

    .wrapper-2 p {
        margin: 0;
        font-size: 1.3em;
        color: #fff;
        font-family: 'Source Sans Pro', sans-serif;
        letter-spacing: 1px;
    }

    .footer-like {
        margin-top: auto;
        background: #D7E6FE;
        padding: 6px;
        text-align: center;
    }

    .footer-like p {
        margin: 0;
        padding: 4px;
        color: #5892FF;
        font-family: 'Source Sans Pro', sans-serif;
        letter-spacing: 1px;
    }

    .footer-like p a {
        text-decoration: none;
        color: #5892FF;
        font-weight: 600;
    }

    @media (min-width:360px) {
        h1 {
            font-size: 4.5em;
        }
    }

    @media (min-width:600px) {
        .content {
            /* max-width:1000px; */
            margin: 0 auto;
        }

        .wrapper-1 {
            height: initial;
            /* max-width:620px; */
            margin: 0 auto;
            box-shadow: 4px 8px 40px 8px rgb(39 98 101);
        }

    }
</style>
<!-- banner begin -->
<div class="banner breadcrumb-banner pt-190 pb-200">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-txt">
                    <h1 class="breadcrumb-title"><?php echo "$page_title" ?></h1>
                    <div class="breadcrumb-txt">
                        <a href="index.html">Home</a>
                        <span class="dvdr"><i class="icofont-simple-right"></i></span>
                        <span><?php echo "$page_title" ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
<section class="mission-vision-area sec_pt sec_pb">
    <div class="custom-container">
        <div class="row">
            <div class="col-xl-12">
                <div class=content>
                    <div class="wrapper-1">
                        <div class="wrapper-2">
                            <h1>Thank you !</h1>
                            <p>Thanks for Contacting us.</p>
                            <p>You should receive a confirmation email soon</p>

                        </div>
                        <div class="wrapper-2">
                            <p>You will be Redirected to Home Page in </p>
                            <h1 id="timer">10</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include("../../includes/footer.php");
?>
<script>
    var count = 10;
    var interval = setInterval(function() {
        count--;
        document.getElementById("timer").innerHTML = count.toString();
        if (count === 0) {
            clearInterval(interval);
            window.location.href = "<?= $app_path ?>";
        }
    }, 1000);
</script>