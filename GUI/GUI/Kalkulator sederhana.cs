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
    public partial class Kalkulator_sederhana: Form
    {
        public Kalkulator_sederhana()
        {
            InitializeComponent();
        }

        void bersihkan()
        {
            txt_bil1.Clear();
            txt_bil2.Clear();
            txt_hasil.Clear();
            txt_bil1.Focus();
        }

        private void button_new_Click(object sender, EventArgs e)
        {
            bersihkan();
        }

        private void button_close_Click(object sender, EventArgs e)
        {

            if (MessageBox.Show("yakin akan keluar dari aplikasi?", "Konfirmasi",
                MessageBoxButtons.YesNo, MessageBoxIcon.Question) == DialogResult.Yes)
            {
                Application.Exit();
            }
        }

        void jumlah()

        {

            double hasil, bill, bil2;

            bill = Convert.ToDouble(txt_bil1.Text);

            bil2 = Convert.ToDouble(txt_bil2.Text);

            hasil = bill + bil2;

            txt_hasil.Text = hasil.ToString();

        }

        void kurang()

        {

            double hasil, bill, bil2;

            bill = Convert.ToDouble(txt_bil1.Text);

            bil2 = Convert.ToDouble(txt_bil2.Text);

            hasil = bill - bil2;

            txt_hasil.Text = hasil.ToString();

        }

        void kali()

        {

            double hasil, bill, bil2;

            bill = Convert.ToDouble(txt_bil1.Text);

            bil2 = Convert.ToDouble(txt_bil2.Text);

            hasil = bill * bil2;

            txt_hasil.Text = hasil.ToString();

        }

        void bagi()

        {

            double hasil, bill, bil2;

            bill = Convert.ToDouble(txt_bil1.Text);

            bil2 = Convert.ToDouble(txt_bil2.Text);

            hasil = bill / bil2;

            txt_hasil.Text = hasil.ToString();

        }

        private void button_jmlh_Click(object sender, EventArgs e)
        {
            jumlah();
        }

        private void button_kurang_Click(object sender, EventArgs e)
        {
            kurang();
        }

        private void button_bagi_Click(object sender, EventArgs e)
        {
            bagi();
        }

        private void button_kali_Click(object sender, EventArgs e)
        {
            kali();
        }
    }
}
