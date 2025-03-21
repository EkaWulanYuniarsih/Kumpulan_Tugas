using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace GUI
{
    public partial class Form1: Form
    {
        Mahasiswa_kls mhs = new Mahasiswa_kls(); // instansiasi objek
        public Form1()
        {
            InitializeComponent();
        }
        
        //prosedur jurusan
        void isiJurusan()
        {
            combo_jurusan.Items.Clear();
            combo_jurusan.Items.Add("JKB");
            combo_jurusan.Items.Add("JRMIP");
            combo_jurusan.Items.Add("JREM");
        }

        //prosedur jenjang

        void isiJenjang_Studi()
        {
            combo_jenjang.Items.Clear();
            combo_jenjang.Items.Add("D1");
            combo_jenjang.Items.Add("D2");
            combo_jenjang.Items.Add("D3");
            combo_jenjang.Items.Add("D4");
            combo_jenjang.Items.Add("S2");
            combo_jenjang.Items.Add("S3");
        }

        //prosedur list kota
        void isiKota()
        {
            list_kotaTelp.Items.Clear();
            list_kotaTelp.Items.Add("Cilacap");
            list_kotaTelp.Items.Add("Jakarta");
            list_kotaTelp.Items.Add("Bandung");
            list_kotaTelp.Items.Add("Malang");
            list_kotaTelp.Items.Add("Solo");
            list_kotaTelp.Items.Add("Banten");
            list_kotaTelp.Items.Add("Pekanbaru");
        }

        //prosedur pembersihan
        void bersihkan()
        {
            txt_no_induk.Clear();
            txt_nm_mahasiswa.Clear();
            radio_laki2.Checked = false;
            radio_perempuan.Checked = false;
            combo_agama.Text = "";
            combo_jenjang.Text = "";
            combo_jurusan.Text = "";
            txt_alamat.Clear();
            list_kotaTelp.SelectedIndex = -1;
            txt_telfon.Clear();

            txt_no_induk.Focus();
        }

        //deklarasi fungsi
        string tampilInformasi()
        {
            string jenis = "";
            if (radio_laki2.Checked == true)
            {
                jenis = radio_laki2.Text;
            }
            else if (radio_perempuan.Checked == true)
            {
                jenis = radio_perempuan.Text;

            }
            string data = "No. Induk \t : " + txt_no_induk.Text + "\n" + "Nama Mahasiswa \t : " + txt_nm_mahasiswa.Text + "\n"
                + "Jenis Kelamin \t : " + jenis + "\n" +
                "Agama \t :" + combo_agama.Text + "\n" + "Jurusan \t :" + combo_jurusan.Text + "\n" +
                "Jenjang Studi \t :" + combo_jenjang.Text + "\n" + "Alamat \t : " + list_kotaTelp.Text + "\n" +
                "Telpon \t :" + txt_telfon.Text;
            return data;
        }

        void tampilBiodata()
        {
            txt_no_induk.Text = mhs.No_Induk;
            txt_nm_mahasiswa.Text = mhs.Nm_Mhs;
            if (mhs.Jns_kelamin == "Laki Laki")
            {
                radio_laki2.Checked = true;

            } else if (mhs.Jns_kelamin == "perempuan"){
                radio_perempuan.Checked = true;
            }
            combo_agama.Text = mhs.Agama;
            combo_jurusan.Text = mhs.Jurusan;
            combo_jenjang.Text = mhs.Jenjang;
            txt_alamat.Text = mhs.Alamat;
            list_kotaTelp.Text = mhs.Kota;
            txt_telfon.Text = mhs.Telepon;
        }

        private void label5_Click(object sender, EventArgs e)
        {

        }

        private void label4_Click(object sender, EventArgs e)
        {
            Close();

        }

        private void Form1_Load(object sender, EventArgs e)
        {
            //tampil prosedur
            isiJurusan();
            isiJenjang_Studi();
            isiKota();
        }

        private void button_tampil_Click(object sender, EventArgs e)
        {
            //MessageBox.Show(mhs.tampilBiodata(), "BIODATA MAHASISWA", MessageBoxButtons.OK, MessageBoxIcon.Information);

            tampilBiodata();
        }

        private void button_Tambah_Click(object sender, EventArgs e)
        {
            bersihkan();
        }

        private void txt_no_induk_KeyPress(object sender, KeyPressEventArgs e)
        {
            if(e.KeyChar == 13)
            {
                txt_nm_mahasiswa.Focus();
            }
            if (!char.IsNumber(e.KeyChar)&& e.KeyChar != 8)
            {
                e.Handled = true;
            }
        }

        private void txt_nm_mahasiswa_KeyPress(object sender, KeyPressEventArgs e)
        {

            if (e.KeyChar == 13)
            {
                radio_laki2.Focus();
            }
        }

        private void radio_laki2_KeyPress(object sender, KeyPressEventArgs e)
        {

            if (e.KeyChar == 13)
            {
               combo_agama.Focus();
            }
        }

        private void combo_agama_KeyPress(object sender, KeyPressEventArgs e)
        {

            if (e.KeyChar == 13)
            {
                combo_jurusan.Focus();
            }
        }

        private void combo_jurusan_KeyPress(object sender, KeyPressEventArgs e)
        {

            if (e.KeyChar == 13)
            {
                combo_jenjang.Focus();
            }
        }

        private void combo_jenjang_KeyPress(object sender, KeyPressEventArgs e)
        {

            if (e.KeyChar == 13)
            {
                txt_alamat.Focus();
            }
        }

        private void txt_alamat_KeyPress(object sender, KeyPressEventArgs e)
        {

            if (e.KeyChar == 13)
            {
                list_kotaTelp.Focus();
            }
        }

        private void list_kotaTelp_KeyPress(object sender, KeyPressEventArgs e)
        {

            if (e.KeyChar == 13)
            {
                txt_telfon.Focus();
            }
        }

        private void txt_telfon_KeyPress(object sender, KeyPressEventArgs e)
        {
            if (e.KeyChar == 13)
            {
                button_Tambah.Focus();
            }
            if (!char.IsNumber(e.KeyChar) && e.KeyChar != 8)
            {
                e.Handled = true;
            }
        }

        private void button_simpan_Click(object sender, EventArgs e)
        {
            mhs.No_Induk = txt_no_induk.Text;
            mhs.Nm_Mhs = txt_nm_mahasiswa.Text;
            if (radio_laki2.Checked == true)
            {
                mhs.Jns_kelamin = radio_laki2.Text;
            }else if (radio_perempuan.Checked == true)
            {
                mhs.Jns_kelamin = radio_perempuan.Text;
            }
            mhs.Agama = combo_agama.Text;
            mhs.Jurusan = combo_jurusan.Text;
            mhs.Jenjang = combo_jenjang.Text;
            mhs.Alamat = txt_alamat.Text;
            mhs.Kota = list_kotaTelp.Text;
            mhs.Telepon = txt_telfon.Text;

            MessageBox.Show("Data Berhasil disimpan", "Simpan Data",
                MessageBoxButtons.OK, MessageBoxIcon.Information);
            bersihkan();
        }

        private void Form1_KeyDown(object sender, KeyEventArgs e)
        {
            if (e.KeyCode == Keys.S && e.Control)
            {
                button_simpan.PerformClick();
            }
        }
    }
}
