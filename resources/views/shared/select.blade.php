@php
$label ??= ucfirst($name);
$type ??= 'text';
$class ??='null';
$name ??= '';
$value ??= '';
@endphp

<div @class(["form-group", $class])>

    <label for="{{$name}}">{{$label}}</label>

    <select name="{{$name}}[]" id="{{$name}}" multiple>
        
    </select>

    @error($name)
       <div class="invalid-feedback">
           {{ $message }}
       </div>
    @enderror

</div>

