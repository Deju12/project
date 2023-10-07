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
    digitalWrite(relay_Pin, HIGH);
    lcd.begin(16, 2);
    lcd.print("Advanced Plant");
    lcd.setCursor(0, 2);
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
    // Sensor readings may also be up to 2 seconds 'old' (its a very sHIGH sensor)

    humudity_value = dht.readHumidity();
    // Read temperature as Celsius (the default)

    temprature_value = dht.readTemperature();

    // Check if any reads failed and exit early (to try again).
    if (isnan(humudity_value) || isnan(temprature_value))
    {
        Serial.println("F");
        lcd.clear();
        lcd.print("Fail To Read");
        lcd.setCursor(0, 2);
        lcd.print("From DHT Sensor");
        delay(1000);
    }
    else
    {
        Serial.print("H");
        Serial.println(humudity_value);
        lcd.clear();
        lcd.print("Humidity %: ");
        lcd.setCursor(0, 2);
        lcd.print(humudity_value);
        delay(1000);
        Serial.print("T");
        Serial.println(temprature_value);
        lcd.clear();
        lcd.print("Temperature degCel");
        lcd.setCursor(0, 2);
        lcd.print(temprature_value);
        delay(1000);
    }
}

void moisture_level_detected()
{
    moisture_sensor_value = analogRead(moisture_sensor);
    Serial.print("M");
    Serial.println(moisture_sensor_value);
    lcd.clear();
    lcd.print("Moisture Level :");
    lcd.setCursor(0, 2);
    lcd.print(moisture_sensor_value);
    delay(1000);
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
                        digitalWrite(relay_Pin, LOW);
                        Serial.println("l");
                        lcd.clear();
                        lcd.print("Low water level");
                        lcd.setCursor(0, 2);
                        lcd.print("Motor ON");
                        delay(1000);
                    }
                    else
                    {
                        digitalWrite(relay_Pin, HIGH);
                        Serial.println("L");
                        lcd.clear();
                        lcd.print("Water Level Ok");
                        lcd.setCursor(0, 2);
                        lcd.print("Motor OFF");
                        delay(1000);
                    }
                }
                else
                {
                    lcd.print("Time Schedule Is");
                    lcd.setCursor(0, 2);
                    lcd.print(" Started");
                    delay(1000);
                    digitalWrite(relay_Pin, LOW);
                    Serial.println("l");
                    lcd.clear();
                    lcd.clear();
                    lcd.print("Time Schedule");
                    lcd.setCursor(0, 2);
                    lcd.print("Motor ON");
                    delay(1000);
                    digitalWrite(relay_Pin, HIGH);
                    Serial.println("L");
                    lcd.clear();
                    lcd.print("Time Schedule");
                    lcd.setCursor(0, 2);
                    lcd.print("Motor OFF");
                    delay(600);
                }
            }
            else
            {
                Serial.println("r");
                digitalWrite(relay_Pin, HIGH);
                Serial.println("L");
                lcd.clear();
                lcd.print("Rain Detected");
                lcd.setCursor(0, 2);
                lcd.print("Motor OFF");
                delay(1000);
            }
        }
        else if (dt == 'A')
        {
            digitalWrite(relay_Pin, LOW);
            Serial.println("l");
            lcd.clear();
            lcd.print("APP Control");
            lcd.setCursor(0, 2);
            lcd.print("Motor ON");
            delay(1000);
        }
        else if (dt == 'a')
        {
            digitalWrite(relay_Pin, HIGH);
            Serial.println("L");
            lcd.clear();
            lcd.print("APP Control");
            lcd.setCursor(0, 2);
            lcd.print("Motor OFF");
        }
        else if (dt == 'S')
        {
            lcd.print("Time Schedule Is");
            lcd.setCursor(0, 2);
            lcd.print(" Started");
            delay(1000);
            digitalWrite(relay_Pin, LOW);
            Serial.println("l");
            lcd.clear();
            lcd.clear();
            lcd.print("Time Schedule");
            lcd.setCursor(0, 2);
            lcd.print("Motor ON");
            delay(1000);
            digitalWrite(relay_Pin, HIGH);
            Serial.println("L");
            lcd.clear();
            lcd.print("Time Schedule");
            lcd.setCursor(0, 2);
            lcd.print("Motor OFF");
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
                        digitalWrite(relay_Pin, LOW);
                        Serial.println("l");
                        lcd.clear();
                        lcd.print("Low water level");
                        lcd.setCursor(0, 2);
                        lcd.print("Motor ON");
                        delay(1000);
                    }
                    else
                    {
                        digitalWrite(relay_Pin, HIGH);
                        Serial.println("L");
                        lcd.clear();
                        lcd.print("Water Level Ok");
                        lcd.setCursor(0, 2);
                        lcd.print("Motor OFF");
                        delay(1000);
                    }
                }
                else
                {
                    lcd.print("Time Schedule Is");
                    lcd.setCursor(0, 2);
                    lcd.print(" Started");
                    delay(1000);
                    digitalWrite(relay_Pin, LOW);
                    Serial.println("l");
                    lcd.clear();
                    lcd.clear();
                    lcd.print("Time Schedule");
                    lcd.setCursor(0, 2);
                    lcd.print("Motor ON");
                    delay(1000);
                    digitalWrite(relay_Pin, HIGH);
                    Serial.println("L");
                    lcd.clear();
                    lcd.print("Time Schedule");
                    lcd.setCursor(0, 2);
                    lcd.print("Motor OFF");
                    delay(600);
                }
            }
            else
            {
                Serial.println("r");
                digitalWrite(relay_Pin, HIGH);
                Serial.println("L");
                lcd.clear();
                lcd.print("Rain Detected");
                lcd.setCursor(0, 2);
                lcd.print("Motor OFF");
                delay(1000);
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
                    digitalWrite(relay_Pin, LOW);
                    Serial.println("l");
                    lcd.clear();
                    lcd.print("Low water level");
                    lcd.setCursor(0, 2);
                    lcd.print("Motor ON");
                    delay(1000);
                }
                else
                {
                    digitalWrite(relay_Pin, HIGH);
                    Serial.println("L");
                    lcd.clear();
                    lcd.print("Water Level Ok");
                    lcd.setCursor(0, 2);
                    lcd.print("Motor OFF");
                    delay(1000);
                }
            }
            else
            {
                lcd.print("Time Schedule Is");
                lcd.setCursor(0, 2);
                lcd.print(" Started");
                delay(1000);
                digitalWrite(relay_Pin, LOW);
                Serial.println("l");
                lcd.clear();
                lcd.clear();
                lcd.print("Time Schedule");
                lcd.setCursor(0, 2);
                lcd.print("Motor ON");
                delay(1000);
                digitalWrite(relay_Pin, HIGH);
                Serial.println("L");
                lcd.clear();
                lcd.print("Time Schedule");
                lcd.setCursor(0, 2);
                lcd.print("Motor OFF");
                delay(600);
            }
        }
        else
        {
            Serial.println("r");
            digitalWrite(relay_Pin, HIGH);
            Serial.println("L");
            lcd.clear();
            lcd.print("Rain Detected");
            lcd.setCursor(0, 2);
            lcd.print("Motor OFF");
            delay(1000);
        }
    }
}
void a()
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
            }
            else
            {
                Serial.println("r");
                digitalWrite(relay_Pin, HIGH);
            }
        }
        else if (dt == 'A')
        {
            digitalWrite(relay_Pin, LOW);
            Serial.println("l");
        }
        else if (dt == 'a')
        {
            digitalWrite(relay_Pin, HIGH);
            Serial.println("L");
        }
        else if (dt == 'S')
        {
            digitalWrite(relay_Pin, LOW);
            Serial.println("l");
            delay(1000);
            digitalWrite(relay_Pin, HIGH);
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
                    if (moisture_sensor_value < 50)
                    {
                        digitalWrite(relay_Pin, LOW);
                        Serial.println("l");
                    }
                    else
                    {
                        digitalWrite(relay_Pin, HIGH);
                        Serial.println("L");
                    }
                }
                else
                {
                    digitalWrite(relay_Pin, LOW);
                    Serial.println("l");
                    delay(1000);
                    digitalWrite(relay_Pin, HIGH);
                    Serial.println("L");
                    delay(600);
                }
            }
            else
            {
                Serial.println("r");
                digitalWrite(relay_Pin, HIGH);
            }
        }
    }
    else
    {
        Serial.println("F");
        digitalWrite(relay_Pin, LOW);
    }
}
