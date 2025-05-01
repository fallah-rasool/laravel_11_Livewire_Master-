<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class EditPost extends Component
{

    public Post $post;
    public $title;
    public $content;
    public $version;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->content = $post->content;
        $this->version = $post->version; // مقدار نسخه برای مقایسه
    }

    public function updatePost()
    {
        // چک کردن نسخه برای جلوگیری از Race Condition
        $updated = Post::where('id', $this->post->id)
            ->where('version', $this->version) // شرط برای مطابقت نسخه
            ->update([
                'title' => $this->title,
                'content' => $this->content,
                'version' => $this->version + 1, // نسخه جدید
            ]);

        if ($updated) {
            session()->flash('message', '✅ پست با موفقیت ویرایش شد.');
        } else {
            session()->flash('error', '⚠️ یک نفر دیگر این پست را ویرایش کرده است. لطفاً صفحه را رفرش کنید.');
        }
    }



    public function render()
    {
        return view('livewire.edit-post')
        ->layout('components.layouts.with-navigation');
    }
}
