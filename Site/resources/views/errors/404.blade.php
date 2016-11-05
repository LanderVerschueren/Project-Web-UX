<!DOCTYPE html>
<html lang="en">
<head>
	@include( 'includes.head' )
</head>
<body>
	<div id="layout">

		@include('includes.nav2')

		<div id="main">
			<div class="header">
				<h1>404</h1>
				<form action="/search" method="post">
					{{csrf_field()}}
					<input type="text" name="searchTerm" placeholder="Zoeken naar...">
					<button class="" type="submit">Search</button>
				</form>
			</div>

			<div class="content">
				<div id="app">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="container_card">
							<div class="card"></div>
							<div class="card offer">
								<h1 class="title">Deze pagina bestaat niet!</h1>
								<div class="container_row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="button-container">
											<div class="container_row">
												<div class="button">
													<a href="/home">Homepagina</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="button-container">
											<div class="container_row">
												<div class="button">
													<a href="/offer">Aanbieden</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="button-container">
											<div class="container_row">
												<div class="button">
													<a href="/buy">Kopen</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>  
						</div>
					</div> 
				</div>
			</div>
		</div>
	</div>
</body>
</html>
