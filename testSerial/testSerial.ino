char rx_byte;

void setup() {
  Serial.begin(9600);
}

void loop() {
  // Mesure la tension sur la broche A0
  int valeur_brute = analogRead(A0);

  float R = 1023.0/((float)valeur_brute)-1.0;
  R = 100000.0*R;
  
  // Transforme la mesure (nombre entier) en température via un produit en croix
  int temperature_celsius = 1.0/(log(R/100000.0)/4275+1/298.15)-273.15;
  
  // Envoi la mesure au PC pour affichage et attends 250ms
  Serial.println(temperature_celsius);
  delay(1000);
}
