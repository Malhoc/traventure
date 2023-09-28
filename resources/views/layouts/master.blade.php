<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
    <div class="page-wrapper">

        @include('partials.loader')

        @include('partials.header')

        @yield('content')

        @include('partials.footer')

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon"><img
                    src="{{ asset('assets/website') }}/images/icons/arrow-up.svg" alt="" title="Go To Top"></span>
        </div>

        @include('partials.script')

    </div>
</body>

</html>
