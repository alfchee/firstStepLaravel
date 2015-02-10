

<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('lyrics', 'Lyrics:') !!}
    {!! Form::textarea('lyrics', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Update song', ['class' => 'btn btn-primary']) !!}
</div>
