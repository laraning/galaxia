@extends('galaxia-ui::layouts.dashboard')

@section('galaxia.body')

<div class="col-lg-4 col-xl-3 col-xlg-2">
    <div class="row">
        @glxcardstd('Welcome')
        Hi there {{ glx_user()->name }} !
        @endglxcardstd
    </div>
</div>

@endsection