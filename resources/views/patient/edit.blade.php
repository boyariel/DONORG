<x-form method="PUT" id="form_patient_edit" file="true">
    <x-slot name="route">{{route('update_patient')}}</x-slot>
    <x-row>
        <x-col sm="12" xs="6" md="6" lg="6">
            <x-form-group type="text" name="name" rules="1">
                <x-slot name="name_label">first_name</x-slot>
                <x-slot name="text_label">{{__('label.first_name')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-form-group>
            <x-form-group type="text" name="last_name_father" rules="1">
                <x-slot name="name_label">last_name_father</x-slot>
                <x-slot name="text_label">{{__('label.last_name_father')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-form-group>
            <x-form-group type="text" name="last_name_mother" rules="1">
                <x-slot name="name_label">last_name_mother</x-slot>
                <x-slot name="text_label">{{__('label.last_name_mother')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-form-group>
            <x-form-group type="text" name="personal_id"  rules="1">
                <x-slot name="name_label">personal_id</x-slot>
                <x-slot name="text_label">{{__('label.personal_id')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-form-group>
            <x-form-group type="text" name="code"  rules="1">
                <x-slot name="name_label">code</x-slot>
                <x-slot name="text_label">{{__('label.code')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-form-group>
            <x-input-date name="birthdate" label="{{__('label.birthdate')}}" rules="1">
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-input-date>
        </x-col>
        <x-col sm="12" xs="6" md="6" lg="6">
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
            <x-form-group type="text" name="address"  rules="1">
                <x-slot name="name_label">address</x-slot>
                <x-slot name="text_label">{{__('label.address')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-form-group>
            <x-form-group type="text" name="number_reference" rules="1">
                <x-slot name="name_label">number_reference</x-slot>
                <x-slot name="text_label">{{__('label.number_reference')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-form-group>
            <x-form-group type="email" name="email"  rules="1">
                <x-slot name="name_label">email</x-slot>
                <x-slot name="text_label">{{__('label.email')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    data-validation-email-message="{{__('common.validation.email')}}"
                    required
                </x-slot>
            </x-form-group>
            <x-form-group type="password" name="password" rules="1">
                <x-slot name="name_label">password</x-slot>
                <x-slot name="text_label">{{__('label.password')}}</x-slot>
            </x-form-group>
            <x-form-group type="password" name="cpassword" rules="1">
                <x-slot name="name_label">password</x-slot>
                <x-slot name="text_label">{{__('label.confirm_password')}}</x-slot>
                <x-slot name="rules">
                    data-validation-match-match="password"
                    data-validation-match-message="{{__('common.validation.match')}}"
                </x-slot>
            </x-form-group>
        </x-col>
    </x-row>
    <x-row class="container-fluid mt-3">
        <hr>
        <x-buttons color="warning" type="submit">{{__('common.button.update')}}</x-buttons>
        <x-buttons color="danger" type="reset" id="cancel_patient">{{__('common.button.cancel')}}</x-buttons>
    </x-row>
</x-form>
