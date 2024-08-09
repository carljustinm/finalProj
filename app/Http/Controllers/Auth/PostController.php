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
