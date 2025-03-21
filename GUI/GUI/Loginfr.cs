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
    public partial class Loginfr: Form
    {
        public Loginfr()
        {
            InitializeComponent();
        }

        private void button_exit_Click(object sender, EventArgs e)
        {
            if (MessageBox.Show("yakin ingin keluar?", "Konfirmasi",
                MessageBoxButtons.YesNo, MessageBoxIcon.Question) == DialogResult.Yes)
            {
                Application.Exit();
            }
        }

        private void button_login_Click(object sender, EventArgs e)
        {
            string username = txt_user.Text;
            string password = txt_password.Text;

            if (username == "230202059" && password == "wulan")
            {
                MessageBox.Show("Login berhasil!", "Sukses", MessageBoxButtons.OK, MessageBoxIcon.Information);
                dasboard dashboard = new dasboard();
                dashboard.Show();
            }
            else
            {
                MessageBox.Show("User / Password salah!", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                txt_user.Clear();
                txt_password.Clear();
                txt_user.Focus();
            }
        }

        private void txt_user_KeyPress(object sender, KeyPressEventArgs e)
        {
            if (e.KeyChar == 13)
            {
                txt_password.Focus();
            }
        }

        private void txt_password_KeyPress(object sender, KeyPressEventArgs e)
        {
            if (e.KeyChar == 13)
            {
                button_login.PerformClick();
            }
        }
    }
}
