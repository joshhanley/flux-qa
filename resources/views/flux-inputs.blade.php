<x-layouts.app>
        <flux:heading size="xl">Flux Inputs</flux:heading>
    <flux:card>
        @foreach(request()->all() as $input => $value)
            <div>{{ $input }}: {{ var_export($value) }}</div>
        @endforeach
    </flux:card>
    <form action="/inputs" method="POST">
        @csrf
        <flux:subheading size="lg">Autocomplete</flux:subheading>



        <flux:subheading size="lg">Checkbox</flux:subheading>

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

        <flux:subheading size="lg">Editor</flux:subheading>



        <flux:subheading size="lg">Input</flux:subheading>

        <flux:input name="input" label="Input" placeholder="Input" :value="old('input', request()->input('input'))"></flux:input>

        <flux:subheading size="lg">Radio</flux:subheading>



        <flux:subheading size="lg">Select</flux:subheading>

        <flux:select name="select" label="Select" placeholder="Select">
            <flux:option :selected="old('select', request()->input('select')) === 'Photography'">Photography</flux:option>
            <flux:option :selected="old('select', request()->input('select')) === 'Design services'">Design services</flux:option>
            <flux:option :selected="old('select', request()->input('select')) === 'Web development'">Web development</flux:option>
            <flux:option :selected="old('select', request()->input('select')) === 'Accounting'">Accounting</flux:option>
            <flux:option :selected="old('select', request()->input('select')) === 'Legal services'">Legal services</flux:option>
            <flux:option :selected="old('select', request()->input('select')) === 'Consulting'">Consulting</flux:option>
            <flux:option :selected="old('select', request()->input('select')) === 'Other'">Other</flux:option>
        </flux:select>

        <flux:select variant="listbox" name="selectlistbox" label="Select Listbox" placeholder="Select Listbox">
            <flux:option>Photography</flux:option>
            <flux:option>Design services</flux:option>
            <flux:option>Web development</flux:option>
            <flux:option>Accounting</flux:option>
            <flux:option>Legal services</flux:option>
            <flux:option>Consulting</flux:option>
            <flux:option>Other</flux:option>
        </flux:select>

        <flux:subheading size="lg">Switch</flux:subheading>



        <flux:subheading size="lg">Textarea</flux:subheading>

        <flux:textarea name="textarea" label="Textarea" placeholder="Textarea">{{ old('textarea', request()->input('textarea')) }}</flux:textarea>

        <div class="mt-8">
            <flux:button class="!fixed !bottom-0 !right-0" type="submit">Submit</flux:button>
        </div>
    </form>


</x-layouts.app>