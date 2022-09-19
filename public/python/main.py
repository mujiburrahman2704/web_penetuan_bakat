import pandas as pd
import os
from scipy.sparse import csr_matrix
from sklearn.model_selection import train_test_split
from sklearn.pipeline import Pipeline
from sklearn.compose import ColumnTransformer
from jcopml.pipeline import num_pipe, cat_pipe


def run(id):
    if id == 1:
        pq = pd.read_csv("C:/xampp/htdocs/data/public/python/Data/verbal.csv")
    if id == 2:
        pq = pd.read_csv("C:/xampp/htdocs/data/public/python/Data/numerik.csv")
    if id == 3:
        pq = pd.read_csv(
            "C:/xampp/htdocs/data/public/python/Data/skolastik.csv")
    if id == 4:
        pq = pd.read_csv("C:/xampp/htdocs/data/public/python/Data/spasial.csv")
    if id == 5:
        pq = pd.read_csv("C:/xampp/htdocs/data/public/python/Data/bahasa.csv")
    if id == 6:
        pq = pd.read_csv("C:/xampp/htdocs/data/public/python/Data/abstrak.csv")
    df = pq
    X = df.drop(columns="Hasil")
    y = df.Hasil

    X_train, X_test, y_train, y_test = train_test_split(
        X, y, test_size=0.2, random_state=42)
    X_train.shape, X_test.shape, y_train.shape, y_test.shape
    preprocessor = ColumnTransformer([
        ('categoric', cat_pipe(encoder='onehot'), [
         'Soal1', 'Soal2', 'Soal3', 'Soal4', 'Soal5', 'Soal6', 'Soal7', 'Soal8', 'Soal9', 'Soal10']),
    ])
    from sklearn.naive_bayes import GaussianNB
    pipeline = Pipeline([
        ('prep', preprocessor),
        ('algo', GaussianNB())
    ])
    pipeline.fit(X_train, y_train)
    pipeline.score(X_train, y_train)
    pipeline.score(X_test, y_test)
    # print('Akurasi : ', pipeline.score(X_train, y_train))
    # print('Akurasi : ', pipeline.score(X_train, y_train))
    from jcopml.plot import plot_confusion_matrix
    plot_confusion_matrix(X_train, y_train, X_test, y_test, pipeline)

    X_pred = pd.read_csv("C:/xampp/htdocs/data/public/python/Data/data.csv")
    pipeline.predict(X_pred)
    X_pred["Hasil"] = pipeline.predict(X_pred)
    hasil = pd.DataFrame(X_pred)
    for row in hasil.itertuples():
        data = row.Hasil
    print(data)
