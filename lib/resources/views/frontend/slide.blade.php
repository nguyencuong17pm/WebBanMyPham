<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<?php $i=0; ?>
					@foreach($slide as $sl)
					<li data-target="#carousel-example-generic" data-slide-to="{{$i}}" 
					@if($i == 0) class="active" @endif></li>
					<?php $i++ ?>
					@endforeach
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<?php $i=0; ?>
					@foreach($slide as $sl)
					<div @if($i == 0) class="item active" @else class="item" @endif>
						<img style="height: 450px;" src="{{asset('lib/storage/app/avatar/'.$sl->s_img)}}" alt="">
						<div class="carousel-caption">
							<div class="container">
								<section class="rw-wrapper">
									<h1 class="rw-sentence">
										<div class="rw-words rw-words-1">
											<span  style="font-family: Monotype corsiva; font-size: 60px;">{{$sl->s_name}}</span>
										</div>
										<div class="rw-words rw-words-2">
											<span style="font-family: Monotype Corsiva">{{$sl->s_name2}}</span>
										</div>
									</h1>
								</section>
							</div>
						</div>
					</div>
					<?php $i++ ?>
					@endforeach
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>