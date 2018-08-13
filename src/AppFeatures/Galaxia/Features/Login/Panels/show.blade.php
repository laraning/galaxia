@extends('galaxia-ui::layouts.facing-right', ['background'     => '/galaxia/features/login/background.jpg',
                                              'jumbo_title'    => __('galaxia-text::login.background.title'),
                                              'jumbo_baseline' => __('galaxia-text::login.background.baseline')])

@section('galaxia.body')
<div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
    <img src="@glxlogo('light','w78')" alt="logo">
    <p class="p-t-35">@lang('galaxia-text::login.form.title')</p>
    <form id="form-login" class="p-t-15" role="form" method="post" action="{{ route('galaxia.login.do') }}">

        @csrf

        @glxinput(['title' => 'Email',
                   'placeholder' => 'Your email',
                   'name' => 'email',
                   'required' => true])

        @glxinput(['title' => 'Password',
                   'placeholder' => 'Your password',
                   'name' => 'password',
                   'type' => 'password',
                   'required' => true])

        @if ($errors->has('attempt'))
        <label class="error bold">{{ $errors->first('attempt') }}</label>
        @endif

        <div class="row">
            <div class="col-6 sm-p-l-6">

                @glxcheckbox(['name' => 'remember',
                              'title' => 'Keep me signed in',
                              'color' => 'check-success',
                              'value' => 1])

            </div>
            <div class="col-6 d-flex align-items-center justify-content-end">
                <a href="#" class="">@lang('galaxia-text::login.form.forgot_password')</a>
            </div>
        </div>
        <button class="btn btn-primary btn-cons m-t-10" type="submit">@lang('galaxia-text::login.form.sign_in')</button>
    </form>
    <div class="pull-bottom sm-pull-bottom">
        <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix m-t-20">
            <div class="col-sm-12 no-padding m-t-20">
                <p>
                    <small>
                    @lang('galaxia-text::login.footer.title')
                    @lang('galaxia-text::login.footer.baseline')
                    <div class="m-t-20">
                        @if(!empty(config('galaxia.social.facebook'))) <a href="{{ config('galaxia.social.facebook') }}" target="_blank">@glxfa('facebook', 'size-big text-primary')</a>&nbsp; @endif
                        @if(!empty(config('galaxia.social.instagram'))) <a href="{{ config('galaxia.social.instagram') }}" target="_blank">@glxfa('instagram', 'size-big text-primary')</a>&nbsp; @endif
                        @if(!empty(config('galaxia.social.linkedin'))) <a href="{{ config('galaxia.social.linkedin') }}" target="_blank">@glxfa('linkedin', 'size-big text-primary')</a>&nbsp; @endif
                        @if(!empty(config('galaxia.social.twitter'))) <a href="{{ config('galaxia.social.twitter') }}" target="_blank">@glxfa('twitter', 'size-big text-primary')</a>&nbsp; @endif
                        @if(!empty(config('galaxia.social.reddit'))) <a href="{{ config('galaxia.social.reddit') }}" target="_blank">@glxfa('reddit', 'size-big text-primary')</a>&nbsp; @endif
                        @if(!empty(config('galaxia.social.digg'))) <a href="{{ config('galaxia.social.digg') }}" target="_blank">@glxfa('digg', 'size-big text-primary')</a>&nbsp; @endif
                    </div>
                    </small>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection