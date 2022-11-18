from flask import Flask, request, jsonify
from sklearn.preprocessing import StandardScaler
from sklearn.metrics import confusion_matrix
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import LabelEncoder
from sklearn.neighbors import KNeighborsClassifier
from gevent.pywsgi import WSGIServer
scaler = StandardScaler()  
import numpy as np
import pandas as pd
import sklearn
import pickle
app = Flask(__name__)

def makeModel():
    X = pd.read_csv('dataset/X.csv')
    y = pd.read_csv('dataset/y.csv')
    # membagi data set menggunakan sklearn
    X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.2, random_state = 25)
    scaler.fit(X_train)
    X_train = scaler.transform(X_train)  
    X_test = scaler.transform(X_test)
    #membuat model KNN
    Model_KNN = KNeighborsClassifier(algorithm='brute')
    from sklearn.model_selection import GridSearchCV
    parameters_KNN = {
        'n_neighbors': (1,10, 1),
        'leaf_size': (20,40,1),
        'p': (1,2),
        'weights': ('uniform', 'distance'),
        'metric': ('minkowski', 'chebyshev')}
                    
    # with GridSearch
    grid_search_KNN = GridSearchCV(
        estimator=Model_KNN,
        param_grid=parameters_KNN,
        scoring = 'accuracy',
        n_jobs = -1,
        cv = 5
    )
    grid_search_KNN.fit(X_train,y_train.values.ravel())
    # Saving model to disk
    pickle.dump(grid_search_KNN, open('model/Model_KNN.pkl','wb'))

@app.route('/api', methods=['POST'])
def predict():
    '''
    ukt = request.form['ukt']
    nilai_ukt = request.form['nilai_ukt']
    penghasilan_ayah = request.form['penghasilan_ayah']
    penghasilan_ibu = request.form['penghasilan_ibu']
    total_penghasilan = request.form['total_penghasilan']
    jml_anggota = request.form['jml_anggota']
    totalPenghasilanJmlAnggota = request.form['totalPenghasilanJmlAnggota']
    status_ayah = request.form['status_ayah']
    status_ibu = request.form['status_ibu']
    status_kip = request.form['status_kip']
    status_tdk_mampu = request.form['status_tdk_mampu']
    status_kks = request.form['status_kks']'''

    request_data = request.get_json()
    ukt = request_data['ukt']
    nilai_ukt = request_data['nilai_ukt']
    penghasilan_ayah = request_data['penghasilan_ayah']
    penghasilan_ibu = request_data['penghasilan_ibu']
    total_penghasilan = request_data['total_penghasilan']
    jml_anggota = request_data['jml_anggota']
    totalPenghasilanJmlAnggota = request_data['total_penghasilan_perjumlahAnggota']
    status_ayah = request_data['status_ayah']
    status_ibu = request_data['status_ibu']
    status_kip = request_data['status_kip']
    status_tdk_mampu = request_data['status_tdk_mampu']
    status_kks = request_data['status_kks']
    
    makeModel()
    model = pickle.load(open('model/Model_KNN.pkl', 'rb'))

    databaru = {'UKT' : [ukt],'NILAI UKT' : [nilai_ukt],'PENGHASILAN AYAH' : [penghasilan_ayah], 'PENGHASILAN IBU' : [penghasilan_ibu], 'TOTAL PENGHASILAN' : [total_penghasilan], 'Jumlah Anggota Keluarga (Ayah, Ibu dan Anak)' : [jml_anggota],'TOTAL PENGHASILAN/JUMLAH ANGGOTA KEL' :[totalPenghasilanJmlAnggota],'STATUS AYAH' :[status_ayah],'STATUS IBU' :[status_ibu],'STATUS KIP' :[status_kip],'STATUS TDK MAMPU' :[status_tdk_mampu],'STATUS KKS' :[status_kks] }
    baru = pd.DataFrame(data=databaru)
    X_Baru = scaler.transform(baru)
    prediction = model.predict(X_Baru)
    prediction = int(prediction)
    return jsonify(prediction)

@app.route('/api/all', methods=['POST'])
def predictAll():

    predictionArray = []
    request_data = request.get_json()
    for x in range (len(request_data)):
        ukt = request_data[x]['ukt']
        nilai_ukt = request_data[x]['nilai_ukt']
        penghasilan_ayah = request_data[x]['penghasilan_ayah']
        penghasilan_ibu = request_data[x]['penghasilan_ibu']
        total_penghasilan = request_data[x]['total_penghasilan']
        jml_anggota = request_data[x]['jml_anggota']
        totalPenghasilanJmlAnggota = request_data[x]['total_penghasilan_perjumlahAnggota']
        status_ayah = request_data[x]['status_ayah']
        status_ibu = request_data[x]['status_ibu']
        status_kip = request_data[x]['status_kip']
        status_tdk_mampu = request_data[x]['status_tdk_mampu']
        status_kks = request_data[x]['status_kks']
        
        makeModel()
        model = pickle.load(open('model/Model_KNN.pkl', 'rb'))

        databaru = {'UKT' : [ukt],'NILAI UKT' : [nilai_ukt],'PENGHASILAN AYAH' : [penghasilan_ayah], 'PENGHASILAN IBU' : [penghasilan_ibu], 'TOTAL PENGHASILAN' : [total_penghasilan], 'Jumlah Anggota Keluarga (Ayah, Ibu dan Anak)' : [jml_anggota],'TOTAL PENGHASILAN/JUMLAH ANGGOTA KEL' :[totalPenghasilanJmlAnggota],'STATUS AYAH' :[status_ayah],'STATUS IBU' :[status_ibu],'STATUS KIP' :[status_kip],'STATUS TDK MAMPU' :[status_tdk_mampu],'STATUS KKS' :[status_kks] }
        baru = pd.DataFrame(data=databaru)
        X_Baru = scaler.transform(baru)
        prediction = model.predict(X_Baru)
        prediction = int(prediction)
        predictionArray.append(prediction)
    return jsonify(predictionArray)

@app.route('/', methods=['POST'])
def index():
    request_data = request.get_json()
    for x in range(len(request_data)):
        nama = (request_data[x]['nama'])
        ukt = (request_data[x]['ukt'])
        print(nama)
    return request_data[0]
if __name__ == '__main__':
    app.run(port=5000, debug=True)