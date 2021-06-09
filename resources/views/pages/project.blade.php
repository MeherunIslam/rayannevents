@extends('layouts.userfont-master')

@section('user_content')
	<!--- project --->
	<div class="products">

        <!-- Featured Section Begin -->
        <section class="featured spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Our Works</h2>
                        </div>
                        <div class="featured__controls">
                            <ul>
                                <li class="active" data-filter="*">All</li>
                                @foreach ( $groups as $grp)
                                    <li data-filter=".filter{{ $grp->id }}">{{ $grp->group_name }}</li>
                                @endforeach        
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row featured__filter">    
                    @foreach ( $groups as $grp )
                        @php
                            $projects = App\Project::where('group_id',$grp->id)->latest()->get();
                        @endphp
                        @foreach ( $projects as $project )
                            <div class="col-lg-3 col-md-4 col-sm-6 mix filter{{ $grp->id}}">
                                <div class="featured__item">
                                    <div class="featured__item__pic set-bg" data-setbg="{{ asset($project->image_one) }}">
                                        <ul class="featured__item__pic__hover">
                                        </ul>
                                    </div>
                                    <div class="featured__item__text">
                                        <h6><a href="{{ url('project/details/'.$project->id) }}">{{ $project->project_name}}</a></h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach                        
                </div>
            </div>
        </section>
        <!-- Featured Section End -->

		<div class="clearfix"> </div>
	</div>
	<!--- project --->
@endsection