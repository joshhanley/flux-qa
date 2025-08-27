<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Non-sticky header & sidebar</title>
<style>
  body {
    margin: 0;
    display: grid;
    grid-template-rows: auto 1fr;
    grid-template-columns: 200px 1fr;
    grid-template-areas:
      "header header"
      "sidebar main";
  }
  header { grid-area: header; padding: 12px; background: #333; color: #fff; }
  aside  { grid-area: sidebar; padding: 12px; background: #f4f4f4; }
  main   { grid-area: main; padding: 12px; }
  .spacer { height: 1200px; }
</style>
</head>
<body>
  <header>Header (non-sticky)</header>
  <aside>Sidebar (non-sticky)</aside>
  <main>
    <p>Main content…</p>
    <div class="spacer"></div>
  </main>
</body>
</html>