<div class="w-full flex items-center justify-center mt-2">
    <a href="#top" class="duration-300 cursor-pointer flex items-center justify-center bg-indigo-800 hover:bg-lblue-500 hover:text-gray-50 dark:from-d2XlPurp rounded-full phone-m:w-10 phone-m:h-10 xl:h-12 xl:w-12 2xl:w-14 2xl:h-14">
        <i class="btp text-gray-50 lg:text-md xl:text-2xl fas fa-angle-up"></i>
    </a>
</div>
<div class="w-full btp_lbl flex justify-center items-center phone-m:mt-2 md:mt-3 text-dXlPurp dark:text-indigo-50">
    <a href="#top" class="duration-300 w-auto border-solid border-t border-dXlPurp border-opacity-30 phone-m:text-2.5xs lg:text-2xs 2xl:text-1.5xs hover:text-lblue-500 dark:text-opacity-100 dark:border-lblue-500 dark:border-opacity-60 mt-2 py-3 px-5">
        <span class="text-uppercase tracking-wider text-opacity-50">Back To Top</span>
    </a>
</div>
<footer class="frst_gls_ftr w-full rounded-none border-t-4 border-gray-50 border-opacity-60 bg-gray-50 bg-opacity-80 dark:bg-gray-400 dark:bg-pDrkBlue dark:bg-opacity-40 shadow-2xl dark:drop-shadow-none dark:border-opacity-0 md:px-4 lg:px-10 phone-m:mt-8 md:mt-12">
    <div id="container" class="container phone-m:max-w-5xl lg:max-w-3xl xl:max-w-4xl 2xl:max-w-5xl z-20 pb-1">
        <h4 class="flex items-center justify-center text-uppercase phone-m:h-12 md:h-14 xl:h-16 2xl:h-18 border-solid border-b border-dXlPurp border-opacity-15 dark:border-lblue-500 dark:border-opacity-20 w-full text-center tracking-wider phone-m:text-2.5xs phone-l:text-2xs md:text-xs 2xl:text-xsxmini text-dXlPurp text-opacity-80 dark:opacity-100 dark:text-indigo-100">Connect With Me</h4>
        <ul class="social_ftr relative z-50 phone-m:px-2 md:px-8 phone-m:text-lg phone-l:text-xl md:text-2xl 2xl:text-2.5xl phone-m:py-3 md:py-5 lg:py-6 xl:py-4 2xl:py-6 border-solid border-b border-dXlPurp border-opacity-15 dark:border-lblue-500 dark:border-opacity-20 text-dXlPurp opacity-95 dark:opacity-100 dark:text-indigo-50">
            <li>
                <a class="duration-200 hover:text-lblue-500" href="https://www.instagram.com/designedbymutai/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a class="duration-200 hover:text-lblue-500" href="https://www.pinterest.co.uk/markymarkmutai" target="_blank">
                    <i class="fab fa-pinterest"></i>
                </a>
            </li>
            <li>
                <a class="duration-200 hover:text-lblue-500" href="https://www.reddit.com/user/designmuntu" target="_blank">
                    <i class="fab fa-reddit"></i>
                </a>
            </li>

            <li>
                <a class="duration-200 hover:text-lblue-500" href="https://dribbble.com/markmutai" target="_blank">
                    <i class="fab fa-dribbble"></i>
                </a>
            </li>
            <li>
                <a class="duration-200 hover:text-lblue-500" href="https://github.com/markmutai" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
            </li>
            <!-- <li>
                <a class="duration-200 hover:text-lblue-500" href="https://www.behance.net/designsbymutai" target="_blank">
                    <i class="fab fa-behance"></i>
                </a>
            </li> -->

        </ul>
        <div class="copyright w-full flex items-center justify-center text-uppercase text-center phone-m:h-12 sm:h-12 md:h-16 xl:h-18 text-opacity-70 dark:text-opacity-40 phone-m:text-3.5xs phone-m:tracking-wider md:text-3xs xl:text-2xs sm:tracking-wider text-dXlPurp dark:opacity-100 dark:text-indigo-100">
            Copyright &copy;
            <script defer>
                var currentYear = new Date().getFullYear();
                document.write(currentYear);
            </script>, Designed By Mvtʌi. All Rights Reserved
        </div>
    </div>
    <!-- </div> -->

