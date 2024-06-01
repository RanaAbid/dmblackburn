<?php include("../includes/header.php");
$page_title = "Contact Us";
?>
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
 <!-- contact begin -->
 <div class="contact-3 pb-50 pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-form-wrapper mb-70">
                        <span class="contact-subtext">Get In Touch</span>
                        <h4 class="contact-titletext mb-40">Have Any Query?</h4>
                        <form>
                            <div class="contact-form">
                                <div class="contact-col-6">
                                    <input type="text" placeholder="Name" id="txt_name" name="txt_name">
                                </div>
                                <div class="contact-col-6">
                                    <input type="email" placeholder="Email" id="txt_email" name="txt_email">
                                </div>
                                <div class="contact-col">
                                    <input type="text" placeholder="Phone Number" id="txt_number" name="txt_number">
                                </div>
                                <div class="contact-col">
                                    <input type="text" placeholder="Message Subject" id="txt_msg_sbj" name="txt_msg_sbj">
                                </div>
                                <div class="contact-col">
                                    <textarea placeholder="Leave Messege" id="txt_msg" name="txt_msg"></textarea>
                                </div>
                                <div class="contact-col">
                                    <button class="def-btn" type="submit">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info-wrapper ml-60 mb-70">
                        <ul>
                            <li>
                                <i class="icofont-google-map"></i>
                                <div class="contact-info-content">
                                    <span class="contact-info-content-text">Visit Office</span>
                                    50 Darvills Lane, Slough, SL1 2PH
                                </div>
                            </li>
                            <li>
                                <i class="icofont-google-map"></i>
                                <div class="contact-info-content">
                                    <span class="contact-info-content-text">Visit Office</span>
                                    Hartland House, Hartland close, Slough SL1 3XT
                                </div>
                            </li>
                            <li>
                                <i class="icofont-phone"></i>
                                <div class="contact-info-content">
                                    <span class="contact-info-content-text">Call Anytime</span>
                                    <a href="tel:+7957951765">Office/Admin: 01753 553841 Mobile: 07957951765</a>
                                </div>
                                
                            </li>
                            <li>
                                <i class="icofont-envelope-open"></i>
                                <div class="contact-info-content">
                                    <span class="contact-info-content-text">Send Email</span>
                                    <a href="mailto:slough@darulmadinah.co.uk">slough@darulmadinah.co.uk</a>
                                </div>
                                
                            </li>
                            <li>
                                <i class="icofont-globe"></i>
                                <div class="contact-info-content">
                                    <span class="contact-info-content-text">Visit Us</span>
                                    <a href="https://dawateislami.co.uk/" target="_blank">www.dawateislami.co.uk</a>
                                </div>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact end -->
<?php include("../includes/footer.php"); ?>