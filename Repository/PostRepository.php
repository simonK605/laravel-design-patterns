<?php

// PostRepository.php

use App\Models\Post;

class PostRepository
{
    public function getAll()
    {
        return Post::all();
    }

    public function getById($id)
    {
        return Post::findOrFail($id);
    }

    public function create($data)
    {
        return Post::create($data);
    }

    public function update($id, $data)
    {
        $post = Post::findOrFail($id);
        $post->update($data);

        return $post;
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
    }
}
