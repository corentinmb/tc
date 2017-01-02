
char rx_byte;
int sensorPin = A15;
int sensorValue = 0;
int state = 0; // 1 occupied / 0 free
// the setup function runs once when you press reset or power the board
void setup() {
  // initialize digital pin LED_BUILTIN as an output.
  pinMode(12, OUTPUT);
  pinMode(13,OUTPUT);
  Serial.begin(9600);
}
 // Lumiere 650 - 200 eteint

void loop() {
  sensorValue = analogRead(sensorPin);
  process(sensorValue);
}

void process(int sv) {
    if(sv >= 500){
      state = 1;
      lightRed();
    }
    else {
      state = 0;
      lightGreen();
    }
}

void lightGreen() {
  digitalWrite(12, LOW);
  digitalWrite(13, HIGH);
  //delay(1000);
  Serial.println(state);
}

void lightRed() {
  digitalWrite(12, HIGH);
  digitalWrite(13, LOW);
  //delay(1000);
  Serial.println(state);
}

