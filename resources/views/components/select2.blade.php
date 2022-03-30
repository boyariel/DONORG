<div class="mb-2">
  <div class="col-form-label">{{$title}}</div>
  <div class="form-group">
    <select class="select2 col-sm-12" name="{{$name}}" @isset($id) id="{{$id}}" @endisset @isset($rules) {{$rules}} @endisset @isset($multiple) multiple="multiple" @endisset>
      @isset($customSelect)
          {{$customSelect}}
      @endisset
      @isset($options)
          @foreach($options as $option)
              <option value="{{$option->id}}">{{$option->name}}</option>
          @endforeach
      @endisset
    </select>
  </div>
</div>


