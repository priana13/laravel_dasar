@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">BroadCast</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                    
                        <form action="{{route('wa.store')}}" method="post">
                            @csrf


                            <div class="form-group">
                                <input class="form-control {{$errors->has('hp') ? 'is-invalid' : ''}}" type="text" name="hp" value="{{old('hp')}}"  placeholder="No Whatsapp">
                                <div class="invalid-feedback">
                                    @if($errors->has('hp'))
                                        {{$errors->first('hp')}}
                                    @endif
                                </div>                            
                            </div>


                            <div class="form-group">
                                <textarea class="form-control" name="pesan" id="" cols="30" rows="10"></textarea>
                                <div class="invalid-feedback">
                                    @if($errors->has('pesan'))
                                        {{$errors->first('pesan')}}
                                    @endif
                                </div>                            
                            </div>

                            
                            <button class="btn btn-primary" type="submit">Kirim Pesan</button>
                        </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
