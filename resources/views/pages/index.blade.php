@extends('layouts.app')

@section('content')


<section class="bg-blue">
    <div class="container fa-circles">
        <div>
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <h4>About us</h4>            
        </div>
        <div>
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <h4>Our Teachers</h4>
        </div>
        <div>
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <h4>Enrollment</h4>
        </div>
        <div>
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <h4>Our centre</h4>
        </div>
    </div>
</section>
  
<section class="bg-dark">
    <div class="py-5 container">
        <h1 class="py-5 text-center">Why learn with Pinewood?</h1>
        <div class="reasons-cards">

            <div class="">
                <div class="text-center pb-2">
                    <svg class="text-light bi bi-chat-dots-fill" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 01-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 11-2 0 1 1 0 012 0zm4 0a1 1 0 11-2 0 1 1 0 012 0zm3 1a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="blue-text">Fast results</h3>
                    <p>Become a fluent speaker in your new language faster. Spend less time on study and more time on what matters to you.</p>
                </div>
            </div>
            <div class="">
                <div class="text-center pb-2">
                    <svg class="text-light bi bi-clock-fill" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zM8 3.5a.5.5 0 00-1 0V9a.5.5 0 00.252.434l3.5 2a.5.5 0 00.496-.868L8 8.71V3.5z" clip-rule="evenodd"/>
                    </svg>
                    </div>
                <div class="ml-4">
                    <h3 class="blue-text">Our quality standards</h3>
                    <p>For more than 140 years, Berlitz has been applying its substantial expertise, experience and capacity for innovation to help you achieve your goals.</p>
                </div>
            </div>
            <div class="">
                <div class="text-center pb-2">
                    <svg class="text-light bi bi-x-diamond-fill" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.05.435c-.58-.58-1.52-.58-2.1 0L4.047 3.339 8 7.293l3.954-3.954L9.049.435zm3.61 3.611L8.708 8l3.954 3.954 2.904-2.905c.58-.58.58-1.519 0-2.098l-2.904-2.905zm-.706 8.615L8 8.707l-3.954 3.954 2.905 2.904c.58.58 1.519.58 2.098 0l2.905-2.904zm-8.615-.707L7.293 8 3.339 4.046.435 6.951c-.58.58-.58 1.519 0 2.098l2.904 2.905z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="blue-text">Cultural understanding</h3>
                    <p>We combine language learning and cultural understanding, which can prepare you for living and working in a new country, and give you the skills to succeed in a global working environment.</p>
                </div>
            </div>
            <div class="">
                <div class="text-center pb-2">
                    <svg class="text-light bi bi-house-fill" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 012 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 011.414 0l6.647 6.646a.5.5 0 01-.708.708L8 2.207 1.354 8.854a.5.5 0 11-.708-.708L7.293 1.5z" clip-rule="evenodd"/>
                      </svg>
                </div>
                <div class="ml-4">
                    <h3 class="blue-text">Flexibility</h3>
                    <p>No matter your learning style or situation, we´ll build a customized program to meet your needs. Learn online, in-person, from an instructor or on your own with self-study.</p>
                </div>
            </div>
            <div class="">
                <div class="text-center pb-2">
                    <svg class="text-light bi bi-x-diamond-fill" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.05.435c-.58-.58-1.52-.58-2.1 0L4.047 3.339 8 7.293l3.954-3.954L9.049.435zm3.61 3.611L8.708 8l3.954 3.954 2.904-2.905c.58-.58.58-1.519 0-2.098l-2.904-2.905zm-.706 8.615L8 8.707l-3.954 3.954 2.905 2.904c.58.58 1.519.58 2.098 0l2.905-2.904zm-8.615-.707L7.293 8 3.339 4.046.435 6.951c-.58.58-.58 1.519 0 2.098l2.904 2.905z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="blue-text">Qualified instructors</h3>
                    <p>To ensure that you enjoy the greatest possible success, we have qualified, experienced instructors and experts in their respective fields.</p>
                </div>
            </div>
            <div class="">
                <div class="text-center pb-2">
                    <svg class="text-light bi bi-x-diamond-fill" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.05.435c-.58-.58-1.52-.58-2.1 0L4.047 3.339 8 7.293l3.954-3.954L9.049.435zm3.61 3.611L8.708 8l3.954 3.954 2.904-2.905c.58-.58.58-1.519 0-2.098l-2.904-2.905zm-.706 8.615L8 8.707l-3.954 3.954 2.905 2.904c.58.58 1.519.58 2.098 0l2.905-2.904zm-8.615-.707L7.293 8 3.339 4.046.435 6.951c-.58.58-.58 1.519 0 2.098l2.904 2.905z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="blue-text">Qualified instructors</h3>
                    <p>To ensure that you enjoy the greatest possible success, we have qualified, experienced instructors and experts in their respective fields.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="py-5 container">
        <h1 class="py-5 text-center">Find your course</h1>
        <h5 class="text-center">Pinewood offers a broad selection of language courses for adults, companies, and kids and teens. Or you can take advantage of our wide range of intercultural and business seminars. Choose from the options below to find the course that’s right for you, and join us on the journey ahead.</h5>
        <div class="slider courses-cards">
        
            <div>
                <h2>Heading1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa a sit dignissimos perferendis mollitia ut ipsum quis commodi necessitatibus sunt.</p>
            </div>
        
            <div>
                <h2>Heading2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa a sit dignissimos perferendis mollitia ut ipsum quis commodi necessitatibus sunt.</p>
            </div>
        
            <div>
                <h2>Heading3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa a sit dignissimos perferendis mollitia ut ipsum quis commodi necessitatibus sunt.</p>
            </div>
        
            <div>
                <h2>Heading4</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa a sit dignissimos perferendis mollitia ut ipsum quis commodi necessitatibus sunt.</p>
            </div>
        
            <div>
                <h2>Heading5</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa a sit dignissimos perferendis mollitia ut ipsum quis commodi necessitatibus sunt.</p>
            </div>
        
            <div>
                <h2>Heading6</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa a sit dignissimos perferendis mollitia ut ipsum quis commodi necessitatibus sunt.</p>
            </div>

        </div>
    </div>
</section>

@endsection