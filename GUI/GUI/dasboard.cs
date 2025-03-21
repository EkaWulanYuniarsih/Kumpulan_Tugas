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
    public partial class dasboard: Form
    {
        public dasboard()
        {
            InitializeComponent();
        }

        private void dasboard_Load(object sender, EventArgs e)
        {

        }

        private void logOutToolStripMenuItem_Click(object sender, EventArgs e)
        {
            this.Close();
            Loginfr login = new Loginfr();
            login.Show();
        }

        private void dataMahasiswaToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Form1 mahasiswa = new Form1();
            mahasiswa.ShowDialog();
        }
    }
}
