@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @forelse($blogs as $blog)
            <div class="card">
                <div class="card-header">{{$blog->title}} </div>

                <div class="card-body">
                    <small>{{$blog->created_at}}</small>
                    {!! str_limit($blog->description,40) !!}
                </div>
            </div>
            @empty
            <p>There is no active post</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
