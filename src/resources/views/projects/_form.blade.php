@csrf 
<div class="custom-file">
    <input name="image" type="file" class="custom-file-input" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
</div>
<div class="form-group">
    <label for="title">Titulo de proyecto </label>
    <input class="form-control shadow-sm"
    type="text" name="title" value="{{old('title', $project->title)}}">
</div>
<div class="form-group">
    <label for="url">URL del proyecto</label>
    <input class="form-control shadow-sm" 
    type="text" name="url" value="{{old('url', $project->url)}}">
</div>
<div class="form-group">
    <label for="description">Descripción del proyecto</label><br>
    <textarea class="form-control shadow-sm"
    name="description" >{{old('description', $project->description)}}</textarea>
</div>

<button class="btn btn-primary btn-block active">{{$button_text}}</button>
<a class="btn btn-link btn-block" href="{{route('proyectos.index')}}">Cancelar</a>