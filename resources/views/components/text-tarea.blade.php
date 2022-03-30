<div class="form-group>
    <label for="{{ $id }}">{{ $text_label }} @isset($rules) <span class="text-danger">*</span>@endisset</label>
    <textarea name="{{$name}}" class="form-control" rows="2" cols="2" @isset($rules) {{$rules}} @endisset placeholder="{{$text_label}}" @isset($value) value="{{$value}}" @endisset @isset($id) id="{{$id}}" @endisset></textarea>
    <div class="invalid-feedback">{{$text_label}}.</div>
</div>
