<footer class="footer">
    <span class="todo-count"><?= count(array_filter($todos, function($todo) { return $todo['completed'] === "false"; })) ?> item<?= "".count($todos) !== 1 ? "s" : "" ?> left</span>
    <form class="view" method="POST" action="/todos/clear-completed">
        <button class="clear-completed" type="submit">Clear completed</button>
    </form>
</footer>

</main>

<footer class="site-footer">
    <div class="small-container">
        <p class="text-center">Made by <a href="#">Diar K.</a></p>
    </div>
</footer>

<script type="module" src="<?= $this->getScript('scripts'); ?>"></script>

</body>

</html>