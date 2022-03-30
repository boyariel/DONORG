@extends('layouts.contentLayoutMaster')

@section('content')
<section id="register_director">
    <x-row>
        <x-col sm="12" xs="12" md="12" lg="12">
            <x-card>
                <x-slot name="title">{{__('common.section_title.register_director')}}</x-slot>
                @include('director.register')
            </x-card>
        </x-col>
    </x-row>
</section>
<section id="update_director" style="display: none">
    <x-row>
        <x-col sm="12" xs="12" md="12" lg="12">
            <x-card>
                <x-slot name="title">{{__('common.section_title.edit_director')}}</x-slot>
                @include('director.edit')
            </x-card>
        </x-col>
    </x-row>
</section>

<x-row class="pt-5">
    <x-col sm="12" xs="12" md="12" lg="12">
        <x-card>
            <x-slot name="title">{{__('common.table_title.list_director')}}
            </x-slot>
            <x-slot name="otherOption">
                <li><i class="text-white fa fa-trash"></i></li>
                <li><i class="text-white fa fa-check-circle"></i></li>
            </x-slot>
            @include('director.list')
        </x-card>
    </x-col>
</x-row>
@endsection

@section('page-scripts')
    <script src="{{asset('js/pages/directors/main.js')}}" type="module"></script>
    <script src="{{asset('js/pages/directors/crud.js')}}" type="module"></script>

    <script>
        $('#thead_directors').html(`<tr>
            <th>{{__('common.table.options')}}</th>
            <th>{{__('common.table.name')}}</th>
            <th>{{__('common.table.email')}}</th>
        </tr>`)
    </script>
    <script>
        $('#cancel_director').click(function(){
            $('#register_director').show();
            $('#update_director').hide();
        });
    </script>

@endsection
