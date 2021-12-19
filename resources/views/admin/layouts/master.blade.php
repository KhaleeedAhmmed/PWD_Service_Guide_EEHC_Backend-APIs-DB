@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.aside')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  @yield('header-content')
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">


             @if ($errors->any())
             @foreach ($errors->all() as $error)
                 <div class="col-md-12 alert alert-danger">{{$error}}</div>
             @endforeach
        @endif


      @yield('content')


      <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
        <img class="w3-modal-content img-responsive center-block" id="img01" style="width:50%">
      </div>

    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>

@include('admin.layouts.footer')