@extends('sosmed')
@section('content')
    <div class="card mb-4" id="create-post">
        <div class="card-body">
            <h5>Create Post</h5>
            <form>
                <div class="form-group">
                    <label for="post-text">Mau Posting Apa Hari Ini??</label>
                    <textarea class="form-control" id="post-text" rows="3" maxlength="250"></textarea>
                </div>
                <div class="form-group">
                    <label for="post-image">Upload Image:</label>
                    <input type="file" class="form-control-file" id="post-image">
                </div>
                <div class="form-group">
                    <label for="post-file">Upload File:</label>
                    <input type="file" class="form-control-file" id="post-file">
                </div>
                <button type="submit" class="btn btn-success">Post</button>
            </form>
        </div>
    </div>
@endsection
