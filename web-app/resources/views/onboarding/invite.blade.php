@extends('layouts.onboarding')

@section('content')
    <div class="onboarding">
        <h1 class="text-2xl font-bold mb-10">
            Create a team and invite your colleagues 🚀
        </h1>
        <div class="space-y-5">
            <section class="flex gap-5">
                @foreach($teams as $team)
                    <div class="h-44 w-full max-w-sm bg-gray-100 rounded hover:bg-gray-300">
                        <div class="p-10">
                            <h3 class="text-xl font-bold">{{ $team->name }}</h3>
                            <p class="text-gray-700">{{ $team->description }}</p>
                        </div>
                    </div>
                @endforeach
                <div class="flex h-44 w-full max-w-sm bg-gray-100 rounded hover:bg-gray-300 cursor-pointer" onclick="openModalWindow(this)">
                    <div class="m-auto">
                        <div>
                            <button class="text-gray-600 text-lg">Create new team</button>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="text-xl font-medium">Invite your colleagues</h2>
                <form class="w-full space-y-10" method="POST" action="{{ route('invite.store') }}">
                    @csrf
                    <input type="text" name="emails" placeholder="Write emails of your colleagues for delimiter use - , " class="w-full h-15 px-5 w-full font-light py-4 outline-none rounded bg-gray-100">

                    <button class="px-10 py-4 bg-black text-white rounded">
                        Send invitation
                    </button>
                </form>
                <div class="grid grid-cols-1 md:grid-cols-2 md:grid-cols-3 gap-4 mt-10">
                    @foreach($invitations as $invitation)
                        <div class="p-4 bg-gray-100 text-black font-semibold">{{ $invitation->email }}</div>
                    @endforeach
                </div>

            </section>
        </div>
    </div>

    <div class="fixed z-10 inset-0 overflow-y-auto hidden" id="createTeam" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!--
              Background overlay, show/hide based on modal state.

              Entering: "ease-out duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <!--
              Modal panel, show/hide based on modal state.

              Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div>
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-gray-100 sm:mx-0 sm:h-10 sm:w-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 my-5" id="modal-title">
                                Create new an account
                            </h3>
                            <form class="mt-2 space-y-4" action="{{ route('team.store') }}" method="POST">
                                @csrf
                                <input type="text" name="name" placeholder="Name of team" class="w-full h-15 px-5 w-full font-light py-4 outline-none rounded bg-gray-100">

                                <input type="text" name="description" placeholder="Description" class="w-full h-15 px-5 w-full font-light py-4 outline-none rounded bg-gray-100">

                                <button type="submit" name="submit" class="bg-black text-white px-10 py-3 w-full rounded">Create new team</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button onclick="closeModal()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        modal = document.querySelector('#createTeam');

        function openModalWindow(value) {
            modal.classList.remove('hidden')
        }

        function closeModal() {
            modal.classList.add('hidden')
        }
    </script>
@endsection
