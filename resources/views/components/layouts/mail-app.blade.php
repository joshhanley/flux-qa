<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? str(request()->path())->headline() }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance()
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">
    <flux:sidebar class="p-0! gap-0! border-r border-zinc-200 dark:border-zinc-700">
        <div class="px-2 border-b border-zinc-200 dark:border-zinc-700 h-[3.5rem] flex items-center">
            <flux:select variant="listbox">
                <flux:select.option selected>
                    <span class="flex items-center gap-2"><flux:icon.star variant="mini" /> Alicia Koch</span>
                </flux:select.option>
            </flux:select>
        </div>

        <flux:navlist class="py-2 gap-1 px-2">
            <flux:navlist.item value="inbox" icon="inbox" badge="128">Inbox</flux:navlist.item>
            <flux:navlist.item value="drafts" icon="document" badge="9">Drafts</flux:navlist.item>
            <flux:navlist.item value="sent" icon="paper-airplane">Sent</flux:navlist.item>
            <flux:navlist.item value="junk" icon="archive-box" badge="23">Junk</flux:navlist.item>
            <flux:navlist.item value="trash" icon="trash">Trash</flux:navlist.item>
            <flux:navlist.item value="archive" icon="archive-box">Archive</flux:navlist.item>
        </flux:navlist>

        <flux:navlist class="border-t border-zinc-200 dark:border-zinc-700 py-2 gap-1 px-2">
            <flux:navlist.item value="social" icon="users" badge="972">Social</flux:navlist.item>
            <flux:navlist.item value="updates" icon="information-circle" badge="342">Updates</flux:navlist.item>
            <flux:navlist.item value="forums" icon="chat-bubble-left" badge="128">Forums</flux:navlist.item>
            <flux:navlist.item value="shopping" icon="shopping-cart" badge="8">Shopping</flux:navlist.item>
            <flux:navlist.item value="promotions" icon="archive-box" badge="21">Promotions</flux:navlist.item>
        </flux:navlist>
    </flux:sidebar>



    <flux:main class="p-0! grid grid-cols-3">
        <div class="col-span-1 border-r border-zinc-200 dark:border-zinc-700">
            <flux:navbar class="px-4! border-b border-zinc-200 dark:border-zinc-700 h-[3.5rem]">
                <flux:heading level="1" class="text-xl font-bold">Inbox</flux:heading>
                <flux:spacer />
                <flux:tabs variant="segmented">
                    <flux:tab value="all">All Mail</flux:tab>
                    <flux:tab value="unread">Unread</flux:tab>
                </flux:tabs>
            </flux:navbar>

            <div class="p-4 space-y-4">
                <flux:input icon="magnifying-glass" placeholder="Search" />

                <flux:card class="p-3! space-y-2">
                    <div class="flex justify-between">
                        <div class="flex items-center gap-2">
                            <flux:heading level="2" class="font-semibold">William Smith</flux:heading>
                        </div>
                        <flux:text>over 1 year ago</flux:text>
                    </div>
                    <flux:heading level="3" class="font-medium">Meeting Tomorrow</flux:heading>
                    <flux:text class="mt-1 line-clamp-2 text-xs">
                        Hi, let's have a meeting tomorrow to discuss the project. I've been reviewing the project details and have some ideas I'd like to share. It's crucial that we align on our next steps to ensure the project's success.

                        Please come prepared with any questions or insights you may have. Looking forward to our meeting!

                        Best regards, William
                    </flux:text>

                    <div class="mt-2 flex gap-1">
                        <flux:badge size="sm">meeting</flux:badge>
                        <flux:badge variant="solid" size="sm">work</flux:badge>
                        <flux:badge size="sm">important</flux:badge>
                    </div>
                </flux:card>

                <flux:card class="p-3! space-y-2">
                    <div class="flex justify-between">
                        <div class="flex items-center gap-2">
                            <flux:heading level="2" class="font-semibold">Alice Smith</flux:heading>
                        </div>
                        <flux:text>over 1 year ago</flux:text>
                    </div>
                    <flux:heading level="3" class="font-medium">Re: Project Update</flux:heading>
                    <flux:text class="mt-1 line-clamp-2 text-xs">
                        Thank you for the project update. It looks great! I've gone through the report, and the progress is impressive. The team has done a fantastic job, and I appreciate the hard work everyone has put in.

                        I have a few minor suggestions that I'll include in the attached document.

                        Let's discuss these during our next meeting. Keep up the excellent work!

                        Best regards, Alice
                    </flux:text>

                    <div class="mt-2 flex gap-1">
                        <flux:badge variant="solid" size="sm">work</flux:badge>
                        <flux:badge size="sm">important</flux:badge>
                    </div>
                </flux:card>

                <flux:card class="p-3! space-y-2">
                    <div class="flex justify-between">
                        <div class="flex items-center gap-2">
                            <flux:heading level="2" class="font-semibold">Bob Johnson</flux:heading>
                        </div>
                        <flux:text>almost 2 years ago</flux:text>
                    </div>
                    <flux:heading level="3" class="font-medium">Weekend Plans</flux:heading>
                    <flux:text class="mt-1 line-clamp-2 text-xs">
                        Any plans for the weekend? I was thinking of going hiking in the nearby mountains. It's been a while since we had some outdoor fun.

                        If you're interested, let me know, and we can plan the details. It'll be a great way to unwind and enjoy nature.

                        Looking forward to your response!

                        Best, Bob
                    </flux:text>

                    <div class="mt-2 flex gap-1">
                        <flux:badge size="sm">personal</flux:badge>
                    </div>
                </flux:card>

                <flux:card class="p-3! space-y-2">
                    <div class="flex justify-between">
                        <div class="flex items-center gap-2">
                            <flux:heading level="2" class="font-semibold">Emily Davis</flux:heading>
                            <div class="rounded-full w-2 h-2 bg-blue-500"></div>
                        </div>
                        <flux:text>almost 2 years ago</flux:text>
                    </div>
                    <flux:heading level="3" class="font-medium">Re: Question about Budget</flux:heading>
                    <flux:text class="mt-1 line-clamp-2 text-xs">
                        I have a question about the budget for the upcoming project. It seems like there's a discrepancy in the allocation of resources.

                        I've reviewed the budget report and identified a few areas where we might be able to optimize our spending without compromising the project's quality.

                        I've attached a detailed analysis for your reference. Let's discuss this further in our next meeting.

                        Thanks, Emily
                    </flux:text>

                    <div class="mt-2 flex gap-1">
                        <flux:badge size="sm">meeting</flux:badge>
                        <flux:badge variant="solid" size="sm">work</flux:badge>
                        <flux:badge size="sm">important</flux:badge>
                    </div>
                </flux:card>
            </div>
        </div>
        <div class="col-span-2 flex flex-col">
            <flux:navbar class="px-4! p-2 border-b border-zinc-200 dark:border-zinc-700 h-[3.5rem] gap-2">
                <flux:button icon="archive-box" variant="ghost" icon-variant="outline" />
                <flux:button icon="archive-box-x-mark" variant="ghost" icon-variant="outline" />
                <flux:button icon="trash" variant="ghost" icon-variant="outline" />
                <flux:separator vertical />
                <flux:button icon="clock" variant="ghost" icon-variant="outline" />
                <flux:spacer />
                <flux:button icon="chevron-left" variant="ghost" icon-variant="outline" />
                <flux:button icon="chevron-double-left" variant="ghost" icon-variant="outline" />
                <flux:button icon="chevron-right" variant="ghost" icon-variant="outline" />
                <flux:separator vertical />
                <flux:button icon="ellipsis-vertical" variant="ghost" icon-variant="outline" />
            </flux:navbar>

            <div class="p-4 border-b border-zinc-200 dark:border-zinc-700 flex">
                <div class="flex gap-2">
                    <div class="w-10 h-10  rounded-full flex items-center justify-center bg-zinc-100 dark:bg-zinc-700 text-xs">WS</div>
                    <div class="grid gap-1">
                        <flux:heading level="2" class="font-semibold">William Smith</flux:heading>
                        <flux:text size="sm">Meeting Tomorrow</flux:text>
                        <flux:text size="sm">
                            <span class="font-semibold">Reply-To:</span> william.smith@example.com
                        </flux:text>
                    </div>
                </div>
                <flux:spacer />
                <flux:text size="sm">Oct 22, 2023, 9:00:00 AM</flux:text>
            </div>

            <div class="flex-1 p-4">
                <flux:text class="space-y-4 text-zinc-700">
                    <p>Hi, let's have a meeting tomorrow to discuss the project. I've been reviewing the project details and have some ideas I'd like to share. It's crucial that we align on our next steps to ensure the project's success.</p>

                    <p>Please come prepared with any questions or insights you may have. Looking forward to our meeting!</p>

                    <p>Best regards, William</p>
                </flux:text>
            </div>

            <div class="p-4 border-t border-zinc-200 dark:border-zinc-700 space-y-4">
                <flux:textarea placeholder="Reply William Smith..." rows="2" />
                <div class="flex items-center gap-2">
                    <flux:switch label="Mute this thread" left-align />
                    <flux:spacer />
                    <flux:button variant="primary">Send</flux:button>
                </div>
            </div>
        </div>
    </flux:main>

    @fluxScripts()
</body>

</html>
