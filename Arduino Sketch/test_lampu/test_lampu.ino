int ledPin1 = 8;
int ledPin2 = 9;
int ledPin3 = 10;// the pin that the LED is attached to - change this if you have a separate LED connected to another pin
int incomingByte;      // a variable to read incoming serial data into
 
void setup() {
  // initialize serial communication:
  Serial.begin(9600);
  // initialize the LED pin as an output:
  pinMode(ledPin1, OUTPUT);
  pinMode(ledPin2, OUTPUT);
  pinMode(ledPin3, OUTPUT);
}
 
void loop() {
  // see if there's incoming serial data:
  if (Serial.available() > 0) {
    // read the oldest byte in the serial buffer:
    incomingByte = Serial.read();
    Serial.println(incomingByte);
    if (incomingByte == 'A') {
    digitalWrite(ledPin1, HIGH);
    }
     else if (incomingByte == 'B') {
     digitalWrite(ledPin2, HIGH);
      }
    else if (incomingByte == 'C') {
      digitalWrite(ledPin3, HIGH);
    }
   
     else if (incomingByte == 'D') {
      digitalWrite(ledPin1, LOW);
    }
    else if (incomingByte == 'E') {
     digitalWrite(ledPin2, LOW);
      }
      else if (incomingByte == 'F') {
     digitalWrite(ledPin3, LOW);
      }
  }
}
