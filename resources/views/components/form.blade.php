<form class="form-vertical" novalidate action="{{$route}}" method="{{$method}}" id="{{$id}}" @isset($file) enctype="multipart/form-data" @endisset autocomplete="off">
  {{$slot}}
</form>

