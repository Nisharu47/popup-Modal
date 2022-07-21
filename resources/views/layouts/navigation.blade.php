<!doctype html>
<html lang="en">
  <head>
  	<title>Popup Modal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    @livewireStyles

	</head>
	<body Style=" background:linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%),  url('assets/images/background.jpg') ">


        <div >
            {{$slot}}
        </div>
	




	
        @livewireScripts
	<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/js/popper.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/js/main.js')}}"></script>


  <script>
    window.addEventListener('showModal', event => {
      $("#createModal").modal("show");
    })
  </script>

<script>
    window.addEventListener('hideModal', event => {
      $("#createModal").modal("hide");
    })
  </script>

<script>
    window.addEventListener('updateModal', event => {
      $("#updateModal").modal("update");
    })
  </script>

<script>
  window.addEventListener('hideModal', event => {
    $("#updateModal").modal("hide");
  })
</script>

<script>
  window.addEventListener('ShowdeleteModal', event => {
    $("#deleteModal").modal("show");
  })
</script>

<script>
  window.addEventListener('hideModal', event => {
    $("#deleteModal").modal("hide");
  })
</script>



	</body>
</html>