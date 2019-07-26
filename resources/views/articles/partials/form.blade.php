
<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости"
       value="{{$article->title ?? ""}}" required>

<label for="">Полное описание</label>
<textarea name="description" id="description" cols="30" rows="10" class="form-control" required>{{$article->description ?? ""}}</textarea>
<hr>
