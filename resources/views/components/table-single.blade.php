<div class="table-responsive">
    <table class="table table-bordered " style="width: 100%" id="{{$id}}">
        <thead class="table-dark">
            @isset($thead) {{$thead}} @endisset
        </thead>
        <tbody id="{{$idBody}}">
            @isset($body) {{$body}} @endisset
        </tbody>
    </table>
</div>
