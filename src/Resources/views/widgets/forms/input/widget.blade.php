{{--

Input widget - Create a HTML input (text, password, not checkbox neither radio).

Parameters:
append - (string) Text to append at the end of the field.
required - (boolean) Shows a star (asterisk) at the end of the field.
disabled - (boolean) Puts the field disabled.
title - (string) Field title.
name - (string, required) The field name.
icon - (string class) Font Awesome class icon.
icon_color - (string class) Color class for the font awesome icon.
type - (string) text or password.
 --}}

@include('galaxia-ui::widgets.forms.input.head')

@isset($append)
<div class="form-input-group">
@else
<div class="form-group
            form-group-default
            @isset($required) required @endisset
            @isset($disabled) disabled @endisset
            @if($errors->has($name)) has-error @endif ">
@endisset
    <label>{{ $title }} @isset($icon) <i class="fa fa-{{ $icon }} {{ $icon_color ?? 'text-primary' }} m-l-5"></i> @endisset</label>
    <input class="form-control"
           type="{{ $type ?? 'text' }}"
           @isset($disabled) disabled @endisset>
</div>
@isset($append)
<div class="input-group-append">
    <span class="input-group-text">{{ $append }}</span>
</div>
@endisset

@include('galaxia-ui::widgets.forms.input.footer')

@if ($errors->has($name))
<label class="error bold" for="{{ $name }}">{{ $errors->first($name) }}</label>
@endif
