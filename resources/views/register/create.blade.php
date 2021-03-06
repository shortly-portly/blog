<x-layout>
  <section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
      <h1 class="text-center font-bold text-xl">Register</h1>
      <form method="POST" action="/register" class="mt-10">
        @csrf
        <x-text-input name="name"></x-text-input>
        <x-text-input name="username"></x-text-input>
        <x-text-input name="email"></x-text-input>
        <x-password-input name="password"></x-password-input>
        <x-button>Register</x-button>
      </form>
    </main>
  </section>
</x-layout>
