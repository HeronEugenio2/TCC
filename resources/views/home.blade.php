@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">LaRepublica</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- <li class="nav-item"> --}}
                      <a class="nav-link" href="{{ URL::to('/lacasa') }}">Acesse sua repblica</a>
                    {{-- </li> --}}
                    Usuário logado !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
