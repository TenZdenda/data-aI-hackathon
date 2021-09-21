@extends('layouts.admin')

@section('content')
    <div class="space-y-10 px-10">
        <header class="flex justify-between">
            <h1 class="text-2xl font-bold">Dashboard</h1>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
            <div class="flex p-5 h-56 rounded bg-gray-100">
                <div class="m-auto text-center">
                    <p class="font-bold text-6xl">3.6</p>
                    <p class="text-gray-500 mt-5">Score of positive tweets</p>
                </div>
            </div>
            <div class="flex p-5 h-56 rounded bg-gray-100">
                <div class="m-auto text-center">
                    <p class="font-bold text-6xl">10.000<span class="text-sm">$</span></p>
                    <p class="text-gray-500 mt-5">Spend on your ads</p>
                </div>
            </div>
        </div>
    </div>
@endsection
