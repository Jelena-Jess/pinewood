@extends('layouts.app')

@section('content')
  
<section class="py-5 bg-green">
    <div class="py-5 container text-center py-3">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, dolorum repellat. Adipisci perspiciatis vel ipsum voluptatem nobis accusamus officia ad quos dolorem maxime quasi repellat temporibus neque iure, laborum natus. Earum ullam quasi, veniam omnis numquam perspiciatis necessitatibus consequuntur ad nulla, delectus libero dicta? Explicabo rerum nobis dignissimos dolore officiis!</p>     
    </div>
</section>

<section class="bg-dark">
    <div class="py-5 container">
        <h1 class="py-5 text-center">Why learn with Pinewood?</h1>
        <div class="reasons-cards">

            <div class="">
                <div class="ml-4">
                    <h3 class="blue-text">Fast results</h3>
                    <p>Become a fluent speaker in your new language faster. Spend less time on study and more time on what matters to you.</p>
                </div>
            </div>
            <div class="">
                <div class="ml-4">
                    <h3 class="blue-text">Our quality standards</h3>
                    <p>For more than 140 years, Berlitz has been applying its substantial expertise, experience and capacity for innovation to help you achieve your goals.</p>
                </div>
            </div>
            <div class="">
                <div class="ml-4">
                    <h3 class="blue-text">Cultural understanding</h3>
                    <p>We combine language learning and cultural understanding, which can prepare you for living and working in a new country, and give you the skills to succeed in a global working environment.</p>
                </div>
            </div>
            <div class="">
                <div class="ml-4">
                    <h3 class="blue-text">Flexibility</h3>
                    <p>No matter your learning style or situation, we´ll build a customized program to meet your needs. Learn online, in-person, from an instructor or on your own with self-study.</p>
                </div>
            </div>
            <div class="">
                <div class="ml-4">
                    <h3 class="blue-text">Qualified instructors</h3>
                    <p>To ensure that you enjoy the greatest possible success, we have qualified, experienced instructors and experts in their respective fields.</p>
                </div>
            </div>
            <div class="">
                <div class="ml-4">
                    <h3 class="blue-text">Qualified instructors</h3>
                    <p>To ensure that you enjoy the greatest possible success, we have qualified, experienced instructors and experts in their respective fields.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-beige">
    <div class="container py-5">
      <div class="py-5 video-section">
        <div class="mr-2">
            <h1>Take a tour of Pinewood School</h1>
            <p>Join us as Ivana from Pinewood shows you around the school. Explore classrooms, check out our facilties and find out why students choose to improve their English here.</p>
            <div class="">
                <button class="button my-2">Contact us</button>
              </div>
        </div>
        <div class="ml-2">
            <video class="video" controls>
            <source src="../assets/videos/about.mp4" type="video/mp4">
            Your browser does not support the video tag.
            </video> 
        </div>
      </div>      
    </div>
</section>

@endsection