</footer>
</div>
</div>
<!-- container-fluid -->
</body>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    var dropQuote = $('#dropdown-quote-content');
    var dropProject = $('#dropdown-project-content');
    var dropShare = $('#dropdown-share-content');
    // var dropUser = $('#user-options');
    var dropAll = $('#dropdown-quote-content, #dropdown-project-content, #dropdown-share-content');

    $('#dropdown-quote').on('click', function() {
        dropQuote.toggleClass('hidden');
        dropProject.add(dropShare).addClass('hidden');
    });

    $('#dropdown-project').on('click', function() {
        dropProject.toggleClass('hidden');
        dropQuote.add(dropShare).addClass('hidden');
    });

    $('#dropdown-share').on('click', function() {
        dropShare.toggleClass('hidden');
        dropQuote.add(dropProject).addClass('hidden');
    });

    $('#dropdown-close, #container-fluid, #pg-intro, #quote-menu_sm, #contact, #contact_sm, #quote-menu_sm li, #social-menu_sm li, #projects-menu_sm li').on('click', function() {
        dropAll.addClass('hidden');
        $('#menu-btn').removeClass('opened');
    });
</script>
<script>
    $('#menu-btn').on('click', function() {
        $('#mobile-menu').toggleClass('hidden');
    });

    $('#container-fluid, #pg-intro').on('click', function() {
        $('#mobile-menu').addClass('hidden');
    })
</script>
<script>
    $('#quote-btn_sm').on('click', function() {
        $('#quote-menu_sm').toggleClass('hidden');
        $('#social-menu_sm').addClass('hidden');
        $('#projects-menu_sm').addClass('hidden');
    });

    $('#social-btn_sm').on('click', function() {
        $('#social-menu_sm').toggleClass('hidden');
        $('#quote-menu_sm').addClass('hidden');
        $('#projects-menu_sm').addClass('hidden');
    });

    $('#projects-btn_sm').on('click', function() {
        $('#projects-menu_sm').toggleClass('hidden');
        $('#social-menu_sm').addClass('hidden');
        $('#quote-menu_sm').addClass('hidden');
    });

    $('#quote-menu_sm li, #social-menu_sm li, #projects-menu_sm li, #contact_sm').on('click', function() {
        $('#quote-menu_sm, #social-menu_sm, #projects-menu_sm, #mobile-menu').addClass('hidden');
    });
</script>
<script>
    $('html').toggleClass(localStorage.toggled);


    function darkLight() {
        if (localStorage.toggled != 'dark') {
            $('html').toggleClass('dark', true);
            localStorage.toggled = "dark";
        } else {
            $('html').toggleClass('dark', false);
            localStorage.toggled = "";
        }
    }

    // localStorage.setItem("checkyCheck", "checked");

    if ($('html').hasClass('dark')) {
        $('#toggle').prop("checked", true);
    } else {
        $('#toggle').prop("checked", false)
    }

    // var toggleStateOn = $('#toggle');
</script>
<script>
    $('#toggle').on('click', function() {
        if ($('html').hasClass('dark')) {} else {
            $('#toggle').prop("checked", false)
        }
    })
</script>
<script src="./app/js/baguetteBox.js">
</script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
<script>
    $('#branding, #branding_sm').click(function() {
        $('#services').val('Branding').trigger('change');
    })
    $('#illustration, #illustration_sm').click(function() {
        $('#services').val('Illustration').trigger('change');
    })
    $('#iconography, #iconography_sm').click(function() {
        $('#services').val('Iconography').trigger('change');
    })
    $('#website, #website_sm').click(function() {
        $('#services').val('Website').trigger('change');
    })
    // $('#contact, #contact_sm').click(function() {
    //     $('#services').val('Other').trigger('change');
    // })
</script>
<script src="app/js/sparkle.js" type="text/javascript" async></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

</html>