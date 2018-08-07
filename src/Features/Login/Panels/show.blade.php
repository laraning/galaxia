@extends('galaxia-ui::layouts.facing-right', ['background'     => '/galaxia/features/login/background.jpg',
                                              'jumbo_title'    => __('galaxia-text::login.background.title'),
                                              'jumbo_baseline' => __('galaxia-text::login.background.baseline')])

@section('galaxia.body')
<div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
    <img src="@glxlogo('light','w78')" alt="logo">
    <p class="p-t-35">@lang('galaxia-text::login.form.title')</p>
    <!-- START Login Form -->
    <form id="form-login" class="p-t-15" role="form" method="post" action="{{ route('galaxia.login.do') }}">
        @glxinput(['title' => 'Email', 'placeholder' => 'Your email', 'name' => 'email', 'required' => true])
        @glxinput(['title' => 'Password', 'placeholder' => 'Your password', 'name' => 'password', 'type' => 'password', 'required' => true])
        <!-- START Form Control-->
        <div class="row">
            <div class="col-6 no-padding sm-p-l-6">
                <div class="checkbox">
                    <input type="checkbox" value="1" id="checkbox1">
                    <label for="checkbox1">@lang('galaxia-text::login.form.keep_me_signed_in')</label>
                </div>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-end">
                <a href="#" class="text-info small">@lang('galaxia-text::login.form.forgot_password')</a>
            </div>
        </div>
        <!-- END Form Control-->
        <button class="btn btn-primary btn-cons m-t-10" type="submit">@lang('galaxia-text::login.form.sign_in')</button>
    </form>
    <!--END Login Form-->
    <div class="pull-bottom sm-pull-bottom">
        <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix m-t-20">
            <div class="col-sm-12 no-padding m-t-20">
                <p>
                    <small>
                    Copyright © {{ date('Y') }}, {{ config('app.name') }} all rights reserved.<br/>
                    <div class="no-padding m-t-20">
                        <a href="#">@glxfa('facebook', 'size-big text-primary')</a>
                    </div>
                    </small>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection