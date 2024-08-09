public function create() {
    return view('posts.create');
}

public function store(Request $request) {
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    auth()->user()->posts()->create($request->all());

    return redirect()->route('posts.index')->with('success', 'Post created successfully.');
}

public function index() {
    $posts = auth()->user()->posts()->get();
    return view('posts.index', compact('posts'));
}

public function show(Post $post) {
    return view('posts.show', compact('post'));
}

public function edit(Post $post) {
    return view('posts.edit', compact('post'));
}

public function update(Request $request, Post $post) {
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    $post->update($request->all());

    return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
}


