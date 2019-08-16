@extends('layouts.app')

@section('content')
@php
$attr = array(
    'uid' => Cas::getAttribute('uid'),
    'displayName' => Cas::getAttribute('displayName'),
    'givenName' => Cas::getAttribute('givenName'),
    'cn' => Cas::getAttribute('cn'),
    'sn' => Cas::getAttribute('sn'),
    'mail' => Cas::getAttribute('mail'),
);
@endphp
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        You are logged in! Hello {{ Cas::getAttribute('cn') }}!
                    </div>
                    Attributes:
                    <ul>
                        @foreach($attr as $key => $value)
                        <li>{{ $key }}: {{ $value }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
