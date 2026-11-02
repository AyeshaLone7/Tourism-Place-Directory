@extends('layouts.app')

@section('content')

<!-- Header Banner -->
<div class="relative py-20 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <span class="text-amber-400 font-serif italic text-lg block mb-2">We Are Here To Assist You</span>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white tracking-tight">Contact DiscoverPK</h1>
        <p class="text-slate-400 mt-3 max-w-2xl mx-auto">Have questions about luxury travel packages or custom tour itineraries? Reach out to our expert consultants.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-6 py-16">

    @if(session('success'))
        <div class="mb-10 bg-emerald-500/10 border border-emerald-500/40 text-emerald-400 px-6 py-4 rounded-2xl flex items-center justify-between">
            <span class="font-medium">✨ {{ session('success') }}</span>
        </div>
    @endif

    <div class="grid lg:grid-cols-2 gap-12 items-start">

        <!-- Left Column: Generated Office Image & Details -->
        <div class="space-y-8">
            <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-800 group">
                <img src="{{ asset('images/contact/contact-hero.jpeg') }}" alt="DiscoverPK Luxury Office" class="w-full h-[380px] object-cover group-hover:scale-105 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/30 to-transparent p-8 flex flex-col justify-end">
                    <span class="text-amber-400 text-xs font-semibold uppercase tracking-wider">Headquarters</span>
                    <h3 class="text-2xl font-bold text-white">Islamabad Executive Office</h3>
                </div>
            </div>

            <!-- Contact Information Cards -->
            <div class="grid sm:grid-cols-2 gap-6">
                <div class="bg-slate-900 border border-slate-800 p-6 rounded-2xl">
                    <div class="w-12 h-12 bg-amber-500/10 border border-amber-500/30 rounded-xl flex items-center justify-center text-xl mb-4 text-amber-400">📞</div>
                    <h4 class="text-white font-bold mb-1">Phone & WhatsApp</h4>
                    <p class="text-slate-400 text-sm">+92 (51) 111-347-268</p>
                    <p class="text-slate-400 text-sm">+92 300 1234567</p>
                </div>

                <div class="bg-slate-900 border border-slate-800 p-6 rounded-2xl">
                    <div class="w-12 h-12 bg-amber-500/10 border border-amber-500/30 rounded-xl flex items-center justify-center text-xl mb-4 text-amber-400">✉️</div>
                    <h4 class="text-white font-bold mb-1">Email Inquiry</h4>
                    <p class="text-slate-400 text-sm">support@discoverpk.com</p>
                    <p class="text-slate-400 text-sm">info@discoverpk.com</p>
                </div>

                <div class="bg-slate-900 border border-slate-800 p-6 rounded-2xl sm:col-span-2">
                    <div class="w-12 h-12 bg-amber-500/10 border border-amber-500/30 rounded-xl flex items-center justify-center text-xl mb-4 text-amber-400">📍</div>
                    <h4 class="text-white font-bold mb-1">Office Location</h4>
                    <p class="text-slate-400 text-sm leading-relaxed">Level 5, Blue Area Business Tower, Jinnah Avenue, Islamabad, Pakistan.</p>
                </div>
            </div>
        </div>

        <!-- Right Column: Glassmorphism Contact Form -->
        <div class="bg-slate-900/90 border border-slate-800 rounded-3xl p-8 sm:p-10 shadow-2xl relative">
            <h2 class="text-2xl font-bold text-white mb-2">Send Us A Message</h2>
            <p class="text-slate-400 text-sm mb-8">Fill in your details below and our luxury travel manager will get back to you within 24 hours.</p>

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-slate-300 text-xs uppercase font-semibold tracking-wider mb-2">Your Name *</label>
                    <input type="text" name="name" required placeholder="Ali Khan" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3.5 text-white placeholder-slate-600 focus:outline-none focus:border-amber-500 transition">
                </div>

                <div>
                    <label class="block text-slate-300 text-xs uppercase font-semibold tracking-wider mb-2">Email Address *</label>
                    <input type="email" name="email" required placeholder="ali@example.com" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3.5 text-white placeholder-slate-600 focus:outline-none focus:border-amber-500 transition">
                </div>

                <div>
                    <label class="block text-slate-300 text-xs uppercase font-semibold tracking-wider mb-2">Subject</label>
                    <input type="text" name="subject" placeholder="Inquiry about Hunza Valley Tour" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3.5 text-white placeholder-slate-600 focus:outline-none focus:border-amber-500 transition">
                </div>

                <div>
                    <label class="block text-slate-300 text-xs uppercase font-semibold tracking-wider mb-2">Message *</label>
                    <textarea name="message" rows="5" required placeholder="Tell us about your trip plans, group size, or questions..." class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3.5 text-white placeholder-slate-600 focus:outline-none focus:border-amber-500 transition"></textarea>
                </div>

                <button type="submit" class="w-full bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-4 rounded-xl transition shadow-xl text-center">
                    Submit Inquiry
                </button>
            </form>
        </div>

    </div>
</div>

@endsection