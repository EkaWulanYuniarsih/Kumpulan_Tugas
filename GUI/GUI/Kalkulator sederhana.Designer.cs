namespace GUI
{
    partial class Kalkulator_sederhana
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
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.button_new = new System.Windows.Forms.Button();
            this.button_close = new System.Windows.Forms.Button();
            this.button_kali = new System.Windows.Forms.Button();
            this.button_bagi = new System.Windows.Forms.Button();
            this.button_kurang = new System.Windows.Forms.Button();
            this.button_jmlh = new System.Windows.Forms.Button();
            this.label4 = new System.Windows.Forms.Label();
            this.txt_hasil = new System.Windows.Forms.TextBox();
            this.txt_bil2 = new System.Windows.Forms.TextBox();
            this.txt_bil1 = new System.Windows.Forms.TextBox();
            this.label3 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.groupBox1.SuspendLayout();
            this.SuspendLayout();
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.button_new);
            this.groupBox1.Controls.Add(this.button_close);
            this.groupBox1.Controls.Add(this.button_kali);
            this.groupBox1.Controls.Add(this.button_bagi);
            this.groupBox1.Controls.Add(this.button_kurang);
            this.groupBox1.Controls.Add(this.button_jmlh);
            this.groupBox1.Controls.Add(this.label4);
            this.groupBox1.Controls.Add(this.txt_hasil);
            this.groupBox1.Controls.Add(this.txt_bil2);
            this.groupBox1.Controls.Add(this.txt_bil1);
            this.groupBox1.Controls.Add(this.label3);
            this.groupBox1.Controls.Add(this.label2);
            this.groupBox1.Controls.Add(this.label1);
            this.groupBox1.Location = new System.Drawing.Point(103, 29);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Size = new System.Drawing.Size(664, 387);
            this.groupBox1.TabIndex = 0;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "Data Input";
            // 
            // button_new
            // 
            this.button_new.Font = new System.Drawing.Font("Showcard Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button_new.Location = new System.Drawing.Point(392, 294);
            this.button_new.Name = "button_new";
            this.button_new.Size = new System.Drawing.Size(65, 37);
            this.button_new.TabIndex = 12;
            this.button_new.Text = "New";
            this.button_new.TextAlign = System.Drawing.ContentAlignment.TopLeft;
            this.button_new.UseVisualStyleBackColor = true;
            this.button_new.Click += new System.EventHandler(this.button_new_Click);
            // 
            // button_close
            // 
            this.button_close.Font = new System.Drawing.Font("Showcard Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button_close.Location = new System.Drawing.Point(313, 350);
            this.button_close.Name = "button_close";
            this.button_close.Size = new System.Drawing.Size(71, 37);
            this.button_close.TabIndex = 11;
            this.button_close.Text = "Close";
            this.button_close.UseVisualStyleBackColor = true;
            this.button_close.Click += new System.EventHandler(this.button_close_Click);
            // 
            // button_kali
            // 
            this.button_kali.Font = new System.Drawing.Font("Showcard Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button_kali.Location = new System.Drawing.Point(239, 294);
            this.button_kali.Name = "button_kali";
            this.button_kali.Size = new System.Drawing.Size(71, 37);
            this.button_kali.TabIndex = 10;
            this.button_kali.Text = "*";
            this.button_kali.UseVisualStyleBackColor = true;
            this.button_kali.Click += new System.EventHandler(this.button_kali_Click);
            // 
            // button_bagi
            // 
            this.button_bagi.Font = new System.Drawing.Font("Showcard Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button_bagi.Location = new System.Drawing.Point(455, 245);
            this.button_bagi.Name = "button_bagi";
            this.button_bagi.Size = new System.Drawing.Size(71, 37);
            this.button_bagi.TabIndex = 9;
            this.button_bagi.Text = "/";
            this.button_bagi.UseVisualStyleBackColor = true;
            this.button_bagi.Click += new System.EventHandler(this.button_bagi_Click);
            // 
            // button_kurang
            // 
            this.button_kurang.Font = new System.Drawing.Font("Showcard Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button_kurang.Location = new System.Drawing.Point(313, 245);
            this.button_kurang.Name = "button_kurang";
            this.button_kurang.Size = new System.Drawing.Size(71, 37);
            this.button_kurang.TabIndex = 8;
            this.button_kurang.Text = "-";
            this.button_kurang.UseVisualStyleBackColor = true;
            this.button_kurang.Click += new System.EventHandler(this.button_kurang_Click);
            // 
            // button_jmlh
            // 
            this.button_jmlh.Font = new System.Drawing.Font("Showcard Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button_jmlh.Location = new System.Drawing.Point(157, 245);
            this.button_jmlh.Name = "button_jmlh";
            this.button_jmlh.Size = new System.Drawing.Size(71, 37);
            this.button_jmlh.TabIndex = 7;
            this.button_jmlh.Text = "+";
            this.button_jmlh.UseVisualStyleBackColor = true;
            this.button_jmlh.Click += new System.EventHandler(this.button_jmlh_Click);
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Times New Roman", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.ForeColor = System.Drawing.SystemColors.ControlText;
            this.label4.Location = new System.Drawing.Point(87, 220);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(75, 22);
            this.label4.TabIndex = 6;
            this.label4.Text = "Operasi";
            // 
            // txt_hasil
            // 
            this.txt_hasil.Location = new System.Drawing.Point(313, 171);
            this.txt_hasil.Name = "txt_hasil";
            this.txt_hasil.Size = new System.Drawing.Size(100, 20);
            this.txt_hasil.TabIndex = 5;
            // 
            // txt_bil2
            // 
            this.txt_bil2.Location = new System.Drawing.Point(313, 108);
            this.txt_bil2.Name = "txt_bil2";
            this.txt_bil2.Size = new System.Drawing.Size(100, 20);
            this.txt_bil2.TabIndex = 4;
            // 
            // txt_bil1
            // 
            this.txt_bil1.Location = new System.Drawing.Point(313, 44);
            this.txt_bil1.Name = "txt_bil1";
            this.txt_bil1.Size = new System.Drawing.Size(100, 20);
            this.txt_bil1.TabIndex = 3;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Times New Roman", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.ForeColor = System.Drawing.SystemColors.ControlText;
            this.label3.Location = new System.Drawing.Point(87, 168);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(52, 22);
            this.label3.TabIndex = 2;
            this.label3.Text = "Hasil";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Times New Roman", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.ForeColor = System.Drawing.SystemColors.ControlText;
            this.label2.Location = new System.Drawing.Point(87, 105);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(141, 22);
            this.label2.TabIndex = 1;
            this.label2.Text = "Bilangan Kedua";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Times New Roman", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.ForeColor = System.Drawing.SystemColors.ControlText;
            this.label1.Location = new System.Drawing.Point(87, 44);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(158, 22);
            this.label1.TabIndex = 0;
            this.label1.Text = "Bilangan Pertama";
            // 
            // Kalkulator_sederhana
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.SystemColors.AppWorkspace;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.groupBox1);
            this.ForeColor = System.Drawing.SystemColors.Highlight;
            this.Name = "Kalkulator_sederhana";
            this.Text = "Kalkulator_sederhana";
            this.groupBox1.ResumeLayout(false);
            this.groupBox1.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.GroupBox groupBox1;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox txt_bil1;
        private System.Windows.Forms.Button button_kali;
        private System.Windows.Forms.Button button_bagi;
        private System.Windows.Forms.Button button_kurang;
        private System.Windows.Forms.Button button_jmlh;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.TextBox txt_hasil;
        private System.Windows.Forms.TextBox txt_bil2;
        private System.Windows.Forms.Button button_new;
        private System.Windows.Forms.Button button_close;
    }
}