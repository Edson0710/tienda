<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if($errors->any())
@foreach ($errors->all() as $error)
    @php $mensaje = $error; @endphp
    <script>
        var msj = '{{$mensaje}}'+ "\n" + msj;
    </script>
@endforeach
<script>
        Swal.fire({
        title: 'Oops...',
        icon: 'error',
        html: '{{$mensaje}}',
        confirmButtonColor: '#3085d6',
        })

</script>
@endif
@if (Session::has('success'))
<script>
        Swal.fire({
            title: 'Éxito!',
            text: '{{Session::get('success')}}',
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
        })
</script>
{{Session::forget('success')}}
@endif
