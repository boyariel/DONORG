<div class="card shadow shadow-showcase bounceInLeft animated" @isset($id) id="{{$id}}" @endisset>
    <div class="card-header bg-dark">
        <h5>{{$title}}</h5>
        <div class="card-header-right bg-dark">
            <ul class="list-unstyled card-option" style="width: 100px;">
                <li><i class="text-white icofont icofont-minus minimize-card"></i></li>
                @isset($otherOption)
                    {{$otherOption}}
                @endisset
            </ul>
        </div>
    </div>
    <div class="card-body">
        {{$slot}}
    </div>
</div>
