@extends('admin.layouts.master')


@section('title')
Add shop
@endsection


@section('content')



<section class="content clearfix">
 <form action="{{ route('admin.shops.store') }}" method="POST" enctype="multipart/form-data">
 @csrf


<div class="pull-right">
  <div class="col-md-12 text-right">

    <button type="submit" class="btn btn-primary margin-r-5" ><i class="fa fa-save margin-r-5"></i> Save</button>

  </div>
</div>



  <div class="row">
    <div class="col-xs-12 row">

     @include('admin.shops.form')

   </div>
 </div>
</form>
</section>
@endsection


@section('style')
<link rel="stylesheet" href="{{ URL::asset('/admin_style/jstree/src/themes/default/style.css')}}">
@endsection

@section('script')
<script type="text/javascript" src="{{ URL::asset('/admin_style/jstree/src/jstree.js') }}"></script>
<script type="text/javascript">

  $(document).ready(function(){

    $('#jstree').jstree({
      "core" : {
        'multiple': false,
        "themes" : {
          "variant" : "large"
        }

      },
      "checkbox" : {
        "keep_selected_style" : true
      },
      "plugins" : [  ]
    });


  });

  $('#jstree').on("changed.jstree", function (e, data) {
    $('#parent_id').val(data.selected);
    console.log(data.selected);
  });

</script>

<script type="text/javascript">
    var count =1;
 $(document).on('click','.a',function(){
      $('#append-elements').append(
'<div class="form-group col-md-12">'+

' <div class="form-group col-md-4">'+
'<label for="name">Name</label>'+
'<select name="social['+ count +'][name]" class="form-control">'+
                '<option value="">Choose</option>'+
                '<option value="facebook">Facebook</option>'+
                '<option value="whatsapp">Whatsapp</option>'+
                '<option value="instgram">Instgram</option>'+
                '<option value="twitter">Twitter</option>'+
                '<option value="tiktok">Tiktok</option>'+
                '<option value="pinterest">Pinterest</option>'+
                '<option value="snapchat">Snapchat</option>'+
                '<option value="telegram">Telegram</option>'+
                '<option value="youtube">Youtube</option>'+
                '<option value="linkedin">Linkedin</option>'+
                '<option value="vimeo">Vimeo</option>'+
 '</select>'+
'</div>'+

'<div class="form-group col-md-4">'+
'<label for="link">Link</label>'+
'<input name="social['+ count +'][link]" class="form-control" type="text" value="">'+
'</div>'+


'<div class="b form-group col-md-1">'+
'<button class="btn btn-danger">x</button>'+
'</div>'+
'</div>');
count++;
    });

 $(document).on('click','.b',function(){
      $(this.parentElement).remove();
    });


 $(".sat_check").change(function() {
    if(this.checked) {
        $('.sat_item').css("display","block");
    }
    else{
        $('.sat_item').css("display","none");

    }
});

 $(".sun_check").change(function() {
    if(this.checked) {
        $('.sun_item').css("display","block");
    }
    else{
        $('.sun_item').css("display","none");

    }
});

 $(".mon_check").change(function() {
    if(this.checked) {
        $('.mon_item').css("display","block");
    }
    else{
        $('.mon_item').css("display","none");

    }
});
 $(".tus_check").change(function() {
    if(this.checked) {
        $('.tus_item').css("display","block");
    }
    else{
        $('.tus_item').css("display","none");

    }
});
 $(".wed_check").change(function() {
    if(this.checked) {
        $('.wed_item').css("display","block");
    }
    else{
        $('.wed_item').css("display","none");

    }
});
 $(".thu_check").change(function() {
    if(this.checked) {
        $('.thu_item').css("display","block");
    }
    else{
        $('.thu_item').css("display","none");

    }
});
 $(".fri_check").change(function() {
    if(this.checked) {
        $('.fri_item').css("display","block");
    }
    else{
        $('.fri_item').css("display","none");

    }
});
    </script>
@endsection
