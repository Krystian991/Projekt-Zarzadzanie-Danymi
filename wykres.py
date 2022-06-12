import matplotlib.pyplot as plt
import pandas as pd
import mysql.connector
conn = mysql.connector.connect(
        user = "root",
        password = "",
        host = "127.0.0.1",
        database = "projekt",
    )
def mysql_select_all():
    cursor = conn.cursor()
    sql = "SELECT Marka,time FROM pojazdy"
    cursor.execute(sql)
    result = cursor.fetchall()
    df = pd.DataFrame(list(result),columns=["Marka","time"])
    
    x = df.time
    y = df.Marka
    plt.xlabel("Time")
    plt.ylabel("Marka")
    plt.plot(x, y)
    plt.savefig('test.png')
    cursor.close()

print("Start")

mysql_select_all()