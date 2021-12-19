@extends('admin.layouts.master')


@section('title')
notifications
@endsection



@section('header-content')

    <section class="content-header">
        <h1>
           notifications
            <small>Display notifications</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin')}}"><i class="fa fa-dashboard"></i> {{trans('admin.home')}}</a></li>
            <li class="active">Display notifications</li>
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
                                <th>Title</th>
                                <th>Description</th>
                                <th>City</th>
                                <th>Date</th>
                                <th>Image</th>
                                <th>Controll</th>
                            </tr>
                            </thead>
                            <tbody>

                            @forelse($items as $key=>$item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->title}}</td>
                                    <td>{{ $item->description}}</td>
                                    <td>{{ $item->cities->translate('en')->city}}</td>
                                    <td>{{ $item->created_at->toDateString()}}</td>
                                    <td><img width="100px" src="{!! Helper::loadFile('Notifications/' . ($item->img != null ?  $item->img : 'filler.svg')) !!}"/></td>
                                    <td>
                                        <form action="{{route('admin.notifications.destroy',$item)}}" method="post">
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


