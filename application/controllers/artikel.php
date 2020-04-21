<?php
class Artikel extends CI_controller{
    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('Anda belum login','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Username atau password salah</strong> silakan masukan kembali username dan password
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('auth/login');
        }
        $this->load->model('model_artikel');
    }

    public function semua()
    {
      //PAGINATION
      // $this->load->library('pagination');

      // //CONFIG
      // $config['base_url'] = 'http://localhost/ci-RHS/index.php/artikel/semua';
      // $config['total_rows'] = $this->model_artikel->countArtikel();
      // $config['per_page'] = 5;
      // // var_dump($config['total_rows']); die;

      // //INITIALIZE
      // $this->pagination->initialize($config);

      
      $data['judul'] = 'Semua Artikel';
      $data['carousel'] = '';
      $data['start'] = $this->uri->segment(3);
      $data['artikel'] = $this->model_artikel->tampil_artikel() -> result();
      // $data['artikel'] = $this->model_artikel->tampil_pagination($config['per_page'],$data['start']) -> result();
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar');
      $this->load->view('artikel/dashboard', $data);
      $this->load->view('templates/footer');
    }

    public function terbaru()
    {
      $data['judul'] = 'Terbaru';
      $data['carousel'] = 'd-none';
      $data['artikel'] = $this->model_artikel->terbaru() -> result();
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar');
      $this->load->view('artikel/dashboard', $data);
      $this->load->view('templates/footer');
    }

    public function penyakit()
    {
      $kode = 1;
      $data['judul'] = 'Kategori: Penyakit';
      $data['carousel'] = 'd-none';
      $data['artikel'] = $this->model_artikel->per_kategori($kode) -> result();
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar');
      $this->load->view('artikel/dashboard', $data);
      $this->load->view('templates/footer');
    }

    public function mental()
    {
      $kode = 2;
      $data['judul'] = 'Kategori: Kesehatan Mental';
      $data['carousel'] = 'd-none';
      $data['artikel'] = $this->model_artikel->per_kategori($kode) -> result();
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar');
      $this->load->view('artikel/dashboard', $data);
      $this->load->view('templates/footer');
    }

    public function sehat()
    {
      $kode = 3;
      $data['judul'] = 'Kategori: Hidup Sehat';
      $data['carousel'] = 'd-none';
      $data['artikel'] = $this->model_artikel->per_kategori($kode) -> result();
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar');
      $this->load->view('artikel/dashboard', $data);
      $this->load->view('templates/footer');
    }

    public function bayi()
    {
      $kode = 4;
      $data['judul'] = 'Kategori: Bayi & Menyusui';
      $data['carousel'] = 'd-none';
      $data['artikel'] = $this->model_artikel->per_kategori($kode) -> result();
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar');
      $this->load->view('artikel/dashboard', $data);
      $this->load->view('templates/footer');
    }

    public function sex()
    {
      $kode = 5;
      $data['judul'] = 'Kategori: Sex & Relationship';
      $data['carousel'] = 'd-none';
      $data['artikel'] = $this->model_artikel->per_kategori($kode) -> result();
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar');
      $this->load->view('artikel/dashboard', $data);
      $this->load->view('templates/footer');
    }

    public function parenting()
    {
      $kode = 6;
      $data['judul'] = 'Kategori: Parenting';
      $data['carousel'] = 'd-none';
      $data['artikel'] = $this->model_artikel->per_kategori($kode) -> result();
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar');
      $this->load->view('artikel/dashboard', $data);
      $this->load->view('templates/footer');
    }

    public function lainnya()
    {
      $data['judul'] = 'Kategori: Lainnya';
      $data['carousel'] = 'd-none';
      $data['artikel'] = $this->model_artikel->lainnya() -> result();
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar');
      $this->load->view('artikel/dashboard', $data);
      $this->load->view('templates/footer');
    }

    public function per_kategori($kategori){
      $data['artikel'] = $this->model_artikel->per_kategori($kategori) -> result();
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar');
      $this->load->view('artikel/kategori', $data);
      $this->load->view('templates/footer');
    }


    public function detail($id){
        $user = $this->session->userdata('username');
        // $data['gambar'] = $this->model_artikel->get_gambar($id)->result_array();
        $data['artikel'] = $this->model_artikel->detail_artikel($id)->result_array();
        $data['komen'] = $this->model_artikel->get_komen($id)->result_array();
        $data['user'] = $this->model_artikel->get_user($user)->row_array();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('artikel/baca', $data);
        $this->load->view('templates/footer');
    }

    public function author($adminkode){
      $data['judul'] = '';
      $data['carousel'] = 'd-none';
      $data['artikel'] = $this->model_artikel->detail_author($adminkode);
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar');
      $this->load->view('artikel/author', $data);
      $this->load->view('templates/footer');
    }

    public function simpan_komentar(){
      $refresh = $this->input->post('refresh');
      $iduser = $this->input->post('iduser');
      $idartikel = $this->input->post('idart');
      $nama = $this->input->post('name');
      $komentar = $this->input->post('isi');
      $n_date = $this->input->post('date');
      $data = array( 'id_komen'=>'', 'id_user'=>$iduser, 'id_artikel'=>$idartikel, 'nama'=>$nama, 'isi'=>$komentar, 'n_date'=>$n_date);
      // echo print_r($data);
      $this->db->insert('tb_komentar',$data);
      redirect('/artikel/detail/'.$idartikel);
    }

}

// SAMA TAMBAH KOMENTAR(UDAH JALAN)
// BELUM BUAT PAGE ISI DATA