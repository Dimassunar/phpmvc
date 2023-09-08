<?php
class User extends Controller {
    public function index() {
        $data['judul'] = "About";
        $this->view('templates/header', $data);
        $this->view("user/index");
        $this->view('templates/footer');
    }
    public function profile($n = "", $pekerjaan = "Kabur",$nama = "Dimas") {
        $data['judul'] = "About";
        $data['nama'] = "$nama";
        $data['pekerjaan'] = $pekerjaan;
        $this->view('templates/header', $data);
        $this->view("user/profile", $data);
        $this->view('templates/footer');
    }
}