<div class="justify-center flex items-center h-screen">
    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-700 w-[40%]">
        <div class="p-4 sm:p-7">
          <div class="flex flex-col">
             <div class="w-full flex justify-center p-5">
                <img src="{{ asset('images/logo.png') }}" alt="" class="w-[50%]">
             </div>
            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Login</h1>
            <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">Yuk, Login dan Temukan Kost Terbaik di Telkom!</p>
          </div>
            <!-- Form -->
            <form class="py-10" wire:submit.prevent="login">
              @if (session('error'))
              <div class="my-2 bg-red-500 text-sm text-white rounded-lg p-4" role="alert" tabindex="-1" aria-labelledby="hs-solid-color-danger-label">
                {{ session('error') }}
              </div>
              @endif
              <div class="grid gap-y-4">
                <!-- Form Group -->
                <div>
                  <label for="email" class="block text-sm mb-2 dark:text-white">Email</label>
                  <div class="relative">
                    <input type="email" id="email" wire:model="email" class="border py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-primary-200 focus:ring-primary-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 @error('email')
                      border-red-600
                    @enderror" aria-describedby="email-error">
                  </div>
                  @error('email')
                  <p class="text-xs text-red-600 mt-2" id="email-error">{{ $message }}</p>
                  @enderror
                </div>
                <!-- End Form Group -->
      
                <!-- Form Group -->
                <div>
                  <div class="flex justify-between items-center">
                    <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                  </div>
                  <div class="relative">
                    <input type="password" id="password" wire:model="password" class="border py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-primary-200 focus:ring-primary-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 @error('email')
                      border-red-600
                    @enderror" aria-describedby="password-error">
                  </div>
                  @error('password')
                  <p class="text-xs text-red-600 mt-2" id="password-error">{{ $message }}</p>
                  @enderror
                </div>
                <!-- End Form Group -->
                <button type="submit" class="w-full mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium border border-transparent bg-primary-200 text-white hover:bg-primary-300 rounded-full focus:outline-none focus:bg-primary-300 disabled:opacity-50 disabled:pointer-events-none">Sign in</button>
              </div>
            </form>
            <!-- End Form -->
          </div>
        </div>
      </div>
</div>
