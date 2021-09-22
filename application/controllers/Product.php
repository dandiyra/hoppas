<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Product');
    }

    public function index()
    {
        $product = $this->M_Product->listing();
        $data = [
            'title'         => 'All Product',
            'product'      => $product,
            'users'         => $this->db->get_where('users', ['email' => 
                                $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('product/index', $data);
        $this->load->view('templates/footer');
    }


    public function AddProduct()
    {
            $data = [
                'title'         => 'Add Product',
                'produk'         => $this->db->get('produk')->result_array(),
                'category'       => $this->db->get('categori')->result_array(),
                'users'          => $this->db->get_where('users', ['email' => 
                                     $this->session->userdata('email')])->row_array(),
                
            ];
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('product/addproduct', $data);
            $this->load->view('templates/footer');
      
    }


    public function addPro()
    {
        $config['upload_path'] = './assets/images/produk';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';
        $config['max_size']             = 5000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        //Memasukan gambar produk
        if (!empty($_FILES['gambar'])) {
            $this->upload->do_upload('gambar');
            $data1 = $this->upload->data('file_name');
            $this->db->set('gambar', $data1);
        }

       
        $id_user        = $this->session->userdata('id');
        $nama_produk    = $this->input->post('nama_produk', true);
        $id_kategori    = $this->input->post('id_kategori');
        $kode_produk    =  $this->input->post('kode_produk');
        $slug_produk    = url_title($this->input->post('nama_produk'));
        $keterangan     = $this->input->post('keterangan');
        $keywords       = $this->input->post('keywords');
        $harga          = $this->input->post('harga');
        $stock          = $this->input->post('stock');
        $berat          = $this->input->post('berat');
        $ukuran         = $this->input->post('popular');
        $status_produk  = $this->input->post('status_produk');
        $createAt       = date('Y-m-d H:i:s');

        $this->db->set('id_user', $id_user);
        $this->db->set('nama_produk', $nama_produk);
        $this->db->set('id_kategori', $id_kategori);
        $this->db->set('kode_produk', $kode_produk);
        $this->db->set('slug_produk', $slug_produk);
        $this->db->set('keterangan', $keterangan);
        $this->db->set('keywords', $keywords);
        $this->db->set('harga', $harga);
        $this->db->set('stock', $stock);
        $this->db->set('berat', $berat);
        $this->db->set('ukuran', $ukuran);
        $this->db->set('status_produk', $status_produk);
        $this->db->set('createAt', $createAt);
       
        $this->db->insert('produk');
        $this->session->set_flashdata('message',
        '<div class="alert alert-success" role="alert">
           Product Added!   
        </div>');
        redirect('Product/');
    }

  
    public function edit($id_produk) {
        $data = [
            'title'          => 'Edit Product',
            'product'          => $this->db->get_where('produk', ['id_produk' => $id_produk])->row_array(),
            'category'       => $this->db->get('categori')->result_array(),
            'users'          => $this->db->get_where('users', ['email' => 
                                $this->session->userdata('email')])->row_array(),
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('product/editproduct', $data);
        $this->load->view('templates/footer');
    }

    public function editProduk()
    {   
        $id_produk        = $this->input->post('id_produk');
        $nama_produk    = $this->input->post('nama_produk', true);
        $id_kategori    = $this->input->post('id_kategori');
        $kode_produk    =  $this->input->post('kode_produk');
        $slug_produk    = url_title($this->input->post('nama_produk'));
        $keterangan     = $this->input->post('keterangan');
        $keywords       = $this->input->post('keywords');
        $harga          = $this->input->post('harga');
        $stock          = $this->input->post('stock');
        $berat          = $this->input->post('berat');
        $ukuran         = $this->input->post('popular');
        $status_produk  = $this->input->post('status_produk');
        $createAt       = date('Y-m-d H:i:s');

            $upload_image = $_FILES['gambar']['name'];

            $config['upload_path'] = './assets/images/produk';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';
            $config['max_size']             = 5000;
            $config['max_width']            = 5000;
            $config['max_height']           = 5000;

            $this->load->library('upload', $config);

            $path = './assets/images/produk';
            $_id = $this->db->get_where('produk', ['id_produk' => $id_produk])->row_array();

            if($upload_image) {

                unlink($path.$_id['gambar']);

                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            
            $this->db->set('nama_produk', $nama_produk);
            $this->db->set('id_kategori', $id_kategori);
            $this->db->set('kode_produk', $kode_produk);
            $this->db->set('slug_produk', $slug_produk);
            $this->db->set('keterangan', $keterangan);
            $this->db->set('keywords', $keywords);
            $this->db->set('harga', $harga);
            $this->db->set('stock', $stock);
            $this->db->set('berat', $berat);
            $this->db->set('ukuran', $ukuran);
            $this->db->set('status_produk', $status_produk);
            $this->db->set('createAt', $createAt);
            $this->db->where('id_produk', $id_produk);
            $this->db->update('produk');
            $this->session->set_flashdata('message',
            '<div class="alert alert-success" role="alert">
               Product Updated!
            </div>');
            redirect('Product/');
        }


    public function editProdukk()
    {
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required|trim');
        $this->form_validation->set_rules('stock', 'Stock', 'required|trim|numeric');
        $this->form_validation->set_rules('berat', 'berat', 'required|trim|numeric');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim|numeric');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Failed</strong> to Edit Produk.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
            redirect('Product/');
        } else {
            $id_user        = $this->session->userdata('id');
            $nama_produk    = $this->input->post('nama_produk', true);
            $id_kategori    = $this->input->post('id_kategori');
            $kode_produk    =  $this->input->post('kode_produk');
            $slug_produk    = url_title($this->input->post('nama_produk'));
            $keterangan     = $this->input->post('keterangan');
            $keywords       = $this->input->post('keywords');
            $harga          = $this->input->post('harga');
            $stock          = $this->input->post('stock');
            $berat          = $this->input->post('berat');
            $ukuran         = $this->input->post('popular');
            $status_produk  = $this->input->post('status_produk');
            $updateAt       = date('Y-m-d H:i:s');

            $data = [
                'id_user'               => $id_user,
                'nama_produk'           => $nama_produk,
                'id_kategori'           => $id_kategori,
                'kode_produk'           => $kode_produk,
                'slug_produk'           => $slug_produk,
                'keterangan'            => $keterangan,
                'keywords'              => $keywords,
                'harga'                 => $harga,
                'stock'                 => $stock,
                'berat'                 => $berat,
                'ukuran'                => $ukuran,
                'status_produk'         => $status_produk,
                'updateAt'              => $updateAt,
            ];

            $this->db->where('id_produk', $this->input->post('id_produk'));
            $this->db->update('produk', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success</strong> to Edit Product.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
            redirect('Product/');
        }
    }

    public function delPro($id_produk)
    {
        // Jalur asset penyimpanan gambar
        $path = './assets/images/produk';
        
        // Menggambil baris data produk yang akan dibuang
        $_id = $this->db->get_where('produk', ['id_produk' => $id_produk])->row_array();

        // Membuang data produk sesuai nilai variable $id
        $query = $this->db->delete('produk',['id_produk' => $id_produk]);
        
        // Menghapus gambar pada tempat penyimpanan asset ketika variabel $query dijalankan
        if ($query) {
            unlink($path.$_id['gambar']);
        }
        $this->session->set_flashdata('message', 'Data Deleted');
        redirect('Product/');
    }

}
