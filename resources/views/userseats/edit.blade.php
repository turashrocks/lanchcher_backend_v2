@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Userseat
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($userseat, ['route' => ['userseats.update', $userseat->id], 'method' => 'patch']) !!}

                        @include('userseats.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection