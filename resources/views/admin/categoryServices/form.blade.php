
<div  class="col-md-12">
   <!-- general form elements -->
   <div class="box box-info">
      <div class="box-header with-border">
         <h3 class="box-title">Category for Shop</h3>
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

       <div class="form-group col-md-6 {{ $errors->has('shops') ? ' has-error' : '' }}">
        <label for="shops">Shops</label>
        <select name="shop" class="form-control">
            <option value="">Choose</option>
           @foreach ($shops as $shop )
           <option  value="{{ $shop->id }}"  {{ (isset($item) ? ($item->shop_id == $shop->id) ? 'selected' : '' : '') }}>{{ $shop->translate('en')->name }}</option>
           @endforeach
        </select>
        @if($errors->has('shops'))
        <span class="help-bloack">
        <strong>{{$errors->first('shops') }}</strong>
        </span>
        @endif
   </div>

       <div class="form-group col-md-6 {{ $errors->has('place') ? ' has-error' : '' }}">
        <label for="place">place</label>
        <select name="place" class="form-control">
            <option value="">Choose</option>
            <option value="1" {{ (isset($item) ? ($item->place == 1) ? 'selected' : '' : '')  }}>At Salon</option>
            <option value="2" {{ (isset($item) ? ($item->place == 2) ? 'selected' : '' : '')  }}>At Home</option>
        </select>
        @if($errors->has('place'))
        <span class="help-bloack">
        <strong>{{$errors->first('place') }}</strong>
        </span>
        @endif
   </div>


      </div>
      <!-- /.box-body -->
   </div>

</div>
