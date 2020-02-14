<form action="{{ $action }}" method="post">
    @csrf
    <div id="form-group">
        <label for="name-input">Plugin Name</label>
        <input name="name" value="{{ $name ?? "" }}" class="form-control" id="name-input">
    </div>
    <p></p>
    <div id="form-group">
        <label for="description-input">Description</label>
        <textarea name="description" class="form-control" id="description-input" rows="5">{{ $description ?? "" }}</textarea>
    </div>
    <p></p>
    <div id="form-group">
        <label for="authors-input">Authors</label>
        <input name="authors" value="{{ $authors ?? "" }}" class="form-control" id="authors-input">
    </div>
    <p></p>
    <div id="form-group">
        <label for="website-input">Website</label>
        <input name="website" value="{{ $website ?? "" }}" class="form-control" id="website-input">
    </div>
    <p></p>
    <div id="form-group">
        <label for="spigot-input">Spigot ID</label>
        <input name="spigot" value="{{ $spigot_id ?? "" }}" class="form-control" id="spigot-input">
    </div>
    <p></p>
    <div id="form-group">
        <label for="dependencies-input">Dependencies</label>
        <input name="dependencies" value="{{ $dependencies ?? "" }}" class="form-control" id="dependencies-input">
    </div>
    <p></p>
    <div id="form-group">
        <label for="soft_dependencies-input">Soft Dependencies</label>
        <input name="soft_dependencies" value="{{ $soft_dependencies ?? "" }}" class="form-control" id="soft_dependencies-input">
    </div>
    <p></p>
    <div id="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
