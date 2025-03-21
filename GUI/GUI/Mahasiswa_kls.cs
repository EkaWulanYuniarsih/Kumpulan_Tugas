using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Remoting.Messaging;
using System.Text;
using System.Threading.Tasks;

namespace GUI
{
    class Mahasiswa_kls
    {
        // atribut
        private string _no_induk;
        private string _nm_mhs;
        private string _jns_kelamin;
        private string _agama;
        private string _jurusan;
        private string _jenjang;
        private string _alamat;
        private string _kota;
        private string _telpon;

        //constructor
        public Mahasiswa_kls()
        {
            _no_induk = ""; _nm_mhs = ""; _jns_kelamin = "";
            _agama = ""; _jurusan = ""; _jenjang = "";
            _alamat = ""; _kota = ""; _telpon = "";
        }

        // deklarasi properti
        public string No_Induk
        {
            get { return _no_induk;}
            set { _no_induk = value;}
        }
        public string Nm_Mhs
        {
            get { return _nm_mhs; }
            set { _nm_mhs = value; }
        }

        public string Jns_kelamin
        {
            get { return _jns_kelamin; }
            set { _jns_kelamin = value; }
        }
        public string Agama
        {
            get { return _agama; }
            set { _agama = value; }
        }
        public string Jurusan
        {
            get { return _jurusan; }
            set { _jurusan = value; }
        }
        public string Jenjang
        {
            get { return _jenjang; }
            set { _jenjang = value; }
        }
        public string Alamat
        {
            get { return _alamat; }
            set { _alamat = value; }
        }
        public string Kota
        {
            get { return _kota; }
            set { _kota = value; }
        }
        public string Telepon
        {
            get { return _telpon; }
            set { _telpon = value; }
        }
        //deklarasi fungsi methode
        public string tampilBiodata()
        {
            string info = "No. Induk \t : " +_no_induk + "\n" + "Nama Mahasiswa \t : " + _nm_mhs + "\n"
                + "Jenis Kelamin \t : " + _jns_kelamin + "\n" +
                "Agama \t :" + _agama + "\n" + "Jurusan \t :" + _jurusan + "\n" +
                "Jenjang Studi \t :" + _jenjang + "\n" + "Alamat \t : " + _alamat + "\n" +
                "Telpon \t :" + _telpon;
            return info;
        }

    }
}
