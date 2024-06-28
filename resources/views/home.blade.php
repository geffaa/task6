@extends('layouts.app')

@section('content')
    <div id="home" class="relative bg-gradient-to-t from-green-50 to-white min-h-screen flex items-center pb-32">
        <div class="max-w-7xl mx-auto py-8 sm:px-24 lg:px-16 w-full flex flex-col md:flex-row items-center gap-0">
            <div class="md:w-1/2 text-left">
                <h1 class="text-7xl font-bold text-black leading-tight mr-4">
                    Empowering<br>
                    Alumni With<br>
                    The University<br>
                    Alumni Tracer
                </h1>
                <p class="mt-4 mr-4 text-lg text-black">Track the success of our graduates and stay connected with the University Alumni Tracer Management Information System.</p>
                <div class="mt-8 flex items-center">
                    <a href="#kuisioner" class="inline-block bg-green-900 text-white px-6 py-3 rounded-2xl text-lg font-medium hover:bg-green-800">Learn More</a>
                    <span class="ml-4 text-md text-black">Already have an account? <a href="{{ url('/') }}" class="font-bold text-green-900">Sign In</a></span>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center relative mt-8">
                <img src="{{ asset('images/hero.png') }}" alt="Hero Image" class="w-full h-auto z-8">
                <div class="absolute top-0 left-0 w-full h-full"></div>
            </div>
        </div>
    </div>

    <div id="kuisioner" class="relative w-full flex justify-center -mt-16 bg-transparent">
        <div class="w-full max-w-max mx-16 shadow-lg rounded-2xl p-12 md:p-20 mb-20 bg-gradient-to-b from-white to-transparent">
            <h1 class="text-5xl font-bold text-green-900 mb-6 text-center">Apa yang akan kamu dapatkan di Tracer Study?</h1>
            <p class="text-xl text-black mb-10 text-center">Start filling out the questionnaire and create your CV effortlessly.</p>
            <div class="flex flex-col md:flex-row gap-10">
                <div class="flex-1 bg-white shadow-md rounded-lg p-10 transform transition duration-300 hover:scale-105 flex flex-col items-center justify-between relative">
                    <div class="mb-4">
                        <img src="{{ asset('images/kuis.png') }}" alt="Kuis Logo" class="w-16 h-16 mx-auto mb-4">
                        <h2 class="text-3xl font-bold text-green-900 mb-6 text-center">Data Kuisioner</h2>
                        <p class="text-lg text-black mb-4 text-center">Complete the questionnaire to help the university enhance the quality of education and services for alumni.</p>
                    </div>
                    <div class="flex justify-center items-center mt-12 cursor-pointer">
                        <span class="text-lg text-green-900 font-bold">Get Started</span>
                        <i class="fas fa-arrow-right text-green-900 text-xl ml-2"></i>
                    </div>
                </div>
                <div class="flex-1 bg-white shadow-md rounded-lg p-10 transform transition duration-300 hover:scale-105 flex flex-col items-center justify-between relative">
                    <div class="mb-4">
                        <img src="{{ asset('images/test.png') }}" alt="Test Logo" class="w-16 h-16 mx-auto mb-4">
                        <h2 class="text-3xl font-bold text-green-900 mb-6 text-center">CV Builder</h2>
                        <p class="text-lg text-black mb-4 text-center">Easily create a professional CV using our CV builder tool available in English.</p>
                    </div>
                    <div class="flex justify-center items-center mt-12 cursor-pointer">
                        <span class="text-lg text-green-900 font-bold">Get Started</span>
                        <i class="fas fa-arrow-right text-green-900 text-xl ml-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="kontak" class="relative w-full flex justify-center py-24 bg-gradient-to-t from-green-50 to-gray-100">
        <div class="w-full max-w-7xl md:p-6">
            <div class="flex flex-col md:flex-row items-center gap-16">
                <div class="md:w-3/5 text-left ">
                    <h1 class="text-5xl font-bold text-green-900 mb-6 whitespace-nowrap">Career Development Center UMY</h1>
                    <p class="text-base text-black mb-6">The distribution of job vacancy information, campus recruitment, skill improvement seminars, career counseling, alumni tracking, graduate tracer study, and graduate user focus group discussions (FGD). CDC UMY provides job vacancy information from various companies to UMY students and alumni and organizes recruitment activities on campus. They also host webinars to enhance the soft and hard skills of students and alumni. CDC UMY also offers career coaching services to help students and alumni develop their careers.</p>
                    <p class="text-base text-black mb-10">In addition, CDC UMY conducts tracking of alumni to obtain information about their success after graduation and conducts surveys to understand the absorption of UMY graduates in the job market. Finally, CDC UMY holds FGDs with graduates as well as the business and industrial sectors to share insights and perspectives together. With the support of the Career Development Center UMY, UMY students and alumni can better prepare and develop their future careers.</p>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="{{ asset('images/photo2.png') }}" alt="Career Center Image" class="w-full h-auto rounded-lg">
                </div>
            </div>
            <div class="flex justify-around mt-36 gap-36">
                <div class="text-center">
                    <h2 class="text-5xl font-bold text-black">25<span class="text-blue-500">%</span></h2>
                    <div class="relative w-full h-2 bg-gray-200 rounded-full mt-2">
                        <div class="absolute top-0 left-0 h-2 bg-blue-500 rounded-full" style="width: 25%;"></div>
                    </div>
                    <p class="text-lg text-black mt-4">Tracking the Pulse of Response Rate</p>
                </div>
                <div class="text-center">
                    <h2 class="text-5xl font-bold text-black">100<span class="text-purple-500">+</span></h2>
                    <div class="relative w-full h-2 bg-gray-200 rounded-full mt-2">
                        <div class="absolute top-0 left-0 h-2 bg-purple-500 rounded-full" style="width: 80%;"></div>
                    </div>
                    <p class="text-lg text-black mt-4">Employer Recruitments</p>
                </div>
                <div class="text-center">
                    <h2 class="text-5xl font-bold text-black">120<span class="text-green-500">+</span></h2>
                    <div class="relative w-full h-2 bg-gray-200 rounded-full mt-2">
                        <div class="absolute top-0 left-0 h-2 bg-green-500 rounded-full" style="width: 80%;"></div>
                    </div>
                    <p class="text-lg text-black mt-4">Survey Satisfaction</p>
                </div>
                <div class="text-center">
                    <h2 class="text-5xl font-bold text-black">120<span class="text-yellow-500">%</span></h2>
                    <div class="relative w-full h-2 bg-gray-200 rounded-full mt-2">
                        <div class="absolute top-0 left-0 h-2 bg-yellow-500 rounded-full" style="width: 80%;"></div>
                    </div>
                    <p class="text-lg text-black mt-4">CV Pool Power</p>
                </div>
                <div class="text-center">
                    <h2 class="text-5xl font-bold text-black">120<span class="text-red-500">+</span></h2>
                    <div class="relative w-full h-2 bg-gray-200 rounded-full mt-2">
                        <div class="absolute top-0 left-0 h-2 bg-red-500 rounded-full" style="width: 80%;"></div>
                    </div>
                    <p class="text-lg text-black mt-4">Opportunities Recruitment</p>
                </div>
            </div>
        </div>
    </div>
@endsection