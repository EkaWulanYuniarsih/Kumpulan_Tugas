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
    public partial class Siregi: Form
    {
        byte count = 0;
        public Siregi()
        {
            InitializeComponent();
        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            count++;
            if(count == 5)
            {
                timer1.Enabled = false;
                this.Hide();

                Loginfr login = new Loginfr();
                login.Show();
            }
        }
    }
}
