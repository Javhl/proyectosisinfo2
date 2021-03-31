@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('empleado.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('empleado.form' ,['modo'=>'Registrar Empleado']);


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection