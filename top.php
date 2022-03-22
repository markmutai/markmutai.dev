<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Front-end engineer, UI designer, UX desiger, Digital artist">
    <meta name="keywords" content="freelance design, logo design, web design, user interface design, user experience design,">
    <title>Designed By Mutai</title>
    <link rel="stylesheet" type="text/css" href="app/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="app/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="app/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="app/css/tailwind.min.css">
    <link rel="stylesheet" type="text/css" href="app/webfonts/icomoon/style.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"> -->
    <link rel="icon" type="image/jpg" href="mm-fav.jpg">
    <link rel="icon" sizes="192x192" href="mm-fav-highres.jpg">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142998658-1"></script>
    <script src="app/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script type="text/javascript" id="cookieinfo" src="app/js/cookieinfo.min.js" data-font-family="'Lexend', sans-serif" data-bg="#312e81" data-fg="#FFFFFF" data-link="#0EA5E9" data-divlinkbg="#0EA5E9" data-divlink="#fff" data-cookie="CookieInfoScript" data-text-align="left" data-close-text="Close">
    </script>
    <script async defer>
        $(document).ready(function() {
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1500, function() {
                        window.location.hash = hash;
                    });
                }
            });
        });
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-142998658-1');
    </script>
    <script type="text/javascript">
        var MTUserId = 'b2223a1e-97cc-476d-b3f0-f5a6b2cc696d';
        var MTFontIds = new Array();
        MTFontIds.push("5575027"); // Futura® BT W05 Medium 
        (function() {
            var mtTracking = document.createElement('script');
            mtTracking.type = 'text/javascript';
            mtTracking.async = 'true';
            mtTracking.src = 'mtiFontTrackingCode.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(mtTracking);
        })();
    </script>
    <style type="text/css">
        @import url("https://fast.fonts.net/lt/1.css?apiType=css&c=b2223a1e-97cc-476d-b3f0-f5a6b2cc696d&fontids=5575027");

        @font-face {
            font-family: "Futura";
            src: url("fonts/5575027/bd41bc16-3dde-422d-8e84-55a26fdee243.eot?#iefix");
            src: url("fonts/5575027/bd41bc16-3dde-422d-8e84-55a26fdee243.eot?#iefix") format("eot"), url("fonts/5575027/61d9e32c-2fc7-4804-967b-0bc17f76f10d.woff2") format("woff2"), url("fonts/5575027/12a2ea1a-ff0f-48ec-b350-21d2115f2b88.woff") format("woff"), url("fonts/5575027/34a7e407-2a13-4eb0-80a0-fc51e17b25fa.ttf") format("truetype");
        }
    </style>
</head>

