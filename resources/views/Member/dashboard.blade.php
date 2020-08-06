@extends('Member.Layouts.app')

@section('header-content')

@endsection
@section('content')

@endsection
@section('js')
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
        openModal();
    });


</script>
@endsection
@section('css')
<style>
    .header {
        background-image:linear-gradient(to bottom, rgba(249, 249, 249, 0.52), rgba(9, 50, 123, 0.73)),
        url('{{ asset("img/life12.jpg") }}');
        background-size: cover;
        background-position: center;
    }

    #dashbordLink1,
    #dashbordLink2 {
        text-decoration: none;
    }

</style>
@endsection
