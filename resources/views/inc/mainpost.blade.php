@extends('sosmed')
@section('content')
    <h5 id="posts">Posts</h5>
    <div id="posts-list" class="list-group">
        <div class="list-group-item">
            <h6>User Name <small class="text-muted">Posted on Date</small></h6>
            <p>This is an example post with #hashtag</p>
            <img src="https://via.placeholder.com/300" class="img-fluid" alt="Post Image">
            <div class="mt-2">
                <button class="btn btn-link">Comment</button>
                <button class="btn btn-link">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </div>
            <!-- Bagian Comment -->
            <div class="mt-3">
                <h6>Comments</h6>
                <div class="list-group">
                    <div class="list-group-item">
                        <h6>Commenter Name <small class="text-muted">Commented on Date</small></h6>
                        <p>This is a comment with #hashtag</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
