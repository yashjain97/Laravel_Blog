@extends('layout.dashboard')
@section('title',$title)
@section('content')
    <form  id="control" action="{{route('posts.store')}}" name="form" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="user_id" value="{{ Auth::id()}}" />
    <div class=" container container-fixed-lg">
        <div id="rootwizard" class="m-t-50">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-linetriangle nav-tabs-separator nav-stack-sm" role="tablist" data-init-reponsive-tabs="dropdownfx">
                <li class="nav-item">
                    <a class="active" data-toggle="tab" href="#tab1" role="tab"><i class="fa fa-text-width tab-icon"></i> <span>Title</span></a>
                </li>
                <li class="nav-item">
                        <a class="" data-toggle="tab" href="#tab2" role="tab"><i class="fa fa-image tab-icon"></i> <span>Upload Image</span></a>
                </li>
                <li class="nav-item">
                    <a class="" data-toggle="tab" href="#tab3" role="tab"><i class="fa fa-pencil-square tab-icon"></i> <span>Blog Content</span></a>
                </li>
                <li class="nav-item">
                    <a class="" data-toggle="tab" href="#tab4" role="tab"><i class="fa fa-check tab-icon"></i> <span>Review Blog</span></a>
                </li>
            </ul>
            <!-- Tab panes -->

            <div class="tab-content">
                <div class="tab-pane padding-20 sm-no-padding active slide-left" id="tab1">
                    <div class="row row-same-height">
                        <div class="col-md-5 b-r b-dashed b-grey sm-b-b">
                            <div class="padding-30 sm-padding-5 sm-m-t-15 m-t-50">
                                <i class="fa fa-text-width fa-2x hint-text"></i>
                                <h2>Provide a suitable title & category for the blog</h2>
                                <p>Supply us with a suitable which will help the user to identify the type of information being shared. Providing a title makes it more accessible for updation.</p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="padding-30 sm-padding-5">
                                <h5>Add title</h5>
                                <div class="row">
                                    <div class="col-lg-7 col-md-6">
                                    </div>
                                    <div class="col-lg-5 col-md-6">
                                    </div>
                                </div>
                                <br>
                                <div class="row b-a b-grey no-margin" style="border: none">
                                    <div class="col-md-2 p-l-10 sm-padding-15 align-items-center d-flex">
                                        <div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-middle sm-padding-15 align-items-center d-flex">
                                        <div>
                                            <div class="form-group m-b-10">
                                                <input type="text" placeholder="Enter the title" name="title" class="form-control input-lg" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-1 text-right padding-10">
                                    </div>
                                </div>
                            </div>
                            <div class="padding-30 sm-padding-5">
                                <h5>Add Category</h5>
                                <div class="row">
                                    <div class="col-lg-7 col-md-6">
                                    </div>
                                    <div class="col-lg-5 col-md-6">
                                    </div>
                                </div>
                                <br>
                                <div class="row b-a b-grey no-margin" style="border: none">
                                    <div class="col-md-2 p-l-10 sm-padding-15 align-items-center d-flex">
                                        <div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-middle sm-padding-15 align-items-center d-flex">
                                        <div>
                                            <div class="form-group m-b-10">
                                                <input type="text" placeholder="Enter the category" name="category" class="form-control input-lg" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-1 text-right padding-10">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab2">
                    <div class="row row-same-height">
                        <div class="col-md-5 b-r b-dashed b-grey ">
                            <div class="padding-30 sm-padding-5 sm-m-t-15 m-t-50">
                                <h2>Upload an image for the blog</h2>
                                <p>This will be the cover image of the blog and will also be used to identify the blog online.</p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="padding-30 sm-padding-5">
                                    <div class="card-block no-scroll no-padding">
                                        <div class="dropzone no-margin">
                                            <div class="fallback">
                                                <input name="image" type="file"required/>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab3">
                    <div class="row row-same-height">
                        <div class="tools">
                            <a class="collapse" href="javascript:;"></a>
                            <a class="config" data-toggle="modal" href="#grid-config"></a>
                            <a class="reload" href="javascript:;"></a>
                            <a class="remove" href="javascript:;"></a>
                        </div>
                        <div class="col-md-12 b-r b-dashed b-grey">
                            <div class="summernote-wrapper">
                                <textarea id="summernote" name="body" required>Hello Summernote</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab4">
                    <h1>Thank you.</h1>
                </div>
                <div class="padding-20 sm-padding-5 sm-m-b-20 sm-m-t-20 bg-white clearfix">
                    <ul class="pager wizard no-style">
                        <li class="next">
                            <button class="btn btn-primary btn-cons btn-animated from-left fa fa-image pull-right" type="button">
                                <span>Next</span>
                            </button>
                        </li>
                        <li class="next finish hidden">
                            <button name="publish" class="btn btn-primary btn-cons btn-animated from-left fa fa-cog pull-right" type="submit">
                                <span>Finish</span>
                            </button>
                        </li>
                        <li class="previous first hidden">
                            <button class="btn btn-default btn-cons btn-animated from-left fa fa-cog pull-right" type="button">
                                <span>First</span>
                            </button>
                        </li>
                        <li class="previous">
                            <button class="btn btn-default btn-cons pull-right" type="button">
                                <span>Previous</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>  </form>
@endsection
