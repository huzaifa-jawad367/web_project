from deepface import DeepFace
import matplotlib.pyplot as plt
from mtcnn import MTCNN
import cv2 as cv

from keras.models import Sequential
from keras.layers import Conv2D, ZeroPadding2D, Activation, Input, concatenate
from keras.models import Model
from keras.layers import BatchNormalization
from keras.layers import MaxPooling2D, AveragePooling2D
from keras.layers import Concatenate
from keras.layers import Lambda, Flatten, Dense
from keras.initializers import glorot_uniform
from keras.layers import Layer
from keras import backend as K
import os
import numpy as np
from numpy import genfromtxt
import pandas as pd
import tensorflow as tf
import PIL
from PIL import Image

from keras.models import model_from_json

K.set_image_data_format('channels_last')

def img_to_encoding(image_path, model):

    img = tf.keras.preprocessing.image.load_img(image_path, target_size=(160,160))
    
    img = np.around(np.array(img) / 255.0, decimals=12)
    x_train = np.expand_dims(img, axis=0)
    embedding = model.predict_on_batch(x_train)
    return embedding / np.linalg.norm(embedding, ord=2)

def face_recog(imagePath):
    json_file = open('storage\keras-facenet-h5\model.json', 'r')
    loaded_model_json = json_file.read()
    json_file.close()
    model = model_from_json(loaded_model_json)
    model.load_weights('storage\keras-facenet-h5\model.h5')

    FRmodel = model

    return img_to_encoding(imagePath, model)