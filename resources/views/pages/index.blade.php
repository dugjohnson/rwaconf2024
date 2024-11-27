<x-layouts.guest>
    <section class="bg-white shadow-lg rounded-lg p-8 w-full max-w-4xl">
        <div class="hidden">
            <h2 class="text-3xl font-bold text-pink-600 mb-4">Registration is Open!</h2>
            <div x-data="{open:false}">
                <p>Before you go to the registration site
                    <button class="bg-blue-300 hover:bg-blue-800focus:outline-none
            text-slate font-semibold h-12 px-6 rounded-lg flex items-center justify-center
                    sm:w-auto dark:bg-sky-500 dark:highlight-white/20 dark:hover:bg-sky-400"
                            x-on:click="open = ! open">please click to read the refund policy
                    </button>
                </p>
                <div class="bg-slate  p-6" x-show="open">
                    <div class="ml-12">
                        <h3 class="text-gray-700 text-2xl mb-6 -indent-12"><strong>RWA2025 Conference Registration
                                Refund Policy</strong></h3>
                        <p class="text-gray-700 mb-6 -indent-12"><strong>1. Refund Deadlines and Fees:</strong><br>
                            &bull; Refund requests received between <strong>December 3rd and February 14th</strong> will
                            be
                            processed with a <strong>$100 processing fee</strong>.<br>
                            &bull; Requests received between <strong>February 15th and April 2nd</strong> will be
                            processed
                            with a <strong>$150 processing fee.</strong><br>
                            &bull; Requests received between <strong>April 3rd and June 1st</strong> will be processed
                            with a
                            <strong>$200 processing fee</strong>.<br>
                            &bull; <strong>No refunds</strong> will be granted after <strong>June 1st</strong>.</p><br>
                        <p class="text-gray-700 mb-6 -indent-12"><strong>2. Payment Plan Registrations:</strong><br>
                            &bull; The <strong>first payment is nonrefundable</strong>.</p>
                        <p class="text-gray-700 mb-6 -indent-12"><strong>3. Exceptional Circumstances:</strong><br>
                            Refunds may be issued without a cancellation fee if documentation is provided showing the
                            registrant could not attend due to:<br>
                            &bull; Serious illness or death of the registrant or an immediate family member.<br>
                            &bull; Inability to travel due to natural disasters, war, government regulations, or acts of
                            terrorism.</p>
                        <p class="text-gray-700 mb-6 -indent-12"><strong>4. Comped Registration Policy:</strong>
                            If a volunteer or committee member with a comped registration cannot attend due to serious
                            illness, death of an immediate family member, or travel restrictions (natural disasters,
                            war,
                            etc.):<br>
                            &bull; The comped registration may be applied to the following year upon submission of
                            written
                            proof.<br>
                            &bull; The volunteer or committee member must pay the applicable processing fee and any
                            increase
                            in registration costs.<br>
                            &bull; The comped registration is <strong>non-transferable</strong> to another individual.
                        </p>

                    </div>
                </div>
            </div>
            <p>You will be able to buy a ticket for the conference and indicate your preferences for meals. You will be
                able
                to pay for your ticket(s) in the next few days, but you can sign up for them now.
                Your registration will not be complete until payment is received.</p>
            <a href="https://conference.rwaconference.org/e/2/romance-writers-of-america-conference-2025"
               class="underline text-blue-600 hover:text-blue-800 visited:text-purple-600">Proceed to the conference
                registration area</a>
        </div>
        <div class="text-center">
            <p class="text-gray-700 mb-6">Get ready to immerse yourself in the world of romance writing. Stay tuned for
                more
                details about speakers, workshops, and special events.</p>


            <h2 class="text-3xl mt-4 font-extrabold text-pink-600 mb-4"><strong>Cyber Sale</strong> December 2 - 9 Big
                Savings on Registration for a career changing event</h2>
            <h3 class="text-xl font-bold text-pink-800 mb-4">Countdown to Savings</h3>
            <div id="countdown" class="countdown"></div>
        </div>

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
                    countdownElement.innerHTML = "The event has started!";
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
