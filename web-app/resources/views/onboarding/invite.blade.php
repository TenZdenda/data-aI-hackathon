@extends('layouts.onboarding')

@section('content')
    <div class="onboarding">
        <h1 class="text-2xl font-bold mb-10">
            Create a team and invite your colleagues 🚀
        </h1>
        <div class="space-y-5">
            <section>
                <div class="flex h-44 w-full max-w-sm bg-gray-100 rounded">
                    <div class="m-auto">
                        <form action="">
                            <button class="text-gray-600 text-lg">Create new team</button>
                        </form>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="text-xl font-medium">Invite your colleagues</h2>
                <form action="" class="w-full space-y-10">
                    <input type="text" name="emails" placeholder="Write emails of your colleagues for delimiter use - , " class="w-full h-15 px-5 w-full font-light py-4 outline-none rounded bg-gray-100">

                    <button class="px-10 py-4 bg-black text-white rounded">
                        Send invitation
                    </button>
                </form>

            </section>
        </div>
    </div>
@endsection
