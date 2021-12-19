
<div  class="col-md-12">
   <!-- general form elements -->
   <div class="box box-info">
      <div class="box-header with-border">
         <h3 class="box-title">Category</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <div class="box-body">


        <div class="form-group col-md-6 {{ $errors->has('name_ar') ? ' has-error' : '' }}">
            <label for="name_ar">Arabic name</label>
            <input name="name_ar" class="form-control" type="text" value="{{isset($item) ? old('name_ar', $item->translate('ar')->name) : '' }}">
            @if($errors->has('name_ar'))
            <span class="help-bloack">
            <strong>{{$errors->first('name_ar') }}</strong>
            </span>
            @endif
       </div>
        <div class="form-group col-md-6 {{ $errors->has('name_en') ? ' has-error' : '' }}">
            <label for="name_en">English name</label>
            <input name="name_en" class="form-control" type="text" value="{{isset($item) ? old('name_en', $item->translate('en')->name) : '' }}">
            @if($errors->has('name_en'))
            <span class="help-bloack">
            <strong>{{$errors->first('name_en') }}</strong>
            </span>
            @endif
       </div>

        <div class="form-group col-md-6 {{ $errors->has('desc_ar') ? ' has-error' : '' }}">
            <label for="desc_ar">Arabic Description</label>
            <textarea name="desc_ar" class="form-control">{{isset($item) ? old('desc_ar', $item->translate('ar')->description) : '' }}</textarea>
            @if($errors->has('desc_ar'))
            <span class="help-bloack">
            <strong>{{$errors->first('desc_ar') }}</strong>
            </span>
            @endif
       </div>
        <div class="form-group col-md-6 {{ $errors->has('desc_en') ? ' has-error' : '' }}">
            <label for="desc_en">English Description</label>
            <textarea name="desc_en" class="form-control">{{isset($item) ? old('desc_en', $item->translate('en')->description) : '' }}</textarea>
            @if($errors->has('desc_en'))
            <span class="help-bloack">
            <strong>{{$errors->first('desc_en') }}</strong>
            </span>
            @endif
       </div>

       <div class="form-group col-md-6 {{ $errors->has('icon') ? ' has-error' : '' }}">
        <label for="icon">Icon</label>
        <input type="file"  name="icon" class="form-control ">
        @if($errors->has('icon'))
        <span class="help-bloack">
        <strong>{{$errors->first('icon') }}</strong>
        </span>
        @endif
        @if(isset($item->icon))
        <img width="100px" height="100px" src="{!! Helper::loadFile('Categories/'.$item->icon) !!}" />
        @endif
     </div>



      </div>
      <!-- /.box-body -->
   </div>

</div>
