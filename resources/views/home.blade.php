@extends('layouts.app')

@section('content')
<div class="w-full bg-gray-100 p-6 pt-12">
    <div class="flex items-center gap-12 max-w-4xl w-full justify-center mx-auto">
        <div class="w-1/2">
            <img src="{{ asset('cars\1.jpg') }}" alt="" class="w-full h-auto rounded-xl shadow-2xl max-w-sm shadow-sm transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
        </div>
        <div class="w-1/2">
            <h1 class="text-8xl font-black text-gray-900 tracking-wide uppercase">
                Cars
            </h1>
        </div>
    </div>
    <div>
        <h1 class="text-3xl pt-15 pl-30 font-bold">
            Sedans
        </h1>
    </div>
    <div class="flex items-center gap-12 max-w-4xl w-full justify-center mx-auto">
        <div class="w-1/3 bg-gray-100 p-4 rounded-lg max-w-sm shadow-sm transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <img src="{{ asset('cars\10.jpg') }}" alt="BMW M3" class="w-100 h-auto rounded-xl">
            <div class="text-2xl">Marka: Hundai</div>
            <div class="text-2xl">Model: Elantra</div>
            <div class="text-2xl">Color: Gray</div>
            <div class="text-2xl">Year: 2025</div>
            <div class="text-2xl">Country: USA</div>
            <div class="text-2xl">Price: $40.000</div>
        </div>
        <div class="w-1/3 bg-gray-100 p-4 rounded-lg max-w-sm shadow-sm transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <img src="{{ asset('cars\9.jpg') }}" alt="BMW M3" class="w-100 h-auto rounded-xl">
            <div class="text-2xl">Marka: Toyota</div>
            <div class="text-2xl">Model: Camry</div>
            <div class="text-2xl">Color: Gray</div>
            <div class="text-2xl">Year: 2025</div>
            <div class="text-2xl">Country: German</div>
            <div class="text-2xl">Price: $40.000</div>
        </div>
        <div class="w-1/3 bg-gray-100 p-4 rounded-lg max-w-sm shadow-sm transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <img src="{{ asset('cars\8.jpg') }}" alt="BMW M3" class="w-100 h-auto rounded-xl">
            <div class="text-2xl">Marka: Lexus</div>
            <div class="text-2xl">Model: IS 500</div>
            <div class="text-2xl">Color: Gray</div>
            <div class="text-2xl">Year: 2023</div>
            <div class="text-2xl">Country: UK</div>
            <div class="text-2xl">Price: $50.000</div>
        </div>       
    </div>
    <div>
        <h1 class="text-3xl pt-15 pl-30 font-bold">
            Pikaps
        </h1>
    </div>
    <div class="flex items-center gap-12 max-w-4xl w-full justify-center mx-auto">
        <div class="w-1/3 bg-gray-100 p-4 rounded-lg max-w-sm shadow-sm transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <img src="{{ asset('cars\3.jpg') }}" alt="BMW M3" class="w-100 h-auto rounded-xl">
            <div class="text-2xl">Marka: Ford</div>
            <div class="text-2xl">Model: F-150</div>
            <div class="text-2xl">Color: White</div>
            <div class="text-2xl">Year: 2023</div>
            <div class="text-2xl">Country0: China</div>
            <div class="text-2xl">Price: $65.000</div>
        </div>
        <div class="w-1/3 bg-gray-100 p-4 rounded-lg max-w-sm shadow-sm transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <img src="{{ asset('cars\4.jpg') }}" alt="BMW M3" class="w-100 h-auto rounded-xl">
            <div class="text-2xl">Marka: RAM</div>
            <div class="text-2xl">Model: 1500 TRX</div>
            <div class="text-2xl">Color: Black</div>
            <div class="text-2xl">Year: 2025</div>
            <div class="text-2xl">Country: USA</div>
            <div class="text-2xl">Price: $40.000</div>
        </div>
        <div class="w-1/3 bg-gray-100 p-4 rounded-lg max-w-sm shadow-sm transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <img src="{{ asset('cars\2.jpg') }}" alt="BMW M3" class="w-100 h-auto rounded-xl">
            <div class="text-2xl">Marka: Toyota</div>
            <div class="text-2xl">Model: Hilux</div>
            <div class="text-2xl">Color: Grasy</div>
            <div class="text-2xl">Year: 2024</div>
            <div class="text-2xl">Country: German</div>
            <div class="text-2xl">Price: $40.000</div>
        </div>       
    </div>
    <div>
        <h1 class="text-3xl pt-15 pl-30 font-bold">
            Jeeps
        </h1>
    </div>
    <div class="flex items-center gap-12 max-w-4xl w-full justify-center mx-auto">
        <div class="w-1/3 bg-gray-100 p-4 rounded-lg max-w-sm shadow-sm transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <img src="{{ asset('cars\5.jpg') }}" alt="BMW M3" class="w-100 h-auto rounded-xl">
            <div class="text-2xl">Marka: Jeep</div>
            <div class="text-2xl">Model: Grand Cherokee L</div>
            <div class="text-2xl">Color: Black</div>
            <div class="text-2xl">Year: 2022</div>
            <div class="text-2xl">Country: UK</div>
            <div class="text-2xl">Price: $60.000</div>
        </div>
        <div class="w-1/3 bg-gray-100 p-4 rounded-lg max-w-sm shadow-sm transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <img src="{{ asset('cars\6.jpg') }}" alt="BMW M3" class="w-100 h-auto rounded-xl">
            <div class="text-2xl">Marka: Jeep</div>
            <div class="text-2xl">Model: Grand Wagoneer L</div>
            <div class="text-2xl">Color: White</div>
            <div class="text-2xl">Year: 2023</div>
            <div class="text-2xl">Country: German</div>
            <div class="text-2xl">Price: $100.000</div>
        </div>
        <div class="w-1/3 bg-gray-100 p-4 rounded-lg max-w-sm shadow-sm transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <img src="{{ asset('cars\7.jpg') }}" alt="BMW M3" class="w-100 h-auto rounded-xl">
            <div class="text-2xl">Marka: Jeep</div>
            <div class="text-2xl">Model: Renegade</div>
            <div class="text-2xl">Color: Gray</div>
            <div class="text-2xl">Year: 2020</div>
            <div class="text-2xl">Country: China</div>
            <div class="text-2xl">Price: $30.000</div>
        </div>       
    </div>
    
</div>

@endsection