<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ModelPrediksi");
        //$this->load->library('session');
    }

    public function index()
    {
        // $data["inspeksi"] = $this->ModelPrediksi->getAll();
        
        // $inspeksi = $this->ModelPrediksi;
        // $validation = $this->form_validation;
        // $validation->set_rules($inspeksi->rules());


        // if ($validation->run()) {
        //     $inspeksi->save();
        //     $this->session->set_flashdata('success', 'Saved successfully');
        // }

        $this->load->view("list");
    }

    public function add()
    {
        $mobil = $this->ModelPrediksi;

        $merek = $this->input->post('merek');

        $tahun =  $this->input->post('thn');
        $data = array(
            'no' => $this->ModelPrediksi->cekID(),
            'merek' => $this->input->post('merek'),
            'tahun' => (int)$tahun,
            'jarak' => $this->input->post('jrk'),
            'kfisik' => $this->input->post('kfisik'),
        );
       $this->ModelPrediksi->save($data); 
 /*----------------------------------------------------------------------------------------------------------------*/
       //tahun
       $tahun = array (
            'id_mbl' => $data['no'],
            'thn' => $data['tahun'],
            'lama' => '',
            'sedang' => '',
            'baru' => '',
        );
    //avanza
    if($merek=='AVZ'){
       if($data['tahun']>=2003 and $data['tahun']<=2012){
            $tahun['lama'] = 1;
       }
       if($data['tahun']>=2010 and $data['tahun']<=2017){
            $tahun['sedang'] = 1;
       } 
       if($data['tahun']>=2012 and $data['tahun']<=2019){
            $tahun['baru'] = 1;
       }
    }
       
    //xpander
    else if($merek=='XPD'){
       if($data['tahun']==2017){
            $tahun['lama'] = 1;
       }
       if($data['tahun']==2018){
            $tahun['sedang'] = 1;
       } 
       if($data['tahun']==2019){
            $tahun['baru'] = 1;
       }
    }

    //mobilio
    else if($merek=='MBL'){
       if($data['tahun']>=2014 and $data['tahun']<=2016){
            $tahun['lama'] = 1;
       }
       if($data['tahun']>=2015 and $data['tahun']<=2017){
            $tahun['sedang'] = 1;
       } 
       if($data['tahun']>=2016 and $data['tahun']<=2019){
            $tahun['baru'] = 1;
       }
    }
          
       $this->ModelPrediksi->saveTahun($tahun); 
 /*----------------------------------------------------------------------------------------------------------------*/
       //odometer
       $odometer = array (
            'id_mbl' => $data['no'],
            'odo' => $data['jarak'],
            'tinggi' => '',
            'normal' => '',
            'rendah' => '',
        );

       if($data['jarak']>=55000){
            $odometer['tinggi'] = 1;
       }
       if($data['jarak']>=35000 and $data['jarak']<=100000){
            $odometer['normal'] = 1;
       } 
       if($data['jarak']>=0 and $data['jarak']<=55000){
            $odometer['rendah'] = 1;
       }     
          
       $this->ModelPrediksi->saveJarak($odometer);
 /*----------------------------------------------------------------------------------------------------------------*/
       //kondisifisik
       $kdsfisik = array (
            'id_mbl' => $data['no'],
            'fisik' => $data['kfisik'],
            'butuh_reparasi' => '',
            'lecet_normal' => '',
            'mulus' => '',
        );

       if($data['kfisik']<=70){
            $kdsfisik['butuh_reparasi'] = 1;
       }
       if($data['kfisik']>=40 and $data['kfisik']<=85){
            $kdsfisik['lecet_normal'] = 1;
       } 
       if($data['kfisik']>=70 and $data['kfisik']<=100){
            $kdsfisik['mulus'] = 1;
       }     
          
       $this->ModelPrediksi->saveFisik($kdsfisik);
 /*----------------------------------------------------------------------------------------------------------------*/
       //predikat tahun
       $year = $data['tahun'];
        $predthm = array(
            'id_mbl' => $data['no'],
            'tahun' => $data['tahun'],
            'pred_lama' => '',
            'pred_sedang' => '',
            'pred_baru' => '',
        );

        //avanza
    if($merek=='AVZ'){
        if(($tahun['lama']==1)&&($tahun['sedang']==0)&&($tahun['baru']==0))
        {
            $predthm['pred_lama'] = 1;
            $predthm['pred_sedang'] = 0;
            $predthm['pred_baru'] = 0;
        }
        if(($tahun['lama']==1)&&($tahun['sedang']==1)&&($tahun['baru']==0))
        {
            $predthm['pred_lama'] = (2012-$year)/(2012-2010);
            $predthm['pred_sedang'] = ($year-2010)/(2012-2010);
            $predthm['pred_baru'] = 0;
        }
        if(($tahun['lama']==0)&&($tahun['sedang']==1)&&($tahun['baru']==1))
        {
            $predthm['pred_lama'] = 0;
            $predthm['pred_sedang'] = (2017-$year)/(2017-2012);
            $predthm['pred_baru'] = ($year-2012)/(2017-2012);
        }
        if(($tahun['lama']==0)&&($tahun['sedang']==0)&&($tahun['baru']==1))
        {
            $predthm['pred_lama'] = 0;
            $predthm['pred_sedang'] = 0;
            $predthm['pred_baru'] = 1;
        }
        if(($tahun['lama']==1)&&($tahun['sedang']==1)&&($tahun['baru']==1))
        {
            $predthm['pred_lama'] = 0;
            $predthm['pred_sedang'] = 1;
            $predthm['pred_baru'] = 0;
        }
    }

    //Xpander
    else if($merek=='XPD'){
        if(($tahun['lama']==1)&&($tahun['sedang']==0)&&($tahun['baru']==0))
        {
            $predthm['pred_lama'] = 1;
            $predthm['pred_sedang'] = 0;
            $predthm['pred_baru'] = 0;
        }
        if(($tahun['lama']==0)&&($tahun['sedang']==0)&&($tahun['baru']==1))
        {
            $predthm['pred_lama'] = 0;
            $predthm['pred_sedang'] = 0;
            $predthm['pred_baru'] = 1;
        }
        if(($tahun['lama']==0)&&($tahun['sedang']==1)&&($tahun['baru']==0))
        {
            $predthm['pred_lama'] = 0;
            $predthm['pred_sedang'] = 1;
            $predthm['pred_baru'] = 0;
        }
    }

    //Mobilio
    else if($merek=='MBL'){
        if(($tahun['lama']==1)&&($tahun['sedang']==0)&&($tahun['baru']==0))
        {
            $predthm['pred_lama'] = 1;
            $predthm['pred_sedang'] = 0;
            $predthm['pred_baru'] = 0;
        }
        if(($tahun['lama']==1)&&($tahun['sedang']==1)&&($tahun['baru']==0))
        {
            $predthm['pred_lama'] = (2012-$year)/(2012-2010);
            $predthm['pred_sedang'] = ($year-2010)/(2012-2010);
            $predthm['pred_baru'] = 0;
        }
        if(($tahun['lama']==0)&&($tahun['sedang']==1)&&($tahun['baru']==1))
        {
            $predthm['pred_lama'] = 0;
            $predthm['pred_sedang'] = (2017-$year)/(2017-2012);
            $predthm['pred_baru'] = ($year-2012)/(2017-2012);
        }
        if(($tahun['lama']==0)&&($tahun['sedang']==0)&&($tahun['baru']==1))
        {
            $predthm['pred_lama'] = 0;
            $predthm['pred_sedang'] = 0;
            $predthm['pred_baru'] = 1;
        }
        if(($tahun['lama']==1)&&($tahun['sedang']==1)&&($tahun['baru']==1))
        {
            $predthm['pred_lama'] = 0;
            $predthm['pred_sedang'] = 1;
            $predthm['pred_baru'] = 0;
        }
    }

        $this->ModelPrediksi->savePredThn($predthm);
 /*----------------------------------------------------------------------------------------------------------------*/
        //predikat jarak
        $odo = $data['jarak'];
        $predjarak = array(
            'id_mbl' => $data['no'],
            'odometer' => $data['jarak'],
            'pred_rendah' => '',
            'pred_normal' => '',
            'pred_tinggi' => '',
        );

        if(($odometer['rendah']==1)&&($odometer['normal']==0)&&($odometer['tinggi']==0))
        {
            $predjarak['pred_rendah'] = 1;
            $predjarak['pred_normal'] = 0;
            $predjarak['pred_tinggi'] = 0;
        }
        if(($odometer['rendah']==1)&&($odometer['normal']==1)&&($odometer['tinggi']==0))
        {
            $predjarak['pred_rendah'] = (55000-$odo)/(55000-35000);
            $predjarak['pred_normal'] = ($odo-35000)/(55000-35000);
            $predjarak['pred_tinggi'] = 0;
        }
        if(($odometer['rendah']==0)&&($odometer['normal']==1)&&($odometer['tinggi']==1))
        {
            $predjarak['pred_rendah'] = 0;
            $predjarak['pred_normal'] = (100000-$odo)/(100000-55000);
            $predjarak['pred_tinggi'] = ($odo-55000)/(100000-55000);
        }
        if(($odometer['rendah']==0)&&($odometer['normal']==0)&&($odometer['tinggi']==1))
        {
            $predjarak['pred_rendah'] = 0;
            $predjarak['pred_normal'] = 0;
            $predjarak['pred_tinggi'] = 1;
        }
        if(($odometer['rendah']==1)&&($odometer['normal']==1)&&($odometer['tinggi']==1))
        {
            $predjarak['pred_rendah'] = 0;
            $predjarak['pred_normal'] = 1;
            $predjarak['pred_tinggi'] = 0;
        }

        $this->ModelPrediksi->savePredJrk($predjarak);
 /*----------------------------------------------------------------------------------------------------------------*/
        //predikat kondisi fisik
        $fisik = $data['kfisik'];
        $predfisik = array(
            'id_mbl' => $data['no'],
            'kondisi-fisik' => $data['kfisik'],
            'pred_butuh_reparasi' => '',
            'pred_lecet_normal' => '',
            'pred_mulus' => '',
        );

        if(($kdsfisik['butuh_reparasi']==1)&&($kdsfisik['lecet_normal']==0)&&($kdsfisik['mulus']==0))
        {
            $predfisik['pred_butuh_reparasi'] = 1;
            $predfisik['pred_lecet_normal'] = 0;
            $predfisik['pred_mulus'] = 0;
        }
        if(($kdsfisik['butuh_reparasi']==1)&&($kdsfisik['lecet_normal']==1)&&($kdsfisik['mulus']==0))
        {
            $predfisik['pred_butuh_reparasi'] = (70-$fisik)/(70-40);
            $predfisik['pred_lecet_normal'] = ($fisik-40)/(70-40);
            $predfisik['pred_mulus'] = 0;
        }
        if(($kdsfisik['butuh_reparasi']==0)&&($kdsfisik['lecet_normal']==1)&&($kdsfisik['mulus']==1))
        {
            $predfisik['pred_butuh_reparasi'] = 0;
            $predfisik['pred_lecet_normal'] = (85-$fisik)/(85-70);
            $predfisik['pred_mulus'] = ($fisik-70)/(85-70);
        }
        if(($kdsfisik['butuh_reparasi']==0)&&($kdsfisik['lecet_normal']==0)&&($kdsfisik['mulus']==1))
        {
            $predfisik['pred_butuh_reparasi'] = 0;
            $predfisik['pred_lecet_normal'] = 0;
            $predfisik['pred_mulus'] = 1;
        }
        if(($kdsfisik['butuh_reparasi']==1)&&($kdsfisik['lecet_normal']==1)&&($kdsfisik['mulus']==1))
        {
            $predfisik['pred_butuh_reparasi'] = 0;
            $predfisik['pred_lecet_normal'] = 1;
            $predfisik['pred_mulus'] = 0;
        }

        $this->ModelPrediksi->savePredFsk($predfisik);

 /*----------------------------------------------------------------------------------------------------------------*/      
       

       $data_h = array (
            'id_mbl' => $data['no'], 
            'hasil' => $this->prediksi($data['no']),

        );

       $this->ModelPrediksi->addZ($data_h);

       $data_u = array (
        'harga_jual' => $data_h['hasil'],
        );

       $id_mobil = $data['no'];
       $this->ModelPrediksi->update_mobil($data_u, $id_mobil);

       $this->resumes($data['no']);
    }

    public function resumes($id)
    {

        $data["mbl"] = $this->ModelPrediksi->getAllMobil($id);
        $this->load->view("resume",$data);
    }

    public function prediksi($id){
        $data = $this->ModelPrediksi->prediksi($id);

        $kode_mobil = $data->merek;
    
        $rules = $this->ModelPrediksi->get_rules($kode_mobil);
        $predikat_tahun ='';
        $predikat_jarak ='';
        $predikat_fisik ='';
        $z='';
        $alpha=0;

        $total_atas=0;
        $total_bawah=0;
        $hasilpred=0;


        foreach ($rules as $r) {
                if($r->tahun == 'lama'){
                    $predikat_tahun = $data->pred_lama;
                }
                else if($r->tahun == 'sedang'){
                    $predikat_tahun = $data->pred_sedang;
                }
                else if($r->tahun == 'baru'){
                    $predikat_tahun = $data->pred_baru;
                }
                if($r->jarak == 'rendah'){
                    $predikat_jarak = $data->pred_rendah;
                }
                else if($r->jarak == 'normal'){
                    $predikat_jarak = $data->pred_normal;
                }
                else if($r->jarak == 'tinggi'){
                    $predikat_jarak = $data->pred_tinggi;
                }


                if($r->fisik == 'butuh reparasi'){
                    $predikat_fisik = $data->pred_butuh_reparasi;
                }
                else if($r->fisik == 'lecet normal'){
                    $predikat_fisik = $data->pred_lecet_normal;
                }
                else if($r->fisik == 'mulus'){
                    $predikat_fisik = $data->pred_mulus;
                }
// ;
                // var_dump("th ".$predikat_tahun);
                // var_dump("fi ".$predikat_fisik);
                // var_dump("jar ".$predikat_jarak);

                // var_dump("<br>");
                // var_dump(($predikat_tahun<$predikat_jarak) && ($predikat_tahun<$predikat_fisik));

                // var_dump(($predikat_jarak<$predikat_tahun) && ($predikat_jarak<$predikat_fisik));
                // var_dump(($predikat_fisik<$predikat_jarak) && ($predikat_fisik<$predikat_tahun));
                // die();


                // var_dump((($predikat_tahun<=$predikat_jarak)&& ($predikat_tahun<=$predikat_fisik) && ($predikat_tahun!=0)));
                // var_dump((($predikat_jarak<=$predikat_tahun) && ($predikat_jarak<=$predikat_fisik) && ($predikat_jarak!=0)));
                // var_dump((($predikat_fisik<=$predikat_jarak) && ($predikat_fisik<=$predikat_tahun) && ($predikat_fisik!=0)));
                // die();

                // var_dump($predikat_jarak>0);
                // var_dump("th".($predikat_tahun>0) && (($predikat_tahun <$predikat_jarak) && ($predikat_tahun<$predikat_fisik)));
                // var_dump("fi".($predikat_fisik>0) && (($predikat_fisik <$predikat_tahun) && ($predikat_fisik<$predikat_jarak)));
                // var_dump("ja".($predikat_jarak>0) && (($predikat_jarak <$predikat_tahun) && ($predikat_jarak<$predikat_fisik)));


                // die();
                if(($predikat_tahun<=$predikat_jarak) && ($predikat_tahun<=$predikat_fisik)){
                    $alpha = $predikat_tahun;
                }else if(($predikat_jarak<=$predikat_tahun) && ($predikat_jarak<=$predikat_fisik)){
                    $alpha = $predikat_jarak;
                }else if(($predikat_fisik<=$predikat_jarak) && ($predikat_fisik<=$predikat_tahun)){
                    $alpha = $predikat_fisik;
                }
                

                // var_dump("jarak: ".$predikat_jarak ."<br>");
                // var_dump("tahun: ".$predikat_tahun ."<br>");
                // var_dump("fisik: ".$predikat_fisik ."<br>");

                // var_dump("kecil: ".$alpha ."<br>"."<br>");
                //die();

                $z = $r->harga_bekas;

                // var_dump($z ."<br>"."<br>");
                $total_atas = $total_atas + ($alpha * $z);
                // var_dump("<br> ini atas: ".$total_atas);
                $total_bawah = $total_bawah+$alpha;
                // var_dump("<br> ini bawah: ".$total_bawah);
        }

        // var_dump("atas " .$total_atas);
        // var_dump("bawah" .$total_bawah);
         //die();

        if($total_bawah == 0){
            return ("ERROR");
        }else {
            $hasilpred = $total_atas/$total_bawah;
        }
        // var_dump("hasil: ". $hasilpred);
        // die();

        return $hasilpred;
    }

}
