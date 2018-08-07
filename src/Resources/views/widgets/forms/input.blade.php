@switch($type)

    @case('text')
    @case('password')

        @if(isset($append))
        <div class="form-group form-group-default input-group @if($errors->has($name)) has-error @endif">
            <div class="form-input-group">
        @else
        <div class="@if($errors->has($name)) has-error @endif form-group form-group-default @isset($required) required @endisset">
        @endif
            <label>{{ $title ?? '' }}</label>
            <input type="{{ $type ?? 'text' }}" name="{{ $name }}" placeholder="{{ $placeholder ?? '' }}" class="form-control" value="{{ $value ?? '' }}">
        </div>
        @break

    @case('checkbox')
        <div class="checkbox">
            <input type="checkbox" value="1" id="checkbox1">
            <label for="checkbox1">@lang('galaxia-text::login.form.keep_me_signed_in')</label>
        </div>
        @break

@endswitch

@if ($errors->has($name))
<label class="error bold" for="{{ $name }}">{{ $errors->first($name) }}</label>
@endif

<!--
<div class="form-group form-group-default input-group has-error">
                              <div class="form-input-group">
                                <label>Budget</label>
                                <input class="form-control usd" required="" aria-required="true" aria-invalid="true" data-original-title="" title="" aria-describedby="popover338397" type="text">
                              </div>
                              <div class="input-group-append ">
                                <span class="input-group-text">USD
                                      </span>
                              </div>
                            </div>-->