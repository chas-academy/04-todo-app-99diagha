<header class="header">
    <h1>todos</h1>
    <!-- unfinished -->
    <form method="post" action="todos/search">
        <input name="search" class="new-todo" placeholder="Search">
    </form>
    <form id="create-todo" method="post" action="todos">
        <input name="title" class="new-todo" placeholder="What needs to be done?" autofocus>
    </form>
</header>

<section class="main">
    <form class="view" method="POST" action="/todos/toggle-all">
        <input name="toggle-all" id="toggle-all" class="toggle-all" type="checkbox" <?= $all_completed == true ? 'checked="true"' : "" ?> onChange="submit();">
        <label for="toggle-all">Mark all as complete</label>
    </form>
</section>