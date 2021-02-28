
<div>
    <h1>Login</h1>
    <div>
        {!! Form::open(['route'=>'payco.store','method' => 'post']) !!}
            <div class="form-group">
            {!! Form::label('Nombre:') !!}
            {!! Form::text('name',null,['class'=>'form-control','placeholfer'=>'Nombre']) !!}
            </div>
            <div class="form-group">
            {!! Form::label('Email:') !!}
            {!! Form::email('email',null,['class'=>'form-control','placeholfer'=>'email']) !!}
            </div>
            <div class="form-group">
            {!! Form::label('Password') !!}
            {!! Form::password('password',null,['class'=>'form-control','placeholfer'=>'Password']) !!}
            </div>
            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
        {!!Form::close()!!}
    </div>
  
</div>


<!--<form action="{{ route('payco.store') }}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Correo</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Contraseña</label>
        <input type="password" class="form-control">
    </div>
    <button class="btn btn-primary">Registrar</button>
</form>-->