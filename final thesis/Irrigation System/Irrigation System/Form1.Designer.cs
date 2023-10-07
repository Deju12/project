namespace Irrigation_System
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
            this.components = new System.ComponentModel.Container();
            this.panel1 = new System.Windows.Forms.Panel();
            this.pictureBox3 = new System.Windows.Forms.PictureBox();
            this.panel2 = new System.Windows.Forms.Panel();
            this.comboBaud = new System.Windows.Forms.ComboBox();
            this.comboport = new System.Windows.Forms.ComboBox();
            this.label3 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.disconnect = new System.Windows.Forms.Button();
            this.connect = new System.Windows.Forms.Button();
            this.statusconnect = new System.Windows.Forms.Label();
            this.statusdisconnect = new System.Windows.Forms.Label();
            this.panel3 = new System.Windows.Forms.Panel();
            this.label10 = new System.Windows.Forms.Label();
            this.off = new System.Windows.Forms.Button();
            this.on = new System.Windows.Forms.Button();
            this.label4 = new System.Windows.Forms.Label();
            this.statuson = new System.Windows.Forms.Label();
            this.statusoff = new System.Windows.Forms.Label();
            this.label6 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.panel4 = new System.Windows.Forms.Panel();
            this.fail = new System.Windows.Forms.Label();
            this.CircularProgressBarmoisture = new CircularProgressBar.CircularProgressBar();
            this.label21 = new System.Windows.Forms.Label();
            this.label13 = new System.Windows.Forms.Label();
            this.LabelTemperature = new System.Windows.Forms.Label();
            this.label11 = new System.Windows.Forms.Label();
            this.PictureBoxPBTemp = new System.Windows.Forms.PictureBox();
            this.PictureBoxPBTempBack = new System.Windows.Forms.PictureBox();
            this.label7 = new System.Windows.Forms.Label();
            this.panel5 = new System.Windows.Forms.Panel();
            this.label19 = new System.Windows.Forms.Label();
            this.button2 = new System.Windows.Forms.Button();
            this.label12 = new System.Windows.Forms.Label();
            this.button1 = new System.Windows.Forms.Button();
            this.CircularProgressBarHumidtiy = new CircularProgressBar.CircularProgressBar();
            this.label8 = new System.Windows.Forms.Label();
            this.panel6 = new System.Windows.Forms.Panel();
            this.label9 = new System.Windows.Forms.Label();
            this.label14 = new System.Windows.Forms.Label();
            this.label15 = new System.Windows.Forms.Label();
            this.errorProvider1 = new System.Windows.Forms.ErrorProvider(this.components);
            this.serialPort1 = new System.IO.Ports.SerialPort(this.components);
            this.timer1 = new System.Windows.Forms.Timer(this.components);
            this.panel1.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox3)).BeginInit();
            this.panel3.SuspendLayout();
            this.panel4.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.PictureBoxPBTemp)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.PictureBoxPBTempBack)).BeginInit();
            this.panel5.SuspendLayout();
            this.panel6.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.errorProvider1)).BeginInit();
            this.SuspendLayout();
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.White;
            this.panel1.BorderStyle = System.Windows.Forms.BorderStyle.Fixed3D;
            this.panel1.Controls.Add(this.pictureBox3);
            this.panel1.Controls.Add(this.panel2);
            this.panel1.Controls.Add(this.comboBaud);
            this.panel1.Controls.Add(this.comboport);
            this.panel1.Controls.Add(this.label3);
            this.panel1.Controls.Add(this.label2);
            this.panel1.Controls.Add(this.label1);
            this.panel1.Controls.Add(this.disconnect);
            this.panel1.Controls.Add(this.connect);
            this.panel1.Controls.Add(this.statusconnect);
            this.panel1.Controls.Add(this.statusdisconnect);
            this.panel1.Location = new System.Drawing.Point(0, 149);
            this.panel1.Margin = new System.Windows.Forms.Padding(0);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(1556, 121);
            this.panel1.TabIndex = 0;
            // 
            // pictureBox3
            // 
            this.pictureBox3.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(192)))), ((int)(((byte)(0)))));
            this.pictureBox3.Location = new System.Drawing.Point(1473, 74);
            this.pictureBox3.Name = "pictureBox3";
            this.pictureBox3.Size = new System.Drawing.Size(34, 29);
            this.pictureBox3.TabIndex = 8;
            this.pictureBox3.TabStop = false;
            // 
            // panel2
            // 
            this.panel2.Location = new System.Drawing.Point(0, 302);
            this.panel2.Name = "panel2";
            this.panel2.Size = new System.Drawing.Size(341, 521);
            this.panel2.TabIndex = 1;
            // 
            // comboBaud
            // 
            this.comboBaud.BackColor = System.Drawing.SystemColors.InactiveCaption;
            this.comboBaud.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.comboBaud.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.comboBaud.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.comboBaud.FormattingEnabled = true;
            this.comboBaud.Items.AddRange(new object[] {
            9600,
            14400,
            19200,
            38400,
            57600,
            115200});
            this.comboBaud.Location = new System.Drawing.Point(652, 71);
            this.comboBaud.Name = "comboBaud";
            this.comboBaud.Size = new System.Drawing.Size(199, 31);
            this.comboBaud.TabIndex = 4;
            this.comboBaud.SelectedIndexChanged += new System.EventHandler(this.comboBaud_SelectedIndexChanged);
            // 
            // comboport
            // 
            this.comboport.BackColor = System.Drawing.SystemColors.InactiveCaption;
            this.comboport.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.comboport.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.comboport.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.comboport.ForeColor = System.Drawing.Color.Black;
            this.comboport.FormattingEnabled = true;
            this.comboport.Location = new System.Drawing.Point(174, 72);
            this.comboport.Name = "comboport";
            this.comboport.Size = new System.Drawing.Size(262, 31);
            this.comboport.TabIndex = 3;
            this.comboport.DropDown += new System.EventHandler(this.comboBox1_DropDown);
            // 
            // label3
            // 
            this.label3.BackColor = System.Drawing.Color.Green;
            this.label3.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.ForeColor = System.Drawing.Color.White;
            this.label3.Location = new System.Drawing.Point(459, 71);
            this.label3.Name = "label3";
            this.label3.Padding = new System.Windows.Forms.Padding(1);
            this.label3.Size = new System.Drawing.Size(187, 31);
            this.label3.TabIndex = 2;
            this.label3.Text = "Baud Rate";
            this.label3.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // label2
            // 
            this.label2.BackColor = System.Drawing.Color.Green;
            this.label2.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.ForeColor = System.Drawing.Color.White;
            this.label2.Location = new System.Drawing.Point(3, 71);
            this.label2.Name = "label2";
            this.label2.Padding = new System.Windows.Forms.Padding(1);
            this.label2.Size = new System.Drawing.Size(165, 31);
            this.label2.TabIndex = 1;
            this.label2.Text = "Serial Port";
            this.label2.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // label1
            // 
            this.label1.BackColor = System.Drawing.Color.White;
            this.label1.Font = new System.Drawing.Font("Times New Roman", 25.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.ForeColor = System.Drawing.Color.Maroon;
            this.label1.Location = new System.Drawing.Point(0, 8);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(851, 49);
            this.label1.TabIndex = 0;
            this.label1.Text = "Connection";
            this.label1.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // disconnect
            // 
            this.disconnect.BackColor = System.Drawing.Color.Red;
            this.disconnect.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.disconnect.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.disconnect.ForeColor = System.Drawing.Color.White;
            this.disconnect.Location = new System.Drawing.Point(866, 61);
            this.disconnect.Name = "disconnect";
            this.disconnect.Size = new System.Drawing.Size(300, 49);
            this.disconnect.TabIndex = 6;
            this.disconnect.Text = "Disconnect";
            this.disconnect.UseVisualStyleBackColor = false;
            this.disconnect.Click += new System.EventHandler(this.disconnect_Click);
            // 
            // connect
            // 
            this.connect.BackColor = System.Drawing.Color.Green;
            this.connect.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.connect.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.connect.ForeColor = System.Drawing.Color.White;
            this.connect.Location = new System.Drawing.Point(866, 60);
            this.connect.Name = "connect";
            this.connect.Size = new System.Drawing.Size(300, 49);
            this.connect.TabIndex = 5;
            this.connect.Text = "Connect";
            this.connect.UseVisualStyleBackColor = false;
            this.connect.Click += new System.EventHandler(this.connect_Click);
            // 
            // statusconnect
            // 
            this.statusconnect.Font = new System.Drawing.Font("Times New Roman", 16.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.statusconnect.ForeColor = System.Drawing.Color.Black;
            this.statusconnect.Location = new System.Drawing.Point(1172, 71);
            this.statusconnect.Name = "statusconnect";
            this.statusconnect.Size = new System.Drawing.Size(295, 32);
            this.statusconnect.TabIndex = 7;
            this.statusconnect.Text = "Status : Connected";
            this.statusconnect.TextAlign = System.Drawing.ContentAlignment.MiddleRight;
            // 
            // statusdisconnect
            // 
            this.statusdisconnect.Font = new System.Drawing.Font("Times New Roman", 16.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.statusdisconnect.ForeColor = System.Drawing.Color.Black;
            this.statusdisconnect.Location = new System.Drawing.Point(1172, 70);
            this.statusdisconnect.Name = "statusdisconnect";
            this.statusdisconnect.Size = new System.Drawing.Size(300, 32);
            this.statusdisconnect.TabIndex = 9;
            this.statusdisconnect.Text = "Status : Disconnected";
            this.statusdisconnect.TextAlign = System.Drawing.ContentAlignment.MiddleRight;
            // 
            // panel3
            // 
            this.panel3.BackColor = System.Drawing.Color.White;
            this.panel3.BorderStyle = System.Windows.Forms.BorderStyle.Fixed3D;
            this.panel3.Controls.Add(this.label10);
            this.panel3.Controls.Add(this.off);
            this.panel3.Controls.Add(this.on);
            this.panel3.Controls.Add(this.label4);
            this.panel3.Controls.Add(this.statuson);
            this.panel3.Controls.Add(this.statusoff);
            this.panel3.Location = new System.Drawing.Point(0, 276);
            this.panel3.Name = "panel3";
            this.panel3.Size = new System.Drawing.Size(343, 548);
            this.panel3.TabIndex = 1;
            // 
            // label10
            // 
            this.label10.BackColor = System.Drawing.Color.White;
            this.label10.Font = new System.Drawing.Font("Times New Roman", 22.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label10.ForeColor = System.Drawing.Color.Indigo;
            this.label10.Location = new System.Drawing.Point(3, 331);
            this.label10.Name = "label10";
            this.label10.Size = new System.Drawing.Size(338, 41);
            this.label10.TabIndex = 3;
            this.label10.Text = "Moter status";
            this.label10.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            this.label10.Click += new System.EventHandler(this.label10_Click);
            // 
            // off
            // 
            this.off.BackColor = System.Drawing.Color.Red;
            this.off.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.off.Font = new System.Drawing.Font("Times New Roman", 16.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.off.ForeColor = System.Drawing.Color.White;
            this.off.Location = new System.Drawing.Point(7, 207);
            this.off.Name = "off";
            this.off.Size = new System.Drawing.Size(332, 69);
            this.off.TabIndex = 5;
            this.off.Text = "OFF";
            this.off.UseVisualStyleBackColor = false;
            this.off.Click += new System.EventHandler(this.off_Click);
            // 
            // on
            // 
            this.on.BackColor = System.Drawing.Color.LimeGreen;
            this.on.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.on.Font = new System.Drawing.Font("Times New Roman", 16.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.on.ForeColor = System.Drawing.Color.White;
            this.on.Location = new System.Drawing.Point(7, 113);
            this.on.Name = "on";
            this.on.Size = new System.Drawing.Size(332, 69);
            this.on.TabIndex = 5;
            this.on.Text = "ON";
            this.on.UseVisualStyleBackColor = false;
            this.on.Click += new System.EventHandler(this.on_Click);
            // 
            // label4
            // 
            this.label4.BackColor = System.Drawing.Color.White;
            this.label4.Font = new System.Drawing.Font("Times New Roman", 22.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.ForeColor = System.Drawing.Color.Green;
            this.label4.Location = new System.Drawing.Point(7, 30);
            this.label4.Margin = new System.Windows.Forms.Padding(0);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(332, 46);
            this.label4.TabIndex = 2;
            this.label4.Text = "Irrigation Control";
            this.label4.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            this.label4.Click += new System.EventHandler(this.label4_Click);
            // 
            // statuson
            // 
            this.statuson.BackColor = System.Drawing.Color.Indigo;
            this.statuson.Font = new System.Drawing.Font("Times New Roman", 19.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.statuson.ForeColor = System.Drawing.Color.White;
            this.statuson.Location = new System.Drawing.Point(3, 409);
            this.statuson.Name = "statuson";
            this.statuson.Size = new System.Drawing.Size(334, 90);
            this.statuson.TabIndex = 6;
            this.statuson.Text = "Moter Is ON";
            this.statuson.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // statusoff
            // 
            this.statusoff.BackColor = System.Drawing.Color.Indigo;
            this.statusoff.Font = new System.Drawing.Font("Times New Roman", 19.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.statusoff.ForeColor = System.Drawing.Color.White;
            this.statusoff.Location = new System.Drawing.Point(2, 409);
            this.statusoff.Name = "statusoff";
            this.statusoff.Size = new System.Drawing.Size(334, 90);
            this.statusoff.TabIndex = 3;
            this.statusoff.Text = "Moter Is OFF";
            this.statusoff.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // label6
            // 
            this.label6.BackColor = System.Drawing.Color.Black;
            this.label6.Font = new System.Drawing.Font("Times New Roman", 36F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label6.ForeColor = System.Drawing.Color.Green;
            this.label6.Location = new System.Drawing.Point(807, 0);
            this.label6.Margin = new System.Windows.Forms.Padding(0);
            this.label6.Name = "label6";
            this.label6.Padding = new System.Windows.Forms.Padding(1, 6, 1, 1);
            this.label6.Size = new System.Drawing.Size(749, 159);
            this.label6.TabIndex = 3;
            this.label6.Text = "          Advanced Plant\r\n         Irrigation System";
            // 
            // label5
            // 
            this.label5.Image = global::Irrigation_System.Properties.Resources.samara;
            this.label5.ImageAlign = System.Drawing.ContentAlignment.BottomRight;
            this.label5.Location = new System.Drawing.Point(-3, 0);
            this.label5.Margin = new System.Windows.Forms.Padding(0);
            this.label5.Name = "label5";
            this.label5.RightToLeft = System.Windows.Forms.RightToLeft.No;
            this.label5.Size = new System.Drawing.Size(819, 159);
            this.label5.TabIndex = 2;
            // 
            // panel4
            // 
            this.panel4.AutoSizeMode = System.Windows.Forms.AutoSizeMode.GrowAndShrink;
            this.panel4.BackColor = System.Drawing.Color.White;
            this.panel4.BorderStyle = System.Windows.Forms.BorderStyle.Fixed3D;
            this.panel4.Controls.Add(this.fail);
            this.panel4.Controls.Add(this.CircularProgressBarmoisture);
            this.panel4.Controls.Add(this.label21);
            this.panel4.Controls.Add(this.label13);
            this.panel4.Controls.Add(this.LabelTemperature);
            this.panel4.Controls.Add(this.label11);
            this.panel4.Controls.Add(this.PictureBoxPBTemp);
            this.panel4.Controls.Add(this.PictureBoxPBTempBack);
            this.panel4.Controls.Add(this.label7);
            this.panel4.ForeColor = System.Drawing.SystemColors.ControlDarkDark;
            this.panel4.Location = new System.Drawing.Point(349, 276);
            this.panel4.Name = "panel4";
            this.panel4.Size = new System.Drawing.Size(426, 548);
            this.panel4.TabIndex = 4;
            // 
            // fail
            // 
            this.fail.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.fail.ForeColor = System.Drawing.Color.Red;
            this.fail.Location = new System.Drawing.Point(177, 82);
            this.fail.Name = "fail";
            this.fail.Size = new System.Drawing.Size(247, 53);
            this.fail.TabIndex = 8;
            // 
            // CircularProgressBarmoisture
            // 
            this.CircularProgressBarmoisture.AnimationFunction = WinFormAnimation.KnownAnimationFunctions.Liner;
            this.CircularProgressBarmoisture.AnimationSpeed = 500;
            this.CircularProgressBarmoisture.BackColor = System.Drawing.Color.Transparent;
            this.CircularProgressBarmoisture.Font = new System.Drawing.Font("Times New Roman", 28.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.CircularProgressBarmoisture.ForeColor = System.Drawing.Color.SlateGray;
            this.CircularProgressBarmoisture.InnerColor = System.Drawing.Color.White;
            this.CircularProgressBarmoisture.InnerMargin = 2;
            this.CircularProgressBarmoisture.InnerWidth = -1;
            this.CircularProgressBarmoisture.Location = new System.Drawing.Point(99, 347);
            this.CircularProgressBarmoisture.MarqueeAnimationSpeed = 2000;
            this.CircularProgressBarmoisture.Name = "CircularProgressBarmoisture";
            this.CircularProgressBarmoisture.OuterColor = System.Drawing.Color.LightGray;
            this.CircularProgressBarmoisture.OuterMargin = -25;
            this.CircularProgressBarmoisture.OuterWidth = 26;
            this.CircularProgressBarmoisture.ProgressColor = System.Drawing.Color.SlateGray;
            this.CircularProgressBarmoisture.ProgressWidth = 25;
            this.CircularProgressBarmoisture.SecondaryFont = new System.Drawing.Font("Times New Roman", 22.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.CircularProgressBarmoisture.Size = new System.Drawing.Size(210, 186);
            this.CircularProgressBarmoisture.StartAngle = 90;
            this.CircularProgressBarmoisture.SubscriptColor = System.Drawing.Color.Black;
            this.CircularProgressBarmoisture.SubscriptMargin = new System.Windows.Forms.Padding(10, -35, 0, 0);
            this.CircularProgressBarmoisture.SubscriptText = "";
            this.CircularProgressBarmoisture.SuperscriptColor = System.Drawing.Color.Black;
            this.CircularProgressBarmoisture.SuperscriptMargin = new System.Windows.Forms.Padding(10, 35, 0, 0);
            this.CircularProgressBarmoisture.SuperscriptText = "";
            this.CircularProgressBarmoisture.TabIndex = 4;
            this.CircularProgressBarmoisture.Text = "00%";
            this.CircularProgressBarmoisture.TextMargin = new System.Windows.Forms.Padding(8, 8, 0, 0);
            this.CircularProgressBarmoisture.Value = 68;
            // 
            // label21
            // 
            this.label21.BackColor = System.Drawing.Color.White;
            this.label21.Font = new System.Drawing.Font("Times New Roman", 22.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label21.ForeColor = System.Drawing.Color.SlateGray;
            this.label21.Location = new System.Drawing.Point(-9, 296);
            this.label21.Margin = new System.Windows.Forms.Padding(0);
            this.label21.Name = "label21";
            this.label21.Size = new System.Drawing.Size(422, 46);
            this.label21.TabIndex = 5;
            this.label21.Text = "Moisture Level Status";
            this.label21.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // label13
            // 
            this.label13.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label13.ForeColor = System.Drawing.Color.Gray;
            this.label13.Location = new System.Drawing.Point(114, 267);
            this.label13.Name = "label13";
            this.label13.Size = new System.Drawing.Size(54, 29);
            this.label13.TabIndex = 7;
            this.label13.Text = "0";
            this.label13.Click += new System.EventHandler(this.label13_Click);
            // 
            // LabelTemperature
            // 
            this.LabelTemperature.Font = new System.Drawing.Font("Times New Roman", 25.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.LabelTemperature.ForeColor = System.Drawing.Color.Orange;
            this.LabelTemperature.Location = new System.Drawing.Point(132, 165);
            this.LabelTemperature.Name = "LabelTemperature";
            this.LabelTemperature.Size = new System.Drawing.Size(231, 53);
            this.LabelTemperature.TabIndex = 6;
            this.LabelTemperature.Text = "00.00 °C";
            // 
            // label11
            // 
            this.label11.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label11.ForeColor = System.Drawing.Color.Gray;
            this.label11.Location = new System.Drawing.Point(114, 82);
            this.label11.Name = "label11";
            this.label11.Size = new System.Drawing.Size(41, 32);
            this.label11.TabIndex = 5;
            this.label11.Text = "60";
            // 
            // PictureBoxPBTemp
            // 
            this.PictureBoxPBTemp.BackColor = System.Drawing.Color.Orange;
            this.PictureBoxPBTemp.Location = new System.Drawing.Point(67, 139);
            this.PictureBoxPBTemp.Name = "PictureBoxPBTemp";
            this.PictureBoxPBTemp.Size = new System.Drawing.Size(41, 148);
            this.PictureBoxPBTemp.TabIndex = 4;
            this.PictureBoxPBTemp.TabStop = false;
            this.PictureBoxPBTemp.Click += new System.EventHandler(this.pictureBox2_Click);
            // 
            // PictureBoxPBTempBack
            // 
            this.PictureBoxPBTempBack.BackColor = System.Drawing.Color.LightGray;
            this.PictureBoxPBTempBack.Location = new System.Drawing.Point(67, 91);
            this.PictureBoxPBTempBack.Name = "PictureBoxPBTempBack";
            this.PictureBoxPBTempBack.Size = new System.Drawing.Size(41, 196);
            this.PictureBoxPBTempBack.TabIndex = 3;
            this.PictureBoxPBTempBack.TabStop = false;
            // 
            // label7
            // 
            this.label7.BackColor = System.Drawing.Color.White;
            this.label7.Font = new System.Drawing.Font("Times New Roman", 24F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label7.ForeColor = System.Drawing.Color.Orange;
            this.label7.Location = new System.Drawing.Point(46, 18);
            this.label7.Margin = new System.Windows.Forms.Padding(0);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(340, 46);
            this.label7.TabIndex = 2;
            this.label7.Text = "Temprature Status";
            this.label7.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // panel5
            // 
            this.panel5.BackColor = System.Drawing.Color.White;
            this.panel5.BorderStyle = System.Windows.Forms.BorderStyle.Fixed3D;
            this.panel5.Controls.Add(this.label19);
            this.panel5.Controls.Add(this.button2);
            this.panel5.Controls.Add(this.label12);
            this.panel5.Controls.Add(this.button1);
            this.panel5.Controls.Add(this.CircularProgressBarHumidtiy);
            this.panel5.Controls.Add(this.label8);
            this.panel5.Location = new System.Drawing.Point(781, 276);
            this.panel5.Name = "panel5";
            this.panel5.Size = new System.Drawing.Size(378, 548);
            this.panel5.TabIndex = 5;
            // 
            // label19
            // 
            this.label19.BackColor = System.Drawing.Color.White;
            this.label19.Font = new System.Drawing.Font("Times New Roman", 22.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label19.ForeColor = System.Drawing.Color.Olive;
            this.label19.Location = new System.Drawing.Point(16, 301);
            this.label19.Name = "label19";
            this.label19.Size = new System.Drawing.Size(338, 41);
            this.label19.TabIndex = 9;
            this.label19.Text = "Time Sheduling";
            this.label19.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // button2
            // 
            this.button2.BackColor = System.Drawing.Color.Olive;
            this.button2.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.button2.Font = new System.Drawing.Font("Times New Roman", 16.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button2.ForeColor = System.Drawing.Color.White;
            this.button2.Location = new System.Drawing.Point(195, 367);
            this.button2.Name = "button2";
            this.button2.Size = new System.Drawing.Size(139, 48);
            this.button2.TabIndex = 8;
            this.button2.Text = "Stop";
            this.button2.UseVisualStyleBackColor = false;
            this.button2.Click += new System.EventHandler(this.button2_Click);
            // 
            // label12
            // 
            this.label12.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(192)))), ((int)(((byte)(192)))), ((int)(((byte)(0)))));
            this.label12.Font = new System.Drawing.Font("Times New Roman", 19.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label12.ForeColor = System.Drawing.Color.White;
            this.label12.Location = new System.Drawing.Point(16, 440);
            this.label12.Name = "label12";
            this.label12.Size = new System.Drawing.Size(334, 49);
            this.label12.TabIndex = 7;
            this.label12.Text = "Schedule Started";
            this.label12.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // button1
            // 
            this.button1.BackColor = System.Drawing.Color.Olive;
            this.button1.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.button1.Font = new System.Drawing.Font("Times New Roman", 16.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button1.ForeColor = System.Drawing.Color.White;
            this.button1.Location = new System.Drawing.Point(23, 367);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(139, 48);
            this.button1.TabIndex = 6;
            this.button1.Text = "Start";
            this.button1.UseVisualStyleBackColor = false;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // CircularProgressBarHumidtiy
            // 
            this.CircularProgressBarHumidtiy.AnimationFunction = WinFormAnimation.KnownAnimationFunctions.Liner;
            this.CircularProgressBarHumidtiy.AnimationSpeed = 500;
            this.CircularProgressBarHumidtiy.BackColor = System.Drawing.Color.Transparent;
            this.CircularProgressBarHumidtiy.Font = new System.Drawing.Font("Times New Roman", 28.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.CircularProgressBarHumidtiy.ForeColor = System.Drawing.Color.DodgerBlue;
            this.CircularProgressBarHumidtiy.InnerColor = System.Drawing.Color.White;
            this.CircularProgressBarHumidtiy.InnerMargin = 2;
            this.CircularProgressBarHumidtiy.InnerWidth = -1;
            this.CircularProgressBarHumidtiy.Location = new System.Drawing.Point(75, 82);
            this.CircularProgressBarHumidtiy.MarqueeAnimationSpeed = 2000;
            this.CircularProgressBarHumidtiy.Name = "CircularProgressBarHumidtiy";
            this.CircularProgressBarHumidtiy.OuterColor = System.Drawing.Color.LightGray;
            this.CircularProgressBarHumidtiy.OuterMargin = -25;
            this.CircularProgressBarHumidtiy.OuterWidth = 26;
            this.CircularProgressBarHumidtiy.ProgressColor = System.Drawing.Color.DodgerBlue;
            this.CircularProgressBarHumidtiy.ProgressWidth = 25;
            this.CircularProgressBarHumidtiy.SecondaryFont = new System.Drawing.Font("Times New Roman", 22.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.CircularProgressBarHumidtiy.Size = new System.Drawing.Size(210, 185);
            this.CircularProgressBarHumidtiy.StartAngle = 90;
            this.CircularProgressBarHumidtiy.SubscriptColor = System.Drawing.Color.Black;
            this.CircularProgressBarHumidtiy.SubscriptMargin = new System.Windows.Forms.Padding(10, -35, 0, 0);
            this.CircularProgressBarHumidtiy.SubscriptText = "";
            this.CircularProgressBarHumidtiy.SuperscriptColor = System.Drawing.Color.Black;
            this.CircularProgressBarHumidtiy.SuperscriptMargin = new System.Windows.Forms.Padding(10, 35, 0, 0);
            this.CircularProgressBarHumidtiy.SuperscriptText = "";
            this.CircularProgressBarHumidtiy.TabIndex = 3;
            this.CircularProgressBarHumidtiy.Text = "00%";
            this.CircularProgressBarHumidtiy.TextMargin = new System.Windows.Forms.Padding(8, 8, 0, 0);
            this.CircularProgressBarHumidtiy.Value = 68;
            // 
            // label8
            // 
            this.label8.BackColor = System.Drawing.Color.White;
            this.label8.Font = new System.Drawing.Font("Times New Roman", 24F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label8.ForeColor = System.Drawing.Color.DodgerBlue;
            this.label8.Location = new System.Drawing.Point(28, 18);
            this.label8.Margin = new System.Windows.Forms.Padding(0);
            this.label8.Name = "label8";
            this.label8.Size = new System.Drawing.Size(334, 46);
            this.label8.TabIndex = 2;
            this.label8.Text = "Humidity Status";
            this.label8.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            this.label8.Click += new System.EventHandler(this.label8_Click);
            // 
            // panel6
            // 
            this.panel6.BackColor = System.Drawing.Color.White;
            this.panel6.BorderStyle = System.Windows.Forms.BorderStyle.Fixed3D;
            this.panel6.Controls.Add(this.label9);
            this.panel6.Controls.Add(this.label14);
            this.panel6.Controls.Add(this.label15);
            this.panel6.Location = new System.Drawing.Point(1165, 276);
            this.panel6.Name = "panel6";
            this.panel6.Size = new System.Drawing.Size(354, 548);
            this.panel6.TabIndex = 6;
            // 
            // label9
            // 
            this.label9.BackColor = System.Drawing.Color.White;
            this.label9.Font = new System.Drawing.Font("Times New Roman", 24F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label9.ForeColor = System.Drawing.Color.BlueViolet;
            this.label9.Location = new System.Drawing.Point(0, 188);
            this.label9.Margin = new System.Windows.Forms.Padding(0);
            this.label9.Name = "label9";
            this.label9.Size = new System.Drawing.Size(348, 46);
            this.label9.TabIndex = 2;
            this.label9.Text = "Rain Status";
            this.label9.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // label14
            // 
            this.label14.BackColor = System.Drawing.Color.BlueViolet;
            this.label14.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label14.Cursor = System.Windows.Forms.Cursors.Arrow;
            this.label14.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.label14.Font = new System.Drawing.Font("Times New Roman", 16.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label14.ForeColor = System.Drawing.Color.White;
            this.label14.Location = new System.Drawing.Point(-2, 288);
            this.label14.Name = "label14";
            this.label14.Size = new System.Drawing.Size(344, 69);
            this.label14.TabIndex = 3;
            this.label14.Text = "Raining";
            this.label14.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            this.label14.Click += new System.EventHandler(this.label14_Click);
            // 
            // label15
            // 
            this.label15.BackColor = System.Drawing.Color.BlueViolet;
            this.label15.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label15.Cursor = System.Windows.Forms.Cursors.Arrow;
            this.label15.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.label15.Font = new System.Drawing.Font("Times New Roman", 16.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label15.ForeColor = System.Drawing.Color.White;
            this.label15.Location = new System.Drawing.Point(-2, 288);
            this.label15.Name = "label15";
            this.label15.Size = new System.Drawing.Size(344, 69);
            this.label15.TabIndex = 4;
            this.label15.Text = "NOT Raining";
            this.label15.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // errorProvider1
            // 
            this.errorProvider1.ContainerControl = this;
            // 
            // timer1
            // 
            this.timer1.Interval = 600;
            this.timer1.Tick += new System.EventHandler(this.timer1_Tick);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.White;
            this.ClientSize = new System.Drawing.Size(1552, 836);
            this.Controls.Add(this.panel6);
            this.Controls.Add(this.panel5);
            this.Controls.Add(this.panel4);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.label6);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.panel3);
            this.MaximizeBox = false;
            this.MaximumSize = new System.Drawing.Size(1570, 883);
            this.MinimumSize = new System.Drawing.Size(1570, 883);
            this.Name = "Form1";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Advanced Irrigation System";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.panel1.ResumeLayout(false);
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox3)).EndInit();
            this.panel3.ResumeLayout(false);
            this.panel4.ResumeLayout(false);
            ((System.ComponentModel.ISupportInitialize)(this.PictureBoxPBTemp)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.PictureBoxPBTempBack)).EndInit();
            this.panel5.ResumeLayout(false);
            this.panel6.ResumeLayout(false);
            ((System.ComponentModel.ISupportInitialize)(this.errorProvider1)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.ComboBox comboBaud;
        private System.Windows.Forms.ComboBox comboport;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button disconnect;
        private System.Windows.Forms.Button connect;
        private System.Windows.Forms.Panel panel2;
        private System.Windows.Forms.Panel panel3;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.Panel panel4;
        private System.Windows.Forms.Label label7;
        private System.Windows.Forms.Panel panel5;
        private System.Windows.Forms.Label label8;
        private System.Windows.Forms.Panel panel6;
        private System.Windows.Forms.Label label9;
        private System.Windows.Forms.Button off;
        private System.Windows.Forms.Button on;
        private System.Windows.Forms.Label statusoff;
        private System.Windows.Forms.Label label10;
        private System.Windows.Forms.ErrorProvider errorProvider1;
        private System.IO.Ports.SerialPort serialPort1;
        private System.Windows.Forms.Label statuson;
        private CircularProgressBar.CircularProgressBar CircularProgressBarHumidtiy;
        private System.Windows.Forms.PictureBox PictureBoxPBTempBack;
        private System.Windows.Forms.Label label13;
        private System.Windows.Forms.Label LabelTemperature;
        private System.Windows.Forms.Label label11;
        private System.Windows.Forms.PictureBox PictureBoxPBTemp;
        private System.Windows.Forms.Label label15;
        private System.Windows.Forms.Label label14;
        private System.Windows.Forms.PictureBox pictureBox3;
        private System.Windows.Forms.Label statusconnect;
        private System.Windows.Forms.Label statusdisconnect;
        private System.Windows.Forms.Label label21;
        private CircularProgressBar.CircularProgressBar CircularProgressBarmoisture;
        private System.Windows.Forms.Timer timer1;
        private System.Windows.Forms.Label label12;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.Label label19;
        private System.Windows.Forms.Button button2;
        private System.Windows.Forms.Label fail;
    }
}

