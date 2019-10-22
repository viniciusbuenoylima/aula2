@extends('layouts.app')

@section('title', 'Boa tarde')

@section('topo')
    @parent
    <p>boa tarde - topo</p>
@endsection

@section('content')
<h1>Boa tarde {{$nome}}!<br/></h1>    
<h2>bem vindo ao curso!</h2>
@endsection

@section('rodape')
    @parent
    <p>boa tarde - rodape</p>
@endsection