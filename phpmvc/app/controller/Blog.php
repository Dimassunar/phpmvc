<?php
class Blog extends Controller
{
    public function index()
    {
        $data['judul'] = "Guru";
        $data['blog'] = $this->model("Blog_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer', $data);
    }
    
}