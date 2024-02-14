@extends('layout.main')
@section('trainer')
<div class="site-section" id="trainer-section">
    <div class="container">
      <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
        <div class="col-md-8  section-heading">
          <span class="subheading">Trainer</span>
          <h2 class="heading mb-3">Our Trainers</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
            texts.
            Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="">
          <div class="person">
            <img src="{{ asset('assets/workout-master/images/person_1.jpg')}}" alt="Image" class="img-fluid">
            <h3>Justin Daniel</h3>
            <p class="position">Trainer</p>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
            texts.</p>
          </div>
        </div>
        <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="person">
            <img src="{{ asset('assets/workout-master/images/person_3.jpg')}}" alt="Image" class="img-fluid">
            <h3>Matthew Davidson</h3>
            <p class="position">Trainer</p>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
              texts.</p>
          </div>
        </div>
        <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
          <div class="person">
            <img src="{{ asset('assets/workout-master/images/person_2.jpg')}}" alt="Image" class="img-fluid">
            <h3>Matthew Davidson</h3>
            <p class="position">Trainer</p>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
              texts.</p>
          </div>
        </div>
        <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
          <div class="person">
            <img src="{{ asset('assets/workout-master/images/person_4.jpg')}}" alt="Image" class="img-fluid">
            <h3>Matthew Davidson</h3>
            <p class="position">Trainer</p>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
              texts.</p>
          </div>
        </div>

      </div>
    </div>
  </div>

@endsection
