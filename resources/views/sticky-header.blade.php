<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Header+Main scroll, Sidebar sticky</title>
<style>
  * { box-sizing: border-box }
  html, body { height: 100%; margin: 0 }

  body {
    display: grid;
    grid-template-rows: auto minmax(0, 1fr);
    grid-template-columns: 240px 1fr;
    grid-template-areas:
      "header header"
      "sidebar main";
  }

  header {
    grid-area: header;
    padding: 12px;
    background: #333; color: #fff;
    border-bottom: 1px solid #222;
  }

  /* Sidebar: only element that sticks */
  aside {
    grid-area: sidebar;
    position: sticky;
    top: 0;                 /* starts below header; pins at viewport top */
    align-self: start;      /* Safari/Firefox quirk fix */
    max-height: 100dvh;     /* allow sticky to engage */
    overflow: auto;         /* its own scrollbar if content overflows */
    padding: 12px;
    background: #f4f4f4;
    border-right: 1px solid #ddd;
  }

  main {
    grid-area: main;
    padding: 12px;
    min-height: 0;          /* prevent overflow traps */
  }

  .spacer { height: 1400px }
</style>
</head>
<body>
  <header>Header (scrolls with page)</header>

  <aside>
    <div>Sidebar top</div>
    <div style="height: 800px"></div>
    <div>Sidebar bottom</div>
  </aside>

  <main>
    <p>Main content…</p>
    <div class="spacer"></div>
  </main>
</body>
</html>