<div {{ $attributes }}>
    <flux:modal.trigger name="hotel">
        <flux:button class="!bg-blue-300 hover:!bg-blue-800 focus:outline-none  mb-8
            text-slate font-semibold h-12 px-6 rounded-lg flex items-center justify-center
                    sm:w-auto hover:text-slate-100"
        >Hotel Information
        </flux:button>
    </flux:modal.trigger>
    <flux:modal name="hotel" class="bg-slate">
        <div class="bg-slate relative">
            <div class="mb-2">
                <div class="mb-2">
                    <h3 class="text-2xl font-bold text-pink-600 ">Crowne Plaza Niagara Falls - Fallsview Hotel</h3>
                    <h4 class="text-xl text-pink-600 ">(soon to be The Brock Hotel Tapestry Collection by Hilton)</h4>

                    <ul>
                        <li>Room Block Dates: July 14-July 20</li>
                        <li>Room Rates:</li>
                        <ul class="list-disc list-inside">
                            <li>Traditional: $255 CAD plus applicable taxes (single or double occupancy)</li>
                            <li>Upper Fallsview: $335 CAD plus applicable taxes (single or double occupancy)</li>
                            <li>Triple and quadruple accommodations, when available, is at an additional rate of $25 CAD
                                per
                                person. Children under the age of 18 stay free in the room with an adult, and rollaway
                                beds
                                are available at an additional rate of $25 each.
                            </li>
                            <li>Parking: $34 CAD per day</li>
                        </ul>
                    </ul>
                </div>
            </div>
            <a href="/images/BrockPlaza.pdf" target="_blank">Brock Plaza brochure</a>
        </div>
    </flux:modal>
</div>
