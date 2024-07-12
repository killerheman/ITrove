 <!-- BEGIN: Vendor JS-->
 <script src="{{asset('backend/app-assets/vendors/js/vendors.min.js')}}"></script>
 <script src="{{asset('backend/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
 <!-- BEGIN Vendor JS-->

 <!-- BEGIN: Page Vendor JS-->
 <script src="{{asset('backend/app-assets/vendors/js/ui/prism.min.js')}}"></script>
 <!-- END: Page Vendor JS-->

 <!-- BEGIN: Theme JS-->
 <script src="{{asset('backend/app-assets/js/core/app-menu.js')}}"></script>
 <script src="{{asset('backend/app-assets/js/core/app.js')}}"></script>
 <script src="{{asset('backend/app-assets/js/scripts/components.js')}}"></script>

 <!-- END: Theme JS-->

 <!-- BEGIN: Page JS-->
 <!-- END: Page JS-->
 <script src="{{asset('backend/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
 <script src="{{asset('backend/app-assets/js/scripts/extensions/toastr.js')}}"></script>
{{-- CDN Ckeditor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>

<script>
 @if($msg=Session::get('success'))
  toastr.success("{!! $msg !!}",'Done ! ', { "progressBar": true });
  @elseif($msg=Session::get('error'))
  toastr.error( "{!! $msg !!}",'OOP\'s !', { "progressBar": true });
  @elseif($msg=Session::get('fail'))
  toastr.error( "{!! $msg !!}",'OOP\'s !', { "progressBar": true });
 @elseif($msg=Session::get('warning'))
 toastr.warning( "{!! $msg !!}",'Attension !', { "progressBar": true });
 @elseif($msg=Session::get('info'))
 toastr.info("{!! $msg !!}",'Info !',{ "progressBar": true });
 @endif
</script>
