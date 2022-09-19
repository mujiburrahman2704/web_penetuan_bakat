import mysql.connector
import json
import pandas as pd
from main import run

conn = mysql.connector.connect(user="root", password="",
                               host="localhost", database="naive")

# sql_query = pd.read_sql_query("Select Soal1, Soal2, Soal3, Soal4, Soal5, Soal6, Soal7, Soal8, Soal9, Soal10, Hasil from datasets",conn)
# df = pd.DataFrame(sql_query)
# df.to_csv (r'C:/xampp/htdocs/data/public/python/Data/verbal.csv', index = False) # place 'r' before the path name
sql_query2 = pd.read_sql_query(
    "Select Soal1, Soal2, Soal3, Soal4, Soal5, Soal6, Soal7, Soal8, Soal9, Soal10, Hasil from datates", conn)
df = pd.DataFrame(sql_query2)
df.to_csv(r'C:/xampp/htdocs/data/public/python/Data/data.csv',
          index=False)  # place 'r' before the path name
run(3)
