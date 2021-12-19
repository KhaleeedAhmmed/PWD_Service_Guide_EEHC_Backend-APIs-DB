
<div  class="col-md-12">
   <!-- general form elements -->
   <div class="box box-info">
      <div class="box-header with-border">
         <h3 class="box-title">Category</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <div class="box-body">


        <div class="form-group col-md-6 {{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="title">Title</label>
            <input name="title" class="form-control" type="text" value="">
            @if($errors->has('title'))
            <span class="help-bloack">
            <strong>{{$errors->first('title') }}</strong>
            </span>
            @endif
       </div>

        <div class="form-group col-md-6 {{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="description"> Description</label>
            <textarea name="description" class="form-control"></textarea>
            @if($errors->has('description'))
            <span class="help-bloack">
            <strong>{{$errors->first('description') }}</strong>
            </span>
            @endif
       </div>

       <div class="form-group col-md-6 {{ $errors->has('img') ? ' has-error' : '' }}">
        <label for="img">img</label>
        <input type="file"  name="img" class="form-control ">
        @if($errors->has('img'))
        <span class="help-bloack">
        <strong>{{$errors->first('img') }}</strong>
        </span>
        @endif
       </div>


       <div class="form-group col-md-6 {{ $errors->has('city') ? ' has-error' : '' }}">
        <label for="city">Cities</label>
        <select name="city" class="form-control">
            <option value="">Choose</option>
           @foreach ($cities as $city )
           <option  value="{{ $city->id }}" >{{ $city->translate('en')->city }}</option>
           @endforeach
        </select>
        @if($errors->has('city'))
        <span class="help-bloack">
        <strong>{{$errors->first('city') }}</strong>
        </span>
        @endif
   </div>

      </div>
      <!-- /.box-body -->
   </div>

</div>
