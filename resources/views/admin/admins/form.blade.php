
<div  class="col-md-12">
   <!-- general form elements -->
   <div class="box box-info">
      <div class="box-header with-border">
         <h3 class="box-title">admin</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <div class="box-body">


        <div class="form-group col-md-6 {{ $errors->has('first_name') ? ' has-error' : '' }}">
            <label for="first_name">First name</label>
            <input name="first_name" class="form-control" type="text" value="{{isset($item) ? old('first_name', $item->first_name) : '' }}">
            @if($errors->has('first_name'))
            <span class="help-bloack">
            <strong>{{$errors->first('first_name') }}</strong>
            </span>
            @endif
       </div>
        <div class="form-group col-md-6 {{ $errors->has('last_name') ? ' has-error' : '' }}">
            <label for="last_name">Last name</label>
            <input name="last_name" class="form-control" type="text" value="{{isset($item) ? old('last_name', $item->last_name) : '' }}">
            @if($errors->has('last_name'))
            <span class="help-bloack">
            <strong>{{$errors->first('last_name') }}</strong>
            </span>
            @endif
       </div>

        <div class="form-group col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">Email</label>
            <input name="email" class="form-control" type="email" value="{{isset($item) ? old('email', $item->email) : '' }}">
            @if($errors->has('email'))
            <span class="help-bloack">
            <strong>{{$errors->first('email') }}</strong>
            </span>
            @endif
       </div>
        <div class="form-group col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password">Password</label>
            <input name="password" class="form-control" type="password" value="">
            @if($errors->has('password'))
            <span class="help-bloack">
            <strong>{{$errors->first('password') }}</strong>
            </span>
            @endif
       </div>
        <div class="form-group col-md-6 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label for="password_confirmation">Confirm password</label>
            <input name="password_confirmation" class="form-control" type="password" value="">
            @if($errors->has('name_en'))
            <span class="help-bloack">
            <strong>{{$errors->first('password_confirmation') }}</strong>
            </span>
            @endif
       </div>

      </div>
      <!-- /.box-body -->
   </div>

</div>
