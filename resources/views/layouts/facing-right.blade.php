<!DOCTYPE html>
<html>
    @include('galaxia-ui::defaults.head')
    <body class="fixed-header menu-pin menu-behind">
        <div class="login-wrapper">
            <!-- START Login Background Pic Wrapper-->
            <div class="bg-pic">
                <!-- START Background Pic-->
                <img src="{{ $background ?? null }}" class="lazy">
                <!-- END Background Pic-->
                <!-- START Background Caption-->
                <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
                    <h2 class="semi-bold text-white">{{ $jumbo_title ?? null }}</h2>
                    <p class="small">{{ $jumbo_baseline ?? null }}</p>
                </div>
                <!-- END Background Caption-->
            </div>
            <!-- END Login Background Pic Wrapper-->
            <!-- START Login Right Container-->
            <div class="login-container bg-white">
                @yield('galaxia.body')
            </div>
            <!-- END Login Right Container-->
        </div>
        @include('galaxia-ui::defaults.scripts')
    </body>