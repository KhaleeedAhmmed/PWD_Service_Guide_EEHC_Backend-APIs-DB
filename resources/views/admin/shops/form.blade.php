
<div  class="col-md-12">
   <!-- general form elements -->
   <div class="box box-info">
      <div class="box-header with-border">
         <h3 class="box-title">Shop</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <div class="box-body">

        <div class="form-group col-md-6 {{ $errors->has('name_ar') ? ' has-error' : '' }}">
            <label for="name_ar">Arabic name</label>
            <input name="name_ar" class="form-control" type="text" value="{{isset($item) ?  $item->translate('ar')->name : old('name_ar') }}">
            @if($errors->has('name_ar'))
            <span class="help-bloack">
            <strong>{{$errors->first('name_ar') }}</strong>
            </span>
            @endif
       </div>
        <div class="form-group col-md-6 {{ $errors->has('name_en') ? ' has-error' : '' }}">
            <label for="name_en">English name</label>
            <input name="name_en" class="form-control" type="text" value="{{isset($item) ?  $item->translate('en')->name : old('name_en') }}">
            @if($errors->has('name_en'))
            <span class="help-bloack">
            <strong>{{$errors->first('name_en') }}</strong>
            </span>
            @endif
       </div>

        <div class="form-group col-md-6 {{ $errors->has('desc_ar') ? ' has-error' : '' }}">
            <label for="desc_ar">Arabic Description</label>
            <textarea name="desc_ar" class="form-control">{{isset($item) ?  $item->translate('ar')->description : old('desc_ar') }}</textarea>
            @if($errors->has('desc_ar'))
            <span class="help-bloack">
            <strong>{{$errors->first('desc_ar') }}</strong>
            </span>
            @endif
       </div>
        <div class="form-group col-md-6 {{ $errors->has('desc_en') ? ' has-error' : '' }}">
            <label for="desc_en">English Description</label>
            <textarea name="desc_en" class="form-control">{{isset($item) ?  $item->translate('en')->description : old('desc_en') }}</textarea>
            @if($errors->has('desc_en'))
            <span class="help-bloack">
            <strong>{{$errors->first('desc_en') }}</strong>
            </span>
            @endif
       </div>

        <div class="form-group col-md-6 {{ $errors->has('categories') ? ' has-error' : '' }}">
            <label for="categories">Categories</label>
            <select name="categories" class="form-control">
                <option value="">Choose</option>
               @foreach ($categories as $category )
               <option  value="{{ $category->id }}"  {{ (isset($item) ? ($item->category_id == $category->id) ? 'selected' : '' : '') }}>{{ $category->translate('en')->name }}</option>
               @endforeach
            </select>
            @if($errors->has('categories'))
            <span class="help-bloack">
            <strong>{{$errors->first('categories') }}</strong>
            </span>
            @endif
       </div>

        <div class="form-group col-md-6 {{ $errors->has('cities') ? ' has-error' : '' }}">
            <label for="Cities">cities</label>
            <select name="cities" id="" class="form-control">
             <option value="">Choose</option>
               @foreach ($cities as $city )
               <option value="{{ $city->id }}" {{ (isset($item) ? ($item->city_id == $city->id) ? 'selected' : '' : '') }}>{{ $city->translate('en')->city }}</option>
               @endforeach
            </select>
            @if($errors->has('cities'))
            <span class="help-bloack">
            <strong>{{$errors->first('cities') }}</strong>
            </span>
            @endif
       </div>

       <div class="form-group col-md-6 {{ $errors->has('logo_image') ? ' has-error' : '' }}">
        <label for="logo_image">logo</label>
        <input type="file"  name="logo_image">
        @if($errors->has('logo_image'))
        <span class="help-bloack">
        <strong>{{$errors->first('logo_image') }}</strong>
        </span>
        @endif
        @if(isset($item->logo_image))
        <img width="100px" height="100px" src="{!! Helper::loadFile('Shops/'.$item->logo_image) !!}" />
        @endif
       </div>

       <div class="form-group col-md-6 {{ $errors->has('shopImages') ? ' has-error' : '' }}">
        <label for="shopImages">Banner images []</label>
        <input type="file" name="shopImages[]" id="" multiple>

        @if($errors->has('shopImages'))
        <span class="help-bloack">
        <strong>{{$errors->first('shopImages') }}</strong>
        </span>
        @endif
        @if(isset($item->shopImages))
        @foreach ($item->shopImages as $image)
        <img width="100px" height="100px" src="{!! Helper::loadFile('Shops/'.$image->img) !!}" />
        @endforeach
        @endif
       </div>

       <div class="form-group col-md-12 {{ $errors->has('contacts[address]') ? ' has-error' : '' }}">
        <label for="contacts[address]">Address</label>
        <textarea name="contacts[address]" class="form-control">{{isset($item->contact) ?  $item->contact->address : old('address') }}</textarea>
        @if($errors->has('contacts[address]'))
        <span class="help-bloack">
        <strong>{{$errors->first('contacts[address]') }}</strong>
        </span>
        @endif
   </div>

   <div class="form-group col-md-6 {{ $errors->has('contacts[email]') ? ' has-error' : '' }}">
    <label for="contacts[email]">Email</label>
    <input name="contacts[email]" class="form-control" type="email" value="{{isset($item->contact) ? old('email', $item->contact->email) : '' }}">
    @if($errors->has('contacts[email]'))
    <span class="help-bloack">
    <strong>{{$errors->first('contacts[email]') }}</strong>
    </span>
    @endif
