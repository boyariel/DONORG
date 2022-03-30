<x-form method="POST" id="form_patient" file="true">
    <x-slot name="route">{{route('patient_store')}}</x-slot>
    <x-row>
        <x-col sm="12" xs="12" md="4" lg="4">
            <x-form-group type="text" name="name" id="first_name" required="1">
                <x-slot name="name_label">first_name</x-slot>
                <x-slot name="text_label">{{__('label.first_name')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-form-group>
            <x-form-group type="text" name="last_name_father" id="last_name_father" required="1">
                <x-slot name="name_label">last_name_father</x-slot>
                <x-slot name="text_label">{{__('label.last_name_father')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-form-group>
            <x-form-group type="text" name="last_name_mother" id="last_name_mother" required="1">
                <x-slot name="name_label">last_name_mother</x-slot>
                <x-slot name="text_label">{{__('label.last_name_mother')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-form-group>
            <x-form-group type="text" name="personal_id" id="personal_id" required="1">
                <x-slot name="name_label">personal_id</x-slot>
                <x-slot name="text_label">{{__('label.personal_id')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-form-group>
        </x-col>
        <x-col sm="12" xs="12" md="4" lg="4">
            <x-form-group type="text" name="code" id="code" required="1">
                <x-slot name="name_label">code</x-slot>
                <x-slot name="text_label">{{__('label.code')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-form-group>
            <x-input-date name="birthdate" label="{{__('label.birthdate')}}" rules="1">
                <x-slot name="value">{{\Carbon\Carbon::now()->format('d/m/Y')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-input-date>
            <x-form-group type="text" name="address" id="address" required="1">
                <x-slot name="name_label">address</x-slot>
                <x-slot name="text_label">{{__('label.address')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-form-group>
            <x-form-group type="text" name="number_reference" id="number_reference" required="1">
                <x-slot name="name_label">number_reference</x-slot>
                <x-slot name="text_label">{{__('label.number_reference')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-form-group>
        </x-col>
        <x-col sm="12" xs="12" md="4" lg="4">
            <div class="mb-2">
                <label>{{__('label.gender')}}<span class="text-danger"> * </span></label>
                <div class="form-group">
                    <select class="select2 col-sm-12" name="gender">
                        <option></option>
                        @foreach(\App\Http\Controllers\WebController::$gender as $key => $item)
                            <option value="{{$key}}">{{$item}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <x-form-group type="email" name="email" id="email" required="1">
                <x-slot name="name_label">email</x-slot>
                <x-slot name="text_label">{{__('label.email')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    data-validation-email-message="{{__('common.validation.email')}}"
                    required
                </x-slot>
            </x-form-group>
            <x-form-group type="password" name="password" id="password" required="1">
                <x-slot name="name_label">password</x-slot>
                <x-slot name="text_label">{{__('label.password')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-form-group>
            <x-form-group type="password" name="cpassword" id="cpassword" required="1">
                <x-slot name="name_label">password</x-slot>
                <x-slot name="text_label">{{__('label.confirm_password')}}</x-slot>
                <x-slot name="rules">
                    data-validation-match-match="password"
                    data-validation-required-message="{{__('common.validation.required')}}" required
                    data-validation-match-message="{{__('common.validation.match')}}" required
                    required
                </x-slot>
            </x-form-group>
        </x-col>
    </x-row>
    <x-row class="container-fluid mt-3">
        <hr>
        <x-buttons color="primary" type="submit">{{__('common.button.register')}}</x-buttons>
        <x-buttons color="secondary" type="reset">{{__('common.button.cancel')}}</x-buttons>
    </x-row>
</x-form>
