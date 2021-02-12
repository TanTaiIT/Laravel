<!DOCTYPE html>
<html>
<head>
	<title>Upload File</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card">
					<div class="card-header">
						File Upload
					</div>
					<div class="card-body">
						<form action="{{url('uploadfile')}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label for="file">choose</label>
								<input type="file" class="form-control" name="file" id="file">
							</div>	
							<button type="submit" class="btn btn-success">Upload</button>
						</form>
					</div>
				</div>
			</div>

		</div>
		</div>
		<!-- <h2>{{__('message.welcome')}}</h2>
		<h1>{{__('message.language')}}</h1> -->
</body>
</html>