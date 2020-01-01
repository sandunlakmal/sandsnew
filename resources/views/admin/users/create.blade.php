@extends('layouts.admin')




@section('content')


    <h1>Create Users</h1>


     {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store','files'=>true]) !!}


      <div class="form-group">
             {!! Form::label('name', 'Name:') !!}
             {!! Form::text('name', null, ['class'=>'form-control'])!!}
       </div>


       <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class'=>'form-control'])!!}
       </div>

        
       {!! Form::close() !!}


    @include('includes.form_error')



 @stop