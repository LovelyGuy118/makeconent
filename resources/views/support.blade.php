@extends('layouts.main')
@section('content')
    <section class="admin-content">
        <div class=" bg-dark m-b-30 ">
            <div class="container">
                <div class="row">
                    <div class="col-8 m-auto text-white p-t-40 p-b-90">

                        <h1 class="fw-300 text-center">How can we help you?
                        </h1>
                        <p class="p-t-30 form-dark">
                            <input type="search" placeholder="Search Something" class=" form-control form-control-lg">
                        </p>

                    </div>
                </div>
            </div>

        </div>
        <div class="container pull-up">
            <div class="row m-b-90">
                <div class="col-lg-3 col-md-6">
                    <a href="guide-article.html" class="card shadow-lg guide-item m-b-30  bg-primary">
                        <div class="card-body text-white">

                            <h4 class=" p-t-20 ">Getting Started with design systems</h4>
                            <p>
                                Read More
                            </p>

                        </div>
                        <div class="text-center">
                            <img class="card-img" src="assets/img/guides/random-01.svg" alt="">
                        </div>
                    </a>
                    <a href="guide-article.html" class="card shadow-lg guide-item m-b-30  bg-info">
                        <div class="card-body text-white">

                            <h4 class=" p-t-20 ">Reusable Components</h4>
                            <p>
                                Read More
                            </p>

                        </div>
                        <div class="text-center">
                            <img class="card-img" src="assets/img/guides/random-05.svg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="guide-article.html" class="card shadow-lg guide-item m-b-30  bg-success">
                        <div class="card-body text-white">

                            <h4 class=" p-t-20 ">Creating your first page</h4>
                            <p>
                                Read More
                            </p>

                        </div>
                        <div class="text-center">
                            <img class="card-img" src="assets/img/guides/random-02.svg" alt="">
                        </div>
                    </a>
                    <a href="guide-article.html" class="card shadow-lg guide-item m-b-30  bg-gray-800">
                        <div class="card-body text-white">

                            <h4 class=" p-t-20 ">Collaborations & Team Ethics </h4>
                            <p>
                                Read More
                            </p>

                        </div>
                        <div class="text-center">
                            <img class="card-img" src="assets/img/guides/random-06.svg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="guide-article.html" class="card shadow-lg guide-item m-b-30  bg-info">
                        <div class="card-body text-white">

                            <h4 class=" p-t-20 ">Setting Up Email</h4>
                            <p>
                                Read More
                            </p>

                        </div>
                        <div class="text-center">
                            <img class="card-img" src="assets/img/guides/random-03.svg" alt="">
                        </div>
                    </a>
                    <a href="guide-article.html" class="card shadow-lg guide-item m-b-30  bg-warning">
                        <div class="card-body text-white">

                            <h4 class=" p-t-20 ">Sharing Guides</h4>
                            <p>
                                Read More
                            </p>

                        </div>
                        <div class="text-center">
                            <img class="card-img" src="assets/img/guides/random-07.svg" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="guide-article.html" class="card shadow-lg guide-item m-b-30  bg-danger">
                        <div class="card-body text-white">

                            <h4 class=" p-t-20 ">Code Review and Debugging</h4>
                            <p>
                                Read More
                            </p>

                        </div>
                        <div class="text-center">
                            <img class="card-img" src="assets/img/guides/random-04.svg" alt="">
                        </div>
                    </a>
                    <a href="guide-article.html" class="card shadow-lg guide-item m-b-30  bg-primary">
                        <div class="card-body text-white">

                            <h4 class=" p-t-20 ">Read before you step in real world</h4>
                            <p>
                                Read More
                            </p>

                        </div>
                        <div class="text-center">
                            <img class="card-img" src="assets/img/guides/random-08.svg" alt="">
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </section>
@endsection

@section('script')
    <!--Additional Page includes-->
    <script src="{{asset('assets/vendor/apexchart/apexcharts.min.js')}}"></script>
    <!--chart data for current dashboard-->
@endsection

