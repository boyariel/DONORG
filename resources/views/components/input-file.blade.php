<div class="col">
  <div class="form-group row">
    <label class=" col-form-label">{{$title}}</label>
    <div class="custom-file">
      <input class="form-control" type="file" name="{{$name}}[]" @isset($multiple) multiple="multiple" @endisset>
    </div>
  </div>
</div>
