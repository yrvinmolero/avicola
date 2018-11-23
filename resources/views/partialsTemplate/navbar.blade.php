<aside data-mcs-theme="minimal-dark" style="background-image: url(/img/template/backgrounds/11.jpg)" class="main-sidebar mCustomScrollbar">
    <div class="user">
        <h4 class="fs-16 text-muted mt-15 mb-5 fw-300">{{ Session::get('name') }}</h4>
        <p class="mb-0 text-muted">Designer</p>
    </div>
    <ul class="list-unstyled navigation mb-0">
        @foreach(Session::get('modules') as $modul)
        	@if(empty($modul['modHijos']))
				<li class="panel"><a href="{{$modul['modRoute']}}"><i class="{{$modul['modIcono']}}"></i><span 	class="sidebar-title">{{$modul['modDescripcion']}}</span></a></li>
			@else
				<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse{{$modul['modID']}}" aria-expanded="true" aria-controls="collapse1" class="bubble active"><i class="{{$modul['modIcono']}}"></i><span class="sidebar-title">{{$modul['modDescripcion']}}</span></a>
		            <ul id="collapse{{$modul['modID']}}" class="list-unstyled collapse in" aria-expanded="true" style="">
		            	@foreach ($modul['modHijos'] as $modHijos)
		             		<li><a href="{{$modHijos['modRoute']}}">{{$modHijos['modDescripcion']}}</a></li>
		             	@endforeach
		            </ul>
		        </li>

			@endif
		@endforeach
    </ul>
</aside>