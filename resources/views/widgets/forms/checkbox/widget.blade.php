{{--
Checkbox widget - Create a HTML checkbox.

Example:
@glxcheckbox(['color' => 'check-success',
              'value' => '1',
              'name' => 'signedin',
              'title' => 'Keep signed in'])

Parameters:
color - (string) color checkbox class name.
value - (string) value when checked.
name - (string, required) checkbox name.
title - (string) checkbox label.
disabled - (boolean) Disables the checkbox.
 --}}

<div class="checkbox {{ $color ?? null }}">
    <input type="checkbox" @isset($disabled) disabled="disabled" @endisset value="{{ $value ?? null }}" name="{{ $name }}" id="{{ $name }}">
    <label for="{{ $name }}">{{ $title }}</label>
</div>
@if ($errors->has($name))
<label class="error bold" for="{{ $name }}">{{ $errors->first($name) }}</label>
@endif

