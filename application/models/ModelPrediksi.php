<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPrediksi extends CI_Model
{
    private $_table = "mobil";

        // public $no;
        // public $merek;
        // public $tahun;
        // public $jarak;
        // public $hrgbeli;
        // public $kmesin;
        // public $kfisik;

        // public function rules()
        // {
        //     return [
        //         ['field' => 'merek',
        //         'label' => 'merek',
        //         'rules' => 'required'],

        //         ['field' => 'thn',
        //         'label' => 'thn',
        //         'rules' => 'required'],

        //         ['field' => 'jrk',
        //         'label' => 'jrk',
        //         'rules' => 'required'],

        //         ['field' => 'hrg_beli',
        //         'label' => 'hrg_beli',
        //         'rules' => 'required'],

        //         ['field' => 'kmesin',
        //         'label' => 'kmesin',
        //         'rules' => 'required'],

        //         ['field' => 'kfisik',
        //         'label' => 'kfisik',
        //         'rules' => 'required'],
        //         ];
        // }

    public function getAll()
    {
        return $this->db->query("select * from `mobil`")->result();
    }

    public function getAllMobil($id)
    {
        return $this->db->query("select * from `mobil` where no='".$id."'")->row();
    }
    public function getAllTahun($id)
    {
        return $this->db->query("select * from `query-rule-tahun` where id_mbl='".$id."'")->row();
    }
    public function getAllJarak($id)
    {
        return $this->db->query("select * from `query-rule-odo` where id_mbl='".$id."'")->row();
    }
    public function getAllFisik($id)
    {
        return $this->db->query("select * from `query-rule-fisik` where id_mbl='".$id."'")->row();
    }


//    public function getById($id)
 //   {
 //       return $this->db->get_where($this->_table, ["kd_surat" => $id])->row();
 //   } 

    public function cekID(){
        $akhir = $this->db->select('no')->order_by('no','desc')->limit(1)->get('mobil')->row('no');            
        $hasil="";
        // var_dump($akhir);

        if(!empty($akhir)){
            $kata  = substr($akhir,3,strlen($akhir));
            // var_dump($kata);
            $kata2  = substr($akhir,0,3);

            $angka = sprintf("%03d", $kata+1);
            // var_dump($apa);
            $hasil = $kata2 . $angka;
            // var_dump($hasil);

            return $hasil;
        }else{
            $hasil = "MBL001";
            return $hasil;
        }
    }    

    public function save($data)
    {
        $this->db->insert('mobil',$data);
    }
    /*public function savehasil($data)
    {
        $this->db->insert('mobil',$data);
    }*/

    public function saveTahun($data)
    {
        $this->db->insert('query-rule-tahun',$data);
    }

    public function saveJarak($data)
    {
        $this->db->insert('query-rule-odo',$data);
    }
    public function saveMesin($data)
    {
        $this->db->insert('query-rule-mesin',$data);
    }
    public function saveFisik($data)
    {
        $this->db->insert('query-rule-fisik',$data);
    }
    public function savePredThn($data)
    {
        $this->db->insert('predikat-tahun',$data);
    }
    public function savePredJrk($data)
    {
        $this->db->insert('predikat-jarak',$data);
    }
    public function savePredFsk($data)
    {
        $this->db->insert('predikat-fisik',$data);
    }


    public function prediksi($id)
    {
        return $this->db->query("SELECT * FROM `mobil` a
        LEFT JOIN `predikat-tahun` b on b.id_mbl = a.no
        LEFT JOIN `predikat-fisik` c on c.id_mbl = a.no
        LEFT JOIN `predikat-jarak` d on d.id_mbl = a.no
        WHERE a.no = '$id'
        ")
        ->row();
    }

    public function get_rules($id){
        return $this->db->query("SELECT * FROM `rules` WHERE kd_mobil ='$id'")->result();
    }

    public function addZ($data){
        $this->db->insert('harga_jual',$data);       
    }

    public function update_mobil($data,$id) {
       $this->db->where("no",$id);
       $this->db->update("mobil",$data);
    }
}
