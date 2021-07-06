<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-light font-sans">
        <div class="bg-white">
            <div class="container mx-auto flex flex-col lg:flex-row items-center py-4">
                <nav class="w-full lg:w-2/5">
                    <a href="#" class="top-nav-item"><i class="fa fa-home fa-lg"></i> Home</a>
                    <a href="#" class="top-nav-item"><i class="fa fa-home fa-lg"></i> Moments</a>
                    <a href="#" class="top-nav-item"><i class="fa fa-home fa-lg"></i> Notifications</a>
                    <a href="#" class="top-nav-item"><i class="fa fa-home fa-lg"></i> Messages</a>
                </nav>
                <div class="w-full lg:w-1/5 text-center my-4 lg:my-0"><a href="#"><i class="fa fa-twitter fa-lg text-blue-400"></i></a></div>
                <div class="w-full lg:w-2/5 flex lg:justify-end items-center">
                    <div class="mr-4 relative">
                        <input type="text" class="bg-gray-200 h-8 px-4 py-2 text-xs w-48 rounded-full" placeholder="Search Twitter">
                        <span class="flex items-center absolute inset-y-0 right-0 mr-3"><i class="fa fa-search text-gray-300"></i></span>
                    </div>
                    <div class="mr-4"><a href="#"><img src="https://source.unsplash.com/200x200?person" alt="avatar" class="h-8 w-8 rounded-full"></a></div>
                    <div><button class="bg-teal-400 hover:bg-teal-600 text-white font-medium py-2 px-4 rounded-full">Tweet</button></div>
                </div>
            </div>
        </div>

        <div class="hero bg-cover h-112"></div>

        <div class="bg-white shadow">
            <div class="container mx-auto flex flex-col lg:flex-row items-center lg:relative">
                <div class="w-full lg:w-1/4">
                    <img src="/img/twitter/tailwind_logo.jpg" alt="logo" class="rounded-full h-48 w-48 lg:absolute lg:-mt-28">
                </div>
                <div class="w-full lg:w-1/2">
                    <ul class="list-reset flex">
                        <li class="text-center py-3 px-4 border-b-2 border-solid border-teal-400"><a href="#" class="text-gray-600 hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Tweets</div>
                            <div class="text-lg tracking-tight font-bold text-teal-400">60</div>
                        </a></li>
                        <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal-400"><a href="#" class="text-gray-600 hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Fllowing</div>
                            <div class="text-lg tracking-tight font-bold hover:text-teal-400">4</div>
                        </a></li>
                        <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal-400"><a href="#" class="text-gray-600 hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Followers</div>
                            <div class="text-lg tracking-tight font-bold hover:text-teal-400">3,810</div>
                        </a></li>
                        <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal-400"><a href="#" class="text-gray-600 hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Likes</div>
                            <div class="text-lg tracking-tight font-bold hover:text-teal-400">9</div>
                        </a></li>
                        <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal-400"><a href="#" class="text-gray-600 hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Moments</div>
                            <div class="text-lg tracking-tight font-bold hover:text-teal-400">1</div>
                        </a></li>
                    </ul>
                </div>
                <div class="w-full lg:w-1/4 flex my-4 lg:my-0 lg:justify-end items-center">
                    <div class="mr-6">
                        <button class="bg-teal-400 hover:bg-teal-600 text-white font-medium py-2 px-4 rounded-full">Following</button>
                    </div>
                    <div>
                        <a href="#" class="text-gray-500"><i class="fa fa-ellipsis-v fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- end container --}}
        <div class="container mx-auto flex flex-col lg:flex-row mt-3 text-sm leading-normal">
            <div class="w-full lg:w-1/4 pr-6 mt-8 mb-4">
                <h1><a href="#" class="text-black">Tailwind CSS</a></h1>
                <div class="mb-4"><a href="#" class="text-gray-500">@tailwindcss</a></div>
                <div class="mb-4">
                    A utitlity-first CSS framework for rapid UI development. By <a href="#">@adamwathan</a>, <a href="#">@reinink</a>,
                    <a href="#">@davidhemphill</a>, and <a href="#">@steveschoger</a>.
                </div>

                <div class="mb-2"><i class="fa fa-link fa-lg text-gray-600 mr-1"></i><a href="#">tailwindcss.com</a></div>
                <div class="mb-4"><i class="fa fa-calendar fa-lg text-gray-600 mr-1"></i><a href="#">Joined August 2017</a></div>

                <div class="mb-4">
                    <button class="bg-teal-400 hover:bg-teal-600 text-white font-medium py-2 px-4 rounded-full w-full h-10">Tweet to Tailwind CSS</button>
                </div>

                <div class="mb-4"><i class="fa fa-user fa-lg text-gray-600 mr-1"></i><a href="#">27 Followers you know</a></div>

                <div class="mb-4">
                    <a href="#"><img src="/img/twitter/follower01.jpg" alt="avatar" class="rounded-full h-12 w-12 inline-block"></a>
                    <a href="#"><img src="/img/twitter/follower02.jpg" alt="avatar" class="rounded-full h-12 w-12 inline-block"></a>
                    <a href="#"><img src="/img/twitter/follower03.jpg" alt="avatar" class="rounded-full h-12 w-12 inline-block"></a>
                    <a href="#"><img src="/img/twitter/follower04.jpg" alt="avatar" class="rounded-full h-12 w-12 inline-block"></a>
                    <a href="#"><img src="/img/twitter/follower05.jpg" alt="avatar" class="rounded-full h-12 w-12 inline-block"></a>
                    <a href="#"><img src="/img/twitter/follower06.jpg" alt="avatar" class="rounded-full h-12 w-12 inline-block"></a>
                    <a href="#"><img src="/img/twitter/follower07.jpg" alt="avatar" class="rounded-full h-12 w-12 inline-block"></a>
                    <a href="#"><img src="/img/twitter/follower08.jpg" alt="avatar" class="rounded-full h-12 w-12 inline-block"></a>
                    <a href="#"><img src="/img/twitter/follower09.jpg" alt="avatar" class="rounded-full h-12 w-12 inline-block"></a>
                    <a href="#"><img src="/img/twitter/follower10.jpg" alt="avatar" class="rounded-full h-12 w-12 inline-block"></a>
                </div>

                <div class="mb-4"><i class="fa fa-picture-o fa-lg text-gray-600 mr-1"><a href="#">Photos and videos</a></i></div>

                <div class="mb-4">
                    <a href="#"><img src="/img/twitter/photo2.jpg" alt="photo" class="h-20 w-20 mr-1 mb-1 inline-block"></a>
                    <a href="#"><img src="/img/twitter/photo1.jpg" alt="photo" class="h-20 w-20 mr-1 mb-1 inline-block"></a>
                    <a href="#"><img src="/img/twitter/photo3.jpg" alt="photo" class="h-20 w-20 mr-1 mb-1 inline-block"></a>
                    <a href="#"><img src="/img/twitter/photo4.jpg" alt="photo" class="h-20 w-20 mr-1 mb-1 inline-block"></a>
                    <a href="#"><img src="/img/twitter/photo5.jpg" alt="photo" class="h-20 w-20 mr-1 mb-1 inline-block"></a>
                </div>
            </div>

            <div class="w-full lg:w-1/2 bg-white mb-4">
                <div class="p-3 text-lg font-bold border-b border-solid border-gray-200">
                    <a href="#" class="text-black mr-6">Tweets</a>
                    <a href="#" class="mr-6">Tweets &amp; Replies</a>
                    <a href="#">Media</a>
                </div>

                <div class="flex border-b border-solid border-gray-200">
                    <div class="w-1/8 text-right pl-3 pt-3">
                        <div><i class="fa fa-thumb-tack text-teal-300 mr-2"></i></div>
                        <div><a href="#"><img src="/img/twitter/avatar_tailwind.jpg" alt="avatar" class="rounded-full h-12 w-12 mr-2"></a></div>
                    </div>
                    <div class="w-7/8 p-3 pl-0 w-full">
                        <div class="text-xs text-gray-500">Pinned Tweet</div>
                        <div class="flex justify-between">
                            <div>
                                <span class="font-bold"><a href="#" class="text-black">Tailwind CSS</a></span>
                                <span class="text-gray-600">@tailwindcss</span>
                                <span class="text-gray-600">&middot;</span>
                                <span class="text-gray-600">15 Dec 2017</span>
                            </div>
                            <div>
                                <a href="#" class="text-gray-600 hover:text-teal-300"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>

                        <div class="mb-4">
                            <p class="mb-6">★Tailwind CSS v0.4.0 is out!</p>
                            <p class="mb-6">Makes `apply` more useful when using !important utilities, and includes an improved default color palette:</p>
                            <p class="mb-4"><a href="#">github.com/tailwindcss/ta...</a></p>
                            <p><a href="#"><img src="/img/twitter/tweet1.jpg" alt="tweet image" class="border border-solid border-gray-200 rounded-sm"></a></p>
                        </div>

                        <div class="pb-2">
                            <span class="mr-8"><a href="#" class="text-gray-600 hover:no-underline hover:text-blue-500"><i class="fa fa-comment fa-lg mr-2"></i>9</a></span>
                            <span class="mr-8"><a href="#" class="text-gray-600 hover:no-underline hover:text-green-500"><i class="fa fa-retweet fa-lg mr-2"></i>29</a></span>
                            <span class="mr-8"><a href="#" class="text-gray-600 hover:no-underline hover:text-red-500"><i class="fa fa-heart fa-lg mr-2"></i>135</a></span>
                            <span class="mr-8"><a href="#" class="text-gray-600 hover:no-underline hover:text-teal-500"><i class="fa fa-envelope fa-lg mr-2"></i>9</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/4 pl-4">
                <div class="bg-white p-3 mb-3">
                    <div>
                        <span class="text-lg font-bold">Who to follow</span>
                        <span>&middot;</span>
                        <span><a href="#" class="text-xs">Refresh</a></span>
                        <span>&middot;</span>
                        <span><a href="#" class="text-xs">View All</a></span>
                    </div>

                    <div class="flex border-b border-solid border-gray-light">
                        <div class="py-2">
                            <a href="#"><img src="/img/twitter/follow1.jpg" alt="follow1" class="rounded-full h-12 w-12"></a>
                        </div>
                        <div class="pl-2 py-2 w-full">
                            <div class="flex justify-between mb-1">
                                <div>
                                    <a href="#" class="text-black font-bold">Nuxt.js</a> <a href="#" class="text-gray-600">@nuxt_js</a>
                                </div>

                                <div>
                                    <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                            <div>
                                <button class="bg-transparent text-xs hover:bg-teal-400 text-teal-400 font-semibold hover:text-white py-2 px-6 border border-teal-400
                                hover:border-transparent rounded-full">Follow</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex border-b border-solid border-gray-light">
                        <div class="py-2">
                            <a href="#"><img src="/img/twitter/follow2.jpg" alt="follow1" class="rounded-full h-12 w-12"></a>
                        </div>
                        <div class="pl-2 py-2 w-full">
                            <div class="flex justify-between mb-1">
                                <div>
                                    <a href="#" class="text-black font-bold">Laracon EU</a> <a href="#" class="text-gray-600">@LaraconEU</a>
                                </div>

                                <div>
                                    <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                            <div>
                                <button class="bg-transparent text-xs hover:bg-teal-400 text-teal-400 font-semibold hover:text-white py-2 px-6 border border-teal-400
                                hover:border-transparent rounded-full">Follow</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex border-b border-solid border-gray-light">
                        <div class="py-2">
                            <a href="#"><img src="/img/twitter/follow3.jpg" alt="follow1" class="rounded-full h-12 w-12"></a>
                        </div>
                        <div class="pl-2 py-2 w-full">
                            <div class="flex justify-between mb-1">
                                <div>
                                    <a href="#" class="text-black font-bold">Laracon US</a> <a href="#" class="text-gray-600">@LaraconUS</a>
                                </div>

                                <div>
                                    <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                            <div>
                                <button class="bg-transparent text-xs hover:bg-teal-400 text-teal-400 font-semibold hover:text-white py-2 px-6 border border-teal-400
                                hover:border-transparent rounded-full">Follow</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex border-b border-solid border-gray-light">
                        <div class="py-4">
                            <a href="#"><img src="/img/twitter/outlook.png" alt="follow1" class="rounded w-6 h-6"></a>
                        </div>
                        <div class="pl-2 py-2 w-full">
                            <div class="flex justify-between">
                                <div>
                                    <a href="#" class="font-bold text-black">Find people you know</a>
                                </div>
                            </div>
                            <div class="text-xs">
                                Import your contacts from Outlook
                            </div>
                        </div>
                    </div>

                    <div class="pt-2">
                        <a href="#" class="text-xs">Connect other address book</a>
                    </div>

                </div>

                <div class="bg-white p-3 mb-3">
                    <div>
                        <span class="text-lg font-bold">Trends for you</span>
                        <span>&middot;</span>
                        <span><a href="#" class="text-xs">Change</a></span>
                    </div>
                    <div class="mb-3 leading-tight">
                        <div><a href="#" class="font-bold">Happy New Year</a></div>
                        <div><a class="text-gray-500 text-xs">645K Tweets</a></div>
                    </div>
                    <div class="mb-3 leading-tight">
                        <div><a href="#" class="font-bold">Happy 2018</a></div>
                        <div><a class="text-gray-500 text-xs">NYE 2018 Celebrations</a></div>
                    </div>
                    <div class="mb-3 leading-tight">
                        <div><a href="#" class="font-bold">#ByeBye2017</a></div>
                        <div><a class="text-gray-500 text-xs">21.7K Tweets</a></div>
                    </div>
                    <div class="mb-3 leading-tight">
                        <div><a href="#" class="font-bold">Happy New Year</a></div>
                        <div><a class="text-gray-500 text-xs">645K Tweets</a></div>
                    </div>
                    <div class="mb-3 leading-tight">
                        <div><a href="#" class="font-bold">Happy New Year</a></div>
                        <div><a class="text-gray-500 text-xs">645K Tweets</a></div>
                    </div>
                    <div class="mb-3 leading-tight">
                        <div><a href="#" class="font-bold">Happy New Year</a></div>
                        <div><a class="text-gray-500 text-xs">645K Tweets</a></div>
                    </div>
                </div>

                <div class="mb-3 text-xs">
                    <span class="mr-2"><a href="#" class="text-gray-600">&copy; 2018 Twitter</a></span>
                    <span class="mr-2"><a href="#" class="text-gray-600">About</a></span>
                    <span class="mr-2"><a href="#" class="text-gray-600">Help Center</a></span>
                    <span class="mr-2"><a href="#" class="text-gray-600">Terms</a></span>
                    <span class="mr-2"><a href="#" class="text-gray-600">Privacy policy</a></span>
                    <span class="mr-2"><a href="#" class="text-gray-600">Cookies</a></span>
                    <span class="mr-2"><a href="#" class="text-gray-600">Ads info</a></span>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://use.fontawesome.com/ed2c84e67c.js" defer></script>
    </body>
</html>
