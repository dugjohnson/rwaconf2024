<x-layouts.guest>
    <section class="bg-white shadow-lg rounded-lg p-8 w-full max-w-4xl">
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
                <p class="text-gray-700 mb-6">Refunds requested between September 1 and September 30 shall be granted,
                    less a $150 processing fee. No refunds after September 30.</p>

                <p class="text-gray-700 mb-6">Refunds will be processed for registrants who provide documentation to
                    prove
                    they were unable to attend
                    the Conference due to serious illness or death of registrant or the registrant's immediate family
                    member, or registrant’s inability to travel due to natural disasters, war, government regulations,
                    or
                    acts of terrorism. Registrants who qualify for refunds under this provision will not be required to
                    pay
                    a cancellation fee.</p>

                <p class="text-gray-700 mb-6">With written proof, full fees shall be refunded.</p>

                <p class="text-gray-700 mb-6">If a comped registration is given to a committee member in exchange for
                    services already rendered, and
                    the member is unable to attend due to the member's serious illness or the death of an immediate
                    family
                    member, or registrant’s inability to travel due to natural disasters, war, government regulations,
                    or
                    acts of terrorism, then the member may use the comped fee the following year, subject to payment of
                    the
                    processing fee and any increase in registration fees, upon submission of written medical proof. The
                    comped fee is not transferable to another individual.</p>
            </div>
        </div>
        <p>You will be able to buy a ticket for the conference and indicate your preferences for meals. You will be able
            to pay for your ticket(s) in the next few days, but you can sign up for them now.
            Your registration will not be complete until payment is received.</p>
        <a href="https://conference.rwaconference.org/e/1/romance-writers-of-america-annual-conference"
           class="underline text-blue-600 hover:text-blue-800 visited:text-purple-600">Proceed to the conference
            registration area</a>
        <p class="text-gray-700 mb-6">Get ready to immerse yourself in the world of romance writing. Stay tuned for more
            details about speakers, workshops, and special events.</p>
        <div>
            <h3 class="text-xl font-bold text-pink-800 mb-4">Countdown to Inspiration</h3>
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

        countdownTimer('2024-10-11T09:30:00');
    </script>
</x-layouts.guest>
