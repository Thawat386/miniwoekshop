@extends('layouts.app')
@section('content')
   <div class="container">
   @if ($errors->all())
   <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
   </ul>
   @endif
    {!! Form::open(['action' => 'contactcontroller@store', 'method'=>'POST']) !!}
        <dev class="col-md-6">
            <div class="form-group">
            {!! Form::label('NAME') !!}
            {!! Form::text('name',null,["class"=>"form-control"])!!}
            </div>   
        </dev>
        <dev class="col-md-6">
            <div class="form-group">
            {!! Form::label('EMAIL') !!}
            {!! Form::text('email',null,["class"=>"form-control"])!!}
            </div>   
        </dev>
        <dev class="col-md-6">
            <div class="form-group">
            {!! Form::label('PHONE') !!}
            {!! Form::text('phone',null,["class"=>"form-control"])!!}
            </div>   
            <input type="submit" value="บันทึก" class="btn btn-primary">
            <a href="/contact" class="btn btn-success">กลับ</a>
        </dev>
    {!! Form::close() !!}
    </div>
@endsection