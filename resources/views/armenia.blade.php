@extends('layouts.app')

@section('content')
   @if(count($arm))
        @foreach($arm as $item)
            {!! $item->desc !!}
        @endforeach
   @endif
@endsection