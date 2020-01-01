@extends('layouts.admin')




@section('content')


    <h1>Create Users</h1>


     {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store']) !!}


      <div class="form-group">
             {!! Form::label('name','Name') !!}
             {!! Form::text('name',null,['class'=>'form-control'])!!}
       </div>

       <div class="form-group">
             {!! Form::label('email','Email') !!}
             {!! Form::email('email',null,['class'=>'form-control'])!!}
       </div>
       <div class="form-group">
             {!! Form::label('role_id','Role') !!}
             {!! Form::select('role_id',[''=>'Choose option'], null,['class'=>'form-control'])!!}
       </div>
       <div class="form-group">
             {!! Form::label('status','Status') !!}
             {!! Form::select('starus',array(1=>'Active',0=>'Not active'),0,['class'=>'form-control'])!!}
       </div>

       <div class="form-group">
        {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
       </div>

        
       {!! Form::close() !!}



 @stop