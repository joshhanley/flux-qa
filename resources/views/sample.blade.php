<div>
    <dialog id="thedialog" oncancel="console.log('cancel'); event.preventDefault()">
    <button autofocus>Close</button>
    <p>This modal dialog has a groovy backdrop!</p>
    </dialog>

    <x-test-link href="https://google.com">Google</x-test-link>

    <button onclick="document.getElementById('thedialog').showModal()">Show the dialog</button>
</div>