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
@isset($success)
{{dd($success)}}
<script>
    $( document ).ready(function() {
        Swal.fire({
            title: 'Exito!',
            text: '{{$success}}',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        })
    });
</script>
@endisset
@endpush
