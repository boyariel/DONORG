@extends('layouts.contentLayoutMaster')
@section('page-css')
<style>
    .datepicker{z-index:1151 !important;}
</style>
@endsection
@section('content')
<section id="register_patient">
    <x-row>
        <x-col sm="12" xs="12" md="12" lg="12">
            <x-card>
                <x-slot name="title">{{__('common.section_title.register_patient')}}</x-slot>
                @include('patient.register')
            </x-card>
        </x-col>
    </x-row>
</section>
<section id="update_patient" style="display: none">
    <x-row>
        <x-col sm="12" xs="12" md="12" lg="12">
            <x-card>
                <x-slot name="title">{{__('common.section_title.edit_patient')}}</x-slot>
                @include('patient.edit')
            </x-card>
        </x-col>
    </x-row>
</section>

<x-row class="pt-5">
    <x-col sm="12" xs="12" md="12" lg="12">
        <x-card>
            <x-slot name="title">{{__('common.table_title.list_patient')}}
                {{--  <div class="card-header-right-icon">
                    <select class="button btn btn-primary">
                      <option>Today</option>
                      <option><a href="#!" onclick="get_actives(`{{route('get_patients')}}`,table_patient_instance);" >Activos</a></option>
                      <option><a href="#!" onclick="get_inactives(`{{route('get_patients_delete')}}`,table_patient_instance);">Inactivos</a></option>
                    </select>
                </div>  --}}
            </x-slot>
            @include('patient.list')
        </x-card>
    </x-col>
</x-row>

{{--  <x-modal title="Nuevo Tutor" id="modal_add_tutor">
    @include('tutor.register')
</x-modal>

<x-modal title="Nuevo Curso" id="modal_add_courses">
    @include('course.register')
</x-modal>

<x-modal title="Informacion Estudiante" id="modal_info_patient">
    <div id="container_info_patient"></div>
</x-modal>  --}}
@endsection

@section('page-scripts')
    <script src="{{asset('js/pages/patients/main.js')}}" type="module"></script>
    <script src="{{asset('js/pages/patients/crud.js')}}" type="module"></script>

    <script>
        $('#thead_patients').html(`<tr>
            <th>{{__('common.table.options')}}</th>
            <th>{{__('common.table.name')}}</th>
            <th>{{__('common.table.personal_id')}}</th>
            <th>{{__('common.table.code')}}</th>
        </tr>`)
    </script>
    <script>
        $('#cancel_patient').click(function(){
            $('#register_patient').show();
            $('#update_patient').hide();
        });
    </script>
    <script>
        $('#cancel_register_course').click(function() {
            $('#modal_add_courses').modal('toggle')
        });

    </script>

@endsection
