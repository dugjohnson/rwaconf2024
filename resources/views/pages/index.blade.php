<x-layouts.guest>
    <section class="bg-white shadow-lg rounded-lg p-8 w-full max-w-4xl">
        <div>

            <h2 class="text-3xl font-bold text-pink-600 mb-4">Registration is now open!</h2>
            @if((Carbon\Carbon::now()<= Carbon\Carbon::create(2024,12,9,0,0,0,'America/Chicago')))
                <h3 class="text-2xl font-bold text-pink-600 mb-4">Cyber Sale Registration December 2 - December 8</h3>
            @elseif((Carbon\Carbon::now()<= Carbon\Carbon::create(2025,2,15,0,0,0,'America/Chicago')))
                <h3 class="text-2xl font-bold text-pink-600 mb-4">Early Bird Registration December 9 - February 14</h3>
            @elseif((Carbon\Carbon::now()<= Carbon\Carbon::create(2025,4,3,0,0,0,'America/Chicago')))
                <h3 class="text-2xl font-bold text-pink-600 mb-4">Regular Registration February 15 - April 2</h3>
            @else
                <h3 class="text-2xl font-bold text-pink-600 mb-4">Late Registration April 3 - Conference Dates</h3>
            @endif

            <div x-data="{open:false}">
                <button class="bg-blue-300 hover:bg-blue-800 focus:outline-none  mb-8
            text-slate font-semibold h-12 px-6 rounded-lg flex items-center justify-center
                    sm:w-auto hover:text-slate-100"
                        x-on:click="open = ! open">Registration ticket sale prices
                </button>
                <div class="bg-slate" x-show="open">
                    <div class="mb-2">
                        <div class="mb-2">
                            <h3 class="text-2xl font-bold text-pink-600 ">Cyber Sale Registration December 2 - December
                                8</h3>
                            <ul>
                                <li>Member: $399 *</li>
                                <li>Non Member:$499 *</li>
                                <li>Industry Professional: $299 *</li>
                            </ul>
                        </div>
                        <div class="mb-2">
                            <h3 class="text-2xl font-bold text-pink-600 ">Early Bird Registration December 9 - February
                                14</h3>
                            <ul>
                                <li>Member: $450 *</li>
                                <li>Non Member:$399 *</li>
                                <li>Industry Professional: $350 *</li>
                            </ul>
                        </div>
                        <div class="mb-2">
                            <h3 class="text-2xl font-bold text-pink-600 ">Regular Registration February 15 - April
                                2</h3>
                            <ul>
                                <li>Member: $499 *</li>
                                <li>Non Member:$599 *</li>
                                <li>Industry Professional: $399 *</li>
                            </ul>
                        </div>
                        <div class="mb-2">
                            <h3 class="text-2xl font-bold text-pink-600 ">Late Registration April 3 - Conference
                                Dates</h3>
                            <ul>
                                <li>Member: $549 *</li>
                                <li>Non Member:$649 *</li>
                                <li>Industry Professional: $449 *</li>
                            </ul>
                        </div>
                        <div class="py-4"><p>* A payment plan is available This option includes a $26 convenience
                                fee.</p></div>

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
                ;
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
