<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Messages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="space-y-10 divide-y divide-gray-900/10">
                <div class="grid grid-cols-1 gap-x-8 gap-y-8 md:grid-cols-3">

                    <form action="{{ route('messages.store') }}" method="POST"
                        class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">
                        @csrf

                        <x-validation-errors-fancy />

                        {{-- @if( session('flash.banner.fancy') != null )
                            <x-banner-fancy />
                        @endif --}}

                        <div class="px-4 py-6 sm:p-8">
                            <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                <div class="sm:col-span-4">
                                    <label for="subject"
                                        class="block text-sm font-medium leading-6 text-gray-900">Subject</label>
                                    <div class="mt-2">
                                        <div
                                            class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            <span
                                                class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                                            <input type="text" name="subject" value="{{old('subject')}}" id="subject"
                                                class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                placeholder="*please write the subject of the message">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <label for="body"
                                        class="block text-sm font-medium leading-6 text-gray-900">Message</label>
                                    <div class="mt-2">
                                        <textarea 
                                                id="body" 
                                                name="body" 
                                                rows="3"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        >
                                        {{old('body')}}
                                        </textarea>
                                    </div>
                                    <p class="mt-3 text-sm leading-6 text-gray-600">*please write the message</p>
                                </div>

                                <div class="sm:col-span-4">
                                    <label for="to_user_id"
                                        class="block text-sm font-medium leading-6 text-gray-900">To</label>
                                    <div class="mt-2">
                                        <select id="to_user_id" name="to_user_id" autocomplete="to_user_name"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            @foreach ($users as $user)
                                                <option  @selected(old('to_user_id') == $user->id) value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div
                            class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                            <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</x-app-layout>
