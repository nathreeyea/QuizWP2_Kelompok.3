<?php
class Data_Siswa extends CI_Controller 
{
 
    
    public function index()

    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->view('view-form-datasiswa');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('nmr', 'Nomor Induk Siswa', 'required|min_length[3]', [
            'required' => 'Nomor Induk Siswa Harus diisi',
            'min_length' => 'Nomor terlalu pendek'
        ]);

        $this->form_validation->set_rules('nma', 'Nama Lengkap', 'required|min_length[3]', [
            'required' => 'Nama Lengkap Harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);

        $this->form_validation->set_rules('tg', 'Tanggal Lahir', 'required|min_length[3]', [
            'required' => 'Tanggal Lahir Harus diisi',
            'min_length' => 'Tanggal terlalu pendek'
        ]);

        $this->form_validation->set_rules('tmpt', 'Tempat Lahir', 'required|min_length[3]', [
            'required' => 'Tempat Lahir Harus diisi',
            'min_length' => 'Tempat Lahir terlalu pendek'
        ]);

        $this->form_validation->set_rules('almt', 'Alamat Rumah', 'required|min_length[3]', [
            'required' => 'Alamat Rumah Harus diisi',
            'min_length' => 'Alamat terlalu pendek'
        ]);
        
        if ($this->form_validation->run() !=true) {
            $this->load->view('view-form-datasiswa');
        } else {
            $data = [
                'nis' => $this->input->post('nmr'),
                'nama' => $this->input->post('nma'),
                'kelas' => $this->input->post('kls'),
                'tanggal_lahir' => $this->input->post('tg'),
                'tempat' => $this->input->post('tmpt'),
                'alamat' => $this->input->post('almt'),
                'jeniskel' => $this->input->post('jeniskel'),
                'agama' => $this->input->post('agm'),
            ];
            $this->load->library('form_validation');
            $this->load->view('view-data-datasiswa', $data);
     }
 }
}