</div>

   <div class="form-group col-md-6 {{ $errors->has('contacts[mobile1]') ? ' has-error' : '' }}">
    <label for="contacts[mobile1]">Mobile1</label>
    <input name="contacts[mobile1]" class="form-control" type="number" value="{{isset($item->contact) ? old('mobile1', $item->contact->mobile1) : '' }}">
    @if($errors->has('contacts[mobile1]'))
    <span class="help-bloack">
    <strong>{{$errors->first('contacts[mobile1]') }}</strong>
    </span>
    @endif
</div>

   <div class="form-group col-md-6 {{ $errors->has('contacts[mobile2]') ? ' has-error' : '' }}">
    <label for="contacts[mobile2]">Mobile2</label>
    <input name="contacts[mobile2]" class="form-control" type="number" value="{{isset($item->contact) ? old('mobile2', $item->contact->mobile2) : '' }}">
    @if($errors->has('contacts[mobile2]'))
    <span class="help-bloack">
    <strong>{{$errors->first('contacts[mobile2]') }}</strong>
    </span>
    @endif
</div>

 <div class="form-group col-md-6 {{ $errors->has('contacts[land_line]') ? ' has-error' : '' }}">
    <label for="contacts[land_line]">land_line</label>
    <input name="contacts[land_line]" class="form-control" type="number" value="{{isset($item->contact) ? old('land_line', $item->contact->land_line) : '' }}">
    @if($errors->has('contacts[land_line]'))
    <span class="help-bloack">
    <strong>{{$errors->first('contacts[land_line]') }}</strong>
    </span>
    @endif
</div>

<h4 class="col-md-12" for="">Working Hours</h4>
 <div class="form-group col-md-12">
     <input class="sat_check" name="sat_check" type="checkbox" {{isset($item) ?  ($item->workingHours->sat_from) ? 'checked' : '' : '' }}>
    <label for="name">Saturday</label>
    <div style="{{ isset($item) ?  ($item->workingHours->sat_from) ? 'display: block' : 'display: none' : 'display: none'   }} " class="sat_item">
        from
        <input placeholder="from" name="workingHours[sat_from]" class="" type="time" value="{{isset($item->workingHours) ?  ($item->workingHours->sat_from) ? $item->workingHours->sat_from : '' : '' }}">
        to
        <input placeholder="to" name="workingHours[sat_to]" class="" type="time" value="{{isset($item) ?  ($item->workingHours->sat_to) ? $item->workingHours->sat_to : '' : '' }}">
        @if($errors->has('workingHours[sat_from]'))
        <span class="help-bloack">
        <strong>{{$errors->first('workingHours[sat_from]') }}</strong>
        </span>
        @endif
        @if($errors->has('workingHours[sat_to]'))
        <span class="help-bloack">
        <strong>{{$errors->first('workingHours[sat_to]') }}</strong>
        </span>
        @endif
    </div>
