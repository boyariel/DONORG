<x-form method="POST" id="form_director">
    <x-slot name="route">{{route('director_store')}}</x-slot>
    <x-row>
        <x-col sm="12" xs="6" md="6" lg="6">
            <x-form-group type="text" name="name" id="name" required="1">
                <x-slot name="name_label">director</x-slot>
                <x-slot name="text_label">{{__('label.name_director')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-form-group>
            <x-form-group type="email" name="email" id="email" required="1">
                <x-slot name="name_label">email</x-slot>
                <x-slot name="text_label">{{__('label.email')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    data-validation-email-message="{{__('common.validation.email')}}"
                    required
                </x-slot>
            </x-form-group>
        </x-col>
        <x-col sm="12" xs="6" md="6" lg="6">
            <x-form-group type="password" name="password" id="password" required="1">
                <x-slot name="name_label">password</x-slot>
                <x-slot name="text_label">{{__('label.password')}}</x-slot>
                <x-slot name="rules">
                    data-validation-required-message="{{__('common.validation.required')}}"
                    required
                </x-slot>
            </x-form-group>
            <x-form-group type="password" name="password_confirmation" id="password_confirmation" required="1">
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
        <div class="col-12 d-flex justify-content-end">
            <hr>
            <x-buttons color="primary" type="submit">{{__('common.button.register')}}</x-buttons>
            <x-buttons color="danger" type="reset" id="modo_register">{{__('common.button.cancel')}}</x-buttons>
        </div>
    </x-row>
</x-form>
