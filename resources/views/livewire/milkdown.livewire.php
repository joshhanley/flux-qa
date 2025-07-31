<?php

use Livewire\Component;

new class extends Component {
    //
} ?>

<div>
    <div id="markdown-editor" class="prose max-w-none">
      <div id="editor" class="min-h-[200px]"></div>
    </div>
</div>

<script type="module">
    import { Crepe } from "@milkdown/crepe";
    import "@milkdown/crepe/theme/common/style.css";
    import "@milkdown/crepe/theme/frame.css";

    document.addEventListener("DOMContentLoaded", async () => {
      const root = document.getElementById("editor");
      const crepe = new Crepe({
        root,
        defaultValue: "# Hello, Milkdown!\n\nStart editing...",
      });

      await crepe.create();

      // Optionally, listen for content changes
      crepe.on(listener => {
        listener.markdownUpdated((ctx, markdown) => {
          console.log("Markdown updated:", markdown);
        });
      });

      // Expose for debugging or interaction
      window.markdownCrepe = crepe;
    });
</script>