</div>
 <div class="form-group col-md-12">
     <input class="sun_check" name="sun_check" type="checkbox" {{isset($item) ?  ($item->workingHours->sun_from) ? 'checked' : '' : '' }}>
    <label for="name">Sunday</label>
    <div style="{{ isset($item) ?  ($item->workingHours->sun_from) ? 'display: block' : 'display: none' : 'display: none'   }} " class="sun_item">
    from
    <input placeholder="from" name="workingHours[sun_from]" class="" type="time" value="{{isset($item) ?  ($item->workingHours->sun_from) ? $item->workingHours->sun_from : '' : '' }}">
    to
    <input placeholder="to" name="workingHours[sun_to]" class="" type="time" value="{{isset($item) ?  ($item->workingHours->sun_to) ? $item->workingHours->sun_to : '' : '' }}">
    @if($errors->has('workingHours[sun_from]'))
    <span class="help-bloack">
    <strong>{{$errors->first('workingHours[sun_from]') }}</strong>
    </span>
    @endif
    @if($errors->has('workingHours[sun_to]'))
    <span class="help-bloack">
    <strong>{{$errors->first('workingHours[sun_to]') }}</strong>
    </span>
    @endif
   </div>
</div>

 <div class="form-group col-md-12">
     <input class="mon_check" name="mon_check" type="checkbox" {{isset($item) ?  ($item->workingHours->mon_from) ? 'checked' : '' : '' }}>
    <label for="name">Monday</label>
    <div style="{{ isset($item) ?  ($item->workingHours->mon_from) ? 'display: block' : 'display: none' : 'display: none'   }} " class="mon_item">
    from
    <input placeholder="from" name="workingHours[mon_from]" class="" type="time" value="{{isset($item) ?  ($item->workingHours->mon_from) ? $item->workingHours->mon_from : '' : '' }}">
    to
    <input placeholder="to" name="workingHours[mon_to]" class="" type="time" value="{{isset($item) ?  ($item->workingHours->mon_to) ? $item->workingHours->mon_to : '' : '' }}">
    @if($errors->has('workingHours[mon_from]'))
    <span class="help-bloack">
    <strong>{{$errors->first('workingHours[mon_from]') }}</strong>
    </span>
    @endif
    @if($errors->has('workingHours[mon_to]'))
    <span class="help-bloack">
    <strong>{{$errors->first('workingHours[mon_to]') }}</strong>
    </span>
    @endif
  </div>
</div>

 <div class="form-group col-md-12">
     <input name="tus_check" class="tus_check" type="checkbox" {{isset($item) ?  ($item->workingHours->tus_from) ? 'checked' : '' : '' }}>
    <label for="name">Tuesday</label>
    <div style="{{ isset($item) ?  ($item->workingHours->tus_from) ? 'display: block' : 'display: none' : 'display: none'   }} " class="tus_item">
    from
    <input placeholder="from" name="workingHours[tus_from]" class="" type="time" value="{{isset($item) ?  ($item->workingHours->tus_from) ? $item->workingHours->tus_from : '' : '' }}">
    to
    <input placeholder="to" name="workingHours[tus_to]" class="" type="time" value="{{isset($item) ?  ($item->workingHours->tus_to) ? $item->workingHours->tus_to : '' : '' }}">
    @if($errors->has('workingHours[tus_from]'))
    <span class="help-bloack">
    <strong>{{$errors->first('workingHours[tus_from]') }}</strong>
    </span>
    @endif
    @if($errors->has('workingHours[tus_to]'))
    <span class="help-bloack">
    <strong>{{$errors->first('workingHours[tus_to]') }}</strong>
    </span>
    @endif
 </div>
