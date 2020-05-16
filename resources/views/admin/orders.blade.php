@extends('layouts.dashboard')

@section('admin_content')
    <div class="col-lg-12 col-md-12 col-sm-12 my-4">
        <div class="card card-small blog-comments">
            <div class="card-header border-bottom">
                <h6 class="m-0">Discussions</h6>
            </div>
            <div class="card-body p-0">
                <div class="blog-comments__item d-flex p-3">
                    <div class="blog-comments__avatar mr-3">
                        <img src="images/avatars/1.jpg" alt="User avatar" /> </div>
                    <div class="blog-comments__content">
                        <div class="blog-comments__meta text-muted">
                            <a class="text-secondary" href="#">James Johnson</a> on
                            <a class="text-secondary" href="#">Hello World!</a>
                            <span class="text-muted">– 3 days ago</span>
                        </div>
                        <p class="m-0 my-1 mb-2 text-muted">Well, the way they make shows is, they make one show ...</p>
                        <div class="blog-comments__actions">
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-white">
                              <span class="text-success">
                                <i class="material-icons">check</i>
                              </span> Approve </button>
                                <button type="button" class="btn btn-white">
                              <span class="text-danger">
                                <i class="material-icons">clear</i>
                              </span> Reject </button>
                                <button type="button" class="btn btn-white">
                              <span class="text-light">
                                <i class="material-icons">more_vert</i>
                              </span> Edit </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-comments__item d-flex p-3">
                    <div class="blog-comments__avatar mr-3">
                        <img src="images/avatars/2.jpg" alt="User avatar" /> </div>
                    <div class="blog-comments__content">
                        <div class="blog-comments__meta text-muted">
                            <a class="text-secondary" href="#">James Johnson</a> on
                            <a class="text-secondary" href="#">Hello World!</a>
                            <span class="text-muted">– 4 days ago</span>
                        </div>
                        <p class="m-0 my-1 mb-2 text-muted">After the avalanche, it took us a week to climb out. Now...</p>
                        <div class="blog-comments__actions">
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-white">
                              <span class="text-success">
                                <i class="material-icons">check</i>
                              </span> Approve </button>
                                <button type="button" class="btn btn-white">
                              <span class="text-danger">
                                <i class="material-icons">clear</i>
                              </span> Reject </button>
                                <button type="button" class="btn btn-white">
                              <span class="text-light">
                                <i class="material-icons">more_vert</i>
                              </span> Edit </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-comments__item d-flex p-3">
                    <div class="blog-comments__avatar mr-3">
                        <img src="images/avatars/3.jpg" alt="User avatar" /> </div>
                    <div class="blog-comments__content">
                        <div class="blog-comments__meta text-muted">
                            <a class="text-secondary" href="#">James Johnson</a> on
                            <a class="text-secondary" href="#">Hello World!</a>
                            <span class="text-muted">– 5 days ago</span>
                        </div>
                        <p class="m-0 my-1 mb-2 text-muted">My money's in that office, right? If she start giving me...</p>
                        <div class="blog-comments__actions">
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-white">
                              <span class="text-success">
                                <i class="material-icons">check</i>
                              </span> Approve </button>
                                <button type="button" class="btn btn-white">
                              <span class="text-danger">
                                <i class="material-icons">clear</i>
                              </span> Reject </button>
                                <button type="button" class="btn btn-white">
                              <span class="text-light">
                                <i class="material-icons">more_vert</i>
                              </span> Edit </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer border-top">
                <div class="row">
                    <div class="col text-center view-report">
                        <button type="submit" class="btn btn-white">View All Comments</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
