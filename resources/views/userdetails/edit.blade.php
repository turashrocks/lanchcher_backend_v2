@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Userdetail
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($userdetail, ['route' => ['userdetails.update', $userdetail->id], 'method' => 'patch']) !!}

                        @include('userdetails.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection