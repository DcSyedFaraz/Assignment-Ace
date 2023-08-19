<template>
    <div class="">
        <!--1st Hero Section -->
        <section class="overflow-hidden bg-[#A4D9FA] pt-24 pb-10">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 m-class">
                    <!-- grid 1 -->
                    <div>
                        <!-- Text Div -->
                        <div class="text space-y-3">
                            <h1 class="text-2xl md:text-4xl lg:text-5xl font-bold text-[#1F639C]">
                                Cheap Essay Writing Service UK at Your Rescue!
                            </h1>
                            <p class="text-base text-[#1F639C]">Are the Approaching Essay deadlines causing you Anxiety?
                                Essay
                                writing help UK is at your service to finalize your essay in time</p>
                        </div>
                        <!--Large Medium Screens Button  And Logo -->
                        <div class="hidden md:grid-cols-1 md:flex items-center space-x-3 mt-10 ">
                            <!-- Button -->
                            <div><a href="{{ route('order') }}">
                                    <button
                                        class=" text-[#1F639C] font-bold hover:text-white bg-white hover:bg-[#1F639C] rounded-2xl shadow-xl  py-2 px-3 lg:py-4 lg:px-8 ">
                                        Order Now
                                    </button>
                                </a>
                            </div>
                            <!-- logos -->
                            <div class="">
                                <img alt="{{ config('app.name') }}" class="h-[2.7rem] w-[4rem]  ml-[2.5rem]"
                                    src="{{ asset('images/Payment-icons.png') }}">
                            </div>
                        </div>

                        <!---------------- For Large Screens ---------------------->
                        <!-- hit any deadline easy -->
                        <div class="hidden xl:grid grid-cols-1 mt-20">
                            <div class="flex space-x-3">
                                <div class="  xl:animate-bounce rounded-full w-24 h-24 p-2">
                                    <img alt="{{ config('app.name') }}" src="{{ asset('images/clock1.png') }}">
                                </div>
                                <div>
                                    <h4 class="text-lg text-[#1F639C] font-bold">Get your <br> essays done timely</h4>
                                    <p class="text-sm text-black">Completion of essays before deadlines is now made easy
                                        <br>
                                        with the help of 500+ UK essay writers.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Your Identity Is Protected -->
                        <div class="hidden xl:grid grid-cols-1 justify-items-end mt-10">
                            <div class="flex space-x-3">
                                <div class="  xl:animate-bounce rounded-full w-24 h-24 p-2">
                                    <img alt="{{ config('app.name') }}" class="" src="{{ asset('images/identity1.png') }}">
                                </div>
                                <div>
                                    <h4 class="text-lg text-[#1F639C] font-bold">Your privacy matters</h4>
                                    <p class="text-sm text-black">Securing clients’ identity is one of our responsibilities
                                        <br>
                                        which is strictly fulfilled.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Every Word Matters -->
                        <div class="hidden xl:grid grid-cols-2 mt-10">
                            <div class="flex space-x-3">
                                <div class=" xl:animate-bounce rounded-full  p-2">
                                    <img alt="{{ config('app.name') }}" class="" src="{{ asset('images/open-book1.png') }}">
                                </div>
                                <div>
                                    <h4 class="text-lg text-[#1F639C] font-bold">Originality is guaranteed</h4>
                                    <p class="text-sm text-black">Get 100% plagiarism-free work done with the help of a
                                        skilled
                                        essay writer UK.</p>
                                </div>
                            </div>
                            <div class="flex space-x-3">
                                <div class="  w-36 xl:animate-bounce rounded-full  p-2">
                                    <img alt="{{ config('app.name') }}" class="" src="{{ asset('images/pencil1.png') }}">
                                </div>
                                <div>
                                    <h4 class="text-lg text-[#1F639C] font-bold">Service as per your needs</h4>
                                    <p class="text-sm text-black">Your essay guidelines are essential according to which
                                        your
                                        services are delivered.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---------- grid 2 -------------->
                    <div>
                        <img alt="{{ config('app.name') }}" class="hidden lg:grid"
                            src="{{ asset('images/heroimage-1.webp') }}">
                        <img alt="{{ config('app.name') }}" class=" lg:hidden" src="{{ asset('images/heroimage-2.webp') }}">
                    </div>
                </div>

                <!--Small  Screens Button  And Logo -->
                <div class="grid grid-cols-2 md:hidden justify-items-center  items-center mt-6">
                    <!-- Button -->
                    <div>
                        <button
                            class=" text-[#1F639C] font-bold hover:text-white bg-white hover:bg-[#1F639C] border rounded-2xl shadow-xl py-6 px-6 ">
                            Order Now
                        </button>
                    </div>
                    <!-- logos -->
                    <div>
                        <img alt="{{ config('app.name') }}" src="{{ asset('images/Payment-icons.png') }}">
                    </div>
                </div>

                <!---------------- For Small Screens ---------------------->
                <!-- hit any deadline easy -->
                <div class="xl:hidden grid grid-cols-1 mt-10 m-class">
                    <!-- grid 1 -->
                    <div class="flex space-x-3">
                        <div class="  xl:animate-bounce rounded-full p-2">
                            <img alt="{{ config('app.name') }}" src="{{ asset('images/clock1.png') }}">
                        </div>
                        <div class="my-auto">
                            <h4 class="text-base text-[#1F639C] font-bold">Hit Any<br> Deadline, Easily</h4>
                            <p class="text-xs text-black">With 500+ writers at your fingertips, any deadline is
                                within reach.</p>
                        </div>
                    </div>
                    <!-- grid 2 -->
                    <!-- Your Identity Is Protected -->
                    <div class="flex space-x-3">
                        <div class="  xl:animate-bounce rounded-full p-2">
                            <img alt="{{ config('app.name') }}" src="{{ asset('images/identity1.png') }}">
                        </div>
                        <div class="my-auto">
                            <h4 class="text-base text-[#1F639C] font-bold">Your Identity<br>
                                Is Protected</h4>
                            <p class="text-xs text-black">We guarantee strict confidentiality: clients' trust is
                                everything to us.</p>
                        </div>
                    </div>
                </div>
                <!-- Every Word Matters -->
                <div class="xl:hidden grid grid-cols-1 mt-2 m-class">
                    <!-- grid 1 -->
                    <div class="flex space-x-3">
                        <div class=" xl:animate-bounce rounded-full p-2">
                            <img alt="{{ config('app.name') }}" src="{{ asset('images/open-book1.png') }}">
                        </div>
                        <div class="my-auto">
                            <h4 class="text-base text-[#1F639C] font-bold">Every Word
                                Matters</h4>
                            <p class="text-xs text-black">With 500+ writers at your fingertips, any deadline is
                                within reach.</p>
                        </div>
                    </div>
                    <!-- grid 2 -->
                    <div class="flex space-x-3">
                        <div class="  xl:animate-bounce rounded-full     p-2">
                            <img alt="{{ config('app.name') }}" src="{{ asset('images/pencil1.png') }}">
                        </div>
                        <div class="my-auto">
                            <h4 class="text-base text-[#1F639C] font-bold">Tailored to
                                Your Needs</h4>
                            <p class="text-xs text-black">With 500+ writers at your fingertips, any deadline is
                                within reach.</p>
                        </div>
                    </div>
                </div>



            </div>
        </section>
        <!--2nd Logo Section  -->
        <section class="overflow-hidden py-10 md:h-[191px] h-[293px] bg-white px-4 ">
            <div class="container mx-auto">
                <!-- Large Screens -->
                <div class="hidden md:grid md:grid-cols-5 ">
                    <!-- grid 1 -->
                    <div class="grid items-center">
                        <h4 class="text-lg text-[#1F639C] font-semibold">
                            Trusted By Students Of:
                        </h4>
                    </div>
                    <!-- grid 2 -->
                    <div>
                        <img alt="{{ config('app.name') }}" class="hover:border-2"
                            src="{{ asset('images/Bath-uni.webp') }}">
                    </div>
                    <!-- grid 3 -->
                    <div>
                        <img alt="{{ config('app.name') }}" class="hover:border-2"
                            src="{{ asset('images/birk-beck.webp') }}">
                    </div>
                    <!-- grid 4 -->
                    <div>
                        <img alt="{{ config('app.name') }}" class="hover:border-2"
                            src="{{ asset('images/exeter-uni.webp') }}">
                    </div>
                    <!-- grid 5 -->
                    <div>
                        <img alt="{{ config('app.name') }}" class="hover:border-2"
                            src="{{ asset('images/New-castle.webp') }}">
                    </div>

                </div>
                <!-- Small Screens -->
                <div class="grid grid-cols-1 md:hidden ">
                    <!-- grid 1 -->
                    <div class="grid justify-items-center">
                        <h4 class="text-lg text-[#1F639C] font-bold">
                            Trusted By Students Of:
                        </h4>
                    </div>
                    <!-- grid 2 -->
                    <div class="grid grid-cols-2">
                        <div>
                            <img alt="{{ config('app.name') }}" class="hover:border-2"
                                src="{{ asset('images/Bath-uni.webp') }}">
                        </div>
                        <div>
                            <img alt="{{ config('app.name') }}" class="hover:border-2"
                                src="{{ asset('images/birk-beck.webp') }}">
                        </div>

                    </div>
                    <!-- grid 3 -->
                    <div class="grid grid-cols-2">
                        <div>
                            <img alt="{{ config('app.name') }}" class="hover:border-2"
                                src="{{ asset('images/exeter-uni.webp') }}">
                        </div>
                        <div>
                            <img alt="{{ config('app.name') }}" class="hover:border-2"
                                src="{{ asset('images/New-castle.webp') }}">
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!--3rd Sign up for free section -->
        <section class="overflow-hidden bg-[#A4D9FA]  pb-24">
            <div class="container mx-auto mt-10">
                <h2 class=" text-center text-4xl text-[#1F639C] font-bold">
                    How to Order A Cheap Essay Writer UK?
                </h2>
                <!-- timeline -->
                <div class="main mt-20 mx-4">
                    <!-- For Large Screen -->
                    <div class="hidden  md:flex justify-center md:items-center">
                        <!-- 1 -->
                        <div data-source="1"
                            class=" steps grid cursor-pointer z-10 hover:scale-110 justify-items-center items-center rounded-full bg-gradient-to-r from-[#1F639C] to-[#3CAEA3] h-16 lg:h-20 w-20  ">
                            <h4 class="text-5xl text-white">
                                1
                            </h4>
                        </div>
                        <div class="w-32 h-5 -ml-2 bg-gradient-to-r from-[#1F639C] to-[#3CAEA3]"></div>
                        <!-- 2 -->
                        <div data-source="2"
                            class=" steps grid cursor-pointer -ml-1 z-10 hover:scale-110 justify-items-center items-center rounded-full bg-gradient-to-r from-[#1F639C] to-[#3CAEA3] h-16 lg:h-20 w-20  ">
                            <h4 class="text-5xl text-white">
                                2
                            </h4>
                        </div>
                        <div class="w-32 h-5 -ml-2 bg-gradient-to-r from-[#1F639C] to-[#3CAEA3]"></div>
                        <!-- 3 -->
                        <div data-source="3"
                            class=" steps grid cursor-pointer -ml-1 z-10 hover:scale-110 justify-items-center items-center rounded-full bg-gradient-to-r from-[#1F639C] to-[#3CAEA3] h-16 lg:h-20 w-20  ">
                            <h4 class="text-5xl text-white">
                                3
                            </h4>
                        </div>
                        <div class="w-32 h-5 -ml-2 border border-[#1F639C]"></div>
                        <!-- 4 -->
                        <div data-source="4"
                            class=" steps grid cursor-pointer -ml-1 z-10 hover:scale-110 justify-items-center items-center rounded-full bg-gradient-to-r from-[#1F639C] to-[#3CAEA3] h-16 lg:h-20 w-20  ">
                            <h4 class="text-5xl text-white">
                                4
                            </h4>
                        </div>
                        <div class="w-32 h-5 -ml-2 border border-[#1F639C]"></div>
                        <!-- 5 -->
                        <div data-source="5"
                            class=" steps grid cursor-pointer -ml-1 z-10 hover:scale-110 justify-items-center items-center rounded-full bg-gradient-to-r from-[#1F639C] to-[#3CAEA3] h-16 lg:h-20 w-20  ">
                            <h4 class="text-5xl text-white">
                                5
                            </h4>
                        </div>
                        <div class="w-32 h-5 -ml-2 border border-[#1F639C]"></div>
                        <!-- 6 -->
                        <div data-source="6"
                            class=" steps grid cursor-pointer -ml-1 z-10 hover:scale-110 justify-items-center items-center rounded-full bg-gradient-to-r from-[#1F639C] to-[#3CAEA3] h-16 lg:h-20 w-20  ">
                            <h4 class="text-5xl text-white">
                                6
                            </h4>
                        </div>

                    </div>
                    <!-- For Small Screen -->
                    <div class="grid md:hidden justify-center justify-items-center">
                        <!-- 1 -->
                        <div data-source="1"
                            class=" steps grid z-10 justify-items-center items-center rounded-full bg-gradient-to-r from-[#1F639C] to-[#3CAEA3] h-20 w-20  ">
                            <h4 class="text-6xl text-white">
                                1
                            </h4>
                        </div>
                        <div class="w-5 h-32 -mt-2 bg-gradient-to-r from-[#1F639C] to-[#3CAEA3]"></div>
                        <!-- 2 -->
                        <div data-source="2"
                            class=" steps grid -mt-1 z-10 justify-items-center items-center rounded-full bg-gradient-to-r from-[#1F639C] to-[#3CAEA3] h-20 w-20  ">
                            <h4 class="text-6xl text-white">
                                2
                            </h4>
                        </div>
                        <div class="w-5 h-32 -mt-2 bg-gradient-to-r from-[#1F639C] to-[#3CAEA3]"></div>
                        <!-- 3 -->
                        <div data-source="3"
                            class=" steps grid -mt-1 z-10 justify-items-center items-center rounded-full bg-gradient-to-r from-[#1F639C] to-[#3CAEA3] h-20 w-20  ">
                            <h4 class="text-6xl text-white">
                                3
                            </h4>
                        </div>
                        <div class="w-5 h-32 -mt-2 border border-[#1F639C]"></div>
                        <!-- 4 -->
                        <div data-source="4"
                            class=" steps grid -mt-1 z-10 justify-items-center items-center rounded-full bg-gradient-to-r from-[#1F639C] to-[#3CAEA3] h-20 w-20  ">
                            <h4 class="text-6xl text-white">
                                4
                            </h4>
                        </div>
                        <div class="w-5 h-32 -mt-2 border border-[#1F639C]"></div>
                        <!-- 5 -->
                        <div data-source="5"
                            class=" steps grid -mt-1 z-10 justify-items-center items-center rounded-full bg-gradient-to-r from-[#1F639C] to-[#3CAEA3] h-20 w-20  ">
                            <h4 class="text-6xl text-white">
                                5
                            </h4>
                        </div>
                        <div class="w-5 h-32 -mt-2 border border-[#1F639C]"></div>
                        <!-- 6 -->
                        <div data-source="6"
                            class=" steps grid -mt-1 z-10 justify-items-center items-center rounded-full bg-gradient-to-r from-[#1F639C] to-[#3CAEA3] h-20 w-20  ">
                            <h4 class="text-6xl text-white">
                                6
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="main-border mt-10 w-[66%] mx-auto">
                    <!-- Step 1 -->
                    <div class="stepscontent">

                        <div class="text-3xl md:text-4xl text-[#1F639C]">
                            <h4 class="relative md:top-3 top-[3.75rem] text-center text-[#1F639C] font-semibold">Step -
                                <span id="stepNo">1</span></h4>
                        </div>
                        <div class="border-[#1F639C]  border-r-2  border-b-2 border-l-2 rounded-full w-auto h-48">
                            <div class="relative top-[4.25rem] md:top-5">
                                <h4 class="text-lg md:text-2xl font-medium text-center ">
                                    <span id="stepData">Clarify all the doubts you have.</span>
                                </h4>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--- 4th Our Subject Expertise -->
        <section class="overflow-hidden  mt-10 pb-24 px-4">
            <div class="container mx-auto ">
                <div class="grid grid-cols-1 md:grid-cols-3 md:gap-3">
                    <!-- Accordion -->
                    <div class="md:col-span-2 mt-10 ">
                        <div class="pb-10">
                            <h4 class="text-center text-3xl text-[#1F639C] font-bold">Types of essays we are expert in:</h4>
                        </div>
                        <!-- Buttons -->
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 ">
                            <!------------- Buttons --------------->
                            <!-- Narrative Essay -->

                            <button id="defaultOpen" class="tabs-btn tablinks" onclick="openCity(event, 'Narrative Essay')">
                                Narrative Essay
                            </button>

                            <!-- Descriptive Essay -->

                            <button class="tabs-btn tablinks" onclick="openCity(event, 'Descriptive Essay')">Descriptive
                                Essay</button>

                            <!-- Argumentative Essay -->

                            <button class="tabs-btn tablinks" onclick="openCity(event, 'Argumentative Essay')">
                                Argumentative Essay
                            </button>

                            <!-- Definition Essay -->

                            <button class="tabs-btn tablinks" onclick="openCity(event, 'Definition Essay')">
                                Definition Essay
                            </button>

                            <!-- Persuasive Essay -->

                            <button class="tabs-btn tablinks" onclick="openCity(event, 'Persuasive Essay')">
                                Persuasive Essay
                            </button>

                            <!-- Compare and Contrast -->

                            <button class="tabs-btn tablinks" onclick="openCity(event, 'Compare and Contrast')">Compare and
                                Contrast
                                Essay</button>

                            <!-- Critical Essay -->

                            <button class="tabs-btn tablinks" onclick="openCity(event, 'Critical Essay')">
                                Critical Essay
                            </button>

                            <!-- General Humorous Essay -->

                            <button class="tabs-btn tablinks" onclick="openCity(event, 'Humorous Essay')">
                                Humorous Essay
                            </button>

                        </div>
                        <!----------------------CONTENT AREA OF TABS ----------------->
                        <div class=" my-5">
                            <!-- Narrative Essay -->
                            <div id="Narrative Essay" class="hidden tabcontent border border-[#3CAEA3] p-10">
                                <P>A Narrative Essay is like storytelling, written with the first person’s perspective in
                                    which
                                    the author describes a specific event or emotion. The essay is written in a descriptive
                                    tone
                                    with the use of the pronouns “I” and “Me”. The author of the Narrative Essay adds
                                    interesting details by providing a background, a conflict, a personal experience, and a
                                    moral in the end to engage the readers. </P>

                            </div>
                            <!-- Compare and Contrast -->
                            <div id="Descriptive Essay" class="tabcontent hidden border border-[#3CAEA3] p-10">
                                <P>A Descriptive Essay contains in-depth details of a specific event, person, object, or
                                    place.
                                    The details are portrayed in such a way that describes all the five senses of a person
                                    to
                                    enable the readers to make its visual representation in their mind. In this way, a
                                    descriptive essay appeals to the readers with its sensory language and conveys the
                                    message
                                    with keen attention to even the most minor details.

                                </P>

                            </div>
                            <!-- Descriptive Essay -->
                            <div id="Argumentative Essay" class="tabcontent hidden border border-[#3CAEA3] p-10">
                                <P>Argumentative Essays are written persuasively to address an argument on a particular
                                    issue.
                                    The author of an Argumentative Essay makes sure to collect evidence and facts from the
                                    relevant sources in order to support their point. Argumentative essays also provide
                                    logical
                                    reasoning to connect strongly with the author’s perspective to convince the readers.</P>

                            </div>
                            <!-- Argumentative Essay -->
                            <div id="Definition Essay" class="tabcontent hidden border border-[#3CAEA3] p-10">
                                <P>A Definition Essay focuses on a detailed and comprehensive explanation of a particular
                                    topic
                                    or concept. The author conveys this explanation through different perspectives using
                                    simple
                                    and straightforward language to make a strong point for the readers to understand it
                                    quickly.</P>

                            </div>
                            <!-- Definition Essay -->
                            <div id="Persuasive Essay" class="tabcontent hidden border border-[#3CAEA3] p-10">
                                <P>As the name suggests, a Persuasive essay is the type of essay in which the author
                                    convinces
                                    the readers to agree with their thoughts by presenting their point of view about a
                                    particular topic in a persuasive tone. Similar to Argumentative and Compare and Contrast
                                    Essay, the author of Persuasive Essay also provides clear and powerful pieces of
                                    evidence to
                                    prove their points to the readers.</P>

                            </div>
                            <!-- Persuasive Essay -->
                            <div id="Compare and Contrast" class="tabcontent hidden border border-[#3CAEA3] p-10">
                                <P>The Compare and Contrast Essay highlights two or more topics, issues, or thoughts by
                                    providing the readers with detailed similarities and differences between them. The
                                    author
                                    conducts proper research on the topics to support their ideas with authentic reasoning
                                    and
                                    facts. Clear and easy-to-understand language is used in this essay to make the readers
                                    effortlessly comprehend it.</P>

                            </div>
                            <!-- Critical Essay -->
                            <div id="Critical Essay" class="tabcontent hidden border border-[#3CAEA3] p-10">
                                <P>Critical Essay writing includes analysis, examination, and evaluation of an already
                                    available
                                    work, like a movie, a research, a performance, or a piece of art. The essay sheds light
                                    on
                                    different aspects of the topic by examining its theme, analysing its strong and weak
                                    points,
                                    and pinpointing its fDescriptive Essays and improvements. The author gives his reviews
                                    and
                                    opinions and
                                    supports them with relevant evidence. </P>

                            </div>
                            <!-- General Humorous Essay -->
                            <div id="Humorous Essay" class="tabcontent hidden border border-[#3CAEA3] p-10">
                                <P>A humorous essay is also known as a Humor Essay. This type of essay focuses on an
                                    entertainment theme with excellent use of sarcasm, irony, wordplay, and a playful tone
                                    to
                                    engage the readers. The author either conveys a personal experience or a random story in
                                    a
                                    hilarious tone that captivates the readers.</P>

                            </div>
                        </div>

                    </div>
                    <!-- Reviews Grid -->
                    <div class="bg-[#3CAEA3] rounded-xl">
                        <div class="grid justify-items-center mt-5 space-y-4">
                            <h4 class="text-white text-3xl font-semibold text-center">What our Clients Say about Us</h4>
                            <div class="w-56 bg-white h-1"></div>
                        </div>
                        <!-- Carousel -->


                            <!-- slide 2 -->

                            <div class="p-8">
                                <p class="text-white text-sm text-center">We had an essay competition at school, and I was
                                    assigned to write an argumentative essay, but I could not write it due to my lack of
                                    understanding of the topic. I tried to write it myself for two days, but every passing
                                    hour was getting more complex. To be honest, I thought I would fail the competition, and
                                    that’s when my brother suggested that I should take help from the Cheapest Essays. I
                                    quickly ordered the essay help from there and received it in my inbox after a few hours.
                                    Luckily, I won the contest. I am fully satisfied with their excellent essay writing
                                    service and would surely recommend this to others.</p>
                                <div class="flex mt-10 space-x-4 space-y-4">
                                    <div class="grid items-center">
                                        <img alt="{{ config('app.name') }}" src="{{ asset('images/client-rev.webp') }}">
                                    </div>
                                    <div class="p-2">
                                        <h6 class="text-base font-bold text-black">
                                            Jacob Tyson
                                        </h6>
                                        <p class="text-sm">Humorous Essay Student</p>
                                        <p class="text-sm">Studying in Birmingham</p>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- 5th Section Sample Papers -->
        <section class="overflow-hidden bg-[#95CEFF] py-10 px-4">
            <div class="container mx-auto">
                <!-- Text Div -->
                <div class="mt-10">
                    <h4 class="text-center text-4xl text-[#1F639C] font-bold">
                        Sample Of Our Essays
                    </h4>
                    <p class="text-black text-center mt-5 text-sm">Take a view of these samples of essays done by skilled
                        English essay writers on different topics and various difficulty levels to ensure the quality and
                        relevance of our work.</p>
                </div>
                <!-- sample Papers -->
                <div class="">
                    <swiper-container pagination="true" pagination-clickable="true" centered-slides="true"
                        autoplay-delay="2500" autoplay-disable-on-interaction="false" class="">
                        <swiper-slide>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-20 mt-10 ">

                                <!-- sample 1 -->
                                <div class="pb-2 mx-auto">
                                    <div
                                        class="bg-white rounded-xl mx-3 lg:w-full shadow-xl px-12 pt-16 pb-12  border-black">
                                        <h4 class="font-semibold text-lg ">
                                            Assignment
                                        </h4>
                                        <div class="grid grid-cols-2 mt-4">
                                            <!-- grid 1 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Title Of Piece</h4>
                                                <p class="text-xs">Strategic change management

                                                </p>
                                            </div>
                                            <!-- Grid 2 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Discipline</h4>
                                                <p class="text-xs">Management</p>
                                            </div>
                                            <!-- grid 3 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Academic Level:</h4>
                                                <p class="text-xs">Master's

                                                </p>
                                            </div>
                                            <!-- Grid 4 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Pages:</h4>
                                                <p class="text-xs">24</p>
                                            </div>
                                            <!-- grid 5 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Sources:</h4>
                                                <p class="text-xs">1</p>
                                            </div>
                                            <!-- Grid 6 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Paper Format:</h4>
                                                <p class="text-xs">Harvard</p>
                                            </div>
                                        </div>
                                        <!-- Buttons -->
                                        <div class="flex flex-col sm:flex-row sm:space-x-2 justify-center my-5">
                                            <!-- grid 7 Button -->
                                            <div class="mt-5 mx-auto">
                                                <a href="{{ route('order') }}">
                                                    <button class="paper-btn text-white bg-[#1F639C] hover:bg-[#3CAEA3]">
                                                        <i class="fa-solid fa-eye fa-shake"></i> <span>Order &nbsp; &nbsp;
                                                            &nbsp;</span>
                                                    </button>

                                                </a>
                                            </div>
                                            <!-- Grid 8 Button -->
                                            <div class="mt-5 mx-auto">
                                                <a href="{{ asset('free-samples/strategic-change-management.docx') }}">
                                                    <button class="paper-btn text-white bg-[#3CAEA3] hover:bg-[#1F639C]">
                                                        <i class="fa-solid fa-check fa-shake"></i><span> Download</span>
                                                    </button>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- sample 2 -->
                                <div class="pb-2 mx-auto">
                                    <div
                                        class="bg-white rounded-xl mx-3 lg:w-full shadow-xl px-12 pt-16 pb-12  border-black">
                                        <h4 class="font-semibold text-lg ">
                                            Assignment
                                        </h4>
                                        <div class="grid grid-cols-2 mt-4">
                                            <!-- grid 1 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Title Of Piece</h4>
                                                <p class="text-xs">Home-Made Food Business



                                                </p>
                                            </div>
                                            <!-- Grid 2 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Discipline</h4>
                                                <p class="text-xs">Business Plan

                                                </p>
                                            </div>
                                            <!-- grid 3 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Academic Level:</h4>
                                                <p class="text-xs">Master's

                                                </p>
                                            </div>
                                            <!-- Grid 4 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Pages:</h4>
                                                <p class="text-xs">9</p>
                                            </div>
                                            <!-- grid 5 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Sources:</h4>
                                                <p class="text-xs">1</p>
                                            </div>
                                            <!-- Grid 6 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Paper Format:</h4>
                                                <p class="text-xs">APA</p>
                                            </div>
                                        </div>
                                        <!-- Buttons -->
                                        <div class="flex flex-col sm:flex-row sm:space-x-2 justify-center my-5">
                                            <!-- grid 7 Button -->
                                            <div class="mt-5 mx-auto">
                                                <a href="{{ route('order') }}">
                                                    <button class="paper-btn text-white bg-[#1F639C] hover:bg-[#3CAEA3]">
                                                        <i class="fa-solid fa-eye fa-shake"></i> <span>Order &nbsp; &nbsp;
                                                            &nbsp;</span>
                                                    </button>

                                                </a>
                                            </div>
                                            <!-- Grid 8 Button -->
                                            <div class="mt-5 mx-auto">
                                                <a href="{{ asset('free-samples/business-plans.docx') }}">
                                                    <button class="paper-btn text-white bg-[#3CAEA3] hover:bg-[#1F639C]">
                                                        <i class="fa-solid fa-check fa-shake"></i><span> Download</span>
                                                    </button>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- sample 3 -->
                                <div class="pb-2 mx-auto">
                                    <div
                                        class="bg-white rounded-xl mx-3 lg:w-full shadow-xl px-12 pt-16 pb-12  border-black">
                                        <h4 class="font-semibold text-lg ">
                                            Assignment
                                        </h4>
                                        <div class="grid grid-cols-2 mt-4">
                                            <!-- grid 1 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Title Of Piece</h4>
                                                <p class="text-xs">Hotel Room Technologies



                                                </p>
                                            </div>
                                            <!-- Grid 2 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Discipline</h4>
                                                <p class="text-xs">Tourism and Hotel

                                                </p>
                                            </div>
                                            <!-- grid 3 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Academic Level:</h4>
                                                <p class="text-xs">Master's

                                                </p>
                                            </div>
                                            <!-- Grid 4 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Pages:</h4>
                                                <p class="text-xs">32</p>
                                            </div>
                                            <!-- grid 5 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Sources:</h4>
                                                <p class="text-xs">1</p>
                                            </div>
                                            <!-- Grid 6 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Paper Format:</h4>
                                                <p class="text-xs">Harvard</p>
                                            </div>
                                        </div>
                                        <!-- Buttons -->
                                        <div class="flex flex-col sm:flex-row sm:space-x-2 justify-center my-5">
                                            <!-- grid 7 Button -->
                                            <div class="mt-5 mx-auto">
                                                <a href="{{ route('order') }}">
                                                    <button class="paper-btn text-white bg-[#1F639C] hover:bg-[#3CAEA3]">
                                                        <i class="fa-solid fa-eye fa-shake"></i> <span>Order &nbsp; &nbsp;
                                                            &nbsp;</span>
                                                    </button>

                                                </a>
                                            </div>
                                            <!-- Grid 8 Button -->
                                            <div class="mt-5 mx-auto">
                                                <a
                                                    href="{{ asset('free-samples/tourism-and-Hotel-Room-Technologies.docx') }}">
                                                    <button class="paper-btn text-white bg-[#3CAEA3] hover:bg-[#1F639C]">
                                                        <i class="fa-solid fa-check fa-shake"></i><span> Download</span>
                                                    </button>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </swiper-slide>
                        <!-- slide 2 -->
                        <swiper-slide>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-20 mt-10 ">

                                <!-- sample 1 -->
                                <div class="pb-2 mx-auto">
                                    <div
                                        class="bg-white rounded-xl mx-3 lg:w-full shadow-xl px-12 pt-16 pb-12  border-black">
                                        <h4 class="font-semibold text-lg ">
                                            Assignment
                                        </h4>
                                        <div class="grid grid-cols-2 mt-4">
                                            <!-- grid 1 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Title Of Piece</h4>
                                                <p class="text-xs">Operation management <br><br>

                                                </p>
                                            </div>
                                            <!-- Grid 2 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Discipline</h4>
                                                <p class="text-xs">Management</p>
                                            </div>
                                            <!-- grid 3 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Academic Level:</h4>
                                                <p class="text-xs">Master's

                                                </p>
                                            </div>
                                            <!-- Grid 4 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Pages:</h4>
                                                <p class="text-xs">17</p>
                                            </div>
                                            <!-- grid 5 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Sources:</h4>
                                                <p class="text-xs">1</p>
                                            </div>
                                            <!-- Grid 6 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Paper Format:</h4>
                                                <p class="text-xs">Harvard</p>
                                            </div>
                                        </div>
                                        <!-- Buttons -->
                                        <div class="flex flex-col sm:flex-row sm:space-x-2 justify-center my-5">
                                            <!-- grid 7 Button -->
                                            <div class="mt-5 mx-auto">
                                                <a href="{{ route('order') }}">
                                                    <button class="paper-btn text-white bg-[#1F639C] hover:bg-[#3CAEA3]">
                                                        <i class="fa-solid fa-eye fa-shake"></i> <span>Order &nbsp; &nbsp;
                                                            &nbsp;</span>
                                                    </button>

                                                </a>
                                            </div>
                                            <!-- Grid 8 Button -->
                                            <div class="mt-5 mx-auto">
                                                <a href="{{ asset('free-samples/operations-management-mcdonalds.docx') }}">
                                                    <button class="paper-btn text-white bg-[#3CAEA3] hover:bg-[#1F639C]">
                                                        <i class="fa-solid fa-check fa-shake"></i><span> Download</span>
                                                    </button>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- sample 2 -->
                                <div class="pb-2 mx-auto">
                                    <div
                                        class="bg-white rounded-xl mx-3 lg:w-full shadow-xl px-12 pt-16 pb-12  border-black">
                                        <h4 class="font-semibold text-lg ">
                                            Assignment
                                        </h4>
                                        <div class="grid grid-cols-2 mt-4">
                                            <!-- grid 1 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Title Of Piece</h4>
                                                <p class="text-xs">BSc Business Management

                                                </p>
                                            </div>
                                            <!-- Grid 2 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Discipline</h4>
                                                <p class="text-xs">Services & Operations



                                                </p>
                                            </div>
                                            <!-- grid 3 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Academic Level:</h4>
                                                <p class="text-xs">Master's

                                                </p>
                                            </div>
                                            <!-- Grid 4 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Pages:</h4>
                                                <p class="text-xs">14</p>
                                            </div>
                                            <!-- grid 5 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Sources:</h4>
                                                <p class="text-xs">1</p>
                                            </div>
                                            <!-- Grid 6 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Paper Format:</h4>
                                                <p class="text-xs">Harvard</p>
                                            </div>
                                        </div>
                                        <!-- Buttons -->
                                        <div class="flex flex-col sm:flex-row sm:space-x-2 justify-center my-5">
                                            <!-- grid 7 Button -->
                                            <div class="mt-5 mx-auto">
                                                <a href="{{ route('order') }}">
                                                    <button class="paper-btn text-white bg-[#1F639C] hover:bg-[#3CAEA3]">
                                                        <i class="fa-solid fa-eye fa-shake"></i> <span>Order &nbsp; &nbsp;
                                                            &nbsp;</span>
                                                    </button>

                                                </a>
                                            </div>
                                            <!-- Grid 8 Button -->
                                            <div class="mt-5 mx-auto">
                                                <a
                                                    href="{{ asset('free-samples/services-and-operations-sample-distinction.docx') }}">
                                                    <button class="paper-btn text-white bg-[#3CAEA3] hover:bg-[#1F639C]">
                                                        <i class="fa-solid fa-check fa-shake"></i><span> Download</span>
                                                    </button>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- sample 3 -->
                                <div class="pb-2 mx-auto">
                                    <div
                                        class="bg-white rounded-xl mx-3 lg:w-full shadow-xl px-12 pt-16 pb-12  border-black">
                                        <h4 class="font-semibold text-lg ">
                                            Assignment
                                        </h4>
                                        <div class="grid grid-cols-2 mt-4">
                                            <!-- grid 1 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Title Of Piece</h4>
                                                <p class="text-xs">Hotel Chocolat in Germany

                                                </p>
                                            </div>
                                            <!-- Grid 2 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Discipline</h4>
                                                <p class="text-xs">Market Entry

                                                </p>
                                            </div>
                                            <!-- grid 3 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Academic Level:</h4>
                                                <p class="text-xs">Master's

                                                </p>
                                            </div>
                                            <!-- Grid 4 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Pages:</h4>
                                                <p class="text-xs">9</p>
                                            </div>
                                            <!-- grid 5 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Sources:</h4>
                                                <p class="text-xs">1</p>
                                            </div>
                                            <!-- Grid 6 -->
                                            <div class="my-5">
                                                <h4 class="text-[#929292] text-lg">Paper Format:</h4>
                                                <p class="text-xs">Harvard</p>
                                            </div>
                                        </div>
                                        <!-- Buttons -->
                                        <div class="flex flex-col sm:flex-row sm:space-x-2 justify-center my-5">
                                            <!-- grid 7 Button -->
                                            <div class="mt-5 mx-auto">
                                                <a href="{{ route('order') }}">
                                                    <button class="paper-btn text-white bg-[#1F639C] hover:bg-[#3CAEA3]">
                                                        <i class="fa-solid fa-eye fa-shake"></i> <span>Order &nbsp; &nbsp;
                                                            &nbsp;</span>
                                                    </button>

                                                </a>
                                            </div>
                                            <!-- Grid 8 Button -->
                                            <div class="mt-5 mx-auto">
                                                <a href="{{ asset('free-samples/international-market-entry.docx') }}">
                                                    <button class="paper-btn text-white bg-[#3CAEA3] hover:bg-[#1F639C]">
                                                        <i class="fa-solid fa-check fa-shake"></i><span> Download</span>
                                                    </button>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </swiper-slide>
                    </swiper-container>
                </div>
                <!-- End Buttons -->
                <div class="flex items-end justify-center  mt-20">
                    <a href="{{ route('sample') }}">
                        <button class=" paper-btn text-white bg-[#3CAEA3] hover:bg-[#1F639C]">
                            <i class="fa-solid fa-check fa-shake"></i><span class="text-2xl"> All Samples </span>
                        </button>
                    </a>
                </div>
            </div>
        </section>
        <!-- 6th Section what others are saying -->
        <section class="overflow-hidden mt-10 pb-24">
            <div class="container mx-auto">
                <div class="text-center">
                    <h4
                        class="text-4xl text-[#1F639C] font-bold lg:underline lg:decoration-wavy lg:decoration-[#3CAEA3] lg:underline-offset-[10px]">
                        What Others Are Saying
                    </h4>
                </div>

                <div class="grid relative bg-[#B1E3FF] rounded-3xl h-[584px] lg:h-[527px] w-[77%] mt-10 items-end mx-auto">
                    <div class="hidden xl:grid justify-items-end -mr-[106px]">
                        <img alt="{{ config('app.name') }}" class="absolute h-[492px] left-[60%]"
                            src="{{ asset('images/review-area.webp') }}">
                    </div>
                    <div
                        class="h-[315px] w-[244px] md:h-[260px] md:w-[420px] lg:h-[200px] lg:w-[500px] bg-[#3CAEA3] rounded-3xl xl:-ml-[40px] ">
                        <!-- Reviews Section  -->
                        <div class="p-5">
                            <swiper-container centered-slides="true" autoplay-delay="2500"
                                autoplay-disable-on-interaction="false">
                                <!-- SLide 1 -->

                                <!-- slide 2 -->
                                <swiper-slide>
                                    <div class="lg:flex items-center gap-2 ">
                                        <h4 class="text-2xl text-white font-medium">
                                            Pay Structures for New Hires
                                        </h4>
                                        <div class="inline-block bg-white rounded-2xl p-1">
                                            <i style="color: #3CAEA3; font-size: 12px;" class="fa-solid fa-star"></i>
                                            <i style="color: #3CAEA3; font-size: 12px;" class="fa-solid fa-star"></i>
                                            <i style="color: #3CAEA3; font-size: 12px;" class="fa-solid fa-star"></i>
                                            <i style="color: #3CAEA3; font-size: 12px;" class="fa-solid fa-star"></i>
                                            <i style="color: #3CAEA3; font-size: 12px;" class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="space-y-10">
                                        <p class="text-sm text-white font-light">Human Resource Management (HRM)</p>
                                        <p class="text-base text-white font-medium">Highly impressed by the outstanding work
                                            of
                                            experts. You all deserve appreciation for your hard work.</p>
                                    </div>
                                </swiper-slide>
                            </swiper-container>
                        </div>
                    </div>
                    <!-- Trust Pilot Area -->
                    <div class="grid grid-cols-1 md:grid-cols-2 items-center md:justify-items-start ml-2 sm:ml-10 mt-16  ">
                        <!-- grid 1 with headings and ratings -->
                        <div>
                            <div class="flex items-center">
                                <img alt="{{ config('app.name') }}" src="{{ asset('images/star.png') }}">
                                <h4 class="font-semibold text-xl sm:text-4xl">Trustpilot</h4>
                            </div>
                            <div class="ml-10">
                                <div class="flex items-center">
                                    <h6 class="text-lg font-medium">Marvelous</h6>
                                    <i style="color: #3CAEA3;" class="fa-solid fa-star"></i>
                                    <i style="color: #3CAEA3;" class="fa-solid fa-star"></i>
                                    <i style="color: #3CAEA3;" class="fa-solid fa-star"></i>
                                    <i style="color: #3CAEA3;" class="fa-solid fa-star"></i>
                                    <i style="color: #3CAEA3;" class="fa-solid fa-star"></i>
                                </div>
                                <p class="text-black/80">150+ Client reviews</p>
                            </div>
                        </div>

                        <div class="grid sm:mx-0 ml-[1.75rem] sm:justify-items-center">
                            <a href="{{ route('reviews') }}" class="my-3">
                                <button class=" paper-btn text-white bg-[#3CAEA3] hover:bg-[#1F639C]">
                                    View All Reviews
                                </button>
                            </a>
                        </div>
                    </div>
                   
                </div>
            </div>

        </section>
        <!--7th Section Dissertation Ace: The Largest Dissertation Writing Website in USA  -->
        <section class="overflow-hidden bg-[#95CEFF] mt-10 pb-24 px-4">
            <div class="container mx-auto">
                <!-- heading -->
                <div class="mt-10 text-center">
                    <h3 class="text-3xl text-[#1F639C] font-semibold">
                        Essay Expert: <span class="text-[#3CAEA3]">The Cheapest Essay Writing Help UK</span>
                    </h3>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 mt-20 gap-4 ">
                    <!-- grid 1 -->
                    <div>
                        <div class="bg-white rounded-r-3xl rounded-tl-3xl ring-2 shadow-xl p-5">
                            <div class="grid grid-cols-2 items-center justify-items-end">
                                <div>
                                    <h3 class="font-bold text-xl">Avail Your Cheap Essay Help UK Today</h3>
                                </div>
                                <div>
                                    <img alt="{{ config('app.name') }}" src="{{ asset('images/write-file.png') }}">
                                </div>
                            </div>
                            <p class="text-sm mt-5">
                                Do you need help with the daily academic essays assigned by your teachers? Do not worry; the
                                essay help has already arrived at your doorstep. Cheapest Essay has a wide range of
                                approximately 200+ British essay writers that you can easily order for your remarkable
                                writing.
                                You are assured to rely on these highly skilled individuals as they have experience of years
                                in
                                this discipline and are incredibly professional in dealing with the clients.
                                <br><br>
                                However, you must be thinking about the expenses one would have to bear in order to hire one
                                of
                                these skilled essay writers for their essay help. No worries, as it is understandable that
                                students do not usually earn for themselves, which makes it mandatory for us to offer you
                                the
                                cheapest essay writer. <br> So, now you can have the chance to gain more grades with less
                                money
                                and
                                time. Do not let go of this opportunity and avail your cheap essay UK.
                            </p>
                        </div>
                    </div>
                    <!-- grid 2 -->
                    <div>
                        <div class="bg-white rounded-r-3xl rounded-tl-3xl ring-2 shadow-xl p-5">
                            <div class="grid grid-cols-2 items-center justify-items-end">
                                <div>
                                    <h4 class="font-bold text-xl">Improve Your Grades with the Best Essay Writing Assistance
                                        UK
                                    </h4>
                                </div>
                                <div>
                                    <img alt="{{ config('app.name') }}" src="{{ asset('images/write-hand.png') }}">
                                </div>
                            </div>
                            <p class="text-sm mt-5">
                                Everybody wants to be on the top when it comes to academic results. However, essay writing
                                assignments serve as the golden chance to obtain the desired scores. Yet, along with timely
                                submission, relevant and attractive content in essay writing is also necessary to achieve
                                better
                                grades. Accordingly, regardless of its type, an essay is appreciated by all when it
                                comprises an
                                accurate structure, enough research, relevant information, and evidence support. Investing
                                this
                                much time in essay writing gets complicated for a student who has to manage other academic
                                and
                                extracurricular activities simultaneously. As a result, many students could not complete it
                                in
                                the given time and eventually lost their marks.
                                <br>
                                Therefore, one should make a clever move to avail the essay writing help and give themselves
                                some rest. The professionals are well aware of all the significant factors required in essay
                                writing and make all efforts to timely fulfil them by keeping the guidelines in mind. Thus,
                                it
                                would be a magnificent idea to get their essay help to increase your chances of getting
                                higher
                                grades in class.
                            </p>
                        </div>
                    </div>
                    <!-- grid 3 -->
                    <div>
                        <div class="bg-white rounded-r-3xl rounded-tl-3xl ring-2 shadow-xl p-5">
                            <div class="grid grid-cols-2 items-center justify-items-end">
                                <div>
                                    <h4 class="font-bold text-xl">Reasons that you should Order the Cheapest Essay Writing
                                        Service UK</h4>
                                </div>
                                <div>
                                    <img alt="{{ config('app.name') }}" src="{{ asset('images/write-tick.png') }}">
                                </div>
                            </div>
                            <p class="text-sm mt-5">
                                The essay writing service is very reachable and easy to avail. You are just a few steps away
                                from completing your essay by the best essay writing company UK while chilling at home.
                                Thanks
                                to the digital era, you do not need to cover long distances to deliver your essay to us.
                                Whether
                                you live in Exeter, Southampton, Oxford, Cardiff, or any part of the UK, you can
                                effortlessly
                                convey your essay topics and their details to us. Similarly, your completed essay will be
                                dropped in your inbox through email once all the given guidelines are fulfilled.
                                <br>
                                <br>
                                In addition, you can ask for as many revisions as you want us to make because delivering the
                                correct and relevant content matters the most to us. Furthermore, the essay is guaranteed to
                                be
                                based entirely on your requirements, and nothing will be added or subtracted from it. <br>
                                Our
                                promise is to provide a genuine essay writing service UK, and it must always be addressed.
                            </p>
                        </div>
                    </div>
                    <!-- grid 4 -->
                    <div>
                        <div class="bg-white rounded-r-3xl rounded-tl-3xl ring-2 shadow-xl p-5">
                            <div class="grid grid-cols-2 items-center justify-items-end">
                                <div>
                                    <h4 class="font-bold text-xl">Take Advantage of the Trustworthy and Reliable Essay
                                        writing
                                        Service</h4>
                                </div>
                                <div>
                                    <img alt="{{ config('app.name') }}" src="{{ asset('images/write-support.png') }}">
                                </div>
                            </div>
                            <p class="text-sm mt-5">
                                Are you freaking out because the essay deadlines are approaching? Is it too late to write an
                                essay yourself? No need to be stressed about it anymore because the best essay writing
                                service
                                UK is here to the rescue. You are allowed to rely on us for urgent essay help UK entirely.
                                Know
                                that your essay writing and your identity are in secure hands. The essay experts will not
                                only
                                take care of delivering the best essay, but they will also make sure that you do not miss
                                your
                                deadline.
                                <br>
                                Moreover, the protection of your privacy would be focused on as a priority. All the details
                                you
                                mention while filling out the form will be confidential. Since customer satisfaction is one
                                of
                                the prominent elements of this platform, it is necessary for us to win their trust and
                                respect.
                                That being the case, we also take good care of their time and money to provide them with
                                reliable and affordable essay writing services. So, do not waste more time and benefit from
                                this
                                incredible essay writing service UK.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=" mx-auto bg-white p-5 py-10">
            <div
                class="bg-slate-100 rounded-3xl border-gray-600 p-5 border-spacing-2 box-border my-4 shadow-lg shadow-black md:w-[80%] mx-auto">
                <div class="md:p-5 p-2 border-dashed border-2 border-gray-800">
                    <div class="grid md:grid-cols-1 lg:grid-cols-2">
                        <div class="">
                            <h4 class="font-bold px-5 sm:text-4xl text-2xl">
                                Enjoy the Perks of Hiring Our Quality Essay Writing Service
                            </h4>
                            <p class="text-lg p-5">
                                A trustworthy platform is all you need when you have an academic burden to help you with
                                your
                                assignments. Similarly, getting your essays done by a platform that offers the best essay
                                writing in the UK is a plus point to achieving better grades. Release some burden from your
                                shoulders and let the essay writers do their job for you. Cheapest Essay is at your service
                                24
                                hours a day, no matter which city of the UK you live in. Whether you are from Manchester,
                                York,
                                Coventry, Leicester, Bradford, or Cambridge, Cheapest Essay awaits you to ease your worries
                                with
                                its exceptional essay writing UK.
                                <br>
                                In addition, make use of the cheap essay writing help and prepare yourself to achieve the
                                best
                                grades in class. Not only will you achieve excellent grades, but with expert essay writing
                                help,
                                you will be appreciated and praised by your fellows and teachers for the quality material in
                                your essay. Consider this a great opportunity of getting your essays done by the experts
                                within
                                your range and avail it until it is too late.

                            </p>
                            <h4 class="font-bold px-5 sm:text-4xl text-2xl">
                                Get the Chance to Uplift your Academic Performance with the Best Essay Writing Help in Town
                            </h4>
                            <p class="text-lg p-5">
                                There are many ways to learn new things. However, learning from experts has benefits of
                                another
                                level. When you order essay writing help, you not only get to relax while professionals are
                                writing your essay, but you also reap the benefit of learning from them. Their writing
                                style,
                                the kinds of evidence they collect, the use of language, the pattern and structure of the
                                essay,
                                the headings, and a lot of other factors the professionals combine to write a complete and
                                remarkable essay are significant for you to notice and learn from them.
                                <br>
                                Moreover, when you read the essay delivered by expert essay writers, you notice the errors
                                you
                                always make while writing the essay that they don’t. Consequently, you gradually improve
                                your
                                own essay writing skills and learn new techniques to write like a professional.

                            </p>


                        </div>
                        <div class="">
                            <h4 class="font-bold px-5 sm:text-4xl text-2xl">
                                Receive 100% Plagiarism-Free and Quality Essay by the Expert Writers
                            </h4>
                            <p class="text-lg p-5">
                                Beyond any doubt, essay writing is very time-taking. Furthermore, evidence collection
                                through
                                research and brainstorming takes more hours in it, which is necessary for the essay to be
                                complete. Although research is another necessary part of essay writing, it should be done
                                with
                                extra care as it can also bring plagiarism in the essay. Therefore, our proficient essay
                                writers
                                make sure to maintain the originality of the essay by adding quality content only. Due to
                                this
                                reason, there is no chance that the essay might detect even 1% of plagiarism.
                                <br>
                                Also, the experts are trained to serve our clients best, so they allow unlimited revisions
                                until
                                you are satisfied. With thorough proofreading and multiple revisions, there left no chance
                                of
                                plagiarism or any error in the essay. So, it is never too late to avail the essay help, no
                                matter if you are in Nottingham, Aberdeen, Derby, or Plymouth. With this experience of essay
                                writing help, you will undoubtedly be grateful and relaxed.
                            </p>
                            <h4 class="font-bold px-5 sm:text-4xl text-2xl">
                                Here, we Value our Customers, So without any Hassles Get Ready to Get the Best
                            </h4>
                            <p class="text-lg p-5">
                                Our goal is to deliver top-notch essay help services to students who are struggling with
                                daily
                                academic pressure. It is certain that the platform takes care of its client’s needs and
                                ensure
                                the safeguarding of their personal data at all cost. Moreover, strict actions are taken in
                                case
                                of any inconvenience for the clients. Apart from that, the essay experts deal with them in
                                the
                                most professional way and make all efforts to satisfy them by delivering phenomenal work as
                                per
                                their requirements.
                                <br>
                                Besides that, time management is given great attention, ensuring students do not cross the
                                deadlines. Because of this, our essay help experts are competent enough to devote their
                                complete
                                attention and effort to their work, writing an impressive essay and delivering it on time.
                                In
                                addition to this, it also matters to us that the students get their dream results in the
                                assessments for less money, and for that, we provide them with the cheapest essay writing
                                service.
                                <br>
                                For all these reasons, it is worth trusting Cheapest Essay for a remarkable and comfortable
                                essay help experience. Once you place an order for essay writing help, it is our
                                responsibility
                                to deliver you up-to-the-mark service while you get to chill at home or hangout at your
                                favorite
                                place. So, grab this opportunity to avail yourself the essay help and gain excellent scores
                                in
                                your essay writing assignments at school, college, or university.
                            </p>

                        </div>
                    </div>


                </div>
            </div>
        </section>

        <!-- 8th Section FAQ -->
        <section class="overflow-hidden mt-10 pb-24">
            <div class="container  mx-auto text-center">
                <!-- text div -->
                <div class="space-y-5">
                    <h4 class="text-4xl font-semibold text-[#1F639C]">FAQs</h4>
                    <h4 class="text-4xl text-[#1F639C]">
                        Want To Ask Something?
                    </h4>
                </div>
                <!-- search -->
                <div class="mt-10">
                    <form>
                        <div class="flex justify-center">
                            <div class="relative w-[65%]">
                                <input type="search" id="search-dropdown"
                                    class="block p-4 w-full z-20 text-base text-gray-900 bg-gray-50 rounded-lg border-l-[#1F639C] border-2 border-[#1F639C] focus:ring-blue-500 focus:border-blue-500 "
                                    placeholder="Search Any Question" required>
                                <button type="submit"
                                    class="absolute top-2 right-0 p-2.5 text-sm font-medium text-white  rounded-r-lg focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                    <svg aria-hidden="true" class="w-5 h-5 text-[#1F639C]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                    <span class="sr-only">Search</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- FAQ -->
                <div>
                    <div class="grid divide-y divide-neutral-200 mx-auto mt-8 space-y-5">
                        <!-- First -->
                        <div class="py-5 p-5 rounded-lg">
                            <details class="group">
                                <summary class="flex justify-between  items-center font-medium cursor-pointer list-none">
                                    <span class="text-[#1F639C]"> 1. Will I get the desired quality in my essay?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" class="text-[#1F639C]" height="24"
                                            shape-rendering="geometricPrecision" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-[#9D9A9A] mt-3 group-open:animate-fadeIn">
                                    Yes. With the remarkable skills of our highly talented and professional team of essay
                                    writers, the quality and relevance of the essays are guaranteed.
                            </p>
                        </details>
                    </div>
                    <!-- Second -->
                    <div class="py-5 p-5  rounded-lg">
                        <details class="group">
                            <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                <span class="text-[#1F639C]">2. How much will I have to pay to avail cheap essay
                                    service?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" class="text-[#1F639C]" height="24"
                                        shape-rendering="geometricPrecision" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="text-[#9D9A9A] mt-3 group-open:animate-fadeIn">
                                Your payment will be finalized according to the information you will put in while
                                filling
                                out the forms, especially the word count and pages.
                            </p>
                        </details>
                    </div>
                    <!-- Third -->
                    <div class="py-5 p-5  rounded-lg">
                        <details class="group">
                            <summary class="flex justify-between  items-center font-medium cursor-pointer list-none">
                                <span class="text-[#1F639C]">3. What if I need to get more satisfied with my
                                    essay?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" class="text-[#1F639C]" height="24"
                                        shape-rendering="geometricPrecision" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="text-[#9D9A9A] mt-3 group-open:animate-fadeIn">
                                Customer satisfaction is highly prioritized here, so if you do not get the desired
                                results,
                                you can ask for revisions unlimited times.
                            </p>
                        </details>
                    </div>
                    <!-- Fourth -->
                    <div class="py-5 p-5  rounded-lg">
                        <details class="group">
                            <summary class="flex  justify-between  items-center font-medium cursor-pointer list-none">
                                <span class="text-[#1F639C]">4. Is the essay writing help available 24 hours?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" class="text-[#1F639C]" height="24"
                                        shape-rendering="geometricPrecision" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="text-[#9D9A9A] mt-3 group-open:animate-fadeIn">
                                Yes. This platform is open 24 hours to your service. You can make an order any time; one
                                of
                                the available essay-writing experts will start working on it.
                            </p>
                        </details>
                    </div>
                    <!-- Fifth -->
                    <div class="py-5 p-5  rounded-lg">
                        <details class="group">
                            <summary class="flex justify-between  items-center font-medium cursor-pointer list-none">
                                <span class="text-[#1F639C]">5. What if the plagiarism is detected in my essay?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" class="text-[#1F639C]" height="24"
                                        shape-rendering="geometricPrecision" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="text-[#9D9A9A] mt-3 group-open:animate-fadeIn">
                                Due to the remarkable skills of our essay writing team, originality would be maintained
                                in
                                the essays, leaving zero chances for plagiarism.
                            </p>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div></template>
