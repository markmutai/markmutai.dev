<div id="msg" class="frst_gls_inf chnk bg-gray-50 bg-opacity-50 phone-m:rounded-none phone-l:rounded-lg md:rounded-xl dark:border-opacity-0 dark:bg-pDrkBlue dark:bg-opacity-40 dark:drop-shadow-none phone-m:w-full phone-l:w-11/12 md:w-10/12 lg:w-8/12 xl:w-8/12 2xl:w-11/12 phone-m:mt-10 lg:mt-16 2xl:mt-24">

    <!-- title -->
    <h3 class="h3_styl tracking-wide phone-m:text-xsxmini phone-l:text-minixsm md:text-sm 2xl:text-tinyxsm dark:border-lblue-500 dark:border-opacity-5 dark:opacity-100 dark:text-indigo-100 phone-m:py-5 phone-l:py-5 xl:py-6 2xl:py-7">Contact</h3>

    <!-- information -->
    <div class="content row w-full rounded-b-2xl mx-0 bg-gray-50 bg-opacity-70 dark:bg-pDrkBlue dark:bg-opacity-20 phone-m:pb-8 md:pb-10 lg:pb-12">
        <form class="col-xl-12 contact-form ajax mm-message-form text-center mt-4 text-dXlPurp dark:text-indigo-100 md:pt-2 xl:pt-4 md:px-16 lg:px-20 xl:px-20 2xl:px-36 z-50" id="message-form" action="phpmailer/index.php" method="post">
            <div class="form-group lg:mb-7 xl:mb-8">
                <input type="text" id="name" name="name" placeholder="Name" class="form-control message-input border-2 border-dXlPurp border-opacity-5 phone-m:h-12 md:h-10 lg:h-12 xl:h-16 phone-m:px-3 lg:px-3.5 xl:px-4 rounded-sm text-dXlPurp phone-m:text-mini md:text-mini lg:text-sm 2xl:text-tiny placeholder-dXlPurp placeholder-opacity-75 dark:placeholder-indigo-200 dark:text-indigo-100 dark:bg-d3XlPurp" required>
                <input type="hidden" id="surname" name="surname" placeholder="Surname" class="form-control message-input border-2 border-dXlPurp border-opacity-5 phone-m:h-12 md:h-10 lg:h-12 xl:h-16 phone-m:px-3 lg:px-3.5 xl:px-4 rounded-sm text-dXlPurp phone-m:text-mini md:text-mini lg:text-sm 2xl:text-tiny placeholder-dXlPurp placeholder-opacity-75 dark:placeholder-indigo-200 dark:text-indigo-100 dark:bg-d3XlPurp">
            </div>
            <div class="form-group lg:mb-7 xl:mb-8">
                <input type="email" id="email" name="email" placeholder="Email" class="form-control message-input border-2 border-dXlPurp border-opacity-5 phone-m:h-12 md:h-10 lg:h-12 xl:h-16 phone-m:px-3 lg:px-3 xl:px-4 rounded-sm text-dXlPurp phone-m:text-mini md:text-mini lg:text-sm 2xl:text-tiny placeholder-dXlPurp placeholder-opacity-75 dark:placeholder-indigo-200 dark:text-indigo-100 dark:bg-d3XlPurp" required>
            </div>
            <div class="form-group mm-servies-lst styled-select mb-7">
                <select name="services" id="services" class="form-control message-input border-2 border-dXlPurp border-opacity-5 phone-m:h-12 md:h-10 lg:h-12 xl:h-16 rounded-sm text-dXlPurp text-opacity-75 dark:text-indigo-100 dark:bg-d3XlPurp mm-services-opt phone-m:text-xsxmini md:text-mini lg:text-sm 2xl:text-tiny">
                    <option value="Saying Hi">Saying Hi</option>
                    <option value="Branding">Branding Enquiry</option>
                    <option value="Illustration">Illustration Enquiry</option>
                    <option value="Iconography">Iconography Enquiry</option>
                    <option value="Website">Web Development Enquiry</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group lg:mb-7 xl:mb-8">
                <textarea name="comment" id="comment" placeholder="Message" cols="30" rows="10" class="form-control message-input border-solid border-2 border-dXlPurp border-opacity-5 sm:h-10 lg:h-12 xl:h-16 phone-m:pt-3 lg:pt-3 xl:pt-4 phone-m:px-3 lg:px-3.5 xl:px-4 rounded-sm text-dXlPurp phone-m:text-xsxmini md:text-mini lg:text-sm 2xl:text-tiny placeholder-dXlPurp placeholder-opacity-75 dark:placeholder-indigo-200 dark:text-indigo-100 dark:bg-d3XlPurp" required></textarea>
            </div>
            <div class="flex-column justify-center">
                <div class="recaptcha-wrapper phone-m:border-t-4 md:border-t-6 bdr_dtd dark:border-lblue-500 dark:border-opacity-60 text-dXlPurp dark:text-indigo-50 mt-10 pt-4">
                    <div class="g-recaptcha" data-sitekey="6LcYFn8UAAAAALgR-2LZrkOVJrR_IWT6okU5DeIu"></div>
                </div>
                <div class="btn-wrapper snd-wrapper col-md-12 p-0">
                    <button id="submit" class="btn snd-btn snd-btn-norm submit duration-300 text-center phone-m:w-full sm:w-8/12 mx-auto mt-4 phone-m:h-12 phone-l:h-14 xl:h-16 bg-indigo-800 hover:bg-lblue-500 phone-m:text-sm md:text-sm 2xl:text-base phone-m:tracking-normal lg:tracking-smidge" value="Send">
                        <div class="col-md-12">
                            <span class="my-1">Send Message</span>
                            <div class="lds-ellipsis">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </button>
                    <button class="btn snd-btn snd-btn-success duration-300 text-center phone-m:w-full sm:w-8/12 mx-auto mt-4 phone-m:h-12 phone-l:h-14 xl:h-16 bg-lime-500 phone-m:text-sm md:text-sm 2xl:text-base phone-m:tracking-normal lg:tracking-smidge">
                        <span class="my-1">Sent</span>
                        <div class="snd-ico">
                            <i class="fas fa-check success-ico"></i>
                        </div>
                    </button>
                    <button id="submit" class="btn snd-btn snd-btn-fail duration-300 text-center submit mm-call-action mx-auto mt-4 phone-m:w-full sm:w-8/12 phone-m:h-12 phone-l:h-14 xl:h-16 bg-red-700 hover:bg-red-800 phone-m:text-sm md:text-sm 2xl:text-base phone-m:tracking-normal lg:tracking-smidge" value="Send">
                        <div class="col-md-12">
                            <span class="my-1">Failed. Retry&#63;</span>
                            <div class="snd-ico">
                                <i class="fas fa-redo retry-ico"></i>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- message section -->
