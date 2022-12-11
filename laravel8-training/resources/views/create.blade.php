<h1>Laravel About Us</h1>
    <form method="POST" action="/create">
        @csrf
        <label for="title">Name</label>
        <input type="text" name="name"></br>
        <label for="title">Content</label>
        <input type="text" name="content"></br>
        <label for="body">Body</label>
        <input type="text" name="body"></br>
        <button>Send</button>
    </form>