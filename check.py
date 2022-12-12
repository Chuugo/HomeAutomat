import mysql.connector
import RPi.GPIO as GPIO
import time
import re

mydb = mysql.connector.connect(
  host="localhost",
  user="pythonzsuser",
  password="123",
  database="home_automat"
)

mycursor = mydb.cursor()

mycursor.execute("SELECT onoff FROM button")

myresult = mycursor.fetchone()
print (myresult)
asd = myresult
#for x in myresult:
#print(myresult)
if asd == "0":
  print("i can sleep in piece")
else:
  print("no you cant") 
  print(asd)
#mycursor.close()
  
'''
for x in myresult:
  print(x)
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)


GPIO.setup(3, GPIO.OUT)
print("off")
GPIO.output(3, GPIO.LOW)
time.sleep(5)

print("on")
GPIO.output(3,GPIO.HIGH)
time.sleep(5)
'''
