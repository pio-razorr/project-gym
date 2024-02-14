@extends('layout.main')


@section('classes')
<div class="site-section" id="classes-section">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-8  section-heading">
          <span class="subheading">Fitness Class</span>
          <h2 class="heading mb-3">Our Classes</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis consequatur cum neque?
          Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        </div>
      </div>
      <div class="row">
        @foreach ($kelas as $class)
        <div class="col-lg-6">
          <div class="class-item d-flex align-items-center">
            <a href="#" class="class-item-thumbnail">
              <img src="{{ asset('storage/posts/' . $class->image)}}" style="height: 7rem; width: 25rem; object-fit:cover; border-radius: 0.25rem" alt="Image">
            </a>
            <div class="class-item-text">

              <h2><a href="single.html">{{ $class->nama_kelas }}</a></h2>
              <span>{{ $class->nama_pelatih }}</span>,
              <span>{{ $class->durasi }}</span>
            </div>
          </div>


        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
