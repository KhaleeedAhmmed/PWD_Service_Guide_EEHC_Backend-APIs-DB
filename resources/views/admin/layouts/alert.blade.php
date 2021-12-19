
@if(Session::has('flash_message'))
	<script type="text/javascript">
		swal({
		  title: "{{ Session::get('flash_message') }}",
		  text: "{{-- getWord('autoC') --}}",
		   type: "success",
		  timer: 1000,
		  showConfirmButton: false
		});
	</script>
@endif

@if(Session::has('cusMessage'))
	<script type="text/javascript">
		swal({
		  title: "{{ Session::get('cusMessage') }}",
		  text: "{{-- getWord('autoC') --}}",
		  type: "danger",
		  timer: 1000,
		  showConfirmButton: false
		});
	</script>
@endif