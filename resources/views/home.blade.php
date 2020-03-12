@extends('layouts.webtemplate', ['class' => '', 'activePage' => 'home', 'title' => __('Niovi\'s Dashboard')])

@section('content')
    <section class="welcome">
        <div class="container">
            <h2>Welcome!</h2>
                {!! $welcome_text !!}
            <img  style="margin-top: 17px;" src="assets/images/sinature.jpg">
            <p style="margin-top: 20px;"><strong>Niovi Gkioka.<br>BA, MA, QTS</strong></p>

        </div>
    </section>
    <section class="services">
        <div class="container">
            <h2>Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/images/service1.png">
                    <h3>One - to - One tuition</h3>
                    <p>I offer the highest quality tuition in Latin and French. I am a specialist and fully qualified teacher for CE 13+ GCSE, IGCSE, A-Level /IB and undergraduate Level.</p>
                    <p> I also have thorough knowledge of different curricula and exam boards (OCR, AQA, CAMBRIDGE, etc).</p>
                </div>
                <div class="col-md-4">
                    <img src="assets/images/service2.png">
                    <h3>Exam Preparation</h3>
                    <p>I have years of expertise in preparing students intensively for school entrance, scholarship, GCSE, IGCSE and A-Level exams.</p>
                    <p>Throughout my career I have obtained excellent knowledge of the entry requirements of top independent schools.</p>
                </div>
                <div class="col-md-4">
                    <img src="assets/images/service3.png">
                    <h3>Personalised learning</h3>
                    <p>My tailor-made tutoring programme is designed to suit your learning needs and goals.</p>
                    <p>With personalised assignments, assessments and additional materials, I have the tools you need to improve exam technique and maximise success.</p>
                </div>
            </div>
            <a href="./services" class="btn orange">Learn More</a>
        </div>
    </section>
    <section class="testimonials">
        <div class="container">
            <h2>Reviews</h2>

                <div class="carousel-class">
                    @foreach($reviews as $review)
                        <div>
                            <h3>{{$review->title}}</h3>
                            <p>{{$review->review}}</p>
                            <h4>{{$review->name}}</h4>
                        </div>
                    @endforeach
                </div>

            <a href="https://www.trustpilot.com/review/latinandfrenchtuition.com" target="_blank" class="btn orange">More Reviews</a>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <h2>How does online tutoring work?</h2>
            {{--<iframe width="60%" height="450" src="https://www.youtube.com/embed/tgbNymZ7vqY">--}}
                <iframe class="video-frame" data-src="https://www.youtube.com/embed/uaV_6f6Tjco" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </iframe>
        </div>
    </section>
    <script type="text/javascript">
        function init() {
            var vidDefer = document.getElementsByTagName('iframe');
            for (var i=0; i<vidDefer.length; i++) {
                if(vidDefer[i].getAttribute('data-src')) {
                    vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
                } } }
        window.onload = init;

        $(document).ready(function(){
            $('.carousel-class').slick({
                autoplay: true
            });
        });
    </script>
@endsection
