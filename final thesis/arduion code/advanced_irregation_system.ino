#include "DHT.h"
#include <LiquidCrystal.h>
const int rs = 2, en = 3, d4 = 4, d5 = 5, d6 = 6, d7 = 7;
LiquidCrystal lcd(rs, en, d4, d5, d6, d7);
const int relay_Pin = 8;
const int DHT11_Sesnor = 9;
const int moisture_sensor = A0;
const int rain_Sesnor = 10;
String data;
char dl = 'x';
char dt = 'z';

#define DHTTYPE DHT11
int moisture_sensor_value;
int rain_Sesnor_value;
float humudity_value, temprature_value;
DHT dht(DHT11_Sesnor, DHTTYPE);

void setup()
{
    Serial.begin(9600);
    pinMode(relay_Pin, OUTPUT);
    pinMode(rain_Sesnor, INPUT);
    digitalWrite(relay_Pin, LOW);
    lcd.begin(16, 2);
    lcd.print("Advanced Plant");
    lcd.setCursor(0,2);
    lcd.print("Irrigation System");
    dht.begin();
}
void loop()
{
    readDTH11_Sesnor();
    moisture_level_detected();
    b();
    delay(400);
}

void readDTH11_Sesnor()
{

    // Reading temperature or humidity takes about 250 milliseconds!
    // Sensor readings may also be up to 2 seconds 'old' (its a very sLOW sensor)
  
    humudity_value = dht.readHumidity();
    // Read temperature as Celsius (the default)
    
    temprature_value = dht.readTemperature();

    // Check if any reads failed and exit early (to try again).
    if (isnan(humudity_value) || isnan(temprature_value))
    {
        Serial.println("F");
    }
    else
    {  
        Serial.print("H");
        Serial.println(humudity_value);
        Serial.print("T");
        Serial.println(temprature_value);
    }
}

void moisture_level_detected()
{ 
    moisture_sensor_value = analogRead(moisture_sensor);
    Serial.print("M");
    Serial.println(moisture_sensor_value);
}
void b()
{
    if (Serial.available())
    {
        dl = Serial.read();
        dt = Serial.read();
    }
    if (dl == 'c')
    {
        if (dt == 'x')
        {
            rain_Sesnor_value = digitalRead(rain_Sesnor);
            if (rain_Sesnor_value == false)
            {
                Serial.println("R");
                if (moisture_sensor_value != 0)
                {
                    if (moisture_sensor_value < 500)
                    {
                        digitalWrite(relay_Pin, HIGH);
                        Serial.println("l");
                    }
                    else
                    {
                        digitalWrite(relay_Pin, LOW);
                        Serial.println("L");
                    }
                }
                else
                {
                    digitalWrite(relay_Pin, HIGH);
                    Serial.println("l");
                    delay(1000);
                    digitalWrite(relay_Pin, LOW);
                    Serial.println("L");
                    delay(600);
                }
            }
            else
            {
                Serial.println("r");
                digitalWrite(relay_Pin, LOW);
            }
        }
        else if (dt == 'A')
        {
           if (rain_Sesnor_value == false)
            {
                Serial.println("R");
            }
            digitalWrite(relay_Pin, HIGH);
            Serial.println("l");
        }
        else if (dt == 'a')
        {
           if (rain_Sesnor_value == false)
            {
                Serial.println("R");
            }
            digitalWrite(relay_Pin, LOW);
            Serial.println("L");
        }
        else if (dt == 'S')
        {
           if (rain_Sesnor_value == false)
            {
                Serial.println("R");
            }
            digitalWrite(relay_Pin, HIGH);
            Serial.println("l");
            delay(1000);
            digitalWrite(relay_Pin, LOW);
            Serial.println("L");
            delay(600);
        }
        else if (dt == 's')
        {
            rain_Sesnor_value = digitalRead(rain_Sesnor);
            if (rain_Sesnor_value == false)
            {
                Serial.println("R");
                if (moisture_sensor_value != 0)
                {
                    if (moisture_sensor_value < 500)
                    {
                        digitalWrite(relay_Pin, HIGH);
                        Serial.println("l");
                    }
                    else
                    {
                        digitalWrite(relay_Pin, LOW);
                        Serial.println("L");
                    }
                }
                else if (moisture_sensor_value == 0)
                {
                    digitalWrite(relay_Pin, HIGH);
                    Serial.println("l");
                    delay(1000);
                    digitalWrite(relay_Pin, LOW);
                    Serial.println("L");
                    delay(600);
                }
            }
            else
            {
                Serial.println("r");
                digitalWrite(relay_Pin, LOW);
                Serial.println("L");
            }
        }
    }
    else if (dl == 'x')
    {
        rain_Sesnor_value = digitalRead(rain_Sesnor);
        if (rain_Sesnor_value == false)
        {
            Serial.println("R");
            if (moisture_sensor_value != 0)
            {
                if (moisture_sensor_value < 500)
                {
                    digitalWrite(relay_Pin, HIGH);
                    Serial.println("l");
                }
                else
                {
                    digitalWrite(relay_Pin, LOW);
                    Serial.println("L");
                }
            }
            else if (moisture_sensor_value == 0)
            {
                digitalWrite(relay_Pin, HIGH);
                Serial.println("l");
                delay(1000);
                digitalWrite(relay_Pin, LOW);
                Serial.println("L");
                delay(600);
            }
        }
        else
        {
            Serial.println("r");
            digitalWrite(relay_Pin, LOW);
            Serial.println("L");
        }
    }
}