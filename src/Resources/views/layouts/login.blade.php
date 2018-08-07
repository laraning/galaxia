<!DOCTYPE html>
<html>
    @include('galaxia-ui::defaults.head')
    <body class="fixed-header menu-pin menu-behind">
        <div class="login-wrapper ">
            <!-- START Login Background Pic Wrapper-->
            <div class="bg-pic">
                <!-- START Background Pic-->
                <img src="/galaxia/custom/login/img/background.jpg" data-src="/galaxia/custom/login/img/background.jpg" data-src-retina="/galaxia/custom/login/img/background.jpg" alt="" class="lazy">
                <!-- END Background Pic-->
                <!-- START Background Caption-->
                <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
                    <h2 class="semi-bold text-white">@lang('galaxia-text::login.background.title')</h2>
                    <p class="small">@lang('galaxia-text::login.background.baseline')</p>
                </div>
                <!-- END Background Caption-->
            </div>
            <!-- END Login Background Pic Wrapper-->
            <!-- START Login Right Container-->
            <div class="login-container bg-white">
                <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
                    <img src="/galaxia/custom/login/img/logo-light-78x22.png" alt="logo" data-src="/galaxia/custom/login/img/logo-light-78x22.png" data-src-retina="/galaxia/custom/login/img/logo-light-78x22_2x.png" width="78" height="22">
                    <p class="p-t-35">@lang('galaxia-text::login.form.title')</p>
                    <!-- START Login Form -->
                    <form id="form-login" class="p-t-15" role="form" action="{{ route('galaxia.login.do') }}">
                        @component('galaxia-ui::widgets.forms.input', ['type' => 'text', 'title' => 'Email', 'placeholder' => __('galaxia-text::login.form.login_placeholder'), 'name' => 'email', 'value' => old('email'), 'required' => true])
                        @component('galaxia-ui::widgets.forms.input', ['type' => 'password', 'title' => 'Password', 'placeholder' => __('galaxia-text::login.form.password_placeholder'), 'name' => 'password', 'append' => 'CHF', 'required' => true])
                        <!-- START Form Control-->
                        <div class="row">
                            <div class="col-md-6 no-padding sm-p-l-10">
                                <div class="checkbox">
                                    <input type="checkbox" value="1" id="checkbox1">
                                    <label for="checkbox1">@lang('galaxia-text::login.form.keep_me_signed_in')</label>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-items-center justify-content-end">
                                <a href="#" class="text-info small">@lang('galaxia-text::login.form.forgot_password')</a>
                            </div>
                        </div>
                        <!-- END Form Control-->
                        <button class="btn btn-primary btn-cons m-t-10" type="submit">@lang('galaxia-text::login.form.sign_in')</button>
                    </form>
                    <!--END Login Form-->
                    <div class="pull-bottom sm-pull-bottom">
                        <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
                            <div class="col-sm-3 col-md-2 no-padding">
                                <img alt="" class="m-t-5" data-src="/galaxia/custom/login/img/logo-light-60x60.png" data-src-retina="/galaxia/custom/login/img/logo-light-60x60_2x.png" height="60" src="/galaxia/custom/login/img/logo-light-60x60.png" width="60">
                            </div>
                            <div class="col-sm-9 no-padding m-t-10">
                                <p>
                                    <small>
                                    Create a pages account. If you have a facebook account, log into it for this
                                    process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#"
                                        class="text-info">Google</a>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Login Right Container-->
        </div>
        <!-- START OVERLAY -->
        <div class="overlay hide" data-pages="search">
            <!-- BEGIN Overlay Content !-->
            <div class="overlay-content has-results m-t-20">
                <!-- BEGIN Overlay Header !-->
                <div class="container-fluid">
                    <!-- BEGIN Overlay Logo !-->
                    <img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
                    <!-- END Overlay Logo !-->
                    <!-- BEGIN Overlay Close !-->
                    <a href="#" class="close-icon-light overlay-close text-black fs-16">
                    <i class="pg-close"></i>
                    </a>
                    <!-- END Overlay Close !-->
                </div>
                <!-- END Overlay Header !-->
            </div>
            <!-- END Overlay Content !-->
        </div>
        <!-- END OVERLAY -->
        @include('galaxia-ui::defaults.scripts')
    </body>