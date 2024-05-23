<?php include("../includes/header.php"); ?>
<style>
    .card-staff .face {
        width: 300px;
        height: 200px;
        transition: 0.5s;
    }

    .card-staff .face.face1 {
        position: relative;
        background: #055530;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1;
        transform: translateY(100px);
    }

    .card-staff:hover .face.face1 {
        background: #23cc88;
        transform: translateY(0);
    }

    .card-staff .face.face1 .content {
        opacity: 1;
        transition: 0.5s;
    }

    .card-staff:hover .face.face1 .content {
        opacity: 1;
    }

    .card-staff .face.face1 .content img {
        max-width: 100px;
    }

    .card-staff .face.face1 .content h3 {
        margin: 10px 0 0;
        padding: 0;
        color: #fff;
        text-align: center;
        font-size: 1.5em;
    }

    .card-staff .face.face2 {
        position: relative;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        box-sizing: border-box;
        box-shadow: 0 12px 20px rgb(5 85 48);
        transform: translateY(-100px);
    }

    .card-staff:hover .face.face2 {
        transform: translateY(0);
    }

    .card-staff .face.face2 .content p {
        margin: 0;
        padding: 0;
    }
</style>
<!-- banner begin -->
<div class="banner breadcrumb-banner pt-190 pb-200">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-txt">
                    <h1 class="breadcrumb-title">About Darul Madinah Blackburn</h1>
                    <div class="breadcrumb-txt">
                        <a href="index.html">Home</a>
                        <span class="dvdr"><i class="icofont-simple-right"></i></span>
                        <span>About</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<div class="feature p-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="section-heading text-center mb-70">
                    <h2 class="section-title mt--8 mb-25">Welcome to Darul Madinah Blackburn</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-8">
                <div class="part-txt mb-70">
                    <div class="section-heading mb-70">
                        <h4>Darul Madinah: Nurturing Young Minds and Hearts</h4>
                        <p class="heading-sub-txt mt-3 text-justify">Darul Madinah is an Ofsted-regulated Nursery and Primary School that passionately believes in fostering a collaborative partnership with parents to nurture and guide children towards their full potential. We recognize the immense significance of parental involvement in a child’s development and strive to create a supportive environment where parents and educators work together as a team.</p>
                        <h4>At Darul Madinah Primary School, we offer a holistic educational experience that encompasses</h4>
                        <p class="heading-sub-txt mt-3 text-justify">Daily Hifdh Sessions: Children embark on a journey of memorising Juzz Ammah and embark on memorising other chapters of the Quran.<br> Islamic Studies: Children immerse themselves in the rich tapestry of Islamic knowledge, learning the blessed 99 names of Allah and engaging in daily Islamic studies lessons.<br>lace a strong emphasis on tarbiyah, instilling in children the love and reverence for Allah and His beloved Prophet. We guide them towards following the commandments of Allah and the Sunnah. Fun Fridays: Every Friday, our school comes alive with excitement as children participate in engaging hands-on activities, learn nasheeds, and experience the joy of Jummah Salah.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="feature-img p-relative ml-30 mb-70">
                    <img src="<?= $app_path ?>assets/images/about/feature-img.jpg" alt="image">
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-4">
                <div class="feature-img p-relative mr-30">
                    <img src="<?= $app_path ?>assets/images/about/feature-img.jpg" alt="image">
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="part-txt mb-70">
                    <div class="section-heading mb-70">
                        <h4>Darul Madinah: Nurturing Young Minds and Hearts</h4>
                        <p class="heading-sub-txt mt-3 text-justify">Darul Madinah is an Ofsted-regulated Nursery and Primary School that passionately believes in fostering a collaborative partnership with parents to nurture and guide children towards their full potential. We recognize the immense significance of parental involvement in a child’s development and strive to create a supportive environment where parents and educators work together as a team.</p>
                        <h4>At Darul Madinah Primary School, we offer a holistic educational experience that encompasses</h4>
                        <p class="heading-sub-txt mt-3 text-justify">Daily Hifdh Sessions: Children embark on a journey of memorising Juzz Ammah and embark on memorising other chapters of the Quran.<br> Islamic Studies: Children immerse themselves in the rich tapestry of Islamic knowledge, learning the blessed 99 names of Allah and engaging in daily Islamic studies lessons.<br>lace a strong emphasis on tarbiyah, instilling in children the love and reverence for Allah and His beloved Prophet. We guide them towards following the commandments of Allah and the Sunnah. Fun Fridays: Every Friday, our school comes alive with excitement as children participate in engaging hands-on activities, learn nasheeds, and experience the joy of Jummah Salah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="testimonial p-150">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="single-feedback">
                    <div class="feedback-title-area">
                        <div class="quote-icon mb-30">
                            <img src="<?= $app_path ?>assets/images/quote.png" alt="“">
                        </div>
                        <h2 class="feedback-title mt--3 mb-17">Message from Ameer-e-Ahle Sunnat</h2>
                    </div>
                    <p class="feedback-txt mb-25">“Allama Maulana Abu Bilal MUHAMMAD ILYAS Attar Qadri Razavi دامت برکاتھم العالیہ Students are the most valuable asset for a country and the future leaders of the nation. If they are trained in accordance with the Shari’ah and Sunnah, divine fear and devotion to the Holy Prophet صَلَّى اللهُ تَعَالٰى عَلَيْهِ وَاٰلِهٖ وَسَلَّمَ will prevail everywhere in society.”</p>
                    <div class="divider bg-white rounded-pill mb-20"></div>
                    <h4 class="client-name mt--2 mb--2">Muhammad Ilyas Attar Qadri Razavi (دامت برکاتھم العالیہ)</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="our-staff pt-120 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2 class="section-title mb-0">Meet Our Staffs</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="card-staff">
                    <div class="face face1">
                        <div class="content text-center">
                            <h3>Waqas Choudhery</h3>
                            <p class="text-white heading-sub-txt">Director</p>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p class="heading-sub-txt">Level 3 Safeguarding trained</p>
                            <p class="heading-sub-txt">FGM trained</p>
                            <p class="heading-sub-txt">Trained in Safer Recruitment</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="card-staff">
                    <div class="face face1">
                        <div class="content text-center">
                            <h3>Waqas Choudhery</h3>
                            <p class="text-white heading-sub-txt">Director</p>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p class="heading-sub-txt">Level 3 Safeguarding trained</p>
                            <p class="heading-sub-txt">FGM trained</p>
                            <p class="heading-sub-txt">Trained in Safer Recruitment</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="card-staff">
                    <div class="face face1">
                        <div class="content text-center">
                            <h3>Waqas Choudhery</h3>
                            <p class="text-white heading-sub-txt">Director</p>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p class="heading-sub-txt">Level 3 Safeguarding trained</p>
                            <p class="heading-sub-txt">FGM trained</p>
                            <p class="heading-sub-txt">Trained in Safer Recruitment</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="card-staff">
                    <div class="face face1">
                        <div class="content text-center">
                            <h3>Waqas Choudhery</h3>
                            <p class="text-white heading-sub-txt">Director</p>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p class="heading-sub-txt">Level 3 Safeguarding trained</p>
                            <p class="heading-sub-txt">FGM trained</p>
                            <p class="heading-sub-txt">Trained in Safer Recruitment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="gallery-btn text-center" id="load-photos">
                    <a href="javascript:void(0)" class="def-btn">View All Staffs</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../includes/footer.php"); ?>