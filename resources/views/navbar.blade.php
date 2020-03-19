<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="{{ url('/') }}">SiswakuApp</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportContent" aria-controls="navbarSupportContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<li> <a class="nav-item nav-link active" href="{{ url('siswa') }}"> Siswa
						<span class="sr-only">(current)</span> </a> </li>
					<li> <a class="nav-item nav-link active" href="{{ url('about') }}"> About </a> </li>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-light">
				<li> <a href="#">Login</a> </li>
			</ul>
		</div>
</nav>