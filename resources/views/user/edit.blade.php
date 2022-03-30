<x-form method="PUT" id="form_user_edit">
    <x-slot name="route">{{route('update_user')}}</x-slot>
    <x-row>
        <x-col sm="12" xs="6" md="6" lg="6">
            <x-form-group type="text" name="name">
                <x-slot name="name_label">user</x-slot>
                <x-slot name="text_label">{{__('label.name_user')}}</x-slot>
            </x-form-group>
            <x-form-group type="email" name="email">
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
            <x-form-group type="password" name="password">
                <x-slot name="name_label">password</x-slot>
                <x-slot name="text_label">{{__('label.password')}}</x-slot>
            </x-form-group>
            <x-form-group type="password" name="cpassword">
                <x-slot name="name_label">password</x-slot>
                <x-slot name="text_label">{{__('label.confirm_password')}}</x-slot>
            </x-form-group>
            <x-form-checkbox name="is_power_user" checked="0" value="1" required>
                <x-slot name="title">{{__('label.is_power_user')}}</x-slot>
            </x-form-checkbox>
        </x-col>
    </x-row>
    <x-row class="container-fluid">
        <hr>
        <x-buttons color="warning" type="submit">{{__('common.button.update')}}</x-buttons>
        <x-buttons color="danger" type="reset" id="cancel_user">{{__('common.button.cancel')}}</x-buttons>
    </x-row>
</x-form>
