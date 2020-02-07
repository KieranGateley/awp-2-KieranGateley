<form action="{{ $action }}" method="post">
    @csrf
    <div id="form-group">
        <label for="version-input">Version Number</label>
        <input name="version" value="{{ $version ?? "" }}" class="form-control" id="version-input">
    </div>
    <p></p>
    <div id="form-group">
        <label for="description-input">Description</label>
        <textarea name="description" class="form-control" id="description-input" rows="5">{{ $description ?? "" }}</textarea>
    </div>
    <p></p>
    <div id="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
