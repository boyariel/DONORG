<div class="product-box">
    <div class="product-img">
        <center>
            <img class="img-fluid" id="{{$idImage}}" src="{{asset($urlImage)}}" alt="{{$alt}}" data-original-title="" width="{{$width}}" title="">
        </center>
        <div class="product-hover">
            <ul>
                <li>
                    <x-form route="{{$route}}" method="POST" id="{{$idForm}}" file="true" >
                        <div class="upload-btn-wrapper">
                            <button class="btn">
                                <i class="fa fa-photo"></i>
                            </button>
                            @isset($data)
                                {{$data}}
                            @endisset
                            <input type="file" name="photo" id="photo" />
                        </div>
                    </x-form>
                </li>
            </ul>
        </div>
    </div>
</div>
