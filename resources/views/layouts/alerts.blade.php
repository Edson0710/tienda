@push('js')
@if($errors->any())
@foreach ($errors->all() as $error)
    {{$mensaje = $error}}
    var msj = '{{$mensaje}}'+ "\n" + msj;
@endforeach
<script>
    $( document ).ready(function() {
        Swal.fire({
        title: 'Oops...',
        icon: 'error',
        html: '{{$mensaje}}',
        confirmButtonColor: '#3085d6',
        })
    });

</script>
@endif
@if (Session::has('success'))
<script>
    $( document ).ready(function() {
        Swal.fire({
            title: 'Exito!',
            text: '{{Session::get('success')}}',
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
        })
    });
</script>
@endif
@endpush
