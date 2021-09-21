@extends('layouts.onboarding')

@section('content')
    <div class="onboarding space-y-16">
        <h1 class="text-2xl font-bold mb-10">
            Specify the keywords you want to search for 👀
        </h1>
        <div class="space-y-5">
            <section>
                <h2 class="text-xl font-medium mb-2">Specify the keywords</h2>
                <form action="{{ route('keyword.store') }}" class="w-full space-y-10" method="POST">
                    @csrf

                    <input type="text" name="keywords" placeholder="Write what hashtags, keywords or mentions you are looking for ... (use , for delimiter)" class="w-full h-15 px-5 w-full font-light py-4 outline-none rounded bg-gray-100">

                    <button type="submit" name="submit" class="px-10 max-w-xs w-full py-4 bg-black text-white rounded block mx-auto">
                        Save keywords
                    </button>
                </form>

                <div class="my-10 grid grid-cols-1 md:grid-cols-3 gap-5">
                    @foreach($keywords as $keyword)
                        <div class="bg-gray-100 text-gray-800 p-4">{{ $keyword->keyword }}</div>
                    @endforeach
                </div>


                <a href="/admin/dashborad" class="px-10 max-w-xs w-full py-4 rounded block mx-auto mt-16 text-center">
                    Go to dashboard
                </a>
            </section>
        </div>
    </div>
@endsection
