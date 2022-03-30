 <script>
     var routes = {

         //USERS
         user_store: `{{route('store_user')}}`,
         update_user: `{{route('update_user')}}`,
         user_delete: `{{route('user_delete')}}`,
         get_users: `{{route('get_users')}}`,
         get_user: `{{route('get_user')}}`,
         {{--  get_users_delete: `{{route('get_users_delete')}}`,
         update_user_delete: `{{route('update_user_delete')}}`,
         result_report_users:`{{route('result_report_users')}}`,
         report_users_index:`{{route('report_users_index')}}`,  --}}
         //DIRECTOR
         director_store: `{{route('director_store')}}`,
         update_director: `{{route('update_director')}}`,
         director_delete: `{{route('director_delete')}}`,
         get_directors: `{{route('get_directors')}}`,
         get_director: `{{route('get_director')}}`,
         get_directors_delete: `{{route('get_directors_delete')}}`,
         update_director_delete: `{{route('update_director_delete')}}`,
         //PATIENT
         patient_store: `{{route('patient_store')}}`,
         update_patient: `{{route('update_patient')}}`,
         patient_delete: `{{route('patient_delete')}}`,
         get_patients: `{{route('get_patients')}}`,
         get_patient: `{{route('get_patient')}}`,
         get_patients_delete: `{{route('get_patients_delete')}}`,
         update_patient_delete: `{{route('update_patient_delete')}}`,




     };

 </script>
 <!-- Scripts -->
            {{--  <script src="{{ asset('arcana/assets/js/jquery.min.js')}}"></script>
			<script src="{{ asset('arcana/assets/js/jquery.dropotron.min.js')}}"></script>
			<script src="{{ asset('arcana/assets/js/browser.min.js')}}"></script>
			<script src="{{ asset('arcana/assets/js/breakpoints.min.js')}}"></script>
			<script src="{{ asset('arcana/assets/js/util.js')}}"></script>
			<script src="{{ asset('arcana/assets/js/main.js')}}"></script>  --}}

 <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
 <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
 <script src="{{ asset('assets/js/bootstrap/bootstrap.js') }}"></script>
 <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
 <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
 <script src="{{ asset('assets/js/config.js') }}"></script>
 <script src="{{ asset('js/common/lang.js') }}"></script>
 <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
 <script src="{{ asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
 <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
 <script src="{{ asset('assets/js/bookmark/jquery.validate.min.js') }}"></script>
 <script src="{{ asset('js/common/common.js') }}"></script>
 <script src="{{ asset('js/common/vars_common.js') }}"></script>
 <script src="{{ asset('js/components/Button.js') }}"></script>
 <script src="{{ asset('assets/js/jqBootstrapValidation.js') }}"></script>
 <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
 <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
 <script src="{{ asset('sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
 <script src="{{ asset('sweetalert2/dist/sweetalert2.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap4-editable.min.js') }}"></script>
 <script src="{{ asset('assets/js/animation/animate-custom.js') }}"></script>
 <script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
 <script src="{{ asset('assets/js/sweet-alert/sweetalert2.all.min.js') }}"></script>
 <script src="{{ asset('assets/js/sweet-alert/polyfill.min.js') }}"></script>
 <script src="{{ asset('assets/js/script.js') }}"></script>
 <script src="{{ asset('assets/editor/summernote/summernote-bs4.js') }}"></script>
 <script src="{{ asset('assets/js/calendar/tui-code-snippet.min.js ')}}"></script>
    <script src="{{asset('assets/js/calendar/tui-time-picker.min.js')}}"></script>
    <script src="{{asset('assets/js/calendar/tui-date-picker.min.js')}}"></script>
    <script src="{{asset('datetimepicker/moment.js')}}"></script>
    <script src="{{asset('datetimepicker/js/tempusdominus-bootstrap-4.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
    <script src="{{asset('assets/js/calendar/chance.min.js')}}"></script>
    <script src="{{asset('assets/js/calendar/tui-calendar.js')}}"></script>
 <script>
     $.fn.modal.Constructor.prototype._enforceFocus = function() {};
 </script>
 <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.min.js') }}"></script>
 <script src="{{ asset('assets/js/datepicker/i18n/datepicker.es.js') }}"></script>

 @yield('page-scripts')
