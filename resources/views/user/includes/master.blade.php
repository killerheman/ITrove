<!DOCTYPE html>
<html lang="en">

<head>
   @include('user.includes.head')
   @yield('head')
</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        {{-- <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="b" class="letters-loading">
                                b
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="h" class="letters-loading">
                                h
                            </span>
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- preloader end -->

        <div class="loader-wrap" >
            <div class="preloader">
                <div id="handle-preloader" class="handle-preloader">
                    <div class="loader">
                        <div class="one"></div>
                        <div class="two"></div>
                        <div class="three"></div>
                        <div class="four"></div>
                        <div class="five"></div>
                        <div class="six"></div>
                        <div class="seven"></div>
                        <div class="eight"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- header-section -->
        @include('user.includes.header')
        <!-- header-section end -->

        @yield('content')


        <!-- main-footer -->
        @include('user.includes.footer')
        <!-- main-footer end -->


        <!-- scroll to top -->
        <button class="scroll-top style-two scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>


    </div>

    @include('sweetalert::alert')
    @include('user.includes.foot')

</body><!-- End of .page_wrapper -->

</html>
