{{--
Card Standard widget - Creates a card with a possible title.

Example:
@glxcardstd('Hi there')

Parameters:
- (string) Card title.

Example:
@glxcardstd('Hi there')
<strong>Okay Okay boss!</strong>
@endglxcardstd

Remark: Needs the @endglxcardstd at the end to close the tags.
 --}}

<div class="card card-default">
    @isset($title)
    <div class="card-header ">
        <div class="card-title">
            {{ $title }}
        </div>
    </div>
    @endisset
    <div class="card-body">