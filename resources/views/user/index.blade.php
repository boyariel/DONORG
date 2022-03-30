@extends('layouts.contentLayoutMaster')

@section('content')
<section id="register_user">
    <x-row>
           <x-col col="" sm="12" xs="12" md="12" lg="12">
            <x-card>
                <x-slot name="title">{{__('common.section_title.register_user')}}</x-slot>
                @include('user.register')
            </x-card>
           </x-col>
    </x-row>
</section>
<section id="update_user" style="display: none">
    <x-row>
           <x-col col="" sm="12" xs="12" md="12" lg="12">
            <x-card>
                <x-slot name="title">{{__('common.section_title.edit_user')}}</x-slot>
                @include('user.edit')
            </x-card>
           </x-col>
    </x-row>
</section>
<x-row>
    <x-col sm="12" xs="12" md="12" lg="12">
        <x-card>
            <x-slot name="title">{{__('common.table_title.list_user')}}
            </x-slot>
            <x-slot name="otherOption">
                <li><i class="text-white fa fa-trash"></i></li>
                <li><i class="text-white fa fa-check-circle"></i></li>
            </x-slot>
            @include('user.list')
        </x-card>
    </x-col>
</x-row>
@endsection

@section('page-scripts')
    <script src="{{asset('js/pages/users/main.js')}}" type="module"></script>
    <script src="{{asset('js/pages/users/crud.js')}}" type="module"></script>
    <script>
        $('#thead_users').html(`<tr>
            <th>{{__('common.table.options')}}</th>
            <th>{{__('common.table.name')}}</th>
            <th>{{__('common.table.email')}}</th>
            <th>{{__('common.table.rol')}}</th>
            <th>{{__('common.table.is_power_user')}}</th>
        </tr>`)
    </script>
    <script>
        $('#cancel_user').click(function(){
            $('#register_user').show();
            $('#update_user').hide();
        });
    </script>
@endsection
