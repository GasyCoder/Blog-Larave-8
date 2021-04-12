@extends('layouts.app')

@section('content')

    <!--Container-->
    <div class="container w-full md:max-w-3xl mx-auto pt-12">

        <div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">

            <!--Title-->
            <div class="font-sans">
                        <h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">GASY CODER AGENCY</h1>
            </div>


            <!--Post Content-->


            <!--Lead Para-->
            <p class="py-6">
                👋 Bienvenue à <a class="text-green-500 no-underline hover:underline" href="https://www.gasycoder.com" target="_blank">Gasy Coder </a> et fan du blog monochrome miminal. Nous sommes spécialistes de la personnalisation pour le Web et le mobile.
            </p>

            <p class="py-6">Nous sommes Gasy Coder Digital Agency: une équipe de développeurs, designers, chercheurs, stratèges et marketeurs. Notre jeune équipe soudée est heureuse de fournir une personnalisation numérique unique.</p>


            <blockquote class="border-l-4 border-green-500 italic my-8 pl-8 md:pl-12">Innovation Digital Solution.</blockquote>

            <p class="py-2">Clone Us :</p>
            <pre class="bg-gray-900 rounded text-white font-mono text-base p-2 md:p-4">
                <code class="break-words whitespace-pre-wrap">
                https://github.com/GasyCoder
                </code>
            </pre>
            <!--/ Post Content-->
        </div>
<br>
        <!--Divider-->
        <hr class="border-b-2 border-gray-400 mb-8 mx-4">


    @include('pages.feednews')


        <!--Author-->
        <div class="flex w-full items-center font-sans px-4 py-12">
            <img class="w-20 h-20 rounded-full mr-4" src="https://www.gasycoder.com/images/ceo.jpg" alt="Avatar of Author">
            <div class="flex-1 px-2">
                <p class="text-base font-bold text-base md:text-xl leading-none mb-2">Florent Bezara</p>
                <p class="text-gray-600 text-xs md:text-base">CEO & PDG <a class="text-green-500 no-underline hover:underline" href="https://www.gasycoder.com" target="_blank">gasycoder.com</a></p>
            </div>
            <div class="justify-end">
                <a href="https://www.gasycoder.com" target="_blank">
                <button class="bg-transparent border border-gray-500 hover:border-green-500 text-xs text-gray-500 hover:text-green-500 font-bold py-2 px-4 rounded-full">Read More</button></a>
            </div>
        </div>
        <!--/Author-->

        <!--Divider-->
        <hr class="border-b-2 border-gray-400 mb-8 mx-4">

        <!--Next & Prev Links-->
        <div class="font-sans content-center px-4 pb-12">
            <div class="text-center">
                <p><a href="/#" class="break-normal text-base md:text-sm text-green-500 font-bold no-underline hover:underline">Go Top →</a></p>
            </div>
        </div>


        <!--/Next & Prev Links-->

    </div>
    <!--/container-->

@endsection