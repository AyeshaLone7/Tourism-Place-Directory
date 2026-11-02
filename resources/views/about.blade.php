@extends('layouts.app')

@section('content')

<!-- 1. Hero Banner with Glassmorphism Overlay -->
<div class="relative h-[65vh] flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('images/valleys/hunza-valley.jpeg') }}');">
    <div class="absolute inset-0 bg-slate-950/60 backdrop-blur-[2px]"></div>
    <div class="relative z-10 text-center max-w-4xl mx-auto px-6">
        <span class="text-amber-400 font-serif italic text-xl tracking-widest uppercase block mb-3">Redefining Tourism in Pakistan</span>
        <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 tracking-tight drop-shadow-lg">About DiscoverPK</h1>
        <p class="text-slate-200 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
            Your premier gateway to exploring the breathtaking landscapes, ancient civilizations, and rich cultural tapestry of Pakistan.
        </p>
    </div>
</div>

<!-- 2. Our Mission & Story Section (Text + Image Side by Side) -->
<div class="max-w-7xl mx-auto px-6 py-20">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
        <!-- Story Text -->
        <div class="space-y-6">
            <span class="bg-amber-500/10 text-amber-400 border border-amber-500/30 text-xs font-semibold px-4 py-1.5 rounded-full inline-block uppercase tracking-wider">Our Story</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white leading-snug">Promoting Pakistan's Beauty to the Entire World</h2>
            <p class="text-slate-300 leading-relaxed">
                <span class="text-amber-400 font-semibold">DiscoverPK</span> was founded with a single passionate vision: to showcase the true, untouched beauty of Pakistan. From the snow-capped summits of the Karakoram range to the serene turquoise waters of Arabian beaches, Pakistan holds some of the world's finest wonders.
            </p>
            <p class="text-slate-400 leading-relaxed">
                We bridge the gap between avid travelers and authentic local experiences. Whether you are seeking high-altitude trekking in Gilgit-Baltistan, historical heritage tours in Mughal Lahore, or tranquil coastal retreats along the Makran coast, DiscoverPK provides curated information, estimated budgets, and travel guidelines to make your journey unforgettable.
            </p>
            <div class="pt-4 border-t border-slate-800 flex gap-8">
                <div>
                    <h4 class="text-3xl font-extrabold text-amber-400">20+</h4>
                    <p class="text-xs text-slate-400 uppercase tracking-wider mt-1">Curated Destinations</p>
                </div>
                <div>
                    <h4 class="text-3xl font-extrabold text-amber-400">6</h4>
                    <p class="text-xs text-slate-400 uppercase tracking-wider mt-1">Travel Categories</p>
                </div>
                <div>
                    <h4 class="text-3xl font-extrabold text-amber-400">100%</h4>
                    <p class="text-xs text-slate-400 uppercase tracking-wider mt-1">Verified Information</p>
                </div>
            </div>
        </div>

        <!-- Story Image Card -->
        <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-amber-500 to-amber-700 rounded-3xl blur opacity-30 group-hover:opacity-60 transition duration-500"></div>
            <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-slate-800">
                <img src="{{ asset('images/historical/badshahi-mosque.webp') }}" alt="Historical Heritage" class="w-full h-[450px] object-cover group-hover:scale-105 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent p-8 flex flex-col justify-end">
                    <span class="text-amber-400 font-medium text-sm">Rich Heritage</span>
                    <h3 class="text-2xl font-bold text-white">Centuries of Mughal Architecture</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 3. Core Values Grid -->
<div class="bg-slate-900/60 border-y border-slate-800/80 py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-white mb-4">Why Travel With DiscoverPK?</h2>
            <p class="text-slate-400">We aim to elevate travel experiences through accuracy, luxury presentation, and sustainable tourism.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-slate-900 border border-slate-800 p-8 rounded-2xl hover:border-amber-500/50 transition duration-300">
                <div class="w-14 h-14 bg-amber-500/10 border border-amber-500/30 rounded-xl flex items-center justify-center text-2xl mb-6 text-amber-400">🧭</div>
                <h3 class="text-xl font-bold text-white mb-3">Authentic Guidance</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Accurate details regarding best visiting times, local facilities, recommended activities, and realistic budget estimations.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-slate-900 border border-slate-800 p-8 rounded-2xl hover:border-amber-500/50 transition duration-300">
                <div class="w-14 h-14 bg-amber-500/10 border border-amber-500/30 rounded-xl flex items-center justify-center text-2xl mb-6 text-amber-400">🏔️</div>
                <h3 class="text-xl font-bold text-white mb-3">Diverse Landscapes</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    From cold deserts in Skardu to lush alpine lakes in Kaghan, we cover every unique geographic climate in Pakistan.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-slate-900 border border-slate-800 p-8 rounded-2xl hover:border-amber-500/50 transition duration-300">
                <div class="w-14 h-14 bg-amber-500/10 border border-amber-500/30 rounded-xl flex items-center justify-center text-2xl mb-6 text-amber-400">🌿</div>
                <h3 class="text-xl font-bold text-white mb-3">Sustainable Tourism</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Promoting eco-friendly traveling, respecting local indigenous communities, and preserving cultural sites for future generations.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- 4. Featured Destination Highlight Banner -->
<div class="max-w-7xl mx-auto px-6 py-20">
    <div class="relative rounded-3xl overflow-hidden border border-slate-800 h-[400px] flex items-center">
        <img src="{{ asset('images/mountains/broad-peak.jpeg') }}" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/80 to-transparent"></div>
        <div class="relative z-10 p-10 md:p-16 max-w-xl">
            <span class="text-amber-400 font-semibold text-sm uppercase tracking-widest mb-2 block">World Class Peaks</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-4">Home to 5 of the World's 14 Eight-Thousanders</h2>
            <p class="text-slate-300 text-sm md:text-base leading-relaxed mb-6">
                Pakistan stands as the ultimate capital for global mountaineers and thrill-seekers. Plan your journey to K2, Nanga Parbat, and Broad Peak with our luxury directory.
            </p>
            <a href="{{ route('home') }}" class="inline-block bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold px-8 py-3 rounded-xl transition">Explore Destinations</a>
        </div>
    </div>
</div>

@endsection