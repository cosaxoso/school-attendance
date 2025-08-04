<div>
        <x-slot name="heading">Check In Page</x-slot>

        <h1>Hello from the Check in page.</h1>
        <div class="flex flex-col space-y-6">
            <p id='clock' class='text-6xl mt-6 text-center font-bold'>
                <script>
                    function updateClock() {
                        const now = new Date();
                        const formattedTime = now.toLocaleTimeString();
                        document.getElementById('clock').textContent = `${formattedTime}`;
                    }
            
                    setInterval(updateClock, 1000);
                    updateClock(); 
                </script>
            </p>
            <p id='date' class='text-2xl text-center'>
                <script>
                    function updateDate() {
                        const now = new Date();
                        const formattedDate = now.toDateString();
                        document.getElementById('date').textContent = `${formattedDate}`;
                    }
            
                    setInterval(updateDate, 20000);
                    updateDate(); 
                </script>
            </p>
            @if ($alreadyCheckedin == true)
                <a class="text-center bg-[#5b5340]/75 rounded-md mx-80 px-3 py-2 text-sm font-semibold text-white/75 shadow-xs">
                    Check
                </a>
            @else
                <x-reg-button wire:navigate wire:click="store" varient="primary" class="bg-[#5b5340]">
                    Check-in
                </x-reg-button>
            @endif
        </div>
    
</div>