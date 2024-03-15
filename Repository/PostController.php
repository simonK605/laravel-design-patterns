<?php

class PostController extends Controller
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->getAll();

        // Display posts in the view or perform other actions
    }

    public function show($id)
    {
        $post = $this->postRepository->getById($id);

        // Display the specific post in the view or perform other actions
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $newPost = $this->postRepository->create($data);

        // Perform additional actions or redirect to another route
    }
}
