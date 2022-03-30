<div class="form-group">
    <label class="col-form-label" for="{{$name}}">{{$label}}</label>
    <div class="input-group">
        <input class="datepicker-here form-control"
               type="text"
               name="{{$name}}"
               @isset($id) id="{{$id}}" @endisset
               data-language="es"
               data-original-title=""
               @isset($range)
               data-range="true"
               data-multiple-dates-separator=" - "
               @endisset
               @isset($value)
               value="{{$value}}"
               @endisset
               title="">
    </div>
</div>
