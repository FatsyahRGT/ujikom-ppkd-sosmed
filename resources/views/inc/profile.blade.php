@extends('sosmed')
@section('content')
    <div class="card mb-4" id="profile">
        <div class="card-body text-center">
            <h5>Profile</h5>
            <img src="https://via.placeholder.com/100" alt="Profile Picture" class="profile-img mb-3">
            <h6>Username:</h6>
            <p>Email:</p>
            <form>
                <div class="form-group">
                    <label for="bio">Bio:</label>
                    <textarea class="form-control" id="bio" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="profile-pic">Upload Profile Picture:</label>
                    <input type="file" class="form-control-file" id="profile-pic">
                </div>
                <button type="submit" class="btn btn-primary">Update Profile</button>
            </form>
        </div>
    </div>
@endsection