<body class="antialiased bg-gradient-to-br from-GLightestBlue via-GLighterBlue to-GLightBlue dark:from-GDarkBlue dark:via-GDarkerBlue dark:to-GDarkestBlue">
    <nav id="top" class="mm_nav bg-gradient-to-r from-indigo-700 to-indigo-900 dark:from-d2XlPurp dark:to-d3XlPurp text-gray-50 hover:text-gray-100 xl:text-sm 2xl:text-base">
        <!-- <div class="mm_loading"></div> -->
        <div class="max-w-full mx-auto pr-4 py-0.5 sm:pr-6 lg:pr-8">
            <div class="flex items-center justify-between md:h-12 xl:h-14 2xl:h-15">
                <div class="flex items-center">
                    <a href="index.php" class="duration-300 focus:outline-none">
                        <div class="flex-shrink-0 border-solid border-r-2 px-3 border-gray-100 border-opacity-20 cursor-pointer">
                            <img class="xl:w-20 2xl:w-21" src="app/img/mm.svg" alt="Mark Mutai logo">
                        </div>
                    </a>
                    <div class="hidden justify-center xl:block">
                        <div class="ml-7 flex items-center space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <ul class="flex items-center">
                                <li>
                                    <a href="javascript:void(0)" class="nav_active float-left duration-300 bg-pDrkBlue dark:bg-indigo-700 bg-opacity-90 hover:text-gray-100 focus:outline-none focus:bg-gray-100 focus:text-dPurp dark:focus:text-gray-100 xl:py-3 xl:px-5 2xl:py-3 2xl:px-10 mr-1.5 rounded-sm">Home</a>
                                </li>
                                <li id="dropdown-quote" class="cursor-pointer flex items-center dropdown float-left duration-300 px-0 text-gray-50 focus:outline-none focus:bg-lblue-500 focus:text-dPurp hover:bg-lblue-500 hover:text-gray-50 dark:hover:bg-lblue-500 mx-1.5 rounded-sm xl:text-sm 2xl:text-base font-medium text-bold">
                                    <a href="javascript:void(0)" class="flex items-center xl:py-2 xl:px-8 2xl:py-3.5 2xl:px-10 hover:text-gray-50">
                                        Get a Quote
                                        <i class="absolute opacity-50 xl:right-2.5 2xl:right-3 mt-0.5 xl:text-2xs 2xl:text-xs fas fa-chevron-down"></i>
                                    </a>
                                    <ul id="dropdown-quote-content" class="hidden dropdown-content bg-pDrkBlue dark:bg-d2XlPurp text-gray-50 xl:top-14 2xl:top-15 text-center rounded-b-md shadow-md">
                                        <li class="duration-300 sub_styl dark:border-opacity-5 btn_styl py-4 px-0">
                                            <a href="#msg" id="iconography" class="py-4 px-4 hover:text-gray-50">
                                                Iconography
                                            </a>
                                        </li>
                                        <li class="duration-300 sub_styl dark:border-opacity-5 btn_styl py-4 px-0">
                                            <a href="#msg" id="illustration" class="py-4 px-4 hover:text-gray-50">
                                                Illustration
                                            </a>
                                        </li>
                                        <li class="duration-300 sub_styl dark:border-opacity-5 btn_styl py-4 px-0">
                                            <a href="#msg" id="branding" class="py-4 px-4 hover:text-gray-50">
                                                Branding
                                            </a>
                                        </li>
                                        <li class="duration-300 sub_styl dark:border-opacity-5 btn_styl py-4 px-0">
                                            <a href="#msg" id="website" class="py-4 px-4 hover:text-gray-50">
                                                Website
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="dropdown-project" class="cursor-pointer flex items-center dropdown float-left duration-300 focus:outline-none focus:bg-lblue-500 focus:text-dPurp btn_styl dark:hover:bg-lblue-500 mx-1.5 rounded-sm xl:text-sm 2xl:text-base font-medium text-bold">
                                    <a href="javascript:void(0)" class="flex items-center xl:py-2 xl:px-8 2xl:py-3.5 2xl:px-10 hover:text-gray-50">
                                        Live Sites
                                        <i class="absolute opacity-50 xl:right-2.5 2xl:right-3 mt-0.5 xl:text-2xs 2xl:text-xs fas fa-chevron-down"></i>
                                    </a>
                                    <ul id="dropdown-project-content" class="hidden dropdown-content bg-pDrkBlue dark:bg-d2XlPurp text-gray-100 xl:w-66 2xl:w-74 xl:top-14 2xl:top-15 text-center rounded-b-md shadow-md">
                                        <!-- <li class="duration-300 sub_styl dark:border-opacity-5 btn_styl py-4 px-0"><a href="https://almondtreewellness.co.ke/" target="_blank" class="py-4 px-4 hover:text-gray-50">Shopping App (Coming Soon)</a></li> -->
                                        <li class="duration-300 sub_styl dark:border-opacity-5 btn_styl py-4 px-0">
                                            <a href="https://almondtreewellness.co.ke/" class="py-4 px-3 hover:text-gray-50" target="_blank">
                                                Almond Tree Wellness
                                            </a>
                                        </li>
                                        <li class="duration-300 sub_styl dark:border-opacity-5 btn_styl py-4 px-0">
                                            <a href="https://linchpin.co.ke/" class="py-4 px-3 hover:text-gray-50" target="_blank">
                                                Linchpin Kenya
                                            </a>
                                        </li>
                                        <li class="duration-300 sub_styl dark:border-opacity-5 btn_styl py-4 px-0">
                                            <a href="https://transken.co.ke/" class="py-4 px-3 hover:text-gray-50" target="_blank">
                                                Transken Ltd.
                                            </a>
                                        </li>
                                        <li class="duration-300 sub_styl dark:border-opacity-5 btn_styl py-4 px-0">
                                            <a href="javascript:void(0)" class="py-4 px-3 hover:text-gray-50">
                                                Pumua (Coming Soon)
                                            </a>
                                        </li>
                                        <li class="duration-300 sub_styl dark:border-opacity-5 btn_styl py-4 px-0">
                                            <a href="https://ipconsultafrica.com/" class="py-4 px-3 hover:text-gray-50" target="_blank">
                                                Integrated Partnership Consultants
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="contact" class="cursor-pointer flex items-center dropdown float-left duration-300 focus:outline-none focus:bg-lblue-500 focus:text-dPurp btn_styl dark:hover:bg-lblue-500 mx-1.5 rounded-sm xl:text-sm 2xl:text-base font-medium text-bold">
                                    <a href="app/dl/Mark Rutere Portfolio.pdf" class="flex items-center xl:py-2 xl:px-8 2xl:py-3.5 2xl:px-10 hover:text-gray-50" target="_blank">
                                        Portfolio
                                        <!-- <i class="absolute opacity-50 xl:right-2.5 2xl:right-3 mt-0.5 xl:text-2xs 2xl:text-xs fa-solid fa-up-right-from-square"></i> -->
                                    </a>
                                </li>
                                <li id="contact" class="cursor-pointer flex items-center dropdown float-left duration-300 focus:outline-none focus:bg-lblue-500 focus:text-dPurp btn_styl dark:hover:bg-lblue-500 mx-1.5 rounded-sm xl:text-sm 2xl:text-base font-medium text-bold">
                                    <a href="#msg" class="flex items-center xl:py-2 xl:px-8 2xl:py-3.5 2xl:px-10 hover:text-gray-50">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hidden xl:block absolute xl:right-24 xl:mr-3 2xl:mr-0 2xl:right-24">
                    <?php include 'tgl.php' ?>
                </div>
                <div class="hidden xl:block">
                    <div id="user-menu" class="cursor-pointer ml-4 flex items-center md:ml-6">
                        <div class="flex items-center xl:w-16 2xl:w-16 ml-3 xl:pl-3 2xl:pl-3 relative border-solid border-l-2 border-gray-100 border-opacity-10">
                            <a href="javascript:void(0)" id="dropdown-share" class="flex items-center">
                                <button type="button" class="rounded-full flex items-center text-sm focus:outline-none" aria-expanded="false" aria-haspopup="true">
                                    <!-- <span class="sr-only">Open user menu</span> -->
                                    <div class="duration-300 icon-share-2 xl:text-xl 2xl:text-2xl text-gray-50 focus:outline-none focus:bg-lblue-500 focus:text-dPurp btn_styl dark:hover:bg-lblue-500 rounded-sm py-3 xl:px-3 xl:mr-3 2xl:mr-4"></div>
                                </button>
                                <i class="absolute text-gray-50 opacity-50 -right-3 mt-1 xl:text-2xs 2xl:text-1.5xs fas fa-chevron-down"></i>
                            </a>
                            <ul id="dropdown-share-content" class="hidden dropdown-content dropdown-share-content right-0 bg-pDrkBlue dark:bg-d2XlPurp text-gray-100 xl:w-44 2xl:w-56 xl:top-14 2xl:top-15 xl:mt-2 2xl:mt-0 xl:text-sm 2xl:text-base text-left rounded-b-md shadow-md">
                                <a href="https://www.instagram.com/designedbymutai/" class="flex items-center hover:text-gray-50" target="_blank">
                                    <li class="duration-300 btn_styl w-full xl:pl-7 xl:py-6 2xl:pl-8 sub_styl dark:border-opacity-5">
                                        Instagram
                                    </li>
                                    <i class="fab fa-instagram absolute right-6 hover:text-gray"></i>
                                </a>
                                <a href="https://www.pinterest.co.uk/markymarkmutai" class="flex items-center hover:text-gray-50" target="_blank">
                                    <li class="duration-300 btn_styl w-full xl:pl-7 xl:py-6 2xl:pl-8 sub_styl dark:border-opacity-5">
                                        Pinterest
                                    </li>
                                    <i class="fab fa-pinterest absolute right-6 hover:text-gray"></i>
                                </a>
                                <a href="https://www.reddit.com/user/designmuntu" class="flex items-center hover:text-gray-50" target="_blank">
                                    <li class="duration-300 btn_styl w-full xl:pl-7 xl:py-6 2xl:pl-8 sub_styl dark:border-opacity-5">
                                        Reddit
                                    </li>
                                    <i class="fab fa-reddit absolute right-6 hover:text-gray"></i>
                                </a>
                                <a href="https://dribbble.com/markmutai" class="flex items-center hover:text-gray-50" target="_blank">
                                    <li class="duration-300 btn_styl w-full xl:pl-7 xl:py-6 2xl:pl-8 sub_styl dark:border-opacity-5">
                                        Dribbble
                                    </li>
                                    <i class="fab fa-dribbble absolute right-6 hover:text-gray"></i>
                                </a>

                                <a href="https://github.com/markmutai" class="flex items-center hover:text-gray-50" target="_blank">
                                    <li class="duration-300 btn_styl w-full xl:pl-7 xl:py-6 2xl:pl-8 sub_styl dark:border-opacity-5">
                                        Github
                                    </li>
                                    <i class="fab fa-github absolute right-6 hover:text-gray"></i>
                                </a>
                                <a href="https://www.behance.net/designsbymutai" class="flex items-center hover:text-gray-50" target="_blank">
                                    <li class="duration-300 btn_styl w-full xl:pl-7 xl:py-6 2xl:pl-8 sub_styl dark:border-opacity-5">
                                        Behance
                                    </li>
                                    <i class="fab fa-behance absolute right-6 hover:text-gray"></i>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 phone-m:py-2 phone-l:py-3 flex xl:hidden">
                    <div class="flex-row items-center">
                        <a href="index.php" class="duration-300 focus:outline-none">
                            <div class="absolute left-0 flex-shrink-0 phone-m:px-4 md:px-4 lg:px-4 md:mr-2 lg:mr-4 border-gray-100 border-opacity-30 cursor-pointer">
                                <img class="phone-m:w-20 xl:w-20 2xl:w-24" src="app/img/mm.svg" alt="Mark Mutai logo">
                            </div>
                        </a>
                        <!-- Mobile menu button -->
                        <button type="button" id="menu-btn" class="p-1 bg-d2XlPurp rounded-sm text-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white focus:bg-lblue-500 focus:text-dPurp btn_styl dark:hover:bg-lblue-500 dark:bg-indigo-700" onClick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="mobile-menu" aria-controls="mobile-menu" aria-expanded="false">
                            <svg width="30" height="30" viewBox="0 0 100 100">
                                <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                                <path class="line line2" d="M 20,50 H 80" />
                                <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="xl:hidden w-full py-2 flex items-center justify-center bg-d2XlPurp bg-opacity-80 dark:bg-opacity-100">
            <?php include 'tgl.php' ?>
        </div>
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="hidden xl:hidden bg-d2XlPurp border-t border-gray-50 border-opacity-10" id="mobile-menu">
            <div class="px-2 pb-0 space-y-1 sm:px-3">
                <ul class="text-center text-gray-50 text-sm mx-16">
                    <li class="py-4">
                        <a href="javascript:void(0)">
                            Home
                        </a>
                    </li>
                    <li class="py-4 border-t border-gray-50 border-opacity-20">
                        <a id="quote-btn_sm" href="javascript:void(0)">
                            Get a Quote
                        </a>
                    </li>
                    <ul id="quote-menu_sm" class="hidden bg-dXlPurp rounded-lg py-3 mx-4">
                        <li class="py-3">
                            <a href="#msg" id="iconography_sm" class="py-4 px-4 hover:text-gray-50">
                                Iconography
                            </a>
                        </li>
                        <li class="py-3">
                            <a href="#msg" id="illustration_sm" class="py-4 px-4 hover:text-gray-50">
                                Illustration
                            </a>
                        </li>
                        <li class="py-3">
                            <a href="#msg" id="branding_sm" class="py-4 px-4 hover:text-gray-50">
                                Branding
                            </a>
                        </li>
                        <li class="py-3">
                            <a href="#msg" id="website_sm" class="py-4 px-4 hover:text-gray-50">
                                Website
                            </a>
                        </li>
                    </ul>
                    <li class="py-4 border-t border-gray-50 border-opacity-20">
                        <a id="projects-btn_sm" href="javascript:void(0)">
                            Live Sites
                        </a>
                    </li>
                    <ul id="projects-menu_sm" class="hidden bg-dXlPurp rounded-lg mx-4 mb-0 pb-0">
                        <li class="py-3">
                            <a href="https://almondtreewellness.co.ke/" class="py-4 px-4 hover:text-gray-50" target="_blank">
                                Almond Tree Wellness
                            </a>
                        </li>
                        <li class="py-3">
                            <a href="https://linchpin.co.ke/" class="py-4 px-4 hover:text-gray-50" target="_blank">
                                Linchpin Ltd.
                            </a>
                        </li>
                        <li class="py-3">
                            <a href="https://transken.co.ke/" class="py-4 px-4 hover:text-gray-50" target="_blank">
                                Transken Ltd
                            </a>
                        </li>
                        <li class="py-3">
                            <a href="javascript:void(0)" class="py-4 px-4 hover:text-gray-50" target="_blank">
                                Pumua (Coming Soon)
                            </a>
                        </li>
                        <li class="py-3">
                            <a href="https://ipconsultafrica.com/" class="py-4 px-4 hover:text-gray-50" target="_blank">
                                Integrated Partnership Consultants
                            </a>
                        </li>
                    </ul>
                    <li class="py-4 border-t border-gray-50 border-opacity-20">
                        <a id="social-btn_sm" href="javascript:void(0)">
                            Connect With Me
                        </a>
                    </li>
                    <ul id="social-menu_sm" class="hidden bg-dXlPurp rounded-lg mx-4 mb-0 pb-0">
                        <li class="py-3">
                            <a href="https://www.instagram.com/designedbymutai/" class="py-4 px-4 hover:text-gray-50" target="_blank">
                                Instagram
                            </a>
                        </li>
                        <li class="py-3">
                            <a href="https://www.pinterest.co.uk/markymarkmutai" class="py-4 px-4 hover:text-gray-50" target="_blank">
                                Pinterest
                            </a>
                        </li>
                        <li class="py-3">
                            <a href="https://www.reddit.com/user/designmuntu" class="py-4 px-4 hover:text-gray-50" target="_blank">
                                Reddit
                            </a>
                        </li>
                        <li class="py-3">
                            <a href="https://dribbble.com/markmutai" class="py-4 px-4 hover:text-gray-50" target="_blank">
                                Dribbble
                            </a>
                        </li>
                        <li class="py-3">
                            <a href="https://github.com/markmutai" class="py-4 px-4 hover:text-gray-50" target="_blank">
                                Github
                            </a>
                        </li>
                        <li class="py-3">
                            <a href="https://www.behance.net/designsbymutai" class="py-4 px-4 hover:text-gray-50" target="_blank">
                                Behance
                            </a>
                        </li>
                    </ul>
                    <li id="contact_sm" class="py-4 border-t border-gray-50 border-opacity-20">
                        <a href="app/dl/Mark Rutere Portfolio.pdf" target="_blank">Portfolio</a>
                    </li>
                    <li id="contact_sm" class="py-4 border-t border-gray-50 border-opacity-20">
                        <a href="#msg">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="container-fluid" class="container-fluid mm_fluid z-0 p-0 bg-ptn bg-100% dark:bg-ptnDrk">