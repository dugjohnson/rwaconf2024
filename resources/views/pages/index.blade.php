<x-layouts.guest>
    <section class="bg-white shadow-lg rounded-lg p-8 w-full max-w-4xl">
        @if((Carbon\Carbon::now()>= Carbon\Carbon::create(2024,12,2,0,0,0,'America/Chicago')))
            <div>
                <h2 class="text-3xl font-bold text-pink-600 mb-4">Registration is Open!</h2>
                <div>
                    <h3 class="text-2xl font-bold text-pink-600 mb-4">Cyber Sale December 2-8</h3>
                    <ul>
                        <li>Member: $399 *</li>
                        <li>Non Member:$499 *</li>
                        <li>Industry Professional: $299 *</li>
                    </ul>
                </div>
                <div class="py-4"><p>* A payment plan is available This option includes a $26 convenience fee.</p></div>
{{--                <p>You will be able to buy a ticket for the conference and indicate your preferences for meals. You will--}}
{{--                    be able to pay for your ticket(s) in the next few days, but you can sign up for them now.--}}
{{--                    Your registration will not be complete until payment is received.</p>--}}
                <p><a href="https://conference.rwaconference.org/e/2/romance-writers-of-america-conference-2025"
                      class="bg-blue-300 hover:bg-blue-800focus:outline-none text-2xl text-slate-800
            text-slate font-semibold h-12 px-6 rounded-lg flex items-center justify-center
                    sm:w-auto dark:bg-sky-500 dark:highlight-white/20 dark:hover:bg-sky-400">Proceed to the
                        conference registration area</a></p>
                <p class="text-gray-700 mb-6">Get ready to immerse yourself in the world of romance writing. Stay tuned
                    for more details about speakers, workshops, and special events.</p>
            </div>
        @else
            <div class="text-center">
                <p class="text-gray-700 mb-6">Get ready to immerse yourself in the world of romance writing. Stay tuned
                    for more details about speakers, workshops, and special events.</p>


                <h2 class="text-3xl mt-4 font-extrabold text-pink-600 mb-4"><strong>Cyber Sale</strong> December 2 - 8
                    Big
                    Savings on Registration for a career changing event</h2>
                <h3 class="text-xl font-bold text-pink-800 mb-4">Countdown to Savings</h3>
                <div id="countdown" class="countdown"></div>
            </div>
        @endif

        <!--        <form class="flex flex-col items-center">-->
        <!--            <input type="email" placeholder="Enter your email" class="w-full px-4 py-2 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-600">-->
        <!--            <button class="w-full bg-pink-600 text-white py-2 rounded-lg hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-600">Notify Me</button>-->
        <!--        </form>-->
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
