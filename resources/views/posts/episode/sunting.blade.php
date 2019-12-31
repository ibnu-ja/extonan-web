@extends('layouts.app')

@section('navbar')
@include('partials.navbar2')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                </div>

                <div class="card-body">
                    <form method="post" action="{{ url()->current() }}">
                        <div class="form-group">
                        <input type="hidden" value="{{csrf_token()}}" name="_token" />
                            <label for="title">Episode:</label>
                            <input type="text" class="form-control" value=" {{ $ep->episode }}" name="episode" />
                        </div>
                        <div class="form-group">
                            <label for="title">Link sub: </label>
                            <input type="text" class="form-control" 
                            @foreach ($links as $l)
                            @if($l->res == 'sub')
                            value="{{ $l->link_org}}"
                            @endif
                            @endforeach
                            name="sub" />
                        </div>
                        <div class="form-group">
                            <label for="title">Link 480p: </label>
                            <input type="text" class="form-control" 
                            @foreach ($links as $l)
                            @if($l->res == '480p')
                            value="{{ $l->link_org}}"
                            @endif
                            @endforeach
                            name="480p" />
                        </div>
                        <div class="form-group">
                            <label for="title">Link 720p:</label>
                            <input type="text" class="form-control"
                            @foreach ($links as $l)
                            @if($l->res == '720p')
                            value="{{ $l->link_org}}"
                            @endif
                            @endforeach
                            name="720p" />
                        </div>
                        <div class="form-group">
                            <label for="title">Link 1080p:</label>
                            <input type="text" class="form-control"
                            @foreach ($links as $l)
                            @if($l->res == '1080p')
                            value="{{ $l->link_org}}"
                            @endif
                            @endforeach name="1080p" />
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection