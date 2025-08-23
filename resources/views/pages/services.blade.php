@extends('layouts.app')

@section('content')
<section class="page-hero small">
    <div class="container">
        <h1>บริการของเรา</h1>
        <p>โซลูชันด้านสุขภาพครบวงจรสำหรับองค์กร</p>
    </div>
    </section>

    <section class="section">
        <div class="container service-list">
            @php($services = \App\Models\Service::where('is_active', true)->orderBy('position')->get())
            @foreach($services as $service)
                <article id="{{ $service->slug }}">
                    <h2>{{ $service->title }}</h2>
                    @if($service->summary)
                        <p>{{ $service->summary }}</p>
                    @endif
                    @if($service->content)
                        <div>{!! nl2br(e($service->content)) !!}</div>
                    @endif
                </article>
            @endforeach
        </div>
    </section>
@endsection


