@extends('admin.layouts.main')

@section('main-container')

<main id="main" class="main" >

    <div class="pagetitle">
      <h1>Blogs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/official')}}">Official</a></li>
          <li class="breadcrumb-item active">Add Blog</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section" style="text-align: center">

    <div class="container mt-5 pt-5">
        {{-- <h1 class="heading"> <span>signup</span> now </h1> --}}

        <div class="row">
            <div class="col-12 col-sm-7 col-md-6 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h5 class="card-title">{{$title}} </h5>
                        <form action="{{ $url}}" method="POST" enctype="multipart/form-data" class="php-email-form">
                        @csrf


                        @if ($title!="Update Blog")
                        <div class="md-4 my-3">
                        <input type="text" name="by" class="form-control" placeholder="By" required />
                        </div>



                        <div class="md-4 my-3">
                            <label class="mb-3 fs-4" for="date">Date</label>
                            <input type="date" name="date" class="form-control" placeholder="Date of Birth" max="{{Date("Y-m-d")}}" required />
                        </div>
                        @endif

                        <div class="md-4 my-3">
                        <input type="text" name="title" class="form-control" placeholder="Title" required value="{{$b->title}}" />
                        </div>

                        <div class="md-4 my-3">
                            <label class="mb-3 fs-4" for="des">Description</label>
                            <textarea name="description" id="des" class="form-control" placeholder="Description" required>{{$b->description}}
                            </textarea>

                        </div>


                        <div class="md-4 my-3">
                        <label for="photo" class="form-control border-0" style="font-size:2.5rem" >
                            Upload Photo for Blog
                        </label>
                        {{-- <input type="file" id="photo" name="photo" class="form-control my-3" style="" required /> --}}
                        @if ($b->photo=="")
                        <input type="file" id="photo" name="photo" class="form-control my-3" title="{{$b->photo}}">

                        @else
                        <div class="input-group has-validation pa-ss my-3" style="cursor: pointer;">
                            <span class="input-group-text" id="cf" style="margin-right: -.2rem;" onclick="document.querySelector('#img').setAttribute('type', 'file');this.style.display='none';">
                                Choose File
                            </span>
                            <input type="text" class="form-control " value="{{$b->photo}}" onclick="this.setAttribute('type', 'file');document.querySelector('#cf').style.display='none';"   readonly id="img" name="img" />
                            {{-- <i class=" my-2 bi-eye-slash" id="togglePassword"></i> --}}
                        </div>
                        @endif
                        </div>

                        <span class="text-danger" style="font-size: 1.5rem">
                            @error('photo')
                                {{$message}}
                            @enderror
                        </span>
                        <div class="col-12 my-3">
                            <input class="btn" id="btnotp" type="submit" value="Submit" name="insert" >
                        </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

</section>

</main>

@endsection

