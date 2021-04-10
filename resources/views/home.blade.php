@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                    
                        <form action="{{route('form')}}" method="post">
                            @csrf

                            <label for="">
                                 <input type="text" name="email">
                            </label>
                            @if($errors->has('email'))
                                {{$errors->first('email')}}
                            @endif
                            <button type="submit">Subsribe</button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