</div>

 <div class="form-group col-md-12">
     <input name="wed_check" class="wed_check" type="checkbox" {{isset($item) ?  ($item->workingHours->wed_from) ? 'checked' : '' : '' }}>
    <label for="name">Wednesday</label>
    <div style="{{ isset($item) ?  ($item->workingHours->wed_from) ? 'display: block' : 'display: none' : 'display: none'   }} " class="wed_item">
    from
    <input placeholder="from" name="workingHours[wed_from]" class="" type="time" value="{{isset($item) ?  ($item->workingHours->wed_from) ? $item->workingHours->wed_from : '' : '' }}">
    to
    <input placeholder="to" name="workingHours[wed_to]" class="" type="time" value="{{isset($item) ?  ($item->workingHours->wed_to) ? $item->workingHours->wed_to : '' : '' }}">
    @if($errors->has('workingHours[wed_from]'))
    <span class="help-bloack">
    <strong>{{$errors->first('workingHours[wed_from]') }}</strong>
    </span>
    @endif
    @if($errors->has('workingHours[wed_to]'))
    <span class="help-bloack">
    <strong>{{$errors->first('workingHours[wed_to]') }}</strong>
    </span>
    @endif
</div>
</div>

 <div class="form-group col-md-12">
     <input name="thu_check" class="thu_check" type="checkbox" {{isset($item) ?  ($item->workingHours->thu_from) ? 'checked' : '' : '' }}>
    <label for="name">Thursday</label>
    <div style="{{ isset($item) ?  ($item->workingHours->thu_from) ? 'display: block' : 'display: none' : 'display: none'   }} " class="thu_item">
    from
    <input placeholder="from" name="workingHours[thu_from]" class="" type="time" value="{{isset($item) ?  ($item->workingHours->thu_from) ? $item->workingHours->thu_from : '' : '' }}">
    to
    <input placeholder="to" name="workingHours[thu_to]" class="" type="time" value="{{isset($item) ?  ($item->workingHours->thu_to) ? $item->workingHours->thu_to : '' : '' }}">
    @if($errors->has('workingHours[thu_from]'))
    <span class="help-bloack">
    <strong>{{$errors->first('workingHours[thu_from]') }}</strong>
    </span>
    @endif
    @if($errors->has('workingHours[thu_to]'))
    <span class="help-bloack">
    <strong>{{$errors->first('workingHours[thu_to]') }}</strong>
    </span>
    @endif
  </div>
</div>

 <div class="form-group col-md-12">
     <input name="fri_check" class="fri_check" type="checkbox" {{isset($item) ?  ($item->workingHours->fri_from) ? 'checked' : '' : '' }}>
    <label for="name">Friday</label>
    <div style="{{ isset($item) ?  ($item->workingHours->fri_from) ? 'display: block' : 'display: none' : 'display: none'   }} " class="fri_item">
    from
    <input placeholder="from" name="workingHours[fri_from]" class="" type="time" value="{{isset($item) ?  ($item->workingHours->fri_from) ? $item->workingHours->fri_from : '' : '' }}">
    to
    <input placeholder="to" name="workingHours[fri_to]" class="" type="time" value="{{isset($item) ?  ($item->workingHours->fri_to) ? $item->workingHours->fri_to : '' : '' }}">
    @if($errors->has('workingHours[fri_from]'))
    <span class="help-bloack">
    <strong>{{$errors->first('workingHours[fri_from]') }}</strong>
    </span>
    @endif
    @if($errors->has('workingHours[fri_to]'))
    <span class="help-bloack">
    <strong>{{$errors->first('workingHours[fri_to]') }}</strong>
    </span>
    @endif
  </div>
</div>

<h4 class="form-group col-md-12" for="">Social Media</h4>
<div id="append-elements">
    @if (isset($item->socials))
     @php $key = 100 ; @endphp
    @foreach ($item->socials as $social)

    <div class="form-group col-md-12">

    <div class="form-group col-md-4">
        <input name="social[{{ $key }}][id]" class="form-control" type="hidden" value="{{$social->id}}">
        <label for="name">Name</label>
        {{-- <input name="social[{{ $key }}][name]" class="form-control" type="text" value="{{$social->name}}"> --}}
        <select name="social[{{ $key }}][name]" class="form-control">
            <option value="">Choose</option>
            <option value="facebook" {{ ($social->name == "facebook") ? 'selected' : '' }}>Facebook</option>
            <option value="whatsapp" {{ ($social->name == "whatsapp") ? 'selected' : '' }}>Whatsapp</option>
            <option value="instgram" {{ ($social->name == "instgram") ? 'selected' : '' }}>Instgram</option>
            <option value="twitter" {{ ($social->name == "twitter") ? 'selected' : '' }}>Twitter</option>
            <option value="tiktok" {{ ($social->name == "tiktok") ? 'selected' : '' }}>Tiktok</option>
            <option value="pinterest" {{ ($social->name == "pinterest") ? 'selected' : '' }}>Pinterest</option>
            <option value="snapchat" {{ ($social->name == "snapchat") ? 'selected' : '' }}>Snapchat</option>
            <option value="telegram" {{ ($social->name == "telegram") ? 'selected' : '' }}>Telegram</option>
            <option value="youtube" {{ ($social->name == "youtube") ? 'selected' : '' }}>Youtube</option>
            <option value="linkedin" {{ ($social->name == "linkedin") ? 'selected' : '' }}>Linkedin</option>
            <option value="vimeo" {{ ($social->name == "vimeo") ? 'selected' : '' }}>Vimeo</option>
        </select>
        @if($errors->has('name'))
        <span class="help-bloack">
        <strong>{{$errors->first('name') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-4">
        <label for="link">Link</label>
        <input name="social[{{ $key }}][link]" class="form-control" type="text" value="{{ $social->link }}">
        @if($errors->has('link'))
        <span class="help-bloack">
        <strong>{{$errors->first('link') }}</strong>
        </span>
        @endif
    </div>

    <div class="b form-group col-md-1">
        <button value="{{$social->id}}" class="btn btn-danger deleteSocial">x</button>
        </div>
    </div>
    @php
        $key++;
    @endphp
    @endforeach
    <div class="form-group col-md-12">
         @else
        <div class="form-group col-md-4">

            <label for="name">Name</label>
            {{-- <input name="social[0][name]" class="form-control" type="text" value=""> --}}
            <select name="social[0][name]" class="form-control">
                <option value="">Choose</option>
                <option value="facebook">Facebook</option>
                <option value="whatsapp">Whatsapp</option>
                <option value="instgram">Instgram</option>
                <option value="twitter">Twitter</option>
                <option value="tiktok">Tiktok</option>
                <option value="pinterest">Pinterest</option>
                <option value="snapchat">Snapchat</option>
                <option value="telegram">Telegram</option>
                <option value="youtube">Youtube</option>
                <option value="linkedin">Linkedin</option>
                <option value="vimeo">Vimeo</option>
            </select>
            @if($errors->has('name'))
            <span class="help-bloack">
            <strong>{{$errors->first('name') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group col-md-4">
            <label for="link">Link</label>
            <input name="social[0][link]" class="form-control" type="text" value="">
            @if($errors->has('link'))
            <span class="help-bloack">
            <strong>{{$errors->first('link') }}</strong>
            </span>
            @endif
        </div>

        @endif

        <div class="form-group col-md-1">
        <a class="a btn btn-success">+</a>
        </div>

        </div>
</div>

</div>
      <!-- /.box-body -->
   </div>

</div>