</div>
<script defer>
    $('input').add('textarea').blur(function() {
        var spinLoad = $(".lds-ellipsis");
        var btnLabel = $(".snd-btn-norm span");

        if (!$(this).val().length != '') {
            return false;
        } else {
            $(".submit").on("click", function() {
                btnLabel.text("Send Message").fadeOut(0);
                btnLabel.fadeIn(1000).text("Sending...");
                btnLabel.addClass("pulse");
                spinLoad.addClass("lds-ellipsis-active");
                spinRetry.addClass("spinnit");
            });
        };
    });

    var spinRetry = $(".retry-ico");
    var failLabel = $(".snd-btn-fail span");

    $(".snd-btn-fail").on("click", function() {
        $(".snd-btn-fail").removeClass("shake-no");
        failLabel.text("Send Message").fadeOut(0);
        failLabel.fadeIn(1000).text("Retrying...");
        failLabel.addClass("pulse");
        spinRetry.addClass("spinnit");
    });
</script>
<script defer>
    $('form.ajax').on('submit', function() {
        var that = $(this),
            url = that.attr('action'),
            type = that.attr('method'),
            data = {};

        that.find('[name]').each(function(index, value) {
            var that = $(this),
                name = that.attr('name'),
                value = that.val();

            data[name] = value;
        });

        var sndNorm = $(".snd-btn-norm"),
            lblNorm = $(".snd-btn-norm span"),
            sndSuccess = $(".snd-btn-success"),
            sndFail = $(".snd-btn-fail"),
            lblFail = $(".snd-btn-fail span"),
            gCaptcha = $(".recaptcha-wrapper");

        function gCaptchaGo() {
            gCaptcha.fadeOut(1200);
        };

        $.ajax({
            url: 'phpmailer/index.php',
            type: type,
            data: data,
            success: function(response) {
                if (response == "success") {
                    lblNorm.add(lblFail).removeClass("pulse");
                    sndSuccess.addClass("snd-state-on").removeClass("snd-state-off");
                    sndNorm.add(sndFail).removeClass("snd-state-on");
                    sndNorm.add(sndFail).addClass("snd-state-off");
                    sndFail.removeClass("shake-no");
                    setTimeout(gCaptchaGo, 2500);
                    $("input, select, textarea").attr('disabled', 'disabled');
                    $(".retry-ico").removeClass("spinnit");
                } else {
                    lblFail.text("Failed. Retry?");
                    lblFail.removeClass("pulse");
                    sndFail.addClass("snd-state-on").removeClass("snd-state-off");
                    sndFail.addClass("shake-no");
                    sndNorm.add(sndSuccess).removeClass("snd-state-on");
                    sndNorm.add(sndSuccess).addClass("snd-state-off");
                    $(".retry-ico").removeClass("spinnit");
                }
            }
        });
        return false;
    });
</script>