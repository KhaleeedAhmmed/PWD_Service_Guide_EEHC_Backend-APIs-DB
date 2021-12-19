
<div dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}" class="col-md-12">
   <!-- general form elements -->
   <div class="box box-info">

      <!-- /.box-header -->
      <!-- form start -->
      <div class="box-body">

         <div class="form-group col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">Email</label>
            <input name="email" class="form-control" type="email" value="{{$item->email }}">
            @if($errors->has('email'))
            <span class="help-bloack">
            <strong>{{$errors->first('email') }}</strong>
            </span>
            @endif
         </div>

         <div class="form-group col-md-6 {{ $errors->has('phone1') ? ' has-error' : '' }}">
            <label for="phone1">phone1</label>
            <input name="phone1" class="form-control" type="text" value="{{$item->phone1 }}">
            @if($errors->has('phone1'))
            <span class="help-bloack">
            <strong>{{$errors->first('phone1') }}</strong>
            </span>
            @endif
         </div>


         <div class="form-group col-md-6 {{ $errors->has('phone2') ? ' has-error' : '' }}">
            <label for="phone2">phone2</label>
            <input name="phone2" class="form-control" type="text" value="{{$item->phone2 }}">
            @if($errors->has('phone2'))
            <span class="help-bloack">
            <strong>{{$errors->first('phone2') }}</strong>
            </span>
            @endif
         </div>

         <div class="form-group col-md-6 {{ $errors->has('phone3') ? ' has-error' : '' }}">
            <label for="phone3">phone3</label>
            <input name="phone3" class="form-control" type="text" value="{{$item->phone3 }}">
            @if($errors->has('phone3'))
            <span class="help-bloack">
            <strong>{{$errors->first('phone3') }}</strong>
            </span>
            @endif
         </div>



      </div>
      <!-- /.box-body -->
   </div>

</div>

