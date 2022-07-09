<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 rounded-xl p-10">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form action="/register" method="post" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label class="mt-3 block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                        name
                    </label>
                    <input class="border rounded border-gray-400 p-2 w-full" name="name" value="{{ old('name') }}"
                        id="name" required type="text">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="mt-3 block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                        username
                    </label>
                    <input class="border rounded border-gray-400 p-2 w-full" name="username"
                        value="{{ old('username') }}" id="username" required type="text">
                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="mt-3 block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                        email
                    </label>
                    <input class="border rounded border-gray-400 p-2 w-full" name="email" value="{{ old('email') }}"
                        id="email" required type="text">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="mt-3 block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                        password
                    </label>
                    <input class="border rounded border-gray-400 p-2 w-full" name="password" id="password" required
                        type="password">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <button class="mt-3 bg-blue-400 text-whit rounded py-2 px-4 hover:bg-blue-500"
                    type="submit">Submit</button>
            </form>

        </main>
    </section>
</x-layout>
