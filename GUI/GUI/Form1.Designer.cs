namespace GUI
{
    partial class Form1
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
            this.label1 = new System.Windows.Forms.Label();
            this.txt_no_induk = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.txt_nm_mahasiswa = new System.Windows.Forms.TextBox();
            this.label4 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.radio_laki2 = new System.Windows.Forms.RadioButton();
            this.radio_perempuan = new System.Windows.Forms.RadioButton();
            this.combo_agama = new System.Windows.Forms.ComboBox();
            this.label6 = new System.Windows.Forms.Label();
            this.combo_jurusan = new System.Windows.Forms.ComboBox();
            this.label7 = new System.Windows.Forms.Label();
            this.combo_jenjang = new System.Windows.Forms.ComboBox();
            this.label8 = new System.Windows.Forms.Label();
            this.txt_alamat = new System.Windows.Forms.TextBox();
            this.label9 = new System.Windows.Forms.Label();
            this.list_kotaTelp = new System.Windows.Forms.ListBox();
            this.button_keluar = new System.Windows.Forms.Button();
            this.button_Tambah = new System.Windows.Forms.Button();
            this.button_tampil = new System.Windows.Forms.Button();
            this.txt_telfon = new System.Windows.Forms.TextBox();
            this.button_simpan = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Wide Latin", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.ForeColor = System.Drawing.SystemColors.ActiveCaptionText;
            this.label1.Location = new System.Drawing.Point(276, 20);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(322, 19);
            this.label1.TabIndex = 0;
            this.label1.Text = "Entry Data Mahasiswa";
            // 
            // txt_no_induk
            // 
            this.txt_no_induk.Location = new System.Drawing.Point(324, 58);
            this.txt_no_induk.Name = "txt_no_induk";
            this.txt_no_induk.Size = new System.Drawing.Size(172, 20);
            this.txt_no_induk.TabIndex = 1;
            this.txt_no_induk.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.txt_no_induk_KeyPress);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.BackColor = System.Drawing.Color.MistyRose;
            this.label2.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Bold);
            this.label2.Location = new System.Drawing.Point(172, 59);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(76, 19);
            this.label2.TabIndex = 2;
            this.label2.Text = "No. Induk";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(117, 97);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(131, 23);
            this.label3.TabIndex = 3;
            this.label3.Text = "Nama Mahasiswa";
            this.label3.UseCompatibleTextRendering = true;
            // 
            // txt_nm_mahasiswa
            // 
            this.txt_nm_mahasiswa.Font = new System.Drawing.Font("Times New Roman", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt_nm_mahasiswa.Location = new System.Drawing.Point(324, 98);
            this.txt_nm_mahasiswa.Name = "txt_nm_mahasiswa";
            this.txt_nm_mahasiswa.Size = new System.Drawing.Size(172, 20);
            this.txt_nm_mahasiswa.TabIndex = 4;
            this.txt_nm_mahasiswa.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.txt_nm_mahasiswa_KeyPress);
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Bold);
            this.label4.Location = new System.Drawing.Point(144, 132);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(104, 19);
            this.label4.TabIndex = 5;
            this.label4.Text = "Jenis Kelamin";
            this.label4.Click += new System.EventHandler(this.label4_Click);
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label5.Location = new System.Drawing.Point(192, 166);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(56, 19);
            this.label5.TabIndex = 8;
            this.label5.Text = "Agama";
            this.label5.Click += new System.EventHandler(this.label5_Click);
            // 
            // radio_laki2
            // 
            this.radio_laki2.AutoSize = true;
            this.radio_laki2.Font = new System.Drawing.Font("Times New Roman", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.radio_laki2.Location = new System.Drawing.Point(322, 132);
            this.radio_laki2.Name = "radio_laki2";
            this.radio_laki2.Size = new System.Drawing.Size(76, 19);
            this.radio_laki2.TabIndex = 9;
            this.radio_laki2.TabStop = true;
            this.radio_laki2.Text = "Laki Laki";
            this.radio_laki2.UseVisualStyleBackColor = true;
            this.radio_laki2.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.radio_laki2_KeyPress);
            // 
            // radio_perempuan
            // 
            this.radio_perempuan.AutoSize = true;
            this.radio_perempuan.Font = new System.Drawing.Font("Times New Roman", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.radio_perempuan.Location = new System.Drawing.Point(439, 133);
            this.radio_perempuan.Name = "radio_perempuan";
            this.radio_perempuan.Size = new System.Drawing.Size(85, 19);
            this.radio_perempuan.TabIndex = 10;
            this.radio_perempuan.TabStop = true;
            this.radio_perempuan.Text = "Perempuan";
            this.radio_perempuan.UseVisualStyleBackColor = true;
            // 
            // combo_agama
            // 
            this.combo_agama.Font = new System.Drawing.Font("Times New Roman", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.combo_agama.FormattingEnabled = true;
            this.combo_agama.Items.AddRange(new object[] {
            "Islam",
            "Hindu",
            "Budha",
            "Kristen",
            "Katholik",
            "Konghuchu"});
            this.combo_agama.Location = new System.Drawing.Point(324, 166);
            this.combo_agama.Name = "combo_agama";
            this.combo_agama.Size = new System.Drawing.Size(172, 23);
            this.combo_agama.TabIndex = 11;
            this.combo_agama.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.combo_agama_KeyPress);
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label6.Location = new System.Drawing.Point(186, 215);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(62, 19);
            this.label6.TabIndex = 12;
            this.label6.Text = "Jurusan";
            // 
            // combo_jurusan
            // 
            this.combo_jurusan.Font = new System.Drawing.Font("Times New Roman", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.combo_jurusan.FormattingEnabled = true;
            this.combo_jurusan.Location = new System.Drawing.Point(324, 215);
            this.combo_jurusan.Name = "combo_jurusan";
            this.combo_jurusan.Size = new System.Drawing.Size(172, 23);
            this.combo_jurusan.TabIndex = 13;
            this.combo_jurusan.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.combo_jurusan_KeyPress);
            // 
            // label7
            // 
            this.label7.AutoSize = true;
            this.label7.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label7.Location = new System.Drawing.Point(149, 264);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(99, 19);
            this.label7.TabIndex = 14;
            this.label7.Text = "Jenjang Studi";
            // 
            // combo_jenjang
            // 
            this.combo_jenjang.Font = new System.Drawing.Font("Times New Roman", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.combo_jenjang.FormattingEnabled = true;
            this.combo_jenjang.Location = new System.Drawing.Point(322, 264);
            this.combo_jenjang.Name = "combo_jenjang";
            this.combo_jenjang.Size = new System.Drawing.Size(174, 23);
            this.combo_jenjang.TabIndex = 15;
            this.combo_jenjang.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.combo_jenjang_KeyPress);
            // 
            // label8
            // 
            this.label8.AutoSize = true;
            this.label8.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label8.Location = new System.Drawing.Point(191, 308);
            this.label8.Name = "label8";
            this.label8.Size = new System.Drawing.Size(57, 19);
            this.label8.TabIndex = 16;
            this.label8.Text = "Alamat";
            // 
            // txt_alamat
            // 
            this.txt_alamat.Font = new System.Drawing.Font("Times New Roman", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt_alamat.Location = new System.Drawing.Point(322, 309);
            this.txt_alamat.Multiline = true;
            this.txt_alamat.Name = "txt_alamat";
            this.txt_alamat.ScrollBars = System.Windows.Forms.ScrollBars.Vertical;
            this.txt_alamat.Size = new System.Drawing.Size(223, 73);
            this.txt_alamat.TabIndex = 17;
            this.txt_alamat.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.txt_alamat_KeyPress);
            // 
            // label9
            // 
            this.label9.AutoSize = true;
            this.label9.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label9.Location = new System.Drawing.Point(148, 399);
            this.label9.Name = "label9";
            this.label9.Size = new System.Drawing.Size(100, 19);
            this.label9.TabIndex = 18;
            this.label9.Text = "Kota-Telepon";
            // 
            // list_kotaTelp
            // 
            this.list_kotaTelp.Font = new System.Drawing.Font("Times New Roman", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.list_kotaTelp.FormattingEnabled = true;
            this.list_kotaTelp.ItemHeight = 15;
            this.list_kotaTelp.Location = new System.Drawing.Point(324, 399);
            this.list_kotaTelp.Name = "list_kotaTelp";
            this.list_kotaTelp.ScrollAlwaysVisible = true;
            this.list_kotaTelp.Size = new System.Drawing.Size(120, 94);
            this.list_kotaTelp.TabIndex = 19;
            this.list_kotaTelp.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.list_kotaTelp_KeyPress);
            // 
            // button_keluar
            // 
            this.button_keluar.BackColor = System.Drawing.Color.IndianRed;
            this.button_keluar.Location = new System.Drawing.Point(600, 470);
            this.button_keluar.Name = "button_keluar";
            this.button_keluar.Size = new System.Drawing.Size(74, 33);
            this.button_keluar.TabIndex = 21;
            this.button_keluar.TabStop = false;
            this.button_keluar.Text = "Keluar";
            this.button_keluar.UseVisualStyleBackColor = false;
            this.button_keluar.Click += new System.EventHandler(this.label4_Click);
            // 
            // button_Tambah
            // 
            this.button_Tambah.BackColor = System.Drawing.Color.Silver;
            this.button_Tambah.Location = new System.Drawing.Point(600, 432);
            this.button_Tambah.Name = "button_Tambah";
            this.button_Tambah.Size = new System.Drawing.Size(74, 32);
            this.button_Tambah.TabIndex = 22;
            this.button_Tambah.TabStop = false;
            this.button_Tambah.Text = "Tambah";
            this.button_Tambah.UseVisualStyleBackColor = false;
            this.button_Tambah.Click += new System.EventHandler(this.button_Tambah_Click);
            // 
            // button_tampil
            // 
            this.button_tampil.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(128)))), ((int)(((byte)(0)))));
            this.button_tampil.Location = new System.Drawing.Point(491, 432);
            this.button_tampil.Name = "button_tampil";
            this.button_tampil.Size = new System.Drawing.Size(75, 32);
            this.button_tampil.TabIndex = 23;
            this.button_tampil.Text = "Tampil";
            this.button_tampil.UseVisualStyleBackColor = false;
            this.button_tampil.Click += new System.EventHandler(this.button_tampil_Click);
            // 
            // txt_telfon
            // 
            this.txt_telfon.Font = new System.Drawing.Font("Times New Roman", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt_telfon.Location = new System.Drawing.Point(491, 400);
            this.txt_telfon.Name = "txt_telfon";
            this.txt_telfon.Size = new System.Drawing.Size(172, 21);
            this.txt_telfon.TabIndex = 24;
            this.txt_telfon.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.txt_telfon_KeyPress);
            // 
            // button_simpan
            // 
            this.button_simpan.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(192)))), ((int)(((byte)(0)))));
            this.button_simpan.Location = new System.Drawing.Point(491, 470);
            this.button_simpan.Name = "button_simpan";
            this.button_simpan.Size = new System.Drawing.Size(75, 33);
            this.button_simpan.TabIndex = 25;
            this.button_simpan.TabStop = false;
            this.button_simpan.Text = "Simpan";
            this.button_simpan.UseVisualStyleBackColor = false;
            this.button_simpan.Click += new System.EventHandler(this.button_simpan_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.MistyRose;
            this.ClientSize = new System.Drawing.Size(893, 543);
            this.Controls.Add(this.button_simpan);
            this.Controls.Add(this.txt_telfon);
            this.Controls.Add(this.button_tampil);
            this.Controls.Add(this.button_Tambah);
            this.Controls.Add(this.button_keluar);
            this.Controls.Add(this.list_kotaTelp);
            this.Controls.Add(this.label9);
            this.Controls.Add(this.txt_alamat);
            this.Controls.Add(this.label8);
            this.Controls.Add(this.combo_jenjang);
            this.Controls.Add(this.label7);
            this.Controls.Add(this.combo_jurusan);
            this.Controls.Add(this.label6);
            this.Controls.Add(this.combo_agama);
            this.Controls.Add(this.radio_perempuan);
            this.Controls.Add(this.radio_laki2);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.txt_nm_mahasiswa);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.txt_no_induk);
            this.Controls.Add(this.label1);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle;
            this.KeyPreview = true;
            this.Name = "Form1";
            this.Text = "Form1";
            this.TransparencyKey = System.Drawing.Color.DarkSlateGray;
            this.Load += new System.EventHandler(this.Form1_Load);
            this.KeyDown += new System.Windows.Forms.KeyEventHandler(this.Form1_KeyDown);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox txt_no_induk;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.TextBox txt_nm_mahasiswa;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.RadioButton radio_laki2;
        private System.Windows.Forms.RadioButton radio_perempuan;
        private System.Windows.Forms.ComboBox combo_agama;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.ComboBox combo_jurusan;
        private System.Windows.Forms.Label label7;
        private System.Windows.Forms.ComboBox combo_jenjang;
        private System.Windows.Forms.Label label8;
        private System.Windows.Forms.TextBox txt_alamat;
        private System.Windows.Forms.Label label9;
        private System.Windows.Forms.ListBox list_kotaTelp;
        private System.Windows.Forms.Button button_keluar;
        private System.Windows.Forms.Button button_Tambah;
        private System.Windows.Forms.Button button_tampil;
        private System.Windows.Forms.TextBox txt_telfon;
        private System.Windows.Forms.Button button_simpan;
    }
}

