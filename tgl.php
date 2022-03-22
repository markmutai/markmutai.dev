<div class="kid_cudi flex justify-end items-center space-x-1 opacity-95 phone-m:text-xl xl:text-lg 2xl:text-xl">
    <span class="flex justify-center items-center phone-m:px-2 2xl:px-2"><i class="icon-sun text-gray-50 dark:text-gray-500 dark:text-opacity-75"></i></span>
    <div id="tgl" class="flex justify-center items-center">
        <input type="checkbox" onclick="darkLight()" id="toggle" class="hidden" />
        <label class="tglLabel flex justify-center items-center mx-auto" for="toggle">
            <div id="tglSwitch" class="cursor-pointer flex phone-m:items-center phone-m:justify-center xl:justify-start duration-300 toggle_bg phone-m:w-10 phone-m:h-6 xl:w-10 xl:h-5 2xl:w-12 2xl:h-6 items-center bg-opacity-70 dark:bg-opacity-90 phone-m:bg-lblue-500 xl:bg-d2XlPurp dark:bg-indigo-700 hover:bg-lblue-500 dark:hover:bg-lblue-500 rounded-full p-1.5" for="toggle">
                <div class="toggle_dot phone-m:w-4 phone-m:h-4 xl:w-3.5 xl:h-3.5 2xl:w-4 2xl:h-4 rounded-full transform duration-300 ease-in-out bg-white"></div>
            </div>
        </label>
    </div>
    <span class="flex items-center text-gray-500 text-opacity-75 dark:text-gray-50 phone-m:px-2 2xl:px-2"><i class="icon-moon phone-m:-mt-1 md:-mt-0.5"></i></span>
</div>
<script>
    $('.kid_cudi span').click(function() {
        $('#toggle').click();
    })
</script>