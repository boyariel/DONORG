<div class="form-group">
    <label class="col-form-label" for="{{$name}}">{{$label}}</label>
    <div class="col-xl-12 col-sm-7 col-lg-8">
      <input class="form-control datetimepicker-input" id="dt-noicon" type="text"  name="{{$name}}"
      @isset($id) id="{{$id}}" @endisset data-toggle="datetimepicker" data-target="#dt-noicon">
    </div>
</div>
