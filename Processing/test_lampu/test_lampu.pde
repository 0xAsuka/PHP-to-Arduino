import processing.serial.*;
 Serial port;
 
 void setup()  {
    port = new Serial(this, "/dev/ttyACM0", 9600);
 
}
 void draw() {
 
  String onoroff[] = loadStrings("http://localhost/skb/result.txt");
  print(onoroff[0]);
 
  if (onoroff[0].equals("1") == true) {
    println(" - MENGHIDUPKAN LAMPU 1");
    port.write('A');
 
  } 
  else if (onoroff[0].equals("2") == true) {
    println(" - MENGHIDUPKAN LAMPU 2");
    port.write('B');
 
  }
   else if (onoroff[0].equals("3") == true) {
  println(" - MENGHIDUPKAN LAMPU 3");
    port.write('C');
  }
  else if (onoroff[0].equals("0") == true) {
  println(" - MEMATIKAN LAMPU 1");
    port.write('D');
  }
  else if (onoroff[0].equals("4") == true) {
  println(" - MEMATIKAN LAMPU 2");
    port.write('E');
  }
  else if (onoroff[0].equals("5") == true) {
  println(" - MEMATIKAN LAMPU 3");
    port.write('F');
  }
 
  delay(1000);
 }
