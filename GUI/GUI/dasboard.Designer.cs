namespace GUI
{
    partial class dasboard
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.menuStrip1 = new System.Windows.Forms.MenuStrip();
            this.dataMasterToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.dataMahasiswaToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.dataJurusanToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.dataProgramStudiToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.tranasaksiToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.pembayaranUKTToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.logOutToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.menuStrip1.SuspendLayout();
            this.SuspendLayout();
            // 
            // menuStrip1
            // 
            this.menuStrip1.BackColor = System.Drawing.Color.RosyBrown;
            this.menuStrip1.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.dataMasterToolStripMenuItem,
            this.tranasaksiToolStripMenuItem,
            this.logOutToolStripMenuItem});
            this.menuStrip1.Location = new System.Drawing.Point(0, 0);
            this.menuStrip1.Name = "menuStrip1";
            this.menuStrip1.Padding = new System.Windows.Forms.Padding(8, 2, 0, 2);
            this.menuStrip1.Size = new System.Drawing.Size(1067, 24);
            this.menuStrip1.TabIndex = 0;
            this.menuStrip1.Text = "menuStrip1";
            // 
            // dataMasterToolStripMenuItem
            // 
            this.dataMasterToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.dataMahasiswaToolStripMenuItem,
            this.dataJurusanToolStripMenuItem,
            this.dataProgramStudiToolStripMenuItem});
            this.dataMasterToolStripMenuItem.Name = "dataMasterToolStripMenuItem";
            this.dataMasterToolStripMenuItem.Size = new System.Drawing.Size(82, 20);
            this.dataMasterToolStripMenuItem.Text = "Data Master";
            // 
            // dataMahasiswaToolStripMenuItem
            // 
            this.dataMahasiswaToolStripMenuItem.Name = "dataMahasiswaToolStripMenuItem";
            this.dataMahasiswaToolStripMenuItem.Size = new System.Drawing.Size(180, 22);
            this.dataMahasiswaToolStripMenuItem.Text = "Data Mahasiswa";
            this.dataMahasiswaToolStripMenuItem.Click += new System.EventHandler(this.dataMahasiswaToolStripMenuItem_Click);
            // 
            // dataJurusanToolStripMenuItem
            // 
            this.dataJurusanToolStripMenuItem.Name = "dataJurusanToolStripMenuItem";
            this.dataJurusanToolStripMenuItem.Size = new System.Drawing.Size(180, 22);
            this.dataJurusanToolStripMenuItem.Text = "Data Jurusan";
            // 
            // dataProgramStudiToolStripMenuItem
            // 
            this.dataProgramStudiToolStripMenuItem.Name = "dataProgramStudiToolStripMenuItem";
            this.dataProgramStudiToolStripMenuItem.Size = new System.Drawing.Size(180, 22);
            this.dataProgramStudiToolStripMenuItem.Text = "Data Program Studi";
            // 
            // tranasaksiToolStripMenuItem
            // 
            this.tranasaksiToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.pembayaranUKTToolStripMenuItem});
            this.tranasaksiToolStripMenuItem.Name = "tranasaksiToolStripMenuItem";
            this.tranasaksiToolStripMenuItem.Size = new System.Drawing.Size(72, 20);
            this.tranasaksiToolStripMenuItem.Text = "Tranasaksi";
            // 
            // pembayaranUKTToolStripMenuItem
            // 
            this.pembayaranUKTToolStripMenuItem.Name = "pembayaranUKTToolStripMenuItem";
            this.pembayaranUKTToolStripMenuItem.Size = new System.Drawing.Size(180, 22);
            this.pembayaranUKTToolStripMenuItem.Text = "Pembayaran UKT";
            // 
            // logOutToolStripMenuItem
            // 
            this.logOutToolStripMenuItem.Name = "logOutToolStripMenuItem";
            this.logOutToolStripMenuItem.Size = new System.Drawing.Size(60, 20);
            this.logOutToolStripMenuItem.Text = "Log out";
            this.logOutToolStripMenuItem.Click += new System.EventHandler(this.logOutToolStripMenuItem_Click);
            // 
            // dasboard
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 15F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.DarkGray;
            this.ClientSize = new System.Drawing.Size(1067, 519);
            this.Controls.Add(this.menuStrip1);
            this.Font = new System.Drawing.Font("Microsoft Sans Serif", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.MainMenuStrip = this.menuStrip1;
            this.Margin = new System.Windows.Forms.Padding(4, 3, 4, 3);
            this.Name = "dasboard";
            this.Text = "dasboard";
            this.WindowState = System.Windows.Forms.FormWindowState.Maximized;
            this.Load += new System.EventHandler(this.dasboard_Load);
            this.menuStrip1.ResumeLayout(false);
            this.menuStrip1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.MenuStrip menuStrip1;
        private System.Windows.Forms.ToolStripMenuItem dataMasterToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem dataMahasiswaToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem dataJurusanToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem dataProgramStudiToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem tranasaksiToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem pembayaranUKTToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem logOutToolStripMenuItem;
    }
}