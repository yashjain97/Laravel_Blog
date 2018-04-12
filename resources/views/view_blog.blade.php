@extends('layout.dashboard')
@section('title',$title)
@section('content')
    <div class="page-container ">
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper ">
            <!-- START PAGE CONTENT -->
            <div class="content ">
                
                <!-- START CONTAINER FLUID -->
                <div class=" container container-fixed-lg">
                    <!-- START card -->
                    <div class="card card-transparent">
                        <div class="card-header ">
                            <div class="card-title"><h2>Your Blogs</h2>
                            </div>
                            <div class="pull-right">
                                <div class="col-xs-12">
                                    <button  id="#" class="btn btn-primary btn-cons"><i class="fa fa-edit"></i> <a href="{{ url('write-blog') }}">Create Blog</a>
                                    </button>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="card-block">
                            <table class="table table-hover demo-table-dynamic table-responsive-block" id="tableWithDynamicRows">
                                <thead>
                                <tr>
                                    <th>Post No.</th>

                                    <th>Post Title</th>
                                    <th>Post Category</th>



                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($posts as $post)
                                    <tr>
                                        <td class="v-align-middle">
                                            <p>{{$post->id}}</p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p>{{$post->title}}</p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p>{{$post->category}}</p>
                                        </td>


                                        <td class="v-align-middle">
                                            <div class="btn-group" role="group">
                                                <a href="posts/{{$post->id}}/edit"><button class="btn btn-info editBtn"><i class="fa fa-pencil-square-o"></i> Edit</button></a>
                                                <form action="{{route('posts.destroy',$post->id)}}" name="form" method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                    <button type="submit" name="delete_post" class="btn btn-danger delBtn"><i class="fa fa-trash"></i> Delete</button></form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END card -->
                </div>
                <script src="/plugins/pace/pace.min.js" type="text/javascript"></script>
                <script src="/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
                <script src="/plugins/modernizr.custom.js" type="text/javascript"></script>
                <script src="/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
                <script src="/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
                <script src="/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
                <script src="/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
                <script src="/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
                <script src="/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
                <script type="text/javascript" src="/plugins/datatables-responsive/js/datatables.responsive.js"></script>
                <script type="text/javascript" src="/plugins/datatables-responsive/js/lodash.min.js"></script>
                <!-- END VENDOR JS -->
                <!-- BEGIN CORE TEMPLATE JS -->
                <!-- END CORE TEMPLATE JS -->
                <!-- BEGIN PAGE LEVEL JS -->
                <script src="/js/datatables.js" type="text/javascript"></script>
                <script src="/js/scripts.js" type="text/javascript"></script>
                <!-- END CONTAINER FLUID -->
            @endsection













































































            <!--foreach($queries as $query)
    <form action="route('stuquery.update',$query->id)}}" name="form" method="post">
       csrf_field()}}
        method_field('PUT')}}
    <li>$query->name}}</li>
    <li>$query->phone}}</li>
    <li>$query->batch}}</li><br>
        <input type="submit" name="accept" value="accept"></form>
    <form action="route('stuquery.destroy',$query->id)}}" name="form" method="post">
        csrf_field()}}
        method_field('DELETE')}}
        <input type="submit" name="delete" value="delete"></form>
    endforeach
endsection-->