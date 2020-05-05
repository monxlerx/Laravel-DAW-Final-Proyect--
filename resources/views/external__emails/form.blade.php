

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <input type="text" name="name" class="form-control" id="name"  value="{{ old('name', optional($externalEmail)->name) }}" minlength="1" maxlength="255" placeholder="Nombre">
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <input type="email" name="email" class="form-control" id="email" value="{{ old('email', optional($externalEmail)->email) }}" placeholder="Email">
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
    <textarea name="message" required="required" id="message" value="{{ old('message', optional($externalEmail)->message) }}" class="form-control" rows="8" placeholder="Escribe el mensaje aquí" maxlength="2000">
    </textarea>
    {!! $errors->first('message', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input type="submit" name="submit" class="btn btn-submit" value="ENVIAR">
</div>