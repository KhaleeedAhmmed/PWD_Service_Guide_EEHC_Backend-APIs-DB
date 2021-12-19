
<div dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}" class="col-md-12">
   <!-- general form elements -->
   <div class="box box-info">

      <!-- /.box-header -->
      <!-- form start -->
      <div class="box-body">

         <div class="form-group col-md-6 {{ $errors->has('name_ar') ? ' has-error' : '' }}">
            <label for="name_ar">Arabic content</label>
            <textarea name="name_ar" class="form-control">{{ $item->translate('ar')->name }}</textarea>
            @if($errors->has('name_ar'))
            <span class="help-bloack">
            <strong>{{$errors->first('name_ar') }}</strong>
            </span>
            @endif
         </div>

         <div class="form-group col-md-6 {{ $errors->has('name_en') ? ' has-error' : '' }}">
            <label for="name_en">English content</label>
            <textarea name="name_en" class="form-control">{{ $item->translate('en')->name }}</textarea>
             @if($errors->has('name_en'))
            <span class="help-bloack">
            <strong>{{$errors->first('name_en') }}</strong>
            </span>
            @endif
         </div>

      </div>
      <!-- /.box-body -->
   </div>

</div>
@section('scripts')
   <script>
          CKEDITOR.replace( 'name_ar' );
          CKEDITOR.replace( 'name_en' );
   </script>
@endsection
