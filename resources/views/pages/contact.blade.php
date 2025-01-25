<x-layout>
    <section class="flex flex-col justify-center items-center px-4 mt-10 mb-10">
        <div>
            <h1 class="text-4xl mb-16">
                Laat een bericht achter
            </h1>
        </div>
        <div class="flex p-4 gap-8 w-10/12 justify-around">
            <div class="w-1/3 h-auto">
                <img src="{{ asset('images/envelope.jpg') }}" alt="An envelope" class="w-full h-auto">
            </div>
            <div>
                <x-submit-ticket-form/>
                <div class="flex flex-col justify-center items-center relative mt-10 w-full gap-8 bg-gray-200 p-4 rounded-md">
                    <span>
                        Bij spoed of vragen over busvertragingen, neem contact op met onze klantenservice.
                    </span>
                    <div class="flex justify-between w-full">
                        <span class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                  <path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                                  <path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                                </svg>
                                E-mail: support@fts.nl
                            </span>
                        <span class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                  <path fill-rule="evenodd" d="m3.855 7.286 1.067-.534a1 1 0 0 0 .542-1.046l-.44-2.858A1 1 0 0 0 4.036 2H3a1 1 0 0 0-1 1v2c0 .709.082 1.4.238 2.062a9.012 9.012 0 0 0 6.7 6.7A9.024 9.024 0 0 0 11 14h2a1 1 0 0 0 1-1v-1.036a1 1 0 0 0-.848-.988l-2.858-.44a1 1 0 0 0-1.046.542l-.534 1.067a7.52 7.52 0 0 1-4.86-4.859Z" clip-rule="evenodd" />
                                </svg>
                                Telefoon: 06-12345678
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
