<?php

/**
 * Kullanıcı kayıt
 *
 * @author Alexander
 */
class Kullanici extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->helper('url');
        
        $this->load->database();
    }

    function index()
    {
        if( !class_exists('CI_Session') ) $this->load->library('session');

        if( $this->session->userdata('giris') )
        {
            $data['kullanici_ad'] = $this->session->userdata('kullanici_ad');
        }
        else
        {
            redirect(site_url('kullanici/giris'));
        }

        $data['icerik'] = $this->load->view('kullanici/kullanici_view', $data, TRUE);
        $this->load->view('homepage_v', $data);
    }

    function giris()
    {
        echo base_url("kullanici/giris");
        $this->load->view('index');

    }

    function giris_yap()
    {
        $this->load->model('kullanici_model');


            $kullanici_ad = $this->input->post('kullanici_ad');
            $parola = md5(sha1($this->input->post('parola')));

            $kullanici = $this->kullanici_model->kullanici_ad_parola_ile_al($kullanici_ad, $parola);

            if( !$kullanici )
            {
                $this->session->set_flashdata('hata', 'Giriş başarısız');
                redirect(site_url('kullanici/giris'));
            }
            else
            {
                if( !class_exists('CI_Session') ) $this->load->library('session');

                $session_bilgileri = array(
                    'kullanici_ad' => $kullanici->kullanici_ad,
                    'giris' => TRUE
                );

                $this->session->set_userdata($session_bilgileri);
                redirect(site_url('kullanici'));
            }


        $this->session->set_flashdata('hata', 'Bilgileri eksiksiz giriniz!! Kullnıcı veya Şifre Hatalı');
        redirect(site_url('kullanici/giris'));
    }

    function cikis_yap()
    {
        $this->session->sess_destroy();
        redirect('kullanici/index');
    }

    function kullanici_kayit()
    {
		if( !class_exists('CI_Form_validation') )
            $this->load->library('form_validation');
			
        $data['icerik'] = $this->load->view('kullanici/kullanici_kayit_view', '', TRUE);
        $this->load->view('homepage_v', $data);
    }
    function kullanici_kayit2()
    {
        if( !class_exists('CI_Form_validation') )
            $this->load->library('form_validation');

        $data['icerik'] = $this->load->view('kullanici/kullanici_giris_view', '', TRUE);
        $this->load->view('homepage_v', $data);
    }

    function kullanici_ekle()
    {
        $this->load->model('kullanici_model');

        $form_kural = array(
            array(
                'field' => 'kullanici_ad',
                'label' => 'Kullanıcı Adı',
                'rules' => 'trim|required|min_length[3]|max_length[15]|alpha_numeric|xss_clean|callback_kullanici_ad_kontrol'
            ),
            array(
                'field' => 'parola',
                'label' => 'Parola',
                'rules' => 'trim|required|min_length[3]|max_length[15]|matches[parola2]|alpha_numeric|xss_clean'
            ),
            array(
                'field' => 'parola2',
                'label' => 'İkinci parola bilgisi',
                'rules' => 'trim|required|min_length[3]|max_length[15]|alpha_numeric'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email|xss_clean|callback_email_kontrol'
            )
        );

        if( !class_exists('CI_Form_validation') )
            $this->load->library('form_validation');

        $this->form_validation->set_rules($form_kural);
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', '%s bilgisini girmelisiniz.');
        $this->form_validation->set_message('matches', 'Parolalar eşleşmiyor.');
        $this->form_validation->set_message('valid_email', 'Geçerli email adresi giriniz.');
        $this->form_validation->set_message('kullanici_kontrol', 'Girdiğiniz kullanıcı adı daha önce kullanılmış!');

        if( $this->form_validation->run() === TRUE )
        {
            $kullanici_ad = $this->input->post('kullanici_ad');
            $parola = md5(sha1($this->input->post('parola')));
            $email = $this->input->post('email');

            if( $this->kullanici_model->kullanici_ekle($kullanici_ad, $parola, $email) )
            {
                $this->session->set_flashdata('mesaj', 'Kullanıcı kaydı başarıyla gerçekleştirildi.');
                redirect(site_url('kullanici/kullanici_kayit2'));
            }
        }

        $data['icerik'] = $this->load->view('kullanici/kullanici_kayit_view', '', TRUE);
        $this->load->view('homepage_v', $data);
    }

    function kullanici_ad_kontrol($kullanici_ad)
    {
        if( $this->kullanici_model->kullanici_al('kullanici_ad', $kullanici_ad) )
        {
            $this->form_validation->set_message('kullanici_ad_kontrol', 'Girdiğiniz kullanıcı adı daha önce kullanılmış.');
            return FALSE;
        }

        return TRUE;
    }

    function email_kontrol($email)
    {
        if( $this->kullanici_model->kullanici_al('email', $email) )
        {
            $this->form_validation->set_message('email_kontrol', 'Girdiğiniz email adresi daha önce kullanılmış.');
            return FALSE;
        }

        return TRUE;
    }

}

