<x-guest-layout>
    {{-- Hero Section --}}
    <section class=" max-w-7xl mx-auto max-lg:flex-col-reverse flex px-4 md:px-8 xl:px-0 gap-8 lg:gap-[130px] py-20 lg:py-[100px] items-center">
        <div class="flex flex-col gap-4 lg:gap-8">
            <h1 class="font-[neue-regular] text-3xl md:text-5xl xl:text-[64px] xl:leading-[64px]">
                <b class="font-[neue-bold] text-nowrap bg-gradient-to-r from-primary-800 to-primary-400 inline-block text-transparent bg-clip-text">Ignite Your Future:</b>
                Master Hydrogen New and Renewable Energy
            </h1>
            <p class="text-base"><b>Discover the future of energy with our expert-led online course</b>. Learn the fundamentals of hydrogen production, storage, and utilization. Gain practical knowledge of renewable energy technologies and their integration with hydrogen systems.</p>
           <div>
            <x-button-link :href="route('e-learning')">{{__("Enroll now")}}<i class="ri-arrow-right-down-line"></i></x-button-link>
           </div>
        </div>
        <div class=" cursor-pointer">
            <img src="{{asset('/images/landing/hero.png')}}" alt="">
        </div>

    </section>

    {{-- Benefits Section --}}
    <section class="flex flex-col items-center bg-primary-950 py-[80px] gap-20 justify-center">
            <div class="flex flex-col gap-3 items-center">
                <h2 class="font-[neue-bold] text-4xl lg:text-[64px] text-white">Key Benefits</h2>
                <p class="text-base text-white font-semibold">The Advantages of Our E-Learning Course</p>
            </div>
            <div class="flex max-lg:flex-col gap-4 lg:gap-10 items-start justify-center ">
                <img src="{{asset('/images/landing/benefit-1.png')}}"  width="300" height="300" alt="">
                <img src="{{asset('/images/landing/benefit-2.png')}}"  width="300" height="300" alt="">
                <img src="{{asset('/images/landing/benefit-3.png')}}"  width="300" height="300" alt="">
            </div>
    </section>

    {{-- Course Structure Section --}}
    <section class=" max-w-7xl max-lg:flex-col gap-10 px-6 mx-auto lg:gap-[120px] lg:px-[70px] flex py-[100px] items-center">
        <div class="flex flex-col gap-2 lg:gap-5">
            <h2 class="font-[neue-bold] text-4xl lg:text-[64px] lg:leading-[64px]">Course Structure</h2>
            <p class="text-base">Our comprehensive course is designed to provide you with a solid foundation in hydrogen new and renewable energy.</p>
        </div>

        <x-course-accordion/>

    </section>
</x-guest-layout>
