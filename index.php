<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP todo list</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <main class="main">
        <section class="section-add">
            <form action="">
                <input type="text" name="title" placeholder="todo title" class="input-add"/>
                <button type="submit" name="submit" class="btn-add">Add &nbsp; <span class="plus-sign">&#43;</span></button>
            </form>
        </section>
        <section class="section-list">
            <div class="todo-item">
                <input type="checkbox" class="todo-checkbox">
                <h2 class="todo-title">Title</h2>
                <small class="todo-date">created: 29.11.2020</small>
            </div>
        </section>
    </main>
</body>
</html>