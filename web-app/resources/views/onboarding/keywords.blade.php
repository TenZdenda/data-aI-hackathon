@extends('layouts.onboarding')

@section('content')
    <div class="onboarding space-y-16">
        <h1 class="text-2xl font-bold mb-10">
            Specify the keywords you want to search for 👀
        </h1>
        <div class="space-y-5">
            <section>
                <h2 class="text-xl font-medium mb-2">Specify the keywords</h2>
                <form action="" class="w-full space-y-10">
                    <input type="text" name="emails" placeholder="Write what hashtags, keywords or mentions you are looking for ..." class="w-full h-15 px-5 w-full font-light py-4 outline-none rounded bg-gray-100">

                    <button type="submit" name="submit" class="px-10 max-w-xs w-full py-4 bg-black text-white rounded block mx-auto">
                        Finish
                    </button>
                </form>

            </section>
        </div>
    </div>
@endsection
