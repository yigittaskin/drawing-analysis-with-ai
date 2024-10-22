<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Drawing Analysis with AI</title>
      <script src="https://cdn.tailwindcss.com"></script>
      <style type="text/tailwindcss">
        @layer base {
          html {
            @apply dark:bg-slate-900 bg-white;
          }
        }
      </style>
    </head>
    <body class="container mx-auto">
      <nav class="w-full bg-white dark:bg-slate-900 flex p-4 items-center justify-between">
        <div class="inline-flex space-x-2">
          <span class="hidden md:block text-slate-900 dark:text-slate-100 font-bold text-2xl">Drawing Analysis with AI</span>
        </div>
        </button>
      </nav>
      <div class="flex flex-col py-8 md:py-20 md:flex-row text-slate-900 dark:text-slate-100 items-center bg-white dark:bg-slate-900">
        <div class="w-full p-4 space-y-4">
          <h1 class="text-5xl font-bold leading-tight">Welcome to
            <span class="text-blue-600"> Drawing Analysis with AI</span>
          </h1>
          <p class="text-slate-500 font-light text-lg" style="margin-bottom: 30px !important;">Uncover the hidden meanings behind your drawings with the power of AI. Our innovative web application interprets your drawings to provide a psychological analysis, offering insights into your emotions, thoughts, and personality.</p>
          <a href="{{ route('upload') }}" class="bg-blue-600 w-full md:w-auto py-3 px-8 rounded-md text-lg text-slate-100">Get Started</a>
        </div>
        <figure class="w-full">
          <img src="{{ asset('img/resimanaliztest.jpg') }}" class="w-full h-96 object-cover" alt="hero" style="border-radius: 12px;">
        </figure>
      </div>
      <div class="bg-white py-8 md:py-20 dark:bg-slate-900 dark:text-slate-100 text-slate-900 px-4">
        <div class="space-y-8">
          <h2 class="text-3xl md:text-center font-semibold">Upload your drawing from anywhere in the world and receive your personalized analysis instantly. Discover the hidden meanings behind your art, no matter where you are!</h2>
          <div class="flex flex-col-4 md:flex-row gap-4">
            <div class="grid md:grid-cols-3 gap-12">
              <div class="md:space-x-2  space-y-2 md:space-y-0 mt-12">
                <img src="{{ asset('img/1.png') }}" alt="Child Image" style="border-radius: 12px;">
              </div>
              <div class="md:space-x-2  space-y-2 md:space-y-0 mt-12">
                <img src="{{ asset('img/2.png') }}" alt="Child Image" style="border-radius: 12px;">
              </div>
              <div class="md:space-x-2  space-y-2 md:space-y-0 mt-12">
                <img src="{{ asset('img/3.png') }}" alt="Child Image" style="border-radius: 12px;">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-white py-8 md:py-20 dark:bg-slate-900 dark:text-slate-100 text-slate-900 p-4">
        <div class="">
          <div class="flex flex-col md:flex-row gap-4 items-center py-4">
            <div class="flex-1 text-center md:text-left">
              <h2 class="text-3xl font-semibold">Try It Now</h2>
              <p class="mt-4  font-light text-gray-500 dark:text-gray-400">Ready to explore the hidden meanings in your drawings? Try it now for free! Upload your drawing, and let our AI provide deep insights into your psychological landscape.</p>
            </div>
            <div class="">
              <a href="{{ route('upload') }}" class="bg-blue-600 hover:bg-blue-800 text-slate-100 px-8 py-3 rounded-lg">Start free trial</a>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-white py-8 md:py-20 dark:bg-slate-900 dark:text-slate-100 text-slate-900 px-4">
        <div class="space-y-4">
          <h2 class="text-3xl font-medium max-w-lg">Who Is It For?</h2>
          <p class="mt-4 text-lg text-gray-500 dark:text-gray-400">Our Drawing Analysis with AI tool is designed for anyone interested in uncovering the psychological insights hidden within their drawings. Whether you’re a parent curious about your child’s development, an artist looking to explore the deeper meanings behind your work, or simply someone who enjoys doodling, this application offers a unique way to reflect on emotions, thoughts, and personality traits. By analyzing patterns, shapes, and colors, our AI provides personalized interpretations that can help you better understand yourself or those around you.</p>
        </div>
        <aside class="grid md:grid-cols-3 gap-12 mt-12">
          <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-10 w-10 text-blue-600">
              <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z" clip-rule="evenodd"></path>
            </svg>
            <h3 class="text-lg font-medium mt-4">Children</h3>
            <p class="mt-2 text-gray-500 dark:text-gray-400 text-sm font-l">Explore what your child’s drawings reveal about their inner world. Whether they’re drawing animals, people, or abstract shapes, each stroke may tell a story about their emotions and development.</p>
          </div>
          <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-10 w-10 text-blue-600">
              <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z" clip-rule="evenodd"></path>
            </svg>
            <h3 class="text-lg font-medium mt-4">Parents</h3>
            <p class="mt-2 text-gray-500 dark:text-gray-400 text-sm font-l">Understand your child on a deeper level. Our AI-powered analysis can help you recognize emotional patterns and provide support based on your child’s drawings.</p>
          </div>
          <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-10 w-10 text-blue-600">
              <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z" clip-rule="evenodd"></path>
            </svg>
            <h3 class="text-lg font-medium mt-4">Anyone Curious About Their Drawings</h3>
            <p class="mt-2 text-gray-500 dark:text-gray-400 text-sm font-l">Whether you're an artist or someone who loves to doodle, discover what your drawings say about your psychological state. Our tool is perfect for anyone who wants to dive into their subconscious and explore their creative mind.</p>
          </div>
        </aside>
      </div>
      <div class="bg-white py-8 md:py-20 dark:bg-slate-900 dark:text-slate-100 text-slate-900 p-4">
        <div class="">
          <div class="text-center space-y-3">
            <h2 class="text-3xl font-bold ">Start now in
              <span class="text-blue-600"> 3 easy steps</span>
            </h2>
            <p class="text-slate-600">How Does It Work?</p>
          </div>
          <ul class="grid md:grid-cols-3 gap-4 mt-16">
            <li class="flex">
              <h4>
                <span class="text-2xl font-bold">1</span>
              </h4>
              <div class="ml-4">
                <h3 class="text-lg font-semibold">Draw or Upload</h3>
                <p class="mt-2 text-gray-500 dark:text-gray-400">Start by drawing something or uploading an image of a drawing.</p>
              </div>
            </li>
            <li class="flex">
              <h4>
                <span class="text-2xl font-bold">2</span>
              </h4>
              <div class="ml-4">
                <h3 class="text-lg font-semibold">AI Analysis</h3>
                <p class="mt-2 text-gray-500 dark:text-gray-400">Our AI, powered by Google API and ChatGPT, will analyze the drawing, identifying patterns, shapes, and colors that reflect your emotional and psychological state.</p>
              </div>
            </li>
            <li class="flex">
              <h4>
                <span class="text-2xl font-bold">3</span>
              </h4>
              <div class="ml-4">
                <h3 class="text-lg font-semibold">Receive Insights</h3>
                <p class="mt-2 text-gray-500 dark:text-gray-400">Get a detailed psychological interpretation of your drawing, explaining what emotions, thoughts, or personality traits may be linked to your creation.</p>
              </div>
            </li>
          </ul>
          <div class="flex justify-center items-center">
            <div class="mt-16 w-full text-center">
              <a href="{{ route('upload') }}" class="mx-auto bg-blue-600 w-full px-6 py-3 text-white text-lg hover:bg-blue-700 rounded-full">Get Started</a>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-slate-100 py-8 md:py-20 dark:bg-slate-900 dark:text-slate-100 text-slate-900 px-4">
        <div class="py-8">
          <div class="text-center">
            <h2 class="text-3xl font-medium">Ready to get started?</h2>
            <p class="mt-4  font-light text-gray-500 dark:text-gray-400">Choose a plan that's right for you.</p>
          </div>
          <aside class="mt-8 md:mt-16">
            <ul class="grid md:grid-cols-3 gap-y-16 md:gap-4">
              <li class="bg-white dark:bg-transparent relative rounded-lg dark:border dark:border-slate-500 p-8 space-y-4">
                <h3 class="text-2xl flex items-center text-blue-700 font-medium">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-6 h-6 inline-block">
                    <path d="M14 6H6v8h8V6z"></path>
                    <path fill-rule="evenodd" d="M9.25 3V1.75a.75.75 0 011.5 0V3h1.5V1.75a.75.75 0 011.5 0V3h.5A2.75 2.75 0 0117 5.75v.5h1.25a.75.75 0 010 1.5H17v1.5h1.25a.75.75 0 010 1.5H17v1.5h1.25a.75.75 0 010 1.5H17v.5A2.75 2.75 0 0114.25 17h-.5v1.25a.75.75 0 01-1.5 0V17h-1.5v1.25a.75.75 0 01-1.5 0V17h-1.5v1.25a.75.75 0 01-1.5 0V17h-.5A2.75 2.75 0 013 14.25v-.5H1.75a.75.75 0 010-1.5H3v-1.5H1.75a.75.75 0 010-1.5H3v-1.5H1.75a.75.75 0 010-1.5H3v-.5A2.75 2.75 0 015.75 3h.5V1.75a.75.75 0 011.5 0V3h1.5zM4.5 5.75c0-.69.56-1.25 1.25-1.25h8.5c.69 0 1.25.56 1.25 1.25v8.5c0 .69-.56 1.25-1.25 1.25h-8.5c-.69 0-1.25-.56-1.25-1.25v-8.5z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="ml-2 dark:text-slate-100 text-slate-900">Basic Plan</span>
                </h3>
                <p class="text-xs text-slate-500">Perfect for individuals and casual users.</p>
                <div class="inline-flex items-end space-x-2">
                  <span class="font-semibold text-5xl mt-4 block">$5 </span>
                  <span class="font-light text-slate-400">/ for 3 credits</span>
                </div>
                <a href="{{ route('upload') }}" class="w-full mt-4 bg-blue-600 font-medium text-white px-4 py-2 rounded-lg">Get Started</a>
                <ul class="space-y-2 text-sm text-left">
                  <li class="flex space-x-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-blue-600  ">
                      <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1">Perform up to 3 drawing analyses</span>
                  </li>
                  <li class="flex space-x-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-blue-600  ">
                      <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1">Ideal for those looking to explore a few drawings</span>
                  </li>
                  <li class="flex space-x-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-blue-600  ">
                      <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1">Access to all core features</span>
                  </li>
                </ul>
                <p class="text-xs text-slate-500 mt-4">* All plans include a 1 credit free trial.</p>
                <span class="text-center  font-medium absolute -bottom-8 rounded-b left-0 right-0 p-4 bg-slate-200">
                  <a href="{{ route('upload') }}" class="text-sm text-slate-900 hover:text-blue-700">See all features</a>
                </span>
              </li>
              <li class="bg-white dark:bg-transparent relative rounded-lg dark:border dark:border-slate-500 p-8 space-y-4">
                <h3 class="text-2xl flex items-center text-blue-700 font-medium">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-6 h-6 inline-block">
                    <path fill-rule="evenodd" d="M8.5 3.528v4.644c0 .729-.29 1.428-.805 1.944l-1.217 1.216a8.75 8.75 0 013.55.621l.502.201a7.25 7.25 0 004.178.365l-2.403-2.403a2.75 2.75 0 01-.805-1.944V3.528a40.205 40.205 0 00-3 0zm4.5.084l.19.015a.75.75 0 10.12-1.495 41.364 41.364 0 00-6.62 0 .75.75 0 00.12 1.495L7 3.612v4.56c0 .331-.132.649-.366.883L2.6 13.09c-1.496 1.496-.817 4.15 1.403 4.475C5.961 17.852 7.963 18 10 18s4.039-.148 5.997-.436c2.22-.325 2.9-2.979 1.403-4.475l-4.034-4.034A1.25 1.25 0 0113 8.172v-4.56z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="ml-2 text-slate-900 dark:text-slate-100">Standard Plan</span>
                </h3>
                <p class="text-xs text-slate-500">Best for frequent users and small teams.</p>
                <div class="inline-flex items-end space-x-2">
                  <span class="font-semibold text-5xl mt-4 block">$19 </span>
                  <span class="font-light text-slate-400">/ for 15 credits</span>
                </div>
                <a href="{{ route('upload') }}" class="w-full mt-4 bg-blue-600 font-medium text-white px-4 py-2 rounded-lg">Get Started</a>
                <ul class="space-y-2 text-sm text-left">
                  <li class="flex space-x-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-blue-600  ">
                      <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1">Perform up to 15 drawing analyses</span>
                  </li>
                  <li class="flex space-x-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-blue-600  ">
                      <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1">Great for teams or families</span>
                  </li>
                  <li class="flex space-x-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-blue-600  ">
                      <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1">Includes priority support</span>
                  </li>
                </ul>
                <p class="text-xs text-slate-500 mt-4">* All plans include a 1 credit free trial.</p>
                <span class="text-center  font-medium absolute -bottom-8 rounded-b left-0 right-0 p-4 bg-slate-200">
                  <a href="{{ route('upload') }}" class="text-sm text-slate-900 hover:text-blue-700">See all features</a>
                </span>
              </li>
              <li class="bg-blue-700 text-white relative rounded-lg dark:border dark:border-slate-500 p-8 space-y-4">
                <h3 class="text-2xl flex items-center text-blue-700 font-medium">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="text-white w-6 h-6 inline-block">
                    <path d="M11.983 1.907a.75.75 0 00-1.292-.657l-8.5 9.5A.75.75 0 002.75 12h6.572l-1.305 6.093a.75.75 0 001.292.657l8.5-9.5A.75.75 0 0017.25 8h-6.572l1.305-6.093z"></path>
                  </svg>
                  <span class="ml-2 text-slate-100">Premium Plan</span>
                </h3>
                <p class="text-xs text-slate-200">Ideal for large teams and organizations.</p>
                <div class="inline-flex items-end space-x-2">
                  <span class="font-semibold text-5xl mt-4 block">$99 </span>
                  <span class="font-light text-slate-300">/ for 80 credits</span>
                </div>
                <button class="w-full mt-4 bg-blue-900 font-medium text-white px-4 py-2 rounded-lg">Contact us</button>
                <ul class="space-y-2 text-sm text-left">
                  <li class="flex space-x-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-blue-600  ">
                      <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1">Perform up to 80 drawing analyses</span>
                  </li>
                  <li class="flex space-x-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-blue-600  ">
                      <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1">Perfect for schools, therapy groups, or large organizations</span>
                  </li>
                  <li class="flex space-x-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-blue-600  ">
                      <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1">Includes priority support and exclusive features</span>
                  </li>
                </ul>
                <p class="text-xs text-slate-100 mt-4">* All plans include a 1 credit free trial.</p>
                <span class="text-center dark:bg-slate-800 font-medium absolute -bottom-8 rounded-b left-0 right-0 p-4 bg-slate-200">
                  <a href="{{ route('upload') }}" class="text-sm text-slate-900 hover:text-blue-700 dark:text-slate-100">See all features</a>
                </span>
              </li>
            </ul>
          </aside>
        </div>
      </div>
      <div class="bg-white py-8 md:py-20 dark:bg-slate-900 dark:text-slate-100 text-slate-900">
        <div class="p-4">
          <h3 class="text-3xl text-center text-blue-600 font-semibold">What our customers say</h3>
          <ul class="grid md:grid-cols-3 gap-4 mt-8 md:mt-16">
            <li class="flex flex-col p-8 shadow dark:shadow-none dark:border dark:border-blue-600 rounded-lg">
              <div class="">
                <div class="mt-1 font-light dark:text-slate-400 text-slate-900">
                  <p>"The Drawing Analysis with AI tool has given me a whole new perspective on my child's drawings. It’s fascinating to see how much emotion is reflected in simple doodles. As a parent, it’s been an eye-opener!""</p>
                </div>
              </div>
              <figure class="flex-shrink-0 flex mt-3">
                <img class="h-12 w-12 rounded-full ring-2 ring-amber-500" src="https://i.pravatar.cc/150?img=1" alt="">
                <div>
                  <p class="ml-2 font-medium dark:text-slate-100 text-slate-900">Sarah K.</p>
                  <span class="text-sm ml-2 font-light dark:text-slate-400 text-slate-500">Parent</span>
                </div>
              </figure>
            </li>
            <li class="flex flex-col p-8 shadow dark:shadow-none dark:border dark:border-blue-600 rounded-lg">
              <div class="">
                <div class="mt-1 font-light dark:text-slate-400 text-slate-900">
                  <p>"I’ve always been curious about the hidden meanings in my art. This tool provided detailed psychological insights I never expected. It's now a regular part of my creative process."</p>
                </div>
              </div>
              <figure class="flex-shrink-0 flex mt-3">
                <img class="h-12 w-12 rounded-full ring-2 ring-amber-500" src="https://i.pravatar.cc/150?img=9" alt="">
                <div>
                  <p class="ml-2 font-medium dark:text-slate-100 text-slate-900">Daniel M.</p>
                  <span class="text-sm ml-2 font-light dark:text-slate-400 text-slate-500">Freelance Artist</span>
                </div>
              </figure>
            </li>
            <li class="flex flex-col p-8 shadow dark:shadow-none dark:border dark:border-blue-600 rounded-lg">
              <div class="">
                <div class="mt-1 font-light dark:text-slate-400 text-slate-900">
                  <p>"As a teacher, using this tool in my classroom has helped me understand my students better. It offers an interesting way to look into their emotions and thoughts through their drawings."</p>
                </div>
              </div>
              <figure class="flex-shrink-0 flex mt-3">
                <img class="h-12 w-12 rounded-full ring-2 ring-amber-500" src="https://i.pravatar.cc/150?img=5" alt="">
                <div>
                  <p class="ml-2 font-medium dark:text-slate-100 text-slate-900">Emily T.</p>
                  <span class="text-sm ml-2 font-light dark:text-slate-400 text-slate-500">Teacher</span>
                </div>
              </figure>
            </li>
          </ul>
        </div>
      </div>
      <footer class="bg-slate-50 pt-16 pb-4 dark:bg-slate-900">
        <div class="border-t dark:border-slate-600 ">
          <div class="flex  flex-col md:flex-row items-center justify-between px-6 py-4 space-y-2 text-center text-zinc-900 dark:text-zinc-100">
            <h2 class="inline-flex space-x-2">
              <span class="text-zinc-900 dark:text-zinc-100 font-bold text-2xl">Drawing Analysis with AI</span>
            </h2>
            <p id="footer-text" class="text-sm"></p>
            <div class="flex space-x-4">
              <a href="#" class="text-zinc-900 dark:text-zinc-100 hover:text-blue-600 dark:hover:text-blue-400">
                <span class="sr-only">Youtube</span>
                <svg width="24" height="24" viewBox="0 0 24 24" class="h-6 w-6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_87_2493)">
                    <path d="M22.0922 0.54834H1.91022C0.853707 0.54834 0 1.40125 0 2.45616V21.5447C0 22.5964 0.853707 23.4517 1.91022 23.4517H22.0922C23.1439 23.4517 24 22.5972 24 21.5447V2.45616C23.9992 1.40125 23.1431 0.54834 22.0922 0.54834ZM16.1323 7.34834C15.6361 7.05816 15.2425 6.8289 14.7479 6.8289C14.2637 6.8289 13.8501 6.94994 13.6385 7.15355C13.4269 7.35555 13.3218 7.74674 13.3218 8.32469V9.18H15.9102L15.3499 11.5592H13.3218V19.4646H10.0705V11.5592H8.55311V9.18H10.0721V8.27179C10.0721 7.31547 10.1868 6.74313 10.4128 6.27099C10.6381 5.80044 11.075 5.2762 11.6826 4.9796C12.2894 4.68381 13.1872 4.53471 14.1162 4.53471C15.0685 4.53471 15.8124 4.85215 16.7246 5.10786L16.1323 7.34834Z" fill="#BDBDBD"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_87_2493">
                      <rect width="24" height="24" rx="5" fill="white"></rect>
                    </clipPath>
                  </defs>
                </svg>
              </a>
              <a href="#" class="text-zinc-900 dark:text-zinc-100 hover:text-blue-600 dark:hover:text-blue-400">
                <span class="sr-only">Twitter</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_87_2496)">
                    <path d="M17.9667 0.00952148H6.01427C2.70262 0.00952148 0 2.71214 0 6.0238V17.9952C0 21.2879 2.70262 23.9905 6.01427 23.9905H17.9857C21.2974 23.9905 24 21.2879 24 17.9762V6.0238C23.981 2.71214 21.2784 0.00952148 17.9667 0.00952148ZM17.9477 8.99287C17.9477 9.1261 17.9477 9.25932 17.9477 9.39255C17.9477 13.3894 14.8644 17.9952 9.21174 17.9952C7.47978 17.9952 5.86201 17.5004 4.51071 16.6439C4.75813 16.663 4.98652 16.682 5.23394 16.682C6.68041 16.682 7.99366 16.2062 9.04044 15.3878C7.68914 15.3688 6.56622 14.4933 6.16653 13.2942C6.35686 13.3323 6.54718 13.3513 6.73751 13.3513C7.023 13.3513 7.30849 13.3132 7.55591 13.2371C6.18557 12.9516 5.13878 11.7336 5.13878 10.268V10.23C5.51943 10.4584 6.01427 10.5916 6.50912 10.6106C5.69072 10.0777 5.13878 9.14513 5.13878 8.09834C5.13878 7.5464 5.29104 7.03252 5.55749 6.57574C7.0801 8.40286 9.32593 9.60191 11.8763 9.73514C11.8192 9.50675 11.8002 9.27836 11.8002 9.04997C11.8002 7.3751 13.1705 6.0238 14.8644 6.0238C15.7399 6.0238 16.5393 6.38541 17.1102 6.97542C17.8144 6.84219 18.4615 6.59477 19.0515 6.23315C18.8232 6.93736 18.3283 7.52736 17.7002 7.90801C18.3283 7.83188 18.9183 7.67962 19.4703 7.4322C19.0515 8.04124 18.5377 8.57415 17.9477 8.99287Z" fill="#BDBDBD"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_87_2496">
                      <rect width="24" height="24" rx="5" fill="white"></rect>
                    </clipPath>
                  </defs>
                </svg>
              </a>
              <a href="#" class="text-zinc-900 dark:text-zinc-100 hover:text-blue-600 dark:hover:text-blue-400">
                <span class="sr-only">Instagram</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM15.9758 5.72234H8.02422C6.75505 5.72234 5.72234 6.75505 5.72234 8.02422V15.9758C5.72234 17.2449 6.75505 18.2777 8.02422 18.2777H15.9758C17.2449 18.2777 18.2777 17.2449 18.2777 15.9758V8.02422C18.2777 6.75505 17.2449 5.72234 15.9758 5.72234ZM11.9997 16.1332C9.72102 16.1332 7.86676 14.279 7.86676 11.9997C7.86676 9.72102 9.72102 7.86676 11.9997 7.86676C14.279 7.86676 16.1332 9.72102 16.1332 11.9997C16.1332 14.279 14.279 16.1332 11.9997 16.1332ZM16.2659 8.72148C15.7267 8.72148 15.288 8.2828 15.288 7.74353C15.288 7.20427 15.7267 6.76558 16.2659 6.76558C16.8052 6.76558 17.2439 7.20427 17.2439 7.74353C17.2439 8.2828 16.8052 8.72148 16.2659 8.72148ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM15.9758 5.72234H8.02422C6.75505 5.72234 5.72234 6.75505 5.72234 8.02422V15.9758C5.72234 17.2449 6.75505 18.2777 8.02422 18.2777H15.9758C17.2449 18.2777 18.2777 17.2449 18.2777 15.9758V8.02422C18.2777 6.75505 17.2449 5.72234 15.9758 5.72234ZM11.9997 16.1332C9.72102 16.1332 7.86676 14.279 7.86676 11.9997C7.86676 9.72102 9.72102 7.86676 11.9997 7.86676C14.279 7.86676 16.1332 9.72102 16.1332 11.9997C16.1332 14.279 14.279 16.1332 11.9997 16.1332ZM16.2659 8.72148C15.7267 8.72148 15.288 8.2828 15.288 7.74353C15.288 7.20427 15.7267 6.76558 16.2659 6.76558C16.8052 6.76558 17.2439 7.20427 17.2439 7.74353C17.2439 8.2828 16.8052 8.72148 16.2659 8.72148ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM5 0C2.23858 0 0 2.23858 0 5V19C0 21.7614 2.23858 24 5 24H19C21.7614 24 24 21.7614 24 19V5C24 2.23858 21.7614 0 19 0H5ZM20.024 15.9758C20.024 18.2081 18.2081 20.024 15.9758 20.024H8.02422C5.79185 20.024 3.97604 18.2081 3.97604 15.9758V8.02422C3.97604 5.79185 5.79185 3.97604 8.02422 3.97604H15.9758C18.2081 3.97604 20.024 5.79185 20.024 8.02422V15.9758ZM15.9758 5.72234H8.02422C6.75505 5.72234 5.72234 6.75505 5.72234 8.02422V15.9758C5.72234 17.2449 6.75505 18.2777 8.02422 18.2777H15.9758C17.2449 18.2777 18.2777 17.2449 18.2777 15.9758V8.02422C18.2777 6.75505 17.2449 5.72234 15.9758 5.72234ZM11.9997 16.1332C9.72102 16.1332 7.86676 14.279 7.86676 11.9997C7.86676 9.72102 9.72102 7.86676 11.9997 7.86676C14.279 7.86676 16.1332 9.72102 16.1332 11.9997C16.1332 14.279 14.279 16.1332 11.9997 16.1332ZM16.2659 8.72148C15.7267 8.72148 15.288 8.2828 15.288 7.74353C15.288 7.20427 15.7267 6.76558 16.2659 6.76558C16.8052 6.76558 17.2439 7.20427 17.2439 7.74353C17.2439 8.2828 16.8052 8.72148 16.2659 8.72148ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM15.9758 5.72234H8.02422C6.75505 5.72234 5.72234 6.75505 5.72234 8.02422V15.9758C5.72234 17.2449 6.75505 18.2777 8.02422 18.2777H15.9758C17.2449 18.2777 18.2777 17.2449 18.2777 15.9758V8.02422C18.2777 6.75505 17.2449 5.72234 15.9758 5.72234ZM11.9997 16.1332C9.72102 16.1332 7.86676 14.279 7.86676 11.9997C7.86676 9.72102 9.72102 7.86676 11.9997 7.86676C14.279 7.86676 16.1332 9.72102 16.1332 11.9997C16.1332 14.279 14.279 16.1332 11.9997 16.1332ZM16.2659 8.72148C15.7267 8.72148 15.288 8.2828 15.288 7.74353C15.288 7.20427 15.7267 6.76558 16.2659 6.76558C16.8052 6.76558 17.2439 7.20427 17.2439 7.74353C17.2439 8.2828 16.8052 8.72148 16.2659 8.72148ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM15.9758 5.72234H8.02422C6.75505 5.72234 5.72234 6.75505 5.72234 8.02422V15.9758C5.72234 17.2449 6.75505 18.2777 8.02422 18.2777H15.9758C17.2449 18.2777 18.2777 17.2449 18.2777 15.9758V8.02422C18.2777 6.75505 17.2449 5.72234 15.9758 5.72234ZM11.9997 16.1332C9.72102 16.1332 7.86676 14.279 7.86676 11.9997C7.86676 9.72102 9.72102 7.86676 11.9997 7.86676C14.279 7.86676 16.1332 9.72102 16.1332 11.9997C16.1332 14.279 14.279 16.1332 11.9997 16.1332ZM16.2659 8.72148C15.7267 8.72148 15.288 8.2828 15.288 7.74353C15.288 7.20427 15.7267 6.76558 16.2659 6.76558C16.8052 6.76558 17.2439 7.20427 17.2439 7.74353C17.2439 8.2828 16.8052 8.72148 16.2659 8.72148ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359Z" fill="#BDBDBD"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </footer>
      <script>
          const footerText = document.getElementById('footer-text');
          const currentYear = new Date().getFullYear();
          footerText.textContent = `© ${currentYear} Drawing Analysis with AI. All rights reserved.`;
      </script>
    </body>
  </html>