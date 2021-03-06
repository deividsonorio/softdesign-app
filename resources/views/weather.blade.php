@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Weather') }}</div>

                    @if(isset($weather))

                    <div class="card-body">

                        <h4>{{ __('Weather in') }}: {{$weather["city_name"]}}</h4>

                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0">Descrição</h6>
                                        <small class="text-muted">Descrição da condição de tempo atual</small>
                                    </div>
                                    <span class="text-muted"><strong>{{$weather["description"]}}</strong></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0">Temperatura</h6>
                                        <small class="text-muted">Tempreratura atual na cidade de {{$weather["city_name"]}}</small>
                                    </div>
                                    <span class="text-muted"><strong>{{$weather["temp"]}}º</strong></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0">Humidade</h6>
                                        <small class="text-muted">Humidade atual em percentual</small>
                                    </div>
                                    <span class="text-muted"><strong>{{$weather["humidity"]}}%</strong></span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0">Velocidade do vento</h6>
                                        <small class="text-muted">Velocidade do vento em km/h</small>
                                    </div>
                                    <span class="text-muted"><strong>{{$weather["wind_speedy"]}}</strong></span>
                                </li>
                            </ul>
                    </div>

                    @endif

                    <div class="card-body">
                        <form method="post" action="{{ route('weather.post') }}">
                            <div class="form-group">
                                @csrf
                                <label for="city">Consultar cidade:</label>
                                <input type="text" class="form-control" name="city"/>
                            </div>

                            <button type="submit" class="btn btn-outline-secondary">Search</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
