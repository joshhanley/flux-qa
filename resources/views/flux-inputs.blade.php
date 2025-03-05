<x-layouts.app>
        <flux:heading size="xl">Flux Inputs</flux:heading>
    <flux:card>
        @foreach(request()->all() as $input => $value)
            <div>{{ $input }}: {{ var_export($value, true) }}</div>
        @endforeach
    </flux:card>
    <form action="/inputs" method="POST">
        @csrf
        {{-- <flux:subheading size="lg">Autocomplete</flux:subheading>

        <flux:autocomplete name="state" label="State of residence">
            <flux:autocomplete.item :selected="request()->input('state') === 'Alabama'">Alabama</flux:autocomplete.item>
            <flux:autocomplete.item :selected="request()->input('state') === 'Arkansas'">Arkansas</flux:autocomplete.item>
            <flux:autocomplete.item :selected="request()->input('state') === 'California'">California</flux:autocomplete.item>
            <!-- ... -->
        </flux:autocomplete> --}}

        <flux:subheading size="lg">Calendar</flux:subheading>

        <flux:calendar name="calendar" label="Calendar" :value="old('calendar', request()->input('calendar'))" />
        <flux:calendar name="calendarrange" mode="range" label="Calendar Range" :value="old('calendarrange', request()->input('calendarrange'))" />
        <flux:calendar name="calendarmultiple" multiple label="Calendar Multiple" :value="old('calendarmultiple', request()->input('calendarmultiple'))" />
        <flux:date-picker name="datepickerpreset" mode="range" label="Date Picker Preset" :value="old('datepickerpreset', request()->input('datepickerpreset'))" with-presets />

        {{-- <flux:subheading size="lg">Checkbox</flux:subheading>

        <flux:checkbox name="defaultcheckbox" label="Default Checkbox" :checked="old('defaultcheckbox', request()->input('defaultcheckbox'))" />

        <flux:checkbox name="checkboxwithvalue" label="Checkbox With Value" value="someValue" :checked="old('checkboxwithvalue', request()->input('checkboxwithvalue'))" />

        <flux:checkbox.group label="Notifications">
            <flux:checkbox name="notifications[]" label="Push notifications" value="push" :checked="is_array(request()->input('notifications')) && in_array('push', request()->input('notifications'))" />
            <flux:checkbox name="notifications[]" label="Email" value="email" :checked="is_array(request()->input('notifications')) && in_array('email', request()->input('notifications'))" />
            <flux:checkbox name="notifications[]" label="In-app alerts" value="app" :checked="is_array(request()->input('notifications')) && in_array('app', request()->input('notifications'))" />
            <flux:checkbox name="notifications[]" label="SMS" value="sms" :checked="is_array(request()->input('notifications')) && in_array('sms', request()->input('notifications'))" />
        </flux:checkbox.group>

        <flux:checkbox.group name="notifications2" label="Notifications2">
            <flux:checkbox label="Push notifications" value="push" :checked="is_array(request()->input('notifications2')) && in_array('push', request()->input('notifications2'))" />
            <flux:checkbox label="Email" value="email" :checked="is_array(request()->input('notifications2')) && in_array('email', request()->input('notifications2'))" />
            <flux:checkbox label="In-app alerts" value="app" :checked="is_array(request()->input('notifications2')) && in_array('app', request()->input('notifications2'))" />
            <flux:checkbox label="SMS" value="sms" :checked="is_array(request()->input('notifications2')) && in_array('sms', request()->input('notifications2'))" />
        </flux:checkbox.group>

        <flux:checkbox.group name="subscription" label="Subscription preferences" variant="cards" class="max-sm:flex-col">
            <flux:checkbox checked
                value="newsletter"
                label="Newsletter"
                description="Get the latest updates and offers."
            />
            <flux:checkbox
                value="updates"
                label="Product updates"
                description="Learn about new features and products."
            />
            <flux:checkbox
                value="invitations"
                label="Event invitations"
                description="Invitatations to exclusive events."
            />
        </flux:checkbox.group>

        <flux:checkbox
            name="singlecard"
            label="Single Card"
            description="Single card."
            variant="cards"
        /> --}}

        {{-- <flux:subheading size="lg">Editor</flux:subheading> --}}

        {{-- <flux:editor name="content" label="Content" description="Some content" /> --}}

        {{-- <flux:editor name="long-content">
            <flux:editor.toolbar />

            <flux:editor.content>{!! request()->input('long-content') !!}</flux:editor.content>
        </flux:editor> --}}

        {{-- <flux:subheading size="lg">Input</flux:subheading>

        <flux:input name="input" label="Input" placeholder="Input" :value="old('input', request()->input('input'))"></flux:input> --}}

        {{-- <flux:subheading size="lg">Radio</flux:subheading>

        <flux:radio.group name="payment" label="Select your payment method">
            <flux:radio value="cc" label="Credit Card" :checked="request()->input('payment') ==='cc'" />
            <flux:radio value="paypal" label="Paypal" :checked="request()->input('payment') ==='paypal'" />
            <flux:radio value="ach" label="Bank transfer" :checked="request()->input('payment') ==='ach'" />
        </flux:radio.group> --}}

        {{-- <flux:radio.group name="role" label="Role" variant="segmented">
            <flux:radio value="admin" label="Admin" :checked="request()->input('role') === 'admin'" />
            <flux:radio value="editor" label="Editor" :checked="request()->input('role') === 'editor'" />
            <flux:radio value="viewer" label="Viewer" :checked="request()->input('role') === 'viewer'" />
        </flux:radio.group>

        <flux:radio.group name="shipping" label="Shipping" variant="cards" class="max-sm:flex-col">
            <flux:radio value="standard" label="Standard" description="4-10 business days" :checked="request()->input('shipping') === 'standard'" />
            <flux:radio value="fast" label="Fast" description="2-5 business days" :checked="request()->input('shipping') === 'fast'" />
            <flux:radio value="next-day" label="Next day" description="1 business day" :checked="request()->input('shipping') === 'next-day'" />
        </flux:radio.group> --}}

        {{-- <flux:subheading size="lg">Select</flux:subheading>

        <flux:select name="industry-default" placeholder="Choose industry...">
            <flux:select.option :selected="request()->input('industry-default') === 'Photography'">Photography</flux:select.option>
            <flux:select.option :selected="request()->input('industry-default') === 'Design services'">Design services</flux:select.option>
            <flux:select.option :selected="request()->input('industry-default') === 'Web development'">Web development</flux:select.option>
            <flux:select.option :selected="request()->input('industry-default') === 'Accounting'">Accounting</flux:select.option>
            <flux:select.option :selected="request()->input('industry-default') === 'Legal services'">Legal services</flux:select.option>
            <flux:select.option :selected="request()->input('industry-default') === 'Consulting'">Consulting</flux:select.option>
            <flux:select.option :selected="request()->input('industry-default') === 'Other'">Other</flux:select.option>
        </flux:select>

        <flux:select name="industry-values" placeholder="Choose industry values...">
            <flux:select.option value="photography" :selected="request()->input('industry-values') === 'photography'">Photography</flux:select.option>
            <flux:select.option value="design-services" :selected="request()->input('industry-values') === 'design-services'">Design services</flux:select.option>
            <flux:select.option value="web-development" :selected="request()->input('industry-values') === 'web-development'">Web development</flux:select.option>
            <flux:select.option value="accounting" :selected="request()->input('industry-values') === 'accounting'">Accounting</flux:select.option>
            <flux:select.option value="legal-services" :selected="request()->input('industry-values') === 'legal-services'">Legal services</flux:select.option>
            <flux:select.option value="consulting" :selected="request()->input('industry-values') === 'consulting'">Consulting</flux:select.option>
            <flux:select.option value="other" :selected="request()->input('industry-values') === 'other'">Other</flux:select.option>
        </flux:select>

        <flux:select name="industry-listbox" variant="listbox" placeholder="Choose industry..." clearable>
            <flux:select.option :selected="request()->input('industry-listbox') === 'Photography'">Photography</flux:select.option>
            <flux:select.option :selected="request()->input('industry-listbox') === 'Design services'">Design services</flux:select.option>
            <flux:select.option :selected="request()->input('industry-listbox') === 'Web development'">Web development</flux:select.option>
            <flux:select.option :selected="request()->input('industry-listbox') === 'Accounting'">Accounting</flux:select.option>
            <flux:select.option :selected="request()->input('industry-listbox') === 'Legal services'">Legal services</flux:select.option>
            <flux:select.option :selected="request()->input('industry-listbox') === 'Consulting'">Consulting</flux:select.option>
            <flux:select.option :selected="request()->input('industry-listbox') === 'Other'">Other</flux:select.option>
        </flux:select>

        <flux:select name="industry-listbox-values" variant="listbox" placeholder="Choose industry listbox values...">
            <flux:select.option value="photography" :selected="request()->input('industry-listbox-values') === 'photography'">Photography</flux:select.option>
            <flux:select.option value="design-services" :selected="request()->input('industry-listbox-values') === 'design-services'">Design services</flux:select.option>
            <flux:select.option value="web-development" :selected="request()->input('industry-listbox-values') === 'web-development'">Web development</flux:select.option>
            <flux:select.option value="accounting" :selected="request()->input('industry-listbox-values') === 'accounting'">Accounting</flux:select.option>
            <flux:select.option value="legal-services" :selected="request()->input('industry-listbox-values') === 'legal-services'">Legal services</flux:select.option>
            <flux:select.option value="consulting" :selected="request()->input('industry-listbox-values') === 'consulting'">Consulting</flux:select.option>
            <flux:select.option value="other" :selected="request()->input('industry-listbox-values') === 'other'">Other</flux:select.option>
        </flux:select>

        <flux:select name="industry-searchable" variant="listbox" placeholder="Choose industry..." searchable>
            <flux:select.option :selected="request()->input('industry-searchable') === 'Photography'">Photography</flux:select.option>
            <flux:select.option :selected="request()->input('industry-searchable') === 'Design services'">Design services</flux:select.option>
            <flux:select.option :selected="request()->input('industry-searchable') === 'Web development'">Web development</flux:select.option>
            <flux:select.option :selected="request()->input('industry-searchable') === 'Accounting'">Accounting</flux:select.option>
            <flux:select.option :selected="request()->input('industry-searchable') === 'Legal services'">Legal services</flux:select.option>
            <flux:select.option :selected="request()->input('industry-searchable') === 'Consulting'">Consulting</flux:select.option>
            <flux:select.option :selected="request()->input('industry-searchable') === 'Other'">Other</flux:select.option>
        </flux:select>

        <flux:select name="industry-multiple" variant="listbox" multiple placeholder="Choose industries...">
            <flux:select.option :selected="is_array(request()->input('industry-multiple')) && in_array('Photography', request()->input('industry-multiple'))">Photography</flux:select.option>
            <flux:select.option :selected="is_array(request()->input('industry-multiple')) && in_array('Design services', request()->input('industry-multiple'))">Design services</flux:select.option>
            <flux:select.option :selected="is_array(request()->input('industry-multiple')) && in_array('Web development', request()->input('industry-multiple'))">Web development</flux:select.option>
            <flux:select.option :selected="is_array(request()->input('industry-multiple')) && in_array('Accounting', request()->input('industry-multiple'))">Accounting</flux:select.option>
            <flux:select.option :selected="is_array(request()->input('industry-multiple')) && in_array('Legal services', request()->input('industry-multiple'))">Legal services</flux:select.option>
            <flux:select.option :selected="is_array(request()->input('industry-multiple')) && in_array('Consulting', request()->input('industry-multiple'))">Consulting</flux:select.option>
            <flux:select.option :selected="is_array(request()->input('industry-multiple')) && in_array('Other', request()->input('industry-multiple'))">Other</flux:select.option>
        </flux:select>

        <flux:select name="industry-combobox" variant="combobox" placeholder="Choose industry...">
            <flux:select.option :selected="request()->input('industry-combobox') === 'Photography'">Photography</flux:select.option>
            <flux:select.option :selected="request()->input('industry-combobox') === 'Design services'">Design services</flux:select.option>
            <flux:select.option :selected="request()->input('industry-combobox') === 'Web development'">Web development</flux:select.option>
            <flux:select.option :selected="request()->input('industry-combobox') === 'Accounting'">Accounting</flux:select.option>
            <flux:select.option :selected="request()->input('industry-combobox') === 'Legal services'">Legal services</flux:select.option>
            <flux:select.option :selected="request()->input('industry-combobox') === 'Consulting'">Consulting</flux:select.option>
            <flux:select.option :selected="request()->input('industry-combobox') === 'Other'">Other</flux:select.option>
        </flux:select> --}}

        {{-- <flux:subheading size="lg">Switch</flux:subheading>

        <flux:switch name="enable-notifications" label="Enable notifications" :checked="request()->input('enable-notifications')" /> --}}

        {{-- <flux:subheading size="lg">Textarea</flux:subheading>

        <flux:textarea name="textarea" label="Textarea" placeholder="Textarea">{{ old('textarea', request()->input('textarea')) }}</flux:textarea> --}}

        <div class="mt-8">
            <flux:button class="fixed! bottom-0! right-0!" type="submit">Submit</flux:button>
        </div>
    </form>


</x-layouts.app>