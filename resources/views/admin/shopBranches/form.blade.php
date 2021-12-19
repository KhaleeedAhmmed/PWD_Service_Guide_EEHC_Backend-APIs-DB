
<div  class="col-md-12">
   <!-- general form elements -->
   <div class="box box-info">
      <div class="box-header with-border">
         <h3 class="box-title">Branch for Shop</h3>
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

       <div class="form-group col-md-6 {{ $errors->has('cities') ? ' has-error' : '' }}">
        <label for="cities">cities</label>
        <select name="city" class="form-control">
            <option value="">Choose</option>
           @foreach ($cities as $city )
           <option  value="{{ $city->id }}"  {{ (isset($item) ? ($item->city_id == $city->id) ? 'selected' : '' : '') }}>{{ $city->translate('en')->city }}</option>
           @endforeach
        </select>
        @if($errors->has('cities'))
        <span class="help-bloack">
        <strong>{{$errors->first('cities') }}</strong>
        </span>
        @endif
   </div>

      </div>
      <!-- /.box-body -->
   </div>

</div>
