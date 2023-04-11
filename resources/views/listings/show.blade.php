<x-app-layout>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="containers px-5 py-24 mx-auto">
            <div class="mb-12">
                <h2 class="text-whitex text-2xl font-medium text-gray-900 title-font">
                    {{ $listing->title }}
                </h2>
                <div class="md:flex-grow mr-8 mt-2 flex items-center justify-start">
                    @foreach($listing->tags as $tag)
                        <span class="textx tags inline-block mr-2 tracking-wide text-purple-500 text-xs font-medium title-font py-0.5 px-1.5 border border-purple-500 uppercase">{{ $tag->name }}</span>
                    @endforeach
                </div>
            </div>
            <div class="-my-6">
                <div class="flex flex-wrap md:flex-nowrap">
                    <div class="text-whitex content w-full md:w-3/4 pr-4 leading-relaxed text-base">
                        {!! $listing->content !!}
                    </div>
                    <div class="w-full md:w-1/4 pl-4">
                    <img src="{{ asset('storage/' . $listing->logo) }}" class="w-16 h-16 rounded-full object-cover">
                        <p class="leading-relaxed text-base text-y">
                            <strong class="text-whitex">Location: </strong>{{ $listing->location }}<br>
                            <strong class="text-whitex">Company: <br> </strong>{{ $listing->company }}<br>
                            <hr>
                            <strong class="text-whitex">Posted:</strong> <span class="text-y">{{ $listing->created_at->diffForHumans() }}</span>
                        </p>
                        @auth
                            <a href="{{ route('listings.apply', $listing->slug) }}" target="_blank" class="block text-center my-4 tracking-wide bg-white text-purple-500 text-sm font-medium title-font py-2 border border-purple-500 hover:bg-purple-500 hover:text-white uppercase">Apply Now</a>
                        @else
                            <p class="text-center my-4 text-gray-500 text-sm font-medium title-font py-2 border border-gray-300 uppercase">Please <a href="{{ route('login') }}" class="text-purple-500 hover:text-purple-700">login</a> or <a href="{{ route('register') }}" class="text-purple-500 hover:text-purple-700">register</a> to apply to this job</p>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
