@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Article</div>

                <div class="card-body">
                    <form method="POST" action="/articles/post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                          <label for="category">Category</label>
                          <select class="form-control" name="category" id="category">
                              <option value="Beach">Beach</option>
                              <option value="Mountain">Mountain</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Photo</label>
                            <br>
                            <img id="display-image" src="" alt="" style="max-width: 100%; height: auto;margin: 0 0 10px 0">
                            <input type="file" class="form-control-file" id="image" name="image" onchange="loadFile(event)">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" rows="15" name="description" id="description"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Post</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var loadFile = function(event) {
        var output = document.getElementById('display-image');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src);
        }
    };

</script>
@endsection
