@extends('layouts.app')
@section('title-bar','Project Overview')
@push('styles')
    <link href="{{asset('css/simple-vertical-timeline.css')}}" rel="stylesheet">
@endpush
@section('content')
    @include('projects.projectNav')
    <div class="row mt-4">
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="description">Description</label>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam commodi debitis dolores ducimus ea earum eum ex magni non, sequi?</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <span>Progress</span>
                        </div>
                        <div class="col-lg-6">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 mb-2">
                            <label for="client">Client</label>
                            <a class="nav-link" href="#" id="client">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img style="height: 2rem" class="img-profile rounded-circle" src="{{asset('img/undraw_profile.svg')}}">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <label for="contrator">Contractor</label>
                            <a class="nav-link" href="#" id="contractor">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img style="height: 2rem" class="img-profile rounded-circle" src="{{asset('img/undraw_profile.svg')}}">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <label for="architect">Architect</label>
                            <a class="nav-link" href="#" id="architect">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img style="height: 2rem" class="img-profile rounded-circle" src="{{asset('img/undraw_profile.svg')}}">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <label for="builder">Builder</label>
                            <a class="nav-link" href="#" id="builder">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img style="height: 2rem" class="img-profile rounded-circle" src="{{asset('img/undraw_profile.svg')}}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="timeline">
                                <li>
                                    <a href="#">Douglas McGee</a>
                                    <a href="#" class="float-right">21 March, 2014</a>
                                    <p>Move Architect Design to done</p>
                                </li>
                                <li>
                                    <a href="#">Douglas McGee</a>
                                    <a href="#" class="float-right">4 March, 2014</a>
                                    <p>Move Architect Design to in progress/doing</p>
                                </li>
                                <li>
                                    <a href="#">Douglas McGee</a>
                                    <a href="#" class="float-right">1 April, 2014</a>
                                    <p>Created a new project</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
