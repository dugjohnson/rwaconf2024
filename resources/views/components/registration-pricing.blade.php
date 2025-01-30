<div {{ $attributes }} >
    <button class="bg-blue-300 hover:bg-blue-800 focus:outline-none  mb-8
            text-slate font-semibold h-12 px-6 rounded-lg flex items-center justify-center
                    sm:w-auto hover:text-slate-100"
            x-on:click="registration = ! registration; if(registration) hotel=false">Registration ticket sale prices
    </button>
    <div class="bg-slate w-[600px]" x-show="registration">
        <div class="mb-2">
            <div class="mb-2">
                <h3 class="text-2xl font-bold text-pink-600 ">Cyber Sale Registration December 2 - December
                    8</h3>
                <ul>
                    <li>Member: $399 <sub class="text-2xl text-pink-600">&ast;</sub></li>
                    <li>Non Member:$499 <sub class="text-2xl text-pink-600">&ast;</sub></li>
                    <li>Industry Professional (Literary Agent or Publishing Company Editor): $299 <sub
                                class="text-2xl text-pink-600">&ast;</sub></li>
                </ul>
            </div>
            <div class="mb-2">
                <h3 class="text-2xl font-bold text-pink-600 ">Early Bird Registration December 9 - February
                    14</h3>
                <ul>
                    <li>Member: $450 <sub class="text-2xl text-pink-600">&ast;</sub></li>
                    <li>Non Member:$550 <sub class="text-2xl text-pink-600">&ast;</sub></li>
                    <li>Industry Professional (Literary Agent or Publishing Company Editor): $350 <sub
                                class="text-2xl text-pink-600">&ast;</sub></li>
                </ul>
            </div>
            <div class="mb-2">
                <h3 class="text-2xl font-bold text-pink-600 ">Regular Registration February 15 - April
                    2</h3>
                <ul>
                    <li>Member: $499 <sub class="text-2xl text-pink-600">&ast;</sub></li>
                    <li>Non Member:$599 <sub class="text-2xl text-pink-600">&ast;</sub></li>
                    <li>Industry Professional (Literary Agent or Publishing Company Editor): $399 <sub
                                class="text-2xl text-pink-600">&ast;</sub></li>
                </ul>
            </div>
            <div class="mb-2">
                <h3 class="text-2xl font-bold text-pink-600 ">Late Registration April 3 - Conference
                    Dates</h3>
                <ul>
                    <li>Member: $549</li>
                    <li>Non Member:$649</li>
                    <li>Industry Professional (Literary Agent or Publishing Company Editor): $449</li>
                </ul>
            </div>
            <div class="py-4"><p><sub class="text-2xl text-pink-600">&ast;</sub> A payment plan is available This option
                    includes a $26 convenience
                    fee.</p></div>

        </div>
    </div>
</div>
