@extends('layouts.app')

@section('content')
  
<section class="py-5 bg-green">
    <div class="py-5 container text-center py-3">
        <h1 class="pb-3">About us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, dolorum repellat. Adipisci perspiciatis vel ipsum voluptatem nobis accusamus officia ad quos dolorem maxime quasi repellat temporibus neque iure, laborum natus. Earum ullam quasi, veniam omnis numquam perspiciatis necessitatibus consequuntur ad nulla, delectus libero dicta? Explicabo rerum nobis dignissimos dolore officiis!</p>     
    </div>
</section>

<section class="bg-dark">
    <div class="py-5 container">
        <h1 class="pt-5 pb-3 text-center">Why learn with Pinewood?</h1>
        <div class="reasons-cards">

            <div class="">
                <div class="ml-4">
                    <h3 class="green-text">Fast results</h3>
                    <p>Become a fluent speaker in your new language faster. Spend less time on study and more time on what matters to you.</p>
                </div>
            </div>
            <div class="">
                <div class="ml-4">
                    <h3 class="green-text">Our quality standards</h3>
                    <p>For more than 140 years, Berlitz has been applying its substantial expertise, experience and capacity for innovation to help you achieve your goals.</p>
                </div>
            </div>
            <div class="">
                <div class="ml-4">
                    <h3 class="green-text">Cultural understanding</h3>
                    <p>We combine language learning and cultural understanding, which can prepare you for living and working in a new country, and give you the skills to succeed in a global working environment.</p>
                </div>
            </div>
            <div class="">
                <div class="ml-4">
                    <h3 class="green-text">Flexibility</h3>
                    <p>No matter your learning style or situation, we´ll build a customized program to meet your needs. Learn online, in-person, from an instructor or on your own with self-study.</p>
                </div>
            </div>
            <div class="">
                <div class="ml-4">
                    <h3 class="green-text">Qualified instructors</h3>
                    <p>To ensure that you enjoy the greatest possible success, we have qualified, experienced instructors and experts in their respective fields.</p>
                </div>
            </div>
            <div class="">
                <div class="ml-4">
                    <h3 class="green-text">Qualified instructors</h3>
                    <p>To ensure that you enjoy the greatest possible success, we have qualified, experienced instructors and experts in their respective fields.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-beige">
    <div class="py-5 container">
        <h1 class="pt-5 pb-3 text-center">Find your course</h1>
        <h5 class="text-center">Pinewood offers a broad selection of language courses for adults, companies, and kids and teens. Or you can take advantage of our wide range of intercultural and business seminars. Choose from the options below to find the course that’s right for you, and join us on the journey ahead.</h5>

        <div class="my-5">
          <div class="slider courses-cards">
        
            <div class="course-info ">
                <div class="inner"><a href=""><img src="../assets/images/header.jpg" alt=""></a></div>
                <h4 class="text-center my-2">Courses for kids</h4>
                <div class="text-center my-3">
                    <button class="button">Details</button>
                </div>
            </div>
            <div class="course-info ">
                <div class="inner"><a href=""><img src="../assets/images/header.jpg" alt=""></a></div>
                <h4 class="text-center my-2">Courses for teens</h4>
                <div class="text-center my-3">
                    <button class="button">Details</button>
                </div>
            </div>
            <div class="course-info ">
                <div class="inner"><a href=""><img src="../assets/images/header.jpg" alt=""></a></div>
                <h4 class="text-center my-2">Courses for adults</h4>
                <div class="text-center my-3">
                    <button class="button">Details</button>
                </div>
            </div>
            <div class="course-info ">
                <div class="inner"><a href=""><img src="../assets/images/header.jpg" alt=""></a></div>
                <h4 class="text-center my-2">Business training</h4>
                <div class="text-center my-3">
                    <button class="button">Details</button>
                </div>
            </div>
            <div class="course-info ">
                <div class="inner"><a href=""><img src="../assets/images/header.jpg" alt=""></a></div>
                <h4 class="text-center my-2">Cambridge exams</h4>
                <div class="text-center my-3">
                    <button class="button">Details</button>
                </div>
            </div>
          </div>  
        </div>
        
    </div>
</section>

<section class="bg-dark">
    <div class="container py-5">
        <div class="text-center pt-5">
            <h1 class="pb-3">Free Assessment</h1>
            <p>We offer an extensive range of classes and workshops, do a test and find out what level you are.</p>
        </div>
        <form action="" method="" class="subscribe pb-5">
            <div>
                <input type="email" name="email" id="email" placeholder="Your email" required>
            </div>
            <div class="ml-3">
                <button class="button" type="submit">Get your test</button>
            </div> 
        </form>       
    </div>
</section>

<section class="bg-green">
    <div class="container py-5">
      <div class="py-5 video-section">
        <div class="mr-2">
            <h1 class="pb-3">Take a tour of Pinewood School</h1>
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

<section class="bg-beige py-5">
    <div class="container py-5">
        <h1 class="pb-3 text-center">Latest blog posts</h1>
        <div class="d-flex flex-wrap justify-content-between">
            <div class="blog-post m-3">
                <div class="blog-image inner">
                    <a href=""><img src="../assets/images/header.jpg" alt=""></a>
                </div>
                <div class="blog-text py-3">
                    <div class="mb-auto">
                        <h4 class="font-weight-bold"><a href="">Post title Lorem ipsum dolor sit amet consectetur.</a></h4>
                    </div>
                    <div class="d-flex justify-content-between mb-auto">
                        <p class="small green-text"><a href="" class="green-text">Category</a><span> | </span>September 2020</p>
                    </div>
                    <div class="mb-auto">
                        <p class="">Description Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quam praesentium alias architecto facilis similique dicta eum repellat esse quis!</p>
                    </div>
                    <div class="">
                        <a href="" class="green-text font-weight-bold">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="blog-post m-3">
                <div class="blog-image inner">
                    <a href=""><img src="../assets/images/header.jpg" alt=""></a>
                </div>
                <div class="blog-text py-3">
                    <div class="mb-auto">
                        <h4 class="font-weight-bold"><a href="">Post title Lorem ipsum dolor sit amet consectetur.</a></h4>
                    </div>
                    <div class="d-flex justify-content-between mb-auto">
                        <p class="small green-text"><a href="" class="green-text">Category</a><span> | </span>September 2020</p>
                    </div>
                    <div class="mb-auto">
                        <p class="">Description Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="">
                        <a href="" class="green-text font-weight-bold">READ MORE</a>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</section>

@endsection