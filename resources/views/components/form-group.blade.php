<div class="control-group  mb-2">
  <label class="control-label"
         for="{{$name}}">
                {{$text_label}}
          @isset($required) <span class="text-danger">*</span>@endisset
  </label>
  <div class="controls">
      <input type="{{$type}}"
             name="{{$name}}"
             class="form-control"
             @isset($rules) {{$rules}} @endisset
             placeholder="{{$text_label}}"
             @isset($value) value="{{$value}}" @endisset
             @isset($id) id="{{$id}}" @endisset>
  </div>
</div>
