@extends('layouts.layout')

@section('content')

    <main role="main">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-8 col-md-6">
                            <h4 class="mb-0 text-truncated">{{$org->org_leader_name}}</h4>
                            <p class="lead">{{$org->org_leader_desc}}</p>
                            <div class="Checklist">
                                <h6 class="mb-0 text-truncated">{{$org->org_description_title}}</h6>
                                {!! $org->org_description !!}
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-6 text-center">
                            <img src="{{$org->org_img}}" alt="" class="mx-auto rounded-sm img-fluid">
                        </div>
                        <!--/col-->
                    </div>
                    <!--/row-->
                </div>
                <!--/card-block-->
            </div>
        </div>
    </main>

@endsection
