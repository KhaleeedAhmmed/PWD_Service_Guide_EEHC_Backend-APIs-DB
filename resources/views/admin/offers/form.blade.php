
<div  class="col-md-12">
   <!-- general form elements -->
   <div class="box box-info">
      <div class="box-header with-border">
         <h3 class="box-title">Category</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <div class="box-body">

        <div class="form-group col-md-6 {{ $errors->has('season') ? ' has-error' : '' }}">
            <label for="season">Name</label>
            <input name="season" class="form-control" type="text" value="{{isset($item) ? old('season', $item->season) : '' }}">
            @if($errors->has('season'))
            <span class="help-bloack">
            <strong>{{$errors->first('seasons') }}</strong>
            </span>
            @endif
       </div>

        <div class="form-group col-md-6 {{ $errors->has('shop') ? ' has-error' : '' }}">
            <label for="shop">Shops</label>
            <select name="shop" class="form-control">
                <option value="">Choose</option>
               @foreach ($shops as $shop )
               <option  value="{{ $shop->id }}"  {{ (isset($item) ? ($item->shop_id == $shop->id) ? 'selected' : '' : '') }}>{{ $shop->translate('en')->name }}</option>
               @endforeach
            </select>
            @if($errors->has('shop'))
            <span class="help-bloack">
            <strong>{{$errors->first('shops') }}</strong>
            </span>
            @endif
       </div>

        <div class="form-group col-md-6 {{ $errors->has('title_ar') ? ' has-error' : '' }}">
            <label for="title_ar">Arabic title</label>
            <input name="title_ar" class="form-control" type="text" value="{{isset($item) ? old('title_ar', $item->translate('ar')->title) : '' }}">
            @if($errors->has('title_ar'))
            <span class="help-bloack">
            <strong>{{$errors->first('title_ar') }}</strong>
            </span>
            @endif
       </div>
        <div class="form-group col-md-6 {{ $errors->has('title_en') ? ' has-error' : '' }}">
            <label for="title_en">English title</label>
            <input name="title_en" class="form-control" type="text" value="{{isset($item) ? old('title_en', $item->translate('en')->title) : '' }}">
            @if($errors->has('title_en'))
            <span class="help-bloack">
            <strong>{{$errors->first('title_en') }}</strong>
            </span>
            @endif
       </div>

        <div class="form-group col-md-6 {{ $errors->has('content_ar') ? ' has-error' : '' }}">
            <label for="content_ar">Arabic content</label>
            <textarea name="content_ar" class="form-control">{{isset($item) ? old('content_ar', $item->translate('ar')->content) : '' }}</textarea>
            @if($errors->has('content_ar'))
            <span class="help-bloack">
            <strong>{{$errors->first('content_ar') }}</strong>
            </span>
            @endif
       </div>
        <div class="form-group col-md-6 {{ $errors->has('content_en') ? ' has-error' : '' }}">
            <label for="content_en">English content</label>
            <textarea name="content_en" class="form-control">{{isset($item) ? old('content_en', $item->translate('en')->content) : '' }}</textarea>
            @if($errors->has('content_en'))
            <span class="help-bloack">
            <strong>{{$errors->first('content_en') }}</strong>
            </span>
            @endif
       </div>

       <div class="form-group col-md-6 {{ $errors->has('logo_image') ? ' has-error' : '' }}">
        <label for="logo_image">Logo image</label>
        <input type="file"  name="logo_image" class="form-control ">
        @if($errors->has('logo_image'))
        <span class="help-bloack">
        <strong>{{$errors->first('logo_image') }}</strong>
        </span>
        @endif
        @if(isset($item->logo_image))
        <img width="100px" height="100px" src="{!! Helper::loadFile('Offers/'.$item->logo_image) !!}" />
        @endif
     </div>

       <div class="form-group col-md-6 {{ $errors->has('banner_image') ? ' has-error' : '' }}">
        <label for="banner_image">Banner image</label>
        <input type="file"  name="banner_image" class="form-control ">
        @if($errors->has('banner_image'))
        <span class="help-bloack">
        <strong>{{$errors->first('banner_image') }}</strong>
        </span>
        @endif
        @if(isset($item->banner_image))
        <img width="100px" height="100px" src="{!! Helper::loadFile('Offers/'.$item->banner_image) !!}" />
        @endif
     </div>



     <div class="form-group col-md-6 {{ $errors->has('active') ? ' has-error' : '' }}">
        <label for="active">Offer Status</label>
        <small>active or not</small>
        <label class="switch">
            <input name="active" value="1" type="checkbox" {{isset($item) ? ($item->active == 1) ? 'checked' : '' : ''  }}>
            <span class="slider round"></span>
         </label>
        @if($errors->has('active'))
        <span class="help-bloack">
        <strong>{{$errors->first('active') }}</strong>
        </span>
        @endif
   </div>


      </div>
      <!-- /.box-body -->
   </div>

</div>
