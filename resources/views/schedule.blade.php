@extends('layout.main')
@section('schedule')

<div class="site-section" id="schedule-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8  section-heading">
                <span class="subheading">Fitness Sched</span>
                <h2 class="heading mb-3">Schedule</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                    there live the blind
                    texts.
                    Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                    ocean.</p>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <ul class="nav days d-flex" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="sunday-tab" data-toggle="tab" href="#nav-sunday"
                            role="tab" aria-controls="sunday" aria-selected="true">Minggu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="monday-tab" data-toggle="tab" href="#nav-monday" role="tab"
                            aria-controls="monday" aria-selected="false">Senin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#nav-tuesday" role="tab"
                            aria-controls="tuesday" aria-selected="false">Selasa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#nav-wednesday"
                            role="tab" aria-controls="wednesday" aria-selected="false">Rabu</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#nav-thursday" role="tab"
                            aria-controls="thursday" aria-selected="false">Kamis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="friday-tab" data-toggle="tab" href="#nav-friday" role="tab"
                            aria-controls="friday" aria-selected="false">Jumat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="saturday-tab" data-toggle="tab" href="#nav-saturday" role="tab"
                            aria-controls="saturday" aria-selected="false">Sabtu</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="tab-content">
                {{-- minggu --}}
            <div class="tab-pane fade show active" id="nav-sunday" role="tabpanel" aria-labelledby="nav-sunday-tab">
              <div class="row">
                <div class="col-lg-6">
                  <div class="class-item d-flex align-items-center">
                    <a href="single.html" class="class-item-thumbnail">
                      <img src="images/img_1.jpg" alt="Image">
                    </a>
                    <div class="class-item-text">
                      <span>Sunday 7:30am - 9:00am</span>
                      <h2><a href="single.html">Fitness Class Name #1</a></h2>
                      <span>By Justin Daniel</span>,
                      <span>30 minutes</span>
                    </div>
                  </div>

                </div>
                <div class="col-lg-6">
                  <div class="class-item d-flex align-items-center">
                    <a href="single.html" class="class-item-thumbnail">
                      <img src="images/img_1.jpg" alt="Image">
                    </a>
                    <div class="class-item-text">
                      <span>Sunday 7:30am - 9:00am</span>
                      <h2><a href="single.html">Fitness Class Name #1</a></h2>
                      <span>By Justin Daniel</span>,
                      <span>30 minutes</span>
                    </div>
                  </div>

                </div>
              </div>
            </div>

                {{-- senin --}}
            <div class="tab-pane fade" id="nav-monday" role="tabpanel" aria-labelledby="nav-monday-tab">
              <div class="row">
                <div class="col-lg-6">
                  <div class="class-item d-flex align-items-center">
                    <a href="single.html" class="class-item-thumbnail">
                      <img src="images/img_1.jpg" alt="Image">
                    </a>
                    <div class="class-item-text">
                      <span>Monday 7:30am - 9:00am</span>
                      <h2><a href="single.html">Fitness Class Name #5</a></h2>
                      <span>By Justin Daniel</span>,
                      <span>30 minutes</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="class-item d-flex align-items-center">
                    <a href="single.html" class="class-item-thumbnail">
                      <img src="images/img_1.jpg" alt="Image">
                    </a>
                    <div class="class-item-text">
                      <span>Monday 7:30am - 9:00am</span>
                      <h2><a href="single.html">Fitness Class Name #1</a></h2>
                      <span>By Justin Daniel</span>,
                      <span>30 minutes</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                {{-- selasa --}}
            <div class="tab-pane fade" id="nav-tuesday" role="tabpanel" aria-labelledby="nav-tuesday-tab">
              <div class="row">
                <div class="col-lg-6">
                  <div class="class-item d-flex align-items-center">
                    <a href="single.html" class="class-item-thumbnail">
                      <img src="images/img_3.jpg" alt="Image">
                    </a>
                    <div class="class-item-text">
                      <span>Tuesday 7:30am - 9:00am</span>
                      <h2><a href="single.html">Fitness Class Name #3</a></h2>
                      <span>By Justin Daniel</span>,
                      <span>30 minutes</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="class-item d-flex align-items-center">
                    <a href="single.html" class="class-item-thumbnail">
                      <img src="images/img_3.jpg" alt="Image">
                    </a>
                    <div class="class-item-text">
                      <span>Tuesday 7:30am - 9:00am</span>
                      <h2><a href="single.html">Fitness Class Name #3</a></h2>
                      <span>By Justin Daniel</span>,
                      <span>30 minutes</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                {{-- rabu --}}
            <div class="tab-pane fade" id="nav-wednesday" role="tabpanel" aria-labelledby="nav-wednesday-tab">
              <div class="row">
                <div class="col-lg-6">
                  <div class="class-item d-flex align-items-center">
                    <a href="single.html" class="class-item-thumbnail">
                      <img src="images/img_2.jpg" alt="Image">
                    </a>
                    <div class="class-item-text">
                      <span>Wednesday 7:30am - 9:00am</span>
                      <h2><a href="single.html">Fitness Class Name #2</a></h2>
                      <span>By Justin Daniel</span>,
                      <span>30 minutes</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="class-item d-flex align-items-center">
                    <a href="single.html" class="class-item-thumbnail">
                      <img src="images/img_3.jpg" alt="Image">
                    </a>
                    <div class="class-item-text">
                      <span>Wednesday 7:30am - 9:00am</span>
                      <h2><a href="single.html">Fitness Class Name #3</a></h2>
                      <span>By Justin Daniel</span>,
                      <span>30 minutes</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                {{-- kamis --}}
            <div class="tab-pane fade" id="nav-thursday" role="tabpanel" aria-labelledby="nav-thursday-tab">
              <div class="row">
                <div class="col-lg-6">
                  <div class="class-item d-flex align-items-center">
                    <a href="single.html" class="class-item-thumbnail">
                      <img src="images/img_4.jpg" alt="Image">
                    </a>
                    <div class="class-item-text">
                      <span>Thursday 7:30am - 9:00am</span>
                      <h2><a href="single.html">Fitness Class Name #4</a></h2>
                      <span>By Justin Daniel</span>,
                      <span>30 minutes</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="class-item d-flex align-items-center">
                    <a href="single.html" class="class-item-thumbnail">
                      <img src="images/img_1.jpg" alt="Image">
                    </a>
                    <div class="class-item-text">
                      <span>Thursday 7:30am - 9:00am</span>
                      <h2><a href="single.html">Fitness Class Name #1</a></h2>
                      <span>By Justin Daniel</span>,
                      <span>30 minutes</span>
                    </div>
                  </div>

                </div>
              </div>
            </div>

                {{-- friday --}}
            <div class="tab-pane fade" id="nav-friday" role="tabpanel" aria-labelledby="nav-friday-tab">
              <div class="row">
                <div class="col-lg-6">
                  <div class="class-item d-flex align-items-center">
                    <a href="single.html" class="class-item-thumbnail">
                      <img src="images/img_2.jpg" alt="Image">
                    </a>
                    <div class="class-item-text">
                      <span>Friday 7:30am - 9:00am</span>
                      <h2><a href="single.html">Fitness Class Name #2</a></h2>
                      <span>By Justin Daniel</span>,
                      <span>30 minutes</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="class-item d-flex align-items-center">
                    <a href="single.html" class="class-item-thumbnail">
                      <img src="images/img_3.jpg" alt="Image">
                    </a>
                    <div class="class-item-text">
                      <span>Friday 7:30am - 9:00am</span>
                      <h2><a href="single.html">Fitness Class Name #3</a></h2>
                      <span>By Justin Daniel</span>,
                      <span>30 minutes</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                {{--  sabtu--}}
            <div class="tab-pane fade" id="nav-saturday" role="tabpanel" aria-labelledby="nav-saturday-tab">
              <div class="row">
                <div class="col-lg-6">
                  <div class="class-item d-flex align-items-center">
                    <a href="single.html" class="class-item-thumbnail">
                      <img src="images/img_1.jpg" alt="Image">
                    </a>
                    <div class="class-item-text">
                      <span>Saturday 7:30am - 9:00am</span>
                      <h2><a href="single.html">Fitness Class Name #1</a></h2>
                      <span>By Justin Daniel</span>,
                      <span>30 minutes</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="class-item d-flex align-items-center">
                    <a href="single.html" class="class-item-thumbnail">
                      <img src="images/img_3.jpg" alt="Image">
                    </a>
                    <div class="class-item-text">
                      <span>Saturday 7:30am - 9:00am</span>
                      <h2><a href="single.html">Fitness Class Name #3</a></h2>
                      <span>By Justin Daniel</span>,
                      <span>30 minutes</span>
                    </div>
                  </div>
               
                </div>
              </div>
            </div>
          </div>

    </div>
</div>


<div class="bgimg" style="background-image: url('{{ asset('assets/workout-master/images/bg_1.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
                <h2 class="">Your Fitness Partner Where Ever You Are</h2>
                <p class="lead mx-auto desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Sint, nisi cum officia alias recusandae neque reprehenderit.</p>
            </div>
        </div>
    </div>
</div>


@endsection
