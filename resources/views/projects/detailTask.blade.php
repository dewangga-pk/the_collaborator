@extends('layouts.app')
@section('title-bar','Project Board Detail')
@push('styles')
    <link href="{{asset('css/comments-task.css')}}" rel="stylesheet">
@endpush
@section('content')
    <h1 class="h3 mb-1 text-gray-800 mb-4">Regency</h1>
    <div class="row d-flex align-items-center justify-content-between">
        <a href="/projects/project/board" class="nav-link"><i class="fas fa-arrow-left mr-1"></i>Back to Project Board</a>
        <button class="btn btn-warning">Button</button>
    </div>
    <div class="row mt-4">
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h4>Building Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda eum harum maiores officiis possimus! Consequuntur dolorem doloribus id incidunt iure, laborum minus odio perspiciatis praesentium, quo, temporibus ullam vel voluptatem.</p>
                    <div class="col-lg-12 table-responsive">
                        <h5>Attachments File</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">File Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2" class="text-center">No Attachment File Found</td>
                                </tr>
                                <tr>
                                    <td>15/06/2021</td>
                                    <td><a href="#"><i class="fas fa-fw fa-paperclip"></i>buildingDesign.pcx</a></td>
                                </tr>
                                <tr>
                                    <td>15/06/2021</td>
                                    <td><a href="#"><i class="fas fa-fw fa-paperclip"></i>buildingDesign.pcx</a></td>
                                </tr>
                                <tr>
                                    <td>15/06/2021</td>
                                    <td><a href="#"><i class="fas fa-fw fa-paperclip"></i>buildingDesign.pcx</a></td>
                                </tr>
                                <tr>
                                    <td>15/06/2021</td>
                                    <td><a href="#"><i class="fas fa-fw fa-paperclip"></i>buildingDesign.pcx</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <section class="content-item mb-4" id="comments">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <form>
                                <h5>New Comment</h5>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-3 col-lg-2 d-sm-block d-none">
                                            <img class="img-responsive img-thumbnail" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                            <textarea class="form-control" id="message" placeholder="Your message" required=""></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-secondary">Submit</button>
                                </div>
                            </form>

                            <h3>Recent Comments</h3>

                            <!-- COMMENT 1 - START -->
                            <div class="media">
                                <a class="pull-left" href="#"><img class="media-object img-thumbnail" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
                                <div class="media-body">
                                    <h4 class="media-heading">John Doe</h4>
                                    <ul class="list-unstyled list-inline media-detail pull-left mb-1">
                                        <li><i class="fa fa-calendar"></i>27/02/2014</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <!-- COMMENT 1 - END -->

                            <!-- COMMENT 2 - START -->
                            <div class="media">
                                <a class="pull-left" href="#"><img class="media-object img-thumbnail" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt=""></a>
                                <div class="media-body">
                                    <h4 class="media-heading">John Doe</h4>
                                    <ul class="list-unstyled list-inline media-detail pull-left mb-1">
                                        <li><i class="fa fa-calendar"></i>27/02/2014</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <!-- COMMENT 2 - END -->

                            <!-- COMMENT 3 - START -->
                            <div class="media">
                                <a class="pull-left" href="#"><img class="media-object img-thumbnail" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></a>
                                <div class="media-body">
                                    <h4 class="media-heading">John Doe</h4>
                                    <ul class="list-unstyled list-inline media-detail pull-left mb-1">
                                        <li><i class="fa fa-calendar"></i>27/02/2014</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <!-- COMMENT 3 - END -->

                            <!-- COMMENT 4 - START -->
                            <div class="media">
                                <a class="pull-left" href="#"><img class="media-object img-thumbnail" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt=""></a>
                                <div class="media-body">
                                    <h4 class="media-heading">John Doe</h4>
                                    <ul class="list-unstyled list-inline media-detail pull-left mb-1">
                                        <li><i class="fa fa-calendar"></i>27/02/2014</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <!-- COMMENT 4 - END -->

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
