<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sheraz || Home</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>


<body id="top">

    
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">


        <!-- # site header 
        ================================================== -->
        <header class="s-header">
            <div class="row s-header__inner">

                <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="index.html">
                            <img class="img-fluid" src="{{asset('images/logo.png')}}" alt="Homepage" height="25px">
                        </a>
                    </div>

                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->

                <nav class="s-header__nav">    
                    <ul class="s-header__menu-links">
                        <li class="current"><a class="link_acc" class="smoothscroll" href="#Home">Home</a></li>
                        <li><a class="link_acc"  class="smoothscroll" href="#about">About</a></li>
                        <li><a class="link_acc" class="smoothscroll" href="#works">Works</a></li>
                        <li><a class="link_acc" class="smoothscroll" href="#footer">Contact</a></li>
                    </ul> <!-- s-header__menu-links -->    
                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->
        </header> <!-- end s-header -->


        <!-- # intro
        ================================================== -->
        <section id="intro" class="s-intro target-section">

            <div class="row s-intro__content width-sixteen-col">
                <div class="column lg-12 s-intro__content-inner grid-block grid-16">
                    
                    <div class="s-intro__content-text">

                        <div class="s-intro__content-pretitle text-pretitle">Hello</div>
                        <h1 class="s-intro__content-title">
                        I'm  <b class="ms_name">Muhammad Sheraz</b> <br>
                        a Frontend Developer <br>
                        base in Somewhere.
                        </h1>                            

                        <div class="s-intro__content-btns text-center my-4">
                            <a class="btn btn-primary" href="#about">More About Me</a>
                            <a class="btn btn-outline-primary" href="#contact-form">Get In Touch</a>
                        </div>
                        
                        
                         <!-- s-intro__content-btns -->   

                    </div> <!-- s-intro__content-text -->                     

                </div> <!-- s-intro__content-inner -->  
            </div> <!-- s-intro__content -->

            <ul class="s-intro__social social-list">
                <li>
                    <a href="https://web.facebook.com/msheraz344" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                        <span class="u-screen-reader-text">Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/muhamamd-sheraz/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);">
                            <path d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.5c-.966 0-1.5-.804-1.5-1.5s.534-1.5 1.5-1.5 1.5.804 1.5 1.5-.534 1.5-1.5 1.5zm13.5 11.5h-3v-5.5c0-1.156-.344-2-1.5-2s-1.5.844-1.5 2v5.5h-3v-10h3v1.219c.678-.772 1.409-1.219 2.5-1.219 1.846 0 3.5 1.342 3.5 4.031v5.969z"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/asthetic_dev2/" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                        <span class="u-screen-reader-text">Instagram</span>
                    </a>
                </li>
                <li>    
                    <a href="https://join.skype.com/invite/whf8rjIofrCn" target="_blank" rel="noopener noreferrer" aria-label="Skype">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);">
                            <path d="M12 0C9.986 0 8.076.41 6.406 1.215a5.557 5.557 0 0 0-5.19.766C.235 2.635-.035 3.6.007 4.553c.05 1.122.63 2.077 1.565 2.6C1.228 8.152.98 9.06.98 10c0 4.97 4.03 9 9 9 1.592 0 3.08-.415 4.382-1.117a5.558 5.558 0 0 0 5.192-.766c.981-.654 1.25-1.618 1.208-2.571-.049-1.121-.63-2.076-1.565-2.6C22.772 8.848 23.02 7.94 23.02 7c0-4.97-4.03-9-9-9zm.02 16.8c-4.24 0-7.2-2.745-7.2-6.8 0-3.99 2.96-6.8 7.2-6.8 3.99 0 6.8 2.96 6.8 6.8 0 4.24-2.745 7.2-6.8 7.2zm-4.252-4.5c.173.188.497.216.82.13.823-.222 2.21-.598 3.218-.598 1.422 0 2.02.492 2.02 1.157 0 .737-1.017 1.064-2.14 1.064-.544 0-1.262-.117-1.71-.174-.03.015-.06.03-.09.043-.158.07-.352.174-.513.246-.664.3-1.432.647-1.43 1.47 0 .563.423.944 1.08 1.124.682.185 1.46.27 2.283.27 1.942 0 3.885-.788 3.885-2.527 0-1.73-1.554-2.788-4.003-2.788-1.69 0-2.833-.275-2.833-.985 0-.454.454-.883 1.416-.883.544 0 1.025.083 1.52.158l.076-.014c.222-.047.435-.098.62-.15.756-.214 1.59-.455 1.59-1.207 0-.826-.763-1.392-2.5-1.392-1.477 0-2.83.474-3.24.623-.09.037-.17.087-.245.137a3.338 3.338 0 0 0-.178.14c-.12.1-.187.185-.2.203-.293.293-.16.736.2 1.006 0 0 .006.004.013.008z"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://wa.me/923068309100" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);">
                            <path d="M20.52 3.475A11.798 11.798 0 0 0 12 0C5.373 0 0 5.373 0 12c0 2.127.552 4.205 1.604 6.037L0 24l6.135-1.577A11.92 11.92 0 0 0 12 24c6.627 0 12-5.373 12-12a11.799 11.799 0 0 0-3.48-8.525zM12 22.08c-2.028 0-3.985-.554-5.693-1.6l-.41-.244-3.647.938.975-3.557-.255-.42A9.884 9.884 0 0 1 2.04 12C2.04 6.624 6.623 2.04 12 2.04c2.645 0 5.129 1.033 7.005 2.908A9.866 9.866 0 0 1 21.96 12c0 5.376-4.583 9.96-9.96 9.96zm5.787-6.9c-.316-.158-1.87-.92-2.161-1.025-.29-.105-.5-.158-.71.158-.21.316-.82 1.025-1.008 1.24-.184.21-.37.236-.686.079-.316-.158-1.336-.49-2.543-1.561-.94-.84-1.576-1.877-1.763-2.193-.184-.316-.02-.487.138-.644.141-.14.316-.37.474-.554.157-.184.21-.316.316-.526.105-.21.052-.395-.026-.554-.08-.158-.71-1.704-.973-2.33-.257-.619-.521-.536-.71-.536-.184-.015-.395-.02-.605-.02-.21 0-.553.078-.842.395-.29.316-1.105 1.078-1.105 2.64 0 1.564 1.132 3.073 1.29 3.288.158.21 2.23 3.406 5.403 4.772.756.33 1.347.526 1.807.674.758.24 1.447.21 1.992.128.606-.092 1.87-.764 2.136-1.504.27-.737.27-1.373.184-1.504-.078-.132-.29-.211-.605-.37z"/>
                        </svg>
                    </a>
                </li>
            </ul> <!-- end s-intro__social -->

            <div class="s-intro__content-media">                               
                <img 
                src="{{ asset('images/software-developer-gef18a0b18_1280.png') }}" 
                srcset="{{ asset('images/software-developer-gef18a0b18_1280.png') }} 1x, {{ asset('images/software-developer-gef18a0b18_1280.png') }} 2x" 
                alt="Logo Profile">            </div> <!-- s-intro__content-media -->                

            <div class="s-intro__btn-download">
                <a target="_blank" class="btn btn--stroke" href="{{ asset('resume/my_resume.pdf') }}" download="My_RESUME.pdf">Get My CV</a>
            </div> <!-- end s-intro__btn-download -->
            
            <div class="s-intro__scroll-down">
                <a href="#about" class="smoothscroll">
                    <div class="scroll-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></svg>
                    </div>
                    <span class="scroll-text u-screen-reader-text">Scroll Down</span>
                </a>
            </div> <!-- s-intro__scroll-down -->

        </section> <!-- end s-intro -->


        <!-- # about
        ================================================== -->
        <section id="about" class="s-about target-section">

            <div class="row s-about__content">
                <div class="column xl-12">    
                    
                    <div class="section-header" data-num="01">
                        <h2 class="text-display-title ms_name_test">About Me</h2>
                    </div> <!-- end section-header -->

                    <p class="attention-getter">
                        My name is <b><u>Muhammad Sheraz</u></b>, and I am a dedicated Frontend Developer with over 4 years of professional experience in designing and developing user-friendly, responsive, and visually engaging web interfaces. Throughout my career, I have had the privilege of working with national companies and clients, where I have honed my skills in modern frontend technologies, including HTML, CSS, JavaScript, Bootstrap, and various frameworks.

                        I am passionate about creating seamless user experiences and turning complex requirements into elegant solutions. Whether collaborating with cross-functional teams or independently managing projects, I ensure high-quality deliverables that meet client expectations. My experience has enabled me to adapt to diverse industries, manage tight deadlines, and bring innovative ideas to the table.
                        
                        I am always eager to learn new technologies and grow in my field, while helping businesses achieve their goals through exceptional web development services. Let's connect and build something great together!                    </p>

                    <div class="grid-list-items s-about__blocks">

                        <div class="grid-list-items__item s-about__block">
                            <h4 class="s-about__block-title">Experience</h4>
                            <ul class="s-about__list">
                                <li>
                                    AquaFilter.com
                                    <span>Landing Page Design</span>
                                </li>
                                <li>
                                    Louis Vuitton
                                    <span>Frontend Designer</span>
                                </li>
                                <li>
                                    Empire Construction 
                                    <span>User Interface Design</span>
                                </li>
                                <li>
                                    FSVU Directorate
                                    <span>Responsive Design </span>
                                </li>
                                <li>
                                    Sanmiwago 
                                    <span>Cart Page  Handler</span>
                                </li>
                            </ul>
                        </div> <!--end s-about__block -->

                        <div class="grid-list-items__item s-about__block">
                            <h4 class="s-about__block-title">Awards</h4>

                            <ul class="s-about__list">
                                <li>
                                    <a href="#0">
                                        Site Of The Month
                                        <span>Awwwards — 2023</span>
                                    </a>                                        
                                </li>
                                <li>
                                    <a href="#0">
                                        Site Of The Day
                                        <span>Awwwards — 2023</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        Agency of The Year
                                        <span>Awwwards — 2022</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        FWA of The Month
                                        <span>FWA — 2022</span>
                                    </a>
                                </li><li>
                                    <a href="#0">
                                        Site Of The Month
                                        <span>Awwwards — 2022</span>
                                    </a>                                        
                                </li>
                            </ul>
                        </div> <!--end s-about__block -->
                        
                        <div class="grid-list-items__item s-about__block">
                            <h4 class="s-about__block-title">Skills</h4>

                            <ul class="s-about__list">
                                <li>
                                   Frontend Development
                                     </li>
                                <li>
                                    Responsive and Cross-Browser Design 
                                </li>
                                <li>
                                    Shopify Store Design
                                </li>
                                <li>
                                    Version Control Git/GitHub
                                </li>
                                <li>
                                    Testing and Debugging
                                </li>
                                <li>
                                    Figma , psd file Converter
                                </li>
                            </ul>
                        </div> <!--end s-about__block -->

                    </div> <!-- grid-list-items -->

                </div> <!--end column -->
            </div> <!--end s-about__content -->
            
        </section> <!-- end s-about -->   



        <!-- # works
        ================================================== -->
        <section id="works" class="s-works target-section">

            <div class="row">
                <div class="column xl-12">
                    <div class="section-header" data-num="02">
                        <h2 class="text-display-title ms_name_test">Selected Works</h2>
                    </div> <!-- end section-header -->
                </div>
            </div>

            <div class="row folio-entries">

                <div class="column entry">
                    <a href="images/folio/gallery/g-turban.jpg" class="entry__link glightbox" data-glightbox="title: White Knit Cap; description: .entry__desc-01">
                        <div class="entry__thumb">
                            <img src="images/folio/white_turban.jpg" srcset="images/folio/white_turban.jpg 1x, images/folio/white_turban@2x.jpg 2x" alt="">
                        </div>
                        <div class="entry__info">
                            <h4 class="entry__title">White Knit Cap</h4>
                            <div class="entry__cat">Frontend Design</div>
                        </div>
                    </a>

                    <div class="glightbox-desc entry__desc-01">
                        <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Inventore ipsum iste soluta fugiat, impedit illum ducimus 
                        deleniti facilis ab, tempora non! Nisi, tempora provident.
                        <a href="https://www.behance.net/">Project Link</a>.
                        </p>
                    </div>
                </div> <!-- entry -->

                <div class="column entry">
                    <a href="images/folio/gallery/g-woodcraft.jpg" class="entry__link glightbox" data-glightbox="title: WoodCraft; description: .entry__desc-02">
                        <div class="entry__thumb">
                            <img src="images/folio/woodcraft.jpg" srcset="images/folio/woodcraft.jpg 1x, images/folio/woodcraft@2x.jpg 2x" alt="">
                        </div>
                        <div class="entry__info">
                            <h4 class="entry__title">WoodCraft</h4>
                            <div class="entry__cat">Product Design</div>
                        </div>
                    </a>

                    <div class="glightbox-desc entry__desc-02">
                        <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Inventore ipsum iste soluta fugiat, impedit illum ducimus 
                        deleniti facilis ab, tempora non! Nisi, tempora provident.
                        <a href="https://www.behance.net/">Project Link</a>.
                        </p>
                    </div>
                </div> <!-- entry -->

                <div class="column entry">
                    <a href="images/folio/gallery/g-tulips.jpg" class="entry__link glightbox" data-glightbox="title: Caffeine & Tulips; description: .entry__desc-03">
                        <div class="entry__thumb">
                            <img src="images/folio/caffeine_and_tulips.jpg" srcset="images/folio/caffeine_and_tulips.jpg 1x, images/folio/caffeine_and_tulips@2x.jpg 2x" alt="">
                        </div>
                        <div class="entry__info">
                            <h4 class="entry__title">Caffeine & Tulips</h4>
                            <div class="entry__cat">Brand Identity</div>
                        </div>
                    </a>

                    <div class="glightbox-desc entry__desc-03">
                        <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Inventore ipsum iste soluta fugiat, impedit illum ducimus 
                        deleniti facilis ab, tempora non! Nisi, tempora provident.
                        <a href="https://www.behance.net/">Project Link</a>.
                        </p>
                    </div>
                </div> <!-- entry -->

                <div class="column entry">
                    <a href="images/folio/gallery/g-grayscale.jpg" class="entry__link glightbox" data-glightbox="title: Grayscale; description: .entry__desc-04">
                        <div class="entry__thumb">
                            <img src="images/folio/grayscale.jpg" srcset="images/folio/grayscale.jpg 1x, images/folio/grayscale@2x.jpg 2x" alt="">
                        </div>
                        <div class="entry__info">
                            <h4 class="entry__title">Grayscale</h4>
                            <div class="entry__cat">Product Design</div>
                        </div>
                    </a>

                    <div class="glightbox-desc entry__desc-04">
                        <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Inventore ipsum iste soluta fugiat, impedit illum ducimus 
                        deleniti facilis ab, tempora non! Nisi, tempora provident.
                        <a href="https://www.behance.net/">Project Link</a>.
                        </p>
                    </div>
                </div> <!-- entry -->

                <div class="column entry">
                    <a href="images/folio/gallery/g-lamp.jpg" class="entry__link glightbox" data-glightbox="title: The Lamp; description: .entry__desc-05">
                        <div class="entry__thumb">
                            <img src="images/folio/lamp.jpg" srcset="images/folio/lamp.jpg 1x, images/folio/lamp@2x.jpg 2x" alt="">
                        </div>
                        <div class="entry__info">
                            <h4 class="entry__title">The Lamp</h4>
                            <div class="entry__cat">Brand Identity</div>
                        </div>
                    </a>

                    <div class="glightbox-desc entry__desc-05">
                        <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Inventore ipsum iste soluta fugiat, impedit illum ducimus 
                        deleniti facilis ab, tempora non! Nisi, tempora provident.
                        <a href="https://www.behance.net/">Project Link</a>.
                        </p>
                    </div>
                </div> <!-- entry -->

                <div class="column entry">
                    <a href="images/folio/gallery/g-tropical.jpg" class="entry__link glightbox" data-glightbox="title: Tropical; description: .entry__desc-06">
                        <div class="entry__thumb">
                            <img src="images/folio/tropical.jpg" srcset="images/folio/tropical.jpg 1x, images/folio/tropical@2x.jpg 2x" alt="">
                        </div>
                        <div class="entry__info">
                            <h4 class="entry__title">Tropical</h4>
                            <div class="entry__cat">Frontend Design</div>
                        </div>
                    </a>

                    <div class="glightbox-desc entry__desc-06">
                        <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Inventore ipsum iste soluta fugiat, impedit illum ducimus 
                        deleniti facilis ab, tempora non! Nisi, tempora provident.
                        <a href="https://www.behance.net/">Project Link</a>.
                        </p>
                    </div>
                </div> <!-- entry --> 

            </div> <!-- folio entries -->


            <div class="row s-testimonials">
                <div class="column xl-12">

                    <h3 class="s-testimonials__header ms_name_test ">Hear it from My Happy Clients</h3>
    
                    <div class="swiper-container s-testimonials__slider">
    
                        <div class="swiper-wrapper">

                            <div class="s-testimonials__slide swiper-slide">
                                <div class="s-testimonials__author">
                                    <img src="images/avatars/user-02.jpg" alt="Author image" class="s-testimonials__avatar">
                                    <cite class="s-testimonials__cite">
                                        <strong>John Rockefeller</strong>
                                        <span>Standard Oil Co.</span>
                                    </cite>
                                </div>
                                <p>
                                Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem. 
                                Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat fuga rem nihil nostrum.
                                Laudantium quia consequatur molestias.
                                </p>
                            </div> <!-- end s-testimonials__slide -->
            
                            <div class="s-testimonials__slide swiper-slide">
                                <div class="s-testimonials__author">
                                    <img src="images/avatars/user-03.jpg" alt="Author image" class="s-testimonials__avatar">
                                    <cite class="s-testimonials__cite">
                                        <strong>Andrew Carnegie</strong>
                                        <span>Carnegie Steel Co.</span>
                                    </cite>
                                </div>
                                <p>
                                Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                                Nisi eaque consequatur. Voluptatem dignissimos ut ducimus accusantium perspiciatis.
                                Quasi voluptas eius distinctio. Atque eos maxime.
                                </p>
                            </div> <!-- end s-testimonials__slide -->
            
                            <div class="s-testimonials__slide swiper-slide">
                                <div class="s-testimonials__author">
                                    <img src="images/avatars/user-01.jpg" alt="Author image" class="s-testimonials__avatar">
                                    <cite class="s-testimonials__cite">
                                        <strong>John Morgan</strong>
                                        <span>JP Morgan & Co.</span>
                                    </cite>
                                </div>
                                <p>
                                Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.  
                                Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.
                                Voluptatem dignissimos ut.
                                </p>
                            </div> <!-- end s-testimonials__slide -->
    
                            <div class="s-testimonials__slide swiper-slide">
                                <div class="s-testimonials__author">
                                    <img src="images/avatars/user-06.jpg" alt="Author image" class="s-testimonials__avatar">
                                    <cite class="s-testimonials__cite">
                                        <strong>Henry Ford</strong>
                                        <span>Ford Motor Co.</span>
                                    </cite>
                                </div>
                                <p>
                                Nunc interdum lacus sit amet orci. Vestibulum dapibus nunc ac augue. Fusce vel dui. In ac felis 
                                quis tortor malesuada pretium. Curabitur vestibulum aliquam leo. Qui sed at corrupti expedita voluptas odit. 
                                Nihil ea quia nesciunt. Ducimus aut sed ipsam.
                                </p>
                            </div> <!-- end s-testimonials__slide -->
        
                        </div> <!-- end swiper-wrapper -->
    
                        <div class="swiper-pagination"></div>
    
                    </div> <!-- end swiper-container -->
    
                </div> <!-- end column -->
            </div> <!-- end s-testimonials -->

        </section> <!-- end s-works --> 


        <!-- # numbers
        ================================================== -->
        <section id="numbers" class="s-numbers">

            <div class="row counter-items">

                <div class="column counter-items__item">
                    <div class="num">
                        80
                        <span>+</span>
                    </div>
                    <h5>Happy Customers</h5>
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Vel harum magni quae voluptate error quo repellendus inventore 
                    laborum ex veniam. 
                    </p>
                </div> <!-- end counter-items__item -->

                <div class="column counter-items__item">
                    <div class="num">
                        120
                        <span>+</span>
                    </div>
                    <h5>Projects Completed</h5>
                    <p>
                    Nunc interdum lacus sit amet orci. Vestibulum dapibus nunc ac augue. 
                    Fusce vel dui. In ac felis 
                    quis tortor malesuada pretium
                    </p>
                </div> <!-- end counter-items__item -->

                <div class="column counter-items__item">
                    <div class="num">
                        23k
                        <span>+</span>
                    </div>
                    <h5>Lines of Code</h5>
                    <p>
                    Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                    Nisi eaque consequatur. Voluptatem dignissimos ut ducimus
                    </p>
                </div> <!-- end counter-items__item -->

                <div class="column counter-items__item">
                    <div class="num">
                        85
                        <span>+</span>
                    </div>
                    <h5>Positive Feedback</h5>
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel harum magni quae voluptate error 
                    quo repellendus inventore laborum ex veniam.
                    </p>
                </div> <!-- end counter-items__item -->

            </div>  <!-- end counter-items -->

        </section> <!-- end s-numbers -->


        <!-- # footer 
        ================================================== -->
        <footer id="footer" class="s-footer target-section">

            <div class="row">
                <div class="column lg-12">
                    <div class="section-header light-on-dark" data-num="03">
                        <h2 class="text-display-title">Get In Touch.</h2>
                    </div> <!-- end section-header -->
                </div>
                
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" />
                        </div>
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="height: 150px;"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btn btn-primary w-100" value="Send Message" />
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            
            <!-- Contact Form Section -->
           
            
            
            
            

            <div class="row s-footer__content">

                <div class="column xl-6 md-12 s-footer__block s-footer__about">                    
                    <p class="attention-getter">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas illum quasi facere libero, 
                    fugiat laboriosam possimus amet consectetur adipisicing elit reprehenderit eveniet tempore quisquam ipsa id esse. Facere ratione dignissimos.
                    </p>               
                </div> <!-- end section-footer__about -->

                <div class="column xl-6 md-12 s-footer__block s-footer__site-links">
                    <div class="row">
                        <div class="column xl-4 lg-5 md-6 tab-12">
                            <h5>Follow Me</h5>
                            <ul class="link-list">
                                <li><a class="link_acc" href="https://web.facebook.com/msheraz344" target="_blank">Facebook</a></li>
                                <li><a class="link_acc" href="https://www.instagram.com/asthetic_dev2/" target="_blank">Instagram</a></li>
                                <li><a class="link_acc" href="https://wa.me/923068309100" target="_blank">WhatsApp</a></li>
                                <li><a class="link_acc" href="https://www.linkedin.com/in/muhamamd-sheraz/" target="_blank">Linkedin</a></li>
                                <li><a class="link_acc" href="https://join.skype.com/invite/whf8rjIofrCn" target="_blank">Skype</a></li>

                            </ul>
                        </div>
                        <div class="column xl-6 md-6 tab-12">
                            <h5>Contact Me</h5>
                            <ul class="link-list">
                                <li><a href="mailto:#0">muhammadsheraz@metacodeinnovations.com</a></li>
                                <li><a href="tel:+1975432345">+923068309100</a></li>
                            </ul> 
                        </div>
                    </div>                    
                </div> <!-- end section-footer__site-links -->

            </div> <!-- end section-footer__content -->


            <div class="row s-footer__buttons">
               
                <div class="column xl-6 tab-12">
                    <a href="mailto:#0" class="btn btn--primary btn--large u-fullwidth">Message Me</a>
                </div>
          
                <div class="column xl-6 tab-12">                    
                    <a href="#0" class="btn btn--stroke btn--large u-fullwidth">Get My CV</a>
                </div>
            
            </div> <!-- end section-footer__buttons -->              
            
            <div class="row s-footer__bottom">
                
                <div class="column xl-6 lg-12">
                    <ul class="s-footer__social social-list">
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                                <span class="u-screen-reader-text">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                                <span class="u-screen-reader-text">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                <span class="u-screen-reader-text">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z"></path></svg>
                                <span class="u-screen-reader-text">Dribbble</span>
                            </a>
                        </li>
                    </ul> 
                </div> <!-- end section-footer__social -->

                <div class="column xl-6 lg-12">
                    <p class="ss-copyright">
                        <span>© Copyright sheraz 2024</span> 
                        <span>Design by <a href="https://styleshout.com/">StyleShout</a> Distribution by</span>
                    </p>
                </div>

            </div> <!-- end section-footer__bottom -->          

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">                 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5.536 21.886a1.004 1.004 0 0 0 1.033-.064l13-9a1 1 0 0 0 0-1.644l-13-9A1 1 0 0 0 5 3v18a1 1 0 0 0 .536.886z"></path></svg>
                </a>                                
                <span>Back To Top</span>   
            </div> <!-- end ss-go-top -->
            
        </footer> <!-- end s-footer -->

    </div> <!-- end page-wrap -->


    <!-- Java Script
    ================================================== -->
<script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>