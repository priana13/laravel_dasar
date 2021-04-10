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


                            <div class="form-group">
                                <input class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" type="text" name="email"  placeholder="Email Anda">
                                
                                <div class="invalid-feedback">
                                    @if($errors->has('email'))
                                        {{$errors->first('email')}}
                                    @endif
                                </div>                            
                            </div>

                            
                            <button class="btn btn-primary" type="submit">Subsribe</button>
                        </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
