@extends('NovaSite::layouts.app')

@section('title', 'Page Title')

@section('content')
<style type="text/css">
.transition{
     transition: transform 0.5s;
}
.transition:hover {
    transform: scale(1.01);
}
</style>
    
    @component('NovaSite::components.navigation.default') @endcomponent
    <div class="container mx-auto  flex flex-col flex-wrap" style="padding-top:100px;">
        @component('NovaSite::components.feed.default') @endcomponent
        @component('NovaSite::components.card.card-group') @endcomponent
    </div>
@endsection