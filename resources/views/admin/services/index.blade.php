@extends('admin.layouts.master')


@section('title')
services
@endsection



@section('header-content')

    <section class="content-header">
        <h1>
           services
            <small>Display services</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin')}}"><i class="fa fa-dashboard"></i> {{trans('admin.home')}}</a></li>
            <li class="active">Display services</li>
        </ol>
    </section>

@endsection


@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <!-- /.box-header -->

                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th> #</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Shop</th>
                                <th>Shop Category</th>
                                <th>Controll</th>
                            </tr>
                            </thead>
                            <tbody>

                            @forelse($items as $key=>$item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->translate('en')->name}}</td>
                                    <td><img width="100px" src="{!! Helper::loadFile('Services/' . ($item->icon != null ?  $item->icon : 'filler.svg')) !!}"/></td>
                                    <td>{{ $item->categoryServices->shop->translate('en')->name}}</td>
                                    <td>{{ $item->categoryServices->translate('en')->name}}</td>
                                    <td>
                                        <form action="{{route('admin.services.destroy',$item)}}" method="post">

                                            <a href="{{route('admin.services.edit',$item)}}"
                                               class="btn btn-primary btn-circle"><i class="fa fa-edit"></i></a>
                                            @csrf
                                            @method("delete")
                                            <button type="submit" name="delete" onclick="return confirm('Are You Sure ?');" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></button>
                                        </form>

                                    </td>
                                </tr>
                            @empty

                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
        </div>
    </section>


@endsection



@section('script')

    <script type="text/javascript">

        $('#checkbtn').vSwitch({theme: 'blue'});
        $('.checkbtnC').vSwitch({theme: 'blue'});
    </script>



@endsection


