@extends('layouts.master')
@section('content')
    <x-header className="header-light" />
    <x-section :items="$hero" :heading="$hero['heading']" view="hero4"/>
    <x-section :items="$feature['items']" :heading="$feature['heading']" view="feature1"/>
    <x-section :items="$story['items']" :heading="$story['heading']" view="story"/>
    <x-section :items="$call['items']" :heading="$call['heading']" view="call_to_action"/>
    <x-footer/>
@endsection

