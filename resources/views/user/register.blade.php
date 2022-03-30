<x-form method="POST" id="form_user">
    <x-slot name="route">{{route('store_user')}}</x-slot>
    <x-row>
        <x-col sm="12" xs="6" md="6" lg="6">
            <x-form-group type="text" name="name" id="name">
                <x-slot name="name_label">user</x-slot>
                <x-slot name="text_label">{{__('label.name_user')}}</x-slot>
            </x-form-group>
            <x-form-group type="email" name="email" id="email">
                <x-slot name="name_label">email</x-slot>
                <x-slot name="text_label">{{__('label.email')}}</x-slot>
            </x-form-group>
            <x-select2 name="role_id" title="{{__('label.rol')}}" required="1">
                <x-slot name="customSelect">
                    @foreach($roles as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </x-slot>
            </x-select2>
        </x-col>
        <x-col sm="12" xs="6" md="6" lg="6">
            <x-form-group type="password" name="password" id="password">
                <x-slot name="name_label">password</x-slot>
                <x-slot name="text_label">{{__('label.password')}}</x-slot>
            </x-form-group>
            <x-form-group type="password" name="cpassword" id="cpassword">
                <x-slot name="name_label">password</x-slot>
                <x-slot name="text_label">{{__('label.confirm_password')}}</x-slot>
            </x-form-group>
            <x-form-checkbox name="is_power_user" checked="0" value="1" required>
                <x-slot name="title">{{__('label.is_power_user')}}</x-slot>
            </x-form-checkbox>
        </x-col>
    </x-row>
    <x-row class="container-fluid mt-3">
        <hr>
        <x-buttons color="primary" type="submit">{{__('common.button.register')}}</x-buttons>
        <x-buttons color="secondary" type="reset">{{__('common.button.cancel')}}</x-buttons>
    </x-row>
</x-form>
