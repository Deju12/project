using System;
using System.Drawing;
using System.IO.Ports;
using System.Windows.Forms;

namespace Irrigation_System
{
    public partial class Form1 : Form
    {


        public Form1()
        {
            InitializeComponent();
        }

        private void comboBox1_DropDown(object sender, EventArgs e)
        {
            String[] portLists = SerialPort.GetPortNames();
            comboport.Items.Clear();
            comboport.Items.AddRange(portLists);

        }
        private void Form1_Load(object sender, EventArgs e)
        {
            panel1.Focus();
            CircularProgressBarHumidtiy.Value = 0;
            CircularProgressBarmoisture.Value = 0;
            PictureBoxPBTemp.Height = 0;
            comboBaud.SelectedIndex = 0;
            connect.Enabled = true;
            connect.BringToFront();
            statusconnect.SendToBack();
            statusdisconnect.BringToFront();
            pictureBox3.BackColor = Color.Red;
            button2.Enabled = false;
            button1.Enabled = false;
            disconnect.Enabled = false;
            disconnect.SendToBack();
            off.Enabled = false;
            on.Enabled = false;
            label12.Text = "";
        }



        private void on_Click(object sender, EventArgs e)
        {
            serialPort1.Write("cA");
            on.Enabled = false;
            off.Enabled = true;
        }


        private void connect_Click(object sender, EventArgs e)
        {

            if (comboport.SelectedItem == null)
            {
                MessageBox.Show("Pleas Select a COM Port!", "Message", MessageBoxButtons.OK);
            }
            
            if ((comboport.SelectedItem != null) && (comboBaud.SelectedItem != null))
            {
                serialPort1.PortName = comboport.SelectedItem.ToString();
                int selecteditem = (Int32)comboBaud.SelectedItem;
                serialPort1.BaudRate = selecteditem;
                serialPort1.Open();
                timer1.Start();
                connect.Enabled = false;
                connect.SendToBack();
                disconnect.Enabled = true;
                disconnect.BringToFront();
                comboBaud.Enabled = false;
                comboport.Enabled = false;
                off.Enabled = false;
                on.Enabled = true;
                button1.Enabled = true;
                button2.Enabled = false;
                statusoff.BringToFront();
                statuson.SendToBack();
                statusconnect.BringToFront();
                pictureBox3.BackColor = Color.Green;
                serialPort1.Write("cx");
                label12.Text = "Without Scheduled";

            }


        }



        private void disconnect_Click(object sender, EventArgs e)
        {
            
            
            timer1.Stop();
            disconnect.Enabled = false;
            disconnect.SendToBack();
            connect.Enabled = true;
            connect.BringToFront();
            comboBaud.Enabled = true;
            comboport.Enabled = true;
            comboport.SelectedItem = null;
            statusoff.BringToFront();
            statuson.SendToBack();
            statusdisconnect.BringToFront();
            pictureBox3.BackColor = Color.Red;
            PictureBoxPBTemp.Height =0;
            LabelTemperature.Text ="00.00 °C";
            CircularProgressBarHumidtiy.Value = 0;
            CircularProgressBarHumidtiy.Text ="00%";
            CircularProgressBarmoisture.Value = 0;
            CircularProgressBarmoisture.Text ="00%";
            button2.Enabled = false;
            button1.Enabled = false;
            off.Enabled = false;
            on.Enabled = false;
            String[] portLists = SerialPort.GetPortNames();
            comboport.Items.Clear();
            comboport.Items.AddRange(portLists);
            serialPort1.Close();
        }

        private void comboBaud_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void off_Click(object sender, EventArgs e)
        {
            serialPort1.Write("ca");
            off.Enabled = false;
            on.Enabled = true;
        }

        private void pictureBox2_Click(object sender, EventArgs e)
        {

        }

        private void label10_Click(object sender, EventArgs e)
        {

        }

        private void label13_Click(object sender, EventArgs e)
        {

        }

        private void label18_Click(object sender, EventArgs e)
        {

        }

        private void label4_Click(object sender, EventArgs e)
        {

        }

        private void label8_Click(object sender, EventArgs e)
        {

        }

        private void label14_Click(object sender, EventArgs e)
        {

        }
        string buffer = "";

        private void serialPort1_DataReceived(object sender, SerialDataReceivedEventArgs e)
        {
            buffer += serialPort1.ReadExisting();
        }
        private void ProcessData()
        {
            if (serialPort1.IsOpen)
            {
                buffer += serialPort1.ReadExisting(); 
            }
            else if (!serialPort1.IsOpen)
            {
                
                disconnect_Click(null, null);
            }
            
            while (buffer.Contains("\n"))
            {
                int endIndex = buffer.IndexOf('\n');
                string data = buffer.Substring(0, endIndex).Trim();
                buffer = buffer.Substring(endIndex + 1);

                // process data as before
                if (data.StartsWith("F"))
                {
                    
                    fail.Text = "Fail To Read from T and H";
                }
                    if (data.StartsWith("H"))
                {
                    string datavalue = data.Substring(1);
                    float Hum = float.Parse(datavalue);
                    int HumL = ((int)Hum);
                    CircularProgressBarHumidtiy.Value = HumL;
                    CircularProgressBarHumidtiy.Text = HumL + "%";
                    fail.Text = "";
                }
                if (data.StartsWith("T"))
                {
                    string datavalue = data.Substring(1);
                    float Temp = float.Parse(datavalue);
                    double Tempp = (Temp * 2.6);
                    int TempL = ((int)Tempp);
                    int temppro = ((int)Temp);


                    var loc = 75;
                    int originalheight = 157;
                    PictureBoxPBTemp.Height = TempL;
                    PictureBoxPBTemp.Location = new System.Drawing.Point(50, loc - (PictureBoxPBTemp.Height - originalheight));
                    LabelTemperature.Text = temppro + "°C";
                    fail.Text = "";
                }

                if (data.StartsWith("M"))
                {
                    string datavalue = data.Substring(1);
                    float moistur = float.Parse(datavalue);
                    moistur = (float)(moistur / 10.5);
                    int moisturl = ((int)moistur);

                    CircularProgressBarmoisture.Value = moisturl;
                    CircularProgressBarmoisture.Text = moisturl + "%";

                }
                if (data.StartsWith("R"))
                {
                    label14.SendToBack();
                    label15.BringToFront();
                }
                if (data.StartsWith("r"))
                {
                    label14.BringToFront();
                    label15.SendToBack();
                }
                if (data.StartsWith("L"))
                {
                    statusoff.BringToFront();
                    statuson.SendToBack();
                }
                if (data.StartsWith("l"))
                {
                    statuson.BringToFront();
                    statusoff.SendToBack();
                }
            }
        }

        // call ProcessData from a timer or other event
        

        private void timer1_Tick(object sender, EventArgs e)
        {

            ProcessData();

        }

        private void button1_Click(object sender, EventArgs e)
        {
            serialPort1.Write("cS");
            off.Enabled = false;
            on.Enabled = false;
            button2.Enabled = true;
            button1.Enabled = false;
            statusoff.BringToFront();
            statuson.SendToBack();
            label12.Text = "Scheduled";
        }

        private void button2_Click(object sender, EventArgs e)
        {
            serialPort1.Write("cs");
            off.Enabled = false;
            on.Enabled = true;
            button1.Enabled = true;
            button2.Enabled = false;
            statusoff.BringToFront();
            statuson.SendToBack();
            label12.Text = "Without Scheduled";
        }
    }
}
