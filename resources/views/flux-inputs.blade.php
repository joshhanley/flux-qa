<x-layouts.app>
        <flux:heading size="xl">Flux Inputs</flux:heading>
    <flux:card>
        @foreach(request()->all() as $input => $value)
            <div>{{ $input }}: {{ var_export($value, true) }}</div>
        @endforeach
    </flux:card>

    <div id="hiddens"></div>

    <form action="/inputs" method="POST">
        {{-- <input type="checkbox" name="checkbox" value="foo" />

        <input type="radio" name="radio" value="foo" />

        <input type="radio" name="radio" value="bar" />

        <input type="radio" name="radio" value="baz" />

        <select name="select">
            <option value="">Placeholder</option>
            <option value="1a">1</option>
            <option>2</option>
            <option value="3a">3</option>
        </select>

        <input type="date" name="date" />

        <textarea name="textarea"></textarea> --}}


        {{-- <input name="input" />
        <select name="select">
            <option value="1" disabled selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <select name="multiple" multiple>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <textarea name="textarea"></textarea>
        <input type="date" name="date" /> --}}
        @csrf
        {{-- <flux:subheading size="lg">Autocomplete</flux:subheading>

        <flux:autocomplete name="state" label="State of residence">
            <flux:autocomplete.item :selected="request()->input('state') === 'Alabama'">Alabama</flux:autocomplete.item>
            <flux:autocomplete.item :selected="request()->input('state') === 'Arkansas'">Arkansas</flux:autocomplete.item>
            <flux:autocomplete.item :selected="request()->input('state') === 'California'">California</flux:autocomplete.item>
            <!-- ... -->
        </flux:autocomplete> --}}

        <flux:subheading size="lg">Calendar</flux:subheading>

        {{-- <flux:calendar name="calendar" label="Calendar" :value="old('calendar', request()->input('calendar'))" /> --}}
        <flux:calendar name="calendarrange" mode="range" label="Calendar Range" :value="old('calendarrange', request()->input('calendarrange'))" />
        {{-- <flux:calendar name="calendarmultiple" multiple label="Calendar Multiple" :value="old('calendarmultiple', request()->input('calendarmultiple'))" /> --}}
        {{-- <flux:date-picker name="datepickerpreset" mode="range" label="Date Picker Preset" :value="old('datepickerpreset', request()->input('datepickerpreset'))" with-presets /> --}}

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

        Grouped checkboxes without a group component
        <flux:checkbox name="notifications3[]" label="Push notifications" value="push" :checked="is_array(request()->input('notifications3')) && in_array('push', request()->input('notifications3'))" />
        <flux:checkbox name="notifications3[]" label="Email" value="email" :checked="is_array(request()->input('notifications3')) && in_array('email', request()->input('notifications3'))" />
        <flux:checkbox name="notifications3[]" label="In-app alerts" value="app" :checked="is_array(request()->input('notifications3')) && in_array('app', request()->input('notifications3'))" />
        <flux:checkbox name="notifications3[]" label="SMS" value="sms" :checked="is_array(request()->input('notifications3')) && in_array('sms', request()->input('notifications3'))" />

        <flux:checkbox.group name="subscription" label="Subscription preferences" variant="cards" class="max-sm:flex-col">
            <flux:checkbox
                value="newsletter"
                label="Newsletter"
                description="Get the latest updates and offers."
                :checked="is_array(request()->input('subscription')) && in_array('newsletter', request()->input('subscription'))"
            />
            <flux:checkbox
                value="updates"
                label="Product updates"
                description="Learn about new features and products."
                :checked="is_array(request()->input('subscription')) && in_array('updates', request()->input('subscription'))"
            />
            <flux:checkbox
                value="invitations"
                label="Event invitations"
                description="Invitations to exclusive events."
                :checked="is_array(request()->input('subscription')) && in_array('invitations', request()->input('subscription'))"
            />
        </flux:checkbox.group>

        <flux:checkbox
            name="singlecard"
            label="Single Card"
            description="Single card."
            variant="cards"
            :checked="old('singlecard', request()->input('singlecard'))"
        /> --}}

        {{-- <flux:subheading size="lg">Editor</flux:subheading>

        <flux:editor name="content" label="Content" description="Some content" :value="old('content', request()->input('content'))" />

        <flux:editor name="long-content">
            <flux:editor.toolbar />

            <flux:editor.content>{!! request()->input('long-content') !!}</flux:editor.content>
        </flux:editor> --}}

        {{-- <flux:subheading size="lg">Input</flux:subheading>

        <flux:input name="input" label="Input" placeholder="Input" :value="old('input', request()->input('input'))"></flux:input> --}}

        {{-- <flux:subheading size="lg">Radio</flux:subheading>

        <flux:radio.group name="paymentChecked" label="Select your payment method">
            <flux:radio value="cc" label="Credit Card" />
            <flux:radio value="paypal" label="Paypal" checked />
            <flux:radio value="ach" label="Bank transfer" />
        </flux:radio.group>

        <flux:radio.group name="payment" label="Select your payment method">
            <flux:radio value="cc" label="Credit Card" :checked="request()->input('payment') ==='cc'" />
            <flux:radio value="paypal" label="Paypal" :checked="request()->input('payment') ==='paypal'" />
            <flux:radio value="ach" label="Bank transfer" :checked="request()->input('payment') ==='ach'" />
        </flux:radio.group>

        <flux:radio.group name="role" label="Role" variant="segmented">
            <flux:radio value="admin" label="Admin" :checked="request()->input('role') === 'admin'" />
            <flux:radio value="editor" label="Editor" :checked="request()->input('role') === 'editor'" />
            <flux:radio value="viewer" label="Viewer" :checked="request()->input('role') === 'viewer'" />
        </flux:radio.group>

        <flux:radio.group name="shipping" label="Shipping" variant="cards" class="max-sm:flex-col">
            <flux:radio value="standard" label="Standard" description="4-10 business days" :checked="request()->input('shipping') === 'standard'" />
            <flux:radio value="fast" label="Fast" description="2-5 business days" :checked="request()->input('shipping') === 'fast'" />
            <flux:radio value="next-day" label="Next day" description="1 business day" :checked="request()->input('shipping') === 'next-day'" />
        </flux:radio.group> --}}

        {{-- <flux:subheading size="lg">Select</flux:subheading> --}}

        {{-- <select name="industry-default1" placeholder="Choose industry...">
            <option value="" disabled selected>Choose industry...</option>
            <option :selected="request()->input('industry-default') === 'Photography'">Photography</option>
            <option :selected="request()->input('industry-default') === 'Design services'">Design services</option>
            <option :selected="request()->input('industry-default') === 'Web development'">Web development</option>
            <option :selected="request()->input('industry-default') === 'Accounting'">Accounting</option>
            <option :selected="request()->input('industry-default') === 'Legal services'">Legal services</option>
            <option :selected="request()->input('industry-default') === 'Consulting'">Consulting</option>
            <option :selected="request()->input('industry-default') === 'Other'">Other</option>
        </select> --}}
        {{-- <flux:select name="industry-default" placeholder="Choose industry...">
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

        <select name="industry-multiple2" variant="listbox" multiple placeholder="Choose industries...">
            <option :selected="is_array(request()->input('industry-multiple2')) && in_array('Photography', request()->input('industry-multiple2'))">Photography</option>
            <option :selected="is_array(request()->input('industry-multiple2')) && in_array('Design services', request()->input('industry-multiple2'))">Design services</option>
            <option :selected="is_array(request()->input('industry-multiple2')) && in_array('Web development', request()->input('industry-multiple2'))">Web development</option>
            <option :selected="is_array(request()->input('industry-multiple2')) && in_array('Accounting', request()->input('industry-multiple2'))">Accounting</option>
            <option :selected="is_array(request()->input('industry-multiple2')) && in_array('Legal services', request()->input('industry-multiple2'))">Legal services</option>
            <option :selected="is_array(request()->input('industry-multiple2')) && in_array('Consulting', request()->input('industry-multiple2'))">Consulting</option>
            <option :selected="is_array(request()->input('industry-multiple2')) && in_array('Other', request()->input('industry-multiple2'))">Other</option>
        </select>

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
        </flux:select>

        <flux:select name="industry-combobox-values" variant="combobox" placeholder="Choose industry...">
            <flux:select.option value="photography" :selected="request()->input('industry-combobox-values') === 'photography'">Photography</flux:select.option>
            <flux:select.option value="design-services" :selected="request()->input('industry-combobox-values') === 'design-services'">Design services</flux:select.option>
            <flux:select.option value="web-development" :selected="request()->input('industry-combobox-values') === 'web-development'">Web development</flux:select.option>
            <flux:select.option value="accounting" :selected="request()->input('industry-combobox-values') === 'accounting'">Accounting</flux:select.option>
            <flux:select.option value="legal-services" :selected="request()->input('industry-combobox-values') === 'legal-services'">Legal services</flux:select.option>
            <flux:select.option value="consulting" :selected="request()->input('industry-combobox-values') === 'consulting'">Consulting</flux:select.option>
            <flux:select.option value="other" :selected="request()->input('industry-combobox-values') === 'other'">Other</flux:select.option>
        </flux:select> --}}

        {{-- <flux:subheading size="lg">Switch</flux:subheading>

        <flux:switch name="enable-notifications" label="Enable notifications" :checked="request()->input('enable-notifications') === 'on'" />
        <flux:switch name="enable-notifications2" label="Enable notifications" value="testing" :checked="request()->input('enable-notifications2') === 'testing'" /> --}}

        {{-- <flux:subheading size="lg">Textarea</flux:subheading>

        <flux:textarea name="textarea" label="Textarea" placeholder="Textarea">{{ old('textarea', request()->input('textarea')) }}</flux:textarea> --}}

        <div class="mt-8">
            <flux:button class="fixed! bottom-0! right-0!" type="submit">Submit</flux:button>
        </div>
    </form>


</x-layouts.app>
