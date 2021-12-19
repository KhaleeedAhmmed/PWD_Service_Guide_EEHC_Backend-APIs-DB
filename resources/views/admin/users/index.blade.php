@extends('admin.layouts.master')


@section('title')
Users
@endsection






@section('header-content')

    <section class="content-header">
        <h1>
            Users
            <small>Display Users</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Display Users</li>
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

                        <table dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}" id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th> #</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Controll</th>


                            </tr>
                            </thead>
                            <tbody>

                            @forelse($items as $key=>$item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>{{ $item->email}}</td>
                                    <td>{{ $item->created_at->toDateString()}}</td>

                                    <td>
                                        @if($item->ban == 0)
                                        <a class="btn btn-danger" href="{{ route('ban',$item->id) }}">Ban this user</a>
                                        @else
                                        <a class="btn btn-success" href="{{ route('unban',$item->id) }}">UnBan this user</a>
                                        @endif
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


