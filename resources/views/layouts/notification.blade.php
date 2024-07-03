@if (session('success'))
    <div class="bg-teal-100 w-1/4 border-t-4 object-right fixed right-0 border-teal-500 rounded-b text-teal-900 px-4 py-3 z-50 shadow-md pointer-events-none"
        id="notification-pop-up" role="alert">
        <div class="flex items-start">
            <div>
                <svg class="mr-4 h-6 w-6 fill-current mt-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
            </div>
            <div>
                <p class="font-bold">Success</p>
                <p class="text-sm">{{ session('success') }}</p>
            </div>
        </div>
    </div>
@endif

@if (session('error'))
    <div class="bg-red-400 w-1/4 border-t-4 object-right fixed right-0 border-red-500 rounded-b text-teal-900 px-4 py-3 z-50 shadow-md pointer-events-none"
        id="notification-pop-up" role="alert">
        <div class="flex text-white">
            <div>
                <svg class="mr-4 h-6 w-6 fill-current mt-2" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
            </div>
            <div class="">
                <p class="font-bold">Failed</p>
                <p class="text-sm">{{ session('error') }}</p>
            </div>
        </div>
    </div>
@endif

<script src="{{ asset('js/notification.js') }}"></script>
