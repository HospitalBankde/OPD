/**
 * Created by PhpStorm.
 * User: AunN
 * Date: 9/19/15 AD
 * Time: 2:45 PM
 */

@extends('layout.default')

@section('title')
    <title>TestView</title>
@endsection

@section('content')
    @foreach($patients as $patient)
        <p>This is user {{$patient->pat_name}} </p>
    @endforeach

    {!!Form::open(array('url'=>'justposttest')) !!}
    {!! Form::text('email','example@gmail.com') !!}
    {!! Form::submit('click here',array('novalidate'=>'novalidate')) !!}
    {!! Form::close() !!}

@endsection

@stop