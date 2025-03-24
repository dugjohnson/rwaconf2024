<x-layouts.guest>
    <section class="bg-white shadow-lg rounded-lg p-8 w-full max-w-4xl">
        <div>
            <h2 class="text-3xl font-bold text-pink-600 mb-4">Registration is now open!</h2>
            @if((Carbon\Carbon::now()<= Carbon\Carbon::create(2024,12,9,0,0,0,'America/Chicago')))
                <h3 class="text-2xl font-bold text-pink-600 mb-4">Cyber Sale Registration December 2 - December 8</h3>
            @elseif((Carbon\Carbon::now()<= Carbon\Carbon::create(2025,2,15,0,0,0,'America/Chicago')))
                <h3 class="text-2xl font-bold text-pink-600 mb-4">Early Bird Registration December 9 - February 14</h3>
            @elseif((Carbon\Carbon::now()<= Carbon\Carbon::create(2025,5,17,0,0,0,'America/Chicago')))
                <h3 class="text-2xl font-bold text-pink-600 mb-4">Regular Registration February 15 - April 6</h3>
            @else
                <h3 class="text-2xl font-bold text-pink-600 mb-4">Late Registration April 3 - Conference Dates</h3>
            @endif
            <div x-data="{registration:false, hotel:false}" class="grid grid-cols-2 gap-4">
                <div class="w-1/2">
                    <x-registration-pricing/>
                </div>
                <div class="w-1/2">
                    <x-hotel-information/>
                </div>
            </div>

            <p><a href="https://conference.rwaconference.org/e/2/romance-writers-of-america-conference-2025"
                  class="bg-blue-300 hover:bg-blue-800 focus:outline-none  mb-8
                      text-slate font-semibold h-12 px-6 rounded-lg flex items-center justify-center
                      sm:w-auto hover:text-slate-100">Proceed to the
                    conference registration area</a></p>

            <p class="text-gray-700 mb-6">Get ready to immerse yourself in the world of romance writing.
                Stay tuned
                for more details about speakers, workshops, and special events.</p>
        </div>

    </section>

    <script>
        function getTimezoneSpecificDate(timezone) {
            const date = new Date();
            const timestamp = date.getTime();
            const localOffset = date.getTimezoneOffset() * 60000;
            const targetDate = new Date(timestamp + localOffset).toLocaleString("en-US", {timeZone: timezone});
            return new Date(targetDate);
        }

        function countdownTimer(targetDate) {
            const countdownElement = document.getElementById('countdown');
            const targetTime = new Date(targetDate).getTime();

            const updateTimer = () => {
                const now = getTimezoneSpecificDate("America/Chicago");

                const distance = targetTime - now;

                if (distance < 0) {
                    countdownElement.innerHTML = "Registration has started!";
                    clearInterval(interval);
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                countdownElement.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
            };

            updateTimer();
            const interval = setInterval(updateTimer, 1000);
        }

        countdownTimer('2024-12-02T09:00:00');
    </script>
</x-layouts.guest>
