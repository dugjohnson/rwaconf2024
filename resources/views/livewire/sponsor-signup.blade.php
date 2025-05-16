<div>
    <section>
        <p>Fill in this form if you are interested in a sponsorship opportunity.
            You will then be contacted to finish the process and to answer any questions.
        </p>
        <form wire:submit="sendForm">
            <flux:input wire:model="company_name" label="Company Name" badge="Required"/>
            <flux:input wire:model="contact_name" label="Contact Name" badge="Required"/>
            <flux:input wire:model="contact_phone" label="Contact Phone" badge="Required"/>
            <flux:input wire:model="contact_email" label="Contact Email" badge="Required"/>
            <flux:input wire:model="website" label="Website" badge="optional"/>

            <flux:checkbox.group wire:model="sponsorships" label="Sponsorships"
                                 description="Select all you may be interested in" badge="Required">
                <flux:checkbox label="Bronze" value="bronze"/>
                <flux:checkbox label="Silver" value="silver"/>
                <flux:checkbox label="Gold" value="gold"/>
                <flux:checkbox label="Branded Swag" value="swag"/>
                <flux:checkbox label="Conference Signage" value="signage"/>
                <flux:checkbox label="Retreats" value="retreats"/>

            </flux:checkbox.group>
            <flux:button class="my-4 !bg-pink-600 !hover:bg-pink-800 !text-white !font-semibold !h-12 px-6 rounded-lg
                                sm:w-auto" type="submit">Submit
            </flux:button>
            <flux:button class="my-4 !bg-red-600 !hover:bg-red-800 !text-white
            !font-semibold !h-12 px-6 rounded-lg
            sm:w-auto" type="button" onclick="window.close()">Close Window
            </flux:button>
        </form>
        <p class="py-4">Questions can be sent to <a class="text-blue-600" href="mailto:treasurer@rwa.org">treasurer@rwa.org</a>
        </p>

    </section>
</div>
