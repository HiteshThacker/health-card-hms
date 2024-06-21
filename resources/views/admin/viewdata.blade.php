@extends('admin.layouts.main')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


@section('main-container')

<main id="main" class="main" >

    <div class="pagetitle">
      <h1>Data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/official')}}">Official</a></li>
          <li class="breadcrumb-item active">View Patients Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section" >
    <div class="">
        <form class="search-form " method="POST" action="{{url('/official/data')}}/chkdata">
        @csrf
        <div class="text-center">
          <input type="text" name="query" placeholder=" Search" title="Enter search Id"  >
        </div>
        <div class="text-center my-3">
        <span class="text-danger " style="font-size: 1rem">
            {{session()->get('error')}}
        </span>
        </div>
        <div class="text-center my-3">
         <button type="submit" class="btn"><i class="bi bi-search mx-1"></i> Find </button>
        </div>
        </form>
    </div><!-- End Search Bar -->
    <div class="container mt-5 pt-5 " >
        {{-- <a class="bi bi-folder link-info"></a>
        <a class="bi bi-folder-fill link-warning"></a> --}}
        {{-- <a class="bi bi-folder-x"></a> --}}
        {{-- <a class="bi bi-folder2 link-warning " style="font-size: 7rem;" ></a> --}}
        {{-- <a class="bi bi-folder2 link-warning" style="font-size: 7rem;" ></a> --}}
        @if(session()->get('da')!="")
            @php
                $da=session()->get('da');
            @endphp
        @endif
        @foreach ( $da as $d)
            <div style="display: inline;margin-left:20px;">
                <a href="{{url('/official/data/view')}}/{{$d->health_id}}" class="material-symbols-outlined file" >topic</a>
                <span style="margin-left: -120px; margin-top:100px;position:absolute;">{{Str::substr($d->health_id,0,4)." ".Str::substr($d->health_id,4,4)." ".Str::substr($d->health_id,8,4)}}</span>
            </div>

            @endforeach

    </div>

</section>


</main>
<script>

</script>

@endsection

