<label @isset($id) for="{{$id}}" @endisset class="d-block" >
@isset($title)
  {{$title}}
@endisset
    <input type="checkbox" class="checkbox_animated" @isset($id) id="{{$id}}" @endisset value="{{$value}}" name="{{$name}}" data-name="{{$name}}" @if($checked != '0') checked @endif @isset($rules) {{$rules}} @endisset >
</label>

