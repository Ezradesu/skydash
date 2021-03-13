@extends('template-dashboard.home')
@section('judul', 'Welcome zidan indratama')
@section('content')
					<div class="row">
						<div class="col-md-6 grid-margin stretch-card">
							<div class="card tale-bg">
								<div class="card-people mt-auto">
									<img src="{{asset('skydash/images/dashboard/people.svg')}}" alt="people">
									<div class="weather-info">
										<div class="d-flex">
											<div class="ml-2">
												<h4 class="location font-weight-normal">{{Auth::user()->role}}</h4>
												<h6 class="font-weight-normal">Indonesia</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 grid-margin transparent">
							<div class="row">
								<div class="col-md-6 mb-4 stretch-card transparent">
									<div class="card card-tale">
										<div class="card-body">
											<h4 class="mb-4">Jumlah Pengunjung</h4>
											<p class="fs-30 mb-2">{{$pengunjung}}</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 mb-4 stretch-card transparent">
									<div class="card card-dark-blue">
										<div class="card-body">
											<h4 class="mb-4">Jumlah Author</h4>
											<p class="fs-30 mb-2">{{$author}}</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
									<div class="card card-light-blue">
										<div class="card-body">
											<h4 class="mb-4">Jumlah Category</h4>
											<p class="fs-30 mb-2">{{$category}}</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 stretch-card transparent">
									<div class="card card-light-danger">
										<div class="card-body">
											<h4 class="mb-4">Jumlah Post</h4>
											<p class="fs-30 mb-2">{{$post}}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> 
					<div class="row">
						<div class="col-md-12 grid-margin stretch-card">
							<div class="card position-relative">
								<div class="card-body">
									<div id="detailedReports"
										class="carousel slide detailed-report-carousel position-static pt-2"
										data-ride="carousel">
										<div class="carousel-inner">
											@foreach($blog as $value)
											<div class="carousel-item @if($loop->first) active @endif">
												<div class="row">
													<div
														class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
														<div class="ml-xl-4 mt-3">
															<p class="card-title">Latest Posts</p>
															<h1 class="text-primary">{{$value->category->name}}</h1>
															<h3 class="font-weight-500 mb-xl-4 text-primary">
																@foreach($value->tags as $tag)
																	<ul class="list-arrow">
																		<li>{{$tag->name}}</li>
																	</ul>
																@endforeach
															</h3>
															<p class="mb-2 mb-xl-0">{{$value->judul}}</p>
														</div>
													</div>
													<div class="col-md-12 col-xl-9">
														<div class="row">
															<div class="col-md-6 border-right">
																<div class="mb-3 mb-md-0 mt-3">
																	{!!Str::limit($value->content, 120)!!}
																</div>
															</div>
															<div class="col-md-6 mt-3">
																<img src="{{asset($value->gambar)}}" class="img-fluid" alt="">
															</div>
														</div>
													</div>
												</div>
											</div>
											@endforeach
										</div>
										<a class="carousel-control-prev" href="#detailedReports" role="button"
											data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#detailedReports" role="button"
											data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
@endsection