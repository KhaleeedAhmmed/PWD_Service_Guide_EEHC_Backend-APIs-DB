
<div  class="col-md-12">
   <!-- general form elements -->
   <div class="box box-info">
      <div class="box-header with-border">
         <h3 class="box-title">Service</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <div class="box-body">

        <div class="form-group col-md-6 {{ $errors->has('shops') ? ' has-error' : '' }}">
            <label for="shops">Shops</label>
            <select name="shops" class="form-control">
                <option value="">Choose</option>
               @foreach ($shops as $shop )
               <option  value="{{ $shop->id }}"  {{ (isset($item) ? ($item->categoryServices->shop_id == $shop->id) ? 'selected' : '' : '') }}>{{ $shop->translate('en')->name }}</option>
               @endforeach
            </select>
            @if($errors->has('shops'))
            <span class="help-bloack">
            <strong>{{$errors->first('shops') }}</strong>
            </span>
            @endif
       </div>

        <div class="form-group col-md-6 {{ $errors->has('category_service') ? ' has-error' : '' }}">
            <label for="category_service">Shop categories</label>
            <select id="category_service" name="category_service" class="form-control">
                @if (isset($item))
                <option  value="{{ $item->category_service_id }}" selected>{{ $item->categoryServices->translate('en')->name }}</option>
                @endif

            </select>
            @if($errors->has('category_service'))
            <span class="help-bloack">
            <strong>{{$errors->first('category_service') }}</strong>
            </span>
            @endif
        </div>

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
            <textarea name="desc_en" class="form-control">
                {{isset($item) ? old('desc_en', $item->translate('en')->description) : '' }}
            </textarea>
            @if($errors->has('desc_en'))
            <span class="help-bloack">
            <strong>{{$errors->first('desc_en') }}</strong>
            </span>
            @endif
       </div>

        <div class="form-group col-md-6 {{ $errors->has('old_price') ? ' has-error' : '' }}">
            <label for="old_price">Old price</label>
            <small >if there is discount write old price </small>
            <input name="old_price" class="form-control" type="number" step="0.01" value="{{isset($item) ? old('old_price', $item->old_price) : '' }}">
            @if($errors->has('old_price'))
            <span class="help-bloack">
            <strong>{{$errors->first('old_price') }}</strong>
            </span>
            @endif
       </div>
        <div class="form-group col-md-6 {{ $errors->has('new_price') ? ' has-error' : '' }}">
            <label for="new_price">Price</label>
            <input name="new_price" class="form-control" type="number" step="0.01" value="{{isset($item) ? old('new_price', $item->new_price) : '' }}">
            @if($errors->has('new_price'))
            <span class="help-bloack">
            <strong>{{$errors->first('new_price') }}</strong>
            </span>
            @endif
       </div>

       <div class="form-group col-md-6 {{ $errors->has('image') ? ' has-error' : '' }}">
        <label for="image">Image</label>
        <input type="file"  name="image" class="form-control ">
        @if($errors->has('image'))
        <span class="help-bloack">
        <strong>{{$errors->first('image') }}</strong>
        </span>
        @endif
        @if(isset($item->image))
        <img width="100px" height="100px" src="{!! Helper::loadFile('Services/'.$item->image) !!}" />
        @endif
     </div>



      </div>
      <!-- /.box-body -->
   </div>

</div>
